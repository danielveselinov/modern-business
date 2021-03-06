<?php 
    $pageName = "Terms and Conditions";
    session_start();
    require_once("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'elements/head.php'; ?>
        <style>
            {-webkit-box-sizing:border-box;box-sizing:border-box}::before,::after{-webkit-box-sizing:inherit;box-sizing:inherit}html{line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}body{margin:0}main{display:block}p,table,blockquote,address,pre,iframe,form,figure,dl{margin:0}h1,h2,h3,h4,h5,h6{font-size:inherit;line-height:inherit;font-weight:inherit;margin:0}ul,ol{margin:0;padding:0;list-style:none}dt{font-weight:700}dd{margin-left:0}hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0;overflow:visible;border:0;border-top:1px solid;margin:0;clear:both}pre{font-family:monospace,monospace;font-size:inherit}address{font-style:inherit}a{background-color:transparent;text-decoration:none;color:inherit}abbr[title]{border-bottom:none;text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:inherit}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none;vertical-align:bottom}embed,object,iframe{border:0;vertical-align:bottom}button,input,optgroup,select,textarea{-webkit-appearance:none;-moz-appearance:none;appearance:none;vertical-align:middle;color:inherit;font:inherit;border:inherit;background:0 0;padding:0;margin:0;outline:0;border-radius:0;text-align:inherit}[type=checkbox]{-webkit-appearance:checkbox;-moz-appearance:checkbox;appearance:checkbox}[type=radio]{-webkit-appearance:radio;-moz-appearance:radio;appearance:radio}button,input{overflow:visible}button,select{text-transform:none}button,[type=button],[type=reset],[type=submit]{cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none}button[disabled],[type=button][disabled],[type=reset][disabled],[type=submit][disabled]{cursor:default}button::-moz-focus-inner,[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring,[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring{outline:1px dotted ButtonText}fieldset{margin:0;padding:0;border:0;min-width:0}legend{color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}::-webkit-input-placeholder{font:inherit}:-ms-input-placeholder{font:inherit}::-ms-input-placeholder{font:inherit}::placeholder{font:inherit}label[for]{cursor:pointer}details{display:block}summary{display:list-item}table{border-collapse:collapse;border-spacing:0}caption{text-align:left}td,th{vertical-align:top}th{text-align:left;font-weight:700}template{display:none}[hidden]{display:none}body{background:#fff;font-family:helvetica neue,Helvetica,Arial,sans-serif;font-size:1.125rem;color:#6a6f82;margin:0}.header{background-color:#464855;display:inline-block;width:100%}.header .logo{display:block;font-weight:700;font-size:1rem;color:#fff;padding:1rem 0}.menu-btn:hover{background-color:#464855}.subnav{background:#fff;padding:1rem 0;top:0;position:-webkit-sticky;position:sticky;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.2);box-shadow:0 2px 5px 0 rgba(0,0,0,.2)}.subnav ul{margin:0;padding:0;list-style:none;overflow:hidden}.subnav li{margin-right:.25rem;margin-top:.5rem;margin-bottom:.5rem}.subnav li label{display:inline-block;width:100%;font-weight:700;color:#6a6f82;text-align:center;vertical-align:middle;border:2px solid #e5e5ed;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;padding:.625rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}.subnav li label:hover{border-color:#008461;color:#008461}.subnav .menu{clear:both;max-height:0;-webkit-transition:max-height .3s ease-out;transition:max-height .3s ease-out}.subnav .menu-icon{cursor:pointer;display:inline-block;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;top:-5px}.subnav .menu-icon .navicon{background:#008461;display:inline-block;height:2px;position:relative;-webkit-transition:background .2s ease-out;transition:background .2s ease-out;width:18px}.subnav .menu-icon .navicon:before,.subnav .menu-icon .navicon:after{background:#008461;content:"";display:block;height:100%;position:absolute;-webkit-transition:all .2s ease-out;transition:all .2s ease-out;width:100%}.subnav .menu-icon .navicon:before{top:5px}.subnav .menu-icon .navicon:after{top:-5px}.subnav .menu-btn{display:none}.subnav .menu-btn:checked~.menu{max-height:inherit}.subnav .menu-btn:checked~.menu-icon .navicon{background:0 0}.subnav .menu-btn:checked~.menu-icon .navicon:before{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:.7}.subnav .menu-btn:checked~.menu-icon .navicon:after{-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:.7}.subnav .menu-btn:checked~.menu-icon .label-name{opacity:.7}.subnav .menu-btn:checked~.menu-icon:not(.steps) .navicon:before,.subnav .menu-btn:checked~.menu-icon:not(.steps) .navicon:after{top:0}.subnav .label-name{position:absolute;top:8px;left:25px;display:inline-block;color:#008461;font-size:.85rem;text-transform:uppercase;font-weight:700}.subnav .by-privacypolicies{position:absolute;font-size:1rem;top:1px;right:20px}.subnav .by-privacypolicies a{display:inline-block;color:#008461;font-weight:600;text-decoration:none;-webkit-transition:all .3s;transition:all .3s}.subnav .by-privacypolicies a:hover{opacity:.7}.subnav .by-privacypolicies a img{width:1.25rem;margin-right:7px;-webkit-transition:all .3s;transition:all .3s}.container{position:relative;max-width:980px;margin-left:auto;margin-right:auto;padding-left:20px;padding-right:20px}.page{margin:0;padding:0}.page input,.page section>div{opacity:0;display:none;-webkit-animation:fade 1s;animation:fade 1s}.page #en:checked~section .en,.page #es:checked~section .es,.page #fr:checked~section .fr,.page #de:checked~section .de,.page #it:checked~section .it,.page #nl:checked~section .nl{display:block;opacity:1}.page #en:checked~.subnav .container .en label,.page #es:checked~.subnav .container .es label,.page #fr:checked~.subnav .container .fr label,.page #de:checked~.subnav .container .de label,.page #it:checked~.subnav .container .it label,.page #nl:checked~.subnav .container .nl label{color:#008461;border-color:#008461}@-webkit-keyframes fade{0%{opacity:0}100%{opacity:1}}@keyframes fade{0%{opacity:0}100%{opacity:1}}.page footer{font-size:1rem;color:#fff;background:#464855;padding:1rem 0}section{max-width:980px;margin-left:auto;margin-right:auto;line-height:1.7;overflow-wrap:break-word;word-wrap:break-word;padding:10px 20px 40px}section h1,section h2,section h3,section h4,section h5,section h6{font-weight:700;margin-bottom:0;padding-bottom:0}section h1,section h2,section h3{color:#464855}section h4,section h5,section h6{color:#6a6f82}section h1{font-size:1.625rem;margin-top:25px;margin-bottom:15px;line-height:1.4}section h2{font-size:1.375rem;margin-top:20px;margin-bottom:10px}section h3{font-size:1.25rem;margin-top:20px;margin-bottom:10px}section h4{font-size:1.125rem;margin-top:20px;margin-bottom:10px}section h5{font-size:1.125rem;margin-top:20px;margin-bottom:10px}section h6{font-size:1.125rem;margin-top:20px;margin-bottom:10px}section p{font-size:1rem;margin-bottom:10px}section ul{font-size:1rem;list-style-type:disc;line-height:2;margin-left:30px;margin-top:15px;margin-bottom:15px}section a{color:#6a6f82;text-decoration:none;-webkit-transition:color .3s;transition:color .3s}section a:hover{color:#464855}section pre{-webkit-box-sizing:border-box;box-sizing:border-box;width:100%;overflow:auto;overflow-y:hidden;font-size:14px;line-height:20px;background:#fff6d0;border:1px solid #e6dcae;white-space:pre-line;white-space:-moz-pre-line;white-space:-pre-line;white-space:-o-pre-line;word-wrap:break-word;border-radius:4px;margin:20px 0;padding:15px}@media all and (max-width:479px){.menu li:first-of-type{margin-top:20px}}@media all and (min-width:480px) and (max-width:767px){.menu li:first-of-type{margin-top:20px}}@media all and (min-width:768px) and (max-width:979px){.menu li:first-of-type{margin-top:20px}}@media all and (min-width:980px){.subnav{background:#fff}.subnav li{float:left}.subnav li:hover{border-radius:0}.subnav .label-name{display:none}.subnav .menu{clear:none;max-height:none}.subnav .menu li:last-of-type{margin-bottom:0}.subnav .menu-icon{display:none}.subnav .by-privacypolicies{top:1.3rem}section{padding:10px 20px 40px}section h1{font-size:2.125rem}section h2{font-size:1.65rem}section h3{font-size:1.35rem}section h4{font-size:1.25rem}section h5{font-size:1.125rem}section h6{font-size:1rem}section ul li p{margin-top:0;margin-bottom:10px}footer{font-size:1rem!important;padding:1rem 0;background-color:#464855;color:#fff}}
        </style>
    </head>
    <body>

    <div class="page">
        <input id="en" checked="checked" type="radio" name="languages" />
        <header class="header">
            <div class="container">
                <span class="logo">Terms and Conditions for <?php echo $serverInfo["Title"]; ?></span>
            </div>
        </header>
    </div>

    <section>
        <div class="en section_container" section-language="en">
        <div id="md_en" data-target="out_en" class="agreement_md"><h1>Terms and Conditions</h1>
        <p>Last updated: August 26, 2021</p>
        <p>Please read these terms and conditions carefully before using Our Service.</p>
        <h1>Interpretation and Definitions</h1>
        <h2>Interpretation</h2>
        <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
        <h2>Definitions</h2>
        <p>For the purposes of these Terms and Conditions:</p>
        <ul>
        <li>
        <p><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where &quot;control&quot; means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>
        </li>
        <li>
        <p><strong>Country</strong> refers to: Florida, United States</p>
        </li>
        <li>
        <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to <?php echo $serverInfo["Title"]; ?>.</p>
        </li>
        <li>
        <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
        </li>
        <li>
        <p><strong>Service</strong> refers to the Website.</p>
        </li>
        <li>
        <p><strong>Terms and Conditions</strong> (also referred as &quot;Terms&quot;) mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service. This Terms and Conditions agreement has been created with the help of the <a href="https://www.privacypolicies.com/terms-conditions-generator/" target="_blank">Terms and Conditions Generator</a>.</p>
        </li>
        <li>
        <p><strong>Third-party Social Media Service</strong> means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.</p>
        </li>
        <li>
        <p><strong>Website</strong> refers to <?php echo $serverInfo["Title"]; ?>, accessible from <a href="www.example.com" rel="external nofollow noopener" target="_blank">www.example.com</a></p>
        </li>
        <li>
        <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
        </li>
        </ul>
        <h1>Acknowledgment</h1>
        <p>These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p>
        <p>Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p>
        <p>By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.</p>
        <p>You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</p>
        <p>Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.</p>
        <h1>Links to Other Websites</h1>
        <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</p>
        <p>The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
        <p>We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.</p>
        <h1>Termination</h1>
        <p>We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.</p>
        <p>Upon termination, Your right to use the Service will cease immediately.</p>
        <h1>Limitation of Liability</h1>
        <p>Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.</p>
        <p>To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p>
        <p>Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.</p>
        <h1>&quot;AS IS&quot; and &quot;AS AVAILABLE&quot; Disclaimer</h1>
        <p>The Service is provided to You &quot;AS IS&quot; and &quot;AS AVAILABLE&quot; and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p>
        <p>Without limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p>
        <p>Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.</p>
        <h1>Governing Law</h1>
        <p>The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.</p>
        <h1>Disputes Resolution</h1>
        <p>If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p>
        <h1>For European Union (EU) Users</h1>
        <p>If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident in.</p>
        <h1>United States Legal Compliance</h1>
        <p>You represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a &quot;terrorist supporting&quot; country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.</p>
        <h1>Severability and Waiver</h1>
        <h2>Severability</h2>
        <p>If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p>
        <h2>Waiver</h2>
        <p>Except as provided herein, the failure to exercise a right or to require performance of an obligation under this Terms shall not effect a party's ability to exercise such right or require such performance at any time thereafter nor shall be the waiver of a breach constitute a waiver of any subsequent breach.</p>
        <h1>Translation Interpretation</h1>
        <p>These Terms and Conditions may have been translated if We have made them available to You on our Service.
        You agree that the original English text shall prevail in the case of a dispute.</p>
        <h1>Changes to These Terms and Conditions</h1>
        <p>We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.</p>
        <p>By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.</p>
        <h1>Contact Us</h1>
        <p>If you have any questions about these Terms and Conditions, You can contact us:</p>
        <ul>
        <li>By email: <a href="mailto:contact@example.com">contact@example.com</a></li>
        </ul>
        </div>
        <div id="out_en" class="agreement_output"></div>
        </div>
    </section>


    <footer>
        <div class="container">
            Terms and Conditions for <?php echo $serverInfo["Title"]; ?>
        </div>
    </footer>

</div>
</body>
</html>