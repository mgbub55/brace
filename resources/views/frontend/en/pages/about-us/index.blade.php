@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <div class="container">



            <!--start responsive menu-->
            {{-- <nav class="pushy pushy-right">
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

Checking                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse11" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../personal/personal-checking/index.html">Personal Checking</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../personal/personal-checking/free-plus-checking/index.html">FREE+ Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/personal-checking/reward-checking/index.html">Reward Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/personal-checking/debit-card/index.html">Debit Card</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/personal-checking/overdraft-protection/index.html">Overdraft Protection</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/personal-checking/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse12">

Online &amp; Mobile                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse12" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../personal/online-and-mobile/index.html">Online &amp; Mobile</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../personal/online-and-mobile/online-banking/index.html">Online Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/online-and-mobile/mobile-banking/index.html">Mobile Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/online-and-mobile/bill-pay/index.html">Bill Pay</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/online-and-mobile/estatements/index.html">eStatements</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/online-and-mobile/mobile-wallet/index.html">Mobile Wallet</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/online-and-mobile/personal-financial-management/index.html">Personal Financial Management</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse13">

Savings &amp; CDs                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse13" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../personal/savings-and-cds/index.html">Savings &amp; CDs</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../personal/savings-and-cds/regular-savings/index.html">Regular Savings</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/savings-and-cds/premier-money-market/index.html">PREMIER Money Market</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/savings-and-cds/certificates-of-deposit/index.html">Certificates of Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/savings-and-cds/ira-savings-and-cds/index.html">IRA Savings &amp; CDs</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/savings-and-cds/kids-savings/index.html">Kids Savings</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse14">

Loans &amp; Credit Lines                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse14" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../personal/loans-and-credit-lines/index.html">Loans &amp; Credit Lines</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../personal/loans-and-credit-lines/personal-loans/index.html">Personal Loans</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/loans-and-credit-lines/personal-lines-of-credit/index.html">Personal Lines of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/loans-and-credit-lines/easy-access-line-of-credit/index.html">Easy Access Line of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/loans-and-credit-lines/home-equity-line-of-credit/index.html">Home Equity Line of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/loans-and-credit-lines/advance-access-line-of-credit/index.html">Advance Access Line of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/loans-and-credit-lines/loan-payment-options/index.html">Loan Payment Options</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse15">

Mortgages                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse15" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../personal/mortgages/index.html">Mortgages</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../personal/mortgages/buying-or-building-a-home/index.html">Buying or Building a Home</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/mortgages/refinancing-a-home/index.html">Refinancing a Home</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/mortgages/jumbo-mortgage-loans/index.html">Jumbo Mortgage Loans</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/mortgages/apply-for-a-mortgage/index.html">Apply for a Mortgage</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse16">

Investing                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse16" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../personal/investing/index.html">Investing</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../personal/investing/brokerage-services/index.html">Brokerage Services</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/investing/retirement-planning/index.html">Retirement Planning</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/investing/insurance/index.html">Insurance</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/investing/financial-and-investing-resources/index.html">Financial &amp; Investing Resources</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse17">

Wealth Management                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse17" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../personal/wealth-management/index.html">Wealth Management</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../personal/wealth-management/private-banking/index.html">Private Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/wealth-management/financial-planning/index.html">Financial Planning</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/wealth-management/personal-trust-services/index.html">Personal Trust Services</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/wealth-management/managed-investing/index.html">Managed Investing</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/wealth-management/trusts-in-south-dakota/index.html">Trusts in South Dakota</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse18">

Students &amp; Parents                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse18" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../personal/students-and-parents/index.html">Students &amp; Parents</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../personal/students-and-parents/university-debit-cards/index.html">University Debit Cards</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/students-and-parents/dakota-state-university-debit-card/index.html">Dakota State University Debit Card</a>                                                </div>
                                                <div class="panel-body">
<a href="../../personal/students-and-parents/student-loans/index.html">Student Loans</a>                                                </div>
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

Checking                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse21" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/business-checking/index.html">Business Checking</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../small-business/business-checking/low-volume/index.html">Low Volume</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-checking/low-volume-plus-interest/index.html">Low Volume + Interest</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-checking/high-volume-plus-earnings-credit/index.html">High Volume + Earnings Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-checking/high-volume-plus-interest/index.html">High Volume + Interest</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-checking/compare-business-checking/index.html">Compare Business Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-checking/business-debit-mastercard/index.html">Business Debit Mastercard&#174;</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-checking/overdraft-protection/index.html">Overdraft Protection</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-checking/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse22">

Online &amp; Mobile                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse22" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/online-and-mobile/index.html">Online &amp; Mobile</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../small-business/online-and-mobile/online-banking/index.html">Business Online Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/online-and-mobile/mobile-banking/index.html">Mobile Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/online-and-mobile/bill-pay/index.html">Bill Pay</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/online-and-mobile/estatements/index.html">eStatements</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/online-and-mobile/mobile-wallet/index.html">Mobile Wallet</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse23">

Savings &amp; CDs                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse23" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/savings-and-cds/index.html">Savings &amp; CDs</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../small-business/savings-and-cds/regular-business-savings/index.html">Regular Business Savings</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/savings-and-cds/premier-money-market/index.html">PREMIER Money Market</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/savings-and-cds/certificates-of-deposit/index.html">Certificates of Deposit</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse24">

Loans &amp; Credit Lines                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse24" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/loans-and-credit-lines/index.html">Loans &amp; Credit Lines</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../small-business/loans-and-credit-lines/small-business-loans/index.html">Small Business Loans</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/loans-and-credit-lines/business-lines-of-credit/index.html">Business Lines of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/loans-and-credit-lines/commercial-real-estate/index.html">Commercial Real Estate</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard&#174;</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse25">

Business Services                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse25" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/business-services/index.html">Business Services</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../small-business/business-services/make-payments/index.html">Make Payments</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-services/accept-payments/index.html">Accept Payments</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-services/merchant-card-services/index.html">Merchant Card Services</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-services/remote-deposit/index.html">Remote Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-services/lockbox-services/index.html">Lockbox Services</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-services/positive-pay/index.html">Positive Pay</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard&#174;</a>                                                </div>
                                                <div class="panel-body">
<a href="{{route('frontend.en.commercial.asset.business.first')}}">First PREMIER at Work</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse26">

Asset Management &amp; Trust                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse26" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../small-business/asset-management-and-trust/index.html">Asset Management &amp; Trust</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../small-business/asset-management-and-trust/business-planning-investment/index.html">Business Planning &amp; Investing</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/asset-management-and-trust/employee-benefits/index.html">Employee Benefits</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/asset-management-and-trust/group-retirement-plans/index.html">Group Retirement Plans</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/asset-management-and-trust/business-trust-services/index.html">Business Trust Services</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/asset-management-and-trust/first-premier-at-work/index.html">First PREMIER at Work</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/asset-management-and-trust/south-dakota-trusts/index.html">Trusts in South Dakota</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse27">

Ag Banking                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
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

Checking                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse31" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.business')}}">Business Checking</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../commercial/business-checking/high-volume-plus-earnings-credit/index.html">High Volume + Earnings Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/business-checking/high-volume-plus-interest/index.html">High Volume + Interest</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/business-checking/low-volume/index.html">Low Volume</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/business-checking/low-volume-plus-interest/index.html">Low Volume + Interest</a>                                                </div>
                                                <div class="panel-body">
<a href="../../small-business/business-checking/compare-business-checking/index.html">Compare Business Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="{{route('frontend.en.commercial.business.debit')}}">Business Debit Mastercard&#174;</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/business-checking/overdraft-protection/index.html">Overdraft Protection</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/treasury-services/cash-management/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse32">

Savings &amp; CDs                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse32" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../commercial/savings-and-cds/index.html">Savings &amp; CDs</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../commercial/savings-and-cds/traditional-savings/index.html">Traditional Savings</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/savings-and-cds/premier-money-market/index.html">PREMIER Money Market</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/savings-and-cds/certificate-of-deposit/index.html">Certificate of Deposit</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse33">

Financing                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse33" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../commercial/financing/index.html">Financing</a>
                                            </div>
                                                <div class="panel-body">
<a href="../../commercial/financing/commercial-lending/index.html">Commercial Lending</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/financing/business-lines-of-credit/index.html">Business Lines of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/financing/commercial-real-estate/index.html">Commercial Real Estate</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/financing/business-debit-mastercard/index.html">Business Rewards Mastercard&#174;</a>                                                </div>
                                                <div class="panel-body">
<a href="../../commercial/financing/atm-vault-cash-solutions/index.html">ATM Vault Cash Solutions</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse34">

Treasury Services                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse34" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../../commercial/treasury-services/index.html">Treasury Services</a>
                                            </div>
                                                <div class="panel-body">
                                                            <u><a href="../../commercial/treasury-services/cash-management/index.html">Cash Management</a></u>
                                                        <div style="color:#ffd800 !important;">
<a href="../../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual Account Management</a><a href="../../commercial/treasury-services/cash-management/business-online-banking/index.html">Business Online Banking</a><a href="../../commercial/treasury-services/cash-management/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a><a href="../../commercial/treasury-services/cash-management/mobile-banking/index.html">Mobile Banking</a><a href="../../commercial/treasury-services/cash-management/reporting-and-analytics/index.html">Reporting &amp; Analytics</a><a href="../../commercial/treasury-services/cash-management/mobile-wallet/index.html">Mobile Wallet</a><a href="../../commercial/treasury-services/cash-management/estatements/index.html">eStatements</a><a href="../../commercial/treasury-services/cash-management/bill-pay/index.html">Bill Pay</a>                                                        </div>
                                                </div>
                                                <div class="panel-body">
                                                            <u><a href="../../commercial/treasury-services/manage-receivables/index.html">Manage Receivables</a></u>
                                                        <div style="color:#ffd800 !important;">
<a href="../../commercial/treasury-services/manage-receivables/ach-services/index.html">ACH Services</a><a href="../../commercial/treasury-services/manage-receivables/merchant-card-services/index.html">Merchant Card Services</a><a href="../../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual Account Management</a><a href="../../commercial/treasury-services/manage-receivables/remote-deposit/index.html">Remote Deposit</a><a href="../../commercial/treasury-services/manage-receivables/lockbox-services/index.html">LockBox Services</a><a href="../../commercial/treasury-services/manage-receivables/centralized-returns/index.html">Centralized Returns</a><a href="../../commercial/treasury-services/manage-receivables/check-image-clearing/index.html">Check Image Clearing</a><a href="../../commercial/treasury-services/manage-receivables/positive-pay/index.html">Positive Pay</a>                                                        </div>
                                                </div>
                                                <div class="panel-body">
                                                            <u><a href="../../commercial/treasury-services/manage-payables-and-payroll/index.html">Manage Payables &amp; Payroll</a></u>
                                                        <div style="color:#ffd800 !important;">
<a href="../../commercial/treasury-services/manage-receivables/ach-services/index.html">ACH Services</a><a href="../../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual Account Management</a><a href="../../small-business/business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard&#174;</a>                                                        </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse35">

Asset Management &amp; Trust                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse35" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset')}}">Asset Management &amp; Trust</a>
                                            </div>
                                                <div class="panel-body">
<a href="{{route('frontend.en.commercial.asset.business')}}">Business Planning &amp; Investing</a>                                                </div>
                                                <div class="panel-body">
<a href="{{route('frontend.en.commercial.asset.business.employee')}}">Employee Benefits</a>                                                </div>
                                                <div class="panel-body">
<a href="{{route('frontend.en.commercial.asset.group')}}">Group Retirement Plans</a>                                                </div>
                                                <div class="panel-body">
<a href="{{route('frontend.en.commercial.asset.business.trust')}}">Business Trust Services</a>                                                </div>
                                                <div class="panel-body">
<a href="{{route('frontend.en.commercial.asset.business.first')}}">First PREMIER at Work</a>                                                </div>
                                                <div class="panel-body">
<a href="{{route('frontend.en.commercial.asset.south')}}">Trusts in South Dakota</a>                                                </div>
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
                        <h4><a href="https://www.mypremiercreditcard.com/login.aspx" data-type="" id="SIcreditcardpayment">Credit Card</a></h4>
                        <h4><a href="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx" data-type="actionitem" id="SIpersonalbanking">Personal Banking </a></h4>
                        <h4><a href="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx" data-type="actionitem" id="SIbusinessbanking">Business Banking</a></h4>
                        <h4><a href="https://firstpremier.fdecs.com/eCustService/" data-type="" id="SIbusinessrewards"> Business Rewards Credit Card</a></h4>
                        <h4><a href="https://goldleafach.com/ach/signin.aspx?218264CB36" data-type="" id="SIachonline"> ACH Online </a></h4>
                        <h4><a href="https://icp.infovisa.com/0309/" data-type="" id="SItrust"> Trust Online </a></h4>
                        <!--https ://www.mauiweb1.com/0309"-->
                        <h4><a href="https://myaccount.iconnect2invest.com/bankr/login.do?webcontext=iconnect" data-type="" id="SIinvestmentservices">Brokerage Account</a></h4>
                        <h4><a href="https://firstpremier.mymortgage-online.com/?borrowerportal&amp;siteid=9621968476" data-type="" id="SIMortgage">Mortgage Application</a></h4>
                    </div>
                </div>
                <ul class="footer-mobile-link">
                    <li class="number-bg">800-501-6535</li>
                    <li><a href="../quick-links/locations/index.html">Locations</a></li><li><a href="index.html">About Us</a></li><li><a href="careers/index.html">Careers</a></li><li><a href="../quick-links/customer-care/index.html">Customer Care</a></li>

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
                            <li class="navItem"><a href="../quick-links/locations/index.html">Locations</a></li><li class="navItem"><a href="index.html">About Us</a></li><li class="navItem"><a href="careers/index.html">Careers</a></li><li class="navItem"><a href="../quick-links/customer-care/index.html">Customer Care</a></li>

                                <li id="signInSection" class="bg-dropdown" onmouseover="ShowSignInOption()" onmouseout="ShowSignInOption()">
                                    <a href="#" class="signin">Sign In </a>

                                    <div id="signInHoverSection" class="b1sign-in-hover" data-present="present" style="display:none;">
                                        <p><a href="https://www.mypremiercreditcard.com/login.aspx" data-type="" id="SIcreditcardpayment">Credit Card</a><br /></p>
                                        <p><a href="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx" data-type="actionitem" id="SIpersonalbanking">Personal Banking</a><br /></p>
                                        <p><a href="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx" data-type="actionitem" id="SIbusinessbanking">Business Banking</a><br />
                                        <p><a href="https://firstpremier.fdecs.com/eCustService/" data-type="" id="SIbusinessrewards">Business Rewards Credit Card</a><br /></p>
                                        <p><a href="https://goldleafach.com/ach/signin.aspx?218264CB36" data-type="" id="SIachonline">ACH Online</a><br /></p>
                                        <p><a href="https://icp.infovisa.com/0309/" data-type="" id="SItrust">Trust Online </a><br /></p>
                                        <!--h t t p s://www.mauiweb1.com/0309-->
                                        <p><a href="https://myaccount.iconnect2invest.com/bankr/login.do?webcontext=iconnect" data-type="" id="SIinvestmentservices">Brokerage Account</a><br /></p>
                                        <p><a href="https://firstpremier.mymortgage-online.com/?borrowerportal&amp;siteid=9621968476" data-type="" id="SIMortgages">Mortgage Application</a><br /></p>
                                    </div>
                                </li>

                            <li>
                                <a href="#" title="Search">
                                    <div class="top-bar">
                                        <input class="search" id="txtheadsearch" onblur="SearchOut()" onfocus="SearchIn()" type="text" name="q">
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
                            <a href="../../index.html" title="First PREMIER Bank - Home"><img src="../../../Static/gfx/LogoStack.png" style="max-width:100%;" /></a>
                    </article>
                    <article class="small-menu">
                        <ul>
<li><a href="../../index.html">Personal</a></li><li><a href="../../small-business/index.html">Small Business</a></li><li><a href="../../commercial/index.html">Commercial</a></li>
                        </ul>
                    </article>
                    <div class="card-btn">
                        <a href="https://www.mypremiercreditcard.com/">Credit Card Sign In <img src="../../../Static/img/card-icon.png" alt="First PREMIER Bank"></a>
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
</section> --}}

            <script>
                $(document).ready(function() {



                    //$('#AccessAccountDropdown option[id!=selectaccount]').each(function (index, value) {
                    //    $('#signInHoverSection').append('<p>' + $(value).text() + '</p>');
                    //});

                    if ($(window).width() == 1024) {
                        $('#ulPremierMainMenu li.SubMenu > a').on('click touchend', function(e) {
                            $(this).find('div[id*=subdiv]').hide();
                            $(this).attr('href', 'javascript:void(0)');
                            ShowMenu(this);
                        }).focusout(function() {
                            ShowMenu(this);
                        });
                    } else {

                        var timeoutId;
                        $("#ulPremierMainMenu li.SubMenu > a").hover(function() {
                                var self = this;
                                if (!timeoutId) {
                                    timeoutId = window.setTimeout(function() {
                                        timeoutId = null;
                                        ShowMenu(self);
                                    }, 50);
                                }
                            },
                            function() {
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

                    var handleMouseover = function(e) {
                        var target = e.target || e.srcElement;
                        lastID = target.id;
                        className = target.className;
                        tagName = target.localName;
                        if (lastID != "ulPremierMainMenu" && lastID != "") {
                            $('div[id*=subdiv]').slideUp(500);
                            $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');
                        }
                        if (className == "col-md-8 col-xs-12 col-sm-6" || className == "b1banner_text" || className ==
                            "b1login_Box" || className == "b1banner-desc" || className == "row b1mobile" || className ==
                            "b1banner_text" || className == "White" || className == "b1access" || className ==
                            "header-box" || tagName == "img" || tagName == "body") {
                            $('div[id*=subdiv]').slideUp(500);
                            $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');;
                        }

                    };

                    if (document.addEventListener) {
                        document.addEventListener('mouseover', handleMouseover, false);
                        document.addEventListener('mouseover', handleMouseover, false);
                    } else {
                        document.attachEvent('onmouseover', handleMouseover);
                    }

                });

                function ShowMenu(element) {
                    if ($(element).next('div[id*=subdiv]').filter(function() {
                            return $(this).css('display') === 'block';
                        }).length == 0) {
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
                <div class="block b47block  col-md-12">
                    <style>
                        .b47hero_banner_text2 h2 {
                            font-size: 5px;
                            font-family: &#39;
                            Prompt-SemiBold&#39;
                            ;
                            float: left;
                            width: 100%;
                            text-shadow: 1px 1px 1px #000, 0 0 0.8em #000, 0 0 0.1em #000;
                        }

                        .b47hero_banner_text2 p {
                            color: #ffffff;
                            font-family: &#39;
                            Prompt-Medium&#39;
                            ;
                            font-size: 20px;
                            float: left;
                            width: 80%;
                            margin: 1% 0 3% 0;
                        }

                    </style>


                    <section class="row-full">
                        <form method="get">
                            <div class="b47hero_banner2">
                                <div class="b47hero_coverM2"></div>

                                <img class="b47hero-img2"
                                    src="{{ asset('assets/frontend/contentassets/b3bde2e16fbb446ab2896c711e0ba0a6/0.5_b-46-hero_skylinenight-min.png') }}"
                                    alt="downtown Sioux Falls South Dakota">
                                <div class="b47banner-desc2">
                                    <div class="container">
                                        <div class="b47hero_banner_text2">
                                            <h1>About Us</h1>
                                            <p>Learn why we&rsquo;re one of the strongest <br />banks in the nation, and why
                                                we&rsquo;re here <br />to stay!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
                <div class="block b02block  col-md-12">
                    <section>
                        <div class="b2about_grown_main">
                            <div class="b2container">
                                <h2>Locally Grown, Nationally Known</h2>
                                <div class="xhtml">
                                    <p>We are proud of our strong reputation and even more proud of our people and the
                                        values they embody. PREMIER associates have deep, South Dakota roots and demonstrate
                                        a personal commitment to the communities we serve.</p>
                                </div>
                                <div class="b2about_debit col-md-4">
                                    <span>Zero Debt</span>
                                    <p>Privately owned and debt-free. One of the strongest banks in the nation.</p>
                                </div>
                                <div class="b2about_debit community col-md-4">
                                    <span>$2B</span>
                                    <p>Strongly capitalized and one of the top-performing S-corp banks in the country.</p>
                                </div>
                                <div class="b2about_debit assets col-md-4">
                                    <span>$3B</span>
                                    <p>Our wealth and trust specialists manage $3 billion in trust assets.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="block b03block  col-md-12">

                    <section>
                        <div class="b3premier_family_main">
                            <div class="container">
                                <h2>The PREMIER Family</h2>
                                <p>United National Corporation, the holding company for First PREMIER Bank and PREMIER
                                    Bankcard, has been consistently ranked as one of the top-performing S-Corp banks with
                                    assets between $100 million and $3 billion by American Banking Association's Banking
                                    Journal.</p>
                                <div class="b3premier_family col-md-6">
                                    <div class="b3premier_family_left"><img
                                            src="{{ asset('assets/frontend/contentassets/2ee53b07413e4df181de542c359cf2b5/1.8_b-03-premierbank-min.png') }}"
                                            alt="First PREMIER Bank" class="img-responsive"></div>
                                    <div class="b3premier_family_right">
                                        <span><a href="about-first-premier-bank/index.html">First PREMIER Bank</a></span>
                                        <div class="xhtml">
                                            <p>As a regional bank with a strong national reputation, we&rsquo;re high tech
                                                and high touch. We serve individuals from all walks of life and businesses
                                                and organizations of every size, offering comprehensive banking, financial,
                                                treasury, wealth and trust services.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="b3premier_family col-md-6">
                                    <div class="b3premier_family_left"><img
                                            src="{{ asset('assets/frontend/contentassets/2ee53b07413e4df181de542c359cf2b5/1.8_b-03-premierbankcard-min.png') }}"
                                            alt="PREMIER Bankcard" class="img-responsive"></div>
                                    <div class="b3premier_family_right">
                                        <span><a href="{{ route('frontend.en.pages.about.about-premier') }}">PREMIER
                                                Bankcard</a></span>
                                        <div class="xhtml">
                                            <p>Low credit scores, caused by past financial problems, job loss, divorce and
                                                other factors impact millions of consumers today. As the 12th largest issuer
                                                of Mastercard&reg;, we help people who may otherwise be turned down to
                                                obtain a credit card.</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="the-premier-story/index.html" class="readmore">Our Story</a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="block b30block  col-md-12">
                    <section class="row-full">

                        <div class="b30Press_room_main">
                            <div class="container">
                                <div class="b30Press_room col-md-12">
                                    <h1>Press Room</h1>
                                    <div class="b30_bottom">
                                        <div class="col-md-12 ">
                                            <div class="pressRoom"><span class="col-md-3"
                                                    style="font-size:20px;">Jun 17, 2021</span>
                                                <p class="col-md-9"> <b class="upper">Press Release</b><br />
                                                    <a href="press-room/nations-best-performing-large-community-bank/index.html"
                                                        style="font-size:20px;">Nation's Best Performing Large Community
                                                        Bank</a></p><br clear=all />
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="pressRoom"><span class="col-md-3"
                                                    style="font-size:20px;">Jun 16, 2021</span>
                                                <p class="col-md-9"> <b class="upper">Press Release</b><br />
                                                    <a href="press-room/major-donation-makes-veterans-cemetery-a-reality/index.html"
                                                        style="font-size:20px;">MAJOR DONATION MAKES VETERANS CEMETERY A
                                                        REALITY</a></p><br clear=all />
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="pressRoom"><span class="col-md-3"
                                                    style="font-size:20px;">May 05, 2021</span>
                                                <p class="col-md-9"> <b class="upper">Press Release</b><br />
                                                    <a href="press-room/2021-community-scholarship-winners/index.html"
                                                        style="font-size:20px;">2021 Community Scholarship Winners</a></p>
                                                <br clear=all />
                                            </div>
                                        </div>
                                        <a href="press-room/index.html" class="readmore">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <style>
                        b {
                            font-weight: bold !important;
                        }

                    </style>
                </div>
                <div class="block b02block  col-md-12">
                    <section>
                        <div class="b2about_grown_main">
                            <div class="b2container">
                                <h2>Our People</h2>
                                <div class="b2about_debit col-md-4">
                                    <span>2300+</span>
                                    <p>We have 2300+ employees in over 20 locations within the state of South Dakota.</p>
                                </div>
                                <div class="b2about_debit community col-md-4">
                                    <span>Sioux Falls</span>
                                    <p>Locally headquartered and proudly serving the City of Sioux Falls and the State of
                                        South Dakota.</p>
                                </div>
                                <div class="b2about_debit assets col-md-4">
                                    <span>Best Bank</span>
                                    <p>Ranked one of the “Best Banks to Work For” 2015-2020 by American Banker and Best
                                        Companies Group.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="block b59block  col-md-12">
                    <style>

                    </style>
                    <section class="row">
                        <div class="clearfix"></div>
                        <div class="b59Lists col-md-12">
                            <div class="b59Col1 col-md-4 col-sm-12">
                                <div class="xhtml">
                                    <p>&nbsp;</p>
                                    <h2><strong>Your Bank, <br />Your Team</strong></h2>
                                </div>
                            </div>
                            <div class="b59Col2 col-md-4 col-sm-7">
                                <div class="xhtml">
                                    <ul>
                                        <li><a href="leadership-team/index.html">Leadership</a></li>
                                        <li><a title="Personal Banking"
                                                href="teams/personal-banking-sioux-falls-team/index.html">Personal
                                                Banking</a></li>
                                        <li><a title="Mortgage Banking"
                                                href="teams/mortgage-banking-team/index.html">Mortgage Banking</a></li>
                                        <li><a title="Brokerage Services"
                                                href="teams/investing-services-team/index.html">Brokerage Services</a></li>
                                        <li><a title="Private Banking &amp; Wealth"
                                                href="teams/wealth-management-team/index.html">Private Banking &amp;
                                                Wealth</a></li>
                                    </ul>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                            <div class="b59Col3 col-md-4 col-sm-5">
                                <div class="xhtml">
                                    <ul>
                                        <li><a href="teams/small-business-banking-team/index.html">Business Banking</a></li>
                                        <li><a href="teams/treasury-services-team/index.html">Treasury Services</a></li>
                                        <li><a href="teams/ag-banking-team/index.html">Ag Banking</a></li>
                                        <li><a title="Asset Management &amp; Trust Services"
                                                href="teams/wealth-management-team/index.html">Asset Management &amp; Trust
                                                Services</a></li>
                                        <li><a href="teams/atm-cash-funding/index.html">ATM Vault Cash Funding</a></li>
                                    </ul>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <script>
                    $('#b11Carousel').carousel({
                        interval: 80000,
                    })
                </script>



                    <div class="b11section">
                        <section class="container">
                            <div class="b11first_premier_main">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 b11firstpremier_box_main">
                                            <div class='item active'>
                                                <div class='col-md-4 col-sm-6 b11anytime_box'><a
                                                        href='careers/index.html'><img
                                                            src='{{ asset('assets/frontend/globalassets/images/secondary-icons/blue/places/blue-places-secondary-icon-10.png') }}'
                                                            alt='buildings' border='0' /></a><span><a
                                                            href='careers/index.html'>PREMIER Careers</a></span>
                                                    <div class="xhtml">
                                                        <p>At First PREMIER Bank and PREMIER Bankcard, we&rsquo;re hiring!
                                                            Enjoy great pay and benefits at one of the &ldquo;Best Banks to
                                                            Work For.&rdquo;</p>
                                                    </div>
                                                </div>
                                                <div class='col-md-4 col-sm-6 b11anytime_box'><a
                                                        href='the-premier-way/index.html'><img
                                                            src='{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/user/gold-user-secondary-icon-6.png') }}'
                                                            alt='shadow of person' border='0' /></a><span><a
                                                            href='the-premier-way/index.html'>The PREMIER Way</a></span>
                                                    <div class="xhtml">
                                                        <p>Proactive, relational, excellence, making a difference, eager to
                                                            serve and representing well&hellip; it&rsquo;s the PREMIER Way.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class='col-md-4 col-sm-6 b11anytime_box'><a
                                                        href='community/celebration/index.html'><img
                                                            src='{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/comments-chat/bright-comments-_-chat-secondary-icon-11.png') }}'
                                                            alt='award' border='0' /></a><span><a
                                                            href='community/celebration/index.html'>Team
                                                            Celebrations</a></span>
                                                    <div class="xhtml">
                                                        <p>Showing appreciation and celebrating the accomplishments of our
                                                            associates is an important part of business.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </section>
                    </div>
                </div>
                <div class="block b18block  col-md-12">

                    <style>
                        .pop_main_container_board .pop_main_container ol li ol li {}

                        .b18great_feature_main .b18detail {}

                        .b18great_feature_main .b18great_feature_left .b18detail h3 {}

                        .b18great_feature_main .b18great_feature_left span {}

                        .b18great_feature_main .b18great_feature_left .b18detail ul {}

                        @media only screen and (max-width: 767px) {
                            .b18great_feature_left {
                                padding-bottom: 0px;
                            }

                            .b18great_feature_main .b18detail {
                                margin-top: 0px;
                            }
                        }

                        .b18great_feature_main .b18detail {
                            min-height: 100px !important;
                        }

                        @media only screen and (max-width: 470px) {
                            .b18great_feature_main .b18detail {
                                display: inline-block;
                                padding-bottom: 15px;
                            }

                            .b18great_feature_left a.b18mainanchor {
                                margin-left: 20%;
                            }
                        }

                    </style>
                    <!-- VIEW RATE / SPEED BUMP [2] -->

                    <section>
                        <div class="b18great_feature_main">
                            <h2> Our Relationships </h2>
                            <div class="b18great_feature_left">
                                <div class="b18detail xhtml">
                                    <p>At First PREMIER, we take pride in our long-standing, solid, personal relationships.
                                        We serve the individualized financial needs of thousands of consumers, businesses,
                                        agricultural producers, organizations, non-profits, foundations and more. For 20+
                                        years, we have served as the bank for the State of South Dakota. We have also been
                                        the bank for the City of Sioux Falls for 15+ years.&nbsp;</p>
                                </div>
                            </div>
                            <div class="b18great_feature_left b18great_feature_right payIcon-space">
                                <div class="b18detail xhtml">
                                    <ul>
                                        <li>Consumers</li>
                                        <li>Small Businesses</li>
                                        <li>Commercial Clients Across Industries</li>
                                        <li>Government Agencies</li>
                                        <li>Foundations / Endowments</li>
                                    </ul>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                            <div class="clearfix">
                                <center>
                                </center>
                            </div>

                        </div>
                        <div id="a30632262" class="modal fade" role="dialog">
                            <div class="modal-dialog pop_board">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="pop_main_container_board">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">
                                                    <img class="close_icon"
                                                        src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                        alt="First PREMIER Bank"
                                                        style="height:17px !important;width:17px !important;">
                                                </span>
                                            </button>
                                            <div class="pop_main_container">
                                                <div class="pop_board_white">
                                                    <div class="row">
                                                        <div class="col-md-12" style="padding-left:40px;">
                                                            <h4 class="Blue"></h4>
                                                            <div class="b46Blue" style="text-align:left;">

                                                                <p><br /><a target="_blank"></a></p>
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
                        <div id="b30632262" class="modal fade" role="dialog">
                            <div class="modal-dialog pop_board">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="pop_main_container_board">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">
                                                    <img class="close_icon"
                                                        src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                        alt="First PREMIER Bank"
                                                        style="height:17px !important;width:17px !important;">
                                                </span>
                                            </button>
                                            <div class="pop_main_container">
                                                <div class="pop_board_white">
                                                    <div class="row">
                                                        <div class="col-md-12" style="padding-left:40px;">
                                                            <h4 class="Blue"></h4>
                                                            <div class="b46Blue" style="text-align:left;">

                                                                <p><br /><a target="_blank"></a></p>
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
                        <div id="c30632262" class="modal fade" role="dialog">
                            <div class="modal-dialog pop_board">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="pop_main_container_board">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">
                                                    <img class="close_icon"
                                                        src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                        alt="First PREMIER Bank"
                                                        style="height:17px !important;width:17px !important;">
                                                </span>
                                            </button>
                                            <div class="pop_main_container">
                                                <h2>Our Relationships</h2>
                                                <div class="pop_board_white">
                                                    <div class="row">
                                                        <div class="col-md-12" style="padding-left:40px;">
                                                            <h4 class="Blue"></h4>
                                                            <div class="b46Blue" style="text-align:left;">

                                                                <p><br /><a href="#" target="_blank"></a></p>
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
                </div>
                <div class="block b26block  col-md-12">



                    <style>
                        .carousel-control:focus,
                        .carousel-control:hover,
                        .carousel-control.left,
                        .carousel-control.right {
                            background: none !important;
                        }

                        .b26line_credit_main .carousel-inner {
                            ;
                        }

                        .white-background h2,
                        .white-background .xhtml,
                        .white-background .xhtml p,
                        .grey-background h2,
                        .grey-background .xhtml,
                        .grey-background .xhtml p {
                            color: #000;
                        }

                    </style>
                    <script>
                        var alternateBackground = "False";
                        $(document).ready(function() {
                            $('#myCarousel-').carousel({
                                interval: 16000
                            })

                            if (alternateBackground.toLowerCase() == "true") {
                                $("#b26linecredit").addClass("alternate_background");
                            } else {
                                $("#b26linecredit").addClass("primary_background");
                            }
                        });
                    </script>

                    <section class="row-full">
                        <div class="b26line_credit_main" id="b26linecredit">
                            <div class="container">

                                <h2>Giving Back to Our Community</h2>

                                <div class="xhtml">
                                    <p>Partner with a bank that gives back generously to your community. First PREMIER Bank
                                        and PREMIER Bankcard support over 700 organizations, and last year alone, PREMIER
                                        associates dedicated over 32,000 hours in community service!</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 hidden-xs hidden-sm">
                                        <div class="carousel" id="myCarousel-" data-interval="false">
                                            <div class="carousel-inner">
                                                <div class='item active'>
                                                    <div
                                                        class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                                        <div class='b26line_credit_loans_left'><img
                                                                src='{{ asset('assets/frontend/contentassets/4ecf786f90774a318f5bb9ce6bf62c89/ymabii-about_b26_alt7_community.png') }}'
                                                                alt='PREMIER Softball Complex'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a href='community/index.html'>
                                                                    <h3 class='deckspan'>Our Community</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Learn how PREMIER actively partners with business,
                                                                        government and non-profit organizations to
                                                                        positively impact our region.</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'>
                                                        <div class='b26line_credit_loans_left'><img
                                                                src='{{ asset('assets/frontend/contentassets/7e2308f5afce4bd9bb0596e58aa4d30f/ymabii-about_b26_alt1_ph-min.png') }}'
                                                                alt='children in classroom'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/philanthropic-giving/index.html'>
                                                                    <h3 class='deckspan'>Philanthropic Giving</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Learn how PREMIER contributions have benefited
                                                                        organizations throughout our region.</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'>
                                                        <div class='b26line_credit_loans_left'><img
                                                                src='{{ asset('assets/frontend/contentassets/42e0a4ba9712456cb5c8369c0ade74c1/ymabii-about_b26_alt3_colsupport-min.png') }}'
                                                                alt='college students'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/collegiate-support/index.html'>
                                                                    <h3 class='deckspan'>Collegiate Support</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Learn how PREMIER supports schools, colleges,
                                                                        universities and students to secure a brighter
                                                                        future!</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div
                                                        class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                                        <div class='b26line_credit_loans_left'><img
                                                                src='{{ asset('assets/frontend/contentassets/7bde9901f8b04998828c7da54743f12c/ymabii-about_b26_alt2_comserv-min.png') }}'
                                                                alt='two men talking'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/community-service/index.html'>
                                                                    <h3 class='deckspan'>Community Service</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>See how PREMIER associates actively serve within our
                                                                        community!</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'>
                                                        <div class='b26line_credit_loans_left'><img
                                                                src='{{ asset('assets/frontend/contentassets/3151f5b1184b4ebea41405944bc85cac/ymabii-about_b26_alt4_sponsor-min.png') }}'
                                                                alt='woman and lemur at Great Plains Zoo'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/sponsorship/index.html'>
                                                                    <h3 class='deckspan'>Sponsorships</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>We actively sponsor teams, events, athletics and
                                                                        other activities throughout our community.</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'>
                                                        <div class='b26line_credit_loans_left'><img
                                                                src='{{ asset('assets/frontend/contentassets/633f8f168e964d89823d68253c83c3bf/ymabii-about_b26_alt6_intern.png') }}'
                                                                alt='students in classroom clapping'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/collegiate-support/scholarship-and-internships/index.html'>
                                                                    <h3 class='deckspan'>Scholarships & Internships</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Learn how PREMIER supports students with paid
                                                                        internships and an array of scholarship offerings!
                                                                    </p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div
                                                        class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                                        <div class='b26line_credit_loans_left'><img
                                                                src='{{ asset('assets/frontend/contentassets/9ea8aad9972348dba81e33302c8658a5/ymabii-about_b26_alt5_celebrate-min.png') }}'
                                                                alt='Luke Bryan at Dana J Dykhouse Stadium'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/celebration/index.html'>
                                                                    <h3 class='deckspan'>Celebrations & Appreciations</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Taking time to celebrate the contributions of our
                                                                        employees is important at PREMIER!</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                                        <center>
                                            <div class="b26MobileCard" style="width:345px;min-height:700px;">
                                                <div class='item'>
                                                    <div
                                                        class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                        <div><img
                                                                src='../../../contentassets/4ecf786f90774a318f5bb9ce6bf62c89/ymabii-about_b26_alt7_community.png'
                                                                alt='PREMIER Softball Complex'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a href='community/index.html'>
                                                                    <h3 class='deckspan'>Our Community</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Learn how PREMIER actively partners with business,
                                                                        government and non-profit organizations to
                                                                        positively impact our region.</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div
                                                        class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                        <div><img
                                                                src='../../../contentassets/7e2308f5afce4bd9bb0596e58aa4d30f/ymabii-about_b26_alt1_ph-min.png'
                                                                alt='children in classroom'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/philanthropic-giving/index.html'>
                                                                    <h3 class='deckspan'>Philanthropic Giving</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Learn how PREMIER contributions have benefited
                                                                        organizations throughout our region.</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div
                                                        class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                        <div><img
                                                                src='../../../contentassets/42e0a4ba9712456cb5c8369c0ade74c1/ymabii-about_b26_alt3_colsupport-min.png'
                                                                alt='college students'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/collegiate-support/index.html'>
                                                                    <h3 class='deckspan'>Collegiate Support</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Learn how PREMIER supports schools, colleges,
                                                                        universities and students to secure a brighter
                                                                        future!</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div
                                                        class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                        <div><img
                                                                src='../../../contentassets/7bde9901f8b04998828c7da54743f12c/ymabii-about_b26_alt2_comserv-min.png'
                                                                alt='two men talking'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/community-service/index.html'>
                                                                    <h3 class='deckspan'>Community Service</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>See how PREMIER associates actively serve within our
                                                                        community!</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div
                                                        class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                        <div><img
                                                                src='../../../contentassets/3151f5b1184b4ebea41405944bc85cac/ymabii-about_b26_alt4_sponsor-min.png'
                                                                alt='woman and lemur at Great Plains Zoo'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/sponsorship/index.html'>
                                                                    <h3 class='deckspan'>Sponsorships</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>We actively sponsor teams, events, athletics and
                                                                        other activities throughout our community.</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div
                                                        class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                        <div><img
                                                                src='../../../contentassets/633f8f168e964d89823d68253c83c3bf/ymabii-about_b26_alt6_intern.png'
                                                                alt='students in classroom clapping'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/collegiate-support/scholarship-and-internships/index.html'>
                                                                    <h3 class='deckspan'>Scholarships & Internships</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Learn how PREMIER supports students with paid
                                                                        internships and an array of scholarship offerings!
                                                                    </p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div
                                                        class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                        <div><img
                                                                src='../../../contentassets/9ea8aad9972348dba81e33302c8658a5/ymabii-about_b26_alt5_celebrate-min.png'
                                                                alt='Luke Bryan at Dana J Dykhouse Stadium'></div>
                                                        <div class='b26line_credit_loans_right'>
                                                            <div class="b26titlerow"><a
                                                                    href='community/celebration/index.html'>
                                                                    <h3 class='deckspan'>Celebrations & Appreciations</h3>
                                                                </a></div>
                                                            <h3><br clear='all' />
                                                                <div class="xhtml">
                                                                    <p>Taking time to celebrate the contributions of our
                                                                        employees is important at PREMIER!</p>
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>

                                    <a class="left carousel-control" href="#myCarousel-" data-slide="prev"><img
                                            src="{{ asset('assets/frontend/Static/img/CustomBlocks/B26/left_arrow.png') }}"
                                            alt="First PREMIER Bank"></a>
                                    <a class="right carousel-control" href="#myCarousel-" data-slide="next"><img
                                            src="{{ asset('assets/frontend/Static/img/CustomBlocks/B26/right_arrow.png') }}"
                                            alt="First PREMIER Bank"></a>
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
                                    <a href="{{ route('frontend.en.pages.about-us')}}">About Us</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend') }}">First PREMIER Bank</a>
                                </li>
            
                                <li>
                                    <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend.en.pages.about-us.leadership-team') }}">Leadership</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend.en.pages.about-us.community') }}">Community</a>
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
                                    <a href="{{ route('frontend') }}">Personal Banking</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend.en.small-business') }}">Small Business</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend.en.commercial') }}">Commercial</a>
                                </li>
            
                            </ul>
                            <br />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                            <div class="footerHeader">Help &amp; Contact</div>
            
                            <ul>
            
                                <li>
                                    <a href="{{ route('frontend.en.pages.quick-links.customer-care') }}">Customer Care</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend.en.pages.quick-links.locations') }}">Locations</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend.en.pages.quick-links.customer-care') }}">BANK: 800-501-6535</a>
                                </li>
            
                                <li>
                                    <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend') }}">Routing Number: 091408598</a>
                                </li>
            
                            </ul>
                            <br />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                            <div class="footerHeader">Legal Notices</div>
            
                            <ul>
            
                                <li>
                                    <a href="{{ route('frontend.en.pages.resources.first-premier-privacy-statement-2020') }}">Privacy
                                        Notice &amp; Statement</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend.en.pages.resources.legal-disclosures') }}">Legal Disclosures</a>
                                </li>
            
                                <li>
                                    <a href="{{ route('frontend.en.pages.resources.cookie-policy') }}">Cookie Policy</a>
                                </li>
            
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="padding-top:50px;">
                            <p>Member FDIC | <img src="{{asset('assets/frontend/Static/img/equalhousinglender.png')}}" alt="Equal Housing Lender"
                                    title="Equal Housing Lender" />Equal Housing Lender</p>
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
                $("#submitButtonB28Block").click(function(event) {
                    if ($("#email").val() != "" &&
                        $("#message").val() != "") {
                        FullName = $("#fullname").val();
                        EMail = $("#email").val();
                        Phone = $("#phone").val();
                        Message = $("#message").val();
                        $.ajax({
                            type: "POST",
                            url: '/api/ContactMe?ContentId=' + ContentId + '&ContactToName=' + Name +
                                '&ContactPersonName=' + FullName + '&ContactPersonEmail=' + EMail +
                                '&ContactPersonPhone=' + Phone + '&ContactPersonMessage=' + encodeURIComponent(
                                    Message),
                            contentType: "application/json",

                            success: function(result) {
                                alert(result);
                            },
                            error: function() {

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
            if (FindApi) {
                var api = new FindApi();
                api.setApplicationUrl('../../../index.html');
                api.setServiceApiBaseUrl('../../../find_v2/index.html');
                api.processEventFromCurrentUri();
                api.bindWindowEvents();
                api.bindAClickEvent();
                api.sendBufferedEvents();
            }
        </script>

        <script type="text/javascript" src="../../../Static/js/pushy.js"></script>
        <script type="text/javascript" src="../../../Static/js/Blocks_2019062002.js"></script>

    @endsection
