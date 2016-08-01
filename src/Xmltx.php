<?php
/**
 * Created by PhpStorm.
 * User: wucheng
 * Date: 2016/8/1
 * Time: 17:10
 */

namespace Cicc;


class Xmltx
{
    public $xmltx1111 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
		<TxCode>1111</TxCode> 
	</Head>  
	<Body> 
		<InstitutionID/>  
		<PaymentNo/>  
		<Amount/>  
		<Fee/>
		<PayerID/>
		<PayerName/>
		<SettlementFlag/>
		<Usage/>
		<Remark/>  
		<NotificationURL/>  
		<BankID/>  
		<AccountType/> 
	</Body> 
</Request>
XML;

    public $xmltx1112 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>1112</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<Amount/>
		<PayerID/>
		<PayerName/>
		<SettlementFlag/>
		<Usage/>
		<Remark/>
		<Note/>
		<NotificationURL/>
	</Body> 
</Request>
XML;

    public $xmltx1115 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>1115</TxCode>
	</Head>
	<Body>
		<InstitutionID/>
		<PaymentNo/>
		<Amount/>
		<PayerName/>
		<SettlementFlag/>
		<Usage/>
		<Remark/>
		<NotificationURL/>
		<BankID/>
		<AccountType/>
	</Body> 
</Request>
XML;

    public $xmltx1118 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1118</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
		<Amount/>
		<Status/>
		<BankNotificationTime/>
  </Body> 
</Request>
XML;

    public $xmltx1119 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>1119</TxCode>
	</Head>
	<Body>
		<BranchID/>
		<InstitutionID/>
		<PaymentNo/>
		<PayerID/>
		<PayerName/>
		<Amount/>
		<Status/>
		<SettlementFlag/>
		<Usage/>
		<PaidTime/>
		<Remark/>
	</Body> 
</Request>
XML;

    public $xmltx1120 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1120</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
  </Body> 
</Request>
XML;

    public $xmltx1121 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1121</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
    <PaymentNo/> 
  </Body>
</Request>
XML;

    public $xmltx1131 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1131</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
		<SerialNumber/>
    <PaymentNo/> 
		<Amount/>
		<Remark/>
		<AccountType/>
		<PaymentAccountName/>
		<PaymentAccountNumber/>
		<BankAccount>
			<BankID/>
			<AccountName/>
			<AccountNumber/>
			<BranchName/>
			<Province/>
			<City/>
		</BankAccount>
		<RefundType/>
  </Body> 
</Request>
XML;

    public $xmltx1132 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1132</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
		<SerialNumber/>
  </Body> 
</Request>
XML;

    public $xmltx1133 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1133</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
		<SerialNumber/>
		<PaymentNo/>
		<Amount/>
		<Remark/>
		<RefundType/>
  </Body> 
</Request>
XML;

    public $xmltx1134 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1134</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>
		<SerialNumber/>
    <PaymentNo/> 
		<Amount/>
		<Remark/>
		<AccountType/>
		<PaymentAccountName/>
		<PaymentAccountNumber/>
		<BankAccount>
			<BankID/>
			<AccountName/>
			<AccountNumber/>
			<BranchName/>
			<Province/>
			<City/>
		</BankAccount>
  </Body> 
</Request>
XML;

    public $xmltx1138 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1138</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<SerialNumber/>
		<PaymentNo/>
		<Amount/>
		<Status/>
		<RefundTime/>
  </Body> 
</Request>
XML;

    public $xmlNotification = <<<XML
<?xml version="1.0" encoding="UTF-8"?><Response version="2.0"><Head><Code/><Message/></Head></Response>
XML;

    /**
     * PayeeList can be composited by several Payees.
     */
    public $xmltx1311 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
		<TxCode>1311</TxCode> 
	</Head>  
	<Body> 
		<InstitutionID/>  
		<OrderNo/>  
		<PaymentNo/>  
		<Amount/>
		<Fee/>
		<PayerID/>
		<PayerName/>
		<Usage/>  
		<Remark/>  
		<NotificationURL/>  
		<PayeeList>
			<Payee/>
		</PayeeList>  
		<BankID/>  
		<AccountType/>
		<CardType/>
	</Body> 
</Request>
XML;

    public $xmltx1312 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
		<TxCode>1312</TxCode> 
	</Head>  
	<Body> 
		<InstitutionID/>  
		<OrderNo/>  
		<PaymentNo/>  
		<Amount/>
		<PayerID/>
		<PayerName/>
		<Usage/>  
		<Remark/>
		<Note/>  
		<NotificationURL/>  
		<PayeeList>
			<Payee/>
		</PayeeList>  
	</Body> 
</Request>
XML;

    public $xmltx1318 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1318</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
		<Amount/>
		<Status/>
		<BankNotificationTime/>
  </Body> 
</Request>
XML;

    public $xmltx1320 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1320</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
  </Body> 
</Request>
XML;

    public $xmltx1321 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1321</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <PaymentNo/> 
  </Body> 
</Request>
XML;

    public $xmltx1330 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1330</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/>  
    <OrderNo/>
    <StartDate/> 
    <EndDate/>
  </Body> 
</Request>
XML;

    public $xmltx1333 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1333</TxCode> 
  </Head>  
  <Body> 
    <InstitutionID/> 
    <SerialNumber/> 
    <OrderNo/>
    <PaymentNo/> 
    <Amount/>
    <Remark/>
  </Body> 
</Request>
XML;

    public $xmltx1341 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1341</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
		<SerialNumber/>  
		<OrderNo/>  
		<Amount/>  
		<Remark/>  
		<AccountType/>  
		<PaymentAccountName/>  
		<PaymentAccountNumber/>  
		<BankAccount> 
			<BankID/>  
			<AccountName/>  
			<AccountNumber/>  
			<BranchName/>  
			<Province/>  
			<City/> 
		</BankAccount> 
  </Body> 
</Request>
XML;

    public $xmltx1343 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1343</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
		<SerialNumber/>  
		<OrderNo/>  
		<Amount/>  
		<Remark/>  
		<AccountType/>  
		<PaymentAccountName/>  
		<PaymentAccountNumber/>  
		<BankAccount> 
			<BankID/>  
			<AccountName/>  
			<AccountNumber/>  
			<BranchName/>  
			<Province/>  
			<City/> 
		</BankAccount> 
  </Body> 
</Request>
XML;

    public $xmltx1345 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1345</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<ReversalTxNo/>  
		<OrderNo/>  
		<SerialNumber/>  
		<Remark/>  		
  </Body> 
</Request>
XML;

    public $xmltx1348 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1348</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<SerialNumber/>  
		<OrderNo/>  
		<Amount/>
		<Staus/>
		<TransferTime/>
		<ErrorMessage/>  		
  </Body> 
</Request>
XML;

    public $xmltx1350 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1350</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>
		<SerialNumber/>   		
  </Body> 
</Request>
XML;

    public $xmltx1361 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1361</TxCode>
	<OrderNo/>
	<TxSN/>
</Head>
<Body>
	<Amount/>
	<BankID/>
	<AccountType/>
	<AccountName/>
	<AccountNumber/>
	<BranchName/>
	<Province/>
	<City/>
	<ValidDate/>
	<CVN2/>
	<IdentificationType/>
	<IdentificationNumber/>
	<Note/>
	<ContractUserID/>
	<PhoneNumber/>
	<Email/>
	<PayeeList>
		<Payee/>
	</PayeeList>
</Body>
</Request>
XML;

    public $xmltx1362 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1362</TxCode>
	<TxSN/>
</Head>
</Request>
XML;

    public $xmltx1363 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1363</TxCode>
	<OrderNo/>
	<TxSN/>
</Head>
<Body>
	<Amount/>
	<Status/>
	<BankTxTime/>
	<ResponseCode/>
	<ResponseMessage/>
</Body>
</Request>
XML;

    public $xmltx1365 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1365</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<OrderNo/>
	<BatchNo/>
	<TotalAmount/>
	<TotalCount/>
	<Remark/>
	<Item>
		<ItemNo/>
		<Amount/>
		<BankID/>
		<AccountType/>
		<AccountName/>
		<AccountNumber/>
		<BranchName/>
		<Province/>
		<City/>
		<IdentificationType/>
		<IdentificationNumber/>
		<Note/>
		<PhoneNumber/>
		<Email/>
	</Item>
</Body>
</Request>
XML;

    public $xmltx1366 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1366</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<OrderNo/>
	<BatchNo/>
</Body>
</Request>
XML;

    public $xmltx1371 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1371</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<TxSNBinding/>
	<Remark/>
</Body>
</Request>
XML;

    public $xmltx1372 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1372</TxCode>
</Head>
<Body>
	<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx1373 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1373</TxCode>
</Head>
<Body>
	<TxSN/>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<Remark/>
</Body>
</Request>
XML;

    public $xmltx1374 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1374</TxCode>
</Head>
<Body>
	<TxSN/>
</Body>
</Request>
XML;

    public $xmltx1375 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1375</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<TxSNBinding/>
	<Amount/>
	<Remark/>
</Body>
</Request>
XML;

    public $xmltx1376 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1376</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<SMSValidationCode/>
</Body>
</Request>
XML;

    public $xmltx1380 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1380</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<Usage/>
	<PhoneNumber/>
	<Email/>
	<Remark/>
</Body>
</Request>
XML;

    public $xmltx1382 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1382</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx1388 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1388</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<PaymentNo/>
	<PhoneNumber/>
	<Amount/>
	<Status/>
	<TxTime/>
	<BankTxTime/>
	<Remark/>
</Body>
</Request>
XML;

    public $xmltx1390 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1390</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<OrderNo/>
	<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx1391 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1391</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<AccountNumber/>
	<PhoneNumber/>
	<MerchantID/>
	<MerchantName/>
	<MerchantShortName/>
	<MCC/>
	<Remark/>
</Body>
</Request>
XML;

    public $xmltx1392 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1392</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<SMSValidationCode/>
</Body>
</Request>
XML;

    public $xmltx1393 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1393</TxCode>
</Head>
<Body>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<AccountNumber/>
	<MerchantID/>
	<MerchantName/>
	<MerchantShortName/>
	<MCC/>
	<Remark/>
	<PageURL/>
</Body>
</Request>
XML;

    public $xmltx1394 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1394</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<PaymentNo/>
	<Status/>
	<BankTxTime/>
	<ResponseCode/>
	<ResponseMessage/>
	<PayCardType/>
</Body>
</Request>
XML;

    public $xmltx1395 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1395</TxCode>
</Head>
<Body>
	<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx1396 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1396</TxCode>
</Head>
<Body>
	<SerialNumber/>
	<OrderNo/>
	<PaymentNo/>
	<Amount/>
	<MerchantID/>
	<MerchantName/>
	<MerchantShortName/>
	<MCC/>
	<Remark/>
</Body>
</Request>
XML;

    public $xmltx1397 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1397</TxCode>
</Head>
<Body>
	<SerialNumber/>
</Body>
</Request>
XML;

    public $xmltx1510 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1510</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<BatchNo/>
	<TotalAmount/>
	<TotalCount/>
	<Remark/>
	<Item>
		<ItemNo/>
		<Amount/>
		<BankID/>
		<AccountType/>
		<AccountName/>
		<AccountNumber/>
		<BranchName/>
		<Province/>
		<City/>
		<Note/>
		<PhoneNumber/>
		<Email/>
		<IdentificationType/>
		<IdentificationNumber/>
	</Item>
</Body>
</Request>
XML;

    public $xmltx1520 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1520</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<BatchNo/>
</Body>
</Request>
XML;

    public $xmltx1550 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1550</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<Date/>
</Body>
</Request>
XML;

    public $xmltx1610 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1610</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<BatchNo/>
	<TotalAmount/>
	<TotalCount/>
	<Remark/>
	<Item>
		<ItemNo/>
		<Amount/>
		<BankID/>
		<AccountType/>
		<AccountName/>
		<AccountNumber/>
		<BranchName/>
		<Province/>
		<City/>
		<Note/>
		<ContractNo/>
		<ContractUserID/>
		<PhoneNumber/>
		<Email/>
		<IdentificationType/>
		<IdentificationNumber/>
		<SettlementFlag/>
	</Item>
</Body>
</Request>
XML;

    public $xmltx1620 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1620</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<BatchNo/>
</Body>
</Request>
XML;

    public $xmltx1650 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>1650</TxCode>
</Head>
<Body>
	<InstitutionID/>
	<Date/>
</Body>
</Request>
XML;

    public $xmltx1711 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1711</TxCode> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Amount/>  
		<PayerID/> 
		<PayerName/> 
		<Usage/> 
		<Remark/> 
		<PageURL/>  
		<BankID/>  
		<AccountType/>
	</Body> 
</Request>
XML;

    public $xmltx1712 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1712</TxCode> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Amount/>  
		<Status/>  
		<BankTxTime/>
	</Body> 
</Request>
XML;

    public $xmltx1713 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1713</TxCode> 
	</Head>  
	<Body> 
		<OrderNo/>  
	</Body> 
</Request>
XML;

    public $xmltx1715 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1715</TxCode>
</Head>
<Body>
	<OrderNo/>
	<Amount/>
	<BankID/>
	<AccountType/>
	<ValidDate/>
	<CVN2/>
	<AccountName/>
	<AccountNumber/>
	<IdentificationType/>
	<IdentificationNumber/>
	<Note/>
	<ContractUserID/>
	<PhoneNumber/>
	<Email/>
</Body>
</Request>
XML;

    public $xmltx1721 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1721</TxCode> 
		<TxSN/> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Remark/> 
	</Body> 
</Request>
XML;

    public $xmltx1722 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1722</TxCode> 
		<TxSN/> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Status/> 
		<BankTxTime/>
		<ResponseCode/>
		<ResponseMessage/>
	</Body> 
</Request>
XML;

    public $xmltx1723 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1723</TxCode> 
		<TxSN/> 
	</Head>  
</Request>
XML;

    public $xmltx1731 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1731</TxCode> 
		<TxSN/> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Amount/>  
		<Remark/> 
	</Body> 
</Request>
XML;

    public $xmltx1732 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1732</TxCode> 
		<TxSN/> 
	</Head>  
	<Body> 
		<OrderNo/>  
		<Status/> 
		<BankTxTime/>
		<ResponseCode/>
		<ResponseMessage/>
	</Body> 
</Request>
XML;

    public $xmltx1733 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1733</TxCode> 
		<TxSN/> 
	</Head>  
</Request>
XML;

    public $xmltx1741 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>1741</TxCode> 
		<TxSN/>  
  </Head>  
  <Body> 
		<OrderNo/>  
		<Amount/>  
		<Remark/>  
		<AccountType/>  
		<BankAccount> 
		<BankID/>  
		<AccountName/>  
		<AccountNumber/>  
		<BranchName/>  
		<Province/>  
		<City/> 
		</BankAccount> 
  </Body> 
</Request>
XML;

    public $xmltx1810 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1810</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
    <Date/> 
  </Body> 
</Request>
XML;

    public $xmltx1811 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1811</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
    <Date/> 
    <PageNO/>
    <CountPerPage/>
  </Body> 
</Request>
XML;

    public $xmltx1820 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1820</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
    <Date/> 
  </Body> 
</Request>
XML;

    public $xmltx1830 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1830</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
    <BatchNo/> 
  </Body> 
</Request>
XML;

    public $xmltx1840 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1840</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
		<InstitutionIDSupervised/>
    <Date/> 
    <SettlementFlag/>
  </Body> 
</Request>
XML;

    public $xmltx1818 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>1818</TxCode> 
  </Head>  
  <Body> 
		<InstitutionID/>  
    <TxDate/> 
  </Body> 
</Request>
XML;

    public $xmltx1910 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1910</TxCode>
</Head>
<Body>
	<BatchNo/>
	<TotalAmount/>
	<TotalCount/>
	<Remark/>
	<Item>
		<ItemNo/>
		<Amount/>
		<Gathering>
			<BankAccount>
				<BankID/>
				<AccountType/>
				<AccountName/>
				<AccountNumber/>
				<BranchName/>
				<Province/>
				<City/>
			</BankAccount>
			<Note/>
			<ContractUserID/>
			<PhoneNumber/>
			<Email/>
			<IdentificationType/>
			<IdentificationNumber/>
		</Gathering>
		<Payment>
			<BankAccount>
				<BankID/>
				<AccountType/>
				<AccountName/>
				<AccountNumber/>
				<BranchName/>
				<Province/>
				<City/>
			</BankAccount>
			<Note/>
			<PhoneNumber/>
			<Email/>
		</Payment>
	</Item>
</Body>
</Request>
XML;

    public $xmltx1920 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/> 
    <TxCode>1920</TxCode> 
  </Head>  
  <Body> 
		<BatchNo/>  
  </Body> 
</Request>
XML;

    public $xmltx1930 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/> 
    <TxCode>1930</TxCode> 
  </Head>  
  <Body> 
		<BatchNo/>  
		<ItemNo/>
  </Body> 
</Request>
XML;

    public $xmltx1950 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/> 
    <TxCode>1950</TxCode> 
  </Head>  
  <Body> 
		<Date/>  
  </Body> 
</Request>
XML;

    public $xmltx2011 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2011</TxCode> 
		<TxSN/>  
  </Head>  
  <Body> 
		<Amount/>
		<BankID/>
		<AccountType/>
		<ValidDate/>
		<CVN2/>
		<AccountName/>
		<AccountNumber/>
		<BranchName/>
		<Province/>
		<City/>
		<IdentificationType/>
		<IdentificationNumber/>
		<Note/>
		<ContractUserID/>
		<PhoneNumber/>
		<Email/>
		<SettlementFlag/>
  </Body> 
</Request>
XML;

    public $xmltx2018 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
  	<InstitutionID/>  
    <TxCode>2018</TxCode> 
		<TxSN/>  
  </Head>  
  <Body> 
		<Amount/>
		<Status/>
		<BankTxTime/>
		<ResponseCode/>
		<ResponseMessage/>
  </Body> 
</Request>
XML;

    public $xmltx2020 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>
  	<InstitutionID/>
  	<TxCode>2020</TxCode>
  	<TxSN/>
  </Head>
</Request>
XML;

    public $xmltx2310 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<InstitutionID/>
		<TxCode>2310</TxCode>
	</Head>
	<Body>
		<TxSN/>
		<BankID/>
		<AccountType/>
		<AccountName/>
		<AccountNumber/>
		<IdentificationType/>
		<IdentificationNumber/>
		<ValidDate/>
		<CVN2/>
		<Remark/>
		<PhoneNumber/>
		<Email/>
	</Body>
</Request>
XML;

    public $xmltx2320 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2320</TxCode>
</Head>
<Body>
<TxSN/>
<UserName/>
<IdentificationNumber/>
</Body>
</Request>
XML;

    public $xmltx2330 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2330</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<TxType/>
<PhoneNumber/>
</Body>
</Request>
XML;

    public $xmltx2331 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2331</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<TxType/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

    public $xmltx2340 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2340</TxCode>
</Head>
<Body>
<TxSN/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

    public $xmltx2341 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2341</TxCode>
</Head>
<Body>
<TxSN/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

    public $xmltx2342 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2342</TxCode>
</Head>
<Body>
<TxSN/>
<SMSValidationCode/>
</Body>
</Request>
XML;

    public $xmltx2351 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2351</TxCode>
</Head>
<Body>
<TxSN/>
<AccountName/>
<AccountNumber/>
<BankID/>
<BranchName/>
<Province/>
<City/>
<Note/>
</Body>
</Request>
XML;

    public $xmltx2352 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2352</TxCode>
</Head>
<Body>
<TxSN/>
<Amount/>
</Body>
</Request>
XML;

    public $xmltx2501 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2501</TxCode>
</Head>
<Body>
<TxSNBinding/>
<BankID/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<CardType/>
<ValidDate/>
<CVN2/>
</Body>
</Request>
XML;

    public $xmltx2502 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2502</TxCode>
</Head>
<Body>
<TxSNBinding/>
</Body>
</Request>
XML;

    public $xmltx2503 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2503</TxCode>
</Head>
<Body>
<TxSNUnBinding/>
<TxSNBinding/>
</Body>
</Request>
XML;

    public $xmltx2511 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2511</TxCode>
</Head>
<Body>
<PaymentNo/>
<Amount/>
<TxSNBinding/>
<SettlementFlag/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx2512 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2512</TxCode>
</Head>
<Body>
<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx2521 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2521</TxCode>
</Head>
<Body>
<TxSN/>
<PaymentNo/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx2522 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2522</TxCode>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

    public $xmltx2531 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2531</TxCode>
</Head>
<Body>
<TxSNBinding/>
<BankID/>
<AccountName/>
<AccountNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PhoneNumber/>
<CardType/>
<ValidDate/>
<CVN2/>
</Body>
</Request>
XML;

    public $xmltx2532 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2532</TxCode>
</Head>
<Body>
<TxSNBinding/>
<SMSValidationCode/>
</Body>
</Request>
XML;

    public $xmltx2541 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2541</TxCode>
</Head>
<Body>
<PaymentNo/>
<TxSNBinding/>
<Amount/>
<SettlementFlag/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx2542 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2542</TxCode>
</Head>
<Body>
<PaymentNo/>
<SMSValidationCode/>
</Body>
</Request>
XML;

    public $xmltx2551 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2551</TxCode>
</Head>
<Body>
<SerialNumber/>
<AccountNumber/>
<MerchantID/>
<MerchantName/>
<MerchantShortName/>
<MCC/>
<Remark/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx2552 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2552</TxCode>
</Head>
<Body>
<SerialNumber/>
<Status/>
<BankTxTime/>
<ResponseCode/>
<ResponseMessage/>
<PayCardType/>
<IssInsCode/>
</Body>
</Request>
XML;

    public $xmltx2553 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2553</TxCode>
</Head>
<Body>
<SerialNumber/>
<AccountNumber/>
</Body>
</Request>
XML;

    public $xmltx2561 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2561</TxCode>
</Head>
<Body>
<TxSN/>
<AccountName/>
<IdentificationNumber/>
<TerminalType/>
</Body>
</Request>
XML;

    public $xmltx2562 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>2562</TxCode>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

    public $xmltx2568 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>2568</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<Status/>
<AccountName/>
<AccountNumber/>
<IssueBankID/>
<IssueCardType/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

    public $xmltx3111 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3111</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
<PageURL/>
<InvestmentType/>
</Body>
</Request>
XML;

    public $xmltx3112 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3112</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx3116 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3116</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx3118 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3118</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentTime/>
<Amount/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

    public $xmltx3119 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3119</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentTime/>
<InvestAmount/>
<Amount/>
<CouponNo/>
<CouponAmount/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
<Status/>
</Body>
</Request>
XML;

    public $xmltx3120 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3120</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<StartDate/>
<EndDate/>
</Body>
</Request>
XML;

    public $xmltx3131 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3131</TxCode>
<InstitutionID/>
</Head>
<Body>
<SerialNumber/>
<ProjectNo/>
<PaymentNo/>
<SettlementType/>
<AccountType/>
<SettlementUsage/>
<BankID/>
<BankAccountName/>
<BankAccountNumber/>
<BankBranchName/>
<BankProvince/>
<BankCity/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx3136 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3136</TxCode>
<InstitutionID/>
</Head>
<Body>
<SerialNumber/>
</Body>
</Request>
XML;

    public $xmltx3137 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3137</TxCode>
<InstitutionID/>
</Head>
<Body>
<TransferNo/>
<ProjectNo/>
<Amount/>
<PayerPaymentAccountType/>
<PayerPaymentAccountName/>
<PayerPaymentAccountNumber/>
<PayeeAccountType/>
<PayeeBankID/>
<PayeeBankAccountName/>
<PayeeBankAccountNumber/>
<PayeeBankBranchName/>
<PayeeBankProvince/>
<PayeeBankCity/>
<PayeePaymentAccountName/>
<PayeePaymentAccountNumber/>
<TransferUsage/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx3138 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3138</TxCode>
<InstitutionID/>
</Head>
<Body>
<TransferNo/>
</Body>
</Request>
XML;

    public $xmltx3141 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3141</TxCode>
</Head>
<Body>
<SerialNumber/>
<ProjectNo/>
<RepaymentType/>
<AccountType/>
<BankID/>
<BankAccountName/>
<BankAccountNumber/>
<BankProvince/>
<BankCity/>
<IdentificationType/>
<IdentificationNumber/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx3146 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3146</TxCode>
</Head>
<Body>
<SerialNumber/>
</Body>
</Request>
XML;

    public $xmltx3151 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3151</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<ProjectNo/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<Loaner>
<PaymentNo/>
<Amount/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
</Loaner>
</Body>
</Request>
XML;

    public $xmltx3156 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3156</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
</Body>
</Request>
XML;

    public $xmltx3161 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3161</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementBatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<Item>
    <SettlementNo/>
    <ProjectNo/>
    <PaymentNo/>
    <SettlementType/>
    <AccountType/>
    <SettlementUsage/>
    <BankID/>
    <BankAccountName/>
    <BankAccountNumber/>
    <BankBranchName/>
    <BankProvince/>
    <BankCity/>
    <PaymentAccountName/>
    <PaymentAccountNumber/>
    <Amount/>
    <Remark/>
</Item>
</Body>
</Request>
XML;

    public $xmltx3162 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3162</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementBatchNo/>
</Body>
</Request>
XML;

    public $xmltx3211 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
	<Head>
		<TxCode>3211</TxCode>
		<InstitutionID/>
	</Head>
	<Body>
		<ProjectNo/>
		<PaymentNo/>
		<Amount/>
		<ProjectName/>
		<ProjectURL/>
		<ProjectScale/>
		<ReturnRate/>
		<ProjectPeriod/>
		<StartDate/>
		<EndDate/>
		<LoanerPaymentAccountNumber/>
		<LoaneeAccountType/>
		<LoaneeBankID/>
		<LoaneeBankAccountName/>
		<LoaneeBankAccountNumber/>
		<LoaneePaymentAccountName/>
		<LoaneePaymentAccountNumber/>
		<GuaranteeAccountType/>
		<GuaranteeBankID/>
		<GuaranteeBankAccountName/>
		<GuaranteeBankAccountNumber/>
		<GuaranteePaymentAccountName/>
		<GuaranteePaymentAccountNumber/>
		<PageURL/>
		<PaymentWay/>
		<InvestmentType/>

	</Body> 
</Request>
XML;

    public $xmltx3212 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3212</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoanerPaymentAccountNumber/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<PaymentWay/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx3216 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3216</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
    <PaymentNo/>
  </Body>
</Request>
XML;

    public $xmltx3218 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3218</TxCode>
  </Head>
  <Body>
    <InstitutionID/>
    <PaymentNo/>
    <PaymentTime/>
    <Amount/>
    <LoanerPaymentAccountNumber/>
    <PaymentWay/>
  </Body> 
</Request>
XML;

    public $xmltx3219 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3219</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentTime/>
<InvestAmount/>
<Amount/>
<CouponNo/>
<CouponAmount/>
<LoanerPaymentAccountNumber/>
<PaymentWay/>
<Status/>
</Body>
</Request>
XML;

    public $xmltx3231 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3231</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<SerialNumber/>
  	<ProjectNo/>
    <PaymentNo/>
    <SettlementType/>
    <AccountType/>
    <SettlementUsage/>
    <BankID/>
    <BankAccountName/>
    <BankAccountNumber/>
    <BankBranchName/>
    <BankProvince/>
    <BankCity/>
    <PaymentAccountName/>
    <PaymentAccountNumber/>
    <Amount/>
    <Remark/>
  </Body> 
</Request>
XML;

    public $xmltx3236 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3236</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<SerialNumber/>
  </Body> 
</Request>
XML;

    public $xmltx3237 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3237</TxCode>
<InstitutionID/>
</Head>
<Body>
<TransferNo/>
<ProjectNo/>
<Amount/>
<PayerPaymentAccountType/>
<PayerPaymentAccountName/>
<PayerPaymentAccountNumber/>
<PayeeAccountType/>
<PayeeBankID/>
<PayeeBankAccountName/>
<PayeeBankAccountNumber/>
<PayeeBankBranchName/>
<PayeeBankProvince/>
<PayeeBankCity/>
<PayeePaymentAccountName/>
<PayeePaymentAccountNumber/>
<TransferUsage/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx3238 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3238</TxCode>
<InstitutionID/>
</Head>
<Body>
<TransferNo/>
</Body>
</Request>
XML;

    public $xmltx3241 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3241</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<SerialNumber/>
  	<ProjectNo/>
    <RepaymentType/>
    <AccountType/>
    <BankID/>
    <BankAccountName/>
    <BankAccountNumber/>
    <BankProvince/>
    <BankCity/>
    <IdentificationType/>
    <IdentificationNumber/>
    <PaymentAccountName/>
    <PaymentAccountNumber/>
    <Amount/>
    <Remark/>
  </Body> 
</Request>
XML;

    public $xmltx3246 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>3246</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<SerialNumber/>
  </Body> 
</Request>
XML;

    public $xmltx3251 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3251</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<ProjectNo/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<StartDate/>
<EndDate/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneePaymentAccountName/>
<LoaneePaymentAccountNumber/>
<GuaranteeAccountType/>
<GuaranteeBankID/>
<GuaranteeBankAccountName/>
<GuaranteeBankAccountNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
<Loaner>
<PaymentNo/>
<Amount/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
</Loaner>
</Body>
</Request>
XML;

    public $xmltx3256 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3256</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
</Body>
</Request>
XML;

    public $xmltx3261 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3261</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementBatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<Item>
    <SettlementNo/>
    <ProjectNo/>
    <PaymentNo/>
    <SettlementType/>
    <AccountType/>
    <SettlementUsage/>
    <BankID/>
    <BankAccountName/>
    <BankAccountNumber/>
    <BankBranchName/>
    <BankProvince/>
    <BankCity/>
    <PaymentAccountName/>
    <PaymentAccountNumber/>
    <Amount/>
    <Remark/>
</Item>
</Body>
</Request>
XML;

    public $xmltx3262 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3262</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementBatchNo/>
</Body>
</Request>
XML;

    public $xmltx3291 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3291</TxCode>
</Head>
<Body>
<SerialNumber/>
<ProjectNo/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx3292 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3292</TxCode>
</Head>
<Body>
<SerialNumber/>
</Body>
</Request>
XML;

    public $xmltx3310 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3310</TxCode>
<InstitutionID/>
</Head>
<Body>
<InstitutionPaymentAccountNumber/>
<BatchNo/>
<TotalAmount/>
<Item>
<CouponNo/>
<CouponName/>
<Amount/>
<UsingLimitAmount/>
<Deadline/>
<PaymentUserAccountNumber/>
<Remark/>
</Item>
</Body>
</Request>
XML;

    public $xmltx3312 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3312</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
</Body>
</Request>
XML;

    public $xmltx3315 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3315</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
</Body>
</Request>
XML;

    public $xmltx3601 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3601</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<ProjectName/>
<ProjectURL/>
<ProjectScale/>
<ReturnRate/>
<ProjectPeriod/>
<LoaneeAccountType/>
<LoaneeBankID/>
<LoaneeBankAccountName/>
<LoaneeBankAccountNumber/>
<LoaneeBankBranchName/>
<LoaneeBankProvince/>
<LoaneeBankCity/>
<LoaneeIdentificationType/>
<LoaneeIdentificationNumber/>
<GuaranteePaymentAccountName/>
<GuaranteePaymentAccountNumber/>
</Body>
</Request>
XML;

    public $xmltx3602 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3602</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
</Body>
</Request>
XML;

    public $xmltx3611 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3611</TxCode>
<InstitutionID/>
</Head>
<Body>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<Remark/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx3612 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3612</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx3618 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3618</TxCode>
</Head>
<Body>
<InstitutionID/>
<ProjectNo/>
<PaymentNo/>
<Amount/>
<LoanerPaymentAccountName/>
<LoanerPaymentAccountNumber/>
<LoanerIdentificationNumber/>
<LoanerPhoneNumber/>
<Status/>
<PaymentTime/>
</Body>
</Request>
XML;

    public $xmltx3631 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3631</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementNo/>
<ProjectNo/>
<PaymentNo/>
<SettlementType/>
<SettlementUsage/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx3632 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>3632</TxCode>
<InstitutionID/>
</Head>
<Body>
<SettlementNo/>
</Body>
</Request>
XML;

    public $xmltx3641 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3641</TxCode>
</Head>
<Body>
<RepaymentNo/>
<ProjectNo/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx3642 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3642</TxCode>
</Head>
<Body>
<RepaymentNo/>
<RepaymentType/>
</Body>
</Request>
XML;

    public $xmltx3643 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3643</TxCode>
</Head>
<Body>
<RepaymentNo/>
<ProjectNo/>
<RepaymentType/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx3644 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<InstitutionID/>
<TxCode>3644</TxCode>
</Head>
<Body>
<RepaymentNo/>
<RepaymentType/>
</Body>
</Request>
XML;

    public $xmltx4011 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4011</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentAccountNumber/>
<PaymentAccountName/>
<Amount/>
<Remark/>
<NotificationURL/>
<BankID/>
<AccountType/>
</Body>
</Request>
XML;

    public $xmltx4018 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4018</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<PaymentTime/>
</Body>
</Request>
XML;

    public $xmltx4201 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4201</TxCode>
<InstitutionID/>
</Head>
<Body>
<RegisterNo/>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
<UserType/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4202 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4202</TxCode>
<InstitutionID/>
</Head>
<Body>
<RegisterNo/>
</Body>
</Request>
XML;

    public $xmltx4203 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4203</TxCode>
</Head>
<Body>
<InstitutionID/>
<RegisterNo/>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
<PaymentAccountNumber/>
<UserType/>
<OrganizationCode/>
<Status/>
</Body>
</Request>
XML;

    public $xmltx4204 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4204</TxCode>
<InstitutionID/>
</Head>
<Body>
<RegisterNo/>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
<UserType/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4210 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4210</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4211 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4211</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

    public $xmltx4212 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4212</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

    public $xmltx4218 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4218</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

    public $xmltx4220 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4220</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4221 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4221</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

    public $xmltx4222 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4222</TxCode>
<InstitutionID/>
</Head>
<Body>
<PayerPaymentAccountName/>
<PayerPaymentAccountNumber/>
<PayeePaymentAccountName/>
<PayeePaymentAccountNumber/>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx4228 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4228</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

    public $xmltx4231 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4231</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PhoneNumber/>
  	<UserName/>
  	<IdentificationNumber/>
  	<UserType/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4232 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4232</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PhoneNumber/>
		<UserType/>
  </Body> 
</Request>
XML;

    public $xmltx4233 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4233</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<PhoneNumber/>
  	<UserName/>
  	<IdentificationNumber/>
  	<PaymentAccountNumber/>
		<UserType/>
		<OrganizationCode/>
		<Status/>
		<EBankCode/>
		<CardNBR/>
  </Body> 
</Request>
XML;

    public $xmltx4234 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4234</TxCode>
<InstitutionID/>
</Head>
<Body>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
<UserType/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4235 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4235</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  </Body> 
</Request>
XML;

    public $xmltx4237 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4237</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  </Body> 
</Request>
XML;

    public $xmltx4238 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4238</TxCode>
</Head>
<Body>
<InstitutionID/>
<Item>
<PaymentAccountNumber/>
</Item>
</Body>
</Request>
XML;

    public $xmltx4241 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4241</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4242 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4242</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4243 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4243</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<PaymentAccountNumber/>
  	<BankID/>
  	<BindingSystemNo/>
  	<BankAccountNumber/>
  	<Status/>
  </Body> 
</Request>
XML;

    public $xmltx4244 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4244</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  </Body> 
</Request>
XML;

    public $xmltx4245 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4245</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<BindingSystemNo/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4246 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4246</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<BindingSystemNo/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4247 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4247</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<BindingSystemNo/>
  	<PaymentAccountNumber/>
  	<BankID/>
  	<BankAccountNumber/>
  </Body> 
</Request>
XML;

    public $xmltx4251 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4251</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<PaymentNo/>
  	<Amount/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4252 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4252</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentNo/>
  </Body> 
</Request>
XML;

    public $xmltx4253 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4253</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<PaymentAccountNumber/>
  	<PaymentNo/>
  	<Amount/>
  	<PaymentTime/>
  </Body> 
</Request>
XML;

    public $xmltx4254 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4254</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<PaymentNo/>
  	<Amount/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4255 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4255</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<TxSN/>
  	<Amount/>
  	<InstitutionFee/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4256 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4256</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<TxSN/>
  </Body> 
</Request>
XML;

    public $xmltx4257 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4257</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<PaymentAccountNumber/>
  	<TxSN/>
  	<Amount/>
  	<InstitutionFee/>
  	<AcceptTime/>
  	<Status/>
  	<BankID/>
  	<BankAccountNumber/>
  </Body> 
</Request>
XML;

    public $xmltx4258 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4258</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<PaymentAccountNumber/>
  	<TxSN/>
  	<Amount/>
  	<InstitutionFee/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4261 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4261</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<AgreementNo/>
  	<PaymentAccountNumber/>
  	<PageURL/>
  </Body> 
</Request>
XML;

    public $xmltx4262 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4262</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<AgreementNo/>
  </Body> 
</Request>
XML;

    public $xmltx4263 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4263</TxCode>
  </Head>
  <Body>
  	<InstitutionID/>
  	<AgreementNo/>
  	<PaymentAccountName/>
  	<PaymentAccountNumber/>
  	<IdentificationNumber/>
  	<IdentificationNumber/>
  	<PhoneNumber/>
  </Body> 
</Request>
XML;

    public $xmltx4264 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4264</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<AgreementNo/>
  </Body> 
</Request>
XML;

    public $xmltx4271 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4271</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<AgreementType/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4272 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4272</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<AgreementType/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4273 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4273</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

    public $xmltx4276 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4276</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

    public $xmltx4278 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4278</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<AgreementType/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<IdentificationNumber/>
<PhoneNumber/>
</Body>
</Request>
XML;

    public $xmltx4311 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4311</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<PaymentAccountNumber/>
<PaymentAccountName/>
<Amount/>
<Remark/>
<NotificationURL/>
<BankID/>
<AccountType/>
</Body>
</Request>
XML;

    public $xmltx4312 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4312</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4316 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4316</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountNumber/>
<TxSN/>
<Amount/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4318 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4318</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<PaymentTime/>
</Body>
</Request>
XML;

    public $xmltx4320 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4320</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4321 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4321</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

    public $xmltx4322 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4322</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

    public $xmltx4328 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4328</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

    public $xmltx4331 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4331</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<AgreementType/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4332 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4332</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
<AgreementType/>
<PaymentAccountNumber/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4333 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4333</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

    public $xmltx4336 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4336</TxCode>
<InstitutionID/>
</Head>
<Body>
<AgreementNo/>
</Body>
</Request>
XML;

    public $xmltx4338 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4338</TxCode>
</Head>
<Body>
<InstitutionID/>
<AgreementNo/>
<AgreementType/>
<Status/>
</Body>
</Request>
XML;

    public $xmltx4510 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4510</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

    public $xmltx4512 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4512</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountName/>
<PaymentAccountNumber/>
<StartDate/>
<EndDate/>
</Body>
</Request>
XML;

    public $xmltx4520 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4520</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountName/>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<Remark/>
<PageURL/>
</Body>
</Request>
XML;

    public $xmltx4522 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4522</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<PaymentNo/>
<Amount/>
<Remark/>
<Status/>
<BankTxTime/>
</Body>
</Request>
XML;

    public $xmltx4524 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4524</TxCode>
<InstitutionID/>
</Head>
<Body>
<PaymentAccountName/>
<PaymentAccountNumber/>
<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx4526 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4526</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<Amount/>
<Remark/>
<Payee>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Payee>
<Payer>
<BankID/>
<AccountType/>
<BankAccountName/>
<BankAccountNumber/>
<Province/>
<City/>
</Payer>
</Body>
</Request>
XML;

    public $xmltx4528 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4528</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

    public $xmltx4530 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4530</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
<Payer>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Payer>
<Payee>
<BankID/>
<AccountType/>
<BankAccountName/>
<BankAccountNumber/>
<PhoneNumber/>
</Payee>
<Amount/>
<Remark/>
</Body>
</Request>
XML;

    public $xmltx4532 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4532</TxCode>
<InstitutionID/>
</Head>
<Body>
<TxSN/>
</Body>
</Request>
XML;

    public $xmltx4534 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4534</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<Payer>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Payer>
<Payee>
<ItemNo/>
<Amount/>
<BankID/>
<AccountType/>
<BankAccountName/>
<BankAccountNumber/>
<PhoneNumber/>
<Note/>
</Payee>
</Body>
</Request>
XML;

    public $xmltx4536 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4536</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<Payer>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Payer>
<Payee>
<ItemNo/>
<Amount/>
<BankID/>
<AccountType/>
<BankAccountName/>
<BankAccountNumber/>
<PhoneNumber/>
<Note/>
</Payee>
</Body>
</Request>
XML;

    public $xmltx4538 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4538</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<TxType/>
</Body>
</Request>
XML;

    public $xmltx4540 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4540</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
  	<TxSN/>
		<PayerPaymentAccountName/>
		<PayerPaymentAccountNumber/>
		<PayeePaymentAccountName/>
		<PayeePaymentAccountNumber/>
		<Amount/>
		<Remark/>
  </Body> 
</Request>
XML;

    public $xmltx4542 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head> 
    <TxCode>4542</TxCode>
    <InstitutionID/>
  </Head>
  <Body>
		<TxSN/>
  </Body> 
</Request>
XML;

    public $xmltx4544 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4544</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<TotalAmount/>
<TotalCount/>
<Remark/>
<Payer>
<PaymentAccountName/>
<PaymentAccountNumber/>
</Payer>
<Payee>
<ItemNo/>
<Amount/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<Note/>
</Payee>
</Body>
</Request>
XML;

    public $xmltx4546 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>4546</TxCode>
<InstitutionID/>
</Head>
<Body>
<BatchNo/>
<ItemNo/>
</Body>
</Request>
XML;

    public $xmltx5111 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5111</TxCode>
</Head>
<Body>
<InstitutionID/>
<PayeeCode/>
<Name/>
<Address/>
<Type/>
<MerchantType/>
<BankBicCode/>
<BankName/>
<BankAddress/>
<AccountNumber/>
<Currency/>
<CorrespondentBankName/>
<CorrespondentBankAddress/>
<PayeeBankAccountNumber/>
<LegalName/>
<LegalIdentificationNumber/>
<CountryCode/>
<OrganizationCode/>
<BusinessLicenceNo/>
<BasicAccountLicenceNo/>
</Body>
</Request>
XML;

    public $xmltx5116 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5116</TxCode>
</Head>
<Body>
<InstitutionID/>
<PayeeCode/>
</Body>
</Request>
XML;

    public $xmltx5121 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5121</TxCode>
</Head>
<Body>
<InstitutionID/>
<SerialNumber/>
<NameENG/>
<AddressENG/>
<BankID/>
<AccountName/>
<AccountNumber/>
<PhoneNumber/>
<IdentificationType/>
<IdentificationNumber/>
<PayeeCode/>
<PayeeCurrency/>
<PayeeAmount/>
<TradeCode/>
<TransRemark/>
<Usage/>
<CommodityInformation/>
<BusinessType/>
<ResidentFlag/>
<VerificationFlag/>
<PayType/>
<Reporter/>
<ReporterPhone/>
<LatestShippingDate/>
<ContractNo/>
<InvoiceNo/>
<SafeRecordNumber/>
<CustomId/>
<JWJNFlag/>
<Remark/>
<NotificationURL/>
</Body>
</Request>
XML;

    public $xmltx5126 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5126</TxCode>
</Head>
<Body>
<InstitutionID/>
<SerialNumber/>
</Body>
</Request>
XML;

    public $xmltx5128 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>5128</TxCode>
</Head>
<Body>
<InstitutionID/>
<SerialNumber/>
<PayeeCurrency/>
<PayeeAmount/>
<FXBuyingRate/>
<Currency/>
<Amount/>
<Fee/>
<Status/>
<BankNotificationTime/>
</Body>
</Request>
XML;

    public $xmltx6101 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6101</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<FundID/>
<PhoneNumber/>
<UserName/>
<IdentificationNumber/>
</Body>
</Request>
XML;

    public $xmltx6102 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6102</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

    public $xmltx6111 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6111</TxCode>
</Head>
<Body>
<InstitutionID/>
<BindingSN/>
<PaymentAccountNumber/>
<BankID/>
<BankAccountNumber/>
<PhoneNumber/>
<VerifyCode/>
</Body>
</Request>
XML;

    public $xmltx6112 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6112</TxCode>
</Head>
<Body>
<InstitutionID/>
<BindingSN/>
</Body>
</Request>
XML;

    public $xmltx6116 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6116</TxCode>
</Head>
<Body>
<InstitutionID/>
<UnBindingSN/>
<BindingSN/>
</Body>
</Request>
XML;

    public $xmltx6121 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6121</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<PaymentAccountNumber/>
<BindingSN/>
<Amount/>
<Remark/>
<VerifyCode/>
<FundID/>
</Body>
</Request>
XML;

    public $xmltx6122 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6122</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

    public $xmltx6123 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6123</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<Status/>
<Amount/>
<PaymentAccountNumber/>
<BindingSN/>
<ApplyTime/>
</Body>
</Request>
XML;

    public $xmltx6124 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6124</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<Amount/>
<PaymentAccountName/>
<PaymentAccountNumber/>
<Note/>
<SettlementFlag/>
<ChargeSN/>
</Body>
</Request>
XML;

    public $xmltx6125 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6125</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

    public $xmltx6126 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6126</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
<PaymentAccountNumber/>
<FundID/>
<BindingSN/>
<Amount/>
<Remark/>
<VerifyCode/>
</Body>
</Request>
XML;

    public $xmltx6127 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6127</TxCode>
</Head>
<Body>
<InstitutionID/>
<TxSN/>
</Body>
</Request>
XML;

    public $xmltx6131 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6131</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
</Body>
</Request>
XML;

    public $xmltx6132 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6132</TxCode>
</Head>
<Body>
<InstitutionID/>
<NetDate/>
</Body>
</Request>
XML;

    public $xmltx6133 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6133</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
<StartDate/>
<EndDate/>
</Body>
</Request>
XML;

    public $xmltx6134 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6134</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentAccountNumber/>
<StartDate/>
<EndDate/>
</Body>
</Request>
XML;

    public $xmltx6135 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>6135</TxCode>
</Head>
<Body>
<InstitutionID/>
</Body>
</Request>
XML;

    public $xmltx7611 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7611</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<Amount/>
<SettlementFlag/>
<Usage/>
<Remark/>
<PageURL/>
<BackgroundURL/>
<BankID/>
<AccountType/>
<TraceNo/>
<TransTime/>
<MerchantID/>
<MerchantName/>
</Body>
</Request>
XML;

    public $xmltx7618 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7618</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
<Amount/>
<Status/>
<BankNotificationTime/>
<TraceNo/>
<TransTime/>
<MerchantID/>
<MerchantName/>
</Body>
</Request>
XML;

    public $xmltx7620 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7620</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx7621 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
<TxCode>7621</TxCode>
</Head>
<Body>
<InstitutionID/>
<PaymentNo/>
</Body>
</Request>
XML;

    public $xmltx8000 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8000</TxCode>
	<InstitutionID/>
</Head>
</Request>
XML;

    public $xmltx9999 = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>9999</TxCode>
</Head>
<Body>
	<InstitutionID/>
</Body>	
</Request>
XML;
}