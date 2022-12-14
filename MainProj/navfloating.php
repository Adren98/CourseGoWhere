

<link rel="stylesheet" href="./assets/css/planner.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"
        integrity="sha512-Eezs+g9Lq4TCCq0wae01s9PuNWzHYoCMkE97e2qdkYthpI0pzC3UGB03lgEHn2XM85hDOUF6qgqqszs+iXU4UA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3"
                       href="courses.php" rel="tooltip"
                       title="Home" data-placement="bottom" >
                        CourseGoWhere
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <!--                            <li class="nav-item dropdown dropdown-hover mx-2">-->
                            <!--                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages"-->
                            <!--                                   data-bs-toggle="dropdown" aria-expanded="false">-->
                            <!--                                    <i class="material-icons opacity-6 me-2 text-md">dashboard</i>-->
                            <!--                                    Pages-->
                            <!--                                    <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow"-->
                            <!--                                         class="arrow ms-auto ms-md-2">-->
                            <!--                                </a>-->
                            <!--                                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"-->
                            <!--                                     aria-labelledby="dropdownMenuPages">-->
                            <!--                                    <div class="d-none d-lg-block">-->
                            <!--                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">-->
                            <!--                                            Landing Pages-->
                            <!--                                        </h6>-->
                            <!--                                        <a href="./pages/about-us.html" class="dropdown-item border-radius-md">-->
                            <!--                                            <span>About Us</span>-->
                            <!--                                        </a>-->
                            <!--                                        <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">-->
                            <!--                                            <span>Contact Us</span>-->
                            <!--                                        </a>-->
                            <!--                                        <a href="./pages/author.html" class="dropdown-item border-radius-md">-->
                            <!--                                            <span>Author</span>-->
                            <!--                                        </a>-->
                            <!--                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">-->
                            <!--                                            Account-->
                            <!--                                        </h6>-->
                            <!--                                        <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">-->
                            <!--                                            <span>Sign In</span>-->
                            <!--                                        </a>-->


                            <!--                                    </div>-->

                            <!--                                    <div class="d-lg-none">-->
                            <!--                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">-->
                            <!--                                            Landing Pages-->
                            <!--                                        </h6>-->

                            <!--                                        <a href="./pages/about-us.html" class="dropdown-item border-radius-md">-->
                            <!--                                            <span>About Us</span>-->
                            <!--                                        </a>-->
                            <!--                                        <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">-->
                            <!--                                            <span>Contact Us</span>-->
                            <!--                                        </a>-->
                            <!--                                        <a href="./pages/author.html" class="dropdown-item border-radius-md">-->
                            <!--                                            <span>Author</span>-->
                            <!--                                        </a>-->

                            <!--                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">-->
                            <!--                                            Account-->
                            <!--                                        </h6>-->
                            <!--                                        <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">-->
                            <!--                                            <span>Sign In</span>-->
                            <!--                                        </a>-->

                            <!--                                    </div>-->

                            <!--                                </div>-->
                            <!--                            </li>-->
                            <li class="nav-item mx-2">

                                <a href="Viewmap.php"
                                   class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   role="button">
                                    View Map
                                    <!--                                    <img src="../../assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1">-->
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a href="amenities.php"
                                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   role="button">
                                    Amenities
                                    <!--                                    <img src="../../assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1">-->
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   role="button" onclick="openPlannerPopup()">Planner</a>
                            </li>

                            <!--                            <li class="nav-item dropdown dropdown-hover mx-2">-->
                            <!--                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"-->
                            <!--                                   id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">-->
                            <!--                                    <i class="material-icons opacity-6 me-2 text-md">view_day</i>-->
                            <!--                                    Sections-->
                            <!--                                    <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow"-->
                            <!--                                         class="arrow ms-auto ms-md-2">-->
                            <!--                                </a>-->
                            <!--                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"-->
                            <!--                                    aria-labelledby="dropdownMenuBlocks">-->
                            <!--                                    <div class="d-none d-lg-block">-->
                            <!--                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">-->
                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./presentation.html">-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Page Sections</h6>-->
                            <!--                                                        <span class="text-sm">See all sections</span>-->
                            <!--                                                    </div>-->
                            <!--                                                    <img src="./assets/img/down-arrow.svg" alt="down-arrow"-->
                            <!--                                                         class="arrow">-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/page-sections/hero-sections.html">-->
                            <!--                                                    Page Headers-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/page-sections/features.html">-->
                            <!--                                                    Features-->
                            <!--                                                </a>-->
                            <!--                                            </div>-->
                            <!--                                        </li>-->

                            <!--                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">-->
                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./presentation.html">-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Navigation</h6>-->
                            <!--                                                        <span class="text-sm">See all navigations</span>-->
                            <!--                                                    </div>-->
                            <!--                                                    <img src="./assets/img/down-arrow.svg" alt="down-arrow"-->
                            <!--                                                         class="arrow">-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/navigation/navbars.html">-->
                            <!--                                                    Navbars-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/navigation/nav-tabs.html">-->
                            <!--                                                    Nav Tabs-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/navigation/pagination.html">-->
                            <!--                                                    Pagination-->
                            <!--                                                </a>-->
                            <!--                                            </div>-->
                            <!--                                        </li>-->

                            <!--                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">-->
                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./presentation.html">-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Input Areas</h6>-->
                            <!--                                                        <span class="text-sm">See all input areas</span>-->
                            <!--                                                    </div>-->
                            <!--                                                    <img src="./assets/img/down-arrow.svg" alt="down-arrow"-->
                            <!--                                                         class="arrow">-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/input-areas/inputs.html">-->
                            <!--                                                    Inputs-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/input-areas/forms.html">-->
                            <!--                                                    Forms-->
                            <!--                                                </a>-->
                            <!--                                            </div>-->
                            <!--                                        </li>-->

                            <!--                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">-->
                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./presentation.html">-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Attention Catchers</h6>-->
                            <!--                                                        <span class="text-sm">See all examples</span>-->
                            <!--                                                    </div>-->
                            <!--                                                    <img src="./assets/img/down-arrow.svg" alt="down-arrow"-->
                            <!--                                                         class="arrow">-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/attention-catchers/alerts.html">-->
                            <!--                                                    Alerts-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/attention-catchers/modals.html">-->
                            <!--                                                    Modals-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/attention-catchers/tooltips-popovers.html">-->
                            <!--                                                    Tooltips & Popovers-->
                            <!--                                                </a>-->
                            <!--                                            </div>-->
                            <!--                                        </li>-->

                            <!--                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">-->
                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./presentation.html">-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Elements</h6>-->
                            <!--                                                        <span class="text-sm">See all elements</span>-->
                            <!--                                                    </div>-->

                            <!--                                                    <img src="./assets/img/down-arrow.svg" alt="down-arrow"-->
                            <!--                                                         class="arrow">-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/elements/avatars.html">-->
                            <!--                                                    Avatars-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/elements/badges.html">-->
                            <!--                                                    Badges-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/elements/breadcrumbs.html">-->
                            <!--                                                    Breadcrumbs-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/elements/buttons.html">-->
                            <!--                                                    Buttons-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/elements/dropdowns.html">-->
                            <!--                                                    Dropdowns-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/elements/progress-bars.html">-->
                            <!--                                                    Progress Bars-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/elements/toggles.html">-->
                            <!--                                                    Toggles-->
                            <!--                                                </a>-->
                            <!--                                                <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                                   href="./sections/elements/typography.html">-->
                            <!--                                                    Typography-->
                            <!--                                                </a>-->
                            <!--                                            </div>-->
                            <!--                                        </li>-->
                            <!--                                    </div>-->

                            <!--                                    <div class="row d-lg-none">-->
                            <!--                                        <div class="col-md-12">-->
                            <!--                                            <div class="d-flex mb-2">-->
                            <!--                                                <div class="icon h-10 me-3 d-flex mt-1">-->
                            <!--                                                    <i class="ni ni-single-copy-04 text-gradient text-primary"></i>-->
                            <!--                                                </div>-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Page Sections</h6>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/page-sections/hero-sections.html">-->
                            <!--                                                Page Headers-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/page-sections/features.html">-->
                            <!--                                                Features-->
                            <!--                                            </a>-->

                            <!--                                            <div class="d-flex mb-2 mt-3">-->
                            <!--                                                <div class="icon h-10 me-3 d-flex mt-1">-->
                            <!--                                                    <i class="ni ni-laptop text-gradient text-primary"></i>-->
                            <!--                                                </div>-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Navigation</h6>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/navigation/navbars.html">-->
                            <!--                                                Navbars-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/navigation/nav-tabs.html">-->
                            <!--                                                Nav Tabs-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/navigation/pagination.html">-->
                            <!--                                                Pagination-->
                            <!--                                            </a>-->


                            <!--                                            <div class="d-flex mb-2 mt-3">-->
                            <!--                                                <div class="icon h-10 me-3 d-flex mt-1">-->
                            <!--                                                    <i class="ni ni-badge text-gradient text-primary"></i>-->
                            <!--                                                </div>-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Input Areas</h6>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/input-areas/inputs.html">-->
                            <!--                                                Inputs-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/input-areas/forms.html">-->
                            <!--                                                Forms-->
                            <!--                                            </a>-->


                            <!--                                            <div class="d-flex mb-2 mt-3">-->
                            <!--                                                <div class="icon h-10 me-3 d-flex mt-1">-->
                            <!--                                                    <i class="ni ni-notification-70 text-gradient text-primary"></i>-->
                            <!--                                                </div>-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Attention Catchers</h6>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/attention-catchers/alerts.html">-->
                            <!--                                                Alerts-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/attention-catchers/modals.html">-->
                            <!--                                                Modals-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/attention-catchers/tooltips-popovers.html">-->
                            <!--                                                Tooltips & Popovers-->
                            <!--                                            </a>-->


                            <!--                                            <div class="d-flex mb-2 mt-3">-->
                            <!--                                                <div class="icon h-10 me-3 d-flex mt-1">-->
                            <!--                                                    <i class="ni ni-app text-gradient text-primary"></i>-->
                            <!--                                                </div>-->
                            <!--                                                <div class="w-100 d-flex align-items-center justify-content-between">-->
                            <!--                                                    <div>-->
                            <!--                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                            Elements</h6>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/elements/avatars.html">-->
                            <!--                                                Avatars-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/elements/badges.html">-->
                            <!--                                                Badges-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/elements/breadcrumbs.html">-->
                            <!--                                                Breadcrumbs-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/elements/buttons.html">-->
                            <!--                                                Buttons-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/elements/dropdowns.html">-->
                            <!--                                                Dropdowns-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/elements/progress-bars.html">-->
                            <!--                                                Progress Bars-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/elements/toggles.html">-->
                            <!--                                                Toggles-->
                            <!--                                            </a>-->
                            <!--                                            <a class="dropdown-item ps-3 border-radius-md mb-1"-->
                            <!--                                               href="./sections/elements/typography.html">-->
                            <!--                                                Typography-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->

                            <!--                                </ul>-->
                            <!--                            </li>-->

                            <!--                            <li class="nav-item dropdown dropdown-hover mx-2">-->
                            <!--                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs"-->
                            <!--                                   data-bs-toggle="dropdown" aria-expanded="false">-->
                            <!--                                    <i class="material-icons opacity-6 me-2 text-md">article</i>-->
                            <!--                                    Docs-->
                            <!--                                    <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow"-->
                            <!--                                         class="arrow ms-auto ms-md-2">-->
                            <!--                                </a>-->
                            <!--                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg"-->
                            <!--                                    aria-labelledby="dropdownMenuDocs">-->
                            <!--                                    <div class="d-none d-lg-block">-->
                            <!--                                        <ul class="list-group">-->
                            <!--                                            <li class="nav-item list-group-item border-0 p-0">-->
                            <!--                                                <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                                   href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">-->
                            <!--                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                        Getting Started</h6>-->
                            <!--                                                    <span class="text-sm">All about overview, quick start, license and contents</span>-->
                            <!--                                                </a>-->
                            <!--                                            </li>-->
                            <!--                                            <li class="nav-item list-group-item border-0 p-0">-->
                            <!--                                                <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                                   href=" https://www.creative-tim.com/learning-lab/bootstrap/colors/material-kit ">-->
                            <!--                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                        Foundation</h6>-->
                            <!--                                                    <span class="text-sm">See our colors, icons and typography</span>-->
                            <!--                                                </a>-->
                            <!--                                            </li>-->
                            <!--                                            <li class="nav-item list-group-item border-0 p-0">-->
                            <!--                                                <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                                   href=" https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-kit ">-->
                            <!--                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                        Components</h6>-->
                            <!--                                                    <span class="text-sm">Explore our collection of fully designed components</span>-->
                            <!--                                                </a>-->
                            <!--                                            </li>-->
                            <!--                                            <li class="nav-item list-group-item border-0 p-0">-->
                            <!--                                                <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                                   href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">-->
                            <!--                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                        Plugins</h6>-->
                            <!--                                                    <span class="text-sm">Check how you can integrate our plugins</span>-->
                            <!--                                                </a>-->
                            <!--                                            </li>-->
                            <!--                                            <li class="nav-item list-group-item border-0 p-0">-->
                            <!--                                                <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                                   href=" https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit ">-->
                            <!--                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                        Utility Classes</h6>-->
                            <!--                                                    <span class="text-sm">For those who want flexibility, use our utility classes</span>-->
                            <!--                                                </a>-->
                            <!--                                            </li>-->
                            <!--                                        </ul>-->
                            <!--                                    </div>-->

                            <!--                                    <div class="row d-lg-none">-->
                            <!--                                        <div class="col-md-12 g-0">-->
                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./pages/about-us.html">-->
                            <!--                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                    Getting Started</h6>-->
                            <!--                                                <span class="text-sm">All about overview, quick start, license and contents</span>-->
                            <!--                                            </a>-->

                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./pages/about-us.html">-->
                            <!--                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                    Foundation</h6>-->
                            <!--                                                <span class="text-sm">See our colors, icons and typography</span>-->
                            <!--                                            </a>-->

                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./pages/about-us.html">-->
                            <!--                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                    Components</h6>-->
                            <!--                                                <span class="text-sm">Explore our collection of fully designed components</span>-->
                            <!--                                            </a>-->

                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./pages/about-us.html">-->
                            <!--                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                    Plugins</h6>-->
                            <!--                                                <span class="text-sm">Check how you can integrate our plugins</span>-->
                            <!--                                            </a>-->

                            <!--                                            <a class="dropdown-item py-2 ps-3 border-radius-md"-->
                            <!--                                               href="./pages/about-us.html">-->
                            <!--                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">-->
                            <!--                                                    Utility Classes</h6>-->
                            <!--                                                <span class="text-sm">For those who want flexibility, use our utility classes</span>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->

                            <!--                                </ul>-->
                            <!--                            </li>-->
                            <!--                            <li class="nav-item ms-lg-auto">-->
                            <!--                                <a class="nav-link nav-link-icon me-2"-->
                            <!--                                   href="https://github.com/creativetimofficial/material-kit" target="_blank">-->
                            <!--                                    <i class="fa fa-github me-1"></i>-->
                            <!--                                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"-->
                            <!--                                       data-bs-placement="bottom" title="Star us on Github">Github</p>-->
                            <!--                                </a>-->
                            <!--                            </li>-->

                            <li class="nav-item my-auto ms-3 ms-lg-0">
                                <?php
                                if(isset($_SESSION['email'])){
                                //    welcome message
                                    echo '<a class="btn btn-sm btn-primary mb-0" href="Controller/logout_abort.php">Logout</a>';
                                }else{
                                    echo '<a class="btn btn-sm btn-primary mb-0" href="login.php">Login/Register</a>';
                                    $savebutton = 'savebuttonhidden';
                                }
                                ?>
<!--                             <a href="login.php" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Login/Register</a>-->

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="planner_popup" id="planner">
                    <h2>Planner</h2>
                    <p>Arrange your courses from most(top) to least(bottom) interested</p>
                    <div class="DDcontainer" id="course_list">
                            <!-- fill list of courses using script -->
                    </div>
<!--                    <button type="button" class="--><!--" title="Save planner" onclick="closePlannerPopup()">Save Planner</button>-->
                </div>

            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>


<!-- Planner popup & draggable -->
<script>
    var list = document.getElementById("course_list");
    var courseid = document.getElementsByClassName("course_id");
    var course_name = document.getElementsByClassName("course_name");
    var COP = document.getElementsByClassName("COP");
    var school = document.getElementsByClassName("school");
    var remarks = document.getElementsByClassName("remarks");
    var added_courses=[];
    
    <?php

        if(!isset(  $_SESSION['retrievedPlanner'] )  &&isset($_SESSION['email'])){
            $_SESSION['retrievedPlanner']=1;
            $email = $_SESSION['email'];
            $sql = "Select * from Planner LEFT OUTER JOIN CoursesCatalogue ON Planner.Course_ID = CoursesCatalogue.course_id where Email_ID = "."'"."$email"."'". " ORDER BY Priority";
            require_once 'Controller/courses_sql.php';
            $result = genGenericSQL($sql);
            $mainarr = array();
                    foreach ($result as $row) {
//                        var_dump($row);
                        //reaplce $Row[array] <br> with \n
//                        $test = str_replace("<br>", "\n", $row['Remarks']);
//                        var_dump($test);
                        $temparr = array($row['Course_ID'], $row['course_name'], $row['cut_off_point'], $row['school'], $row['Remarks']);
                        array_push($mainarr, $temparr);

                    }

            $_SESSION['planner']=$mainarr;


        }


        if(isset($_SESSION['planner'])) {
            $planner = $_SESSION['planner'];
            foreach ($planner as $course) {
                echo " added_courses.push(['$course[0]','$course[1]','$course[2]','$course[3]','$course[4]']);";

            }

        }

    ?>
    // var added_courses = [["name 1", "13", "SP", "remarks"], ["name 3", "12", "RP", "remarks"]];
    // added_courses.push(["name 2", "10", "NYP", "remarks"]);
    
    //sort planner



    //added_courses = sortKeys(added_courses);
    for (var i=0; i<added_courses.length; i++) {
        list.innerHTML += ('<div class="item" id=' + added_courses[i][0] + '>' +
        '<span class="course_id" hidden>' + added_courses[i][0] +
        '</span><span class="course_name col-3">' + added_courses[i][1] +
        '</span><span class="COP col-3">' + added_courses[i][2] +
        '</span><span class="school col-3">' + added_courses[i][3] +
        '</span><textarea  placeholder=" Add your remarks here" style="font-style:italic" class="remarks col-3" style="white-space: pre-line">' + added_courses[i][4] +
        '</textarea><i class="fas fa-minus" title="Remove course from planner" type="button" onclick="removeCourseFromPlanner(' + added_courses[i][0] + ')"></i><i class="fas fa-bars"></i></div>');
    }
    //


    //planner UI
    let popup = document.getElementById("planner");
    function openPlannerPopup() {
        if(popup.classList.contains("open-planner_popup")){popup.classList.remove("open-planner_popup");}
        else{popup.classList.add("open-planner_popup");}
    }
    function closePlannerPopup() {
        popup.classList.remove("open-planner_popup");
        savePlannerInDB();
    }

    window.addEventListener('click', ({target}) => {
        const withinplanner = target.closest('.planner_popup');
        const plannerbutton = target.closest('.nav-item');
        const plannerpu = popup.classList.contains("open-planner_popup");
        const clickedOnClosedPopup = !plannerbutton && !withinplanner && plannerpu;
        if (clickedOnClosedPopup) {
            popup.classList.remove("open-planner_popup");
            saveInSession();
        }
        if(plannerbutton && !plannerpu){
            saveInSession();
        }

    });

    const dragArea = document.querySelector(".DDcontainer");
    new Sortable(dragArea, {animation: 350});
    //






    //functions
    function sortByAlphabeticalOrder(dict) {
        var sorted = [];
        for (var i=0; i<dict.length; i++) {
        sorted[sorted.length] = dict[i][0];
        }
        sorted.sort();

        var temparray = [];
        for(var i = 0; i < sorted.length; i++) {
            for(var j = 0; j < sorted.length; j++) {
                if(sorted[i] == dict[j][0]){
                    temparray[i] = dict[j];
                }
            }
        }

        return temparray;
    }


    function saveInSession(){
        //get current course order when closing planner
        var order = [];
        console.log(course_name.length);

        for(var i = 0; i < course_name.length; i++) {
        order.push([courseid[i].innerHTML,course_name[i].innerHTML, COP[i].innerHTML, school[i].innerHTML, remarks[i].value,]);
        }

        if(order.length===0){
            order="empty";
        }
        console.log(order);

        $.ajax({
            url: 'Controller/addtoplanner.php',
            type: 'POST',
            data: {delete: order},

            success: function(data) {
                console.log(data);
            }
        });




        console.log(order);
        //need to save order into session
    }


    function savePlannerInDB(){
        //get current course order when closing planner
        var order = [];
        console.log(course_name.length);

        for(var i = 0; i < course_name.length; i++) {
        order.push([courseid[i].innerHTML,course_name[i].innerHTML, COP[i].innerHTML, school[i].innerHTML, remarks[i].value,]);
        }

        console.log(order);
        //need to save order into DB
    }


    function removeCourseFromPlanner(id){
        var removeCourse = document.getElementById(id);
        removeCourse.remove();
        // console.log("before delete");


        // console.log("Ran delete");
    }
    //

</script>
<!--     

 -->