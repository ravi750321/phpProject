<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/grid.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/sidenav.css">

</head>

<body>
  <div class="grid">

    <div id="navbar" class="item"><span>
        <h4>Shop Management</h4>
      </span>

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
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
          <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
          <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footer" class="item">@Copyright Shop Management</div>
  </div>
</body>

</html>