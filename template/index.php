<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test CSS</title>
    <!-- Correct relative path -->
    <link rel="css" href="styles.css">
    
</head>

<body class="sb-nav-fixed">
<php>
http://localhost/project-root/css/styles.css

    <?php
    // Include navigation bar
    require_once "navbar.php";
    ?>

    <div id="layoutSidenav">
        <?php
        // Include sidebar
        require_once "sidebar.php";
        ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <?php
                    // Routing logic to include different pages
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'layout-sidenav-light':
                                include 'layout-sidenav-light.php';
                                break;
                            case 'layout-static':
                                include 'layout-static.php';
                                break;
                            case 'login':
                                include 'login.php';
                                break;
                            case 'password':
                                include 'password.php';
                                break;
                            case 'register':
                                include 'register.php';
                                break;
                            case 'tables':
                                include 'tables.php';
                                break;
                            case '404':
                                include '404.php';
                                break;
                            case '401':
                                include '401.php';
                                break;
                            case '500':
                                include '500.php';
                                break;
                            case 'charts':
                                include 'charts.php';
                                break;
                            default:
                                echo "<h1>Page not found</h1>";
                                break;
                        }
                    } else {
                        // Default page
                        include 'pages.php';
                    }
                    ?>
                </div>
            </main>

            <?php
            // Include footer
            require_once "footer.php";
            ?>
        </div>
    </div>

    <?php
    // Include scripts
    require_once "scripts.php";
    ?>
</body>
<?php
$title = "Aplikasi Olahraga";
require_once "template.php";
?>

<body>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'dashboard':
                include 'dashboard.php';
                break;
            case 'stats':
                include 'stats.php';
                break;
            case 'login':
                include 'login.php';
                break;
            default:
                echo "<h1>Page Not Found</h1>";
        }
    } else {
        include 'pages.php';
    }
    ?>

    <?php require_once "scripts.php"; ?>
</body>
</html>

</html>
