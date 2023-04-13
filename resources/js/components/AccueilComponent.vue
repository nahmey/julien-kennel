<template>
<div>
<div class="ftco-blocks-cover-1">
	<div class="site-section-cover overlay module parallax parallax-1">
		<div class="container">
			<div class="row align-items-center justify-content-center text-center">
				<div class="col-md-7">
					<h1 class="mb-3">Développeur Web spécialisé dans la création d'applications et sites web.</h1>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p> -->
					<p><a href="#" class="btn btn-primary" @click.prevent="scrollToAnchor('bloc_decouvrir', $refs)">En savoir plus</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="site-section bg-white" ref="bloc_decouvrir">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5 mb-lg-0">
				<div class="img-years">
					<img src="images/computer_2.jpg" alt="Image" class="img-fluid">
					<div class="year">
						<!-- <span>3 <span>years in <br>excellent service</span></span> -->
						<span>
						<img src="images/photo.jfif" style="border-radius: 50%;" />
						</span>
					</div>
				</div>
			</div>
			<div class="col-lg-5 ml-auto pl-lg-5 text-center">
				<h3 class="text-center scissors">Qui suis-je ?</h3>
				<p class="mb-5 lead">"Passionné d'informatique, et plus particulièrement de développement Web, j'aime créer des outils sur mesure qui répondent aux problèmatiques de mes interlocuteurs"</p>
				<p>
					<router-link to="a-propos" class="btn btn-primary">À propos</router-link>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="site-section bg-light">
	<div class="container">
		<div class="row justify-content-center  mb-5">
			<div class="col-md-7 text-center">
				<h3 class="text-center scissors">Mes réalisations</h3>
				<p class="mb-4 lead">Quelques-une de mes réalisations</p>
<!-- 				<p class="text-center">
					<a href="#" class="btn btn-primary custom-prev">Prev</a>
					<a href="#" class="btn btn-primary custom-next">Next</a>
				</p> -->
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="d-flex flex-wrap">
					<div class="col-lg-4 col-md-6 col-12 mt-2" v-for="site in sites">
                        <div class="card h-100 card-hover-box">
                            <div class="img-actualite-card" :style="{ background: 'linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),center / cover url('+base_url+'/'+site.image+')' }">
                            </div>

                            <h3 class="title p-4">{{site.nom}}</h3>

<!--                             <div class="px-4">
                                <p v-if="article.texte.length > 150">
                                    <span class="start-at" v-html="article.texte.substring(0,150) + '...'"></span>
                                </p>
                                <p v-else>
                                    <span class="start-at" v-html="article.texte"></span>
                                </p>
                            </div> -->

                            <div class="p-4">
                              	<a :href="site.url" target="_blank" class="float-right">
                                    Découvrir
                                </a>
                            </div>
                        </div>
                    </div>


					<!-- <div class="item-1 h">
						<div class="img-actualite-card" v-if="article.image" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),center / cover url({{'images/site_cen.jpg'}});">
						</div>
						<div class="item-1-contents h-100">
							<h3>Site web du CEN Lorraine</h3>
							<p>Site internet du Conservatoire d'Espaces Naturels de Lorraine</p>
						</div>
					</div>
					<div class="item-1 h">
						<div class="img-actualite-card" v-if="article.image" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),center / cover url({{'images/site_pram.jpg'}});">
						</div>
						<div class="item-1-contents h-100">
							<h3>Application cartographique du PRAM Grand Est</h3>
							<p>Application cartographique du PRAM Grand Est</p>
						</div>
					</div>
					<div class="item-1 h">
						<div class="img-actualite-card" v-if="article.image" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),center / cover url({{'images/fjrenovation.png'}});">
						</div>
						<div class="item-1-contents h-100">
							<h3>Site web f-j-renovation</h3>
							<p>Site web - f-j-renovation</p>
						</div>
					</div> -->
<!-- 					<div class="item-1 h">
						<div class="img-actualite-card" v-if="article.image" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),center / cover url({{'images/marine.png'}});">
						</div>
						<div class="item-1-contents">
							<h3>Site web marine-osteopathe</h3>
							<p>Site web - marine-osteopathe</p>
						</div>
					</div>
					<div class="item-1 h">
						<div class="img-actualite-card" v-if="article.image" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),center / cover url({{'images/ajs.png'}});">
						</div>
						<div class="item-1-contents">
							<h3>Site web ajs-saverne</h3>
							<p>Site web - ajs-saverne</p>
						</div>
					</div> -->
				</div>
			</div>

			<div class="col-12 p-0 mt-5">
				<p class="text-center">
					<router-link to="realisations" class="btn btn-primary custom-prev">Voir toutes mes réalisations</router-link>
				</p>
			</div>
		</div>
	</div>
</div>


<!--     <div class="site-section">
<div class="container">
<div class="row justify-content-center mb-5">
<div class="col-md-7 text-center">
<h3 class="scissors text-center">More Hair Styles</h3>
<p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
</div>
</div>
<div class="row hair-style">
<div class="col-lg-4 col-md-4 col-sm-6 col-12">
<a href="#" class="place">
<img src="images/img_1.jpg" alt="Image placeholder">
<h2>Beard Shaving</h2>
<span>$50.00 only</span>
</a>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-12">
<a href="#" class="place">
<img src="images/img_2.jpg" alt="Image placeholder">
<h2>Crew Cut</h2>
<span>$50.00 only</span>
</a>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-12">
<a href="#" class="place">
<img src="images/img_3.jpg" alt="Image placeholder">
<h2>Beard Trim</h2>
<span>$50.00 only</span>
</a>
</div>

</div>
</div>
</div> -->
<!-- END section -->
<div class="site-section section-3 position-relative module parallax parallax-2" data-stellar-background-ratio="0.5">
<!-- 	<div style="background-image: url('images/computer_3.jpg'); position: fixed;
    width: 100%;
    height: 500px;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 111">
	</div> -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-7 text-center mb-5">
				<h2 class="text-white primary-color-icon text-center scissors">Mes Services</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4 anim-when-hover">
				<div class="service-1">
					<span class="service-1-icon">
						<div class="absolute-center">
					        <div class="valign">
					        	<i class="fas fa-laptop fa-2x absolute-center"></i>
					        </div>
					    </div>
					</span>
					<div class="service-1-contents">
						<h3>Sites Internet</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p> -->
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 anim-when-hover">
				<div class="service-1">
					<span class="service-1-icon">
						<div class="absolute-center">
					        <div class="valign">
					        	<i class="fas fa-desktop fa-2x absolute-center"></i>
					        </div>
					    </div>
					</span>
					<div class="service-1-contents">
						<h3>Applications Web logiciels métier</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p> -->
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 anim-when-hover">
				<div class="service-1">
					<span class="service-1-icon">
						<div class="absolute-center">
					        <div class="valign">
					        	<i class="fas fa-database fa-2x absolute-center"></i>
					        </div>
					    </div>
					</span>
					<div class="service-1-contents">
						<h3>Bases de Données</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="site-section bg-light">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-12 col-md-7 text-center">
				<h2 class="scissors text-center mb-0">Mes technologies favorites</h2>
				<!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p> -->
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 mt-4 mb-lg-0" v-for="technologie in technologies">
				<a :href="technologie.url" target="_blank" class="text-dark">
					<div class="testimonial-2 h-100 card-hover-box">
						<div class="d-flex v-card align-items-center">
							<img :src="technologie.img" :alt="technologie.nom" class="img-fluid mr-4">
							<span class="w-100">{{technologie.nom}}</span>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="col-12 p-0 mt-5">
			<p class="text-center">
				<router-link to="technologies" class="btn btn-primary custom-prev">Voir toutes les technologies</router-link>
			</p>
		</div>
	</div>
</div>


<!-- <div class="site-section bg-white">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-7 text-center mb-5">
				<h2 class="scissors text-center">Our Blog</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="post-entry-1 h-100">
					<a href="single.html">
						<img src="images/img_1.jpg" alt="Image"class="img-fluid">
					</a>

					<div class="post-entry-1-contents">
						<h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
						<span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="post-entry-1 h-100">
					<a href="single.html">
						<img src="images/img_2.jpg" alt="Image" class="img-fluid">
					</a>
					<div class="post-entry-1-contents">
						<h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
						<span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="post-entry-1 h-100">
					<a href="single.html">
						<img src="images/img_3.jpg" alt="Image" class="img-fluid">
					</a>
					<div class="post-entry-1-contents">
						<h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
						<span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->


<!-- <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg');">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-7 text-center mb-5">
				<h2 class="text-white scissors primary-color-icon text-center">Quality Haircut</h2>
				<p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
				<p><a href="#" class="btn btn-primary">Contact Us Now</a></p>
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
			sites: [],
			technologies: [],
			base_url: base_url,
		}
	},
	methods: {
		loadRealisations()
		{
			let self = this;
			axios.get(base_url + '/realisations')
	        .then(function (resp) {
	        	self.sites = resp.data.sites.slice(0, 3);
	        })
	        .catch(function (resp) {
	            return self.checkError(resp);
	        });
		},
		loadTechnologies()
		{
			let self = this;
			axios.get(base_url + '/technologies_favorites')
	        .then(function (resp) {
	        	self.technologies = resp.data.technologies;
	        })
	        .catch(function (resp) {
	            return self.checkError(resp);
	        });
		}
	},
	mounted(){
		this.loadRealisations();
		this.loadTechnologies();
	}
}


</script>

<style>
.img-actualite-card{
	height: 250px;
    background-repeat: no-repeat!important;
}

.absolute-center {
	position: absolute;
    margin-left: a;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.valign {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    /* vendor prefixes omitted due to brevity */
}
.card-hover-box{
	box-shadow: 0 1px 2px rgba(0,0,0,0.15);
	transition: box-shadow 0.3s ease-in-out;
}

.card-hover-box:hover{
	box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.btn-primary{
	box-shadow: 0 1px 2px rgba(0,0,0,0.15);
	transition: box-shadow 0.3s ease-in-out;
}

.btn-primary:hover{
	box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}



</style>
