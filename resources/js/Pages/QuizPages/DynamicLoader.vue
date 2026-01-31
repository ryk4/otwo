<template>
		<div class="container max-w-3xl px-4 mx-auto ">
				<h1 v-if="isLoadingFinished" class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-itc text-teal-1 mb-4 font-bold text-center">
						{{ question.title_during_loading }}</h1>
				<h1 v-else class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-itc text-dark-1 mb-4 font-bold text-center">
						{{ question.title_during_loading }}</h1>
				<div class="max-w-[544px] mx-auto">
						<div class="">
								<div class="max-w-[300px] mx-auto relative flex items-center justify-center mb-4 text-dark-1/10">
										<svg class="w-full h-full transform -rotate-90" viewBox="0 0 288 288">
												<circle cx="145" cy="145" r="120" stroke="currentColor" stroke-width="15" fill="transparent" class="text-gray-25"/>
												<circle
														cx="145"
														cy="145"
														r="120"
														stroke="#009F91"
														stroke-width="15"
														fill="transparent"
														:stroke-dasharray="circumference"
														stroke-linecap="round"
														:stroke-dashoffset="circumference - percent / 100 * circumference"
														class="text-gray-500 "
												/>
										</svg>

										<div class="absolute inset-0 flex items-center justify-center font-bold transition-all duration-300 transform text-7xl text-teal-1">
												<span>{{ percent }}</span>%
										</div>
								</div>

								<div v-if="isLoadingFinished">
										<p class="mb-2 text-md font-medium sm:text-center text-left text-dark-1/80 font-mark-pro lg:mb-3">
												{{ question.description_finished_loading }}
										</p>
										<span @click="nextStep" class="block w-full p-3 text-base font-bold text-center text-white rounded-lg font-mark-pro cursor-pointer bg-teal-1">
												{{ __("Continue") }}
										</span>
										<p class="mt-3 text-sm font-medium sm:text-center text-left text-dark-1/80 font-mark-pro lg:mb-3">
												{{ question.text_after_load }}
										</p>
								</div>
								<div v-else>
										<div class="w-full h-1.5 rounded-full bg-dark-1/[0.04] mb-2">
												<div class="h-full rounded-full bg-1" :style="{ width: percent + '%' }"></div>
										</div>
										<p class="text-sm text-center font-mark-pro text-dark-1/80">{{ __("Generating") }}...</p>
								</div>
						</div>

						<div v-if="question.show_testimonial" class="w-full p-4 max-w-sm mx-auto mt-4 bg-white shadow-2 rounded-2xl">
								<div class="flex items-center gap-2 mb-5">
										<img :src="question.testimonial_buyer_photo" alt="" class="object-cover rounded-full w-14 h-14">
										<div>
												<div class="flex items-center gap-0.5 mb-1">
														<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
																 xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.15"
																			d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																			fill="#F8D84D"/>
																<path
																		d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																		stroke="#F8D84D" stroke-width="1.5" stroke-linecap="round"
																		stroke-linejoin="round"/>
														</svg>

														<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
																 xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.15"
																			d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																			fill="#F8D84D"/>
																<path
																		d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																		stroke="#F8D84D" stroke-width="1.5" stroke-linecap="round"
																		stroke-linejoin="round"/>
														</svg>

														<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
																 xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.15"
																			d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																			fill="#F8D84D"/>
																<path
																		d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																		stroke="#F8D84D" stroke-width="1.5" stroke-linecap="round"
																		stroke-linejoin="round"/>
														</svg>

														<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
																 xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.15"
																			d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																			fill="#F8D84D"/>
																<path
																		d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																		stroke="#F8D84D" stroke-width="1.5" stroke-linecap="round"
																		stroke-linejoin="round"/>
														</svg>

														<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
																 xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.15"
																			d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																			fill="#F8D84D"/>
																<path
																		d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																		stroke="#F8D84D" stroke-width="1.5" stroke-linecap="round"
																		stroke-linejoin="round"/>
														</svg>

												</div>

												<div class="flex items-center space-x-2">
														<p class="text-sm font-bold text-dark-1 font-mark-pro">{{ question.testimonial_buyer_full_name }}</p>

														<div class="flex items-center space-x-2">
																<img src="/assets/images/verify-icon.png" alt="" class="w-4 h-4">
																<span class="text-sm text-teal-1 font-mark-pro">{{ __("Verified customer") }}</span>
														</div>
												</div>
										</div>
								</div>

								<p class="text-base font-mark-pro text-dark-1/80">
										{{ question.testimonial_description }}
								</p>
						</div>
				</div>
		</div>
</template>

<script>
export default {
		props: {
				question: Object,
		},
		data() {
				return {
						circumference: (2 * Math.PI * 120).toFixed(2),
						percent: 0,
						animate: false,
						speed: 65, //milliseconds
						isLoadingFinished: false,
				};
		},
		methods: {
				increase() {
						for (let index = 0; index < this.question.ending_percentage - this.question.starting_percentage; index++) {

								const speed = this.question.speed ?? this.speed;

								setTimeout(() => {
										this.percent = index + 1 + this.question.starting_percentage;
										if (this.question.ending_percentage === index + 1) this.animate = true;

										if (this.percent === this.question.ending_percentage) {
												if(this.question.next_step_when_loading_finished) {
														this.nextStep();
												}

												this.isLoadingFinished = true;
										}
								}, index * speed);
						}
				},
				nextStep() {
						this.$emit('answer-selected', {
								question: this.question,
						})
				},
		},
		mounted() {
				this.increase();
		},
};
</script>

<style scoped>
.bg-1 {
		background-image: linear-gradient(90deg, #066D95 0%, #B8CDD5 100%);
}
</style>
