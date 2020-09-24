<?php
header("HTTP/1.1 200 OK");

# ======== Modificar ========
$security_key = "agregar_key_aqui"; # Puedes generar una "key" aquí: https://kuroneko.im/tools/hash
$discord_webhook = "https://discord.com/api/webhooks/__________/_____________";
$kofi_user = 'tu user de kofi (no url) para el footer';



# ================ Key Control
if(!isset($_GET['key'])) { die; }
if($_GET['key'] != $security_key) { die; }


# ================ Control Content
if(empty($_POST['data'])) { die; }


# ================ Receive Content
$content = json_decode(trim($_POST['data']), true);


$monto = "{$content['amount']}USD";

if($content['is_public']) {
    $enviado_por = $content['from_name'];
    $mensaje = $content['message'];
} else {
    $enviado_por = "Anónimo";
    $mensaje = "-";
}

switch($content['type']) {
    case "Donation":   $header = "realizado una donación!";
    case "Commission": $header = "solicitado una comisión!";
    case "Shop Order": $header = "realizado una compra!";
}

# ================ Contenido
$data = array( 'embeds' => [[
            'type'   => 'rich',
            'color'  => hexdec('#50d4e6'),
            'title'  => "☕ Han {$header}",
            'fields' => array(
                [ 'inline' => true,  'name' => 'Donador', 'value' => $enviado_por ],
                [ 'inline' => true,  'name' => 'Monto',   'value' => $monto       ],
                [ 'inline' => false, 'name' => 'Mensaje', 'value' => $mensaje     ]
            ),
            'footer' => array(
                'text'     => "https://ko-fi.com/{$kofi_user}",
                'icon_url' => "https://cdn.discordapp.com/attachments/741622797872398349/753812604417212486/kofi.png"
            ),
        ]]);


$curl = curl_init($discord_webhook);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-type: application/json']);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_exec($curl);
curl_close($curl);
