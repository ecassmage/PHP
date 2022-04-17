<?php
    if (isset($_POST['fetch_data'])) fetch_data_func();



    function fetch_data_func(){
        include('login.php');
        $db = $conn;
//        header('Refresh:1');
        if (!empty($_POST['firstname']) and !empty($_POST['lastname']) and !empty($_POST['middlename'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $middlename = $_POST['middlename'];
            $age = (!empty($_POST['age'])) ? $_POST['age']:null;
            $height = (!empty($_POST['height'])) ? $_POST['height']:null;
            $stmt = $db->prepare("insert into human(id, first_name, last_name, middle_name, age, height) values(null, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssdd", $firstname, $lastname, $middlename, $age, $height);
            $stmt->execute();
            $defined_value = '';
            if ($stmt = $db->query("SELECT * from human")){
                while ($row = mysqli_fetch_row(($stmt))){
                    $defined_value = $defined_value . $row[0] . ' ' . $row[1] . ' ' . $row[2] . ' ' . $row[3] . ' ' . $row[4] . ' ' . $row[5] . '<br>';
                }
            }
            echo $defined_value;
            $stmt->close();
            $db->close();
        }
    }


