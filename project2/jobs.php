<?php

$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "jobs";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Job Descriptions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../styles/style.css" rel="stylesheet">
</head>

<?php include 'header.inc'; ?>

<?php include 'nav.inc'; ?>
<body>
<main>

<!--use chatgpt to generate the connection with the database and -->
<!--ask chatgpt how to connect with sql database-->  
  <?php
  
  $sql = "SELECT * FROM jobs";
  $result = $conn->query($sql);

  
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<section class="job-description-container">';
      echo '<h2>' . htmlspecialchars($row["job_title"]) . ' (' . htmlspecialchars($row["job_ref_number"]) . ')</h2>';
      echo '<p><strong>Location:</strong> ' . htmlspecialchars($row["location"]) .
           ' | <strong>Salary:</strong> AUD $' . number_format($row["salary_min"]) .
           ' – $' . number_format($row["salary_max"]) . ' | <strong>Work Type:</strong> Full-time</p>';

      echo '<h3>About the Role</h3>';
      echo '<p>' . nl2br(htmlspecialchars($row["job_description"])) . '</p>';

      echo '<h3>Key Responsibilities</h3>';
      echo $row["Key_responsibilities"]; 

      echo '<h3>Essential Requirements</h3>';
      echo $row["job_requirements"]; 
      
      echo '<h3>Preferable Requirements</h3>';
      echo $row["Preferable_requirements"];

      echo '<a href="apply.php" class="cta-button">Apply Now</a>';
      echo '</section>';
    }
  } else {
    echo "<p>No job listings found.</p>";
  }

  $conn->close();
  ?>
</main>

<aside class="sidebar">
  <h3>For any further questions, feel free to contact us:</h3>
  <ul>
    <li><strong>Contact us:</strong> (+61) 12 345 678</li>
    <li><strong>Office location:</strong> 123 Burwood, Hawthorn</li>
  </ul>
</aside>

<?php include 'footer.inc'; ?>

</body>
</html>
