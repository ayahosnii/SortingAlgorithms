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
        $this->displayData($array['left']);
        echo '</div>';

        echo '<div class="step">';
        echo '<h3>Step ' . $level . ': Right Array</h3>';
        $this->displayData($array['right']);
        echo '</div>';
        echo '</div>';
    }

    public function showSortedResult($level, $sorted)
    {
        echo '<ul> At this step, the subarrays are merged and sorted.</ul>';

        echo '<div class="step">';
        echo '<h3>Step ' . $level . ': Sorted Array</h3>';
        $this->displayData($sorted);
        echo '</div>';
    }

    public function displayData($products)
    {
        echo "<pre>";
        print_r($products);
        echo "</pre>";
        echo PHP_EOL;
    }
}

?>
