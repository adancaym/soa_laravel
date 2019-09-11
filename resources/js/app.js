/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Toasted from 'vue-toasted';



window.Vue = require('vue');

Vue.use(Toasted);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('breadcum', require('./components/breadcum/breadcum').default);


Vue.component('nav-bar', require('./components/navbar/navbar.vue').default);
Vue.component('navbar-left', require('./components/navbar/left/navbar-left.vue').default);
Vue.component('navbar-right', require('./components/navbar/right/navbar-right.vue').default);


Vue.component('links-navbar', require('./components/navbar/links.vue').default);
Vue.component('link-navbar', require('./components/navbar/link-navbar.vue').default);


Vue.component('sidebar', require('./components/sidebar/sidebar').default);


Vue.component('admin-users', require('./components/apis/users/admin-users').default);
Vue.component('super-admin-users', require('./components/apis/users/super-admin-users').default);
Vue.component('row-admin-user', require('./components/apis/users/row-admin-user').default);
Vue.component('administracion-usuarios', require('./components/apis/users/administracion-usuarios').default);
Vue.component('table-admin-users', require('./components/apis/users/table-admin-users').default);

Vue.component('form-new-user', require('./components/apis/users/form-new-user').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
