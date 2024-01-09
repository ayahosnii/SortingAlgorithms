<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Visualization</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f8f8;
        }

        h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            margin-right: 20px;
        }

        .sorting-algorithm {
            margin-bottom: 10px;
        }

        .sorting-algorithm label {
            margin-right: 20px;
        }

        .visual-array {
            display: flex;
            flex-wrap: wrap;
            gap: 0px;
            margin-top: 20px;
            transition: transform 0.3s ease-in-out; /* Add a smooth transition effect */
        }

        .visual-array:hover {
            transform: scale(1.05); /* Increase the scale on hover */
        }


        .array-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: #f5f5f5;
            width: 100px; /* Adjust the width as needed */
        }

        .product-box {
            text-align: center;
        }

        .product-name {
            font-weight: bold;
        }

        .product-price {
            color: #565604;
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
            margin: 15px;
            box-sizing: border-box;
            background-color: rgba(252, 221, 226, 0.6);
            border: 1px solid rgba(245, 125, 171, 0.6);
            border-radius: 5px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        pre {
            margin: 0;
            font-size: 14px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        input {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: rgba(253, 45, 125, 0.6);
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        input[type="radio"] {
            background-color: rgba(253, 45, 125, 0.6);
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            padding: 8px;
            margin-right: 5px; /* Add some margin for better spacing */
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="radio"]:hover {
            background-color: rgba(253, 45, 125, 1);
        }


        input[type="submit"]:hover {
            background-color: rgba(244, 6, 133, 0.75);
        }
    </style>
</head>
<body>

<h2>Sort Visualization</h2>

<form method="post" action="" class="sorting-algorithm">
    <label>
        <input type="radio" name="sorting_algorithm" value="selection" checked> Selection Sort
    </label>

    <label>
        <input type="radio" name="sorting_algorithm" value="merge"> Merge Sort
    </label>

    <h2>Enter Unsorted Array Values</h2>
    <?php foreach ($unsortedProducts as $product): ?>
        <label for="product_name[]">Product Name</label>
        <input name="product_name[]" value="<?= $product['name']; ?>">

        <label for="product_price[]">Product Price</label>
        <input name="product_price[]" value="<?= $product['price']; ?>">
        <br>
    <?php endforeach; ?>
    <input type="submit" value="Sort">
</form>

</body>
</html>
