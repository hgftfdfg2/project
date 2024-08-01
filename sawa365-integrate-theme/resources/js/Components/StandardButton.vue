<template>
    <div class="qodef-m-button">
        <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled  qodef-html--link"
            href="https://qodeinteractive.com/purchase/wanderaway" target="target" style="margin: 30px 0 0"> <span
                class="qodef-m-text">
            <slot name="text"></slot>
            </span></a>
    </div>
</template>
<script>
export default {
    props:{
        target:{
            default: "_blank"
        }
    }
}
</script>