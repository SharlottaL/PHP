<?php

function create_table_row($row)
{
    $formatted_row = '<tr>';
    foreach ($row as $i) {
        $formatted_row .= '<td>';
        $formatted_row .= $i;
        $formatted_row .= '</td>';
    }
    return $formatted_row;
}

?>