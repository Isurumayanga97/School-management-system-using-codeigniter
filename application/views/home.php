<?php
include 'header.php'
?>

<div class="container">
    <div class="row">
        <div class="card" style="width: 1200px;">
            <div class="card-body" style="text-align: center">
                ADMIN OR CO-ADMIN LOGIN
                <hr>

                <div class="row">

                    <div class="col-md-4">
                        <?php echo anchor("welcome/adminRegister", "ADMIN REGISTER", ['class' => 'btn btn-primary']); ?>
                    </div>
                    <div class="col-md-4">
                        <?php echo anchor("welcome/login", "ADMIN LOGIN", ['class' => 'btn btn-primary']); ?>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<?php
include 'footer.php'
?>

