<template>
    <panel-item :field="field">
        <div slot="value">

            <img v-if="url" :src="url" :width="width">

            <span v-else>&mdash;</span>
        </div>
    </panel-item>
</template>

<script>

    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],

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
