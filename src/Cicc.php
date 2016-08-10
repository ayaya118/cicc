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
     * 配置市场订单结算
     * @author wucheng
     * @param $config
     */
    public function setTx1350Config($config){
        $this->payment->setTx1350Config($config);
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

    /**
     * 实现 1341-市场订单结算（结算）
     * @author wucheng
     * @param $serialNumber   交易流水号
     * @param $orderNo  订单编号
     * @param $amount   金额
     * @return mixed
     */
    public function tx1341($serialNumber,$orderNo,$amount){
        return $this->payment->tx1341($serialNumber,$orderNo,$amount);
    }

    /**
     * 1350-市场订单结算交易查询
     * @author wucheng
     * @param $serialNumber
     * @return mixed
     */
    public function tx1350($serialNumber){
        return $this->payment->tx1350($serialNumber);
    }


}