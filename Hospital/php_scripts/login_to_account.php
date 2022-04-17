<?php
    if (empty($_POST['log_in']) && empty($_POST['sign_up'])) return;

    $host = 'localhost';
    $username = 'root';
    $password = 'evanm';
    $database = 'USERS';

    $conn = new mysqli($host, $username, $password, $database);
    if ($conn -> connect_error){
        die("Was unable to connect to Servers" . $conn->connect_error);
    }
    else if (isset($_POST['sign_up'])){
        sign_up_actions($conn);
    }
    else if (isset($_POST['log_in'])){
        login_actions($conn);
    }
    $conn -> close();

    function sign_up_actions($conn){
        if (!empty($_POST['username'] && !empty($_POST['password']) && !empty($_POST['confirm_password']))){
            if ($_POST['password'] === $_POST['confirm_password']){
                $username = $_POST['username'];
                $password = $_POST['password'];
                if (check_for_account($conn, $username, $password, 1)){
                    echo "Username already in use";
                }
                else{
                    $stmt = $conn->prepare("INSERT INTO profile VALUES(null, '$username', '$password')");
                    $stmt -> execute();
                    $stmt -> close();
                    setcookie('logged_in', true, time()+3600, "/", "", 0);
                    header("Location: index.php");
                    return;
                }
            }
            else{
                echo "Passwords did not match";
            }
        }
        else{
            echo "Login Not Completed";
        }
        setcookie('logged_in', false, time()+3600, "/", "", 0);
    }

    function login_actions($conn){
        if (!empty($_POST['username'] && !empty($_POST['password']))){
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
        else if (isset($_COOKIE['username']) && isset($_COOKIE['password'])){
            $username = $_COOKIE['username'];
            $password = $_COOKIE['password'];
        }
        else{
            echo "Failed to retrieve data";
            return;
        }
        if (check_for_account($conn, $username, $password, 0)){
            setcookie("username", "$username", time()+3600, "/", "",  0);
            setcookie("logged_in", true, time()+3600, "/", "",  0);
            header("Location: index.php");
        }
        else{
            echo "username or password was incorrect";
        }
    }

    function check_for_account($conn, $username, $password, $flag){
        if ($flag == 0){
            if (($result = $conn->query("SELECT COUNT(*) FROM profile WHERE '$username'=profile.user_name AND '$password'=profile.pass_word"))){
                return (mysqli_fetch_row($result)[0] != 0);
            }
        }
        else if ($flag == 1){
            if (($result = $conn->query("SELECT COUNT(*) FROM profile WHERE '$username'=profile.user_name"))){
                return (mysqli_fetch_row($result)[0] != 0);
            }
        }
        return false;

    }