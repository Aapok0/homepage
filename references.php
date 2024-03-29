<!-- HTTP to HTTPS -->
<?php
   include("includes/https.php");
?>

<!DOCTYPE html>
<html lang="fi-FI">
    <head>
        <title>Aapo Kokko - References</title>
        <link rel="stylesheet" type="text/css" href="CSS/CV-page.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel='icon' type='image/x-icon' href='./favicon.ico'>
        <meta charset="UTF-8">
    </head>
    <body>
        <!-- The main box for all info -->
        <div class="box">
            <nav class="navigation">
                <ul class="nobullets">
<?php
                    echo '<li class="nav-items"><a class="nav-items" href="https://' . $_SERVER['HTTP_HOST']  . '/v1/">HOME</a></li>';
?>
                    <li class="nav-items"><a class="nav-items" href="resume.php">RESUME</a></li>
                    <li class="nav-items"><a class="nav-items" href="skills.php">SKILLS</a></li>
                    <li class="nav-items"><a class="nav-items" href="references.php">REFERENCES</a></li>
<?php
                    echo '<li class="nav-items"><a class="nav-items" href="https://' . $_SERVER['HTTP_HOST']  . '/v2/">HOME V2</a></li>';
?>
                </ul>
            </nav>

            <article class="references">
              <section>
                    <h2 class="highlight">Metropolia University of Applied Sciences</h2>
                    <h3>Juha Havukumpu</h3>
                    <ul class="nobullets">
                        <li>Senior Lecturer</li>
                        <li>Phone: +358 505004877</li>
                        <li>Email: juha.havukumpu@metropolia.fi</li>
                    </ul>
                </section>

                <section class="gap">
                    <h2 class="highlight">Thales DIS Finland Oy (ex-Gemalto)</h2>
                    <h3>Eduardo Hofmann</h3>
                    <ul class="nobullets">
                        <li>Manager</li>
                        <li>Phone: +358 505641231</li>
                        <li>Email: eduardo.hofmann@thalesgroup.com</li>
                    </ul>
                    <h3>Olli Rautiainen</h3>
                    <ul class="nobullets">
                        <li>Senior colleague</li>
                        <li>Phone: +358 989414456</li>
                        <li>Email: olli.rautiainen@thalesgroup.com</li>
                    </ul>
                </section>
            </article>
        </div>
    </body>
</html>
