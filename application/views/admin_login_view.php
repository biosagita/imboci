<style type="text/css">

    html,body {
        height: 100%;
        background: #fff;
    }

</style>

<div class="center-vertical">
    <div class="center-content">

        <form action="<?php echo base_url('admin_login/login_proses'); ?>" id="login-validation" class="col-md-4 col-sm-5 col-xs-11 col-lg-3 center-margin" method="post">
            <h3 class="text-center pad25B font-gray text-transform-upr font-size-23">Web Admin <span class="opacity-80">v1.0</span></h3>
            <h5 class="text-center font-red"><?php echo $warning ?></h5>
            <div id="login-form" class="content-box bg-default">
                <div class="content-box-wrapper pad20A">
                    <img class="mrg25B center-margin radius-all-100 display-block" src="<?php echo base_url();?>images/logo-direktorat-imigrasi-2@3x.png" alt="">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-user"></i>
                            </span>
                            <input type="text" name="user" class="form-control" id="idlogin" placeholder="Nama Pengguna">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                            <input type="password" name="password" class="form-control" id="idpassword" placeholder="Kata Kunci">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                    <div class="row">
                        <div class="checkbox-primary col-md-12" style="height: 20px;">
                            <label>
                                <input type="checkbox" id="loginCheckbox1" class="custom-checkbox">
                                Remember me
                            </label>
                        </div>
                        
                    </div>
                </div>
            </div>

          

        </form>
      
    </div>
</div>
