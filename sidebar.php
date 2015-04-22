<aside id="sidebar" class="small-12 medium-3 columns">
	<div class="row">
		<h1 class="text-center"><a href="<?php echo home_url(); ?>"><img class="blogroll_logo small-8 small-centered medium-12 columns" src="<?php echo get_template_directory_uri(); ?>/assets/img/blogroll-logo.svg" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>"></a></h1>
	</div>
	<?php do_action('foundationPress_before_sidebar'); ?>
	<?php dynamic_sidebar("sidebar-widgets"); ?>
	<?php do_action('foundationPress_after_sidebar'); ?>
</aside>
