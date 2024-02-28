
<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Login - Campus Ambasador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?= base_url() ?>assets/ms-icon-310x310.png">

        <link href="<?= base_url() ?>assets/admin-assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/admin-assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/admin-assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-primary bg-pattern">

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Login Campus Ambasador</h5>
                                    <form class="form-horizontal" action="<?php echo base_url('login/apply-login-credentials') ?>" method="POST">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="username">Email Address</label>
                                                    <input type="text" class="form-control" id="username" name="email" placeholder="Enter Email Address">
                                                    <?php echo form_error('email'); ?>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" class="form-control" id="userpassword"  name ="password" placeholder="Enter password">
                                                    <?php echo form_error('password'); ?>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12" style="text-align: center;color:#e30c2c;">
                                                            <?php echo $err_data; ?>
                                                       
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="<?= base_url() ?>assets/admin-assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>assets/admin-assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>assets/admin-assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url() ?>assets/admin-assets/libs/node-waves/waves.min.js"></script>

        <script src="<?= base_url() ?>assets/admin-assets/js/app.js"></script>

    </body>
</html>
