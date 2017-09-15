<section class="main-content js-main-content page-content " id="pjax-main-container" style="display: block;">
                <header class="page-title clearfix">
                                        <h1>Dashboard</h1>
            
                    </header>

        <div id="pjax-sub-container">

        
                        
<div class="dashboard-blocks">
    <section class="row">
    <div class="col-md-6">
        <table class="table table-messages-month">
            <thead>
            <tr>
                <th>Text</th>
                <th class="text-right">Sent</th>
                <th class="text-right">Received</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>This month</td>
                <td class="text-right" id="thisMonthMT"></td>
                <td class="text-right" id="thisMonthMO"></td>
            </tr>
            <tr>
                <td>Last month</td>
                <td class="text-right" id="lastMonthMT"></td>
                <td class="text-right" id="lastMonthMO"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-messages-day">
            <thead>
            <tr>
                <th>Text</th>
                <th class="text-right">Sent</th>
                <th class="text-right">Received</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Today</td>
                <td class="text-right" id="todayMT"></td>
                  <td class="text-right" id="todayMO"></td>
            </tr>
            <tr>
                <td>Yesterday</td>
                <td class="text-right" id="yesterdayMT"></td>
                  <td class="text-right" id="yesterdayMO"></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="row">
    <div class="col-md-6">
        <table class="table table-messages-schedule">
            <thead>
            <tr>
                <th>Scheduled</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Number of scheduled messages</td>
                <td class="text-right" id="cMessagesScheduled"></td>
            </tr>
            <tr>
                <td>Reserved balance</td>
                <td class="text-right" id="reservedBalance"></td>
            </tr>
            </tbody>
        </table>
    </div>
        <div class="col-md-6">
        <table class="table table-invoices">
            <thead>
            <tr>
                <th>Invoices</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Open invoices</td>
                <td class="text-right" id="cInvoices"></td>
            </tr>
            <tr>
                <td>Pending orders</td>
                <td class="text-right" id="cOrders"></td>
            </tr>
            </tbody>
        </table>
    </div>
    </section>
<section class="row">
    <div class="col-md-12">
        <div class="title-bar">
            <h2>Total messages sent</h2>
        </div>
        <div class="chart-options">
            <form action="/en/statistics/graphic/mt" rel="user-index-sms">
                <button class="btn active" rel="statistics-year">Per month</button>                                <button class="btn" rel="statistics-month">Per day</button>                <button class="btn" rel="statistics-day">Per hour</button>                <div class="pull-right">
                                        <div class="select2-container select2 select-datetime hidden" id="s2id_start_date_day" title="" style="display: inline-block; width: 200px;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-135">12</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen135" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-135" id="s2id_autogen135"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen135_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-135" id="s2id_autogen135_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-135">   </ul></div></div><select id="start_date_day" class="select2 select2-wide select-datetime hidden select2-filtered" name="start_date_day" title="" style="display: none;" tabindex="-1">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12" selected="">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>                    <div class="select2-container select2 select-datetime hidden" id="s2id_start_date_month" title="" style="display: inline-block; width: 140px;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-136">September</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen136" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-136" id="s2id_autogen136"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen136_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-136" id="s2id_autogen136_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-136">   </ul></div></div><select id="start_date_month" class="select2 select2-medium select-datetime hidden select2-filtered" name="start_date_month" title="" style="display: none;" tabindex="-1">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09" selected="">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>                    <div class="select2-container select2 select-datetime" id="s2id_start_date_year" title="" style="display: inline-block; width: 80px;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-137">2017</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen137" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-137" id="s2id_autogen137"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen137_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-137" id="s2id_autogen137_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-137">   </ul></div></div><select id="start_date_year" class="select2 select2-narrow select-datetime select2-filtered" name="start_date_year" title="" style="display: none;" tabindex="-1">
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017" selected="">2017</option>
</select>                </div>
            </form>
        </div>
        <div class="chart ct-chart" id="user-index-sms" data-highcharts-chart="2"><div class="highcharts-container" id="highcharts-6" style="position: relative; overflow: hidden; width: 1073px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="1073" height="400"><desc>Created with Highcharts 4.1.5</desc><defs><clipPath id="highcharts-7"><rect x="0" y="0" width="1000" height="312"></rect></clipPath></defs><rect x="0" y="0" width="1073" height="400" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background"></rect><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 146 10 L 146 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 230 10 L 230 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 313 10 L 313 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 396 10 L 396 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 480 10 L 480 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 563 10 L 563 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 646 10 L 646 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 730 10 L 730 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 813 10 L 813 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 896 10 L 896 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 980 10 L 980 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 1063 10 L 1063 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 63 10 L 63 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 63 322 L 1063 322" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 63 244 L 1063 244" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 63 166 L 1063 166" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 63 88 L 1063 88" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path><path fill="none" d="M 63 10 L 1063 10" stroke="#ECF2FC" stroke-width="2" stroke-dasharray="8,6" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-axis" zIndex="2"><text x="24.265625" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 24.265625 166)" class=" highcharts-yaxis-title" style="color:#2C3645;font-family:Proxima Nova;font-size:14;fill:#2C3645;" visibility="visible" y="166"><tspan>Amount of SMS</tspan></text></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(63,10) scale(1 1)" style="" clip-path="url(#highcharts-7)"><rect x="21.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="104.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="187.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="271.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="354.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="437.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="521.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="604.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="687.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="771.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="854.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect><rect x="937.5" y="312.5" width="40" height="0" stroke="#FFFFFF" stroke-width="1" fill="#2481D7" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(63,10) scale(1 1)" clip-path="none"></g></g><g class="highcharts-legend" zIndex="7" transform="translate(499,356)"><g zIndex="1"><g><g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)"><text x="21" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="15">Totals</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#2481D7"></rect></g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="104.66666666666666" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Jan</text><text x="188" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Feb</text><text x="271.3333333333333" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Mar</text><text x="354.66666666666663" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Apr</text><text x="438" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">May</text><text x="521.3333333333334" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Jun</text><text x="604.6666666666666" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Jul</text><text x="688" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Aug</text><text x="771.3333333333333" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Sep</text><text x="854.6666666666666" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Oct</text><text x="938" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Nov</text><text x="1021.3333333333334" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:78px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="344" opacity="1">Dec</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="48" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:344px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="329" opacity="1">0</text><text x="48" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:344px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="251" opacity="1">5</text><text x="48" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:344px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="173" opacity="1">10</text><text x="48" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:344px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="95" opacity="1">15</text><text x="48" style="color:#2C3645;cursor:default;font-size:14;font-family:Proxima Nova;fill:#2C3645;width:344px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="17" opacity="1">20</text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)"><path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(249, 249, 249, .85)" d="M 3 0 L 13 0 C 16 0 16 0 16 3 L 16 13 C 16 16 16 16 13 16 L 3 16 C 0 16 0 16 0 13 L 0 3 C 0 0 0 0 3 0"></path><text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" transform="translate(0,20)"></text></g><text x="1063" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="395">Highcharts.com</text></svg></div></div>
    </div>
</section>
<p>&nbsp;</p><p>&nbsp;</p>
</div>



            <!-- Load inside the container - otherwise it will never be inserted -->
            
                                </div>
    <script type="text/javascript">$('.chart-options form').each(function() { processStatisticsChange(this); })

    $.get('/en/user/stats', function(data) {
        for(var key in data) {
            $('#'+key).html(data[key]);
        }
    });
</script><script type="text/javascript">
            !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.1.0";
            analytics.load("I2Py1njgrCIuI8Q7kTZba08d8knyzK1k");
            }}();
        </script><script>analytics.identify("3670375", {"username":"subynnooquence","mtId":4733985,"locale":"en","createdAt":"2017-09-11T09:34:24+0000"}, {}, function(){});</script><script>analytics.page("", {route: "app/user/index"});</script><script type="text/javascript">
            var _user_id = "subynnooquence";
            var _session_id = "i1m7eg11j8k5g71oqrvt9cod03";
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
        </script>
    </section>