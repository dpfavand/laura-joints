<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
        <div class="article-header-background" style="background-image: url('<?php echo the_post_thumbnail_url('large') ?>')">
        </div>
        <div class="article-header-text">
            <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
        </div>
		
		
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php get_template_part( 'parts/content', 'byline' ); ?>
        
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
									
	<?php comments_template(); ?>	
													
</article> <!-- end article -->