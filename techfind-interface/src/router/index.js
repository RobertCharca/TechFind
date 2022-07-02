import Vue from 'vue'
import VueRouter from 'vue-router'
//Pagina principal
import Main from '../views/MainView'
//Login y registro
import Login from '../views/auth/LoginView.vue'
import Registro from '../views/auth/RegisterView.vue'

Vue.use(VueRouter)

const routes = [{
    path: '/',
    name: 'main-component',
    component: Main

},

    {
        path: '/user',
        name: 'user-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/UserView.vue'),
        //Rutas anidadas
        children:[
            {
                path: 'posts',
                name: 'publicacion-component',
                component: () =>
                    import('../views/user/profile/PublicacionesView.vue')
            },
            {
                path: 'photos',
                name: 'fotos-component',
                component: () =>
                    import('../views/user/profile/FotosView.vue')
            },
        ]
    },
    {
        path: '/user/edit',
        name: 'useredit-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/profile/EditarPerfilView.vue'),
    },
    {
        path: '/vendedor',
        name: 'vendedor',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/VendedorView.vue')
    },
    {
        path: '/colaboradores',
        name: 'colaboradores',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/ColaboradoresView.vue')
    },
    {
        path: '/vendedor/catalogo',
        name: 'catalogo',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/CatalogoView.vue')
    },
    {
        path: '/vendedor/catalogo/producto',
        name: 'producto',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/ProductoView.vue')
    },
    //Login y registro de usuario
    {
        path: '/login',
        name: 'login',
        component: Login

    },
    {
        path: '/register',
        name: 'register',
        component: Registro
    }

]

const router = new VueRouter({
    routes
})

export default router
