<template>
	<div>
		<navigation-layout></navigation-layout>

		<fade-transition name="component-fade" mode="out-in">
	        <router-view name="default"></router-view>
	    </fade-transition>

	    <a href="#" class="scroll-top" @click.prevent="scrollToTop()">
            <i class="fa-solid fa-chevron-up"></i>
        </a>

	    <footer-layout></footer-layout>
	</div>
</template>

<script>

	// show or hide the back-top-top button
		// let backToTo = document.querySelector(".scroll-top");
		// console.log(backToTo)
		// if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
		//     backToTo.style.display = "flex";
		// } else {
		//     backToTo.style.display = "none";
		// }

export default{
	methods:{
		scrollToTop(){
			window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
		}
	},
	mounted(){

	}
}

</script>

<style>
.scroll-top {
    width: 48px;
    height: 48px;
    line-height: 48px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 22px;
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 9;
    cursor: pointer;
    -webkit-transition: all .3s ease-out 0s;
    transition: all .3s ease-out 0s;
    border-radius: 50%;
    background-color: #dc3545!important;
    color: white!important;
    z-index: 9999;
}

.scroll-top:hover {
    -webkit-transform: scale(1.08);
    transform: scale(1.08);
    background-color: #0069ff
}

.scroll-top:hover{
    background-color: #c92636!important;
    color: white!important;
}

</style>