<section id="services" class="services">
    <div class="container animate">

        <h2><?php the_field('services_title'); ?></h2>

        <div class="services__grid">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <?php if (get_field("service_{$i}_title")) : ?>
                    <div class="service">
                        <h3><?php the_field("service_{$i}_title"); ?></h3>
                        <p><?php the_field("service_{$i}_desc"); ?></p>
                        <span><?php the_field("service_{$i}_price"); ?></span>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>

    </div>
</section>
