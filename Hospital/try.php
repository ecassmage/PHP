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
    <table>
        <tr>
            <th>
                <label for="fname">First Name: </label>
            </th>
            <td>
                <input type="text" id="fname" name="fname"/>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th><label for="lname">Last Name: </label></th>
            <td><input type="text" id="lname" name="lname"/></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th><label for="arrival">Arrival Date: </label></th>
            <td><input type="date" id="arrival" name="arrival"/></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th>
                <label for="phone_number">Phone Number: </label>
            </th>
            <td>
                <input type="tel" id="phone_number" name="phone_number">
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th>
                <label for="age">Age: </label>
            </th>
            <td>
                <input type="number" id="age" name="age"/>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th>
                <label for="height">Height: </label>
            </th>
            <td>
                <input type="number" id="height" name="height"/>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th>
                <label>Hospital:</label>
            </th>
            <td>
                <?php
                    include("php_scripts/build_input.php");
                    build_input('SELECT id FROM Hospital', 'radio', 'hospital_', 'hospital', 'onchange="update_hospital(hospital.value, \'patients\')"', 5);
                ?>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th>
                <label>Room Number: </label>
            </th>
            <td>
                <input type="radio" id="room_000" name="room" value="0"><label for="room_000">Room 0</label>
                <input type="radio" id="room_001" name="room" value="1"><label for="room_001">Room 1</label>
                <input type="radio" id="room_002" name="room" value="2"><label for="room_002">Room 2</label>
                <input type="radio" id="room_003" name="room" value="3"><label for="room_003">Room 3</label>
                <input type="radio" id="room_004" name="room" value="4"><label for="room_004">Room 4</label>
                <br>
                <input type="radio" id="room_005" name="room" value="5"><label for="room_005">Room 5</label>
                <input type="radio" id="room_006" name="room" value="6"><label for="room_006">Room 6</label>
                <input type="radio" id="room_007" name="room" value="7"><label for="room_007">Room 7</label>
                <input type="radio" id="room_008" name="room" value="8"><label for="room_008">Room 8</label>
                <input type="radio" id="room_009" name="room" value="9"><label for="room_009">Room 9</label>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th>
                <label>Gender: </label>
            </th>
            <td>
                <input type="radio" id="male" name="gender" value="0"><label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="1"><label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="2"><label for="other">Other</label>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th>
                <label for="disease">Disease: </label>
            </th>
            <td>
                <select id="disease" name="disease_list">
                    <option value="-1">N/A</option>
                    <?php
                        include("php_scripts/build_input.php");
                        build_select_menu('SELECT id, name FROM Disease', 5);
                    ?>
                </select>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th>
                <label for="length_of_stay">expected length of stay: </label>
            </th>
            <td>
                <select id="length_of_stay" name="length_of_stay_list">
                    <option value="0">Short Term (< 1 day)</option>
                    <option value="1">Medium Term (1 - 7 days)</option>
                    <option value="2">Long Term (> 7 days)</option>
                    <option value="3">Unknown (Coma, other)</option>
                </select>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <th>
                <label>Citizen (of Canada): </label>
            </th>
            <td>
                <input type="radio" id="yes" name="citizen" value="0"><label for="yes">Yes</label>
                <input type="radio" id="no" name="citizen" value="1"><label for="no">No</label>
            </td>
        </tr>
    </table>
    <div>

    </div>
</body>
</html>
