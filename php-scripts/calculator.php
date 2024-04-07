<?php

/**
 * @param $period               //The period when calling the function is indicated in MONTHS
 * @param $initialAmount        //The amount that goes to the bank at the beginning of the deposit
 * @param $annualInterestRate   //Interest rate, where 1 = 100%, 0.05 = 5%, etc. (calculated per YEAR)
 * @return float
 */
function calculateCompoundInterest($period, $initialAmount, $annualInterestRate): float
{
    $monthlyInterestRate = $annualInterestRate / 12;

    $finalAmount = $initialAmount * pow(1 + $monthlyInterestRate, $period);

    return $finalAmount;
}
