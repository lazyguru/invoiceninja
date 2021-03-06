<?php

namespace App\Ninja\PaymentDrivers;

class AuthorizeNetAIMPaymentDriver extends BasePaymentDriver
{
    protected $transactionReferenceParam = 'refId';

    protected function paymentDetails($paymentMethod = false)
    {
        $data = parent::paymentDetails();
        $data['solutionId'] = $this->accountGateway->getConfigField('testMode') ? 'AAA100303' : 'AAA172036';
        $data['invoiceNumber'] = $this->invoice()->invoice_number;

        return $data;
    }
}
