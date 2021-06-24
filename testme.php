<?php

require_once('includes/states_constants.php');
require_once('includes/states_db_constants.php');
require_once('includes/states_db_code.php');
require_once('includes/StateInfoRecord.php');
require_once('includes/StateInfoSet.php');

$state = 'Alaska';
$states = lookup_state_info($state);

print_r($states);