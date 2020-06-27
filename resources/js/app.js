

require('./bootstrap');
import router from './routes';

window.Vue = require('vue');


Vue.component('example-component', require('./components/Logo.vue').default);



const app = new Vue({
    el: '#app',
    router

});
