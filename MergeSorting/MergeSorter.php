<?php

namespace MergeSorting;

use MergeSorting\interfaces\Display;

class MergeSorter
{
    private $display;

    public function __construct(Display $display)
    {
        $this->display = $display;
    }

    public function sort($products, $level = 0)
    {
        // Get the length of the products array
        $length = count($products);

        // If the array has 1 or fewer elements, it is already sorted
        if ($length <= 1) {
            return $products;
        }

        // Calculate the middle index of the array
        $mid = (int)($length / 2);

        // Divide the array into two subarrays: left and right
        $left = array_slice($products, 0, $mid);
        $right = array_slice($products, $mid);

        // Display the current step in the sorting process
        $this->display->showStep($level, ['left' => $left, 'right' => $right]);

        // Recursively apply sort to the left and right subarrays
        $left = $this->sort($left, $level + 1);
        $right = $this->sort($right, $level + 1);

        // Merge the sorted left and right subarrays
        $sorted = $this->merge($left, $right);

        // Display the sorted result of the current step
        $this->display->showSortedResult($level, $sorted);

        // Return the final sorted array
        return $sorted;
    }

    private function merge($left, $right)
    {
        // Initialize an empty array to store the merged result
        $result = [];

        // Initialize indices for the left and right arrays
        $i = $j = 0;

        // Compare elements from both arrays and merge them into the result array
        while ($i < count($left) && $j < count($right)) {
            // Compare the prices of the current elements in the left and right arrays
            if ($left[$i]['price'] < $right[$j]['price']) {
                // If the price in the left array is smaller, add it to the result
                $result[] = $left[$i];
                // Move to the next element in the left array
                $i++;
            } else {
                // If the price in the right array is smaller (or equal), add it to the result
                $result[] = $right[$j];
                // Move to the next element in the right array
                $j++;
            }
        }

        // After the above loop, one of the arrays may still have remaining elements
        // Copy the remaining elements from the left array, if any
        while ($i < count($left)) {
            $result[] = $left[$i];
            $i++;
        }

        // Copy the remaining elements from the right array, if any
        while ($j < count($right)) {
            $result[] = $right[$j];
            $j++;
        }

        // Return the merged and sorted result array
        return $result;
    }
}

?>
