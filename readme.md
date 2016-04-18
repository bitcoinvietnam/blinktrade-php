# Composer installation #

Add the following to your composer.json:

```json
{
    "require": {
        "bitcoinvietnam/blinktrade-php": "@dev"
    }
}
```

## Usage

Instantiate a Client object

```php
use BitcoinVietnam\Blinktrade;
$client = new Client($key, $secret, Blinktrade::BROKERID_VBTC);
```