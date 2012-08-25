	</div>

	<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<?php /* ?>
<script src="<?php bloginfo('template_directory'); ?>/_/js/plugins/jsrender.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/base.js"></script>

<script>
jQuery(function(){
	Base.Init();
});
</script>
<?php */ ?>

<?php /* SOCIAL */ ?>
<div id="fb-root"></div>
<script>
// Facebook
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;  
	js.src = '//connect.facebook.net/pt_BR/all.js#xfbml=1';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Twitter
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s);
	js.id = id;
	js.src = '//platform.twitter.com/widgets.js';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'twitter-wjs'));

// Google+
window.___gcfg = {lang: 'pt-BR'};
(function() {
	var po = document.createElement('script');
		po.type = 'text/javascript';
		po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
	var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(po, s);
})();
</script>
	
</body>
</html>