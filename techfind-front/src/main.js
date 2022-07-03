import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import vuetify from './plugins/vuetify'
import * as VueGoogleMaps from "vue2-google-maps";

Vue.config.productionTip = false
Vue.use(VueGoogleMaps, {
    load: {
        key: "AIzaSyDp3Ud3SixagW8bJOwtosy5bBMB5JRNS_k",
    },
});

new Vue({
    router,
    store,
    vuetify,
    render: h => h(App)
}).$mount('#app')
