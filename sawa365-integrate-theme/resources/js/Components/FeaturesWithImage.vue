<template>
    <div class="elementor-element elementor-element-d0d83e8 e-con-full e-flex qodef-container-heights--disabled e-con e-parent"
        data-id="d0d83e8" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
        data-core-v316-plus="true">
        <div class="elementor-element elementor-element-63b91f0 e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="63b91f0" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-973ff86 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-wanderaway_core_section_title"
                data-id="973ff86" data-element_type="widget" data-widget_type="wanderaway_core_section_title.default">
                <div class="elementor-widget-container">
                    <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                        <!-- <h2 class="qodef-m-title">
                            A Variety of Ways to Display Posts
                        </h2>
                        <p class="qodef-m-text" style="margin-top: 10px;font-size: 19px">
                            You get every layout &amp; option you’ll need to captivate the
                            blogosphere; 3 adjustable blog list elements, tons of ways to
                            display single posts &amp; more.
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
            
            <div class="elementor-element elementor-element-4e3d233 elementor-widget elementor-widget-wanderaway_core_textual_list"
                data-id="4e3d233" data-element_type="widget" data-widget_type="wanderaway_core_textual_list.default">
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
            <div class="elementor-element elementor-element-0705473 elementor-widget elementor-widget-wanderaway_core_button"
                data-id="0705473" data-element_type="widget" data-widget_type="wanderaway_core_button.default">
                <div class="elementor-widget-container">
                    <standard-button :target=buttonTarget>
                        <template #text>
                            <slot name="buttonText"></slot>
                        </template>
                    </standard-button>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-0f040d7 e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="0f040d7" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-c650457 elementor-widget elementor-widget-wanderaway_core_stacked_images"
                data-id="c650457" data-element_type="widget" data-widget_type="wanderaway_core_stacked_images.default">
                <div class="elementor-widget-container">
                    <div
                        class="qodef-shortcode qodef-m qodef-stacked-images qodef-layout--default qodef--has-appear qodef-shadow--enabled qodef--appeared">
                        <div class="qodef-m-images">
                            <div class="qodef-m-image ">
                                <a itemprop="url"
                                    href="https://wanderaway.qodeinteractive.com/a-tropical-escape-to-balis-stunning-beaches/"
                                    target="_blank">
                                    <img loading="lazy" decoding="async" width="733" height="715"
                                        src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-04.jpg"
                                        class="attachment-full size-full" alt="s"
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-04.jpg 733w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-04-300x293.jpg 300w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-04-600x585.jpg 600w"
                                        sizes="(max-width: 733px) 100vw, 733px"> </a>
                            </div>
                            <div class="qodef-m-image  qodef-disabled--1024"
                                style="bottom:-11%; left:-26%; text-align:left; --qode-image-max-width:31vw">
                                <a itemprop="url"
                                    href="https://wanderaway.qodeinteractive.com/indonesian-escapades-a-journey-through-islands/"
                                    target="_blank">
                                    <img loading="lazy" decoding="async" width="589" height="562"
                                        src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-05.jpg"
                                        class="attachment-full size-full" alt=""
                                        srcset="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-05.jpg 589w, https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Landing-img-05-300x286.jpg 300w"
                                        sizes="(max-width: 589px) 100vw, 589px"> </a>
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