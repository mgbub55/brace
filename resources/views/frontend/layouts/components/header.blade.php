<section class="header-wrap" id="container">
    <article class="container">

        <article class="row">
            <article class="topHeader col-sm-12">
                <!-- Collapse if empty -->
                <button class="menu-btn">&#9776;</button>

                <article class="right-nav">
                    <form id="frmSearchHit" action="https://www.firstpremier.com/en/search/" method="get">
                        <ul id="maintopMenu" class="menu-right">
                            <li class="navItem">800-501-6535</li>
                            <li class="navItem"><a
                                    href="{{ route('frontend.en.pages.quick-links.locations') }}">Locations</a></li>
                            <li class="navItem"><a href="{{('frontend.en.pages.about-us')}}">About Us</a></li>
                            <li class="navItem"><a href="{{route('frontend.en.pages.about.careers')}}">Careers</a>
                            </li>
                            <li class="navItem"><a
                                    href="en/pages/quick-links/customer-care/index.html">Customer Care</a></li>

                            <li id="signInSection" class="bg-dropdown" onmouseover="ShowSignInOption()"
                                onmouseout="ShowSignInOption()">
                                <a href="#" class="signin">Sign In </a>

                                <div id="signInHoverSection" class="b1sign-in-hover" data-present="present"
                                    style="display:none;">
                                    <p><a href="https://www.mypremiercreditcard.com/login.aspx" data-type=""
                                            id="SIcreditcardpayment">Credit Card</a><br /></p>
                                    <p><a href="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                            data-type="actionitem" id="SIpersonalbanking">Personal
                                            Banking</a><br /></p>
                                    <p><a href="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                            data-type="actionitem" id="SIbusinessbanking">Business
                                            Banking</a><br />
                                    <p><a href="https://firstpremier.fdecs.com/eCustService/" data-type=""
                                            id="SIbusinessrewards">Business Rewards Credit Card</a><br /></p>
                                    <p><a href="https://goldleafach.com/ach/signin.aspx?218264CB36" data-type=""
                                            id="SIachonline">ACH Online</a><br /></p>
                                    <p><a href="https://icp.infovisa.com/0309/" data-type="" id="SItrust">Trust
                                            Online </a><br /></p>
                                    <!--h t t p s://www.mauiweb1.com/0309-->
                                    <p><a href="https://myaccount.iconnect2invest.com/bankr/login.do?webcontext=iconnect"
                                            data-type="" id="SIinvestmentservices">Brokerage Account</a><br />
                                    </p>
                                    <p><a href="https://firstpremier.mymortgage-online.com/?borrowerportal&amp;siteid=9621968476"
                                            data-type="" id="SIMortgages">Mortgage Application</a><br /></p>
                                </div>
                            </li>

                            <li>
                                <a href="#" title="Search">
                                    <div class="top-bar">
                                        <input class="search" id="txtheadsearch" onblur="SearchOut()"
                                            onfocus="SearchIn()" type="text" name="q">
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div>
                        </div>
                    </form>
                </article>
                <article class="header-box">
                    <article class="logo">
                        <a href="{{ route('frontend') }}" title="First PREMIER Bank - Home"><img
                                src="{{ asset('assets/frontend/Static/gfx/LogoStack.png') }}"
                                style="max-width:100%;" /></a>
                    </article>
                    <article class="small-menu">
                        <ul>
                            <li class="CustomerTypePadding active">
                                <a href="{{ route('frontend.en') }}" title="First PREMIER Bank - Home">Personal</a>
                            </li>
                            <li><a href="{{ route('frontend.en.small-business') }}">Small Business</a></li>
                            <li><a href="{{ route('frontend.en.commercial') }}">Commercial</a></li>
                        </ul>
                    </article>
                    <div class="card-btn">
                        <a href="https://www.mypremiercreditcard.com/">Credit Card Sign In <img
                                src="{{ asset('assets/frontend/Static/img/card-icon.png') }}"
                                alt="First PREMIER Bank"></a>
                    </div>
                </article>
            </article>
        </article>
    </article>
    <div class="row-full">
        <div class="menu-wrap">
            <article class="container">
                <article>
                    <div class="col-sm-12 SubMenuItems">
                        <ul id="ulPremierMainMenu">
                            <li class="SubMenu">

                                <a href="{{  route('frontend.en.personal.personal-checking')  }}">Checking</a>
                                <div id="subdiv_PersonalChecking"
                                    style="display:none;width: 100vw;margin-left: -50vw;left: 50%;"
                                    class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                    <div class="row-full">
                                        <div class="container">
                                            <div class="">
                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                    <h3>Personal Checking</h3>
                                                    <p>Flexible personal checking accounts with FREE Online and
                                                        Mobile Banking, Bill Pay, eStatements, Mobile Deposit
                                                        and more.</p>
                                                    <a href="{{  route('frontend.en.personal.personal-checking')  }}"
                                                        style="font-size:12px;padding-bottom:0px;">Learn
                                                        More</a>
                                                </div>
                                            </div>


                                            <div class="">
                                                <div
                                                    class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="{{  route('frontend.en.personal.personal-checking.free-plus-checking')  }}">FREE+
                                                                Checking</a></div>
                                                        <p>Our FREE+ Checking account comes with no hidden
                                                            surprises, hassles or monthly maintenance fees.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="{{ route('frontend.en.personal.personal-checking.reward-checking') }}">Reward
                                                                Checking</a></div>
                                                        <p>Maintain a total monthly deposit relationship of
                                                            $15,000 and gain benefits like free checks, reward
                                                            rates on CDs and more.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="{{  route('frontend.en.personal.personal-checking.debit-card')  }}">Debit
                                                                Card</a></div>
                                                        <p>This secure and easy payment method gives you access
                                                            to 33,000+ surcharge-free ATMs nationwide.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="{{ route('frontend.en.personal.personal-checking.overdraft-protection') }}">Overdraft
                                                                Protection</a></div>
                                                        <p>Ensure your personal checking account has sufficient
                                                            funds to cover payments and purchases.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="{{ route('frontend.en.personal.personal-checking.security-and-fraud-protection')}}">Security
                                                                &amp; Fraud Protection</a></div>
                                                        <p>Learn how First PREMIER protects you and how to
                                                            protect yourself from security breaches and fraud.
                                                            &nbsp;</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="SubMenu">

                                <a href="{{ route('frontend.en.personal.online-and-mobile') }}">Online &amp; Mobile</a>
                                <div id="subdiv_Online&amp;Mobile"
                                    style="display:none;width: 100vw;margin-left: -50vw;left: 50%;"
                                    class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                    <div class="row-full">
                                        <div class="container">
                                            <div class="">
                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                    <h3>Online & Mobile</h3>
                                                    <p>First PREMIER Online and Mobile Banking are FREE and
                                                        feature-rich, giving you 24/7 access and control over
                                                        your accounts.</p>
                                                    <a href="{{ route('frontend.en.personal.online-and-mobile') }}"
                                                        style="font-size:12px;padding-bottom:0px;">Learn
                                                        More</a>
                                                </div>
                                            </div>


                                            <div class="">
                                                <div
                                                    class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="{{ route('frontend.en.personal.online-and-mobile.online-banking') }}">Online
                                                                Banking</a></div>
                                                        <p>Check balances, transfer funds, pay bills, view
                                                            eStatements any time.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="{{ route('frontend.en.personal.online-and-mobile.mobile-banking') }}">Mobile
                                                                Banking</a></div>
                                                        <p>Our mobile app puts the features of Online Banking in
                                                            the palm of your hand.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/online-and-mobile/bill-pay/index.html">Bill
                                                                Pay</a></div>
                                                        <p>Schedule and make payments simply and securely Online
                                                            or via Moble Banking.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/online-and-mobile/mobile-deposit/index.html">Mobile
                                                                Deposit</a></div>
                                                        <p>Use our Mobile Banking app to make deposits using
                                                            your mobile phone.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/online-and-mobile/estatements/index.html">eStatements</a>
                                                        </div>
                                                        <p>Secure electronic statements you can print, download
                                                            and use for record keeping.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="{{ route('frontend.en.personal.online-and-mobile.mobile-wallet') }}">Mobile
                                                                Wallet</a></div>
                                                        <p>Link your debit card to a Mobile Wallet to speed your
                                                            way through checkout.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/online-and-mobile/personal-financial-management/index.html">Personal
                                                                Financial Management</a></div>
                                                        <p>Analyze spending patterns, plan a budget and more
                                                            with these free tools.</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="SubMenu">

                                <a href="{{ route('frontend.en.personal.savings-and-cds') }}">Savings &amp; CDs</a>
                                <div id="subdiv_Savings&amp;CDs"
                                    style="display:none;width: 100vw;margin-left: -50vw;left: 50%;"
                                    class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                    <div class="row-full">
                                        <div class="container">
                                            <div class="">
                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                    <h3>Savings & CDs</h3>
                                                    <p>Keep ready cash on hand with an array of savings options
                                                        from First PREMIER Bank.</p>
                                                    <a href="{{ route('frontend.en.personal.savings-and-cds') }}"
                                                        style="font-size:12px;padding-bottom:0px;">Learn
                                                        More</a>
                                                </div>
                                            </div>


                                            <div class="">
                                                <div
                                                    class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/savings-and-cds/regular-savings/index.html">Regular
                                                                Savings</a></div>
                                                        <p>A traditional, FDIC-insured savings option with free
                                                            Online and Mobile Banking.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/savings-and-cds/premier-money-market/index.html">PREMIER
                                                                Money Market</a></div>
                                                        <p>For higher balance accounts - the bigger the balance,
                                                            the higher the rate.&nbsp;</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/savings-and-cds/certificates-of-deposit/index.html">Certificates
                                                                of Deposit</a></div>
                                                        <p>Competitive rates and an array of term options on
                                                            CDs.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/savings-and-cds/ira-savings-and-cds/index.html">IRA
                                                                Savings &amp; CDs</a></div>
                                                        <p>A simple, tax-advantaged way to build up funds
                                                            gradually for retirement.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/savings-and-cds/kids-savings/index.html">Kids
                                                                Savings</a></div>
                                                        <p>The PREMIER Kids Club Savings account helps kids 12
                                                            and under learn the value of saving early.</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="SubMenu">

                                <a href="{{ route('frontend.en.personal.loans-and-credit-lines')}}">Loans &amp; Credit
                                    Lines</a>
                                <div id="subdiv_Loans&amp;CreditLines"
                                    style="display:none;width: 100vw;margin-left: -50vw;left: 50%;"
                                    class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                    <div class="row-full">
                                        <div class="container">
                                            <div class="">
                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                    <h3>Loans & Credit Lines</h3>
                                                    <p>Planning a large purchase or consolidating debt? We have
                                                        competitive rates on personal loans and flexible lines
                                                        of credit!</p>
                                                    <a href="{{ route('frontend.en.personal.loans-and-credit-lines')}}"
                                                        style="font-size:12px;padding-bottom:0px;">Learn
                                                        More</a>
                                                </div>
                                            </div>


                                            <div class="">
                                                <div
                                                    class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/loans-and-credit-lines/personal-loans/index.html">Personal
                                                                Loans</a></div>
                                                        <p>Competitive rates on personal, auto, home
                                                            improvement, debt consolidation loans and more.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/loans-and-credit-lines/personal-lines-of-credit/index.html">Personal
                                                                Lines of Credit</a></div>
                                                        <p>Enjoy flexible, easy access to cash when you need it
                                                            most.&nbsp; Select from several, flexible options.
                                                        </p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/loans-and-credit-lines/easy-access-line-of-credit/index.html">Easy
                                                                Access Line of Credit</a></div>
                                                        <p>Get extra purchasing power and cash when you need it
                                                            with a basic, revolving line of credit.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/loans-and-credit-lines/home-equity-line-of-credit/index.html">Home
                                                                Equity Line of Credit</a></div>
                                                        <p>Fund home improvements, consolidate debt or other
                                                            expenses with this secured line of credit.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/loans-and-credit-lines/advance-access-line-of-credit/index.html">Advance
                                                                Access Line of Credit</a></div>
                                                        <p>For higher income individuals, extra spending
                                                            flexibility and payment options you&rsquo;ll love.
                                                        </p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/loans-and-credit-lines/loan-payment-options/index.html">Loan
                                                                Payment Options</a></div>
                                                        <p>When it comes to making your loan payment you have
                                                            several free and easy options.</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="SubMenu">

                                <a href="{{ route('frontend.en.personal.mortgages') }}">Mortgages</a>
                                <div id="subdiv_Mortgages"
                                    style="display:none;width: 100vw;margin-left: -50vw;left: 50%;"
                                    class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                    <div class="row-full">
                                        <div class="container">
                                            <div class="">
                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                    <h3>Mortgages</h3>
                                                    <p>Competitive rates for home mortgages, construction loans,
                                                        refinancing and more.</p>
                                                    <a href="{{ route('frontend.en.personal.mortgages') }}"
                                                        style="font-size:12px;padding-bottom:0px;">Learn
                                                        More</a>
                                                </div>
                                            </div>


                                            <div class="">
                                                <div
                                                    class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/mortgages/buying-or-building-a-home/index.html">Buying
                                                                or Building a Home</a></div>
                                                        <p>Competitive mortgage rates with online application,
                                                            fast processing, local decisioning and personal
                                                            support.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/mortgages/refinancing-a-home/index.html">Refinancing
                                                                a Home</a></div>
                                                        <p>Leverage your home equity to help fund home projects,
                                                            gain more favorable rate and terms or consolidate
                                                            debt.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/mortgages/jumbo-mortgage-loans/index.html">Jumbo
                                                                Mortgage Loans</a></div>
                                                        <p>First PREMIER Bank specializes in jumbo loans with
                                                            competitive mortgage rates and fees.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/mortgages/apply-for-a-mortgage/index.html">Apply
                                                                for a Mortgage</a></div>
                                                        <p>Apply for a mortgage online today and receive fast
                                                            processing, online status reporting and personal
                                                            support.</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="SubMenu">

                                <a href="{{ route('frontend.en.personal.investing') }}">Investing</a>
                                <div id="subdiv_Investing"
                                    style="display:none;width: 100vw;margin-left: -50vw;left: 50%;"
                                    class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                    <div class="row-full">
                                        <div class="container">
                                            <div class="">
                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                    <h3>Investing</h3>
                                                    <p>Simple-to-complex investing, financial and retirement
                                                        planning and investment management for investors at any
                                                        life stage.</p>
                                                    <a href="{{ route('frontend.en.personal.investing') }}"
                                                        style="font-size:12px;padding-bottom:0px;">Learn
                                                        More</a>
                                                </div>
                                            </div>


                                            <div class="">
                                                <div
                                                    class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/investing/brokerage-services/index.html">Brokerage
                                                                Services</a></div>
                                                        <p>Investing made easy, with turnkey online access and
                                                            personal advice and support.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/investing/retirement-planning/index.html">Retirement
                                                                Planning</a></div>
                                                        <p>Retirement plans and plan rollover support for
                                                            individual investors.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/investing/insurance/index.html">Insurance</a>
                                                        </div>
                                                        <p>Protect yourself and provide for loved ones with life
                                                            and disability insurance.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/investing/financial-and-investing-resources/index.html">Financial
                                                                &amp; Investing Resources</a></div>
                                                        <p>An array of helpful articles, videos, presentations
                                                            and tools.</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="SubMenu">

                                <a href="{{ route('frontend.en.personal.wealth-management') }}">Wealth Management</a>
                                <div id="subdiv_WealthManagement"
                                    style="display:none;width: 100vw;margin-left: -50vw;left: 50%;"
                                    class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                    <div class="row-full">
                                        <div class="container">
                                            <div class="">
                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                    <h3>Wealth Management</h3>
                                                    <p>Private banking, hands-on financial and investment
                                                        planning, portfolio management, estate planning and
                                                        personal trust services.</p>
                                                    <a href="{{ route('frontend.en.personal.wealth-management') }}"
                                                        style="font-size:12px;padding-bottom:0px;">Learn
                                                        More</a>
                                                </div>
                                            </div>


                                            <div class="">
                                                <div
                                                    class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/wealth-management/private-banking/index.html">Private
                                                                Banking</a></div>
                                                        <p>Concierge-style, private banking for higher net-worth
                                                            individuals.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/wealth-management/financial-planning/index.html">Financial
                                                                Planning</a></div>
                                                        <p>Comprehensive financial and investment planning
                                                            services.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/wealth-management/personal-trust-services/index.html">Personal
                                                                Trust Services</a></div>
                                                        <p>Protect your assets and provide for the people and
                                                            causes you care most about with an estate plan or
                                                            personal trust.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/wealth-management/managed-investing/index.html">Managed
                                                                Investing</a></div>
                                                        <p>Hands-on investment management from seasoned,
                                                            experienced investment specialists.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/wealth-management/trusts-in-south-dakota/index.html">Trusts
                                                                in South Dakota</a></div>
                                                        <p>Learn about the unique opportunities and benefits
                                                            realized by establishing your trust in the state of
                                                            South Dakota. &nbsp;</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="SubMenu">

                                <a href="{{ route('frontend.en.personal.students-and-parents') }}">Students &amp; Parents</a>
                                <div id="subdiv_Students&amp;Parents"
                                    style="display:none;width: 100vw;margin-left: -50vw;left: 50%;"
                                    class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                    <div class="row-full">
                                        <div class="container">
                                            <div class="">
                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                    <h3>Students & Parents</h3>
                                                    <p>Explore our unique offerings for students and parents.
                                                        From college checking accounts to paid internships and
                                                        scholarships.</p>
                                                    <a href="{{ route('frontend.en.personal.students-and-parents') }}"
                                                        style="font-size:12px;padding-bottom:0px;">Learn
                                                        More</a>
                                                </div>
                                            </div>


                                            <div class="">
                                                <div
                                                    class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/students-and-parents/university-debit-cards/index.html">University
                                                                Debit Cards</a></div>
                                                        <p>Show your school pride with a Dakota State University
                                                            or University of South Dakota branded First PREMIER
                                                            Bank Debit Mastercard&reg;.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/students-and-parents/dakota-state-university-debit-card/index.html">Dakota
                                                                State University Debit Card</a></div>
                                                        <p>Show your love for Dakota State University and give
                                                            back to the university&rsquo;s foundation with a
                                                            First PREMIER Bank DSU Debit Mastercard.</p>
                                                        <hr>
                                                    </div>
                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                        <div class="subsubitem"><a
                                                                href="en/personal/students-and-parents/student-loans/index.html">Student
                                                                Loans</a></div>
                                                        <p>Undergraduate and Graduate Student Loan options
                                                            through our partner, Ascent. No application fee and
                                                            flexible repayment options.</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </article>
            </article>
        </div>
    </div>
</section>
