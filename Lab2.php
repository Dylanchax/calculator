<?php
function first( string $text): void
{
    echo ($text);
}
first('param3t3r');
function repeatContent(int $count = 1):void 
{
    for($i=0;$i <=$count;$i++){
        first(" Hey There ");
    }
}
repeatContent();
repeatContent(5);
