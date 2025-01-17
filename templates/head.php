<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    header("content-security-policy: default-src 'self'; script-src 'self'; img-src 'self'; style-src 'self' https://fonts.googleapis.com/ 'unsafe-inline'; font-src 'self' https://fonts.gstatic.com");
    header("X-Frame-Options: SAMEORIGIN");
    header("Referrer-Policy: same-origin");
    header("Permissions-Policy: camera=(), microphone=()");
    header("X-Content-Type-Options: nosniff");
    header_remove("Server");
    header_remove("X-Powered-By");
?>
<link href="styles/style.css" type="text/css" rel="stylesheet">
<link href="templates/templates-style.css" type="text/css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">