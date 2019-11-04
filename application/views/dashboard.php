<?php
include 'header.php'
?>


<div class="container">
    <div class="row">
        <h2>ADMIN DASHBOARD</h2>
        <div style="position: relative;right: 300px;top:60px">

            <?php echo anchor("admin/addCollege", "ADD COLLEGE", ['class' => 'btn btn-primary']); ?>
            <?php echo anchor("admin/addCoadmin", "ADD COADMIN", ['class' => 'btn btn-primary']); ?>
            <?php echo anchor("admin/addstudent", "ADD STUDENT", ['class' => 'btn btn-primary']); ?>

        </div>

        <div style="">
            <table class="table" style="position: relative;top: 100px">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">College Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Column</td>
                    <td>Column</td>
                    <td>Column</td>
                    <td>Column</td>
                    <td>Column</td>
                    <td>Column</td>
                    <td>Column</td>
                    <td>Column</td>

                </tr>

                </tbody>
            </table>
        </div>


    </div>
</div>


<?php
include 'footer.php'
?>
