@extends('frontend.layouts.app')

@section('content')

    <div class="container">

     <!--start responsive menu-->
    @include('frontend.layouts.components.header')
    <!-- Main Header -->
    @include('frontend.layouts.components.navbar')



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
                                                <a href="../personal-checking/index.html">Personal Checking</a>
                                            </div>
                                                <div class="panel-body">
<a href="../personal-checking/free-plus-checking/index.html">FREE+ Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal-checking/reward-checking/index.html">Reward Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal-checking/debit-card/index.html">Debit Card</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal-checking/overdraft-protection/index.html">Overdraft Protection</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal-checking/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse12">

Online &amp; Mobile                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse12" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../online-and-mobile/index.html">Online &amp; Mobile</a>
                                            </div>
                                                <div class="panel-body">
<a href="../online-and-mobile/online-banking/index.html">Online Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../online-and-mobile/mobile-banking/index.html">Mobile Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../online-and-mobile/bill-pay/index.html">Bill Pay</a>                                                </div>
                                                <div class="panel-body">
<a href="../online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="../online-and-mobile/estatements/index.html">eStatements</a>                                                </div>
                                                <div class="panel-body">
<a href="../online-and-mobile/mobile-wallet/index.html">Mobile Wallet</a>                                                </div>
                                                <div class="panel-body">
<a href="../online-and-mobile/personal-financial-management/index.html">Personal Financial Management</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse13">

Savings &amp; CDs                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse13" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../savings-and-cds/index.html">Savings &amp; CDs</a>
                                            </div>
                                                <div class="panel-body">
<a href="../savings-and-cds/regular-savings/index.html">Regular Savings</a>                                                </div>
                                                <div class="panel-body">
<a href="../savings-and-cds/premier-money-market/index.html">PREMIER Money Market</a>                                                </div>
                                                <div class="panel-body">
<a href="../savings-and-cds/certificates-of-deposit/index.html">Certificates of Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="../savings-and-cds/ira-savings-and-cds/index.html">IRA Savings &amp; CDs</a>                                                </div>
                                                <div class="panel-body">
<a href="../savings-and-cds/kids-savings/index.html">Kids Savings</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse14">

Loans &amp; Credit Lines                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse14" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="index.html">Loans &amp; Credit Lines</a>
                                            </div>
                                                <div class="panel-body">
<a href="personal-loans/index.html">Personal Loans</a>                                                </div>
                                                <div class="panel-body">
<a href="personal-lines-of-credit/index.html">Personal Lines of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="easy-access-line-of-credit/index.html">Easy Access Line of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="home-equity-line-of-credit/index.html">Home Equity Line of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="advance-access-line-of-credit/index.html">Advance Access Line of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="loan-payment-options/index.html">Loan Payment Options</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse15">

Mortgages                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse15" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../mortgages/index.html">Mortgages</a>
                                            </div>
                                                <div class="panel-body">
<a href="../mortgages/buying-or-building-a-home/index.html">Buying or Building a Home</a>                                                </div>
                                                <div class="panel-body">
<a href="../mortgages/refinancing-a-home/index.html">Refinancing a Home</a>                                                </div>
                                                <div class="panel-body">
<a href="../mortgages/jumbo-mortgage-loans/index.html">Jumbo Mortgage Loans</a>                                                </div>
                                                <div class="panel-body">
<a href="../mortgages/apply-for-a-mortgage/index.html">Apply for a Mortgage</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse16">

Investing                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse16" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../investing/index.html">Investing</a>
                                            </div>
                                                <div class="panel-body">
<a href="../investing/brokerage-services/index.html">Brokerage Services</a>                                                </div>
                                                <div class="panel-body">
<a href="../investing/retirement-planning/index.html">Retirement Planning</a>                                                </div>
                                                <div class="panel-body">
<a href="../investing/insurance/index.html">Insurance</a>                                                </div>
                                                <div class="panel-body">
<a href="../investing/financial-and-investing-resources/index.html">Financial &amp; Investing Resources</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse17">

Wealth Management                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse17" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../wealth-management/index.html">Wealth Management</a>
                                            </div>
                                                <div class="panel-body">
<a href="../wealth-management/private-banking/index.html">Private Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../wealth-management/financial-planning/index.html">Financial Planning</a>                                                </div>
                                                <div class="panel-body">
<a href="../wealth-management/personal-trust-services/index.html">Personal Trust Services</a>                                                </div>
                                                <div class="panel-body">
<a href="../wealth-management/managed-investing/index.html">Managed Investing</a>                                                </div>
                                                <div class="panel-body">
<a href="../wealth-management/trusts-in-south-dakota/index.html">Trusts in South Dakota</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse18">

Students &amp; Parents                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse18" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../students-and-parents/index.html">Students &amp; Parents</a>
                                            </div>
                                                <div class="panel-body">
<a href="../students-and-parents/university-debit-cards/index.html">University Debit Cards</a>                                                </div>
                                                <div class="panel-body">
<a href="../students-and-parents/dakota-state-university-debit-card/index.html">Dakota State University Debit Card</a>                                                </div>
                                                <div class="panel-body">
<a href="../students-and-parents/student-loans/index.html">Student Loans</a>                                                </div>
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
<a href="{{route('frontend.en.commercial.asset')}}">Business Debit Mastercard&#174;</a>                                                </div>
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
<a href="">Trusts in South Dakota</a>                                                </div>
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
                    <li><a href="../../pages/quick-links/locations/index.html">Locations</a></li><li><a href="../../pages/about-us/index.html">About Us</a></li><li><a href="{{route('frontend.en.pages.about.careers')}}">Careers</a></li><li><a href="../../pages/quick-links/customer-care/index.html">Customer Care</a></li>

                </ul>
            </div>
        </div>
    </div>
</nav> --}}
<!-- Main Header -->
{{-- <section class="header-wrap" id="container">
    <article class="container">

        <article class="row">
            <article class="topHeader col-sm-12">
                <!-- Collapse if empty -->
                <button class="menu-btn">&#9776;</button>

                <article class="right-nav">
                    <form id="frmSearchHit" action="https://www.firstpremier.com/en/search/" method="get">
                        <ul id="maintopMenu" class="menu-right">
                            <li class="navItem">800-501-6535</li>
                            <li class="navItem"><a href="../../pages/quick-links/locations/index.html">Locations</a></li><li class="navItem"><a href="../../pages/about-us/index.html">About Us</a></li><li class="navItem"><a href="{{route('frontend.en.pages.about.careers')}}">Careers</a></li><li class="navItem"><a href="../../pages/quick-links/customer-care/index.html">Customer Care</a></li>

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
                            <a href="../../index.html" title="First PREMIER Bank - Home"><img src="../../../Static/gfx/Logo.png" style="max-width:100%;" /></a>
                    </article>
                    <article class="small-menu">
                        <ul>
<li class="active"><a href="../../index.html">Personal</a></li><li><a href="../../small-business/index.html">Small Business</a></li><li><a href="../../commercial/index.html">Commercial</a></li>
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
                                    <li class="SubMenu">

                                        <a href="../personal-checking/index.html">Checking</a>
                                        <div id="subdiv_PersonalChecking" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Personal Checking</h3>
                                                                    <p>Flexible personal checking accounts with FREE Online and Mobile Banking, Bill Pay, eStatements, Mobile Deposit and more.</p>
                                                                    <a href="../personal-checking/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../personal-checking/free-plus-checking/index.html">FREE+ Checking</a></div>
                                                                        <p>Our FREE+ Checking account comes with no hidden surprises, hassles or monthly maintenance fees.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../personal-checking/reward-checking/index.html">Reward Checking</a></div>
                                                                        <p>Maintain a total monthly deposit relationship of $15,000 and gain benefits like free checks, reward rates on CDs and more.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../personal-checking/debit-card/index.html">Debit Card</a></div>
                                                                        <p>This secure and easy payment method gives you access to 33,000+ surcharge-free ATMs nationwide.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../personal-checking/overdraft-protection/index.html">Overdraft Protection</a></div>
                                                                        <p>Ensure your personal checking account has sufficient funds to cover payments and purchases.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../personal-checking/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a></div>
                                                                        <p>Learn how First PREMIER protects you and how to protect yourself from security breaches and fraud. &nbsp;</p>
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
                                        <div id="subdiv_Online&amp;Mobile" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Online & Mobile</h3>
                                                                    <p>First PREMIER Online and Mobile Banking are FREE and feature-rich, giving you 24/7 access and control over your accounts.</p>
                                                                    <a href="../online-and-mobile/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../online-and-mobile/online-banking/index.html">Online Banking</a></div>
                                                                        <p>Check balances, transfer funds, pay bills, view eStatements any time.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../online-and-mobile/mobile-banking/index.html">Mobile Banking</a></div>
                                                                        <p>Our mobile app puts the features of Online Banking in the palm of your hand.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../online-and-mobile/bill-pay/index.html">Bill Pay</a></div>
                                                                        <p>Schedule and make payments simply and securely Online or via Moble Banking.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a></div>
                                                                        <p>Use our Mobile Banking app to make deposits using your mobile phone.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../online-and-mobile/estatements/index.html">eStatements</a></div>
                                                                        <p>Secure electronic statements you can print, download and use for record keeping.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../online-and-mobile/mobile-wallet/index.html">Mobile Wallet</a></div>
                                                                        <p>Link your debit card to a Mobile Wallet to speed your way through checkout.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../online-and-mobile/personal-financial-management/index.html">Personal Financial Management</a></div>
                                                                        <p>Analyze spending patterns, plan a budget and more with these free tools.</p>
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
                                        <div id="subdiv_Savings&amp;CDs" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Savings & CDs</h3>
                                                                    <p>Keep ready cash on hand with an array of savings options from First PREMIER Bank.</p>
                                                                    <a href="../savings-and-cds/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../savings-and-cds/regular-savings/index.html">Regular Savings</a></div>
                                                                        <p>A traditional, FDIC-insured savings option with free Online and Mobile Banking.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../savings-and-cds/premier-money-market/index.html">PREMIER Money Market</a></div>
                                                                        <p>For higher balance accounts - the bigger the balance, the higher the rate.&nbsp;</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../savings-and-cds/certificates-of-deposit/index.html">Certificates of Deposit</a></div>
                                                                        <p>Competitive rates and an array of term options on CDs.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../savings-and-cds/ira-savings-and-cds/index.html">IRA Savings &amp; CDs</a></div>
                                                                        <p>A simple, tax-advantaged way to build up funds gradually for retirement.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../savings-and-cds/kids-savings/index.html">Kids Savings</a></div>
                                                                        <p>The PREMIER Kids Club Savings account helps kids 12 and under learn the value of saving early.</p>
                                                                        <hr>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="SubMenu active">

                                        <a href="index.html">Loans &amp; Credit Lines</a>
                                        <div id="subdiv_Loans&amp;CreditLines" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Loans & Credit Lines</h3>
                                                                    <p>Planning a large purchase or consolidating debt? We have competitive rates on personal loans and flexible lines of credit!</p>
                                                                    <a href="index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="personal-loans/index.html">Personal Loans</a></div>
                                                                        <p>Competitive rates on personal, auto, home improvement, debt consolidation loans and more.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="personal-lines-of-credit/index.html">Personal Lines of Credit</a></div>
                                                                        <p>Enjoy flexible, easy access to cash when you need it most.&nbsp; Select from several, flexible options.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="easy-access-line-of-credit/index.html">Easy Access Line of Credit</a></div>
                                                                        <p>Get extra purchasing power and cash when you need it with a basic, revolving line of credit.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="home-equity-line-of-credit/index.html">Home Equity Line of Credit</a></div>
                                                                        <p>Fund home improvements, consolidate debt or other expenses with this secured line of credit.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="advance-access-line-of-credit/index.html">Advance Access Line of Credit</a></div>
                                                                        <p>For higher income individuals, extra spending flexibility and payment options you&rsquo;ll love.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="loan-payment-options/index.html">Loan Payment Options</a></div>
                                                                        <p>When it comes to making your loan payment you have several free and easy options.</p>
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
                                        <div id="subdiv_Mortgages" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Mortgages</h3>
                                                                    <p>Competitive rates for home mortgages, construction loans, refinancing and more.</p>
                                                                    <a href="../mortgages/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../mortgages/buying-or-building-a-home/index.html">Buying or Building a Home</a></div>
                                                                        <p>Competitive mortgage rates with online application, fast processing, local decisioning and personal support.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../mortgages/refinancing-a-home/index.html">Refinancing a Home</a></div>
                                                                        <p>Leverage your home equity to help fund home projects, gain more favorable rate and terms or consolidate debt.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../mortgages/jumbo-mortgage-loans/index.html">Jumbo Mortgage Loans</a></div>
                                                                        <p>First PREMIER Bank specializes in jumbo loans with competitive mortgage rates and fees.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../mortgages/apply-for-a-mortgage/index.html">Apply for a Mortgage</a></div>
                                                                        <p>Apply for a mortgage online today and receive fast processing, online status reporting and personal support.</p>
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
                                        <div id="subdiv_Investing" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Investing</h3>
                                                                    <p>Simple-to-complex investing, financial and retirement planning and investment management for investors at any life stage.</p>
                                                                    <a href="../investing/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../investing/brokerage-services/index.html">Brokerage Services</a></div>
                                                                        <p>Investing made easy, with turnkey online access and personal advice and support.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../investing/retirement-planning/index.html">Retirement Planning</a></div>
                                                                        <p>Retirement plans and plan rollover support for individual investors.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../investing/insurance/index.html">Insurance</a></div>
                                                                        <p>Protect yourself and provide for loved ones with life and disability insurance.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../investing/financial-and-investing-resources/index.html">Financial &amp; Investing Resources</a></div>
                                                                        <p>An array of helpful articles, videos, presentations and tools.</p>
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
                                        <div id="subdiv_WealthManagement" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Wealth Management</h3>
                                                                    <p>Private banking, hands-on financial and investment planning, portfolio management, estate planning and personal trust services.</p>
                                                                    <a href="../wealth-management/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../wealth-management/private-banking/index.html">Private Banking</a></div>
                                                                        <p>Concierge-style, private banking for higher net-worth individuals.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../wealth-management/financial-planning/index.html">Financial Planning</a></div>
                                                                        <p>Comprehensive financial and investment planning services.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../wealth-management/personal-trust-services/index.html">Personal Trust Services</a></div>
                                                                        <p>Protect your assets and provide for the people and causes you care most about with an estate plan or personal trust.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../wealth-management/managed-investing/index.html">Managed Investing</a></div>
                                                                        <p>Hands-on investment management from seasoned, experienced investment specialists.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../wealth-management/trusts-in-south-dakota/index.html">Trusts in South Dakota</a></div>
                                                                        <p>Learn about the unique opportunities and benefits realized by establishing your trust in the state of South Dakota. &nbsp;</p>
                                                                        <hr>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="SubMenu">

                                        <a href="../students-and-parents/index.html">Students &amp; Parents</a>
                                        <div id="subdiv_Students&amp;Parents" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Students & Parents</h3>
                                                                    <p>Explore our unique offerings for students and parents. From college checking accounts to paid internships and scholarships.</p>
                                                                    <a href="../students-and-parents/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../students-and-parents/university-debit-cards/index.html">University Debit Cards</a></div>
                                                                        <p>Show your school pride with a Dakota State University or University of South Dakota branded First PREMIER Bank Debit Mastercard&reg;.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../students-and-parents/dakota-state-university-debit-card/index.html">Dakota State University Debit Card</a></div>
                                                                        <p>Show your love for Dakota State University and give back to the university&rsquo;s foundation with a First PREMIER Bank DSU Debit Mastercard.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="../students-and-parents/student-loans/index.html">Student Loans</a></div>
                                                                        <p>Undergraduate and Graduate Student Loan options through our partner, Ascent. No application fee and flexible repayment options.</p>
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
        .b18great_feature_main{display:block;margin-top:-100px !important;}
.b20consumer-loans .b20consumer-loans-left {padding-left:100px !important;}
.b15benfits_main_box {padding-top:20px;}
    </style>
<div class="row equal-height"><div class="block b19block  col-md-12">

<style>
    .b19landingpage {
        height: auto;
        padding: 40px 0px;
    }
</style>
<script>

    $(document).ready(function () {
        if (screen.width < 767) {
            $('.b19landingpage').css('height', '628px');
            $('.b19landingpage').css('background', '');
            $('.b19landingpage').css('background-color', '#1b3e43');
        }
        else {
            $('.b19landingpage').css('background', 'url({{asset("assets/frontend/Static/img/svg/green-1.svg")}}) no-repeat');
        }
    });

    $(window).resize(function () {
        if (screen.width < 767) {
            $('.b19landingpage').css('height', '628px');
            $('.b19landingpage').css('background', '');
            $('.b19landingpage').css('background-color', '#1b3e43');
        }
        else {
            $('.b19landingpage').css('background', 'url({{asset("assets/frontend/Static/img/svg/green-1.svg")}}) no-repeat');
        }
    });

</script>


<div class="b19landingpage row-full" style="padding-bottom:0px;">
    <div class="container">
        <h1>Loans &amp; Credit Lines</h1>
        <div class="xhtml"></div>
        <div class="b19landingpage_box_main">

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="personal-loans/index.html"><img src="{{ asset('assets/frontend/globalassets/images/_replace/_filled/round6.png') }}" title="Personal Loans" alt="money" border="0" /></a>
            <div class="clearfix"></div>
                <span><a href="personal-loans/index.html">Personal Loans</a></span>
            <div class="xhtml"><p>Consolidating debt, financing a special purchase or remodeling your home? Let us help.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="personal-lines-of-credit/index.html"><img src="{{ asset('assets/frontend/globalassets/images/_replace/_filled/round7.png') }}" title="Personal Lines of Credit" alt="cash" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="personal-lines-of-credit/index.html">Personal Lines of Credit</a></span>
            <div class="xhtml"><p>Gain instant access to ready cash when you need it. We offer both personal and home equity lines of credit.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="../mortgages/index.html"><img src="{{ asset('assets/frontend/globalassets/images/primary-icons/gold/places/gold-places-primary-icon-14.png') }}" title="Home Mortgage" alt="house" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="../mortgages/index.html">Home Mortgage</a></span>
            <div class="xhtml"><p>Whether it's your first-time or forever home, we offer competitive financing with local decision making.</p></div>
        </div>

        </div>
    </div>
</div></div><div class="block b20block  col-md-12">


<!-- VIEW RATE / SPEED BUMP [2] -->
<script>
    $(document).ready(function () {
        if ($('#imgMainRight').length <= 0) {
            $('.b20consumer-loans-left').css('width', '100%');
        }
    });
</script>
<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
</style>
<style>
    .b20consumer-loans-left {
        padding-top: 0px !important;
    }

        .b20consumer-loans-left .xhtml p {
            padding-top: 0px !important;
        }

    .b17basic_box_grey {
        background-color: #f9f9f9 !important;
        background-image: none;
    }

    .b17basic_box_white {
        background-color: #fff !important;
        background-image: none;
    }

    .b20consumer-loans p.sub-header {
        padding: 0px 0px 26px 0px;
        text-align: center;
    }
    @media only screen and (max-width: 767px)
    {
        .b20consumer_btn_center {
            width: 100%;
        }
    }

    @media only screen and (max-width: 470px) {
        .b20consumer-loans .b20consumer-loans-left {
            padding-left: 0px !important;
        }
    }
    @media only screen and (max-width: 470px) {
       .b20showright a.b20mainanchorL {
           margin-left: 25%
        }
    }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->
<section class="row-full">

    <div class="b20consumer-loans ">
        <div class="container">

                <h2>Lending is Always Personal</h2>


                    <div class="b20consumer-loans-right"><img id="imgMainRight" src="{{ asset('assets/frontend/contentassets/f656f76b55584dd29a81c5b3b85c369e/1.4_b-20_promo_01_billslady-min.png') }}" alt="woman working with papers and laptop" class="img-responsive"></div>
        <div class="b20consumer-loans-left">
                            <div class="xhtml"><ul>
<li>Competitive fixed rates</li>
<li>No pre-payment penalties</li>
<li>Consolidate debt&nbsp;</li>
<li>Repair or remodel your home</li>
<li>Purchase a new or used auto<br /><br /></li>
</ul></div>
                <br />
                            <div class="b20consumer_btn_center">
                                    <a href="https://umnasg7.umonitor.com/consumerloan/uLoan/welcome.do?auth=aa902f55464cde74" class="b20mainanchor">APPLY NOW</a>
                                <ul>
                                            <li><a class="b20mainlink" href="personal-loans/index.html">Learn More</a></li>
                                            <li><a class="b20mainlink" href="../../pages/about-us/teams/personal-banking-sioux-falls-team/index.html">Contact Us</a></li>
                                </ul>
                </div>
        </div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b20block  col-md-12">


<!-- VIEW RATE / SPEED BUMP [2] -->
<script>
    $(document).ready(function () {
        if ($('#imgMainRight').length <= 0) {
            $('.b20consumer-loans-left').css('width', '100%');
        }
    });
</script>
<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
</style>
<style>
    .b20consumer-loans-left {
        padding-top: 0px !important;
    }

        .b20consumer-loans-left .xhtml p {
            padding-top: 0px !important;
        }

    .b17basic_box_grey {
        background-color: #f9f9f9 !important;
        background-image: none;
    }

    .b17basic_box_white {
        background-color: #fff !important;
        background-image: none;
    }

    .b20consumer-loans p.sub-header {
        padding: 0px 0px 26px 0px;
        text-align: center;
    }
    @media only screen and (max-width: 767px)
    {
        .b20consumer_btn_center {
            width: 100%;
        }
    }

    @media only screen and (max-width: 470px) {
        .b20consumer-loans .b20consumer-loans-left {
            padding-left: 0px !important;
        }
    }
    @media only screen and (max-width: 470px) {
       .b20showright a.b20mainanchorL {
           margin-left: 25%
        }
    }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->
<section class="row-full">

    <div class="b20consumer-loans ">
        <div class="container">

                <h2>Personal Lines of Credit</h2>


        <div class="b20consumer-loans-left b20showright"  style="float:right;">

                            <div class="xhtml"><ul>
<li>Select from several revolving lines of credit</li>
<li>Get instant access to ready cash</li>
<li>Secured or unsecured</li>
<li>Fixed or variable interest rates</li>
<li>Available as optional <a href="../personal-checking/overdraft-protection/index.html">overdraft protection</a></li>
</ul>
<p>&nbsp;</p></div>
                <br />

            <div class="b20consumer_btn_center">
                <!-- b20mainanchorL -->
                                <a href="personal-lines-of-credit/index.html" class="b20mainanchorL">Learn More</a>
            </div>
        </div>
                    <div class="b20consumer-loans-right"><img id="imgMainRight" alt="couple looking at receipts" src="{{ asset('assets/frontend/contentassets/dbed55fba49142b6919198a18b68d42c/1.4_b-20-promo_02_couplepaperwork-min.png') }}" class="img-responsive"></div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b15block  col-md-12">
<section style="padding-left:0px;">
    <div class="b15benfits_main_box">
        <div class="container">
            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">  <div class="b15avtar"><img src="{{ asset('assets/frontend/contentassets/cb6319a21d01411bbd2b8a3f5f67e7d8/everfi-loans-and-payments.png') }}" title="Loans & Payments" alt="coins falling into hand" height ="116px" width="116px"></div>  <div class="b15avtar_content">    <h3>Loans & Payments</h3><p>Are you looking to better understand payment options for your lifestyle? Our interactive module will help you understand different payment and payoff options.</p>    <div class="clearfix"></div><br/>      <a href="#" data-toggle="modal" data-target="#a22817800Q8" class="b15learnmore">Learn More</a>      <div id="a22817800Q8" class="modal fade" role="dialog">         <div class="modal-dialog pop_board">            <div class="modal-content">               <div class="modal-body">                  <div class="pop_main_container_board">                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">                        <span aria-hidden="true">                           <img class="close_icon" src="../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">                        </span>                     </button>                     <div class="pop_main_container">                    <h2>Loans & Payments</h2>                        <div class="pop_board_white">                           <div class="row">                              <div class="col-md-12" style="padding-left:40px;">                                 <h4 class="Blue">You will be leaving firstpremier.com</h4>                                 <div class="b13points b46Blue" style="text-align:left;"><p>Please note, by clicking &ldquo;continue&rdquo; you will be redirected to a website that is not operated or controlled by PREMIER. PREMIER is not responsible for the content, links, privacy policy or security of that website. Your use of that website is subject to its terms of use and privacy policy. Thank you for visiting firstpremier.com. If you continue, we hope you find the information presented educational and useful.</p>                                    <p><br/><a href="https://firstpremier.everfi-next.net/student/dashboard/financialeducation-achieve/financial-foundations/1687#car-loans/getting-started" target="_blank">Continue</a></p>                                 </div>                              </div>                           </div>                        </div>                     </div>                  </div>               </div>            </div>         </div>      </div>  </div></div><div class="b15student_parent_main_content b15-bg-student_parent_main_content">  <div class="b15avtar"><img src="{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/places/gold-places-secondary-icon-14.png') }}" title="Home Mortgage" alt="house" height ="116px" width="116px"></div>  <div class="b15avtar_content">    <h3>Home Mortgage</h3><p>Whether you're buying or building a new home or refinancing to extract equity or consolidate debt, we can help.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>    <div class="clearfix"></div><br/>      <a href="../mortgages/index.html">Learn More</a>  </div></div>
        </div>
    </div>
</section>

<style>
    .b4background.colored {
        background-color: #25455a !important;
    }

        .b4background.colored .b15benfits_main_box {
            margin: 0px !important;
        }
</style></div><div class="block b12block  col-md-12">        <style>
            .b12faq_main { float: left; width: 100%; padding:100px 0px 50px 0px !important; text-align: left; background: #fff; }
        </style>
        <div class="b12faq_main">
            <div class="b12container">
                <h2>Frequently Asked Questions</h2>
                <!-- tabs left -->
                <div class="tabbable">
                    <div class="tab-content col-md-7">
                        <div class="tab-pane active" id="A"><span>I paid off my loan so where is my title/lien release?</span><p><p>Titles/ lien releases are mailed out through general mail 10-20 day after the loan is paid off to the address we have for you on file or to the address specified on documents sent in with the pay off. IE: Your insurance agent requested we send it to them. If a loan is paid off through wire transfer, the information is released the next business day.</p></p></div><div class="tab-pane" id="B"><span>What do I need to do a wire loan payment?</span><p><p>Contact your bank for wires. You will need your loan account number and the routing number for First PREMIER Bank 091408598. They can add additional releasing instructions at that time to accompany the wire. Any additional payment over your pay off amount will be mailed back to you via check.</p></p></div><div class="tab-pane" id="C"><span> I lost my lien release/ title. What do I do? </span><p><p>We are able to provide a new lien release for paid off loans if needed. Please have the Year, Make, and VIN handy for reference if you don&rsquo;t have your loan number. However, we are unable to provide new titles. If you need a new title, please, contact your state DMV with additional questions.</p></p></div><div class="tab-pane" id="D"><span>How can I pay off my loan?</span><p><p>Paying off your loan is as simple as issuing a payment equivalent to the loan payoff amount. To ensure your final payment amount is accurate, please contact Customer Care during normal business hours for an accurate loan payoff amount.</p></p></div><div class="tab-pane" id="E"><span>How can I make a loan payment?</span><p><p>You can make a loan payment by logging into Online or Mobile Banking (note: enrollment and/or download may be required for initial use) and transferring payment from a First PREMIER Bank account to your loan. You can also call our Customer Care team at 800-501-6535.</p></p></div>
                    </div>
                    <ul class="nav nav-pills nav-stacked col-md-5">
                        <li class="active"><a href="#A" data-toggle="tab">I paid off my loan so where is my title/lien release?</a></li><li><a href="#B" data-toggle="tab">What do I need to do a wire loan payment?</a></li><li><a href="#C" data-toggle="tab"> I lost my lien release/ title. What do I do? </a></li><li><a href="#D" data-toggle="tab">How can I pay off my loan?</a></li><li><a href="#E" data-toggle="tab">How can I make a loan payment?</a></li>
                    </ul>
                </div>
            </div>
        </div>

</div><div class="block b23block  col-md-12"><style>
    .b23financial_calculator_main {
        padding-top: 50px !important;
    }

        .b23financial_calculator_main h2 {
            text-align: center;
        }
</style>
<section class="row-full">

    <div class="b23financial_calculator_main">
        <div class="container">
                <h2>Financial Calculators</h2>
            <div class="b23financial_calculator">

                <div class="b23financial_calculator_left">
                        <h3>How much will my loan payments be?</h3>
                                            <p>Use this calculator to estimate how much your loan payment will be. </p>
                                            <h4 class="Blue">YOUR LOAN PAYMENT WILL BE</h4>
                    <h5 id="calculatedValuetoBind"></h5>
                        <a type="button" href="#" class="" data-toggle="modal" data-target="#myModal">Show Schedule</a>
                </div>

                <div class="b23financial_calculator_right">
                    <div class="form-group">
                        <label>Purchase Amount</label>
                        <input type="text" value="$ 35,000" id="purchaseAmount" onkeyup="this.value=Comma(this.value)" maxlength="14" />
                    </div>
                    <div class="form-group">
                        <label>Down Payment Amount</label>
                        <input type="text" value="$ 5,000" id="downPaymentAmount" onkeyup="this.value=Comma(this.value)" maxlength="14" />
                    </div>
                    <div class="form-group">
                        <label>Loan Term (yrs)</label>
                        <input type="text" value="5" id="loanTerm" maxlength="5" />
                    </div>
                    <div class="form-group">
                        <label>Interest Rate</label>
                        <input type="text" value="3.00%" id="interestRate" maxlength="7" />
                    </div>
                </div>
                <div class="b23financial_calculator_left b23mobile_cal">
                        <h3>YOUR LOAN PAYMENT WILL BE</h3>
                    <h4 id="calculatedValuetoBind"></h4>
                        <a type="button" href="#" class="" data-toggle="modal" data-target="#myModal">Show Schedule</a>
                </div>

            </div>

            <!--Pop up content starts-->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog b23pop_board">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="b23pop_main_container_board">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">
                                        <img class="close_icon" src="../../../Static/img/CustomBlocks/B23/close.png" alt="First PREMIER Bank">
                                    </span>
                                </button>
                                <div class="b23pop_main_container">
                                    <h3>Payment Summary</h3>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Event</th>
                                                <th>Amount</th>
                                                <th>Term</th>
                                                <th>Period</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr>
                                        <td>Loan</td>
                                        <td>$30,000</td>
                                        <td>1</td>
                                        <td>Monthly</td>
                                    </tr>
                                    <tr>
                                        <td>Loan</td>
                                        <td>$30,000</td>
                                        <td>1</td>
                                        <td>Monthly</td>
                                    </tr>
                                    <tr>
                                        <td>Loan</td>
                                        <td>$30,000</td>
                                        <td>1</td>
                                        <td>Monthly</td>
                                    </tr> -->
                                        </tbody>
                                    </table>
                                    <h3>Payment Schedule</h3>
                                    <div class="b23overflow_scroll">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                    <th>Loan</th>
                                                    <th>Payment</th>
                                                    <th>Interest</th>
                                                    <th>Principal</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Pop up content End-->
            </div>
        </div>
    </div>
</section>

<script>
    var AmortizationTable = [];
    var monthValue = [0.08, 0.16, 0.25, 0.33, 0.41, 0.50, 0.58, 0.66, 0.75, 0.83, 0.91, 0];
    function Comma(Num) { //function to add commas to textboxes
        Num += '';
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        x = Num.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1))
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        return x1 + x2;
    }
    $(document).ready(function () {
        $("#purchaseAmount").keydown(function (e) {
            var oldvalue = $(this).val();
            var field = this;
            setTimeout(function () {
                if (field.value.indexOf('$ ') !== 0) {
                    $(field).val(oldvalue);
                }
            }, 1);
        });

        $("#purchaseAmount").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 44 && e.which != 46) {
                return false;
            }
        });

        $("#downPaymentAmount").keydown(function (e) {
            var oldvalue = $(this).val();
            var field = this;
            setTimeout(function () {
                if (field.value.indexOf('$ ') !== 0) {
                    $(field).val(oldvalue);
                }
            }, 1);
        });

        $("#downPaymentAmount").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 44 && e.which != 46) {
                return false;
            }
        });

        $("#loanTerm").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 46) {
                return false;
            }
        });

        $('#interestRate').keyup(function () {
            var oldstr = $('#interestRate').val();
            var str = oldstr.replace('%', '');
            $('#interestRate').val(str + '%');
        });
        $("#interestRate").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 46) {
                return false;
            }
        });

        $("#purchaseAmount").focusout(function () {
            if (CalculatePaymentAmountBasedOnInput() != null && CalculatePaymentAmountBasedOnInput() != "" && CalculatePaymentAmountBasedOnInput() != undefined && CalculatePaymentAmountBasedOnInput() != "NaN" && CalculatePaymentAmountBasedOnInput() != NaN) {
                $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));
            }
        });

        $("#downPaymentAmount").focusout(function () {
            if (CalculatePaymentAmountBasedOnInput() != null && CalculatePaymentAmountBasedOnInput() != "" && CalculatePaymentAmountBasedOnInput() != undefined && CalculatePaymentAmountBasedOnInput() != "NaN" && CalculatePaymentAmountBasedOnInput() != NaN) {
                $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));
            }
        });
        $("#loanTerm").focusout(function () {
            if (parseFloat($("#loanTerm").val()).toFixed(2) > 30.00) {
                alert('Invalid Loan Terms.Maximum value is 30 Years.');
                $("#loanTerm").val(5);
                return;
            }
            else {
                if (CalculatePaymentAmountBasedOnInput() != null && CalculatePaymentAmountBasedOnInput() != "" && CalculatePaymentAmountBasedOnInput() != undefined && CalculatePaymentAmountBasedOnInput() != "NaN" && CalculatePaymentAmountBasedOnInput() != NaN) {
                    $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));
                }
            }
        });
        $("#interestRate").focusout(function () {
            if (parseFloat($("#interestRate").val()).toFixed(2) > 100.00) {
                alert('Invalid Loan Interest Rate.Maximum value is 100 Percent.');
                $("#interestRate").val("3.00%");
                return;
            }
            else {
                if (CalculatePaymentAmountBasedOnInput() != null && CalculatePaymentAmountBasedOnInput() != "" && CalculatePaymentAmountBasedOnInput() != undefined && CalculatePaymentAmountBasedOnInput() != "NaN" && CalculatePaymentAmountBasedOnInput() != NaN) {
                    $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));
                }
            }
        });




        function CalculatePaymentAmountBasedOnInput() {
            var purchaseAmount = parseFloat($("#purchaseAmount").val().replace("$", "").replace(/,/g, "")).toFixed(2);
            if (purchaseAmount == "NaN" || purchaseAmount == "0.00" || purchaseAmount == NaN) {
                alert("Please enter valid Purchase Amount");
                $("#purchaseAmount").val("$ 35,000");
                return;
            }
            var downPaymentAmount = parseFloat($("#downPaymentAmount").val().replace("$", "").replace(/,/g, "")).toFixed(2);
            if (downPaymentAmount == "NaN" || downPaymentAmount == NaN) {
                alert("Please enter valid Down Payment Amount");
                $("#downPaymentAmount").val("$ 5,000");
                return;
            }
            if ((purchaseAmount - downPaymentAmount) < 0) {
                alert("Down payment amount must be less than or equal to Purchase amount");
                $("#purchaseAmount").val("$ 35,000");
                $("#downPaymentAmount").val("$ 5,000");
                return;
            }
            var loanAmount = -(purchaseAmount - downPaymentAmount);
            var rateValue = parseFloat($("#interestRate").val().replace("%", "")).toFixed(3);
            if (rateValue == "NaN" || rateValue == NaN) {
                alert("Please enter valid Interest Rate");
                $("#interestRate").val("3.00%");
                return;
            }
            var actualRateWeCanPass = rateValue / 1200;
            if (monthValue.indexOf(Number(parseFloat($("#loanTerm").val() % 1).toFixed(2))) == -1 && Number(parseFloat($("#loanTerm").val() / 1).toFixed(2)) < 30) {
                alert("Please enter valid Loan Term");
                $("#loanTerm").val("5");
                return;
            }
            var numberOfMonth = parseFloat($("#loanTerm").val()).toFixed(2) * 12;
            numberOfMonth = Math.ceil(numberOfMonth);
            if (numberOfMonth == "NaN" || numberOfMonth === 0 || numberOfMonth == NaN) {
                alert("Please enter valid Loan Term");
                $("#loanTerm").val("5");
                return;
            }


            var MonthlyPayment = PMT(actualRateWeCanPass, numberOfMonth, loanAmount, 0, 0);
            CalculateAmortization(loanAmount, rateValue, MonthlyPayment, numberOfMonth);
            PopulateAmortizationSummaryData(loanAmount, MonthlyPayment);
            PopulateAmortizationData(loanAmount);
            return MonthlyPayment;
        }
        $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));

    });

    function PMT(rate, nperiod, pv, fv, type) {
        if (!fv) fv = 0;
        if (!type) type = 0;

        if (rate == 0) return -(pv + fv) / nperiod;

        var pvif = Math.pow(1 + rate, nperiod);
        var pmt = rate / (pvif - 1) * -(pv * pvif + fv);

        if (type == 1) {
            pmt /= (1 + rate);
        };

        return pmt;
    }
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    function CalculateAmortization(loanAmount, rateValue, MonthlyPayment, numberOfMonth) {
        AmortizationTable = [];
        var loanAmountForAmortization = -loanAmount;
        var rateValueForAmortization = parseFloat(rateValue).toFixed(3) / 1200;
        var monthlyPayment = MonthlyPayment.toFixed(2);
        var FirstMonthPayment = {
            MonthCount: 1,
            StartingBalance: (loanAmountForAmortization).toFixed(2),
            Interest: (loanAmountForAmortization * rateValueForAmortization).toFixed(2),
            Principal: (monthlyPayment - (loanAmountForAmortization * rateValueForAmortization).toFixed(2)).toFixed(2),
            EndingBalance: (loanAmountForAmortization.toFixed(2) - (monthlyPayment - (loanAmountForAmortization * rateValueForAmortization).toFixed(2))).toFixed(2),
            TotalInterest: (loanAmountForAmortization.toFixed(2) * rateValueForAmortization).toFixed(2),
            MonthlyPaymentAmount: monthlyPayment
        };
        AmortizationTable.push(FirstMonthPayment);
        for (var k = 1; k < numberOfMonth; k++) {
            var MonthlyWisePayment = {
                MonthCount: (k + 1),
                StartingBalance: AmortizationTable[k - 1].EndingBalance,
                Interest: (AmortizationTable[k - 1].EndingBalance * rateValueForAmortization).toFixed(2),
                Principal: (monthlyPayment - (AmortizationTable[k - 1].EndingBalance * rateValueForAmortization)).toFixed(2),
                EndingBalance: (AmortizationTable[k - 1].EndingBalance - (monthlyPayment - (AmortizationTable[k - 1].EndingBalance * rateValueForAmortization))).toFixed(2),
                TotalInterest: (parseFloat(AmortizationTable[k - 1].TotalInterest) + (AmortizationTable[k - 1].EndingBalance * rateValueForAmortization)).toFixed(2),
                MonthlyPaymentAmount: monthlyPayment
            }
            AmortizationTable.push(MonthlyWisePayment);
        }

        var amortizationLastPayment = AmortizationTable.pop();
        if (amortizationLastPayment.EndingBalance != 0) {
            amortizationLastPayment.MonthlyPaymentAmount = (parseFloat(amortizationLastPayment.MonthlyPaymentAmount) + parseFloat(amortizationLastPayment.EndingBalance)).toFixed(2);
            amortizationLastPayment.Principal = (parseFloat(amortizationLastPayment.Principal) + parseFloat(amortizationLastPayment.EndingBalance)).toFixed(2);
            amortizationLastPayment.EndingBalance = "0.00";
        }
        AmortizationTable.push(amortizationLastPayment);
        //alert("Jay Jalaram");


    }

    function PopulateAmortizationSummaryData(loanAmount, MonthlyPayment) {
        var actualLoanAmount = -loanAmount;
        var firstTableHTML;
        if (Number(AmortizationTable[AmortizationTable.length - 1].MonthlyPaymentAmount) != Number(MonthlyPayment.toFixed(2))) {
            firstTableHTML = "<tr><td>Loan</td><td>$" + Comma(actualLoanAmount.toFixed(2)) + "</td><td>1</td><td></td></tr>";
            firstTableHTML += "<tr><td>Payment</td><td>$" + Comma(MonthlyPayment.toFixed(2)) + "</td><td>" + (AmortizationTable.length - 1) + "</td><td>Monthly</td></tr>";
            firstTableHTML += "<tr><td>Payment</td><td>$" + Comma(AmortizationTable[AmortizationTable.length - 1].MonthlyPaymentAmount) + "</td><td>1</td><td></td></tr>";
        }
        else {
            firstTableHTML = "<tr><td>Loan</td><td>$" + Comma(actualLoanAmount.toFixed(2)) + "</td><td>1</td><td></td></tr>";
            firstTableHTML += "<tr><td>Loan</td><td>$" + Comma(MonthlyPayment.toFixed(2)) + "</td><td>" + AmortizationTable.length + "</td><td>Monthly</td></tr>";
        }
        $('.b23pop_main_container table tbody').eq(0).html(firstTableHTML);


    }

    function PopulateAmortizationData(loanAmount) {
        var actualLoanAmount = -loanAmount;
        var secondTableHTML = "<tr><td>Loan 1</td><td>$" + Comma(actualLoanAmount.toFixed(2)) + "</td><td></td><td>$0.00</td><td>$0.00</td><td>$" + Comma(actualLoanAmount.toFixed(2)) + "</td></tr>";
        for (var p = 0; p < AmortizationTable.length; p++) {
            var rowHTML = "";
            rowHTML += "<tr><td>Payment " + AmortizationTable[p].MonthCount + "</td><td></td>";
            rowHTML += "<td>$" + Comma(AmortizationTable[p].MonthlyPaymentAmount) + "</td>";
            rowHTML += "<td>$" + Comma(AmortizationTable[p].Interest) + "</td>";
            rowHTML += "<td>$" + Comma(AmortizationTable[p].Principal) + "</td>";
            rowHTML += "<td>$" + Comma(AmortizationTable[p].EndingBalance) + "</td></tr>";
            secondTableHTML += rowHTML;
        }
        var SumValues = amortizationTableTotal();
        secondTableHTML += "<tr style='font-weight: bold;background-color:#FFFFFF;'><td style='border-top: 2px solid #dee2e6;'>Grand Total</td><td style='border-top: 2px solid #dee2e6;'>$" + Comma(actualLoanAmount.toFixed(2)) + "</td><td style='border-top: 2px solid #dee2e6;'>$" + Comma(SumValues.MonthlyPaymentSum.toFixed(2)) + "</td><td style='border-top: 2px solid #dee2e6;'>$" + Comma(SumValues.InterestSum.toFixed(2)) + "</td><td style='border-top: 2px solid #dee2e6;'>$" + Comma(SumValues.PrincipalSum.toFixed(2)) + "</td><td>$0.00</td></tr>";
        $('.b23pop_main_container table tbody').eq(1).html(secondTableHTML);
    }

    function amortizationTableTotal() {
        return {
            MonthlyPaymentSum: AmortizationTable.reduce(function (s, a) {
                return s + Number(a.MonthlyPaymentAmount);
            }, 0),
            InterestSum: AmortizationTable.reduce(function (s, a) {
                return s + Number(a.Interest);
            }, 0),
            PrincipalSum: AmortizationTable.reduce(function (s, a) {
                return s + Number(a.Principal);
            }, 0)
        }

    }


</script></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                            </div>
    </div>
</section>
<script>
    $(".b23financial_calculator_left p:first").text('Use this calculator to estimate how much your loan payment will be.');
$(".b23overflow_scroll table th:nth-child(4)").text('Interest');;
</script>

<style>
    .b4background.colored {
        background-color: #25455a !important;
    }

    .b4background.colored .b15benfits_main_box {
        margin: 0px !important;

    }

    .colored h2, .colored .xhtml p {
    color: #fff !important;
    }

    .page-Our-Communities .block.b04block.col-md-12 {
    margin-top: 20px;
    }
</style></div><div class="block b26block  col-md-12">



<style>
    .carousel-control:focus, .carousel-control:hover, .carousel-control.left, .carousel-control.right {
        background: none !important;
    }
    .b26line_credit_main .carousel-inner { min-height:520px !important;; }

    .white-background h2, .white-background .xhtml, .white-background .xhtml p,
    .grey-background h2, .grey-background .xhtml, .grey-background .xhtml p
    {
        color: #000;
    }
</style>
<script>
    var alternateBackground = "False";
    $(document).ready(function () {
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

                <h2>You May Also Be Interested In</h2>


            <div class="row">
                <div class="col-md-12 hidden-xs hidden-sm">
                    <div class="carousel" id="myCarousel-" data-interval="false">
                        <div class="carousel-inner">
                            <div class='item active'><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'><div class='b26line_credit_loans_left'><img src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-personal-checking.png') }}' alt='woman on couch using mobile phone'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Personal Checking</h3></div><h3><br clear='all'/><div class="xhtml"><p>From FREE+ Checking with Online &amp; Mobile Banking, we&rsquo;ve got you covered.</p>
<ul>
<li><a href="../personal-checking/free-plus-checking/index.html">FREE+ Checking</a></li>
<li><a href="../personal-checking/reward-checking/index.html">Reward Checking</a></li>
<li><a href="../online-and-mobile/index.html">Online &amp; Mobile Banking</a></li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-grow-wealth.png') }}' alt=''></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Grow Your Wealth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer concierge-style banking for higher net worth individuals, with managed investing and more.</p>
<ul>
<li><a href="../wealth-management/private-banking/index.html">Private Banking</a></li>
<li><a href="../wealth-management/managed-investing/index.html">Managed Investing</a></li>
<li><a href="../wealth-management/personal-trust-services/index.html">Personal Trust Services</a></li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'><div class='b26line_credit_loans_left'><img src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-why-bank-with-us.png') }}' alt='Sioux Falls South Dakota'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Why Bank with Us?</h3></div><h3><br clear='all'/><div class="xhtml"><p>As one of the nation&rsquo;s strongest capitalized banks, we&rsquo;re also debt-free. Learn more!</p>
<ul>
<li><a href="../../pages/about-us/index.html">About Us</a></li>
<li><a href="../../pages/about-us/the-premier-way/index.html">The PREMIER Way</a></li>
<li><a href="../../pages/resources/sanford-health/first-premier-bank-sanford-partnership-offers/index.html">Giving Back to Community</a></li>
</ul></div></h3></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                    <center>
                    <div class="b26MobileCard" style="width:345px;min-height:700px;">
                        <div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/personal/b-17-promo-01-personal-checking.png' alt='woman on couch using mobile phone'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Personal Checking</h3></div><h3><br clear='all'/><div class="xhtml"><p>From FREE+ Checking with Online &amp; Mobile Banking, we&rsquo;ve got you covered.</p>
<ul>
<li><a href="../personal-checking/free-plus-checking/index.html">FREE+ Checking</a></li>
<li><a href="../personal-checking/reward-checking/index.html">Reward Checking</a></li>
<li><a href="../online-and-mobile/index.html">Online &amp; Mobile Banking</a></li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/personal/b-17-promo-01-grow-wealth.png' alt=''></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Grow Your Wealth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer concierge-style banking for higher net worth individuals, with managed investing and more.</p>
<ul>
<li><a href="../wealth-management/private-banking/index.html">Private Banking</a></li>
<li><a href="../wealth-management/managed-investing/index.html">Managed Investing</a></li>
<li><a href="../wealth-management/personal-trust-services/index.html">Personal Trust Services</a></li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/personal/b-17-promo-01-why-bank-with-us.png' alt='Sioux Falls South Dakota'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Why Bank with Us?</h3></div><h3><br clear='all'/><div class="xhtml"><p>As one of the nation&rsquo;s strongest capitalized banks, we&rsquo;re also debt-free. Learn more!</p>
<ul>
<li><a href="../../pages/about-us/index.html">About Us</a></li>
<li><a href="../../pages/about-us/the-premier-way/index.html">The PREMIER Way</a></li>
<li><a href="../../pages/resources/sanford-health/first-premier-bank-sanford-partnership-offers/index.html">Giving Back to Community</a></li>
</ul></div></h3></div></div></div>
                    </div>
                    </center>
                </div>

            </div>
        </div>
    </div>
</section>


</div></div>



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
            <a href="../../pages/resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a>
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
 <p>Member FDIC | <img src="{{ asset('assets/frontend/Static/img/equalhousinglender.png') }}" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
        </div>
    </div>
</div>
<style>
    /* CHROME SAFARI FIX */
    .form-control:hover, .form-control:active, .form-control:focus { box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }
    .form-control:hover, .form-control:active, .form-control:focus { box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }
    a:focus, a:active {outline:none!important; border: none!important; }
    input:focus, input:active { outline: none !important; }
    textarea:focus { outline: none !important; }
    button:focus, button:active { outline: none !important; border: none !important; }
    .showehllogo { background: url('../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat; background-size: 24px 24px }
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
</script>    </div>
    <div class="smallLogo"><a href="../../index.html" title="First PREMIER Bank - Home"><img src="../../../Static/gfx/Logo.png" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../index.html');api.setServiceApiBaseUrl('../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../Static/js/Blocks_2019062002.js"></script>
@endsection
