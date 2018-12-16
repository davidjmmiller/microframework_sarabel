<?php

function t($key){
    global $g_lang, $lang;
    return @$lang[$g_lang][$key];
}