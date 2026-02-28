<section id="expert" class="expert">
    <div class="expert-slider animate">

        <?php
        if (function_exists('get_field')) {

            $slides = [];

            // Первый (без цифры)
            if (get_field('expert_name')) {
                $slides[] = [
                    'photo' => get_field('expert_photo'),
                    'name'  => get_field('expert_name'),
                    'role'  => get_field('expert_role'),
                    'text'  => get_field('expert_text'),
                ];
            }

            // Остальные: expert_1, expert_2, expert_3
            for ($i = 1; $i <= 5; $i++) {

                if (get_field("expert_{$i}_name")) {
                    $slides[] = [
                        'photo' => get_field("expert_{$i}_photo"),
                        'name'  => get_field("expert_{$i}_name"),
                        'role'  => get_field("expert_{$i}_role"),
                        'text'  => get_field("expert_{$i}_text"),
                    ];
                }
            }

            foreach ($slides as $index => $expert) :
        ?>

                <div class="expert-slide <?php echo $index === 0 ? 'is-active' : ''; ?>">

                    <div class="expert__photo">
                        <?php
                        $photo = $expert['photo'];

                        if ($photo) {

                            if (is_array($photo)) {
                                echo '<img src="' . esc_url($photo['url']) . '" alt="">';
                            } elseif (is_numeric($photo)) {
                                echo wp_get_attachment_image($photo, 'large');
                            } else {
                                echo '<img src="' . esc_url($photo) . '" alt="">';
                            }

                        }
                        ?>
                    </div>

                    <div class="expert__content">
                        <h2><?php echo esc_html($expert['name']); ?></h2>
                        <span><?php echo esc_html($expert['role']); ?></span>
                        <p><?php echo esc_html($expert['text']); ?></p>
                    </div>

                </div>

        <?php endforeach;

            if (count($slides) > 1) :
        ?>

                <button class="expert-nav prev">‹</button>
                <button class="expert-nav next">›</button>

        <?php
            endif;
        }
        ?>

    </div>
</section>
