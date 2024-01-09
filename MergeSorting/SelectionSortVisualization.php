<?php

namespace MergeSorting;

use MergeSorting\interfaces\Display;

class SelectionSortVisualization implements Display
{
    public function showStep($level, $array)
    {
        // Illustration Note: Array is selected and sorted at this step
        echo '<ul>At this step, the minimum element is selected and swapped.</ul>';

        echo '<div class="step-container">';
        echo '<div class="step">';
        echo '<h3>Step ' . $level . ': Unsorted Array</h3>';
        $this->displayVisualArray($array);
        echo '</div>';
        echo '</div>';
    }

    public function showSortedResult($level, $sorted)
    {
        echo '<ul> At this step, the selected element is moved to its sorted position.</ul>';

        echo '<div class="step">';
        echo '<h3>Step ' . $level . ': Sorted Array</h3>';
        $this->displayVisualArray($sorted);
        echo '</div>';
    }

    public function displayData($products)
    {
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

?>
