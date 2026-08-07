<?php

$queries = glob(__DIR__ . '/../SQL/*');
//echo '<pre>';
//print_r($queries);
//echo '</pre>';

$menu = '';
//$menu = '<nav>';
foreach ($queries as $query) {
    $i = explode('/', $query);
    $menu .= "<button onclick=\"loadTable(event)\" id={$i[count($i) - 1]}>{$i[count($i) - 1]}</button>";
}
//$menu .= '</nav>';

echo $menu;

?>