<?php

$prizeValue = 200;

if ($prizeValue == 200) {
    $winningAmount = 75000;
} elseif ($prizeValue == 750) {
    $winningAmount = 1000000;
} elseif ($prizeValue == 40000) {
    $winningAmount = 30000000;
} else {
    echo "Better Luck Next Time";
}

$totalAmount = $winningAmount;

// 17% Tax Detection 
$taxPercentage = 17;
$taxDeduction = ($taxPercentage / 100) * $totalAmount;
$totalAfterDeduction = $totalAmount - $taxDeduction;

// Charity donations
$charityAkhuwat = 7;
$charityEdhi = 5;
$charityAkhuwatAmount = ($charityAkhuwat / 100) * $totalAmount;
$charityEdhiAmount = ($charityEdhi / 100) * $totalAmount;
$remainingAmount = $totalAfterDeduction - $charityAkhuwatAmount - $charityEdhiAmount;

echo "<p style='font-weight:bold; text-align:center;'>Prize Value: " . $prizeValue . "</p>";
echo "<p style='font-weight:bold; text-align:center;'>Wining Amount: " . $winningAmount . "</p>";
echo "<p style='font-weight:bold; text-align:center;'>Total Amount: " . $totalAmount . "</p>";
echo "<p style='font-weight:bold; text-align:center;'>Total Amount after tax Deduction: " . $totalAfterDeduction . "</p>";
echo "<p style='font-weight:bold; text-align:center;'>Charity to Akhuwat (7%): " . $charityAkhuwatAmount . "</p>";
echo "<p style='font-weight:bold; text-align:center;'>Charity to Edhi Trust (5%): " . $charityEdhiAmount . "</p>";
echo "<p style='font-weight:bold; text-align:center;'>Remaining Amount: " . $remainingAmount . "</p>";
echo "<p style='font-weight:bold; text-align:center;'>Have Fun </p>";
?>