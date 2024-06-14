<?php
require 'vendor/autoload.php';
require 'config.php';

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
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

if (isset($_GET['success']) && $_GET['success'] == 'true') {
    $paymentId = $_GET['paymentId'];
    $payerId = $_GET['PayerID'];

    $payment = Payment::get($paymentId, $apiContext);

    $execution = new PaymentExecution();
    $execution->setPayerId($payerId);

    try {
        $result = $payment->execute($execution, $apiContext);
        echo "Payment success! Transaction ID: " . $result->getId();
        // Ghi nhật ký thành công
        file_put_contents('success_log.txt', "Payment success! Transaction ID: " . $result->getId(), FILE_APPEND);
    } catch (Exception $ex) {
        echo "Error: " . $ex->getMessage();
        // Ghi nhật ký lỗi
        file_put_contents('error_log.txt', $ex->getMessage(), FILE_APPEND);
    }
} else {
    echo "Payment canceled";
    // Ghi nhật ký hủy bỏ
    file_put_contents('error_log.txt', "Payment canceled", FILE_APPEND);
}
?>
