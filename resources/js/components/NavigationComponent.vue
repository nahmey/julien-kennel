<template>
	<div>
		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle" @click.prevent="hideMobileMenu()"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body">
				<ul class="site-nav-wrap">
					<li ref="li_mobile_accueil">
						<router-link to="/" class="nav-link">Accueil</router-link>
					</li>
					<li ref="li_mobile_realisations">
						<router-link to="realisations" class="nav-link">Réalisations</router-link>
					</li>
<!-- 					<li ref="li_mobile_services">
						<router-link to="services" class="nav-link">Services</router-link>
					</li> -->
					<li ref="li_mobile_technologies">
						<router-link to="technologies" class="nav-link">Technologies</router-link>
					</li>
					<li ref="li_mobile_a_propos">
						<router-link to="a-propos" class="nav-link">À propos</router-link>
					</li>
					<li>
						<a href="#" @click.prevent="scrollToBottom()">Contact</a>
					</li>
				</ul>
			</div>
		</div>

		<header class="site-navbar site-navbar-target" role="banner">
			<div class="container">
				<div class="row align-items-center position-relative p-2">
					<div class="col-8 col-md-3">
						<div class="site-logo">
							<router-link to="/">Julien Kennel</router-link>
						</div>
					</div>

					<div class="col-4 col-md-9 text-right">
						<span class="d-inline-block d-lg-none p-2">
							<a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white" @click.prevent="showMobileMenu()">
								<span class="icon-menu h3 text-white mobile-menu-bouton"></span>
							</a>
						</span>
						<nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
							<ul class="site-menu main-menu js-clone-nav ml-auto ">
								<li ref="li_accueil">
									<router-link to="/" class="nav-link">Accueil</router-link>
								</li>
								<li ref="li_realisations">
									<router-link to="realisations" class="nav-link">Réalisations</router-link>
								</li>
<!-- 								<li ref="li_services">
									<router-link to="services" class="nav-link">Services</router-link>
								</li> -->
								<li ref="li_technologies">
									<router-link to="technologies" class="nav-link">Technologies</router-link>
								</li>
								<li ref="li_a_propos">
									<router-link to="a-propos" class="nav-link">À propos</router-link>
								</li>
								<li>
									<a href="#" @click.prevent="scrollToBottom()">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
	</div>
</template>

<script>
	export default{
		watch: {
			$route (to, from){
		        Object.keys(this.$refs).forEach(el => {
		        	this.$refs[el].classList.remove('active');
				});

				this.checkActive(to.name);
				this.hideMobileMenu();
		    }
		},
		methods: {
			checkActive: function(name){
				let active = this.$refs['li_'+name];
				let active_mobile = this.$refs['li_mobile_'+name];

		        if(active){
		        	active.classList.add('active');
		        }
		        if(active_mobile){
		        	active_mobile.classList.add('active');
		        }
			},
			scrollToBottom: function(){
				let height = document.body.scrollHeight || document.documentElement.scrollHeight;
				window.scrollTo({
		            top: height,
		            left: 0,
		            behavior: 'smooth'
		        });
		        this.hideMobileMenu();
			},
			showMobileMenu: function(){
				let body = document.body;
				body.classList.add('offcanvas-menu');
				this.checkActive(this.$route.name);
			},
			hideMobileMenu: function(){
				let body = document.body;
				body.classList.remove('offcanvas-menu');
			}
		},
		mounted(){
			this.checkActive(this.$route.name);
		}
	}

</script>