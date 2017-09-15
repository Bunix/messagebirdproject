
<header class="header ">
    <nav class="header-top navbar navbar-default navbar-static-top hidden-xs" id="topbar">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li class="header-top-item" id="telephone">
                    <a class="header-top-link header-top-phone" id="phonenumber" href="contact.php" onclick="analytics.track('web:navContactPressed');">
                        <i class="fa fa-phone"></i>
                                            </a>
                </li>
                <li class="header-top-item header-cta">
                    <a href="../dashboard.messagebird/app/en/login.php" class="header-top-link btn-cta hidden-xs" onclick="analytics.track('web:navLoginPressed');">Login</a>
                </li>
                <li class="header-top-item header-cta">
                    <a href="../dashboard.messagebird/app/en/sign-up.php" class="header-top-link btn-cta hidden-xs" onclick="analytics.track('web:navSignUpPressed');">Signup</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="header-main hidden-xs" id="subbar">
      <div class="container">

        
          <div class="navbar-header logo hidden-xs">
              <a href="index.php" class="pull-left">
                                        <img class="header-logo" src="https://cdn-gc.messagebird.com/assets/images/logo.svg" id="logo" alt="MessageBird" height="32">
                                </a>
          </div>

          <div class="visible-md visible-lg navbar-collapse collapse navigation" id="subbar-navigation">

              
              <ul class="nav navbar-nav center-center">

                <li class="dropdown js-dropdown-toggle">
                      <a class="header-main-link">
                          <span class="link-title">
                              Products                          </span>
                      </a>
                      <div class="dropdown-menu products">
                          
<div class="dropdown-products animated zoomIn" role="menu" aria-labelledby="productMenu">
    <div class="dropdown-content new">
    
<ul class="animated zoomIn" role="menu" aria-labelledby="productsMenu">
    <li role="presentation big">
        <a role="menuitem" tabindex="-1" href="voice.php" onclick="analytics.track('web:navProductPressed', {&quot;page&quot;:&quot;voice&quot;});">
          <div class="menuitem-title"><img src="https://cdn-gc.messagebird.com/assets/images/2017/icon-voice.svg" width="20" height="20"> Voice <span class="menuitem-pill">Beta</span></div>
          <p class="sp">Add voice capabilities to any app, website, or communication system.</p>
        </a>
    </li>

    <li role="presentation big">
        <a role="menuitem" tabindex="-1" href="sms.php" onclick="analytics.track('web:navProductPressed', {&quot;page&quot;:&quot;sms&quot;});">
          <div class="menuitem-title"><img src="https://cdn-gc.messagebird.com/assets/images/2017/icon-sms.svg" width="20" height="20"> SMS</div>
          <p class="sp">Reach customers via the fastest, most reliable global messaging platform.</p>
        </a>
    </li>

    <li role="presentation big">
        <a role="menuitem" tabindex="-1" href="chat-api.php" onclick="analytics.track('web:navProductPressed', {&quot;page&quot;:&quot;chat&quot;});">
          <div class="menuitem-title"><img src="https://cdn-gc.messagebird.com/assets/images/2017/icon-chat.svg" width="20" height="20"> Chat</div>
          <p class="sp">Share rich conversations on customers’ preferred platforms.</p>
        </a>
    </li>
</ul>

<div class="dropdown-footer">
    <ul>
        <li role="presentation">
            <a role="menuitem" tabindex="-1" href="verify.php" onclick="analytics.track('web:navProductPressed', {&quot;page&quot;:&quot;verify&quot;});">
                <img src="https://cdn-gc.messagebird.com/assets/images/2017/icon-verify.svg" width="16" height="16"> Verify            </a>
        </li>

        <li role="presentation">
            <a role="menuitem" tabindex="-1" href="numbers.php" onclick="analytics.track('web:navProductPressed', {&quot;page&quot;:&quot;numbers&quot;});">
                <img src="https://cdn-gc.messagebird.com/assets/images/2017/icon-numbers.svg" width="16" height="16"> Numbers            </a>
        </li>

        <li role="presentation">
            <a role="menuitem" tabindex="-1" href="lookup.php" onclick="analytics.track('web:navProductPressed', {&quot;page&quot;:&quot;lookup&quot;});">
                <img src="https://cdn-gc.messagebird.com/assets/images/2017/icon-lookup.svg" width="16" height="16"> Lookup            </a>
        </li>
    </ul>
</div>
    </div>
</div>                      </div>
                  </li>

                  <li>
                    <a class="header-main-link" href="https://developers.messagebird.com" target="_blank" onclick="analytics.track('web:navDevelopersPressed');">
                        <span class="link-title">
                            Developers                        </span>
                    </a>
                  </li>

                  <li class="" onclick="analytics.track('web:navPricingPressed');">
                    <a class="header-main-link" href="pricing.php">
                        <span class="link-title">
                            Pricing                        </span>
                    </a>
                  </li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown js-dropdown-toggle ">
                      <a class="header-main-link">
                          <span class="link-title">
                              Company
                          </span>
                      </a>
                      <div class="dropdown-menu mini">
                          

<ul class="animated zoomIn" role="menu" aria-labelledby="aboutMenu">
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="about.php" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;about&quot;});">
          About        </a>
    </li>

    

    <li role="presentation">
        <a role="menuitem" tabindex="-1" target="_blank" href="http://blog.messagebird.com" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;blog&quot;});">
          Blog        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="http://jobs.messagebird.com" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;careers&quot;});">
              Careers        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="security.php" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;security&quot;});">
            Security        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="http://status.messagebird.com" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;systemStatus&quot;});">
            System Status        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="contact.php" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;contact&quot;});">
            Contact        </a>
    </li>
</ul>                      </div>
                  </li>

                  <li class="">
                      <a class="header-main-link" href="http://support.messagebird.com/hc/en-us/" onclick="analytics.track('web:navSupportPressed');">
                          <span class="link-title">
                              Help                          </span>
                      </a>
                  </li>

              </ul>
          </div>
        </div>
    </nav>

    
</header>