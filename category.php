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
			                	<?php echo get_the_post_thumbnail($post_id, 'post-header');?>
		                	</a> 
			            </div>
			            <?php
		            } ?>		  
		            <div class="post-meta">
		                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		                <span class="date-author">Posted on <?php the_time('l dS M Y'); ?> by <a href="/about"><?php the_author(); ?></a></span>
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
	    <!--
		    <div class="panel panel-primary">
		        <div class="panel-heading">
		            <h3 class="panel-title">Panel title</h3>
		        </div>
		        
		        <div class="panel-body">
		            Panel content
		        </div>
		    </div>
		    
		    <div class="blog-roll">
		        <ul class="blog-roll-ul">
		            <li><a href="http://dashford.io" rel="nofollow">dashford.io</a></li>
		            <li><a href="http://seanmacentee.com/" rel="nofollow">seanmacentee.com</a></li>
		        </ul>
		    </div>
	    -->
		</div>
	<?php
	}
	?>


<?php get_footer(); ?>