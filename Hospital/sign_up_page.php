<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/general_overrides.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/menu_band.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/login_pages/login.css"/>
</head>
<body>
    <ul class="menu_band">
        <!-- Right Side -->
        <li class="menu_band"><a class="menu_page right" href="index.php">Home</a></li>
        <!-- Left Side -->
        <li class="menu_band"><a class="menu_page left" href="login_page.php">login</a></li>
    </ul>

    <form method="post">
        <div class="login">
            <table>
                <tr>
                    <th>
                        <label for="username">Username</label>
                    </th>
                    <td>
                        <input type="text" name="username" id="username">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="password">Password</label>
                    </th>
                    <td>
                        <input type="password" name="password" id="password">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="confirm_password">Confirm Password</label>
                    </th>
                    <td>
                        <input type="password" name="confirm_password" id="confirm_password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-size: 25px; text-align: center">
                            <?php include('php_scripts/login_to_account.php'); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sign_up">
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>