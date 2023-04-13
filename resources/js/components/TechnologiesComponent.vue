<template>
	<div>
		<div class="ftco-blocks-cover-1">
			<div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/computer_4.jpg')">
				<div class="container">
					<div class="row align-items-center justify-content-center text-center">
						<div class="col-md-7">
							<h1 class="mb-3">Technologies</h1>
							<p>Les technologies que j'utilise au quotidien</p>
							<!-- <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="site-section bg-light">
			<div class="container">
				<template v-for="(technologie, index) in technologies">
					<div :class="index === 0 ? 'col-12 lead mb-2 p-0' : 'col-12 lead mb-2 p-0 mt-5'">
						{{technologie.type}}
					</div>
					<div class="row">
						<div class="col-lg-4 mt-4 mb-lg-0" v-for="data in technologie.data">
							<a :href="data.url" target="_blank" class="text-dark">
								<div class="testimonial-2 h-100 card-hover-box">
									<div class="d-flex v-card align-items-center">
										<img :src="data.img" :alt="data.nom" class="img-fluid mr-4">
										<span class="w-100">{{data.nom}}</span>
									</div>
								</div>
							</a>
						</div>
					</div>
				</template>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return {
				base_url: base_url,
				technologies: [],
			}
		},
		mounted(){
			let self = this;

			axios.get(base_url + '/technologies')
	        .then(function (resp) {
	        	self.technologies = resp.data.technologies;
	        })
	        .catch(function (resp) {
	            return self.checkError(resp);
	        });
		}
	}
</script>