<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Purchase</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/sidenav.css">
    <link rel="stylesheet" href="./css/gridFormTableItem.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- CSS -->

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/purchasePageScript.js"></script>
    <!-- Script -->

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

                <h4>New Purchase</h4>

                <!-- <form>
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form> -->

                <a href="./managePurchase.php" class="btn btn-warning">Close</a>

            </div>

            <div class="overflow-auto">
                <form id="registerForm" action="./addNewItem.php" method="post">

                    <div class="mb-3">
                        <label for="vendor_name" class="form-label">Vendor Name</label>
                        <input type="text" id="vendor_name" name="vendor_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="vendor_address" class="form-label">Vendor Address</label>
                        <textarea
                            name="vendor_address"
                            id="vendor_address"
                            placeholder="Enter the vendor address..." class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="purchase_order" class="form-label">Purchase Order</label>
                        <input type="text" id="purchase_order" name="purchase_order" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="purchase_date" class="form-label">Purchase Date</label>
                        <input type="date" placeholder="dd/MM/yyyy" data-integrity="date" id="purchase_date" name="purchase_date" class="form-control" required>
                    </div>

                    <div class="invoice-items">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="item-row">
                                    <td>
                                        <input type="text" name="item_name[]" placeholder="Item 1" required>
                                    </td>

                                    <td>
                                        <input
                                            type="number"
                                            name="item_quantity[]"
                                            class="qty"
                                            onchange="Calc(this)"
                                            placeholder="1"
                                            required />
                                    </td>

                                    <td>
                                        <input
                                            type="number"
                                            name="item_price[]"
                                            class="price"
                                            onchange="Calc(this)"
                                            placeholder="0.00"
                                            required />
                                    </td>

                                    <td>
                                        <input
                                            type="number"
                                            name="item_amount[]"
                                            class="amount"
                                            placeholder="0.00"
                                            required />
                                    </td>
                                    <td>
                                        <a href="#" class="remove-item" onclick="DeleteRow()">
                                            <svg
                                                width="16"
                                                height="16"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="mb-3">

                        <a href="#" class="add-item">
                            <svg
                                width="16"
                                height="16"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                            </svg>Add Item
                        </a>

                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Create Purchase" class="btn btn-primary" />
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
<script>
    document.querySelector(".add-item").onclick = (event) => {
    event.preventDefault();
    const table = document.querySelector(".table");
    const row = table.insertRow(table.rows.length);
    row.className = "item-row";
    row.innerHTML = `
            <td>
            <input type="text" name="item_name[]" placeholder="Item ${
              table.rows.length - 1
            }" required>
            </td>
            <td><input type="number" class="qty" name="item_quantity[]" placeholder="1" onchange="Calc(this)" required></td>
            <td><input type="number" class="price" name="item_price[]" placeholder="0.00" onchange="Calc(this)" required></td>
             <td>
                <input
                  type="number"
                  class="amount"
                  name="item_amount[]"
                  placeholder="0.00"
                  required
                />
              </td>
            <td><a href="#" class="remove-item"><svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg></a></td>
          `;
    row.querySelector(".remove-item").onclick = (event) => {
        event.preventDefault();
        table.deleteRow(row.rowIndex);
        TotalAmount();
    };

};

document.querySelectorAll(".remove-item").forEach((element) => {
    element.onclick = (event) => {
        event.preventDefault();

        element.closest("tr").remove();
        TotalAmount();
    };
});
</script>
</html>