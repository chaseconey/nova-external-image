<template>
    <img class="external-image-thumbnail" v-if="url" :src="url" :width="width">

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

        width(){
            return this.field.width;
        }
    }
}
</script>
