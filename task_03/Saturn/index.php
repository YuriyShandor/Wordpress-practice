<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo( 'name' ) ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Saturn is free PSD &amp; HTML template by @flamekaizar">
    <meta name="author" content="Afnizar Nur Ghifari">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css"> -->

		<?php wp_head(); ?>
</head>
<body>
	<?php get_header(  ) ?>

	<!-- Content -->
	<div class="content">
		<div class="container">
			<!-- Post -->

			<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>


			<div class="post">
				<!-- Heading -->
				<a href="<?php the_permalink(); ?>"><h1><?php the_title( ) ?></h1></a>
				<hr>
				<div class="in-content">
					<?php the_content(  ) ?>
				</div>
				<div class="foot-post">
					<div class="units-row">
					    <div class="unit-100">
					    	<strong>Info:</strong>
					    	<span><?php the_category(  ) ?></span>,
					    	<span><?php the_time( 'j F Y' ) ?></span>,
					    <div class="unit-100">
					    	<strong>COMMENTS:</strong>
					    	<a href="#"><?php comments_number(  ) ?></a>
					    </div>
					</div>
				</div>

			<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<!-- /post -->




		</div>
	</div>

	<?php get_footer(  ) ?>

	<!-- Javascript -->
	<!-- <script src="js/jquery.min.js"></script>
    <script src="js/kube.min.js"></script> -->

		<?php wp_footer(); ?>
</body>
</html>
