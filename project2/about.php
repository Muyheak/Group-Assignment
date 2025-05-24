
<!--
Filename: About Us
Last Modified: 22/05/25 12:29PM
Description: This is the page that gives the views/users/readers some information about our team
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css"> 
    <title>About Us!</title>
</head>

<?php include 'header.inc'; ?>

<?php include 'nav.inc'; ?>

    <!--Group Info-->
    <section>
        <h2>Group Name & General Information</h2>
        <ul>
            <li><strong>Group Name:</strong> Nameless</li>
            <li><strong>Class Time:</strong> Thursday 12:30PM (This applies for all of us)</li>
            <li><strong>Tutor's Name:</strong> Rahul R</li>
        </ul>
    </section>

    <!--Student IDs-->
    <section>
        <h2>Student IDs</h2>
        <div class="student-id-card">
            <div class="student">
                <span class="name">Tomás Cornejo</span>
                <span class="id">105320237</span>
            </div>
            <div class="student">
                <span class="name">Muyheak Long</span>
                <span class="id">105231643</span>
            </div>
            <div class="student">
                <span class="name">Feiyu Ding (Luke)</span>
                <span class="id">105519750</span>
            </div>
            <div class="student">
                <span class="name">Cj Fu</span>
                <span class="id">105927887</span>
            </div>
        </div>
    </section>

    <!--Contributions-->
    <section>
        <h2>Contributions to the project</h2>
        <dl>
            <dt>Feiyu Ding (Luke)</dt>
            <dd>Homepage</dd>
            <dt>Muyheak Long</dt>
            <dd>Job Description Page</dd>
            <dt>Tomás Cornejo</dt>
            <dd>Job Applications Page</dd>
            <dt>Cj Fu</dt>
            <dd>About Us Page</dd>
            <dt>Whole Team</dt>
            <dd>Styling, management, processing, setting and enhancements (subject to change)</dd>
        </dl>
    </section>

    <!--Group Photo-->
    <section>
        <h2>This is us!</h2>
        <figure>
            <a href="images/group_photo.jpg">  <img src="../images/group_photo.jpg" alt="Photo of our group!" title="Filesize 7.72mb "></a>
            <figcaption>Our lovely, non-stop, hardworking team <strong>☝️(ﾟヮﾟ👆)</strong></figcaption>
        </figure>
    </section>

    <!--Interests-->
    <section>
        <h2>Our Interests</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Hobbies</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Muyheak</td>
                    <td>Cafe Hopping ☕</td>
                </tr>
                <tr>
                    <td>Tomás</td>
                    <td>Gaming, Volleyball and Music 🎮</td>
                </tr>
                <tr>
                    <td>Feiyu</td>
                    <td>Video games, Listening to music in various languages, Playing the drums, and Swimming 🎶</td>
                </tr>
                <tr>
                    <td>Cj</td>
                    <td>Watching movies & shows, Video Games, Card Games, Music and Pokemon 🃏</td>
                </tr>
            </tbody>
        </table>
    </section>
    
     <!-- Extra Information Section -->
     <section>
        <h2>Extra Information</h2>
        <p><strong>Interesting Fact:</strong> Feiyu is from Qingdao, a coastal city in China known for its beautiful beaches, seafood, and German-style architecture. Qingdao is a vibrant city located in eastern China. It is famous for its Tsingtao Brewery, scenic coastal views, and international sailing events. The city combines modern urban life with historical European-style buildings.</p>
    </section>

<?php include 'footer.inc'; ?>
