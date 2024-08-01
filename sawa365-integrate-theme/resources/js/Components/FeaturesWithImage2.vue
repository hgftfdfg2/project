<template>
    <div class="elementor-element elementor-element-9374edf e-con-full e-flex qodef-container-heights--disabled e-con e-parent"
        data-id="9374edf" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
        data-core-v316-plus="true">
        <div class="elementor-element elementor-element-81101c4 e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="81101c4" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-1b30435 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget-laptop__width-initial elementor-widget elementor-widget-wanderaway_core_section_title"
                data-id="1b30435" data-element_type="widget" data-widget_type="wanderaway_core_section_title.default">
                <div class="elementor-widget-container">
                    <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                        <!-- <h2 class="qodef-m-title">
                            Easily Launch an Online Store Too!
                        </h2>
                        <p class="qodef-m-text" style="margin-top: 10px;font-size: 19px">
                            The theme is fully compatible with the powerful &amp; free
                            WooCommerce plugin, and on top of that you get a great set of
                            shop page templates &amp; features.
                        </p> -->
                        <section-title-2>
                            <template #title>
                                <slot name="title"></slot>
                            </template>
                            <template #text>
                                <slot name="text"></slot>
                            </template>
                        </section-title-2>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2a61ee2 elementor-widget elementor-widget-wanderaway_core_textual_list"
                data-id="2a61ee2" data-element_type="widget" data-widget_type="wanderaway_core_textual_list.default">
                <div class="elementor-widget-container">
                    <div class="qodef-shortcode qodef-m  qodef-textual-list">
                            <ul class="qodef-e-list" v-for="(feature,i) in features" :key="i">
                            <li  class="qodef-e-item">
                                <span class="qodef-e-bullet"></span>
                                <span class="qodef-e-text">{{ feature }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-21c1f92 elementor-widget elementor-widget-wanderaway_core_button"
                data-id="21c1f92" data-element_type="widget" data-widget_type="wanderaway_core_button.default">
                <div class="elementor-widget-container">
                    <standard-button :target=buttonTarget>
                        <template #text>
                            <slot name="buttonText"></slot>
                        </template>
                    </standard-button>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-ad6543f e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="ad6543f" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-50c708c elementor-widget elementor-widget-wanderaway_core_image_gallery"
                data-id="50c708c" data-element_type="widget" data-widget_type="wanderaway_core_image_gallery.default">
                <div class="elementor-widget-container">
                    <div
                        class="qodef-shortcode qodef-m  qodef-image-gallery  qodef-shadow--enabled  qodef-grid qodef-layout--columns  qodef-gutter--medium  qodef-col-num--2  qodef-responsive--predefined">
                        <div class="qodef-grid-inner">
                            <div class="qodef-e qodef-image-wrapper qodef-grid-item ">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/shop/" target="_blank">
                                    <img loading="lazy" decoding="async" width="1000" height="1080"
                                        src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-08.jpg"
                                        class="attachment-full size-full" alt=""
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-08.jpg 1000w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-08-278x300.jpg 278w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-08-948x1024.jpg 948w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-08-768x829.jpg 768w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-08-300x324.jpg 300w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-08-600x648.jpg 600w"
                                        sizes="(max-width: 1000px) 100vw, 1000px"> </a>
                            </div>
                            <div class="qodef-e qodef-image-wrapper qodef-grid-item ">
                                <a itemprop="url" href="https://wanderaway.qodeinteractive.com/product/travel-book/"
                                    target="_blank">
                                    <img loading="lazy" decoding="async" width="1000" height="1080"
                                        src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-07.jpg"
                                        class="attachment-full size-full" alt="s"
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-07.jpg 1000w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-07-278x300.jpg 278w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-07-948x1024.jpg 948w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-07-768x829.jpg 768w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-07-300x324.jpg 300w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-07-600x648.jpg 600w"
                                        sizes="(max-width: 1000px) 100vw, 1000px"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import StandardButton from '@/Components/StandardButton.vue';
import SectionTitle2 from './SectionTitle2.vue';
export default {
    components:{
        StandardButton,
        SectionTitle2
    },
    props:{
        features:{
            default:[]
        },
        buttonTarget:{
            default:"_blank"
        }
    }
}
</script>
