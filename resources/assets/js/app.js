/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('articles', require('./components/Articles.vue'));
// Vue.component('navbar', require('./components/Navbar.vue'));
// Vue.component('my-component', require('./components/Mycomponent.vue'));
// Vue.component('conditional-rendering', require('./components/ConditionalRendering'))
Vue.component('user-dashboard', require('./components/UserDashboard'))
Vue.component('life-cycle', require('./components/LifeCycle'))
Vue.component('binding-html', require('./components/BindingHTML'))
Vue.component('binding-model', require('./components/BindingModel'))

const app = new Vue({
    el: '#app'
});

