<?php
    require('stripe-php-master/init.php');
    $publishable_key ="pk_test_51NH3HjBNt4AdckmRJLWq26PYHf8L7AoYJkqP59tIBNX5laFuPmak6tls4VDXDPYdVavJvdE4SssNvZHYxC1lPwzZ00sIVNAv07";
    $secret_key="sk_test_51NH3HjBNt4AdckmRducNDedzZLIRnC65MXb0KH6jkgbKBblpdiN3ed6ZL9f1EBfaJ7UgV3xjO6BQ9f7LZ0bzkz7g00lbsxh6sL";
    \Stripe\Stripe::setApiKey($secret_key);

?>