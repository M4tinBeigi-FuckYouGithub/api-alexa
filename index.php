<?php
header('Content-Type: text/html; charset=utf-8');
$url = file_get_contents('http://data.alexa.com/data?cli=10&dat=snbamz&url=http://hoshiland.com');
 
//Alexa Rank
preg_match('/\<popularity url\="(.*?)" text\="([0-9]+)" source\="panel"\/\>/si', $url, $matches);
$globalrank = ($matches[2]) ? $matches[2] : 0;
 
 preg_match('/\<COUNTRY CODE\="(.*?)" RANK\="([0-9]+)"\/\>/si', $url, $matches);
$iran = ($matches[2]) ? $matches[2] : 0;
/*
<POPULARITY URL="hoshiland.com/" TEXT="870444" SOURCE="panel"/>
<COUNTRY CODE="IR" NAME="Iran" RANK="12735"/>
*/
echo "Global Rate : ".$globalrank;
echo "Iran Rate : ".$iran;
 
?>