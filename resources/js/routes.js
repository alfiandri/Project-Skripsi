import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import DataEmas from '@/js/components/DataEmas';
import Login from '@/js/components/Login';

Vue.use(VueRouter);

const router = new VueRouter({
	linkActiveClass: 'active',
	mode: 'history',
	routes: [
		{
			path: '/',
			name: 'home',
			component: Home
		},
		{
			path: '/pages/dataemas',
			name: 'dataemas',
			component: DataEmas
		},
		{
			path: '/login',
			name: 'login',
			component: Login
		}
	]
});

export default router;