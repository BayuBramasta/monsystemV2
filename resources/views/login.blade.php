@extends('index')
@section('title', 'reservasi')
@section('content')
  <title>Computer Reservation</title>

  <link rel="stylesheet" href="{{ asset('css/header.css') }}">

<body>
    <div class="container">
            <form action="./form/login.php" method="POST" style="max-width:400px;">
                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger">
                        <?= htmlspecialchars($_GET['error']) ?>
                    </div>
                <?php endif; ?>
                <h1>
                Login 
                    <span style="font-weight:700; color: rgb(0, 0, 121);">
                        for Admin
                    </span>
                </h1>

                <div class="form-group mb-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" required>
                </div>

                <div class="form-group mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>

                <button type="submit">Login</button>
            </form>
    </div>
</body>
</html>
