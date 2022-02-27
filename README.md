# ooredoo-SMS-gateway-php
how to use 
```php
require 'main.php';

$SMS = new ooredooSMS(
    'Your Auth Key',
    'Your email',
    'Your Bearer'
);
$SMS->sendSMS('contact numbers (must be an array)','your message');
```
