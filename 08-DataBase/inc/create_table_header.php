<?php
function create_table_header($results)
{
    $meta = sqlsrv_field_metadata($results);
   // print_r($meta);
    $table_header = '<table><thead><tr>';
    for($i = 0; $i < sqlsrv_num_fields($results); $i++)
    {
       // echo $meta[$i]['Name'] . '<br>';
        $table_header .= "<th>{$meta[$i]['Name']}</th>";
    }
    $table_header .= '</tr></thead>';
    return $table_header;
}
?>