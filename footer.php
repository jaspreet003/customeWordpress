<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
</head>
<body>
	<footer>

		<div class="container">
		<?php 
		wp_nav_menu(
			array(

				'theme_location' => 'footer-menu',
				
				'menu_class' => 'footer-bar'
			)
		);
		?>
	</div>
	</footer>
<?php wp_footer();?>

</body>	
</html>
</body>
</html>