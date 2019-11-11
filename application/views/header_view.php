<!DOCTYPE html>
<html lang ="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <style>
        
        div.isi-tengah{
            margin: auto auto; width: 130px;
        }
        @media only screen and (min-width: 68.75em) {
            div.isi-tengah{
            margin: auto auto; width: 260px;
            }
        }
        div.isi-tengah2:hover{
            -webkit-animation: rotation 1s linear;
            
        }
        @-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}
        div.lo4{
            margin: auto auto; padding: 10px 10px 0px 10px;
        }
        @media only screen and (min-width: 68.75em) {
            div.lo4{
            margin: auto auto; padding: 25px 10px 25px 10px;
            }
        }
       .image-hover{
            background-image: url('<?php echo base_url();?>images/lo-antrian-passport-online@3x.png');
            background-repeat:no-repeat;
            background-size: 100% 100%;
            background-origin: content-box;
             transition: all 1s ease-in-out;
          
            margin: 5px;
       }
       .image-hover:hover{
            overflow:hidden;
            -webkit-animation: switch 6s infinite; /* Chrome, Safari, Opera */ 
            animation: switch 6s infinite;
           
            }

            @-webkit-keyframes switch {
                10% {background-image: url('<?php echo base_url();?>images/lo-antrian-passport-online-green3x.png');}
                50% {background-image: url('<?php echo base_url();?>images/lo-antrian-passport-online-red3x.png');}
                90% {background-image: url('<?php echo base_url();?>images/lo-antrian-passport-online-blue3x.png');}
                
            }

            .image2-hover{
            background-image: url('<?php echo base_url();?>images/lo-visa-online@3x.png');
            background-repeat:no-repeat;
            background-size: 100% 100%;
            background-origin: content-box;
             transition: all 1s ease-in-out;
          
            margin: 5px;
       }
       .image2-hover:hover{
            overflow:hidden;
            -webkit-animation: switch2 6s infinite; /* Chrome, Safari, Opera */ 
                animation: switch2 6s infinite;
           
            }

            @-webkit-keyframes switch2 {
                10% {background-image: url('<?php echo base_url();?>images/lo-visa-online-green@3x.png');}
                50% {background-image: url('<?php echo base_url();?>images/lo-visa-online-red@3x.png');}
                90% {background-image: url('<?php echo base_url();?>images/lo-visa-online-blue@3x.png');}
                
            }

            .image3-hover{
            background-image: url('<?php echo base_url();?>images/lo-itas-online@3x.png');
            background-repeat:no-repeat;
            background-size: 100% 100%;
            background-origin: content-box;
             transition: all 1s ease-in-out;
          
            margin: 5px;
       }
       .image3-hover:hover{
            overflow:hidden;
            -webkit-animation: switch3 5s infinite; /* Chrome, Safari, Opera */ 
                animation: switch3 5s infinite;
           
            }

            @-webkit-keyframes switch3 {
                10% {background-image: url('<?php echo base_url();?>images/lo-itas-online-green@3x.png');}
                50% {background-image: url('<?php echo base_url();?>images/lo-itas-online-red@3x.png');}
                90% {background-image: url('<?php echo base_url();?>images/lo-itas-online-blue@3x.png');}
                
            }

            .image4-hover{
            background-image: url('<?php echo base_url();?>images/lo-pengaduan-masyarakat@3x.png');
            background-repeat:no-repeat;
            background-size: 100% 100%;
            background-origin: content-box;
             transition: all 1s ease-in-out;
          
            margin: 5px;
       }
       .image4-hover:hover{
            overflow:hidden;
            -webkit-animation: switch4 5s infinite; /* Chrome, Safari, Opera */ 
                animation: switch4 5s infinite;
           
            }

            @-webkit-keyframes switch4 {
                10% {background-image: url('<?php echo base_url();?>images/lo-pengaduan-masyarakat-green@3x.png');}
                50% {background-image: url('<?php echo base_url();?>images/lo-pengaduan-masyarakat-red@3x.png');}
                90% {background-image: url('<?php echo base_url();?>images/lo-pengaduan-masyarakat-blue@3x.png');}
                
            }
    </style>
    
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Kantor Imigrasi Bogor </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="shortcut icon" href="<?php echo base_url();?>/images/favicon.png">



    <!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/colors.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/hover.css">
<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/elements/timeline.css">

<!-- FRONTEND ELEMENTS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/blog.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/cta-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/feature-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/footer.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/hero-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/icon-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/portfolio-navigation.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/pricing-table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/sliders.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/frontend-elements/testimonial-box.css">

<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/icons/spinnericon/spinnericon.css">

<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/xeditable/xeditable.css">

<!-- FRONTEND WIDGETS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/layerslider/layerslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/owlcarousel/owlcarousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/widgets/fullpage/fullpage.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/snippets/mobile-navigation.css">

<!-- Frontend theme -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/themes/frontend/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/themes/frontend/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/themes/components/border-radius.css">

<!-- Frontend responsive -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/helpers/frontend-responsive.css">

<!-- Grafik -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/chartjs/demo.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/piegage/piegage.css">

<!-- Edit -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/editan/frontend-responsive-edit.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/editan/edit.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/themes/admin/color-schemes/default.css">


<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/helpers/admin-responsive.css">
    <!-- JS Core -->

    <script type="text/javascript" src="<?php echo base_url();?>/assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js-core/jquery-ui-position.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js-core/transition.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js-core/jquery-cookie.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/chartjs/Chart.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/piegage/piegage.js"></script>



<script type="text/javascript">
    $(window).load(function(){
        setTimeout(function() {
            $('#loading').fadeOut( 400, "linear" );
        }, 300);
    });
</script>

</head>
<body class="boxed-layout">
<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/skrollr/skrollr.js"></script>

<!-- Owl carousel -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/owlcarousel/owlcarousel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/owlcarousel/owlcarousel-demo.js"></script>

<!-- HG sticky -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/sticky/sticky.js"></script>

<!-- WOW -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/wow/wow.js"></script>

<!-- VideoBG -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/videobg/videobg.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/videobg/videobg-demo.js"></script>

<!-- Mixitup -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/mixitup/mixitup.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/mixitup/isotope.js"></script>

<!-- WIDGETS -->

<!-- Bootstrap Dropdown -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/dropdown/dropdown.js"></script>

<!-- Bootstrap Tooltip -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/tooltip/tooltip.js"></script>

<!-- Bootstrap Popover -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/popover/popover.js"></script>

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/button/button.js"></script>

<!-- Bootstrap Collapse -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/collapse/collapse.js"></script>

<!-- Superclick -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Content box -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/js-init/widgets-init.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js-init/frontend-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/themes/frontend/layout.js"></script>
<!-- Theme layout -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/widgets/theme-switcher/themeswitcher.js"></script>