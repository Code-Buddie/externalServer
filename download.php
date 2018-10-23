<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "userDetails";
$date = date('Ymd');
$filename = "userInfo.$date";

try
{
    $db_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>

<?php

$stmt = $db_con->prepare('select * from users');
$stmt->execute();
$columnHeader = '';
$columnHeader = "id" . "\t" . "Name" . "\t" . "Username" . "\t" . "Email" . "\t" . "date" . "\t";

$setData = '';

while ($rec = $stmt->FETCH(PDO::FETCH_ASSOC)) {
    $rowData = '';
    foreach ($rec as $value) {
        $value = '"' . $value . '"' . "\t";
        $rowData .= $value;
    }
    $setData .= trim($rowData) . "\n";
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader) . "\n" . $setData . "\n";

?>