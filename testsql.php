<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 連接資料庫並取得資料</title>
    <link href="CI317/Curryweb/css/styles.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="CI317/Curryweb/css/uikit.css" />
</head>
<body>
<?php

// 定義資料庫資訊
$DB_NAME = "curry"; // 資料庫名稱
$DB_USER = "root"; // 資料庫管理帳號
$DB_PASS = ""; // 資料庫管理密碼
$DB_HOST = "localhost"; // 資料庫位址

// 連接 MySQL 資料庫伺服器
$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS);
if (empty($con)) {
    print mysqli_error($con);
    die("資料庫連接失敗！");
    exit;
}

// 選取資料庫
if (!mysqli_select_db($con, $DB_NAME)) {
    die("選取資料庫失敗！");
} else {
    echo "連接 " . $DB_NAME . " 資料庫成功！<br>";
}

// 設定連線編碼
mysqli_query($con, "SET NAMES 'UTF-8'");

// 取得資料
$sql = "SELECT * FROM southern___chiayi";
$result = mysqli_query($con, $sql);

// 獲得資料筆數
if ($result) {
    $num = mysqli_num_rows($result);
    echo "southern___chiayi 資料表有 " . $num . " 筆資料<br>";
}
?>
// --- 顯示資料 --- //
<div class="row">
    <div class="col-xl-9 mx-auto">
        <div class="cta-inner bg-faded text-center rounded">
            <ul uk-accordion>
                <li ><a class="uk-accordion-title" href="#"></a>
                    <span>
<?php
$DB_NAME = "curry"; // 資料庫名稱
$DB_USER = "root"; // 資料庫管理帳號
$DB_PASS = ""; // 資料庫管理密碼
$DB_HOST = "localhost"; // 資料庫位址

// 連接 MySQL 資料庫伺服器
$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS);
$result = mysqli_query($con, $sql);
// $num = mysqli_num_rows($result);
if ($result) {
    $num = mysqli_num_rows($result);
}
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
    for ($i = 1; $i <= $num; $i++){
        echo $row[$i];
}
}?>
</span>
</br>
<!-- <h4>向午粮品 手作料理</h4> -->
<div class="uk-accordion-content">

</div>
</div>
</div>




<!-- echo "<br>顯示資料（MYSQLI_NUM，欄位數）：<br>";


while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("第 %s 筆資料 : %s<br>", $row[0], $row[1], $row[2], $row[3]);
}

echo "<br>顯示資料（MYSQLI_ASSOC，欄位名稱）：<br>";

$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    printf("第 %s 筆資料 : %s<br>", $row['Index'], $row['name'], $row['address'], $row['phone']);
}

echo "<br>顯示資料（MYSQLI_BOTH，欄位數 & 欄位名稱皆可，採用欄位數）：<br>";

// $result = mysqli_query($con, $sql);
// while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
//     printf("第 %s 筆資料 : %s<br>", $row[0], $row[1]);
// }

// echo "<br>顯示資料（MYSQLI_BOTH，欄位數 & 欄位名稱皆可，採用欄位名稱）：<br>";

// $result = mysqli_query($con, $sql);
// while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
//     printf("第 %s 筆資料 : %s<br>", $row["index"], $row["name"]);
// }

// 釋放記憶體
mysqli_free_result($result);

// 關閉連線
mysqli_close($con);

?> -->
</body>
</html>