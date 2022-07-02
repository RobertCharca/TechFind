import Vue from 'vue'
import VueRouter from 'vue-router'
import main from '../views/MainView.vue'
import Login from '../views/auth/LoginView.vue'

Vue.use(VueRouter)

const routes = [{
    path: '/',
    name: 'main',
    component: main,
    beforeEnter: (to, from, next) => {
        if (window.localStorage.hasOwnProperty('user')) next()
        else router.push({ path: '/Login' });
    }

},

    {
        path: '/user',
        name: 'user',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/UserView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/Login' });
        }
    },
    {
        path: '/vendedor/',
        name: 'vendedor',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/VendedorView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/Login' });
        }
    },
    {
        path: '/colaboradores',
        name: 'colaboradores',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/ColaboradoresView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/Login' });
        }
    },
    {
        path: '/catalogo',
        name: 'catalogo',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/CatalogoView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/Login' });
        }
    },
    {
        path: '/producto',
        name: 'producto',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/ProductoView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/Login' });
        }
    },
    {
        path: '/minegocio',
        name: 'MyBusiness',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/MyBusiness.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/Login' });
        }
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
//window.localStorage.removeItem('covid-user')


export default router
