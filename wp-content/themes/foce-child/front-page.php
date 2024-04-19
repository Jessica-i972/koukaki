<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner appear">
        <!-- Ajout de la vidéo en background -->
        <video id="background-video" autoplay loop muted poster="<?php echo home_url() .'/wp-content/uploads/2024/03/header-img.png'; ?>">
            <source src="<?php echo home_url() .'/wp-content/uploads/2024/03/StudioKoukaki-videoheadersansson1.mp4'; ?>">
        </video>
        <img class="banner__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        <!-- Version Mobile -->
        <div class="hero-mobile">
            <img src="<?php echo home_url() .'/wp-content/uploads/2024/03/header-img.png'; ?>" alt="Photo illustration hero du site Koukaki">
        </div>
    </section>
    <section id="story" class="story appear">
        <h2><span class="animated-title">L'histoire</span></h2>
        <article class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
       
        <article id="characters" class="appear">
            <div class="main-character">
                <h3><span class="animated-title">Les personnages</span></h3>
            </div>
            <!-- Ajout template partiel du carrousel -->
            <?php get_template_part('templates-parts/characters'); ?>          
        </article>
        <article id="place" class="appear">
            <div id="lieu" class="place__bg">
                <h3><span class="animated-title">Le Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
            <div class="cloud">
                <img class="little_cloud mycloud" src="<?php echo home_url() .'/wp-content/uploads/2024/03/little_cloud.png';?>" alt="petit nuage qui se déplace">
                <img class="big_cloud mycloud" src="<?php echo home_url() .'/wp-content/uploads/2024/03/big_cloud.png'?>" alt="gros nuage qui se déplace">
            </div>
        </article>
    </section>
    <section id="studio" class="appear">
        <h2><span class="animated-title">Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>
    <section id="oscars" class="appear">
        <div>
            <p class="oscars__title">Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</p>
            <img class="oscars__bg" src="<?php echo home_url() .'/wp-content/uploads/2024/03/orange_oscars_bg.png';?>" alt="Background orange section Nominations aux Oscars">
        </div>
        <span><img class="oscars__logo" src="<?php echo home_url() .'/wp-content/uploads/2024/03/logo-oscars.png';?>" alt="logo des Oscars">
        </span>
    </section>

</main><!-- #main -->

<?php
get_footer();
