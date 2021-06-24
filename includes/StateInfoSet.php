<?php

class StateInfoSet
{
    private $mRecords;

    function __construct($column, $count)
    {
        $this->mRecords = [];

        $query = <<<QUERY
SELECT *
FROM stateinfo 
ORDER BY $column DESC 
LIMIT $count;
QUERY;
        $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        $results = $db->query($query);
        $recs = $results->fetch_all(MYSQLI_NUM);
        //$name, $murder_rate, $grad_rate, $avg_income, $illiteracy_rate, $life_expect
        foreach ($recs as $rec) {
            $state_info_rec = new StateInfoRecord(
                $rec[StateInfoRecord::STATE_FIELD],
                $rec[StateInfoRecord::MURDER_FIELD],
                $rec[StateInfoRecord::HS_GRAD_FIELD],
                $rec[StateInfoRecord::INCOME_FIELD],
                $rec[StateInfoRecord::ILLITERACY_FIELD],
                $rec[StateInfoRecord::LIFE_EXPECT_FIELD]
            );
            $this->mRecords[] = $state_info_rec;
        }
    }

    function getRecords()
    {
        return $this->mRecords;
    }
}

