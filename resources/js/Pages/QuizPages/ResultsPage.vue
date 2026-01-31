<script setup>
import PrivacyPolicyPageModal from "@/Pages/InformationPages/PrivacyPolicyPageModal.vue";
</script>

<template>
		<div class="container max-w-3xl px-4 mx-auto ">
				<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-itc text-dark-1 mb-4 font-bold text-center">
						{{ __("Your Personal Summary Is Complete!") }}
				</h1>
				<p class="mb-6 text-xl font-medium text-center text-dark-1/80 font-mark-pro lg:mb-8">
						{{ __("Enter your email to see what results you can achieve with powerful quit strategy written just for you.") }}
				</p>
				<div class="max-w-[544px] mx-auto">
						<div class="mb-2">
								<input id="email" type="text" v-model="email"
											 class="w-full p-4 text-base font-medium bg-white border rounded-lg border-dark-1/20 text-dark-1 font-mark-pro placeholder:text-dark-1/40 form-input focus:ring-0"
											 :placeholder="__('Email')"
											 :class="{'border-red-500' : errors.email}">
								<div v-if="errors.email" class="text-sm font-medium text-red-500 font-mark-pro mt-2">
										{{ errors.email }}
								</div>
						</div>

						<div class="mb-3 md:mb-3">
								<div class="flex items-start gap-3">
										<input id="privacy-policy" type="checkbox" v-model="checkbox"
													 class="mt-0.5 border-2 rounded-sm form-checkbox checked:text-teal-1 border-teal-1 focus:text-teal-1 focus:ring-0 cursor-pointer"
													 :class="{'border-red-500' : errors.checkbox}">

										<label class="text-sm font-mark-pro text-dark-1/80">
												{{ __("I agree to the") }}
												<span class="underline cursor-pointer">
														<PrivacyPolicyPageModal>
															<template v-slot:text>{{ __('Privacy policy') }}</template>
														</PrivacyPolicyPageModal>
												</span>
												{{ __("and receiving future information from OTWO") }}
										</label>
								</div>
								<div v-if="errors.checkbox" class="text-sm font-medium text-red-500 font-mark-pro mt-2">
										{{ errors.checkbox }}
								</div>
						</div>

						<span @click="completeQuiz" class="block w-full p-3 text-base font-bold text-center text-white rounded-lg bg-teal-1 font-mark-pro cursor-pointer">
								{{ __("See my results") }}
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
						email: null,
						checkbox: false,
						errors: {
								email: null,
								checkbox: null
						}
				};
		},
		methods: {
				isInputFieldsValid() {
						this.errors.email = null;
						this.errors.checkbox = null;

						const validEmailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

						if (!this.email) {
								this.errors.email = 'Email is required';
						} else if (!this.email.match(validEmailRegex)) {
								this.errors.email = 'Invalid email format';
						}

						if (!this.checkbox) {
								this.errors.checkbox = 'You must agree to the privacy policy';
						}

						return !this.errors.email && !this.errors.checkbox;
				},
				completeQuiz() {
						if (!this.isInputFieldsValid()) {
								return;
						}

						this.$emit('complete-quiz', {
								email: this.email
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
