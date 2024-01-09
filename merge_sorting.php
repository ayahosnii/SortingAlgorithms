<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Sort Visualization</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .step-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .step {
            flex: 1;
            border: 1px solid #ccc;
            padding: 10px;
            box-sizing: border-box;
        }
        pre {
            margin: 0;
        }
    </style>
</head>
<body>

<?php

function mergeSortProducts($products, $level = 0)
{
    $length = count($products);

    if ($length <= 1) {
        return $products;
    }

    $mid = (int)($length / 2);
    $left = array_slice($products, 0, $mid);
    $right = array_slice($products, $mid);

    echo '<div class="step-container">';
    echo '<div class="step">';
    echo '<h3>Step ' . $level . ': Left Array</h3>';
    printStep($left);
    echo '</div>';

    echo '<div class="step">';
    echo '<h3>Step ' . $level . ': Right Array</h3>';
    printStep($right);
    echo '</div>';
    echo '</div>';

    $left = mergeSortProducts($left, $level + 1);
    $right = mergeSortProducts($right, $level + 1);

    $sorted = mergeProducts($left, $right);

    echo '<div class="step">';
    echo '<h3>Step ' . $level . ': Sorted Array</h3>';
    printStep($sorted);
    echo '</div>';
    echo '</div>';

    return $sorted;
}

function printStep($products)
{
    echo "<pre>";
    print_r($products);
    echo "</pre>";
    echo PHP_EOL;
}

function displayStep($left, $right, $sorted)
{
    echo '<div class="step-container">';
    echo '<div class="step">';
    echo '<h3>Left Array</h3>';
    printStep($left);
    echo '</div>';

    echo '<div class="step">';
    echo '<h3>Right Array</h3>';
    printStep($right);
    echo '</div>';

    echo '<div class="step">';
    echo '<h3>Sorted Array</h3>';
    printStep($sorted);
    echo '</div>';
    echo '</div>';
}
function mergeProducts($left, $right)
{
    $result = [];
    $i = $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i]['price'] < $right[$j]['price']) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}



// Example usage with products array:
$unsortedProducts = [
    ['name' => 'Product A', 'price' => 42],
    ['name' => 'Product B', 'price' => 101],
    ['name' => 'Product C', 'price' => 32],
    ['name' => 'Product D', 'price' => 75],
    ['name' => 'Product E', 'price' => 50],
    ['name' => 'Product F', 'price' => 89],
    ['name' => 'Product G', 'price' => 60],
    ['name' => 'Product H', 'price' => 95],
    ['name' => 'Product I', 'price' => 28],
    ['name' => 'Product J', 'price' => 65],
//    ['name' => 'Product K', 'price' => 120],
//    ['name' => 'Product L', 'price' => 55],
//    ['name' => 'Product M', 'price' => 80],
//    ['name' => 'Product N', 'price' => 38],
//    ['name' => 'Product O', 'price' => 110],
//    ['name' => 'Product P', 'price' => 43],
//    ['name' => 'Product Q', 'price' => 78],
//    ['name' => 'Product R', 'price' => 105],
//    ['name' => 'Product S', 'price' => 68],
//    ['name' => 'Product T', 'price' => 85],
//    ['name' => 'Product U', 'price' => 72],
//    ['name' => 'Product V', 'price' => 115],
//    ['name' => 'Product W', 'price' => 40],
//    ['name' => 'Product X', 'price' => 93],
//    ['name' => 'Product Y', 'price' => 58],
//    ['name' => 'Product Z', 'price' => 88],
//    ['name' => 'Product A', 'price' => 42],
//    ['name' => 'Product B', 'price' => 101],
//    ['name' => 'Product C', 'price' => 32],
//    ['name' => 'Product D', 'price' => 75],
//    ['name' => 'Product E', 'price' => 50],
//    ['name' => 'Product F', 'price' => 89],
//    ['name' => 'Product G', 'price' => 60],
//    ['name' => 'Product H', 'price' => 95],
//    ['name' => 'Product I', 'price' => 28],
//    ['name' => 'Product J', 'price' => 65],
//    ['name' => 'Product K', 'price' => 120],
//    ['name' => 'Product L', 'price' => 55],
//    ['name' => 'Product M', 'price' => 80],
//    ['name' => 'Product N', 'price' => 38],
//    ['name' => 'Product O', 'price' => 110],
//    ['name' => 'Product P', 'price' => 43],
//    ['name' => 'Product Q', 'price' => 78],
//    ['name' => 'Product R', 'price' => 105],
//    ['name' => 'Product S', 'price' => 68],
//    ['name' => 'Product T', 'price' => 85],
//    ['name' => 'Product U', 'price' => 72],
//    ['name' => 'Product V', 'price' => 115],
//    ['name' => 'Product W', 'price' => 40],
//    ['name' => 'Product X', 'price' => 93],
//    ['name' => 'Product Y', 'price' => 58],
//    ['name' => 'Product Z', 'price' => 88],
];

echo "<h2>Unsorted Products</h2>";
echo '<pre>';
print_r($unsortedProducts);
echo "<hr>";

echo "<h2>Merge Sort Visualization</h2>";
$sortedMerge = mergeSortProducts($unsortedProducts);

?>

</body>
</html>