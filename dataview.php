<?php
include 'database.php';
?>
<!doctype html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>STRATHMORE SCHOOL - TRANSPORT INFO</title>
        <link rel="stylesheet" href="datastyles.css">
        <link rel="icon" type="image/x-icon" href="strathlogo.gif">
</head>
<body>

        <section id="header">

        <div id="logo">
            <img src="strathlogo.gif" alt="Strathmore Logo" width="100" height="100">
        </div>

        <div id="headertext">
            <h1>STRATHMORE SCHOOL <br> 2023 Transport Survey</h1>
        </div>

    </section>

        <section class="table">
            <div class="container">
            <table>
                <thead>
                                <tr>
                        <th>ID</th>
                    <th>Son names</th>
                                        <th>Son classes</th>
                                        <th>Morning transport<br>2022</th>
                                        <th>Evening transport<br>2022</th>
                                        <th>Transport 2023 option</th>
                                        <th>School transport 2023 option</th>
                    <th>Home street address</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>City</th>
                    <th>General comments</th>
                                </tr>
                                </thead>
                                                                                                                                                                                    1,1           Top
                            <tbody>
                                        <?php
                                                $result = mysqli_query($conn,"SELECT * FROM tbl_information");
                                                $i=1;
                                                while($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <td><?php echo $row["sid"]; ?></td>
                        <td><?php echo $row["firstname"]."<br>".$row["secondname"]."<br>".$row["thirdname"]."<br>".$row["fourthname"]."<br>".$row["fifthname"]; ?></td>
                        <td><?php echo $row["firstnameclass"]."<br>".$row["secondnameclass"]."<br>".$row["thirdnameclass"]."<br>".$row["fourthnameclass"]."<br>".$row["fifthnameclass"]; ?></td>
                                        <td><?php echo $row["transportmorning22"]; ?></td>
                                        <td><?php echo $row["transportevening22"]; ?></td>
                                        <td><?php echo $row["transport23"]; ?></td>
                                        <td><?php echo $row["schooltransport23"]; ?></td>
                                        <td><?php echo $row["streetaddress"]; ?></td>
                                        <td><?php echo $row["latitude"]; ?></td>
                                        <td><?php echo $row["longitude"]; ?></td>
                                        <td><?php echo $row["city"]; ?></td>
                                        <td><?php echo $row["comment"]; ?></td>
                                        </tr>
                        <?php
                                                $i++;
                                                }
                                        ?>
                                </tbody>
                        </table>
                           <section id="foot">
                <footer>
                                        <div style="display: flex; justify-content: center; font-family: 'Raleway', sans-serif;">
                    <p>Strathmore School, &copy 2022.</p>
                                        </div>
                </footer>
                </section>
</body>
</html>
