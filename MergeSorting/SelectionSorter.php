<?php

namespace MergeSorting;

use MergeSorting\interfaces\Display;

class SelectionSorter
{
    private $display;

    public function __construct(Display $display)
    {
        $this->display = $display;
    }

    public function sort($products)
    {
        // Get the length of the products array
        $length = count($products);

        // Traverse through all array elements
        for ($i = 0; $i < $length - 1; $i++) {
            // Find the minimum element in the unsorted part of the array
            $minIndex = $i;
            for ($j = $i + 1; $j < $length; $j++) {
                if ($products[$j]['price'] < $products[$minIndex]['price']) {
                    $minIndex = $j;
                }
            }

            // Swap the found minimum element with the first element
            $temp = $products[$minIndex];
            $products[$minIndex] = $products[$i];
            $products[$i] = $temp;

            // Display the current step in the sorting process
            $this->display->showStep($i, $products, []);
        }

        // Display the sorted result
        $this->display->showSortedResult($i, $products);

        // Return the final sorted array
        return $products;
    }
}

?>
