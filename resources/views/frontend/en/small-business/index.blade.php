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
                                    <a href="../index.html">Personal</a>
                                </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse11">

Checking                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse11" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../personal/personal-checking/index.html">Personal Checking</a>
                                            </div>
                                                <div class="panel-body">
<a href="../personal/personal-checking/free-plus-checking/index.html">FREE+ Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/personal-checking/reward-checking/index.html">Reward Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/personal-checking/debit-card/index.html">Debit Card</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/personal-checking/overdraft-protection/index.html">Overdraft Protection</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/personal-checking/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse12">

Online &amp; Mobile                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse12" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../personal/online-and-mobile/index.html">Online &amp; Mobile</a>
                                            </div>
                                                <div class="panel-body">
<a href="../personal/online-and-mobile/online-banking/index.html">Online Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/online-and-mobile/mobile-banking/index.html">Mobile Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/online-and-mobile/bill-pay/index.html">Bill Pay</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/online-and-mobile/estatements/index.html">eStatements</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/online-and-mobile/mobile-wallet/index.html">Mobile Wallet</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/online-and-mobile/personal-financial-management/index.html">Personal Financial Management</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse13">

Savings &amp; CDs                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse13" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../personal/savings-and-cds/index.html">Savings &amp; CDs</a>
                                            </div>
                                                <div class="panel-body">
<a href="../personal/savings-and-cds/regular-savings/index.html">Regular Savings</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/savings-and-cds/premier-money-market/index.html">PREMIER Money Market</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/savings-and-cds/certificates-of-deposit/index.html">Certificates of Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/savings-and-cds/ira-savings-and-cds/index.html">IRA Savings &amp; CDs</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/savings-and-cds/kids-savings/index.html">Kids Savings</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse14">

Loans &amp; Credit Lines                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse14" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../personal/loans-and-credit-lines/index.html">Loans &amp; Credit Lines</a>
                                            </div>
                                                <div class="panel-body">
<a href="../personal/loans-and-credit-lines/personal-loans/index.html">Personal Loans</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/loans-and-credit-lines/personal-lines-of-credit/index.html">Personal Lines of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/loans-and-credit-lines/easy-access-line-of-credit/index.html">Easy Access Line of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/loans-and-credit-lines/home-equity-line-of-credit/index.html">Home Equity Line of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/loans-and-credit-lines/advance-access-line-of-credit/index.html">Advance Access Line of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/loans-and-credit-lines/loan-payment-options/index.html">Loan Payment Options</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse15">

Mortgages                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse15" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../personal/mortgages/index.html">Mortgages</a>
                                            </div>
                                                <div class="panel-body">
<a href="../personal/mortgages/buying-or-building-a-home/index.html">Buying or Building a Home</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/mortgages/refinancing-a-home/index.html">Refinancing a Home</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/mortgages/jumbo-mortgage-loans/index.html">Jumbo Mortgage Loans</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/mortgages/apply-for-a-mortgage/index.html">Apply for a Mortgage</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse16">

Investing                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse16" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../personal/investing/index.html">Investing</a>
                                            </div>
                                                <div class="panel-body">
<a href="../personal/investing/brokerage-services/index.html">Brokerage Services</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/investing/retirement-planning/index.html">Retirement Planning</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/investing/insurance/index.html">Insurance</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/investing/financial-and-investing-resources/index.html">Financial &amp; Investing Resources</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse17">

Wealth Management                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse17" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../personal/wealth-management/index.html">Wealth Management</a>
                                            </div>
                                                <div class="panel-body">
<a href="../personal/wealth-management/private-banking/index.html">Private Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/wealth-management/financial-planning/index.html">Financial Planning</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/wealth-management/personal-trust-services/index.html">Personal Trust Services</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/wealth-management/managed-investing/index.html">Managed Investing</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/wealth-management/trusts-in-south-dakota/index.html">Trusts in South Dakota</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse18">

Students &amp; Parents                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse18" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../personal/students-and-parents/index.html">Students &amp; Parents</a>
                                            </div>
                                                <div class="panel-body">
<a href="../personal/students-and-parents/university-debit-cards/index.html">University Debit Cards</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/students-and-parents/dakota-state-university-debit-card/index.html">Dakota State University Debit Card</a>                                                </div>
                                                <div class="panel-body">
<a href="../personal/students-and-parents/student-loans/index.html">Student Loans</a>                                                </div>
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
                                    <a href="index.html">Small Business</a>
                                </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse21">

Checking                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse21" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="business-checking/index.html">Business Checking</a>
                                            </div>
                                                <div class="panel-body">
<a href="business-checking/low-volume/index.html">Low Volume</a>                                                </div>
                                                <div class="panel-body">
<a href="business-checking/low-volume-plus-interest/index.html">Low Volume + Interest</a>                                                </div>
                                                <div class="panel-body">
<a href="business-checking/high-volume-plus-earnings-credit/index.html">High Volume + Earnings Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="business-checking/high-volume-plus-interest/index.html">High Volume + Interest</a>                                                </div>
                                                <div class="panel-body">
<a href="business-checking/compare-business-checking/index.html">Compare Business Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="business-checking/business-debit-mastercard/index.html">Business Debit Mastercard&#174;</a>                                                </div>
                                                <div class="panel-body">
<a href="business-checking/overdraft-protection/index.html">Overdraft Protection</a>                                                </div>
                                                <div class="panel-body">
<a href="business-checking/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse22">

Online &amp; Mobile                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse22" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="online-and-mobile/index.html">Online &amp; Mobile</a>
                                            </div>
                                                <div class="panel-body">
<a href="online-and-mobile/online-banking/index.html">Business Online Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="online-and-mobile/mobile-banking/index.html">Mobile Banking</a>                                                </div>
                                                <div class="panel-body">
<a href="online-and-mobile/bill-pay/index.html">Bill Pay</a>                                                </div>
                                                <div class="panel-body">
<a href="online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="online-and-mobile/estatements/index.html">eStatements</a>                                                </div>
                                                <div class="panel-body">
<a href="online-and-mobile/mobile-wallet/index.html">Mobile Wallet</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse23">

Savings &amp; CDs                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse23" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="savings-and-cds/index.html">Savings &amp; CDs</a>
                                            </div>
                                                <div class="panel-body">
<a href="savings-and-cds/regular-business-savings/index.html">Regular Business Savings</a>                                                </div>
                                                <div class="panel-body">
<a href="savings-and-cds/premier-money-market/index.html">PREMIER Money Market</a>                                                </div>
                                                <div class="panel-body">
<a href="savings-and-cds/certificates-of-deposit/index.html">Certificates of Deposit</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse24">

Loans &amp; Credit Lines                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse24" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="loans-and-credit-lines/index.html">Loans &amp; Credit Lines</a>
                                            </div>
                                                <div class="panel-body">
<a href="loans-and-credit-lines/small-business-loans/index.html">Small Business Loans</a>                                                </div>
                                                <div class="panel-body">
<a href="loans-and-credit-lines/business-lines-of-credit/index.html">Business Lines of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="loans-and-credit-lines/commercial-real-estate/index.html">Commercial Real Estate</a>                                                </div>
                                                <div class="panel-body">
<a href="business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard&#174;</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse25">

Business Services                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse25" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="business-services/index.html">Business Services</a>
                                            </div>
                                                <div class="panel-body">
<a href="business-services/make-payments/index.html">Make Payments</a>                                                </div>
                                                <div class="panel-body">
<a href="business-services/accept-payments/index.html">Accept Payments</a>                                                </div>
                                                <div class="panel-body">
<a href="business-services/merchant-card-services/index.html">Merchant Card Services</a>                                                </div>
                                                <div class="panel-body">
<a href="business-services/remote-deposit/index.html">Remote Deposit</a>                                                </div>
                                                <div class="panel-body">
<a href="business-services/lockbox-services/index.html">Lockbox Services</a>                                                </div>
                                                <div class="panel-body">
<a href="business-services/positive-pay/index.html">Positive Pay</a>                                                </div>
                                                <div class="panel-body">
<a href="business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard&#174;</a>                                                </div>
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
                                                <a href="asset-management-and-trust/index.html">Asset Management &amp; Trust</a>
                                            </div>
                                                <div class="panel-body">
<a href="asset-management-and-trust/business-planning-investment/index.html">Business Planning &amp; Investing</a>                                                </div>
                                                <div class="panel-body">
<a href="asset-management-and-trust/employee-benefits/index.html">Employee Benefits</a>                                                </div>
                                                <div class="panel-body">
<a href="asset-management-and-trust/group-retirement-plans/index.html">Group Retirement Plans</a>                                                </div>
                                                <div class="panel-body">
<a href="asset-management-and-trust/business-trust-services/index.html">Business Trust Services</a>                                                </div>
                                                <div class="panel-body">
<a href="asset-management-and-trust/first-premier-at-work/index.html">First PREMIER at Work</a>                                                </div>
                                                <div class="panel-body">
<a href="asset-management-and-trust/south-dakota-trusts/index.html">Trusts in South Dakota</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse27">

Ag Banking                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse27" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="ag-banking/index.html">Ag Banking</a>
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
                                    <a href="../commercial/index.html">Commercial</a>
                                </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse31">

Checking                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse31" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="{{route('frontend.en.commercial.asset')}}">Business Checking</a>
                                            </div>
                                                <div class="panel-body">
<a href="../commercial/business-checking/high-volume-plus-earnings-credit/index.html">High Volume + Earnings Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/business-checking/high-volume-plus-interest/index.html">High Volume + Interest</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/business-checking/low-volume/index.html">Low Volume</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/business-checking/low-volume-plus-interest/index.html">Low Volume + Interest</a>                                                </div>
                                                <div class="panel-body">
<a href="business-checking/compare-business-checking/index.html">Compare Business Checking</a>                                                </div>
                                                <div class="panel-body">
<a href="{{route('frontend.en.commercial.asset')}}">Business Debit Mastercard&#174;</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/business-checking/overdraft-protection/index.html">Overdraft Protection</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/treasury-services/cash-management/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse32">

Savings &amp; CDs                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse32" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../commercial/savings-and-cds/index.html">Savings &amp; CDs</a>
                                            </div>
                                                <div class="panel-body">
<a href="../commercial/savings-and-cds/traditional-savings/index.html">Traditional Savings</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/savings-and-cds/premier-money-market/index.html">PREMIER Money Market</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/savings-and-cds/certificate-of-deposit/index.html">Certificate of Deposit</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse33">

Financing                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse33" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../commercial/financing/index.html">Financing</a>
                                            </div>
                                                <div class="panel-body">
<a href="../commercial/financing/commercial-lending/index.html">Commercial Lending</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/financing/business-lines-of-credit/index.html">Business Lines of Credit</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/financing/commercial-real-estate/index.html">Commercial Real Estate</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/financing/business-debit-mastercard/index.html">Business Rewards Mastercard&#174;</a>                                                </div>
                                                <div class="panel-body">
<a href="../commercial/financing/atm-vault-cash-solutions/index.html">ATM Vault Cash Solutions</a>                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapse34">

Treasury Services                                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                                        </a>
                                        <div id="collapse34" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <a href="../commercial/treasury-services/index.html">Treasury Services</a>
                                            </div>
                                                <div class="panel-body">
                                                            <u><a href="../commercial/treasury-services/cash-management/index.html">Cash Management</a></u>
                                                        <div style="color:#ffd800 !important;">
<a href="../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual Account Management</a><a href="../commercial/treasury-services/cash-management/business-online-banking/index.html">Business Online Banking</a><a href="../commercial/treasury-services/cash-management/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a><a href="../commercial/treasury-services/cash-management/mobile-banking/index.html">Mobile Banking</a><a href="../commercial/treasury-services/cash-management/reporting-and-analytics/index.html">Reporting &amp; Analytics</a><a href="../commercial/treasury-services/cash-management/mobile-wallet/index.html">Mobile Wallet</a><a href="../commercial/treasury-services/cash-management/estatements/index.html">eStatements</a><a href="../commercial/treasury-services/cash-management/bill-pay/index.html">Bill Pay</a>                                                        </div>
                                                </div>
                                                <div class="panel-body">
                                                            <u><a href="../commercial/treasury-services/manage-receivables/index.html">Manage Receivables</a></u>
                                                        <div style="color:#ffd800 !important;">
<a href="../commercial/treasury-services/manage-receivables/ach-services/index.html">ACH Services</a><a href="../commercial/treasury-services/manage-receivables/merchant-card-services/index.html">Merchant Card Services</a><a href="../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual Account Management</a><a href="../commercial/treasury-services/manage-receivables/remote-deposit/index.html">Remote Deposit</a><a href="../commercial/treasury-services/manage-receivables/lockbox-services/index.html">LockBox Services</a><a href="../commercial/treasury-services/manage-receivables/centralized-returns/index.html">Centralized Returns</a><a href="../commercial/treasury-services/manage-receivables/check-image-clearing/index.html">Check Image Clearing</a><a href="../commercial/treasury-services/manage-receivables/positive-pay/index.html">Positive Pay</a>                                                        </div>
                                                </div>
                                                <div class="panel-body">
                                                            <u><a href="../commercial/treasury-services/manage-payables-and-payroll/index.html">Manage Payables &amp; Payroll</a></u>
                                                        <div style="color:#ffd800 !important;">
<a href="../commercial/treasury-services/manage-receivables/ach-services/index.html">ACH Services</a><a href="../commercial/treasury-services/manage-receivables/virtual-account-management/index.html">Virtual Account Management</a><a href="business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard&#174;</a>                                                        </div>
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
                    <li><a href="../pages/quick-links/locations/index.html">Locations</a></li><li><a href="../pages/about-us/index.html">About Us</a></li><li><a href="{{route('frontend.en.pages.about.careers')}}">Careers</a></li><li><a href="../pages/quick-links/customer-care/index.html">Customer Care</a></li>

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
                            <li class="navItem"><a href="../pages/quick-links/locations/index.html">Locations</a></li><li class="navItem"><a href="../pages/about-us/index.html">About Us</a></li><li class="navItem"><a href="{{route('frontend.en.pages.about.careers')}}">Careers</a></li><li class="navItem"><a href="../pages/quick-links/customer-care/index.html">Customer Care</a></li>

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
                            <a href="../index.html" title="First PREMIER Bank - Home"><img src="../../Static/gfx/LogoStack.png" style="max-width:100%;" /></a>
                    </article>
                    <article class="small-menu">
                        <ul>
<li><a href="../index.html">Personal</a></li><li class="active"><a href="index.html">Small Business</a></li><li><a href="../commercial/index.html">Commercial</a></li>
                        </ul>
                    </article>
                    <div class="card-btn">
                        <a href="https://www.mypremiercreditcard.com/">Credit Card Sign In <img src="../../Static/img/card-icon.png" alt="First PREMIER Bank"></a>
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

                                        <a href="business-checking/index.html">Checking</a>
                                        <div id="subdiv_BusinessChecking" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Business Checking</h3>
                                                                    <p>Our flexible small business checking accounts come with FREE Online and Mobile Banking, Bill Pay, eStatements, Mobile Deposit and more!</p>
                                                                    <a href="business-checking/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-checking/low-volume/index.html">Low Volume</a></div>
                                                                        <p>Affordable checking for businesses with basic needs and less banking activity.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-checking/low-volume-plus-interest/index.html">Low Volume + Interest</a></div>
                                                                        <p>For lower-volume transaction businesses who want to earn interest.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-checking/high-volume-plus-earnings-credit/index.html">High Volume + Earnings Credit</a></div>
                                                                        <p>For higher-volume businesses, with an earnings credit to help offset banking fees.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-checking/high-volume-plus-interest/index.html">High Volume + Interest</a></div>
                                                                        <p>For higher volume, higher balance businesses who want to earn interest.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-checking/compare-business-checking/index.html">Compare Business Checking</a></div>
                                                                        <p>Compare business checking accounts to select the right business account for you.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-checking/business-debit-mastercard/index.html">Business Debit Mastercard&#174;</a></div>
                                                                        <p>Purchasing power, fraud protection and access to 33,000+ surcharge-free ATMs.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-checking/overdraft-protection/index.html">Overdraft Protection</a></div>
                                                                        <p>Ensure funds are in place to cover transactions with optional protection.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-checking/security-and-fraud-protection/index.html">Security &amp; Fraud Protection</a></div>
                                                                        <p>Secure banking and fraud management solutions for business.</p>
                                                                        <hr>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="SubMenu">

                                        <a href="online-and-mobile/index.html">Online &amp; Mobile</a>
                                        <div id="subdiv_Online&amp;Mobile" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Online & Mobile</h3>
                                                                    <p>Our FREE Business Online and Mobile Banking comes with Bill Pay, eStatements, Mobile Deposit and much more. &nbsp;</p>
                                                                    <a href="online-and-mobile/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="online-and-mobile/online-banking/index.html">Business Online Banking</a></div>
                                                                        <p>Check balances, transfer funds, pay bills, view eStatements and more online.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="online-and-mobile/mobile-banking/index.html">Mobile Banking</a></div>
                                                                        <p>Our mobile app puts the features of online banking in the palm of your hand.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="online-and-mobile/bill-pay/index.html">Bill Pay</a></div>
                                                                        <p>Quick, simple, secure bill payment via Online or Mobile Banking.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a></div>
                                                                        <p>Use our mobile banking app to make secure deposits with your mobile phone.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="online-and-mobile/estatements/index.html">eStatements</a></div>
                                                                        <p>Securely download, print and distribute via Online and Mobile Banking.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="online-and-mobile/mobile-wallet/index.html">Mobile Wallet</a></div>
                                                                        <p>Link your business debit or credit card to a mobile wallet for easy payment.</p>
                                                                        <hr>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="SubMenu">

                                        <a href="savings-and-cds/index.html">Savings &amp; CDs</a>
                                        <div id="subdiv_Savings&amp;CDs" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Savings & CDs</h3>
                                                                    <p>Keep ready cash on hand with Regular Business Savings, PREMIER Money Market or a Certificate of Deposit.</p>
                                                                    <a href="savings-and-cds/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="savings-and-cds/regular-business-savings/index.html">Regular Business Savings</a></div>
                                                                        <p>Keep residual cash within reach with this interest-bearing, FDIC-insured savings account.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="savings-and-cds/premier-money-market/index.html">PREMIER Money Market</a></div>
                                                                        <p>The higher your savings, the higher the interest rate with this FDIC-insured account.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="savings-and-cds/certificates-of-deposit/index.html">Certificates of Deposit</a></div>
                                                                        <p>A low-risk savings investment option for businesses interested in a guaranteed return.</p>
                                                                        <hr>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="SubMenu">

                                        <a href="loans-and-credit-lines/index.html">Loans &amp; Credit Lines</a>
                                        <div id="subdiv_Loans&amp;CreditLines" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Loans & Credit Lines</h3>
                                                                    <p>Access the working capital you need to manage and grow your business with lending solutions from First PREMIER Bank.</p>
                                                                    <a href="loans-and-credit-lines/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="loans-and-credit-lines/small-business-loans/index.html">Small Business Loans</a></div>
                                                                        <p>An array of term and SBA lending options that can help finance business management and growth.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="loans-and-credit-lines/business-lines-of-credit/index.html">Business Lines of Credit</a></div>
                                                                        <p>Access to flexible funds to support purchasing, payments and unanticipated operational expenses.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="loans-and-credit-lines/commercial-real-estate/index.html">Commercial Real Estate</a></div>
                                                                        <p>Competitive rates on loans of any size for real estate purchase, construction and land development.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard&#174;</a></div>
                                                                        <p>Purchasing power and cash back rewards - a great way to consolidate spending and expense management.</p>
                                                                        <hr>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="SubMenu">

                                        <a href="business-services/index.html">Business Services</a>
                                        <div id="subdiv_BusinessServices" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Business Services</h3>
                                                                    <p>A full suite of affordable solutions that help you maximize cash flow and manage receivables and accounts payable.</p>
                                                                    <a href="business-services/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-services/make-payments/index.html">Make Payments</a></div>
                                                                        <p>Manage payments and payroll more efficiently to maximize available cash.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-services/accept-payments/index.html">Accept Payments</a></div>
                                                                        <p>Accept and process payments electronically with our full suite of tools.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-services/merchant-card-services/index.html">Merchant Card Services</a></div>
                                                                        <p>Accept debit and credit cards and make it easier for customers to pay.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-services/remote-deposit/index.html">Remote Deposit</a></div>
                                                                        <p>Securely scan checks and send batch deposits from your desktop.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-services/lockbox-services/index.html">Lockbox Services</a></div>
                                                                        <p>Centralize and automate mailed payment processing for speed and accuracy.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-services/positive-pay/index.html">Positive Pay</a></div>
                                                                        <p>A powerful, affordable solution for detecting and preventing fraud.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard&#174;</a></div>
                                                                        <p>Consolidate spending and expense management - with cash back rewards.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="{{route('frontend.en.commercial.asset.business.first')}}">First PREMIER at Work</a></div>
                                                                        <p>Customized financial and education programs for business customers.</p>
                                                                        <hr>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="SubMenu">

                                        <a href="asset-management-and-trust/index.html">Asset Management &amp; Trust</a>
                                        <div id="subdiv_AssetManagement&amp;Trust" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Asset Management & Trust</h3>
                                                                    <p>Comprehensive solutions to help your business grow, invest and transition for the future.</p>
                                                                    <a href="asset-management-and-trust/index.html" style="font-size:12px;padding-bottom:0px;">Learn More</a>
                                                                </div>
                                                            </div>


                                                        <div class="">
                                                            <div class="menu_left_section_main bg-menu_left_section_main col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="asset-management-and-trust/business-planning-investment/index.html">Business Planning &amp; Investing</a></div>
                                                                        <p>Tailored financial planning and investment management support to help you meet your financial goals.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="asset-management-and-trust/employee-benefits/index.html">Employee Benefits</a></div>
                                                                        <p>Commercial 401(k), IRA and group retirement, employee stock purchase and profit sharing plans.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="asset-management-and-trust/group-retirement-plans/index.html">Group Retirement Plans</a></div>
                                                                        <p>Work with us to set up and administer 401(k) SEP and Simple IRA retirement plans for your business.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="asset-management-and-trust/business-trust-services/index.html">Business Trust Services</a></div>
                                                                        <p>Extend your business legacy with business succession planning and trust services.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="asset-management-and-trust/first-premier-at-work/index.html">First PREMIER at Work</a></div>
                                                                        <p>Customized financial and education programs for business customers.</p>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="bg-menu_left_section col-md-6 col-xs-12 col-sm-6">
                                                                        <div class="subsubitem"><a href="asset-management-and-trust/south-dakota-trusts/index.html">Trusts in South Dakota</a></div>
                                                                        <p>Discover the benefits of trusts established in the State of South Dakota.</p>
                                                                        <hr>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="SubMenu">

                                        <a href="ag-banking/index.html">Ag Banking</a>
                                        <div id="subdiv_AgBanking" style="display:none;width: 100vw;margin-left: -50vw;left: 50%;" class="menu_dropdown_main menu-left bg-dropdown-menu-details">
                                            <div class="row-full">
                                                <div class="container">
                                                            <div class="">
                                                                <div class="menu-details-wrapper col-md-12 col-sm-12 col-xs-12">
                                                                    <h3>Ag Banking</h3>
                                                                    <p>First PREMIER Bank is committed to helping agricultural producers by offering tailored lending, insurance and financial solutions.</p>
                                                                    <a href="ag-banking/index.html" style="font-size:12px;padding-bottom:15px;">Learn More</a>
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
        <style>
            @media all and (-ms-high-contrast: none),
            (-ms-high-contrast: active) {

                /* IE 10 & 11 CSS styles go here */
                #signInHoverSection {
                    position: fixed;
                    z-index: 9999;
                    right: auto;
                    top: 48px;
                }
            }

            @supports (-ms-accelerator:true) {

                /* IE Edge 12+ CSS styles go here */
                #signInHoverSection {
                    position: absolute;
                    z-index: 9999;
                }
            }

        </style>
        <div class="row equal-height">
            <div class="block b01block  col-md-12">

                <script>
                    var b01title = "_en_small-business_" + "b01-title";
                    var b01msg = "_en_small-business_" + "b01-msg";
                    var b01heroimage = "_en_small-business_" + "b01-heroimage";
                    var b01linkname = "_en_small-business_" + "b01-linkname";
                    var b01linkurl = "_en_small-business_" + "b01-linkurl";
                    var b01titlemobile = "_en_small-business_" + "b01-titlemobile";
                    var b01messagemobile = "_en_small-business_" + "b01-messagemobile";

                    var WelcomeObj = {
                        title: '',
                        msg: '',
                        heroimage: '',
                        linkname: '',
                        linkurl: '',
                        titlemobile: '',
                        messagemobile: ''
                    };

                    $(document).ready(function() {
                        var title = sessionStorage.getItem(b01title) || '';
                        if (title != '') {

                            var msg = sessionStorage.getItem(b01msg);
                            var heroimage = sessionStorage.getItem(b01heroimage);
                            var linkname = sessionStorage.getItem(b01linkname);
                            sessionStorage.setItem(b01linkurl, 'loans-and-credit-lines/small-business-loans/index.html');
                            //  var linkurl = sessionStorage.getItem(b01linkurl);
                            var titlemobile = sessionStorage.getItem(b01titlemobile);
                            var messagemobile = sessionStorage.getItem(b01messagemobile);

                            titlemobile = titlemobile.replace('<br />', ''); // here I am removing the <br/>
                            messagemobile = messagemobile.replace('<br />', ''); // tags...

                            WelcomeObj.title = title;
                            WelcomeObj.msg = msg;
                            WelcomeObj.heroimage = heroimage;
                            WelcomeObj.linkname = linkname;
                            //  WelcomeObj.linkurl = linkurl;
                            WelcomeObj.linkurl = 'loans-and-credit-lines/small-business-loans/index.html';
                            WelcomeObj.titlemobile = titlemobile;
                            WelcomeObj.messagemobile = messagemobile;
                            SetWelcomeData(WelcomeObj);
                        } else {
                            var wt = "<p>CARES Act <br />Business Relief </p>";
                            var wm =
                                "<p>First PREMIER Bank is  <br />ready to assist with the  <br />Paycheck Protection Program.</p>";
                            var wtm = "<p>CARES Act Business Relief </p>";
                            var wmm = "<p>First PREMIER Bank is  ready to assist with the  Paycheck Protection Program.</p>";

                            sessionStorage.setItem(b01title, wt);
                            sessionStorage.setItem(b01msg, wm);
                            sessionStorage.setItem(b01heroimage,
                                "{{ asset('assets/frontend/contentassets/613ffd6c1af74cda9bb62b96e88cac56/fpbcares-act-hero.jpg') }}"
                            );
                            sessionStorage.setItem(b01linkname, 'Learn More');
                            sessionStorage.setItem(b01linkurl, 'loans-and-credit-lines/small-business-loans/index.html');
                            sessionStorage.setItem(b01titlemobile, wtm);
                            sessionStorage.setItem(b01messagemobile, wmm);
                            WelcomeObj.title = wt;
                            WelcomeObj.msg = wm;
                            WelcomeObj.heroimage =
                                "{{ asset('assets/frontend/contentassets/613ffd6c1af74cda9bb62b96e88cac56/fpbcares-act-hero.jpg') }}";
                            WelcomeObj.linkname = 'Learn More';
                            WelcomeObj.linkurl = 'loans-and-credit-lines/small-business-loans/index.html';
                            WelcomeObj.titlemobile = wtm; // These are the mobile title
                            WelcomeObj.messagemobile = wmm; // and mobile message.
                            SetWelcomeData(WelcomeObj);
                        }
                    });

                    function parseHtmlEntities(str) {
                        return str.replace(/&#([0-9]{1,3});/gi, function(match, numStr) {
                            var num = parseInt(numStr, 10); // read num as normal number
                            return String.fromCharCode(num);
                        });
                    }

                    function SetWelcomeData(wObj) {
                        // 481 or 769
                        if (window.innerWidth < 769) {
                            $('.b1banner_text h1.White').html(wObj.titlemobile);
                            $('.b1banner_text h3.White').html(wObj.messagemobile);
                            $('.b1banner_text h1.White p').attr("style", "width:100% !important; overflow-wrap: break-word;");
                        } else if (window.innerWidth > 768) {
                            $('.b1banner_text h1.White').html(wObj.title);
                            $('.b1banner_text h3.White').html(wObj.msg);
                            //$('.b1banner_text h1.White').attr("style", "width:600px;");
                            //$('.b1banner_text h3.White').attr("style", "width:600px;");
                        }
                        if (wObj.heroimage)
                            $("#b1Main-Hero-banner").css('background', 'url(' + wObj.heroimage + ')');
                        else
                            $("#b1Main-Hero-banner").css('background', 'url(~/Static/img/CustomBlocks/B1/FPB-Hero-Personal-1A.jpg)');
                        if (wObj.linkurl != "" && wObj.linkurl != "#") {
                            // alert(wObj.linkname + wObj.linkurl);
                            $('#HeroButton').text(wObj.linkname);
                            $('#HeroButton').attr("href", wObj.linkurl);
                            $("#HeroButton").css('visibility', 'visible');
                        } else {

                            // $("#HeroButton").css('visibility', 'hidden');
                            $("#HeroButton").css('display', 'none');
                        }

                    }
                </script>
                <style>
                    .b1banner_text h1.White {
                        font-size: 55px;
                        font-family: &quot;
                        Prompt-SemiBold&quot;
                        ;
                        text-shadow: none;
                        margin-bottom: 15px;
                        color: #fff;
                    }

                    .b1banner_text h3.White {
                        font-size: 20px;
                        line-height: 32px;
                        font-family: &quot;
                        Prompt-Regular&quot;
                        ;
                        color: #fff;
                    }

                </style>

                <section class="row-full b1">
                    <div id="b1Main-Hero-banner" class="b1hero_banner">
                        <div class="b1banner-desc">
                            <div class="container">
                                <div class="row b1mobile">
                                    <div class="col-md-8 col-xs-12 col-sm-6 mobile-show">
                                        <div class="b1banner_text">
                                            <h1 class="White"></h1>
                                            <h3 class="White"></h3>
                                            <a id="HeroButton"></a>

                                        </div>
                                    </div>


                                    <div class="col-md-4 col-xs-6 col-sm-6 mobile-show">
                                        <div class="b1login_Box">
                                            <form name="Q2OnlineLogin"
                                                action="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                                method="post">
                                                <h3>Access Your Account</h3>
                                                <div class="b1access">Access your First PREMIER Bank account.</div>
                                                <div class="form-group">
                                                    <select id="AccessAccountDropdown" class="form-control">
                                                        <option value="" id="selectaccount">Select Account Type</option>
                                                        <option value="https://www.mypremiercreditcard.com/login.aspx"
                                                            data-type="" id="creditcardpayment">Credit Card</option>
                                                        <option
                                                            value="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                                            data-type="actionitem" id="personalbanking">Personal Banking
                                                        </option>
                                                        <option
                                                            value="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                                            data-type="actionitem" id="businessbanking">Business Banking
                                                        </option>
                                                        <option value="https://firstpremier.fdecs.com/eCustService/"
                                                            data-type="" id="businessrewards">Business Rewards Credit Card
                                                        </option>
                                                        <option value="https://goldleafach.com/ach/signin.aspx?218264CB36"
                                                            data-type="" id="achonline">ACH Online</option>
                                                        <option value="https://icp.infovisa.com/0309/" data-type=""
                                                            id="trust">Trust Online</option>
                                                        <!--https ://www.mauiweb1.com/0309"-->
                                                        <option
                                                            value="https://myaccount.iconnect2invest.com/bankr/login.do?webcontext=iconnect"
                                                            data-type="" id="investmentservices">Brokerage Account</option>
                                                        <option
                                                            value="https://firstpremier.mymortgage-online.com/?borrowerportal&siteid=9621968476"
                                                            data-type="" id="mortgage">Mortgage Application</option>
                                                    </select>
                                                </div>
                                                <div class="hide" id="Q2Login">
                                                    <div class="form-group">
                                                        <label for="user_id" style="color:#7c91b1">Login ID</label>
                                                        <input name="user_id" class="form-control" id="user_id"
                                                            placeholder="Enter Login ID" type="text" autocomplete="off">
                                                        <span
                                                            class="glyphicon glyphicon-remove form-control-feedback hide"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" style="color:#7c91b1">Password</label>
                                                        <input name="password" class="form-control" id="password"
                                                            placeholder="Enter Password" type="password" autocomplete="off">
                                                        <span
                                                            class="glyphicon glyphicon-remove form-control-feedback hide"></span>
                                                    </div>
                                                </div>
                                                <div id="loginLine" class="text-center b1smallLine">
                                                    <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/small_line.png') }}"
                                                        alt="">
                                                </div>

                                                <button class="b1btn-login"> Login </button>
                                            </form>
                                            <a class="b1link_access" href="../pages/resources/enrollment/index.html">Set up
                                                online access <img
                                                    src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/arrow_line.png') }}"
                                                    style="height:11px;" /></a>

                                        </div>

                                        <div class="b1offerbox_lg">
                                            <div class="b1banner_flex_img">
                                                <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/money_vector.png') }}"
                                                    alt="Respond to a credit card offer">
                                            </div>
                                            <div class="b1banner_flex_text">
                                                <h3>Respond to a Credit Card Offer <a class="b1learn_more"
                                                        href="https://www.premiercardoffer.net/?mkt=8&amp;submkt=3025&amp;pid=009&amp;ptc=VCL&amp;dsc=W218">Learn
                                                        more <img
                                                            src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/arrow_line.png') }}"
                                                            style="height:11px;"> </a></h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="b1offerbox col-xs-12 col-sm-12 col-md-12">
                                    <div class="b1login_Box_2">
                                        <div class="b1banner_flex_img">
                                            <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/money_vector.png') }}"
                                                alt="Respond to a credit card offer">
                                        </div>
                                        <div class="b1banner_flex_text">
                                            <h2>Respond to a Credit Card Offer <a class="b1learn_more"
                                                    href="https://www.premiercardoffer.net/?mkt=8&amp;submkt=3025&amp;pid=009&amp;ptc=VCL&amp;dsc=W218">Learn
                                                    more<img
                                                        src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/arrow_line.png') }}"></a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    document.getElementById("user_id").value = '';
                    document.getElementById("password").value = '';
                </script>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <h2 style="text-align:center !important;">Banking for Every Business</h2>
                            <div class="xhtml">
                                <p style="text-align: center;">At First PREMIER Bank, we take your success personally. Our
                                    customer-focused team of experienced</p>
                                <p style="text-align: center;">business bankers work together to provide customizable
                                    financial solutions.</p>
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
            <div class="block b09block  col-md-12">
                <style>
                    .col-lg-4.col-md-12.col-sm-12.b9student_parent_main.no-pad.b9small_growth_box.last {
                        margin-right: 0px;
                    }

                    .b9readmore {
                        text-align: center;
                        width: 185px;
                        min-width: 185px;
                        height: 40px;
                        line-height: 25.6px;
                        background: #42967d;
                        border-radius: 20px;
                        border: transparent;
                        font-family: "Prompt-Bold";
                        font-size: 12px;
                        color: #ffffff;
                        text-transform: uppercase;
                        display: block;
                        letter-spacing: 1px;
                        box-shadow: 0px 4px 8px 0px rgba(48, 64, 75, 0.09);
                        padding: 8px 0px 0px 0px !important;
                        margin-top: 20px;
                    }

                    .b9readmore:hover {
                        background: #1c7158;
                    }

                </style>
                <section>
                    <div class="b9banking_confident_main">
                        <div class="container">
                            <div class="col-lg-12 b9student_parent_main_section no-pad">



                                <div class="col-lg-8 col-md-12 col-sm-12 b9student_parent_main no-pad ">
                                    <div class="b9student_parent_main_img"><img
                                            src="{{ asset('assets/frontend/contentassets/5ec1a3341efd49889c1a4631099a266c/jordan_huisman_think3d.jpg') }}"
                                            alt="woman small business owner in her shop"></div>
                                    <div class="b9student_parent_main_content">
                                        <div class="b9avtar"><img
                                                src="{{ asset('assets/frontend/globalassets/images/_replace/_filled/round1.png') }}"
                                                title="Bank with Confidence" alt="check"></div>
                                        <div class="b9avtar_content">
                                            <span> Bank with Confidence</span>

                                            <div class="xhtml">
                                                <p>First PREMIER Bank provides powerful banking solutions for businesses of
                                                    every size, standing beside owners and their companies as they grow and
                                                    thrive.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b9small_growth_box_overlay">
                                        <div class="b9small_growth_boxtext b9student_parent_main no-pad">
                                            <div class="b9student_parent_main_content">
                                                <div class="b9avtar"><img
                                                        src="{{ asset('assets/frontend/globalassets/images/_replace/_filled/round1.png') }}"
                                                        alt="Bank with Confidence"></div>
                                                <div class="b9avtar_content">
                                                    <a href="business-checking/index.html">Bank with Confidence</a>

                                                    <p>First PREMIER Bank provides powerful banking solutions for businesses
                                                        of every size, standing beside owners and their companies as they
                                                        grow and thrive.</p>
                                                    <ul>

                                                        <li>
                                                            <a href="business-checking/index.html">Business Checking</a>
                                                        </li>

                                                        <li>
                                                            <a href="business-checking/overdraft-protection/index.html">Overdraft
                                                                Protection</a>
                                                        </li>

                                                        <li>
                                                            <a href="savings-and-cds/index.html">Savings &amp; CDs</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="business-checking/security-and-fraud-protection/index.html">Security
                                                                &amp; Fraud Prevention</a>
                                                        </li>

                                                    </ul>
                                                    <div class="b9confidence_links">
                                                        <a href="business-checking/compare-business-checking/index.html"
                                                            class="b9readmore">Compare Checking</a>
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 col-md-12 col-sm-12 b9student_parent_main b9student_parent_right_main no-pad">
                                    <div class="payments_section">
                                        <span> Accept Payments</span>


                                        <ul>

                                            <li>
                                                <a href="business-services/merchant-card-services/index.html">Merchant Card
                                                    Services</a>
                                            </li>

                                            <li>
                                                <a href="business-services/lockbox-services/index.html">Lockbox Services</a>
                                            </li>

                                            <li>
                                                <a href="business-services/remote-deposit/index.html">Remote Deposit</a>
                                            </li>

                                            <li>
                                                <a href="online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="payments_section">
                                        <span>Make Payments</span>


                                        <ul>

                                            <li>
                                                <a href="business-services/make-payments/index.html">ACH Payroll &amp;
                                                    Account Management</a>
                                            </li>

                                            <li>
                                                <a href="business-services/business-rewards-mastercard/index.html">Business
                                                    Rewards Mastercard</a>
                                            </li>

                                            <li>
                                                <a href="business-checking/business-debit-mastercard/index.html">Business
                                                    Debit Card</a>
                                            </li>

                                            <li>
                                                <a href="online-and-mobile/bill-pay/index.html">Online Bill Pay</a>
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 b9student_parent_main_section no-pad">
                                <div class="col-lg-4 col-md-12 col-sm-12 b9student_parent_main no-pad b9small_growth_box">
                                    <div class="b9student_parent_main_img"><img
                                            src="{{ asset('assets/frontend/contentassets/5ec1a3341efd49889c1a4631099a266c/conf_img1.jpg') }}"
                                            title="Finance Growth" alt="two men with hardhats looking at blueprints"></div>
                                    <div class="b9student_parent_main_content finance_growth">
                                        <div class="b9glow_content" style="min-height:33px;">
                                            <h3> Finance Growth</h3>
                                        </div>
                                    </div>
                                    <div class="b9small_growth_box_overlay b9bg-box-overlay">
                                        <div class="b9small_growth_boxtext">
                                            <h3>Finance Growth</h3>

                                            <ul>

                                                <li>
                                                    <a href="loans-and-credit-lines/small-business-loans/index.html">Small
                                                        Business Loans</a>
                                                </li>

                                                <li>
                                                    <a href="loans-and-credit-lines/business-lines-of-credit/index.html">Business
                                                        Lines of Credit</a>
                                                </li>

                                                <li>
                                                    <a href="loans-and-credit-lines/commercial-real-estate/index.html">Commercial
                                                        Real Estate</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 b9student_parent_main no-pad b9small_growth_box">
                                    <div class="b9student_parent_main_img"><img
                                            src="{{ asset('assets/frontend/contentassets/5ec1a3341efd49889c1a4631099a266c/conf_img2.jpg') }}"
                                            title="Finance Growth" alt="up close image of woman"></div>
                                    <div class="b9student_parent_main_content finance_growth">
                                        <div class="b9glow_content" style="min-height:33px;">
                                            <h3>Protect Your Assets</h3>
                                        </div>
                                    </div>
                                    <div class="b9small_growth_box_overlay b9bg-box-overlay">
                                        <div class="b9small_growth_boxtext">
                                            <h3>Protect Your Assets</h3>

                                            <ul>

                                                <li>
                                                    <a href="../personal/investing/insurance/index.html">Insurance</a>
                                                </li>

                                                <li>
                                                    <a href="asset-management-and-trust/employee-benefits/index.html">Employee
                                                        Benefits</a>
                                                </li>

                                                <li>
                                                    <a href="business-checking/security-and-fraud-protection/index.html">Security
                                                        &amp; Fraud Protection</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 col-md-12 col-sm-12 b9student_parent_main no-pad b9small_growth_box last">
                                    <div class="b9student_parent_main_img"><img
                                            src="{{ asset('assets/frontend/contentassets/5ec1a3341efd49889c1a4631099a266c/conf_img3.jpg') }}"
                                            title="Invest for the Future" alt="two business men looking at laptop"></div>
                                    <div class="b9student_parent_main_content finance_growth">
                                        <div class="b9glow_content" style="min-height:33px;">
                                            <h3>Invest for the Future</h3>
                                        </div>
                                    </div>
                                    <div class="b9small_growth_box_overlay b9bg-box-overlay">
                                        <div class="b9small_growth_boxtext">
                                            <h3>Invest for the Future</h3>

                                            <ul>

                                                <li>
                                                    <a
                                                        href="asset-management-and-trust/business-planning-investment/index.html">Business
                                                        Planning &amp; Investment</a>
                                                </li>

                                                <li>
                                                    <a href="asset-management-and-trust/group-retirement-plans/index.html">Group
                                                        Retirement Plans</a>
                                                </li>

                                                <li>
                                                    <a href="asset-management-and-trust/first-premier-at-work/index.html">PREMIER
                                                        at Work</a>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b06block  col-md-12">
                <style>
                    .b06carousel-inner {
                        position: relative;
                        width: 60% !important;
                        overflow: hidden;
                        margin: 0 20% 0 19% !important;
                        height: 268px;
                    }

                    .b06carousel-control .glyphicon-chevron-left::before,
                    .glyphicon-chevron-right::before {
                        content: "" !important;
                    }

                    .b06carousel-control:focus,
                    .b06carousel-control:hover,
                    .b06carousel-control.left,
                    .b06carousel-control.right {
                        background: none !important;
                    }

                    .b06carousel-control {
                        z-index: 999;
                        opacity: inherit !important;
                    }

                    .b06carousel-inner>.item.next.left,
                    .carousel-inner>.item.prev.right,
                    .carousel-inner>.item.active {
                        transform: inherit !important;
                    }

                    .b06carousel-inner>.item {
                        perspective: inherit !important;
                    }

                    .b06carousel-control.left {
                        left: -3% !important;
                    }

                    @media only screen and (max-width:1366px) {

                        /*#region B-6*/
                        .b06carousel-inner {
                            width: 80% !important;
                            margin: 0 10% 0 10% !important;
                        }

                        /*#endregion*/
                    }

                    @media only screen and (max-width:1000px) {

                        /*#region B-6*/
                        .b06carousel-control.left {
                            left: 0 !important;
                        }

                        .b06carousel-control .glyphicon-chevron-left,
                        .carousel-control .glyphicon-chevron-right,
                        .carousel-control .icon-next,
                        .carousel-control .icon-prev {
                            top: 50% !important;
                        }

                        .b06carousel-control {
                            width: 10% !important;
                        }

                        .glyphicon-chevron-left img,
                        .glyphicon-chevron-right img {
                            width: 100%;
                        }

                        .b06carousel-inner {
                            height: 320px;
                        }

                        /*#endregion*/
                    }

                    @media screen and (max-width: 767px) {

                        /*#region B-6*/
                        .b06carousel-inner {
                            height: 300px;
                        }

                        /*#endregion*/
                    }

                </style>
                <script type="text/javascript">
                    $('#b06Carousel').carousel({
                        interval: 80000,
                    })
                </script>





                <section class="row-full">
                    <div class="b6featured_quote_main">
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg.png') }}"
                            class="b6featured_bg" alt="First PREMIER Bank">
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg_small.png') }}"
                            class="b6featured_bg_small_bg" alt="First PREMIER Bank">
                        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
                            <div class="">
                                <div class="carousel-inner b06carousel-inner">
                                    <div class="item active">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src="{{ asset('assets/frontend/contentassets/47b9a906e4ae4d9586caaaad5e248d9d/quote_luke_tibbetts.jpg') }}"
                                                    class="b6featured_img" alt="Luke Tibbetts VP of Business Banking"></div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>First PREMIER helps give small businesses a competitive edge by making
                                                    the management of accounts payable and receivable -- and even payroll --
                                                    a whole lot easier.</p>
                                                <div class="clearfix"></div><span> - Luke Tibbetts, VP, Business
                                                    Banking</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
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
                                                    href='ag-banking/index.html'><img
                                                        src='{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/nature/bright-nature-secondary-icon-5.png') }}'
                                                        alt='Growing Plant' border='0' /></a><span><a
                                                        href='ag-banking/index.html'>We Know Agribusiness</a></span>
                                                <div class="xhtml">
                                                    <p>&nbsp;</p>
                                                    <p>Whether you run a small family farm or a large agricultural
                                                        operation, our Ag Bankers know how to bring the banking, finance,
                                                        insurance and treasury solutions to help.</p>
                                                    <p>&nbsp;</p>
                                                </div>
                                            </div>
                                            <div class='col-md-4 col-sm-6 b11anytime_box'><a
                                                    href='business-services/business-rewards-mastercard/index.html'><img
                                                        src='{{ asset('assets/frontend/globalassets/images/secondary-icons/blue/business-finance/blue-business-_-finance-secondary-icon-25.png') }}'
                                                        alt='Mastercard' border='0' /></a><span><a
                                                        href='business-services/business-rewards-mastercard/index.html'>Business
                                                        Rewards Mastercard®</a></span>
                                                <div class="xhtml">
                                                    <p>A great way to streamline expense management, while reaping some nice
                                                        rewards like 1% cash back for qualified purchases, rental car and
                                                        purchase insurance and more.</p>
                                                </div>
                                            </div>
                                            <div class='col-md-4 col-sm-6 b11anytime_box'><a
                                                    href='business-services/make-payments/index.html'><img
                                                        src='{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/business-finance/gold-business-_-finance-secondary-icon-31.png') }}'
                                                        alt='Money' border='0' /></a><span><a
                                                        href='business-services/make-payments/index.html'>Employee
                                                        Payroll</a></span>
                                                <div class="xhtml">
                                                    <p>&nbsp;</p>
                                                    <p>With ACH online, you can affordably set up direct deposit and manage
                                                        employee payroll, tax payments and expense reimbursement
                                                        electronically.</p>
                                                    <p>&nbsp;</p>
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
            <div class="block b10block  col-md-12">

                <section class="row-full">

                    <!--First Premier work start-->
                    <div class="b10first_premier_main">
                        <div class="container">
                            <div class="b10first_premier">
                                <h2>Why Bank with First PREMIER?</h2>
                            </div>
                            <div class="b10panel-group" id="accordion">
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_0"><span> One of the Strongest Banks in the Nation
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_0" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>As a debt-free, privately owned $2 billion bank, First PREMIER is one of
                                                    the strongest capitalized banks in the country. We ranked 17th in the
                                                    nation for banks with more than $1 billion in assets by American Banker
                                                    Magazine. We are consistently ranked as a top-performing banks for asset
                                                    size by the American Banking Association's Banking Journal.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_1"><span> Serving Businesses of Every Size </span></a></h3>
                                    </div>
                                    <div id="collapse_1" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Our integrated business model bridges business banking with our treasury
                                                    and asset management teams. We work together to provide market-leading
                                                    banking, lending and treasury services solutions that are "right-sized"
                                                    for business needs and flexible to scale for future growth.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_2"><span> Personal Service & Local Decision Making
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_2" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Our bankers take the time to learn about you. Once they understand your
                                                    business goals, they will help you find the banking products and
                                                    financial solutions that fit your needs today, and support you as your
                                                    business grows.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_3"><span> FREE Leading Edge Online & Mobile Tools
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_3" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Our secure Online and Mobile Banking gives you 24/7 access over your
                                                    accounts with multi-tiered security and administrative control. Enjoy
                                                    great features including eStatements, Bill Pay, account alerts &amp;
                                                    notifications, debit card lock and unlock, administrative controls and
                                                    more! Our Debit Mastercard&reg; and Business Rewards Mastercard&reg;
                                                    credit cards also work with mobile wallet technology. Best of all, First
                                                    PREMIER Business Online and Mobile Banking are FREE of charge to First
                                                    PREMIER Banking customers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_4"><span> Locally Grown, Nationally Known </span></a></h3>
                                    </div>
                                    <div id="collapse_4" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>We serve local, regional and national clients with pride. First PREMIER
                                                    is the 14th largest ACH Originating Bank in the USA and the 12th largest
                                                    issuer of Mastercard&reg; in the country. We are also honored to have
                                                    served as the bank for the State of South Dakota for 20+ years (1999),
                                                    as well as the bank for the City of Sioux Falls for 15+ years (2004).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_5"><span> A Champion for Customers & Community </span></a>
                                        </h3>
                                    </div>
                                    <div id="collapse_5" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>We serve our local, regional and national clients with pride and personal
                                                    customer care. We are active supporters of more than 600 charities and
                                                    non-profits. Last year alone, our associates contributed over 32,000
                                                    hours of community service. We also take care of our employees. From
                                                    2015-2020, we were ranked as one of the Best Banks to Work For by
                                                    American Banker and Best Companies Group.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!--First Premier work end-->
                </section>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                        </div>
                    </div>
                </section>
                <script>
                    $(".b9confidence_links a:nth-child(2)").css("display", "none");
                    $(".b11firstpremier_box_main .b11anytime_box:nth-child(2) span a").text('');
                    $(".b11firstpremier_box_main .b11anytime_box:nth-child(2) span a").html('Business Rewards Mastercard<sup>®</sup>');;
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
                background: url('../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat;
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
    <div class="smallLogo"><a href="../index.html" title="First PREMIER Bank - Home"><img
                src="{{ asset('assets/frontend/Static/gfx/Logo.png') }}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
    <script type="text/javascript">
        if (FindApi) {
            var api = new FindApi();
            api.setApplicationUrl('../../index.html');
            api.setServiceApiBaseUrl('../../find_v2/index.html');
            api.processEventFromCurrentUri();
            api.bindWindowEvents();
            api.bindAClickEvent();
            api.sendBufferedEvents();
        }
    </script>

    <script type="text/javascript" src="../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../Static/js/Blocks_2019062002.js"></script>

@endsection
