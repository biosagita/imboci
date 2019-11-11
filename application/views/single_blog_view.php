<div id="page-content" class="container mrg25T">
    <div class="row">
        <div class="col-md-3">
           
                    <h3 class="title-hero">
                        <?php echo $nama_menu ?>
                    </h3>
                    <div class="example-box-wrapper">
                        <div class="list-group">
                            <?php foreach($list_sub_menu as $submenu){  
                                if($submenu->id_sub_menu==$id_submenu) 
                                    {?><a href="<?php echo base_url(); ?>home/navi/<?php echo $submenu->id_sub_menu?>" class="list-group-item active" style="background:#438086"><?php echo $submenu->nama_sub_menu ?></a><?php }
                                else {?><a href="<?php echo base_url(); ?>home/navi/<?php echo $submenu->id_sub_menu?>" class="list-group-item "><?php echo $submenu->nama_sub_menu ?></a><?php }
                             } ?>

                           
                        </div>
                    </div>
              
        </div>
        <div class="col-md-9">
            <div class="blog-box blog-box-single blog-box-alt row">
                <a class="post-title" href="blog-single.html" title="">
                    <h3><?php echo $content->artikel_name ?></h3>
                </a>
                <div class="post-image">
                    <a href="<?php echo base_url();?>images/content_image/<?php echo $content->artikel_image ?>" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="<?php echo $nama_sub_menu ?>">
                        <img class="img-responsive lazy img-rounded" src="<?php echo base_url();?>images/content_image/<?php echo $content->artikel_image ?>" data-original="<?php echo base_url();?>images/content_image/<?php echo $content->artikel_image ?>" alt="" />
                    </a>
                </div>
                <div class="post-content-wrapper">
                    <div class="post-meta clearfix">
                        <span class="float-left">
                            <i class="glyph-icon icon-user"></i>
                            <a href="#" title=""> <?php echo $content->artikel_author ?></a>
                        </span>
                        <span class="float-left">
                            <i class="glyph-icon icon-clock-o"></i>
                            <?php echo $content->artikel_publish ?>
                        </span>
                       
                    </div>
                    <div class="divider"></div>
                    <div class="post-content">
                        <?php echo $content->artikel_content ?>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>