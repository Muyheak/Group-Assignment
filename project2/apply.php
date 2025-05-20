<?php include 'header.inc'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css"> <!--Link to CSS file-->
    <title>Job Application</title>
</head>
<body>
    <?php include 'nav.inc'; ?> <!--Include navigation bar-->

    <h1 class="header-complete">Complete your application!</h1>



    
    <form class="grid-layout" action="https://mercury.swin.edu.au/it000000/formtest.php" method="post" enctype="multipart/form-data"> <!--Form creation that connects to the given database that will storage the result-->
        <div class="container">
<label for="job_ref_number">Job Reference Number: </label>
<select name="job_ref_number" id="job_ref_number" required>
    <option value="" disabled selected>Select a job reference number</option>

    <?php
    // Database connection details
    $host = "localhost";
    $user = "root"; // default for XAMPP/MAMP
    $password = ""; // default is empty in XAMPP
    $dbname = "jobs"; // your database name

    // Connect to the database
    $conn = new mysqli($host, $user, $password, $dbname);

    // Check for connection error
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch job reference numbers
    $sql = "SELECT job_ref_number FROM jobs ORDER BY sort_order ASC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ref = htmlspecialchars($row["job_ref_number"]);
            echo "<option value=\"$ref\">$ref</option>";
        }
    } else {
        echo "<option disabled>No jobs available</option>";
    }

    $conn->close();
    ?>
</select><br><br>
           <!--Input for the user to fill in with personal information-->
            <label for="firstname">First Name: </label>
            <input type="text" id="firstname" name="firstname" maxlength="20" placeholder="Please enter your first name" required><br><br>

            <label for="lastname">Last Name: </label>
            <input type="text" id="lastname" name="lastname" maxlength="20" placeholder="Please enter your last name" required><br><br>

            <label for="dob">Date of Birth: </label>
            <input type="text" id="dob" name="dob" pattern="\d{2}/\d{2}/\d{4}" placeholder="dd/mm/yyyy" required><br><br> <!--Date of birth with required pattern-->

            <fieldset>
                <legend>Select your Gender: </legend>
                <div class="radio-row">
                    <label for="Male">Male</label>
                    <input type="radio" id="Male" name="gender" value="Male" required>

                    <label for="Female">Female</label>
                    <input type="radio" id="Female" name="gender" value="Female">

                    <label for="Other">Other</label>
                    <input type="radio" id="Other" name="gender" value="Other">
                </div>
            </fieldset>
        </div>

        <div class="container2">
            <label for="Street">Street Address: </label>
            <input type="text" id="Street" name="Street" maxlength="50" placeholder="Please enter your street address" required><br>

            <label for="suburb">Suburb/Town: </label>
            <input type="text" id="suburb" name="suburb" maxlength="50" placeholder="Please enter your suburb/town" required><br>

            <label for="state">State: </label>
            <select name="state" id="state" required>
                <option value="" disabled selected>Select your State</option>
                <option value="ACT">ACT</option>
                <option value="NSW">NSW</option>
                <option value="NT">NT</option>
                <option value="QLD">QLD</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="VIC">VIC</option>
                <option value="WA">WA</option>

            </select><br>

            <label for="postcode">Postcode: </label>
            <input type="text" id="postcode" name="postcode" pattern="^(0[2-9]\d{2}|[1-9]\d{3})$" maxlength="4" placeholder="0200-9999" required><br> <!--Postcode with required pattern-->
            <label for="email">Email address: </label>
            <input type="email" id="email" name="email" placeholder="example@mail.com" required><br>

            <label for="phone">Phone Number: </label>
            <input type="tel" id="phone" name="phone" pattern="(\d\s?){8,12}$" minlength="8" maxlength="12" placeholder="0000000000" required><br>
        </div>

        <fieldset class="checkbox-group">
            <legend>Technical Skills: </legend>
            <div class="tskills">
            <p>Operating Systems, programming languages and others</p>
            </div>
            <div class="checkbox-row">
                <label for="skill1">Windows</label>
                <input type="checkbox" id="skill1" name="skills[]" value="Windows">
                <label for="skill2">Linux</label>
                <input type="checkbox" id="skill2" name="skills[]" value="Linux">

                <label for="skill3">iOS/MacOS</label>
                <input type="checkbox" id="skill3" name="skills[]" value="MacOS">

                <label for="skill4">Android</label>
                <input type="checkbox" id="skill4" name="skills[]" value="Android">
                <label for="pr1">Java</label>
                <input type="checkbox" id="pr1" name="skills[]" value="Java">

                <label for="pr2">Python</label>
                <input type="checkbox" id="pr2" name="skills[]" value="Python">

                <label for="pr3">C++</label>
                <input type="checkbox" id="pr3" name="skills[]" value="C++">

                <label for="pr4">JavaScript</label>
                <input type="checkbox" id="pr4" name="skills[]" value="JavaScript">

                <label for="pr5">HTML/CSS</label>
                <input type="checkbox" id="pr5" name="skills[]" value="HTML/CSS">

                <label for="pr6">SQL</label>
                <input type="checkbox" id="pr6" name="skills[]" value="SQL">
            </div>
        </fieldset>

        <fieldset class="other-skills">
            <legend>Other Skills: </legend>
            <textarea id="otherskills" name="otherskills" rows="8" cols="50" maxlength="300" placeholder="Please provide any other additional skills."></textarea>
        </fieldset>

        <div class="submit"> <!--Submit button to end Form-->
            <input type="submit" value="Apply">
        </div>
    </form>

<?php include 'footer.inc'; ?>
</body>
</html>