<?php $bg = get_field('hero_bg'); ?>

<section id="hero" class="hero" style="background-image:url('<?php echo esc_url($bg); ?>')">
    <div class="hero__inner animate">
        <h1><?php the_field('hero_title'); ?></h1>
        <p><?php the_field('hero_subtitle'); ?></p>
        <a href="#cta" class="btn"><?php the_field('hero_button'); ?></a>
    </div>
</section>
