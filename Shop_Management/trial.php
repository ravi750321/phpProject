
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./include/sideNavPage.css">
    <title>Responsive Side Nav</title>
</head>
<body>
<?php 
     include("./sideNav.html");
?>
    
    <div class="main-content">
        <div class="header">
            <h1>All Items</h1>
          
            <button class="new-button">+ New</button>
        </div>
        <section class="section">
        
        <h2>All Users</h2>

        <table id="users">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                     <tr>
                            <td>
                               
                            </td>
                            <td>
                              
                            </td>
                            <td>
                                <a href="./edit-user.php?user_id=" class="button edit">Edit</a>
                                <a href="./users.php?user_id=" class="button delete">Delete</a>
                            </td>
                        </tr>
               
            </tbody>
        </table>

        <div class="container" style="background-color:#f1f1f1">
            <a href="add-user.php" class="footerbtn">Add User</a>

            <a href="logout.php" class="footerbtn">Logout</a>
        </div>
    </section>
    </div>
    <script src="./script/dashboard.js"></script>
</body>
</html>


