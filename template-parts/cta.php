<section id="cta" class="cta">
    <div class="container animate">

        <div class="cta__content">
            <h2><?php the_field('cta_title'); ?></h2>
            <p><?php the_field('cta_text'); ?></p>
        </div>

        <div class="cta__form">
            <?php echo do_shortcode('[wpforms id="80"]'); ?>
        </div>

    </div>
</section>
