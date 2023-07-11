<?php
get_header();

pageBanner(array(
    'title' => 'All Events',
    'subtitle' => 'Our complete schedule'
)) ?>


<div class="container container--narrow page-section">
    <?php

    $today = date('Ymd');
    $pageEvents = new WP_Query(
        array(
            'posts_per_page' => -1,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric'
                )
            )
        )
    );

    while ($pageEvents->have_posts()) {
        $pageEvents->the_post(); ?>
        <div class="event-summary">
            <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month">
                    <?php
                    $eventDate = new DateTime(get_field('event_date'));

                    echo $eventDate->format('M'); ?>
                </span>
                <span class="event-summary__day">
                    <?php echo $eventDate->format('d'); ?>
                </span>
            </a>
            <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p> <?php echo wp_trim_words(get_the_content(), 18); ?> <a href=" <?php the_permalink(); ?> " class="nu gray">Learn more</a></p>
            </div>
        </div>
    <?php
    }
    echo paginate_links(array(
        'total' => $pageEvents->max_num_pages
    ));
    ?>
    <hr class="section-break">
    <p class="event-summary__title headline headline--tiny"><a href="<?php echo site_url('/past-events'); ?>">our past events</a></p>

</div>

<?php
get_footer();
?>


<!-- $eventDate = new DateTime (get_field('event_date')); -->