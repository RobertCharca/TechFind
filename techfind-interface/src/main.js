import Vue from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify'

Vue.config.productionTip = false

import * as VueGoogleMaps from "vue2-google-maps";

Vue.use(VueGoogleMaps, {
    load: {
        key: "AIzaSyDp3Ud3SixagW8bJOwtosy5bBMB5JRNS_k",
    },
});


new Vue({
  router,
  vuetify,
  render: h => h(App)
}).$mount('#app')
