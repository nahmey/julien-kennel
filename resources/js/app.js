/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/*
 * Vue Router pour le système de routing
 */
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import { FadeTransition } from 'vue2-transitions';
Vue.component('fade-transition', FadeTransition);


Vue.component('julien-layout', require('./components/LayoutComponent.vue').default);
Vue.component('footer-layout', require('./components/FooterComponent.vue').default);
Vue.component('navigation-layout', require('./components/NavigationComponent.vue').default);

/*
 * Initialisation des routes, import du fichier routes.js
 */
import { routes } from './routes';

const router = new VueRouter({ routes });

router.beforeEach((to, from, next) => {
    let scroll = true;

    if(scroll === true){ 
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
    }
    next();
});

const MyPlugin = {
    install(Vue, options){
        Vue.prototype.convertHeure = (date) => {
            return moment(date).format('HH:mm') + 'h';
        }
        Vue.prototype.objectSize = (obj) => {
            var size = 0,
            key;
            for (key in obj) {
                if (obj.hasOwnProperty(key)) size++;
            }
            return size;
        }
        Vue.prototype.scrollToAnchor = (anchor, $refs) => {
            let element = $refs[anchor];
            let top = element.offsetTop;
            window.scrollTo({
                top: top,
                left: 0,
                behavior: 'smooth'
            });
        }
    }
}

Vue.use(MyPlugin)
const app = new Vue({router}).$mount('#app')