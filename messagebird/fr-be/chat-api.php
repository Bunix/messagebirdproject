<!DOCTYPE html>
<html lang="fr-be">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <title>Chat API - MessageBird</title>
        <meta name="description" content="Chattez avec vos clients sur WeChat et Telegram directement à partir de votre propre logiciel ou outil CRM.">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="..\assets\images\apple-touch-icon.png">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-16x16.png" sizes="16x16">
        <link rel="mask-icon" href="..\assets\images\pinned.svg" color="#2481D7">

                    <link href="..\assets\images\favicon.ico" rel="shortcut icon" type="image/x-icon">
                <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="iGbHohD6GrpA2YIV581OTVi-7KilOBTzcXm73gFJOVMFrDH_2FFZU3cmugIVGuSDZq8I_6Q033iHpki5v6SglA==">

        <meta name="apple-mobile-web-app-title" content="MessageBird">
        <meta name="theme-color" content="#e5f0fa">
        <meta name="application-name" content="&nbsp;">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="mstile-144x144.png">

                         <link rel="canonical" href="chat-api.htm">
        	<link rel="alternate" hreflang="nl-nl" href="..\nl\chat-api.htm">
        	<link rel="alternate" hreflang="en-gb" href="..\en-gb\chat-api.htm">
        	<link rel="alternate" hreflang="es-es" href="..\es-es\chat-api.htm">
        	<link rel="alternate" hreflang="fr-fr" href="..\fr-fr\chat-api.htm">
        	<link rel="alternate" hreflang="de-de" href="..\de-de\chat-api.htm">
        	<link rel="alternate" hreflang="en-us" href="..\en-us\chat-api.htm">
        	<link rel="alternate" hreflang="nl-be" href="..\nl-be\chat-api.htm">
        	<link rel="alternate" hreflang="fr-be" href="chat-api.htm">
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
        <meta property="og:description" content="Chattez avec vos clients sur WeChat et Telegram directement à partir de votre propre logiciel ou outil CRM.">
        <meta property="og:url" content="https://www.messagebird.com/fr-be/chat-api">
        <meta property="og:site_name" content="MessageBird">
        <meta property="og:locale" content="fr-be">

        <!-- Twitter Card -->

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@messagebird">
        <meta name="twitter:title" content="Chat API">
        <meta name="twitter:description" content="Chattez avec vos clients sur WeChat et Telegram directement à partir de votre propre logiciel ou outil CRM.">
        

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

                                                    <img class="header-top-locale-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/BE_belgium.png">
                        
                                                                                                                                                                                                                                                                                                                                                                                                                                Belgique (Français)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="header-top-locale-explanation">(Changer la langue)</span>
                    </a>
                </li>
                <li class="header-top-item" id="telephone">
                    <a class="header-top-link header-top-phone" id="phonenumber" href="contact.htm">
                        <i class="fa fa-phone"></i>
                                            </a>
                </li>
                <li class="header-top-item">
                    <a href="https://dashboard.messagebird.com/app/fr-be/login/" class="header-top-link btn-logout hidden-xs">Connexion</a>
                </li>
                <li class="header-top-item header-cta">
                    <a href="https://dashboard.messagebird.com/app/fr-be/sign-up/" class="header-top-link btn-cta hidden-xs">Inscription</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="header-main" id="subbar">
      <div class="container">

        
          <div class="navbar-header logo hidden-xs">
              <a href="index.htm" class="pull-left">
                                        <img class="header-logo" src="https://cdn-gc.messagebird.com/assets/images/logo.svg" id="logo" alt="MessageBird" height="32">
                                </a>
          </div>

          <div class="row visible-xs">
              <ul class="nav-mobile col-xs-12 text-right">
                  <div class="pull-left">
                      <a href="index.htm">
                                                        <img class="header-logo-glyph" style="display:block!important" src="https://cdn-gc.messagebird.com/assets/images/glyph.svg" alt="MessageBird" height="20">
                                                </a>
                  </div>
                  <li class="dropdown products">
                      <a href="#" class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Produits                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          <div class="dropdown-products animated zoomIn" role="menu" aria-labelledby="mobileProducts">

            <ul class="container">
                <li class="clearfix">
                    <a href="/fr-be/sms-gateway">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/sms-gateway.svg" alt="MessageBird - SMS Gateway">
                        </div>
                        SMS Gateway                    </a>
                </li>
                                <li class="clearfix">
                    <a href="sms-vocal.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/voice.svg" class="icon-fix" alt="MessageBird - Text to Speech">
                        </div>
                        Voice                    </a>
                </li>
                <li class="clearfix">
                    <a href="chat-api.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/chat-gateway.svg" alt="MessageBird - Chat Gateway">
                        </div>
                        Chat API                    </a>
                </li>
                <li class="clearfix">
                    <a href="numero-court.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/shortcode.svg" alt="MessageBird - Short Code">
                        </div>
                        Numéro court                    </a>
                </li>
                <li class="clearfix">
                    <a href="grands-comptes.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/wholesale.svg" alt="MessageBird - Large Accounts">
                        </div>
                        Grands comptes                    </a>
                </li>
                <li class="clearfix">
                    <a href="sms-par-mail.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/mail2sms.svg" alt="MessageBird - Email to SMS">
                        </div>
                        SMS par mail                    </a>
                </li>
                <li class="clearfix">
                    <a href="/fr-be/virtual-mobile-number">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/vmn.svg" alt="MessageBird - Virtual Mobile Number">
                        </div>
                        Numéro                    </a>
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

            <h3 class="dropdown-products-sub">Secteurs</h3>

            <ul class="container">


                <li class="clearfix">
                    <a href="secteur-de-la-sante.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/healthcare.svg" alt="MessageBird - Healthcare">
                        </div>
                        Secteur de la santé                    </a>
                </li>

                <li class="clearfix">
                    <a href="transport.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/transport.svg" alt="MessageBird - Transport">
                        </div>
                        Transport & Logistique                    </a>
                </li>

                <li class="clearfix">
                    <a href="commerce-de-detail.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/retail.svg" alt="MessageBird - Retail">
                        </div>
                        Commerce de détail                    </a>
                </li>
            </ul>
    </div>
                      </div>
                  </li>
                  <li>
                      <a class="header-main-link" href="tarifs.htm">
                          <span class="link-title">
                              Tarifs                          </span>
                      </a>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Plus                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          <div class="mobile-about animated zoomIn" role="menu" aria-labelledby="mobileAbout">

        <ul class="container" role="menu">
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/app/fr-be/login">
                  Connexion                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="a-propos-de-nous.htm">
                  À propos                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/fr-be/careers" target="_blank">
                      Carrières                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="securite.htm">
                    Sécurité                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="customers.htm">
                    Clients                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="http://status.messagebird.com" target="_blank">
                    Statut système                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="contact.htm">
                    Contact                </a>
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
                              Produits                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu products">
                          
<div class="dropdown-products animated zoomIn" role="menu" aria-labelledby="productMenu">
    <div class="dropdown-content new">
    
<div class="row products-new">
    <div class="col-md-products-5">

        <ul>
            <li>
                <a href="/fr-be/sms-gateway" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/sms.svg">
                    </div>
                    <h4>SMS Gateway</h4>
                    <p>La plateforme de messagerie la plus rapide et fiable du marché.</p>
                </a>
            </li>
            <li>
                <a href="sms-vocal.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/voice.svg">
                    </div>
                    <h4>Messages Voice</h4>
                    <p>Convertissez votre texte en message vocal via notre plateforme.</p>
                </a>
            </li>
            <li>
                <a href="/fr-be/virtual-mobile-number" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/vmn.svg">
                    </div>
                    <h4>Numéros</h4>
                    <p>Restez accessible à tout moment sur des numéros locaux.</p>
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
                    <p>Renforcez votre sécurité avec le One Time Password.</p>
                </a>
            </li>
            <li>
                <a href="chat-api.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/chat.svg">
                    </div>
                    <h4>Chat</h4>
                    <p>Contactez vos clients sur leurs plateformes de chat préférées.</p>
                </a>
            </li>
            <li>
                <a href="numero-court.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/shortcode.svg">
                    </div>
                    <h4>Numéro court</h4>
                    <p>Disposez d'un numéro facile à retenir pour vos clients.</p>
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
                            Développeurs                        </span>
                    </a>
                  </li>

                  <li class="">
                    <a class="header-main-link" href="tarifs.htm">
                        <span class="link-title">
                            Tarifs                        </span>
                    </a>
                  </li>

                  <li class="dropdown js-dropdown-toggle ">
                      <a class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Plus                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          

<ul class="animated zoomIn" role="menu" aria-labelledby="aboutMenu">
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="a-propos-de-nous.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;about&quot;});">
          À propos        </a>
    </li>

        <li role="presentation">
        <a role="menuitem" tabindex="-1" href="customers.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;customers&quot;});">
          Clients        </a>
    </li>
    

    <li role="presentation">
        <a role="menuitem" tabindex="-1" target="_blank" href="http://blog.messagebird.com" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;blog&quot;});">
          Blog        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="/fr-be/careers" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;careers&quot;});">
              Carrières        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="securite.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;security&quot;});">
            Sécurité        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="http://status.messagebird.com" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;systemStatus&quot;});">
            Statut système        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="contact.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;contact&quot;});">
            Contact        </a>
    </li>
</ul>                      </div>
                  </li>

                  <li class="">
                      <a class="header-main-link" href="http://support.messagebird.com/hc/en-us/">
                          <span class="link-title">
                              Aide                          </span>
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
        Nous ne prenons plus en charge activement le navigateur que vous utilisez pour visionner notre site web. Pour consulter et utiliser facilement notre site, <a href="http://browsehappy.com/" target="_blank">veuillez télécharger une version récente du navigateur</a>. Vous pouvez également nous appeler ou <a href="mailto:support@messagebird.com" target="_blank">envoyer un e-mail avec vos questions</a>.    </div>
    <a href="#" onClick="this.parentNode.style.display = 'none'; return;">Close [x]</a>
</div>
<![endif]-->


<!-- Sticky header -->



<nav class="header-sticky">
    <div class="header-sticky-wrapper">
        <div class="container">

            <div class="header-sticky-cta">
                <a class="btn btn-cta" href="chat-api.htm#try">Lancez-vous</a>
            </div>

            <div class="navbar-header logo">
                <a href="index.htm" class="pull-left">
                    <img class="header-logo" src="https://cdn-gc.messagebird.com/assets/images/logo.svg" onerror="this.onerror=null;this.src='https://cdn-gc.messagebird.com/assets/images/logo/logo.png'" id="logo" alt="MessageBird" height="32">
                    <img class="header-logo-glyph" src="https://cdn-gc.messagebird.com/assets/images/glyph.svg" onerror="this.onerror=null;this.src='https://cdn-gc.messagebird.com/assets/images/logo/logo.png'" id="logo" alt="MessageBird" height="32">
                </a>
            </div>

            <div class="navbar-collapse collapse sticky navigation" id="subbar-navigation">

                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="header-main-link" href="chat-api.htm#try">Tarifs</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="/fr-be/sms-gateway">SMS</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="chat-api.htm">Chat</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="sms-vocal.htm">Voice</a>
                    </li>
                    <li class="dropdown dark sub-products-open ">
                        <a class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <span class="link-title">
                                Autres produits                            </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu mini">
                            <ul class="animated zoomIn sub-products" role="menu" aria-labelledby="productsSticky">
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="numero-court.htm">
            Numéro court        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="sms-par-mail.htm">
            SMS par mail        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="numeros.htm">
            Numéros        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="verify.htm">
            Verify        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="one-time-password.htm">
            One Time Password        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="lookup.htm">
            Lookup        </a>
    </li>
</ul>
                        </div>
                    </li>

                    <li class="">
                        <a href="chat-api.htm#try" class="btn btn-cta">Lancez-vous</a>
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
                        <h3 class="locale-modal-heading">Choisissez votre pays</h3>
                        <p class="sub">Le choix d'un pays permet de changer la langue et d'accéder à un contenu adapté à votre région. </p>
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
                                    <a href="..\es-es\chat-api.htm">
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
                        <p class="small" style="margin-top: 15px">Vous ne trouvez pas votre pays? Consultez la liste complète ci-dessous.</p>
                        <select onchange="if (this.value) window.location.href=this.value">
                            <option value="" disabled="" selected="">Choisissez votre pays
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
                            <p class="small">Votre pays n'est pas repris dans la liste? Vous pouvez toujours visiter notre site internet en anglais:</p>
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
                    <p>Si vous avez des questions, des suggestions ou des plaintes concernant nos efforts de localisation, <a href="contact.htm"> n'hésitez pas à nous contacter </a>. Votre opinion nous importe!</p>
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
                        Contactez vos clients grâce à notre Chat API multicanal.                    </h1>

                    <p style="max-width: 580px;margin: 0 auto;margin-bottom: 15px;">Dialoguez avec vos clients à travers notre répertoire croissant de canaux de messagerie. Utilisez autant de canaux que vous le voulez, sans frais supplémentaires.</p>

                    <a href="#try" class="btn btn-cta hover">Lancez-vous</a>

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
                            <h4 class="page-section-tag" style="font-size: 12px;">Weibo <span class="chat-channel-soon">Prochainement</span></h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/viber-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Viber <span class="chat-channel-soon">Prochainement</span></h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/whatsapp-glyph.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">WhatsApp <span class="chat-channel-soon">Prochainement</span></h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/kakao-talk-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Kakao Talk <span class="chat-channel-soon">Prochainement</span></h4>
                        </div><div class="chat-channel">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/kik-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Kik <span class="chat-channel-soon">Prochainement</span></h4>
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

									<h4 class="page-section-tag">Contenu interactif</h4>
				
									<h3 class="page-section-heading">Communiquez autrement</h3>
				
				
				
									<p class="feature-content">Contextualisez vos conversations en insérant des images, du contenu audio, vidéo, et des données de géolocalisation. Le contenu interactif vous offre une infinité de façons de communiquer avec vos clients.</p>
				
				
				
				
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
                <h4 class="page-section-tag">Intégrations</h4>
                <h3 class="page-section-heading">Commencez dès maintenant</h3>
                <p class="feature-content">Notre plateforme de messagerie s’intègre parfaitement à Zendesk, notre partenaire officiel. Nous allons étendre cette collaboration à d’autres plateformes, pour un accès simplifié à notre Chat.</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <h4 class="page-section-tag" style="font-size: 12px;">Partenaire officiel</h4>
                        <div class="chat-int-logo zendesk"><img src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/zendesk-green.svg" alt="Zendesk"></div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <h4 class="page-section-tag" style="font-size: 12px;">Prochainement</h4>
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

				<span class="page-section-tag code-example-sub-heading">Développeurs</span>
				<h3 class="page-section-heading">Intégrez aisément notre Chat API</h3>

				<p class="code-example-content lp">Intégrez notre Chat API à vos logiciels GRC, sites internet ou applications. Lisez notre documentation à destination des développeurs et commencez à communiquer autrement.</p>

                
									<a class="page-section-link" href="/fr-be/developers" onclick="analytics.track('web:productDocsPressed', {&quot;page&quot;:&quot;chat&quot;});">Consultez la documentation développeur ⇢</a>
				
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

                    <h4 class="page-section-tag">Tarifs</h4>
                    <h3 class="page-section-heading">Choisissez l’offre adaptée à vos besoins</h3>
                    <p>Nos tarifs se basent sur le nombre d’<b>Utilisateurs Actifs Mensuels</b> (UAM). Si aucune de ces options ne vous convient, n'hésitez pas à <a href="mailto:sales@messagebird.com">contacter notre équipe commerciale pour recevoir un plan tarifaire personnalisé.</a></p>
                    <div class="pricing-tiers clearfix">
            <a href="https://dashboard.messagebird.com/app/fr-be/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier  free">
                                <img class="pricing-tier-icon" alt="Gratuit" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/free.png">
                <div class="pricing-tier-name">Gratuit</div>
                <div class="pricing-tier-price">0 €<div class="pricing-tier-term">/ mois</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Illimités</b> Messages</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Illimités</b> Canaux</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>50</b> UAM</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>10 Gio</b> Stockage</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/fr-be/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Essayer</span>
                    <span class="no-cc">Aucune carte de crédit nécessaire</span>
                            </div>
        </a>
            <a href="https://dashboard.messagebird.com/app/fr-be/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier ">
                                <img class="pricing-tier-icon" alt="Startup" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/startup.png">
                <div class="pricing-tier-name">Startup</div>
                <div class="pricing-tier-price">49 €<div class="pricing-tier-term">/ mois</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Illimités</b> Messages</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Illimités</b> Canaux</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>5.000</b> UAM</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>500 Gio</b> Stockage</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/fr-be/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Choisir</span>
                            </div>
        </a>
            <a href="https://dashboard.messagebird.com/app/fr-be/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier  popular">
                                    <div class="pricing-tier-popular">Meilleure vente</div>
                                <img class="pricing-tier-icon" alt="Société" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/business.png">
                <div class="pricing-tier-name">Société</div>
                <div class="pricing-tier-price">99 €<div class="pricing-tier-term">/ mois</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Illimités</b> Messages</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Illimités</b> Canaux</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>10.000</b> UAM</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>1 Tio</b> Stockage</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/fr-be/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Choisir</span>
                            </div>
        </a>
            <a href="https://dashboard.messagebird.com/app/fr-be/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier ">
                                <img class="pricing-tier-icon" alt="Entreprise" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/enterprise.png">
                <div class="pricing-tier-name">Entreprise</div>
                <div class="pricing-tier-price">599 €<div class="pricing-tier-term">/ mois</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Illimités</b> Messages</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Illimités</b> Canaux</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>60.000</b> UAM</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>5 Tio</b> Stockage</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/fr-be/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Choisir</span>
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
                    <h3 class="page-section-small-heading">Contacter un collaborateur</h3>

                                            
                    
                        <form class="form-group contact-form" id="contact" method="post" action="/fr-be/chat-api#contact-form">
                            <input type="hidden" name="_csrf" value="iGbHohD6GrpA2YIV581OTVi-7KilOBTzcXm73gFJOVMFrDH_2FFZU3cmugIVGuSDZq8I_6Q033iHpki5v6SglA==">                            <input type="hidden" name="ContactForm[subject]" value="Sales Inquiry">

                            <div class="text-left ">
                                <label for="ContactForm[name]">Votre nom</label>
                                <input type="text" value="" name="ContactForm[name]" class="form-control form-group" placeholder="Indiquez votre nom" required="">
                            </div>
                            <div class="text-left ">
                                <label for="ContactForm[email]">Votre e-mail</label>
                                <input type="email" value="" name="ContactForm[email]" class="form-control form-group" placeholder="Votre adresse e-mail" required="">
                            </div>
                            <div class="text-left ">
                                <label for="ContactForm[body]">Votre message</label>
                                <textarea name="ContactForm[body]" class="form-control form-group" rows="6" placeholder="Saisissez votre message" required=""></textarea>
                                <button type="submit" class="btn btn-cta hover pull-left">Envoyer</button>
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
                        <a class="footer-mobile-link" href="/fr-be/sms-gateway">
                            SMS                        </a>
                        <a class="footer-mobile-link" href="sms-vocal.htm">
                            Voice                        </a>
                        <a class="footer-mobile-link" target="_blank" href="http://blog.messagebird.com">
                            Blog                        </a>
                        <a class="footer-mobile-link" href="http://support.messagebird.com/hc/en-us/">
                            Aide                        </a>
                    </div>
                    <div class="footer-mobile-col">
                        <a class="footer-mobile-link" href="tarifs.htm">
                            Tarifs                        </a>
                        <a class="footer-mobile-link" href="/app/fr-be/sign-up">
                            Inscription                        </a>
                        <a class="footer-mobile-link" href="/app/fr-be/login">
                            Connexion                        </a>
                        <a class="footer-mobile-link" href="contact.htm">
                            Contact                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <span class="footer-copyright">&copy;2017 MessageBird</span>
                    <a class="footer-link" href="legal\privacy.htm">
                        Privacy                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\tos.htm">
                        Conditions                    </a>
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
                        Privacy                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\tos.htm">
                        Conditions                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\sla.htm">
                        SLA
                    </a>
                </div>
                <span class="footer-member-of">Fier membre de</span>
                <span class="footer-member-link gsma">
                    <a href="http://www.gsma.com/membership/messagebird/" target="_blank">
                        <img class="footer-big-img" src="https://cdn-gc.messagebird.com/assets/images/logo-gsma.svg" alt="GSMA">
                    </a>
                </span>
            </div>

            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        En savoir plus                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="a-propos-de-nous.htm">
                                À propos                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://blog.messagebird.com" target="_blank">
                                Blog                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/fr-be/careers" target="_blank">
                                Carrières                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="securite.htm">
                                Sécurité                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="customers.htm">
                                Clients                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="tarifs.htm">
                                Tarifs                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="grands-comptes.htm">
                                Grands comptes                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/fr-be/developers">
                                Développeurs                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://support.messagebird.com/hc/fr/">
                                Aide                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://status.messagebird.com" target="_blank">
                                Statut système                            </a>
                        </li>
                                    </ul>
            </div>
            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Produits                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/fr-be/sms-gateway">
                                SMS Gateway                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-vocal.htm">
                                Voice                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="chat-api.htm">
                                Chat API                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="numeros.htm">
                                Numéros                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-en-masse.htm">
                                SMS en masse                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-par-mail.htm">
                                SMS par mail                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="numero-court.htm">
                                Numéro court                            </a>
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
                        Secteurs                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="secteur-de-la-sante.htm">
                                Secteur de la santé                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="transport.htm">
                                Transport & Logistique                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="commerce-de-detail.htm">
                                Commerce de détail                            </a>
                        </li>
                    
                    <li class="footer-nav-item footer-coming-soon">
                        Plus d'informations à venir!
                    </li>
                </ul>
            </div>
          
            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Rejoignez-nous                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/app/fr-be/sign-up">
                                Inscription                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/app/fr-be/login">
                                Connexion                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="contact.htm">
                                Contact                            </a>
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
<!-- env: prod-marketing-production-marketing-570398068-7qnz9 - 202.90.137.43 -->

            <script src="https://cdn-gc.messagebird.com/assets/js/all-243683dec71a0e3b94c6cf8e0cf76fab.js"></script>
<script src="https://cdn-gc.messagebird.com/assets/js/extra-c21a209f2e140b18144adcd7b3322437.js"></script>        </div>
    </body>
</html>

<script type="text/javascript">
    var dashboardUrl = 'https://dashboard.messagebird.com';
</script>

<script>

var cookiemsg = "MessageBird utilise des cookies fonctionnels, de performance et de publicité afin d'offrir à ses utilisateurs une expérience optimale. Pour plus d'informations, consultez notre ";
var cookiepolicy = " politique de cookies.";
var dismissmsg = "Accepter tous les cookies";
var denymsg = "Gérer les cookies";

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
        "href": "/fr-be/privacy#cookies"
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
    window.location.href = "/fr-be/privacy#cookies";
};
</script>

<script src="..\assets\js\selectivity-jquery.min.js"></script>