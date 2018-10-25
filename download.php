<?php

require "./config.php";
$date = date('Ymd');
$filename = "userInfo.$date";

try
{
    $connection = new PDO($dsn, $username, $password, $options);        
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>

<?php

$stmt = $connection->prepare('select * from users');
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