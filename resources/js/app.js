import Vue from 'vue';
import ScrollLink from './components/ScrollLink';

window.Vue = Vue;

Vue.component('scroll-link', ScrollLink);

new Vue({
    el: '#app'
});
