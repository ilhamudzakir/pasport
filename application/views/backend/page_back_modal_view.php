<div id="logout" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 300px;">
        <div class="modal-content">
            <div class="modal-body text-center" style="padding: 25px 15px;">
                Anda yakin ingin keluar ?
            </div>
            <div class="modal-footer">
                <div class="col-sm-12 text-center">
                    <a href="<?php echo BASE_URL; ?>" class="btn btn-danger">Ya</a>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Tidak</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- ./dialog logout -->
<div id="confirm-submit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 300px;">
        <div class="modal-content">
            <div id="submit-txt" class="modal-body text-center" style="padding: 25px 15px;"></div>
            <div class="modal-footer">
                <div class="col-sm-12 text-center">
                    <button id="submit-btn" type="button" class="btn btn-success">Lanjut</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- ./dialog confirm -->
<div id="alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 300px;">
        <div class="modal-content">
            <div id="alert-txt" class="modal-body text-center" style="padding: 25px 15px;"></div>
            <div class="modal-footer">
                <div class="col-sm-12 text-center">
                    <button data-dismiss="modal" class="btn btn-default" type="button">OK</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- ./dialog alert -->