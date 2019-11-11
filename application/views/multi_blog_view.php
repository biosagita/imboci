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
            <?php foreach($content as $isi) {  ?>
            <div class="blog-box row">
                <div class="post-image col-md-4">
                    <a href="<?php echo base_url();?>images/content_image/<?php echo $isi->artikel_image ?>" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="<?php echo $nama_sub_menu ?>">
                        <img class="img-responsive lazy img-rounded" src="<?php echo base_url();?>images/content_image/<?php echo $isi->artikel_image ?>" data-original="<?php echo base_url();?>images/content_image/<?php echo $isi->artikel_image ?>" alt="" />
                    </a>
                </div>
                
                <div class="post-content-wrapper col-md-8">
                    <a class="post-title" href="<?php echo base_url(); ?>content/content_single/<?php echo $isi->id_sub_menu?>/<?php echo $isi->artikel_id?>" title="">
                        <h3><?php echo $isi->artikel_name ?></h3>
                    </a>
               
                    <div class="post-meta">
                        <span>
                            <i class="glyph-icon icon-user"></i>
                            <a href="#" title=""> <?php echo $isi->artikel_author ?></a>
                        </span>
                        <span>
                            <i class="glyph-icon icon-clock-o"></i>
                            <?php echo $isi->artikel_publish ?>
                        </span>
                       
                    </div>
                    <div class="post-content">
                        <?php $singkat = character_limiter($isi->artikel_content,300); 
                        echo $singkat;?>
                    </div>
                    <a href="<?php echo base_url(); ?>content/content_single/<?php echo $isi->id_sub_menu?>/<?php echo $isi->artikel_id?>" class="btn btn-sm btn-default" title="Read more">Read more</a>
                </div>
            </div>

            <?php } ?>
           
        </div>  
    </div>
</div>