<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "jobs";


$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$required_fields = ['job_ref_number', 'firstname', 'lastname', 'dob', 'gender', 'Street', 'suburb', 'state', 'postcode', 'email', 'phone'];
foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        die("Missing required field: " . $field);
    }
}


$job_ref = $_POST['job_ref_number'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$street = $_POST['Street'];
$suburb = $_POST['suburb'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$otherskills = isset($_POST['otherskills']) ? $_POST['otherskills'] : '';


function hasSkill($name) {
    return isset($_POST['skills']) && in_array($name, $_POST['skills']) ? 1 : 0;
}

$windows = hasSkill("Windows");
$linux = hasSkill("Linux");
$mac = hasSkill("MacOS");
$android = hasSkill("Android");
$java = hasSkill("Java");
$python = hasSkill("Python");
$cpp = hasSkill("C++");
$js = hasSkill("JavaScript");
$htmlcss = hasSkill("HTML/CSS");
$sql_skill = hasSkill("SQL");


$stmt = $conn->prepare("
    INSERT INTO eoi (
        `Job Reference Number`, `First Name`, `Last Name`, `Street Address`, `Suburb/Town`,
        `State`, `Postcode`, `Email Address`, `Phone Number`,
        `Windows`, `Linux`, `iOS/MacOS`, `Android`, `Java`, `Python`, `C++`, `JavaScript`, `HTML/CSS`, `SQLskill`,
        `Other Skills`
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}


$stmt->bind_param(
    "sssssssssiiiiiiiiis",
    $job_ref,
    $first_name,
    $last_name,
    $street,
    $suburb,
    $state,
    $postcode,
    $email,
    $phone,
    $windows,
    $linux,
    $mac,
    $android,
    $java,
    $python,
    $cpp,
    $js,
    $htmlcss,
    $sql_skill,
    $otherskills
);


if ($stmt->execute()) {
    echo "<h2>Application submitted successfully!</h2>";
} else {
    echo "<p>Error: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
