<?php
include 'header.php'
?>

<div class="container">
    <!--    --><?php //form_open("welcome/adminSignup", ['class' => 'form-horizontal']); ?>
    <form method="post" action="<?php echo base_url('index.php/admin/createCollege') ?>">

        <h3>ADD COLLEGE</h3>


        <div class="form-group">
            <label for="exampleInputPassword1">College Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter College Name"
                   name="collegename">

            <div>
                <?php echo form_error('collegename', '<div class="text-danger">', '</div>') ?>
            </div>

        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Branch</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Branch"
                   name="branch">

            <div>
                <?php echo form_error('branch', '<div class="text-danger">', '</div>') ?>
            </div>

        </div>


        <button type="submit" class="btn btn-primary">ADD COLLEGE</button>
        <?php echo anchor("admin", "BACK", ['class' => 'btn btn-primary']); ?>


    </form>


    <div class="row">
        <div style="width: 1105px;margin-left: 0px;margin-top: 10px">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">College ID</th>
                    <th scope="col">College Name</th>
                    <th scope="col">Branch</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as  $d){?>

                    <tr>
                        <td><?= $d->college_id ?></td>
                        <td><?= $d->collegename ?></td>
                        <td><?= $d->branch?></td>
                        </td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>


</div>

<?php
include 'footer.php'
?>
