<template>
		<div class="container max-w-3xl px-4 mx-auto ">
				<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-itc text-dark-1 mb-6 lg:mb-8 font-bold text-center">
						{{ question.title }}
				</h1>
				<div class="max-w-[544px] mx-auto">
						<div class="aspect-[16/10.4] mb-6 lg:mb-8">
								<img :src="question.image" alt="" class="w-full h-full rounded-[30px] object-cover">
						</div>

						<div class="p-4 mb-6 text-xl font-medium text-center rounded-lg bg-teal-2/10 text-dark-1 font-mark-pro">
								{{ question.description }}
						</div>

						<span @click="nextStep" class="block w-full p-3 text-base font-bold text-center text-white rounded-lg bg-teal-1 font-mark-pro cursor-pointer">
								{{ question.button_text }}
						</span>
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
				};
		},
		methods: {
				nextStep() {
						this.$emit('answer-selected', {
								question: this.question,
						})
				},
		},
		mounted() {

		},
};
</script>

<style scoped>
.bg-1 {
		background-image: linear-gradient(90deg, #066D95 0%, #B8CDD5 100%);
}
</style>
