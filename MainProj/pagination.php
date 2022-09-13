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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Material Kit 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/material-kit.css?v=3.0.4" rel="stylesheet"/>
</head>

<body class="pagination-sections">
<!-- Navbar Light -->
<?php

include 'nav.php';
?>
<!-- End Navbar -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="mb-4 w-100 w-md-50 w-lg-25">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://demos.creative-tim.com/material-kit-pro/index">Navigation</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pagination</li>
                    </ol>
                </nav>
                <h3>Pagination</h3>
            </div>
            <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                        <div class="col-lg-3 me-auto">
                            <p class="lead text-dark pt-1 mb-0">Pagination Simple</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="nav-wrapper position-relative end-0">
                                <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                                           href="#preview-pagination-simple" role="tab" aria-selected="true">
                                            <i class="fas fa-desktop text-sm me-2"></i> Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab"
                                           href="#code-pagination-simple" role="tab" aria-selected="false">
                                            <i class="fas fa-code text-sm me-2"></i> Code
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-pagination-simple">
                        <iframe width="100%" height="300px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.0.4" rel="stylesheet" />
        <section class="py-7">
  <div class="container">
    <div class="row justify-space-between py-2">
      <div class="col-lg-4 mx-auto">
        <ul class="pagination pagination-primary m-4">
          <li class="page-item">
            <a class="page-link" href="javascript:;" aria-label="Previous">
              <span aria-hidden="true"><i class="material-icons" aria-hidden="true">chevron_left</i></span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:;">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:;">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:;">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:;">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:;">5</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:;" aria-label="Next">
              <span aria-hidden="true"><i class="material-icons" aria-hidden="true">chevron_right</i></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

        <script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        '></iframe>
                    </div>
                    <div class="tab-pane" id="code-pagination-simple">
                        <div class="position-relative p-4 pb-2">
                            <a class="btn btn-sm bg-gradient-dark position-absolute end-4 mt-3"
                               onclick="copyCode(this);" href="javascript:;"><i class="fas fa-copy text-sm me-1"></i>
                                Copy</a>
                            <figure class="highlight"><pre><code class="language-html" data-lang="html"><span
                                    class="nt">&lt;section</span> <span class="na">class=</span><span
                                    class="s">"py-7"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span
                                        class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span
                                        class="s">"row justify-space-between py-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-4 mx-auto"</span><span
                                        class="nt">&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span
                                        class="s">"pagination pagination-primary m-4"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span
                                        class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span
                                        class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">aria-label=</span><span
                                        class="s">"Previous"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span
                                        class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span> <span
                                        class="na">aria-hidden=</span><span class="s">"true"</span><span
                                        class="nt">&gt;</span>chevron_left<span
                                        class="nt">&lt;/i&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item active"</span><span
                                        class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span
                                        class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>1<span
                                        class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span
                                        class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span
                                        class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>2<span
                                        class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span
                                        class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span
                                        class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>3<span
                                        class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span
                                        class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span
                                        class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>4<span
                                        class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span
                                        class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span
                                        class="na">href=</span><span class="s">"javascript:;"</span><span class="nt">&gt;</span>5<span
                                        class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span
                                        class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span
                                        class="na">href=</span><span class="s">"javascript:;"</span> <span class="na">aria-label=</span><span
                                        class="s">"Next"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span
                                        class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span> <span
                                        class="na">aria-hidden=</span><span class="s">"true"</span><span
                                        class="nt">&gt;</span>chevron_right<span
                                        class="nt">&lt;/i&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/section&gt;</span></code></pre>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                    <div class="row py-3">
                        <div class="col-lg-4 text-start">
                            <p class="lead text-dark pt-1 mb-0">Pagination Sizing</p>
                        </div>
                        <div class="col-lg-4 mt-1 text-center">
                            <span class="badge bg-light text-dark"><i class="fas fa-lock me-1" aria-hidden="true"></i> Screenshot</span>
                        </div>
                        <div class="col-lg-4 text-end my-auto">
                            <a href="https://demos.creative-tim.com/material-kit-pro/index#pricing-soft-ui"
                               class="text-primary icon-move-right">Get the Code
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <img class="w-100"
                         src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/sections/pagination/pagination-sizing.jpg"
                         alt="pagination-2">
                </div>
            </div>
            <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                    <div class="row py-3">
                        <div class="col-lg-4 text-start">
                            <p class="lead text-dark pt-1 mb-0">Pagination Variants</p>
                        </div>
                        <div class="col-lg-4 mt-1 text-center">
                            <span class="badge bg-light text-dark"><i class="fas fa-lock me-1" aria-hidden="true"></i> Screenshot</span>
                        </div>
                        <div class="col-lg-4 text-end my-auto">
                            <a href="https://demos.creative-tim.com/material-kit-pro/index#pricing-soft-ui"
                               class="text-primary icon-move-right">Get the Code
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <img class="w-100"
                         src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/sections/pagination/pagination-variants.jpg"
                         alt="pagination-3">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mx-auto text-center">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Company
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    About Us
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Team
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Products
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Blog
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Pricing
                </a>
            </div>
            <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-dribbble"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-twitter"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-instagram"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-pinterest"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-github"></span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    Material by Creative Tim.
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<!--   Core JS Files   -->
<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../assets/js/plugins/prism.min.js"></script>
<script src="../../assets/js/plugins/highlight.min.js"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="../../assets/js/plugins/parallax.min.js"></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="../../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>