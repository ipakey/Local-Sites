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
        $pageEvents->the_post();
        get_template_part('template-parts/content-event');
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