require('./bootstrap')

import Vue from 'vue'

import Vuetify from 'vuetify'

Vue.use(Vuetify, {
    theme: {
        standarColor: '#274755',
    }
})

import VueRouter from 'vue-router'

Vue.use(VueRouter)


import Home from './clients/Home.vue'

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    // router,
    render: h => h(Home)
})
