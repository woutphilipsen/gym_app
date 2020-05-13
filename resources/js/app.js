require('./bootstrap');

import { InertiaApp } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import VueFilterDateFormat from 'vue-filter-date-format';

Vue.use(InertiaApp, VueFilterDateFormat)

const app = document.getElementById('app')

if (app) {
  new Vue({
    render: h => h(InertiaApp, {
      props: {
        initialPage: JSON.parse(app.dataset.page),
        resolveComponent: name => require(`./Pages/${name}`).default,
      },
    }),
  }).$mount(app)
}

