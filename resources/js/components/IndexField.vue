<template>
    <img class="external-image-thumbnail" :style="{ width, height, borderRadius }" v-if="url" :src="url">

    <span v-else>&mdash;</span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],

    computed: {
        url() {
            if (this.field.prefix) {
                return `${this.field.prefix}${this.field.value}`;
            }

            return this.field.value;
        },

        width() {
            return this.field.width + 'px' || 'auto';
        },

        height() {
            return this.field.height + 'px' || 'auto';
        },

        borderRadius() {
            return this.field.borderRadius + 'px' || '0';
        },
    }
}
</script>
