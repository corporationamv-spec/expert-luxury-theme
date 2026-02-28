<section id="reviews" class="reviews">
    <div class="container animate">

        <h2><?php the_field('reviews_title'); ?></h2>

        <div class="reviews__grid">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <?php if (get_field("review_{$i}_text")) : ?>
                    <div class="review">
                        <p class="review-text">“<?php the_field("review_{$i}_text"); ?>”</p>
                        <span class="review-name">— <?php the_field("review_{$i}_name"); ?></span>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>

    </div>
</section>
