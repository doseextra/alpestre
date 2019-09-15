<!-- engine js -->
<script defer src="<?php echo get_bloginfo( 'template_directory' ); ?>/dist/jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!-- custom js -->
<script defer src="<?php echo get_bloginfo( 'template_directory' ); ?>/dist/app_bundle.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c04b028fd65052a5c9375db/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

<?php wp_footer(); ?>

</html>