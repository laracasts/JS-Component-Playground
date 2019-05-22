import Vue from 'vue';
import ScrollLink from './components/ScrollLink';
import Dropdown from './components/Dropdown';

window.Vue = Vue;

Vue.component('scroll-link', ScrollLink);
Vue.component('dropdown', Dropdown);

new Vue({
    el: '#app'
});
