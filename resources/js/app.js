
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');
import Vue from 'vue';

//Route information
import Routes from '@/js/routes.js';

//Component file
import App from '@/js/views/App';

const app = new Vue({
	el: '#app',
	router: Routes,
});

export default app;