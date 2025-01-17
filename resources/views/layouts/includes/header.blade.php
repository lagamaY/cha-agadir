<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Cha agadir " />

    <meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
    <meta name="author" content="ThemeMascot" />
    <!-- Page Title -->
    <title>Cha Agadir</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/logo.svg') }}" rel="shortcut icon" type="image/svg">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->

    <!-- IMPACT le menu -->
        <!-- le menu passe à la ligne suivante lorsque mon écran est à 120% de zoom et au click sur le toggle,
    le menu s'affiche-->
    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
    <!-- fin -->

    <link href="{{ asset('app-assets/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app-assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app-assets/css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->


    <!-- IMPACT le menu-->
        <!-- Le menu reste sur la même ligne quelque soit la taille de l'écran.
    Au clic sur le toggle, rien ne s'affiche-->

    <link href="{{ asset('app-assets/css/menuzord-megamenu.css') }}" rel="stylesheet" />

    <!-- fin -->


    <link id="menuzord-menu-skins" href="{{ asset('app-assets/css/menuzord-skins/menuzord-boxed.css') }}" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('app-assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('app-assets/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('app-assets/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">

    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('app-assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('app-assets/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->

     <!-- IMPACT peut-être le menu ( a verifier)-->
    <link href="{{ asset('app-assets/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
      <!-- FIN -->


    <!-- external javascripts -->
    <script src="{{ asset('app-assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('app-assets/js/jquery-plugin-collection.js') }}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('app-assets/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">

    <style>
        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}></script>
<![endif]-->

</head>

<body class="has-side-panel side-panel-right fullwidth-page">

    <div id="wrapper" class="clearfix">
        
        <div id="preloader">
            <div id="spinner">
                <img alt="" src="https://www.perodua.com.my/assets/gif/loading4.gif">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Désactiver</div>
        </div>
   

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 ">

                            <div class="widget">
                                <a href=""></a>
                                <select class="language-selector" id="switchlang">
                                    <option value="fr" @if (App::currentLocale() == 'fr') selected @endif>Fançais
                                    </option>
                                    <option value="en" @if (App::currentLocale() == 'en') selected @endif>English
                                    </option>
                                </select>
                            </div>



                        </div>

                        <div class="col-md-3">
                            <div class="widget">

                                <ul class="styled-icons icon-sm icon-white">

                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="widget">
                                <ul class="list-inline text-right flip sm-text-center">

                                    <li class="text-white" style="position:relative; top:3px;">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 14q.825 0 1.413-.588Q14 12.825 14 12t-.587-1.413Q12.825 10 12 10q-.825 0-1.412.587Q10 11.175 10 12q0 .825.588 1.412Q11.175 14 12 14Zm-4 4h8v-.575q0-.6-.325-1.1q-.325-.5-.9-.75q-.65-.275-1.337-.425Q12.75 15 12 15t-1.438.15q-.687.15-1.337.425q-.575.25-.9.75q-.325.5-.325 1.1Zm10 4H6q-.825 0-1.412-.587Q4 20.825 4 20V4q0-.825.588-1.413Q5.175 2 6 2h7.175q.4 0 .763.15q.362.15.637.425l4.85 4.85q.275.275.425.637q.15.363.15.763V20q0 .825-.587 1.413Q18.825 22 18 22Zm0-2V8.85L13.15 4H6v16ZM6 20V4v16Z" />
                                        </svg>
                                    </li>
                                    <li>
                                        <a class="text-white"
                                            href="{{ route('contact.create') }}">{{ __('header.info1') }}</a>
                                    </li>

                                    <li class="text-white">|</li>
                                    <li>
                                        <a class="text-white"
                                            href="{{ route('about.index') }}">{{ __('header.info2') }}</a>
                                    </li>
                                   
                                    <li class="text-white " id='elem'>|</li>
                                    <li class="text-white " id='elem' style="position:relative; top:3px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M4.05 21q-.45 0-.75-.3t-.3-.75V15.9q0-.35.225-.613q.225-.262.575-.337l3.45-.7q.35-.05.713.062q.362.113.587.338L10.9 17q1.9-1.15 3.488-2.725q1.587-1.575 2.637-3.375L14.6 8.45q-.225-.225-.288-.513q-.062-.287-.012-.637l.65-3.5q.05-.35.325-.575Q15.55 3 15.9 3h4.05q.45 0 .75.3t.3.75q0 3.225-1.438 6.287q-1.437 3.063-3.8 5.425q-2.362 2.363-5.424 3.8Q7.275 21 4.05 21ZM17.975 9q.425-.975.65-1.975q.225-1 .35-2.025H16.75l-.425 2.35Zm-8.95 8.95L7.35 16.275L5 16.75v2.2q1.025-.075 2.038-.325q1.012-.25 1.987-.675ZM17.975 9Zm-8.95 8.95Z" />
                                        </svg>
                                    </li>

                                    <li class=" text-white" style="font-weight:bold;" id='elem'>
                                        (+212) 0528-241-006 / 240-155
                                    </li>
                                    <br id='separate'>
                                    <li>
                                        <a href="{{ route('course.index') }}"
                                            class="btn btn-dark btn-circled btn-theme-colored2 btn-sm  pr-30 pl-30 "
                                            style="font-weight: bold; animation: blink 2s ease-in-out infinite;">{{ __('header.info3') }}</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <!-- logo -->
                        <div style="display:flex;justify-content:center;width:100%;">

                            @if (count($logo_url) > 0)
                                @foreach ($logo_url as $item)
                                    <a class="menuzord-brand  flip mt-20 mt-sm-10 mb-sm-20 pt-5"
                                        href="{{ route('home') }}"><img
                                            src="{{ url('storage') }}/{{ $item->logo }}" alt=""></a>
                                @endforeach
                            @endif
                        </div>

                        <!-- menu de navigation du site -->
                        <nav id="menuzord-right" class="menuzord default theme-colored">


                            <ul   id="responsive1001"  class="menuzord-menu list-unstyled" >

                                <!-- 1 -->

                                <li @if (Route::current()->getName() == 'home') class='active' @endif>
                                    <a href="{{ route('home') }}" class="font-14 text-uppercase" >
                                        {{ __('header.title1') }}
                                    </a>
                                </li>

                                <!-- 2 -->
                                <li>
                                    <a href="#home" class="font-14 text-uppercase"  >
                                         {{ __('header.title2') }}
                                    </a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('director.index') }}">{{ __('header.subtitle1') }}</a>
                                        </li>
                                        <li><a href="{{ route('about.index') }}">{{ __('header.subtitle2') }}</a>
                                        </li>
                                        <li><a href="{{ route('index.team') }}">{{ __('header.subtitle3') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ route('index.professor') }}">{{ __('header.subtitle33') }}</a>
                                        </li>
                                        <li><a href="{{ route('campus.index') }}">{{ __('header.subtitle4') }}</a>
                                        </li>
                                        <li><a href="{{ route('evenement.index') }}">{{ __('header.subtitle5') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ route('blog-actualités.index') }}">{{ __('header.subtitle6') }}</a>
                                        </li>
                                        <li><a href="{{ route('media.index') }}">{{ __('header.subtitle7') }}</a>
                                        </li>
                                        <li><a href="{{ route('video.index') }}">{{ __('header.subtitle8') }}</a>
                                        </li>
                                    </ul>
                                </li>


                                <!-- 3 -->
                                <li @if (Route::current()->getName() == 'course.index') class="active" @endif>
                                    <a
                                        href="{{ route('course.index') }}"  class="font-14 text-uppercase d-inline">
                                        {{ __('header.title3') }}
                                    </a>
                                    <ul class="dropdown" style="padding-left: -50px;">
                                        <li style="padding-left: -50px;">
                                            <a href="{{ route('degree.show', "Ingénieur d&rsquo; État ") }}"
                                                style="padding-left: -50px">{{ __('header.subtitle9') }}</a>
                                            <ul class="dropdown">
                                                <li><a
                                                        href="{{ route('course.details', 'Horticulture') }}">{{ __('header.subtitle10') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('course.details', 'Protection des Plantes') }}">{{ __('header.subtitle11') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('course.details', 'Architecture du Paysage') }}">
                                                        {{ __('header.subtitle12') }}</a></li>

                                            </ul>

                                        </li>
                                        <li><a
                                                href="{{ route('degree.show', 'Master') }}">{{ __('header.subtitle13') }}</a>
                                            <ul class="dropdown">
                                                <li><a
                                                        href="{{ route('course.details', 'Water & Sustainable Horticulture') }}">{{ __('header.subtitle14') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('course.details', 'Architecture du Paysage') }}">{{ __('header.subtitle15') }}</a>
                                                </li>
                                                <li><a href="{{ route('course.details', 'Locust Science') }}">
                                                        {{ __('header.subtitle16') }}</a></li>
                                                <li><a href="{{ route('course.details', 'Sciences Acridiennes') }}">
                                                        {{ __('header.subtitle17') }}</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{ route('degree.show', 'Licence pro') }}">
                                                {{ __('header.subtitle18') }}</a>
                                            <ul class="dropdown">
                                                <li><a
                                                        href="{{ route('course.details', 'Horticulture Ornementale et Espaces verts') }}">
                                                        {{ __('header.subtitle19') }} <br class="break">
                                                        {{ __('header.subtitle20') }} </a></li>
                                                <li><a href="{{ route('course.details', 'Aménagement du Paysage') }}">{{ __('header.subtitle21') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('degree.show', 'Technicien sp.') }}">{{ __('header.subtitle22') }}
                                            </a>
                                            <ul class="dropdown">
                                                <li><a
                                                        href="{{ route('course.details', 'Technico-Commercial en Productions Horticoles') }}">{{ __('header.subtitle23') }}
                                                        <br class="break">{{ __('header.subtitle24') }} </a></li>
                                                <li><a
                                                        href="{{ route('course.details', 'Conditionnement et Valorisation des Produits Agricoles') }}">{{ __('header.subtitle25') }}
                                                        <br class="break">{{ __('header.subtitle26') }} </a>
                                                </li>
                                                <li><a
                                                        href="{{ route('course.details', 'Cultures Ornementales et Aménagement des Espaces Verts') }}">{{ __('header.subtitle27') }}
                                                        <br class="break"> {{ __('header.subtitle28') }}</a></li>
                                                <li><a href="Aquaculture">{{ __('header.subtitle29') }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a
                                                href="{{ route('course.details', 'Programme Doctoral') }}">{{ __('header.subtitle30') }}</a>

                                        </li>
                                        <li><a href="{{ route('degree.show', 'Formation Exécutive') }}">{{ __('header.subtitle31') }}
                                                <span class="label label-danger">New</span></a>
                                            <ul class="dropdown">
                                                <li><a href="{{ route('course.details', 'Farm Manager') }}">
                                                        {{ __('header.subtitle32') }}</a>
                                                </li>
                                            </ul>
                                        </li>


                                    </ul>
                                </li>

                                <!-- 4 -->

                                <li>
                                    <a href="{{ route('search.index') }}"  class="font-14 text-uppercase">
                                        {{ __('header.title4') }}
                                    </a>
                                </li>

                                <!-- 5 -->
                                <li>
                                    <a href="{{ route('center.index') }}"  class="font-14 text-uppercase">
                                            {{ __('header.title5') }}
                                    </a>
                                 </li>

                                <!-- 6 -->
                                <li>
                                    <a href="{{ route('experience.index') }}"  class="font-14 text-uppercase">
                                        {{ __('header.title6') }}
                                    </a>
                                </li>

                                <!-- 7 -->
                                <li>
                                    <a href="{{ route('impact.index') }}"  class="font-14 text-uppercase">
                                        {{ __('header.title7') }}
                                    </a>
                                 </li>

                                <!-- 8 -->
                                <li>
                                    <a href="{{ route('business.index') }}"   class="font-14 text-uppercase">
                                    {{ __('header.title8') }}
                                    </a>
                                 </li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </header>


        <style>



            @media only screen and (min-width:500px) {
                .break {
                    display: none;
                }


            }

            @media only screen and (max-width:500px) {
                .break {
                    display: block;
                }


            }

            @media screen and (max-width: 768px) {
                #elem {
                    display: none;
                    
                }
            }
            @media screen and (min-width: 768px) {
                #separate{
                    display: none;
                }
            }
            


            .language-selector {
                background-color: transparent !important;
                color: white;
            }

            .language-selector option {

                background-color: #1F334560;
            }

            /* ajouter par lagama */

            .menuzord-menu > li > a{

                padding: 10px ;
                
                }

            .menuzord-menu.menuzord-right {
                    width: 100%;
                    margin: auto;
                }

            @media (min-width: 1001px) and (max-width: 1200px) {


                #responsive1001 {
                       
                    
                        display: flex; /* Nouvelle ligne ajoutée */
                        flex-wrap: nowrap; /* Assure que les éléments ne passent pas à la ligne suivante */
                    }


                
            }






        </style>




        <script>
            const switchlang = document.getElementById('switchlang');

            switchlang.addEventListener('change', () => {
                window.location.href = `/langue/${switchlang.value}`
            })
        </script>
