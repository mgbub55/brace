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
                            <li><a href="../index.html">About Us</a></li>
                            <li><a href="../careers/index.html">Careers</a></li>
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
                                    <li class="navItem"><a href="../index.html">About Us</a></li>
                                    <li class="navItem"><a href="../careers/index.html">Careers</a></li>
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
                                <ul id="ulPremierMainMenu">

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
        <style>
            h4.Blue {
                color: #60aadb;
                font-size: 14px;
                font-family: 'Prompt-Light';
            }
        </style>
        <div class="row equal-height">
            <div class="block b27block  col-md-12">
                <style>
                    .b27our_leadership_main {
                        background: #fff url("{{asset('assets/frontend/Static/img/CustomBlocks/B27/leader_bg.jpg')}}") no-repeat;
                    }
                </style>
                <section class="row-full">

                    <div class="b27our_leadership_main">
                        <div class="container">
                            <h2>Our Leadership</h2>
                            <div class="b27our_leadership">
                                <div class="b27our_leadership_left "><img
                                        src="{{asset('assets/frontend/contentassets/eb85e090b2634505909090eebf475ba3/denny_sanford.png')}}"
                                        title="T. Denny Sanford" alt="T. Denny Sanford"></div>
                                <div class="b27our_leadership_right">
                                    <h3>T. Denny Sanford</h3>
                                    <span>OWNER, CHAIRMAN, UNITED NATIONAL CORPORATION</span>
                                    <div class="xhtml">
                                        <p>T. Denny Sanford, a successful entrepreneur and philanthropist is the owner
                                            of First PREMIER Bank, PREMIER Bankcard and a venture capital
                                            company.&nbsp;He remains active in all three to this day.</p>
                                        <p>He also formed the Sanford Foundation for Charitable Giving. His
                                            philanthropic endeavors have changed the lives of many people around the
                                            world. With a primary focus on educational and medical needs of children,
                                            Denny has given over $1 billion to organizations in South Dakota and across
                                            the country.</p>
                                        <p>Denny leads by example, and actively supports and encourages volunteerism and
                                            community involvement from PREMIER associates.</p>
                                        <p>&nbsp;</p>
                                    </div>
                                    <a href="../the-premier-story/index.html">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="block b68block  col-md-12">
                <section>

                    <div class="b8giving_back_main">
                        <div class="container row-full">
                            <h2></h2>
                            <div class="b8box_scroll_main">
                                <div class="b8box_scroll">

                                    <div class="b8giving_back col-md-3">
                                        <center><img class="img-responsive"
                                                src="{{asset('assets/frontend/contentassets/2a38df00aa9f463c94c7113ff100a141/miles_beacom.png')}}"
                                                title="Miles Beacom" alt="Miles Beacom "></center>
                                        <h3>Miles Beacom</h3>
                                        <div class="xhtml">
                                            <h4 class="Blue">CHIEF EXECUTIVE OFFICER</h4>
                                            <p><em>PREMIER Bankcard</em></p>
                                        </div>
                                    </div>

                                    <div class="b8giving_back col-md-3">
                                        <center><img class="img-responsive"
                                                src="{{asset('assets/frontend/contentassets/2a38df00aa9f463c94c7113ff100a141/dana_dykhouse.png')}}"
                                                title="Dana Dykhouse" alt="Dana Dykhouse "></center>
                                        <h3>Dana Dykhouse</h3>
                                        <div class="xhtml">
                                            <h4 class="Blue">CHIEF EXECUTIVE OFFICER</h4>
                                            <p><em>First PREMIER Bank</em></p>
                                        </div>
                                    </div>

                                    <div class="b8giving_back col-md-3">
                                        <center><img class="img-responsive"
                                                src="{{asset('assets/frontend/contentassets/2a38df00aa9f463c94c7113ff100a141/dave_rozenboom.png')}}"
                                                title="Dave Rozenboom" alt="Dave Rozenboom "></center>
                                        <h3>Dave Rozenboom</h3>
                                        <div class="xhtml">
                                            <h4 class="Blue">PRESIDENT</h4>
                                            <p><em>First PREMIER Bank</em></p>
                                        </div>
                                    </div>

                                    <div class="b8giving_back col-md-3">
                                        <center><img class="img-responsive"
                                                src="{{asset('assets/frontend/contentassets/2a38df00aa9f463c94c7113ff100a141/matt_krall.png')}}"
                                                title="Matt Krall" alt="Matt Krall "></center>
                                        <h3>Matt Krall</h3>
                                        <div class="xhtml">
                                            <h4 class="Blue">PRESIDENT</h4>
                                            <p><em>PREMIER Bankcard</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b28block  col-md-12">

                <style>
                    .b28board_members_main {
                        float: left;
                        width: 100%;
                        padding-bottom: 60px;
                        text-align: left;
                        background-color: #233c4c !important;
                    }

                    .b28board_members_main h2 {
                        color: #fff;
                        font-size: 40px;
                        font-family: "Prompt-Medium"margin-bottom: 10px;
                        text-align: center;
                        float: left;
                        width: 100%;
                        padding-top: 25px;
                        text-align: center;
                        color: #fff;
                        text-shadow: none;
                    }

                    .b28board_members_main .b28board_members_right:hover h3 {
                        color: #fff !important;
                    }

                    .b28board_members_main .b28board_members_right:hover h3.Gold {
                        color: #e4cb34 !important;
                    }
                </style>

                <style>
                    .b28board_members {
                        min-height: 380px;
                    }

                    .b28board_members_right {
                        height: 100px !important;
                        min-height: 100px !important;
                    }
                </style>
                <style>
                    .b28board_members_right h3 {
                        padding-top: 20px;
                    }

                    .b28board_members_right h4>p {
                        padding-top: 10px;
                        color: #60aadb;
                        font-weight: normal;
                        font-size: 14px;
                        margin-bottom: 10px;
                        font-family: 'Prompt-Light'
                    }

                    .b28board_members_main p {
                        color: #385061;
                        font-weight: 600;
                        font-size: 14px;
                        width: 100%;
                        font-family: 'Prompt-Medium';
                    }

                    .Center p {
                        margin-bottom: 0px !important;
                    }

                    .margin10 {
                        margin-top: 10px;
                    }

                    /* Bottom Links & Contact Me popup */
                    .b28board_members .b28board_members_right ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 15px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b28board_members .b28board_members_right ul li {
                        display: inline-block !important;
                    }

                    .b28board_members .b28board_members_right ul li a.b28FooterLink {
                        color: #268d6e;
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px;
                        padding: 0px 15px 0px 0px;
                        margin-right: 20px;
                        margin-top: 0px;
                        letter-spacing: 0.5px;
                        padding-left: 20px;
                        font-size: 12px;
                        font-family: "Prompt-SemiBold";
                        text-shadow: none;
                        text-transform: uppercase;
                    }

                    .b28board_members .b28board_members_right ul li a.b28FooterLink:hover {
                        color: #1c7258;
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px;
                        padding: 0px 15px 0px 0px;
                        margin-right: 20px;
                        margin-top: 0px;
                        letter-spacing: 0.5px;
                        padding-left: 20px;
                        font-size: 12px;
                        font-family: "Prompt-SemiBold";
                        text-shadow: none;
                        text-transform: uppercase;
                    }

                    .loan_application_main {
                        float: left;
                        width: 100%;
                        padding: 10px 0px 25px 0px;
                        text-align: left;
                    }

                    .loan_application_main .loan_type_main {
                        float: left;
                        width: 100%;
                        margin: 30px 0px;
                    }

                    .loan_application_main .loan_type_main h3 {
                        color: #233c4c;
                        font-size: 45px;
                        font-family: "Prompt-Medium"float: left;
                        width: 100%;
                        margin-bottom: 10px;
                        text-shadow: 0px 0px 0 rgba(0, 0, 0, 0.3);
                    }

                    .loan_application_main .loan_type_main p.required {
                        color: #61acdc;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        width: 72%;
                        margin-bottom: 8px;
                        text-transform: uppercase;
                    }

                    .loan_application_main .loan_information_main {
                        margin: 10px 0px 30px 0px;
                        float: left;
                        width: 70%;
                        padding: 50px 40px 0px 40px;
                        border-top-left-radius: 6px;
                        border-top-right-radius: 6px;
                        border-bottom-right-radius: 6px;
                        border-bottom-left-radius: 6px;
                        background: #fff;
                        box-shadow: 0px 5px 13px 0px rgba(67, 67, 67, 0.08);
                        border: solid 1px #dfdfdf;
                    }

                    .loan_application_main .loan_information_main p {
                        margin: 5px 0;
                        font-size: 16px;
                        color: #4a6375;
                        font-family: 'Prompt-Medium';
                    }

                    .loan_application_main .loan_information_main span {
                        letter-spacing: 1px;
                        font-size: 25px;
                        color: #385061;
                        font-family: 'Prompt-SemiBold';
                        margin-bottom: 5px;
                        float: left;
                        width: 100%;
                        border-bottom: solid 1px #ebedef;
                        padding-bottom: 10px;
                    }

                    .loan_application_main .loan_information_main .purpose-of-loan {
                        margin-top: 15px;
                        float: left;
                        width: 100%;
                    }

                    .loan_application_main .loan_information_main .purpose-of-loan span {
                        font-size: 16px;
                        text-transform: uppercase;
                        color: #385061;
                        font-family: 'Prompt-Bold';
                        margin-bottom: 10px;
                        float: left;
                        width: 100%;
                        border: 0;
                        padding: 0;
                        position: relative;
                        left: -20px;
                    }

                    .loan_application_main .loan_information_main .purpose-of-loan em {
                        color: #61acdc;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        margin-right: 10px;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount {
                        float: left;
                        width: 47%;
                        margin: 10px 25px 30px 0px;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount input,
                    .loan_application_main .loan_information_main .req_loan_amount select,
                    .loan_application_main .loan_information_main .req_loan_amount textarea {
                        color: #4a6375;
                        font-size: 16px;
                        font-family: 'Prompt-Medium';
                    }

                    .loan_application_main .loan_information_main .req_loan_amount span {
                        letter-spacing: 1px;
                        color: #4a6375;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        width: 100%;
                        text-transform: uppercase;
                        border: 0px;
                        padding: 0px;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount input {
                        border: solid 2px #e9e9e9;
                        border-top-left-radius: 6px;
                        border-top-right-radius: 6px;
                        border-bottom-right-radius: 6px;
                        border-bottom-left-radius: 6px;
                        background: #fff;
                        padding: 10px;
                        height: 45px;
                        width: 100%;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount select {
                        border: solid 2px #e9e9e9;
                        border-top-left-radius: 6px;
                        border-top-right-radius: 6px;
                        border-bottom-right-radius: 6px;
                        border-bottom-left-radius: 6px;
                        padding: 10px;
                        height: 45px;
                        width: 100%;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount.select_custom {
                        margin-right: 10px;
                    }

                    .loan_application_main .loan_information_main .req_loan_amounttext {
                        width: 97%;
                    }

                    .loan_application_main .loan_information_main .checkbox-radio {
                        padding-left: 0px;
                    }

                    .loan_application_main .loan_information_main em {
                        color: #61acdc;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        margin-right: 10px;
                    }

                    .pop_main_container {
                        padding: 0px 40px;
                    }

                    #submitButtonB28Block {
                        height: 42px;
                        width: 156.031px;
                        margin-left: 22px;
                        float: right;
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 50px;
                        border-radius: 50px;
                        margin-top: 20px;
                        margin-bottom: 0px;
                        color: white;
                    }

                    #resetButton {
                        margin-left: 22px;
                        float: right;
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #233c4c;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 50px;
                        border-radius: 50px;
                        margin-top: 20px;
                        margin-bottom: 0px;
                        color: white;
                    }

                    .req_loan_amount select {
                        height: 42px;
                        border-radius: 0px;
                        font-family: 'Prompt-Medium';
                        font-size: 18px;
                        color: #6a91aa;
                        width: 100%;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        appearance: none;
                        border: solid 1px #e9e9e9;
                        background: url("{{asset('assets/frontend/Static/img/select_arrow.html')}}") no-repeat 96% center;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount textarea {
                        border: solid 2px #e9e9e9;
                        border-top-left-radius: 6px;
                        border-top-right-radius: 6px;
                        border-bottom-right-radius: 6px;
                        border-bottom-left-radius: 6px;
                        background: #fff;
                        padding: 10px;
                        height: 45px;
                        width: 100%;
                        min-height: 120px;
                    }

                    .req_loan_amounttext button {
                        background: transparent;
                        border: #fff 1px solid;
                    }

                    @media only screen and (max-width:425px) and (orientation:portrait) {
                        .pop_main_container {
                            padding-left: 0px !important;
                            padding-right: 0px !important;
                        }

                        .pop_main_container .loan_application_main {
                            width: 100%;
                            padding-left: 0px;
                            padding-right: 0px;
                        }

                        .pop_main_container .loan_application_main .loan_information_main {
                            width: 100%;
                            padding-left: 0px;
                            padding-right: 0px;
                            border: none;
                        }

                        .pop_main_container .loan_application_main .loan_information_main .req_loan_amount {
                            width: 100%;
                        }

                        .pop_main_container .loan_application_main .loan_information_main .submitButton {
                            width: 100px;
                        }

                        .pop_main_container .loan_application_main .loan_information_main .resetButton {
                            width: 100px;
                        }

                        .pop_main_container .loan_application_main .loan_type_main h3 {
                            font-size: 18px;
                            font-weight: bold;
                        }

                        .pop_main_container .loan_application_main .loan_type_main .required {
                            font-size: 12px !important;
                        }

                        .pop_main_container .loan_application_main .loan_type_main p {
                            height: 75px !important;
                        }
                    }
                </style>
                <a></a>
                <section class="row-full">
                    <div class="b28board_members_main" style="padding-top:20px;">
                        <div class="container">
                            <h2>Board of Directors</h2>
                            <p>&nbsp;&nbsp;</p>
                            <div class='b28block-profile-wrapper'>
                                <div id='boardsection_1' class="b28board_members col-md-4">
                                    <div class="b28board_members_left"> <img id='MainBoardPhoto'
                                            src="{{asset('assets/frontend/contentassets/2eb4abd36acc429aa7454d02050e401d/jeff_evanson.png')}}"
                                            alt="Jeff Evanson" /></div>
                                    <div class="b28board_members_right">
                                        <h3>Jeff Evanson</h3>
                                    </div>
                                </div>
                                <div id='boardsection_2' class="b28board_members col-md-4">
                                    <div class="b28board_members_left"> <img id='MainBoardPhoto'
                                            src="{{asset('assets/frontend/contentassets/623b7931bf95454794ac610b86749608/greg_honl.png')}}"
                                            alt="Greg Honl" /></div>
                                    <div class="b28board_members_right">
                                        <h3>Greg Honl</h3>
                                    </div>
                                </div>
                                <div id='boardsection_3' class="b28board_members col-md-4 last">
                                    <div class="b28board_members_left"> <img id='MainBoardPhoto'
                                            src="{{asset('assets/frontend/contentassets/b482a5af935343f0a0d26fc82ceedfb8/roger_novotny.png')}}"
                                            alt="Roger Novotny" /></div>
                                    <div class="b28board_members_right">
                                        <h3>Roger Novotny</h3>
                                    </div>
                                </div>
                                <div id='boardsection_4' class="b28board_members col-md-4 m-l-2">
                                    <div class="b28board_members_left"> <img id='MainBoardPhoto'
                                            src="{{asset('assets/frontend/contentassets/3f7139a134274fd7bd90dfeb8d3c7ea9/dave_zimbeck.png')}}"
                                            alt="Dave Zimbeck" /></div>
                                    <div class="b28board_members_right">
                                        <h3>Dave Zimbeck</h3>
                                    </div>
                                </div>
                            </div>

                            <!--Pop up content starts-->
                            <div id="b28BoardModal" class="modal fade" role="dialog">
                                <div class="vertical-alignment-helper">
                                    <div class="modal-dialog b28pop_board vertical-align-center">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="b28pop_main_container_board">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">
                                                            <img class="close_icon"
                                                                src="{{asset('assets/frontend/Static/img/CustomBlocks/B29/close.png')}}"
                                                                alt="First PREMIER Bank">
                                                            <img class="close_icon_m"
                                                                src="{{asset('assets/frontend/Static/img/CustomBlocks/B29/close_mobile.png')}}"
                                                                alt="First PREMIER Bank">
                                                        </span>
                                                    </button>
                                                    <div class="b28pop_main_container_board_left"><img id="boardImage"
                                                            src="#" alt="First PREMIER Bank"></div>
                                                    <div class="b28pop_main_container_board_right">
                                                        <h3 id="boardName"></h3>
                                                        <span id="boardBranchName"></span>
                                                        <p id="boardDescription" style="text-align: left;">
                                                        </p>

                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="b28conatact-name">Phone</div>
                                                            <div id="boardPhoneNumber" class="b28conatact-number"></div>

                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <a id="boardEmailId" class="b28conatact-name">Email</a>
                                                            <a id="boardEmailLink" class="b28conatact-email"
                                                                style="padding-right: 12px;background-size: 6px;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Pop up content End-->
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board" style="width:93%;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_container">
                                        <form>
                                            <div class="loan_application_main">
                                                <div class="container">
                                                    <div class="loan_type_main">
                                                        <h3 id="contactWithPersonName"></h3>
                                                        <p class="required">Note: Email is not secure. Please do not
                                                            send any sensitive personal information including but not
                                                            limited to your SSN, bank numbers, or other personally
                                                            identifiable information</p>
                                                    </div>
                                                    <!--Loan Information-->
                                                    <div class="loan_information_main">
                                                        <div class="req_loan_amount">
                                                            <span><em>*</em>Full name</span>
                                                            <input type="text" id="fullname" required />
                                                        </div>
                                                        <div class="req_loan_amount select_custom">
                                                            <span><em>*</em>Email</span>
                                                            <input type="email" id="email" required />
                                                        </div>
                                                        <div class="req_loan_amount req_loan_amounttext">
                                                            <span><em>*</em>Phone</span>
                                                            <input type="text" id="phone" />
                                                            <br /><br /><br />
                                                            <span><em>*</em>Message</span>
                                                            <textarea id="message" required></textarea>
                                                            <button type="submit"
                                                                id="submitButtonB28Block">Submit</button>
                                                            <button type="button" id="resetButton"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View Rate [3] (within container)-->
                <!--- second Modal-->
                <div id="myModal2_JeffEvanson" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_containerArea">
                                        <div class="new5Popup">

                                            <div class="new5Popup_leadership">
                                                <div class="new5Popup_leadership_left"><img
                                                        src="{{asset('assets/frontend/contentassets/2eb4abd36acc429aa7454d02050e401d/jeff_evanson.png')}}"
                                                        title="Jeff Evanson" alt="Jeff Evanson"></div>
                                                <div class="new5Popup_leadership_right">
                                                    <h2>Jeff Evanson</h2>
                                                    <span class="upper"></span>
                                                    <h4> </h4>
                                                    <div class="xhtml">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Phone</h5>
                                                            <span></span>
                                                        </div>
                                                        <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Email</h5>
                                                            <span><a href="mailto:">Contact Me</a></span>
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
                <div id="myModal2_GregHonl" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_containerArea">
                                        <div class="new5Popup">

                                            <div class="new5Popup_leadership">
                                                <div class="new5Popup_leadership_left"><img
                                                        src="{{asset('assets/frontend/contentassets/623b7931bf95454794ac610b86749608/greg_honl.png')}}"
                                                        title="Greg Honl" alt="Greg Honl"></div>
                                                <div class="new5Popup_leadership_right">
                                                    <h2>Greg Honl</h2>
                                                    <span class="upper"></span>
                                                    <h4> </h4>
                                                    <div class="xhtml">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Phone</h5>
                                                            <span></span>
                                                        </div>
                                                        <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Email</h5>
                                                            <span><a href="mailto:">Contact Me</a></span>
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
                <div id="myModal2_RogerNovotny" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_containerArea">
                                        <div class="new5Popup">

                                            <div class="new5Popup_leadership">
                                                <div class="new5Popup_leadership_left"><img
                                                        src="{{asset('assets/frontend/contentassets/b482a5af935343f0a0d26fc82ceedfb8/roger_novotny.png')}}"
                                                        title="Roger Novotny" alt="Roger Novotny"></div>
                                                <div class="new5Popup_leadership_right">
                                                    <h2>Roger Novotny</h2>
                                                    <span class="upper"></span>
                                                    <h4> </h4>
                                                    <div class="xhtml">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Phone</h5>
                                                            <span></span>
                                                        </div>
                                                        <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Email</h5>
                                                            <span><a href="mailto:">Contact Me</a></span>
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
                <div id="myModal2_DaveZimbeck" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_containerArea">
                                        <div class="new5Popup">

                                            <div class="new5Popup_leadership">
                                                <div class="new5Popup_leadership_left"><img
                                                        src="{{asset('assets/frontend/contentassets/3f7139a134274fd7bd90dfeb8d3c7ea9/dave_zimbeck.png')}}"
                                                        title="Dave Zimbeck" alt="Dave Zimbeck"></div>
                                                <div class="new5Popup_leadership_right">
                                                    <h2>Dave Zimbeck</h2>
                                                    <span class="upper"></span>
                                                    <h4> </h4>
                                                    <div class="xhtml">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Phone</h5>
                                                            <span></span>
                                                        </div>
                                                        <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Email</h5>
                                                            <span><a href="mailto:">Contact Me</a></span>
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
        </div>



        <div class="row-full footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                        <div class="footerHeader">Company</div>

                        <ul>

                            <li>
                                <a href="../index.html">About Us</a>
                            </li>

                            <li>
                                <a href="../../../index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="../community/index.html">Community</a>
                            </li>

                            <li>
                                <a href="../careers/index.html">Careers</a>
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
                                <a href="../../resources/first-premier-privacy-statement-2020/index.html">Privacy Notice
                                    &amp; Statement</a>
                            </li>

                            <li>
                                <a href="../../resources/legal-disclosures/index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="../../resources/cookie-policy/index.html">Cookie Policy</a>
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