import Vue from 'vue'
import Vuex from 'vuex'
import VuexPersistence from 'vuex-persist'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    nombre_usuario: 'user',
    email:'user@mail.com',
    imagen:'https://ceslava.s3-accelerate.amazonaws.com/2016/04/mistery-man-gravatar-wordpress-avatar-persona-misteriosa-510x510.png'
  },
  getters: {
  },
  mutations: {
    SET_NOMBRE_USUARIO(state, nombre_usuario) {
      state.nombre_usuario = nombre_usuario;
    },
    SET_EMAIL(state, email) {
      state.email = email;
    },
    SET_IMAGEN(state, imagen) {
      state.imagen = imagen;
    },
  },
  actions: {
  },
  modules: {
  },
  plugins:[
    new VuexPersistence({
      storage: window.localStorage
    }).plugin
  ]
})
