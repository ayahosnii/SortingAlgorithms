<?php

namespace MergeSorting;

use MergeSorting\interfaces\Display;

class Visualization implements Display
{
    public function showStep($level, $left, $right)
    {
        echo '<div class="step-container">';
        echo '<div class="step">';
        echo '<h3>Step ' . $level . ': Left Array</h3>';
        $this->displayData($left);
        echo '</div>';

        echo '<div class="step">';
        echo '<h3>Step ' . $level . ': Right Array</h3>';
        $this->displayData($right);
        echo '</div>';
        echo '</div>';
    }

    public function showSortedResult($level, $sorted)
    {
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
