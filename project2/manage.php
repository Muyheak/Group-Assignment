<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css"> 
    <title>Log In</title>
</head>

<?php
include("header.inc");
include("nav.inc");
include("setting.php");
?>

<main class="section">

  <h2>HR Manager - Manage Applications</h2>

  <form method="post" action="manage.php">
    <label>Job Reference Number:</label>
    <input type="text" name="jobref">

    <label>First Name:</label>
    <input type="text" name="fname">

    <label>Last Name:</label>
    <input type="text" name="lname">

    <div class="button-group">
      <input type="submit" name="list_all" value="List All EOIs">
      <input type="submit" name="filter_job" value="Filter by Job Reference">
      <input type="submit" name="filter_name" value="Filter by Applicant Name">
      <input type="submit" name="delete_job" value="Delete by Job Reference">
    </div>
  </form>
  <div class="logout-container">
    <form method="post" action="logout.php">
      <input type="submit" value="Log Out" class="logout-btn">
    </form>
  </div>

<?php
$conn = @mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  echo "<p>❌ Database connection failed.</p>";
  exit;
}

if (isset($_POST["list_all"])) {
  $query = "SELECT * FROM eoi";
} elseif (isset($_POST["filter_job"])) {
  $jobref = $_POST["jobref"];
  $query = "SELECT * FROM eoi WHERE jobref = '$jobref'";
} elseif (isset($_POST["filter_name"])) {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $query = "SELECT * FROM eoi WHERE fname LIKE '%$fname%' AND lname LIKE '%$lname%'";
} elseif (isset($_POST["delete_job"])) {
  $jobref = $_POST["jobref"];
  $query = "DELETE FROM eoi WHERE jobref = '$jobref'";
  if (mysqli_query($conn, $query)) {
    echo "<p>✅ Records with job reference '$jobref' deleted.</p>";
  } else {
    echo "<p>❌ Delete failed.</p>";
  }
  $query = "";
}

if (!empty($query)) {
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    echo "<div class='table-container'>";
    echo "<table>";
    echo "<thead>
            <tr>
              <th>EOI#</th>
              <th>Job Ref</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Status</th>
              <th>Change Status</th>
            </tr>
          </thead><tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>{$row['EOInumber']}</td>";
      echo "<td>{$row['jobref']}</td>";
      echo "<td>{$row['fname']} {$row['lname']}</td>";
      echo "<td>{$row['email']}</td>";
      echo "<td>{$row['phone']}</td>";
      echo "<td>{$row['status']}</td>";
      echo "<td>
        <form method='post' action='manage.php'>
          <input type='hidden' name='update_id' value='{$row['EOInumber']}'>
          <select name='new_status'>
            <option value='New'>New</option>
            <option value='Current'>Current</option>
            <option value='Final'>Final</option>
          </select>
          <input type='submit' name='update_status' value='Update'>
        </form>
      </td>";
      echo "</tr>";
    }

    echo "</tbody></table></div>";
  } else {
    echo "<p>No records found.</p>";
  }
}

if (isset($_POST["update_status"])) {
  $eoi_id = $_POST["update_id"];
  $new_status = $_POST["new_status"];
  $query = "UPDATE eoi SET status = '$new_status' WHERE EOInumber = $eoi_id";

  if (mysqli_query($conn, $query)) {
    echo "<p>✅ Status updated successfully for EOI# $eoi_id.</p>";
  } else {
    echo "<p>❌ Failed to update status.</p>";
  }
}

mysqli_close($conn);
?>

</main>

<?php include("footer.inc"); ?>
