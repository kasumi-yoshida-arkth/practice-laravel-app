require('./bootstrap');

import Vue from 'vue'
import Practice from './components/practice'

Vue.component('sample-component',require('./components/practice.vue').default);

const app = new Vue({
    el: '#app',
    components: {
        Practice
    }
});
