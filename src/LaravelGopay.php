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
     * @return void
     */
    public function getStatus($id)
    {
        return $this->gopay->getStatus($id);
    }

    /**
     * Refund of the payment
     *
     * @param mixed $id
     * @param mixed $data
     * @return void
     */
    public function refundPayment($id, $data)
    {
        return $this->gopay->refundPayment($id, $data);
    }

    /**
     * Get EET payment reciept
     *
     * @param mixed $paymentId
     * @return void
     */
    public function eetReceipts($paymentId)
    {
        return $this->gopay->getEETReceiptByPaymentId($paymentId);
    }
}
