<?php 

get_header();

?>
<div class="row">
    <div style="//background-color: #CCC;" class="col-md-8 two-col-content">

<?php
	if(is_home()) {
		query_posts('posts_per_page=5');
		while(have_posts()) : the_post();  ?>

			<div class="post col-md-12  well well-lg">
	                                        
		        <div class="col-md-12">
		            	        	<?php
		        	if(has_post_thumbnail()) {
		        		?>
			            <div class="post-image">
			                <a href="<?php the_permalink(); ?>">
			                	<?php $img_attr = array('class'	=> "attachment-$size img-responsive", 'alt'	=> trim(strip_tags( $attachment->post_excerpt )), 'title' => trim(strip_tags( $attachment->post_title ))); ?>
		                	<?php echo get_the_post_thumbnail($post_id, 'post-header', $img_attr);?>
		                	</a> 
			            </div>
			            <?php
		            } ?>		  
		            <div class="post-meta">
		                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		                <span class="date-author">Posted on <?php the_time('l dS M Y'); ?></a></span>
		            </div>

		            <div class="post-content">
		                <?php the_excerpt(); ?>
		            </div>    
		        </div>
	                        
	    	</div>
	    	<?php

		endwhile; 
		wp_reset_query();
	?>
		<br class="clear" />
		</div>

	    <div class="col-md-4 sidebar">
	    <div class="panel panel-primary panel-primary-custom">
	        <div class="panel-heading">
	            <h3 class="panel-title">Most Popular Posts</h3>
	        </div>
	        
	        <div class="panel-body">
	    		<?php wpp_get_mostpopular(); ?>
    		</div>
		</div>
	    
	    <div class="panel panel-primary panel-primary-custom">
	        <div class="panel-heading">
	            <h3 class="panel-title">Blog Roll</h3>
	        </div>
	        
	        <div class="panel-body ">
			    <div class="blog-roll">
			        <ul class="blog-roll-ul">
			            <li><a href="http://dashford.io" rel="nofollow">dashford.io</a></li>
			            <li><a href="http://seanmacentee.com/" rel="nofollow">seanmacentee.com</a></li>
			        </ul>
			    </div>
		    </div>
	    </div>

	    <?php if ( function_exists('wp_tag_cloud') ) : ?>
		<div class="panel panel-primary panel-primary-custom">
	        <div class="panel-heading">
	            <h3 class="panel-title">Tag Cloud</h3>
	        </div>
	        
	        <div class="panel-body tag-cloud">
				<ul>
					<li><?php wp_tag_cloud('smallest=8&largest=22'); ?></li>
				</ul>
			</div>
		</div>

<?php endif; ?>
    
	</div>
	<?php
	}
	?>


<?php get_footer(); ?>