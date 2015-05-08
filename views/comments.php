<?php
/* @var $noScript string text to be displayed if browser does not support javascript. */
/* @var $variables string Disqus variables */
/* @var $credits string text for Disqus credits to be displayed at the end of the widget */
?>
    <div id="disqus_thread"></div>
    <!--[if (gt IE 8)]><!-->
    <script type="text/javascript">
        <?php echo $variables; ?>
        (function () {
            var dsq = document.createElement('script');
            dsq.type = 'text/javascript';
            dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <!--<![endif]-->

    <!--[if (lt IE 9)]>
    <div class="alert alert-warning"><?php echo '<strong>Note:</strong> Please use an updated browser to
        view comments.'; ?>
    </div>
    <![endif]-->
<?php echo $noScript; ?>
<?php echo $credits; ?>