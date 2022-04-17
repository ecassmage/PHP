<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Patient ID</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/patient.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/general_overrides.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/menu_band.css"/>
    <script type="text/javascript" src="logic.js"></script>
    <link rel="stylesheet" type="text" href="file.php"/>
    <?php $db = mysqli_connect('localhost','root','evanm','hospital');?>
</head>
<body>
    <ul class="menu_band">
        <li class="menu_band"><a class="menu_band current_page">Patient</a></li>
        <li class="menu_band"><a class="menu_band" href="nurse.html">Nurse</a></li>
        <li class="menu_band"><a class="menu_band" href="doctor.html">Doctor</a></li>
        <li class="menu_band"><a class="menu_band" href="index.html">Home</a></li>
    </ul>
    <?php
    echo "This message is from server side."
    ?>
    <table style="text-align:center">
        <tr>
            <td>
                <form>
                    <table class="form_table">
                        <tr>
                            <td class="form_label">
                                <label>Hospital:</label>
                            </td>
                            <td class="form_entry">
                                <input type="radio" id="0" name="hospital" value="0"><label for="0">Hospital 0</label>
                                <input type="radio" id="1" name="hospital" value="1"><label for="1">Hospital 1</label>
                                <input type="radio" id="2" name="hospital" value="2"><label for="2">Hospital 2</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="form_label">
                                <label for="room_number">Room Number: </label>
                            </td>
                            <td class="form_entry">
                                <input type="number" id="room_number" name="room_number" style="width:20%">
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
                    <input style="text-align:center; padding: 15px 100px;" type="button" value="submit" onclick="patient_id(hospital.value, room_number.value, gender.value, disease_list.value, length_of_stay_list.value, citizen.value)">
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <p id="patient_id"></p>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    $query = "SELECT * FROM `Doctor`;";
                    $result = mysqli_query($db, $query);
                    while($row = mysqli_fetch_assoc($result)) {
                        echo $row;
                    }
                ?>
                <?php echo "Connect" ?>
            </td>
        </tr>
    </table>
</body>
</html>