<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>

<?php wp_head();?>

</head>
<body>
	
	<header>

		<div class="container">
		<?php 
		wp_nav_menu(
			array(

				'theme_location' => 'top-menu',
				//'menu' => 'Top Bar' //this top bar is the menu name of wordpress. it is not reliable as it is hardcorded.
				'menu_class' => 'top-bar'
			)
		);
		?>
	</div>
	</header>
</body>
</html>      



