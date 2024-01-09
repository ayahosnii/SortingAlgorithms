<?php

namespace MergeSorting\interfaces;

interface Display
{
    function showStep($level, $array);
    function showSortedResult($level, $sorted);
    function displayData($products);
}

?>
