//預設Port已更改，瀏覽器網址需指定port：http://localhost:82/檔案名稱.php

<?php
//json_url格式：https://sheets.googleapis.com/v4/spreadsheets/XXXXXXXXX/values/你的工作表名稱?key=你的api_key
$Sheetkey = "1_3clsdkLvLJcv8RVMIEs91RB-BCvyeFW_xY7qpJINkI";
$Sheetname = "工作表1";
$APIkey = "AIzaSyCc9_Nf6Fr8jp-5EuBkKHyFWbS1UrKNkPA";
$json_url = "https://sheets.googleapis.com/v4/spreadsheets/$Sheetkey/values/$Sheetname?key=$APIkey";
$string = file_get_contents($json_url);
$data_json = json_decode($string,true);
//print_r($data_json);

//print_r($data_json['values'][1][1]);
$產品照片 =  $data_json['values'][1][1]; //value陣列裡→第1個陣列→第1位置(從0開始)
//$標題2 =  $data_json['values'][2][1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><img src="<?php echo $產品照片;?>" alt=""></div>
</body>
</html>