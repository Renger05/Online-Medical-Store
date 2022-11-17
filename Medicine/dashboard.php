<?php
require ("connection.php");

session_start();

?>

<?php require ("header.php");?>

<a href="logout.php">Logout</a></br>
</br>

    <?php
        if(isset($_SESSION['status']) && $_SESSION !='')
        {
            ?>
            <div>
                <strong>Dashboard Table </strong><?php echo $_SESSION['status'] ?>
            </div>

            <?php
        }
    ?>


<div style="width:100%; border:1px solid red; height:300px;">

        <?php
            $query = "SELECT * FROM user";
            $data = mysqli_query($conn, $query);

        ?> 

        <table style="width:100%;">
            <thead>
                <!-- TR ( Table Row ) -->
                <tr style="text-align:center;">
                    <!-- TH ( Table Header) -->
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Number</th>
                    <th>Gender</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <div>

                    <?php
                        if(mysqli_num_rows($data) > 0)
                        {
                            foreach($data as $row)
                            {
                                ?>

                                    <tr style="text-align:center;">
                                        <!-- Table Data -->

                                        <td><?php echo $row['id'] ?> </td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['password'] ?></td>
                                        <td><?php echo $row['number'] ?></td>
                                        <td><?php echo $row['gender'] ?></td>
                                        <td>
                                            <img src="<?php echo $row['image'] ?>" width="80px" height="80px">
                                        </td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                                        </td>
                                        <td>
                                            <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                                        </td>
                                    </tr>


                                <?php
                            }

                        }

                    ?>

                </div>
                
            </tbody>
        </table>

</div>
