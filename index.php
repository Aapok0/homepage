<!-- HTTP to HTTPS script -->
<?php
   include("includes/https.php");
?>

<!DOCTYPE html>
<html lang="fi-FI">
    <head>
        <title>Aapo Kokko - Curriculum Vitae</title>
        <link rel="stylesheet" type="text/css" href="CSS/CV-page.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
    </head>
    <body>
        <!-- The main box for all info -->
        <div class="box">
            <nav class="navigation">
                <ul class="nobullets">
                    <li class="nav-items"><a class="nav-items" href="https://aapokokko.fi/v1/">HOME</a></li>
                    <li class="nav-items"><a class="nav-items" href="resume.php">RESUME</a></li>
                    <li class="nav-items"><a class="nav-items" href="skills.php">SKILLS</a></li>
                    <li class="nav-items"><a class="nav-items" href="references.php">REFERENCES</a></li>
                  	<li class="nav-items"><a class="nav-items" href="../index.php">HOME V2</a></li>
                </ul>
            </nav>
            
            <img class="self" src="pictures/portrait.jpg" alt="picture">
            
            <div class="headlines">
                <h1>Hi, I'm <span class="highlight">Aapo Kokko</span></h1>
                <h2>DevOps Engineer</h2>
            </div>

            <article class="infotext">
                <p>
                    Note: This is an old version of the homepage and is no longer updated.
                </p>
            </article>

            <div class="contact">
                email : aapo@kokot.fi
            </div>

            <section class="socials">
                <a class="git" href="https://github.com/Aapok0"></a>
                <a class="link" href="https://www.linkedin.com/in/aapokokko/"></a>
                <a class="insta" href="https://www.instagram.com/apezo_/"></a>
            </section>
        </div>
    </body>
</html>