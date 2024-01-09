<?php

namespace MergeSorting;

use MergeSorting\interfaces\Display;

class MergeSortVisualization implements Display
{
    public function showStep($level, $array)
    {
        // Illustration Note: Array is divided at this step
        echo '<ul>At this step, the array is divided into smaller subarrays.</ul>';

        echo '<div class="step-container">';
        echo '<div class="step">';
        echo '<h3>Step ' . $level . ': Left Array</h3>';
        $this->displayVisualArray($array['left']);
        echo '</div>';

        echo '<div class="step">';
        echo '<h3>Step ' . $level . ': Right Array</h3>';
        $this->displayVisualArray($array['right']);
        echo '</div>';
        echo '</div>';
    }

    public function showSortedResult($level, $sorted)
    {
        echo '<ul> At this step, the subarrays are merged and sorted.</ul>';

        echo '<div class="step">';
        echo '<h3>Step ' . $level . ': Sorted Array</h3>';
        $this->displayVisualArray($sorted);
        echo '</div>';
    }

    public function displayData($products)
    {
        // Default implementation using print_r
        echo "<pre>";
        print_r($products);
        echo "</pre>";
        echo PHP_EOL;
    }

    private function displayVisualArray($products)
    {
        echo '<div class="visual-array">';
        foreach ($products as $product) {
            echo '<div class="array-item">';
            echo '<div class="product-box">';
            echo '<div class="product-price">' . $product['price']  . '</div>';
            echo '<div class="product-name" style="font-size: 5px">' . $product['name'] . '</div>';

            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
}
