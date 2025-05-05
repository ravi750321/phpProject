<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>

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

                <h4>Add New Employee</h4>

                <!-- <form>
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form> -->

                <a href="./employeeManage.php" class="btn btn-warning">Close</a>

            </div>

            <div class="overflow-auto">
                <form style="padding: 10px 20px;" id="registerForm" action="./addNewItem.php" method="post">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" id="position" name="position" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" id="department" name="department" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="joining" class="form-label">Joining Date</label>
                        <input type="date" id="joining" name="joining" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="text" id="salary" name="salary" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="unit" class="form-label">Status</label>
                        <select
                            id="unit" name="unit" class="form-control" required>
                            <option selected>Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Add Employee" class="btn btn-primary" />
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