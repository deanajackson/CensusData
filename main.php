<?php

require_once('includes/states_db_code.php');
require_once('includes/states_db_constants.php');

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demographics</title>
    <meta name="description" content="Table of Demographic Information">
    <meta name="author" content="Deana Jackson>
    <link rel=" preconnect
    " href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
<div id="main-container">
    <h2>Census Data</h2>
    <p>This data is courtesy of <a href="https://dasl.datadescription.com/datafile/demographics">DASL Data</a></p>
    <p>Select a state from the list below to view murder rate, high school graduation rate,
        average income, illiteracy rate and average life expectancy.</p>

    <form method="get" action="states.php">
        <label for="state">Select a U.S. State:</label>
        <select name="state" id="state" class="select-css">
            <?php

            $states = get_states();

            for ($i = 0; $i < count($states); $i++) {
                echo "<option>\n" . $states[$i][0] . "</option>\n";
            }
            ?>

        </select>

        <input type="submit" class="button" value="See Results">
    </form>
<p> or </p>
    <form method="get" action="state_ranking.php">
        <label for="top_number">Display the top </label>
        <select name="top_number" id="top_number" class="select-css">
            <?php

            $numbers = [1, 2, 3, 4, 5, 10, 15, 20, 25, 50];

            for ($i = 0; $i < count($numbers); $i++) {
                echo "<option>\n" . $numbers[$i] . "</option>\n";
            }
            ?>

        </select>

        <label for="criteria"> states with the highest </label>
        <select name="criteria" id="criteria" class="select-css">
            <?php

            $db_columns = ['Average Income', 'High School Graduation Rate', 'Life Expectancy', 'Illiteracy Rate', 'Murder Rate'];

            for ($i = 0; $i < count($db_columns); $i++) {
                echo "<option>\n" . ucwords($db_columns[$i]) . "</option>\n";
            }
            ?>

        </select>

        <input type="submit" class="button" value="See Results">
    </form>
</div>
</body>
</html>
