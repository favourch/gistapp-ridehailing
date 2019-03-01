<?php

return [

    /**
     * Public Key From Paystack Dashboard
     *
     */
    'publicKey' => getenv('pk_test_cce8a886d4402a790785679436581a08745eb258'),

    /**
     * Secret Key From Paystack Dashboard
     *
     */
    'secretKey' => getenv('sk_test_23b9334ec32151d40d48c4510e8abb51c1ca0d09'),

    /**
     * Paystack Payment URL
     *
     */
    'paymentUrl' => getenv('https://api.paystack.co'),

    /**
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => getenv('fchukwuedo@gmail.com'),

];