<div id="ttg-services">
	<nav id="ttg-services-tabs"></nav>
	<section id="ttg-services-slider">
	<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article class="ttg-service" data-badge='<?php the_post_thumbnail_url("full"); ?>'>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
	</section>
</div>

<script type="text/javascript">
	(function(){
		var tabBar, populateTabBar, servicesSlider, services;
		
		services = document.getElementsByClassName('ttg-service');
		
		servicesSlider = document.getElementById('ttg-services-slider');
		
		tabBar = document.getElementById('ttg-services-tabs');
		
		populateTabBar = function(tabBar, service, _index){
			if(service.dataset.badge == ''){
			}
			else{	
				var badge = new Image();
				badge.src = service.dataset.badge;
				
				//Give each badge a unique id
				badge.dataset.key = _index;
			
				tabBar.appendChild(badge);
			}
			
			return tabBar;
		};
		
		//Append service icons to services tabs
		tabBar = Array.prototype.reduce.call(
			services,
			populateTabBar,
			tabBar
		);
		
		//Listen for clicks and identify with id
		tabBar.addEventListener('click', function(e){
			if(this.activeTab !== undefined){
				this.activeTab.classList.remove('active');
			}
			
			this.index = e.target.dataset.key;
			
			this.activeTab = services[this.index];
			this.activeTab.classList.add("active");
			
			servicesSlider.style.transform = [
				'translateX(',
				-this.index,
				'00%',
				')'
			].join('');
			
		}, false);
		
	}());
</script>