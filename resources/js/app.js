require('./bootstrap');

window.Vue = require('vue');

import router from './routes.js';

import App from './views/App';

const app = new Vue({
    el: '#root',
    router,
    render: h => h(App),
});