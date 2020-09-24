## ☕ Webhook ko-fi (para discord) 
A little PHP endpoint for receive data from ko-fi and send to discord through webhook


#### 🔗 Variables por modificar:
```php
$security_key    = ""; # Para evitar que manden contenido basura.
$discord_webhook = ""; # Enlace de tu webhook de discord
$kofi_user       = ""; # Tu usuario de ko-fi (no url)
```

#### ❓ Cómo utilizar?
1. Descargar el archivo `endpoint.php` y modificar las variables indicadas
2. Subirlo el archivo a un servidor web
3. Acceder a (https://ko-fi.com/manage/webhooks)[https://ko-fi.com/manage/webhooks]
4. En Webhook URL agregar `https://dominio/ubicacion/de/tu/fichero/endpoint.php?key={string de $security_key}`

#### 🧰 Pequeña herramienta...
Puedes generara una key aleatoria aquí [https://kuroneko.im/tools/hash](https://kuroneko.im/tools/hash)
