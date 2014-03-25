<?php get_header(); ?>


<?php if (have_posts()) : ?>
<div id="post-area">
<?php while (have_posts()) : the_post(); ?>	

   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		 <?php if ( has_post_thumbnail() ) { ?>
         <div class="gridly-image"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'summary-image' );  ?></a></div>
          <div class="gridly-category"><p><?php the_category(', ') ?></p></div>
       
		  <?php } ?>
       			<div class="gridly-copy"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <p class="gridly-name"><?php the_author_posts_link(); ?></p>
                <hr />
                <p class="gridly-meta"><?php echo time_ago(); ?> / <?php comments_popup_link( '0 comments', '1 comment', '% comments', 'comments-link', 'Comments Off'); ?> / Likes</p>

				<?php the_excerpt(); ?> 

               <p class="gridly-link"><a href="<?php the_permalink() ?>">View more &rarr;</a></p>
         </div>
       </div>
       

<?php endwhile; ?>
</div>
<?php else : ?>
<?php endif; ?>
    
<?php next_posts_link('<p class="view-older">View Older Entries</p>') ?>


<script>
	$(document).ready(function(){
	    $('#post-area .post').fadeOut().hide();
	    $('#post-area .post').delay().fadeIn(300);
	});
</script>
    
 
<?php get_footer(); ?>
