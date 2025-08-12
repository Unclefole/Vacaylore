@extends('layouts.main')
@section('content')
    @push('css')
        <style>.table-bordered > :not(caption) > * > * {
                border-width: 0 1px;
                color: white;
            }</style>
    @endpush
    <section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <div class="about_con text_main"><h3><strong>Cookie Policy</strong> ivacay</h3>
                            <p>Last updated on <b>July 26, 2022.</b></p>
                            <p>This policy describes how <u><b>Ivacay,</b> having its office at <b> Po Box 81027, Rancho
                                        Santa Margarita, California –
                                        92688</b></u> (hereinafter referred to as the <b>“Ivacay”</b> or <b>“we”</b> or
                                <b>“our”</b> or <b>“us”</b>) uses cookies on <a href="{{route('UI_index')}}">
                                    www.ivacay.co/</a> (the
                                <b>“Site”</b>). We recommend that you also consult our <b>Privacy Policy </b> for
                                additional information on how we collect
                                and use information collected from visitors to the Site. This policy is effective from
                                the <i>‘Last Updated’</i> date
                                mentioned above. Your continued use of the Site after that will signify your acceptance
                                of this policy. We may
                                modify this Agreement without notifying you, so please check back often for updates.</p>
                            <p>By using the Site, you agree that we can use the cookies described in this Cookie Policy.
                                You can stop cookies
                                by changing the settings in your browser (<i>more information on how to do this is
                                    provided below</i>).</p>
                            <h2>WHAT ARE COOKIES?</h2>
                            <p>Cookies are text files, containing small amounts of information, which are downloaded to
                                your browsing device
                                (such as a computer or smartphone) when you visit a website. Cookies can be recognized
                                by the website that
                                downloaded them — or other websites that use the same cookies. This helps websites know
                                if the browsing
                                device has visited them before.</p>
                            <h2>WHAT ARE COOKIES USED FOR?</h2>
                            <p>Cookies do lots of different jobs, like helping us understand how the Site is being used,
                                letting you navigate
                                between pages efficiently, remembering your preferences, and generally improving your
                                browsing experience.
                                Cookies can also help ensure marketing you see online is more relevant to you and your
                                interests.
                            </p>
                            <p>We use cookies to recognize your browser or device, learn more about your interests, and
                                provide you with
                                essential features and services and for additional purposes, including:</p>
                            <p>● Keeping track of your specific preferences.</p>
                            <p>● Conducting research and diagnostics to improve our content, products, and services.
                            </p>
                            <p>● Preventing fraudulent activity</p>
                            <p>● Improving security.</p>
                            <p>● Delivering content, including ads relevant to your interests.</p>
                            <p>● For measuring and analyzing the performance of our services.</p>
                            <p>Our cookies allow you to take advantage of some of our essential features.</p>
                            <h2>WHAT TYPES OF COOKIES DO WE USE?</h2>
                            <p>The type of cookies used on most websites can generally be put into one of six
                                categories: <u><b><i>Strictly Necessary,
                                            Performance, Functionality, Flash, Tailored Content and
                                            Targeting.</i></b></u> In order to provide you with the best
                                browsing experience, Ivacay uses <u><b><i>Strictly Necessary and Performance Cookies</i></b></u>
                                on the Site. You can find out
                                more about each cookie category in the sections below.</p>
                            <h2>Strictly Necessary Cookies:-</h2>
                            <p>These cookies are essential, as they enable you to move around the Site and use its
                                features, such as accessing
                                secure areas. Without these cookies, some services you have asked for such as payment
                                submission can’t be
                                provided.</p>
                            <h2>Performance Cookies:-</h2>
                            <p>These cookies collect information about how you use the Site, for example which pages you
                                go to most often
                                and if you get error messages from certain pages. These cookies don’t gather information
                                that identifies you. All
                                information these cookies collect is anonymous and is only used to improve how the Site
                                works</p>
                            <h2>HOW LONG WILL COOKIES STAY ON MY BROWSING DEVICE?</h2>
                            <p>The length of time a cookie will stay on your browsing device depends on whether it is a
                                “persistent” or
                                “session” cookie. Session cookies will only stay on your device until you stop browsing.
                                Persistent cookies stay
                                on your browsing device until they expire or are deleted.</p>
                            <h2>FIRST AND THIRD-PARTY COOKIES</h2>
                            <p>First party cookies are cookies that belong to us, while third party cookies are cookies
                                that another party places
                                on your browsing device through our Site. For example, a third party website will place
                                a cookie on your
                                browsing device if you click on such a third-party website link when browsing the
                                Site.</p>
                            <table class="table table-responsive table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>COOKIE NAME</th>
                                    <th>PURPOSE</th>
                                    <th>DURATION</th>
                                    <th>CATEGORY</th>
                                <tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>XSRF-TOKEN</td>
                                    <td>Used for Form Post Code</td>
                                    <td>POST</td>
                                    <td>Record Send</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Login</td>
                                    <td>Used in connection with user login</td>
                                    <td>60 minutes</td>
                                    <td>Essential</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cache</td>
                                    <td>Browser Temporary History</td>
                                    <td>60 minutes</td>
                                    <td>Essential</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>REST API Mobile</td>
                                    <td>Sactum Auth</td>
                                    <td>60 minutes</td>
                                    <td>Essential</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>ALL Data</td>
                                    <td>Data send in JSON format</td>
                                    <td>-</td>
                                    <td>Essential</td>
                                </tr>
                                </tbody>
                            </table>
                            <h2>HOW TO CONTROLAND DELETE COOKIES THROUGH YOUR BROWSER</h2>
                            <p>The browser you are using to view the Site can enable, disable or delete cookies. To do this, follow the
                                instructions provided by your browser (<i>usually located within the “Help,” “Tools” or “Edit” facility</i>). Please
                                note that if you set your browser to disable cookies, you may not be able to access certain parts of the Site.
                                Other parts of the Site may also not work properly. You can find out more information about how to change your
                                browser cookie settings at <a href="#">www.allaboutcookies.org.</a></p>
                            <h2>Do you have questions or concerns about this Cookie Policy?</h2>
                            <p>In the event you have any grievance regarding anything related to this Cookie Policy, in that case you may freely
                                write your concerns through your registered email to Grievance Officer/Designated Representative to below:</p>
                            <p>● <strong>Name:</strong> Francis Banda</p>
                            <p>● <strong>Email:</strong> <a href="mailto:combinedsun@icloud.com">combinedsun@icloud.com</a></p>
                            <p>● <strong>Phone:</strong> 9499935368</p>
                            <p>● <strong>Postal:</strong> Po Box 81027, Rancho Santa Margarita, California – 92688</p>
                            <h2>UPDATES TO THIS POLICY</h2>
                            <p>We may add to or change or update this <b>Cookie Policy</b> at any time, from time to time, entirely at our own
                                discretion, with or without any prior written notice. You are responsible for checking this Policy periodically.
                                Your use of the Platform after any amendments to this Policy shall constitute your acceptance to such
                                amendments.</p>
                            <h2>Contacting Us</h2>
                            <p>If you have any questions about this Cookie Policy, please contact us at <a href="mailto:combinedsun@icloud.com" >combinedsun@icloud.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <div class="container about_con">--}}

    {{--    </div>--}}
@endsection