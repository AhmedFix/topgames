<!-- Navbar-->
<header class="header trans_300">
    
    <!-- Top Navigation -->
      <div class="top_nav">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="top_nav_left">@lang('site.main_title')</div>
          </div>
          <div class="col-lg-2">
            <div class="top_nav d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
              <ul>
                <li><a href="https://www.facebook.com/pg/Top.Games.Sudan"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCxc_DUjq2NCBtUtDu8FJ0SA"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/top_games_sudan"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://t.me/Top_Games_Sudan"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 text-right">
            <div class="top_nav_right">
              <ul class="top_nav_menu">
                  <li  class="top_nav_item "><a href="https://topgmds.com/agent/">@lang('site.shipping_agents')</a></li>
                  <li  class="top_nav_item "><a href="#">@lang('site.connect_us')</a></li>
                  <li  class="top_nav_item "><a href="#">@lang('site.terms_of_service')</a></li>
                  <li  class="top_nav_item "><a href="#">@lang('site.privacy_policy')</a></li>
                  <li class="account">
                      <a href="#">
                          @lang('site.my_account')
                        <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="account_selection">
                        @if (session('status'))
                           <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>@lang('site.sign_in')</a></li>
                           <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>@lang('site.register')</a></li>
                        @endif
                        <li><a href="page-login.html" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                          <i class="fa fa-sign-out" aria-hidden="true"></i>
                          @lang('site.logout')
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                        </a></li>
                     </ul>
                    </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Main Navigation -->
  
    <div class="main_nav_container">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-right">
            <div class="logo_container">
             
              <a href="#"><img class="logo_container_logo" src="assets/images/logo.png" alt="Top Games" /> Top Games<span>Digital Store</span></a>
  
            </div>
            <nav class="navbar">
              <ul class="navbar_menu">
                <li><a href="{{ route('home') }}">@lang('site.home')</a></li>
                <li><a href="#">@lang('site.charge_games')</a></li>
                <li><a href="#">@lang('site.game_cards')</a></li>
                <li><a href="#">@lang('site.be_seller')</a></li>
              </ul>
              <ul class="navbar_user">
                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        {{--languages--}}
                <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-flag fa-lg"></i></a>
                   <ul class="dropdown-menu settings-menu dropdown-menu-right">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                           <li>
                              <a rel="alternate" hreflang="{{ $localeCode }}" class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                  {{ $properties['native'] }}
                              </a>
                          </li>
                        @endforeach
                   </ul>
                </li>
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                <li class="checkout">
                  <a href="#">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span id="checkout_items" class="checkout_items">2</span>
                  </a>
                </li>
              </ul>
              <div class="hamburger_container">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  
  </header>

  <div class="fs_menu_overlay"></div>
  <div class="hamburger_menu">
    <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="hamburger_menu_content text-right">
      <ul class="menu_top_nav">
        <li  class="menu_item has-children "><a href="#">@lang('site.terms_of_service')</a></li>
        <li  class="menu_item has-children "><a href="#">@lang('site.privacy_policy')</a></li>  
        <li class="menu_item has-children">
          <a href="#">
              @lang('site.my_account')
            <i class="fa fa-angle-down"></i>
          </a>
          <ul class="menu_selection">
            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>@lang('site.sign_in')</a></li>
            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>@lang('site.register')</a></li>
          </ul>
        </li>
        <li class="menu_item"><a href="{{ route('home') }}">@lang('site.home')</a></li>
        <li class="menu_item"><a href="#">@lang('site.charge_games')</a></li>
        <li class="menu_item"><a href="#">@lang('site.game_cards')</a></li>
        <li class="menu_item"><a href="#">@lang('site.be_seller')</a></li>
      </ul>
    </div>
  </div>