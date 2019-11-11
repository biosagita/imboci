
<!--<div class="container-edit">
    <a style="color:#438086; width: 194px;
                height: 28px;
                font-family: Arial;
                font-size: 25px;
                font-weight: bold;">
    <i class="glyph-icon icon-angle-right"></i>
       Layanan Kami     
        <i class="glyph-icon icon-angle-left"></i>
        </a>
        
</div>-->
<h3 class="p-title" style="color:#438086; font-family: Arial;
                font-size: 25px;
                font-weight: bold;">
        
        <span>  <i class="glyph-icon icon-angle-right"></i> Layanan kami <i class="glyph-icon icon-angle-left"></i></span>
        
    </h3>


<div class="row no-gutter">
    <div class="col-md-4 col-md-push-1 col-xs-4">
    <div class="isi-tengah">
            <div class="wow flipInX" data-wow-delay="0.5s">
                <img class="hvr-bounce-in" width="100%" src="<?php echo base_url();?>/images/image-wni@3x.png"></img>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xs-4">
    <div class="center-horizontal"> 
        <div class="isi-tengah">
            <img class="hvr-wobble-vertical" width="100%" src="<?php echo base_url();?>/images/visi.png"></img>
        </div>
    </div>
       
    </div>
    <div class="col-md-4 col-md-pull-1 col-xs-4">
    <div class="isi-tengah">
            <div class="wow flipInX" data-wow-delay="0.9s">
                <img class="hvr-bounce-in" width="100%" src="<?php echo base_url();?>/images/image-wna@3x.png"></img>
            </div>
        </div>
    </div>
    
</div>  

<div class="row">
    <div class="col-md-2 col-xs-6 col-md-push-1" style = "height: 35px;">
        <div class="panel-box" style="border-radius: 8px;background-color: #438086;">
                <div class="panel-content" style="padding: 9px">
                    <h3 class="icon-title" style="width: 200px;
                    height: 28px;
                    font-family: Arial;
                    font-size: 20px;
                    font-weight: bold;
                    
                    text-align: center;
                    color: #ffffff;">
                    Layanan Online
                            
                    </h3>
                  
                </div>
        </div>
    </div>
</div>

<div style=" height: auto; border-radius: 10px; box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.1); background-color: var(--white); margin:0px 20px; padding:10px;">
    <div style=" height: auto; border-radius: 10px;box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.1); background-color: #cdeaed;">
        <div class="row">
            <div class="col-md-3 col-xs-6" style="margin-bottom:10px">
                <div class="lo4">
                    <img class="image-hover" width="100%" src="<?php echo base_url();?>/images/transparant-box.png"></img>
                </div>
            </div>
           
            <div class="col-md-3 col-xs-6"style="margin-bottom:10px">
                <div class="lo4">
                <img class="image2-hover" width="100%" src="<?php echo base_url();?>/images/transparant-box.png"></img>
                </div>
            </div>
            <div class="col-md-3 col-xs-6"style="margin-bottom:10px">
                <div class="lo4">
                <img class="image3-hover" width="100%" src="<?php echo base_url();?>/images/transparant-box.png"></img>
                </div>
            </div>
            <div class="col-md-3 col-xs-6"style="margin-bottom:10px">
                <div class="lo4">
                <img class="image4-hover" width="100%" src="<?php echo base_url();?>/images/transparant-box.png"></img>
                </div>
            </div>
        </div>

    </div>
</div>
<h3 class="p-title" style="color:#438086; font-family: Arial; margin:0px;
                font-size: 25px;
                font-weight: bold;">
        
        <span>  <i class="glyph-icon icon-angle-right"></i> Berita <i class="glyph-icon icon-angle-left"></i></span>
        
    </h3>

<div class="row" style="margin-top:-40px">
    <div class="col-md-4 pad45A">
        <div class="panel-layout">
            <div class="panel-box">

                <div class="panel-content image-box" style="max-height:500px">

                    <div class="image-content font-grey" >

                        <div class="top-vertical" style="margin-top: 50px; margin-bot:50px;">
                            <div class="meta-box center-content" style="text-align:center;">
                                <?php foreach($berita as $isi) {  ?>
                                <a href="<?php echo base_url(); ?>content/content_single/<?php echo $isi->id_sub_menu?>/<?php echo $isi->artikel_id?>" class="meta-subheading"><?php echo $isi->artikel_name ?></a>
                                <p class="meta-desc"><?php echo $isi->artikel_publish ?></p>
                                <br>
                                <?php } ?>
                              
                            </div>
                        </div>

                    </div>
                    <img width="100%" src="<?php echo base_url();?>/images/berita.png"></img>

                </div>
            </div>
        </div>
                
      
    </div>
    <div class="col-md-4 pad45A">
        <img width="100%" src="<?php echo base_url();?>/images/operational.png"></img>
    </div>
    <div class="col-md-4 pad45A ">
        <img width="100%" src="<?php echo base_url();?>/images/polling.png"></img>
    </div>
</div>