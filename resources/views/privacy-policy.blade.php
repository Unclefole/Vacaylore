@extends('layouts.main')
@section('content')
    @push('css')
        <style>.table-bordered > :not(caption) > * > * {
                border-width: 0 1px;
                color: white;
            }

            .tb_text_left {
                text-align: left;
            }

            td.tb_text_left {
                padding: 0 40px 0;
            }

            a.scroll_smooth {
                scroll-behavior: smooth;
            }
        </style>
    @endpush
    <section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <div class="about_con text_main">
                            <h3><strong>Privacy-Policy</strong> ivacay</h3>
                            <p>This notice describes the privacy policy (<b>“Privacy Policy” </b> or <b> “Policy”</b>)
                                of <a href="{{route('UI_index')}}"> www.ivacay.co/ </a>(hereinafter referred to
                                as the <b>“platform”</b> or <b>“website”</b> or <b> “site”</b>) which is operated by <u><b>Ivacay,</b>
                                    having its office at <b>Po Box 81027, Rancho
                                        Santa Margarita, California - 92688</b></u> (hereinafter referred to the <b>
                                    “Company”</b> or <b>“Ivacay” </b> or <b>“us” </b> or <b>“our” </b> or
                                <b>“we”</b>). In this Policy, you shall be referred as <b> “you”</b> or <b>“your”</b> or
                                <b>“user(s)”</b> or <b>“buyer(s)”</b> or <b>“Service
                                    Provider(s)”</b>.</p>
                            <p>This Privacy Policy explains what information of yours will be collected by us when you
                                register on or access the
                                Site, or create profile as a Service Provider or as a user/buyer, list your services,
                                how the information will be used,
                                and how you can control the collection, correction, and/or deletion of the information.
                                We will not knowingly use or
                                share your information with anyone, except as described in this Privacy Policy. The use
                                of information collected
                                through our Platform shall be limited to the purposes described under this Privacy
                                Policy and our User
                                Agreement/Service Provider Terms (<i>as may be applicable to you</i>).</p>
                            <p>By registering on or using our Platform or providing your personal information to us or
                                by using other features and
                                functionalities of the Platform, you are accepting and consenting to the practices
                                described in this policy. Please note
                                that this includes consenting to the processing of any personal information that you
                                provide, as described below.</p>
                            <p><strong>IF YOU DO NOT AGREE WITH THESE PRACTICES, PLEASE DO NOT USE THE SERVICES OR THE
                                    WEBSITE OR PROVIDE US WITH ANY OF YOUR PERSONAL INFORMATION.</strong></p>
                            <table class="table table-responsive table-bordered table-striped">
                                <thead>
                                <th colspan="12"><strong>TABLE OF CONTENT</strong></th>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Particular</th>
                                <tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td class="tb_text_left">What information about the Customers and the Service
                                        Providers do we
                                        collect?
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td class="tb_text_left">Lawful basis for processing personal information
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td class="tb_text_left">How do we use this information?</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td class="tb_text_left">Deleting your information
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td class="tb_text_left">Cookie Policy
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td class="tb_text_left">Sharing of information
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td class="tb_text_left">Sharing of information
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td class="tb_text_left">Links to third party Apps
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td class="tb_text_left"> Rights of EU, EEA, and UK users
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td class="tb_text_left">California Resident Rights
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td class="tb_text_left">Notice for Nevada Residents
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td class="tb_text_left">How do we respond to legal requests?
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td class="tb_text_left">Children Privacy
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td class="tb_text_left">How do I withdraw my consent?
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td class="tb_text_left">Governing law and Dispute Resolution
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td class="tb_text_left">Do you have any questions or concerns about this privacy
                                        policy?
                                    </td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td class="tb_text_left">Welcoming of suggestions
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <h2><span>1.</span>What information about Customers and the Service Providers do we collect?
                            </h2>
                            <p class="left_text"><span class="left2">a)</span> <b>FOR CUSTOMERS ONLY:</b> We collect the
                                information you provide when you use our Site and our
                                services, including without limitation, when you sign up for an account, browse our
                                Platform, purchase any
                                of the tour or activity or package of the Service Provider, leave your feedback, engage
                                or interact with
                                content on the Site, engage with us through any social media platform, submit a
                                complaint, communicate or
                                interact with us in any manner. This can include <b> Personally Identifiable Information
                                    (PII)</b> as well as
                                <b>non-PII information. <u>The examples include your user name, full names of customers
                                        and other
                                        travelers/passengers, address, email ID, phone number, number of persons,
                                        starting point,
                                        destination, travel dates, other details that are required to provide
                                        service(s), your complaints, etc.</u></b>
                                We also collect information about how you use our services, such as the content you
                                engage with or the
                                frequency and duration of your activities.
                            </p>
                            <p class="left_text"><span class="left2">b)</span> <b>FOR SERVICE PROVIDERS ONLY:</b> We
                                collect the information you provide when you use our Site, and our services, including
                                without limitation, when you sign up for a Service Provider
                                Account, list any of your services/packages, withdraw the money into your bank account,
                                engage with us
                                through any social media platform, submit/ reply to a complaint, communicate or interact
                                with us in any
                                manner. This can include <b> Financial Information, Personally Identifiable Information
                                    (PII)</b> as well
                                as <b>non-PII information. <u>The examples include your User Type (Company or Individual
                                        Service Provider), Email ID, Mobile Number, Company/Service Provider Name, brief
                                        description about
                                        Company/Service Provider, location, ID or driver’s license, proof of insurance,
                                        criminal history
                                        and background checks (where indicated), and other details to provide the
                                        service(s), your queries, etc. </u></b>
                                We also collect information about how you use our services, such as the content you
                                engage with or the frequency and duration of your activities.
                            </p>
                            <p class="left_text"><span class="left2">c)</span> <b>Geolocation:</b> The Site collects
                                your geolocation with your permission for providing you one of the
                                essential features of our Site. If you decline permission for us to collect your precise
                                geolocation, we will
                                not collect it.</p>
                            <p class="left_text"><span class="left2">d)</span> <b>Information that we collect when you
                                    use the Platform:</b> We also collect information while you access,
                                browse, view or otherwise use the Site. In other words, when you access the Site, we are
                                aware of your
                                usage of the Site, and gather, collect and record the information relating to such
                                usage, including
                                geo-location information, device data and connection information, browser information
                                and web-log
                                information.</p>
                            <p class="left_text"><span class="left2">e)</span> <b>Information that we collect from third
                                    party sources: </b> You can engage with us through social media
                                platforms or mobile applications. When you engage with us through social media
                                platforms, such as
                                Facebook or Instagram or LinkedIn, you allow us to have access to certain information
                                from your social
                                media profile based upon your privacy preference settings on such platforms.</p>
                            <p class="left_text"><span class="left2">f)</span> <b>Payments: </b> When you make the
                                payment on Ivacay, then you provide our third-party payment service
                                provider with your credit or debit card or Stripe or crypto wallet information. We don’t
                                collect your
                                payment card details. For payments, we redirect you to our third-party payment service
                                provider, which
                                collects and processes your payment request.</p>
                            <p class="left_text"><span class="left2">g)</span> <b>Withdrawal Information: </b> If you
                                are a Service Provider, we collect your preferred payment method and its
                                required details. We will share this information with our third-party payment gateway
                                service providers to
                                process your withdrawal request.</p>
                            <p class="left_text"><span class="left2">h)</span> <b>Customer Care: </b> If you contact our
                                customer support via emails, in those cases, we collect all your
                                interactions with our customer support.</p>
                            <p class="left_text"><span class="left2">i)</span> <b>Good Judgment: </b> We suggest that
                                you exercise good judgment and caution while providing your personal
                                information.</p>
                            <h2><span>2.</span>What is the lawful basis for which we use your personal information?</h2>
                            <p class="left_text">You hereby acknowledge that all processing of your personal information
                                will be justified by a "lawful ground" for
                                processing. In the majority of cases, processing will be justified on the basis
                                that:</p>
                            <p class="left_text2">● <b>Consent: </b> You have given your consent for processing personal
                                data for one or more specific purposes.</p>
                            <p class="left_text2">● <b>Performance of a contract:</b> Provision of personal data is
                                necessary for the performance of an agreement
                                with you and/or for any pre-contractual obligations thereof.</p>
                            <p class="left_text2">● <b>Legal obligations:</b> Processing personal data is necessary for
                                compliance with a legal obligation to which
                                we are subject.</p>
                            <p class="left_text2">● <b>Vital interests: </b> Processing personal data is necessary in
                                order to protect your vital interests or of another
                                natural person.</p>
                            <p class="left_text2">● <b>Public interests: </b> Processing personal data is related to a
                                task that is carried out in the public interest or in
                                the exercise of official authority vested in the Company.</p>
                            <p class="left_text2">● <b>Legitimate interests: </b> Processing personal data is necessary
                                for the purposes of the legitimate interests
                                pursued by the Company.</p>
                            <p class="left_text">In any case, we will gladly help to clarify the specific legal basis
                                that applies to the processing, and in particular
                                whether the provision of personal data is a statutory or contractual requirement, or a
                                requirement necessary to enter
                                into a contract. <u>Feel free to contact us for this purpose at <a
                                            href="mailto:combinedsun@icloud.com">combinedsun@icloud.com.</a></u></p>
                            <h2><span>3.</span>How do we use this information?</h2>
                            <p class="left_text">We use all of the information we have to help us provide, support and
                                improve our services. We use the information
                                collected from you for one or more of the following purposes:</p>
                            <p class="left_text2"><span class="left2">a)</span>To create and update your account and
                                profile as a buyer or as a Service Provider;</p>
                            <p class="left_text2"><span class="left2">b)</span>To provide you the Services of our
                                marketplace platform;</p>
                            <p class="left_text2"><span class="left2">c)</span>To enable Service Provider to list
                                various tours, activities, packages and services;</p>
                            <p class="left_text2"><span class="left2">d)</span>To provide you the services requested by
                                you;</p>
                            <p class="left_text2"><span class="left2">e)</span>To assess queries, requirements, and
                                process requests for various services;</p>
                            <p class="left_text2"><span class="left2">f)</span>To process your payments and refunds (<i>if
                                    applicable</i>);</p>
                            <p class="left_text2"><span class="left2">g)</span>To cancel your appointments;</p>
                            <p class="left_text2"><span class="left2">h)</span>To process the withdrawal for Service
                                Providers;</p>
                            <p class="left_text2"><span class="left2">i)</span>To build custom packages for you;</p>
                            <p class="left_text2"><span class="left2">j)</span>To improve our Site and services;</p>
                            <p class="left_text2"><span class="left2">k)</span>To be able to deliver our services,
                                personalize content, and make suggestions for you by using this
                                information to understand how you use and interact with our services and the people or
                                things you’re
                                connected to and interested in on and off our services.</p>
                            <p class="left_text2"><span class="left2">l)</span>We use your information to send you
                                marketing communications, newsletter, communicate with you about
                                our services and let you know about our policies and terms. We also use your information
                                to respond to you
                                when you contact us.</p>
                            <p class="left_text2"><span class="left2">m)</span>We also use your information to ensure
                                our services are working as intended, such as tracking outages or
                                troubleshooting issues that you report to us. And we use your information to make
                                improvements to our
                                services.</p>
                            <p class="left_text2"><span class="left2">n)</span>We use information to help improve the
                                safety and reliability of our services. This includes detecting,
                                preventing, and responding to fraud, abuse, security risks, and technical issues that
                                could harm Company,
                                our community, or the public.</p>
                            <p class="left_text2"><span class="left2">o)</span>To respond to summons, court orders,
                                directions or other judicial processes.</p>
                            <p class="left_text2"><span class="left2">p)</span>To provide information to law enforcement
                                agencies or in connection with an investigation on matters
                                related to public safety.</p>
                            <h2><span>4.</span>Deleting your information</h2>
                            <p class="left_text">The account that you create, and the information that you provide us is
                                yours. You can at any time delete the same.
                                However, you acknowledge that we will not be able to remove the content that other users
                                have saved and copied,
                                and we may also retain some of the information so deleted for a reasonable period of
                                time in order to comply with
                                legal requests. You can request us to delete your information by writing to us at <a
                                        href="mailto:combinedsun@icloud.com">combinedsun@icloud.com.</a>
                            </p>
                            <h2><span>5.</span>Cookies and Similar Technologies</h2>
                            <p class="left_text">Cookies are bits of electronic information that a website may transfer
                                to a visitor’s computer to identify specific
                                information about the visitor’s visits to other websites. We may use automated
                                technologies including the use of web
                                server logs to collect IP addresses, device details, cookies and web beacons. The
                                Website uses a browser feature
                                known as a cookie, which assigns a unique identification to your computer. However, in
                                case you do not wish for us
                                to collect such information, simply change the cookie settings on your web browser. For
                                more details, please read our
                                <b>Cookie Policy</b> posted on our Site.</p>
                            <h2 id="scroll-to-6"><span>6.</span>Sharing of Information</h2>
                            <p class="left_text"><span class="left2">a)</span>When you make the payment on Ivacay, then
                                you provide our third-party payment service provider with
                                your credit or debit card or Stripe or crypto wallet information. We don’t collect your
                                payment card details.
                                For payments, we redirect you to our third-party payment service provider, which
                                collects and processes
                                your payment request.</p>
                            <p class="left_text"><span class="left2">b)</span>If you are a Service Provider, we collect
                                your preferred payment method and its required details. We will
                                share this information with our third-party payment gateway service providers to process
                                your withdrawal
                                request.</p>
                            <p class="left_text"><span class="left2">c)</span>We may share your personal as well as
                                non-personal information with our third-party hosting service
                                provider who has its servers in <b>Phoenix, Arizona (USA).</b></p>
                            <p class="left_text"><span class="left2">d)</span>We share your personal details with our
                                third-party Service Providers to provide you the services requested
                                by you. Only such amount of personal information is shared as is reasonably necessary
                                for the Service
                                Providers to provide you the services requested by you.</p>
                            <p class="left_text"><span class="left2">e)</span>We keep your information safe and do not
                                share your information with any other third party. However, if
                                we merge with or are acquired by another company or we sell our Website or business
                                unit, or if all or a
                                substantial portion of our assets are acquired by another company, in those cases, your
                                information will
                                likely be one of the assets that would be transferred.</p>
                            <p class="left_text"><span class="left2">f)</span>We may also share your information in
                                response to legal requests. Please refer to <a href="#scroll-to-12"
                                                                               class="scroll_smooth">Section 12.</a></p>
                            <h2><span>7.</span>Storage and Security of Information</h2>
                            <p class="left_text"><span class="left2">a)</span><b>Storage:</b> Your data is stored
                                through our third-party hosting service provider’s data storage, databases and
                                servers located in <b>Phoenix, Arizona (USA).</b> We also store some of the information
                                collected by us on our
                                servers and do not share it with any third party, except for the limited purposes as
                                mentioned in the <a href="#scroll-to-6" class="scroll_smooth">Section
                                    6. </a> The servers and databases in which information may be stored may be located
                                outside the country from
                                which you accessed this Site, and in a country where the data protection and other laws
                                may differ (and be
                                less stringent) from your country of residence.<u><b> You hereby consent to any such
                                        cross-border transfer of
                                        your personal information.</b></u>
                            </p>
                            <p class="left_text"><span class="left2">b)</span><b>Retention:</b> Personal information
                                that we collect, access or process will be retained only so long as
                                necessary for the fulfillment of the purposes for which it was collected, as necessary
                                for our legitimate
                                business purposes, or as required or authorized by law. Personal information that is no
                                longer required to
                                fulfill the identified purposes will be destroyed, erased or made de-identified or
                                anonymous.
                            </p>
                            <p class="left_text"><span class="left2">c)</span><b>Steps taken by us to protect your
                                    data:</b>We regularly take the following steps to protect the integrity of
                                your information:</p>
                            <p class="left_text2">● We protect the security of your information while it is being
                                transmitted by using secure connection;</p>
                            <p class="left_text2">● We use computer safeguards such as firewalls to keep this data
                                safe;</p>
                            <p class="left_text2">● We only authorize access to employees and trusted partners who need
                                it to carry out their responsibilities;</p>
                            <p class="left_text2">● We regularly monitor our systems for possible vulnerabilities and
                                attacks, and we carry out
                                penetration testing to identify ways to further strengthen security; and</p>
                            <p class="left_text2">● We will ask for proof of identity before we share your personal data
                                with you.</p>
                            <p class="left_text"><span class="left2">d)</span><b>Security:</b>We employ reasonable
                                security practices to ensure that the information is safe and secure with it.
                                However, no information on the internet is 100% safe, and you accept and acknowledge
                                such risk.<u> Also, we
                                    will disclose the information so collected for limited purposes as mentioned in this
                                    Privacy Policy.</u>
                            </p>
                            <h2><span>8.</span>Links to other Sites</h2>
                            <p class="left_text">The Site may contain links to third-party websites and online services
                                that are not owned or controlled by us. We have
                                no control over, and assume no responsibility for such websites and online services. Be
                                aware when you leave the
                                Website; we suggest you read the terms and privacy policy of each third-party website,
                                and online service that you
                                visit.</p>

                            <h2><span>9.</span>Rights of EU, EEA and UK users</h2>
                            <p class="left_text">This section of the Policy supplements the other provisions of this
                                Privacy Policy, and applies to you if you are in the
                                EU, the European Economic Area (EEA) or UK. <u>For the purposes of GDPR, your <b>DATA
                                        CONTROLLER</b> is <b> Ivacay,</b>
                                    having its office at <b>Po Box 81027, Rancho Santa Margarita, California –
                                        92688 </b> for the data collected by us to
                                    provide you with our services. <b> And, if the services are provided to you by
                                        Service Providers, then such Service
                                        Providers are the Data Controllers for such of your data as collected and
                                        processed by them to provide you
                                        with their services.</b></u></p>
                            <p class="left_text" style="word-spacing: 10px;">ALL YOUR USER INFORMATION WILL BE
                                COLLECTED, STORED, PROCESSED AND SHARED
                                STRICTLY IN ACCORDANCE, IN LINE AND FULL COMPLIANCE WITH GDPR LAW
                                (HEREINAFTER COLLECTIVELY REFERRED TO AS THE “GDPR”).</p>
                            <p class="left_text">Under applicable GDPR, you have the following rights in respect of your
                                personal information:
                            </p>
                            <p class="left_text2">● Right to obtain information: to obtain information about how and on
                                what basis your personal
                                information is processed and to obtain a copy;</p>
                            <p class="left_text2">● Right to rectification: You have the right to have any incomplete or
                                inaccurate information we hold about
                                you rectified and corrected.</p>
                            <p class="left_text2">● Right of Erasure: to erase your personal information in limited
                                circumstances where (a) you believe that it
                                is no longer necessary for us to hold your personal information; (b) we are processing
                                your personal
                                information on the basis of legitimate interests and you object to such processing, and
                                we cannot
                                demonstrate an overriding legitimate ground for the processing; (c) where you have
                                provided your personal
                                information to us with your consent and you wish to withdraw your consent and there is
                                no other ground
                                under which we can process your personal information; and (d) where you believe the
                                personal information
                                we hold about you is being unlawfully processed by us;</p>
                            <p class="left_text2">● Right of restriction: to restrict processing of your personal
                                information where: (a) the accuracy of the
                                personal information is contested; (b) the processing is unlawful but you object to the
                                erasure of the
                                personal information; (c) we no longer require the personal information for the purposes
                                for which it was
                                collected, but it is required for the establishment, exercise or defense of a legal
                                claim or (d) you have
                                objected to us processing your personal information based on our legitimate interests
                                and we are
                                considering your objection;</p>
                            <p class="left_text2">● Right to object: to object to decisions which are based solely on
                                automated processing or profiling;</p>
                            <p class="left_text2">● Right to ask for a copy: where you have provided your personal
                                information to us with your consent, to
                                ask us for a copy of this data in a structured, machine-readable format and to ask us to
                                share (port) this data
                                to another data controller; or to obtain a copy of or access to safeguards under which
                                your personal
                                information is transferred outside of the EEA.
                            </p>
                            <p class="left_text2">● Right to withdraw your consent. You have the right to withdraw your
                                consent on using your personal
                                data. If you withdraw your consent, we may not be able to provide you with access to
                                certain specific
                                functionalities of our services.</p>
                            <p class="left_text2">● Request the transfer of your Personal Data. We will provide to you,
                                or to a third-party you have chosen,
                                your personal data in a structured, commonly used, machine-readable format. Please note
                                that this right
                                only applies to automated information which you initially provided consent for us to use
                                or where we used
                                the information to perform a contract with you.</p>
                            <p class="left_text"><strong>Under certain circumstances, you may have the right to object,
                                    on grounds relating to your particular
                                    situation, to the processing of your personal data by us and we may be required to
                                    no longer process your
                                    personal data. Moreover, if your personal data is processed for direct marketing
                                    purposes, you have the right
                                    to object at any time to the processing of personal data concerning you for such
                                    marketing, which includes
                                    profiling to the extent that it is related to such direct marketing. In this case
                                    your personal data will no longer
                                    be processed for such purposes by us.</strong></p>
                            <p class="left_text">In addition to the above, you have the right to lodge a complaint with
                                a supervisory authority for data protection.
                                Please note that the right of access and the right to erasure do not constitute absolute
                                rights and the interests of other
                                individuals may restrict your right of access or erase in accordance with local
                                laws.</p>
                            <p class="left_text">We will ask you for additional data to confirm your identity and for
                                security purposes, before disclosing data
                                requested by you. We reserve the right to charge a fee where permitted by law. We will
                                decline to process requests
                                that jeopardize the privacy of others, are extremely impractical, or would cause us to
                                take any action that is not
                                permissible under applicable laws. Additionally, as permitted by applicable laws, we
                                will retain where necessary
                                certain personal information for a limited period of time for record-keeping, accounting
                                and fraud prevention
                                purposes.</p>
                            <p class="left_text">To make such requests, please contact us at <a
                                        href="mailto:combinedsun@icloud.com">combinedsun@icloud.com.</a></p>
                            <h2><span>10.</span>California Resident Rights</h2>
                            <p class="left_text">This section of the Policy applies to you, if you are a California
                                resident, as per <b>California Consumer Policy Act,
                                    2018 </b> (simply called “<b>CCPA</b>”) and <b>California Online Privacy Protection
                                    Act </b> (simply called “<b>COPPA</b>”). This
                                privacy notice section for California residents supplements the information contained in
                                our Privacy Policy and it
                                applies solely to all visitors, users, and others who reside in the State of California.
                            </p>
                            <p class="left_text" style="font-size: 25px; color: #f8c22c; margin-top: 30px">Categories of
                                Personal Information Collected</p>
                            <p class="left_text">We collect information that identifies, relates to, describes,
                                references, is capable of being associated with, or could
                                reasonably be linked, directly or indirectly, with a particular consumer or device. The
                                following is a list of categories
                                of personal information which we may collect or may have been collected from California
                                residents within the last
                                twelve (12) months.</p>
                            <p class="left_text">Please note that the categories and examples provided in the list below
                                are those defined in the CCPA. This does not
                                mean that all examples of that category of personal information were in fact collected
                                by us, but reflects our good
                                faith belief to the best of our knowledge that some of that information from the
                                applicable category may be and may
                                have been collected. For example, certain categories of personal information would only
                                be collected if you
                                provided such personal information directly to us.</p>
                            <p class="left_text2"><span class="left2">●</span> <b>Category A: Identifiers.</b></p>
                            <p class="left_text2"><b>Examples: </b> A real name, alias, postal address, unique personal
                                identifier, online identifier, Internet Protocol
                                address, email address, account name, driver's license number, passport number, or other
                                similar identifiers.
                            </p>
                            <p class="left_text2"><b>Collected: </b> Yes.</p>
                            <p class="left_text2"><span class="left2">●</span> <b>Category B: Personal information
                                    categories listed in the California Customer Records statute (Cal.
                                    Civ. Code § 1798.80(e)).
                                </b></p>
                            <p class="left_text2"><b>Examples: </b> A name, signature, Social Security number, physical
                                characteristics or description, address,
                                telephone number, passport number, driver's license or state identification card number,
                                insurance policy
                                number, education, employment, employment history, bank account number, credit card
                                number, debit card
                                number, or any other financial information, medical information, or health insurance
                                information. Some
                                personal information included in this category may overlap with other categories.
                            </p>
                            <p class="left_text2"><b>Collected: </b> Yes.</p>

                            <p class="left_text2"><span class="left2">●</span> <b>Category C: Protected classification
                                    characteristics under California or federal law.
                                </b></p>
                            <p class="left_text2"><b>Examples: </b> Age (40 years or older), race, color, ancestry,
                                national origin, citizenship, religion or creed,
                                marital status, medical condition, physical or mental disability, sex (including gender,
                                gender identity,
                                gender expression, pregnancy or childbirth and related medical conditions), sexual
                                orientation, veteran or
                                military status, genetic information (including familial genetic information).</p>
                            <p class="left_text2"><b>Collected: </b> No.</p>

                            <p class="left_text2"><span class="left2">●</span> <b>Category D: Commercial
                                    information.</b></p>
                            <p class="left_text2"><b>Examples: </b> Records and history of products or services
                                purchased or considered.</p>
                            <p class="left_text2"><b>Collected: </b> Yes.</p>

                            <p class="left_text2"><span class="left2">●</span> <b>Category E: Biometric information.</b>
                            </p>
                            <p class="left_text2"><b>Examples: </b> Genetic, physiological, behavioral, and biological
                                characteristics, or activity patterns used to
                                extract a template or other identifier or identifying information, such as,
                                fingerprints, faceprints, and
                                voiceprints, iris or retina scans, keystroke, gait, or other physical patterns, and
                                sleep, health, or exercise
                                data.</p>
                            <p class="left_text2"><b>Collected: </b> No.</p>

                            <p class="left_text2"><span class="left2">●</span> <b>Category F: Internet or other similar
                                    network activity.
                                </b></p>
                            <p class="left_text2"><b>Examples: </b> Interaction with our Service or advertisement.</p>
                            <p class="left_text2"><b>Collected: </b> Yes.</p>

                            <p class="left_text2"><span class="left2">●</span> <b>Category G: Geolocation data.</b></p>
                            <p class="left_text2"><b>Examples: </b> Approximate physical location.</p>
                            <p class="left_text2"><b>Collected: </b> Yes.</p>

                            <p class="left_text2"><span class="left2">●</span> <b>Category H: Sensory data.</b></p>
                            <p class="left_text2"><b>Examples: </b> Audio, electronic, visual, thermal, olfactory, or
                                similar information.</p>
                            <p class="left_text2"><b>Collected: </b> No.</p>

                            <p class="left_text2"><span class="left2">●</span> <b>Category I: Professional or
                                    employment-related information.</b></p>
                            <p class="left_text2"><b>Examples: </b> Current or past job history or performance
                                evaluations.</p>
                            <p class="left_text2"><b>Collected: </b> No.</p>

                            <p class="left_text2"><span class="left2">●</span> <b>Category J: Non-public education
                                    information (per the Family Educational Rights and Privacy Act
                                    (20 U.S.C. Section 1232g, 34 C.F.R. Part 99)).
                                </b></p>
                            <p class="left_text2"><b>Examples: </b> Education records directly related to a student
                                maintained by an educational institution or party
                                acting on its behalf, such as grades, transcripts, class lists, student schedules,
                                student identification codes,
                                student financial information, or student disciplinary records.</p>
                            <p class="left_text2"><b>Collected: </b> No.</p>

                            <p class="left_text2"><span class="left2">●</span> <b>Category K: Inferences drawn from
                                    other personal information.</b></p>
                            <p class="left_text2"><b>Examples: </b> Profile reflecting a person's preferences,
                                characteristics, psychological trends, predispositions,
                                behavior, attitudes, intelligence, abilities, and aptitudes</p>
                            <p class="left_text2"><b>Collected: </b> No.</p>

                            <p class="left_text">We use the personal information that we collect or receive for the
                                business purposes as described above. We may
                                disclose the above listed categories of personal information to third parties for
                                business purposes as described above.
                                As previously mentioned in this Policy, we do not “sell” (as such term is defined in the
                                CCPA) personal information.</p>

                            <p class="left_text"><strong>You are entitled to the following specific rights under the
                                    CCPA in relation to personal information related to
                                    you:</strong></p>
                            <p class="left_text2"><span class="left2">●  </span> You have a right to request that we
                                will disclose certain information to you about our collection and use of
                                personal information related to you over the past 12 months, including: (i) The
                                categories of personal
                                information that we collect about you; (ii)The categories of sources from which the
                                personal information is
                                collected; (iii) The purposes for collecting, using, or selling that personal
                                information. (iv) The categories
                                of personal information that we disclosed for a business purpose or sold, and the
                                categories of third parties
                                to whom we disclosed or sold that particular category of personal information. (v) The
                                specific pieces of
                                personal information that we have collected about you.</p>
                            <p class="left_text2"><span class="left2">●  </span> You have a right to request that we
                                delete personal information related to you that we collected from you
                                under certain circumstances and exceptions.</p>

                            <p class="left_text2"><span class="left2">●  </span> You also have a right not to be
                                discriminated against for exercising your rights under the CCPA.</p>
                            <p class="left_text2"><span class="left2">●  </span> You also have a right to submit your
                                request via an authorized agent. If you use an authorized agent to
                                submit a request to access or delete your personal information on your behalf, the
                                authorized agent must:
                                (1) be a person or business entity registered with the California Secretary of State to
                                conduct business in
                                California; (2) provide proof of such registration; and (3) provide documentation or
                                other proof indicating
                                that they are authorized to act on your behalf. We may also require you to verify your
                                identity directly with
                                us, and directly confirm with us that you provided the authorized agent permission to
                                submit the request.
                            </p>
                            <p class="left_text"><u><b>To make such requests, please contact us at </b><a
                                            href="mailto:combinedsun@icloud.com">combinedsun@icloud.com</a></u></p>
                            <p class="left_text">We will verify your request using the information associated with your
                                account, including email address.
                                Government identification may also be required.
                            </p>
                            <p class="left_text"><u>A request for access can be made by you only twice within a
                                    12-months period. Any disclosures that we provide will
                                    only cover the 12-months period preceding receipt of your request. We do not charge
                                    a fee to process or respond to
                                    your verifiable User request unless it is excessive, repetitive, or manifestly
                                    unfounded. If we determine that the
                                    request warrants a fee, we will inform you of the reasons for such a decision and
                                    provide you with a cost estimate
                                    before processing further your request.</u></p>


                            <h2 id="scroll-to-11"><span>11.</span>Notice for Nevada Residents</h2>
                            <p class="left_text">Under Nevada law, certain Nevada residents may opt out of the sale of “personally identifiable information” for
                                monetary consideration to a person for that person to license or sell such information to additional persons.
                            </p>
                            <p class="left_text"><b>“Personally identifiable information”</b> includes first and last name, address, email address, phone number, social
                                security number, or an identifier that allows a specific person to be contacted either physically or online.</p>

                           <p class="left_text"><b>Please note, we do not sell your personal information to anyone.</b></p>

                            <h2 id="scroll-to-12"><span>12.</span>How do we respond to legal requests?</h2>
                            <p class="left_text">We may access, preserve and share your information in response to a legal request (like a search warrant, court order
                                or subpoena) if we have a good faith belief that the law requires us to do so. This may include responding to legal
                                requests from law enforcement agencies, courts, tribunals and government authorities. We may also access, preserve
                                and share information when we have a good faith belief it is necessary to: detect, prevent and address fraud and other
                                illegal activity; to protect ourselves, you and others, including as part of investigations; or to prevent death or
                                imminent bodily harm. We also may retain information from accounts disabled for violations of our terms for at least
                                a year to prevent repeat abuse or other violations of our terms.</p>

                            <h2 id="scroll-to-13"><span>13.</span>Children Privacy</h2>
                            <p class="left_text">Protecting children's privacy is important to us, and therefore our Site or our services are not intended for children.
                                We do not direct the Site or our services to, nor do we knowingly collect any personal information from, such
                                children. If you are not of majority (<i>or above</i>) as per the law of jurisdiction that applies to you, you are not authorized
                                to use the Site without your parent/legal guardian’s consent. If we learn that a child has provided personally
                                identifiable information to us, we will use reasonable efforts to remove such information from its database.<u> <b>Please
                                contact us at <a href="mailto:combinedsun@icloud.com">combinedsun@icloud.com</a> if you believe we knowingly or unknowingly collected information
                                        described in this Section.</b></u></p>

                            <h2 id="scroll-to-14"><span>14.</span>How can I withdraw my consent? (OPT-OUT)</h2>
                            <p class="left_text">If you sign-up, you will automatically start receiving promotional emails and direct mail from us. If after you opt-in,
                                you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or
                                disclosure of your information, at any time, by contacting us at <a href="mailto:combinedsun@icloud.com">combinedsun@icloud.com.</a>
                            </p>

                            <h2 id="scroll-to-15"><span>15.</span>. Governing law and Dispute Resolution
                            </h2>
                            <p class="left_text">Unless provided by the relevant statute, rules or directives applicable to the jurisdiction in which you reside, in case
                                of any disputes, issues, claims or controversies arising out of or in relation to your use of the Site or our services, the
                                governing law and dispute resolution mechanism as provided in the <b> User Agreement/Service Provider Terms </b> (<i> as
                                    may be applicable to you</i>) shall apply to this <b>Privacy Policy </b> as well.
                            </p>

                            <h2 id="scroll-to-16"><span>16.</span>Do you have questions or concerns about this Privacy Policy?</h2>
                            <p class="left_text">In the event you have any grievance regarding anything related to this Privacy Policy, User Agreement/Service
                                Provider Terms (as may be applicable to you), or with any content or service of Company, in that case you may
                                freely write your concerns through your registered email to Grievance Officer/Designated Representative to below:
                            </p>

                            <p class="left_text2">● <strong>Name:</strong> Francis Banda</p>
                            <p class="left_text2">● <strong>Email:</strong> <a href="mailto:combinedsun@icloud.com">combinedsun@icloud.com</a></p>
                            <p class="left_text2">● <strong>Phone:</strong> 9499935368</p>
                            <p class="left_text2">● <strong>Postal:</strong> Po Box 81027, Rancho Santa Margarita, California – 92688</p>

                            <h2 id="scroll-to-17"><span>17.</span>Welcoming of Suggestions</h2>
                            <p class="left_text">We welcome your comments regarding this Privacy Policy. Please write to us at  <a href="mailto:combinedsun@icloud.com">combinedsun@icloud.com</a></p>
                            <p style="margin: 100px 0px 0px 0px;">Last updated on <b>July 26, 2022</b></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <div class="container about_con">--}}

{{--        <h2>Effective date: 2021-12-22</h2>--}}
{{--        <h2>1. <b>Introduction</b></h2>--}}
{{--        <p>Welcome to <b> Ivacay</b>.</p>--}}
{{--        <p>--}}
{{--            <b>Ivacay</b> we operates--}}
{{--            <b>ivacay.co</b>--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Our Privacy Policy governs your visit to <b>ivacay.co</b>, and explains--}}
{{--            how we collect, safeguard and disclose information that results from your use--}}
{{--            of our Service.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            We use your data to provide and improve Service. By using Service, you agree--}}
{{--            to the collection and use of information in accordance with this policy.--}}
{{--            Unless otherwise defined in this Privacy Policy, the terms used in this--}}
{{--            Privacy Policy have the same meanings as in our Terms and Conditions.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Our Terms and Conditions (<b>“Terms”</b>) govern all use of our Service and--}}
{{--            together with the Privacy Policy constitutes your agreement with us--}}
{{--            (<b>“agreement”</b>).--}}
{{--        </p>--}}
{{--        <h2>2. <b>Definitions</b></h2>--}}
{{--        <p><b>SERVICE</b> means the ivacay.co website operated by Ivacay.</p>--}}
{{--        <p>--}}
{{--            <b>PERSONAL DATA</b> means data about a living individual who can be--}}
{{--            identified from those data (or from those and other information either in our--}}
{{--            possession or likely to come into our possession).--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <b>USAGE DATA</b> is data collected automatically either generated by the use--}}
{{--            of Service or from Service infrastructure itself (for example, the duration of--}}
{{--            a page visit).--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <b>COOKIES</b> are small files stored on your device (computer or mobile--}}
{{--            device).--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <b>DATA CONTROLLER</b> means a natural or legal person who (either alone or--}}
{{--            jointly or in common with other persons) determines the purposes for which and--}}
{{--            the manner in which any personal data are, or are to be, processed. For the--}}
{{--            purpose of this Privacy Policy, we are a Data Controller of your data.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <b>DATA PROCESSORS (OR SERVICE PROVIDERS)</b> means any natural or legal--}}
{{--            person who processes the data on behalf of the Data Controller. We may use the--}}
{{--            services of various Service Providers in order to process your data more--}}
{{--            effectively.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <b>DATA SUBJECT</b> is any living individual who is the subject of Personal--}}
{{--            Data.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <b>THE USER</b> is the individual using our Service. The User corresponds to--}}
{{--            the Data Subject, who is the subject of Personal Data.--}}
{{--        </p>--}}
{{--        <h2>3. <b>Information Collection and Use</b></h2>--}}
{{--        <p>--}}
{{--            We collect several different types of information for various purposes to--}}
{{--            provide and improve our Service to you.--}}
{{--        </p>--}}
{{--        <h2>4. <b>Types of Data Collected</b></h2>--}}
{{--        <p><b>Personal Data</b></p>--}}
{{--        <p>--}}
{{--            While using our Service, we may ask you to provide us with certain personally--}}
{{--            identifiable information that can be used to contact or identify you (<b--}}
{{--            >“Personal Data”</b--}}
{{--            >). Personally identifiable information may include, but is not limited to:--}}
{{--        </p>--}}
{{--        <p>0.1. Email address</p>--}}
{{--        <p>0.2. First name and last name</p>--}}
{{--        <p>0.3. Phone number</p>--}}
{{--        <p>0.4. Address, Country, State, Province, ZIP/Postal code, City</p>--}}
{{--        <p>0.5. Cookies and Usage Data</p>--}}
{{--        <p>--}}
{{--            We may use your Personal Data to contact you with newsletters, marketing or--}}
{{--            promotional materials and other information that may be of interest to you.--}}
{{--            You may opt out of receiving any, or all, of these communications from us by--}}
{{--            following the unsubscribe link.--}}
{{--        </p>--}}
{{--        <p><b>Usage Data</b></p>--}}
{{--        <p>--}}
{{--            We may also collect information that your browser sends whenever you visit our--}}
{{--            Service or when you access Service by or through any device (<b--}}
{{--            >“Usage Data”</b--}}
{{--            >).--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            This Usage Data may include information such as your computer’s Internet--}}
{{--            Protocol address (e.g. IP address), browser type, browser version, the pages--}}
{{--            of our Service that you visit, the time and date of your visit, the time spent--}}
{{--            on those pages, unique device identifiers and other diagnostic data.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            When you access Service with a device, this Usage Data may include information--}}
{{--            such as the type of device you use, your device unique ID, the IP address of--}}
{{--            your device, your device operating system, the type of Internet browser you--}}
{{--            use, unique device identifiers and other diagnostic data.--}}
{{--        </p>--}}

{{--        <p><b>Tracking Cookies Data</b></p>--}}
{{--        <p>--}}
{{--            We use cookies and similar tracking technologies to track the activity on our--}}
{{--            Service and we hold certain information.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Cookies are files with a small amount of data which may include an anonymous--}}
{{--            unique identifier. Cookies are sent to your browser from a website and stored--}}
{{--            on your device. Other tracking technologies are also used such as beacons,--}}
{{--            tags and scripts to collect and track information and to improve and analyze--}}
{{--            our Service.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            You can instruct your browser to refuse all cookies or to indicate when a--}}
{{--            cookie is being sent. However, if you do not accept cookies, you may not be--}}
{{--            able to use some portions of our Service.--}}
{{--        </p>--}}
{{--        <p>Examples of Cookies we use:</p>--}}
{{--        <p>--}}
{{--            0.1. <b>Session Cookies:</b> We use Session Cookies to operate our Service.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.2. <b>Preference Cookies:</b> We use Preference Cookies to remember your--}}
{{--            preferences and various settings.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.3. <b>Security Cookies:</b> We use Security Cookies for security purposes.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.4. <b>Advertising Cookies:</b> Advertising Cookies are used to serve you--}}
{{--            with advertisements that may be relevant to you and your interests.--}}
{{--        </p>--}}
{{--        <p><b>Other Data</b></p>--}}
{{--        <p>--}}
{{--            While using our Service, we may also collect the following information: sex,--}}
{{--            age, date of birth, place of birth, passport details, citizenship,--}}
{{--            registration at place of residence and actual address, telephone number (work,--}}
{{--            mobile), details of documents on education, qualification, professional--}}
{{--            training, employment agreements,--}}
{{--            <a href="https://policymaker.io/non-disclosure-agreement/">NDA agreements</a>,--}}
{{--            information on bonuses and compensation, information on marital status, family--}}
{{--            members, social security (or other taxpayer identification) number, office--}}
{{--            location and other data.--}}
{{--        </p>--}}
{{--        <h2>5. <b>Use of Data</b></h2>--}}
{{--        <p>Ivacay uses the collected data for various purposes:</p>--}}
{{--        <p>0.1. to provide and maintain our Service;</p>--}}
{{--        <p>0.2. to notify you about changes to our Service;</p>--}}
{{--        <p>--}}
{{--            0.3. to allow you to participate in interactive features of our Service when--}}
{{--            you choose to do so;--}}
{{--        </p>--}}
{{--        <p>0.4. to provide customer support;</p>--}}
{{--        <p>--}}
{{--            0.5. to gather analysis or valuable information so that we can improve our--}}
{{--            Service;--}}
{{--        </p>--}}
{{--        <p>0.6. to monitor the usage of our Service;</p>--}}
{{--        <p>0.7. to detect, prevent and address technical issues;</p>--}}
{{--        <p>0.8. to fulfil any other purpose for which you provide it;</p>--}}
{{--        <p>--}}
{{--            0.9. to carry out our obligations and enforce our rights arising from any--}}
{{--            contracts entered into between you and us, including for billing and--}}
{{--            collection;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.10. to provide you with notices about your account and/or subscription,--}}
{{--            including expiration and renewal notices, email-instructions, etc.;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.11. to provide you with news, special offers and general information about--}}
{{--            other goods, services and events which we offer that are similar to those that--}}
{{--            you have already purchased or enquired about unless you have opted not to--}}
{{--            receive such information;--}}
{{--        </p>--}}
{{--        <p>0.12. in any other way we may describe when you provide the information;</p>--}}
{{--        <p>0.13. for any other purpose with your consent.</p>--}}
{{--        <h2>6. <b>Retention of Data</b></h2>--}}
{{--        <p>--}}
{{--            We will retain your Personal Data only for as long as is necessary for the--}}
{{--            purposes set out in this Privacy Policy. We will retain and use your Personal--}}
{{--            Data to the extent necessary to comply with our legal obligations (for--}}
{{--            example, if we are required to retain your data to comply with applicable--}}
{{--            laws), resolve disputes, and enforce our legal agreements and policies.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            We will also retain Usage Data for internal analysis purposes. Usage Data is--}}
{{--            generally retained for a shorter period, except when this data is used to--}}
{{--            strengthen the security or to improve the functionality of our Service, or we--}}
{{--            are legally obligated to retain this data for longer time periods.--}}
{{--        </p>--}}
{{--        <h2>7. <b>Transfer of Data</b></h2>--}}
{{--        <p>--}}
{{--            Your information, including Personal Data, may be transferred to – and--}}
{{--            maintained on – computers located outside of your state, province, country or--}}
{{--            other governmental jurisdiction where the data protection laws may differ from--}}
{{--            those of your jurisdiction.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            If you are located outside Africa and choose to provide information to us,--}}
{{--            please note that we transfer the data, including Personal Data, to Africa and--}}
{{--            process it there.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Your consent to this Privacy Policy followed by your submission of such--}}
{{--            information represents your agreement to that transfer.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Ivacay will take all the steps reasonably necessary to ensure that your--}}
{{--            data is treated securely and in accordance with this Privacy Policy and no--}}
{{--            transfer of your Personal Data will take place to an organisation or a country--}}
{{--            unless there are adequate controls in place including the security of your--}}
{{--            data and other personal information.--}}
{{--        </p>--}}
{{--        <h2>8. <b>Disclosure of Data</b></h2>--}}
{{--        <p>We may disclose personal information that we collect, or you provide:</p>--}}
{{--        <p>0.1. <b>Disclosure for Law Enforcement.</b></p>--}}
{{--        <p>--}}
{{--            Under certain circumstances, we may be required to disclose your Personal Data--}}
{{--            if required to do so by law or in response to valid requests by public--}}
{{--            authorities.--}}
{{--        </p>--}}
{{--        <p>0.2. <b>Business Transaction.</b></p>--}}
{{--        <p>--}}
{{--            If we or our subsidiaries are involved in a merger, acquisition or asset sale,--}}
{{--            your Personal Data may be transferred.--}}
{{--        </p>--}}
{{--        <p>0.3. <b>Other cases. We may disclose your information also:</b></p>--}}
{{--        <p>0.3.1. to our subsidiaries and affiliates;</p>--}}
{{--        <p>--}}
{{--            0.3.2. to contractors, service providers, and other third parties we use to--}}
{{--            support our business;--}}
{{--        </p>--}}
{{--        <p>0.3.3. to fulfill the purpose for which you provide it;</p>--}}
{{--        <p>0.3.4. for the purpose of including your company’s logo on our website;</p>--}}
{{--        <p>--}}
{{--            0.3.5. for any other purpose disclosed by us when you provide the information;--}}
{{--        </p>--}}
{{--        <p>0.3.6. with your consent in any other cases;</p>--}}
{{--        <p>--}}
{{--            0.3.7. if we believe disclosure is necessary or appropriate to protect the--}}
{{--            rights, property, or safety of the Company, our customers, or others.--}}
{{--        </p>--}}
{{--        <h2>9. <b>Security of Data</b></h2>--}}
{{--        <p>--}}
{{--            The security of your data is important to us but remember that no method of--}}
{{--            transmission over the Internet or method of electronic storage is 100% secure.--}}
{{--            While we strive to use commercially acceptable means to protect your Personal--}}
{{--            Data, we cannot guarantee its absolute security.--}}
{{--        </p>--}}
{{--        <h2>--}}
{{--            10.--}}
{{--            <b--}}
{{--            >Your Data Protection Rights Under General Data Protection Regulation (GDPR)--}}
{{--            </b>--}}
{{--        </h2>--}}
{{--        <p>--}}
{{--            If you are a resident of the European Union (EU) and European Economic Area--}}
{{--            (EEA), you have certain data protection rights, covered by GDPR.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            We aim to take reasonable steps to allow you to correct, amend, delete, or--}}
{{--            limit the use of your Personal Data.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            If you wish to be informed what Personal Data we hold about you and if you--}}
{{--            want it to be removed from our systems, please email us at--}}
{{--            <b>contact@ivacay.co</b>.--}}
{{--        </p>--}}
{{--        <p>In certain circumstances, you have the following data protection rights:</p>--}}
{{--        <p>--}}
{{--            0.1. the right to access, update or to delete the information we have on you;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.2. the right of rectification. You have the right to have your information--}}
{{--            rectified if that information is inaccurate or incomplete;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.3. the right to object. You have the right to object to our processing of--}}
{{--            your Personal Data;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.4. the right of restriction. You have the right to request that we restrict--}}
{{--            the processing of your personal information;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.5. the right to data portability. You have the right to be provided with a--}}
{{--            copy of your Personal Data in a structured, machine-readable and commonly used--}}
{{--            format;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.6. the right to withdraw consent. You also have the right to withdraw your--}}
{{--            consent at any time where we rely on your consent to process your personal--}}
{{--            information;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Please note that we may ask you to verify your identity before responding to--}}
{{--            such requests. Please note, we may not able to provide Service without some--}}
{{--            necessary data.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            You have the right to complain to a Data Protection Authority about our--}}
{{--            collection and use of your Personal Data. For more information, please contact--}}
{{--            your local data protection authority in the European Economic Area (EEA).--}}
{{--        </p>--}}
{{--        <h2>--}}
{{--            11.--}}
{{--            <b--}}
{{--            >Your Data Protection Rights under the California Privacy Protection Act--}}
{{--                (CalOPPA)</b--}}
{{--            >--}}
{{--        </h2>--}}
{{--        <p>--}}
{{--            CalOPPA is the first state law in the nation to require commercial websites--}}
{{--            and online services to post a privacy policy. The law’s reach stretches well--}}
{{--            beyond California to require a person or company in the United States (and--}}
{{--            conceivable the world) that operates websites collecting personally--}}
{{--            identifiable information from California consumers to post a conspicuous--}}
{{--            privacy policy on its website stating exactly the information being collected--}}
{{--            and those individuals with whom it is being shared, and to comply with this--}}
{{--            policy.--}}
{{--        </p>--}}
{{--        <p>According to CalOPPA we agree to the following:</p>--}}
{{--        <p>0.1. users can visit our site anonymously;</p>--}}
{{--        <p>--}}
{{--            0.2. our Privacy Policy link includes the word “Privacy”, and can easily be--}}
{{--            found on the home page of our website;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.3. users will be notified of any privacy policy changes on our Privacy--}}
{{--            Policy Page;--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.4. users are able to change their personal information by emailing us at--}}
{{--            <b>contact@ivacay.co</b>.--}}
{{--        </p>--}}
{{--        <p>Our Policy on “Do Not Track” Signals:</p>--}}
{{--        <p>--}}
{{--            We honor Do Not Track signals and do not track, plant cookies, or use--}}
{{--            advertising when a Do Not Track browser mechanism is in place. Do Not Track is--}}
{{--            a preference you can set in your web browser to inform websites that you do--}}
{{--            not want to be tracked.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            You can enable or disable Do Not Track by visiting the Preferences or Settings--}}
{{--            page of your web browser.--}}
{{--        </p>--}}
{{--        <h2>--}}
{{--            12.--}}
{{--            <b--}}
{{--            >Your Data Protection Rights under the California Consumer Privacy Act--}}
{{--                (CCPA)</b--}}
{{--            >--}}
{{--        </h2>--}}
{{--        <p>--}}
{{--            If you are a California resident, you are entitled to learn what data we--}}
{{--            collect about you, ask to delete your data and not to sell (share) it. To--}}
{{--            exercise your data protection rights, you can make certain requests and ask--}}
{{--            us:--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <b--}}
{{--            >0.1. What personal information we have about you. If you make this request,--}}
{{--                we will return to you:</b--}}
{{--            >--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.0.1. The categories of personal information we have collected about you.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.0.2. The categories of sources from which we collect your personal--}}
{{--            information.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.0.3. The business or commercial purpose for collecting or selling your--}}
{{--            personal information.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.0.4. The categories of third parties with whom we share personal--}}
{{--            information.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.0.5. The specific pieces of personal information we have collected about--}}
{{--            you.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.0.6. A list of categories of personal information that we have sold, along--}}
{{--            with the category of any other company we sold it to. If we have not sold your--}}
{{--            personal information, we will inform you of that fact.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            0.0.7. A list of categories of personal information that we have disclosed for--}}
{{--            a business purpose, along with the category of any other company we shared it--}}
{{--            with.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Please note, you are entitled to ask us to provide you with this information--}}
{{--            up to two times in a rolling twelve-month period. When you make this request,--}}
{{--            the information provided may be limited to the personal information we--}}
{{--            collected about you in the previous 12 months.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <b--}}
{{--            >0.2. To delete your personal information. If you make this request, we will--}}
{{--                delete the personal information we hold about you as of the date of your--}}
{{--                request from our records and direct any service providers to do the same. In--}}
{{--                some cases, deletion may be accomplished through de-identification of the--}}
{{--                information. If you choose to delete your personal information, you may not--}}
{{--                be able to use certain functions that require your personal information to--}}
{{--                operate.</b--}}
{{--            >--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <b--}}
{{--            >0.3. To stop selling your personal information. We don’t sell or rent your--}}
{{--                personal information to any third parties for any purpose. We do not sell--}}
{{--                your personal information for monetary consideration. However, under some--}}
{{--                circumstances, a transfer of personal information to a third party, or--}}
{{--                within our family of companies, without monetary consideration may be--}}
{{--                considered a “sale” under California law. You are the only owner of your--}}
{{--                Personal Data and can request disclosure or deletion at any time.</b--}}
{{--            >--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            If you submit a request to stop selling your personal information, we will--}}
{{--            stop making such transfers.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Please note, if you ask us to delete or stop selling your data, it may impact--}}
{{--            your experience with us, and you may not be able to participate in certain--}}
{{--            programs or membership services which require the usage of your personal--}}
{{--            information to function. But in no circumstances, we will discriminate against--}}
{{--            you for exercising your rights.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            To exercise your California data protection rights described above, please--}}
{{--            send your request(s) by email: <b>contact@ivacay.co</b>.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Your data protection rights, described above, are covered by the CCPA, short--}}
{{--            for the California Consumer Privacy Act. To find out more, visit the official--}}
{{--            California Legislative Information website. The CCPA took effect on--}}
{{--            01/01/2020.--}}
{{--        </p>--}}
{{--        <h2>13. <b>Service Providers</b></h2>--}}
{{--        <p>--}}
{{--            We may employ third party companies and individuals to facilitate our Service--}}
{{--            (<b>“Service Providers”</b>), provide Service on our behalf, perform--}}
{{--            Service-related services or assist us in analysing how our Service is used.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            These third parties have access to your Personal Data only to perform these--}}
{{--            tasks on our behalf and are obligated not to disclose or use it for any other--}}
{{--            purpose.--}}
{{--        </p>--}}
{{--        <h2>14. <b>Analytics</b></h2>--}}
{{--        <p>--}}
{{--            We may use third-party Service Providers to monitor and analyze the use of our--}}
{{--            Service.--}}
{{--        </p>--}}
{{--        <h2>15. <b>CI/CD tools</b></h2>--}}
{{--        <p>--}}
{{--            We may use third-party Service Providers to automate the development process--}}
{{--            of our Service.--}}
{{--        </p>--}}

{{--        <h2>16. <b>Behavioral Remarketing</b></h2>--}}
{{--        <p>--}}
{{--            We may use remarketing services to advertise on third party websites to you--}}
{{--            after you visited our Service. We and our third-party vendors use cookies to--}}
{{--            inform, optimise and serve ads based on your past visits to our Service.--}}
{{--        </p>--}}
{{--        <h2>17. <b>Payments</b></h2>--}}
{{--        <p>--}}
{{--            We may provide paid products and/or services within Service. In that case, we--}}
{{--            use third-party services for payment processing (e.g. payment processors).--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            We will not store or collect your payment card details. That information is--}}
{{--            provided directly to our third-party payment processors whose use of your--}}
{{--            personal information is governed by their Privacy Policy. These payment--}}
{{--            processors adhere to the standards set by PCI-DSS as managed by the PCI--}}
{{--            Security Standards Council, which is a joint effort of brands like Visa,--}}
{{--            Mastercard, American Express and Discover. PCI-DSS requirements help ensure--}}
{{--            the secure handling of payment information.--}}
{{--        </p>--}}
{{--        <h2>18. <b>Links to Other Sites</b></h2>--}}
{{--        <p>--}}
{{--            Our Service may contain links to other sites that are not operated by us. If--}}
{{--            you click a third party link, you will be directed to that third party’s site.--}}
{{--            We strongly advise you to review the Privacy Policy of every site you visit.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            We have no control over and assume no responsibility for the content, privacy--}}
{{--            policies or practices of any third party sites or services.--}}
{{--        </p>--}}


{{--        <h2>--}}
{{--            19. <b><b>Children’s Privacy</b></b>--}}
{{--        </h2>--}}
{{--        <p>--}}
{{--            Our Services are not intended for use by children under the age of 18 (<b--}}
{{--            >“Child”</b--}}
{{--            >--}}
{{--            or <b>“Children”</b>).--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            We do not knowingly collect personally identifiable information from Children--}}
{{--            under 18. If you become aware that a Child has provided us with Personal Data,--}}
{{--            please contact us. If we become aware that we have collected Personal Data--}}
{{--            from Children without verification of parental consent, we take steps to--}}
{{--            remove that information from our servers.--}}
{{--        </p>--}}
{{--        <h2>20. <b>Changes to This Privacy Policy</b></h2>--}}
{{--        <p>--}}
{{--            We may update our Privacy Policy from time to time. We will notify you of any--}}
{{--            changes by posting the new Privacy Policy on this page.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            We will let you know via email and/or a prominent notice on our Service, prior--}}
{{--            to the change becoming effective and update “effective date” at the top of--}}
{{--            this Privacy Policy.--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            You are advised to review this Privacy Policy periodically for any changes.--}}
{{--            Changes to this Privacy Policy are effective when they are posted on this--}}
{{--            page.--}}
{{--        </p>--}}
{{--        <h2>21. <b>Contact Us</b></h2>--}}
{{--        <p>--}}
{{--            If you have any questions about this Privacy Policy, please contact us by--}}
{{--            email: <b>contact@ivacay.co</b>.--}}
{{--        </p>--}}

{{--    </div>--}}
@endsection