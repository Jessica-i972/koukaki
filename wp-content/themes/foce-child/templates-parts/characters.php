<?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',
);
$characters_query = new WP_Query($args);
?>
<div class="swiper appear-3">

    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <?php
        while ($characters_query->have_posts()) {
            $characters_query->the_post();
        ?>
            <!-- Slides -->
            <div class="swiper-slide" data-swiper-autoplay="2000">
                <figure><?= get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                    <figcaption>
                        <?= the_title(); ?>
                    </figcaption>
                </figure>
            </div>
        <?php }; ?>
    </div>
</div>