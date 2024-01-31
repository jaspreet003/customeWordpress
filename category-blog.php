<?php get_header();?> 

<section class="page-wrap">

<div class="container">

THIS IS CATEGORY BLOG TEMPLATE. WORDPRESS FOLLOW HIERARCHY AND AUTHOMATICALLY DISPLAY THIS TEMPLATE OF BLOG FIRST AND THEN GO TO ARCHIEVE.PHP WHICH IS DEFAULT ONE.

<h1><?php single_cat_title();?></h1> 

<?php get_template_part('includes/section','archieve');?>

<?php previous_posts_link();?>
<?php next_posts_link();?>

<?php
/*
//****** this is pagenated way to add next previous with page numbers *****


global $wp_query;

$big = 999999999; //need an unlikely integer

echo paginate_links(array(

	'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
	'format'=> '?paged=%#%',
	'current'=> max(1, get_query_var('paged')),
	'total' => $wp_query->max_num_pages 
) );
*/
?>


</div>
</section>
<?php get_footer();?>