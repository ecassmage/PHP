
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>

    <form method="post">
        <input type="submit" name="fetch_data">
        <div>
            <label for="fname_id">First Name: </label><input type="text" id="fname_id" name="firstname"/><br>
            <label for="lname_id">Last Name: </label><input type="text" id="lname_id" name="lastname"/><br>
            <label for="mname_id">Middle Name: </label><input type="text" id="mname_id" name="middlename"/><br>
            <label for="age_id">Age: </label><input type="text" id="age_id" name="age"/><br>
            <label for="height_id">Height: </label><input type="text" id="height_id" name="height"/><br>
        </div>
    </form>
    <?php include("fetch_data.php"); ?>
</body>
</html>
