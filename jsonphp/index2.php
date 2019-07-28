<?php


$json1 = '["H\u00e0 N\u1ed9i"," H\u1ed3 Ch\u00ed Minh","\u0110\u00e0 N\u1eb5ng"]';
$json2 = '{"name":"Ph\u1ea1m Th\u1ecb H\u01b0\u01a1ng","age":20,"location":"H\u01b0ng Y\u00ean"';
    
$convert1 = json_decode($json1);
$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<pre>";
print_r($convert2);
echo "</pre>";

?>
