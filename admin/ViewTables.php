<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>AfriCaps E-Library</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="assets/images/icons/favicon.png">

        <!--[if lt IE 9]>
          <script src="assets/js/minified/core/html5shiv.min.js"></script>
          <script src="assets/js/minified/core/respond.min.js"></script>
        <![endif]-->

        <!--[if lt IE 7]>
        <link rel="stylesheet" type="text/css" href="assets/css/minified/icons-ie7.min.css">
        <![endif]-->

        <!-- AfriCaps E-Library CSS Core -->

        <link rel="stylesheet" type="text/css" href="assets/css/minified/aui-production.min.css">

        <!-- Theme UI -->

        <link id="layout-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/layouts/gray.min.css">
        <link id="elements-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/elements/green.min.css">

        <!-- AfriCaps E-Library Responsive -->

        <link rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/responsive.min.css">

        <!-- AfriCaps E-Library JS -->

        <script type="text/javascript" src="assets/js/minified/aui-production.min.js"></script>

        <script>
            jQuery(window).load(
                function(){

                    var wait_loading = window.setTimeout( function(){
                      $('#loading').slideUp('fast');
                      jQuery('body').css('overflow','auto');
                    },500
                    );

                });
        </script>

    </head>
    <body style="overflow: hidden;">
        

        <div id="loading" class="ui-front loader ui-widget-overlay solid-white opacity-100">
            <img src="assets/images/loader-dark.gif" alt="">
        </div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="page-wrapper" class="demo-example">

            <div id="page-sidebar">
                <div id="header-logo">
                    AfriCaps E-Library <i class="opacity-80">v1.0</i>

                    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                </div>
                <div id="sidebar-search">
                    <input type="text" placeholder="Autocomplete search..." class="autocomplete-input tooltip-button" data-placement="right" title="Type &apos;j&apos; to see the available tags..." id="" name="">
                    <i class="glyph-icon icon-search"></i>
                </div>
                <div id="sidebar-menu" class="scrollable-content">
                    <ul>
                        <li>
                            <a href="index.php" title="Dashboard">
                                <i class="glyph-icon icon-dashboard"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Components">
                                <i class="glyph-icon icon-code"></i>
                                Upload Content
                            </a>
                            <ul>
                                <li>
                                    <a href="grid.html" title="Grid Layouts">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Grid Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="helper_classes.html" title="Helpers">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Helpers
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html" title="Chat">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Chat
                                    </a>
                                </li>
                                <li>
                                    <a href="notifications.html" title="Notifications">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="messaging.html" title="Messaging">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Messaging
                                    </a>
                                </li>
                                <li>
                                    <a href="progress_bars.html" title="Progress">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Progress
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="aui_theming.html" title="Theming options">
                                <i class="glyph-icon icon-picture"></i>
                                View Content
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Pages">
                                <i class="glyph-icon icon-folder-open"></i>
                                RSS View
                            </a>
                            <ul>
                                <li>
                                    <a href="login.html" title="Login">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Login example 1
                                    </a>
                                </li>
                                <li>
                                    <a href="login.php" title="Login">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Login example 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Pages">
                                <i class="glyph-icon icon-folder-open"></i>
                                Users
                            </a>
                            <ul>
                                <li>
                                    <a href="login.html" title="Login">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Login example 1
                                    </a>
                                </li>
                                <li>
                                    <a href="login.php" title="Login">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Login example 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Widgets">
                                <i class="glyph-icon icon-tags"></i>
                                Services
                                <span class="badge primary-bg radius-all-100">19</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="tabs.html" title="Tabs">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Tabs
                                    </a>
                                </li>
                                <li>
                                    <a href="accordions.html" title="Accordions">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="datepicker.html" title="Datepicker">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Datepicker
                                    </a>
                                </li>
                                <li>
                                    <a href="timepicker.html" title="Timepicker">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Timepicker
                                    </a>
                                </li>
                                <li>
                                    <a href="colorpicker.html" title="Colorpicker">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Colorpicker
                                    </a>
                                </li>
                                <li>
                                    <a href="slider.html" title="Sliders">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Sliders
                                    </a>
                                </li>
                                <li>
                                    <a href="jgrowl_notifications.html" title="JGrowl Notifications">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        JGrowl Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="noty_notifications.html" title="Noty Notifications">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Noty Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="modal_windows.html" title="Modal Windows">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Modal Windows
                                    </a>
                                </li>
                                <li>
                                    <a href="tooltips.html" title="Tooltips">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Tooltips
                                    </a>
                                </li>
                                <li>
                                    <a href="popovers.html" title="Popovers">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Popovers
                                    </a>
                                </li>
                                <li>
                                    <a href="sortable.html" title="Sortable Elements">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Sortable Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="dropdown_menus.html" title="Dropdown Menus">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Dropdown Menus
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="javascript:;" title="Help &amp; Support">
                                <i class="glyph-icon icon-book"></i>
                                <span class="float-left">Help &amp; Support</span>
                                <span class="badge ui-state-default font-default radius-all-100">8</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="docs.html" title="Getting started guide">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Getting started guide
                                    </a>
                                </li>
                                <li>
                                    <a href="http://agileui.ticksy.com/" title="Support forums">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Support forums
                                    </a>
                                </li>
<!--                                 <li class="divider"></li>
                                <li>
                                    <a href="javascript:;" data-placement="right" title="We can help you build the interface for your next app" class="tooltip-button">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Custom services
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-placement="right" title="Feel like something missing from AUI? Tell us about it and we'll include it if possible." class="tooltip-button">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Suggest a feature
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-placement="right" title="If you found a bug let us know so we can fix it asap!" class="tooltip-button">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Report a bug
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                    </ul>
                    <div class="divider mrg5T mobile-hidden"></div>
                    <div class="text-center mobile-hidden">
                        <div class="button-group">
                            <a href="javascript:;" class="btn medium primary-bg tooltip-button" data-placement="top" title="Top tooltip">
                                <i class="glyph-icon icon-flag"></i>
                            </a>
                            <a href="javascript:;" class="btn medium primary-bg tooltip-button" data-placement="bottom" title="Bottom tooltip">
                                <i class="glyph-icon icon-inbox"></i>
                            </a>
                            <a href="javascript:;" class="btn medium primary-bg tooltip-button" data-placement="right" title="Right tooltip">
                                <i class="glyph-icon icon-hdd"></i>
                            </a>
                        </div>

                        <div class="divider"></div>
                        <div class="button-group-vertical">
                            <a href="javascript:;" data-layout="center" data-type="warning" class="solid-white medium radius-all-2 display-block btn noty">
                                <span class="button-content font-orange text-left font-size-12">
                                    <i class="glyph-icon icon-warning-sign opacity-80 float-left mrg10R"></i>
                                    Warning
                                    <i class="glyph-icon icon-caret-right font-gray-dark opacity-60 float-right"></i>
                                </span>
                            </a>
                            <a href="javascript:;" data-layout="bottom" data-type="information" class="solid-white medium radius-all-2 display-block btn noty">
                                <span class="button-content font-gray-dark text-left font-size-12">
                                    <i class="glyph-icon icon-thumbs-up opacity-80 float-left mrg10R"></i>
                                    Information
                                    <i class="glyph-icon icon-caret-right font-gray-dark opacity-60 float-right"></i>
                                </span>
                            </a>
                            <a href="javascript:;" data-layout="top" data-type="notification" class="solid-white medium radius-all-2 display-block btn noty">
                                <span class="button-content font-blue text-left font-size-12">
                                    <i class="glyph-icon icon-comments opacity-80 float-left mrg10R"></i>
                                    Notification
                                    <i class="glyph-icon icon-caret-right font-gray-dark opacity-60 float-right"></i>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

            </div><!-- #page-sidebar -->
            
            <div id="page-main">

                <div id="page-main-wrapper">

                    <div id="page-header" class="clearfix">
                        <div id="page-header-wrapper" class="clearfix">
                            <div class="hide" id="black-modal-60" title="Modal window example">
                                <div class="pad20A">

                                    <div class="infobox notice-bg">
                                        <div class="gradient-blue large btn info-icon">
                                            <i class="glyph-icon icon-bullhorn"></i>
                                        </div>
                                        <h4 class="infobox-title">Modal windows</h4>
                                        <p>Thanks to the solid modular AfriCaps E-Library arhitecture, modal windows customizations are very flexible and easy to apply.</p>
                                    </div>

                                    <h4 class="heading-1 mrg20T clearfix">
                                        <div class="heading-content" style="width: auto;">
                                            Icons
                                            <small>
                                                All icons across the AfriCaps E-Library Framework use FontAwesome icons.
                                            </small>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </h4>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-compass" href="http://agileui.com/icon/compass"><i class="glyph-icon icon-compass"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-collapse" href="http://agileui.com/icon/collapse"><i class="glyph-icon icon-collapse"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-collapse-top" href="http://agileui.com/icon/collapse-top"><i class="glyph-icon icon-collapse-top"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-expand" href="http://agileui.com/icon/expand"><i class="glyph-icon icon-expand"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-eur" href="http://agileui.com/icon/eur"><i class="glyph-icon icon-eur"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-euro" href="http://agileui.com/icon/eur"><i class="glyph-icon icon-euro"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-gbp" href="javascript:;"><i class="glyph-icon icon-gbp"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-usd" href="javascript:;"><i class="glyph-icon icon-usd"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-dollar" href="javascript:;"><i class="glyph-icon icon-dollar"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-inr" href="javascript:;"><i class="glyph-icon icon-inr"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-rupee" href="javascript:;"><i class="glyph-icon icon-rupee"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-jpy" href="javascript:;"><i class="glyph-icon icon-jpy"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-yen" href="javascript:;"><i class="glyph-icon icon-yen"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-cny" href="javascript:;"><i class="glyph-icon icon-cny"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-renminbi" href="javascript:;"><i class="glyph-icon icon-renminbi"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-krw" href="javascript:;"><i class="glyph-icon icon-krw"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-won" href="javascript:;"><i class="glyph-icon icon-won"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-btc" href="javascript:;"><i class="glyph-icon icon-btc"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-bitcoin" href="javascript:;"><i class="glyph-icon icon-bitcoin"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-file" href="javascript:;"><i class="glyph-icon icon-file"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-file-text" href="javascript:;"><i class="glyph-icon icon-file-text"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-alphabet" href="javascript:;"><i class="glyph-icon icon-sort-by-alphabet"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-alphabet-al" href="javascript:;"><i class="glyph-icon icon-sort-by-alphabet-alt"></i>t</a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-attributes" href="javascript:;"><i class="glyph-icon icon-sort-by-attributes"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-attribu" href="javascript:;"><i class="glyph-icon icon-sort-by-attributes-alt"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-order" href="javascript:;"><i class="glyph-icon icon-sort-by-order"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-order-alt" href="javascript:;"><i class="glyph-icon icon-sort-by-order-alt"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-thumbs-up" href="javascript:;"><i class="glyph-icon icon-thumbs-up"></i></a>

                                    <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-thumbs-down" href="javascript:;"><i class="glyph-icon icon-thumbs-down"></i></a>

                                </div>
                            </div>
                            
                            
                            <div class="hide" id="white-modal-80" title="Dialog with tabs">
                                <div class="tabs remove-border opacity-80">
                                    <ul class="opacity-80">
                                        <li><a href="#example-tabs-1">First</a></li>
                                        <li><a href="#example-tabs-2">Second</a></li>
                                        <li><a href="#example-tabs-3">Third</a></li>
                                    </ul>
                                    <div id="example-tabs-1">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                        <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                                        </p>
                                    </div>
                                    <div id="example-tabs-2">
                                        <p>Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.
                                        </p>
                                        <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                                        </p>
                                    </div>
                                    <div id="example-tabs-3">
                                        <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                                        </p>
                                        <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                                        </p>
                                    </div>
                                </div>
                                <div class="pad10A">
                                    <div class="infobox success-bg radius-all-4">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque</p>
                                    </div>
                                </div>
                                <div class="ui-dialog-buttonpane clearfix">

                                    <a href="dropdown_menus.html" class="btn medium float-left gradient-blue">
                                        <span class="button-content text-transform-upr font-size-11">Dropdown menus</span>
                                    </a>
                                    <div class="button-group float-right">
                                        <a href="buttons.html" class="btn medium gradient-black" title="View more buttons examples">
                                            <i class="glyph-icon icon-star"></i>
                                        </a>
                                        <a href="buttons.html" class="btn medium gradient-black" title="View more buttons examples">
                                            <i class="glyph-icon icon-random"></i>
                                        </a>
                                        <a href="buttons.html" class="btn medium gradient-black" title="View more buttons examples">
                                            <i class="glyph-icon icon-map-marker"></i>
                                        </a>
                                    </div>
                                    <a href="javascript:;" class="medium btn gradient-green float-right mrg10R tooltip-button" data-placement="left" title="" data-original-title="Remove comment">
                                        <i class="glyph-icon icon-plus"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="top-icon-bar dropdown">
                                <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">
                                    <img width="36" src="assets/images/gravatar.jpg" alt="">
                                    <span>Horia Simon</span>
                                    <i class="glyph-icon icon-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu float-right">
                                    <li>
                                        <span class="badge badge-absolute float-left radius-all-100 mrg5R gradient-green tooltip-button" title="" data-original-title="You can add badges even to dropdown menus!">7</span>
                                        <a href="javascript:;" title="">
                                            <i class="glyph-icon icon-user mrg5R"></i>
                                            Account Details
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="">
                                            <i class="glyph-icon icon-cog mrg5R"></i>
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="font-orange" href="javascript:;" title="">
                                            <i class="glyph-icon icon-flag mrg5R"></i>
                                            Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="">
                                            <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>
                                            <span class="font-bold">Logout</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-submenu float-left">
                                        <a href="javascript:;" data-toggle="dropdown" title="">
                                            Dropdown menu
                                        </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        Submenu 1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        Submenu 2
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="javascript:;" title="">
                                                        Submenu 3
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                Submenu 2-1
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                Submenu 2-2
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="">
                                            Another menu item
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="top-icon-bar">
                                <a href="javascript:;" class="popover-button" data-placement="bottom" title="Messages Widget" data-id="#msg-box">
                                    <span class="badge badge-absolute gradient-orange">18</span>
                                    <i class="glyph-icon icon-envelope-alt"></i>
                                </a>
                                <div id="msg-box" class="hide">

                                    <div class="scrollable-content scrollable-small">

                                        <ul class="no-border messages-box">
                                            <li>
                                                <div class="messages-img">
                                                    <img width="32" src="assets/images/gravatar.jpg" alt="">
                                                </div>
                                                <div class="messages-content">
                                                    <div class="messages-title">
                                                        <i class="glyph-icon icon-warning-sign font-red"></i>
                                                        <a href="javascript:;" title="Message title">Important message</a>
                                                        <div class="messages-time">
                                                            3 hr ago
                                                            <span class="glyph-icon icon-time"></span>
                                                        </div>
                                                    </div>
                                                    <div class="messages-text">
                                                        This message must be read immediately because of it's high importance...
                                                    </div>
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="messages-img">
                                                    <img width="32" src="assets/images/gravatar.jpg" alt="">
                                                </div>
                                                <div class="messages-content">
                                                    <div class="messages-title">
                                                        <i class="glyph-icon icon-tag font-blue"></i>
                                                        <a href="javascript:;" title="Message title">Some random email</a>
                                                        <div class="messages-time">
                                                            3 hr ago
                                                            <span class="glyph-icon icon-time"></span>
                                                        </div>
                                                    </div>
                                                    <div class="messages-text">
                                                        This message must be read immediately because of it's high importance...
                                                    </div>
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="messages-img">
                                                    <img width="32" src="assets/images/gravatar.jpg" alt="">
                                                </div>
                                                <div class="messages-content">
                                                    <div class="messages-title">
                                                        <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>
                                                        <div class="messages-time">
                                                            3 hr ago
                                                            <span class="glyph-icon icon-time"></span>
                                                        </div>
                                                    </div>
                                                    <div class="messages-text">
                                                        This message must be read immediately because of it's high importance...
                                                    </div>
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="messages-img">
                                                    <img width="32" src="assets/images/gravatar.jpg" alt="">
                                                </div>
                                                <div class="messages-content">
                                                    <div class="messages-title">
                                                        <i class="glyph-icon icon-warning-sign font-red"></i>
                                                        <a href="javascript:;" title="Message title">Important message</a>
                                                        <div class="messages-time">
                                                            3 hr ago
                                                            <span class="glyph-icon icon-time"></span>
                                                        </div>
                                                    </div>
                                                    <div class="messages-text">
                                                        This message must be read immediately because of it's high importance...
                                                    </div>
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="messages-img">
                                                    <img width="32" src="assets/images/gravatar.jpg" alt="">
                                                </div>
                                                <div class="messages-content">
                                                    <div class="messages-title">
                                                        <i class="glyph-icon icon-tag font-blue"></i>
                                                        <a href="javascript:;" title="Message title">Some random email</a>
                                                        <div class="messages-time">
                                                            3 hr ago
                                                            <span class="glyph-icon icon-time"></span>
                                                        </div>
                                                    </div>
                                                    <div class="messages-text">
                                                        This message must be read immediately because of it's high importance...
                                                    </div>
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="messages-img">
                                                    <img width="32" src="assets/images/gravatar.jpg" alt="">
                                                </div>
                                                <div class="messages-content">
                                                    <div class="messages-title">
                                                        <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>
                                                        <div class="messages-time">
                                                            3 hr ago
                                                            <span class="glyph-icon icon-time"></span>
                                                        </div>
                                                    </div>
                                                    <div class="messages-text">
                                                        This message must be read immediately because of it's high importance...
                                                    </div>
                                                </div> 
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="pad10A button-pane button-pane-alt">
                                        <a href="messaging.html" class="btn small float-left solid-gray">
                                            <span class="button-content text-transform-upr font-size-11">All messages</span>
                                        </a>
                                        <div class="button-group float-right">
                                            <a href="javascript:;" class="btn small primary-bg">
                                                <i class="glyph-icon icon-star"></i>
                                            </a>
                                            <a href="javascript:;" class="btn small primary-bg">
                                                <i class="glyph-icon icon-random"></i>
                                            </a>
                                            <a href="javascript:;" class="btn small primary-bg">
                                                <i class="glyph-icon icon-map-marker"></i>
                                            </a>
                                        </div>
                                        <a href="javascript:;" class="small btn solid-red float-right mrg10R tooltip-button" data-placement="left" title="Remove comment">
                                            <i class="glyph-icon icon-remove"></i>
                                        </a>
                                    </div>

                                </div>

                                <a href="javascript:;" class="popover-button" data-placement="bottom" title="" data-id="#notif-box">
                                    <span class="badge badge-absolute gradient-green">5</span>
                                    <i class="glyph-icon icon-bell"></i>
                                </a>
                                <div id="notif-box" class="hide">

                                    <div class="popover-title display-block clearfix form-row pad10A">
                                        <div class="form-input">
                                            <div class="form-input-icon">
                                                <i class="glyph-icon icon-search transparent"></i>
                                                <input type="text" placeholder="Search notifications..." class="radius-all-100" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scrollable-content scrollable-small">

                                        <ul class="no-border notifications-box">
                                            <li>
                                                <span class="btn gradient-red icon-notification glyph-icon icon-user"></span>
                                                <span class="notification-text">This is an error notification</span>
                                                <div class="notification-time">
                                                    a few seconds ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="btn solid-orange icon-notification glyph-icon icon-user"></span>
                                                <span class="notification-text">This is a warning notification</span>
                                                <div class="notification-time">
                                                    <b>15</b> minutes ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="solid-green btn icon-notification glyph-icon icon-user"></span>
                                                <span class="notification-text font-green font-bold">A success message example.</span>
                                                <div class="notification-time">
                                                    <b>2 hours</b> ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="btn gradient-red icon-notification glyph-icon icon-user"></span>
                                                <span class="notification-text">This is an error notification</span>
                                                <div class="notification-time">
                                                    a few seconds ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="btn solid-orange icon-notification glyph-icon icon-user"></span>
                                                <span class="notification-text">This is a warning notification</span>
                                                <div class="notification-time">
                                                    <b>15</b> minutes ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="solid-blue btn icon-notification glyph-icon icon-user"></span>
                                                <span class="notification-text font-blue">Alternate notification styling.</span>
                                                <div class="notification-time">
                                                    <b>2 hours</b> ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="pad10A button-pane button-pane-alt text-center">
                                        <a href="notifications.html" class="btn medium primary-bg">
                                            <span class="button-content">View all notifications</span>
                                        </a>
                                    </div>

                                </div>

                                <a href="javascript:;" class="popover-button" data-placement="bottom" title="" data-id="#prog-box">
                                    <span class="badge badge-absolute gradient-red">21</span>
                                    <i class="glyph-icon icon-tasks"></i>
                                </a>
                                <div id="prog-box" class="hide">

                                    <div class="scrollable-content scrollable-small">

                                        <ul class="no-border progress-box">
                                            <li>
                                                <div class="progress-title">
                                                    Finishing uploading files
                                                    <b>23%</b>
                                                </div>
                                                <div class="progressbar-small progressbar" data-value="23">
                                                    <div class="progressbar-value solid-blue">
                                                        <div class="progressbar-overlay"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress-title">
                                                    Roadmap progress
                                                    <b>91%</b>
                                                </div>
                                                <div class="progressbar-small progressbar" data-value="91">
                                                    <div class="progressbar-value primary-bg">
                                                        <div class="progressbar-overlay"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress-title">
                                                    Images upload
                                                    <b>58%</b>
                                                </div>
                                                <div class="progressbar-small progressbar" data-value="58">
                                                    <div class="progressbar-value gradient-green"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress-title">
                                                    WordPress migration
                                                    <b>74%</b>
                                                </div>
                                                <div class="progressbar-small progressbar" data-value="74">
                                                    <div class="progressbar-value gradient-red"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress-title">
                                                    Agile development procedures
                                                    <b>91%</b>
                                                </div>
                                                <div class="progressbar-small progressbar" data-value="91">
                                                    <div class="progressbar-value primary-bg">
                                                        <div class="progressbar-overlay"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress-title">
                                                    Systems integration
                                                    <b>58%</b>
                                                </div>
                                                <div class="progressbar-small progressbar" data-value="58">
                                                    <div class="progressbar-value gradient-green"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress-title">
                                                    Code optimizations
                                                    <b>97%</b>
                                                </div>
                                                <div class="progressbar-small progressbar" data-value="97">
                                                    <div class="progressbar-value gradient-orange"></div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="pad10A button-pane button-pane-alt text-center">
                                        <a href="notifications.html" class="btn medium ui-state-default">
                                            <span class="button-content">View all</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div id="theme-demo" class="button-group mrg10R float-right tooltip-button" data-placement="left" title="Click to change theme">

                                <a class="btn popover-button" href="javascript:;" data-id="#theme-styling" data-toggle="popover" data-placement="bottom">
                                    <span class="button-content">
                                        <i class="glyph-icon icon-lightbulb float-left"></i>
                                        <i class="glyph-icon icon-caret-down float-right"></i>
                                    </span>
                                </a>

                            </div>

                            <div id="theme-styling" class="hide">
                                <div class="small-box">
                                    <div class="solid-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Layout Color Schemes:</div>
                                    <div class="pad10A clearfix change-layout-theme">
                                        <p class="font-gray-dark font-size-11 pad0B">Click to change the layout color scheme. You can associate different color schemes for layouts and main content elements.</p>
                                        <div class="divider mrg10T mrg10B"></div>
                                        <a href="javascript:;" class="choose-theme" elements-theme="default" layout-theme="default" title="Default">
                                            <span style="background: #37485D;"></span>
                                        </a>
                                        <a href="javascript:;" class="choose-theme" elements-theme="black" layout-theme="black" title="Black">
                                            <span style="background: #333;"></span>
                                        </a>
                                        <a href="javascript:;" class="choose-theme" elements-theme="orange" layout-theme="gray" title="Gray">
                                            <span style="background: #4a4a4a;"></span>
                                        </a>
                                        <a href="javascript:;" class="choose-theme" elements-theme="blue-dark" layout-theme="gray-light" title="Gray Light">
                                            <span style="background: #eee;"></span>
                                        </a>
                                        <a href="javascript:;" class="choose-theme" elements-theme="green" layout-theme="white" title="White">
                                            <span style="background: #fafafa;"></span>
                                        </a>
                                    </div>

                                    <div class="solid-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Elements Color Schemes:</div>
                                    <div class="pad10A clearfix change-layout-theme">
                                        <p class="font-gray-dark font-size-11 pad0B">When you select a layout color scheme the elements inherit the styles from it, but you can also choose a different color scheme only for elements.</p>
                                        <div class="divider mrg10T mrg10B"></div>
                                        <a href="javascript:;" class="choose-theme" elements-theme="default" layout-theme="" title="Default">
                                            <span style="background: #37485d;"></span>
                                        </a>
                                        <a href="javascript:;" class="choose-theme" elements-theme="black" layout-theme="" title="Black">
                                            <span style="background: #333;"></span>
                                        </a>
                                        <a href="javascript:;" class="choose-theme" elements-theme="blue-light" layout-theme="" title="Blue Light">
                                            <span style="background: #45b3ff;"></span>
                                        </a>
                                        <a href="javascript:;" class="choose-theme" elements-theme="blue-dark" layout-theme="" title="Blue Dark">
                                            <span style="background: #0068c0;"></span>
                                        </a>
                                        <a href="javascript:;" class="choose-theme" elements-theme="orange" layout-theme="" title="Orange">
                                            <span style="background: #f3491c;"></span>
                                        </a>
                                        <a href="javascript:;" class="choose-theme" elements-theme="green" layout-theme="" title="Green">
                                            <span style="background: #269100;"></span>
                                        </a>
                                    </div>
                                    <div class="pad10A clearfix change-layout-theme">
                                        <p class="font-gray-dark font-size-11 pad0B">The elements color schemes below use gradients instead of solid color for backgrounds.</p>
                                        <div class="divider mrg10T mrg10B"></div>
                                        <a href="javascript:;" class="choose-theme" elements-theme="gradient-blue" layout-theme="" title="Gradient Blue">
                                            <span class="gradient-blue-theme"></span>
                                        </a>
                                    </div>
                                    <div class="pad10A button-pane button-pane-alt text-center">
                                        <a href="aui_theming.html" class="btn medium solid-black">
                                            <span class="button-content text-transform-upr font-bold font-size-11">Create your own theme</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- #page-header -->

                    <div id="page-breadcrumb-wrapper">
                        <div id="page-breadcrumb">
                            <a href="javascript:;" title="Dashboard">
                                <i class="glyph-icon icon-dashboard"></i>
                                Dashboard
                            </a>
                            <a href="javascript:;" title="Elements">
                                <i class="glyph-icon icon-laptop"></i>
                                Content
                            </a>
                            <span class="current">
                                Add RSS Feed (Manual)
                            </span>
                        </div>
                        <div class="float-right">
                            <a href="buttons.html" class="btn medium solid-white tooltip-button mrg5R" data-placement="bottom" title="Example buttons in breadcrumb bar">
                                <span class="button-content">
                                    <i class="glyph-icon icon-question font-green"></i>
                                </span>
                            </a>
                            <a href="datepicker.html" class="btn medium solid-white mobile-hidden mrg5R" title="Datepicker in dropdown">
                                <i class="glyph-icon icon-calendar"></i>
                            </a>
                            <div class="dropdown">
                                <a href="javascript:;" class="btn medium gradient-blue" title="Example dropdown" data-toggle="dropdown">
                                    <span class="button-content">
                                        <i class="glyph-icon icon-cog float-left"></i>
                                        <i class="glyph-icon icon-caret-down float-right"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu pad0A float-right">
                                    <div class="medium-box">
                                        <div class="solid-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Form example</div>
                                        <div class="pad10A">
                                            <p class="font-gray-dark pad0B">This <span class="label gradient-green">dropdown box</span> uses the Twitter Bootstrap dropdown plugin.</p>
                                            <div class="divider mrg10T mrg10B"></div>

                                                

                                        </div>

                                        <div class="solid-black font-size-12 font-orange pad10A mrg5L mrg5R">Custom header example</div>
                                        <div class="pad15A">
                                            <p class="font-green text-center font-size-14 pad0B">AfriCaps E-Library comes with powerful helpers that you can use to create virtually any style you want. Read the documentation about helper classes to find out more!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">


<h4 class="heading-1 clearfix">
    <div class="heading-content">
        View RSS Feed 
        <small>
           
        </small>
        
    </div>
    <div class="clear"></div>
</h4>

<table class="table" id="example1">
	<thead>
		<tr>
			<th>Content 1</th>
			<th>Content 2</th>
			<th>Content 3</th>
			<th>Content 4</th>
			<th>Content 5</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Trident</td>
			<td>Internet
				 Explorer 4.0</td>
			<td>Win 95+</td>
			<td class="center">4</td>
			<td class="center">X</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>Internet
				 Explorer 5.0</td>
			<td>Win 95+</td>
			<td class="center">5</td>
			<td class="center">C</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>Internet
				 Explorer 5.5</td>
			<td>Win 95+</td>
			<td class="center">5.5</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>Internet
				 Explorer 6</td>
			<td>Win 98+</td>
			<td class="center">6</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>Internet Explorer 7</td>
			<td>Win XP SP2+</td>
			<td class="center">7</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>AOL browser (AOL desktop)</td>
			<td>Win XP</td>
			<td class="center">6</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Firefox 1.0</td>
			<td>Welcome Home</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Firefox 1.5</td>
			<td>Welcome Home</td>
			<td class="center">Loves Covers All</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Coming Soon</td>
			<td>Welcome Home</td>
			<td class="center">Loves Covers All</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Firefox 3.0</td>
			<td>Win 2k+ / OSX.3+</td>
			<td class="center">1.9</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Camino 1.0</td>
			<td>OSX.2+</td>
			<td class="center">Loves Covers All</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Camino 1.5</td>
			<td>OSX.3+</td>
			<td class="center">Loves Covers All</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Netscape 7.2</td>
			<td>Win 95+ / Mac OS 8.6-9.2</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Netscape Browser 8</td>
			<td>Win 98SE+</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Netscape Navigator 9</td>
			<td>Welcome Home</td>
			<td class="center">Loves Covers All</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Mozilla 1.0</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Mozilla 1.1</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.1</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Mozilla 1.2</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.2</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Mozilla 1.3</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.3</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Mozilla 1.4</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.4</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Mozilla 1.5</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.5</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Mozilla 1.6</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.6</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Mozilla 1.7</td>
			<td>Win 98+ / OSX.1+</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Mozilla Loves Covers All</td>
			<td>Win 98+ / OSX.1+</td>
			<td class="center">Loves Covers All</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Seamonkey 1.1</td>
			<td>Welcome Home</td>
			<td class="center">Loves Covers All</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Now in Nigeria</td>
			<td>Epiphany 2.20</td>
			<td>Gnome</td>
			<td class="center">Loves Covers All</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>Safari 1.2</td>
			<td>OSX.3</td>
			<td class="center">125.5</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>Safari 1.3</td>
			<td>OSX.3</td>
			<td class="center">312.8</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>Safari 2.0</td>
			<td>OSX.4+</td>
			<td class="center">419.3</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>Safari 3.0</td>
			<td>OSX.4+</td>
			<td class="center">522.1</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>OmniWeb 5.5</td>
			<td>OSX.4+</td>
			<td class="center">420</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>iPod Touch / iPhone</td>
			<td>iPod</td>
			<td class="center">420.1</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Webkit</td>
			<td>S60</td>
			<td>S60</td>
			<td class="center">413</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 7.0</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 7.5</td>
			<td>Win 95+ / OSX.2+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 8.0</td>
			<td>Win 95+ / OSX.2+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 8.5</td>
			<td>Win 95+ / OSX.2+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 9.0</td>
			<td>Win 95+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 9.2</td>
			<td>Win 88+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera 9.5</td>
			<td>Win 88+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Opera for Wii</td>
			<td>Wii</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Nokia N800</td>
			<td>N800</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Presto</td>
			<td>Nintendo DS browser</td>
			<td>Nintendo DS</td>
			<td class="center">8.5</td>
			<td class="center">C/A<sup>1</sup></td>
		</tr>
		<tr>
			<td>KHTML</td>
			<td>Konqureror 3.1</td>
			<td>KDE 3.1</td>
			<td class="center">3.1</td>
			<td class="center">C</td>
		</tr>
		<tr>
			<td>KHTML</td>
			<td>Konqureror 3.3</td>
			<td>KDE 3.3</td>
			<td class="center">3.3</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>KHTML</td>
			<td>Konqureror 3.5</td>
			<td>KDE 3.5</td>
			<td class="center">3.5</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Tasman</td>
			<td>Internet Explorer 4.5</td>
			<td>Mac OS 8-9</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<tr>
			<td>Tasman</td>
			<td>Internet Explorer 5.1</td>
			<td>Mac OS 7.6-9</td>
			<td class="center">1</td>
			<td class="center">C</td>
		</tr>
		<tr>
			<td>Tasman</td>
			<td>Internet Explorer 5.2</td>
			<td>Mac OS 8-X</td>
			<td class="center">1</td>
			<td class="center">C</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>NetFront 3.1</td>
			<td>Embedded devices</td>
			<td class="center">-</td>
			<td class="center">C</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>NetFront 3.4</td>
			<td>Embedded devices</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>Dillo 0.8</td>
			<td>Embedded devices</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>Links</td>
			<td>Text only</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>Lynx</td>
			<td>Text only</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>IE Mobile</td>
			<td>Windows Mobile 6</td>
			<td class="center">-</td>
			<td class="center">C</td>
		</tr>
		<tr>
			<td>Misc</td>
			<td>PSP browser</td>
			<td>PSP</td>
			<td class="center">-</td>
			<td class="center">C</td>
		</tr>
		<tr>
			<td>Other browsers</td>
			<td>All others</td>
			<td>-</td>
			<td class="center">-</td>
			<td class="center">U</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<th>Content 1</th>
			<th>Content 2</th>
			<th>Content 3</th>
			<th>Content 4</th>
			<th>Content 5</th>
		</tr>
	</tfoot>
</table>
                    </div><!-- #page-content -->
			            <div id="page-footer-wrapper">
                            <div id="page-footer">
			            	    Copyright &copy; 2013 - AfriCaps E-Library
                            </div>
			            </div><!-- #page-footer-wrapper -->
	            </div><!-- #page-main -->
            </div><!-- #page-main-wrapper -->
        </div><!-- #page-wrapper -->

    </body>
</html>
