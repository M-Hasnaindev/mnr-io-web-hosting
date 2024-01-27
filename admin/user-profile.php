<?php
include "headerindex.php";
include "connect.php"; 

$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);

if ($result) {
    ?>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">Latest Projects</h5>
                </div>
                <table class="table table-hover my-0 table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone-Number</th>
                            <th>Register Date</th>
                            <!-- <th>End date</th> -->
                            <th>Status</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['phonenumber']; ?></td>
                                <td><?php echo $row['date_and_time']; ?></td>
                                
                                <td><span class="badge bg-success">Done</span></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
} else {

    echo "Error: " . mysqli_error($con);
}


mysqli_close($con);
?>
