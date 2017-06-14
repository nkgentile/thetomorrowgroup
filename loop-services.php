<div id="ttg-services">
	<nav id="ttg-services-tabs">
	<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<a class="ttg-services-tab" href='#<?php the_ID(); ?>'>
		<img src='<?php the_post_thumbnail_url("full"); ?>' width="150" height="150" />
		<h3><?php the_title(); ?></h3>
	</a>
	<?php endwhile; ?>
	<?php endif; ?>
	</nav>
	
	<?php rewind_posts(); ?>
	
	<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<article class='ttg-service' id='<?php the_ID(); ?>'>
		<?php the_content(); ?>
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<script type="text/javascript">
	// (function(){
// 		var tabBar, populateTabBar, services;
// 		
// 		services = document.getElementsByClassName('ttg-service');
// 		
// 		tabBar = document.getElementById('ttg-services-tabs');
// 		
// 		populateTabBar = function(tabBar, service, index){
// 			if(service.dataset.badge == ''){
// 			}
// 			else{	
// 				var badge = new Image();
// 				badge.src = service.dataset.badge;
// 				
// 				//Give each badge a unique id
// 				badge.dataset.key = index;
// 			
// 				tabBar.appendChild(badge);
// 			}
// 			
// 			return tabBar;
// 		};
// 		
// 		//Append service icons to services tabs
// 		tabBar = Array.prototype.reduce.call(
// 			services,
// 			populateTabBar,
// 			tabBar
// 		);
// 		
// 		//Listen for clicks and identify with id
// 		tabBar.addEventListener('click', function(e){
// 			console.log(e.target.dataset.key);	
// 		}, false);
// 		
// 	}());
</script>