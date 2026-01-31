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
						<div class="mb-2">
								<input id="name" type="text" v-model="answer"
											 class="w-full p-4 text-base font-medium bg-white border rounded-lg border-dark-1/20 text-dark-1 font-mark-pro placeholder:text-dark-1/40 form-input focus:ring-0"
											 :placeholder="__('Enter your name')">
						</div>
						<span @click="selectAnswer" class="block w-full p-3 text-base font-bold text-center text-white rounded-lg bg-teal-1 font-mark-pro cursor-pointer"
									:class="answer.length === 0 ? 'bg-teal-1/30' : 'bg-teal-1'">
								{{ __("Continue") }}
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
						answer: '',
				}
		},
		methods: {
				selectAnswer() {
						if(this.answer.length === 0) {
								return;
						}

						this.$emit('answer-selected', {
								question: this.question,
								answer: [this.answer]
						})
				},
		}
}
</script>

<style scoped>

</style>
