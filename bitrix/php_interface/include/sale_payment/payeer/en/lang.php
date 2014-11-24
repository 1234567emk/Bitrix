<?php
global $MESS;
$MESS["MERCHANT_URL"] = "Merchant URL";
$MESS["MERCHANT_URL_DESCR"] = 'The URL for the payment';
$MESS["MERCHANT_ID"] = "ID store";
$MESS["MERCHANT_ID_DESCR"] = 'The store identifier registered in the system "PAYEER".<br/>it can be found in <a href="http://www.payeer.com/account/">Payeer account</a>: "Account -> My store -> Edit".';
$MESS["SECRET_KEY"] = "secret key";
$MESS["SECRET_KEY_DESCR"] = 'The secret key notification about the payment,<br/>which is used to verify the integrity of the received information<br/>and unambiguous identification of the sender.<br/>Must match the secret key specified in the <a href="http://www.payeer.com/account/">Payeer account</a>: "Account -> My store -> Edit".';
$MESS["CURRENCY"] = "Currency";
$MESS["ORDER_DESCRIPTION"] = "Order description";
$MESS["ORDER_DESCRIPTION_DESCR"] = "Additional comment that is displayed when the payment";
$MESS["PAYEER_LOG"] = "The path to the log file for payments via Payeer (for example, /payeer_orders.log)";
$MESS["PAYEER_LOG_DESCR"] = 'If path is not specified, the log is not written';
$MESS["IPFILTER"] = "IP - filter";
$MESS["IPFILTER_DESCR"] = 'The list of trusted ip addresses, you can specify the mask';
$MESS["EMAILERR"] = "Email for errors";
$MESS["EMAILERR_DESCR"] = 'Email to send payment errors';
$MESS["ORDER_ID"] = "Order ID";
$MESS["SHOULD_PAY"] = "The amount to be paid";

$MESS["PAYEER_MAIN_TITLE"] = "Payeer";
$MESS["PAYEER_MAIN_DESCR"] = "Payeer® Merchant allows you to accept international payments by a lot of payment methods around the world!";
$MESS["PAYEER_PAYMENT_MESSAGE"] = "Payment through the payment system <b>Payeer</b>";
$MESS["PAYEER_ORDER_MESSAGE"] = "Order № ";
$MESS["PAYEER_AMOUNT"] = "Order amount";
$MESS["PAYEER_AMOUNT_DESCR"] = "The amount to be paid";
$MESS["DATE_INSERT"] = "The creation date of the order";
$MESS["DATE_INSERT_DESCR"] = "";
$MESS["PAYEER_TO_PAY"] = "The amount to be paid on account:";
$MESS["PAYEER_SUBMIT"] = "Pay";
$MESS["PAYMENT_ERROR_IPFILTER"] = "<p>The order cannot be paid through the payment system Payeer.<br/>the Letter sent in support.</p>";
$MESS["EMAIL_SUBJECT"] = "Payment error";
$MESS["EMAIL_BODY1"] = "Failed to make the payment through the system Payeer for the following reasons:\n\n";
$MESS["EMAIL_BODY2"] = " - the ip address of the server is not trusted\n";
$MESS["EMAIL_BODY3"] = "   trusted ip: ";
$MESS["EMAIL_BODY4"] = "   ip of the current server: ";
$MESS["EMAIL_BODY5"] = " - Do not match the digital signature\n";
$MESS["EMAIL_BODY6"] = " - The payment status is not success\n";
?>