<?php
/** Deana Jackson Lab 07 */

require_once('includes/states_db_code.php');
require_once('includes/states_db_constants.php');
require_once('includes/states_constants.php');
require_once('includes/StateInfoRecord.php');
require_once('includes/StateInfoSet.php');


if (!isset($_GET[TOP_NUMBER])) {
    echo "<h1>Error</h1>\n";
    exit;
}

if (!isset($_GET[CRITERIA])) {
    echo "<h1>Error</h1>\n";
    exit;
}

$count = $_GET[TOP_NUMBER];
$column = $_GET[CRITERIA];
$db_columns = ['Average Income', 'High School Graduation Rate', 'Life Expectancy', 'Illiteracy Rate', 'Murder Rate'];

if ($column == $db_columns[0]) {
    $column = AVG_INCOME_COLUMN;
} elseif ($column == $db_columns[1]) {
    $column = GRAD_RATE_COLUMN;
} elseif ($column == $db_columns[2]) {
    $column = LIFE_EXPECT_COLUMN;
} elseif ($column == $db_columns[3]) {
    $column = ILLIT_RATE_COLUMN;
} elseif ($column == $db_columns[4]) {
    $column = MURDER_RATE_COLUMN;
}
$stateInfoSet = new StateInfoSet($column, $count);
$records = $stateInfoSet->getRecords();

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
    <p></p>

    <?php
    if ($column == AVG_INCOME_COLUMN) {
        echo "<table class='two-column'>\n";
        echo "<tr>\n";
        echo "    <th>\n" . ucwords(STATE) . "</th>\n";
        echo "    <th>\n" . ucwords(INCOME) . "</th>\n";
        echo "</tr>\n";

        for ($i = 0; $i < count($records); $i++) {
            echo "<tr>\n";
            echo "    <td>\n" . $records[$i]->getName() . "</td>\n";
            echo "    <td>\n" . $records[$i]->getAvgIncome() . "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";

    } elseif ($column == GRAD_RATE_COLUMN) {
        echo "<table class='two-column'>\n";
        echo "<tr>\n";
        echo "    <th>\n" . ucwords(STATE) . "</th>\n";
        echo "    <th>\n" . ucwords(HS_GRAD) . "</th>\n";
        echo "</tr>\n";

        for ($i = 0; $i < count($records); $i++) {
            echo "<tr>\n";
            echo "    <td>\n" . $records[$i]->getName() . "</td>\n";
            echo "    <td>\n" . $records[$i]->getGradRate() . "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";

    } elseif ($column == LIFE_EXPECT_COLUMN) {
        echo "<table class='two-column'>\n";
        echo "<tr>\n";
        echo "    <th>\n" . ucwords(STATE) . "</th>\n";
        echo "    <th>\n" . ucwords(LIFE_EXPECT) . "</th>\n";
        echo "</tr>\n";


        for ($i = 0; $i < count($records); $i++) {
            echo "<tr>\n";
            echo "    <td>\n" . $records[$i]->getName() . "</td>\n";
            echo "    <td>\n" . $records[$i]->getLifeExpect() . "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";

    } elseif ($column == ILLIT_RATE_COLUMN) {
        echo "<table class='two-column'>\n";
        echo "<tr>\n";
        echo "    <th>\n" . ucwords(STATE) . "</th>\n";
        echo "    <th>\n" . ucwords(ILLITERACY) . "</th>\n";
        echo "</tr>\n";


        for ($i = 0; $i < count($records); $i++) {
            echo "<tr>\n";
            echo "    <td>\n" . $records[$i]->getName() . "</td>\n";
            echo "    <td>\n" . $records[$i]->getIlliteracyRate() . "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";

    } elseif ($column = MURDER_RATE_COLUMN) {
        echo "<table class='two-column'>\n";
        echo "<tr>\n";
        echo "    <th>\n" . ucwords(STATE) . "</th>\n";
        echo "    <th>\n" . ucwords(MURDER) . "</th>\n";
        echo "</tr>\n";


        for ($i = 0; $i < count($records); $i++) {
            echo "<tr>\n";
            echo "    <td>\n" . $records[$i]->getName() . "</td>\n";
            echo "    <td>\n" . $records[$i]->getMurderRate() . "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";

    }
    ?>
    <button onclick="goBack()" class="button">Set New Criteria</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</div>
</body>
</html>
