<!DOCTYPE html>
<html lang="de-de">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <title>Chat API - MessageBird</title>
        <meta name="description" content="Sprechen Sie mit Ihren Kunden direkt von Ihrer eigenen Software oder CRM-Werkzeug aus in WeChat oder Telegram.">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="..\assets\images\apple-touch-icon.png">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-16x16.png" sizes="16x16">
        <link rel="mask-icon" href="..\assets\images\pinned.svg" color="#2481D7">

                    <link href="..\assets\images\favicon.ico" rel="shortcut icon" type="image/x-icon">
                <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="KSMk-QnB_PQS5m5bDrEYC0tvAfWlKChYl6QNVdeMkUuk6dKkwWq_HSUZVkz8ZrLFdX7loqQk49Nhe_4yaWEIjA==">

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
        	<link rel="alternate" hreflang="de-de" href="chat-api.htm">
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
        <meta property="og:description" content="Sprechen Sie mit Ihren Kunden direkt von Ihrer eigenen Software oder CRM-Werkzeug aus in WeChat oder Telegram.">
        <meta property="og:url" content="https://www.messagebird.com/de-de/chat-api">
        <meta property="og:site_name" content="MessageBird">
        <meta property="og:locale" content="de-de">

        <!-- Twitter Card -->

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@messagebird">
        <meta name="twitter:title" content="Chat API">
        <meta name="twitter:description" content="Sprechen Sie mit Ihren Kunden direkt von Ihrer eigenen Software oder CRM-Werkzeug aus in WeChat oder Telegram.">
        

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

                                                    <img class="header-top-locale-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/DE_germany.png">
                        
                                                                                                                                                                                                                                                                    Deutschland (Deutsch)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <span class="header-top-locale-explanation">(Sprache wechseln)</span>
                    </a>
                </li>
                <li class="header-top-item" id="telephone">
                    <a class="header-top-link header-top-phone" id="phonenumber" href="kontaktseite.htm">
                        <i class="fa fa-phone"></i>
                                                    +49 (0)40 8740 8847                                            </a>
                </li>
                <li class="header-top-item">
                    <a href="https://dashboard.messagebird.com/app/de-de/login/" class="header-top-link btn-logout hidden-xs">Login</a>
                </li>
                <li class="header-top-item header-cta">
                    <a href="https://dashboard.messagebird.com/app/de-de/sign-up/" class="header-top-link btn-cta hidden-xs">Anmelden</a>
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
                              Produkte                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          <div class="dropdown-products animated zoomIn" role="menu" aria-labelledby="mobileProducts">

            <ul class="container">
                <li class="clearfix">
                    <a href="/de-de/sms-gateway">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/sms-gateway.svg" alt="MessageBird - SMS Gateway">
                        </div>
                        SMS Gateway                    </a>
                </li>
                                <li class="clearfix">
                    <a href="text-to-speech.htm">
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
                    <a href="kurzwahlnummer.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/shortcode.svg" alt="MessageBird - Short Code">
                        </div>
                        Kurzwahlnummer                    </a>
                </li>
                <li class="clearfix">
                    <a href="grosskunden.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/wholesale.svg" alt="MessageBird - Large Accounts">
                        </div>
                        Großkunden                    </a>
                </li>
                <li class="clearfix">
                    <a href="email-to-sms.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/mail2sms.svg" alt="MessageBird - Email to SMS">
                        </div>
                        E-Mail to SMS                    </a>
                </li>
                <li class="clearfix">
                    <a href="/de-de/virtual-mobile-number">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/vmn.svg" alt="MessageBird - Virtual Mobile Number">
                        </div>
                        Virtuelle Handynummer                    </a>
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

            <h3 class="dropdown-products-sub">Sektoren</h3>

            <ul class="container">


                <li class="clearfix">
                    <a href="gesundheitswesen.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/healthcare.svg" alt="MessageBird - Healthcare">
                        </div>
                        Gesundheitswesen                    </a>
                </li>

                <li class="clearfix">
                    <a href="transport.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/transport.svg" alt="MessageBird - Transport">
                        </div>
                        Transport & Logistik                    </a>
                </li>

                <li class="clearfix">
                    <a href="einzelhandel.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/retail.svg" alt="MessageBird - Retail">
                        </div>
                        Einzelhandel                    </a>
                </li>
            </ul>
    </div>
                      </div>
                  </li>
                  <li>
                      <a class="header-main-link" href="tarife.htm">
                          <span class="link-title">
                              Preise                          </span>
                      </a>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Mehr                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          <div class="mobile-about animated zoomIn" role="menu" aria-labelledby="mobileAbout">

        <ul class="container" role="menu">
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/app/de-de/login">
                  Login                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="ueber-uns.htm">
                  Über uns                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/de-de/careers" target="_blank">
                      Karrieren                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="sicherheit.htm">
                    Sicherheit                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="kunden.htm">
                    Kunden                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="http://status.messagebird.com" target="_blank">
                    Systemstatus                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="kontaktseite.htm">
                    Kontakt                </a>
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
                              Produkte                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu products">
                          
<div class="dropdown-products animated zoomIn" role="menu" aria-labelledby="productMenu">
    <div class="dropdown-content new">
    
<div class="row products-new">
    <div class="col-md-products-5">

        <ul>
            <li>
                <a href="/de-de/sms-gateway" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/sms.svg">
                    </div>
                    <h4>SMS Gateway</h4>
                    <p>Die schnellste und zuverlässigste Messaging-Plattform der Welt</p>
                </a>
            </li>
            <li>
                <a href="text-to-speech.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/voice.svg">
                    </div>
                    <h4>Sprachmitteilungen</h4>
                    <p>Wandeln Sie Text in Sprachnachrichten um mit unserer Plattform</p>
                </a>
            </li>
            <li>
                <a href="/de-de/virtual-mobile-number" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/vmn.svg">
                    </div>
                    <h4>Nummern</h4>
                    <p>Jederzeit erreichbar sein mit länderspezifischen Rufnummern</p>
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
                    <p>Maximale Sicherheit dank OTP-Authentifizierung.</p>
                </a>
            </li>
            <li>
                <a href="chat-api.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/chat.svg">
                    </div>
                    <h4>Chat</h4>
                    <p>Sprechen Sie Ihre Kunden über ihren bevorzugten Chat Kanal an.</p>
                </a>
            </li>
            <li>
                <a href="kurzwahlnummer.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/shortcode.svg">
                    </div>
                    <h4>Kurzwahlnummer</h4>
                    <p>Leicht zu merken – eine Nummer, unter die Ihre Kunden Sie im Nu erreichen</p>
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
                            Für Entwickler                        </span>
                    </a>
                  </li>

                  <li class="">
                    <a class="header-main-link" href="tarife.htm">
                        <span class="link-title">
                            Preise                        </span>
                    </a>
                  </li>

                  <li class="dropdown js-dropdown-toggle ">
                      <a class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Mehr                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          

<ul class="animated zoomIn" role="menu" aria-labelledby="aboutMenu">
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="ueber-uns.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;about&quot;});">
          Über uns        </a>
    </li>

        <li role="presentation">
        <a role="menuitem" tabindex="-1" href="kunden.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;customers&quot;});">
          Kunden        </a>
    </li>
    

    <li role="presentation">
        <a role="menuitem" tabindex="-1" target="_blank" href="http://blog.messagebird.com" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;blog&quot;});">
          Blog        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="/de-de/careers" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;careers&quot;});">
              Karrieren        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="sicherheit.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;security&quot;});">
            Sicherheit        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="http://status.messagebird.com" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;systemStatus&quot;});">
            Systemstatus        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="kontaktseite.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;contact&quot;});">
            Kontakt        </a>
    </li>
</ul>                      </div>
                  </li>

                  <li class="">
                      <a class="header-main-link" href="http://support.messagebird.com/hc/en-us/">
                          <span class="link-title">
                              Hilfe                          </span>
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
        Der Browser, mit dem Sie unsere Webseite besuchen, wird durch unser System nicht mehr aktiv unterstützt. Um unsere Webseite gut sehen und nutzen zu können, <a href="http://browsehappy.com/" target="_blank"> laden Sie sich bitte einen der neuesten Browser herunter.</a>. Alternativ hierzu können Sie uns für offene Fragen jederzeit kontaktieren, per Telefon oder <a href="mailto:support@messagebird.com" target="_blank">via E-Mail</a>.    </div>
    <a href="#" onClick="this.parentNode.style.display = 'none'; return;">Close [x]</a>
</div>
<![endif]-->


<!-- Sticky header -->



<nav class="header-sticky">
    <div class="header-sticky-wrapper">
        <div class="container">

            <div class="header-sticky-cta">
                <a class="btn btn-cta" href="chat-api.htm#try">Jetzt anmelden</a>
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
                        <a class="header-main-link" href="chat-api.htm#try">Preise</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="/de-de/sms-gateway">SMS</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="chat-api.htm">Chat</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="text-to-speech.htm">Voice</a>
                    </li>
                    <li class="dropdown dark sub-products-open ">
                        <a class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <span class="link-title">
                                Weitere Produkte                            </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu mini">
                            <ul class="animated zoomIn sub-products" role="menu" aria-labelledby="productsSticky">
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="kurzwahlnummer.htm">
            Kurzwahlnummer        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="email-to-sms.htm">
            E-Mail to SMS        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="nummern.htm">
            Nummern        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="verify.htm">
            Verify        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="einmalpasswort.htm">
            Einmalpasswort        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="lookup.htm">
            Lookup        </a>
    </li>
</ul>
                        </div>
                    </li>

                    <li class="">
                        <a href="chat-api.htm#try" class="btn btn-cta">Jetzt anmelden</a>
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
                        <h3 class="locale-modal-heading">Wählen Sie Ihr Land aus</h3>
                        <p class="sub">Die Auswahl eines Landes kann die Spracheinstellung verändern und wird ihnen relevanten Inhalt zu ihren Standort.</p>
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
                                    <a href="chat-api.htm">
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
                        <p class="small" style="margin-top: 15px">Wird Ihr Land nicht angezeigt? Schauen Sie in der kompletten Liste unten nach.</p>
                        <select onchange="if (this.value) window.location.href=this.value">
                            <option value="" disabled="" selected="">Wählen Sie Ihr Land aus
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
                            <p class="small">Ist Ihr Land nicht aufgeführt? Sie können unsere Website auch auf Englisch einsehen:</p>
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
                    <p>Wenn Sie Fragen, Vorschläge oder Beschwerden über unsere Versuche zur Lokalisierung haben, <a href="kontaktseite.htm">können Sie uns immer kontaktieren</a>. Wir wollen von Ihnen hören!</p>
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
                        So viele Kanäle - 
eine einzige Chat API                    </h1>

                    <p style="max-width: 580px;margin: 0 auto;margin-bottom: 15px;">Über unsere Chat API erreichen Sie all Ihre Kunden auf einmal. Wir fügen ständig neue Kanäle hinzu. Nutzen Sie, so viele Sie wollen. Es fallen keine zusätzlichen Kosten an.</p>

                    <a href="#try" class="btn btn-cta hover">Jetzt anmelden</a>

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
                            <h4 class="page-section-tag" style="font-size: 12px;">Weibo <span class="chat-channel-soon">Demnächst auch</span></h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/viber-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Viber <span class="chat-channel-soon">Demnächst auch</span></h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/whatsapp-glyph.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">WhatsApp <span class="chat-channel-soon">Demnächst auch</span></h4>
                        </div><div class="chat-channel border-right">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/kakao-talk-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Kakao Talk <span class="chat-channel-soon">Demnächst auch</span></h4>
                        </div><div class="chat-channel">
                            <img class="coming-soon" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/kik-color.svg" alt="">
                            <h4 class="page-section-tag" style="font-size: 12px;">Kik <span class="chat-channel-soon">Demnächst auch</span></h4>
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

									<h4 class="page-section-tag">Rich-Media-Content</h4>
				
									<h3 class="page-section-heading">Werden Sie kreativ</h3>
				
				
				
									<p class="feature-content">Manchmal ist ein Text einfach nicht genug. Binden Sie Bilder, Videos, Sound-Files oder Geo-Standorte in Ihre Nachrichten ein. Machen Sie Ihre Kundenkommunikation zum Erlebnis und bieten Sie den Empfängern einen echten Mehrwert.</p>
				
				
				
				
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
                <h4 class="page-section-tag">Integration</h4>
                <h3 class="page-section-heading">Fangen Sie gleich an</h3>
                <p class="feature-content">Unsere Plattform lässt sich nahtlos an Zendesk anbinden, unseren offiziellen Integrationspartner. In Kürze bieten wir für weitere Systeme Support an. So kann es bei Ihnen gleich losgehen.</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <h4 class="page-section-tag" style="font-size: 12px;">Offizieller Integrationspartner</h4>
                        <div class="chat-int-logo zendesk"><img src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/zendesk-green.svg" alt="Zendesk"></div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <h4 class="page-section-tag" style="font-size: 12px;">Demnächst auch</h4>
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

				<span class="page-section-tag code-example-sub-heading">Für Entwickler</span>
				<h3 class="page-section-heading">Chat API integrieren leicht gemacht</h3>

				<p class="code-example-content lp">Unsere Chat API lässt sich problemlos in Ihr CRM-System, Ihre Website oder Ihre App einbinden. Für Entwickler haben wir alle wichtigen Informationen zusammengestellt, damit Ihre Kundenkommunikation bald noch gewinnbringender ist.  </p>

                
									<a class="page-section-link" href="/de-de/developers" onclick="analytics.track('web:productDocsPressed', {&quot;page&quot;:&quot;chat&quot;});">Zu den Entwickler-Dokumentationen ⇢</a>
				
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

                    <h4 class="page-section-tag">Preise</h4>
                    <h3 class="page-section-heading">Wählen Sie den passenden Tarif aus</h3>
                    <p>Der Preis richtet sich nach der Anzahl der <b>Monatlich Aktiven Nutzer</b>, oder MAN. Für Ihr Unternehmen ist kein passender Tarif dabei? Unser Verkaufsteam <a href="mailto:sales@messagebird.com"> erstellt Ihnen gern ein maßgeschneidertes Angebot. Bitte schreiben Sie uns an!</a></p>
                    <div class="pricing-tiers clearfix">
            <a href="https://dashboard.messagebird.com/app/de-de/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier  free">
                                <img class="pricing-tier-icon" alt="Kostenlos" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/free.png">
                <div class="pricing-tier-name">Kostenlos</div>
                <div class="pricing-tier-price">0 €<div class="pricing-tier-term">monatlich</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Unbegrenzt</b> Nachrichten</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Unbegrenzt</b> Kanäle</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>50</b> MAN</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>10 GiB</b> Speicherplatz</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/de-de/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Jetzt ausprobieren</span>
                    <span class="no-cc">Keine Kreditkarte erforderlich</span>
                            </div>
        </a>
            <a href="https://dashboard.messagebird.com/app/de-de/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier ">
                                <img class="pricing-tier-icon" alt="Start-up" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/startup.png">
                <div class="pricing-tier-name">Start-up</div>
                <div class="pricing-tier-price">49 €<div class="pricing-tier-term">monatlich</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Unbegrenzt</b> Nachrichten</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Unbegrenzt</b> Kanäle</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>5.000</b> MAN</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>500 GiB</b> Speicherplatz</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/de-de/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Tarif auswählen</span>
                            </div>
        </a>
            <a href="https://dashboard.messagebird.com/app/de-de/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier  popular">
                                    <div class="pricing-tier-popular">Am beliebtesten</div>
                                <img class="pricing-tier-icon" alt="Business" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/business.png">
                <div class="pricing-tier-name">Business</div>
                <div class="pricing-tier-price">99 €<div class="pricing-tier-term">monatlich</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Unbegrenzt</b> Nachrichten</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Unbegrenzt</b> Kanäle</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>10.000</b> MAN</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>1 TiB</b> Speicherplatz</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/de-de/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Tarif auswählen</span>
                            </div>
        </a>
            <a href="https://dashboard.messagebird.com/app/de-de/sign-up?redirect=chat-api/get-started">
            <div class="pricing-tier ">
                                <img class="pricing-tier-icon" alt="Grosskunden" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/enterprise.png">
                <div class="pricing-tier-name">Grosskunden</div>
                <div class="pricing-tier-price">599 €<div class="pricing-tier-term">monatlich</div></div>
                <ul class="pricing-tier-features">
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Unbegrenzt</b> Nachrichten</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>Unbegrenzt</b> Kanäle</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>60.000</b> MAN</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><b>5 TiB</b> Speicherplatz</li>
                </ul>
                                    <span href="https://dashboard.messagebird.com/app/de-de/sign-up?redirect=chat-api/get-started" class="btn btn-cta">Tarif auswählen</span>
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
                    <h3 class="page-section-small-heading">Den Vertrieb kontaktieren</h3>

                                            
                    
                        <form class="form-group contact-form" id="contact" method="post" action="/de-de/chat-api#contact-form">
                            <input type="hidden" name="_csrf" value="KSMk-QnB_PQS5m5bDrEYC0tvAfWlKChYl6QNVdeMkUuk6dKkwWq_HSUZVkz8ZrLFdX7loqQk49Nhe_4yaWEIjA==">                            <input type="hidden" name="ContactForm[subject]" value="Sales Inquiry">

                            <div class="text-left ">
                                <label for="ContactForm[name]">Ihr Name</label>
                                <input type="text" value="" name="ContactForm[name]" class="form-control form-group" placeholder="Geben Sie Ihren Namen ein" required="">
                            </div>
                            <div class="text-left ">
                                <label for="ContactForm[email]">Ihre E-Mail-Adresse</label>
                                <input type="email" value="" name="ContactForm[email]" class="form-control form-group" placeholder=" Ihre E-Mail-Adresse" required="">
                            </div>
                            <div class="text-left ">
                                <label for="ContactForm[body]">Ihre Nachricht</label>
                                <textarea name="ContactForm[body]" class="form-control form-group" rows="6" placeholder="Geben Sie Ihre Nachricht ein" required=""></textarea>
                                <button type="submit" class="btn btn-cta hover pull-left">Absenden</button>
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
                        <a class="footer-mobile-link" href="/de-de/sms-gateway">
                            SMS                        </a>
                        <a class="footer-mobile-link" href="text-to-speech.htm">
                            Voice                        </a>
                        <a class="footer-mobile-link" target="_blank" href="http://blog.messagebird.com">
                            Blog                        </a>
                        <a class="footer-mobile-link" href="http://support.messagebird.com/hc/en-us/">
                            Hilfe                        </a>
                    </div>
                    <div class="footer-mobile-col">
                        <a class="footer-mobile-link" href="tarife.htm">
                            Preise                        </a>
                        <a class="footer-mobile-link" href="/app/de-de/sign-up">
                            Anmelden                        </a>
                        <a class="footer-mobile-link" href="/app/de-de/login">
                            Login                        </a>
                        <a class="footer-mobile-link" href="kontaktseite.htm">
                            Kontakt                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <span class="footer-copyright">&copy;2017 MessageBird</span>
                    <a class="footer-link" href="legal\privacy.htm">
                        Datenschutz                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\tos.htm">
                        Bedingungen                    </a>
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
                        Datenschutz                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\tos.htm">
                        Bedingungen                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\sla.htm">
                        SLA
                    </a>
                </div>
                <span class="footer-member-of">Stolzes Mitglied von</span>
                <span class="footer-member-link gsma">
                    <a href="http://www.gsma.com/membership/messagebird/" target="_blank">
                        <img class="footer-big-img" src="https://cdn-gc.messagebird.com/assets/images/logo-gsma.svg" alt="GSMA">
                    </a>
                </span>
            </div>

            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Mehr erfahren                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="ueber-uns.htm">
                                Über uns                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://blog.messagebird.com" target="_blank">
                                Blog                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/de-de/careers" target="_blank">
                                Karriere                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sicherheit.htm">
                                Sicherheit                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="kunden.htm">
                                Kunden                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="tarife.htm">
                                Preise                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="grosskunden.htm">
                                Großkunden                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/de-de/developers">
                                Für Entwickler                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://support.messagebird.com/hc/de/">
                                Support                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://status.messagebird.com" target="_blank">
                                Systemstatus                            </a>
                        </li>
                                    </ul>
            </div>
            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Produkte                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/de-de/sms-gateway">
                                SMS Gateway                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="text-to-speech.htm">
                                Voice                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="chat-api.htm">
                                Chat API                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="nummern.htm">
                                Nummern                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-massenversand.htm">
                                 SMS Massenversand                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="email-to-sms.htm">
                                E-Mail to SMS                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="kurzwahlnummer.htm">
                                Kurzwahlnummer                            </a>
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
                        Sektoren                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="gesundheitswesen.htm">
                                Gesundheitswesen                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="transport.htm">
                                Transport & Logistik                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="einzelhandel.htm">
                                Einzelhandel                            </a>
                        </li>
                    
                    <li class="footer-nav-item footer-coming-soon">
                        Mehr in Kürze!
                    </li>
                </ul>
            </div>
          
            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Anmelden                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/app/de-de/sign-up">
                                Anmelden                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/app/de-de/login">
                                Login                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="kontaktseite.htm">
                                Kontakt                            </a>
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

var cookiemsg = "Wir verwenden Funktionalitäts-, Leistungs- und Werbe-Cookies, um Ihnen die Nutzung von MessageBird so einfach und angenehm wie möglich zu gestalten. Mehr dazu erfahren Sie unter ";
var cookiepolicy = "Cookies.";
var dismissmsg = "Cookies erlauben";
var denymsg = "Cookies verwalten";

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
        "href": "/de-de/privacy#cookies"
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
    window.location.href = "/de-de/privacy#cookies";
};
</script>

<script src="..\assets\js\selectivity-jquery.min.js"></script>