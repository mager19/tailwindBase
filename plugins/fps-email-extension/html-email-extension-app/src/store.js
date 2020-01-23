import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    template: {
      logo: '',
      footer: '',
      color: '',
      html: '',
    },
    modifyHTML: false,
  },
  mutations: {
    setTemplateColor(state, value) {
      state.template.color = value;
    },
    setTemplateFooter(state, value) {
      state.template.footer = value;
    },
    setTemplateLogo(state, value) {
      state.template.logo = value;
    },
    setModifyHTML(state, value) {
      state.modifyHTML = value;
    },
    setHTML(state, value) {
      state.template.html = value;
    },
  },
  actions: {
    setEmailTemplateSettings(context) {
      var settings = {
        "async": true,
        "crossDomain": true,
        "url": "../wp-json/fps-email-extension/v1/options",
        "method": "POST",
        "headers": {
          "Content-Type": "application/x-www-form-urlencoded",
          "X-WP-Nonce": wpApiSettings.nonce,
        },
        "data": {
          "color": context.state.template.color,
          "modifyHTML": context.state.modifyHTML,
          "logo": context.state.template.logo,
          "footer": context.state.template.footer
        }
      }

      jQuery.ajax(settings).done(function (response) {
        // do something w/ response
        console.log(wpApiSettings.nonce)
        context.dispatch('getEmailTemplateSettings');
      });
    },
    getEmailTemplateSettings(context) {
      var settings = {
        "async": true,
        "crossDomain": true,
        "url": "../wp-json/fps-email-extension/v1/options",
        "method": "GET",
        "headers": {
          "X-WP-Nonce": wpApiSettings.nonce,
        }
      }

      jQuery.ajax(settings).done(function (response) {
        context.commit('setTemplateLogo', response.logo)
        context.commit('setTemplateFooter', response.footer)
        context.commit('setTemplateColor', response.color)
        context.commit('setModifyHTML', response.modifyHTML)
        context.commit('setHTML', response.html)
      });
    }
  }
})
