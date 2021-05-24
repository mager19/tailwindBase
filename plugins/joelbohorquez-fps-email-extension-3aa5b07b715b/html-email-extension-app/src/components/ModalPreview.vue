<template>
    <div class="text-xs-center">
        <v-dialog v-model="dialog" width="800">
    
            <v-card>
    
                <div v-html="htmlTemplate"></div>
    
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" flat @click="dialog = false">
                        Close
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
    export default {
        computed: {
            htmlTemplate: {
                get() {
                    var str = this.$store.state.template.html;
                    var res = str.replace("{MESSAGE}", "This is a test message I want to try out to see if it works. This will be replaced with wordpress email content. <a href=\"#\">Is it working well?</a> ");
                    return res;
                },
                set(value) {
                    this.$store.commit('setHTML', value)
                }
            }
        },
        props: {
            dialog: Boolean,
        }
    }
</script>