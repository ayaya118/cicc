<?php
/**
 * Created by PhpStorm.
 * User: wucheng
 * Date: 2016/8/1
 * Time: 17:14
 */

namespace Cicc;


class Helper
{
    public static function genRandomString($lens)
    {
        $chars = array("0", "1", "2","3", "4", "5", "6", "7", "8", "9","0", "1", "2","3", "4", "5", "6", "7", "8", "9","0", "1", "2","3", "4", "5", "6", "7", "8", "9","0", "1", "2","3", "4", "5", "6", "7", "8", "9","0", "1", "2","3", "4", "5", "6", "7", "8", "9", "0", "1", "2","3", "4", "5", "6", "7", "8", "9");$charsLen = count($chars) - 1;
        shuffle($chars);
        $output = "";
        for ($i=0; $i<$lens; $i++)
        {
            $output .= $chars[mt_rand(0, $charsLen)];
        }

        return $output;
    }

    public static function getTxNo16(){
        ini_set('date.timezone','Asia/Shanghai');
        $timePrefix = date("ymdH"); //yyMMddHH
        $randomString = genRandomString(8);
        return $timePrefix.$randomString;
    }


    public static function getTxNo20(){
        ini_set('date.timezone','Asia/Shanghai');
        $timePrefix = date("ymdHi"); //yyMMddHHmm
        $randomString = genRandomString(10);
        return $timePrefix.$randomString;
    }
}