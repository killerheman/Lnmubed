<header class="header">
    <!-- Heder Top Menu sections -->
    <div class="header__topmenu">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="header__mobileMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="header__topleftmenu" style="color:white;">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<a
                                href="#">user.jpg@gmail.com</a>
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<a href="Tel:+1234567890">
                                8010109090, 9582801526
                            </a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <div class="header__toprightmenu">

                        <ul class="header__language">
                            <li data-drupal-language="hi" data-drupal-link-system-path="&lt;front&gt;"
                                class="hi menuitem"><a href="hi.html" class="language-link" hreflang="hi"
                                    data-drupal-link-system-path="&lt;front&gt;">Today's Date -
                                    {{ Carbon\Carbon::now()->format('d/m/Y') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EOF - Heder Top Menu sections -->

    <!-- Header Utility Links -->
    @include('home.includes.tophead')
    <!-- EOF - Header Utility Links -->

    <!-- Header Top navigation menue -->
    @include('home.includes.menu')
    <!-- EOF - Header Top navigation menue -->
</header>
