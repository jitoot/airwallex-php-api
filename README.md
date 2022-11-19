This is a PHP library for the Airwallex API, specifically for payments.
Currently the library only implements the following three components of the Airwallex API:
- Beneficiaries
- PaymentIntent
- PaymentLink

See the [Airwallex API](https://www.airwallex.com/docs/api#/Introduction) for more details.

## Requirements

PHP 5.6.0 and later.

## Composer

Run the following command via [Composer](http://getcomposer.org/):

```bash
composer require jitoot/airwallex-php-api
```

## Getting Started

General usage:

```php
require_once('vendor/autoload.php');

//pass in the client ID and API key from airwallex
$airwallex = new \Jitoot\Airwallex\Client([
    'clientId' => 'sample_client_id',
    'apiKey' => 'sample_api_key',
    'production' => true,
]);
//parameters
$response = $airwallex->paymentIntent->create([
    'description' => 'example customer',
    'email' => 'email@example.com',
    'payment_method' => 'pm_card_visa',
]);
//response array consists of response code and body
//$response[0] = 200
//$response[1] = [ data ] 
```

## Components

###Beneficiary

- get [Airwallex documentation](https://www.airwallex.com/docs/api#/Payouts/Beneficiaries/_api_v1_beneficiaries__beneficiary_id_/get)
- create [Airwallex documentation](https://www.airwallex.com/docs/api#/Payouts/Beneficiaries/_api_v1_beneficiaries_create/post)
- getApiSchema [Airwallex documentation](https://www.airwallex.com/docs/api#/Payouts/Beneficiaries/_api_v1_beneficiary_api_schemas_generate/post)
- getFormSchema [Airwallex documentation](https://www.airwallex.com/docs/api#/Payouts/Beneficiaries/_api_v1_beneficiary_form_schemas_generate/post)

###Payment Intent

- get [Airwallex documentation](https://www.airwallex.com/docs/api#/Payment_Acceptance/Payment_Intents/_api_v1_pa_payment_intents__id_/get)
- create [Airwallex documentation](https://www.airwallex.com/docs/api#/Payment_Acceptance/Payment_Intents/_api_v1_pa_payment_intents_create/post)

###Payment Link

- get [Airwallex documentation](https://www.airwallex.com/docs/api#/Payment_Acceptance/Payment_Links/_api_v1_pa_payment_links__id_/get)
- create [Airwallex documentation](https://www.airwallex.com/docs/api#/Payment_Acceptance/Payment_Links/_api_v1_pa_payment_links_create/post)