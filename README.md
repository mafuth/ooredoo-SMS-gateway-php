<img src="https://www.ooredoo.com/wp-content/uploads/2015/12/ooredoo_logo_.png"/>

## OOREDOO SMS gateway for php

how to use 
```ssh
composer require mafuth/ooredoo-sms-gateway-php
```

```php
require 'vandor/autoload.php';

$SMS = new ooredooSMS(
    'Your Auth Key',
    'Your email',
    'Your Bearer'
);
$SMS->sendSMS('contact numbers (must be an array)','your message');
```
