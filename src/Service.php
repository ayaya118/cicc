<?php
/**
 * Created by PhpStorm.
 * User: wucheng
 * Date: 2016/7/19
 * Time: 15:55
 */

namespace Cicc;


class Service
{
    protected $xmltx1111=<<<XML
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

protected $xmltx1112=<<<XML
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

protected $xmltx1115=<<<XML
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

protected $xmltx1118=<<<XML
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

protected $xmltx1119=<<<XML
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

protected $xmltx1120=<<<XML
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

protected $xmltx1121=<<<XML
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

protected $xmltx1131=<<<XML
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

protected $xmltx1132=<<<XML
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

protected $xmltx1133=<<<XML
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

protected $xmltx1134=<<<XML
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

protected $xmltx1138=<<<XML
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

protected $xmlNotification=<<<XML
<?xml version="1.0" encoding="UTF-8"?><Response version="2.0"><Head><Code/><Message/></Head></Response>
XML;

    /**
    PayeeList can be composited by several Payees.
     */
protected $xmltx1311=<<<XML
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

protected $xmltx1312=<<<XML
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

protected $xmltx1318=<<<XML
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

protected $xmltx1320=<<<XML
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

protected $xmltx1321=<<<XML
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

protected $xmltx1330=<<<XML
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

protected $xmltx1333=<<<XML
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

protected $xmltx1341=<<<XML
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

protected $xmltx1343=<<<XML
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

protected $xmltx1345=<<<XML
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

protected $xmltx1348=<<<XML
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

protected $xmltx1350=<<<XML
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

protected $xmltx1361=<<<XML
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

protected $xmltx1362=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<InstitutionID/>
	<TxCode>1362</TxCode>
	<TxSN/>
</Head>
</Request>
XML;

protected $xmltx1363=<<<XML
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

protected $xmltx1365=<<<XML
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

protected $xmltx1366=<<<XML
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

protected $xmltx1371=<<<XML
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

protected $xmltx1372=<<<XML
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

protected $xmltx1373=<<<XML
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

protected $xmltx1374=<<<XML
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

protected $xmltx1375=<<<XML
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

protected $xmltx1376=<<<XML
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

protected $xmltx1380=<<<XML
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

protected $xmltx1382=<<<XML
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

protected $xmltx1388=<<<XML
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

protected $xmltx1390=<<<XML
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

protected $xmltx1391=<<<XML
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

protected $xmltx1392=<<<XML
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

protected $xmltx1393=<<<XML
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

protected $xmltx1394=<<<XML
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

protected $xmltx1395=<<<XML
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

protected $xmltx1396=<<<XML
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

protected $xmltx1397=<<<XML
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

protected $xmltx1510=<<<XML
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

protected $xmltx1520=<<<XML
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

protected $xmltx1550=<<<XML
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

protected $xmltx1610=<<<XML
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

protected $xmltx1620=<<<XML
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

protected $xmltx1650=<<<XML
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

protected $xmltx1711=<<<XML
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

protected $xmltx1712=<<<XML
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

protected $xmltx1713=<<<XML
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

protected $xmltx1715=<<<XML
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

protected $xmltx1721=<<<XML
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

protected $xmltx1722=<<<XML
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

protected $xmltx1723=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1723</TxCode> 
		<TxSN/> 
	</Head>  
</Request>
XML;

protected $xmltx1731=<<<XML
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

protected $xmltx1732=<<<XML
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

protected $xmltx1733=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
	<Head> 
	  <InstitutionID/> 
		<TxCode>1733</TxCode> 
		<TxSN/> 
	</Head>  
</Request>
XML;

protected $xmltx1741=<<<XML
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

protected $xmltx1810=<<<XML
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

protected $xmltx1811=<<<XML
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

protected $xmltx1820=<<<XML
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

protected $xmltx1830=<<<XML
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

protected $xmltx1840=<<<XML
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

protected $xmltx1818=<<<XML
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

protected $xmltx1910=<<<XML
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

protected $xmltx1920=<<<XML
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

protected $xmltx1930=<<<XML
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

protected $xmltx1950=<<<XML
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

protected $xmltx2011=<<<XML
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

protected $xmltx2018=<<<XML
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

protected $xmltx2020=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0"> 
  <Head>
  	<InstitutionID/>
  	<TxCode>2020</TxCode>
  	<TxSN/>
  </Head>
</Request>
XML;

protected $xmltx2310=<<<XML
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

protected $xmltx2320=<<<XML
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

protected $xmltx2330=<<<XML
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

protected $xmltx2331=<<<XML
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

protected $xmltx2340=<<<XML
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

protected $xmltx2341=<<<XML
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

protected $xmltx2342=<<<XML
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

protected $xmltx2351=<<<XML
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

protected $xmltx2352=<<<XML
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

protected $xmltx2501=<<<XML
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

protected $xmltx2502=<<<XML
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

protected $xmltx2503=<<<XML
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

protected $xmltx2511=<<<XML
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

protected $xmltx2512=<<<XML
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

protected $xmltx2521=<<<XML
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

protected $xmltx2522=<<<XML
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

protected $xmltx2531=<<<XML
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

protected $xmltx2532=<<<XML
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

protected $xmltx2541=<<<XML
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

protected $xmltx2542=<<<XML
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

protected $xmltx2551=<<<XML
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

protected $xmltx2552=<<<XML
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

protected $xmltx2553=<<<XML
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

protected $xmltx2561=<<<XML
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

protected $xmltx2562=<<<XML
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

protected $xmltx2568=<<<XML
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

protected $xmltx3111=<<<XML
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

protected $xmltx3112=<<<XML
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

protected $xmltx3116=<<<XML
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

protected $xmltx3118=<<<XML
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

protected $xmltx3119=<<<XML
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

protected $xmltx3120=<<<XML
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

protected $xmltx3131=<<<XML
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

protected $xmltx3136=<<<XML
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

protected $xmltx3137=<<<XML
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

protected $xmltx3138=<<<XML
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

protected $xmltx3141=<<<XML
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

protected $xmltx3146=<<<XML
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

protected $xmltx3151=<<<XML
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

protected $xmltx3156=<<<XML
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

protected $xmltx3161=<<<XML
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

protected $xmltx3162=<<<XML
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

protected $xmltx3211=<<<XML
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

protected $xmltx3212=<<<XML
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

protected $xmltx3216=<<<XML
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

protected $xmltx3218=<<<XML
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

protected $xmltx3219=<<<XML
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

protected $xmltx3231=<<<XML
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

protected $xmltx3236=<<<XML
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

protected $xmltx3237=<<<XML
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

protected $xmltx3238=<<<XML
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

protected $xmltx3241=<<<XML
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

protected $xmltx3246=<<<XML
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

protected $xmltx3251=<<<XML
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

protected $xmltx3256=<<<XML
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

protected $xmltx3261=<<<XML
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

protected $xmltx3262=<<<XML
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

protected $xmltx3291=<<<XML
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

protected $xmltx3292=<<<XML
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

protected $xmltx3310=<<<XML
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

protected $xmltx3312=<<<XML
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

protected $xmltx3315=<<<XML
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

protected $xmltx3601=<<<XML
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

protected $xmltx3602=<<<XML
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

protected $xmltx3611=<<<XML
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

protected $xmltx3612=<<<XML
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

protected $xmltx3618=<<<XML
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

protected $xmltx3631=<<<XML
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

protected $xmltx3632=<<<XML
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

protected $xmltx3641=<<<XML
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

protected $xmltx3642=<<<XML
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

protected $xmltx3643=<<<XML
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

protected $xmltx3644=<<<XML
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

protected $xmltx4011=<<<XML
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

protected $xmltx4018=<<<XML
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

protected $xmltx4201=<<<XML
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

protected $xmltx4202=<<<XML
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

protected $xmltx4203=<<<XML
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

protected $xmltx4204=<<<XML
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

protected $xmltx4210=<<<XML
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

protected $xmltx4211=<<<XML
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

protected $xmltx4212=<<<XML
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

protected $xmltx4218=<<<XML
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

protected $xmltx4220=<<<XML
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

protected $xmltx4221=<<<XML
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

protected $xmltx4222=<<<XML
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

protected $xmltx4228=<<<XML
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

protected $xmltx4231=<<<XML
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

protected $xmltx4232=<<<XML
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

protected $xmltx4233=<<<XML
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

protected $xmltx4234=<<<XML
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

protected $xmltx4235=<<<XML
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

protected $xmltx4237=<<<XML
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

protected $xmltx4238=<<<XML
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

protected $xmltx4241=<<<XML
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

protected $xmltx4242=<<<XML
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

protected $xmltx4243=<<<XML
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

protected $xmltx4244=<<<XML
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

protected $xmltx4245=<<<XML
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

protected $xmltx4246=<<<XML
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

protected $xmltx4247=<<<XML
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

protected $xmltx4251=<<<XML
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

protected $xmltx4252=<<<XML
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

protected $xmltx4253=<<<XML
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

protected $xmltx4254=<<<XML
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

protected $xmltx4255=<<<XML
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

protected $xmltx4256=<<<XML
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

protected $xmltx4257=<<<XML
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

protected $xmltx4258=<<<XML
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

protected $xmltx4261=<<<XML
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

protected $xmltx4262=<<<XML
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

protected $xmltx4263=<<<XML
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

protected $xmltx4264=<<<XML
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

protected $xmltx4271=<<<XML
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

protected $xmltx4272=<<<XML
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

protected $xmltx4273=<<<XML
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

protected $xmltx4276=<<<XML
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

protected $xmltx4278=<<<XML
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

protected $xmltx4311=<<<XML
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

protected $xmltx4312=<<<XML
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

protected $xmltx4316=<<<XML
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

protected $xmltx4318=<<<XML
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

protected $xmltx4320=<<<XML
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

protected $xmltx4321=<<<XML
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

protected $xmltx4322=<<<XML
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

protected $xmltx4328=<<<XML
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

protected $xmltx4331=<<<XML
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

protected $xmltx4332=<<<XML
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

protected $xmltx4333=<<<XML
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

protected $xmltx4336=<<<XML
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

protected $xmltx4338=<<<XML
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

protected $xmltx4510=<<<XML
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

protected $xmltx4512=<<<XML
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

protected $xmltx4520=<<<XML
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

protected $xmltx4522=<<<XML
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

protected $xmltx4524=<<<XML
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

protected $xmltx4526=<<<XML
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

protected $xmltx4528=<<<XML
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

protected $xmltx4530=<<<XML
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

protected $xmltx4532=<<<XML
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

protected $xmltx4534=<<<XML
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

protected $xmltx4536=<<<XML
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

protected $xmltx4538=<<<XML
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

protected $xmltx4540=<<<XML
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

protected $xmltx4542=<<<XML
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

protected $xmltx4544=<<<XML
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

protected $xmltx4546=<<<XML
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

protected $xmltx5111=<<<XML
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

protected $xmltx5116=<<<XML
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

protected $xmltx5121=<<<XML
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

protected $xmltx5126=<<<XML
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

protected $xmltx5128=<<<XML
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

protected $xmltx6101=<<<XML
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

protected $xmltx6102=<<<XML
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

protected $xmltx6111=<<<XML
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

protected $xmltx6112=<<<XML
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

protected $xmltx6116=<<<XML
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

protected $xmltx6121=<<<XML
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

protected $xmltx6122=<<<XML
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

protected $xmltx6123=<<<XML
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

protected $xmltx6124=<<<XML
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

protected $xmltx6125=<<<XML
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

protected $xmltx6126=<<<XML
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

protected $xmltx6127=<<<XML
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

protected $xmltx6131=<<<XML
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

protected $xmltx6132=<<<XML
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

protected $xmltx6133=<<<XML
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

protected $xmltx6134=<<<XML
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

protected $xmltx6135=<<<XML
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

protected $xmltx7611=<<<XML
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

protected $xmltx7618=<<<XML
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

protected $xmltx7620=<<<XML
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

protected $xmltx7621=<<<XML
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

protected $xmltx8000=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Request version="2.0">
<Head>
	<TxCode>8000</TxCode>
	<InstitutionID/>
</Head>
</Request>
XML;

protected $xmltx9999=<<<XML
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