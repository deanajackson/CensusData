<?php

/**
 * For main.php Drop Down List
 * @return mixed
 */
function get_states()
{
    $query = "SELECT " . NAME_COLUMN . " FROM " . STATEINFO_TABLE . ";";
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $result = $db->query($query);
    return $result->fetch_all(MYSQLI_NUM);
}

/**
 * For looking up state info about a single state used on states.php
 * @param $state_name
 * @return mixed
 */

function lookup_state_info($state_name)
{
    $query = "SELECT * FROM " . STATEINFO_TABLE . " WHERE " . NAME_COLUMN . " = '$state_name';";
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $result = $db->query($query);
    $recs = $result->fetch_all(MYSQLI_NUM);

    foreach ($recs as $rec) {
        return new StateInfoRecord(
            $rec[StateInfoRecord::STATE_FIELD],
            $rec[StateInfoRecord::MURDER_FIELD],
            $rec[StateInfoRecord::HS_GRAD_FIELD],
            $rec[StateInfoRecord::INCOME_FIELD],
            $rec[StateInfoRecord::ILLITERACY_FIELD],
            $rec[StateInfoRecord::LIFE_EXPECT_FIELD]
        );

    }
}
