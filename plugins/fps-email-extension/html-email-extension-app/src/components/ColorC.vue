<template>
    <div class='color-picker'>
        <ejs-colorpicker :value="color" @beforeClose="setTemplateColor" ref="colorpicker" showButtons="true"></ejs-colorpicker>
        <label for="" class="v-label theme--light">Select Color</label>
    </div>
</template>

<style lang="scss">
    @import '~@syncfusion/ej2-base/styles/material.css';
    @import '~@syncfusion/ej2-buttons/styles/material.css';
    @import '~@syncfusion/ej2-popups/styles/material.css';
    @import '~@syncfusion/ej2-splitbuttons/styles/material.css';
    @import '~@syncfusion/ej2-inputs/styles/material.css';
</style>

<script>
    export default {
        computed: {
            color: {
                get(){
                    return this.$store.state.template.color;
                },
                set(value){
                    this.$store.commit('setTemplateColor', value);
                }
            }
        },
        methods: {
            setTemplateColor: function() {
                var color = this.$refs.colorpicker.getValue();
                this.color = color;
            }
        }
    }
</script>