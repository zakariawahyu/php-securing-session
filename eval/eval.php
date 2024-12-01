<?php

$code = 'echo file_get_contents("sensitive-data.txt"); echo exec("cd");';

if ( preg_match_all( '/(?P<fnc>[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*) ?\(.*?\)/si',$code,$aFunctions,PREG_PATTERN_ORDER ) )
{
    foreach( $aFunctions['fnc'] as $functionName )
    {
        if (isFunctionAllowed($functionName) )
        {
            die( "'{$functionName}' IS ILLEGAL" );
        }
    }
}

eval($code);

function isFunctionAllowed($functionName) {
    return function_exists($functionName);
}