require('./bootstrap');

window.Vue = require('vue');

// Vue.component('company-search', require('./components/CompanySearch'));
import CompanySearch from "./components/CompanySearch";

Vue.prototype.axios = window.axios;

const app = new Vue({
    el: '#app',
    components: {CompanySearch}
});
