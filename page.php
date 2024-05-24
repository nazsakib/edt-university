<?php get_header(); ?>

<?php

while (have_posts()) {
    the_post();

    pageBanner();

    ?>

    <div class="container container--narrow page-section">

        <?php
        $parentId = wp_get_post_parent_id(get_the_id());

        if ($parentId) { ?>

            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?php echo get_permalink($parentId); ?>"><i class="fa fa-home"
                            aria-hidden="true"></i> Back to
                        <?php echo get_the_title($parentId); ?></a>
                    <span class="metabox__main"><?php the_title(); ?></span>
                </p>
            </div>

        <?php }

        ?>

        <!-- <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About
                    Us</a> <span class="metabox__main"><?php the_title(); ?></span>
            </p>
        </div> -->

        <?php

        $testArray = get_pages(
            array(
                'child_of' => get_the_ID()
            )
        );
        if ($parentId or $testArray) { ?>

            <div class="page-links">
                <h2 class="page-links__title"><a
                        href="<?php echo get_permalink($parentId); ?>"><?php echo get_the_title($parentId); ?></a></h2>
                <ul class="min-list">
                    <?php

                    if ($parentId) {
                        $findChildrens = $parentId;
                    } else {
                        $findChildrens = get_the_id();
                    }
                    wp_list_pages(
                        array(
                            'title_li' => NULL,
                            'child_of' => $findChildrens
                        )
                    );

                    ?>
                </ul>
            </div>

        <?php } ?>

        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>

<?php }

?>

<?php get_footer(); ?>