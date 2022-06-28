import Vue from 'vue'
import VueRouter from 'vue-router'
import main from '../views/MainView.vue'
import Login from '../views/auth/LoginView.vue'

Vue.use(VueRouter)

const routes = [{
    path: '/',
    name: 'main',
    component: main

},

    {
        path: '/user',
        name: 'user',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/UserView.vue')
    },
    {
        path: '/vendedor',
        name: 'vendedor',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/VendedorView.vue')
    },
    {
        path: '/colaboradores',
        name: 'colaboradores',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/ColaboradoresView.vue')
    },
    {
        path: '/catalogo',
        name: 'catalogo',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/CatalogoView.vue')
    },
    {
        path: '/producto',
        name: 'producto',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/ProductoView.vue')
    },
    {
        path: '/Login',
        name: 'login',
        component: Login

    },

]

const router = new VueRouter({
    routes
})

export default router
