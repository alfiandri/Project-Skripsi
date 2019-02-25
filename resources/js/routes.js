import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import DataEmas from '@/js/components/DataEmas';

Vue.use(VueRouter);

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/',
			name: 'home',
			component: Home
		},
		{
			path: '/dataemas',
			name: 'dataemas',
			component: DataEmas
		}
	]
});

export default router;