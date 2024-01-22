<!-- HTTP to HTTPS -->
<?php
   include("includes/https.php");
?>

<!DOCTYPE html>
<html lang="fi-FI">
    <head>
        <title>Aapo Kokko - Resume</title>
        <link rel="stylesheet" type="text/css" href="CSS/CV-page.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
    </head>
    <body>
        <!-- Larger main box -->
        <div class="box-large">
            <nav class="navigation">
                <ul class="nobullets">
                    <li class="nav-items"><a class="nav-items" href="https://aapokokko.fi/v1/">HOME</a></li>
                    <li class="nav-items"><a class="nav-items" href="resume.php">RESUME</a></li>
                    <li class="nav-items"><a class="nav-items" href="skills.php">SKILLS</a></li>
                    <li class="nav-items"><a class="nav-items" href="references.php">REFERENCES</a></li>
                    <li class="nav-items"><a class="nav-items" href="../index.php">HOME V2</a></li>
                </ul>
            </nav>
            <!-- Article for the large box -->
            <article class="large">
                <section class="resume">
                    <h2 class="highlight">Education</h2>
                    <h3>Bachelor of engineering, Metropolia</h3>
                    <ul class="nobullets">
                        <li>2020-2022</li>
                        <li>Information Technology</li>
                        <li>Major: Health and Well-being Technology</li>
                    </ul>
                    <h3>Bachelor of science in technology, Aalto University</h3>
                    <ul class="nobullets">
                        <li>2012-2016</li>
                        <li>Electrical and Electronics Engineering</li>
                        <li>Major: Bionics, Minor: IT</li>
                    </ul>
                </section>

                <section class="resume">
                    <h2 class="highlight">Work experience</h2>
                    <h3>Trainee Consultant</h3>
                    <ul class="nobullets">
                        <li>Metropolia University of Applied Sciences</li>
                        <li>11.2022 - </li>
                    </ul>
                    <h3>Student assistant</h3>
                    <ul class="nobullets">
                        <li>Metropolia University of Applied Sciences</li>
                        <li>9.2021 - 12.2021</li>
                        <li>Tasks: Organizing a mathematics and physics workshop for first year student to work on course assignments.</li>
                    </ul>
                    <h3>Office secretary (IT)</h3>
                    <ul class="nobullets">
                        <li>Insurance Court of Finland</li>
                        <li>6.-7.2019, 2.-8.2020, 9.-12.2020</li>
                        <li>Tasks: Helping with the deployment, training and support for a new case management system, and general IT support and office work.</li>
                    </ul>
                    <h3>Documentation specialist (trainee)</h3>
                    <ul class="nobullets">
                        <li>Gemalto Oy (Thales Group)</li>
                        <li>8.2019 - 2.2020</li>
                        <li>Tasks: Reading through existing company documentation and supplier documentation and rewrote them into a new platform.</li>
                    </ul>
                    <h3>Newspaper delivery</h3>
                    <ul class="nobullets">
                        <li>Posti Group Oyj</li>
                        <li>4.-5.2011, 4.-8.2012, 6.-8.2013</li>
                    </ul>
                    <h3>ICT technician</h3>
                    <ul class="nobullets">
                        <li>Elan IT Resource Oy</li>
                        <li>3.2012</li>
                    </ul>
                    <h3>Mover</h3>
                    <ul class="nobullets">
                        <li>Muuttohaukat Ky</li>
                        <li>6.2009 - 3.2010</li>
                    </ul>
                </section>

                <section class="resume">
                    <h2 class="highlight">Voluntary work</h2>
                    <h3>Aalto University's Guild of Electrical Engineering</h3>
                    <ul class="nobullets">
                        <li>2012-2018</li>
                        <li>Tutoring, student advocacy work, corporate relations and work on the guild
                            magazine. In the guild council three times and guild board once. Also two
                            years of halloped (student representative) work.</li>
                    </ul>
                </section>
            </article>
        </div>
    </body>
</html>
