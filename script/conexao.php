<?
// Dados do banco
$dbhost = "DEVELOPMENT-PC"; 
$db = "gc";
$user ="sa"; 
$password = "123456789"; 

$conninfo = array("Database" => $db, "UID" => user, "PWD" => $password);
$conn = sqlsrv_connect($dbhost, $conninfo);



/*$instrucaoSQL = “SELECT $campo1, $campo2 FROM $tabela ORDER BY $campo1”;

$params = array();
$options =array(“Scrollable” => SQLSRV_CURSOR_KEYSET);
$consulta = sqlsrv_query($conn, $instrucaoSQL, $params, $options);
$numRegistros = sqlsrv_num_rows($consulta);

echo “Esta tabela contém $numRegistros registros!\n<hr>\n”;

if ($numRegistros!=0) {
while ($cadaLinha = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC)) {
echo “$cadaLinha[$campo1] – $cadaLinha[$campo2]\n<br>\n”;
}
}
*/
?>