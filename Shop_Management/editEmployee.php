<?php
include("./config/database.php");
include("./config/middleware.php");
?>
<?php
// get userdata by emp_id--
if (isset($_GET['emp_id'])) {
    $sql = "select * from employees where emp_id = " . $_GET['emp_id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    echo "<h1>Invalid request!</h1>";
}

// update user---
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);

    $position = filter_input(INPUT_POST, "position", FILTER_SANITIZE_SPECIAL_CHARS);

    $department = filter_input(INPUT_POST, "department", FILTER_SANITIZE_SPECIAL_CHARS);

    $joining = filter_input(INPUT_POST, "joining", FILTER_SANITIZE_SPECIAL_CHARS);

    $salary = filter_input(INPUT_POST, "salary", FILTER_SANITIZE_NUMBER_INT);

    $status = filter_input(INPUT_POST, "status", FILTER_SANITIZE_SPECIAL_CHARS);

    $resign = filter_input(INPUT_POST, "resign", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "update employees set 
    name = '$name',
    position = '$position',
    department = '$department',
    joining_date = '$joining',
    salary = '$salary',
    status = '$status',
    resign_date = '$resign' where emp_id =" . $_GET['emp_id'];

    try {
        mysqli_query($conn, $sql);
        $_SESSION["success"] = "Employee(<strong>{$username}</strong>) Info. Updated Successfully!<br/>";
        ?>
        <script>
        window.location.href="employee.php";
        // location.replace("employee.php");
        </script>
<?php
    } catch (mysqli_sql_exception) {
        $_SESSION["error"] = "Something went wrong!!<br/>";
        ?>
        <script>
        window.location.href="editEmployee.php";
        // location.replace("editEmployee.php");
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="./include/sideNavPage.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Employee Update</title>
</head>

<body>
    <?php
    include("./sideNav.html");
    ?>

    <div class="main-content">
        <div class="section">

            <div class="header-top">
                <input style="width: 12em;"
                    type="text"
                    id="searchInput"
                    class="form-control"
                    placeholder="Search for Employees..." />
                    <a href="./logout.php" class="button delete">Logout User</a>
                <script>
                    document
                        .getElementById("searchInput")
                        .addEventListener("keyup", function() {
                            var input = this.value.toLowerCase();
                            var rows = document.querySelectorAll(
                                "#inventoryTable tbody tr"
                            );
                            rows.forEach(function(row) {
                                var itemName = row.cells[0].textContent.toLowerCase();
                                row.style.display = itemName.includes(input) ? "" : "none";
                            });
                        });
                </script>
            </div>

            <div class="header">
                <h3>Update Employee</h3>
                <a href="./employee.php" class="button delete">Close</a>
            </div>

            <p style=" padding:0px 15px;"><?php include("./config/alert.php") ?></p>

            <form style="padding: 10px 20px;" id="registerForm" action="editEmployee.php?emp_id=<?php echo $_GET['emp_id'] ?>" method="post">

                <div class="register-box">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name"
                        value="<?php echo $row['name'] ?>" required>
                    </div>

                    <div class="input-group">
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position"
                        value="<?php echo $row['position'] ?>" required>
                    </div>

                    <div class="input-group">
                        <label for="department">Department</label>
                        <input type="text" id="department" name="department"
                        value="<?php echo $row['department'] ?>" required>
                    </div>

                    <div class="input-group">
                        <label for="joining">Joining Date</label>
                        <input type="date" id="joining" name="joining"
                        value="<?php echo $row['joining_date'] ?>" required>
                    </div>

                    <div class="input-group">
                        <label for="salary">Salary</label>
                        <input type="text" id="salary" name="salary" 
                        value="<?php echo $row['salary'] ?>" required>
                    </div>

                    <div class="input-group">
                        <label for="status">Status</label>
                        <select style="width: 100%; padding: 10px;
                                border: 1px solid #dddddd;
                                border-radius: 5px;
                                font-size: 16px;"
                            id="status" name="status"
                            value="<?php echo $row['status'] ?>" required>
                            <option value="Active">Active</option>
                            <option value="saab">Inactive</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="resign">Resign Date</label>
                        <input type="date" id="resign" name="resign"
                        value="<?php echo $row['resign_date'] ?>" required>
                    </div>

                    <div class="input-group">
                    <input style="margin-top: 15px;" class="button edit" type="submit" value="Update Employee" />
                    </div>

                </div>
            </form>
        </div>
    </div>

</body>

</html>