<?php
/**
 * User: wucheng
 * Date: 2016/7/19
 * Time: 14:55
 */

namespace Cicc;
use SimpleXMLElement;

class Payment 
{
    private $CICC_REAL;
    private $xmltx;
    private $tx1350Config;
    function __construct()
    {
        $this->xmltx = new Xmltx();
    }

    /**
    'cicc_url_real'=>['PAYURL'=>"https://www.china-clearing.com/Gateway/InterfaceI",
    'TXURL'=>"https://www.china-clearing.com/Gateway/InterfaceII",
    'PAYURL2'=>"https://payment.china-clearing.com/Gateway4PaymentUser/InterfaceI",
    'TXURL2'=>"https://payment.china-clearing.com/Gateway4PaymentUser/InterfaceII",
    'PFX_PATH'=>public_path("static".DIRECTORY_SEPARATOR."CiccPay".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."pri_real.pfx"),
    'PFX_PASS'=>"123456",
    'CER_PATH'=>public_path("static".DIRECTORY_SEPARATOR."CiccPay".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."pub_real.cer"),
    'InstitutionID'=>"002184" //机构代码 商户号
    ],
     *
     * @author wucheng
     * @param $config
     */
    public function config($config){
        $this->CICC_REAL = $config;
    }

    public function setTx1350Config($config){
        $this->tx1350Config = $config;
    }

    // 签名函数
    function cfcasign_pkcs12($plainText){
        $p12cert = array();
        $file = $this->CICC_REAL['PFX_PATH'];
        $fd = fopen($file, 'r');
        $p12buf = fread($fd, filesize($file));
        fclose($fd);
        openssl_pkcs12_read($p12buf, $p12cert,$this->CICC_REAL['PFX_PASS']);

        $pkeyid = $p12cert["pkey"];
        $binary_signature = "";
        openssl_sign($plainText, $binary_signature, $pkeyid,OPENSSL_ALGO_SHA1);
        return bin2hex($binary_signature);

    }

    // 验签函数
    function cfcaverify($plainText,$signature){
        $fcert = fopen($this->CICC_REAL['CER_PATH'], "r");
        $cert = fread($fcert, 8192);
        fclose($fcert);
        $binary_signature = pack("H" . strlen($signature), $signature);
        $ok = openssl_verify($plainText, $binary_signature, $cert);
        return $ok;
    }

    //访问网页数据
    function get_web_content( $curl_data )
    {
        $options = array(
            CURLOPT_RETURNTRANSFER => true,         // return web page
            CURLOPT_HEADER         => false,        // don't return headers
            CURLOPT_FOLLOWLOCATION => true,         // follow redirects
            CURLOPT_ENCODING       => "",           // handle all encodings
            CURLOPT_USERAGENT      => "institution",     // who am i
            CURLOPT_AUTOREFERER    => true,         // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
            CURLOPT_TIMEOUT        => 120,          // timeout on response
            CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
            CURLOPT_POST            => 1,            // i am sending post data
            CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
            CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
            CURLOPT_SSL_VERIFYPEER => false,        //
            CURLOPT_VERBOSE        => 1                //
        );

        $ch      = curl_init($this->CICC_REAL['TXURL']);
        curl_setopt_array($ch,$options);
        curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:"));
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;

    }

    function get_web_content2( $curl_data )
    {
        $options = array(
            CURLOPT_RETURNTRANSFER => true,         // return web page
            CURLOPT_HEADER         => false,        // don't return headers
            CURLOPT_FOLLOWLOCATION => true,         // follow redirects
            CURLOPT_ENCODING       => "",           // handle all encodings
            CURLOPT_USERAGENT      => "institution",     // who am i
            CURLOPT_AUTOREFERER    => true,         // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
            CURLOPT_TIMEOUT        => 120,          // timeout on response
            CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
            CURLOPT_POST            => 1,            // i am sending post data
            CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
            CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
            CURLOPT_SSL_VERIFYPEER => false,        //
            CURLOPT_VERBOSE        => 1                //
        );

        $ch      = curl_init($this->CICC_REAL['TXURL2']);
        curl_setopt_array($ch,$options);
        curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:"));
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;

    }

    //同步交易方式向支付平台发送请求，支付平台返回一个数组，其中第一个元素为message，第二个为signature。注意这两个参数为支付平台返回。
    function cfcatx_transfer($message,$signature){
        $post_data = array();
        $post_data['message'] = $message;
        $post_data['signature'] = $signature;

        $response= $this->get_web_content($this->data_encode($post_data) );
        $response=trim($response);

        return explode(",",$response);
    }
    function cfcatx_transfer2($message,$signature){
        $post_data = array();
        $post_data['message'] = $message;
        $post_data['signature'] = $signature;

        $response= $this->get_web_content2($this->data_encode($post_data) );
        $response=trim($response);

        return explode(",",$response);
    }
    //提交数据前要进行一下urlencode转换
    function data_encode($data, $keyprefix = "", $keypostfix = "") {
        assert( is_array($data) );
        $vars=null;
        foreach($data as $key=>$value) {
            if(is_array($value)) $vars .= data_encode($value, $keyprefix.$key.$keypostfix.urlencode("["), urlencode("]"));
            else $vars .= $keyprefix.$key.$keypostfix."=".urlencode($value)."&";
        }
        return $vars;
    }

    /**
     * 实现 在线支付流程 - 网关支付流程
     * @author wucheng
     * @param $post {order_no,payment_no,amount,payer_id,payer_name,usage,remark,note,notification_url,payees}
     * @return array
     */
    public function tx1312process($post){
        $orderNo = $post["order_no"];
        $paymentNo = $post["payment_no"];
        $amount = intval($post["amount"]);
        $notificationURL = $post["notification_url"];
        /*$payerID = $post["payer_id"];
        $payerName = $post["payer_name"];
        $usage = $post["usage"];
        $remark = $post["remark"];
        $note = $post["note"];
        $payees = $post["payees"];*/

        $simpleXML= new SimpleXMLElement($this->xmltx->xmltx1312);

        $simpleXML->Body->InstitutionID=$this->CICC_REAL['InstitutionID'];
        $simpleXML->Body->OrderNo=$orderNo;
        $simpleXML->Body->PaymentNo=$paymentNo;
        $simpleXML->Body->Amount=$amount;
        /*$simpleXML->Body->PayerID=$payerID;
        $simpleXML->Body->PayerName=$payerName;
        $simpleXML->Body->Usage=$usage;
        $simpleXML->Body->Remark=$remark;
        $simpleXML->Body->Note=$note;*/
        $simpleXML->Body->NotificationURL=$notificationURL;
        /*foreach (explode(";",$payees) as $value)
        {
            $simpleXML->Body->PayeeList->addChild("Payee",$value);
        }*/

        $xmlStr = $simpleXML->asXML();

        $message=base64_encode(trim($xmlStr));
        $signature=$this->cfcasign_pkcs12(trim($xmlStr));

        return ["message"=>$message,"signature"=>$signature,'payurl'=>$this->CICC_REAL['PAYURL']];
    }

    /**
     * 支付 前端通知
     * @author wucheng
     * @param $post
     * @return mixed
     */
    public function tx1312process_notice($post){
        $res['ok'] = 1;
        $message = $post["message"];
        $signature = $post["signature"];

        $plainText=trim(base64_decode($message));
        $ok=$this->cfcaverify($plainText,$signature);
        if($ok!=1)
        {
            $res['ok'] = $ok;
        }else{
            $simpleXML= new SimpleXMLElement($plainText);
            $res['tx_code']=(string)$simpleXML->Head->TxCode; //交易编码
            $res['institution_id']=(string)$simpleXML->Body->InstitutionID;
            $res['payment_no']=(string)$simpleXML->Body->PaymentNo;
            $res['amount']=(string)$simpleXML->Body->Amount;
            $res['status']=(string)$simpleXML->Body->Status;
            $res['bank_notification_time']=(string)$simpleXML->Body->BankNotificationTime;
            $res['msg']=$plainText;
        }
        return $res;
    }

    /**
     * 支付状态后台异步通知
     * @author wucheng
     * @param $post
     */
    public function tx1312process_notice_background($post){
        $res['ok'] = 1;
        $message = $post["message"];
        $signature = $post["signature"];

        $responseXML= new SimpleXMLElement($this->xmltx->xmlNotification);

        $plainText=trim(base64_decode($message));
        $ok=cfcaverify($plainText,$signature);
        if($ok!=1)
        {
            $res['ok'] = $ok;
            $errInfo="验签失败";
            $responseXML->Head->Code = "2001";
            $responseXML->Head->Message =$errInfo;
        }else{
            $simpleXML= new SimpleXMLElement($plainText);
            $res['tx_code']=(string)$simpleXML->Head->TxCode; //交易编码
            $res['institution_id']=(string)$simpleXML->Body->InstitutionID;
            $res['payment_no']=(string)$simpleXML->Body->PaymentNo;
            $res['amount']=(string)$simpleXML->Body->Amount;
            $res['status']=(string)$simpleXML->Body->Status;
            $res['bank_notification_time']=(string)$simpleXML->Body->BankNotificationTime;
            $res['msg']=$plainText;

            $responseXML->Head->Code = "2000";
            $responseXML->Head->Message ="OK.";
            $responseXMLStr = $responseXML->asXML();
            $base64Str = base64_encode(trim($responseXMLStr));
            $res['response']=$base64Str;
        }

        return $res;
    }

    /**
     * 对账单的支付状态发送一个主动的查询
     * @author wucheng
     * @param $institution_id
     * @param $payment_no
     * @return array
     */
    public function tx1320($payment_no){
        $simpleXML= new SimpleXMLElement($this->xmltx->xmltx1320);
        $simpleXML->Body->InstitutionID=$this->CICC_REAL['InstitutionID'];
        $simpleXML->Body->PaymentNo=$payment_no;

        $xmlStr = $simpleXML->asXML();
        $message=base64_encode(trim($xmlStr));
        $signature=$this->cfcasign_pkcs12(trim($xmlStr));
        $response=$this->cfcatx_transfer($message,$signature);
        $plainText=trim(base64_decode($response[0]));

        $ok=$this->cfcaverify($plainText,$response[1]);
        if($ok!=1)
        {
            /*$errInfo="验签失败";
            return $errInfo;*/
        }else{
            $simpleXML= new SimpleXMLElement($plainText);
            $res['tx_code'] = (string)$simpleXML->Head->Code;
            $res['message'] = (string)$simpleXML->Head->Message;
            $res['institution_id'] = (string)$simpleXML->Body->InstitutionID;
            $res['payment_no'] = (string)$simpleXML->Body->PaymentNo;
            $res['amount'] = (string)$simpleXML->Body->Amount;
            $res['remark'] = (string)$simpleXML->Body->Remark;
            $res['status'] = (string)$simpleXML->Body->Status;
            $res['bank_notification_time'] = (string)$simpleXML->Body->BankNotificationTime;
            $res['msg'] =$plainText;

            return $res;
        }

        return [];
    }

    /**
     * 实现 1341-市场订单结算（结算）
     * @author wucheng
     * @param $post
     * @return mixed
     */
    public function tx1341($serialNumber,$orderNo,$amount){
        $institutionID = $this->CICC_REAL['InstitutionID'];
        $serialNumber = $serialNumber;
        $orderNo = $orderNo;
        $amount = intval($amount);
        /*$remark = $post["remark"];*/
        $accountType = intval($this->tx1350Config['CiccAccountType']);
        $paymentAccountName = $this->tx1350Config['CiccPaymentAccountName'];
        $paymentAccountNumber = $this->tx1350Config['CiccPaymentAccountNumber'];
        $bankID = $this->tx1350Config['CiccBankID'];
        $accountName = $this->tx1350Config['CiccAccountName'];
        $accountNumber = $this->tx1350Config['CiccAccountNumber'];
        $branchName = $this->tx1350Config['CiccBranchName'];
        $province = $this->tx1350Config['CiccProvince'];
        $city = $this->tx1350Config['CiccCity'];

        $simpleXML= new SimpleXMLElement($this->xmltx->xmltx1341);

        // 4.赋值
        $simpleXML->Body->InstitutionID=$institutionID;
        $simpleXML->Body->SerialNumber=$serialNumber;
        $simpleXML->Body->OrderNo=$orderNo;
        $simpleXML->Body->Amount=$amount;
        $simpleXML->Body->Remark="";
        $simpleXML->Body->AccountType=$accountType;
        $simpleXML->Body->PaymentAccountName=$paymentAccountName;
        $simpleXML->Body->PaymentAccountNumber=$paymentAccountNumber;
        $simpleXML->Body->BankAccount->BankID=$bankID;
        $simpleXML->Body->BankAccount->AccountName=$accountName;
        $simpleXML->Body->BankAccount->AccountNumber=$accountNumber;
        $simpleXML->Body->BankAccount->BranchName=$branchName;
        $simpleXML->Body->BankAccount->Province=$province;
        $simpleXML->Body->BankAccount->City=$city;

        $xmlStr = $simpleXML->asXML();
        $message=base64_encode(trim($xmlStr));
        $signature=$this->cfcasign_pkcs12(trim($xmlStr));
        $response=$this->cfcatx_transfer($message,$signature);
        $plainText=trim(base64_decode($response[0]));

        $ok=$this->cfcaverify($plainText,$response[1]);
        if($ok!=1)
        {
            return [];
        }else{
            $simpleXML= new SimpleXMLElement($plainText);
            $post['tx_code'] = (string)$simpleXML->Head->Code;
            $post['message'] = (string)$simpleXML->Head->Message;
            $post['response'] = $plainText;
            return $post;
        }
    }


    /**
     * 1350-市场订单结算交易查询
     * @author wucheng
     * @param $serialNumber
     */
    public function tx1350($serialNumber){
        $institutionID = $this->CICC_REAL['InstitutionID'];
        $serialNumber = $serialNumber;

        $simpleXML= new SimpleXMLElement($this->xmltx->xmltx1350);

        // 4.赋值
        $simpleXML->Body->InstitutionID=$institutionID;
        $simpleXML->Body->SerialNumber=$serialNumber;

        $xmlStr = $simpleXML->asXML();
        $message=base64_encode(trim($xmlStr));
        $signature=$this->cfcasign_pkcs12(trim($xmlStr));
        $response=$this->cfcatx_transfer($message,$signature);
        $plainText=trim(base64_decode($response[0]));

        $ok=$this->cfcaverify($plainText,$response[1]);
        if($ok!=1)
        {
            return [];
        }else{
            $simpleXML= new SimpleXMLElement($plainText);
            $post['institution_id'] = $institutionID;
            $post['serial_number'] = $serialNumber;
            $post['tx_code'] = (string)$simpleXML->Head->Code;
            $post['message'] = (string)$simpleXML->Head->Message;
            $post['status'] = (string)$simpleXML->Body->Status;
            $post['response'] = $plainText;

            return $post;
        }
    }



}