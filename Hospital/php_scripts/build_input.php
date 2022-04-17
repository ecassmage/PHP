<?php
function build_input($query, $type, $id_name, $name, $extra, $per_row){

    $conn = new mysqli('localhost', 'root', 'evanm', 'hospital_database');
    if ($conn->connect_error) die("Was unable to connect to Servers" . $conn->connect_error);

    if (($result = $conn->query($query))) {
        $num = 0;
        while ($row = mysqli_fetch_row($result)) {
            echo "<input type=\"$type\" id=\"$id_name" . $row[0] . "\" name=\"$name\" value=\"" . $row[0] . "$extra><label for=\"$id_name$row[0]\">Hospital $row[0]</label>\n";
            $num++;
            if ($num % $per_row == 0) echo "<br>\n";
        }
    }
}
function build_select_menu($query, $per_row){
    $conn = new mysqli('localhost', 'root', 'evanm', 'hospital_database');
    if ($conn->connect_error) die("Was unable to connect to Servers" . $conn->connect_error);

    if (($result = $conn->query($query))) {
        $num = 0;
        while ($row = mysqli_fetch_row($result)) {
            echo '<option value="'.$row[0].'">'.$row[1].'</option>\n';
            $num++;
            if ($num % $per_row == 0) echo "<br>\n";
        }
    }
}
