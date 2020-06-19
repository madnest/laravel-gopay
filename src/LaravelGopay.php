<?php

namespace Madnest\LaravelGopay;

class LaravelGopay
{
    protected $gopay;

    protected array $config;

    public function __construct()
    {
        $this->config = config('laravel-gopay.config');

        $this->gopay = \GoPay\Api::payments($this->config);
    }

    /**
     * Create standard payment
     *
     * @param array $params
     * @return \GoPay\Http\Response
     */
    public function createPayment(array $params): \GoPay\Http\Response
    {
        return $this->gopay->createPayment($params);
    }

    /**
     * Get status of the payment
     *
     * @param mixed $id
     * @return \GoPay\Http\Response
     */
    public function getStatus($id): \GoPay\Http\Response
    {
        return $this->gopay->getStatus($id);
    }

    /**
     * Refund of the payment
     *
     * @param mixed $id
     * @param mixed $data
     * @return \GoPay\Http\Response
     */
    public function refundPayment($id, $data): \GoPay\Http\Response
    {
        return $this->gopay->refundPayment($id, $data);
    }

    /**
     * Get EET payment reciept
     *
     * @param mixed $paymentId
     * @return \GoPay\Http\Response
     */
    public function eetReceipts($paymentId): \GoPay\Http\Response
    {
        return $this->gopay->getEETReceiptByPaymentId($paymentId);
    }
}
