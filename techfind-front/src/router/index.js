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
    component: Main,
    beforeEnter: (to, from, next) => {
        if (window.localStorage.hasOwnProperty('user')) next()
        else router.push({ path: '/login' });
    }
},

    {
        path: '/user',
        name: 'user-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/UserView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        },
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
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
    },
    //Todo sobre el vendedor
    {
        path: '/vendedor/:id',
        name: 'vendedor',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/VendedorView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
    },
    //Todos los vendedores
    {
        path: '/todosVendedor',
        name: 'vendedor-todos-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/NegociosTodosView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
    },
    //Comentario de la pagina del vendedor
    {
        path: '/cortaneg/postComment/:id',
        name: 'vendedor-comentario-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/post/VendedorComentarioView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
    },
    //Pagina principal del CRUD de los negocios de un usuario
    {
        path: '/misNegocios',
        name: 'misnegocios-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/MisNegociosView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
    },
    //Todos los productos del negocio
    {
        path: '/corta/catalogo/:id',
        name: 'catalogo',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/CatalogoView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
    },
    {
        path: '/vendedor/catalogo/producto/:id',
        name: 'producto',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/ProductoView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
    },
    //Comentario de la pagina del producto del vendedor
    {
        path: '/corta/postComment/:id',
        name: 'producto-comentario-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/post/ProductoComentario.vue'),
    },
    //CRUD de negocios y productos
    {
        path: '/misNegocios/create',
        name: 'agregar-negocio-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/postBusiness/MiNegocioCrearView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
    },
    {
        path: '/misNegocios/edit/:id',
        name: 'editar-negocio-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/postBusiness/MiNegocioEditarView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
    },
    {
        path: '/misNegocios/createProduct/:id',
        name: 'agregar-producto-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/postBusiness/MiNegocioCrearProductoView.vue'),
        beforeEnter: (to, from, next) => {
            if (window.localStorage.hasOwnProperty('user')) next()
            else router.push({ path: '/login' });
        }
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
