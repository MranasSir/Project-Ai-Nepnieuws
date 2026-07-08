<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TruthLens - Quiz</title>
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

<main>
    <div class="card">
        <h2>TruthLens Quiz</h2>
        <p>Test jouw kennis over AI en nepnieuws!</p>
    </div>

    <div class="card">
        <h3>Voortgang</h3>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
    </div>

    <div class="card" id="quiz-card-container">
        <h2 class="question">Laden...</h2>

        <div class="option">Optie 1</div>
        <div class="option">Optie 2</div>
        <div class="option">Optie 3</div>
        <div class="option">Optie 4</div>
    </div>

    <div class="buttons">
        <button class="prev">Vorige</button>
        <button class="next">Volgende vraag</button>
    </div>

    <div class="stats">
        <div class="stat-card">
            <h2 id="total">0</h2>
            <p>Totale vragen</p>
        </div>

        <div class="stat-card">
            <h2 id="answered">0</h2>
            <p>Beantwoord</p>
        </div>

        <div class="stat-card">
            <h2 id="remaining">0</h2>
            <p>Resterend</p>
        </div>
    </div>
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

<script src="<?= get_template_directory_uri() ?>/main.js"></script>

</body>
</html>