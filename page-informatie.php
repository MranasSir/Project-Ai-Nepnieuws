<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TruthLens - Informatie</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
</head>

<body>

<header>
    <nav class="nav-index">
        <a class="logo" href="<?= site_url('/') ?>">TruthLens</a>
        <ul>
            <li><a href="<?= site_url('/') ?>">Nieuws</a></li>
            <li><a href="<?= site_url('/quiz/') ?>">Quiz</a></li>
            <li><a href="<?= site_url('/informatie/') ?>">Informatie</a></li>
        </ul>
    </nav>
</header>

<main class="info-main">
    <h1>Over TruthLens</h1>
    
    <div class="story">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>

    <section class="team">
        <h2>Ons team</h2>
        <div class="team-boxes">
            <div class="team-box">
                <h3>Anas</h3>
                <p>CEO - WordpressManager</p>
            </div>
            <div class="team-box">
                <h3>Anass</h3>
                <p>CO-founder - QuizManager</p>
            </div>
        </div>
    </section>

    <section class="help">
        <h2>Help Center</h2>
        <p>Vind antwoorden op veelgestelde vragen</p>
        <div class="help-box">
            <h3>Hoe herken ik nepnieuws?</h3>
            <p>Controleer altijd de bron van het artikel, kijk of andere betrouwbare websites hetzelfde nieuws melden en let op opvallende of sensationele koppen.</p>
        </div>
        <div class="help-box">
            <h3>Waarom verspreidt nepnieuws zich zo snel?</h3>
            <p>Nepnieuws speelt vaak in op emoties zoals angst, boosheid of nieuwsgierigheid. Hierdoor delen mensen het sneller zonder de informatie te controleren.</p>
        </div>
        <div class="help-box">
            <h3>Wat moet ik doen als ik nepnieuws tegenkom?</h3>
            <p>Deel het bericht niet verder en controleer eerst de feiten. Je kunt eventueel anderen informeren dat de informatie onjuist of misleidend is.</p>
        </div>
        <div class="help-box">
            <h3>Waarom wordt AI gebruikt om nepnieuws te verspreiden?</h3>
            <p>AI maakt het mogelijk om snel grote hoeveelheden tekst, afbeeldingen en video's te maken. Daardoor kunnen misleidende berichten sneller en op grotere schaal worden verspreid.</p>
        </div>
        <div class="help-box">
            <h3>Hoe herken ik AI-gegenereerde afbeeldingen?</h3>
            <p>Let op vreemde details zoals onnatuurlijke handen, vervormde achtergronden, vreemde teksten op borden of onduidelijkheid in gezichten en schaduwen.</p>
        </div>
        
        <div class="message">
            <img src="<?= get_template_directory_uri() ?>/images/email-icon.png" alt="icoon">
            <h3 id="vragen">Nog vragen?</h3>
            <form action="" id="form">
                <input type="text" placeholder="jouw bericht.." id="bericht">
                <button id="mes-but">Stuur bericht</button>
            </form>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>About</h3>
            <p>Your go-to source for the latest news and insights across technology, business, and lifestyle.</p>
        </div>
        <div class="footer-column">
            <h3>Quick Links</h3>
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact</a>
            <a href="#">Privacy Policy</a>
        </div>
        <div class="footer-column">
            <h3>Categories</h3>
            <a href="#">Technology</a>
            <a href="#">Business</a>
            <a href="#">Lifestyle</a>
            <a href="#">Travel</a>
        </div>
        <div class="footer-column">
            <h3>Follow Us</h3>
            <a href="#">Twitter</a>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
        </div>
    </div>
    <div class="footer-bottom">
        © 2026 TruthLens. All rights reserved.
    </div>
</footer>

</body>
</html>