<?php

require "../config.php";
$date = date('Ymd');
$filename = "userInfo.returning.$date";
?>

<?php

$stmt = $connection->prepare('select * from returningUsers');
$stmt->execute();
$columnHeader = '';
$columnHeader = "id" . "\t" . "Name" . "\t" . "Username" . "\t" . "Email" . "\t" . "visits" . "\t" . "Visit Times" . "\t";

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