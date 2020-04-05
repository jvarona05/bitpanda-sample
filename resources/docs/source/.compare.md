---
title: API Reference

language_tabs:
- bash
- javascript
- php

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Fiat Wallets


<!-- START_9832cdc3b1891ddd9c28de2ba93ab1af -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/fiat-wallets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/fiat-wallets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/fiat-wallets',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/fiat-wallets`


<!-- END_9832cdc3b1891ddd9c28de2ba93ab1af -->

<!-- START_2ae2a7b779a7ecc201bb2fc8b982c504 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/fiat-wallets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/fiat-wallets/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/fiat-wallets/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/fiat-wallets/{id}`


<!-- END_2ae2a7b779a7ecc201bb2fc8b982c504 -->

<!-- START_cb3a25104ed5af1b296ce2f6684e37a1 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/fiat-wallets/1/transactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/fiat-wallets/1/transactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/fiat-wallets/1/transactions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/fiat-wallets/{id}/transactions`


<!-- END_cb3a25104ed5af1b296ce2f6684e37a1 -->

#Payments


<!-- START_d1857b5ec87054d1e1c4456345f37a06 -->
## api/v1/paymentoptions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/paymentoptions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/paymentoptions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/paymentoptions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/paymentoptions`


<!-- END_d1857b5ec87054d1e1c4456345f37a06 -->

#Stats


<!-- START_0b8950e04388ffc2b10b969f5ddb9046 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/ohlc/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/ohlc/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/ohlc/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET api/v1/ohlc/{dateRange}`


<!-- END_0b8950e04388ffc2b10b969f5ddb9046 -->

#Wallets


<!-- START_4392cd9b2bc485efafb637a4843ce4ee -->
## Get user wallets.

Returns the wallets gruped by wallets, commodity_wallets, fiat_wallets.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/wallets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/wallets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/wallets',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": {
        "type": "collection",
        "attributes": {
            "wallets": [
                {
                    "type": "wallet",
                    "attributes": {
                        "name": "BTC Wallet",
                        "balance": "4.00",
                        "symbol": "BTC",
                        "pending_transactions_count": 0,
                        "deleted": false
                    },
                    "id": 1
                },
                {
                    "type": "wallet",
                    "attributes": {
                        "name": "LTC Wallet",
                        "balance": "3.00",
                        "symbol": "LTC",
                        "pending_transactions_count": 0,
                        "deleted": false
                    },
                    "id": 2
                }
            ],
            "commodity_wallets": [
                {
                    "type": "wallet",
                    "attributes": {
                        "name": "Gold Wallet",
                        "balance": "3.00",
                        "symbol": "XAU",
                        "pending_transactions_count": 0,
                        "deleted": false
                    },
                    "id": 31
                },
                {
                    "type": "wallet",
                    "attributes": {
                        "name": "Silver Wallet",
                        "balance": "8.00",
                        "symbol": "XAG",
                        "pending_transactions_count": 0,
                        "deleted": false
                    },
                    "id": 32
                }
            ],
            "fiat_wallets": [
                {
                    "type": "fiat_wallet",
                    "attributes": {
                        "name": "EUR Wallet",
                        "balance": "2500.00",
                        "fiat_id": 1,
                        "symbol": "EUR"
                    },
                    "id": 1
                },
                {
                    "type": "fiat_wallet",
                    "attributes": {
                        "name": "USD Wallet",
                        "balance": "0.00",
                        "fiat_id": 2,
                        "symbol": "USD"
                    },
                    "id": 2
                }
            ]
        }
    }
}
```

### HTTP Request
`GET api/v1/wallets`


<!-- END_4392cd9b2bc485efafb637a4843ce4ee -->

<!-- START_8847ee77bdcc2ce3ddc6a09efeacbd37 -->
## Get wallet.

Returns the data of a single wallet.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/wallets/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/wallets/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/wallets/aut',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": {
        "type": "wallet",
        "attributes": {
            "name": "BTC Wallet",
            "balance": "4.00",
            "symbol": "BTC",
            "pending_transactions_count": 0,
            "deleted": false
        },
        "id": 1
    }
}
```

### HTTP Request
`GET api/v1/wallets/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the wallet.

<!-- END_8847ee77bdcc2ce3ddc6a09efeacbd37 -->

<!-- START_b3118bf8740e25e0f6d88f01c4f46c1b -->
## Get wallet transactions.

Returns all wallet's transactions.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/wallets/aliquam/transactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/wallets/aliquam/transactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/wallets/aliquam/transactions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": [
        {
            "type": "wallet_transaction",
            "attributes": {
                "action": "buy",
                "amount": "5.00",
                "date": "Sun Apr 05 2020 05:20:33 GMT+0000"
            },
            "id": 1
        },
        {
            "type": "wallet_transaction",
            "attributes": {
                "action": "sell",
                "amount": "2.00",
                "date": "Sun Apr 05 2020 05:20:33 GMT+0000"
            },
            "id": 2
        }
    ]
}
```

### HTTP Request
`GET api/v1/wallets/{id}/transactions`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the wallet.

<!-- END_b3118bf8740e25e0f6d88f01c4f46c1b -->


