</div>
</div>
</div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<footer id="footer">

	<nav>
		<ul class="nav">
			<?php wp_list_pages(array('title_li' => '', 'depth' => '-1', 'sort_column' => 'menu_order', 'include' => '15')); ?>
			<?php wp_list_pages(array('title_li' => '', 'depth' => '-1', 'sort_column' => 'menu_order', 'include' => '17')); ?>
			<?php wp_list_pages(array('title_li' => '', 'depth' => '-1', 'sort_column' => 'menu_order', 'include' => '21')); ?>
			<?php wp_list_pages(array('title_li' => '', 'depth' => '-1', 'sort_column' => 'menu_order', 'include' => '29')); ?>
			<?php wp_list_pages(array('title_li' => '', 'depth' => '-1', 'sort_column' => 'menu_order', 'include' => '13')); ?>
		</ul>
	</nav>

	<p>
		© 2017 Renton Area Youth & Family Services
		<br>
		1025 South 3rd St, Renton, WA 98057, 425-271-5600 
	</p>

	<p>
		Crafted with care by <a href="http://colinbrooks.co">colinbrooks.co</a>
	</p>

	<div class="fb-like" data-href="https://www.facebook.com/RentonAreaYouthAndFamilyServices" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>


</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42966188-1', 'auto');
  ga('send', 'pageview');
</script>

<?php wp_footer(); ?>

</body>

</html>