@extends('frontend.layouts.app')
@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <div class="row equal-height">
            <div class="block b44block  col-md-12">
                <style>
                    .b44header {
                        min-height: 245px;
                        width: 100%;
                        background: #fff url(../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat;
                        float: left;
                        padding-top: 60px;
                    }

                </style>
                <section class="row-full">
                    <div class="b44header">
                        <div class="container">
                            <h1>Our Culture</h1>

                            <ul>

                                <li>
                                    <a href="../../index.html">About First PREMIER</a>
                                </li>

                                <li>
                                    <a href="../index.html">Careers</a>
                                </li>

                                <li>
                                    <a href="index.html">Our Culture</a>
                                </li>

                            </ul>
                            <img class="img-responsive"
                                src="../../../../../contentassets/9b61f94dd0c949e2966118906f8479bd/0.5.15.1_b-44-hero_culture-min.png"
                                alt="" border="0" />
                            <center>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </center>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b04block col-md-12" style="float:left !important;">
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <h2 style="text-align:left !important;">Culture Begins The PREMIER Way</h2>
                            <div class="xhtml">
                                <p>At First PREMIER Bank and PREMIER Bankcard, we believe associates are our most
                                    valuable resource. We work hard to attract, retain and reward bright, motivated,
                                    proactive associates who embrace The PREMIER Way in their own individual pursuit of
                                    excellence. <br /><br /></p>
                                <h3>One of the Nation's Best Banks to Work For</h3>
                                <p><br />The PREMIER culture starts with associates who enjoy their work, demonstrate a
                                    hunger to learn and grow, positively contribute to a unified environment and share a
                                    passion to serve others. We demonstrate our values by taking great care of our
                                    associates and to treat them in a way that makes them feel valued, respected and
                                    rewarded. Our focus on creating a great environment for associates has resulted in
                                    PREMIER being listed as one of the nation&rsquo;s &ldquo;Best Banks to Work
                                    for&rdquo; from 2015-2020. <br /><br />SEE ALSO: <a
                                        href="https://www.americanbanker.com/slideshow/best-banks-to-work-for?brief=00000158-07c7-d3f4-a9f9-37df9bc10000">BEST
                                        BANKS TO WORK FOR</a><br /><br /></p>
                                <h3>Offering Competitive &amp; Rewarding Benefits</h3>
                                <p><br />We take special care to reward our associates for their engagement,
                                    contributions and success. First PREMIER Bank and PREMIER Bankcard offer competitive
                                    salaries, employee resources and benefits. We extend beyond this to foster a
                                    healthy, fun and rewarding environment where people enjoy investing their time and
                                    talent for the long-term.<br /><br />SEE ALSO: <a title="Employee Benefits"
                                        href="{{route('frontend.en.pages.about.careers.our-benefits')}}">EMPLOYEE BENEFITS</a>&nbsp;<br /><br /></p>
                                <h3>Supporting Growth and Learning</h3>
                                <p><br />We are dedicated to the professional development of our associates and provide
                                    paid internships and various academic scholarships for
                                    students.&nbsp;<br /><br />SEE ALSO:&nbsp;<a title="Internships &amp; Scholarships"
                                        href=".{{route('frontend.en.pages.about.careers.our-benefits')}}">INTERNSHIPS
                                        &amp; SCHOLARSHIPS</a>&nbsp;<br /><br /></p>
                                <h3>Giving Back to Community</h3>
                                <p><br />Our culture of generosity extends to the communities we serve and PREMIER
                                    associates are encouraged to donate their time, talents and resources whenever
                                    possible. Toward this goal, paid time off is provided to all associates who
                                    participate in community projects, and our associates are also rewarded for donating
                                    to the United Way.<br /><br />SEE ALSO: <a title="Community Giving"
                                        href="../../community/philanthropic-giving/index.html">PHILANTHROPIC
                                        GIVING</a>&nbsp;<br /><br /></p>
                                <h3>Celebrating &amp; Rewarding Success</h3>
                                <p><br />While banking is a serious business, we also believe in celebrating our success
                                    and having fun. We love to host out-of-the-box events where we give away prizes and
                                    bring in outstanding talent to entertain our associates. Our associates are our most
                                    valuable resource, and that&rsquo;s why we believe it should be a priority to
                                    celebrate and reward the individuals who have served our clients and company
                                    well.<br /><br />SEE ALSO: <a title="Celebrations &amp; Appreciations"
                                        href="../../community/celebration/index.html">CELEBRATIONS &amp;
                                        APPRECIATIONS</a>&nbsp;<br /><br /></p>
                                <h3>Promoting Employee Health &amp; Wellness</h3>
                                <p><br />We promote healthy life choices through our Kick Start initiatives, which
                                    provide reimbursement for gym memberships, financial health seminars, regular health
                                    screenings and fun activities like 5K runs, fresh fruit deliveries and
                                    more.<br /><br />SEE ALSO: <a title="EMPLOYEE BENEFITS"
                                        href="{{route('frontend.en.pages.about.careers.our-benefits')}}">EMPLOYEE BENEFITS</a></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p><br /><br /></p>
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
                        width: 50%;
                    }

                    .b13what_you_know_main_white ol li ol li {
                        width: 50%;
                    }

                </style>
                <script>
                    $(document).ready(function() {
                        //GetDisclosurePoints();
                        GetDisclosurePointsBrackets();
                    });
                </script>
                <section class="row-full">
                    <div class="b13what_you_know_main">
                        <div class="container" style="background-color:#182e39 !important;">

                            <h4> Disclosure </h4>
                            <div class="b13points">
                                <p>First PREMIER Bank and PREMIER Bankcard are Equal Opportunity and Affirmative Action
                                    Employers and do not discriminate minority/sex/disability/vet/any protected status.
                                </p>
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
                                <a href="../../index.html">About Us</a>
                            </li>

                            <li>
                                <a href="../../../../index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="../../leadership-team/index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="../../community/index.html">Community</a>
                            </li>

                            <li>
                                <a href="../index.html">Careers</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                        <div class="footerHeader">Customers</div>

                        <ul>

                            <li>
                                <a href="../../../../index.html">Personal Banking</a>
                            </li>

                            <li>
                                <a href="../../../../small-business/index.html">Small Business</a>
                            </li>

                            <li>
                                <a href="../../../../commercial/index.html">Commercial</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>

                        <ul>

                            <li>
                                <a href="../../../quick-links/customer-care/index.html">Customer Care</a>
                            </li>

                            <li>
                                <a href="../../../quick-links/locations/index.html">Locations</a>
                            </li>

                            <li>
                                <a href="../../../quick-links/customer-care/index.html">BANK: 800-501-6535</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                            </li>

                            <li>
                                <a href="../../../../index.html">Routing Number: 091408598</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                        <div class="footerHeader">Legal Notices</div>

                        <ul>

                            <li>
                                <a href="../../../resources/first-premier-privacy-statement-2020/index.html">Privacy
                                    Notice &amp; Statement</a>
                            </li>

                            <li>
                                <a href="../../../resources/legal-disclosures/index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="../../../resources/cookie-policy/index.html">Cookie Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:50px;">
                        <p>Member FDIC | <img src="../../../../../Static/img/equalhousinglender.png"
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
                background: url('../../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat;
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
@endsection
