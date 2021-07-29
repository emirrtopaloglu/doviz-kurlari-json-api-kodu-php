# doviz-kurlari-json-api-kodu-php
 
# Döviz Kurları JSON API Kodları

JSON API: https://finans.truncgil.com/today.json

```php

$JSON = json_decode(file_get_contents('https://finans.truncgil.com/today.json'), 1);

```

Yukarıdaki şekilde JSON dosyasını çağırdıktan sonra şu şekilde alış, satış ve değişim bilgilerini çağırabilirsiniz.

```php

echo $JSON['USD']['Alış']; // USD/TRY Alış Fiyatı
echo $JSON['USD']['Satış']; // USD/TRY Satış Fiyatı
echo $JSON['USD']['Değişim']; // USD/TRY Değişim Yüzdesi

```