<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <title>Computer Reservation</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Core theme CSS (mungkin stylesheet custom kamu) -->
  <link href="./dist/css/styles2.css" rel="stylesheet" />

  <!-- datatables -->
  <link href="./dist/css/datatables/dataTables.bootstrap5.css" rel="stylesheet" />
  <link href="./dist/css/datatables/responsive.bootstrap5.css" rel="stylesheet" />  
</head>

<body>
    <div class="container">
            <form action="./form/login.php" method="POST" style="max-width:400px;">
                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger">
                        <?= htmlspecialchars($_GET['error']) ?>
                    </div>
                <?php endif; ?>
                <h1>Login</h1>
                <div class="form-group mb-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" required>
                </div>

                <div class="form-group mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn">Login</button>
            </form>
    </div>
</body>
</html>
