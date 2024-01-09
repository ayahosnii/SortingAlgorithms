<?php
require_once __DIR__ . '../../vendor/autoload.php';

use MergeSorting\MergeSorter;
use MergeSorting\Visualization;

$unsortedProducts = [
    ['name' => 'Product A', 'price' => 42],
    ['name' => 'Product B', 'price' => 101],
    ['name' => 'Product C', 'price' => 32],
    ['name' => 'Product D', 'price' => 75],
];

$visualization = new Visualization();
$mergeSorter = new MergeSorter($visualization);

// Include the template file
include 'template.php';
?>
