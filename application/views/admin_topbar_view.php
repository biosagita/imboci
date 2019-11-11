<div id="page-header" class="bg-gradient-9">
            <div id="mobile-navigation">
                <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
                <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
            </div>
        <div id="header-logo" class="logo-bg">
            <a href="index.html" class="logo-content-big" title="MonarchUI">
                Monarch <i>UI</i>
                <span>The perfect solution for user interfaces 111</span>
            </a>
            <a href="index.html" class="logo-content-small" title="MonarchUI">
                Monarch <i>UI</i>
                <span>The perfect solution for user interfaces</span>
            </a>
            <a id="close-sidebar" href="#" title="Close sidebar">
                <i class="glyph-icon icon-angle-left"></i>
            </a>
        </div>
    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                <img width="28" src="<?php echo base_url();?>assets/image-resources/gravatar.jpg" alt="Profile image">
                <span><?php echo $nama; ?></span>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <a href="#" title="" class="change-img">Change photo</a>
                            <img src="<?php echo base_url();?>assets/image-resources/gravatar.jpg" alt="">
                        </div>
                        <div class="user-info">
                            <span>
                            <?php echo $nama; ?>
                                <i>UX/UI developer</i>
                            </span>
                            <a href="#" title="Edit profile">Edit profile</a>
                            <a href="#" title="View notifications">View notifications</a>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <ul class="reset-ul mrg5B">
                        <li>
                            <a href="#">
                                View login page example
                                <i class="glyph-icon float-right icon-caret-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                View lockscreen example
                                <i class="glyph-icon float-right icon-caret-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                View account details
                                <i class="glyph-icon float-right icon-caret-right"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="#" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header-nav-left -->

    <div id="header-nav-right">
        <a href="#" class="hdr-btn popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
            <i class="glyph-icon icon-search"></i>
        </a>
        <div class="hide" id="popover-search">
            <div class="pad5A box-md">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search terms here ...">
                    <span class="input-group-btn">
                        <a class="btn btn-primary" href="#">Search</a>
                    </span>
                </div>
            </div>
        </div>
        <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
            <i class="glyph-icon icon-arrows-alt"></i>
        </a>
      
       
        <div class="dropdown" id="dashnav-btn">
            <a href="#" data-toggle="dropdown" data-placement="bottom" class="popover-button-header tooltip-button" title="Dashboard Quick Menu">
                <i class="glyph-icon icon-linecons-cog"></i>
            </a>
            <div class="dropdown-menu float-right">
                <div class="box-sm">
                    
                   
                </div>
            </div>
        </div>
      

    </div><!-- #header-nav-right -->


       
</div>