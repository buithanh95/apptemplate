<?php

$json1 = '["h\u00e0 n\u1ed9i","h\u1ed3 ch\u00ed minh","\u0111\u00e0 n\u1eb5ng"]';
$json2 = '{"name":null,"age":null,"location":null}';

$convert1 = json_encode($json1);
$convert2 = json_encode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<pre>";
print_r($convert2);
echo "</pre>";