<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Inventory</title>

    <link rel="stylesheet" href="./css/sidenav.css">
    <link rel="stylesheet" href="./css/gridForm.css">
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

                <h4>Add New Item</h4>

                <!-- <form>
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form> -->

                <a href="./manageInventory.php" class="btn btn-warning">Close</a>

            </div>

            <div class="overflow-auto">
                <form id="registerForm" action="./addNewItem.php" method="post">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="sku" class="form-label">SKU</label>
                        <input type="text" id="sku" name="sku" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea
                            name="desc"
                            id="desc"
                            placeholder=" Description about item..." class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Opening Stock</label>
                        <input type="text" id="stock" name="stock" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <select
                            id="unit" name="unit" class="form-control" required>
                            <option selected>Unit</option>
                            <option value="Dozen">Dozen</option>
                            <option value="Box">Box</option>
                            <option value="Grams">Grams</option>
                            <option value="Kilograms">Kilograms</option>
                            <option value="Meters">Meters</option>
                            <option value="Tablets">Tablets</option>
                            <option value="Units">Units</option>
                            <option value="Pieces">Pieces</option>
                            <option value="Pairs">Pairs</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="rate" class="form-label">Rate/Unit</label>
                        <input type="text" id="rate" name="rate" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Add Item" class="btn btn-primary" />
                    </div>

                </form>
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