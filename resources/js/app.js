/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('../../node_modules/axios/dist/axios.min.js');

window.Vue = require('vue');
//window.Vue.prototype.$http = axios;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{
        sizes:
        [{size: 'A0'}, {size: 'A1'}, {size: 'A1L'}, {size: 'A2'}, 
        {size: 'A2L'},{size: 'A3'}, {size: 'A4'}],
        kimonos: [],
        checked: ''
    },
    methods:{
        bagAnswer() {
            if(this.checked === false || this.checked === '' || this.checked === null){
                return 'No tiene'; 
            }else{
                return 'Si tiene';
            }
        },
        getKimonos(){
            axios.get('/data')
            .then( res=> this.kimonos = res.data)
        }

    },
    mounted() {
        // console.log(this.bagAnswer());
        // this.bagAnswer();
        this.getKimonos();
    }
});
