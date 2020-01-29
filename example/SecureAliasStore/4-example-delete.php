<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use Gilbertsoft\SaferpayJsonApi\Container;
use Gilbertsoft\SaferpayJsonApi\Message\ErrorResponse;
use Gilbertsoft\SaferpayJsonApi\SecureAliasStore\DeleteRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// An alias you received for an insert (see 23-example-insert-direct.php)

$aliasId = 'xxx';

// Step 1:
// Prepare the delete request
// https://saferpay.github.io/jsonapi/#Payment_v1_Alias_Delete

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$response = (new DeleteRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setAliasId($aliasId)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

// Step 3:
// You are done!

echo 'The alias has successfully been deleted';
