<!DOCTYPE html>
<html lang="en">
    <head>
        @vite('resources/css/app.css')
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Event Handler System</title>
        <link href="{{ url('/img/ub_logo.png') }}" rel="shortcut icon" type="image/x-icon"/>
        <link href="https://cdn.prod.website-files.com/634ebd5aab79d1fa815c5394/css/perfectscale-website.webflow.2e673051a.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com" rel="preconnect"/>
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">
            WebFont.load({
                google: {
                    families: ["Inconsolata:400,700", "DM Sans:regular,italic,500,500italic,700,700italic", "Manrope:200,300,regular,500,600,700,800"]
                }
            });
        </script>
        <script type="text/javascript">
            !function(o, c) {
                var n = c.documentElement
                  , t = " w-mod-";
                n.className += t + "js",
                ("ontouchstart"in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
            }(window, document);
        </script>
        <link href="https://cdn.prod.website-files.com/634ebd5aab79d1fa815c5394/637b379e03cd69d50109f762_PerfectScale%20-%20Webclip.png" rel="apple-touch-icon"/>
        <link href="https://www.perfectscale.io/" rel="canonical"/>
        <!-- Google Consent Mode -->
        <script data-cookieconsent="ignore">
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments)
            }
            gtag("consent", "default", {
                ad_personalization: "denied",
                ad_storage: "denied",
                ad_user_data: "denied",
                analytics_storage: "denied",
                functionality_storage: "denied",
                personalization_storage: "denied",
                security_storage: "granted",
                wait_for_update: 500
            });
            gtag("set", "ads_data_redaction", true);
            gtag("set", "url_passthrough", true);
        </script>
        <!-- End Google Consent Mode-->
        <!-- Google Tag Manager -->
        <script data-cookieconsent="ignore">
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0]
                  , j = d.createElement(s)
                  , dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            }
            )(window, document, 'script', 'dataLayer', 'GTM-K8B2LNN');
        </script>
        <!-- End Google Tag Manager -->
        <!-- Cookiebot CMP-->
        <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="aa5660b2-dd4c-4275-b741-69e284bf47ee" data-blockingmode="auto" type="text/javascript" data-consentmode-defaults="disabled"></script>
        <!-- End Cookiebot CMP -->
    
        <style>
            @font-face {
                font-family: Poppins;
                src: url('"https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"');
            }
            #font {
                font-family: "Poppins", sans-serif;
            }
            .customer-logo {
                width: 150px; /* Adjust the width as needed */
                height: 150px; /* Adjust the height as needed */
                object-fit: contain; /* This ensures the image scales without distortion */
            }
            hr {
                flex: 1;
                border: none;
                border-top: 1px solid #bababa;
            }
        </style>
    </head>

    <body class="body">
    <div class="navbar-component is-hello-bar shadow-medium">
            <div data-animation="default" class="navbar-component shadow-medium w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" data-w-id="2a210fb2-2dee-b9ed-95e7-acd7690bb2aa" role="banner" data-duration="400">
                <div class="navbar-container">
                    <a href="/" aria-current="page" class="navbar-logo-link w-nav-brand w--current">
                    <img src="/img/eventhandler-logo.png" loading="lazy" alt="" height="32" width="250" class="navbar-logo"/>
                    </a>
                    <nav role="navigation" class="navbar-menu w-nav-menu">
                        <div class="navbar-menu-left">
                            <a href="{{ route('home') }}" class="navbar-link w-nav-link">Home</a>
                            <link rel="prefetch" href="/platform"/>
                            <a href="/pricing" class="navbar-link w-nav-link">Events</a>
                            <link rel="prefetch" href="/pricing"/>
                            <div data-hover="true" data-delay="200" data-w-id="0ceed0a4-2916-ef58-5df1-0cff97372693" class="navbar-dropdown-menu w-dropdown">
                                <div class="navbar-link cc-dropdown w-dropdown-toggle">
                                    <div>About us</div>
                                    <div class="dropdown-chevron w-embed">
                                        <svg width=" 100%" height=" 100%" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.55806 6.29544C2.46043 6.19781 2.46043 6.03952 2.55806 5.94189L3.44195 5.058C3.53958 4.96037 3.69787 4.96037 3.7955 5.058L8.00001 9.26251L12.2045 5.058C12.3021 4.96037 12.4604 4.96037 12.5581 5.058L13.4419 5.94189C13.5396 6.03952 13.5396 6.19781 13.4419 6.29544L8.17678 11.5606C8.07915 11.6582 7.92086 11.6582 7.82323 11.5606L2.55806 6.29544Z" fill="currentColor"/>
                                        </svg>
                                    </div>
                                </div>
                                <nav class="navbar-dropdown-list w-dropdown-list">
                                    <div class="navbar-dropdown-link-list is-first">
                                        <a href="https://www.perfectscale.io/blog-category/case-studies" class="navbar-dropdown-link is-first w-inline-block">
                                            <div class="navbar-icon-wrapper hide">
                                                <div class="icon-embed-xsmall w-embed">
                                                    <svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="navbar-text-wrapper">
                                                <div>The Team</div>
                                                <p class="text-size-regular text-color-gray">Learn more about the developers!</p>
                                            </div>
                                        </a>
                                        <link rel="prefetch" href="https://www.perfectscale.io/blog-category/case-studies"/>
                                        <a href="/blog" class="navbar-dropdown-link w-inline-block">
                                            <div class="navbar-icon-wrapper hide">
                                                <div class="icon-embed-xsmall w-embed">
                                                    <svg width="currentWidth" height="currentHeight" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.73 7.12L20.59 6.87C20.4094 6.56769 20.1547 6.31643 19.85 6.14L13.14 2.27C12.8362 2.09375 12.4913 2.00062 12.14 2H11.85C11.4987 2.00062 11.1538 2.09375 10.85 2.27L4.14 6.15C3.83697 6.32526 3.58526 6.57697 3.41 6.88L3.27 7.13C3.09375 7.43384 3.00062 7.77874 3 8.13V15.88C3.00062 16.2313 3.09375 16.5762 3.27 16.88L3.41 17.13C3.58979 17.4295 3.84049 17.6802 4.14 17.86L10.86 21.73C11.1623 21.9099 11.5082 22.0033 11.86 22H12.14C12.4913 21.9994 12.8362 21.9063 13.14 21.73L19.85 17.85C20.156 17.6787 20.4087 17.426 20.58 17.12L20.73 16.87C20.9041 16.5653 20.9971 16.221 21 15.87V8.12C20.9994 7.76874 20.9063 7.42384 20.73 7.12ZM11.85 4H12.14L18 7.38L12 10.84L6 7.38L11.85 4ZM13 19.5L18.85 16.12L19 15.87V9.11L13 12.58V19.5Z" fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="navbar-text-wrapper">
                                                <div>Blog</div>
                                                <p class="text-size-regular text-color-gray">Get more exciting news and events happening at University of Bohol.</p>
                                            </div>
                                        </a>
                                        <link rel="prefetch" href="/blog"/>
                                        <div id="w-node-_0ceed0a4-2916-ef58-5df1-0cff973726aa-690bb2aa" class="navbar-dropdown-button is-last is-button">
                                            <div class="navbar-text-wrapper is-last">
                                                <div class="heading-style-h7">Like and Follow our Page</div>
                                            </div>
                                            <a data-tracking="join_group" href="https://join.slack.com/t/perfectscalecommunity/shared_invite/zt-1tu9teu9e-Z9tGt4LpNI8tUC3j8obcmQ" target="_blank" class="button is-secondary is-small is-icon w-inline-block">
                                                <div class="icon-embed-xsmall w-embed">
                                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <!-- Outer Circle -->
                                                    <circle cx="256" cy="256" r="256" fill="none" stroke="black" stroke-width="10"/>

                                                    <!-- Upper Left Square (Robotic Arm) -->
                                                    <rect x="106" y="106" width="120" height="120" fill="none" stroke="black" stroke-width="5"/>
                                                    <!-- Robotic Arm Path -->
                                                    <path d="M156,146 L176,126 M176,126 L186,136 M176,126 L196,106 M186,136 L196,146 M186,136 L206,116 M196,146 L216,126" fill="none" stroke="black" stroke-width="5"/>

                                                    <!-- Upper Right Square (Cloud) -->
                                                    <rect x="286" y="106" width="120" height="120" fill="none" stroke="black" stroke-width="5"/>
                                                    <!-- Cloud Path -->
                                                    <path d="M346,146 Q336,126 356,126 Q376,126 376,146 Q376,156 366,156 Q356,156 356,146 Q356,166 346,166 Q336,166 336,156" fill="none" stroke="black" stroke-width="5"/>

                                                    <!-- Lower Left Square (Binary Code) -->
                                                    <rect x="106" y="286" width="120" height="120" fill="none" stroke="black" stroke-width="5"/>
                                                    <!-- Binary Code Path -->
                                                    <text x="136" y="326" font-family="monospace" font-size="24" fill="black">101010</text>
                                                    <text x="136" y="356" font-family="monospace" font-size="24" fill="black">110001</text>
                                                    <text x="136" y="386" font-family="monospace" font-size="24" fill="black">111000</text>

                                                    <!-- Lower Right Square (Database) -->
                                                    <rect x="286" y="286" width="120" height="120" fill="none" stroke="black" stroke-width="5"/>
                                                    <!-- Database Path -->
                                                    <ellipse cx="346" cy="316" rx="30" ry="15" fill="none" stroke="black" stroke-width="5"/>
                                                    <path d="M316,316 L316,356 Q346,366 376,356 L376,316 Q346,306 316,316 Z" fill="none" stroke="black" stroke-width="5"/>
                                                    </svg>
                                                </div>
                                                <div>UB COMPESA</div>
                                            </a>
                                            <link rel="prefetch" href="https://join.slack.com/t/perfectscalecommunity/shared_invite/zt-1tu9teu9e-Z9tGt4LpNI8tUC3j8obcmQ"/>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </nav>
                    <div class="navbar-menu-button w-nav-button">
                        <div class="menu-icon">
                            <div class="menu-icon_line-top"></div>
                            <div class="menu-icon_line-middle">
                                <div class="menu-icon_line-middle-inner"></div>
                            </div>
                            <div class="menu-icon_line-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
            <section data-w-id="43957c11-f721-a551-b0eb-9b527c1612f8" class="hellobar_component">
                <div class="bg-gradient-to-r from-cyan-500 to-blue-500 padding-global">
                    <div class="banner10_content-wrapper">
                    </div>
                </div>
            </section>
        </div>

        <header class="py-12">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-center">
                    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 text-gray-400 font-bold rounded-xl border shadow-2xl p-8 w-full max-w-md">
                        <form action="#">
                            <h2 class="text-center text-2xl mb-4">Sign up</h2>
                            <hr class="border-gray-300 my-4">
                            <div class="flex mb-1">
                                <div class="flex-1">
                                    <div class="mb-4">
                                        <div class="relative">
                                            <input type="text" class="w-full border border-gray-300 rounded-lg p-2 pl-10" placeholder="RFID">
                                            <i class="fas fa-hashtag absolute left-3 top-2.5 text-gray-500"></i>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative">
                                            <input type="text" class="w-full border border-gray-300 rounded-lg p-2 pl-10" placeholder="Student ID">
                                            <i class="fas fa-id-badge absolute left-3 top-2.5 text-gray-500"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <div class="flex justify-center" onclick="document.getElementById('fileInput').click()">
                                        <img id="circleImage" src="/img/default-user-profile-logo.png" alt="Uploaded Image" class="rounded-full w-24 h-24 cursor-pointer">
                                        <input type="file" id="fileInput" class="hidden" accept="image/*" onchange="displayImage(event)">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="relative">
                                    <i class="fas fa-building absolute left-3 top-2.5 text-gray-500"></i>
                                    <select id="extension" name="extension" class="w-full border border-gray-300 rounded-lg p-2 pl-10" required>
                                        <option value="">Extension</option>
                                        <option value="Jr.">Jr.</option>
                                        <option value="Sr.">Sr.</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                        <option value="V">V</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="relative">
                                    <i class="fas fa-user absolute left-3 top-2.5 text-gray-500"></i>
                                    <select id="status" name="status" class="w-full border border-gray-300 rounded-lg p-2 pl-10" required>
                                        <option value="">Status</option>
                                        <option value="Student">Student</option>
                                        <option value="Instructor">Instructor</option>
                                        <option value="Alumni">Alumni</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="relative">
                                    <input type="text" class="w-full border border-gray-300 rounded-lg p-2 pl-10" placeholder="Mobile No.">
                                    <i class="fas fa-phone absolute left-3 top-2.5 text-gray-500"></i>
                                </div>
                            </div>
                            <hr class="border-gray-300 my-4">
                            <button type="submit" class="w-full bg-gradient-to-r from-green-400 to-green-400 hover:from-blue-700 hover:to-blue-900  text-white font-bold py-2 rounded-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <script>
            function displayImage(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('circleImage').setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>        

        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=634ebd5aab79d1fa815c5394" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.prod.website-files.com/634ebd5aab79d1fa815c5394/js/webflow.8331536b4.js" type="text/javascript"></script>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8B2LNN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Start of HubSpot Embed Code -->
        <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/20944943.js"></script>
        <!-- End of HubSpot Embed Code -->
        <!-- Start of dataLayer.push -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                // Function to add event listeners to elements with a specific data-tracking attribute
                function addTrackingEvent(attributeValue, eventName) {
                    document.querySelectorAll(`[data-tracking="${attributeValue}"]`).forEach(function(element) {
                        element.addEventListener('click', function() {
                            dataLayer.push({
                                'event': eventName
                            });
                        });
                    });
                }

                // Adding event listeners for each event type
                addTrackingEvent('login', 'login');
                addTrackingEvent('join_group', 'join_group');
                addTrackingEvent('sign_up', 'sign_up');

            });
        </script>
        <!-- End of dataLayer.push -->
        <style>
            video {
                object-fit: contain;
            }
        </style>
    </body>
</html>