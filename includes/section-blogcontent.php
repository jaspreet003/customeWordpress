<?php if(have_posts()): while(have_posts()): the_post();?>


	<?php
// 1. to check the date format, seach online date tag for php
	 ?>

	<p><?php echo get_the_date('l jS F, Y');?></p>

	<?php the_content();?>



	<?php
// 2. get the author firstname and last name

	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');
	?>
	<p>Posted by <?php echo $fname;?> <?php echo $lname;?></p>



	<?php 
//3. to use the tag 
	
	/* 
	Each post can contain multiple tags and visitors can click on a tag to find similar posts that have that same tag
	*/
	$tags = get_the_tags();

	foreach($tags as $tag):?>

		<a href="</php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
			<?php echo $tag->name;?>
		</a>

	<?php endforeach;?>




	<?php 
//4. to add categories of posts and then click on the category and find all the post realted to that category there loke games, cooking etc.

	$categories = get_the_category();
	foreach($categories as $cat):?>

		<a href="<?php echo get_category_link($cat-> term_id);?>">
			<?php echo $cat->name;?>
		</a>

	<?php endforeach;?>


	<?php
//5. add comment section template
	// comments_template();
	?>


<?php endwhile; else: endif;?>