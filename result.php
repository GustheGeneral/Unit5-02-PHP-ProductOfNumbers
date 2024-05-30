<?php
// Check if the form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the input from the form
    $input = $_POST['numberInput'];

    // Validate the input: it must be an integer and greater than 0
    $number = filter_var($input, FILTER_VALIDATE_INT);

    // Check for errors in the input
    if ($number === false || $number <= 0 || strpos($input, '.') !== false) {
        // If the input is invalid, display an error message
        echo '<div class="error">Please enter a valid number bigger than 0 (no decimals).</div>';
    } else {
        // Initialize sum variable
        $sum = 0;

        // Calculate the sum of all integers from 0 to the input number
        for ($i = 0; $i <= $number; $sum += $i++);

        // Display the result
        echo '<div class="result">The sum of numbers from 0 to ' . htmlspecialchars($number) . ' is: ' . htmlspecialchars($sum) . '</div>';
    }
}
?>
