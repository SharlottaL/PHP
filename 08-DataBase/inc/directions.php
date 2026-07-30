<?php
//phpinfo();
require_once __DIR__ . '/connect.php';
//require_once __DIR__ . '/create_table_row.php';
//require_once __DIR__ . '/create_table_header.php';
require_once __DIR__ . '/assembly_table.php';



$table_header = create_table_header($results);
//$table_header = '<table><tr><th>ID</th><th>Naprav ob </tr></th>';

$query = "SELECT * FROM Directions";
$results = sqlsrv_query($connection, $query);
create_table_header($results);
var_dump($results);
echo assembly_table($results);
//print_r($results);

//echo '<table>';
//echo '<tr>';

//echo '<th>';
//echo 'ID';
//echo '</th>';

//echo '<th>';
//echo 'Naprav ob';
//echo '</th>';



//while ($row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC)) {
//    //echo var_dump($row);
//    //echo '<tr>';
//    //echo '<td>';
//    //echo $row['direction_id'];
//    //echo '</td>';
//    //echo '<td>';
//    //echo $row['direction_name'];
//    //echo '</td>';
//    //echo '</tr>';
//    $table_body .= create_table_row($row);
//}
//$table_body .= '</tbody>';

//$table = "{$table_header}{$table_body}{$table_footer}";
//echo $table;
////echo '</tr>';
////echo '</table>';
require_once __DIR__ . '/disconnect.php';
?>