<!-- HTTP to HTTPS -->
<?php
   include("includes/https.php");
?>

<!DOCTYPE html>
<html lang="fi-FI">
    <head>
        <title>Aapo Kokko - Skills</title>
        <link rel="stylesheet" type="text/css" href="CSS/CV-page.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel='icon' type='image/x-icon' href='./favicon.ico'>
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
                <section class="skills">
                    <h2 class="highlight">IT</h2>
                    <h3>Python</h3>
                    <div class="container">
                        <div class="progress-py">65%</div>
                    </div>
                    <h3>C</h3>
                    <div class="container">
                        <div class="progress-c">50%</div>
                    </div>
                    <h3>Javascript</h3>
                    <div class="container">
                        <div class="progress-js">15%</div>
                    </div>
                    <h3>Front-end</h3>
                    <div class="container">
                        <div class="progress-fe">50%</div>
                    </div>
                    <h3>Back-end</h3>
                    <div class="container">
                        <div class="progress-be">30%</div>
                    </div>
                    <h3>Matlab</h3>
                    <div class="container">
                        <div class="progress-mat">25%</div>
                    </div>
                    <h3>Office</h3>
                    <div class="container">
                        <div class="progress-off">85%</div>
                    </div>
                </section>

                <section class="skills">
                    <h2 class="highlight">Theory</h2>
                    <h3>Biotechnology</h3>
                    <div class="container">
                        <div class="progress-bio">55%</div>
                    </div>
                    <h3>Circuit analysis</h3>
                    <div class="container">
                        <div class="progress-circ">55%</div>
                    </div>
                    <h3>Signal analysis</h3>
                    <div class="container">
                        <div class="progress-sign">45%</div>
                    </div>
                    <h3>Mathematics</h3>
                    <div class="container">
                        <div class="progress-math">80%</div>
                    </div>
                </section>

                <section class="skills ">
                    <h2 class="highlight">Other</h2>
                    <h3>Documentation</h3>
                    <div class="container">
                        <div class="progress-doc">75%</div>
                    </div>
                    <h3>Teamwwork</h3>
                    <div class="container">
                        <div class="progress-team">90%</div>
                    </div>
                    <h3>Non-profit organizations</h3>
                    <div class="container">
                        <div class="progress-kilta">80%</div>
                    </div>
                </section>
            </article>
        </div>
    </body>
</html>
