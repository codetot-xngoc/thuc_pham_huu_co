<?php
require 'vendor/autoload.php';
require 'config.php';

use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

$apiContext = new ApiContext(
    new OAuthTokenCredential(
        PAYPAL_CLIENT_ID,
        PAYPAL_CLIENT_SECRET
    )
);

$apiContext->setConfig([
    'mode' => PAYPAL_MODE
]);

if(isset($_GET['tt'])){
    $tt=$_GET['tt']/26100;
}

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$amount = new Amount();
$amount->setTotal($tt); // Số tiền cần thanh toán
$amount->setCurrency('USD');

$transaction = new Transaction();
$transaction->setAmount($amount);
$transaction->setDescription('Payment description');

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl('http://localhost/project/Rau%20Cu/?rq=home&success=true');
$redirectUrls->setCancelUrl('http://localhost/project/Rau%20Cu/?rq=home&?success=fale');

$payment = new Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions([$transaction])
    ->setRedirectUrls($redirectUrls);

try {
    $payment->create($apiContext);
    header("Location: " . $payment->getApprovalLink());
    exit;
} catch (Exception $ex) {
    echo "Error: " . $ex->getMessage();
    // Ghi nhật ký lỗi
    file_put_contents('error_log.txt', $ex->getMessage(), FILE_APPEND);
}
?>
