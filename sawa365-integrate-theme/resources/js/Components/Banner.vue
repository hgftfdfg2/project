<template>
    <div class="elementor-element elementor-element-5589b48 e-con-full e-flex qodef-container-heights--disabled e-con e-parent qodef-parallax qodef--parallax-row qodef-parallax--init"
        data-id="5589b48" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
        data-core-v316-plus="true">
        <div class="qodef-parallax-row-holder">
            <div class="qodef-parallax-img-holder"
                style="opacity: 1; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                <div class="qodef-parallax-img-wrapper">
                        <!-- src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/09/Landing-img-6.jpg" -->
                    <img class="qodef-parallax-img"
                    :src="imgSrc"
                        alt="Parallax Image"></div>
            </div>
        </div>
        <div class="elementor-element elementor-element-5b2aaf2 e-con-full e-flex qodef-container-heights--disabled e-con e-child"
            data-id="5b2aaf2" data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-8728b21 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
                data-id="8728b21" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">

                    <h2>
                        <span style="color: #ffffff;">
                        <slot name="bannerTitle"></slot>
                        </span></h2>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['imgSrc']
}
</script>