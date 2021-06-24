<?php

class StateInfoRecord
{
    private $name;
    private $murder_rate;
    private $grad_rate;
    private $avg_income;
    private $illiteracy_rate;
    private $life_expect;

    const STATE_FIELD = 0;
    const MURDER_FIELD = 1;
    const HS_GRAD_FIELD = 2;
    const INCOME_FIELD = 3;
    const ILLITERACY_FIELD = 4;
    const LIFE_EXPECT_FIELD = 5;

    function __construct($name, $murder_rate, $grad_rate, $avg_income, $illiteracy_rate, $life_expect)
    {
        $this->name = $name;
        $this->murder_rate = $murder_rate;
        $this->grad_rate = $grad_rate;
        $this->avg_income = $avg_income;
        $this->illiteracy_rate = $illiteracy_rate;
        $this->life_expect = $life_expect;
    }


    /**
     * $name setter and getter
     * @param $value
     */
    function setName($value)
    {
        $this->name = $value;
    }

    function getName()
    {
        return $this->name;
    }

    /**
     * $muder_rate setter and getter
     * @param $value
     */
    function setMurderRate($value)
    {
        $this->murder_rate = $value;
    }

    function getMurderRate()
    {
        return $this->murder_rate;
    }

    /**
     * $grad_rate setter and getter
     * @param $value
     */
    function setGradRate($value)
    {
        $this->grad_rate = $value;
    }

    function getGradRate()
    {
        return $this->grad_rate;
    }

    /**
     * $avg_income setter and getter
     * @param $value
     */
    function setAvgIncome($value)
    {
        $this->avg_income = $value;
    }

    function getAvgIncome()
    {
        return $this->avg_income;
    }

    /**
     * $illiteracy_rate setter and getter
     * @param $value
     */
    function setIlliteracyRate($value)
    {
        $this->illiteracy_rate = $value;
    }

    function getIlliteracyRate()
    {
        return $this->illiteracy_rate;
    }

    /**
     * $illiteracy_rate setter and getter
     * @param $value
     */
    function setLifeExpect($value)
    {
        $this->life_expect = $value;
    }

    function getLifeExpect()
    {
        return $this->life_expect;
    }
}
