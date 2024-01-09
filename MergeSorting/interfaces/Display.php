<?php

namespace MergeSorting\interfaces;

interface Display
{
    function showStep($level, $left, $right);
    function showSortedResult($level, $sorted);
    function displayData($products);
}

?>
