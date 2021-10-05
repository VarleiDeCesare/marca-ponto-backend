require('./bootstrap');

window.axios = require('axios');
window.axios.defaults.withCredentials = true;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import Vue from 'vue';

Vue.config.devtools = true;
Vue.prototype._ = _;

import moment from 'moment';
Vue.prototype.moment = moment;

Vue.prototype._ = _;

import users from '../views/users/index';

const app = new Vue({
    el: '#app',
    components: {
        users,
    }
});
