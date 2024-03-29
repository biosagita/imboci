
<div id="sb-site">
  
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
      
        <div id="page-content-wrapper">
            <div id="page-content">
                

                    

<!-- Sparklines charts -->

<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/sparklines/sparklines.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/sparklines/sparklines-demo.js"></script>

<!-- Flot charts -->

<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/flot/flot.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/flot/flot-resize.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/flot/flot-stack.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/flot/flot-pie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/flot/flot-tooltip.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/flot/flot-demo-1.js"></script>

<!-- PieGage charts -->

<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/charts/piegage/piegage-demo.js"></script>

<div id="page-title">
    <h2>Dashboard</h2>
    <p>The most complete user interface framework that can be used to create stunning admin dashboards and presentation websites.</p>
    <div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>
    <div id="theme-switcher-wrapper">
        <div class="scroll-switcher">
            <h5 class="header">Layout options</h5>
            <ul class="reset-ul">
                <li>
                    <label for="boxed-layout">Boxed layout</label>
                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-header">Fixed header</label>
                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-sidebar">Fixed sidebar</label>
                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                </li>
                <li>
                    <label for="closed-sidebar">Closed sidebar</label>
                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                </li>
            </ul>
            <div class="boxed-bg-wrapper hide">
                <h5 class="header">
                    Boxed Page Background
                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                </h5>
                <div class="theme-color-wrapper clearfix">
                    <h5>Patterns</h5>
                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                    <div class="clear"></div>

                    <h5 class="mrg15T">Solids &amp;Images</h5>
                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                </div>
            </div>
            <h5 class="header">
                Header Style
                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
            <h5 class="header">
                Sidebar Style
                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    $34,657
                    <span>Total Earnings<b> in last</b> ten <b>quarters</b></span>
                </div>
                <div class="bs-label bg-green">+18%</div>
                <div class="center-div sparkline-big-alt">1245,1450,1312,1121,986,1489</div>
                <div class="row list-grade">
                    <div class="col-md-2">January</div>
                    <div class="col-md-2">February</div>
                    <div class="col-md-2">March</div>
                    <div class="col-md-2">April</div>
                    <div class="col-md-2">May</div>
                    <div class="col-md-2">June</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        Financial statistics
                    </a>
                </div>
                <a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-plus"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    169
                    <span>Total Subscriptions<b> in last</b> 6 days</span>
                </div>
                <div class="bs-label bg-red">-14%</div>
                <div class="center-div sparkline-big-alt">21,41,31,50,18,41</div>
                <div class="row list-grade">
                    <div class="col-md-2">M</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">W</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">F</div>
                    <div class="col-md-2">S</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        View all members
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    8960
                    <span>Total Downloads<b> in last</b> 6 years</span>
                </div>
                <div class="bs-label bg-orange">~51%</div>
                <div class="center-div sparkline-big-alt">2210,2310,2010,2310,2123,2350</div>
                <div class="row list-grade">
                    <div class="col-md-2">2009</div>
                    <div class="col-md-2">2010</div>
                    <div class="col-md-2">2011</div>
                    <div class="col-md-2">2012</div>
                    <div class="col-md-2">2013</div>
                    <div class="col-md-2">2014</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        View more details
                    </a>
                </div>
                <a href="#" class="btn btn-primary float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-caret-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Recent sales activity
                </h3>
                <div class="example-box-wrapper">
                    <div id="data-example-1" class="mrg20B" style="width: 100%; height: 300px;"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-success">
                    <div class="tile-header">
                        Photo Gallery
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10" data-percent="43"><span>43</span>%</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-info">
                    <div class="tile-header">
                        Subscriptions
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10" data-percent="76"><span>76</span>%</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-warning">
                    <div class="tile-header">
                        New Visitors
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10" data-percent="11"><span>11</span>%</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="content-box mrg20T">
            <h3 class="content-box-header bg-primary">
                Toggle button closed
                <span class="header-buttons-separator">
                    <a href="#" class="icon-separator toggle-button">
                        <i class="glyph-icon icon-chevron-down"></i>
                    </a>
                </span>
            </h3>
            <div class="content-box-wrapper hide">
                This content boxes has the header with <code>.bg-default</code>.
            </div>
        </div>

        <div class="content-box">
            <h3 class="content-box-header bg-default">
                <i class="glyph-icon icon-cog"></i>
                Live server status
                <span class="header-buttons-separator">
                    <a href="#" class="icon-separator">
                        <i class="glyph-icon icon-question"></i>
                    </a>
                    <a href="#" class="icon-separator refresh-button" data-style="dark" data-theme="bg-white" data-opacity="40">
                        <i class="glyph-icon icon-refresh"></i>
                    </a>
                    <a href="#" class="icon-separator remove-button" data-animation="flipOutX">
                        <i class="glyph-icon icon-times"></i>
                    </a>
                </span>
            </h3>
            <div class="content-box-wrapper">
                <div id="data-example-3" style="width: 100%; height: 250px;"></div>
            </div>
        </div>

    </div>
    <div class="col-md-4">
        <div class="row mrg20B">
            <div class="col-md-6">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-primary">
                    <span class="bs-badge badge-absolute">5</span>
                    <div class="tile-header">
                        Dashboard
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-dashboard"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-black">
                    <span class="bs-badge badge-absolute">5</span>
                    <div class="tile-header">
                        Orders
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-cogs"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Users activity
                </h3>
                <div class="example-box-wrapper">
                    <div class="timeline-box timeline-box-left">
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-red">
                                    <i class="glyph-icon icon-toggle-on"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label label-info">Appointment</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-primary">
                                    <i class="glyph-icon icon-wifi"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label bg-yellow">Teleconference</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-black">
                                    <i class="glyph-icon icon-headphones"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label label-danger">Meeting</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-box bg-white post-box">
            <textarea name="" class="textarea-autosize" placeholder="What are you doing right now?"></textarea>
            <div class="button-pane">
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-volume-down"></i>
                </a>
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-video-camera"></i>
                </a>
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-microphone"></i>
                </a>
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-picture-o"></i>
                </a>

                <a href="#" class="btn btn-md btn-post float-right btn-success" title="">
                    Post
                </a>

            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <ul class="todo-box">
                    <li class="border-red">
                        <input type="checkbox" name="todo-1" id="todo-1" />
                        <label for="todo-1">This is an example task that i need to finish</label>
                        <span class="bs-label bg-red" title="">Overdue</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                    <li class="border-orange">
                        <input type="checkbox" name="todo-2" id="todo-2" />
                        <label for="todo-2">Update server to a newer version</label>
                        <span class="bs-label bg-green" title="">2 Weeks</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                    <li class="border-blue">
                        <input type="checkbox" name="todo-3" id="todo-3" />
                        <label for="todo-3">Add more awesome template features</label>
                        <span class="bs-label bg-blue" title="">Tomorrow</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                    <li class="border-purple">
                        <input type="checkbox" name="todo-4" id="todo-4" />
                        <label for="todo-4">Never forget to buy milk</label>
                        <span class="bs-label bg-black" title="">Today</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

                

            </div>
        </div>
    </div>
