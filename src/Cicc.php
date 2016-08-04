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
    /**
     * @var Payment
     */
    private $payment;
    
    public function setConfig($config){
        $this->payment = new Payment();
        $this->payment->config($config);
    }


    /**
     * 执行tx1312支付
     * @author wucheng
     * @param $data
     */
    public function tx1312($data){
        return $this->payment->tx1312process($data);
    }

    /**
     * 接受支付状态通知
     * @author wucheng
     * @param $psot
     * @return int
     */
    public function tx1312notice($psot){
        return $this->payment->tx1312process_notice($psot);
    }

    /**
     * 接受支付状态通知
     * @author wucheng
     * @param $psot
     * @return int
     */
    public function tx1312notice_background($psot){
        return $this->payment->tx1312process_notice_background($psot);
    }

    /**
     * 主动查询支付状态
     * @author wucheng
     * @param $payment_no
     * @return array
     */
    public function tx1320($payment_no){
        return $this->payment->tx1320($payment_no);
    }



}