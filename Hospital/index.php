<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/index/home_page.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/general_overrides.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/menu_band.css"/>

    <script type="text/javascript" src="scripts/check_login.js"></script>
</head>
<body>
    <div>
        <ul class="menu_band">
            <!-- Right Side -->
            <li class="menu_band"><a class="menu_page right" href="patient.php">Patient</a></li>
            <li class="menu_band"><a class="current_page right">Home</a></li>
            <!-- Left Side -->
            <li class="menu_band"><a class="menu_page left pointer" id="login_link"><div id="login_credentials"></div></a></li>
            <script>
                is_logged_in();
            </script>
        </ul>
    </div>
</body>
</html>