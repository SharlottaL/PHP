<?php
//phpinfo();

$server_name = "Botan\SQLEXPRESS";
$connection_info = array("DataBase" => "PD_321", "UID" => "PHP", "PWD" => "111", "CharacterSet" => "UTF-8");
$connection = sqlsrv_connect($server_name, $connection_info);

var_dump($connection);

$table_header = '<table><tr><th>ID</th><th>Naprav ob </tr></th>';

$query = "SELECT * FROM Directions";
$results = sqlsrv_query($connection, $query);

print_r($results);

echo '<table>';
echo '<tr>';

echo '<th>';
echo 'ID';
echo '</th>';

echo '<th>';
echo 'Naprav ob';
echo '</th>';



while ($row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC)) {
    //echo var_dump($row);
    //echo '<tr>';
    //echo '<td>';
    //echo $row['direction_id'];
    //echo '</td>';
    //echo '<td>';
    //echo $row['direction_name'];
    //echo '</td>';
    //echo '</tr>';
    $table_body .= create_table_row($row);
}
$table_body .= '</tbody>';

$table = "{$table_header}{$table_body}{$table_footer}";
echo $table;
//echo '</tr>';
//echo '</table>';
sqlsrv_free_stmt($results);
sqlsrv_close($connection);
?>