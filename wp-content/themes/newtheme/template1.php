<?php
/** Template Name: template1
 * Created by PhpStorm.
 * User: trial
 * Date: 1/27/2015
 * Time: 12:59 PM
 */
?>

<?php get_header(); ?>
<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 text-center sidebar-left">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seperator-large">
		<div class="col-lg-12 col-md-12 col-sm-4 col-xs-12 text-center sidebar-left-logo">
			<img src="<?php echo get_template_directory_uri() ?>/images/logo.png" class="">
		</div>
		<div class="col-lg-12 col-md-12 col-sm-8 hidden-xs sidebar-menu">
			<ul class="list-unstyled">
				<li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT THE TEST</a></li>
				<li><a href="#">LOREM IPSUM</a></li>
				<li><a href="#">PAGE WITH CONTENTS</a></li>
			</ul>
		</div>
	</div>
	<div class="visible-md col-md-12 sidebar-right">
	<div class="col-lg-12 seperator-small">
		<?php get_search_form();?>
		<div class="sidebar-right-content text-center">
			<div class="sidebar-right-content-header">Recent Post</div>
			<ul class="list-unstyled">
				<?php
				$archive_query = new WP_Query('showposts=5');
				while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div class="sidebar-right-content text-center">
			<div class="sidebar-right-content-header">Recent Comments</div>
			<ul class="recent-posts list-unstyled">
				<?php
				$archive_query = new WP_Query('showposts=5');
				while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
</div>
<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 main-content">
	<div class="col-lg-12 seperator-large">
		<div class="main-content-top">
			<div class="">
				<div class="col-xs-8">
					<div class="row main-content-top-header">
						<ul class="list-unstyled">
							<li>December 2,2014</li>
							<li>Loui Byrdziak</li>
						</ul>
					</div>
					<div class="row main-content-top-details">
						<ul>
							<li><a href="#">How to customize Flounder</a></li>
							<li><a href="#">Common Flounder customizations</a></li>
							<li><a href="#">Plugin Hooks in Flounder</a></li>
							<li><a href="#">Changelog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-4 main-content-top-banner">
				</div>
			</div>
		</div>
		<div class="main-content-bot">
			<div class="col-xs-8">
				<div class="row main-content-bot-header">
					Markup: HTML Tags and Formatting
				</div>
				<div class="row main-content-bot-details">
					
					<h2>Headings</h2>

					<h1>Header one</h1>
					
					<h2>Header two</h2>
					
					<h3>Header three</h3>
					
					<h4>Header four</h4>
					
					<h5>Header five</h5>
					
					<h6>Header six</h6>

					Single line blockqoute:

					<blockquote>"Stay hungry. Stay Foolish"</blockquote>

					Multi line blockqoute with cite reference:

					<blockquote>"People think focus means saying yes to the thing you've got to focus on. But that's not what it means at all. It means sating no to the hundred other good ideas that there are. You have to pock carefully. I'm actually as proud of the things we haven't done as the things I have done. Innocation is sayung no to 1,000 things. <i> Steve jobs - Apple Worldwide Developers' Confenrence, 1997</i>"</blockquote>

				</div>
			</div>
			<div class="col-xs-4 main-content-bot-banner">
				<div class="row">
					<div class="main-content-bot-logo">
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
	</div>
</div>
<div class="col-lg-3 hidden-md col-sm-12 col-xs-12 sidebar-right">
	<div class="col-lg-12 seperator-small">
		<?php get_search_form();?>
		<div class="sidebar-right-content text-center">
			<div class="sidebar-right-content-header">Recent Post</div>
			<ul class="list-unstyled">
				<?php
				$archive_query = new WP_Query('showposts=5');
				while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div class="sidebar-right-content text-center">
			<div class="sidebar-right-content-header">Recent Comments</div>
			<ul class="recent-posts list-unstyled">
				<?php
				$archive_query = new WP_Query('showposts=5');
				while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>
