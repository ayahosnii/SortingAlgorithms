<?php
require_once __DIR__ . '../../vendor/autoload.php';

use MergeSorting\MergeSorter;
use MergeSorting\MergeSortVisualization;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the array values from the form
    $productNames = $_POST['product_name'];
    $productPrices = $_POST['product_price'];

    // Combine the names and prices into the array
    $unsortedProducts = [];
    for ($i = 0; $i < count($productNames); $i++) {
        $unsortedProducts[] = [
            'name' => $productNames[$i],
            'price' => $productPrices[$i],
        ];
    }
} else {
    // Default values if the form is not submitted
    $unsortedProducts = [
        ['name' => 'Product A', 'price' => 42],
        ['name' => 'Product B', 'price' => 101],
        ['name' => 'Product C', 'price' => 32],
        ['name' => 'Product D', 'price' => 75],
        ['name' => 'Product E', 'price' => 150],
    ];
}

$visualization = new \MergeSorting\SelectionSortVisualization();
$mergeSorter = new \MergeSorting\SelectionSorter($visualization);

// Include the template file
include 'merge_template.php';
?>
