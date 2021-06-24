<?php
/** Deana Jackson Lab 07 */

require_once('includes/states_db_code.php');
require_once('includes/states_db_constants.php');
require_once('includes/states_constants.php');
require_once('includes/StateInfoRecord.php');
require_once('includes/StateInfoSet.php');


if (!isset($_GET[STATE])) {
    echo "<h1>Error, please select a state.</h1>\n";
    exit;
}

$state = $_GET[STATE];
$states = lookup_state_info($state);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>State Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="main-container">
    <h2>Census Data</h2>
    <p>This data is courtesy of <a href="https://dasl.datadescription.com/datafile/demographics">DASL Data</a></p>

    <?php
    echo "<table class='six-columns'>\n";
    echo "<tr>\n";
    echo "    <th>\n" . ucwords(STATE) . "</th>\n";
    echo "    <th>\n" . ucwords(MURDER) . "</th>\n";
    echo "    <th>\n" . ucwords(HS_GRAD) . "</th>\n";
    echo "    <th>\n" . ucwords(INCOME) . "</th>\n";
    echo "    <th>\n" . ucwords(ILLITERACY) . "</th>\n";
    echo "    <th>\n" . ucwords(LIFE_EXPECT) . "</th>\n";
    echo "</tr>\n";


    echo "<tr>\n";
    echo "    <td>\n" . $states->getName() . "</td>\n";
    echo "    <td>\n" . $states->getMurderRate() . "</td>\n";
    echo "    <td>\n" . $states->getGradRate() . "</td>\n";
    echo "    <td>\n" . $states->getAvgIncome() . "</td>\n";
    echo "    <td>\n" . $states->getIlliteracyRate() . "</td>\n";
    echo "    <td>\n" . $states->getLifeExpect() . "</td>\n";
    echo "</tr>\n";

    echo "</table>\n";
    ?>
    <button onclick="goBack()" class="button">Pick a New State</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</div>
</body>
</html>
