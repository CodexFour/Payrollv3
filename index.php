<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="src/assets/icons/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <title>Green Valley Payroll — Streamlined Solutions for Seamless Payroll Management</title>
</head>
<body class="landing-body">
<header>
    <nav class="navigation">
        <a href="#home" class="navigation__logo">
            <img class="icon-l" src="src/assets/icons/logo.png"
                 alt="">
            <h1 class="text-title txt-xs nav-text-color nav-title">GREEN VALLEY PAYROLL</h1>
        </a>
        <span class="hamburger">
                    <button class="menu">
                        <svg width="40"
                             height="40"
                             viewBox="0 0 100 100">
                            <path class="line line1"
                                  d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"/>
                            <path class="line line2" d="M 20,50 H 80"/>
                            <path class="line line3"
                                  d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"/>
                        </svg>
                    </button>
                </span>
        <ul class="list nav__list collapse__menu" data-aos="fade-down">
            <li class="list__attribute">
                <a href="#home" class="link text-regular txt-xxs link_active">HOME</a>
            </li>
            <li class="list__attribute">
                <a href="#features" class="link text-regular txt-xxs">FEATURES</a>
            </li>
            <li class="list__attribute">
                <a href="#about" class="link text-regular txt-xxs">ABOUT</a>
            </li>
            <li class="list__attribute">
                <!--                <a href="src/modal/login/login.html" class="link text-regular txt-xxs button">LOGIN</a>-->
                <button class="btn text-regular txt-xxs" onclick="openModal('.modal-login')">LOGIN</button>
            </li>
        </ul>
    </nav>
</header>
<div>
    <section class="landing component" id="home">
        <section class="main-heading">
            <h1 class="text-bold txt-m">Green Valley Payroll System</h1>
            <p class="text-bold txt-s main-description">Your <span class="mark">one-stop solution</span> for managing
                payroll and employee compensation efficiently.</p>
        </section>

        <section class="main-hero">
            <div class="hero email-hero">
                <img alt=""
                     class="icon-m icon-round email-avatar"
                     src="src/assets/img/profile.jpg"
                />

                <div class="hero-content email-content">
                    <p class="text-subtitle txt-xxs">example@gmail.com</p>
                    <div class="email-line"></div>
                </div>

            </div>
            <div class="hero hero-payroll">
                <div class="hero-content payroll-content">
                    <p class="text-subtitle txt-xxs">Next Payroll Date</p>
                    <div class="email-line"></div>

                    <div class="hero-payroll-container">
                        <div class="hero-payroll-date">
                            <p class="text-subtitle txt-xxs hero-payroll-details">03</p>
                            <div class="email-line hero-payroll-line"></div>
                        </div>
                        <div class="hero-payroll-date">
                            <p class="text-subtitle txt-xxs hero-payroll-details">15</p>
                            <div class="email-line hero-payroll-line"></div>
                        </div>
                        <div class="hero-payroll-date">
                            <p class="text-subtitle txt-xxs hero-payroll-details">2023</p>
                            <div class="email-line hero-payroll-line"></div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="hero hero-chart">
                <div class="hero-content chart-content">
                    <div class="hero-chart-bar-graph">
                        <div class="hero-bar-graph hero-chart-bar-graph-one"></div>
                    </div>
                    <div class="hero-chart-bar-graph">
                        <div class="hero-bar-graph hero-chart-bar-graph-two"></div>
                    </div>
                    <div class="hero-chart-bar-graph">
                        <div class="hero-bar-graph hero-chart-bar-graph-three"></div>
                    </div>
                    <div class="hero-chart-bar-graph">
                        <div class="hero-bar-graph hero-chart-bar-graph-four"></div>
                    </div>
                </div>

            </div>
        </section>
    </section>
</div>


<main class="main">
    <div class="component landing-features" id="features">
        <h1 class="text-title txt-m landing-title feature-title">FEATURES</h1>
        <img
                alt=""
                class="icon-xl landing_page_line"
                src="src/assets/icons/line.webp"

        />
        <div class="feature-card">
            <div class="card feature-card-one">
                <img
                        alt=""
                        class="icon-s feature-pin"
                        src="src/assets/icons/pin.png">
                <img
                        alt=""
                        class="icon-xxl feature-icon"
                        src="src/assets/icons/svg/Effortless Payroll Processing.svg">
                <div class="feature-description">
                    <h1 class="text-title txt-s">Effortless Payroll Processing</h1>
                    <p class="text-regular txt-xs feature-description-content">Say goodbye to manual calculations and
                        paperwork. Our system automates the
                        entire payroll process, making it easy to
                        pay your staff accurately and on time.</p>
                </div>
            </div>
            <div class="card feature-card-one row-reverse">
                <img
                        alt=""
                        class="icon-s feature-pin feature-pin-reverse"
                        src="src/assets/icons/pin.png">
                <img
                        alt=""
                        class="icon-xxl feature-icon"
                        src="src/assets/icons/svg/Employee Self-Service.svg">
                <div class="feature-description">
                    <h1 class="text-title txt-s">Employee Self-Service</h1>
                    <p class="text-regular txt-xs feature-description-content">Empower your employees to access their
                        pay stubs, tax documents, and update personal information conveniently through a secure
                        portal.</p>
                </div>
            </div>
            <div class="card feature-card-one">
                <img
                        alt=""
                        class="icon-s feature-pin"
                        src="src/assets/icons/pin.png">
                <img
                        alt=""
                        class="icon-xxl feature-icon"
                        src="src/assets/icons/svg/Comprehensive Reporting.svg">
                <div class="feature-description">
                    <h1 class="text-title txt-s">Comprehensive Reporting</h1>
                    <p class="text-regular txt-xs feature-description-content">Gain insights into your payroll data
                        with detailed reports. Monitor expenses, track overtime, and make informed financial
                        decisions.</p>
                </div>
            </div>
            <div class="card feature-card-one row-reverse">
                <img
                        alt=""
                        class="icon-s feature-pin feature-pin-reverse"
                        src="src/assets/icons/pin.png">
                <img
                        alt=""
                        class="icon-xxl feature-icon"
                        src="src/assets/icons/svg/Tax Compliance.svg">
                <div class="feature-description">
                    <h1 class="text-title txt-s">Tax Compliance</h1>
                    <p class="text-regular txt-xs feature-description-content">Our system ensures that you are always
                        up-to-date with the latest tax regulations, reducing the risk of compliance issues.</p>
                </div>
            </div>
            <div class="card feature-card-one">
                <img
                        alt=""
                        class="icon-s feature-pin"
                        src="src/assets/icons/pin.png">
                <img
                        alt=""
                        class="icon-xxl feature-icon"
                        src="src/assets/icons/svg/Attendance Tracking.svg">
                <div class="feature-description">
                    <h1 class="text-title txt-s">Time and Attendance Tracking</h1>
                    <p class="text-regular txt-xs feature-description-content">Easily manage employee hours and
                        attendance. Our system offers time tracking and integrates seamlessly with your existing time
                        clock.</p>
                </div>
            </div>
            <div class="card feature-card-one row-reverse">
                <img
                        alt=""
                        class="icon-s feature-pin feature-pin-reverse"
                        src="src/assets/icons/pin.png">
                <img
                        alt=""
                        class="icon-xxl feature-icon"
                        src="src/assets/icons/svg/Customization.svg">
                <div class="feature-description">
                    <h1 class="text-title txt-s">Customization</h1>
                    <p class="text-regular txt-xs feature-description-content">Tailor the system to your unique needs.
                        Create custom fields, deductions, and benefits to match your college's specific requirements.Iy
                        to
                        pay your staff accurately and on time.</p>
                </div>
            </div>
        </div>
        <div class="landing_info">
            <h1 class="text-title txt-m landing-title landing-info-title">Why Choose Green Valley <br>Payroll
                System?</h1>

            <div class="landing-ads">
                <div class="card landing_info_ads_container">
                    <img
                            alt=""
                            class="icon-xxl ads-icon icon-round"
                            src="src/assets/icons/ads/reliability.webp"
                    >
                    <div class="ads-content">
                        <h1 class="text-title txt-s ads-header">Reliability</h1>
                        <p class="text-regular txt-xs ads-details">Trust our robust, secure system to handle your
                            payroll,
                            backed
                            by the
                            latest technology.</p>
                    </div>
                </div>
                <div class="card landing_info_ads_container">
                    <img
                            alt=""
                            class="icon-xxl ads-icon icon-round"
                            src="src/assets/icons/ads/data_security.webp"
                    >
                    <div class="ads-content">
                        <h1 class="text-title txt-s ads-header">Data Security</h1>
                        <p class="text-regular txt-xs ads-details">Protect sensitive employee information with
                            advanced security measures, including encryption and access controls.</p>
                    </div>
                </div>
                <div class="card landing_info_ads_container">
                    <img
                            alt=""
                            class="icon-xxl ads-icon icon-round"
                            src="src/assets/icons/ads/user_interface.webp"
                    >
                    <div class="ads-content">
                        <h1 class="text-title txt-s ads-header">User-Friendly Interface</h1>
                        <p class="text-regular txt-xs ads-details">Easily navigate and operate our intuitive
                            interface, reducing the learning curve for your staff.</p>
                    </div>
                </div>
                <div class="card landing_info_ads_container">
                    <img
                            alt=""
                            class="icon-xxl ads-icon icon-round"
                            src="src/assets/icons/ads/dedicated_suport.webp"
                    >
                    <div class="ads-content">
                        <h1 class="text-title txt-s ads-header">Dedicated Support</h1>
                        <p class="text-regular txt-xs ads-details">Our support team is ready to assist you with any
                            questions or issues, ensuring a smooth experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card landing_join">
        <h1 class="text-title txt-m landing-title">JOIN US AND BE A LEADER</h1>
        <div class="join-content">
            <div>
                <p class="text-regular txt-s join-details">Become a part of the ever-growing Green Valley Leadership
                    Community and
                    elevate your leadership capabilities. Connect, learn, and lead with confidence.</p>
                <button class="btn btn-save btn-name txt-xs btn-contact">CONTACT US</button>
            </div>
            <img
                    alt=""
                    class="join-icon"
                    src="src/assets/icons/join.svg"
            >
        </div>
    </div>
    <hr class="horizontal-line">
    <div class="component" id="about">
        <div class="card landing_about">
            <h1 class="text-title txt-m landing-title">ABOUT US</h1>
            <div class="about-content">
                <img
                        alt=""
                        class="about-icon"
                        src="src/assets/icons/about.svg"
                >
                <p class="text-regular txt-s about-details"> Green Valley Payroll System is a trusted leader in
                    payroll
                    and workforce management solutions. With a commitment to simplifying and streamlining payroll
                    processes
                    for businesses of all sizes, we provide a comprehensive suite of tools and services designed to save
                    you
                    time, reduce compliance risks, and ensure accurate and on-time payroll processing. Our dedicated
                    team of
                    experts is passionate about delivering excellence in payroll management, empowering organizations to
                    focus on what they do best while we take care of their payroll needs. Join us on the journey towards
                    hassle-free, efficient, and environmentally responsible payroll management with the Green Valley
                    Payroll
                    System.</p>
            </div>
        </div>
    </div>
</main>

<footer class="landing-footer">
    <div class="landing-footer-info">
        <img
                alt="logo"
                class="icon-xl"
                src="src/assets/icons/logo.png"
        />
        <div class="footer-details">
            <p class="text-bold txt-xxs">© 2023 Green Valley Payroll System. All rights reserved.</p>
            <p class="text-bold txt-xxs"><a href="#" class="text-bold txt-xxs">Privacy Policy</a> | <a href="#"
                                                                                                       class="text-bold txt-xxs">Terms
                    of Service</a>.</p>
        </div>
    </div>
    <img
            alt=""
            class="about-vertical-line"
            src="src/assets/icons/svg/vertical-line.svg"
    >
    <div class="landing-footer-contact">
        <div class="common_contacts">
            <a href="https://www.facebook.com/GreenValleyPayroll" target="_blank">
                <div class="facebook">
                    <img alt=""
                         class="icon-s"
                         src="src/assets/icons/contacts/facebook.webp">
                    <p class="text-bold txt-xxs footer-contact-name">Green Valley Payroll System</p>
                </div>
            </a>
            <div class="telephone">
                <img alt=""
                     class="icon-s"
                     src="src/assets/icons/contacts/phone-call.webp">
                <p class="text-bold txt-xxs footer-contact-name">(083) 228 4034</p>

            </div>
        </div>
        <div class="common_contacts">
            <a href="https://www.facebook.com/GreenValleyPayroll" target="_blank">
                <div class="address">
                    <img alt=""
                         class="icon-s"
                         src="src/assets/icons/contacts/gps.webp">
                    <p class="text-bold txt-xxs footer-contact-name">Km. 2 Bo. 2, Gen. Santos Drive, Koronadal,
                        Philippines</p>

                </div>
            </a>
            <a href="mailto:info@greenvalleyph.com" target="_blank">
                <div class="email">
                    <img alt=""
                         class="icon-s"
                         src="src/assets/icons/contacts/email.webp">
                    <p class="text-bold txt-xxs footer-contact-name">info@greenvalleyph.com</p>

                </div>
            </a>
        </div>
    </div>
</footer>

<!--Modals-->
<dialog class="modal modal-forgot"> <?php include_once 'forgotPassword.php' ?> </dialog>
<dialog class="modal modal-resetPassword"> <?php include_once 'resetpassword.php' ?> </dialog>
<dialog class="modal modal-login"> <?php include_once 'src/modal/login/login.php' ?> </dialog>


<!--<script src="main.js"></script>-->
<script src="src/js/controller/LoginController.js"></script>
<script src="src/js/modal.js"></script>
<script src="src/js/HTTPRequest.js"></script>
</body>
</html>
