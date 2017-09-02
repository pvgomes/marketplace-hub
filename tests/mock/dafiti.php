<?php

/**
 * Create Order
 */
$r3->post('/dafiti/order', function() {

    $orderData = ['order_number' => strtoupper(uniqid())];
    $response  = json_encode($orderData);

    return $response;
});

/**
 * Confirm Order
 */
$r3->post('/dafiti/order/confirm', function() {
    return file_get_contents('php://input');
});

/**
 * Cancel Order
 */
$r3->post('/dafiti/order/cancel', function() {
    return file_get_contents('php://input');
});