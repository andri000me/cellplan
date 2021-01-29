<div class="container pt-5">
    <div class="row justify-content-center py-5">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <?php echo form_open('member/login'); ?>

                        <div class="form-group row">
                            <label for="nip" class="col-md-4 col-form-label text-md-right">NIP</label>

                            <div class="col">
                                <input id="nip" type="text" class="form-control" name="user" required autocomplete="user" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pass" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col">
                                <input id="pass" type="password" class="form-control" name="pass" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <a href="<?php echo site_url() ?>/gmaps" class="nav-link center">Zona Cellplan Direkomendasikan >></a>
                            <div class="col-md-8 offset-sm-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                        <?php echo validation_errors(); ?><?php echo $ket; ?>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>