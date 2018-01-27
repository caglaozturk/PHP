

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->          
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?=base_url()?>assets/admin/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/tocify/jquery.tocify.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?=base_url()?>assets/admin/js/settings.js"></script>
        
        <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins.js"></script>        
        <script type="text/javascript" src="<?=base_url()?>assets/admin/js/actions.js"></script>        
        <!-- END TEMPLATE -->
        
        <script>
            $(function() {
                var toc = $("#tocify").tocify({context: ".tocify-content", showEffect: "fadeIn",extendPage:false,selectors: "h2, h3, h4" });
            });
        </script>
        
    <!-- END SCRIPTS -->         
    </body>
</html>






