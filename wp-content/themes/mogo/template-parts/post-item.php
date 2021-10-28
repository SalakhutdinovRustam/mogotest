<?php
$post_url = get_permalink();
$post_title = get_the_title();
$thumbnail = get_the_post_thumbnail($id, 'news-thumb');
$html_thumbnail = (!empty($thumbnail)) ? '<a class="blog__item__pic  set-bg" href="' . $post_url . '">' . $thumbnail . '</a>' : null;
$post_date = get_the_date();
$content = get_the_content();
$author = get_the_author();

?>
<?php if (!empty($thumbnail)) { ?>

    <div class="blog__item">
        <div class="blog__item__pic  set-bg" data-setbg=""><?php echo $html_thumbnail ?>
            <div class="blog__item__date">
                <span class="entry-date"><?php echo get_the_date('d'); ?></span>
                <span class="entry-month"><?php echo get_the_date('M'); ?></span>

            </div>
        </div>
        <div class="blog__item__text">
            <div class="blog__item__title">
                <span><a href="<?php echo $post_url ?>"><?php echo $post_title ?></a></span>
                <p><?php echo $author ?></p>
            </div>
            <div class="blog__item__excerpt">
                <p><?php echo has_excerpt() ? wp_kses_post(get_the_excerpt()) : wp_kses_post(wp_trim_words(get_the_content(), 20)); ?></p>
            </div>
            <div class="blog__item__details">
                <span> <a href="<?php echo $post_url ?>">Детальніше</a></span>
            </div>


        </div>
    </div>
<?php } ?>