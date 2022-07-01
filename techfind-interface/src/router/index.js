import Vue from 'vue'
import VueRouter from 'vue-router'
//Pagina principal
import main from '../views/MainView.vue'
//Login y registro
import Login from '../components/user/LoginComponent.vue'
import Registro from '../components/user/RegisterComponent.vue'

Vue.use(VueRouter)

const routes = [{
    path: '/',
    name: 'main',
    component: main

},

    {
        path: '/user',
        name: 'user-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../components/user/UserComponent'),
        //Rutas anidadas
        children:[
            {
                path: 'general',
                name: 'general-component',
                component: () =>
                    import('../components/user/profile/GeneralComponent.vue')
            },
            {
                path: 'posts',
                name: 'publicacion-component',
                component: () =>
                    import('../components/user/profile/PublicacionesComponent.vue')
            },
            {
                path: 'photos',
                name: 'fotos-component',
                component: () =>
                    import('../components/user/profile/FotosComponent.vue')
            },
        ]
    },
    {
        path: '/user/edit',
        name: 'useredit-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../components/user/profile/EditarPerfilComponent.vue'),
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
        path: '/catalogo',
        name: 'catalogo',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/CatalogoView.vue')
    },
    {
        path: '/producto',
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
