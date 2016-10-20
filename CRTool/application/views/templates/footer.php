	<div id="footer" class="footer-distributed">

		<div class="footer-right">

			<a href="https://www.facebook.com/axioo.id"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/axioo_id"><i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com/axioo.indonesia/"><i class="fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCWY-Jw9yq0l6BDwh0UhBNeA"><i class="fa fa-youtube"></i></a>
		</div>

		<div class="footer-left">
			<p style="font-size: 18px">&copy; 2016 AXIOO International. All Rights Reserved. </p>
		</div>
	</div>

</body>

<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});
</script>
</html>