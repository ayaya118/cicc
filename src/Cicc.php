<?php
/**
 * Created by PhpStorm.
 * User: wucheng
 * Date: 2016/8/1
 * Time: 16:14
 */

namespace Cicc;


class Cicc
{
    private $payment;
    public function setConfig($config){
        $this->payment = new Payment();
        $this->payment->config($config);
    }

    public function tx1312(){
        exit("tx1312 demo");
    }


}