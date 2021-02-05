require('./bootstrap');
import { App, plugin } from '@inertiajs/inertia-vue'
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'
import Vue from 'vue'

Vue.use(plugin)
import CxltToastr from 'cxlt-vue2-toastr'
var toastrConfigs = {
  position: 'top right',
  showDuration: 1000,
  timeout:5000,
  closeButton: true, 
  showMethod:'fadeIn',
  hideMethod:'fadeOut'
}
Vue.use(CxltToastr, toastrConfigs)

const el = document.getElementById('app')

new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(el)