<?php get_header(); ?>

<!-- start start  -->
<section class="career--start" data-aos="fade-right" data-aos-duration="2000">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 career--start-wrapper">
                <h1 class="career--start-wrapper__heading">Sprawdź,
                    co się u nas dzieje!</h1>
                <p class="career--start-wrapper__description">Zapoznaj się z artykułami tworzonymi przez naszych ekspertów
                    oraz informacjami prasowymi. </p>
                <a class="btnOutlineCustom" href="#sectionJobList" role="button">Więcej</a>
            </div>

            <div class="col-lg-7 career--start-photo">
                <img class="d-block w-100" src="./assets/img/career.png">
            </div>
        </div>
    </div>
</section>
<!-- start end  -->

<section class="">
    <div class="container">
        <div class="row justify-content-center blog-post-list g-4">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <article class="blog-post bg-light">
                            <h2 class="blog-post-title"><?= get_the_title() ?></h2>
                            <p class="blog-post-meta text-muted"><?= get_the_date() ?> - autor: <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?= get_the_author_meta('display_name'); ?></a></p>

                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>

                            <p><?= get_the_excerpt() ?></p>
                            <div class="blog-post-read-more">
                                <a href="<?= get_the_permalink(); ?>" class="btnOutlineCustom">Przeczytaj więcej...</a>
                            </div>

                        </article>

                    </div>
                <?php endwhile; ?>
        </div>
        <?php the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('<i class="fas fa-arrow-left"></i>'),
                    'next_text' => __('<i class="fas fa-arrow-right"></i>'),
                    'class' => "pagination"
                )); ?>

    <?php else : ?>

        <div>Brak wpisów do wyświetlenia</div>

    <?php endif; ?>

    </div>
</section>
<!-- blog posts end -->

<?php get_footer(); ?>