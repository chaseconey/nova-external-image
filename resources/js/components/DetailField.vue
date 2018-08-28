<template>
    <panel-item :field="field">
        <div slot="value">

            <img v-if="url" :src="url">

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
            }
        }
    }
</script>
