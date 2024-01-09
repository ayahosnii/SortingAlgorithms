<!-- template.php -->

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
            background-color: #f8f8f8;
        }
        .step-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .step {
            flex: 1;
            padding: 15px;
            box-sizing: border-box;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h3 {
            margin-top: 0;
            color: #333;
        }
        pre {
            margin: 0;
            font-size: 14px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>

<h2>Merge Sorting</h2>
<h2>Enter Unsorted  Array Values</h2>
<form method="post" action="">
    <?php foreach ($unsortedProducts as $product): ?>
        <label for="product_name[]">Product Name</label>
        <input name="product_name[]" value="<?= $product['name']; ?>">

        <label for="product_price[]">Product Price</label>
        <input name="product_price[]" value="<?= $product['price']; ?>">
        <br>
    <?php endforeach; ?>
    <input type="submit" value="Sort">
</form>

<h2>Unsorted Products</h2>
<pre>
    <?php print_r($unsortedProducts); ?>
</pre>
<hr>

<h2>Merge Sort Visualization</h2>
<h4>The original unsorted array is divided into smaller subarrays</h4>
<?php
$sortedMerge = $mergeSorter->sort($unsortedProducts);
?>
<h4>until each subarray contains 1 or 0 elements.
    This is the base case, and no further division is possible.</h4>
<?php
$visualization->displayData($sortedMerge);
?>
<body>
</html>
