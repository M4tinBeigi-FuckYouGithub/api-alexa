<?php

function GetRankAlexa($site){

    header('Content-Type: text/html; charset=utf-8');
    $url = file_get_contents("http://data.alexa.com/data?cli=10&dat=snbamz&url=$site");
    preg_match('/\<popularity url\="(.*?)" text\="([0-9]+)" source\="panel"\/\>/si', $url, $rankglobal);
    preg_match('/\<COUNTRY CODE\="(.*?)" RANK\="([0-9]+)"\/\>/si', $url, $rankiran);
    $iran = ($rankiran[2]) ? $rankiran[2] : 0 ;
    $globalrank = ($rankglobal[2]) ? $rankglobal[2] : 0 ;
    echo "$site : Global Rate => $globalrank Iran Rate => $iran";
     
}
     
GetRankAlexa('hoshiland.com');

?>
