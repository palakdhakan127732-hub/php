<?php

$arr = array("Apple", "Mango", "Apple", "Banana", "Mango", "Apple");

echo "<h3>Original Array</h3>";
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<h3>Count of Each Value</h3>";
echo "<pre>";
print_r(array_count_values($arr));
echo "</pre>";

?>