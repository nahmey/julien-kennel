<template>
	<div>
		<div class="ftco-blocks-cover-1">
			<div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/computer_4.jpg')">
				<div class="container">
					<div class="row align-items-center justify-content-center text-center">
						<div class="col-md-7">
							<h1 class="mb-3">À Propos</h1>
							<!-- <p>Présentation, expériences et contact</p> -->
							<p>Quelques mots sur mon expérience et mon parcours</p>
							<!-- <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-section bg-light">
			<div class="container">
				<h4 class="mb-4 scissors">Qui suis-je</h4>
				<div class="row">
					<div class="col-12 mb-4">
						<div class="card post-entry-1 h-100">
							<div class="post-entry-1-contents">
								<p>Auto-entrepreneur et salarié en tant que concepteur développeur informatique, spécialisé en developpement web, j'ai la chance d'allier ma passion avec mon travail.</p>
								<p>Depuis 2018, je créé des sites web et logiciels métiers qui permettent un gain de temps et un gain de productivité aux utilisateurs. Les applications sont variés : de l'intranet à l'application de gestion de projet et de suivi du temps de travail, en passant par des applications cartographiques ou encore des logiciels de gestion des ressources humaines.</p>
								<p>Pour créer ces applications, j'utilise au quotidien le PHP avec le framework Laravel, le javascript avec le framework VueJs, le SQL avec PostgresSQL ou MySql ainsi que le HTML et le CSS.</p>
								<p>N'hésitez pas à faire appel à moi pour trouver une solution à vos problèmes !</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="site-section section-3 position-relative module parallax parallax-2" style="height: auto;">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-7 text-center mb-5">
						<h2 class="text-white primary-color-icon text-center scissors">Expériences</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 mb-5" v-for="experience in experiences">
						<div class="card post-entry-1 h-100 anim-when-hover">
							<div class="post-entry-1-contents bg-light">
								<div class="col-12 p-0 d-flex flex-wrap">
									<h3 class="col-12 col-md-9 mb-0 p-0" style="color:#dc3545">{{experience.poste}}</h3>
									<p class="col-12 col-md-3 p-0">{{experience.date}}</p>
									
								</div>
								<p class="subheading">{{experience.entreprise}}</p>
								<p><span v-html="experience.description"></span></p>

								<div class="row">
									<ul v-for="xp  in Math.ceil(objectSize(experience.competences) / 3)">
									    <li class="one-third column" v-for="competence in experience.competences.slice(3 * (xp  - 1), 3 * xp)">
									        {{competence}}
									    </li>
									</ul>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<!-- 		<div class="site-section module parallax parallax-2">
			<div class="container">
				<h4 class="mb-4 scissors">Expériences</h4>
				<div class="row">
					<div class="col-12 mb-4">
						<div class="card post-entry-1 h-100">
							<div class="post-entry-1-contents bg-light" v-for="experience in experiences">
								<div class="col-12 p-0">
									<p class="float-right">{{experience.date}}</p>
									<h3 class="mb-0">{{experience.poste}}</h3>
								</div>
								<p class="subheading">{{experience.entreprise}}</p>
								<p>{{experience.description}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</template>

<script>
	export default{
		data(){
			return {
				base_url: base_url,
				experiences: [],
			}
		},
		mounted(){
			let self = this;

			axios.get(base_url + '/a_propos')
	        .then(function (resp) {
	        	self.experiences = resp.data.experiences;
	        })
	        .catch(function (resp) {
	            return self.checkError(resp);
	        });
		}
	}
</script>

<style>
	.subheading{
	    text-transform: uppercase;
	    font-weight: 500;
	    font-size: 1.2rem;
	    color: #868e96;
	}
</style>