<template>
  <header id="qodef-page-header" role="banner">
    <div id="qodef-page-header-inner" class="">
      <div class="qodef-header-logo">
        <a itemprop="url" class="qodef-header-logo-link qodef-height--set qodef-source--image"
          href="https://wanderaway.qodeinteractive.com/" rel="home">
          <!-- src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/10/footer-logo-01.png" -->
          <img width="231" height="152"
          :src="logoSrc"
            class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image">
        </a>
      </div>
      <nav class="qodef-header-navigation" role="navigation" aria-label="Top Menu">
        <ul id="menu-landing-anchor-menu-1" class="menu">
          <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3487"><a href="#demos"><span
                class="qodef-menu-item-text">Demos</span></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3495"><a
              href="#destinations"><span class="qodef-menu-item-text">Destinations</span></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3492"><a href="#blog"><span
                class="qodef-menu-item-text">Blog</span></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3491"><a href="#shop"><span
                class="qodef-menu-item-text">Shop</span></a></li> -->
                <slot name="nav-links"></slot>
        </ul>
      </nav>
      <div class="qodef-widget-holder qodef--one"></div>
    </div>
  </header>
  <header id="qodef-page-mobile-header" role="banner">
    <div id="qodef-page-mobile-header-inner" class="">
      <a itemprop="url" class="qodef-mobile-header-logo-link qodef-height--set qodef-source--image"
        href="https://wanderaway.qodeinteractive.com/" rel="home">
        <!-- src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/12/mob-logo-small-black.png" -->
        <img width="70" height="64"
        :src="mobileLogoSrc"
          class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image"></a>
      <a href="javascript:void(0)"
        class="qodef-opener-icon qodef-m qodef-source--predefined qodef-side-area-mobile-header-opener">
        <span class="qodef-m-icon qodef--open">
          <svg class="qodef-svg--menu" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
            <line x1="19" y1="3" x2="2" y2="3"></line>
            <line x1="19" y1="8" x2="2" y2="8"></line>
            <line x1="19" y1="13" x2="2" y2="13"></line>
            <line x1="19" y1="18" x2="2" y2="18"></line>
          </svg> </span>
      </a>
      <div id="qodef-side-area-mobile-header" class="qodef-m ps">
        <a href="javascript:void(0)"
          class="qodef-opener-icon qodef-m qodef-source--predefined qodef-m-close qodef--opened">
          <span class="qodef-m-icon ">
            <svg class="qodef-svg--close" xmlns="http://www.w3.org/2000/svg" width="11.367" height="11.348"
              viewBox="0 0 12 12" xml:space="preserve">
              <path
                d="M11.036 9.668a.87.87 0 0 1 0 1.367.933.933 0 0 1-.664.313.971.971 0 0 1-.7-.312L5.684 7.09 1.7 11.035a.971.971 0 0 1-.7.313.933.933 0 0 1-.664-.312.87.87 0 0 1 0-1.367l3.942-3.985L.332 1.7a.87.87 0 0 1 0-1.367.87.87 0 0 1 1.367 0l3.985 3.945L9.668.333a.87.87 0 0 1 1.367 0 .87.87 0 0 1 0 1.367L7.09 5.684Z">
              </path>
            </svg> </span>
        </a>
        <nav class="qodef-m-navigation" role="navigation" aria-label="Mobile Menu">
          <ul id="menu-landing-anchor-menu-3" class="menu">
            <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3487"><a href="#demos"><span
                  class="qodef-menu-item-text">Demos</span></a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3495"><a
                href="#destinations"><span class="qodef-menu-item-text">Destinations</span></a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3492"><a href="#blog"><span
                  class="qodef-menu-item-text">Blog</span></a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3491"><a href="#shop"><span
                  class="qodef-menu-item-text">Shop</span></a></li> -->
              <slot name="mobile-nav-links"></slot>
          </ul>
        </nav>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
          <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
          <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
      </div>
    </div>
  </header>
</template>
<script>
export default {
  props:{
    logoSrc:{
      default: null
    },
    mobileLogoSrc:{
      default: null
    },
  },
}
</script>
