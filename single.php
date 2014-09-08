<?php 

get_header();

?>

<div class="row">
    <div style="//background-color: #CCC;" class="col-md-8 two-col-content">

<?php
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
	                <?php the_content(''); ?>
	            </div>    
	        </div>
                        
    	</div>
    	<?php

	endwhile; 
	wp_reset_query();
?>

<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'daveodwyer'; // Required - Replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
	<br class="clear" />
	</div>

     <div class="col-md-4 sidebar">
	    <div class="panel panel-primary panel-primary-custom">
	        <div class="panel-heading">
	            <h3 class="panel-title">Other Posts</h3>
	        </div>
	        
	        <div class="panel-body">
	            	    <?php
    	query_posts('posts_per_page=3');
		while(have_posts()) : the_post();  ?>
			<div class="other-posts-sidebar">
				<a href="<?php the_permalink(); ?>" class="list-group-iten">
					<h4 class="list-group-item-heading"><?php the_title();?></h4>
					<p class="list-group-item-text">Posted on <?php the_time('l dS M Y'); ?> by <?php the_author(); ?></p>
				</a>
			</div>
    	<?php
		endwhile; 
		wp_reset_query();

		?>
	        </div>
	    </div>

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
<?php get_footer(); ?>
