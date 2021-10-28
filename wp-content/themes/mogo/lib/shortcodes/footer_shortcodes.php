<?php


/**
 * Logo
 */
function footer_logo_shortcode()
{
    $home_url = home_url('/');
    $logo = get_field('footer_logo', 'options');



    if (empty($logo)) {
        return false;
    }



    $html_logo = <<<HTML
<div class="footer__logo">
	<a href="{$home_url}">
		<img src="{$logo}" alt="footer logo">
	</a>
</div>
HTML;

    return $html_logo;
}
add_shortcode('footer-logo', 'footer_logo_shortcode');

/**
 * Description
 */
function footer_description()
{
    $description = get_field('footer_description', 'options');

    if (empty($description)) {
        return false;
    }

    $block = '<p class="footer__about">' . $description . '</p>';

    return $block;
}
add_shortcode('footer-description', 'footer_description');


/**
 * Follow us
 */
function footer_followus()
{
    $socials_list = get_field('footer_social', 'options');
    $form_footer =  do_shortcode('[contact-form-7 id="58" title="Contact form footer"]');


    if (empty($socials_list)) {
        return false;
    }

    $html_social = null;
    foreach ($socials_list as $social_item) {

        $social_icon = $social_item['social_icon'];
        $social_url = $social_item['social_url'];


        $html_social .= '<a href="' . $social_url . '">' . $social_icon . '</a>';
    }
    $block = <<<HTML
   <div class="footer__social">
       <div class="number_followers"><span>15k</span> followers</div>
       <div class="follow_us"><span>Follow Us:</span>  {$html_social}</div> 
       <div class="footer_form">{$form_footer}</div>
   </div>
   HTML;

    return $block;
}
add_shortcode('footer-follow-us', 'footer_followus');


/**
 * Blog
 */
function footer_blog()
{

    $block = <<<HTML
    <a href="#"> <div class="footer__blog">
       <div class="blog_img"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884rHDsW8yqbsyN.png" alt=""></div>
       <div class="blog_txt">
           <div class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
           <div class="blog_date">Jan 9, 2016</div>
       </div> 
   </div> </a>
    <a href="#"> <div class="footer__blog">
       <div class="blog_img"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884lejLFH9MN8IC.png" alt=""></div>
       <div class="blog_txt">
           <div class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
           <div class="blog_date">Jan 9, 2016</div>
       </div> 
   </div> </a>
    <a href="#"> <div class="footer__blog">
       <div class="blog_img"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884P2smgicsZFyn.png" alt=""></div>
       <div class="blog_txt">
           <div class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
           <div class="blog_date">Jan 9, 2016</div>
       </div> 
   </div> </a>
   HTML;

    return $block;
}
add_shortcode('footer-blog', 'footer_blog');



/**
 * Instagram
 */
function footer_insta()
{

    $block = <<<HTML
   <div class="footer__insta">
       <div class="insta_img"><a href="#"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884M86ovdhbiWKi.png" alt=""></a></div>
       <div class="insta_img"><a href="#"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884MBqau4DkSE9K.png" alt=""></a></div>
       <div class="insta_img"><a href="#"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884MJE3ABUJPTO1.png" alt=""></a></div>
   </div>
   <div class="footer__insta">
       <div class="insta_img"><a href="#"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884nwL7ruku3rhJ.png" alt=""></a></div>
      <a href="#"> <div class="insta_img"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884qnJlwaL4TA8x.png" alt=""></a></div>
      <a href="#"> <div class="insta_img"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884rRdzNWx35XGc.png" alt=""></a></div>
   </div>
   <div class="footer__insta">
       <div class="insta_img"><a href="#"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-7884W4HBOgfC6WDb.png" alt=""></a></div>
       <div class="insta_img"><a href="#"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-78841zcS1oLCjBr4.png" alt=""></a></div>
       <div class="insta_img"><a href="#"><img src="http://mogo.local/wp-content/uploads/2021/10/photos-78842fGoMmtuD5Z9.png" alt=""></a></div>
   </div>
   <div class="insta-link"><a href="#"><span>View more photos</span></a></div>
HTML;

    return $block;
}
add_shortcode('footer-insta', 'footer_insta');
