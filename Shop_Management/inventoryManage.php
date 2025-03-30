<?php
include("./config/database.php");
include("./config/middleware.php");
?>

<?php
// Delete user----
if (isset($_GET['emp_id'])) {
    $sql = "delete from employees where emp_id = " . $_GET['emp_id'];

    try {
        mysqli_query($conn, $sql);
        $_SESSION["success"] = "Employee Deleted Successfully!";
    } catch (mysqli_sql_exception) {
        $_SESSION["error"] = "Something went wrong!";
    }
}

// Get All Users
$sql = "select * from employees where shop_id = " . $_SESSION["user_data"]["shop_id"];
$result =  mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./include/sideNavPage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Responsive Side Nav</title>
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
                <h3>Employee Management</h3>
                <a href="./addEmployee.php" class="button edit">+Add New Employee</a>
            </div>
            <p style=" padding:0px 15px;">Manage your employees here.</p>
            <p style=" padding:0px 15px;"><?php include("./config/alert.php") ?></p>

            <table class="" id="inventoryTable">
                <thead>
                    <tr>
                        <th>Shop_Id</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Joining Date</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Resign Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $row["shop_id"] ?></td>
                                <td><?php echo $row["name"] ?></td>
                                <td><?php echo $row["position"] ?></td>
                                <td><?php echo $row["department"] ?></td>
                                <td><?php echo $row["joining_date"] ?></td>
                                <td><?php echo $row["salary"] ?></td>
                                <td><?php echo $row["status"] ?></td>
                                <td><?php echo $row["resign_date"] ?></td>
                                <td>
                                    <a href="./editEmployee.php?emp_id=<?php echo $row['emp_id'] ?>" class="button edit">Edit</a>

                                    <a href="./employee.php?emp_id=<?php echo $row['emp_id'] ?>" class="button delete">Delete</a>
                                </td>
                            </tr>
                    <?php }
                    } else {
                        echo "<tr><td colspan='8'>No Record Found!</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="./script/sideNav.js"></script>
</body>

</html>