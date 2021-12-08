<section class="eventos wrapper">
    <?php
    $args = [
        'numberposts' => 6,
        'post_status' => 'publish',
        'post_type' => 'eventos'
    ];
    ?>
    <h2 class="eventos-title">Eventos</h2>
    <div class="eventos-box">
        <?php
        $recent_posts = wp_get_recent_posts($args);
        foreach ($recent_posts as $current) :
            $category = get_the_category($current['ID']);
            $category = (count($category)) ? $category[0]->name : '';

            /**
             * @todo Passar as datas para acf
             * 
             */
        ?>
            <div class="evento-item">
                <div class="evento-header">
                    <span class="evento-date">
                        <img class="evento-calendar" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendario.svg" alt="">
                        20/09 a 23/09
                    </span>
                    <span class="evento-time">
                        <img class="evento-clock" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/relogio.svg" alt="">
                        19h às 21h30
                    </span>
                </div>
                <a href="<?php echo get_the_permalink($current['ID']); ?>" class="evento-link"><?php echo $current['post_title']; ?></a>
                <a href="<?php echo get_the_permalink($current['ID']); ?>" class="evento-see">Leia +</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>