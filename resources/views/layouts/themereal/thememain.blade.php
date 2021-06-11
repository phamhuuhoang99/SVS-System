<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link rel="icon" href={{ URL::asset( "favicon.png") }} type="image/png">
        <link href={{ asset( "templates/themereal/css/bootstrap.css") }} rel='stylesheet' type='text/css' />
        <link href={{ asset( "templates/themereal/css/style.css") }} rel='stylesheet' type='text/css' />
        <script src="{{asset('templates/themereal/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>

    </head>
    <body>
        <div id="SiteContainer">
            <div id="SiteNavContainer" class="visible-lg" role="banner">
                <div class="marketing-nav-wrapper headroom headroom--verytop headroom--top" role="navigation" aria-label="Main Navigation">
                    <nav class="marketing-nav marketing-nav__primary" id="HaravanMainNav" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <a class="in-page-link skip-to-main visuallyhidden focusable" data-ga-event="Main Nav" data-ga-action="Skip to content" href="#Main">Skip to Content</a>

                        <ul class="marketing-nav__items">
                            <li>
                                <a class="marketing-nav__item link-product visible-lg" itemprop="name" href="{{route('themes')}}">
                                    <span class="icon icon-caret-left"></span> Quay về kho giao diện
                                </a>
                            </li>
                        </ul>
                        <ul class="marketing-nav__items device-preview-controls">
                            <li>
                                <a class="visible-lg marketing-nav__item device-preview-controls__toggle device-preview-controls__toggle--active" data-view="desktop" itemprop="name" id="DesktopPreview" href="#">
                                    <div class="responsive-svg device-preview-controls__icon device-preview-controls__icon--desktop" style="padding-bottom: 100.0%;">
                                        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 0H2C.897 0 0 .897 0 2v8c0 1.103.897 2 2 2h4.667v2h-2c-.552 0-1 .447-1 1 0 .553.448 1 1 1h6.667c.552 0 1-.447 1-1 0-.553-.448-1-1-1h-2v-2H14c1.104 0 2-.897 2-2V2c0-1.103-.896-2-2-2zM2 10V2h12v8H2z"></path>
                                    </svg>
                                    </div>
                                    Desktop
                                </a>
                            </li>
                            <li>
                                <a class="visible-lg marketing-nav__item device-preview-controls__toggle" data-view="tablet" itemprop="name" id="TabletPreview" href="#">
                                    <div class="responsive-svg device-preview-controls__icon device-preview-controls__icon--tablet" style="padding-bottom: 100.0%;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tablet-alt" class="svg-inline--fa fa-tablet-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor" d="M400 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM224 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm176-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h328c6.6 0 12 5.4 12 12v312z"></path>
                                        </svg>
                                    </div>
                                    Tablet
                                </a>
                            </li>
                            <li>
                                <a class="marketing-nav__item device-preview-controls__toggle visible-lg" data-view="mobile" itemprop="name" id="MobilePreview" href="#">
                                    <div class="responsive-svg device-preview-controls__icon" style="padding-bottom: 100.0%">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.7 0H6.3C5.6 0 5 .6 5 1.3v21.3c0 .8.6 1.4 1.3 1.4h12.3c.7 0 1.4-.587 1.4-1.287V1.3c0-.7-.6-1.3-1.3-1.3zm-6.2 22.6c-.7 0-1.3-.6-1.3-1.3 0-.7.6-1.3 1.3-1.3.7 0 1.3.6 1.3 1.3 0 .7-.6 1.3-1.3 1.3zm4.5-4c0 .2-.2.4-.4.4H8.4c-.2 0-.4-.2-.4-.4V3.4c0-.2.2-.4.4-.4h8.1c.3 0 .5.2.5.4v15.2z"></path>
                                    </svg>
                                    </div>
                                    Mobile
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="PageContainer" class="">
                <main role="main" id="Main">
                    <div class="device-preview">
                        <div class="loader-gif"> </div>
                        <div class="device-preview__container" id="PreviewFrameContainer">
                            <iframe id="PreviewFrame" class="device-preview__iframe" sandbox="allow-same-origin allow-forms allow-popups allow-scripts allow-modals" src="@yield('link')" style="opacity: 1;"></iframe>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
    <!-- tab-type -->
        <script type="text/javascript" src="{{ asset('templates/themereal/js/tabtype.js') }}"></script>
        <!-- tab-type -->
</html>