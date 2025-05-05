<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>

  <link rel="stylesheet" href="./css/sidenav.css">
  <link rel="stylesheet" href="./css/grid.css">
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

        <h4>Dashboard</h4>

                    <!-- <form>
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form> -->
      </div>

      <div class="overflow-auto">
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

    </div>

    <div id="footer" class="item">

      <span>
        @Copyright Shop Management
      </span>
    </div>

  </div>

</body>

</html>