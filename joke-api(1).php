<?php

function curl($url){
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
return json_decode(curl_exec($ch));
}
echo  curl("https://api.codebazan.ir/jok/json/")->result->{'jok'};
?>
