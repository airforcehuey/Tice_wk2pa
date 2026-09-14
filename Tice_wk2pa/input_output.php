<html>
<head>
    <title>Brendan Tice Wk 2 Performance Assessment</title>
</head>

<body>

    <form method="POST">
        <h3>Enter your name:
            <input type="text" name="name">
        </h3>

        <h3>Enter your birthdate:
            <input type="text" name="birthdate">
        </h3>

        <h3>Enter your favorite color:
            <input type="text" name="color">
        </h3>

        <h3>Enter your favorite place to visit:
            <input type="text" name="place">
        </h3>

        <h3>Enter your nickname:
            <input type="text" name="nickname">
        </h3>

        <input type="submit" value="Submit Values">
    </form>

    <?php

        // Declare and clear variables
        $name = "";
        $birthdate = "";
        $color = "";
        $place = "";
        $nickname = "";

        // Get submitted values
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }

        if (isset($_POST['birthdate'])) {
            $birthdate = $_POST['birthdate'];
        }

        if (isset($_POST['color'])) {
            $color = $_POST['color'];
        }

        if (isset($_POST['place'])) {
            $place = $_POST['place'];
        }

        if (isset($_POST['nickname'])) {
            $nickname = $_POST['nickname'];
        }

        var_dump($name);

        // Display name
        if (strlen($name) > 0) {
            echo "<h3>The name you entered is: $name</h3>";
        } else {
            echo "<h3>You didn't enter a name!</h3>";
        }

        // Display birthdate
        if (strlen($birthdate) > 0) {
            echo "<h3>The birthdate you gave is: $birthdate</h3>";
        } else {
            echo "<h3>You didn't enter a birthdate!</h3>";
        }

        // Display favorite color
        if (strlen($color) > 0) {
            echo "<h3>You said your favorite color is: $color</h3>";
        } else {
            echo "<h3>You didn't enter a favorite color!</h3>";
        }

        // Display favorite place
        if (strlen($place) > 0) {
            echo "<h3>You said your favorite place is: $place</h3>";
        } else {
            echo "<h3>You didn't enter a favorite place!</h3>";
        }

        // Display nickname
        if (strlen($nickname) > 0) {
            echo "<h3>You said your nickname is: $nickname</h3>";
        } else {
            echo "<h3>You didn't enter a nickname!</h3>";
        }

    ?>

</body>
</html>