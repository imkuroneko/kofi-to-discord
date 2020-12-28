## 🐈☕ Webhook ko-fi (para discord) 
A little PHP endpoint for receive data from ko-fi and send to discord through webhook


#### 🔗 What to modify for use...
```php
$security_key    = ""; # Para evitar que manden contenido basura.
$discord_webhook = ""; # Enlace de tu webhook de discord
$kofi_user       = ""; # Tu usuario de ko-fi (no url)
```


#### 📒 How To Use
> 1. Download the `endpoint.php` file and modify everything listed above (and other things you think will need)
> 2. Upload it to your web server
> 3. Access to (https://ko-fi.com/manage/webhooks)[https://ko-fi.com/manage/webhooks] and add the url to your file `https://your-domain.com/path/to/your/file/endpoint.php?key={string de $security_key}`
> 4. Now you can test it from the ko-fi panel



-----

<p align="center">
  <a href="https://kuroneko.im" target="_blank">
    <img src="https://kuroneko.im/assets/github_logo.png">
  </a>
</p>
