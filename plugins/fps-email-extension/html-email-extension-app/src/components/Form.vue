<template>
  <div class="forms">
    <v-form>
      <v-text-field v-model="logo.filename" @click="openMediaModal" label="Logo" append-icon="image_search" data-lpignore="true"></v-text-field>
      <v-text-field v-model="footer" label="Footer Text" data-lpignore="true"></v-text-field>
      <ColorC />
      <v-switch v-model="modifyHTML" label="Modify HTML" class="remove-gap"></v-switch>
    </v-form>
  </div>
</template>


<script>
  import ColorC from '@/components/ColorC.vue'
  export default {
    components: {
      ColorC,
    },
    computed: {
      logo: {
        get(){
          return this.$store.state.template.logo;
        },
        set(value){
          this.$store.commit('setTemplateLogo', value);
        }
      },
      footer: {
        get(){
          return this.$store.state.template.footer;
        },
        set(value){
          this.$store.commit('setTemplateFooter', value);
        }
      },
      modifyHTML: {
        get(){
          return this.$store.state.modifyHTML;
        },
        set(value){
          this.$store.commit('setModifyHTML', value);
        }
      }
    },
    methods: {
      openMediaModal: function() {
        var that = this;
        var mediaUploader = wp.media({
          title: 'Select or Upload Media Of Your Chosen Persuasion',
          button: {
            text: 'Use this media'
          },
          library: {
            type: ['image']
          },
          multiple: false // Set to true to allow multiple files to be selected
        });
  
        mediaUploader.on('select', function() {
          var attachment = mediaUploader.state().get('selection').first().toJSON();
          that.logo = attachment;
        });
  
        mediaUploader.open();
      },
    }
  }
</script>

<style lang="scss">
  input[type=checkbox],
  input[type=color],
  input[type=date],
  input[type=datetime-local],
  input[type=datetime],
  input[type=email],
  input[type=month],
  input[type=number],
  input[type=password],
  input[type=radio],
  input[type=search],
  input[type=tel],
  input[type=text],
  input[type=time],
  input[type=url],
  input[type=week],
  select,
  textarea {
    border: none;
    box-shadow: none;
    background-color: transparent;
    color: inherit;
    outline: 0;
    transition: inherit;
  }
  
  input[type=checkbox]:focus,
  input[type=color]:focus,
  input[type=date]:focus,
  input[type=datetime-local]:focus,
  input[type=datetime]:focus,
  input[type=email]:focus,
  input[type=month]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=radio]:focus,
  input[type=search]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=time]:focus,
  input[type=url]:focus,
  input[type=week]:focus,
  select:focus,
  textarea:focus {
    border: none;
    box-shadow: none;
    outline: none;
  }
  
  .v-btn {
    margin-left: 0;
  }

  .v-input {
    margin-bottom: 16px;
    .v-label.theme--light {
      top: 0;
        letter-spacing: 0.1em;
      text-transform: uppercase;
      font-size: 12px;
    }
  }

  .v-text-field .v-label.theme--light.v-label--active {
          font-style: normal;
      line-height: 17px;
      font-size: 14px;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #333333;
  }
  .v-text-field__slot {
    input {
      font-size: 14px;
      padding-bottom: 16px;
    }
  }

  .theme--light.v-input:not(.v-input--is-disabled) input, .theme--light.v-input:not(.v-input--is-disabled) textarea {
	color: rgba(95, 95, 95, 0.87);
  }

  .v-input--switch__thumb {
    box-shadow: none;
  }

  .v-label {
    	top: 0;
	letter-spacing: 0.1em;
	text-transform: uppercase;
	font-size: 12px;
  }

  .v-input--switch label.v-label.theme--light,
  .color-picker .v-label {
	margin-top: 8px;
	margin-left: 8px;
}

.theme--light.v-text-field > .v-input__control > .v-input__slot:before {
	border-color: rgba(0,0,0,0.15);
}

.theme--light.v-input--switch__thumb {
	color: #ffffff;
	box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.13);
}

.theme--light.v-input--switch__track {
	color: #E6EBF2;
}
.v-input--switch.v-input--is-dirty .v-input--switch__thumb {
	color: #0984E3!important;
}

.remove-gap .v-messages.theme--light{
  display: none;
}
</style>