<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/gridTable.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/sidenav.css">

</head>

<body>
  <div class="grid">

    <div id="navbar" class="item">

      <span>
        <h4>Shop Management</h4>
      </span>

      <div class="dropdown text-end">

        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>

        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>

      </div>

    </div>

    <div id="aside">
      <div class="sidebar-nav">
        <h4>Inventory</h4>

        <ul>
          <li><a href="./dashboard.php">Dashboard</a></li>
          <li class="mb-1">
            <button
              class="btn-li"
              data-bs-toggle="collapse"
              data-bs-target="#inventory-collapse"
              aria-expanded="true">
              Inventory
            </button>
            <div class="collapse show" id="inventory-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="./inventoryItem.php">Items</a></li>
                <li><a href="#">Inventory Adjustments</a></li>
              </ul>
            </div>
          </li>

          <li class="mb-1">
            <button
              class="btn-li"
              data-bs-toggle="collapse"
              data-bs-target="#sales-collapse"
              aria-expanded="false">
              Sales Management
            </button>
            <div class="collapse" id="sales-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#">Customers</a></li>
                <li><a href="./invoices.php">Invoices</a></li>
                <li><a href="#">Payment Recieved</a></li>
                <li><a href="#">Sales Return</a></li>
              </ul>
            </div>
          </li>
          <li><a href="./purchase.php">Purchase</a></li>
          <li><a href="./employee.php ">Employee Management</a></li>
          <li><a href="#">Reports</a></li>
        </ul>
      </div>

    </div>

    <div id="section">

      <header class="p-3 mb-3 border-bottom">
        <div class="container">
          
          <h4>Inventory Manage</h4>

          <!-- <form>
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </form> -->

          <a href="./addNewItem.php" class="btn btn-warning">+Add New Item</a>
          
        </div>
      </header>

    </div>
    <div id="footer" class="item">@Copyright Shop Management</div>
  </div>
</body>

</html>