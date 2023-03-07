

<?php

include "./config/dbconnect.php";

$sql = "SELECT * FROM contact";

$result = $con->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Contact</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <table class="table .table-bordered">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Name</th>

                    <th>Tel</th>

                    <th>Email</th>

                    <th>Request</th>

                    <th>Address</th>

                </tr>

            </thead>

            <tbody>

                <?php

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {

                ?>

                            <tr>

                            <td><?php echo $row['id']; ?></td>

                            <td><?php echo $row['name']; ?></td>

                            <td><?php echo $row['tel']; ?></td>

                            <td><?php echo $row['email']; ?></td>

                            <td><?php echo $row['request']; ?></td>

                            <td><?php echo $row['address']; ?></td>

                            <td>
                            <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                            </tr>                      

                <?php       }

                    }

                ?>               

            </tbody>

        </table>

    </div>

</body>

</html>