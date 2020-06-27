import VueRouter from 'vue-router';


let routes = [
    {
      /*  * - bilo koja ruta koja nije jedna od registrovanih*/
      path: '*',
      component:   require('./components/404').default
    },
    {
        path: '/',
        component: require('./components/Logo').default
    },

    {
        path: '/logoSymbol',
        component: require('./components/LogoSymbol').default
    },
    {
        path: '/colors',
        component: require('./components/Colors').default
    },

    {
        path: '/typography',
        component: require('./components/Typography').default
    },
    {
        path: '/mascot',
        component: require('./components/Mascot').default
    },

    {
        path: '/illustrations',
        component: require('./components/Illustrations').default
    },
    {
        path: '/loaders',
        component: require('./components/Loaders').default
    },

    {
        path: '/wallpapers',
        component: require('./components/Wallpapers').default
    }
]

export default new VueRouter({
    routes,
    linkActiveClass: 'font-bold'

});
