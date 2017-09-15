<!DOCTYPE html>
<html lang="es-es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <title>Chat API - MessageBird</title>
        <meta name="description" content="Chatea con tus clientes en WeChat y Telegram directamente desde tu propio software o herramienta de CRM.">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="..\assets\images\apple-touch-icon.png">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-16x16.png" sizes="16x16">
        <link rel="mask-icon" href="..\assets\images\pinned.svg" color="#2481D7">

                    <link href="..\assets\images\favicon.ico" rel="shortcut icon" type="image/x-icon">
                <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="esjFiXODH2lVntmL1-gN7MNK88MGWAkLvtOsqXRB7VT3AjPUuyhcgGJh4ZwlP6ci_VsXlAdUwoBIDF_Oyqx0kw==">

        <meta name="apple-mobile-web-app-title" content="MessageBird">
        <meta name="theme-color" content="#e5f0fa">
        <meta name="application-name" content="&nbsp;">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="mstile-144x144.png">

                         <link rel="canonical" href="chat-api.htm">
        	<link rel="alternate" hreflang="nl-nl" href="..\nl\chat-api.htm">
        	<link rel="alternate" hreflang="en-gb" href="..\en-gb\chat-api.htm">
        	<link rel="alternate" hreflang="es-es" href="chat-api.htm">
        	<link rel="alternate" hreflang="fr-fr" href="..\fr-fr\chat-api.htm">
        	<link rel="alternate" hreflang="de-de" href="..\de-de\chat-api.htm">
        	<link rel="alternate" hreflang="en-us" href="..\en-us\chat-api.htm">
        	<link rel="alternate" hreflang="nl-be" href="..\nl-be\chat-api.htm">
        	<link rel="alternate" hreflang="fr-be" href="..\fr-be\chat-api.htm">
        	<link rel="alternate" hreflang="x-default" href="..\en\chat-api.htm">
        	<link rel="alternate" hreflang="en-jm" href="..\en-jm\chat-api.htm">
        	<link rel="alternate" hreflang="en-bm" href="..\en-bm\chat-api.htm">
        	<link rel="alternate" hreflang="en-ie" href="..\en-ie\chat-api.htm">
        	<link rel="alternate" hreflang="en-gu" href="..\en-gu\chat-api.htm">
        	<link rel="alternate" hreflang="en-gy" href="..\en-gy\chat-api.htm">
        	<link rel="alternate" hreflang="en-gd" href="..\en-gd\chat-api.htm">
        	<link rel="alternate" hreflang="en-au" href="..\en-au\chat-api.htm">
        	<link rel="alternate" hreflang="en-bs" href="..\en-bs\chat-api.htm">
        	<link rel="alternate" hreflang="en-vg" href="..\en-vg\chat-api.htm">
        	<link rel="alternate" hreflang="en-tt" href="..\en-tt\chat-api.htm">
        	<link rel="alternate" hreflang="en-nz" href="..\en-nz\chat-api.htm">
        	<link rel="alternate" hreflang="en-bz" href="..\en-bz\chat-api.htm">
        	<link rel="alternate" hreflang="en-sg" href="..\en-sg\chat-api.htm">
        	<link rel="alternate" hreflang="en-ky" href="..\en-ky\chat-api.htm">
        	<link rel="alternate" hreflang="en-gh" href="..\en-gh\chat-api.htm">
        	<link rel="alternate" hreflang="en-ca" href="..\en-ca\chat-api.htm">
        	<link rel="alternate" hreflang="en-ng" href="..\en-ng\chat-api.htm">
        	<link rel="alternate" hreflang="en-pr" href="..\en-pr\chat-api.htm">
        	<link rel="alternate" hreflang="en-hk" href="..\en-hk\chat-api.htm">
        	<link rel="alternate" hreflang="en-gi" href="..\en-gi\chat-api.htm">
        	<link rel="alternate" hreflang="en-ke" href="..\en-ke\chat-api.htm">
        	<link rel="alternate" hreflang="en-ug" href="..\en-ug\chat-api.htm">
        	<link rel="alternate" hreflang="en-zw" href="..\en-zw\chat-api.htm">
        	<link rel="alternate" hreflang="en-je" href="..\en-je\chat-api.htm">
        	<link rel="alternate" hreflang="en-im" href="..\en-im\chat-api.htm">
        	<link rel="alternate" hreflang="en-gg" href="..\en-gg\chat-api.htm">
    
    <!-- Robots -->
	<meta name='robots' content='index,follow'>
    <!-- Robots -->

                <link href="https://cdn-gc.messagebird.com/assets/css/all-00ba6b10fc9bc76e6585b1a45017bcfe.css" rel="stylesheet">
<link href="https://cdn-gc.messagebird.com/assets/css/core-5d9e5b7a2660977d0292193c7847b101.css" rel="stylesheet">
        <!--[if lte IE 8]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Robots Overwrite -->
                <!-- Robots Overwrite -->

        <meta property="og:image" content="https://www.messagebird.com/assets/images/og/messagebird.gif">
        <meta property="og:image:width" content="600">
        <meta property="og:image:height" content="315">

        <meta property="og:title" content="Chat API">
        <meta property="og:description" content="Chatea con tus clientes en WeChat y Telegram directamente desde tu propio software o herramienta de CRM.">
        <meta property="og:url" content="https://www.messagebird.com/es-es/chat-api">
        <meta property="og:site_name" content="MessageBird">
        <meta property="og:locale" content="es-es">

        <!-- Twitter Card -->

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@messagebird">
        <meta name="twitter:title" content="Chat API">
        <meta name="twitter:description" content="Chatea con tus clientes en WeChat y Telegram directamente desde tu propio software o herramienta de CRM.">
        

        <script type="text/javascript">window.page = 'chat-api';</script>

        <script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-34056529-1', {'cookieDomain': '.messagebird.com'});
ga('set', 'User Type', 'Guest');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script><script type="text/javascript">
            !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.1.0";
            analytics.load("I2Py1njgrCIuI8Q7kTZba08d8knyzK1k");
            }}();
        </script><script type="text/javascript">analytics.page("", {route: "app/pages/chat_api"});</script><script type="text/javascript">
            var _user_id = "";
            var _session_id = "d0c3b992f1766459948e9d33f8d2e810";
            var _sift = window._sift = window._sift || [];

            _sift.push(["_setAccount", "ed76f300ec"]);
            _sift.push(["_setUserId", _user_id]);
            _sift.push(["_setSessionId", _session_id]);
            _sift.push(["_trackPageview"]);

            (function() {
                function ls() {
                    var e = document.createElement("script");
                    var s = document.getElementsByTagName("script")[0];
                    e.src = "https://cdn.siftscience.com/s.js";
                    s.parentNode.insertBefore(e, s);
                }
                if (window.attachEvent) {
                    window.attachEvent("onload", ls);
                } else {
                    window.addEventListener("load", ls, false);
                }
               })();
        </script><script type="text/javascript"></script>
    </head>
    <body class="chat-api">
        <div class="body-background ">

            
            
            <!-- Main header -->


    <header class="header ">
    <nav class="header-top navbar navbar-default navbar-static-top hidden-xs" id="topbar">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li class="header-top-item">
                    <a class="header-top-link header-top-locale js-open-locale-modal" href="#" data-toggle="modal" data-target="#select-language">

                                                    <img class="header-top-locale-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/ES_spain.png">
                        
                                                                                                                                                            España (Español)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <span class="header-top-locale-explanation">(Cambiar idioma)</span>
                    </a>
                </li>
                <li class="header-top-item" id="telephone">
                    <a class="header-top-link header-top-phone" id="phonenumber" href="pagina-de-contacto.htm">
                        <i class="fa fa-phone"></i>
                                                    +34 931 816 015                                            </a>
                </li>
                <li class="header-top-item">
                    <a href="https://dashboard.messagebird.com/app/es-es/login/" class="header-top-link btn-logout hidden-xs">Iniciar sesión</a>
                </li>
                <li class="header-top-item header-cta">
                    <a href="https://dashboard.messagebird.com/app/es-es/sign-up/" class="header-top-link btn-cta hidden-xs">Regístrate</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="header-main" id="subbar">
      <div class="container">

        
          <div class="navbar-header logo hidden-xs">
              <a href="index-1.htm" class="pull-left">
                                        <img class="header-logo" src="https://cdn-gc.messagebird.com/assets/images/logo.svg" id="logo" alt="MessageBird" height="32">
                                </a>
          </div>

          <div class="row visible-xs">
              <ul class="nav-mobile col-xs-12 text-right">
                  <div class="pull-left">
                      <a href="index-1.htm">
                                                        <img class="header-logo-glyph" style="display:block!important" src="https://cdn-gc.messagebird.com/assets/images/glyph.svg" alt="MessageBird" height="20">
                                                </a>
                  </div>
                  <li class="dropdown products">
                      <a href="#" class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Productos                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          <div class="dropdown-products animated zoomIn" role="menu" aria-labelledby="mobileProducts">

            <ul class="container">
                <li class="clearfix">
                    <a href="/es-es/sms-gateway">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/sms-gateway.svg" alt="MessageBird - SMS Gateway">
                        </div>
                        SMS Gateway                    </a>
                </li>
                                <li class="clearfix">
                    <a href="texto-a-voz.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/voice.svg" class="icon-fix" alt="MessageBird - Text to Speech">
                        </div>
                        Voz                    </a>
                </li>
                <li class="clearfix">
                    <a href="chat-api.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/chat-gateway.svg" alt="MessageBird - Chat Gateway">
                        </div>
                        Chat API                    </a>
                </li>
                <li class="clearfix">
                    <a href="numero-corto.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/shortcode.svg" alt="MessageBird - Short Code">
                        </div>
                        Número Corto                    </a>
                </li>
                <li class="clearfix">
                    <a href="large-accounts.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/wholesale.svg" alt="MessageBird - Large Accounts">
                        </div>
                        Grandes cuentas                    </a>
                </li>
                <li class="clearfix">
                    <a href="email-a-sms.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/mail2sms.svg" alt="MessageBird - Email to SMS">
                        </div>
                        E-mail a SMS                    </a>
                </li>
                <li class="clearfix">
                    <a href="/es-es/virtual-mobile-number">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/vmn.svg" alt="MessageBird - Virtual Mobile Number">
                        </div>
                        Número                    </a>
                </li>
                <li class="clearfix">
                    <a href="verify.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/verify.svg" alt="MessageBird - Verify">
                        </div>
                        Verify                    </a>
                </li>
                                <li class="clearfix">
                    <a href="lookup.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/lookup.svg" alt="MessageBird - Lookup">
                        </div>
                        Lookup                    </a>
                </li>


            </ul>

            <h3 class="dropdown-products-sub">Sectores</h3>

            <ul class="container">


                <li class="clearfix">
                    <a href="asistencia-sanitaria.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/healthcare.svg" alt="MessageBird - Healthcare">
                        </div>
                        Sanidad                    </a>
                </li>

                <li class="clearfix">
                    <a href="transporte.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/transport.svg" alt="MessageBird - Transport">
                        </div>
                        Transporte y logística                    </a>
                </li>

                <li class="clearfix">
                    <a href="comercio-minorista.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/retail.svg" alt="MessageBird - Retail">
                        </div>
                        Distribución                    </a>
                </li>
            </ul>
    </div>
                      </div>
                  </li>
                  <li>
                      <a class="header-main-link" href="tarifas.htm">
                          <span class="link-title">
                              Tarifas                          </span>
                      </a>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Más                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          <div class="mobile-about animated zoomIn" role="menu" aria-labelledby="mobileAbout">

        <ul class="container" role="menu">
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/app/es-es/login">
                  Iniciar sesión                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="sobre-messagebird.htm">
                  Sobre nosotros                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/es-es/careers" target="_blank">
                      Empleos                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="seguridad.htm">
                    Seguridad                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="clientes.htm">
                    Clientes                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="http://status.messagebird.com" target="_blank">
                    Estado del sistema                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="pagina-de-contacto.htm">
                    Contacto                </a>
            </li>
        </ul>
</div>
                      </div>
                  </li>
              </ul>
          </div>

          <div class="visible-md visible-lg navbar-collapse collapse navigation" id="subbar-navigation">

              
              <ul class="nav navbar-nav navbar-right">

                <li class="dropdown js-dropdown-toggle active">
                      <a class="header-main-link">
                          <span class="link-title">
                              Productos                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu products">
                          
<div class="dropdown-products animated zoomIn" role="menu" aria-labelledby="productMenu">
    <div class="dropdown-content new">
    
<div class="row products-new">
    <div class="col-md-products-5">

        <ul>
            <li>
                <a href="/es-es/sms-gateway" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/sms.svg">
                    </div>
                    <h4>SMS Gateway</h4>
                    <p>La plataforma de mensajería global más rápida y eficaz.</p>
                </a>
            </li>
            <li>
                <a href="texto-a-voz.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/voice.svg">
                    </div>
                    <h4>Mensajes de voz</h4>
                    <p>Convierte tu texto en voz con nuestra plataforma de mensajes de voz.</p>
                </a>
            </li>
            <li>
                <a href="/es-es/virtual-mobile-number" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/vmn.svg">
                    </div>
                    <h4>Números</h4>
                    <p>Te podrán contactar en todo momento a través de números localizados.</p>
                </a>
            </li>
        </ul>

    </div>

    <div class="col-md-products-5">
        <ul>
            <li>
                <a href="verify.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/verify.svg">
                    </div>
                    <h4>Verify</h4>
                    <p>Seguridad reforzada con contraseñas de un solo uso.</p>
                </a>
            </li>
            <li>
                <a href="chat-api.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/chat.svg">
                    </div>
                    <h4>Chat</h4>
                    <p>Contacta con tus clientes en sus plataformas de chat favoritas.</p>
                </a>
            </li>
            <li>
                <a href="numero-corto.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/shortcode.svg">
                    </div>
                    <h4>Número Corto</h4>
                    <p>Ofrécele a tus clientes un número fácil de recordar.</p>
                </a>
            </li>
        </ul>
    </div>
</div>

    </div>
</div>                      </div>
                  </li>

                  <li>
                    <a class="header-main-link" href="https://developers.messagebird.com" target="_blank">
                        <span class="link-title">
                            Desarrolladores                        </span>
                    </a>
                  </li>

                  <li class="">
                    <a class="header-main-link" href="tarifas.htm">
                        <span class="link-title">
                            Tarifas                        </span>
                    </a>
                  </li>

                  <li class="dropdown js-dropdown-toggle ">
                      <a class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Más                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          

<ul class="animated zoomIn" role="menu" aria-labelledby="aboutMenu">
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="sobre-messagebird.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;about&quot;});">
          Sobre nosotros        </a>
    </li>

        <li role="presentation">
        <a role="menuitem" tabindex="-1" href="clientes.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;customers&quot;});">
          Clientes        </a>
    </li>
    

    <li role="presentation">
        <a role="menuitem" tabindex="-1" target="_blank" href="http://blog.messagebird.com" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;blog&quot;});">
          Blog        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="/es-es/careers" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;careers&quot;});">
              Empleos        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="seguridad.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;security&quot;});">
            Seguridad        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="http://status.messagebird.com" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;systemStatus&quot;});">
            Estado del sistema        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="pagina-de-contacto.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;contact&quot;});">
            Contacto        </a>
    </li>
</ul>                      </div>
                  </li>

                  <li class="">
                      <a class="header-main-link" href="http://support.messagebird.com/hc/en-us/">
                          <span class="link-title">
                              Ayuda                          </span>
                      </a>
                  </li>

              </ul>
          </div>
        </div>
    </nav>
</header>

<!--[if lte IE 8]>
<div class="upgrade-browser">
    <div class="upgrade-browser-container">
        Ya no proporcionamos activamente compatibilidad con el explorador web que estás utilizando para visualizar nuestro sitio web. Para verlo correctamente, <a href="http://browsehappy.com/" target="_blank">descarga uno de los exploradores web más modernos</a>. Alternativamente siempre tienes la posibilidad de llamarnos o<a href="mailto:support@messagebird.com" target="_blank">mandarnos un correo electrónico con cualquier pregunta o duda</a>.    </div>
    <a href="#" onClick="this.parentNode.style.display = 'none'; return;">Close [x]</a>
</div>
<![endif]-->


<!-- Sticky header -->



<nav class="header-sticky">
    <div class="header-sticky-wrapper">
        <div class="container">

            <div class="header-sticky-cta">
                <a class="btn btn-cta" href="chat-api.htm#try">Empieza ya</a>
            </div>

            <div class="navbar-header logo">
                <a href="index-1.htm" class="pull-left">
                    <img class="header-logo" src="https://cdn-gc.messagebird.com/assets/images/logo.svg" onerror="this.onerror=null;this.src='https://cdn-gc.messagebird.com/assets/images/logo/logo.png'" id="logo" alt="MessageBird" height="32">
                    <img class="header-logo-glyph" src="https://cdn-gc.messagebird.com/assets/images/glyph.svg" onerror="this.onerror=null;this.src='https://cdn-gc.messagebird.com/assets/images/logo/logo.png'" id="logo" alt="MessageBird" height="32">
                </a>
            </div>

            <div class="navbar-collapse collapse sticky navigation" id="subbar-navigation">

                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="header-main-link" href="chat-api.htm#try">Tarifas</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="/es-es/sms-gateway">SMS</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="chat-api.htm">Chat</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="texto-a-voz.htm">Voz</a>
                    </li>
                    <li class="dropdown dark sub-products-open ">
                        <a class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <span class="link-title">
                                Más productos                            </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu mini">
                            <ul class="animated zoomIn sub-products" role="menu" aria-labelledby="productsSticky">
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="numero-corto.htm">
            Número Corto        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="email-a-sms.htm">
            E-mail a SMS        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="numeros.htm">
            Números        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="verify.htm">
            Verify        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="contraseña-de-un-solo-uso.htm">
            Contraseña de un solo uso        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="lookup.htm">
            Lookup        </a>
    </li>
</ul>
                        </div>
                    </li>

                    <li class="">
                        <a href="chat-api.htm#try" class="btn btn-cta">Empieza ya</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</nav>


<div class="header-filler"></div>

<div class="veil"></div>

<!-- Search Modal -->

<!-- Language Modal -->

<div class="locale-modal modal fade" id="select-language" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="close">
        <a href="#" data-dismiss="modal">
            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/utility/close.svg" alt="Close">
        </a>
    </div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body clearfix">

                <img class="locale-modal-map" src="https://cdn-gc.messagebird.com/assets/images/world.svg" alt="Globe">

                <div class="locale-modal-lists-container clearfix">
                    <div class="locale-modal-col text-center">
                        <h3 class="locale-modal-heading">Elige tu país</h3>
                        <p class="sub">Si seleccionas un país es posible que se cambie el idioma y tendrás acceso a contenidos relevantes para tu ubicación. </p>
                    </div>

                    <div class="locale-modal-col col-md-offset-1 col-md-6" style="height: 265px;">
                        <ul class="locale-modal-menu clearfix js-locale-modal-menu">
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\nl\chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/NL_netherlands.png" alt="Nederland">
                                            Nederland                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-gb\chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/UK_unitedKingdom.png" alt="United Kingdom">
                                            United Kingdom                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-us\chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/US_unitedStates.png" alt="United States">
                                            United States                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\de-de\chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/DE_germany.png" alt="Deutschland">
                                            Deutschland                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/ES_spain.png" alt="España">
                                            España                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\fr-fr\chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/FR_france.png" alt="France">
                                            France                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\nl-be\chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/BE_belgium.png" alt="België">
                                            België                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-ca\chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/CA_canada.png" alt="Canada">
                                            Canada                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-au\chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/AU_australia.png" alt="Australia">
                                            Australia                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-nz\chat-api.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/ZN_newZealand.png" alt="New Zealand">
                                            New Zealand                                        </span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>

                    <div class="locale-modal-col border-col col-md-4" style="height: 265px;">
                        <p class="small" style="margin-top: 15px">¿No encuentras tu país? Consulta la lista completa aquí abajo.</p>
                        <select onchange="if (this.value) window.location.href=this.value">
                            <option value="" disabled="" selected="">Elige tu país
                                                            <optgroup label="Africa">
                                                                                <option value="/en-gh/chat-api" data-name-locale="English">
                                                Ghana                                            
                                                                                    <option value="/en-ke/chat-api" data-name-locale="English">
                                                Kenya                                            
                                                                                    <option value="/en-ng/chat-api" data-name-locale="English">
                                                Nigeria                                            
                                                                                    <option value="/en-ug/chat-api" data-name-locale="English">
                                                Uganda                                            
                                                                                    <option value="/en-zw/chat-api" data-name-locale="English">
                                                Zimbabwe                                            
                                                                        </optgroup>
                                                          <optgroup label="Asia">
                                                                                <option value="/en-hk/chat-api" data-name-locale="English">
                                                Hong Kong                                            
                                                                                    <option value="/en-sg/chat-api" data-name-locale="English">
                                                Singapore                                            
                                                                        </optgroup>
                                                          <optgroup label="Europe">
                                                                                <option value="/fr-be/chat-api" data-name-locale="Français">
                                                Belgique                                            
                                                                                    <option value="/nl-be/chat-api" data-name-locale="Vlaams">
                                                België                                            
                                                                                    <option value="/de-de/chat-api" data-name-locale="Deutsch">
                                                Deutschland                                            
                                                                                    <option value="/es-es/chat-api" data-name-locale="Español">
                                                España                                            
                                                                                    <option value="/fr-fr/chat-api" data-name-locale="Français">
                                                France                                            
                                                                                    <option value="/en-gi/chat-api" data-name-locale="English">
                                                Gibraltar                                            
                                                                                    <option value="/en-gg/chat-api" data-name-locale="English">
                                                Guernsey                                            
                                                                                    <option value="/en-ie/chat-api" data-name-locale="English">
                                                Ireland                                            
                                                                                    <option value="/en-im/chat-api" data-name-locale="English">
                                                Isle of Man                                            
                                                                                    <option value="/en-je/chat-api" data-name-locale="English">
                                                Jersey                                            
                                                                                    <option value="/nl/chat-api" data-name-locale="Nederlands">
                                                Nederland                                            
                                                                                    <option value="/en-gb/chat-api" data-name-locale="English">
                                                United Kingdom                                            
                                                                        </optgroup>
                                                          <optgroup label="North America">
                                                                                <option value="/en-bs/chat-api" data-name-locale="English">
                                                Bahamas                                            
                                                                                    <option value="/en-bz/chat-api" data-name-locale="English">
                                                Belize                                            
                                                                                    <option value="/en-bm/chat-api" data-name-locale="English">
                                                Bermuda                                            
                                                                                    <option value="/en-vg/chat-api" data-name-locale="English">
                                                British Virgin Islands                                            
                                                                                    <option value="/en-ca/chat-api" data-name-locale="English">
                                                Canada                                            
                                                                                    <option value="/en-ky/chat-api" data-name-locale="English">
                                                Cayman Islands                                            
                                                                                    <option value="/en-gd/chat-api" data-name-locale="English">
                                                Grenada                                            
                                                                                    <option value="/en-jm/chat-api" data-name-locale="English">
                                                Jamaica                                            
                                                                                    <option value="/en-pr/chat-api" data-name-locale="English">
                                                Puerto Rico                                            
                                                                                    <option value="/en-tt/chat-api" data-name-locale="English">
                                                Trinidad & Tobago                                            
                                                                                    <option value="/en-us/chat-api" data-name-locale="English">
                                                United States                                            
                                                                        </optgroup>
                                                          <optgroup label="Oceania">
                                                                                <option value="/en-au/chat-api" data-name-locale="English">
                                                Australia                                            
                                                                                    <option value="/en-gu/chat-api" data-name-locale="English">
                                                Guam                                            
                                                                                    <option value="/en-nz/chat-api" data-name-locale="English">
                                                New Zealand                                            
                                                                        </optgroup>
                                                          <optgroup label="South America">
                                                                                <option value="/en-gy/chat-api" data-name-locale="English">
                                                Guyana                                            
                                                                        </optgroup>
                                                    <optgroup label="Other">
                              <option value="/en/chat-api" data-name-locale="Rest of world">
                                  Rest of world
                              
                          </optgroup>
                        </select>

                        <div class="locale-modal-col-footer">
                            <p class="small">¿Tu país no está en la lista? Siempre puedes ver nuestro sitio web en inglés sencillo:</p>
                            <div class="clearfix">
                                <div class="locale-modal-menu-item locale-modal-center">
                                    <a href="..\en\chat-api.htm">
                                        <span><img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/UK_unitedKingdom.png" alt="English">English</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="locale-modal-footer">
                    <p>Si tienes cualquier duda, sugerencia o queja con respecto a nuestro trabajo de localización, <a href="pagina-de-contacto.htm">siempre puedes contactar con nosotros</a>. ¡Nos encantaría saber qué piensas!</p>
                </div>

            </div>
        </div>
    </div>
</div>

                        <div class="body-content" id="panel">

                
                







<section class="page-section page-product-hero chat-api">

    <div class="container" style="padding-bottom: 30px;">
        <div class="row">

            <div class="col-md-12 text-center">
                <div class="">

                    <h1 class="chat-hero-heading">
                        Contacta con tus clientes a través de nuestro Chat API multicanal                    </h1>

                    <p style="max-width: 580px;margin: 0 auto;margin-bottom: 15px;">Conecta con tus clientes a través de nuestro creciente catálogo de canales de mensajería. Podrás usar todos los canales que quieras sin ningún coste adicional.</p>

                    <a href="#try" class="btn btn-cta hover">Empieza ya</a>

                    <div class="chat-channels clearfix">
                        <div class="chat-channel border-right border-bottom">
                            <img src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/facebook-messenger-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Facebook Messenger</h4>
                        </div><div class="chat-channel border-right border-bottom">
                            <img src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/wechat-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">WeChat</h4>
                        </div><div class="chat-channel border-right border-bottom">
                            <img src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/telegram-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Telegram</h4>
                        </div><div class="chat-channel border-right border-bottom">
                            <img src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/line-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">LINE</h4>
                        </div><div class="chat-channel border-bottom">
                            <img src="https://cdn-gc.messagebird.com/assets/images/glyph.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">SMS</h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/weibo-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Weibo <span class="chat-channel-soon">Próximamente</span></h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/viber-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Viber <span class="chat-channel-soon">Próximamente</span></h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/whatsapp-glyph.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">WhatsApp <span class="chat-channel-soon">Próximamente</span></h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/kakao-talk-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Kakao Talk <span class="chat-channel-soon">Próximamente</span></h4>
                        </div><div class="chat-channel">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/kik-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Kik <span class="chat-channel-soon">Próximamente</span></h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</section>


<section class="page-section feature-row chat-api no-border ">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 feature-image-left feature-image-hide">
                <img style="width: 65%" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/rich-media-better.svg" alt="">
            </div>

			<div class="col-sm-12 col-md-6">

									<h4 class="page-section-tag">Contenido multimedia</h4>
				
									<h3 class="page-section-heading">Sé creativo</h3>
				
				
				
									<p class="feature-content">Utiliza fotos, vídeos, sonidos y geolocalizaciones para enriquecer y contextualizar tus mensajes. Los contenidos multimedia te ofrecen un montón de oportunidades para que interactúes con tus clientes del mejor modo.</p>
				
				
				
				
			</div>

			<div class="col-sm-12 col-md-6 feature-image-right feature-image-show">
                <img style="width: 65%" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/rich-media-better.svg" alt="">
            </div>
		</div>
	</div>
</section>

<section class="page-section feature-row no-border">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 pull-right">
                <h4 class="page-section-tag">Integraciones</h4>
                <h3 class="page-section-heading">Empieza ya</h3>
                <p class="feature-content">Combina nuestra plataforma de mensajería con Zendesk, nuestro socio oficial de integración. Muy pronto agregaremos más plataformas compatibles, para que empieces a usar Chat de inmediato.</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <h4 class="page-section-tag" style="font-size: 12px;">Socio oficial de integración</h4>
                        <div class="chat-int-logo zendesk"><img src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/zendesk-green.svg" alt="Zendesk"></div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <h4 class="page-section-tag" style="font-size: 12px;">Próximamente</h4>
                        <div class="clearfix">
                            <div class="chat-int-logo slack" style="width: 130px;"><img src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/slack.svg" alt=""></div>
                            <div class="chat-int-logo salesforce" style="width: 75px;"><img src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/salesforce.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-section code-example no-border ">


	<div class="container">
		<div class="row">

            
			<div class="col-md-6">

				<span class="page-section-tag code-example-sub-heading">Desarrolladores</span>
				<h3 class="page-section-heading">Integra fácilmente nuestro Chat API</h3>

				<p class="code-example-content lp">Podrás integrar nuestro Chat API en tus programas de gestión de clientes, páginas web o apps. Consulta nuestra documentación para desarrolladores y dale un plus a tus conversaciones con los usuarios.</p>

                
									<a class="page-section-link" href="/es-es/developers" onclick="analytics.track('web:productDocsPressed', {&quot;page&quot;:&quot;chat&quot;});">Échale un vistazo a la documentación para desarrolladores ⇢</a>
				
			</div>

            
            <div class="col-md-6">
                <div class="tab-content text-right hidden-xs">
					                                            <div role="tabpanel" class="tab-pane text-left  active" id="curl">
							                            <pre class="line-numbers "><code class="language-bash">$ curl -X "POST" "https://chat.messagebird.com/1/messages" \
-H "Authorization: AccessKey test_gshuPaZoeEG6ovbc8M79w0QyM" \
-d "contactId=8ad304cc5649a68d43cfb5n23110783" \
-d "type=text" \
-d "payload=This is a test message."</code></pre>
                        </div>
                                    </div>
            </div>

            
		</div>
	</div>
</section>

<div id="try" class="page-footer-background js-page-footer">
    <section class="page-section page-footer pricing-chat-api alt-color" style="padding-top: 30px;">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <h4 class="page-section-tag">Tarifas</h4>
                    <h3 class="page-section-heading">Elige el mejor plan para tus necesidades</h3>
                    <p>Nuestras tarifas se basan en el número de <b>usuarios activos mensuales</b> (UAM). Si estos planes no se adaptan a lo que estás buscando, <a href="mailto:sales@messagebird.com">contacta con nuestro equipo de ventas</a> para que podamos ofrecerte un plan a tu medida.</p>
                    <div class="pricing-tiers clearfix">
            <a href="https://dashboard.messagebird.com/app/es-es/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier  free">
                                <img class="pricing-tier-icon" alt="Gratis" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/free.png">
                <div class="pricing-tier-name">Gratis</div>
                <div class="pricing-tier-price">0 €<div class="pricing-tier-term">/ mes</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Ilimitado</b> Mensajes</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Ilimitado</b> Canales</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>50</b> UAM</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>10 GiB</b> Almacenamiento</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/es-es/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Pruébalo</span>
                    <span class="no-cc">No se necesita tarjeta de crédito</span>
                            </div>
        </a>
            <a href="https://dashboard.messagebird.com/app/es-es/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier ">
                                <img class="pricing-tier-icon" alt="Startup" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/startup.png">
                <div class="pricing-tier-name">Startup</div>
                <div class="pricing-tier-price">49 €<div class="pricing-tier-term">/ mes</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Ilimitado</b> Mensajes</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Ilimitado</b> Canales</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>5 000</b> UAM</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>500 GiB</b> Almacenamiento</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/es-es/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Selecciona un plan</span>
                            </div>
        </a>
            <a href="https://dashboard.messagebird.com/app/es-es/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier  popular">
                                    <div class="pricing-tier-popular">El más popular</div>
                                <img class="pricing-tier-icon" alt="Business" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/business.png">
                <div class="pricing-tier-name">Business</div>
                <div class="pricing-tier-price">99 €<div class="pricing-tier-term">/ mes</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Ilimitado</b> Mensajes</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Ilimitado</b> Canales</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>10 000</b> UAM</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>1 TiB</b> Almacenamiento</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/es-es/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Selecciona un plan</span>
                            </div>
        </a>
            <a href="https://dashboard.messagebird.com/app/es-es/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier ">
                                <img class="pricing-tier-icon" alt="Enterprise" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/enterprise.png">
                <div class="pricing-tier-name">Enterprise</div>
                <div class="pricing-tier-price">599 €<div class="pricing-tier-term">/ mes</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Ilimitado</b> Mensajes</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Ilimitado</b> Canales</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>60 000</b> UAM</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>5 TiB</b> Almacenamiento</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/es-es/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Selecciona un plan</span>
                            </div>
        </a>
    </div>                </div>

            </div>
        </div>
    </section>
</div>


<section class="page-section page-footer js-page-footer home">
    <div class="container not-on-mobile">
        <div class="row">
            <div class="col-md-6 col-md-push-3">
                <div>
                    <h3 class="page-section-small-heading">Habla con el equipo de ventas</h3>

                                            
                    
                        <form class="form-group contact-form" id="contact" method="post" action="/es-es/chat-api#contact-form">
                            <input type="hidden" name="_csrf" value="esjFiXODH2lVntmL1-gN7MNK88MGWAkLvtOsqXRB7VT3AjPUuyhcgGJh4ZwlP6ci_VsXlAdUwoBIDF_Oyqx0kw==">                            <input type="hidden" name="ContactForm[subject]" value="Sales Inquiry">

                            <div class="text-left ">
                                <label for="ContactForm[name]">Tu nombre</label>
                                <input type="text" value="" name="ContactForm[name]" class="form-control form-group" placeholder="Introduce tu nombre" required="">
                            </div>
                            <div class="text-left ">
                                <label for="ContactForm[email]">Tu correo electrónico</label>
                                <input type="email" value="" name="ContactForm[email]" class="form-control form-group" placeholder="Introduce tu dirección de correo electrónico" required="">
                            </div>
                            <div class="text-left ">
                                <label for="ContactForm[body]">Tu mensaje</label>
                                <textarea name="ContactForm[body]" class="form-control form-group" rows="6" placeholder="Escribe tu mensaje" required=""></textarea>
                                <button type="submit" class="btn btn-cta hover pull-left">Enviar</button>
                            </div>
                        </form>
                </div>
            </div>

        </div>
    </div>
</section>
            </div>

            
    
<footer class="footer">
    <div class="container">
        <div class="footer-row row">

            <div class="footer-mobile">
                <div class="footer-mobile-row clearfix">
                    <div class="footer-mobile-col">
                        <a class="footer-mobile-link" href="/es-es/sms-gateway">
                            SMS                        </a>
                        <a class="footer-mobile-link" href="texto-a-voz.htm">
                            Voz                        </a>
                        <a class="footer-mobile-link" target="_blank" href="http://blog.messagebird.com">
                            Blog                        </a>
                        <a class="footer-mobile-link" href="http://support.messagebird.com/hc/en-us/">
                            Ayuda                        </a>
                    </div>
                    <div class="footer-mobile-col">
                        <a class="footer-mobile-link" href="tarifas.htm">
                            Tarifas                        </a>
                        <a class="footer-mobile-link" href="/app/es-es/sign-up">
                            Regístrate                        </a>
                        <a class="footer-mobile-link" href="/app/es-es/login">
                            Iniciar sesión                        </a>
                        <a class="footer-mobile-link" href="pagina-de-contacto.htm">
                            Contacto                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <span class="footer-copyright">&copy;2017 MessageBird</span>
                    <a class="footer-link" href="legal\privacy.htm">
                        Privacidad                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\tos.htm">
                        Condiciones                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\sla.htm">
                        SLA
                    </a>
                </div>

            </div>

            <div class="col-md-5ths footer-logo-col">
                <span class="footer-copyright">&copy;2017 MessageBird</span>

                <div class="footer-legal">
                    <a class="footer-link" href="legal\privacy.htm">
                        Privacidad                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\tos.htm">
                        Condiciones                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\sla.htm">
                        SLA
                    </a>
                </div>
                <span class="footer-member-of">Miembro orgulloso de</span>
                <span class="footer-member-link gsma">
                    <a href="http://www.gsma.com/membership/messagebird/" target="_blank">
                        <img class="footer-big-img" src="https://cdn-gc.messagebird.com/assets/images/logo-gsma.svg" alt="GSMA">
                    </a>
                </span>
            </div>

            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Saber más                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sobre-messagebird.htm">
                                Sobre nosotros                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://blog.messagebird.com" target="_blank">
                                Blog                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/es-es/careers" target="_blank">
                                Empleos                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="seguridad.htm">
                                Seguridad                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="clientes.htm">
                                Clientes                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="tarifas.htm">
                                Tarifas                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="large-accounts.htm">
                                Grandes cuentas                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/es-es/developers">
                                Desarrolladores                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://support.messagebird.com/hc/es-es/">
                                Servicio técnico                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://status.messagebird.com" target="_blank">
                                Estado del sistema                            </a>
                        </li>
                                    </ul>
            </div>
            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Productos                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/es-es/sms-gateway">
                                SMS Gateway                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="texto-a-voz.htm">
                                Voz                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="chat-api.htm">
                                Chat API                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="numeros.htm">
                                Números                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-masivos.htm">
                                SMS masivos                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="email-a-sms.htm">
                                E-mail a SMS                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="numero-corto.htm">
                                Número Corto                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-marketing.htm">
                                SMS Marketing                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="verify.htm">
                                Verify                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="lookup.htm">
                                Lookup                            </a>
                        </li>
                                    </ul>
            </div>

                      <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Sectores                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="asistencia-sanitaria.htm">
                                Sanidad                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="transporte.htm">
                                Transporte y logística                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="comercio-minorista.htm">
                                Distribución                            </a>
                        </li>
                    
                    <li class="footer-nav-item footer-coming-soon">
                        Próximamente más!
                    </li>
                </ul>
            </div>
          
            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Únete a nosotros                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/app/es-es/sign-up">
                                Regístrate                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/app/es-es/login">
                                Iniciar sesión                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="pagina-de-contacto.htm">
                                Contacto                            </a>
                        </li>
                    
                    <li class="footer-nav-item">
                                                    <a href="https://www.linkedin.com/company/messagebird-com" class="footer-social-link" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                                                    <a href="https://twitter.com/messagebird" class="footer-social-link" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                                                    <a href="https://dribbble.com/messagebird" class="footer-social-link" target="_blank">
                                <i class="fa fa-dribbble"></i>
                            </a>
                                                    <a href="https://github.com/messagebird" class="footer-social-link" target="_blank">
                                <i class="fa fa-github"></i>
                            </a>
                                            </li>
                </ul>
            </div>

        </div>
    </div>
</footer>


<!--[if lt IE 9]>
<script>
window.onload = function(){
    if (!Modernizr.svg) {
        var imgs = document.getElementsByTagName('img');
        var svgExtension = /.*\.svg$/
        var l = imgs.length;
        for(var i = 0; i < l; i++) {
            if(imgs[i].src.match(svgExtension)) {
                var src = imgs[i].src.slice(0, -3) + 'png',
                    images_folder_index = src.indexOf('images') + 'images'.length;

                imgs[i].src = [src.slice(0, images_folder_index), '/png_fallback', src.slice(images_folder_index)].join('');
            }
        }
    }
}
</script>
<![endif]-->


<script>
    var env = 'production';
</script>
<!-- env: prod-marketing-production-marketing-3276192651-6q9kr - 202.90.137.43 -->

            <script src="https://cdn-gc.messagebird.com/assets/js/all-243683dec71a0e3b94c6cf8e0cf76fab.js"></script>
<script src="https://cdn-gc.messagebird.com/assets/js/extra-c21a209f2e140b18144adcd7b3322437.js"></script>        </div>
    </body>
</html>

<script type="text/javascript">
    var dashboardUrl = 'https://dashboard.messagebird.com';
</script>

<script>

var cookiemsg = "MessageBird hace uso de cookies funcionales, de rendimiento y publicitarias para garantizarte una experiencia de usuario óptima. Puedes encontrar más información en nuestra página de ";
var cookiepolicy = "política de cookies.";
var dismissmsg = "Aceptar todas las cookies";
var denymsg = "Gestionar cookies";

window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#fff",
          "text": "#4C5669"
        },
        "button": {
          "background": "#2481d7",
        }
      },
      "position": "bottom",
      "type": "opt-out",
      "content": {
        "message": cookiemsg,
        "dismiss": dismissmsg,
        "deny": denymsg,
        "link": cookiepolicy,
        "href": "/es-es/privacy#cookies"
      },
    "law": {
        "regionalLaw": false,
        "countryCode": "PH"
    },
    "location": false,

    onInitialise: function (status) {
      var type = this.options.type;
      var didConsent = this.hasConsented();
    },

    onStatusChange: function(status, chosenBefore) {
      var type = this.options.type;
      var didConsent = this.hasConsented();
      if (type == 'opt-out' && !didConsent) {
        goToPolicy();
      }
    },

    onRevokeChoice: function() {
      var type = this.options.type;
      if (type == 'opt-in') {
        goToPolicy();
      }
    }
    });

});

function goToPolicy(){
    window.location.href = "/es-es/privacy#cookies";
};
</script>

<script src="..\assets\js\selectivity-jquery.min.js"></script>