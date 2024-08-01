<template>

    <!-- title -->
    <div class="elementor-element elementor-element-aaa94c7 e-con-full qodef-elementor-content-grid e-flex qodef-container-heights--disabled e-con e-parent"
        data-id="aaa94c7" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
        data-core-v316-plus="true">
        <div class="elementor-element elementor-element-d0f7cff e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="d0f7cff" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-b58d799 elementor-widget elementor-widget-wanderaway_core_section_title"
                data-id="b58d799" data-element_type="widget" data-widget_type="wanderaway_core_section_title.default">
                <div class="elementor-widget-container">
                    <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--center ">
                        <section-title-2>
                            <template #title>
                                {{ sectionTitle }}
                            </template>
                            <template #text>
                                {{ sectionText }}
                            </template>
                        </section-title-2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end title -->



    <!-- cards -->
    <div class="elementor-element elementor-element-0d45f37 e-con-full e-flex qodef-container-heights--disabled e-con e-parent"
        data-id="0d45f37" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
        data-core-v316-plus="true">
        <div v-for="(img,index) in imgs" :key="index" class="elementor-element elementor-element-8210634 e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="8210634" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-5018e23 elementor-widget elementor-widget-wanderaway_core_image_with_text"
                data-id="5018e23" data-element_type="widget" data-widget_type="wanderaway_core_image_with_text.default">
                <div class="elementor-widget-container">
                    <div
                        class="qodef-shortcode qodef-m  qodef-image-with-text qodef-image-with-text-370 qodef-layout--text-below qodef-image-action--custom-link qodef-shadow--enabled">
                        <div class="qodef-m-stamp">
                            <div class="qodef-shortcode qodef-m qodef-stamp qodef--appeared">
                                <div class="qodef-m-circle">
                                    <svg class="qodef-svg--stamp" xmlns="http://www.w3.org/2000/svg" width="110"
                                        height="110" viewBox="0 0 110 110">
                                        <g>
                                            <path
                                                d="M109.2,72.8c-1.9,5.2-11.5,6.4-14.7,10.6c-3.4,4.3-2,13.5-6.5,16.6c-4.6,3.1-13.1-1.3-18.4,0.3c-5.3,1.6-9.7,9.8-15.4,9.7			c-5.5-0.1-9.6-8.4-15.1-10.2C33.6,98,25,102.1,20.6,99c-4.5-3.3-2.8-12.4-5.9-16.8c-3.2-4.4-12.8-5.9-14.4-11.1			c-1.6-5.1,5.3-11.5,5.4-16.9C5.8,49-1.1,42.4,0.8,37.2s11.5-6.4,14.7-10.6c3.4-4.3,2-13.5,6.5-16.6c4.6-3.1,13.1,1.3,18.4-0.3			c5.3-1.6,9.7-9.8,15.4-9.7c5.5,0.1,9.6,8.4,15.1,10.2C76.4,12,85,7.9,89.4,11c4.5,3.3,2.8,12.4,5.9,16.8			c3.2,4.4,12.8,5.9,14.4,11.1c1.6,5.1-5.3,11.5-5.4,16.9C104.2,61,111.1,67.6,109.2,72.8z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <svg class="qodef-m-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                    <path id="qodef-m-path-97"
                                        d="M0,21C0,9.4,9.4,0,21,0s21,9.4,21,21-9.4,21-21,21S0,32.6,0,21Z" fill="none">
                                    </path>
                                    <text>
                                        <textPath href="#qodef-m-path-97" lengthAdjust="spacing"> view view view view
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <div class="qodef-m-image-inner-holder">
                            <div class="qodef-m-image">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/" target="_blank">
                                    <!-- src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-01.jpg" -->
                                    <img loading="lazy" decoding="async" width="1000" height="967"
                                    :src="img.src"
                                        class="attachment-full size-full" alt="s"
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-01.jpg 1000w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-01-300x290.jpg 300w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-01-768x743.jpg 768w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-01-600x580.jpg 600w"
                                        sizes="(max-width: 1000px) 100vw, 1000px"> </a>
                            </div>
                        </div>
                        <div class="qodef-m-content">
                            <h5 class="qodef-m-title" style="margin-top: 20px">
                                <!-- <a itemprop="url" href="https://wanderaway.qodeinteractive.com/" target="_blank"> -->
                                    {{img.text}} 
                                <!-- </a> -->
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="elementor-element elementor-element-9dab0b0 e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="9dab0b0" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-a0a625e elementor-widget elementor-widget-wanderaway_core_image_with_text"
                data-id="a0a625e" data-element_type="widget" data-widget_type="wanderaway_core_image_with_text.default">
                <div class="elementor-widget-container">
                    <div
                        class="qodef-shortcode qodef-m  qodef-image-with-text qodef-image-with-text-903 qodef-layout--text-below qodef-image-action--custom-link qodef-shadow--enabled">
                        <div class="qodef-m-stamp">
                            <div class="qodef-shortcode qodef-m qodef-stamp qodef--appeared"
                                style="--stamp-color: #FFC765">
                                <div class="qodef-m-circle">
                                    <svg class="qodef-svg--stamp" xmlns="http://www.w3.org/2000/svg" width="110"
                                        height="110" viewBox="0 0 110 110">
                                        <g>
                                            <path
                                                d="M109.2,72.8c-1.9,5.2-11.5,6.4-14.7,10.6c-3.4,4.3-2,13.5-6.5,16.6c-4.6,3.1-13.1-1.3-18.4,0.3c-5.3,1.6-9.7,9.8-15.4,9.7			c-5.5-0.1-9.6-8.4-15.1-10.2C33.6,98,25,102.1,20.6,99c-4.5-3.3-2.8-12.4-5.9-16.8c-3.2-4.4-12.8-5.9-14.4-11.1			c-1.6-5.1,5.3-11.5,5.4-16.9C5.8,49-1.1,42.4,0.8,37.2s11.5-6.4,14.7-10.6c3.4-4.3,2-13.5,6.5-16.6c4.6-3.1,13.1,1.3,18.4-0.3			c5.3-1.6,9.7-9.8,15.4-9.7c5.5,0.1,9.6,8.4,15.1,10.2C76.4,12,85,7.9,89.4,11c4.5,3.3,2.8,12.4,5.9,16.8			c3.2,4.4,12.8,5.9,14.4,11.1c1.6,5.1-5.3,11.5-5.4,16.9C104.2,61,111.1,67.6,109.2,72.8z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <svg class="qodef-m-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                    <path id="qodef-m-path-538"
                                        d="M0,21C0,9.4,9.4,0,21,0s21,9.4,21,21-9.4,21-21,21S0,32.6,0,21Z" fill="none">
                                    </path>
                                    <text>
                                        <textPath href="#qodef-m-path-538" lengthAdjust="spacing"> view view view view
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <div class="qodef-m-image-inner-holder">
                            <div class="qodef-m-image">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/essaouira/"
                                    target="_blank">
                                    <img loading="lazy" decoding="async" width="1000" height="967"
                                        src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-02.jpg"
                                        class="attachment-full size-full" alt="s"
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-02.jpg 1000w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-02-300x290.jpg 300w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-02-768x743.jpg 768w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-02-600x580.jpg 600w"
                                        sizes="(max-width: 1000px) 100vw, 1000px"> </a>
                            </div>
                        </div>
                        <div class="qodef-m-content">
                            <h5 class="qodef-m-title" style="margin-top: 20px">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/essaouira/"
                                    target="_blank">
                                    Essaouira </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="elementor-element elementor-element-604801d e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="604801d" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-1cbb865 elementor-widget elementor-widget-wanderaway_core_image_with_text"
                data-id="1cbb865" data-element_type="widget" data-widget_type="wanderaway_core_image_with_text.default">
                <div class="elementor-widget-container">
                    <div
                        class="qodef-shortcode qodef-m  qodef-image-with-text qodef-image-with-text-892 qodef-layout--text-below qodef-image-action--custom-link qodef-shadow--enabled">
                        <div class="qodef-m-stamp">
                            <div class="qodef-shortcode qodef-m qodef-stamp qodef--appeared"
                                style="--stamp-color: #FF6565">
                                <div class="qodef-m-circle">
                                    <svg class="qodef-svg--stamp" xmlns="http://www.w3.org/2000/svg" width="110"
                                        height="110" viewBox="0 0 110 110">
                                        <g>
                                            <path
                                                d="M109.2,72.8c-1.9,5.2-11.5,6.4-14.7,10.6c-3.4,4.3-2,13.5-6.5,16.6c-4.6,3.1-13.1-1.3-18.4,0.3c-5.3,1.6-9.7,9.8-15.4,9.7			c-5.5-0.1-9.6-8.4-15.1-10.2C33.6,98,25,102.1,20.6,99c-4.5-3.3-2.8-12.4-5.9-16.8c-3.2-4.4-12.8-5.9-14.4-11.1			c-1.6-5.1,5.3-11.5,5.4-16.9C5.8,49-1.1,42.4,0.8,37.2s11.5-6.4,14.7-10.6c3.4-4.3,2-13.5,6.5-16.6c4.6-3.1,13.1,1.3,18.4-0.3			c5.3-1.6,9.7-9.8,15.4-9.7c5.5,0.1,9.6,8.4,15.1,10.2C76.4,12,85,7.9,89.4,11c4.5,3.3,2.8,12.4,5.9,16.8			c3.2,4.4,12.8,5.9,14.4,11.1c1.6,5.1-5.3,11.5-5.4,16.9C104.2,61,111.1,67.6,109.2,72.8z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <svg class="qodef-m-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                    <path id="qodef-m-path-480"
                                        d="M0,21C0,9.4,9.4,0,21,0s21,9.4,21,21-9.4,21-21,21S0,32.6,0,21Z" fill="none">
                                    </path>
                                    <text>
                                        <textPath href="#qodef-m-path-480" lengthAdjust="spacing"> view view view view
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <div class="qodef-m-image-inner-holder">
                            <div class="qodef-m-image">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/uluwatu/"
                                    target="_blank">
                                    <img loading="lazy" decoding="async" width="1000" height="967"
                                        src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-03.jpg"
                                        class="attachment-full size-full" alt="s"
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-03.jpg 1000w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-03-300x290.jpg 300w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-03-768x743.jpg 768w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-03-600x580.jpg 600w"
                                        sizes="(max-width: 1000px) 100vw, 1000px"> </a>
                            </div>
                        </div>
                        <div class="qodef-m-content">
                            <h5 class="qodef-m-title" style="margin-top: 20px">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/uluwatu/"
                                    target="_blank">
                                    Uluwatu </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- <div class="elementor-element elementor-element-91bc857 e-con-full e-flex qodef-container-heights--disabled e-con e-parent"
        data-id="91bc857" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
        data-core-v316-plus="true">
        <div class="elementor-element elementor-element-75a1886 e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="75a1886" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-175e63e elementor-widget elementor-widget-wanderaway_core_image_with_text"
                data-id="175e63e" data-element_type="widget" data-widget_type="wanderaway_core_image_with_text.default">
                <div class="elementor-widget-container">
                    <div
                        class="qodef-shortcode qodef-m  qodef-image-with-text qodef-image-with-text-710 qodef-layout--text-below qodef-image-action--custom-link qodef-shadow--enabled">
                        <div class="qodef-m-stamp">
                            <div class="qodef-shortcode qodef-m qodef-stamp qodef--appeared"
                                style="--stamp-color: #FF6565">
                                <div class="qodef-m-circle">
                                    <svg class="qodef-svg--stamp" xmlns="http://www.w3.org/2000/svg" width="110"
                                        height="110" viewBox="0 0 110 110">
                                        <g>
                                            <path
                                                d="M109.2,72.8c-1.9,5.2-11.5,6.4-14.7,10.6c-3.4,4.3-2,13.5-6.5,16.6c-4.6,3.1-13.1-1.3-18.4,0.3c-5.3,1.6-9.7,9.8-15.4,9.7			c-5.5-0.1-9.6-8.4-15.1-10.2C33.6,98,25,102.1,20.6,99c-4.5-3.3-2.8-12.4-5.9-16.8c-3.2-4.4-12.8-5.9-14.4-11.1			c-1.6-5.1,5.3-11.5,5.4-16.9C5.8,49-1.1,42.4,0.8,37.2s11.5-6.4,14.7-10.6c3.4-4.3,2-13.5,6.5-16.6c4.6-3.1,13.1,1.3,18.4-0.3			c5.3-1.6,9.7-9.8,15.4-9.7c5.5,0.1,9.6,8.4,15.1,10.2C76.4,12,85,7.9,89.4,11c4.5,3.3,2.8,12.4,5.9,16.8			c3.2,4.4,12.8,5.9,14.4,11.1c1.6,5.1-5.3,11.5-5.4,16.9C104.2,61,111.1,67.6,109.2,72.8z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <svg class="qodef-m-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                    <path id="qodef-m-path-744"
                                        d="M0,21C0,9.4,9.4,0,21,0s21,9.4,21,21-9.4,21-21,21S0,32.6,0,21Z" fill="none">
                                    </path>
                                    <text>
                                        <textPath href="#qodef-m-path-744" lengthAdjust="spacing"> view view view view
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <div class="qodef-m-image-inner-holder">
                            <div class="qodef-m-image">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/kyrenia/"
                                    target="_blank">
                                    <img loading="lazy" decoding="async" width="1000" height="967"
                                        src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-04.jpg"
                                        class="attachment-full size-full" alt="s"
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-04.jpg 1000w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-04-300x290.jpg 300w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-04-768x743.jpg 768w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-04-600x580.jpg 600w"
                                        sizes="(max-width: 1000px) 100vw, 1000px"> </a>
                            </div>
                        </div>
                        <div class="qodef-m-content">
                            <h5 class="qodef-m-title" style="margin-top: 20px">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/kyrenia/"
                                    target="_blank">
                                    Kyrenia </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-32ac5ea e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="32ac5ea" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-3a00503 elementor-widget elementor-widget-wanderaway_core_image_with_text"
                data-id="3a00503" data-element_type="widget" data-widget_type="wanderaway_core_image_with_text.default">
                <div class="elementor-widget-container">
                    <div
                        class="qodef-shortcode qodef-m  qodef-image-with-text qodef-image-with-text-783 qodef-layout--text-below qodef-image-action--custom-link qodef-shadow--enabled">
                        <div class="qodef-m-stamp">
                            <div class="qodef-shortcode qodef-m qodef-stamp qodef--appeared">
                                <div class="qodef-m-circle">
                                    <svg class="qodef-svg--stamp" xmlns="http://www.w3.org/2000/svg" width="110"
                                        height="110" viewBox="0 0 110 110">
                                        <g>
                                            <path
                                                d="M109.2,72.8c-1.9,5.2-11.5,6.4-14.7,10.6c-3.4,4.3-2,13.5-6.5,16.6c-4.6,3.1-13.1-1.3-18.4,0.3c-5.3,1.6-9.7,9.8-15.4,9.7			c-5.5-0.1-9.6-8.4-15.1-10.2C33.6,98,25,102.1,20.6,99c-4.5-3.3-2.8-12.4-5.9-16.8c-3.2-4.4-12.8-5.9-14.4-11.1			c-1.6-5.1,5.3-11.5,5.4-16.9C5.8,49-1.1,42.4,0.8,37.2s11.5-6.4,14.7-10.6c3.4-4.3,2-13.5,6.5-16.6c4.6-3.1,13.1,1.3,18.4-0.3			c5.3-1.6,9.7-9.8,15.4-9.7c5.5,0.1,9.6,8.4,15.1,10.2C76.4,12,85,7.9,89.4,11c4.5,3.3,2.8,12.4,5.9,16.8			c3.2,4.4,12.8,5.9,14.4,11.1c1.6,5.1-5.3,11.5-5.4,16.9C104.2,61,111.1,67.6,109.2,72.8z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <svg class="qodef-m-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                    <path id="qodef-m-path-708"
                                        d="M0,21C0,9.4,9.4,0,21,0s21,9.4,21,21-9.4,21-21,21S0,32.6,0,21Z" fill="none">
                                    </path>
                                    <text>
                                        <textPath href="#qodef-m-path-708" lengthAdjust="spacing"> view view view view
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <div class="qodef-m-image-inner-holder">
                            <div class="qodef-m-image">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/aveiro/" target="_blank">
                                    <img loading="lazy" decoding="async" width="1000" height="967"
                                        src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-05.jpg"
                                        class="attachment-full size-full" alt="s"
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-05.jpg 1000w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-05-300x290.jpg 300w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-05-768x743.jpg 768w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-05-600x580.jpg 600w"
                                        sizes="(max-width: 1000px) 100vw, 1000px"> </a>
                            </div>
                        </div>
                        <div class="qodef-m-content">
                            <h5 class="qodef-m-title" style="margin-top: 20px">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/aveiro/" target="_blank">
                                    Aveiro </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-7ea0cae e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="7ea0cae" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-f696f96 elementor-widget elementor-widget-wanderaway_core_image_with_text"
                data-id="f696f96" data-element_type="widget" data-widget_type="wanderaway_core_image_with_text.default">
                <div class="elementor-widget-container">
                    <div
                        class="qodef-shortcode qodef-m  qodef-image-with-text qodef-image-with-text-60 qodef-layout--text-below qodef-image-action--custom-link qodef-shadow--enabled">
                        <div class="qodef-m-stamp">
                            <div class="qodef-shortcode qodef-m qodef-stamp qodef--appeared"
                                style="--stamp-color: #F6B17B">
                                <div class="qodef-m-circle">
                                    <svg class="qodef-svg--stamp" xmlns="http://www.w3.org/2000/svg" width="110"
                                        height="110" viewBox="0 0 110 110">
                                        <g>
                                            <path
                                                d="M109.2,72.8c-1.9,5.2-11.5,6.4-14.7,10.6c-3.4,4.3-2,13.5-6.5,16.6c-4.6,3.1-13.1-1.3-18.4,0.3c-5.3,1.6-9.7,9.8-15.4,9.7			c-5.5-0.1-9.6-8.4-15.1-10.2C33.6,98,25,102.1,20.6,99c-4.5-3.3-2.8-12.4-5.9-16.8c-3.2-4.4-12.8-5.9-14.4-11.1			c-1.6-5.1,5.3-11.5,5.4-16.9C5.8,49-1.1,42.4,0.8,37.2s11.5-6.4,14.7-10.6c3.4-4.3,2-13.5,6.5-16.6c4.6-3.1,13.1,1.3,18.4-0.3			c5.3-1.6,9.7-9.8,15.4-9.7c5.5,0.1,9.6,8.4,15.1,10.2C76.4,12,85,7.9,89.4,11c4.5,3.3,2.8,12.4,5.9,16.8			c3.2,4.4,12.8,5.9,14.4,11.1c1.6,5.1-5.3,11.5-5.4,16.9C104.2,61,111.1,67.6,109.2,72.8z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <svg class="qodef-m-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                    <path id="qodef-m-path-606"
                                        d="M0,21C0,9.4,9.4,0,21,0s21,9.4,21,21-9.4,21-21,21S0,32.6,0,21Z" fill="none">
                                    </path>
                                    <text>
                                        <textPath href="#qodef-m-path-606" lengthAdjust="spacing"> view view view view
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <div class="qodef-m-image-inner-holder">
                            <div class="qodef-m-image">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/dolomites/"
                                    target="_blank">
                                    <img loading="lazy" decoding="async" width="1000" height="967"
                                        src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-06.jpg"
                                        class="attachment-full size-full" alt="s"
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-06.jpg 1000w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-06-300x290.jpg 300w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-06-768x743.jpg 768w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-home-06-600x580.jpg 600w"
                                        sizes="(max-width: 1000px) 100vw, 1000px"> </a>
                            </div>
                        </div>
                        <div class="qodef-m-content">
                            <h5 class="qodef-m-title" style="margin-top: 20px">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/dolomites/"
                                    target="_blank">
                                    Dolomites </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end cards -->
</template>
<script>
import SectionTitle2 from '@/Components/SectionTitle2.vue';
export default {
    components:{
        SectionTitle2,
    },
    props:{
        imgs:{
            default:[]
        },
        sectionTitle:{
            default:null
        },
        sectionText:{
            default:null
        }
    }
}
</script>