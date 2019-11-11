<div class="main-header bg-header wow fadeInDown">
    <div class="container">
    <a href="<?php echo base_url(); ?>" class="header-logo-edit" style="background-image: url('<?php echo base_url();?>/images/logo.png');" title="Kantor Imigrasi Bogor" ></a><!-- .header-logo -->
    <div class="right-header-btn">
        <div id="mobile-navigation">
            <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target=".header-nav"><span></span></button>
        </div>
        <div class="search-btn">
            <a href="#" class="popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
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
        </div>
       
    </div><!-- .header-logo -->
    <ul class="header-nav collapse">
        <?php foreach($menus as $menu) { ?>
           
                <?php
                   switch ($menu->style_menu) {
                       case 1: ?>
                       <li> 
                       <a href="<?php echo base_url(); ?>" title="<?php echo $menu->nama_menu ?>">
                       <?php echo $menu->nama_menu ?>
                       <i class="glyph-icon icon-home"></i>
                       </a> <?php ;
                       break;
                       case 2: ?>
                        <li> 
                        <a href="#" title="<?php echo $menu->nama_menu ?>">
                        <?php echo $menu->nama_menu ?>
                        <i class="glyph-icon icon-angle-down"></i>
                        </a> 
                        <ul><?php ;
                        if (isset($menu->children)) {
                        foreach ($menu->children as $sub_menu) {
                            ?>
                             <li><a href="<?php echo base_url();?>home/navi/<?php echo $sub_menu->id_sub_menu?>" title="<?php echo $sub_menu->nama_sub_menu ?>"><span><?php echo $sub_menu->nama_sub_menu ?></span></a></li>
                        <?php }
                        } ?>
                        </ul>
                        <?php
                       break;
                       case 3: ?>
                        <li class="sf-mega">
                        <a href="#" title="<?php echo $menu->nama_menu ?>">
                        <?php echo $menu->nama_menu ?>
                        <i class="glyph-icon icon-angle-down"></i>
                        </a> 
                        <ul class="sf-mega-menu clearfix"><?php ;
                        if (isset($menu->children)) {
                            ?>
                            <li class="col-lg-4 col-xs-12 col-sm-4 col-md-4">
                            <h3 class="header">WNI</h3>
                            <?php
                            foreach ($menu->children as $sub_menu) {
                                if ($sub_menu->grup_sub_menu=='WNI') {
                                   ?> <a href="<?php echo base_url(); ?>home/navi/<?php echo $sub_menu->id_sub_menu?>" title="<?php echo $sub_menu->nama_sub_menu ?>"><span><?php echo $sub_menu->nama_sub_menu ?></span></a> <?php
                                }
                            }
                            ?>
                             </li>
                             <li class="col-lg-4 col-xs-12 col-sm-4 col-md-4">
                             <h3 class="header">WNA</h3>  
                             <?php
                            foreach ($menu->children as $sub_menu) {
                                if ($sub_menu->grup_sub_menu=='WNA') {
                                   ?> <a href="<?php echo base_url(); ?>home/navi/<?php echo $sub_menu->id_sub_menu?>" title="<?php echo $sub_menu->nama_sub_menu ?>"><span><?php echo $sub_menu->nama_sub_menu ?></span></a> <?php
                                }
                            }
                            ?>
                             </li>
                             <li class="col-lg-4 col-xs-12 col-sm-4 col-md-4">
                             <h3 class="header">Layanan Online</h3>  
                             <?php
                            foreach ($menu->children as $sub_menu) {
                                if ($sub_menu->grup_sub_menu=='Layanan Online') {
                                   ?> <a href="<?php echo base_url(); ?>home/navi/<?php echo $sub_menu->id_sub_menu?>" title="<?php echo $sub_menu->nama_sub_menu ?>"><span><?php echo $sub_menu->nama_sub_menu ?></span></a> <?php
                                }
                            }
                            ?>
                             </li>
                            <?php 
                            } ?>
                            </ul>
                            <?php
                       break;
                   }
                       
                ?>
          

            </li>
        <?php } ?> 
      
    
    
       
       
       
    </ul><!-- .header-nav -->
</div><!-- .container -->
</div><!-- .main-header -->