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
								<span @click="selectAnswer(question, key)" v-for="(answer, key) in question.answers" :key="key"
											class="cursor-pointer flex items-center justify-between w-full p-4 text-base font-medium bg-white rounded-lg text-dark-1 font-mark-pro">
									<span>{{ answer }}</span>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M20 12L4 12M20 12L14 18M20 12L14 6" stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
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
						// quizStore: useQuizStore(),
				}
		},
		methods: {
				selectAnswer(question, answer) {
						this.$emit('answer-selected', {
								question: question,
								answer: [answer]
						})
				},
		}
}
</script>

<style scoped>

</style>
