<template>
	<div>
		<div class="ftco-blocks-cover-1">
			<div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/computer_4.jpg')">
				<div class="container">
					<div class="row align-items-center justify-content-center text-center">
						<div class="col-md-7">
							<h1 class="mb-3">Mes réalisations</h1>
							<p>Les sites et autres applications réalisées</p>
							<!-- <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="site-section bg-light">
			<div class="container">
				<h4 class="mb-4 scissors">Sites Web ouverts au public</h4>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12 mt-4" v-for="realisation in sites">
                        <div class="card h-100 card-hover-box">
                            <div class="img-actualite-card" :style="{ background: 'linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),center / cover url('+base_url+'/'+realisation.image+')' }">
                            </div>

                            <h3 class="title p-4">{{realisation.nom}}</h3>

                            <div class="p-4">
                              	<a :href="realisation.url" target="_blank" class="float-right" style="position: absolute;bottom: 25px;right: 25px;">
                                    Découvrir
                                </a>
                            </div>
                        </div>
                    </div>
					<!-- <div class="col-lg-4 col-md-6 mb-4" v-for="realisation in sites">
						<div class="card post-entry-1 h-100">
							<a href="single.html">
								<img :src="realisation.image" alt="Image" class="img-fluid">
							</a>
							<div class="post-entry-1-contents">
								<h2><a href="single.html">{{realisation.nom}}</a></h2>
								<p>{{realisation.description}}</p>
							</div>
						</div>
					</div> -->
				</div>
			</div>

			<div class="container mt-4">
				<h4 class="mb-4 scissors">Logiciels métier</h4>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12 mt-4" v-for="realisation in applications">
                        <div class="card h-100 card-hover-box">
                            <div class="img-actualite-card" :style="{ background: 'linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),center / cover url('+base_url+'/'+realisation.image+')' }">
                            </div>

                            <h3 class="title p-4">{{realisation.nom}}</h3>

                            <div class="p-4">
                              	{{realisation.description}}
                            </div>
                        </div>
                    </div>
<!-- 					<div class="col-lg-4 col-md-6 mb-4" v-for="realisation in applications">
						<div class="card post-entry-1 h-100">
							<a href="single.html">
								<img :src="realisation.image" alt="Image" class="img-fluid">
							</a>
							<div class="post-entry-1-contents">
								<h2><a href="single.html">{{realisation.nom}}</a></h2>
								<p>{{realisation.description}}</p>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return {
				base_url: base_url,
				sites: [],
				applications: [],
			}
		},
		mounted(){
			let self = this;

			axios.get(base_url + '/realisations')
	        .then(function (resp) {
	        	self.sites = resp.data.sites;
	        	self.applications = resp.data.applications;
	        })
	        .catch(function (resp) {
	            return self.checkError(resp);
	        });
		}
	}
</script>

<style>
.button-decouvrir{
	position: absolute;
	bottom: 0;
	right: 0;
}

</style>