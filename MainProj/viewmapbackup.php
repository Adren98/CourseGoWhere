<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-kit
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="./assets/css/Viewmap.css">
    <title>
        CourseGoWhere
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet"/>

    <script>
        function filter() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    console.log(td);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</head>

<body class="pagination-sections">
<!-- Navbar Light -->
<?php

include 'navfloating.php';
?>

<div class="container">
    <div class="row">


        <div class="col-lg-4 col-sm-12">

            <div class="row" style="padding-left: 0">
            <pre class="wp-block-syntaxhighlighter-code"><form method="POST">
            <p>
                Select choice of School:
                <select name="School" id="School" onchange="this.form.submit()">
                    <option value="Singapore">None selected</option>
                    <option value="Nanyang Polytechnic">Nanyang Polytechnic</option>
                    <option value="Ngee Ann Polytechnic">Ngee Ann Polytechnic</option>
                    <option value="Republic Polytechnic">Republic Polytechnic</option>
                    <option value="Singapore Polytechnic">Singapore Polytechnic</option>
                    <option value="Temasek Polytechnic">Temasek Polytechnic</option>
                </select>
            </p>
            </div>

            <div class="row">
                <?php
                if (isset($_POST["School"]))
                {
                    $address = $_POST["School"];
                    if($address =="Nanyang Polytechnic" )
                    {
                        $picture_location ="Picture/nanyang-polytechnic.png";
                        $information = "The history of the NYP can be traced back to its predecessor institutions of the late 1970s and early 1980s - the Japan-Singapore Institute (JSI), German-Singapore Institute (GSI) and French-Singapore Institute(FSI) set up by the Economic Development Board (EDB) of Singapore.";
                        $button_address = "https://www.nyp.edu.sg";
                    }
                    elseif ($address =="Ngee Ann Polytechnic")
                    {
                        $picture_location ="Picture/ngee-ann-polytechnic.png";
                        $information = "The history of Ngee Ann Polytechnic (NP) could be traced back to 1963, when it started out as Ngee Ann College. Its founder, The Ngee Ann Kongsi, had envisioned setting up a quality educational institution to link the Chinese-speaking community to its cultural roots during the colonial-rule era. The College had since morphed into a full-fledged polytechnic, a public institution overseen by an independent Council.";
                        $button_address = "https://www.np.edu.sg";
                    }
                    elseif ($address =="Republic Polytechnic")
                    {
                        $picture_location ="Picture/republic-polytechnic.png";
                        $information = "First established in 2002, Republic Polytechnic (RP) had an initial enrolment of just 800. Over the years, RP has grown from strength to strength building our reputation as a tertiary institution of academic excellence. Today, we are home to a lively community of about 14,000 students and more than 1,000 staff.";
                        $button_address = "https://www.rp.edu.sg";
                    }
                    elseif ($address =="Singapore Polytechnic")
                    {
                        $picture_location ="Picture/singapore-polytechnic.png";
                        $information = "Singapore Polytechnic was set up on 27 October 1954, making it the very first polytechnic to be established in Singapore. Singapore Polytechnic started out right in the heart of the financial district. Today, the polytechnic is located strategically in Dover Road - in the educational belt and science hub in the western part of Singapore. ";
                        $button_address = "https://www.sp.edu.sg";
                    }
                    elseif ($address =="Temasek Polytechnic") {
                        $picture_location = "Picture/temasek-polytechnic.png";
                        $information = "Situated in Tampines next to the idyllic Bedok Reservoir, Temasek Polytechnic is a leading institution of higher learning in Singapore. Established in April 1990, we take pride in equipping our students with lifelong skills and digital knowledge for a future of dynamic change.";
                        $button_address = "https://www.tp.edu.sg";
                    }
                }
                else
                {
                    $picture_location ="Picture/logo.png";
                    $information = "Select your School";
                    $button_address = "";
                }
                ?>


                <div class="card" onclick="this.classList.toggle('expanded')">
                    <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" height="100" width="150"><path d="M9.875 23.825L51.14 0l41.267 23.825v47.65L51.14 95.3 9.876 71.475v-47.65" fill="#463833"/><path d="M12.067 25.09L51.14 2.533l39.075 22.56v45.117L51.14 92.767l-39.073-22.56V25.092" fill="#d8ae4b"/><path d="M90.215 70.21v-.385c-.567.33-1.165.608-1.8.817-1.417.572-2.888.834-4.412.786-1.164-.188-2.327-.383-3.488-.586-1.703-.132-3.397.283-5.104.27-.484 0-.98-.047-1.464-.042-2.222.026-4.086 1.743-6.32 1.62-1.067-.06-.878-.708-1.037-1.635-.14-.81-.15-1.728-1.11-1.846-.604.1-1.207.202-1.81.31-1.058.138-1.972.117-2.99-.155-.522-.14-1.064-.365-1.607-.406-.303.008-.603.028-.903.06-.995-.202-1.576-1.353-2.277-1.99-1.42-1.288-2.833-.705-4.542-.416-1.03.175-2.25.664-3.07-.228-1.108-1.208-.726-2.866-2.477-3.556-.848-.335-1.897-.503-2.8-.576-1.415-.116-3.192-.087-4.35-1.065-.512-.435-.793-1.005-.845-1.71-.42-1.423-.965-2.793-1.637-4.114-1.408-2.105-3.755-.843-5.66-2.055-1.545-.982-2.275-3.353-2.903-4.93-.632-1.583-1.026-3.666-2.212-4.97-.425-.502-.948-.845-1.57-1.03-1.044-.593-1.635-1.945-2.046-3.025-.532-1.39-.56-4.61-2.203-5.24-1.324-.51-3.134.655-4.426-.258-1.46-1.033-1.137-5.008-1.116-6.35.018-1.182.098-2.464.28-3.713l-2.247 1.297v45.12L51.14 92.767l39.075-22.56" fill="#d49235"/><path d="M36.298 11.102c.048.043.098.08.146.128 1.453 1.418 2.48 1.178 4.457.987.837-.087 1.676-.116 2.516-.088.772 0 1.013.12 1.592.255 1.095.253 2.128-.235 3.012-.905.532-.555 1.13-1.03 1.79-1.42.783-.234.825.122 1.248.62.716.843 1.063 1.126 2.108 1.51 1.414.517 2.293 1.32 2.573 2.792.08.437.063 1.373.433 1.702.49.118.984.112 1.48-.02 1.025-.133 2.115-.452 3.152-.204 1.014.24 1.84.933 2.852 1.19 1.192.3 2.315.26 3.533.278.543-.03 1.065.058 1.568.258.654.428.58 1.5.94 2.11.526.887 1.453 1 2.44 1.03 1.33.042 2.688-.303 3.425 1.18.536 1.078.044 2.27.272 3.384 1.27.39 2.694-.897 4.037-.516 1.58.45 2.835 2.128 4.247 2.904.65.357 1.312.397 1.958.88.687.517.84.874 1.132 1.665.524 1.416 1.23 3 2.294 4.102.23.237.468.46.71.677v-10.51L51.142 2.53 36.3 11.102" fill="#efc65f"/><path d="M14.92 26.738L51.14 5.825l36.222 20.913v41.825l-36.22 20.912L14.92 68.563z" fill="none" stroke="#463833" stroke-width=".588" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="2.35002902, 2.35002902"/><g fill="#463833"><g><path d="M26.392 39.442q-2.39 0-3.803 1.813-1.402 1.813-1.402 4.94 0 3.118 1.4 4.93 1.414 1.813 3.804 1.813 2.39 0 3.78-1.812 1.403-1.813 1.403-4.93 0-3.128-1.402-4.94-1.39-1.814-3.78-1.814zm3.075 14.69l2.89 3.217h-2.65l-2.402-2.643-.554.033q-.184.01-.358.01-3.423 0-5.476-2.32-2.043-2.332-2.043-6.234 0-3.913 2.043-6.234 2.053-2.333 5.476-2.333 3.412 0 5.454 2.332 2.043 2.32 2.043 6.234 0 2.874-1.142 4.92-1.13 2.043-3.28 3.016zM34.156 49.545V42.05h2v7.418q0 1.757.673 2.64.673.875 2.02.875 1.62 0 2.553-1.05.946-1.05.946-2.863v-7.02h1.998v12.38h-2v-1.9q-.727 1.127-1.694 1.68-.956.54-2.228.54-2.097 0-3.183-1.325-1.087-1.327-1.087-3.88zM51.375 48.207q-2.423 0-3.358.564-.934.565-.934 1.924 0 1.084.695 1.725.707.63 1.913.63 1.663 0 2.663-1.195 1.01-1.205 1.01-3.194v-.453zm3.987-.84v7.064h-2v-1.88q-.683 1.13-1.705 1.67-1.02.53-2.5.53-1.868 0-2.976-1.06-1.096-1.072-1.096-2.863 0-2.09 1.37-3.15 1.38-1.06 4.106-1.06h2.803v-.2q0-1.404-.913-2.167-.9-.773-2.542-.773-1.043 0-2.032.254-.99.255-1.9.764v-1.88q1.096-.43 2.128-.64 1.032-.222 2.01-.222 2.64 0 3.944 1.393 1.304 1.393 1.304 4.222zM57.037 37.232h2v17.2h-2zM63.29 42.05h2v12.38h-2zm0-4.818h2v2.575h-2zM71.253 38.536v3.515h4.118v1.58h-4.117v6.722q0 1.514.402 1.945.413.43 1.663.43h2.053v1.704H73.32q-2.314 0-3.195-.873-.88-.884-.88-3.205v-6.72h-1.466v-1.58h1.466v-3.516z"/><path d="M80.837 55.58q-.848 2.21-1.652 2.885-.804.674-2.15.674h-1.598v-1.703h1.173q.826 0 1.282-.398.457-.4 1.01-1.88l.36-.928-4.923-12.18h2.118l3.803 9.682 3.804-9.683h2.12z"/></g><path d="M36.213 23.067l3.632 7.746.386-.18-1.493-3.188.73-.343c.933-.437 1.076-1.246.5-2.475l-.394-.84c-.53-1.13-1.235-1.717-2.142-1.29zm2.306 3.913l-1.703-3.63.832-.39c.654-.307 1.127.133 1.52.974l.427.908c.44.94.333 1.476-.347 1.795z" /><path d="M40.19 21.32l2.528 8.173.408-.127-1.13-3.654.646-.2c.71-.22 1.255-.056 1.59 1.03l.398 1.284c.138.444.255.728.437.94l.425-.132c-.216-.227-.35-.595-.454-.934l-.394-1.272c-.274-.888-.715-1.404-1.41-1.393.553-.376.666-1.013.37-1.97l-.22-.713c-.358-1.156-.952-1.727-1.9-1.433zm1.653 3.9l-1.094-3.537.877-.27c.673-.21 1.093.237 1.364 1.112l.24.77c.34 1.098-.004 1.5-.73 1.723z" /><path d="M45.638 23.93l-.56-3.4 2.105-.347-.084-.507-2.528.417 1.393 8.44 2.526-.415-.082-.507-2.106.35-.58-3.523 1.748-.288-.084-.508z" /><path d="M52.362 20.38l.123 7.6.408-.006-.138-8.554-.613.01-1.23 7.586-1.488-7.542-.612.01.14 8.554.38-.006-.124-7.576 1.496 7.542.427-.007z" /><path d="M54.533 19.624l-.986 8.5.424.048.987-8.498z" /><path d="M57.022 19.967l-.417-.09-1.37 6.318c-.26 1.195-.07 2.2.9 2.41.97.21 1.552-.627 1.81-1.822l1.37-6.318-.39-.085-1.374 6.343c-.194.896-.598 1.533-1.296 1.382-.698-.152-.802-.9-.607-1.795z" /><path d="M64.108 23.163l-2.81 7.064.38.15 3.162-7.95-.57-.225-4.055 6.53 1.53-7.535-.57-.227-3.162 7.95.353.14 2.802-7.04-1.52 7.537.395.158z" /><path d="M40.85 65.204c-.71-.64-1.587-.323-2.46.618-1.62 1.747.074 3.37-1.322 4.876-.624.672-1.27.972-1.794.486s-.272-1.152.352-1.824l.324-.35-.3-.277-.3.322c-.838.905-1.154 1.846-.427 2.52.728.676 1.643.29 2.482-.614 1.605-1.728-.09-3.352 1.323-4.875.615-.662 1.263-.978 1.78-.5.516.48.24 1.16-.374 1.822l-.15.16.3.28.124-.135c.84-.905 1.163-1.84.442-2.508z" /><path d="M42.085 66.332l-4.937 6.987.348.245 4.938-6.987z" /><path d="M42.788 67.964l-1.67 7.714.423.216 3.9-7.615-.346-.18-3.293 6.43 1.56-7.317-.496-.254-3.9 7.614.347.178z" /><path d="M47.02 68.676c-.956-.27-1.6.515-1.934 1.704l-1.182 4.213c-.334 1.188-.192 2.193.764 2.46.956.27 1.6-.515 1.934-1.703l.264-.942-.393-.11-.274.977c-.25.882-.693 1.47-1.38 1.276-.69-.192-.763-.924-.515-1.807l1.202-4.283c.248-.883.695-1.48 1.383-1.288.687.193.758.937.51 1.82l-.2.717.392.11.192-.683c.333-1.19.19-2.193-.765-2.46z" /><path d="M48.58 73.126l.3-3.434 2.126.186.044-.512-2.55-.222-.744 8.523 2.55.223.045-.512-2.124-.185.31-3.556 1.765.154.046-.51z" /><path d="M55.055 77.55l.42-.07-1.386-8.454-.33.054c-.063.654-.274 1.197-.896 1.36l.08.483c.42-.12.717-.44.88-.875z" /><path d="M56.237 68.352c-.934.337-1.033 1.347-.606 2.53l.354.978c.41 1.138 1.06 1.84 1.914 1.53.54-.194.8-.573.775-1.24l.714 1.977c.344.955.306 1.696-.375 1.942-.672.24-1.17-.293-1.486-1.167l-.045-.127-.383.14.037.102c.423 1.173 1.128 1.867 2.06 1.53.953-.343 1.034-1.347.603-2.543l-1.478-4.092c-.428-1.184-1.14-1.902-2.083-1.56zm.178.494c.672-.243 1.175.303 1.49 1.177l.353.977c.316.874.277 1.616-.395 1.858-.672.243-1.174-.304-1.49-1.177l-.352-.976c-.315-.874-.277-1.616.395-1.858z" /><path d="M58.905 67.104c-.86.516-.703 1.55-.067 2.607l.283.472.35-.21-.3-.503c-.473-.786-.63-1.55-.017-1.917.637-.382 1.21.086 1.72.934 1.21 2.01-.492 3.79 1.064 6.377l.214.356 2.355-1.415-.265-.44-1.988 1.196-.05-.083c-1.274-2.172.297-4.115-.975-6.23-.643-1.07-1.455-1.664-2.322-1.143z" /><path d="M66.402 72.346l.324-.292-4.044-7.202-.344-.38-2.093 1.89.353.39 1.77-1.598z" /></g><path d="M34.343 28.863l1.375 1.493-1.99.396-.996 1.768-.992-1.77-1.99-.4 1.38-1.49-.235-2.016 1.843.85 1.844-.846-.24 2.015M69.483 28.863l1.374 1.493-1.99.396-.997 1.768-.99-1.77-1.99-.4 1.378-1.49-.235-2.016 1.844.85 1.844-.846-.237 2.015M32.663 66.905l1.374 1.493-1.99.395-.995 1.77-.992-1.772-1.99-.4 1.378-1.49-.234-2.015 1.843.85 1.845-.846-.24 2.015M71.01 66.905l1.374 1.493-1.99.395-.995 1.77-.993-1.772-1.99-.4 1.378-1.49-.234-2.015 1.844.85 1.845-.846-.24 2.015M50.792 33.97c-.09.203-.212.398-.39.528-.16.12-.357.192-.558.216-.41.048-.847-.105-1.107-.434-.155-.196-.235-.44-.25-.686-.06-.993.82-1.562 1.717-1.414.316.052.578.32.71.6.075.16.094.3.076.474-.02.185-.06.366-.125.54-.022.057-.046.117-.073.176zm12.72 2.82c-2.712-4.382-7.133-5.778-11.874-5.622-.274-.257-.637-.45-1.122-.528-4.943-.795-10.65 3.494-13.685 6.996-.086.102.056.25.15.15 3.09-3.298 8.752-6.107 10.868-6.51.482-.1 1.192-.05 1.91.04-2.446.418-2.804 4.022-.04 4.15 1.922.09 3.05-2.364 2.29-3.82.11.01.212.02.284.018 1.522-.03 2.95.087 4.382.497 2.695.772 4.77 2.692 6.39 4.89.194.26.626.028.447-.26M49.564 61.28c.09-.202.213-.396.39-.528.162-.12.36-.192.558-.215.412-.05.848.105 1.108.434.155.197.235.44.25.687.06.992-.82 1.562-1.717 1.414-.317-.052-.578-.32-.71-.598-.075-.16-.094-.302-.076-.477.02-.183.06-.364.125-.537.022-.06.046-.12.073-.178zm-12.718-2.818c2.71 4.38 7.132 5.778 11.873 5.62.273.257.636.45 1.12.53 4.945.793 10.65-3.496 13.686-6.998.088-.1-.056-.248-.15-.148-3.09 3.296-8.75 6.105-10.867 6.507-.483.1-1.192.05-1.91-.04 2.446-.416 2.802-4.02.038-4.15-1.92-.088-3.048 2.365-2.29 3.822-.108-.01-.212-.02-.284-.02-1.522.033-2.95-.086-4.382-.496-2.694-.772-4.77-2.692-6.39-4.888-.194-.262-.624-.03-.446.26M51.14 89.475c.784.204 1.78-.056 2.577-.175.15-.022.15-.28 0-.304-.796-.12-1.793-.378-2.576-.174-.323.084-.323.57 0 .653" fill="#463833"/></svg>
                    <div class="text1">
                        <div class="text-content">
                            <h1 class="title">NP</h1>
                            <div class="body-text">test</div>
                        </div>
                    </div>
                    <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30"><path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5"/></svg>
                </div>



            </div>


            <div class="col-lg-8 col-sm-12" style="margin-top: 10%">
                <div class="col-sm">
                    <?php
                    if (isset($_POST["School"])) {

                        $address = $_POST["School"] ?: "singapore";
                        $address = str_replace(" ", "+", " $address");
                        ?>

                        <iframe width="100%" height="700 "
                                src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

                        <?php
                    } else {
                        ?>

                        <iframe width="100%" height="700"
                                src="https://maps.google.com/maps?q=<?php echo "singapore"; ?>&output=embed"></iframe>

                        <?php
                    }
                    ?>
                </div>

            </div>

        </div>
    </div>


    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--            <footer class="footer py-5">-->
    <!--                <div class="container">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-lg-8 mb-4 mx-auto text-center">-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
    <!--                                Company-->
    <!--                            </a>-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
    <!--                                About Us-->
    <!--                            </a>-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
    <!--                                Team-->
    <!--                            </a>-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
    <!--                                Products-->
    <!--                            </a>-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
    <!--                                Blog-->
    <!--                            </a>-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
    <!--                                Pricing-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
    <!--                                <span class="text-lg fab fa-dribbble"></span>-->
    <!--                            </a>-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
    <!--                                <span class="text-lg fab fa-twitter"></span>-->
    <!--                            </a>-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
    <!--                                <span class="text-lg fab fa-instagram"></span>-->
    <!--                            </a>-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
    <!--                                <span class="text-lg fab fa-pinterest"></span>-->
    <!--                            </a>-->
    <!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
    <!--                                <span class="text-lg fab fa-github"></span>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-8 mx-auto text-center mt-1">-->
    <!--                            <p class="mb-0 text-secondary">-->
    <!--                                Copyright ©-->
    <!--                                <script>-->
    <!--                                    document.write(new Date().getFullYear())-->
    <!--                                </script>-->
    <!--                                Material by Creative Tim.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </footer>-->

</body>

</html>