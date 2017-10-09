// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
//import router from './router'
import VueRouter from 'vue-router';
import Resource from 'vue-resource';
Vue.use(VueRouter);
Vue.use(Resource);
//vue.user

import Artadd from './components/article/Add';
import Artedit from './components/article/edit';
import Arttypography from './components/admin/typography';
import Artelements from './components/admin/elements';
import Buttons from './components/admin/Buttons';
import treeview from './components/admin/treeview';
import Jquery from './components/admin/Jquery';
import nestablelist from './components/admin/nestablelist';
import tables from './components/admin/tables';
import Login from './components/admin/Login';
import formelements from './components/admin/formelements';
import type from './components/admin/type';
import Add from './components/admin/Add';
import Type_add from './components/admin/type_add';
import Type_list from './components/admin/type_list';


Vue.config.productionTip = false

/* eslint-disable no-new */

var router = new VueRouter({
	routes: [
        {
            path: '/admin/type_add',
            component: Type_add,
        },
        {
            path: '/admin/type_list',
            component: Type_list,
        },
	   {
	    path: '/article/add',
	    component: Artadd,
	  },
	  {
	  	path: '/admin/formelements',
	  	component:formelements,
	  },
	  {
	  	path: '/admin/add',
	  	component:Add,
	  },
	   {
	  	path: '/admin/type',
	  	component:type,
	  },
	  {
	  	path: '/admin/Login',
	  	component:Login,
	  },
	  {
	    path: '/admin/tables',
	    component: tables,
	  },
	  {
	    path: '/admin/Jqueryui',
	    component: Jquery,
	  },
	   {
	    path: '/admin/Jqueryui',
	    component: Jquery,
	  },
	  {
	    path: '/admin/nestablelist',
	    component: nestablelist,
	  },
	  {
	    path: '/admin/typography',
	    component: Arttypography,
	  },
	   {
	    path: '/admin/treeview',
	    component: treeview,
	  },
	  {
	    path: '/admin/Buttons',
	    component: Buttons,
	  },
	  {
	    path: '/admin/elements',
	    component: Artelements,
	  },
	   {
	    path: '/article/edit',
	    component: Artedit,
	  },
	  
	]
})

new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
