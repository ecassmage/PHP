<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/general_overrides.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/menu_band.css"/>

    <script type="text/javascript" src="scripts/check_login.js"></script>
</head>
<body>
    <!-- Main Menu Band -->
    <div>
        <ul class="menu_band">
            <!-- Right Side -->
            <li class="menu_band"><a class="current_page right">Patient</a></li>
            <li class="menu_band"><a class="menu_page right" href="index.php">Home</a></li>
            <!-- Left Side -->
            <li class="menu_band"><a class="menu_page left pointer" id="login_link"><div id="login_credentials"></div></a></li>
            <script>
                is_logged_in();
            </script>
        </ul>
    </div>

    <form method="post">
        <input type="submit">
        <div>
            <label for="fname">First Name: </label><input type="text" id="fname" name="fname"/>
        </div>
        <div>
            <label for="lname">Last Name: </label><input type="text" id="lname" name="lname"/>
        </div>
        <div>
            <label for="arrival">Arrival Date: </label><input type="date" id="arrival" name="arrival"/>
        </div>
        <div>
            <label>Phone Number: </label>
            <input type="text" id="phone1" name="phonenumber1" maxlength="3"/>
            <input type="text" id="phone2" name="phonenumber2" maxlength="3"/>
            <input type="text" id="phone3" name="phonenumber3" maxlength="4"/>
        </div>
        <div>
            <label for="age">Age: </label><input type="number" id="age" name="age"/>
        </div>
        <div>
            <label for="height">Height: </label><input type="number" id="height" name="height"/>
        </div>
        <table class="form_table">
            <tr>
                <td class="form_label">
                    <label>Hospital:</label>
                </td>
                <td class="form_entry">
                    <div>
                        <input type="radio" id="hospital_0" name="hospital" value="0" onchange="update_hospital(hospital.value, 'patients')"><label for="hospital_0">Hospital 0</label>
                        <input type="radio" id="hospital_1" name="hospital" value="1" onchange="update_hospital(hospital.value, 'patients')"><label for="hospital_1">Hospital 1</label>
                        <input type="radio" id="hospital_2" name="hospital" value="2" onchange="update_hospital(hospital.value, 'patients')"><label for="hospital_2">Hospital 2</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="form_label">
                    <label>Room Number: </label>
                </td>
                <td class="form_entry">
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
            <tr>
                <td class="form_label">
                    <label>Gender:</label>
                </td>
                <td class="form_entry">
                    <label>Gender:</label>
                    <input type="radio" id="male" name="gender" value="0"><label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="1"><label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="2"><label for="other">Other</label>
                </td>
            </tr>
            <tr>
                <td class="form_label">
                    <label for="disease">Disease: </label>
                </td>
                <td class="form_entry">
                    <select id="disease" name="disease_list">
                        <option value="0">Unknown</option>
                        <option value="1">Bubonic Plague</option>
                        <option value="2">Covid-19</option>
                        <option value="3">Small Pox</option>
                        <option value="4">Mumps</option>
                        <option value="5">Measles</option>
                        <option value="6">Hay Fever</option>
                        <option value="7">Yellow Fever</option>
                        <option value="8">Kharaa</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="form_label">
                    <label for="length_of_stay">expected length of stay: </label>
                </td>
                <td class="form_entry">
                    <select id="length_of_stay" name="length_of_stay_list">
                        <option value="0">Short Term (< 1 day)</option>
                        <option value="1">Medium Term (1 - 7 days)</option>
                        <option value="2">Long Term (> 7 days)</option>
                        <option value="3">Unknown (Coma, other)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="form_label">
                    <label>Citizen (of Canada)</label>
                </td>
                <td class="form_entry">
                    <input type="radio" id="yes" name="citizen" value="0"><label for="yes">Yes</label>
                    <input type="radio" id="no" name="citizen" value="1"><label for="no">No</label>
                </td>
            </tr>
        </table>
        <input style="text-align:center; padding: 15px 100px;" type="button" value="Submit" onclick="patient_id(hospital.value, room.value, gender.value, disease_list.value, length_of_stay_list.value, citizen.value)">
    </form>
    <form method="post">

        <label for="disease">Disease</label>
        <label> for</label>
        <input type="submit">
    </form>
    <form method="get">
        <input type="submit" name="submit_query">
    </form>
</body>
</html>