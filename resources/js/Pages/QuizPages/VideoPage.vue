<template>
		<header class="sticky inset-x-0 top-0 z-50 bg-white shadow-1">
				<div class="container relative px-6 mx-auto lg:max-w-1440 lg:px-14">
						<nav class="py-1.5 flex justify-center">
								<a :href="route('home')" class="font-itc font-bold text-[28px] text-teal-1 mx-auto">
										OTWO
								</a>
						</nav>
				</div>
		</header>

		<section class="bg-light-1 py-8 md:py-12 lg:py-[72px] min-h-screen">
				<div class="container max-w-3xl px-4 mx-auto ">
						<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[30px] font-itc text-dark-1 mb-4 font-bold text-center">
								<div class="sm:leading-12">{{ __("We Know How Hard It Is To Take This Step.") }}</div>
								<div class="text-red-1 sm:leading-6">{{ __("But We’ve Got You Covered!") }}</div>
						</h1>
						<div class="mt-3 text-sm font-medium sm:text-center text-center text-dark-1/80 font-mark-pro">
								<span>{{ __("Listen to John's success story on how he managed to quit smoking in 30 days, despite having smoked for 20 years. ") }} </span>
								<span class="max-sm:hidden"><strong>{{ __("Trust us, You can do it too!") }}</strong></span>
								<div class="sm:hidden mt-5"><strong>{{ __("Trust us, You can do it too!") }}</strong></div>
						</div>
						<div class="max-w-[544px] mx-auto">
								<div class="">
										<div class="max-w-[300px] mx-auto relative flex items-center justify-center mb-4 text-dark-1/10">
												<div class="text-red-1">
														<div class="hidden sm:block">
																<iframe src="https://player.vimeo.com/video/908681391?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" width="700" height="420" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
																				title="Successful Quitter John - How he managed to get rid of this unhealthy habbit"></iframe>
														</div>
														<div class="block sm:hidden mt-5">
																<iframe src="https://player.vimeo.com/video/908681391?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" width="340" height="200" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
																				title="Successful Quitter John - How he managed to get rid of this unhealthy habbit"></iframe>
														</div>
												</div>
										</div>

										<div v-if="isLoadingFinished">
												<span @click="nextStep" class="block w-full p-3 text-base font-bold text-center text-white rounded-lg font-mark-pro cursor-pointer bg-red-1">
														{{ __("See my results") }}
												</span>
										</div>
										<div v-else>
												<div class="w-full h-1.5 rounded-full bg-dark-1/[0.04] mb-2">
														<div class="h-full rounded-full bg-1" :style="{ width: percent + '%' }"></div>
												</div>
												<p class="text-sm text-center font-mark-pro text-dark-1/80">{{ __("Your quitting plan is being finalized") }}</p>
										</div>
								</div>
						</div>
				</div>
		</section>
</template>

<script>
import {useForm} from "@inertiajs/vue3";

export default {
		data() {
				return {
						circumference: (2 * Math.PI * 120).toFixed(2),
						percent: 0,
						animate: false,
						speed: 300, //miliseconds
						isLoadingFinished: false,
						startingPercentage: 0,
						endingPercentage: 100,
						windowWidth: window.innerWidth
				};
		},
		methods: {
				increase() {
						console.log('start')

						for (let index = 0; index < this.endingPercentage - this.startingPercentage; index++) {
								setTimeout(() => {
										this.percent = index + 1 + this.startingPercentage;
										if (this.endingPercentage === index + 1) this.animate = true;

										if (this.percent === this.endingPercentage) {
												this.isLoadingFinished = true;
										}
								}, index * this.speed);
						}
				},
				nextStep() {
						// window.location.href = route('summary.index');

						const form = useForm({})

						form.post('/summary-get')
				},
				onResize() {
						this.windowWidth = window.innerWidth
				}
		},
		beforeDestroy() {
				window.removeEventListener('resize', this.onResize);
		},
		mounted() {
				this.increase();

				this.$nextTick(() => {
						window.addEventListener('resize', this.onResize);
				})
		},
};
</script>

<style scoped>
.bg-1 {
		background-image: linear-gradient(90deg, #066D95 0%, #B8CDD5 100%);
}
</style>
