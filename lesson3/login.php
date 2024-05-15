<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        body {
            width: 100%;
            height: 90vh;
            background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(img/login.webp);
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(195, 195, 195, 0.6); /* Adjust opacity as needed */
            border: 1px solid #ccc;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            width: 100%;
            border-radius: 20px;
        }
    </style>
</head>

<body>

    <!-- Main Content -->
    <div class="container">
        <h2>Login</h2>
        <form action="process_login.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Footer -->
</body>

</html>
