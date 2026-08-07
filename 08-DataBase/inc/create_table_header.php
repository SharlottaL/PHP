<?php
function create_table_header($results)
{
    $meta = sqlsrv_field_metadata($results);
   // print_r($meta);
    $table_header = '<table><thead><tr>';
    for($j = 0; $j < sqlsrv_num_fields($results); $j++)
    {
       // echo $meta[$i]['Name'] . '<br>';
        $table_header .= "<th>{$meta[$j]['Name']}</th>";
    }
    $table_header .= '</tr></thead>';
    return $table_header;
}
?>