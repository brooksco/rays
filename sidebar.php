<div id="sidebar">
	<a href="<?php echo site_url(); ?>">
		<img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_cmyk_small.png">
	</a>

	<a id="horizontal-logo" href="<?php echo site_url(); ?>">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rays_horizontal.png">
	</a>

	<h6 id="header-contact" style="margin-bottom: 1em;">
			<em>Admin. & Counseling Services</em>
			<br>
			1025 South 3rd St, Renton 98057
			<br>
			425-271-5600 
			<br><br>
			<em>Family Support/Prevention Services</em>
			<br>
			12704 76th Ave S, Seattle 98178
			<br>
			206-772-2050
		</h6>
	<div id="sidebar-box">
		<h6 class="sidebar-title">
			Administration & Counseling Services
		</h6>
		<p class="sidebar-address">
			1025 South 3rd St
			<br>
			Renton, WA 98057
		</p>
		<p class="sidebar-contact">
			425-271-5600
			<!-- <br>
			<a href="http://goo.gl/maps/1DJyK" target="_blank">Map</a> -->
		</p>
		<h6 class="sidebar-title">
			Family Support & Prevention Services
		</h6>

		<p class="sidebar-address">
			12704 76th Ave S
			<br>
			Seattle, WA 98178
		</p>

		<p class="sidebar-contact">
			206-772-2050
			<!-- <br>
			<a href="http://goo.gl/maps/Zr4lN" target="_blank">Map</a> -->
		</p>

		<?php $args = array( 'numberposts' => '1', 'post_status' => 'publish' ); ?>
		<?php $recent_posts = wp_get_recent_posts( $args ); ?>
		<?php if ( !empty($recent_posts) ) { ?>
		<div id="sidebar-posts">
			<h6 class="sidebar-title">From our blog</h6>
			<?php foreach( $recent_posts as $recent ){ ?>
			<div>
				<li class="sidebar-post-title">
					<a href="<?php echo get_permalink($recent['ID']) ?>"><?php echo $recent['post_title']; ?></a>
				</li>
				<p><?php echo wp_trim_words( $recent['post_content'], 10, '...<a class="sidebar-read-more" href="'. get_permalink($recent['ID']) .'">Read More</a>' ); ?></p>
			</div>
			<?php } ?>
		</div>
		<?php } ?> 
	</div>
</div>
