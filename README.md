<img src="https://www.ooredoo.mv/_nuxt/img/ooredoo-logo-220.6f2f1f0.png"/>

## OOREDOO SMS gateway for php

how to use 
```ssh
composer require mafuth/ooredoo-sms-gateway-php
```

```php
use ooredooSMS\ooredooSMS;

$SMS = new ooredooSMS(
    'Your Auth Key',
    'Your email',
    'Your Bearer'
);
$SMS->sendSMS('contact numbers (must be an array)','your message');
```
