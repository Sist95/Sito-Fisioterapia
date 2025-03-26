<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Studio Armonia</title>
    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {"siteId":3976580,"cookiePolicyId":31397459,"lang":"it","storage":{"useSiteId":true}};
        </script>
        <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3976580.js"></script>
        <script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
        <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
    <link rel="icon" type="image/x-icon" href="/images/Logofavicon.png">
</head>
<body>

   

    <x-navbar/>

    <div>
        {{$slot}}
    </div>

    <a href="https://wa.me/+393446475023" class="whatsapp_float" target="_blank">
        <img src="/images/whatsapplogo.png" alt="WhatsApp" class="whatsapp_icon">
      </a>

    <x-footer/>
    
</body>
</html>