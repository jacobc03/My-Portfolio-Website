<?php
/**
 * Template Name: Landing Template
 */



get_header(); 

    echo '<div id="primary" class="content-area">';
            echo '<div id="content" class="site-content" role="main">';

?>
<div class="fade">
    <img src="/wp-content/themes/portfolio/images/splash.png">
    <div class="top">
        <div class="logo"></div>
        <div class="menu"></div>
    </div>
    <div class="title"></div>
    <div class="buttons">
        <div class="icon" style="background-image: url(/wp-content/themes/portfolio/images/icon01.png);"></div>
        <div class="icon" style="background-image: url(/wp-content/themes/portfolio/images/icon02.png);"></div>
        <div class="icon" style="background-image: url(/wp-content/themes/portfolio/images/icon03.png);"></div>
    </div>
</div>

<?php 

         echo '</div>';//#content .site-content
        echo '</div>';//#primary .content-area

get_footer();?>