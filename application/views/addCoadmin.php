<?php
include 'header.php'
?>

<div class="container">
    <!--    --><?php //form_open("welcome/adminSignup", ['class' => 'form-horizontal']); ?>
    <form method="post" action="<?php echo base_url('index.php/admin/createCoadmin')?>">

        <h3>ADD COADMIN</h3>


        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter Name" name="username">
            <div>
                <?php echo form_error('username','<div class="text-danger">','</div>')?>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" name="email">

            <div>
                <?php echo form_error('email','<div class="text-danger">','</div>')?>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Gender</label>
            <div>
                <select class="col-lg-9" name="gender" style="width: 200px">
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div>
                <?php echo form_error('gender','<div class="text-danger">','</div>')?>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Role</label>
            <div>
                <select class="col-lg-9" name="role_id" style="width: 200px">
                    <option value="">Select</option>
                    <?php if (count($roles)): ?>
                        <?php foreach ($roles as $role): ?>
                            <option value=<?php echo $role->role_id?>><?php echo $role->rolename?></option>
                            <!--                <option>--><?php //echo $role->rolename?><!--</option>-->

                        <?php endforeach;?>
                    <?php endif; ?>
                </select>
            </div>

            <div>
                <?php echo form_error('role_id','<div class="text-danger">','</div>')?>
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

        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password Again"
                   name="confpwd">

            <div>
                <?php echo form_error('confpwd','<div class="text-danger">','</div>')?>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">ADD</button>
        <?php echo anchor("admin", "BACK", ['class' => 'btn btn-primary']); ?>

    </form>
    <!--    --><?php //echo form_close(); ?>
</div>

<?php
include 'footer.php'
?>
