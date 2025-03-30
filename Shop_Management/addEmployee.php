<?php
include("./config/database.php");
include("./config/middleware.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./include/sideNavPage.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>New Employee</title>
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
                <h3>Add New Employee</h3>
                <a href="./employee.php" class="button delete">Close</a>
            </div>
            <p style=" padding:0px 15px;"><?php include("./config/alert.php") ?></p>
            <form style="padding: 10px 20px;" id="registerForm" action="./addEmployee.php" method="post">

                <div class="register-box">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="input-group">
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position" required>
                    </div>

                    <div class="input-group">
                        <label for="department">Department</label>
                        <input type="text" id="department" name="department" required>
                    </div>

                    <div class="input-group">
                        <label for="joining">Joining Date</label>
                        <input type="date" id="joining" name="joining" required>
                    </div>

                    <div class="input-group">
                        <label for="salary">Salary</label>
                        <input type="text" id="salary" name="salary" required>
                    </div>

                    <div class="input-group">
                        <label for="status">Status</label>
                        <select style="width: 100%; padding: 10px;
                                border: 1px solid #dddddd;
                                border-radius: 5px;
                                font-size: 16px;"
                            id="status" name="status" required>
                            <option value="Active">Active</option>
                            <option value="saab">Inactive</option>
                        </select>

                        <input style="margin-top: 15px;" class="button edit" type="submit" value="Add Employee" />
                    </div>
                </div>


                <!-- <div class="header-bottom">
                    <a href="users.php" class="button edit">Add Employee</a>
                </div> -->
            </form>
        </div>
    </div>

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // extract($_POST);
    $shop_id = $_SESSION["user_data"]["shop_id"];

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);

    $position = filter_input(INPUT_POST, "position", FILTER_SANITIZE_SPECIAL_CHARS);

    $department = filter_input(INPUT_POST, "department", FILTER_SANITIZE_SPECIAL_CHARS);

    $joining = filter_input(INPUT_POST, "joining", FILTER_SANITIZE_SPECIAL_CHARS);

    $salary = filter_input(INPUT_POST, "salary", FILTER_SANITIZE_NUMBER_INT);

    $status = filter_input(INPUT_POST, "status", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "INSERT INTO employees (shop_id,name,position,department,joining_date,salary,status) values ('$shop_id','$name','$position','$department','$joining','$salary','$status')";

    try {
        mysqli_query($conn, $sql);
        $_SESSION["success"] = "Employee Added successfully!<br>";
        ?>
        <script>
        window.location.href="employee.php";
        // location.replace("employee.php");
        </script>
<?php
    } catch (mysqli_sql_exception) {
        $_SESSION["error"] = "Something Went Wrong!<br/>";
        ?>
        <script>
        window.location.href="addEmployee.php";
        // location.replace("addEmployee.php");
        </script>
        <?php
    }
}
?>