<img src="https://www.ooredoo.com/wp-content/uploads/2015/12/ooredoo_logo_.png"/>
<h1>OOREDOO SMS gateway for php</h1>
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
