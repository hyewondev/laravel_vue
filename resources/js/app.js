import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import { library } from '@fortawesome/fontawesome-svg-core'
import { faHeart } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.use(VueRouter);

library.add(faHeart)
Vue.component('font-awesome-icon', FontAwesomeIcon)

let app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
})
