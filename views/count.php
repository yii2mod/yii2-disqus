<?php
/* @var $noScript string text to be displayed if browser does not support javascript. */
/* @var $variables string Disqus variables */
?>
    <!--[if (gt IE 8)]><!-->
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        <?php echo $variables; ?>
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement('script');
            s.async = true;
            s.type = 'text/javascript';
            s.src = '//' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
    </script>
    <!--<![endif]-->
<?php echo $noScript; ?>