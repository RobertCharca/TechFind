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
    //Todo sobre el vendedor
    {
        path: '/vendedor',
        name: 'vendedor',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/VendedorView.vue')
    },
    //Todos los vendedores
    {
        path: '/todosVendedor',
        name: 'vendedor-todos-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/NegociosTodosView.vue')
    },
    //Comentario de la pagina del vendedor
    {
        path: '/vendedor/postComment',
        name: 'vendedor-comentario-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/post/VendedorComentarioView.vue')
    },
    //Pagina principal del CRUD de los negocios de un usuario
    {
        path: '/misNegocios',
        name: 'misnegocios-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/MisNegociosView.vue')
    },
    //Todos los productos del negocio
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
    //Comentario de la pagina del producto del vendedor
    {
        path: '/vendedor/catalogo/producto/postComment',
        name: 'producto-comentario-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/business/post/ProductoComentario')
    },
    //CRUD de negocios y productos
    {
        path: '/misNegocios/create',
        name: 'agregar-negocio-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/postBusiness/MiNegocioCrearView.vue')
    },
    {
        path: '/misNegocios/edit',
        name: 'editar-negocio-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/postBusiness/MiNegocioEditarView.vue')
    },
    {
        path: '/misNegocios/createProduct',
        name: 'agregar-producto-component',
        component: () =>
            import ( /* webpackChunkName: "user" */ '../views/user/postBusiness/MiNegocioCrearProductoView.vue')
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
