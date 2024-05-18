<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <div class="top-nav">
            <ul>
                <li><a href="dashboard.php?id=dashboard">Dashboard</a></li>
                <li><a href="dashboard.php?id=profile">Profile</a></li>
                <li><a href="dashboard.php?id=users">Manage Users</a></li>
                <li><a href="dashboard.php?id=reports">Reports</a></li>
                <li><a href="dashboard.php?id=settings">Settings</a></li>
                <li><a href="dashboard.php?id=logout">Log Out</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="main-content">
            <h1>Main Content</h1>
            <?php
            if (isset($_GET['id'])) {
                $id= $_GET['id'];
                switch ($id) {
                    case 'dashboard':
                        echo 'you clicked on dashboard';
                        break;
                    case 'profile':
                        echo 'you clicked on profile';
                        break;
                    case 'users':
                        include_once 'manage-users.php';
                        break;
                    case 'reports':
                        echo 'you clicked on reports';
                        break;
                    case 'settings':
                        echo 'you clicked on settings';
                        break;
                    case 'logout':
                        echo 'you clicked on logout';
                        break;
                    default:
                        echo 'page not found';
                        break;
                }
            }
            ?>
        </div>
    </main>
</body>
</html>