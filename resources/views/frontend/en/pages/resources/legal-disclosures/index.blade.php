@extends('frontend.layouts.app')

@section('content')
    <div class="container">
            <!--start responsive menu-->
    @include('frontend.layouts.components.header')
    <!-- Main Header -->
    @include('frontend.layouts.components.navbar')

    <div class="container">



        <!--start responsive menu-->
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
                                        <a href="../../../index.html">Personal</a>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse11">

                                            Checking <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse11" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../../personal/personal-checking/index.html">Personal
                                                    Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/personal-checking/free-plus-checking/index.html">FREE+
                                                    Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/personal-checking/reward-checking/index.html">Reward
                                                    Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/personal-checking/debit-card/index.html">Debit
                                                    Card</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/personal-checking/overdraft-protection/index.html">Overdraft
                                                    Protection</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/personal-checking/security-and-fraud-protection/index.html">Security
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
                                                <a href="../../../personal/online-and-mobile/index.html">Online &amp;
                                                    Mobile</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/online-and-mobile/online-banking/index.html">Online
                                                    Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/online-and-mobile/mobile-banking/index.html">Mobile
                                                    Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/online-and-mobile/bill-pay/index.html">Bill
                                                    Pay</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/online-and-mobile/mobile-deposit/index.html">Mobile
                                                    Deposit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/online-and-mobile/estatements/index.html">eStatements</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/online-and-mobile/mobile-wallet/index.html">Mobile
                                                    Wallet</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/online-and-mobile/personal-financial-management/index.html">Personal
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
                                                <a href="../../../personal/savings-and-cds/index.html">Savings &amp;
                                                    CDs</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/savings-and-cds/regular-savings/index.html">Regular
                                                    Savings</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/savings-and-cds/premier-money-market/index.html">PREMIER
                                                    Money Market</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/savings-and-cds/certificates-of-deposit/index.html">Certificates
                                                    of Deposit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/savings-and-cds/ira-savings-and-cds/index.html">IRA
                                                    Savings &amp; CDs</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/savings-and-cds/kids-savings/index.html">Kids
                                                    Savings</a>
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
                                                <a href="../../../personal/loans-and-credit-lines/index.html">Loans
                                                    &amp; Credit Lines</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/loans-and-credit-lines/personal-loans/index.html">Personal
                                                    Loans</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/loans-and-credit-lines/personal-lines-of-credit/index.html">Personal
                                                    Lines of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/loans-and-credit-lines/easy-access-line-of-credit/index.html">Easy
                                                    Access Line of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/loans-and-credit-lines/home-equity-line-of-credit/index.html">Home
                                                    Equity Line of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/loans-and-credit-lines/advance-access-line-of-credit/index.html">Advance
                                                    Access Line of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/loans-and-credit-lines/loan-payment-options/index.html">Loan
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
                                                <a href="../../../personal/mortgages/index.html">Mortgages</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/mortgages/buying-or-building-a-home/index.html">Buying
                                                    or Building a Home</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/mortgages/refinancing-a-home/index.html">Refinancing
                                                    a Home</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/mortgages/jumbo-mortgage-loans/index.html">Jumbo
                                                    Mortgage Loans</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/mortgages/apply-for-a-mortgage/index.html">Apply
                                                    for a Mortgage</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse16">

                                            Investing <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse16" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../../personal/investing/index.html">Investing</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/investing/brokerage-services/index.html">Brokerage
                                                    Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/investing/retirement-planning/index.html">Retirement
                                                    Planning</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../personal/investing/insurance/index.html">Insurance</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/investing/financial-and-investing-resources/index.html">Financial
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
                                                <a href="../../../personal/wealth-management/index.html">Wealth
                                                    Management</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/wealth-management/private-banking/index.html">Private
                                                    Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/wealth-management/financial-planning/index.html">Financial
                                                    Planning</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/wealth-management/personal-trust-services/index.html">Personal
                                                    Trust Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/wealth-management/managed-investing/index.html">Managed
                                                    Investing</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/wealth-management/trusts-in-south-dakota/index.html">Trusts
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
                                                <a href="../../../personal/students-and-parents/index.html">Students
                                                    &amp; Parents</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/students-and-parents/university-debit-cards/index.html">University
                                                    Debit Cards</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/students-and-parents/dakota-state-university-debit-card/index.html">Dakota
                                                    State University Debit Card</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../personal/students-and-parents/student-loans/index.html">Student
                                                    Loans</a>
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
                                        <a href="../../../small-business/index.html">Small Business</a>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse21">

                                            Checking <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse21" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../../small-business/business-checking/index.html">Business
                                                    Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-checking/low-volume/index.html">Low
                                                    Volume</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-checking/low-volume-plus-interest/index.html">Low
                                                    Volume + Interest</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-checking/high-volume-plus-earnings-credit/index.html">High
                                                    Volume + Earnings Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-checking/high-volume-plus-interest/index.html">High
                                                    Volume + Interest</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-checking/compare-business-checking/index.html">Compare
                                                    Business Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-checking/business-debit-mastercard/index.html">Business
                                                    Debit Mastercard&#174;</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-checking/overdraft-protection/index.html">Overdraft
                                                    Protection</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-checking/security-and-fraud-protection/index.html">Security
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
                                                <a href="../../../small-business/online-and-mobile/index.html">Online
                                                    &amp; Mobile</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/online-and-mobile/online-banking/index.html">Business
                                                    Online Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/online-and-mobile/mobile-banking/index.html">Mobile
                                                    Banking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../small-business/online-and-mobile/bill-pay/index.html">Bill
                                                    Pay</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/online-and-mobile/mobile-deposit/index.html">Mobile
                                                    Deposit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/online-and-mobile/estatements/index.html">eStatements</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/online-and-mobile/mobile-wallet/index.html">Mobile
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
                                                <a href="../../../small-business/savings-and-cds/index.html">Savings
                                                    &amp; CDs</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/savings-and-cds/regular-business-savings/index.html">Regular
                                                    Business Savings</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/savings-and-cds/premier-money-market/index.html">PREMIER
                                                    Money Market</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/savings-and-cds/certificates-of-deposit/index.html">Certificates
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
                                                <a href="../../../small-business/loans-and-credit-lines/index.html">Loans
                                                    &amp; Credit Lines</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/loans-and-credit-lines/small-business-loans/index.html">Small
                                                    Business Loans</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/loans-and-credit-lines/business-lines-of-credit/index.html">Business
                                                    Lines of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/loans-and-credit-lines/commercial-real-estate/index.html">Commercial
                                                    Real Estate</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-services/business-rewards-mastercard/index.html">Business
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
                                                <a href="../../../small-business/business-services/index.html">Business
                                                    Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-services/make-payments/index.html">Make
                                                    Payments</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-services/accept-payments/index.html">Accept
                                                    Payments</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-services/merchant-card-services/index.html">Merchant
                                                    Card Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-services/remote-deposit/index.html">Remote
                                                    Deposit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-services/lockbox-services/index.html">Lockbox
                                                    Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-services/positive-pay/index.html">Positive
                                                    Pay</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-services/business-rewards-mastercard/index.html">Business
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
                                                <a href="../../../small-business/asset-management-and-trust/index.html">Asset
                                                    Management &amp; Trust</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/asset-management-and-trust/business-planning-investment/index.html">Business
                                                    Planning &amp; Investing</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/asset-management-and-trust/employee-benefits/index.html">Employee
                                                    Benefits</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/asset-management-and-trust/group-retirement-plans/index.html">Group
                                                    Retirement Plans</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/asset-management-and-trust/business-trust-services/index.html">Business
                                                    Trust Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/asset-management-and-trust/first-premier-at-work/index.html">First
                                                    PREMIER at Work</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/asset-management-and-trust/south-dakota-trusts/index.html">Trusts
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
                                                <a href="../../../small-business/ag-banking/index.html">Ag Banking</a>
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
                                        <a href="../../../commercial/index.html">Commercial</a>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse31">

                                            Checking <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse31" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.business')}}">Business
                                                    Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/business-checking/high-volume-plus-earnings-credit/index.html">High
                                                    Volume + Earnings Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/business-checking/high-volume-plus-interest/index.html">High
                                                    Volume + Interest</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../commercial/business-checking/low-volume/index.html">Low
                                                    Volume</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/business-checking/low-volume-plus-interest/index.html">Low
                                                    Volume + Interest</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../small-business/business-checking/compare-business-checking/index.html">Compare
                                                    Business Checking</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset')}}">Business Debit
                                                    Mastercard&#174;</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/business-checking/overdraft-protection/index.html">Overdraft
                                                    Protection</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/treasury-services/cash-management/security-and-fraud-protection/index.html">Security
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
                                                <a href="../../../commercial/savings-and-cds/index.html">Savings &amp;
                                                    CDs</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/savings-and-cds/traditional-savings/index.html">Traditional
                                                    Savings</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/savings-and-cds/premier-money-market/index.html">PREMIER
                                                    Money Market</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/savings-and-cds/certificate-of-deposit/index.html">Certificate
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
                                                <a href="../../../commercial/financing/index.html">Financing</a>
                                            </div>
                                            <div class="panel-body">
                                                <a href="../../../commercial/financing/commercial-lending/index.html">Commercial
                                                    Lending</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/financing/business-lines-of-credit/index.html">Business
                                                    Lines of Credit</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/financing/commercial-real-estate/index.html">Commercial
                                                    Real Estate</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/financing/business-debit-mastercard/index.html">Business
                                                    Rewards Mastercard&#174;</a>
                                            </div>
                                            <div class="panel-body">
                                                <a
                                                    href="../../../commercial/financing/atm-vault-cash-solutions/index.html">ATM
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
                                                <a href="../../../commercial/treasury-services/index.html">Treasury
                                                    Services</a>
                                            </div>
                                            <div class="panel-body">
                                                <u><a
                                                        href="../../../commercial/treasury-services/cash-management/index.html">Cash
                                                        Management</a></u>
                                                <div style="color:#ffd800 !important;">
                                                    <a
                                                        href="../../../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual
                                                        Account Management</a><a
                                                        href="../../../commercial/treasury-services/cash-management/business-online-banking/index.html">Business
                                                        Online Banking</a><a
                                                        href="../../../commercial/treasury-services/cash-management/security-and-fraud-protection/index.html">Security
                                                        &amp; Fraud Protection</a><a
                                                        href="../../../commercial/treasury-services/cash-management/mobile-banking/index.html">Mobile
                                                        Banking</a><a
                                                        href="../../../commercial/treasury-services/cash-management/reporting-and-analytics/index.html">Reporting
                                                        &amp; Analytics</a><a
                                                        href="../../../commercial/treasury-services/cash-management/mobile-wallet/index.html">Mobile
                                                        Wallet</a><a
                                                        href="../../../commercial/treasury-services/cash-management/estatements/index.html">eStatements</a><a
                                                        href="../../../commercial/treasury-services/cash-management/bill-pay/index.html">Bill
                                                        Pay</a>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <u><a
                                                        href="../../../commercial/treasury-services/manage-receivables/index.html">Manage
                                                        Receivables</a></u>
                                                <div style="color:#ffd800 !important;">
                                                    <a
                                                        href="../../../commercial/treasury-services/manage-receivables/ach-services/index.html">ACH
                                                        Services</a><a
                                                        href="../../../commercial/treasury-services/manage-receivables/merchant-card-services/index.html">Merchant
                                                        Card Services</a><a
                                                        href="../../../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual
                                                        Account Management</a><a
                                                        href="../../../commercial/treasury-services/manage-receivables/remote-deposit/index.html">Remote
                                                        Deposit</a><a
                                                        href="../../../commercial/treasury-services/manage-receivables/lockbox-services/index.html">LockBox
                                                        Services</a><a
                                                        href="../../../commercial/treasury-services/manage-receivables/centralized-returns/index.html">Centralized
                                                        Returns</a><a
                                                        href="../../../commercial/treasury-services/manage-receivables/check-image-clearing/index.html">Check
                                                        Image Clearing</a><a
                                                        href="../../../commercial/treasury-services/manage-receivables/positive-pay/index.html">Positive
                                                        Pay</a>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <u><a
                                                        href="../../../commercial/treasury-services/manage-payables-and-payroll/index.html">Manage
                                                        Payables &amp; Payroll</a></u>
                                                <div style="color:#ffd800 !important;">
                                                    <a
                                                        href="../../../commercial/treasury-services/manage-receivables/ach-services/index.html">ACH
                                                        Services</a><a
                                                        href="../../../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual
                                                        Account Management</a><a
                                                        href="../../../small-business/business-services/business-rewards-mastercard/index.html">Business
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
                            <li><a href="../../quick-links/locations/index.html">Locations</a></li>
                            <li><a href="../../about-us/index.html">About Us</a></li>
                            <li><a href="../../about-us/careers/index.html">Careers</a></li>
                            <li><a href="../../quick-links/customer-care/index.html">Customer Care</a></li>

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
                                    <li class="navItem"><a href="../../quick-links/locations/index.html">Locations</a>
                                    </li>
                                    <li class="navItem"><a href="../../about-us/index.html">About Us</a></li>
                                    <li class="navItem"><a href="../../about-us/careers/index.html">Careers</a></li>
                                    <li class="navItem"><a href="../../quick-links/customer-care/index.html">Customer
                                            Care</a></li>

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
                                <a href="../../../index.html" title="First PREMIER Bank - Home"><img
                                        src="{{asset('assets/frontend/Static/gfx/LogoStack.png')}}" style="max-width:100%;" /></a>
                            </article>
                            <article class="small-menu">
                                <ul>
                                    <li><a href="../../../index.html">Personal</a></li>
                                    <li><a href="../../../small-business/index.html">Small Business</a></li>
                                    <li><a href="../../../commercial/index.html">Commercial</a></li>
                                </ul>
                            </article>
                            <div class="card-btn">
                                <a href="https://www.mypremiercreditcard.com/">Credit Card Sign In <img
                                        src="{{asset('assets/frontend/Static/img/card-icon.png')}}" alt="First PREMIER Bank"></a>
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
                                <ul>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                        </article>
                    </article>
                </div>
            </div>
        </section>

        <script>

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
        </script>
        <div class="row equal-height">
            <div class="block b44block  col-md-12">
                <style>
                    .b44header {
                        min-height: 245px;
                        width: 100%;
                        background: #fff url("{{asset('assets/frontend/Static/img/CustomBlocks/B44/leader_bg.jpg')}}") no-repeat;
                        float: left;
                        padding-top: 60px;
                    }
                </style>
                <section class="row-full">
                    <div class="b44header">
                        <div class="container">
                            <h1>Legal Disclosures</h1>

                            <ul>

                                <li>
                                    <a href="../../../index.html">First PREMIER Bank</a>
                                </li>

                                <li>
                                    <a href="index.html">Legal Disclosures</a>
                                </li>

                            </ul>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <h2 style="text-align:left !important;">First PREMIER Bank and PREMIER Bankcard, LLC Legal
                                Disclosures</h2>
                            <div class="xhtml">
                                <h3>Copyright</h3>
                                <p>&nbsp;</p>
                                <p>&copy; 2021 First PREMIER Bank and PREMIER Bankcard, LLC. <br />All Rights Reserved.
                                </p>
                                <p>&nbsp;</p>
                                <h3>Trademark</h3>
                                <p>&nbsp;</p>
                                <p>&reg;&nbsp;The P logo and First PREMIER&reg; Bank are registered service marks of
                                    First PREMIER Bank. <br /><br />PREMIER&reg; Bankcard is a registered service mark
                                    of PREMIER Bankcard, LLC.</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    ;
                </script>

                <style>
                    .b4background.colored {
                        background-color: #25455a !important;
                    }

                    .b4background.colored .b15benfits_main_box {
                        margin: 0px !important;

                    }

                    .colored h2,
                    .colored .xhtml p {
                        color: #fff !important;
                    }

                    .page-Our-Communities .block.b04block.col-md-12 {
                        margin-top: 20px;
                    }
                </style>
            </div>
        </div>



        <div class="row-full footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                        <div class="footerHeader">Company</div>

                        <ul>

                            <li>
                                <a href="../../about-us/index.html">About Us</a>
                            </li>

                            <li>
                                <a href="../../../index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="../../about-us/leadership-team/index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="../../about-us/community/index.html">Community</a>
                            </li>

                            <li>
                                <a href="../../about-us/careers/index.html">Careers</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                        <div class="footerHeader">Customers</div>

                        <ul>

                            <li>
                                <a href="../../../index.html">Personal Banking</a>
                            </li>

                            <li>
                                <a href="../../../small-business/index.html">Small Business</a>
                            </li>

                            <li>
                                <a href="../../../commercial/index.html">Commercial</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>

                        <ul>

                            <li>
                                <a href="../../quick-links/customer-care/index.html">Customer Care</a>
                            </li>

                            <li>
                                <a href="../../quick-links/locations/index.html">Locations</a>
                            </li>

                            <li>
                                <a href="../../quick-links/customer-care/index.html">BANK: 800-501-6535</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                            </li>

                            <li>
                                <a href="../../../index.html">Routing Number: 091408598</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                        <div class="footerHeader">Legal Notices</div>

                        <ul>

                            <li>
                                <a href="../first-premier-privacy-statement-2020/index.html">Privacy Notice &amp;
                                    Statement</a>
                            </li>

                            <li>
                                <a href="index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="../cookie-policy/index.html">Cookie Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:50px;">
                        <p>Member FDIC | <img src="{{asset('assets/frontend/Static/img/equalhousinglender.png')}}"
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
                background: url('{{asset("assets/frontend/Static/img/EHLlogo%20white.png")}}') 230px 0px no-repeat;
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
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img
                src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
    <script type="text/javascript">
        if (FindApi) { var api = new FindApi(); api.setApplicationUrl('../../../../index.html'); api.setServiceApiBaseUrl('../../../../find_v2/index.html'); api.processEventFromCurrentUri(); api.bindWindowEvents(); api.bindAClickEvent(); api.sendBufferedEvents(); }
    </script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection
