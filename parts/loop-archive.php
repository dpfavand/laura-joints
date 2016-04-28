<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	<header class="article-header">
        <a href="<?php the_permalink() ?>">
        <div class="article-header-background" style="background-image: url('<?php echo the_post_thumbnail_url('large') ?>')">
        </div>
        <div class="article-header-text">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            </a>
            
        </div>
        </a>
	</header> <!-- end article header -->
	
    
    
	<section class="entry-content" itemprop="articleBody">
        <?php get_template_part( 'parts/content', 'byline' ); ?>
		<?php the_excerpt(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->				    						
</article> <!-- end article -->