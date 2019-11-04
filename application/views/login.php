<?php
include 'header.php'
?>

<div class="container">
    <!--    --><?php //form_open("welcome/adminSignup", ['class' => 'form-horizontal']); ?>
    <form method="post" action="<?php echo base_url('index.php/welcome/signin')?>">

        <h3>ADMIN LOGIN</h3>



        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" name="email">

            <div>
                <?php echo form_error('email','<div class="text-danger">','</div>')?>
            </div>
        </div>



        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password"
                   name="password">

            <div>
                <?php echo form_error('password','<div class="text-danger">','</div>')?>
            </div>

        </div>


        <button type="submit" class="btn btn-primary">LOGIN</button>
        <?php echo anchor("welcome", "BACK", ['class' => 'btn btn-primary']); ?>

    </form>

</div>

<?php
include 'footer.php'
?>
