export const routes = [
	/*
	 * Route accueil
	 */
	{
		path: '/', 
		component: require('./components/AccueilComponent.vue').default,
		name: 'accueil',
		meta: {title: 'Accueil'}
	},
	{
		path: '/realisations',
		component: require('./components/RealisationsComponent.vue').default,
		name: 'realisations',
		meta: {title: 'Réalisations'}
	},
	{
		path: '/technologies',
		component: require('./components/TechnologiesComponent.vue').default,
		name: 'technologies',
		meta: {title: 'Technologies'}
	},
	{
		path: '/a-propos',
		component: require('./components/AProposComponent.vue').default,
		name: 'a_propos',
		meta: {title: 'À-propos'}
	}
];