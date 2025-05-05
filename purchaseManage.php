<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Manage</title>

    <link rel="stylesheet" href="./css/sidenav.css">
    <link rel="stylesheet" href="./css/gridTable.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</head>

<body>
    <div class="grid">

        <div id="navbar" class="item">
            <div class="flex-nav">
                <span>
                    <h4>Shop Management</h4>
                </span>

                <div class="dropdown text-end">

                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>

                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>

                </div>

            </div>

        </div>

        <div id="aside" class="item">
            <?php
            include("./sidenav.html");
            ?>
        </div>

        <div id="section" class="item">
            <div class="header border-bottom">

                <h4>Purchase Manage</h4>

                <!-- <form>
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form> -->

                <a href="./newPurchase.php" class="btn btn-warning">+New Purchase</a>

            </div>

            <div class="overflow-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Shop_id</th>
                            <th>Date</th>
                            <th>Purchase Number</th>
                            <th>Vendor Name</th>
                            <th>Amount</th>
                            <th>Purchase Order</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Default</td>
                            <td>Defaultson</td>
                            <td>Default</td>
                            <td>Default</td>
                            <td>Defaultson</td>
                            <td>Default</td>
                            <td>
                                <a href="./editItem.php?item_id=" class="btn btn-primary">Edit</a>

                                <a href="./inventoryItem.php?item_id=" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Default</td>
                            <td>Defaultson</td>
                            <td>Default</td>
                            <td>Default</td>
                            <td>Defaultson</td>
                            <td>Default</td>
                            <td>
                                <a href="./editItem.php?item_id=" class="btn btn-primary">Edit</a>

                                <a href="./inventoryItem.php?item_id=" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Default</td>
                            <td>Defaultson</td>
                            <td>Default</td>
                            <td>Default</td>
                            <td>Defaultson</td>
                            <td>Default</td>
                            <td>
                                <a href="./editItem.php?item_id=" class="btn btn-primary">Edit</a>

                                <a href="./inventoryItem.php?item_id=" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr class="table-danger">
                            <td colspan="7">No Record Found</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div id="footer" class="item">

            <span>
                @Copyright Shop Management
            </span>
        </div>

    </div>

</body>

</html>