<div class="ttg-members">
<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<a class="ttg-member" href="<?php the_permalink() ?>">
		<figure class="ttg-member-thumbnail" style="background-image: url(<?php the_post_thumbnail_url("medium"); ?>"></figure>
		<h3><?php the_title(); ?></h3>
		<h4><?php the_excerpt(); ?></h4>
	</a>
<?php endwhile; ?>
<?php endif; ?>
</div>