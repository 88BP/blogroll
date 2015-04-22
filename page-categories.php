<?php
/*
Template Name: Order by Categories
*/
get_header(); ?>

<div class="row">
	<?php get_sidebar(); ?>
<!--
	<div class="order-by">
		<ul>
			<li>Submitted by</li>
			<li>Alphabetical</li>
		</ul>
	</div>
-->
	<div class="list-all small-12 medium-9 columns" role="main">
		<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">

	<?php do_action('foundationPress_before_content'); ?>
	
	<?php
    // get all the categories from the database
    $cats = get_categories(); 

        // loop through the categries
        foreach ($cats as $cat) {
            // setup the cateogory ID
            $cat_id= $cat->term_id;
            // create a custom wordpress query
            query_posts("cat=$cat_id&posts_per_page=100");
            // start the wordpress loop!
            
            echo '<li>';
            echo '<ul class="accordion" data-accordion>';
            echo '<h2 class="catpg_cathdr">'.$cat->name.'</h2>';
            
            if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<li class="accordion-navigation">
				<a href="#post-<?php the_ID(); ?>"><h3 class="entry-title catpg_blog"><?php the_title(); ?><i class="fa fa-plus"></i></h3></a>
					<div <?php post_class('content') ?> id="post-<?php the_ID(); ?>">
						<?php do_action('foundationPress_page_before_entry_content'); ?>
						<div class="catpg_cont entry-content">
							<p><span>Description:</span> <?php echo get_the_content(); ?></p>
							<p><span>Submitted by:</span> <?php the_author(); ?></p>
							<ul class="catpg_links">
								<li><a class="catpg_link catpg_site" href="<?php if(get_field('sub_url')) {echo get_field('sub_url'); } ?>">Link<i class="fa fa-link"></i></a></li>
							</ul>
						</div>
						<footer>
							<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
							<p><?php the_tags(); ?></p>
						</footer>
						<?php do_action('foundationPress_page_before_comments'); ?>
						<?php comments_template(); ?>
						<?php do_action('foundationPress_page_after_comments'); ?>
					</div>
			</li>

            <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
            </ul>
            </li>
    <?php } // done the foreach statement ?>
		</ul>
	<?php do_action('foundationPress_after_content'); ?>
	</div>
	</div>
</div>
<?php get_footer(); ?>
