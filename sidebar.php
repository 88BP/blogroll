<aside id="sidebar" class="small-12 large-4 columns">
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
	<?php do_action('foundationPress_before_sidebar'); ?>
	<?php dynamic_sidebar("sidebar-widgets"); ?>
	<?php do_action('foundationPress_after_sidebar'); ?>
</aside>
