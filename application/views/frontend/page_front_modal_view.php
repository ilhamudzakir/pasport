<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 300px;">
        <div class="modal-content">
            <div class="modal-header" style="padding: 5px 20px;">
                <h4>Login</h4>
            </div>
            <div class="modal-body" style="padding: 25px 15px;">
                <div id="alert-login"></div>
                <form>
                    <div class="form-group has-feedback">
                        <span class="glyphicon glyphicon-envelope form-control-feedback" style="left: 0;"></span>
                        <input id="uname" name="uname" type="text" class="form-control" placeholder="Email" style="padding-left: 40px;" />
                    </div>
                    <div class="form-group has-feedback">
                        <span class="glyphicon glyphicon-lock form-control-feedback" style="left: 0;"></span>
                        <input id="pass" name="pass" type="password" class="form-control" placeholder="Password" style="padding-left: 40px;" />
                    </div>
                    <div class="form-group">
                        <div id="captcha">
                            <img src="<?php echo BASE_URL; ?>captcha" alt="" title="Captcha" />
                            <i id="load-captcha" class="glyphicon glyphicon-refresh" title="Reload Captcha"></i>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="captcha-txt" name="captcha-txt" type="text" class="form-control" placeholder="Please type text above" maxlength="5">
                    </div>
                    <!--<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">-->
                </form>
                <div class="text-right">
                    <a href="javascript:;">Lupa password</a><br>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-sm-12 text-center">
                    <a href="<?php echo BASE_URL; ?>beranda" class="btn btn-primary btn-flat">Masuk</a>
                    <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Batal</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- ./dialog login -->