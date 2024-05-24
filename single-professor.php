<?php get_header(); ?>

<?php

$relatedProfessors = new WP_Query(
    array(
        'posts_per_page' => -1,
        'post_type' => 'professor',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'related_programs',
                'compare' => 'LIKE',
                'value' => '"' . get_the_ID() . '"'
            )
        )
    )
);

if ($relatedProfessors->have_posts()) {
    echo "<hr class='section-break'>";
    echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Events</h2>';

    while ($relatedProfessors->have_posts()) {
        $relatedProfessors->the_post(); ?>
        <div class="event-summary">
            <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month">
                    <?php

                    $eventDate = new DateTime(get_field('event_date'));
                    echo $eventDate->format('M');

                    ?>
                </span>
                <span class="event-summary__day">
                    <?php
                    echo $eventDate->format('d');
                    ?>
                </span>
            </a>
            <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a
                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p>
                    <?php
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo wp_trim_words(get_the_content(), 15);
                    }
                    ?>
                    <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
                </p>
            </div>
        </div>
    <?php }
}

while (have_posts()) {
    the_post();

    pageBanner();

    ?>

    <div class="container container--narrow page-section">
        <div class="generic-content">

            <div class="row group">
                <div class="one-third">
                    <?php the_post_thumbnail('professorPortrait'); ?>
                </div>
                <div class="two-third">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>

        <hr class="section-break">

        <?php

        $relatedPrograms = get_field('related_programs');

        if ($relatedPrograms) {
            echo "<h2 class='headline headline--medium'>Subject(s) Taught</h2>";
            echo '<ul class="link-list min-list">';
            foreach ($relatedPrograms as $program) { ?>
                <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program); ?></a></li>
            <?php }
            echo "</ul>";
        }
        ?>

    </div>

<?php }

?>

<?php get_footer(); ?>