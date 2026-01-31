<script setup>
</script>

<template>
		<div class="container max-w-3xl px-4 mx-auto ">
				<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-itc text-dark-1 mb-4 font-bold text-center">
						{{ question.question }}</h1>
				<p v-if="question.description" class="mb-6 text-xl font-medium text-center text-dark-1/80 font-mark-pro lg:mb-8">
						{{ question.description }}
				</p>
				<div class="max-w-[544px] mx-auto">
						<div class="space-y-4">
								<label :for="key" v-for="(answer, key) in question.answers"
											 class="cursor-pointer flex items-center justify-between w-full p-4 text-base font-medium bg-white rounded-lg text-dark-1 font-mark-pro">
										<span>{{ answer }}</span>
										<input :id="key" :value="key" v-model="selectedAnswers" type="checkbox" class="border-2 border-teal-1 focus:ring-0"/>
								</label>
								<span @click="submitOtherOption" class="cursor-pointer flex items-center justify-between w-full p-4 text-base font-medium bg-white rounded-lg text-dark-1 font-mark-pro">
										<span>{{ __("Other") }}</span>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20 12L4 12M20 12L14 18M20 12L14 6" stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
								</span>
								<div v-if="question.other_single_select_options">
										<div v-for="(other_option,key) in question.other_single_select_options" :key="key" @click="submitOtherSingleSelect(key)"
												 class="cursor-pointer flex items-center justify-between w-full p-4 text-base font-medium bg-white rounded-lg text-dark-1 font-mark-pro">
												<span>{{ other_option }}</span>
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20 12L4 12M20 12L14 18M20 12L14 6" stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
										</div>
								</div>
								<span @click="submitAnswer" class="block w-full p-3 text-base font-bold text-center text-white rounded-lg font-mark-pro cursor-pointer"
											:class="selectedAnswers.length === 0 ? 'bg-teal-1/30' : 'bg-teal-1'">
										{{ __("Continue") }}
								</span>
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
						selectedAnswers: [],
						other_single_select_option: true
				}
		},
		methods: {
				submitAnswer() {
						if (this.selectedAnswers.length === 0) {
								return;
						}

						this.$emit('answer-selected', {
								question: this.question,
								answer: this.selectedAnswers
						})

						this.selectedAnswers = []; //reset after submission
				},
				submitOtherOption() {
						//submit options 'other', which is always last selection

						this.selectedAnswers = ['other'];
						this.submitAnswer()

						this.selectedAnswers = []; //reset after submission
				},
				submitOtherSingleSelect(selection) {
						this.other_single_select_option = true;
						this.selectedAnswers = [parseInt(selection)];
						this.submitAnswer()

						this.selectedAnswers = []; //reset after submission
						this.other_single_select_option = false;
				}
		},
}
</script>

<style scoped>

</style>
