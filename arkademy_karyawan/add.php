<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Work</td>
                <td><input type="text" name="work"></td>
            </tr>
            <tr> 
                <td>Salary</td>
                <td><input type="text" name="salary"></td>
            </tr>
            <tr> 
                <td>Id Work</td>
                <td><input type="text" name="id_work"></td>
            </tr>
            <tr> 
                <td>Id Salary</td>
                <td><input type="text" name="id_salary"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $work = $_POST['work'];
        $salary = $_POST['salary'];
        $id_salary = $_POST['id_salary'];
        $id_work = $_POST['id_work'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $resultnama = mysqli_query($mysqli, "INSERT INTO nama(nama,id_work,id_salary) VALUES('$name','$id_work','$id_salary')");
        $resultwork = mysqli_query($mysqli, "INSERT INTO work(id,work,id_salary) VALUES('$id_work','$work','$id_salary')");
        $resultsalary = mysqli_query($mysqli, "INSERT INTO salary(id,id_salary) VALUES('$id_salary','$salary')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>