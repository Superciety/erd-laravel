<?php

use Superciety\ElrondSdk\Elrond;

it('getById - gets the token', function () {
    fakeApiRequestWithResponse('/tokens/SUPER-764d8d', 'tokens/token.json');

    $actual = Elrond::api()
        ->tokens()
        ->getById('SUPER-764d8d');

    assertMatchesResponseSnapshot($actual);
});

it('getAccountsCount - gets the token', function () {
    fakeApiRequestWithResponseValue('/tokens/SUPER-764d8d/accounts/count', 2343);

    $actual = Elrond::api()
        ->tokens()
        ->getAccountsCount('SUPER-764d8d');
        
    assertMatchesResponseSnapshot($actual);
});

it('getTransactions - gets the transaction history of an NFT ', function () {
    fakeApiRequestWithResponse('/tokens/QUACK-f01e02-0259/transactions', 'tokens/transactions.json');

    $actual = Elrond::api()
        ->tokens()
        ->getTransactions('QUACK-f01e02-0259');

    assertMatchesResponseSnapshot($actual);
});
