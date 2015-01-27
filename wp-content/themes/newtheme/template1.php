<?php
/** Template Name: template1
 * Created by PhpStorm.
 * User: trial
 * Date: 1/27/2015
 * Time: 12:59 PM
 */
?>

<?php get_header(); ?>

<div class="col-lg-8 main-content">
	<div class="main-content-top row-fluid" >
		<div class="col-lg-9 fluid">
			<div class="col-lg-12 top-header fluid ">
				<ul class="tab-ul list-unstyled">
					<li>December 2,2014</li>
					<li>Loui Byrdziak</li>
				</ul>
			</div>
			<div class="col-lg-12 top-content">
				<ul>
					<li><a href="#">How to customize Flounder</a></li>
					<li><a href="#">Common Flounder customizations</a></li>
					<li><a href="#">Plugin Hooks in Flounder</a></li>
					<li><a href="#">Changelog</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 top-logo-banner">

		</div>
	</div>
	<div class="main-content-bot row-fluid" >
		<div class="col-lg-9 fluid">
			<div class="col-lg-12 bot-header ">
				Markup: HTML Tags and Formatting
			</div>
			<div class="col-lg-12 bot-content">

			</div>
		</div>
		<div class="col-lg-3 bot-logo-banner fluid">
			<div class="logo">

			</div>
			<ul class="list-unstyled">
				<li>January 11,2013</li>
				<li>DEMOUSER</li>
				<li>MARKUP</li>
				<li>CONTENT, CSS, FORMATTING, HTML, MARKUP</li>
			</ul>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<?php get_search_form();?>
	<div class="sidecontent text-center">
		<div class="side-header">Recent Post</div>
		<ul class="recent-posts list-unstyled">
			<?php
			$archive_query = new WP_Query('showposts=5');
			while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
	<div class="sidecontent text-center">
		<div class="side-header">Recent Comments</div>
		<ul class="recent-posts list-unstyled">
			<?php
			$archive_query = new WP_Query('showposts=5');
			while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
