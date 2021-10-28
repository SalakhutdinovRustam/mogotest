<?php

get_header();
?>

<div class="container-fluid top-block-row" style="background-image: url(<?php echo $bg = get_field('top_background', 'options'); ?>)">

    <div class="container">
        <div class="row justify-content-center row_slider">
            <div class="our-team owl-carousel">

                <div class="item top-item">
                    <div class="col-lg-10  title-top ">
                        <h2>Creative Template</h2>
                        <h1>Welcome to MoGo</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 call_back">
                        <a href="#" class="square_btn">Learn more</a>
                    </div>
                    <div class="owl-txt">01 Intro</div>
                </div>
                <div class="item top-item">
                    <div class="col-lg-10  title-top ">
                        <h2>Creative Template</h2>
                        <h1>Welcome to MoGo2</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 call_back">
                        <a href="#" class="square_btn">Learn more</a>
                    </div>
                    <div class="owl-txt">02 Work</div>
                </div>
                <div class="item top-item">
                    <div class="col-lg-10  title-top ">
                        <h2>Creative Template</h2>
                        <h1>Welcome to MoGo3</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 call_back">
                        <a href="#" class="square_btn">Learn more</a>
                    </div>
                    <div class="owl-txt">03 About</div>
                </div>
                <div class="item top-item">
                    <div class="col-lg-10  title-top ">
                        <h2>Creative Template</h2>
                        <h1>Welcome to MoGo4</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 call_back">
                        <a href="#" class="square_btn">Learn more</a>
                    </div>
                    <div class="owl-txt">04 Contacts</div>
                </div>
            </div>
        </div>



    </div>
</div> <!-- top-block-row -->

<div class="container-fluid blog-block-row">
    <div class="container h-100">
        <div class="row blog_r">
            <div class="col-lg-12 col-md-12 blog_block ">


                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                $q = new WP_Query($args);
                ?>

                <?php if ($q->have_posts()) : ?>
                    <div class="blog-txt">
                        <div class="txt-subtitle">Our stories</div>
                        <div class="txt-title">Latest blog</div>
                    </div>
                    <div class="blog-post">
                        <?php while ($q->have_posts()) : $q->the_post(); ?>
                            <?php $thumbnail = get_the_post_thumbnail($id, 'news-thumb');
                            $html_thumbnail = (!empty($thumbnail)) ? '<a class="blog__item__pic  set-bg" href="' . $post_url . '">' . $thumbnail . '</a>' : null; ?>

                            <div class="post-announce">
                                <div class="pic">
                                    <?php echo $html_thumbnail ?>
                                    <div class="blog__item__date">
                                        <span class="entry-date"><?php echo get_the_date('d'); ?></span>
                                        <span class="entry-month"><?php echo get_the_date('M'); ?></span>
                                    </div>
                                </div>

                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="txt-excer"><?php echo has_excerpt() ? wp_kses_post(get_the_excerpt()) : wp_kses_post(wp_trim_words(get_the_content(), 15)); ?></div>
                                <div class="reviews">
                                    <div class="watch"><i class="fa fa-eye" aria-hidden="true"></i> <span> 345</span></div>
                                    <div class="comment"><i class="fa fa-commenting" aria-hidden="true"></i> <span> 675</span></div>
                                </div>

                            </div>

                        <?php endwhile; ?>
                    </div>
            </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
        </div>





    </div> <!-- blog_r -->


</div>
</div> <!-- blog-block-row -->

<?php
get_footer();
?>