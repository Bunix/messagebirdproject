﻿<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <title>Chat - MessageBird</title>
        <meta name="description" content="Share rich conversations with your customers on the chat platforms they use and love via our omni-channel API.">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="..\assets\images\apple-touch-icon.png">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-16x16.png" sizes="16x16">
        <link rel="mask-icon" href="..\assets\images\pinned.svg" color="#2481D7">

                    <link href="..\assets\images\favicon.ico" rel="shortcut icon" type="image/x-icon">
                <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="vEmwN3hVtlQkgCmgnsW90tqX4_WJzbeyRLZJmTn6eVExg0ZqsP71vRN_EbdsEhcc5IYHoojBfDmyabr-hxfglg==">

        <meta name="apple-mobile-web-app-title" content="MessageBird">
        <meta name="theme-color" content="#e5f0fa">
        <meta name="application-name" content="&nbsp;">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="mstile-144x144.png">

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

        <meta property="og:title" content="Chat">
        <meta property="og:description" content="Share rich conversations with your customers on the chat platforms they use and love via our omni-channel API.">
        <meta property="og:url" content="https://www.messagebird.com/en/chat-api">
        <meta property="og:site_name" content="MessageBird">
        <meta property="og:locale" content="en">

        <!-- Twitter Card -->

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@messagebird">
        <meta name="twitter:title" content="Chat">
        <meta name="twitter:description" content="Share rich conversations with your customers on the chat platforms they use and love via our omni-channel API.">
        

        <script type="text/javascript">window.page = 'chat';</script>

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
    <body class="chat">
        <div class="body-background rd17">

            
            
            <!-- Main header -->
<?php include('header.php') ?>       


<!--[if lte IE 8]>
<div class="upgrade-browser">
    <div class="upgrade-browser-container">
        We no longer actively support the browser you’re using to view our website. To properly view and use our website, <a href="http://browsehappy.com/" target="_blank">please download one of the latest browsers</a>. Alternatively, you can always call or <a href="mailto:support@messagebird.com" target="_blank">email us with questions</a>.    </div>
    <a href="#" onClick="this.parentNode.style.display = 'none'; return;">Close [x]</a>
</div>
<![endif]-->


<!-- Sticky header -->


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
                        <h3 class="locale-modal-heading">Choose your country</h3>
                        <p class="sub">Selecting a country may change the language and will deliver relevant content for your location.</p>
                    </div>

                    <div class="locale-modal-col col-md-offset-1 col-md-6" style="height: 265px;">
                        <ul class="locale-modal-menu clearfix js-locale-modal-menu">
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\nl\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/NL_netherlands.png" alt="Nederland">
                                            Nederland                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-gb\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/UK_unitedKingdom.png" alt="United Kingdom">
                                            United Kingdom                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-us\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/US_unitedStates.png" alt="United States">
                                            United States                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\de-de\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/DE_germany.png" alt="Deutschland">
                                            Deutschland                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\es-es\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/ES_spain.png" alt="España">
                                            España                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\fr-fr\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/FR_france.png" alt="France">
                                            France                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\nl-be\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/BE_belgium.png" alt="België">
                                            België                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-ca\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/CA_canada.png" alt="Canada">
                                            Canada                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-au\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/AU_australia.png" alt="Australia">
                                            Australia                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-nz\chat-api.php">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/ZN_newZealand.png" alt="New Zealand">
                                            New Zealand                                        </span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>

                    <div class="locale-modal-col border-col col-md-4" style="height: 265px;">
                        <p class="small" style="margin-top: 15px">Don't see your country? Check the full list below.</p>
                        <select onchange="if (this.value) window.location.href=this.value">
                            <option value="" disabled="" selected="">Choose your country
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
                            <p class="small">Is your country not listed? You can always view our website in plain english:</p>
                            <div class="clearfix">
                                <div class="locale-modal-menu-item locale-modal-center">
                                    <a href="chat-api.php">
                                        <span><img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/UK_unitedKingdom.png" alt="English">English</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="locale-modal-footer">
                    <p>If you have any questions, suggestions or complaints concerning our localisation efforts, <a href="contact.php">you can always contact us</a>. We'd love to hear from you!</p>
                </div>

            </div>
        </div>
    </div>
</div>

                        <div class="body-content" id="panel">

                                  <div class="visible-xs" style="z-index: 2;position: fixed;margin-top: -105px;">
                    <i class="fa fa-bars js-slideout-toggle slideout-toggle" aria-hidden="true"></i>
                    <a href="..\index.php"><img height="25" src="https://cdn-gc.messagebird.com/assets/images/glyph.svg" alt="MessageBird"></a>
                  </div>
                
                




<div class="chat new">

    <section class="hero page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h1 class="mb-page-title">Chat</h1>
                    <div class="lp">
                        Reach your customers on the chat platforms they know and love with our omni-channel API.                    </div>

                    <div class="chat-channels-hero">
                        <div class="chat-channel">
                            <div class="chat-channel-container">
                                <img src="..\assets\images\chat-gateway\facebook-messenger.svg" alt="">
                            </div>
                            <h4 class="page-section-tag">Messenger</h4>
                        </div>
                        <div class="chat-channel">
                            <div class="chat-channel-container">
                                <img src="..\assets\images\chat-gateway\wechat-glyph.svg" alt="">
                            </div>
                            <h4 class="page-section-tag">WeChat</h4>
                        </div>
                        <div class="chat-channel">
                            <div class="chat-channel-container">
                                <img src="..\assets\images\chat-gateway\telegram-glyph.svg" alt="">
                            </div>
                            <h4 class="page-section-tag">Telegram</h4>
                        </div>
                        <div class="chat-channel">
                            <div class="chat-channel-container">
                                <img src="..\assets\images\chat-gateway\line.svg" alt="">
                            </div>
                            <h4 class="page-section-tag">LINE</h4>
                        </div>
                    </div>

                    <div class="lp">
                        Engage in rich, in-depth conversations to provide support, share information, and better understand your customers.                    </div>

                    <div class="page-section-btn-container">

                        <form id="index-signup" class="start" novalidate="true" action="../dashboard.messagebird/app/en/sign-up.php" method="GET">
                            <span class="cta-form-input"><input name="email" class="js-fp-email-signup" type="email" required="true" placeholder="Enter your work email" required=""></span>
                            <span class="cta-form-btn"><button class="btn btn-cta" type="submit">Get started</button></span>

                            <div class="hero-sub-cta sp">Looking for a custom plan? <a href="contact-sales.php" class="page-section-link" style="margin-left: 5px;">Contact sales ⇢</a></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <div class="grid-list">
                        <ul>
                            <li style="opacity: 0;"></li>
                            <li style="opacity: .5;">
                                <div class="device-ui-messages">
                                </div>
                            </li>
                            <li style="opacity: .3;">
                                <div class="device-ui-messages">
                                </div>
                            </li>
                            <li style="opacity: 0;"></li>
                            <li style="margin-left: -45px;">
                                <div class="device-ui-messages">
                                    <div class="message left">Could you describe the sound your appliance is making?</div>
                                    <div class="message audio right">
                                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                        <div class="message-audio-progress"></div>
                                    </div>
                                </div>
                            </li>
                            <li style="opacity: .5;">
                                <div class="device-ui-messages">
                                    <div class="message right">Top, thanks! 👍</div>
                                </div>
                            </li>
                            <li>
                                <div class="device-ui-messages">
                                    <div class="message map left"></div>
                                    <div class="message right">Got it! Your driver will arrive in 8min.</div>
                                </div>
                            </li>
                            <li>
                                <div class="device-ui-messages">
                                    <div class="message right">What kind of food should I order?</div>
                                    <div class="message image left"></div>
                                </div>
                            </li>
                            <li>
                                <div class="device-ui-messages">
                                    <div class="message left">Tomorrow is Mother’s Day! Make mom’s day with a beautiful bouquet. Some of our favorites: Peonies Blush - €40.00 <a>flowe.rs/buy</a></div>
                                </div>
                            </li>
                            <li style="margin-left: 80px;">
                                <div class="device-ui-messages">
                                    <div class="message left">Thanks! Could you tell us what you think of our new app design?</div>
                                    <div class="message right">Sure, I see less pop-ups and the buttons are easier to click 🙌</div>
                                </div>
                            </li>
                            <li>
                                <div class="device-ui-messages">
                                    <div class="message video right">
                                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="message left">Thanks for your submission! 👍</div>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>

        <div class="skewed-stripe-background"></div>
    </section>

    <section class="page-section use-cases">

        <div class="container">
            <div class="row">
               <header class="text-center">
                    <h4 class="page-section-tag">Use Cases</h4>
                    <h2 class="page-section-heading">Grow, automate, and scale with Chat</h2>
                </header>

                <div class="col-md-8">
                    <div class="row flex">

                        <div class="pane">
                            <h4 class="features-label">Customer Support</h4>
                            <p class="benefits-copy sp">Converse at length with your customers to provide comprehensive support and resolve issues of any complexity.</p>
                        </div>

                        <div class="pane">
                            <h4 class="features-label">Feedback</h4>
                            <p class="benefits-copy sp">Gain insights into customer preferences, habits, and opinions by enabling them to share detailed feedback.</p>
                        </div>

                        <div class="pane">
                            <h4 class="features-label">Notifications</h4>
                            <p class="benefits-copy sp">Automatically or manually share rich updates, alerts, and reminders with your customers to keep them engaged.</p>
                        </div>

                        <div class="pane">
                            <h4 class="features-label">Marketing Campaigns</h4>
                            <p class="benefits-copy sp">Use rich media to make the most out of your marketing efforts, with images, videos, audio, buttons and more.</p>
                        </div>

                    </div>
                </div>

                <div class="pane col-md-4" style="margin: 0 auto; max-width: 300px;">
                    <img class="support-img" src="https://cdn-gc.messagebird.com/assets/images/2017/support.png" srcset="https://cdn-gc.messagebird.com/assets/images/2017/support@2x.png 2x" width="300">
                </div>

            </div>
        </div>

    </section>

    
<section class="page-section" id="pdf">
    <div class="container">
        <header class="pane col-md-12 text-center">
            <h4 class="page-section-tag">Multichannel Chat, solved</h4>
            <h2 class="page-section-heading">Why use MessageBird Chat</h2>
        </header>
        <div class="row">

            <div class="col-md-7 pane">

                <div class="read-more-container js-read-more-container">

                    
        <p class="lp">Getting to know your customers is the key to creating an experience that will keep them engaged and satisfied. But finding the right channel to converse at length can be a bit tricky - until now. With the MessageBird Chat API, you can reach customers on the chat platforms they already use and love to make the most out of your interactions.</p><h4 class="features-label">Rich Media Support</h4><p class="lp">With video-, audio-, image-, and location-sharing capacity, you can bring a whole new dimension of communication to your customer conversations. Whether you’re releasing a new feature based on location-sharing or improving support processes with photo and video capabilities, rich media is a great tool for enhancing your customer experience.</p><h4 class="features-label">Omnichannel API</h4><p class="lp">When it comes to implementing Chat into your communication infrastructure, we’ve made things as simple as can be. To save you time and loads of work, we’ve created an omnichannel API which allows you to communicate through any and all of our offered channels simultaneously. After a quick and painless setup process to add your new channels, you’ll be able to send and receive messages uniformly, no interface-switching or reformatting necessary.</p>
                    <div class="read-more-button-container js-read-more-button-container">
                        <a href="#" class="btn btn-cta js-read-more">Read more</a>
                    </div>
                </div>

            </div>

            <div class="col-md-5">
                <div style="margin: 0 auto; max-width: 300px;">
                    <img class="support-img" src="https://cdn-gc.messagebird.com/assets/images/2017/about.png" srcset="https://cdn-gc.messagebird.com/assets/images/2017/about@2x.png 2x" width="300" style="margin-bottom: 30px;">

                    
<div class="document-download">
	<a href="#" data-toggle="modal" data-target="#chat-whitepaper" onclick="analytics.track('web:productWhitepaperPressed', {&quot;page&quot;:&quot;chat&quot;,&quot;tab&quot;:&quot;&quot;});">
		<div class="document-download-con">
			<div class="document-download-icon" style="background-image: url('https://cdn-gc.messagebird.com/assets/images/2017/pdf-demo.png')"></div>
			<div class="document-download-icon second"></div>
			<div class="document-download-icon third"></div>
			<div class="document-download-desc">
				<span class="page-section-link">Get Chat PDF ⇢</span>
				<p class="sp">And share it with your team</p>
			</div>
		</div>
	</a>
</div>

<div class="rd17 pdf-modal modal fade" id="chat-whitepaper" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body lp">

				<img class="header-logo-glyph" style="display:block!important;margin: 0 auto;" src="https://cdn-gc.messagebird.com/assets/images/glyph-white.svg" alt="MessageBird" height="20">

				<div class="row">
					<div class="col-md-7">

						<h1 class="mb-page-title">Get the Chat API Overview</h1>
<p class="lp">Find out more about what MessageBird’s Chat API can do for your business. Enter your email below and we’ll send a PDF directly to your inbox.</p>

<form class="download-pdf">
  <div class="form-group">
      <div class="input-group">
          <input type="hidden" name="fname" id="fname">
          <input type="hidden" name="lname" id="lname">
          <input type="hidden" name="type" value="chat-pdf">
          <input class="form-control required email" type="email" name="email" id="email" placeholder="Enter your work email">
          <div class="input-group-addon" style="padding: 0;border: 0;">
              <input type="submit" id="SendButton" name="submit" value="Submit" class="button btn btn-cta" style="margin: 0;">
          </div>
      </div>
  </div>
</form>

						<p class="sp result-chat-whitepaper">

						<p class="sp">We also have resources available for <a href="pricing.php#pdf">Pricing</a>, <a href="sms.php#pdf">SMS</a>, <a href="voice.php#pdf">Voice</a>, <a href="verify.php#pdf">Verify</a>, <a href="lookup.php#pdf">Lookup</a>, <a href="numbers.php#pdf">Numbers</a> and <a href="numbers.php#pdf">Short Code</a>.</p>

		            </div>
		            <div class="col-md-5">
		            	<!-- <img class="whitepaper" src="/assets/images/illustrations/paper-wireframe.svg" width="100%" /> -->

		            	<h1 class="mb-page-title" style="text-align: right;margin-top: 37px;">
		            		<button type="button" class="mb-button close" data-dismiss="modal" aria-label="Close">
								<img src="..\assets\assets-images\icons\500\16pt18box\mb-cross.svg">
								close
							</button>
						</h1>

						<div style="background: #2c3645;padding: 25px;border-radius: 5px;">
			            	<p class="sp">Our communications solutions are trusted by over 15,000 customers. Join them!</p>

							<div class="modal-customer-logos">
								<div class="customers-logo-con uber" style="width: 70px; height: auto;">
				                    <svg viewbox="0 0 292 61" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Group" fill="#ffffff">
            <path d="M45.9,1.471 L45.9,35.053 C45.9,46.267 40.936,50.924 29.293,50.924 C17.649,50.924 12.685,46.267 12.685,35.053 L12.685,0 L1.471,0 C0.491,0 0,0.491 0,1.471 L0,35.604 C0,54.357 11.95,60.914 29.293,60.914 C46.635,60.914 58.585,54.357 58.585,35.604 L58.585,0 L47.37,0 C46.39,0 45.9,0.491 45.9,1.471" id="Fill-1"></path>
            <path d="M208.469,9.744 C209.388,9.744 209.817,9.438 210.123,8.763 L213.372,0.735 C213.556,0.246 213.372,0 212.881,0 L167.717,0 C163.488,0 161.896,1.287 161.896,4.167 L161.896,56.317 C161.896,58.769 163.12,59.872 166.369,59.872 L208.469,59.872 C209.388,59.872 209.817,59.565 210.123,58.892 L213.372,50.863 C213.556,50.373 213.372,50.128 212.881,50.128 L174.336,50.128 L174.336,39.526 C174.336,35.849 176.358,34.194 181.811,34.194 L198.542,34.194 C199.461,34.194 199.889,33.889 200.196,33.215 L203.322,25.493 C203.505,25.002 203.322,24.758 202.831,24.758 L174.336,24.758 L174.336,9.744 L208.469,9.744" id="Fill-2"></path>
            <path d="M117.196,50.251 L95.067,50.251 L95.067,39.281 C95.067,35.604 97.089,33.95 102.544,33.95 L117.196,33.95 C124.243,33.95 126.204,36.646 126.204,42.162 C126.204,47.677 124.243,50.251 117.196,50.251 Z M95.067,9.621 L114.867,9.621 C121.485,9.621 123.324,12.114 123.324,17.281 C123.324,22.449 121.485,24.942 114.867,24.942 L95.067,24.942 L95.067,9.621 Z M128.962,28.312 C133.864,25.738 135.886,20.897 135.886,15.198 C135.886,1.961 125.101,0 113.948,0 L88.455,0 C84.226,0 82.634,1.287 82.634,4.167 L82.634,56.317 C82.634,58.769 83.859,59.872 87.107,59.872 L118.483,59.872 C130.31,59.872 138.766,55.276 138.766,43.326 C138.766,36.156 135.702,30.089 128.962,28.312 L128.962,28.312 Z" id="Fill-3"></path>
            <path d="M268.246,27.76 L247.41,27.76 L247.41,9.622 L268.246,9.622 C276.028,9.622 277.744,12.624 277.744,18.691 C277.744,24.819 276.028,27.76 268.246,27.76 Z M291.655,58.83 L278.235,35.788 C284.914,34.073 290.307,29.661 290.307,18.446 C290.307,3.923 281.298,0 266.407,0 L240.792,0 C236.564,0 234.97,1.287 234.97,4.167 L234.97,58.401 C234.97,59.381 235.461,59.872 236.441,59.872 L247.41,59.872 L247.41,42.407 C247.41,38.73 249.432,37.075 254.887,37.075 L265.917,37.075 L278.05,58.892 C278.418,59.504 278.786,59.872 279.705,59.872 L291.104,59.872 C291.901,59.872 291.901,59.197 291.655,58.83 L291.655,58.83 Z" id="Fill-4"></path>
        </g>
    </g>
</svg>				                </div>
				                <div class="customers-logo-con doordash" style="width: 135px; height: auto;">
				                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 178.5 17.6" style="enable-background:new 0 0 178.5 17.6;" xml:space="preserve">
<path fill="#ffffff" d="M1.2,1.3l1.2,1.2l9.4,0c8.5,0,9.4,0,9.8,0.1c1.7,0.4,3,1.3,3.9,2.7c0.4,0.6,0.7,1.2,0.9,1.9
	c0.1,0.5,0.2,0.7,0.2,1.6s0,1.1-0.2,1.6c-0.3,1.1-0.8,2-1.6,2.8C24,14,23,14.6,21.8,14.9L21.2,15l-3.1,0l-3.1,0l1.2,1.2l1.2,1.2l2,0
	c2.2,0,2.5-0.1,3.6-0.4c3-1,5.2-3.5,5.9-6.6c0.2-0.7,0.2-2.7,0-3.4c-0.7-3.1-2.8-5.5-5.7-6.6c-0.3-0.1-0.8-0.2-1.1-0.3L21.5,0
	L10.7,0L0,0L1.2,1.3z M6.3,6.3l1.2,1.2h8.2H24l0-0.1c-0.1-0.4-0.4-0.8-0.8-1.2c-0.6-0.6-1-0.8-1.7-1C21,5,20.7,5,13,5H5L6.3,6.3z
	 M11.3,11.3l1.2,1.2h4.2c4.6,0,4.7,0,5.5-0.4c0.7-0.4,1.6-1.3,1.8-1.9l0-0.1h-7h-7L11.3,11.3z M28.2,0.8c0.4,0.4,0.9,1,1.1,1.2
	l0.3,0.5l1.7,0c1.6,0,1.8,0,2.3,0.2c1.1,0.3,2,0.8,2.8,1.5c0.6,0.5,1,1,1.3,1.7c1.1,2.1,0.9,4.4-0.4,6.4c-0.3,0.5-1.1,1.3-1.6,1.6
	c-0.6,0.4-1.3,0.8-2.1,0.9C33.2,15,33,15,31.4,15.1l-1.7,0l-0.3,0.5c-0.2,0.3-0.7,0.8-1.1,1.2l-0.8,0.8l3,0c2.8,0,3,0,3.6-0.2
	c3.5-0.8,6.1-3.3,6.8-6.8C40.9,10,41,9.7,41,8.7c0-1,0-1.2-0.2-1.8c-0.4-1.8-1.2-3.1-2.4-4.3c-1.2-1.2-2.7-2-4.4-2.4
	C33.4,0.1,33.2,0,30.4,0l-3,0L28.2,0.8z M31,5.3c0.1,0.4,0.3,0.9,0.4,1.6l0.1,0.6l2.4,0c1.3,0,2.4,0,2.4,0S36.2,7.2,36.1,7
	c-0.3-0.6-1-1.3-1.6-1.6C33.8,5.1,33.4,5,32.1,5H31L31,5.3z M31.5,10.1c0,0,0,0.1,0,0.2c0,0.2-0.2,1.3-0.4,1.8L31,12.5l1.3,0
	c1.2,0,1.3,0,1.8-0.2c0.9-0.3,1.7-1,2.1-1.8c0.1-0.2,0.2-0.4,0.2-0.4C36.3,10,31.6,10,31.5,10.1z M57.5,8.8v6.3l2.7,0
	c2.5,0,2.8,0,3.3-0.2c2.2-0.5,3.7-1.6,4.6-3.4c0.4-0.7,0.5-1.4,0.6-2.4c0.2-3.2-1.5-5.6-4.5-6.4c-0.8-0.2-1.5-0.2-4.2-0.2h-2.6V8.8z
	 M63.5,4.8c1.6,0.4,2.5,1.4,2.8,2.8c0.1,0.6,0.1,1.8,0,2.4c-0.3,1-0.9,1.9-1.8,2.3c-1,0.5-1.8,0.7-3.5,0.7h-1.2V8.8V4.6l1.6,0
	C62.8,4.6,63.1,4.6,63.5,4.8z M78.4,2.3c-0.8,0.1-1.3,0.3-2,0.6c-1.7,0.8-2.9,2.4-3.3,4.5c-0.1,0.7-0.1,2.1,0,2.8
	c0.5,2.6,2.3,4.4,5,5c0.6,0.1,2.1,0.2,2.8,0c3.4-0.6,5.5-3.3,5.4-6.9c-0.2-3.8-2.8-6.2-6.7-6.1C79.3,2.2,78.7,2.3,78.4,2.3z
	 M80.8,4.4c1.2,0.3,2.2,1.1,2.7,2.3c0.3,0.7,0.4,1.3,0.4,2.3c0,1-0.1,1.3-0.5,2.1c-0.5,1.1-1.5,1.8-2.6,2.1c-1,0.2-2.3,0.1-3.1-0.3
	c-1.6-0.8-2.4-2.4-2.3-4.4c0-0.8,0.1-1.3,0.5-1.9c0.6-1.3,1.8-2.1,3.3-2.3C79.5,4.2,80.3,4.3,80.8,4.4z M96.3,2.3
	c-2.8,0.3-4.9,2.1-5.5,4.7c-0.8,3.4,0.6,6.6,3.6,7.9c1.9,0.8,4.1,0.7,6-0.2c0.8-0.4,1.5-0.9,2.1-1.6c2.1-2.6,1.9-6.8-0.4-9
	c-0.9-0.9-2.3-1.5-3.7-1.7C97.7,2.2,96.7,2.2,96.3,2.3z M98.3,4.4c1.4,0.3,2.5,1.4,3,2.9c0.1,0.4,0.1,0.6,0.1,1.4c0,0.8,0,1-0.1,1.4
	c-0.4,1.5-1.5,2.6-3,3c-0.6,0.2-1.6,0.2-2.3,0c-1.4-0.4-2.6-1.5-3-3.1c-0.1-0.5-0.2-1.7-0.1-2.3C93.4,5.3,95.7,3.8,98.3,4.4z
	 M108.7,2.6c0,0,0,2.9,0,6.2l0,6.2l1.1,0l1.1,0v-2.7V9.7h0.8h0.8l1.5,2.6l1.4,2.6l1.3,0c0.8,0,1.3,0,1.3,0c0,0-0.7-1.3-1.6-2.8
	l-1.6-2.7l0.4-0.1c1.2-0.3,2.1-1.1,2.4-2.4c0.1-0.5,0.1-1.6-0.1-2.1c-0.4-1.2-1.3-2-3-2.3C113.8,2.5,108.7,2.5,108.7,2.6z
	 M114.2,4.6c0.4,0.1,0.8,0.4,0.9,0.7c0.2,0.3,0.2,1,0.1,1.4c-0.1,0.4-0.5,0.8-1,0.9c-0.4,0.1-1.3,0.2-2.4,0.2h-1V6.2V4.5l1.5,0
	C113.6,4.5,114,4.5,114.2,4.6z M123.7,8.8V15h2.3c1.3,0,2.6,0,2.9-0.1c1.7-0.2,3.1-0.8,4.1-1.8c0.6-0.5,0.9-1,1.3-1.7
	c0.8-1.5,0.8-3.9,0-5.6c-0.9-1.9-2.6-3.1-5-3.3c-0.3,0-1.7-0.1-3.1-0.1h-2.5V8.8z M129.6,4.8c1.2,0.3,2,0.9,2.4,1.8
	c0.3,0.6,0.4,1.1,0.5,1.9c0.1,1.4-0.2,2.3-1.1,3.2c-0.6,0.6-1.2,0.9-2.1,1.1c-0.6,0.1-0.7,0.2-2.1,0.2l-1.5,0V8.8V4.6l1.7,0
	C128.9,4.6,129.2,4.6,129.6,4.8z M143.9,2.6c-0.1,0.1-5.3,12.2-5.3,12.3l0,0.1l1.2,0l1.2,0l0.6-1.4l0.6-1.4h2.7h2.7l0.6,1.4
	c0.3,0.8,0.6,1.4,0.6,1.4c0,0.1,0.4,0.1,1.3,0.1c0.7,0,1.2,0,1.2,0c0,0-5.2-12.1-5.3-12.3l-0.1-0.2h-0.9
	C144.3,2.5,143.9,2.6,143.9,2.6z M145.8,7.8c0.5,1.3,0.9,2.4,0.9,2.4s-0.9,0-1.9,0c-1.2,0-1.9,0-1.9-0.1c0,0,0.4-1.2,0.9-2.5
	c0.7-1.7,1-2.4,1-2.4C144.8,5.4,145.3,6.5,145.8,7.8z M158.6,2.3c-0.6,0.1-1.1,0.2-1.7,0.5c-0.4,0.2-0.7,0.4-1,0.7
	c-0.7,0.7-1,1.4-1,2.5c0,1.1,0.3,1.7,1,2.4c0.5,0.5,1.1,0.8,2.4,1.2c1.5,0.5,2.2,0.9,2.4,1.3c0.1,0.3,0.2,0.9,0.1,1.2
	c-0.1,0.3-0.5,0.7-0.8,0.9c-0.4,0.2-0.7,0.3-1.3,0.3c-0.9,0-1.6-0.3-2.1-0.9l-0.3-0.3l-0.8,0.8l-0.8,0.8l0.3,0.3
	c0.6,0.6,1.3,1,2.4,1.3c0.8,0.2,2.1,0.2,2.9,0c1.6-0.4,2.6-1.3,2.9-2.7c0.1-0.3,0.1-0.6,0.1-1.1c0-1.1-0.3-1.7-1-2.4
	c-0.5-0.5-1.1-0.8-2.4-1.2c-1.6-0.5-2.1-0.8-2.3-1.3c-0.3-0.7,0-1.6,0.8-1.9c1-0.4,2.3-0.2,3,0.4l0.3,0.3l0.8-0.8
	c0.4-0.4,0.8-0.8,0.8-0.9c0-0.1-0.5-0.5-0.9-0.7C161.3,2.3,159.8,2.1,158.6,2.3z M168.3,2.6c0,0,0,2.9,0,6.2l0,6.2l1.1,0l1.1,0v-2.8
	V9.5h2.9h2.9l0,2.7l0,2.7l1.1,0l1.1,0V8.8V2.5l-1.1,0l-1.1,0l0,2.5l0,2.5h-2.9h-2.9V5V2.5h-1.1C168.6,2.5,168.3,2.5,168.3,2.6z"></path>
</svg>
				                </div>
				                <div class="customers-logo-con telegram" style="width: 100px; height: auto; margin-top: 20px;">
				                    <svg version="1.1" id="svg2" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1163 237.7" style="enable-background:new 0 0 1163 237.7;" xml:space="preserve">
<g id="layer1" transform="translate(-205.2332,-320.1596)">
	<g id="g4360" transform="matrix(3.543307,0,0,3.543307,-3.5917343,-49.604326)">
		<g id="Camada_x0020_1">
			<polygon id="polygon2993_1_" style="fill:#ffffff;" points="175.9,149.6 175.9,164.3 167.9,164.3 167.9,129 175.9,129
				175.9,143.3 193.8,143.3 193.8,129 201.8,129 201.8,164.3 193.8,164.3 193.8,149.6 			"></polygon>
			<path id="path2995_1_" style="fill:#ffffff;" d="M216.4,150.2c0,6.2,2,8.8,8.6,8.8c6.7,0,8.6-2.6,8.6-8.8V129h8v21.3
				c0,4.5-0.5,7.6-2.3,9.5c-3.1,3.4-7.7,4.9-14.4,4.9c-6.6,0-11.3-1.4-14.4-4.9c-1.8-1.9-2.2-5-2.2-9.5V129h8L216.4,150.2
				L216.4,150.2z"></path>
			<path id="path2997_1_" style="fill:#ffffff;" d="M267.9,129l16.3,35.3h-8.9l-3.5-8.4h-16.6l-3.4,8.4h-8.5l16.1-35.3H267.9
				L267.9,129z M257.7,149.6h11.4l-5.8-13.6L257.7,149.6z"></path>
			<polygon id="polygon2999_1_" style="fill:#ffffff;" points="326.8,164.3 317,164.3 308.8,138 301.7,164.3 291.9,164.3 279.2,129
				287.8,129 296.7,156.2 304.1,129 313.6,129 322.2,156.2 330.4,129 338.6,129 			"></polygon>
			<path id="path3001_1_" style="fill:#ffffff;" d="M349.5,143.4h22.2v6.1h-22.3c0.1,6.4,2.8,8.7,9.1,8.7h13.2v6.1h-13.6
				c-4.6,0-8.2-0.3-11.9-3.1c-3.9-2.9-5.8-7.5-5.8-13.9c0-12.5,5.7-18.3,18-18.3h13.4v6.1h-13.2
				C352.7,135.2,349.8,137.8,349.5,143.4L349.5,143.4z"></path>
			<polygon id="polygon3003_1_" style="fill:#ffffff;" points="378.8,129 378.8,164.3 387.2,164.3 387.2,129 			"></polygon>
		</g>
	</g>
</g>
<path style="fill:#ffffff;" d="M129.4,209.2c0,0,0.1,0.1,0,0.3c0,0,0,0,0,0.1v0c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1
	c-0.1,0.2-0.2,0.3-0.4,0.5v0h0l-0.1,0.1l0,0l-0.7,0.5c0,0,0,0,0,0l-0.8,0.6l-0.8,0.6l-0.8,0.5c0,0-0.1,0-0.1,0v0h0l-0.8,0.6
	l-0.8,0.6l-0.8,0.6l-0.8,0.6l-0.8,0.6l-0.8,0.6l-0.8,0.6l-0.8,0.6v0h0l-0.8,0.6l-0.4,0.2c-0.2,0.1-0.3,0.2-0.5,0.3v0h0l-0.8,0.6
	l-0.8,0.6l-0.2,0.1c-0.2,0.1-0.4,0.3-0.6,0.4v0h0l-0.8,0.6h0l-0.8,0.6l-0.8,0.6l-0.8,0.5l-0.8,0.6l-0.9,0.5v0h0l-0.8,0.5h0l-0.8,0.5
	l-1.7,1.1h0l-0.9,0.5c-0.3,0.2-0.6,0.4-0.9,0.5c-0.3,0.2-0.6,0.4-0.9,0.5c-0.3,0.2-0.6,0.3-0.8,0.5l-0.9,0.5l-0.9,0.5l-0.9,0.5l0,0
	l-0.9,0.5l-0.5,0.3c-0.1,0.1-0.3,0.2-0.4,0.2v0h0l-0.9,0.5l-0.9,0.5l-0.9,0.5c-0.3,0.2-0.6,0.3-0.9,0.5c-6.6,3.8-12.8,6.8-17.1,7.9
	c-18.4,4.5-36.1-10.1-46.6-28.8l30.8-1.1l1.3,0l1.3,0h0l1.4,0l1.3,0h0.1l1.4,0l1.4,0h0l1.4,0l1,0l0.4,0h0l1.2,0l0.2,0l1.4,0h0l1.4,0
	l1.4-0.1l1.5,0l1.5,0h0l2.9-0.1l1.5-0.1l1.5-0.1h0l1.5,0l1.5,0l1.5-0.1h0l1.5,0l1.6,0l1.5-0.1l1.6-0.1l1.6-0.1l1.6-0.1h0l1.6,0
	l3.4-0.1l1.7-0.1l1.8-0.1h0l1.7-0.1h0l0.2,0l1.6,0l1.8-0.1h0l1.8-0.1h0l1.8-0.1l1.9-0.1h0l1.9-0.1h0l1.9-0.1l2-0.1h0l1.6,0v0
	C128.1,208.4,129.1,208.4,129.4,209.2z"></path>
<path style="fill:#ffffff;" d="M130.9,200.1C130.9,200.1,130.9,200.1,130.9,200.1c0,0.1,0,0.2,0,0.2c0,0.1-0.1,0.2-0.1,0.2
	c0,0,0,0-0.1,0.1c0,0.1-0.1,0.1-0.2,0.2c-0.2,0.2-0.4,0.3-0.7,0.3h-0.7c-1.2,0-2.7,0-4.3,0H124c-1.4,0-2.9,0-4.5,0h-0.9
	c-2.1,0-4.4,0-6.9,0h-0.8c-2.9,0-5.9,0-8.9,0c-0.9,0-1.9,0-2.8,0h-0.6c-1.1,0-2.2,0-3.3,0c-3.2,0-6.5,0-9.6,0h-4.6c-1,0-2,0-3,0
	h-5.9c-0.5,0-1,0-1.5,0c-0.3,0-0.6,0-1,0h-0.5c-0.5,0-0.9,0-1.3,0h-1.5c-0.5,0-1,0-1.4,0c-0.3,0-0.6,0-1,0h-0.5l-1.4,0l-1.4,0
	c-0.5,0-1,0-1.4,0h0c-0.4,0-0.8,0-1.1,0c-0.1,0-0.2,0-0.3,0v0l0,0c-0.5,0-0.8,0-0.9,0c0,0-0.1,0-0.3,0c-0.1,0-0.1,0-0.2,0h-0.1
	c-0.1,0-0.1,0-0.2,0c-0.3,0-0.7-0.1-1.2-0.1h0c-0.4,0-0.9-0.1-1.5-0.2c0,0-0.1,0-0.1,0c-0.2,0-0.4,0-0.6-0.1c-0.1,0-0.2,0-0.2,0
	c-0.2,0-0.4-0.1-0.6-0.1c-0.2,0-0.5-0.1-0.7-0.1c-0.2,0-0.4-0.1-0.7-0.1c-0.1,0-0.2,0-0.3,0h0c-0.5-0.1-1.1-0.2-1.6-0.3
	c-0.3-0.1-0.5-0.1-0.8-0.2c-0.3-0.1-0.6-0.1-0.9-0.2c-2.6-0.6-5.5-1.5-8.5-2.7c0,0-20.1-6.7-30.6-29c0,0-5.6-10.3-5.4-25.2
	c0-0.6,0-1.2,0.1-1.7c0-0.6,0.1-1.1,0.1-1.7c0-0.1,0-0.1,0-0.2c0-0.4,0.1-0.8,0.1-1.2c0-0.1,0-0.2,0-0.2v0c0-0.1,0-0.2,0-0.4
	c0-0.4,0.1-0.8,0.2-1.2c0.1-0.5,0.1-1,0.2-1.5c0.1-0.5,0.2-1,0.3-1.5c0-0.2,0.1-0.5,0.1-0.7c0-0.2,0.1-0.5,0.2-0.7c0,0,0-0.1,0-0.1
	c0.2-0.9,0.4-1.7,0.6-2.6c0.1-0.4,0.2-0.9,0.4-1.3c0.1-0.5,0.3-1,0.5-1.5c0-0.1,0-0.2,0.1-0.2c0,0,0.2,0.1,0.5,0.2l0.4,0.2v0
	c0,0,0.1,0,0.1,0.1l0.2,0.1c0.3,0.1,0.6,0.3,0.9,0.5c0,0,0.1,0,0.1,0c0.2,0.1,0.4,0.2,0.7,0.3l0.7,0.4v0c0,0,0.1,0,0.1,0.1l1.2,0.7
	v0c0.1,0,0.1,0.1,0.2,0.1c0.4,0.2,0.8,0.4,1.2,0.6c0.2,0.1,0.3,0.2,0.5,0.2l0.9,0.5l1.4,0.8v0c0.1,0,0.1,0.1,0.2,0.1
	c0.4,0.2,0.8,0.4,1.2,0.7c0.3,0.2,0.6,0.3,0.9,0.5l0.5,0.3l1,0.5c0.2,0.1,0.3,0.2,0.5,0.2c0.4,0.2,0.7,0.4,1.1,0.6l0.3,0.2l1.3,0.7
	c0,0,0.1,0,0.1,0.1v0h0c0.5,0.3,1,0.5,1.5,0.8l1,0.6c0.2,0.1,0.3,0.2,0.5,0.3c0.4,0.2,0.9,0.5,1.3,0.7l0.2,0.1l1.5,0.8l1.6,0.9
	c0,0,0,0,0,0l1.6,0.9v0c0.3,0.2,0.6,0.3,0.9,0.5l0.6,0.4v0c0,0,0,0,0,0l1.6,0.9l0.8,0.5c0.3,0.2,0.6,0.3,0.9,0.5
	c0.4,0.2,0.9,0.5,1.3,0.7l0.4,0.2c0.6,0.3,1.2,0.7,1.7,1l0,0l1.7,1v0h0c0.1,0.1,0.3,0.2,0.4,0.2l1.4,0.8c0,0,0,0,0,0l1.1,0.6
	c0.2,0.1,0.5,0.3,0.8,0.4l1.9,1c0,0,0,0,0,0l1.9,1.1l2,1.1l2,1.1l2.1,1.2l2.2,1.2l2.2,1.3l0,0L61,157l0,0l2.4,1.4l2.6,1.5
	c0,0,0,0,0,0l2.6,1.5l2.8,1.6l0,0l3.1,1.8l0,0c1.1,0.6,2.2,1.3,3.3,1.9c1.2,0.7,2.5,1.4,3.7,2.2l0,0c1.4,0.8,2.8,1.6,4.2,2.5
	c0,0,0,0,0,0c1.7,1,3.4,2,5,3c2.5,1.5,4.9,2.9,7.3,4.4c0,0,0,0,0,0c1.2,0.7,2.3,1.4,3.5,2.1c1.1,0.7,2.1,1.3,3.2,1.9
	c1.1,0.7,2.1,1.3,3.2,2c1.6,1,3.2,2,4.8,3c1.8,1.1,3.5,2.2,5.1,3.2c0,0,0,0,0,0c2.4,1.5,4.7,3,6.9,4.5c0.8,0.5,1.6,1,2.4,1.6
	c0.8,0.5,1.5,1,2.3,1.5c0,0,0,0,0,0l0.8,0.6l0,0C130.4,199.1,131,199.5,130.9,200.1z"></path>
<path style="fill:#ffffff;" d="M138.6,187.8c0.2,0.4,0.1,0.7,0,0.9c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.2c0,0,0,0,0,0
	c0,0,0,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.2,0.1c0,0-0.1,0-0.1,0l0,0h0c-0.2,0.1-0.5,0-0.7,0c-0.1,0-0.2,0-0.2-0.1
	c-0.3-0.2-0.7-0.3-1-0.5c-0.4-0.2-0.7-0.4-1.1-0.6c-3.4-1.7-8.2-4.1-14-7.2c-0.8-0.4-1.7-0.9-2.6-1.4c-0.6-0.3-1.2-0.7-1.9-1
	c-0.4-0.2-0.8-0.4-1.2-0.6c-2.8-1.5-5.7-3-8.7-4.7c-2.3-1.3-4.7-2.6-7.2-4c-1.8-1-3.6-2-5.5-3.1c0,0,0,0,0,0
	c-0.3-0.1-0.5-0.3-0.8-0.4c-1.3-0.8-2.6-1.5-3.9-2.3c-1.4-0.8-2.8-1.6-4.2-2.5c-0.4-0.2-0.7-0.4-1.1-0.6c-0.9-0.5-1.8-1.1-2.7-1.6
	c-1.2-0.7-2.3-1.4-3.5-2.1c-0.4-0.2-0.7-0.5-1.1-0.7c-0.7-0.5-1.4-0.9-2.2-1.4c-1-0.7-2-1.3-3.1-2c-1-0.6-2-1.3-2.9-1.9
	c-0.5-0.3-1-0.6-1.4-0.9c-0.5-0.3-0.9-0.6-1.4-1c-0.9-0.6-1.8-1.2-2.6-1.8c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.2-0.1-0.2-0.2
	c-0.8-0.6-1.6-1.1-2.4-1.7c-0.9-0.6-1.7-1.2-2.6-1.8c-0.9-0.6-1.7-1.2-2.6-1.9c-0.8-0.6-1.6-1.2-2.4-1.9c-0.8-0.6-1.6-1.3-2.4-1.9
	c0,0,0,0,0,0c-0.8-0.7-1.6-1.3-2.4-2c0,0,0,0,0,0c-0.2-0.1-0.3-0.2-0.5-0.4c-0.3-0.2-0.5-0.5-0.8-0.7c-0.4-0.3-0.8-0.7-1.2-1
	c-0.4-0.4-0.9-0.8-1.3-1.2c-0.4-0.3-0.7-0.7-1.1-1c-0.6-0.6-1.2-1.2-1.8-1.7c0,0-0.2-0.2-0.6-0.5c0,0,0,0-0.1-0.1
	c-0.1-0.1-0.2-0.2-0.3-0.3c-0.4-0.3-0.8-0.8-1.4-1.3c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.2-0.2-0.3-0.3c-0.6-0.7-1.3-1.4-2.1-2.3
	c-0.2-0.2-0.3-0.3-0.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.4c-0.5-0.6-1-1.2-1.5-1.9c-0.1-0.2-0.2-0.3-0.4-0.5c-0.1-0.2-0.2-0.3-0.4-0.5
	c-0.2-0.3-0.5-0.7-0.7-1.1c-0.4-0.5-0.7-1.1-1.1-1.7c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.1-0.2-0.2-0.3c-0.9-1.6-1.8-3.4-2.6-5.3
	c-0.3-0.6-0.5-1.2-0.7-1.9c-0.2-0.5-0.4-1-0.5-1.5c-0.3-1-0.7-2.1-0.9-3.3c-0.3-1.2-0.5-2.4-0.7-3.6c-0.1-0.5-0.1-1.1-0.2-1.6
	c0-0.1,0-0.2,0-0.3c0,0,0,0,0,0c0,0,0,0,0,0c0-0.6-0.1-1.2-0.1-1.8c0-0.3,0-0.6,0-0.8c0-0.2,0-0.3,0-0.5c0-0.5,0-1,0-1.4
	c0-0.4,0-0.8,0-1.2v0c0-0.1,0-0.2,0-0.4c0-0.6,0.1-1.2,0.1-1.8c0,0,0-0.1,0-0.1c0-0.4,0.1-0.7,0.1-1.1c0-0.3,0.1-0.7,0.1-1v0
	c0-0.1,0-0.3,0.1-0.4c0-0.3,0.1-0.6,0.2-1c0-0.2,0.1-0.3,0.1-0.5c0-0.2,0.1-0.4,0.1-0.7c0-0.2,0.1-0.4,0.1-0.5
	c0-0.2,0.1-0.4,0.1-0.6c0.1-0.6,0.3-1.1,0.4-1.7c0.1-0.5,0.3-1.1,0.5-1.6c0.1-0.3,0.2-0.5,0.2-0.8s0.2-0.5,0.2-0.8
	c0.2-0.5,0.3-1,0.5-1.5v0c0,0,0-0.1,0-0.1c0.2-0.5,0.3-0.9,0.5-1.3c0.2-0.4,0.3-0.8,0.5-1.1c0-0.1,0-0.2,0.1-0.2v0
	c0.2-0.4,0.4-0.9,0.6-1.3c0.1-0.2,0.1-0.3,0.2-0.5c0.1-0.3,0.2-0.6,0.4-0.9c0.2-0.4,0.4-0.8,0.6-1.3c0.1-0.3,0.3-0.6,0.5-0.9
	c0-0.1,0.1-0.2,0.2-0.3v0c0.2-0.4,0.4-0.8,0.6-1.2c0.2-0.4,0.4-0.8,0.7-1.2c0.2-0.4,0.4-0.8,0.7-1.2c0.2-0.4,0.4-0.8,0.7-1.1
	c0.2-0.4,0.5-0.8,0.7-1.1c0.2-0.4,0.5-0.7,0.7-1.1c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.2-0.4,0.3-0.5v0c0.2-0.3,0.5-0.7,0.7-1v0
	c0.2-0.4,0.5-0.7,0.7-1c0.2-0.4,0.5-0.7,0.7-1c0.2-0.4,0.5-0.7,0.7-1c0.2-0.3,0.4-0.6,0.6-0.9c0,0,0.1-0.1,0.1-0.2
	c0.2-0.3,0.5-0.6,0.7-1v0c0.2-0.3,0.5-0.6,0.8-1v0c0.1-0.2,0.3-0.3,0.4-0.5c0.1-0.2,0.2-0.3,0.4-0.5c0.2-0.3,0.5-0.6,0.8-1
	c0.3-0.3,0.5-0.6,0.8-0.9v0c0.1-0.2,0.3-0.3,0.4-0.5c0.3-0.3,0.5-0.7,0.8-1c0.1-0.1,0.2-0.3,0.4-0.4c0.3-0.3,0.5-0.6,0.8-0.9v0
	c0.3-0.3,0.5-0.6,0.8-0.9v0c0.3-0.3,0.5-0.6,0.8-0.9c0.3-0.3,0.5-0.6,0.8-0.9c0,0,0,0,0-0.1c0.2-0.3,0.5-0.5,0.7-0.7
	c0,0,0.1,0,0.1-0.1c0.2-0.2,0.4-0.4,0.5-0.5c0.1-0.1,0.2-0.2,0.3-0.3l0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.2-0.2,0.3-0.3
	c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1l0,0c0.1,0.1,0.4,0.5,1,1.2c0.3,0.3,0.6,0.8,1,1.3c0.3,0.4,0.7,0.8,1,1.3
	c0.3,0.4,0.7,0.9,1,1.3v0l0.4,0.5l0.7,0.9c0.2,0.2,0.4,0.5,0.5,0.7c0.2,0.2,0.4,0.5,0.6,0.7c0.3,0.5,0.7,0.9,1.1,1.4l1.2,1.5
	c0.4,0.5,0.8,1,1.2,1.5l1.2,1.6v0c0.4,0.5,0.8,1.1,1.2,1.6c0.4,0.6,0.9,1.1,1.3,1.7c0.4,0.6,0.9,1.2,1.3,1.8
	c0.4,0.6,0.9,1.2,1.4,1.9c0.2,0.2,0.4,0.5,0.5,0.7c0.2,0.3,0.4,0.6,0.7,0.9c0.1,0.1,0.2,0.2,0.3,0.4c0,0,0,0,0,0
	c0.1,0.2,0.3,0.4,0.4,0.6c0.4,0.5,0.7,1,1.1,1.5v0c0.1,0.1,0.2,0.3,0.3,0.4c0.3,0.5,0.7,1,1,1.4c0.1,0.1,0.2,0.2,0.2,0.4
	c0.6,0.8,1.1,1.6,1.7,2.4c0.6,0.9,1.2,1.8,1.9,2.6c0.7,1,1.4,2,2,3c0.8,1.1,1.6,2.3,2.4,3.4c0.5,0.8,1,1.5,1.6,2.3
	c0.4,0.7,0.9,1.3,1.4,2c0.3,0.5,0.6,1,1,1.5c1,1.5,2.1,3.1,3.1,4.7c0,0,0,0,0,0c0.4,0.6,0.8,1.2,1.2,1.9c0.8,1.3,1.7,2.6,2.5,3.9
	c2.1,3.3,4.3,6.7,6.5,10.2c0,0,0,0,0,0c0.7,1,1.3,2.1,2,3.1c0.6,1,1.3,2.1,1.9,3.1c0,0,0,0,0,0c0,0,0,0,0,0h0
	c0.9,1.5,1.8,2.9,2.7,4.4c0,0,0,0,0,0c0.7,1.2,1.4,2.4,2.1,3.5l0,0c0.6,1,1.2,2.1,1.8,3.1l0,0c0.5,0.9,1.1,1.8,1.6,2.8l0,0
	c0.5,0.8,1,1.7,1.5,2.6l0,0c0.5,0.8,0.9,1.6,1.4,2.4l0,0c0.4,0.6,0.7,1.3,1.1,1.9c0.1,0.1,0.1,0.2,0.2,0.3h0c0,0,0,0,0,0h0
	c0.4,0.7,0.8,1.4,1.2,2.1c0.2,0.3,0.3,0.6,0.5,0.9c0.2,0.4,0.5,0.8,0.7,1.2c0,0,0.1,0.1,0.1,0.1c0.3,0.6,0.7,1.2,1,1.8l0,0
	c0.3,0.6,0.7,1.2,1,1.9c0.3,0.6,0.6,1.2,0.9,1.7c0,0,0,0.1,0.1,0.1c0,0,0,0,0,0c0.3,0.6,0.6,1.2,0.9,1.7c0,0,0,0,0,0
	c0.3,0.6,0.6,1.1,0.9,1.7v0h0c0.3,0.5,0.6,1.1,0.9,1.7c0.3,0.6,0.6,1.1,0.9,1.6c0.3,0.5,0.5,1.1,0.8,1.6c0.3,0.5,0.5,1,0.8,1.6
	c0.1,0.2,0.2,0.3,0.3,0.5c0.2,0.3,0.4,0.7,0.5,1h0v0c0.3,0.5,0.5,1,0.8,1.5v0l0.8,1.5c0.1,0.2,0.2,0.4,0.3,0.6
	c0.2,0.3,0.3,0.6,0.4,0.9v0c0.2,0.5,0.5,0.9,0.7,1.4c0.2,0.5,0.5,1,0.7,1.4l0.7,1.4c0.2,0.5,0.5,0.9,0.7,1.4
	c0.2,0.4,0.5,0.9,0.7,1.4c0.2,0.4,0.4,0.9,0.6,1.3c0,0,0,0,0,0l0.7,1.3c0.2,0.4,0.4,0.9,0.6,1.3h0c0.2,0.4,0.4,0.8,0.6,1.3h0
	l0.6,1.3l0.6,1.3c0.2,0.4,0.4,0.8,0.6,1.3l0.6,1.2c0.2,0.4,0.4,0.8,0.6,1.2c0.2,0.4,0.4,0.8,0.6,1.2h0c0,0,0,0,0,0l0.6,1.2l0.5,1.2
	l0.5,1.2L138.6,187.8L138.6,187.8z"></path>
<path style="fill:#ffffff;" d="M155.7,106.2c0,0.4,0,0.8,0,1.2v1.6c0,0.3,0,0.7,0,1c0,0.2,0,0.5,0,0.7v0.3c0,0.3,0,0.7,0,1v1l0,3
	c0,0.3,0,0.7,0,1c0,0.3,0,0.7,0,1c0,1,0,1.9,0,2.9v0.1c0,0.3,0,0.7,0,1c0,0.7,0,1.3-0.1,2c0,0.6,0,1.2,0,1.8v0.1c0,0.3,0,0.6,0,1
	l0,1c0,0.3,0,0.6,0,1c0,0.6,0,1.3-0.1,1.9l0,1l0,1c0,0.3,0,0.6,0,1l0,1l0,1l0,0.9l-0.1,1.9l0,1l-0.1,1l0,0.9l0,0.9
	c0,0.3,0,0.6,0,0.9l-0.1,0.9c0,0.3,0,0.6-0.1,0.9l0,0.9v0l-0.1,0.9l0,0.9l-0.1,0.9v0l0,0.5c0,0.1,0,0.3,0,0.4c0,0.2,0,0.4,0,0.6
	l0,0.3l-0.1,1.9l-0.1,0.9v0l-0.1,0.9c0,0.3,0,0.6-0.1,0.8c0,0,0,0.1,0,0.1c0,0.3,0,0.6-0.1,0.9l-0.1,0.9l-0.1,0.9l-0.1,0.9l-0.1,0.9
	c0,0.3,0,0.6-0.1,0.9l0,0.4c0,0.5-0.1,1-0.1,1.5c0,0.5-0.1,1.1-0.1,1.6l0,0.2c0,0,0,0,0,0l-0.1,0.9l-0.1,0.9v0c0,0.3,0,0.6-0.1,0.9
	c0,0,0,0.1,0,0.1c0,0.3,0,0.5-0.1,0.8v0l-0.1,0.9c0,0.4-0.1,0.9-0.1,1.4l0,0.5l-0.1,0.9v0l-0.1,0.9l-0.1,0.9l-0.1,0.9
	c0,0.6-0.1,1.2-0.2,1.8l-0.1,0.9c0,0.5-0.1,1-0.1,1.5l0,0.4c0,0.2,0,0.4-0.1,0.6l0,0.3v0l0,0.2c0,0,0,0.2-0.1,0.5
	c0,0.1-0.1,0.1-0.1,0.2c0,0-0.1,0.1-0.1,0.2c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.2,0.1c-0.1,0-0.2,0.1-0.3,0.1c0,0-0.3,0.2-0.8-0.1
	c-0.1-0.1-0.2-0.2-0.4-0.3l-0.7-0.9l-0.8-1.2l-0.9-1.2l-0.9-1.3l-0.9-1.3l-0.9-1.3l-1.8-2.6l-0.9-1.3l-0.9-1.4l-0.6-0.9
	c-0.4-0.6-0.8-1.2-1.2-1.9l-0.9-1.4v0h0l-0.9-1.4v0l0,0l-0.9-1.4l0,0l-0.9-1.5l-1.9-3l-1-1.6l-1-1.6l-1-1.6c0,0,0,0,0,0v0l-1-1.6v0
	c0,0,0,0,0,0l-1-1.7l-1-1.7c0,0,0,0,0,0c-0.4-0.6-0.7-1.2-1.1-1.8c-0.4-0.6-0.7-1.2-1.1-1.8c0,0,0,0,0,0l-1.1-1.9
	c-0.1-0.2-0.2-0.4-0.4-0.6c-0.2-0.4-0.5-0.8-0.7-1.3c-0.4-0.6-0.8-1.3-1.2-1.9c0,0,0,0,0,0c-0.4-0.7-0.8-1.3-1.2-2l0,0
	c-0.4-0.7-0.8-1.4-1.2-2.1c-0.4-0.7-0.8-1.4-1.2-2.1l0,0c-0.4-0.7-0.9-1.5-1.3-2.2c-0.5-0.8-0.9-1.6-1.3-2.4l0,0
	c-0.5-0.8-0.9-1.7-1.4-2.5c-0.5-0.9-1-1.7-1.4-2.6l0,0c-0.5-0.9-1-1.8-1.5-2.8c-0.4-0.8-0.9-1.7-1.3-2.5c-0.1-0.1-0.2-0.3-0.2-0.4
	c0,0,0,0,0,0c-0.2-0.3-0.3-0.6-0.5-0.9c-0.4-0.8-0.8-1.5-1.2-2.2c-0.6-1.2-1.2-2.3-1.8-3.5c0,0,0,0,0,0h0c-0.7-1.3-1.3-2.6-1.9-3.9
	c0,0,0,0,0,0c-0.7-1.5-1.5-3-2.2-4.5c-0.4-0.9-0.8-1.8-1.2-2.6c-0.4-0.9-0.8-1.7-1.2-2.6c0,0,0,0,0,0c-0.1-0.2-0.2-0.5-0.3-0.7
	c-0.4-0.9-0.8-1.8-1.1-2.6c-0.5-1.1-0.9-2.2-1.4-3.2v0c-0.3-0.8-0.7-1.7-1-2.5c-0.4-1.1-0.8-2.1-1.2-3.1c-0.4-1-0.7-2-1.1-2.9
	c0-0.1,0-0.1-0.1-0.2c0,0,0,0,0-0.1h0c-0.2-0.5-0.3-1-0.5-1.5c-0.1-0.4-0.3-0.8-0.4-1.2c0-0.1-0.1-0.3-0.1-0.4
	c-0.1-0.4-0.3-0.8-0.4-1.3c-0.2-0.5-0.3-1-0.5-1.4c-0.1-0.5-0.3-1-0.4-1.4c-0.1-0.3-0.2-0.7-0.3-1c-0.3-1-0.5-2-0.8-3c0,0,0,0,0-0.1
	c0,0,0,0,0-0.1c-0.1-0.6-0.3-1.1-0.4-1.7c0,0-0.3-1-0.7-2.6c0-0.2-0.1-0.4-0.1-0.6c-0.1-0.5-0.2-1.1-0.3-1.7
	c-0.1-0.7-0.2-1.5-0.4-2.2c0-0.1,0-0.2,0-0.3c-0.1-0.6-0.2-1.2-0.2-1.8c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0c-0.1-0.9-0.2-1.8-0.2-2.8
	c0-0.4,0-0.8-0.1-1.3c0-0.8-0.1-1.7-0.1-2.6c0,0,0,0,0,0v0c0-0.5,0-1.1,0-1.6c0-0.3,0-0.6,0-0.9c0-0.1,0-0.2,0-0.2
	c0-0.3,0-0.6,0.1-1c0-0.4,0.1-0.8,0.1-1.2c0-0.3,0.1-0.6,0.1-1c0.1-0.6,0.1-1.3,0.2-2c0-0.3,0.1-0.6,0.1-1c0.1-0.5,0.2-1.1,0.3-1.6
	c0.1-0.5,0.2-1.1,0.4-1.6c0.1-0.4,0.2-0.8,0.3-1.2c0.1-0.4,0.2-0.8,0.4-1.2c0,0,0-0.1,0.1-0.2c0.1-0.2,0.2-0.6,0.3-1.1
	c0-0.1,0.1-0.2,0.1-0.3c0.1-0.3,0.2-0.6,0.4-1c0,0,0,0,0-0.1c0,0,0,0,0,0c0.2-0.5,0.4-0.9,0.6-1.5h0c0,0,0,0,0-0.1
	c0.1-0.2,0.1-0.3,0.2-0.5c0.3-0.6,0.6-1.2,0.9-1.9v0c0.3-0.6,0.6-1.1,0.9-1.8c0.3-0.5,0.6-1.1,1-1.6v0c0.2-0.4,0.5-0.8,0.8-1.2
	c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.2-0.2,0.2-0.4c0.2-0.4,0.5-0.7,0.8-1.1v0c0.3-0.4,0.7-0.9,1-1.3c0.3-0.4,0.7-0.8,1-1.2v0
	c0.1-0.1,0.1-0.1,0.2-0.2c0.3-0.3,0.6-0.6,0.9-1c0.3-0.4,0.7-0.7,1-1.1c0.1-0.1,0.2-0.2,0.3-0.4l0.7-0.7c0.2-0.2,0.4-0.4,0.6-0.6
	c0.1-0.1,0.3-0.3,0.4-0.4c0.1-0.1,0.2-0.1,0.2-0.2c0.2-0.2,0.5-0.4,0.7-0.6c0,0,0.1-0.1,0.1-0.1c0.2-0.2,0.4-0.3,0.6-0.5
	c0,0,0,0,0,0c0.1-0.1,0.3-0.2,0.4-0.3c0.1-0.1,0.2-0.2,0.3-0.2c0.2-0.2,0.5-0.4,0.8-0.6v0h0c0.3-0.2,0.5-0.4,0.8-0.6
	c0.1-0.1,0.2-0.1,0.2-0.2c0.3-0.2,0.7-0.5,1.1-0.7c0.2-0.1,0.4-0.3,0.6-0.4c0.1-0.1,0.3-0.2,0.4-0.3c0.1,0,0.1-0.1,0.2-0.1
	c0.3-0.2,0.6-0.4,0.9-0.5c0.3-0.2,0.6-0.3,0.9-0.5c0,0,0.1,0,0.1-0.1v0c0.3-0.2,0.7-0.4,1-0.5c0.3-0.2,0.7-0.3,1-0.5
	c0.3-0.2,0.7-0.3,1-0.5c0.3-0.1,0.7-0.3,1-0.4c0.3-0.1,0.7-0.3,1-0.4c0.3-0.1,0.7-0.3,1-0.4c0.3-0.1,0.7-0.2,1-0.4
	c0.3-0.1,0.7-0.2,1-0.3c0.2,0,0.3-0.1,0.5-0.1c0.2-0.1,0.3-0.1,0.5-0.2c0.2,0,0.3-0.1,0.5-0.1c0.2-0.1,0.5-0.1,0.7-0.2l0.8-0.2
	l1-0.2l1-0.2l1-0.2l0.2,0l0.8-0.2l1-0.2l1-0.2l1-0.2l0.8-0.2l0.2,0l0.5-0.1c0.9-0.2,1.7-0.3,2.5-0.5c0,0,0.1,0,0.1,0
	c0.2,0,0.3,0,0.5-0.1c0.6-0.1,1.1-0.2,1.6-0.2c0.2,0,0.4-0.1,0.5-0.1c0,0,0,0,0,0c0.2,0,0.3,0,0.5-0.1c0.1,0,0.2,0,0.4,0
	c0,0,0,0,0,0l0.1,0.1c0.1,0.1,0.2,0.2,0.3,0.4c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0.1,0.2,0.2,0.3,0.3,0.5
	c0.2,0.3,0.4,0.6,0.6,1c0.1,0.2,0.2,0.3,0.3,0.5c0.1,0.2,0.2,0.3,0.3,0.5c0,0.1,0.1,0.1,0.1,0.2c0.1,0.2,0.2,0.4,0.3,0.6
	c0,0.1,0.1,0.1,0.1,0.2c0.2,0.3,0.4,0.7,0.5,1.1c0.1,0.2,0.2,0.3,0.2,0.5c0.1,0.2,0.1,0.3,0.2,0.5c0,0,0.1,0.1,0.1,0.2
	c0.2,0.4,0.3,0.8,0.5,1.2c0.2,0.4,0.3,0.8,0.5,1.2c0.2,0.4,0.3,0.8,0.5,1.3c0.2,0.4,0.3,0.9,0.5,1.3c0.2,0.4,0.3,0.8,0.5,1.2
	c0.1,0.2,0.2,0.5,0.2,0.7c0.1,0.3,0.2,0.6,0.3,0.9c0.1,0.3,0.2,0.5,0.3,0.8c0.1,0.2,0.1,0.4,0.2,0.5c0,0.1,0.1,0.2,0.1,0.3
	c0.1,0.2,0.1,0.3,0.2,0.5c0.1,0.3,0.2,0.5,0.3,0.8c0,0.1,0.1,0.2,0.1,0.3c0.1,0.4,0.3,0.9,0.4,1.3c0.2,0.6,0.4,1.2,0.5,1.8
	s0.3,1.2,0.5,1.8c0.1,0.4,0.2,0.8,0.3,1.2c0.1,0.3,0.1,0.6,0.2,0.8c0.2,0.6,0.3,1.2,0.5,1.8c0,0.1,0,0.1,0.1,0.2
	c0.1,0.3,0.2,0.6,0.2,0.9c0.1,0.4,0.2,0.8,0.3,1.2c0.1,0.4,0.2,0.8,0.3,1.2c0.6,2.4,1.1,4.9,1.6,7.7c0.1,0.6,0.2,1.1,0.3,1.7
	c0.1,0.6,0.2,1.2,0.3,1.8c0.3,1.9,0.7,3.9,1,6c0.1,0.4,0.1,0.8,0.2,1.1c0.1,0.5,0.1,1,0.2,1.5c0,0.3,0.1,0.6,0.1,1
	c0.1,0.5,0.1,0.9,0.2,1.4c0,0.2,0.1,0.5,0.1,0.7c0,0.2,0.1,0.5,0.1,0.7c0.1,0.5,0.1,1,0.2,1.6c0,0.3,0.1,0.6,0.1,0.8c0,0,0,0,0,0
	c0,0.2,0,0.3,0,0.5c0.1,0.6,0.1,1.1,0.2,1.7c0,0.4,0.1,0.8,0.1,1.2c0.1,0.6,0.1,1.1,0.2,1.7c0,0.3,0.1,0.6,0.1,1
	c0,0.2,0,0.5,0.1,0.8c0.1,0.9,0.2,1.8,0.2,2.7c0,0.5,0.1,1.1,0.1,1.6c0.1,0.9,0.2,1.8,0.2,2.7c0,0.1,0,0.2,0,0.3
	c0,0.5,0.1,1,0.1,1.4l0,0c0,0.5,0.1,0.9,0.1,1.4c0,0.5,0.1,0.9,0.1,1.4c0,0.1,0,0.2,0,0.3c0,0.7,0.1,1.4,0.1,2.2c0,0,0,0.1,0,0.2
	l0.1,1.3c0,0.4,0,0.9,0.1,1.3c0,0,0,0.1,0,0.1c0,0.5,0,1,0.1,1.5c0,0.3,0,0.6,0,0.8c0,0.1,0,0.3,0,0.4c0,0.4,0,0.9,0.1,1.3l0,0.7
	c0,0.4,0,0.8,0,1.2c0,0.4,0,0.8,0,1.2l0,1.1l0,1.2c0,0.3,0,0.7,0,1V94c0,0.3,0,0.6,0,1v0.2l0,1.1l0,1.1c0,0.3,0,0.6,0,0.9v0.2
	c0,0.4,0,0.7,0,1.1l0,1.1l0,1.1c0,0.4,0,0.7,0,1.1c0,0.4,0,0.7,0,1.1l0,1.1v0.2c0,0.3,0,0.6,0,0.9V106.2z"></path>
<path style="fill:#ffffff;" d="M182,164l-0.3,0.4h0c-0.2,0.3-0.3,0.6-0.5,0.8h0l-0.5,0.8l-0.5,0.8c-0.4,0.5-0.7,1.1-1.1,1.6v0
	l-0.5,0.8l-0.5,0.8c-0.5,0.8-1.1,1.7-1.6,2.4c-0.2,0.3-0.4,0.5-0.5,0.8l-0.5,0.8h0c-0.2,0.3-0.4,0.5-0.5,0.8h0
	c-0.2,0.3-0.4,0.5-0.5,0.8l-0.5,0.8l-0.5,0.8l-0.5,0.8l-0.5,0.8l-0.5,0.8l-0.5,0.8l-0.2,0.3h0c0,0,0,0-0.1,0.1
	c0,0.1-0.1,0.2-0.2,0.2l0,0c-0.2,0.2-0.6,0.3-1.1,0.1c0,0-0.1,0-0.3-0.1c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1-0.1-0.1-0.2
	c0,0,0-0.1-0.1-0.1c0-0.1,0-0.1-0.1-0.2c0-0.1,0-0.2-0.1-0.3h0c0-0.1,0-0.2,0-0.3c0-0.3-0.1-0.6-0.1-0.9c0-0.3-0.1-0.6-0.1-0.9
	c0-0.3-0.1-0.6-0.1-0.9l-0.1-0.9l-0.1-0.9c0-0.3-0.1-0.6-0.1-0.9l-0.1-0.9c0,0,0,0,0,0l-0.1-0.9c0-0.3,0-0.6-0.1-0.9l-0.1-0.9
	l-0.1-0.9l0-0.5c0-0.2,0-0.3,0-0.5h0c0-0.3,0-0.6-0.1-0.9h0l-0.1-0.9l0-0.4c0-0.2,0-0.4,0-0.5l-0.1-0.9l-0.1-0.9v0l-0.1-0.9
	c0-0.3-0.1-0.6-0.1-0.9c0-0.3,0-0.6-0.1-0.9c0-0.2,0-0.5-0.1-0.7l0-0.2l0-0.3c0-0.2,0-0.4,0-0.6l-0.1-0.9c0-0.3,0-0.6-0.1-0.9
	l-0.1-0.9c0-0.2,0-0.5,0-0.8l0-0.2l-0.1-0.9l-0.1-0.9v0l-0.1-0.9l-0.1-1l-0.1-0.9l-0.1-1.9l-0.1-0.9l0-0.9l-0.1-0.9l0-1l-0.1-1l0-1
	c0-0.3,0-0.6-0.1-1l0-0.9v-0.1c0-0.3,0-0.6,0-0.8l0-1l-0.1-1c0,0,0,0,0,0c0-0.3,0-0.6,0-0.9c0,0,0-0.1,0-0.1c0-0.3,0-0.6,0-0.8h0
	l0-1l0-1l0-0.9v0c0-0.3,0-0.6,0-1l0-1c0-0.6,0-1.3-0.1-1.9l0-1l0-1c0-0.2,0-0.5,0-0.7l0-0.3v0c0-0.3,0-0.6,0-0.9l0-1
	c0-0.6,0-1.3,0-1.9v0c0-0.3,0-0.7,0-1c0-0.3,0-0.6,0-1l0-1v-0.1c0-0.6,0-1.2,0-1.8c0-0.3,0-0.6,0-1l0-1l0-1v-0.1c0-0.3,0-0.6,0-0.9
	v-0.1c0-0.6,0-1.2,0-1.9v0c0-0.3,0-0.6,0-1v-2.9c0-0.3,0-0.7,0-1c0-0.2,0-0.5,0-0.7v-0.3c0-1,0-2,0-3c0-0.3,0-0.7,0-1
	c0-0.3,0-0.7,0-1c0-1,0-2,0.1-3c0,0,0,0,0,0l0-1c0-0.3,0-0.7,0-1l0-1l0-1l0-1c0-0.3,0-0.7,0-1l0-1l0-1c0-0.3,0-0.7,0-1
	c0-0.4,0-0.7,0-1l0-1l0-1c0,0,0-0.1,0-0.2c0-0.3,0-0.6,0-0.9v0c0-0.2,0-0.4,0-0.6c0-0.1,0-0.3,0-0.4v0c0.1-1,0.1-1.9,0.2-2.8
	c0-0.1,0-0.2,0-0.3v0c0-0.4,0-0.7,0.1-1l0.1-1.1c0-0.4,0-0.7,0.1-1.1l0.1-1.1c0-0.4,0.1-0.7,0.1-1.1l0.1-1.1c0-0.4,0-0.7,0.1-1.1
	c0-0.4,0.1-0.7,0.1-1.1c0-0.1,0-0.2,0-0.3c0-0.5,0.1-1,0.1-1.5c0-0.1,0-0.3,0-0.4c0.1-1.1,0.2-2.1,0.3-3.2c0-0.1,0-0.1,0-0.2
	l0.1-1.1c0-0.4,0.1-0.8,0.1-1.2c0-0.4,0.1-0.8,0.1-1.2h0c0-0.2,0-0.4,0.1-0.6l0.1-0.6c0.1-0.8,0.2-1.6,0.3-2.4
	c0-0.4,0.1-0.8,0.2-1.2v0l0-0.3c0.2-1.2,0.3-2.4,0.5-3.5c0.1-0.5,0.1-0.9,0.2-1.3c0.1-0.5,0.1-0.9,0.2-1.3c0.1-0.5,0.1-0.9,0.2-1.4
	c0.1-0.5,0.2-1,0.2-1.4c0.1-0.5,0.2-1,0.2-1.5c0.2-1.1,0.4-2.1,0.5-3.2c0.1-0.5,0.2-1.1,0.3-1.6c0,0,0-0.1,0-0.1
	c0.1-0.6,0.2-1.2,0.3-1.8c0.1-0.7,0.3-1.3,0.4-2c0-0.1,0-0.1,0-0.2c0.1-0.7,0.3-1.3,0.4-2c0,0,0-0.1,0-0.1c0.3-1.3,0.5-2.5,0.8-3.7
	c0.1-0.3,0.2-0.7,0.2-1c0.3-1.2,0.6-2.3,0.9-3.4c0.3-1.2,0.6-2.4,1-3.5c0.8-2.8,1.6-5.2,2.4-7.4c0,0,0,0,0,0c0.1-0.3,0.2-0.6,0.3-1
	c0.1-0.3,0.2-0.6,0.3-0.9c0.2-0.6,0.4-1.2,0.7-1.7c0.2-0.5,0.4-1,0.6-1.4c0.3-0.7,0.5-1.3,0.8-1.9c0.3-0.6,0.5-1.2,0.8-1.7h0
	c0,0,0,0,0,0c0.3-0.6,0.5-1.1,0.8-1.6c0.3-0.5,0.5-1,0.8-1.4c0.1-0.2,0.2-0.4,0.3-0.6c0.1-0.2,0.2-0.3,0.2-0.4
	c0.3-0.5,0.5-0.8,0.7-1.1c0.3-0.5,0.5-0.7,0.5-0.7c0.2,0,0.5,0.1,0.7,0.1c0.2,0,0.4,0,0.6,0.1v0c0,0,0.1,0,0.2,0
	c0.4,0.1,0.8,0.1,1.2,0.2h0c0.5,0.1,1,0.2,1.5,0.2c0.5,0.1,1,0.2,1.5,0.3c0,0,0,0,0,0h0v0c0.1,0,0.2,0,0.3,0c0.2,0,0.4,0.1,0.5,0.1
	c0.3,0,0.5,0.1,0.8,0.1c0.6,0.1,1.2,0.2,1.7,0.3c0.5,0.1,1,0.2,1.5,0.3c0.3,0.1,0.6,0.1,0.9,0.2c0.4,0.1,0.8,0.2,1.1,0.2
	c0.7,0.1,1.3,0.3,1.7,0.4c0.6,0.2,1,0.2,1,0.2l0,0c1,0.2,1.9,0.5,2.8,0.8c0,0,0,0,0,0c0.5,0.2,1.1,0.3,1.6,0.5
	c0.6,0.2,1.1,0.4,1.6,0.6c0.4,0.1,0.8,0.3,1.1,0.4c0,0,0.1,0,0.1,0c0.4,0.2,0.7,0.3,1.1,0.5c0.3,0.2,0.7,0.3,1,0.5l0.4,0.2
	c0.3,0.1,0.5,0.3,0.8,0.4c0.5,0.3,1,0.6,1.5,0.9c1,0.6,2,1.2,2.9,1.9c0,0,0.1,0,0.1,0c0.4,0.3,0.8,0.5,1.1,0.8
	c0.2,0.1,0.3,0.2,0.5,0.3c0.3,0.3,0.7,0.5,1,0.8c0.4,0.3,0.8,0.7,1.2,1h0c0.4,0.3,0.7,0.7,1,1c0.1,0.1,0.2,0.2,0.3,0.3
	c0.3,0.3,0.6,0.6,0.9,0.9h0c0,0,0,0,0,0c0.3,0.3,0.6,0.6,0.8,0.9c0.2,0.3,0.5,0.5,0.7,0.8c0.6,0.7,1.1,1.3,1.7,2v0
	c0.7,0.9,1.4,1.8,2,2.8v0c0.1,0.1,0.2,0.2,0.2,0.3c0.2,0.3,0.4,0.6,0.6,0.9c0.3,0.4,0.5,0.8,0.7,1.2c0.2,0.4,0.5,0.8,0.7,1.2
	c0.2,0.3,0.3,0.6,0.5,0.9c0,0,0.1,0.1,0.1,0.1c0.2,0.3,0.3,0.6,0.5,0.9c0,0,0,0.1,0.1,0.1c0.3,0.5,0.5,1.1,0.7,1.5
	c0.2,0.5,0.5,1,0.6,1.5c0.1,0.2,0.2,0.4,0.2,0.6c0.1,0.2,0.1,0.3,0.2,0.5c0.1,0.3,0.2,0.7,0.3,0.9c0.1,0.2,0.1,0.3,0.1,0.5
	c0.1,0.2,0.1,0.3,0.1,0.4c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.1,0.3,0.2,0.6,0.3,0.9c0.1,0.3,0.2,0.6,0.3,1c0.1,0.3,0.2,0.6,0.2,0.9
	c0.1,0.3,0.2,0.6,0.2,1c0.1,0.3,0.1,0.7,0.2,1c0,0.3,0.1,0.6,0.2,1c0,0.3,0.1,0.7,0.1,1c0,0.3,0.1,0.6,0.1,1c0,0.3,0.1,0.6,0.1,1h0
	v0c0,0.1,0,0.3,0,0.4c0.1,1.1,0.1,2.2,0.1,3.3c0,0,0,0,0,0c0,0.6,0,1.2,0,1.8v0.1c0,0.5,0,1,0,1.5c0,0.1,0,0.1,0,0.2
	c0,0.6,0,1.2-0.1,1.7v0l0,0c0,0.2,0,0.3,0,0.5c0,0.1,0,0.3,0,0.4c0,0.3-0.1,0.6-0.1,0.8v0c0,0,0,0.1,0,0.2c0,0.2,0,0.4-0.1,0.7
	c0,0.3-0.1,0.6-0.1,0.8c0,0.3-0.1,0.5-0.1,0.8c0,0.1,0,0.2,0,0.3c0,0.2,0,0.3-0.1,0.5h0v0c0,0.1,0,0.1,0,0.2
	c-0.1,0.5-0.1,0.9-0.2,1.4c-0.1,0.5-0.2,1.1-0.2,1.5c0,0.1,0,0.2-0.1,0.3c-0.1,0.4-0.1,0.8-0.2,1.1c0,0,0,0.1,0,0.1v0
	c0,0.1,0,0.3-0.1,0.4c-0.1,0.3-0.1,0.6-0.2,0.9l0,0.1c0,0,0,0,0,0c0,0.2-0.1,0.4-0.1,0.6c0,0.2-0.1,0.4-0.1,0.5c0,0.1,0,0.2-0.1,0.3
	v0c0,0.2-0.1,0.3-0.1,0.4c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c-0.1,0.3-0.1,0.6-0.2,0.8h0c0,0.2-0.1,0.3-0.1,0.5
	c-0.1,0.3-0.1,0.6-0.2,0.9v0c-0.1,0.5-0.2,0.9-0.4,1.4c-0.1,0.5-0.2,0.9-0.4,1.4l-0.4,1.4c-0.1,0.4-0.3,0.9-0.4,1.3
	c-0.1,0.4-0.3,0.9-0.4,1.3l0,0c-0.1,0.4-0.3,0.9-0.4,1.3c-0.2,0.7-0.5,1.4-0.7,2.1c0,0.1-0.1,0.2-0.1,0.4c-0.2,0.4-0.3,0.8-0.5,1.2
	c-0.1,0.4-0.3,0.8-0.4,1.2c-0.1,0.4-0.3,0.8-0.5,1.2l0,0c-0.2,0.4-0.3,0.8-0.4,1.2l0,0v0c-0.2,0.4-0.3,0.8-0.5,1.2
	c0,0.1-0.1,0.3-0.2,0.4c-0.1,0.2-0.2,0.5-0.3,0.8h0c-0.1,0.3-0.2,0.6-0.4,1c0,0.1,0,0.1-0.1,0.2c-0.2,0.4-0.3,0.8-0.5,1.1
	c-0.2,0.4-0.3,0.8-0.5,1.1c-0.3,0.7-0.6,1.4-0.9,2c0,0.1,0,0.1-0.1,0.2c-0.2,0.4-0.3,0.7-0.5,1.1s-0.3,0.7-0.5,1.1
	c-0.2,0.4-0.3,0.7-0.5,1.1c-0.2,0.4-0.3,0.7-0.5,1.1c-0.2,0.3-0.3,0.7-0.5,1l0,0c-0.2,0.3-0.3,0.7-0.5,1c-0.2,0.3-0.3,0.7-0.5,1h0
	c-0.1,0.3-0.2,0.5-0.4,0.8l-0.1,0.2c-0.2,0.4-0.3,0.7-0.5,1c-0.1,0.3-0.3,0.6-0.4,0.9c0,0,0,0.1-0.1,0.1c-0.2,0.3-0.3,0.7-0.5,1
	c-0.2,0.3-0.3,0.7-0.5,1c-0.2,0.3-0.3,0.7-0.5,1c0,0,0,0,0,0l-0.5,1l0,0l-0.5,1l-0.5,1l0,0l-0.5,1c-0.2,0.3-0.3,0.6-0.5,1
	c-0.2,0.3-0.3,0.6-0.5,1h0c-0.1,0.3-0.3,0.5-0.4,0.8l-0.1,0.1l-0.5,1v0l-1,1.9l-0.5,1l-0.5,0.9l-0.5,0.9c0,0,0,0,0,0
	c-0.2,0.3-0.3,0.6-0.5,0.8l0,0.1l-0.5,0.9v0l-0.5,0.9c-0.2,0.3-0.3,0.6-0.5,0.9c-0.2,0.3-0.3,0.6-0.5,0.9h0l-0.5,0.9h0v0
	c-0.2,0.3-0.3,0.6-0.5,0.9l-0.5,0.9l-0.5,0.9l-0.5,0.9l-0.5,0.9v0c-0.2,0.3-0.3,0.6-0.5,0.9l-0.5,0.9l-0.1,0.2
	c-0.1,0.2-0.3,0.5-0.4,0.8c-0.2,0.3-0.3,0.6-0.5,0.9l-0.5,0.9v0h0c-0.2,0.3-0.3,0.6-0.5,0.9h0l-0.5,0.9l-0.5,0.9h0
	c-0.2,0.3-0.3,0.6-0.5,0.9l-0.5,0.9l-0.5,0.9l-0.5,0.9l-0.5,0.9l0,0c-0.2,0.3-0.3,0.6-0.5,0.8l-0.5,0.9l-0.5,0.8l0,0l-0.5,0.9v0
	l-0.5,0.8l-0.5,0.9c-0.2,0.3-0.4,0.6-0.5,0.9h0c-0.1,0.1-0.1,0.2-0.2,0.4l-0.3,0.5l-0.5,0.8c0,0,0,0,0,0h0c-0.1,0.2-0.2,0.4-0.3,0.5
	l-0.2,0.3h0c-0.2,0.3-0.3,0.6-0.5,0.8c-0.1,0.2-0.3,0.5-0.4,0.7l-0.1,0.2l-0.2,0.3c-0.1,0.2-0.2,0.4-0.3,0.6h0
	c-0.1,0.2-0.3,0.4-0.4,0.7l-0.1,0.2v0c-0.2,0.3-0.4,0.6-0.5,0.8l-0.5,0.8l-0.2,0.2c-0.1,0.2-0.2,0.4-0.4,0.6h0
	c-0.1,0.1-0.2,0.3-0.2,0.4l-0.3,0.4c0,0,0,0,0,0l-0.5,0.8l-0.5,0.8l-0.5,0.8l-0.5,0.8l-0.5,0.8l-0.1,0.1c-0.1,0.2-0.3,0.5-0.4,0.7h0
	c0,0,0,0.1-0.1,0.2l-0.4,0.7h0c-0.2,0.3-0.4,0.5-0.5,0.8l-0.5,0.8v0C182.2,163.7,182.1,163.8,182,164z"></path>
<path style="fill:#ffffff;" d="M288.9,211.8l0.3,0c-0.1,0.2-0.2,0.4-0.3,0.6c-0.1,0.2-0.3,0.5-0.4,0.7c-0.1,0.2-0.3,0.5-0.4,0.7
	c-0.1,0.2-0.3,0.5-0.4,0.7c-0.3,0.5-0.6,0.9-0.9,1.4c-0.3,0.5-0.6,0.9-0.9,1.4h0v0c0,0-0.1,0.1-0.1,0.1c-0.3,0.4-0.6,0.9-0.9,1.3
	c-0.3,0.5-0.7,1-1,1.4h0v0c-0.3,0.4-0.6,0.8-0.9,1.2c-0.1,0.1-0.1,0.1-0.1,0.2c0,0,0,0,0,0h0c-0.1,0.1-0.1,0.2-0.2,0.3
	c-0.3,0.4-0.6,0.8-0.9,1.2c0,0-0.1,0.1-0.1,0.1c-0.4,0.5-0.8,0.9-1.1,1.3c-0.2,0.3-0.4,0.5-0.7,0.8c-0.2,0.2-0.4,0.5-0.7,0.7
	c-0.2,0.3-0.5,0.5-0.7,0.8c-0.2,0.3-0.5,0.5-0.7,0.8c-0.2,0.3-0.5,0.5-0.8,0.8c-0.3,0.3-0.5,0.5-0.8,0.8c-0.3,0.3-0.6,0.6-0.9,0.8
	c-0.3,0.3-0.6,0.5-0.8,0.8c0,0,0,0,0,0c-0.9,0.8-1.8,1.6-2.8,2.3c-0.5,0.4-1,0.8-1.5,1.1h0c0,0-0.1,0.1-0.1,0.1
	c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.2-0.5,0.3-0.7,0.5c-0.2,0.2-0.5,0.3-0.7,0.5c-0.2,0.2-0.5,0.3-0.7,0.4c-0.4,0.2-0.7,0.4-1.1,0.6
	c-0.6,0.3-1.2,0.6-1.8,0.9c-0.3,0.1-0.5,0.3-0.8,0.4c-0.2,0.1-0.4,0.2-0.6,0.3c-0.3,0.1-0.5,0.2-0.8,0.3c-0.8,0.3-1.5,0.6-2.3,0.9
	c-0.2,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.5,0.2-0.7,0.2c-0.5,0.1-1,0.3-1.4,0.4c0,0,0,0-0.1,0c-0.9,0.2-1.8,0.4-2.7,0.6c0,0,0,0-0.1,0
	c-0.3,0.1-0.7,0.1-1,0.2c-0.1,0-0.2,0-0.3,0c-0.2,0-0.5,0.1-0.7,0.1c-0.1,0-0.3,0-0.4,0h0c-0.5,0-1,0.1-1.5,0.1c-0.2,0-0.4,0-0.6,0
	c-0.8,0-1.5,0-2.2,0c-0.1,0-0.3,0-0.4,0c-0.1,0-0.3,0-0.4,0c-0.3,0-0.5,0-0.7-0.1c-0.2,0-0.4,0-0.7-0.1c-0.2,0-0.4-0.1-0.6-0.1
	c0,0,0,0,0,0c0,0-0.1,0-0.1,0c-0.3,0-0.5-0.1-0.7-0.1c-0.4-0.1-0.8-0.2-1-0.2c-0.2,0-0.3-0.1-0.3-0.1l0,0c-0.6-0.2-1.1-0.3-1.7-0.5
	h0c-0.5-0.2-1.1-0.4-1.6-0.6c0,0,0,0-0.1,0c-0.5-0.2-1-0.4-1.4-0.6h0c0,0-0.1,0-0.1,0c-0.4-0.2-0.9-0.4-1.4-0.6
	c-0.5-0.2-0.9-0.4-1.4-0.7h0v0c-0.5-0.2-0.9-0.4-1.4-0.7c-0.5-0.2-0.9-0.5-1.4-0.7c-0.5-0.2-0.9-0.5-1.4-0.7
	c-0.4-0.2-0.9-0.5-1.3-0.7c-0.4-0.2-0.9-0.5-1.3-0.7h0c-0.4-0.2-0.9-0.5-1.3-0.7c-0.4-0.2-0.9-0.5-1.3-0.7l-1.3-0.8
	c-0.4-0.2-0.8-0.5-1.3-0.7h0c-0.4-0.2-0.8-0.5-1.2-0.8h0c-0.4-0.3-0.9-0.5-1.3-0.8c-0.4-0.2-0.7-0.4-1.1-0.7c0,0-0.1-0.1-0.2-0.1h0
	v0c-0.2-0.1-0.5-0.3-0.8-0.5c-0.2-0.1-0.3-0.2-0.5-0.3h0c-0.4-0.3-0.8-0.5-1.2-0.8h0c-0.4-0.3-0.8-0.5-1.3-0.8
	c-0.4-0.3-0.8-0.5-1.3-0.8c-0.4-0.3-0.8-0.5-1.3-0.8l-1.2-0.8h0l-1.3-0.8h0l-1.3-0.8l-1.3-0.8l-1.3-0.8h0l-1.3-0.9h0v0
	c-0.1,0-0.2-0.1-0.3-0.2l-1-0.7l-1.3-0.9l-1.3-0.9h0l-1.3-0.9l-1.3-0.9h0l-1.3-0.9h0l-1.3-0.9l-1.3-0.9l-1.3-0.9h0l-1.3-0.9
	l-0.4-0.3v0c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.1-0.3-0.2-0.4l0,0c-0.1-0.3,0-0.7,0-0.7c0-0.1,0.1-0.2,0.1-0.2l0,0
	c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.2-0.1,0.2-0.2l0,0c0.3-0.1,0.5-0.1,0.5-0.1v0l4.8,0.2l12.8,0.5l14.3,0.5l9.4,0.3l4,0.1l6.9,0.2
	l3.2,0.1l3,0.1l2.8,0.1l10.4,0.4h0l9,0.3h0.1l2.2,0.1l2.1,0.1l5.6,0.2l0.4,0l2,0.1l1.9,0.1L288.9,211.8z"></path>
<path style="fill:#ffffff;" d="M189.3,186.4l-1.5,0.8h0l-0.9,0.5l-0.6,0.3l-1.5,0.8h0l-1.2,0.6c-0.1,0.1-0.2,0.1-0.3,0.1h0
	c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.2,0s-0.2,0-0.2-0.1h0c0,0,0,0-0.1,0c-0.1,0-0.1-0.1-0.2-0.1l0,0c0,0-0.1,0-0.1,0h0
	c-0.1-0.1-0.2-0.2-0.3-0.3c0,0,0-0.1-0.1-0.1c0-0.1-0.1-0.2-0.1-0.4c0,0,0-0.1,0-0.1c0-0.3,0.1-0.6,0.1-0.6h0l0.1-0.1l0.4-0.9
	l0.4-0.8l0.4-0.9l0.4-0.8c0-0.1,0.1-0.2,0.1-0.2l0.3-0.6h0c0.1-0.3,0.2-0.6,0.4-0.8l0,0v0l0.4-0.8l0.4-0.9l0.4-0.8l0.4-0.9l0.4-0.8
	l0.4-0.8h0l0.4-0.9l0,0c0.2-0.5,0.5-1,0.8-1.5l0.1-0.1l0.4-0.9l0.4-0.9c0-0.1,0.1-0.2,0.1-0.3l0.3-0.6l0.4-0.9l0.4-0.8h0
	c0.1-0.3,0.3-0.6,0.4-0.8v0l0.4-0.9l0.4-0.9l0.4-0.9h0c0.1-0.2,0.2-0.4,0.3-0.6l0.1-0.2c0.1-0.2,0.2-0.5,0.4-0.7
	c0-0.1,0.1-0.1,0.1-0.2l0.9-1.7c0.2-0.3,0.3-0.6,0.4-0.9c0.1-0.3,0.3-0.6,0.4-0.9l0.5-0.9c0.2-0.3,0.3-0.6,0.5-0.9
	c0.1-0.3,0.3-0.6,0.4-0.9v0c0.1-0.1,0.1-0.3,0.2-0.4l0.2-0.4h0l0.5-0.9l0.5-0.9l0.5-0.9l0.5-0.9l0.5-0.9l0.5-0.9l0.5-0.9
	c0.2-0.3,0.3-0.6,0.5-0.9l0,0l0.5-0.9l0.5-0.9l0.5-0.9c0.1-0.3,0.3-0.5,0.4-0.8l0.1-0.1h0l0.5-0.9v0c0.2-0.3,0.3-0.6,0.5-0.9h0
	c0-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.2-0.4,0.3-0.6l0.5-0.9l0.5-0.9l0.5-0.9l0.5-0.9l0.5-0.9l0.5-0.9v0c0.2-0.3,0.3-0.6,0.5-0.9
	l0.5-0.9c0,0,0,0,0,0l0.5-0.9h0c0.2-0.3,0.3-0.6,0.5-0.9l0.5-0.9l0.5-0.9v0l0.5-0.9v0h0l0.5-0.9l0,0l0.5-0.9v0
	c0.2-0.3,0.4-0.6,0.6-0.9l1.1-1.9c0.4-0.6,0.8-1.3,1.1-1.9l0.6-1c0.2-0.3,0.4-0.7,0.6-1l0.6-1l1.2-2c0.4-0.7,0.8-1.4,1.2-2l0,0
	l0.6-1l0.6-1l0.6-1.1l0.7-1.1l1.3-2.2l1.4-2.2l0.7-1.1l0.7-1.2h0c0.2-0.4,0.5-0.8,0.7-1.2l0.8-1.2v0c0.7-1.2,1.5-2.3,2.2-3.5
	l0.2-0.3l0.8-1.3l0.9-1.3h0c0.2-0.3,0.4-0.6,0.6-1l0.3-0.4c0.3-0.5,0.6-1,0.9-1.4l1-1.5h0c0.3-0.5,0.6-0.9,0.9-1.4l0.1-0.2l1.1-1.6
	c0.4-0.6,0.8-1.2,1.1-1.7c0,0,0,0,0,0c0.4-0.6,0.8-1.2,1.2-1.8c0.5-0.7,0.9-1.3,1.3-2c0,0,0,0,0,0c0.1-0.2,0.2-0.4,0.4-0.6
	c0.4-0.6,0.8-1.1,1.1-1.6c0,0,0,0,0,0c0.1-0.2,0.3-0.4,0.4-0.6c0.5-0.7,0.9-1.3,1.3-1.9c0.7-1.1,1.5-2.1,2.2-3.1c0,0,0,0,0,0l0,0
	c1-1.4,1.9-2.8,2.9-4.1c0.2-0.2,0.3-0.4,0.4-0.6c0.5-0.7,1-1.4,1.5-2.2c2-2.8,3.8-5.3,5.6-7.7c0,0,0,0,0,0c1.2-1.6,2.3-3.1,3.4-4.6
	c0.8-1.1,1.5-2.1,2.3-3c0.2-0.3,0.5-0.6,0.7-0.9c0.4-0.5,0.8-1,1.2-1.5c0.6-0.7,1.1-1.4,1.6-2.1c0.3-0.3,0.5-0.7,0.8-1c0,0,0,0,0,0
	c0.2-0.3,0.5-0.6,0.7-0.9c0.1-0.2,0.2-0.3,0.4-0.5c0.2-0.3,0.4-0.5,0.6-0.8c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.1,0.2-0.2,0.3-0.3
	c0-0.1,0.1-0.1,0.1-0.2c0.5-0.6,0.9-1.1,1.2-1.5l0,0c0.2-0.2,0.3-0.4,0.4-0.5c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.2-0.2
	s0.1,0.1,0.2,0.2l0.1,0.1c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0.1,0.1c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1l0.3,0.3
	c0.1,0.1,0.3,0.3,0.4,0.4c0.2,0.2,0.5,0.5,0.8,0.8c0.1,0.1,0.2,0.2,0.3,0.4c0.1,0.1,0.3,0.3,0.4,0.4c0.2,0.2,0.5,0.5,0.7,0.8v0
	c0.2,0.3,0.5,0.5,0.7,0.8c0.2,0.3,0.5,0.5,0.7,0.8h0c0.2,0.3,0.5,0.5,0.7,0.8c0.2,0.3,0.5,0.5,0.7,0.8c0.2,0.3,0.5,0.6,0.7,0.8
	c0.2,0.3,0.5,0.5,0.7,0.8c0.2,0.3,0.5,0.6,0.7,0.8v0c0.2,0.3,0.5,0.6,0.7,0.8c0.2,0.3,0.4,0.6,0.7,0.9c0.2,0.3,0.4,0.6,0.7,0.9
	c0.2,0.3,0.4,0.6,0.6,0.9c0.2,0.3,0.4,0.6,0.6,0.9c0,0,0,0,0,0c0.2,0.3,0.4,0.6,0.6,0.9c0.2,0.3,0.4,0.6,0.6,0.9v0
	c0.2,0.3,0.4,0.6,0.6,0.9c0.2,0.3,0.4,0.6,0.6,0.9c0.2,0.3,0.4,0.6,0.6,0.9c0.2,0.3,0.4,0.6,0.6,1c0.2,0.3,0.4,0.6,0.6,1
	c0.2,0.3,0.4,0.6,0.6,1c0,0.1,0.1,0.1,0.1,0.2c0.2,0.3,0.3,0.5,0.5,0.8c0.2,0.3,0.4,0.7,0.5,1c0.2,0.3,0.4,0.7,0.6,1
	c0.2,0.3,0.3,0.7,0.5,1c0.2,0.3,0.4,0.7,0.5,1c0.2,0.3,0.3,0.7,0.5,1c0.2,0.4,0.3,0.7,0.5,1c0.2,0.4,0.3,0.7,0.5,1.1v0c0,0,0,0,0,0
	c0.2,0.4,0.3,0.7,0.5,1.1c0.2,0.4,0.3,0.7,0.5,1.1c0.1,0.4,0.3,0.8,0.4,1.1c0.1,0.4,0.3,0.8,0.4,1.2c0.1,0.4,0.3,0.8,0.4,1.2v0
	c0.1,0.4,0.2,0.8,0.4,1.2c0.1,0.4,0.2,0.8,0.3,1.2v0c0.1,0.4,0.2,0.8,0.3,1.2c0,0,0,0,0,0.1c0.1,0.4,0.2,0.8,0.3,1.2
	c0.1,0.3,0.2,0.7,0.2,1.1c0,0.2,0.1,0.5,0.1,0.7c0,0.3,0.1,0.6,0.1,0.8c0.1,0.5,0.2,0.9,0.2,1.4c0.1,0.9,0.2,1.9,0.3,2.8
	c0,0,0,0.1,0,0.1c0,0.2,0,0.5,0,0.8c0,0.2,0,0.5,0,0.8c0,0.5,0,1.1,0,1.6c0,0.5,0,1.1,0,1.6c0,0.1,0,0.3,0,0.4c0,0.4,0,0.9-0.1,1.3
	c0,0.3,0,0.7-0.1,1c0,0.3-0.1,0.5-0.1,0.8v0c0,0.3-0.1,0.6-0.1,0.9c0,0.2,0,0.3-0.1,0.5c0,0.2,0,0.3-0.1,0.5c0,0.1,0,0.2-0.1,0.4
	c-0.1,0.5-0.2,1.1-0.3,1.6c-0.1,0.4-0.2,0.8-0.3,1.3c-0.1,0.3-0.1,0.6-0.2,0.8c0,0,0,0,0,0.1c-0.1,0.3-0.2,0.6-0.3,0.9
	c0,0.1,0,0.2-0.1,0.2c-0.1,0.3-0.2,0.7-0.3,1c-0.3,0.8-0.6,1.7-0.9,2.5v0c0,0.1-0.1,0.2-0.1,0.2c-0.2,0.4-0.3,0.8-0.5,1.1
	c0,0.1-0.1,0.2-0.1,0.2c-0.2,0.4-0.3,0.7-0.5,1.1c-0.1,0.2-0.2,0.4-0.3,0.7c0,0.1-0.1,0.2-0.1,0.3c-0.2,0.4-0.4,0.9-0.7,1.3
	c-0.2,0.3-0.3,0.6-0.5,0.8c-0.2,0.3-0.4,0.6-0.6,0.9c0,0,0,0,0,0c-0.2,0.3-0.4,0.6-0.5,0.9c-0.3,0.5-0.6,0.9-0.9,1.4
	c-0.1,0.1-0.1,0.2-0.2,0.3c-0.2,0.2-0.3,0.4-0.5,0.7c-0.1,0.2-0.2,0.3-0.4,0.5c-0.2,0.3-0.4,0.5-0.6,0.8c-0.2,0.2-0.3,0.4-0.5,0.6
	c-0.6,0.8-1.2,1.5-1.8,2.1c0,0,0,0,0,0h0c0,0,0,0,0,0c-0.1,0.1-0.2,0.2-0.3,0.3c-0.6,0.7-1.2,1.3-1.7,1.8c-0.1,0.1-0.2,0.2-0.3,0.3
	c-0.2,0.2-0.4,0.4-0.6,0.6c-0.1,0.1-0.3,0.2-0.4,0.3c-0.5,0.5-0.8,0.7-0.8,0.7c-1.2,1.2-2.5,2.3-3.8,3.5c-1.8,1.6-3.7,3.2-5.7,4.8
	c-0.7,0.5-1.4,1.1-2.1,1.6c-0.5,0.4-1,0.8-1.6,1.2c-0.5,0.4-1.1,0.8-1.6,1.2c-1.1,0.8-2.2,1.6-3.3,2.4c-1.7,1.2-3.4,2.4-5.2,3.6
	c-0.7,0.5-1.5,1-2.2,1.5s-1.5,1-2.2,1.5c-1.3,0.9-2.6,1.7-3.9,2.5c-1.2,0.8-2.3,1.5-3.5,2.2h0c-1.1,0.7-2.1,1.3-3.2,2
	c-1,0.6-2,1.2-3,1.8c-0.9,0.6-1.9,1.1-2.8,1.7c-0.9,0.5-1.8,1.1-2.6,1.6c-0.8,0.5-1.7,1-2.5,1.5h0c-0.8,0.5-1.6,0.9-2.4,1.4
	c-0.8,0.5-1.5,0.9-2.3,1.3c-0.7,0.4-1.5,0.9-2.2,1.3c-0.7,0.4-1.4,0.8-2.1,1.2c-0.7,0.4-1.4,0.8-2.1,1.2h0c-0.7,0.4-1.3,0.8-2,1.1h0
	c-0.7,0.4-1.3,0.7-2,1.1c-0.7,0.4-1.3,0.7-1.9,1.1h0l-1.9,1l-1.8,1l-1.8,1l-1.8,1h0l-1.7,0.9h0l-1.3,0.7c-0.1,0.1-0.3,0.2-0.4,0.2h0
	c-0.3,0.2-0.7,0.4-1,0.6l-0.6,0.3v0h0l-1.6,0.9h0l-1.6,0.9h0l-1.6,0.8l-1.3,0.7c-0.1,0.1-0.2,0.1-0.3,0.2h0
	c-0.3,0.2-0.6,0.3-0.9,0.5l-0.7,0.3h0l-1.5,0.8h0l-1.2,0.6C189.5,186.3,189.4,186.4,189.3,186.4L189.3,186.4L189.3,186.4z"></path>
<path style="fill:#ffffff;" d="M311.2,168.2c-10.5,22.2-30.6,29-30.6,29c-2.9,1.2-5.8,2.1-8.5,2.7c-0.3,0.1-0.6,0.1-0.9,0.2
	c-0.3,0.1-0.5,0.1-0.8,0.2c-0.6,0.1-1.1,0.2-1.6,0.3h0c-0.1,0-0.2,0-0.3,0c-0.2,0-0.5,0.1-0.7,0.1c-0.2,0-0.5,0.1-0.7,0.1
	c-0.2,0-0.4,0-0.6,0.1c-0.1,0-0.2,0-0.2,0c-0.2,0-0.4,0.1-0.6,0.1c0,0-0.1,0-0.1,0c-0.6,0.1-1.1,0.1-1.5,0.2h0
	c-0.5,0-0.8,0.1-1.1,0.1c-0.1,0-0.1,0-0.2,0h-0.1c-0.1,0-0.2,0-0.2,0c-0.2,0-0.3,0-0.3,0c-0.1,0-0.4,0-0.9,0h0c-0.1,0-0.2,0-0.3,0
	c-0.3,0-0.7,0-1.1,0h0c-0.4,0-0.9,0-1.4,0l-1.4,0l-1.4,0h-0.5c-0.3,0-0.6,0-1,0c-0.5,0-0.9,0-1.4,0h-1.5c-0.4,0-0.9,0-1.3,0h-0.5
	c-0.3,0-0.6,0-1,0c-0.5,0-1,0-1.5,0h-5.9c-1,0-2,0-3,0h-4.6c-3.1,0-6.4,0-9.6,0c-1.1,0-2.2,0-3.3,0h-0.6c-1,0-1.9,0-2.9,0
	c-3.1,0-6.1,0-8.9,0h-0.8c-2.4,0-4.7,0-6.9,0h-0.9c-1.6,0-3.1,0-4.5,0h-0.8c-1.6,0-3.1,0-4.3,0h-0.7c-0.3,0-0.5-0.2-0.7-0.3
	c-0.1-0.1-0.1-0.2-0.2-0.2c0-0.1-0.1-0.1-0.1-0.1c0-0.1-0.1-0.2-0.1-0.2c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0-0.5,0.5-1,0.5-1l0,0
	l0.8-0.6c0,0,0,0,0,0c0.8-0.5,1.5-1,2.3-1.5s1.6-1,2.4-1.6c2.2-1.5,4.5-3,6.9-4.5c0,0,0,0,0,0c1.7-1.1,3.4-2.1,5.1-3.2
	c1.6-1,3.2-2,4.8-3c1-0.7,2.1-1.3,3.2-2c1-0.6,2.1-1.3,3.2-1.9c1.2-0.7,2.3-1.4,3.5-2.1c0,0,0,0,0,0c2.4-1.5,4.9-2.9,7.3-4.4
	c1.7-1,3.4-2,5-3c0,0,0,0,0,0c1.4-0.8,2.8-1.6,4.2-2.5l0,0c1.2-0.7,2.5-1.4,3.7-2.2c1.1-0.6,2.2-1.3,3.3-1.9l0,0l3.1-1.8l0,0
	l2.8-1.6l2.6-1.5c0,0,0,0,0,0l2.6-1.5l2.4-1.4l0,0l2.3-1.3l0,0l2.2-1.3l2.2-1.2l2.1-1.2l2-1.1l2-1.1l1.9-1.1c0,0,0,0,0,0l1.9-1
	c0.3-0.1,0.5-0.3,0.8-0.4l1.1-0.6c0,0,0,0,0,0l1.4-0.8c0.1-0.1,0.3-0.1,0.4-0.2h0v0l1.7-1l0,0c0.6-0.3,1.2-0.7,1.7-1l0.4-0.2
	c0.4-0.2,0.9-0.5,1.3-0.7c0.3-0.2,0.6-0.3,0.9-0.5l0.8-0.5l1.6-0.9c0,0,0,0,0,0v0l0.6-0.4c0.3-0.2,0.6-0.3,0.9-0.5v0l1.6-0.9
	c0,0,0,0,0,0l1.6-0.9l1.5-0.8l0.2-0.1c0.4-0.2,0.9-0.5,1.3-0.7c0.2-0.1,0.4-0.2,0.5-0.3l1-0.6c0.5-0.3,1-0.5,1.5-0.8h0v0
	c0,0,0.1,0,0.1-0.1l1.3-0.7l0.3-0.2c0.4-0.2,0.8-0.4,1.1-0.6c0.2-0.1,0.3-0.2,0.5-0.2l1-0.5l0.5-0.3c0.3-0.2,0.6-0.3,0.9-0.5
	c0.4-0.2,0.8-0.4,1.2-0.7c0.1,0,0.1-0.1,0.2-0.1v0l1.4-0.8l0.9-0.5c0.2-0.1,0.3-0.2,0.5-0.2c0.4-0.2,0.8-0.4,1.2-0.6
	c0.1,0,0.1-0.1,0.2-0.1v0l1.2-0.7c0,0,0.1,0,0.1-0.1v0l0.7-0.4c0.2-0.1,0.4-0.2,0.6-0.3c0,0,0,0,0.1,0c0.3-0.2,0.6-0.3,0.9-0.5
	l0.2-0.1c0,0,0.1,0,0.1-0.1v0l0.4-0.2c0.3-0.2,0.5-0.2,0.5-0.2c0,0.1,0,0.2,0.1,0.2c0.2,0.5,0.3,1,0.5,1.5c0.1,0.4,0.2,0.9,0.4,1.3
	c0.2,0.9,0.4,1.7,0.6,2.6c0,0,0,0.1,0,0.1c0.1,0.2,0.1,0.5,0.2,0.7c0,0.2,0.1,0.5,0.1,0.7c0.1,0.5,0.2,1,0.3,1.5
	c0.1,0.5,0.1,1,0.2,1.5c0.1,0.4,0.1,0.8,0.2,1.2c0,0.1,0,0.2,0,0.4v0c0,0.1,0,0.2,0,0.2c0,0.4,0.1,0.8,0.1,1.2c0,0.1,0,0.1,0,0.2
	c0,0.6,0.1,1.1,0.1,1.7c0,0.6,0,1.2,0,1.7C316.8,157.8,311.2,168.2,311.2,168.2z"></path>
</svg>
				                </div>
				                <div class="customers-logo-con foodora" style="width: 100px; height: auto; margin-top: 20px;">
				                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 66 16"><path fill="#ffffff" d="M34 16h-6v-5.2c0-.7-.3-1.3-.7-1.8L25 6.7c-.5-.4-1.1-.7-1.8-.7H22v10h-6V0h8.7c1.3 0 2.6.5 3.5 1.5l4.3 4.3c1 .9 1.5 2.2 1.5 3.5V16zM60 0v5.2c0 .7-.3 1.3-.7 1.8L57 9.3c-.5.5-1.1.7-1.8.7h-2.5c.8-.9 1.3-2.1 1.3-3.3V0h-6v5.2c0 .7-.3 1.3-.7 1.8L45 9.3c-.5.5-1.1.7-1.8.7H42V0h-6v16h8.7c1.3 0 2.6-.5 3.5-1.5l2.8-2.8V16h5.7c1.3 0 2.6-.5 3.5-1.5l4.3-4.3c1-.9 1.5-2.2 1.5-3.5V0h-6zM14 0H0v6h4v10h6V6h4"></path></svg>				                </div>
			                </div>
		                </div>

		            </div>
		        </div>

			</div>
		</div>
	</div>
</div>


                    <div class="clearfix read-more-cta js-read-more-cta" style="width: 100%;">
                        <a href="contact-sales.php" class="btn btn-cta" style="width: 100%;">Get in touch with Sales ⇢</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

    <section class="page-section example">
        <div class="container">
            <div class="row">

                <div class="col-md-4">

                <div style="margin-left: -150px;">
                <div class="device-container hidden-xs hidden-sm" style="float: left;">
    <div class="device-mockup">

        <div class="device" style="transform: rotate(-10deg);">
            <div class="device-screen">

                <div class="device-ui">
                    <div class="device-ui-status-bar">
                        12:26                        <i class="fa fa-signal" aria-hidden="true" style="right: 20px;"></i>
                        <i class="fa fa-battery-half pull-right"></i>
                    </div>

                    
                        <div class="device-ui-name-bar">
    <span>From:</span> SUITSUPPLY</div>
<div class="device-ui-messages">

    
    	<div class="message left ">
            Your suit has been tailored and it’s ready to wear 👔. Stop by our New York shop to pick it up any day between 9h and 20h.        </div>

    
    	<div class="message left map">
                    </div>

    
</div>
<div class="device-ui-input-bar clearfix">
    <div class="device-ui-input-bar-emoji">
        <i class="fa fa-smile-o" aria-hidden="true"></i>
    </div>
    <div class="device-ui-input-bar-field">Type a message</div>
</div>
                    

                </div>

            </div>
        </div>

    </div>
</div>                </div>

                </div>
                <div class="col-md-8">
                    <div class="row flex">
                        <header class="col-md-12">
                            <h4 class="page-section-tag">Features</h4>
                            <h2 class="page-section-heading">Optimize your chat experience</h2>
                        </header>
                        <div class="pane">
                            <h4 class="features-label"><img width="20" class="label-icon" src="..\assets\assets-images\icons\500\20pt24box\mb-chat-omni.svg"> Omni-channel API</h4>
                            <p class="benefits-copy sp">Build, integrate, and send messages on any and all channels without repeating tasks.</p>
                        </div>
                        <div class="pane">
                            <h4 class="features-label"><img width="20" class="label-icon" src="..\assets\assets-images\icons\500\20pt24box\mb-chat-platform.svg"> Preferred Platform</h4>
                            <p class="benefits-copy sp">Maintain a presence on the chat platforms your customers already use and love.</p>
                        </div>
                        <div class="pane">
                            <h4 class="features-label"><img width="20" class="label-icon" src="..\assets\assets-images\icons\500\20pt24box\mb-chat-data.svg"> Data Enrichment</h4>
                            <p class="benefits-copy sp">Collect additional points of contact for each customer you converse with via Chat.</p>
                        </div>
                        <div class="pane">
                            <h4 class="features-label"><img width="20" class="label-icon" src="..\assets\assets-images\icons\500\20pt24box\mb-chat-richmedia.svg"> Rich Media</h4>
                            <p class="benefits-copy sp">Use images, audio, video, and geolocations to enrich and contextualize your conversations.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    
<section class="page-section code-example no-border new">

<div style="background: #fff;position: absolute;left: 0;top: 0;min-width: 1050px;height: 100%;-webkit-clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);"></div>

	<div class="container">
		<div class="row">

            
			<div class="col-md-6">

				<span class="page-section-tag code-example-sub-heading">Developers</span>
				<h3 class="page-section-heading">Easily integrate our Chat API</h3>

				<p class="code-example-content lp">Seamlessly integrate our Chat API within your CRM software, website, or app and access all our offered channels through a single setup process. Check out our developer documentation and start having rich conversations with your users.</p>

                
                <ul class="code-example-libs">
                    <li>
                        <a href="https://developers.messagebird.com/docs/introduction" target="_blank">
                            <img src="https://cdn-gc.messagebird.com/assets/images/icons/libraries/curl.svg">
                        </a>
                    </li>
                    <li>
                        <a href="https://developers.messagebird.com/docs/introduction" target="_blank">
                            <img src="https://cdn-gc.messagebird.com/assets/images/icons/libraries/csharp.svg">
                        </a>
                    </li>
                    <li>
                        <a href="https://developers.messagebird.com/docs/introduction" target="_blank">
                            <img src="https://cdn-gc.messagebird.com/assets/images/icons/libraries/go.svg">
                        </a>
                    </li>
                    <li>
                        <a href="https://developers.messagebird.com/docs/introduction" target="_blank">
                            <img src="https://cdn-gc.messagebird.com/assets/images/icons/libraries/java.svg">
                        </a>
                    </li>
                    <li>
                        <a href="https://developers.messagebird.com/docs/introduction" target="_blank">
                            <img src="https://cdn-gc.messagebird.com/assets/images/icons/libraries/nodejs.svg">
                        </a>
                    </li>
                    <li>
                        <a href="https://developers.messagebird.com/docs/introduction" target="_blank">
                            <img src="https://cdn-gc.messagebird.com/assets/images/icons/libraries/php.svg">
                        </a>
                    </li>
                    <li>
                        <a href="https://developers.messagebird.com/docs/introduction" target="_blank">
                            <img src="https://cdn-gc.messagebird.com/assets/images/icons/libraries/python.svg">
                        </a>
                    </li>
                    <li>
                        <a href="https://developers.messagebird.com/docs/introduction" target="_blank">
                            <img src="https://cdn-gc.messagebird.com/assets/images/icons/libraries/ruby.svg">
                        </a>
                    </li>
                </ul>

                
									<a class="page-section-link" href="https://developers.messagebird.com/docs/chat" onclick="analytics.track('web:productDocsPressed', {&quot;page&quot;:&quot;chat&quot;});">Visit the developer docs ⇢</a>
				
			</div>

            
            <div class="col-md-6">
                <div class="tab-content text-right hidden-xs">
					                                            <div role="tabpanel" class="tab-pane text-left  active" id="curl">
							                            <pre class="line-numbers new"><code class="language-bash">$ curl -X "POST" "https://chat.messagebird.com/1/messages" \
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

    
<section class="page-section pricing-block">

    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <div class="article">
                    <img src="https://cdn-gc.messagebird.com/assets/images/2017/chat-pricing.png" srcset="https://cdn-gc.messagebird.com/assets/images/2017/chat-pricing@2x.png 2x" width="80">
                    <h3 class="page-section-heading new">Scalable Chat pricing</h3>
                    <p class="lp">Our pricing tiers are based on Monthly Active Users (MAU) and data storage. We track MAU per month and define them as each active user you converse with at any given time during that month.</p>
                    <p>Can’t find a plan that suits your needs? <a href="contact-sales.php">Get in touch with our sales team</a> for a custom plan.</p>
                </div>

                <a href="chat\pricing.php" class="btn btn-cta" style="" onclick="analytics.track('web:productPricingPressed', {&quot;page&quot;:&quot;chat&quot;});">Check out Chat pricing ⇢</a>

            </div>
            <div class="col-sm-6">

                <div class="statistics clearfix">
                    <div class="statistic separate">
                        <span class="pill pill-chat">Free</span>
                        <div class="number">
                            €0                        </div>
                        <div class="sp description">50 MAU<br>10 GB Storage</div>
                    </div>
                    <div class="statistic">
                        <span class="pill pill-chat">Startup</span>
                        <div class="number">
                            €49                        </div>
                        <div class="sp description">5,000 MAU<br>500 GB Storage</div>
                    </div>
                </div>
                <div class="statistics clearfix">
                    <div class="statistic separate">
                        <span class="pill pill-chat">Business</span>
                        <div class="number">
                         €99                        </div>
                        <div class="sp description">10,000 MAU<br>1 TB Storage</div>
                    </div>
                    <div class="statistic">
                        <span class="pill pill-chat">Enterprise</span>
                        <div class="number">
                            €599                        </div>
                        <div class="sp description">60,000 MAU<br>5 TB Storage</div>
                    </div>
                </div>

                <h4>All plans include:</h4>

                <div class="statistics clearfix">
                    <div class="statistic separate">
                        <div class="sp"><i class="fa fa-check" aria-hidden="true"></i> Unlimited Messages</div>
                        <div class="sp"><i class="fa fa-check" aria-hidden="true"></i> Unlimited Apps</div>
                    </div>
                    <div class="statistic">
                        <div class="sp"><i class="fa fa-check" aria-hidden="true"></i> Unlimited Channels</div>
                        <div class="sp"><i class="fa fa-check" aria-hidden="true"></i> Messaging API &amp; Webhooks</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
    <section class="page-section the-difference">

    <div class="skewed-background"></div>

    <div class="container">
        <div class="row">

            <header class="pane col-md-12 text-center">
                <h4 class="page-section-tag"><span>The MessageBird Difference</span></h4>
            </header>

                            <div class="pane col-md-3">
                    <h4 class="features-label">Quality</h4>
                    <p class="benefits-copy sp">Connect to 900+ global carriers through our fully redundant routing platform with access to extensive feature sets and more.</p>
                </div>
            
            <div class="pane col-md-3">
                <h4 class="features-label">Speed &amp; Deliverability</h4>
                <p class="benefits-copy sp">Reach customers through our low-latency, fault-tolerant telco stack, streamlined routing profiles, and global carrier network.</p>
            </div>

            <div class="pane col-md-3">
                <h4 class="features-label">24/7 Support</h4>
                <p class="benefits-copy sp">Our offices around the world provide unparalleled support in every time zone, 24 hours a day, 7 days a week.</p>
            </div>

            <div class="pane col-md-3">
                <h4 class="features-label">Fair Pricing</h4>
                <p class="benefits-copy sp">Our efficient, accurate software and high-volume traffic allow us to offer you the most affordable pricing options on the market.</p>
            </div>

        </div>
    </div>

</section>
<!--sales form-->
<?php include('salesform.php') ?>      

</div>            </div>

            <nav id="mobilemenu" class="slideout-menu">

    <h4>Products</h4>
    <ul role="menu">
        <li><a href="sms.php" class="clearfix" role="menuitem"><img style="margin-right: 5px;" src="https://cdn-gc.messagebird.com/assets/images/2017/icon-sms--dark.svg" width="20" height="20"> SMS Gateway</a></li>
        <li><a href="voice.php" class="clearfix" role="menuitem"><img style="margin-right: 5px;" src="https://cdn-gc.messagebird.com/assets/images/2017/icon-voice--dark.svg" width="20" height="20"> Voice</a></li>
        <li><a href="chat-api.php" class="clearfix" role="menuitem"><img style="margin-right: 5px;" src="https://cdn-gc.messagebird.com/assets/images/2017/icon-chat--dark.svg" width="20" height="20"> Chat</a></li>
        <li><a href="/en/virtual-mobile-number" class="clearfix" role="menuitem"><img style="margin-right: 5px;" src="https://cdn-gc.messagebird.com/assets/images/2017/icon-numbers--dark.svg" width="20" height="20"> Numbers</a></li>
        <li><a href="verify.php" class="clearfix" role="menuitem"><img style="margin-right: 5px;" src="https://cdn-gc.messagebird.com/assets/images/2017/icon-verify--dark.svg" width="20" height="20"> Verify</a></li>
        <li><a href="lookup.php" class="clearfix" role="menuitem"><img style="margin-right: 5px;" src="https://cdn-gc.messagebird.com/assets/images/2017/icon-lookup--dark.svg" width="20" height="20"> Lookup</a></li>
        <li><a role="menuitem" href="pricing.php"><img style="margin-right: 5px;" src="https://cdn-gc.messagebird.com/assets/images/2017/icon-pricing--dark.svg" width="20" height="20"> Pricing</a></li>
    </ul>

    <h4>Company</h4>
    <ul role="menu">
        <li><a role="menuitem" href="about.php">About</a></li>
        <li><a role="menuitem" href="/en/careers" target="_blank">Careers</a></li>
        <li><a role="menuitem" href="security.php">Security</a></li>
        <li><a role="menuitem" href="customers.php">Customers</a></li>
        <li><a role="menuitem" href="http://status.messagebird.com" target="_blank">System Status</a></li>
        <li><a role="menuitem" href="contact.php">Contact</a></li>
    </ul>

    <h4>Dashboard</h4>
    <ul role="menu">
        <li><a role="menuitem" href="/app/en/login">Login</a></li>
        <li><a class="btn btn-cta" role="menuitem" href="/app/en/signup">Signup</a></li>
    </ul>

</nav>
<?php include('footer.php') ?>       

<script>
    var env = 'production';
</script>
<!-- env: prod-marketing-production-marketing-3276192651-gr778 - 202.90.137.43 -->

            <script src="https://cdn-gc.messagebird.com/assets/js/all-243683dec71a0e3b94c6cf8e0cf76fab.js"></script>
<script src="https://cdn-gc.messagebird.com/assets/js/extra-c21a209f2e140b18144adcd7b3322437.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {

	$('.modal[role="dialog"]').appendTo('body');

	$('.download-pdf').submit(function() {
		var _this = $(this);
		var formResult = $('.result-chat-whitepaper'); // PHP chat-whitepaper
	    $.ajax({
	        url: '/en/downloadpdf',
	        type: 'POST',
	        data: _this.serialize(),
	        complete: function(jqXHR, msg) {

	                var result = '';
	            if (msg === 'success') {
	                result = 'Success! Check your inbox the download the PDF.';
	                formResult.css('color', '#73C87B');
	            } else {
	                result = 'Something went wrong, please try again';
	                formResult.css('color', '#D75453');
	            }

	            formResult.html(result);

	            window.setTimeout(function(){
				   $('.modal').modal('hide');
				   formResult.html('');
				}, 3000);

	        }
	    });

	    return false;

	});


});</script>        </div>
    </body>
</html>

<script type="text/javascript">
    var dashboardUrl = 'https://dashboard.messagebird.com';
</script>

<script>

var cookiemsg = "MessageBird makes use of functional, performance and advertising cookies to provide you with an optimal user experience. You can find more information in our ";
var cookiepolicy = "cookie policy.";
var dismissmsg = "Accept all cookies";
var denymsg = "Manage cookies";

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
        "href": "/en/privacy#cookies"
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
    window.location.href = "/en/privacy#cookies";
};
</script>

<script src="..\assets\js\selectivity-jquery.min.js"></script>