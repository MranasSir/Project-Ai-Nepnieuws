<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TruthLens</title>
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
<main class="main">

<div class="hero">
    <div class="hero-text">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</div>

<h2 id="h2">Artikelen</h2>  

<section class="article-section">

<?php
$posts = get_posts([
    'numberposts' => 6,
    'post_status' => 'publish'
]);

foreach ($posts as $post) {
    echo "<article>";
    echo "<h2>{$post->post_title}</h2>";
    echo "<p>" . $post->post_content . "</p>";
    echo "</article>";
}
?>

</section>

</main>
    <footer class="footer">
        <div class="footer-container">

            <div class="footer-column">
                <h3>About</h3>
                <p>
                    Your go-to source for the latest news and
                    insights across technology, business, and
                    lifestyle.
                </p>
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