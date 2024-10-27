<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Gajanan Maharaj Bhakta Parivar</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">

    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="./index.css">

    <!-- JavaScript Dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Analytics -->
    <script async src="https://www.google-analytics.com/analytics.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MKX3CB5439"></script>

    <!-- Custom Scripts -->
    <script>
        window.PageName = "Home";
        $(function() {
            $(".tm-header").load("header.html");
            $(".tm-footer").load("footer.html");
        });
    </script>

    <!-- Toast Styling -->
    <style>
        .toast-container {
            position: fixed;
            top: 1rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
        }

        .toast {
            opacity: 0;
            transform: translateY(-20px);
            transition: all 0.3s ease-in-out;
        }

        .toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        .toast.hide {
            opacity: 0;
            transform: translateY(-20px);
        }
    </style>
</head>

<body>
    <div class="tm-header logo">
        <script>
            var page = window.PageName;
            var nav = document.querySelector('.navbar-nav');
            var navChildNodes = nav.getElementsByClassName('nav-item');

            for (var i = 0; i < navChildNodes.length; i++) {

                if (navChildNodes[i].innerText == page) {
                    navChildNodes[i].classList.add("active");
                } else {
                    navChildNodes[i].classList.remove("active");
                }
            }
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
            src="https://www.googletagmanager.com/gtag/js?id=UA-150242746-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-150242746-1');
        </script>
        <?php
        include './navbar.php'
        ?>
        <div class="tm-home-img-container tm-top-margin-100">
            <img src="imgs/front-photo.jpg" alt="Image"
                class="img-fluid tm-home-img">
        </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">गण गण गणांत
                            बोते...</h2>
                        <p class="tm-subtitle">।। संत हेच भूमीवरचे चालते बोलते
                            <span style="white-space: nowrap">परमेश्वर ।।</span>
                        </p>
                        <p>“गजानन महाराज भक्त परिवार” हा एक लोणी येथील भक्त परिवार आहे जो २०१४ पासून सक्रियपणे कार्यरत आहे. थोडक्यात, आपल्या लाडक्या गजानन माऊली भक्तांचे हे एक जवळचे कुटुंब आहे. या परिवाराचे मूळ लोणी येथे आहे, त्याचे भक्त महाराष्ट्राच्या विविध भागातून येतात.</p>
                        <img
                            src="imgs/front-photo.jpg"
                            alt="Image"
                            class="tm-margin-b-20 m-t-3 Img-fluid"
                            style="display:none">
                    </div>
                </div>
                <div class="row" style="padding: 5px;">
                    <div
                        class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <div style="display:none; justify-content: center;">
                            <a href="https://youtu.be/ZQYB5BmO_U8">
                                <b>Gajanan Mauli Murtee creation and arrival in
                                    NJ - Video</b>
                            </a>
                        </div>
                        <div class="video-container text-xs-center"
                            style="display:none">
                            <iframe
                                src="https://youtu.be/ZQYB5BmO_U8"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div style="display:block; justify-content: center;">
                            <img
                                src="imgs/img-3.jpg"
                                alt="Image"
                                class="tm-margin-b-20 img-fluid"
                                width="100%"
                                height="100%">
                        </div>
                        <div style="display:none; justify-content: center;">
                            <img
                                src="img/pranprogram2023.jpg"
                                alt="Image"
                                class="tm-margin-b-20 img-fluid"
                                width="100%"
                                height="100%">
                        </div>
                    </div>
                    <div class="video-container text-xs-center"
                        style="display:none">
                        <iframe
                            src="https://www.youtube.com/embed/VebzC6DJJFE"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="row">
                        <div
                            class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                            <div>
                                <h3 class="tm-gold-text tm-title">Gajanan
                                    Maharaj Bhakta Parivar, Loni</h3>
                                <p>आम्ही, लोंणी गावातील शेतकरी, जे जिल्हा जळगावापासून ५० किमी, मलकापूरपासून ६० किमी आणि भुसावळपासून ४५ किमी दूर स्थित आहे, एक दुर्गम ठिकाण आहे जिथे सुविधा मर्यादित आहेत. आम्ही श्री गजानन महाराजाचे भक्त, त्याच्या आध्यात्मिक भक्ती (भक्ती) आणि स्वेच्छा सेवेसंबंधीच्या शिकवणींचे पालन करतो. हा समूह प्रत्येक महिन्यात नामजप करतो, काही शुभ प्रसंगांवर समूह पारायण करतो, श्री गजानन विजय ग्रंथाबद्दल चर्चा करतो आणि गरजू विद्यार्थ्यांना शालेय साहित्य दान करण्याचा Noble कारणावर काम करतो.</p>
                                <p>आम्ही आमच्या मुलांच्या सक्रिय सहभागाचीही काळजी घेतो. गर्वाने सांगतो की, आमच्या बहुतेक मुलांना श्री गजानन महाराजांचा नामगजर माहित आहे आणि ते ‘गणा गणा गाणात बोते’ मंत्र जपतात. त्यापैकी अनेक शेंगाव येथे श्री गजानन महाराजांच्या सत्संगात सामील झाले आहेत आणि तिथे आध्यात्मिक शिक्षण सुरू केले आहे. अनेकांनी प्रवचन देणे सुरू केले आहे आणि उत्तम तबला आणि पखवाज वाजवतात. ते कथा स्वरूपात पोथी वाचतात आणि पारायण सेवेत भाग घेतात.</p>
                                <p>
                                    आमच्या परिवारातील कोणतेही सदस्य ‘जय गजानन’ म्हणण्यात संकोच करत नाहीत
                                    अपार आनंदाने, आम्ही तुम्हाला उपरोल्लेखित उपक्रमांची ओळख करून देऊ इच्छितो:
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="flex-container ">
                        <div>
                            <div class="tm-content-box2">
                                <img src="imgs/prakatDin.jpg"
                                    alt="Image"
                                    class="tm-margin-b-20 img-fluid">
                                <h4
                                    class="tm-margin-b-20 tm-gold-text">प्रकटदिन उत्सव</h4>
                                <div class="tm-margin-b-10"
                                    style="text-align:justify">
                                    वरील उल्लेखित मासिक कार्यक्रमांव्यतिरिक्त, आम्ही माऊलीचा प्रकटदिन भव्य प्रमाणात साजरा करतो. भक्त विविध ठिकाणांवरून या कार्यक्रमात उपस्थित राहतात. आम्ही संपूर्ण गावासाठी जेवणाची व्यवस्था करतो, तसेच लोंणी येथील गजानन बाबा मंदिरात भंडारा आयोजित करतो.
                                    <div id="Prakatdin-showless"
                                        class="showless">
                                        <p>The first Prakatdin was celebrated in
                                            2017, by the group. Since then the
                                            number of devotees has been
                                            increasing for the Prakatdin
                                            celebration every year.</p>
                                        <p>The devotees are looking forward to
                                            this event and planning begins about
                                            3 months in advance. It is Gajanan
                                            Maharaj’s family event where all the
                                            devotees thrive for excellence.</p>
                                        <p>If you are a devotee of Shree Gajanan
                                            Maharaj and if you could join us in
                                            any of the events mentioned here,
                                            the priceless spiritual pleasure is
                                            guaranteed 😊</p>
                                    </div>
                                </div>
                                <!-- <a class="btn-readmore tm-btn"
                                    div-id="Prakatdin-showless">Read More</a> -->
                            </div>
                        </div>
                        <div>
                            <div class="tm-content-box">
                                <img src="imgs/mahadashmi-ustav.jpg"
                                    alt="Image"
                                    class="tm-margin-b-20 img-fluid">
                                <h4
                                    class="tm-margin-b-20 tm-gold-text">महासमाधी उत्सव
                                </h4>
                                <div class="tm-margin-b-10"
                                    style="text-align:justify">
                                    आम्ही प्रत्येक वर्षी ८ सप्टेंबर रोजी श्री गजानन महाराजांचा “महासमाधी उत्सव” साजरा करतो. श्री गजानन महाराजांनी ८ सप्टेंबर १९१० रोजी समाधी घेतली
                                    <div id="Mahasamadhi-showless"
                                        class="showless">
                                        <p>About 125 devotees arrived to
                                            celebrate Gajanan Mauli’s
                                            Mahasamadhi utsav. The food was
                                            prepared by our Guru sisters.
                                            Everyone has helped in whatever way
                                            they could which made this event
                                            well-organized and successful. It
                                            felt like having Mauli’s cozy
                                            ‘Family get-together’ and not just a
                                            disciplined ‘Social activity. The
                                            celebration started with soothing
                                            Paduka pujan and ended with Gajanan
                                            Maharaj’s rocking arati and
                                            Mahaprasad.</p>
                                        <p>While the chanting and praying
                                            continued for couple of hours,
                                            everyone was mesmerized with the
                                            momentum of Powerful positive energy
                                            and showers of blessings.</p>
                                        <p>May Mauli bless us to celebrate more
                                            and more such events.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <a class="btn-readmore tm-btn"
                                div-id="Mahasamadhi-showless">Read More</a> -->
                        </div>
                        <div>
                            <div class="tm-content-box">
                                <img src="imgs/monthly-upasana.jpg" alt="Image"
                                    class="tm-margin-b-20 img-fluid">
                                <h4 class="tm-margin-b-20 tm-gold-text">आठवड्याचा पारायण समूह
                                </h4>
                                <div class="tm-margin-b-10"
                                    style="text-align:justify">
                                    आमच्या सर्वात लोकप्रिय क्रियाकलापांपैकी एक म्हणजे आठवड्याचा पारायण. आमचे गुरु भाऊ आणि गुरु बहिणींचा एक व्हॉट्सअॅप समूह आहे, ज्यामध्ये हजारो लोक विविध भागांमधून ऑनलाइन सहभागी होतात. मला आनंद आहे की भक्त बहरिन, अँटवर्प आणि पॅरिसमधूनही जोडलेले आहेत आणि प्रत्येक गुरुवारी पारायण वाचतात. पारायण पूर्ण झाल्यावर, आम्ही आमच्या अध्याय पूर्ण केल्यानंतर समूहात संदेश पाठवतो आणि त्याच्या पवित्र चरणी प्रार्थना करतो
                                    <div id="upasana-showless" class="showless">
                                        <p>This is about 3-4 hours activity once
                                            a month (Preferably on Saturday
                                            evening) Devotees also share their
                                            miraculous experiences that
                                            strengthen the bonding with our
                                            beloved Mauli. The Upasana is based
                                            on the theme around the event or
                                            festival occurring in that month
                                            such as Holi, Diwali, Makar
                                            Sankranti, Raksha bandan, Guru
                                            Purnima, Mother’s day, Thanksgiving,
                                            etc. Although one family hosts the
                                            Upasana, it is considered as group
                                            event in our Maharaj’s family and
                                            everyone participates responsibly
                                            with full accountability towards the
                                            event. The Mahaprasad is brought as
                                            potluck by devotee attendees.</p>
                                        <p>Shree Gajanan Maharaj Bhakta Parivar,
                                            USA has a pair of Shree Gajanan
                                            Maharaj’s Padukas brought from
                                            Shegaon, Maharashtra. The family
                                            hosting current month’s Upasana has
                                            the privilege to keep the Padukas at
                                            their home till next Upasana. The
                                            host for the next Upasana lovingly
                                            and respectfully invites Maharaj at
                                            their home for the next Upasana and
                                            to stay thereon. The host having
                                            Padukas courteously takes them to
                                            the next host’s home at the time of
                                            upcoming Upasana and this cycle
                                            continues.</p>
                                    </div>
                                </div>
                                <!-- <a class="btn-readmore tm-btn"
                                    div-id="upasana-showless">Read More</a> -->
                            </div>
                        </div>
                        <div>
                            <div class="tm-content-box">
                                <img src="imgs/food-donation.jpg" alt="Image"
                                    class="tm-margin-b-20 img-fluid">
                                <h4 class="tm-margin-b-20 tm-gold-text">महाप्रसाद</h4>
                                <div class="tm-margin-b-10"
                                    style="text-align:justify">
                                    आठवड्याच्या आरतीच्या वेळी, आम्ही सर्व भक्त उपस्थितांना महाप्रसाद देतो. जर कोणाला त्याच्या आनंदाची शेअर करण्याची इच्छा असेल, तर तो गजानन बाबा यांच्या कृपेने त्याची इच्छा पूर्ण झाल्यावर सर्व भक्तांसाठी महाप्रसादाची व्यवस्था करतो.
                                    county.
                                    <div id="food-showless"
                                        class="showless">Either the host or
                                        someone from the group ensures that the
                                        food items are donated to right
                                        place.</div>
                                </div>
                                <!-- <a class="btn-readmore tm-btn"
                                    div-id="food-showless">Read More</a> -->
                            </div>
                        </div>
                        <div>
                            <div class="tm-content-box">
                                <img src="imgs/yearly-event.jpg" alt="Image"
                                    class="tm-margin-b-20 img-fluid">
                                <h4
                                    class="tm-margin-b-20 tm-gold-text">वार्षिक दिंडी
                                </h4>
                                <div class="tm-margin-b-10"
                                    style="text-align:justify">
                                    आम्ही लोंणीहून शेंगावकडे ५ दिवसांची वार्षिक दिंडी आयोजित करतो. या दिंडीत, आम्ही भक्तांसाठी आवश्यक सर्व व्यवस्था करतो. सुमारे ४५० ते ५०० भक्त या दिंडीत सहभागी होतात आणि गजानन बाबांच्या नावाने चालण्याचा आनंद घेतात. संपूर्ण प्रवासात, आम्ही त्याच्या भजनांचा आणि आरतींचा गजर करतो.
                                    <div id="Spiritual-showless"
                                        class="showless">Interested attendees
                                        participate in the call to share and
                                        acquire knowledge.</div>
                                </div>
                                <!-- <a class="btn-readmore tm-btn"
                                    div-id="Spiritual-showless">Read More</a> -->
                            </div>
                        </div>
                        <div>
                            <div class="tm-content-box2">
                                <img src="imgs/group-parayan.jpg"
                                    alt="Image"
                                    class="tm-margin-b-20 img-fluid">
                                <h4 class="tm-margin-b-20 tm-gold-text">समूह पारायण
                                </h4>
                                <div class="tm-margin-b-10"
                                    style="text-align:justify">
                                    आमचा परिवार काही शुभ प्रसंगांवर, जसे की गजानन महाराज प्रकटदिन, ऋषिपंचमी, गुडीपाडवा, गुरु पौर्णिमा आणि रामनवमी, समूह पारायण आयोजित करतो. परिवाराचे सदस्य त्यांच्या सोयीप्रमाणे या पारायण सेवेत सहभागी होण्यासाठी स्वेच्छेने एकत्र येतात.
                                    <div id="Parayan-showless" class="showless">
                                        There are no restrictions of language,
                                        time and place followed, while
                                        participating in the Parayan Seva.
                                        Devotees can offer parayan any time in
                                        any language and at any place on the
                                        pre-decided day(s).
                                        <p>Chapter allocation is done according
                                            to the sequence in which people
                                            enroll for this Seva. Now a days,
                                            many kids participate in the Parayan
                                            Seva as well. This way devotion
                                            (Bhakti) for Maharaj is being passed
                                            to the next generation 😊</p>
                                        <p>The Group Parayan is conducted in 2
                                            different ways.</p>
                                        <p>
                                            <b>One day Parayan</b> where groups
                                            of 21 devotees each, are formed.
                                            Each group reads pre-allocated one
                                            chapter of Gajanan Vijay Granth on
                                            the day of special occasion for
                                            which the Parayan Seva is being
                                            offered (E.g.: Gudhee Padwa).
                                        </p>
                                        <p>Another form is a
                                            <b>21 day Parayan</b> where people
                                            read one chapter a day sequentially
                                            for 21 days. This way, The group
                                            offers 21 full Parayans in a month.
                                        </p>
                                    </div>
                                </div>
                                <!-- <a class="btn-readmore tm-btn"
                                    div-id="Parayan-showless">Read More</a> -->
                            </div>
                        </div>
                    </div>
                    <!--<div class="row tm-margin-t-small">
                  
                </div>-->
                    <!-- row -->
                </div>
            </div>
        </section>
        <div class="tm-top-margin-100"></div>
        <footer class="tm-footer ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6 tm-copyright-col">
                        <p class="tm-copyright-text">borasedipak18@gmail.com</p>
                    </div>
                    <div class="social-media col-xs-6">
                        <a
                            href="https://www.youtube.com/channel/UCNrJWmClJ6spLpwmLDyq2iA"
                            target="_blank">
                            <i class="fab fa-youtube" style="color:red"></i>
                        </a>
                        <a
                            href="https://www.facebook.com/groups/1905666336394273/"
                            target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <!--<a href="https://twitter.com/gajananmaharajbhaktaparivar" target="_blank"><i class="fab fa-twitter"></i></a> -->
                        <a href="mailto:gmbhaktparivar@gmail.com">
                            <i class="fas fa-envelope" style="color:white"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-mobile-alt"></i> : 7666874346
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- load JS files -->
        <script
            src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
        <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
        <script src="./js/bootstrap.min.js"></script>
        <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="./js/script.js"></script>
        <div id="loom-companion-mv3" ext-id="liecbddmkiiihnedobmlmillhodjkdmb">
            <section id="shadow-host-companion"></section>
        </div>
</body>

</html>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Create a container for toasts if it doesn't exist
        let toastContainer = document.querySelector('.toast-container');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.className = 'toast-container';
            document.body.appendChild(toastContainer);
        }

        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('status') === 'success') {
            showToast('success');
            window.history.replaceState({}, document.title, window.location.pathname);
        }
    });

    function showToast(type) {
        const toastContainer = document.querySelector('.toast-container');
        const toast = document.createElement('div');
        toast.className = "toast max-w-xs rounded-lg shadow-lg flex items-center p-4";

        let content = '';
        if (type === 'success') {
            toast.classList.add("bg-green-100", "text-green-500");
            content = `
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 bg-green-200 rounded-full">
                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
            </div>
            <div class="ml-3 text-sm font-medium">Registration successful Please view your pass!</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" onclick="this.parentElement.remove()">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        `;
        } else if (type === 'error') {
            toast.classList.add("bg-red-100", "text-red-500");
            content = `
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 bg-red-200 rounded-full">
                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
            </div>
            <div class="ml-3 text-sm font-medium">Error occurred!</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" onclick="this.parentElement.remove()">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        `;
        }

        toast.innerHTML = content;
        toastContainer.appendChild(toast);

        // Trigger animation
        requestAnimationFrame(() => {
            toast.classList.add('show');
        });

        // Auto-remove after delay
        setTimeout(() => {
            toast.classList.add('hide');
            setTimeout(() => {
                toast.remove();
            }, 300); // Match transition duration
        }, 3000);
    }
</script>