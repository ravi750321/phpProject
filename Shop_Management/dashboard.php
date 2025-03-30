<?php
include("./config/database.php");
include("./config/middleware.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./include/sideNavPage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="./js/jquery-3.7.1.min.js"></script>
    <title>Home Page</title>
</head>

<body>
    <?php
    include("./sideNav.html");
    ?>
    <div class="main-content">

        <div class="header-top">
            <input style="width: 12em;"
                type="text"
                id="searchInput"
                class="form-control"
                placeholder="Search for Employees..." />
                <a href="./logout.php" class="button delete">Logout User</a>
            </div>

            <div class="header">
                <h3>Dashboard</h3>
            </div>

        <p style=" padding:0px 15px; color:#009900;">Hello <?php echo $_SESSION["user_data"]["username"] ?>(<?php echo $_SESSION["user_data"]["shop_name"] ?>), Welcome to platform!</p>

        <div class="container">
            <div class="card sales-activity">
                <h2>Sales Activity</h2>
                <div class="activity">
                    <div class="item">
                        <span class="count" style="color: blue;">51</span>
                        <span>Qty</span>
                        <span class="status">TO BE PACKED</span>
                    </div>
                    <div class="item">
                        <span class="count" style="color: red;">40</span>
                        <span>Pkgs</span>
                        <span class="status">TO BE SHIPPED</span>
                    </div>
                    <div class="item">
                        <span class="count" style="color: green;">52</span>
                        <span>Pkgs</span>
                        <span class="status">TO BE DELIVERED</span>
                    </div>
                    <div class="item">
                        <span class="count" style="color: gold;">97</span>
                        <span>Qty</span>
                        <span class="status">TO BE INVOICED</span>
                    </div>
                </div>
            </div>
            <div class="card inventory-summary">
                <h2>Inventory Summary</h2>
                <div class="summary">
                    <div class="summary-item">
                        <span>QUANTITY IN HAND</span>
                        <span class="count">12746</span>
                    </div>
                    <div class="summary-item">
                        <span>QUANTITY TO BE RECEIVED</span>
                        <span class="count">62</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./script/sideNav.js"></script>
</body>

</html>