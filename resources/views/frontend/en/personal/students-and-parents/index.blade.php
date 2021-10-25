@extends('frontend.layouts.app')

@section('content')
    <div class="container">
            <!--start responsive menu-->
    @include('frontend.layouts.components.header')
    <!-- Main Header -->
    @include('frontend.layouts.components.navbar')

        {{-- <!--start responsive menu-->
        <nav class="pushy pushy-right">
            <div class="pushy-content">
                <button class="pushy-link close-b">X</button>

                <div id="accordion" class="panel-group">
                    <div class="panel panel-default">


                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Personal</a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse in" id="collapse1">
                            <div class="panel-body">

                                <div class="panel-group" id="accordion21">
                                    <div class="panel">
                                        <a href="../../index.html">Personal</a>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse11">

                                            Checking <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse11" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../personal-checking/index.html">Personal Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../personal-checking/free-plus-checking/index.html">FREE+
                                                    Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../personal-checking/reward-checking/index.html">Reward
                                                    Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../personal-checking/debit-card/index.html">Debit Card</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../personal-checking/overdraft-protection/index.html">Overdraft
                                                    Protection</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../personal-checking/security-and-fraud-protection/index.html">Security
                                                    &amp; Fraud Protection</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse12">

                                            Online &amp; Mobile <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse12" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../online-and-mobile/index.html">Online &amp; Mobile</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../online-and-mobile/online-banking/index.html">Online
                                                    Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../online-and-mobile/mobile-banking/index.html">Mobile
                                                    Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../online-and-mobile/bill-pay/index.html">Bill Pay</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../online-and-mobile/mobile-deposit/index.html">Mobile
                                                    Deposit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../online-and-mobile/estatements/index.html">eStatements</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../online-and-mobile/mobile-wallet/index.html">Mobile
                                                    Wallet</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../online-and-mobile/personal-financial-management/index.html">Personal
                                                    Financial Management</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse13">

                                            Savings &amp; CDs <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse13" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../savings-and-cds/index.html">Savings &amp; CDs</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../savings-and-cds/regular-savings/index.html">Regular
                                                    Savings</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../savings-and-cds/premier-money-market/index.html">PREMIER
                                                    Money Market</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../savings-and-cds/certificates-of-deposit/index.html">Certificates
                                                    of Deposit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../savings-and-cds/ira-savings-and-cds/index.html">IRA Savings
                                                    &amp; CDs</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../savings-and-cds/kids-savings/index.html">Kids Savings</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse14">

                                            Loans &amp; Credit Lines <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse14" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../loans-and-credit-lines/index.html">Loans &amp; Credit
                                                    Lines</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../loans-and-credit-lines/personal-loans/index.html">Personal
                                                    Loans</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../loans-and-credit-lines/personal-lines-of-credit/index.html">Personal
                                                    Lines of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../loans-and-credit-lines/easy-access-line-of-credit/index.html">Easy
                                                    Access Line of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../loans-and-credit-lines/home-equity-line-of-credit/index.html">Home
                                                    Equity Line of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../loans-and-credit-lines/advance-access-line-of-credit/index.html">Advance
                                                    Access Line of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../loans-and-credit-lines/loan-payment-options/index.html">Loan
                                                    Payment Options</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse15">

                                            Mortgages <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse15" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../mortgages/index.html">Mortgages</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../mortgages/buying-or-building-a-home/index.html">Buying or
                                                    Building a Home</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../mortgages/refinancing-a-home/index.html">Refinancing a
                                                    Home</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../mortgages/jumbo-mortgage-loans/index.html">Jumbo Mortgage
                                                    Loans</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../mortgages/apply-for-a-mortgage/index.html">Apply for a
                                                    Mortgage</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse16">

                                            Investing <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse16" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../investing/index.html">Investing</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../investing/brokerage-services/index.html">Brokerage
                                                    Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../investing/retirement-planning/index.html">Retirement
                                                    Planning</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../investing/insurance/index.html">Insurance</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../investing/financial-and-investing-resources/index.html">Financial
                                                    &amp; Investing Resources</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse17">

                                            Wealth Management <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse17" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../wealth-management/index.html">Wealth Management</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../wealth-management/private-banking/index.html">Private
                                                    Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../wealth-management/financial-planning/index.html">Financial
                                                    Planning</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../wealth-management/personal-trust-services/index.html">Personal
                                                    Trust Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../wealth-management/managed-investing/index.html">Managed
                                                    Investing</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../wealth-management/trusts-in-south-dakota/index.html">Trusts
                                                    in South Dakota</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse18">

                                            Students &amp; Parents <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse18" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="index.html">Students &amp; Parents</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="university-debit-cards/index.html">University Debit Cards</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="dakota-state-university-debit-card/index.html">Dakota State
                                                    University Debit Card</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="student-loans/index.html">Student Loans</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Small Business</a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse " id="collapse2">
                            <div class="panel-body">

                                <div class="panel-group" id="accordion21">
                                    <div class="panel">
                                        <a href="../../small-business/index.html">Small Business</a>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse21">

                                            Checking <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse21" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/business-checking/index.html">Business
                                                    Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../small-business/business-checking/low-volume/index.html">Low
                                                    Volume</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-checking/low-volume-plus-interest/index.html">Low
                                                    Volume + Interest</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-checking/high-volume-plus-earnings-credit/index.html">High
                                                    Volume + Earnings Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-checking/high-volume-plus-interest/index.html">High
                                                    Volume + Interest</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-checking/compare-business-checking/index.html">Compare
                                                    Business Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-checking/business-debit-mastercard/index.html">Business
                                                    Debit Mastercard&#174;</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-checking/overdraft-protection/index.html">Overdraft
                                                    Protection</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-checking/security-and-fraud-protection/index.html">Security
                                                    &amp; Fraud Protection</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse22">

                                            Online &amp; Mobile <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse22" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/online-and-mobile/index.html">Online &amp;
                                                    Mobile</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/online-and-mobile/online-banking/index.html">Business
                                                    Online Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/online-and-mobile/mobile-banking/index.html">Mobile
                                                    Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../small-business/online-and-mobile/bill-pay/index.html">Bill
                                                    Pay</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/online-and-mobile/mobile-deposit/index.html">Mobile
                                                    Deposit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/online-and-mobile/estatements/index.html">eStatements</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/online-and-mobile/mobile-wallet/index.html">Mobile
                                                    Wallet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse23">

                                            Savings &amp; CDs <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse23" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/savings-and-cds/index.html">Savings &amp;
                                                    CDs</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/savings-and-cds/regular-business-savings/index.html">Regular
                                                    Business Savings</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/savings-and-cds/premier-money-market/index.html">PREMIER
                                                    Money Market</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/savings-and-cds/certificates-of-deposit/index.html">Certificates
                                                    of Deposit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse24">

                                            Loans &amp; Credit Lines <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse24" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/loans-and-credit-lines/index.html">Loans
                                                    &amp; Credit Lines</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/loans-and-credit-lines/small-business-loans/index.html">Small
                                                    Business Loans</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/loans-and-credit-lines/business-lines-of-credit/index.html">Business
                                                    Lines of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/loans-and-credit-lines/commercial-real-estate/index.html">Commercial
                                                    Real Estate</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-services/business-rewards-mastercard/index.html">Business
                                                    Rewards Mastercard&#174;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse25">

                                            Business Services <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse25" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/business-services/index.html">Business
                                                    Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-services/make-payments/index.html">Make
                                                    Payments</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-services/accept-payments/index.html">Accept
                                                    Payments</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-services/merchant-card-services/index.html">Merchant
                                                    Card Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-services/remote-deposit/index.html">Remote
                                                    Deposit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-services/lockbox-services/index.html">Lockbox
                                                    Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-services/positive-pay/index.html">Positive
                                                    Pay</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-services/business-rewards-mastercard/index.html">Business
                                                    Rewards Mastercard&#174;</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset.business.first')}}">First
                                                    PREMIER at Work</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse26">

                                            Asset Management &amp; Trust <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse26" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/asset-management-and-trust/index.html">Asset
                                                    Management &amp; Trust</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/asset-management-and-trust/business-planning-investment/index.html">Business
                                                    Planning &amp; Investing</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/asset-management-and-trust/employee-benefits/index.html">Employee
                                                    Benefits</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/asset-management-and-trust/group-retirement-plans/index.html">Group
                                                    Retirement Plans</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/asset-management-and-trust/business-trust-services/index.html">Business
                                                    Trust Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/asset-management-and-trust/first-premier-at-work/index.html">First
                                                    PREMIER at Work</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/asset-management-and-trust/south-dakota-trusts/index.html">Trusts
                                                    in South Dakota</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse27">

                                            Ag Banking <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse27" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/ag-banking/index.html">Ag Banking</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Commercial</a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse " id="collapse3">
                            <div class="panel-body">

                                <div class="panel-group" id="accordion21">
                                    <div class="panel">
                                        <a href="../../commercial/index.html">Commercial</a>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse31">

                                            Checking <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse31" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset')}}">Business
                                                    Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/business-checking/high-volume-plus-earnings-credit/index.html">High
                                                    Volume + Earnings Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/business-checking/high-volume-plus-interest/index.html">High
                                                    Volume + Interest</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../commercial/business-checking/low-volume/index.html">Low
                                                    Volume</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/business-checking/low-volume-plus-interest/index.html">Low
                                                    Volume + Interest</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../small-business/business-checking/compare-business-checking/index.html">Compare
                                                    Business Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset')}}">Business Debit
                                                    Mastercard&#174;</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/business-checking/overdraft-protection/index.html">Overdraft
                                                    Protection</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/treasury-services/cash-management/security-and-fraud-protection/index.html">Security
                                                    &amp; Fraud Protection</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse32">

                                            Savings &amp; CDs <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse32" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../commercial/savings-and-cds/index.html">Savings &amp;
                                                    CDs</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/savings-and-cds/traditional-savings/index.html">Traditional
                                                    Savings</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/savings-and-cds/premier-money-market/index.html">PREMIER
                                                    Money Market</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/savings-and-cds/certificate-of-deposit/index.html">Certificate
                                                    of Deposit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse33">

                                            Financing <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse33" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../commercial/financing/index.html">Financing</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../commercial/financing/commercial-lending/index.html">Commercial
                                                    Lending</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/financing/business-lines-of-credit/index.html">Business
                                                    Lines of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../commercial/financing/commercial-real-estate/index.html">Commercial
                                                    Real Estate</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/financing/business-debit-mastercard/index.html">Business
                                                    Rewards Mastercard&#174;</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../commercial/financing/atm-vault-cash-solutions/index.html">ATM
                                                    Vault Cash Solutions</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse34">

                                            Treasury Services <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse34" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../commercial/treasury-services/index.html">Treasury
                                                    Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <u><a
                                                        href="../../commercial/treasury-services/cash-management/index.html">Cash
                                                        Management</a></u>
                                                <div style="color:#ffd800 !important;">
                                                    <a
                                                        href="../../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual
                                                        Account Management</a><a
                                                        href="../../commercial/treasury-services/cash-management/business-online-banking/index.html">Business
                                                        Online Banking</a><a
                                                        href="../../commercial/treasury-services/cash-management/security-and-fraud-protection/index.html">Security
                                                        &amp; Fraud Protection</a><a
                                                        href="../../commercial/treasury-services/cash-management/mobile-banking/index.html">Mobile
                                                        Banking</a><a
                                                        href="../../commercial/treasury-services/cash-management/reporting-and-analytics/index.html">Reporting
                                                        &amp; Analytics</a><a
                                                        href="../../commercial/treasury-services/cash-management/mobile-wallet/index.html">Mobile
                                                        Wallet</a><a
                                                        href="../../commercial/treasury-services/cash-management/estatements/index.html">eStatements</a><a
                                                        href="../../commercial/treasury-services/cash-management/bill-pay/index.html">Bill
                                                        Pay</a>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <u><a
                                                        href="../../commercial/treasury-services/manage-receivables/index.html">Manage
                                                        Receivables</a></u>
                                                <div style="color:#ffd800 !important;">
                                                    <a
                                                        href="../../commercial/treasury-services/manage-receivables/ach-services/index.html">ACH
                                                        Services</a><a
                                                        href="../../commercial/treasury-services/manage-receivables/merchant-card-services/index.html">Merchant
                                                        Card Services</a><a
                                                        href="../../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual
                                                        Account Management</a><a
                                                        href="../../commercial/treasury-services/manage-receivables/remote-deposit/index.html">Remote
                                                        Deposit</a><a
                                                        href="../../commercial/treasury-services/manage-receivables/lockbox-services/index.html">LockBox
                                                        Services</a><a
                                                        href="../../commercial/treasury-services/manage-receivables/centralized-returns/index.html">Centralized
                                                        Returns</a><a
                                                        href="../../commercial/treasury-services/manage-receivables/check-image-clearing/index.html">Check
                                                        Image Clearing</a><a
                                                        href="../../commercial/treasury-services/manage-receivables/positive-pay/index.html">Positive
                                                        Pay</a>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <u><a
                                                        href="../../commercial/treasury-services/manage-payables-and-payroll/index.html">Manage
                                                        Payables &amp; Payroll</a></u>
                                                <div style="color:#ffd800 !important;">
                                                    <a
                                                        href="../../commercial/treasury-services/manage-receivables/ach-services/index.html">ACH
                                                        Services</a><a
                                                        href="../../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual
                                                        Account Management</a><a
                                                        href="../../small-business/business-services/business-rewards-mastercard/index.html">Business
                                                        Rewards Mastercard&#174;</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse35">

                                            Asset Management &amp; Trust <i class="fa fa-chevron-down pull-right"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse35" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset')}}">Asset Management
                                                    &amp; Trust</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset.business')}}">Business
                                                    Planning &amp; Investing</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset.business.employee')}}">Employee
                                                    Benefits</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset.group')}}">Group
                                                    Retirement Plans</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset.business.trust')}}">Business
                                                    Trust Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset.business.first')}}">First
                                                    PREMIER at Work</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset.south')}}">Trusts in
                                                    South Dakota</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>





                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse_signIn">Sign In</a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse_signIn">
                            <div class="panel-body">
                                <h4><a href="https://www.mypremiercreditcard.com/login.aspx" data-type=""
                                        id="SIcreditcardpayment">Credit Card</a></h4>
                                <h4><a href="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                        data-type="actionitem" id="SIpersonalbanking">Personal Banking </a></h4>
                                <h4><a href="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                        data-type="actionitem" id="SIbusinessbanking">Business Banking</a></h4>
                                <h4><a href="https://firstpremier.fdecs.com/eCustService/" data-type=""
                                        id="SIbusinessrewards"> Business Rewards Credit Card</a></h4>
                                <h4><a href="https://goldleafach.com/ach/signin.aspx?218264CB36" data-type=""
                                        id="SIachonline"> ACH Online </a></h4>
                                <h4><a href="https://icp.infovisa.com/0309/" data-type="" id="SItrust"> Trust Online
                                    </a></h4>
                                <!--https ://www.mauiweb1.com/0309"-->
                                <h4><a href="https://myaccount.iconnect2invest.com/bankr/login.do?webcontext=iconnect"
                                        data-type="" id="SIinvestmentservices">Brokerage Account</a></h4>
                                <h4><a href="https://firstpremier.mymortgage-online.com/?borrowerportal&amp;siteid=9621968476"
                                        data-type="" id="SIMortgage">Mortgage Application</a></h4>
                            </div>
                        </div>
                        <ul class="footer-mobile-link">
                            <li class="number-bg">800-501-6535</li>
                            <li><a href="../../pages/quick-links/locations/index.html">Locations</a></li>
                            <li><a href="../../pages/about-us/index.html">About Us</a></li>
                            <li><a href="{{route('frontend.en.pages.about.careers')}}">Careers</a></li>
                            <li><a href="../../pages/quick-links/customer-care/index.html">Customer Care</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Main Header -->
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
                                            href="../../pages/quick-links/locations/index.html">Locations</a></li>
                                    <li class="navItem"><a href="../../pages/about-us/index.html">About Us</a></li>
                                    <li class="navItem"><a
                                            href="{{route('frontend.en.pages.about.careers')}}">Careers</a></li>
                                    <li class="navItem"><a
                                            href="../../pages/quick-links/customer-care/index.html">Customer Care</a>
                                    </li>

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
                                <a href="../../index.html" title="First PREMIER Bank - Home"><img
                                        src="{{ asset('assets/frontend/Static/gfx/Logo.png') }}" style="max-width:100%;" /></a>
                            </article>
                            <article class="small-menu">
                                <ul>
                                    <li class="active"><a href="../../index.html">Personal</a></li>
                                    <li><a href="../../small-business/index.html">Small Business</a></li>
                                    <li><a href="../../commercial/index.html">Commercial</a></li>
                                </ul>
                            </article>
                            <div class="card-btn">
                                <a href="https://www.mypremiercreditcard.com/">Credit Card Sign In <img
                                        src="{{ asset('assets/frontend/Static/img/card-icon.png') }}" alt="First PREMIER Bank"></a>
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

                                        <a href="../personal-checking/index.html">Checking</a>
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
                                                            <a href="../personal-checking/index.html"
                                                                style="font-size:12px;padding-bottom:0px;">Learn
                                                                More</a>
                                                        </div>
                                                    </div>


                                                    <div class="">
                                                        <div
                                                            class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../personal-checking/free-plus-checking/index.html">FREE+
                                                                        Checking</a></div>
                                                                <p>Our FREE+ Checking account comes with no hidden
                                                                    surprises, hassles or monthly maintenance fees.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../personal-checking/reward-checking/index.html">Reward
                                                                        Checking</a></div>
                                                                <p>Maintain a total monthly deposit relationship of
                                                                    $15,000 and gain benefits like free checks, reward
                                                                    rates on CDs and more.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../personal-checking/debit-card/index.html">Debit
                                                                        Card</a></div>
                                                                <p>This secure and easy payment method gives you access
                                                                    to 33,000+ surcharge-free ATMs nationwide.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../personal-checking/overdraft-protection/index.html">Overdraft
                                                                        Protection</a></div>
                                                                <p>Ensure your personal checking account has sufficient
                                                                    funds to cover payments and purchases.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../personal-checking/security-and-fraud-protection/index.html">Security
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

                                        <a href="../online-and-mobile/index.html">Online &amp; Mobile</a>
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
                                                            <a href="../online-and-mobile/index.html"
                                                                style="font-size:12px;padding-bottom:0px;">Learn
                                                                More</a>
                                                        </div>
                                                    </div>


                                                    <div class="">
                                                        <div
                                                            class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../online-and-mobile/online-banking/index.html">Online
                                                                        Banking</a></div>
                                                                <p>Check balances, transfer funds, pay bills, view
                                                                    eStatements any time.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../online-and-mobile/mobile-banking/index.html">Mobile
                                                                        Banking</a></div>
                                                                <p>Our mobile app puts the features of Online Banking in
                                                                    the palm of your hand.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../online-and-mobile/bill-pay/index.html">Bill
                                                                        Pay</a></div>
                                                                <p>Schedule and make payments simply and securely Online
                                                                    or via Moble Banking.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../online-and-mobile/mobile-deposit/index.html">Mobile
                                                                        Deposit</a></div>
                                                                <p>Use our Mobile Banking app to make deposits using
                                                                    your mobile phone.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../online-and-mobile/estatements/index.html">eStatements</a>
                                                                </div>
                                                                <p>Secure electronic statements you can print, download
                                                                    and use for record keeping.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../online-and-mobile/mobile-wallet/index.html">Mobile
                                                                        Wallet</a></div>
                                                                <p>Link your debit card to a Mobile Wallet to speed your
                                                                    way through checkout.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../online-and-mobile/personal-financial-management/index.html">Personal
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

                                        <a href="../savings-and-cds/index.html">Savings &amp; CDs</a>
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
                                                            <a href="../savings-and-cds/index.html"
                                                                style="font-size:12px;padding-bottom:0px;">Learn
                                                                More</a>
                                                        </div>
                                                    </div>


                                                    <div class="">
                                                        <div
                                                            class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../savings-and-cds/regular-savings/index.html">Regular
                                                                        Savings</a></div>
                                                                <p>A traditional, FDIC-insured savings option with free
                                                                    Online and Mobile Banking.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../savings-and-cds/premier-money-market/index.html">PREMIER
                                                                        Money Market</a></div>
                                                                <p>For higher balance accounts - the bigger the balance,
                                                                    the higher the rate.&nbsp;</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../savings-and-cds/certificates-of-deposit/index.html">Certificates
                                                                        of Deposit</a></div>
                                                                <p>Competitive rates and an array of term options on
                                                                    CDs.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../savings-and-cds/ira-savings-and-cds/index.html">IRA
                                                                        Savings &amp; CDs</a></div>
                                                                <p>A simple, tax-advantaged way to build up funds
                                                                    gradually for retirement.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../savings-and-cds/kids-savings/index.html">Kids
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

                                        <a href="../loans-and-credit-lines/index.html">Loans &amp; Credit Lines</a>
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
                                                            <a href="../loans-and-credit-lines/index.html"
                                                                style="font-size:12px;padding-bottom:0px;">Learn
                                                                More</a>
                                                        </div>
                                                    </div>


                                                    <div class="">
                                                        <div
                                                            class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../loans-and-credit-lines/personal-loans/index.html">Personal
                                                                        Loans</a></div>
                                                                <p>Competitive rates on personal, auto, home
                                                                    improvement, debt consolidation loans and more.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../loans-and-credit-lines/personal-lines-of-credit/index.html">Personal
                                                                        Lines of Credit</a></div>
                                                                <p>Enjoy flexible, easy access to cash when you need it
                                                                    most.&nbsp; Select from several, flexible options.
                                                                </p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../loans-and-credit-lines/easy-access-line-of-credit/index.html">Easy
                                                                        Access Line of Credit</a></div>
                                                                <p>Get extra purchasing power and cash when you need it
                                                                    with a basic, revolving line of credit.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../loans-and-credit-lines/home-equity-line-of-credit/index.html">Home
                                                                        Equity Line of Credit</a></div>
                                                                <p>Fund home improvements, consolidate debt or other
                                                                    expenses with this secured line of credit.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../loans-and-credit-lines/advance-access-line-of-credit/index.html">Advance
                                                                        Access Line of Credit</a></div>
                                                                <p>For higher income individuals, extra spending
                                                                    flexibility and payment options you&rsquo;ll love.
                                                                </p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../loans-and-credit-lines/loan-payment-options/index.html">Loan
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

                                        <a href="../mortgages/index.html">Mortgages</a>
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
                                                            <a href="../mortgages/index.html"
                                                                style="font-size:12px;padding-bottom:0px;">Learn
                                                                More</a>
                                                        </div>
                                                    </div>


                                                    <div class="">
                                                        <div
                                                            class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../mortgages/buying-or-building-a-home/index.html">Buying
                                                                        or Building a Home</a></div>
                                                                <p>Competitive mortgage rates with online application,
                                                                    fast processing, local decisioning and personal
                                                                    support.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../mortgages/refinancing-a-home/index.html">Refinancing
                                                                        a Home</a></div>
                                                                <p>Leverage your home equity to help fund home projects,
                                                                    gain more favorable rate and terms or consolidate
                                                                    debt.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../mortgages/jumbo-mortgage-loans/index.html">Jumbo
                                                                        Mortgage Loans</a></div>
                                                                <p>First PREMIER Bank specializes in jumbo loans with
                                                                    competitive mortgage rates and fees.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../mortgages/apply-for-a-mortgage/index.html">Apply
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

                                        <a href="../investing/index.html">Investing</a>
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
                                                            <a href="../investing/index.html"
                                                                style="font-size:12px;padding-bottom:0px;">Learn
                                                                More</a>
                                                        </div>
                                                    </div>


                                                    <div class="">
                                                        <div
                                                            class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../investing/brokerage-services/index.html">Brokerage
                                                                        Services</a></div>
                                                                <p>Investing made easy, with turnkey online access and
                                                                    personal advice and support.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../investing/retirement-planning/index.html">Retirement
                                                                        Planning</a></div>
                                                                <p>Retirement plans and plan rollover support for
                                                                    individual investors.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../investing/insurance/index.html">Insurance</a>
                                                                </div>
                                                                <p>Protect yourself and provide for loved ones with life
                                                                    and disability insurance.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../investing/financial-and-investing-resources/index.html">Financial
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

                                        <a href="../wealth-management/index.html">Wealth Management</a>
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
                                                            <a href="../wealth-management/index.html"
                                                                style="font-size:12px;padding-bottom:0px;">Learn
                                                                More</a>
                                                        </div>
                                                    </div>


                                                    <div class="">
                                                        <div
                                                            class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../wealth-management/private-banking/index.html">Private
                                                                        Banking</a></div>
                                                                <p>Concierge-style, private banking for higher net-worth
                                                                    individuals.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../wealth-management/financial-planning/index.html">Financial
                                                                        Planning</a></div>
                                                                <p>Comprehensive financial and investment planning
                                                                    services.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../wealth-management/personal-trust-services/index.html">Personal
                                                                        Trust Services</a></div>
                                                                <p>Protect your assets and provide for the people and
                                                                    causes you care most about with an estate plan or
                                                                    personal trust.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../wealth-management/managed-investing/index.html">Managed
                                                                        Investing</a></div>
                                                                <p>Hands-on investment management from seasoned,
                                                                    experienced investment specialists.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="../wealth-management/trusts-in-south-dakota/index.html">Trusts
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
                                    <li class="SubMenu active">

                                        <a href="index.html">Students &amp; Parents</a>
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
                                                            <a href="index.html"
                                                                style="font-size:12px;padding-bottom:0px;">Learn
                                                                More</a>
                                                        </div>
                                                    </div>


                                                    <div class="">
                                                        <div
                                                            class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="university-debit-cards/index.html">University
                                                                        Debit Cards</a></div>
                                                                <p>Show your school pride with a Dakota State University
                                                                    or University of South Dakota branded First PREMIER
                                                                    Bank Debit Mastercard&reg;.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="dakota-state-university-debit-card/index.html">Dakota
                                                                        State University Debit Card</a></div>
                                                                <p>Show your love for Dakota State University and give
                                                                    back to the university&rsquo;s foundation with a
                                                                    First PREMIER Bank DSU Debit Mastercard.</p>
                                                                <hr>
                                                            </div>
                                                            <div
                                                                class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                <div class="subsubitem"><a
                                                                        href="student-loans/index.html">Student
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
        </section> --}}

        {{-- <script>

            $(document).ready(function () {



                //$('#AccessAccountDropdown option[id!=selectaccount]').each(function (index, value) {
                //    $('#signInHoverSection').append('<p>' + $(value).text() + '</p>');
                //});

                if ($(window).width() == 1024) {
                    $('#ulPremierMainMenu li.SubMenu > a').on('click touchend', function (e) {
                        $(this).find('div[id*=subdiv]').hide();
                        $(this).attr('href', 'javascript:void(0)');
                        ShowMenu(this);
                    }).focusout(function () {
                        ShowMenu(this);
                    });
                }
                else {

                    var timeoutId;
                    $("#ulPremierMainMenu li.SubMenu > a").hover(function () {
                        var self = this;
                        if (!timeoutId) {
                            timeoutId = window.setTimeout(function () {
                                timeoutId = null;
                                ShowMenu(self);
                            }, 50);
                        }
                    },
                        function () {
                            if (timeoutId) {
                                window.clearTimeout(timeoutId);
                                timeoutId = null;
                            }
                        });
                }

                if (sessionStorage.getItem('isClosed') == "true") {
                    $(".alert").hide();
                }

                var lastID = null;

                var handleMouseover = function (e) {
                    var target = e.target || e.srcElement;
                    lastID = target.id;
                    className = target.className;
                    tagName = target.localName;
                    if (lastID != "ulPremierMainMenu" && lastID != "") {
                        $('div[id*=subdiv]').slideUp(500);
                        $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');
                    }
                    if (className == "col-md-8 col-xs-12 col-sm-6" || className == "b1banner_text" || className == "b1login_Box" || className == "b1banner-desc" || className == "row b1mobile" || className == "b1banner_text" || className == "White" || className == "b1access" || className == "header-box" || tagName == "img" || tagName == "body") {
                        $('div[id*=subdiv]').slideUp(500);
                        $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');;
                    }

                };

                if (document.addEventListener) {
                    document.addEventListener('mouseover', handleMouseover, false);
                    document.addEventListener('mouseover', handleMouseover, false);
                }
                else {
                    document.attachEvent('onmouseover', handleMouseover);
                }

            });
            function ShowMenu(element) {
                if ($(element).next('div[id*=subdiv]').filter(function () { return $(this).css('display') === 'block'; }).length == 0) {
                    $('div[id*=subdiv]').hide();
                    $(element).next('div[id*=subdiv]').slideDown(500);
                    $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');
                    $(element).css('color', '#e4cb3f').css({
                        "border-bottom-color": "#e4cb3f",
                        "border-bottom-width": "3px",
                        "border-bottom-style": "solid"
                    });
                }
            }
            function ShowSignInOption() {
                if ($('#signInHoverSection').attr('data-present') == "present") {
                    $('#signInHoverSection').toggle();
                }
            }
            function SearchOut() {
                $('#txtheadsearch').attr('data-val', $('#txtheadsearch').val());
                $('#txtheadsearch').val(null);
            }
            function SearchIn() {
                var searchText = $('#txtheadsearch').attr('data-val') || '';
                $('#txtheadsearch').val(searchText);
            }
        </script> --}}
        <div class="row equal-height">
            <div class="block b46block  col-md-12">

                <style>
                    .b46mainlinkspan {
                        height: 50px;
                        margin-top: 24px;
                        text-align: center;
                        width: 100%;
                    }

                    .b46mainlink {
                        color: #268d6e;
                        background: url(../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px;
                        padding: 0px 15px 0px 25px;
                        vertical-align: text-bottom;
                        margin-right: 20px;
                        letter-spacing: 1px;
                    }

                    .b46mainanchor {
                        color: #268d6e;
                        background: url(../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px;
                        float: left;
                        padding: 0px 15px 0px 25px;
                        vertical-align: text-bottom;
                        letter-spacing: 1px;
                    }

                    .b46multianchor {
                        text-align: center;
                    }

                    .b46multianchor ul {
                        display: inline-block;
                        margin: 0;
                        padding: 0;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b46multianchor li {
                        float: left;
                        padding: 2px 5px;
                    }

                    .b46productpage h5>p {}
                </style>
                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                    .b46productpage {
                        float: left;
                        width: 100%;
                        padding: 80px 0px 50px 0px;
                        text-align: center;
                        background: #fff url(../../../globalassets/images/backgrounds/grey-2.svg) no-repeat;
                    }
                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Students &amp; Parents</h1>
                            <img src="{{ asset('assets/frontend/contentassets/67e980b82edc40fc9afc79acfcad11c2/1.8_b-46_grad-min.png') }}"
                                alt="First PREMIER Bank">
                            <h2>Student-Friendly Accounts</h2>
                            <p>First PREMIER is the bank you take to school. Our robust online and mobile tools keep
                                students and parents connected, even at a distance. Along with college checking
                                accounts, we offer flexible student loan options, university debit cards, internships,
                                scholarships and financial support for our state&rsquo;s public and private schools.</p>



                        </div>
                    </div>
                </section>
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

                    @media only screen and (max-width:767px) {
                        .b16confidence_links {
                            align-items: center;
                            display: flex;
                            flex-direction: column;
                        }

                        .b16confidence_links a {
                            margin-top: 20px;
                        }
                    }

                    @media only screen and (max-width:375px) {
                        div.b16basic_box_grey {
                            background-color: #fff !important;
                        }
                    }
                </style>
                <style>
                    .b16basic_box_right .b16imgcrop {}
                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_left_content b16basic_box_background">
                        <div class="b16basic_box_main">
                            <div class="container">
                                <div class="b16basic_box b16basic_box_position">
                                    <div class="b16basic_box_right" style="padding-right:50px;">
                                        <div class="b16imgcrop"><img
                                                src="{{ asset('assets/frontend/contentassets/2782c2464bfa42bead3c5e846e4d9b4b/1.8_b-16-list-01-alternating-1_check.png') }}"
                                                title="FREE Checking" alt="woman depositing check with mobile phone">
                                        </div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>FREE Checking</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>No monthly maintenance fees or minimum balance</li>
                                                <li>Free Online and Mobile Banking&nbsp;</li>
                                                <li>Free P2P transfers from First PREMIER linked accounts</li>
                                                <li>Free 24/7 Fraud Protection and account alerts</li>
                                                <li>Free spending and budgeting tools</li>
                                                <li>Optional&nbsp;overdraft protection&nbsp;</li>
                                                <li>Access to 33,000+ surcharge-free MoneyPass ATMs nationwide</li>
                                            </ul>
                                            <p>&nbsp;</p>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                        <div class="b16confidence_links">
                                            <a href="../../pages/resources/forms/apply-now/index.html"
                                                class="b16readmore">Apply Now</a>
                                            <a class="b16mainlink"
                                                href="../personal-checking/free-plus-checking/index.html">Learn More</a>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

                    @media only screen and (max-width:767px) {
                        .b16confidence_links {
                            align-items: center;
                            display: flex;
                            flex-direction: column;
                        }

                        .b16confidence_links a {
                            margin-top: 20px;
                        }
                    }

                    @media only screen and (max-width:375px) {
                        div.b16basic_box_grey {
                            background-color: #fff !important;
                        }
                    }
                </style>
                <style>
                    .b16basic_box_right .b16imgcrop {}
                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_right_content b16basic_box_background">
                        <div class="b16basic_box_main b16basic_box_grey">
                            <div class="container">
                                <div class="b16basic_box">
                                    <div class="b16basic_box_right">
                                        <div class="b16imgcrop" style="margin-left:90px;"><img
                                                src="{{ asset('assets/frontend/contentassets/b69497d369a74cb6ada0acf3bf8cd381/1.8_b-16-list-01-alternating-2_laptop.png') }}"
                                                title="Flexible Student Loans" alt="student using laptop"></div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Flexible Student Loans</h2>
                                        <div class="xhtml">
                                            <ul>
                                                <li>Co-signed or non-cosigned options with Ascent</li>
                                                <li>No application fee</li>
                                                <li>Affordable rates for graduate and undergraduate programs</li>
                                                <li>Flexible repayment plans</li>
                                            </ul>
                                        </div>

                                        <!-- Button and Footer Links go here ... -->
                                        <a href="student-loans/index.html" class="b16readmore">Learn More</a>
                                        <!-- Button and Footer Links go here ... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

                    @media only screen and (max-width:767px) {
                        .b16confidence_links {
                            align-items: center;
                            display: flex;
                            flex-direction: column;
                        }

                        .b16confidence_links a {
                            margin-top: 20px;
                        }
                    }

                    @media only screen and (max-width:375px) {
                        div.b16basic_box_grey {
                            background-color: #fff !important;
                        }
                    }
                </style>
                <style>
                    .b16basic_box_right .b16imgcrop {
                        margin-top: 25px !important;
                    }
                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_left_content b16basic_box_background">
                        <div class="b16basic_box_main">
                            <div class="container">
                                <div class="b16basic_box b16basic_box_position">
                                    <div class="b16basic_box_right" style="padding-right:50px;">
                                        <div class="b16imgcrop"><img
                                                src="{{ asset('assets/frontend/contentassets/93a34da43eee47b59db89643698d0cff/university-debit-cards-promo-01.jpg') }}"
                                                title="USD and DSU Debit Cards" alt="students in classroom clapping">
                                        </div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>USD and DSU Debit Cards</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>Show your school pride</li>
                                                <li>Free with any First PREMIER Checking account</li>
                                                <li>Great for students, parents and alumni</li>
                                                <li>Instant issue where available<sup>1</sup></li>
                                            </ul>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                        <a href="university-debit-cards/index.html" class="b16readmore">Learn More</a>
                                        <!-- Button and Footer Links go here ... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b25block  col-md-12">
                <script>
                    $(document).ready(function () {

                        if ('/Static/img/CustomBlocks/B25/Background.png' != 'null' && '/Static/img/CustomBlocks/B25/Background.png' != '') {
                            $(".b25disclosure").css("background", "#245251 url(/Static/img/CustomBlocks/B25/Background.png) no-repeat");
                            if (screen.width > 1000) {
                                $(".b25need_help_main").css("background", "#245251 url(/Static/img/CustomBlocks/B25/Background.png) no-repeat");
                            }

                        }

                    });
                </script>
                <style>
                    /*.b25need_help_main .White { margin-bottom: 20px !important; }
    */
                    .b25need_help_main .xhtml h2 {
                        color: #e4cb34;
                    }

                    /*.b25need_help_main { margin-top: -24px; } */
                    @media only screen and (max-width:1024px) {
                        .b25need_help_main {
                            background-color: #245251 !important;
                        }

                        .page-about-us .b25need_help_main,
                        .parent-5384 .b25need_help_main {
                            background-color: #1f3848 !important;
                        }
                    }
                </style>
                <section class="row-full">

                    <div class="b25need_help_main">
                        <div class="container">
                            <h2 class="White">Internships &amp; Scholarships</h2>
                            <div class="xhtml">
                                <p>Each year, First PREMIER Bank awards 18 community scholarships to deserving students
                                    attending qualifying South Dakota schools.</p>
                            </div>
                            <div class="b25bottom" style="">
                                <center>
                                    <a href="../../pages/about-us/community/collegiate-support/scholarship-and-internships/index.html"
                                        class="b25mainanchor">Learn More</a><br clear="all" />
                                </center>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="block b17block  col-md-12">﻿
                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}
                </style>
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */

                    /* B-17 Specific (Added functionality for multiple links) */
                    .b17ButtonLinksSingle .b17link {
                        padding-left: 15px;
                    }

                    .b17ButtonLinksMultiple .b17link {
                        float: left;
                        margin-right: 25px;
                    }

                    .b17cards {
                        position: relative;
                        z-index: 99;
                        top: -203px !important;
                    }

                    .b17basic_box_grey {
                        background-color: #f9f9f9;
                        background-image: none;
                    }

                    .about-us-small-image .b17block {
                        /* max-height: 779px;*/
                    }

                    .b17free_mobile_banking_left.right>img {
                        float: right;
                    }

                    @media only screen and (max-width: 470px) {
                        .b17free_mobile_banking h2 {
                            /* margin-left: 6%;*/
                            margin-top: 5%;
                            text-align: center;
                            width: 100%;
                        }
                    }
                </style>

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <section class="row-full b17promo">

                    <div class="b17free_mobile_banking ">
                        <div class="container">
                            <h2>More For Students</h2>

                            <div class="b17free_mobile_banking_right">
                                <h3>
                                    <p><strong>Take Your Account to School. Keep it for Life.</strong></p>
                                </h3>
                                <div class="xhtml">
                                    <p>First PREMIER Bank is with you in every stage of life. From your <a
                                            href="../savings-and-cds/kids-savings/index.html">first savings account</a>
                                        to your <a href="../wealth-management/index.html">retirement planning</a>, we
                                        are committed to providing you with the products, services and guidance you need
                                        to make financial decisions. Stop in and talk with one of our bankers or visit
                                        our Financial Wellness Center for insights and interactive learning.</p>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                                <a href="https://firstpremier.everfi-next.net/" class="b17readmore">Learn More</a>
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="{{ asset('assets/frontend/contentassets/4a0bd9c63d7d41e894fe2e7827c1afc3/1.8_b-16-list-01-alternating-3_group.png') }}"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>

                    <div class="b15benfits_main_box b17cards">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/user/bright-user-secondary-icon-17.png') }}"
                                        title="Paying for College" alt="University of South Dakota Mastercard"
                                        width="116px" height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Paying for College</h3>
                                    <p>Paying for education can seem expensive and overwhelming. Our interactive module
                                        will help you understand the costs and help navigate the process.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="#" data-toggle="modal" data-target="#a24942193FM" data-backdrop="false"
                                        class="b15learnmore">Learn More</a>
                                    <div id="a24942193FM" class="modal fade" role="dialog">
                                        <div class="modal-dialog pop_board">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="pop_main_container_board">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            area-label="Close">
                                                            <span aria-hidden="true">
                                                                <img class="close_icon"
                                                                    src="{{ asset('assets/frontend/Static/img/closebutton-2.png') }}"
                                                                    alt="First PREMIER Bank"
                                                                    style="height:17px !important; width:17px !important;" />
                                                            </span>
                                                        </button>
                                                        <div class="pop_main_container">
                                                            <h2>Paying for College</h2>
                                                            <div class="pop_board_white">
                                                                <div class="row">
                                                                    <div class="col-md-12" style="padding-left:40px;">
                                                                        <h4 class="Blue">You will be leaving
                                                                            firstpremier.com</h4>
                                                                        <div class="b46Blue" style="text-align:left;">
                                                                            <p>Please note, by clicking
                                                                                &ldquo;continue&rdquo; you will be
                                                                                redirected to a website that is not
                                                                                operated or controlled by PREMIER.
                                                                                PREMIER is not responsible for the
                                                                                content, links, privacy policy or
                                                                                security of that website. Your use of
                                                                                that website is subject to its terms of
                                                                                use and privacy policy. Thank you for
                                                                                visiting firstpremier.com. If you
                                                                                continue, we hope you find the
                                                                                information presented educational and
                                                                                useful. </p>
                                                                            <p><br /><a
                                                                                    href="https://firstpremier.everfi-next.net/student/dashboard/financialeducation-achieve/investing-in-your-future/1458#paying-for-college"
                                                                                    target="_blank">Continue</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/secondary-icons/green/content/green-content-secondary-icon-13.png') }}"
                                        title="Collegiate Support" alt="University of South Dakota Mastercard"
                                        width="116px" height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Collegiate Support</h3>
                                    <p>First PREMIER Bank is a proud supporter of higher education. See how we&rsquo;re
                                        committing our resources to universities, colleges and technical schools in our
                                        state.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="../../pages/about-us/community/collegiate-support/index.html">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="a24942193" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>More For Students</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="https://firstpremier.everfi-next.net/"
                                                                    target="_blank"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
                <script>
                    $('.modal-backdrop').remove();
                </script>
            </div>
            <div class="block b13block  col-md-12">

                <style>
                    .b13what_you_know_main ol li p {
                        padding: 0 10px 0 34px;
                        list-style: none;
                        margin: 0px 0px 0px 0px;
                        font-size: 14px;
                        text-align: left;
                    }

                    .b13what_you_know_main ol li {
                        width: 100%
                    }

                    .b13what_you_know_main ol li ol li {
                        width: 100%;
                    }

                    .b13what_you_know_main_white ol li ol li {
                        width: 100%;
                    }
                </style>
                <script>
                    $(document).ready(function () {
                        //GetDisclosurePoints();
                        GetDisclosurePointsBrackets();
                    });
                </script>
                <section class="row-full">
                    <div class="b13what_you_know_main">
                        <div class="container" style="background-color:#182e39 !important;">

                            <h4> Disclosure </h4>
                            <div class="b13points">
                                <p>{1} Instant issue is not available at the following branches: Wakonda, Lake Norden,
                                    Castlewood, Kranzburg, and Watertown on 5th Street.</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>



        <div class="row-full footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                        <div class="footerHeader">Company</div>

                        <ul>

                            <li>
                                <a href="../../pages/about-us/index.html">About Us</a>
                            </li>

                            <li>
                                <a href="../../index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="../../pages/about-us/leadership-team/index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="../../pages/about-us/community/index.html">Community</a>
                            </li>

                            <li>
                                <a href="{{route('frontend.en.pages.about.careers')}}">Careers</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                        <div class="footerHeader">Customers</div>

                        <ul>

                            <li>
                                <a href="../../index.html">Personal Banking</a>
                            </li>

                            <li>
                                <a href="../../small-business/index.html">Small Business</a>
                            </li>

                            <li>
                                <a href="../../commercial/index.html">Commercial</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>

                        <ul>

                            <li>
                                <a href="../../pages/quick-links/customer-care/index.html">Customer Care</a>
                            </li>

                            <li>
                                <a href="../../pages/quick-links/locations/index.html">Locations</a>
                            </li>

                            <li>
                                <a href="../../pages/quick-links/customer-care/index.html">BANK: 800-501-6535</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                            </li>

                            <li>
                                <a href="../../index.html">Routing Number: 091408598</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                        <div class="footerHeader">Legal Notices</div>

                        <ul>

                            <li>
                                <a href="../../pages/resources/first-premier-privacy-statement-2020/index.html">Privacy
                                    Notice &amp; Statement</a>
                            </li>

                            <li>
                                <a href="../../pages/resources/legal-disclosures/index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="../../pages/resources/cookie-policy/index.html">Cookie Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:50px;">
                        <p>Member FDIC | <img src="{{ asset('assets/frontend/Static/img/equalhousinglender.png') }}"
                                alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* CHROME SAFARI FIX */
            .form-control:hover,
            .form-control:active,
            .form-control:focus {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            .form-control:hover,
            .form-control:active,
            .form-control:focus {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            a:focus,
            a:active {
                outline: none !important;
                border: none !important;
            }

            input:focus,
            input:active {
                outline: none !important;
            }

            textarea:focus {
                outline: none !important;
            }

            button:focus,
            button:active {
                outline: none !important;
                border: none !important;
            }

            .showehllogo {
                background: url('../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat;
                background-size: 24px 24px
            }
        </style>
        <script type="text/javascript">
            var ContentId;
            var Name;
            var FullName;
            var EMail;
            var Phone;
            var Message;
            function contactPersonName(value) {
                ContentId = parseInt($(value).attr('value'));
                Name = $(value).attr('name');
                $("#contactWithPersonName").html("Contact " + Name);
                FullName = "";
                EMail = "";
                Message = "";
                Phone = "";
                $("#email").val("");
                $("#fullname").val("");
                $('#phone').val("");
                $("#message").val("");
            }

            //$("#fullname").val() != "" &&
            $("#submitButtonB28Block").click(function (event) {
                if ($("#email").val() != "" &&
                    $("#message").val() != "") {
                    FullName = $("#fullname").val();
                    EMail = $("#email").val();
                    Phone = $("#phone").val();
                    Message = $("#message").val();
                    $.ajax({
                        type: "POST",
                        url: '/api/ContactMe?ContentId=' + ContentId + '&ContactToName=' + Name + '&ContactPersonName=' + FullName + '&ContactPersonEmail=' + EMail + '&ContactPersonPhone=' + Phone + '&ContactPersonMessage=' + encodeURIComponent(Message),
                        contentType: "application/json",

                        success: function (result) {
                            alert(result);
                        },
                        error: function () {

                        }
                    });
                }
            });
        </script>
    </div>
    <div class="smallLogo"><a href="../../index.html" title="First PREMIER Bank - Home"><img
                src="{{ asset('assets/frontend/Static/gfx/Logo.png') }}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
    <script type="text/javascript">
        if (FindApi) { var api = new FindApi(); api.setApplicationUrl('../../../index.html'); api.setServiceApiBaseUrl('../../../find_v2/index.html'); api.processEventFromCurrentUri(); api.bindWindowEvents(); api.bindAClickEvent(); api.sendBufferedEvents(); }
    </script>

    <script type="text/javascript" src="../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../Static/js/Blocks_2019062002.js"></script>


    @endsection