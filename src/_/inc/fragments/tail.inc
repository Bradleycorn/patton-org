<!-- build:js(src) /_/lib/libs.js -->
<script src="/_/bower/jquery/dist/jquery.js"></script>
<script src="/_/bower/tether/dist/js/tether.js"></script>
<script src="/_/lib/bootstrap/js/bootstrap.js"></script>
<!-- endbuild -->


<!-- build:js(src) /_/js/scripts.js -->
<script src="/_/js/global.js"></script>
<!-- endbuild -->

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?=ANALYTICS_ID?>', 'auto');
  ga('require', 'linkid');
  ga('send', 'pageview');

</script>