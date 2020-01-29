<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use Gilbertsoft\SaferpayJsonApi\Container;
use Gilbertsoft\SaferpayJsonApi\Message\ErrorResponse;
use Gilbertsoft\SaferpayJsonApi\SecureAliasStore\AssertInsertRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing an insert (see 1-example-insert.php)

$token = 'xxx';

// Step 1:
// Prepare the assert request
// See https://saferpay.github.io/jsonapi/#Payment_v1_Alias_AssertInsert

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$response = (new AssertInsertRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setToken($token)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The insert has been successful! Insert alias: ' . $response->getAlias()->getId();
