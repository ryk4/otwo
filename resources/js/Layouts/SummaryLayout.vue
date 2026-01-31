<template>
		<header class="sticky inset-x-0 top-0 z-50 bg-white shadow-1">
				<div class="container px-6 mx-auto lg:max-w-1440 lg:px-14">
						<nav class="flex items-center justify-between py-4">
								<a href="#" class="font-itc font-bold text-[28px] text-teal-1 inline-block">
										OTWO
								</a>
								<a href="#prices-section" class="inline-block px-6 py-3 text-base font-extrabold text-white rounded-lg font-mark-pro bg-red-1">
										<span>{{ __("GET YOUR PLAN") }}</span>
								</a>
						</nav>
				</div>
				<div class="flex items-center justify-center w-full px-3 py-3 space-x-1 space-y-1 bg-red-1">
						<svg class="w-6 md:w-9 shrink-0" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_70_2009)">
										<path opacity="0.15" fill-rule="evenodd" clip-rule="evenodd"
													d="M28.8537 19.6635L19.5285 10.6059L11.0442 10.7294L11.1677 19.2137L20.4929 28.2714L28.8537 19.6635ZM15.7376 17.3793C16.3319 17.9565 17.2815 17.9426 17.8587 17.3484C18.4359 16.7541 18.4221 15.8045 17.8279 15.2273C17.2336 14.6501 16.284 14.6639 15.7068 15.2582C15.1296 15.8524 15.1434 16.8021 15.7376 17.3793Z"
													fill="white"/>
										<path
												d="M19.7751 27.5746L28.136 18.9667L18.8108 9.90908L10.3264 10.0326L10.4499 18.517L19.7751 27.5746Z"
												stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path
												d="M17.4996 17C16.73 17.7923 15.4638 17.8107 14.6715 17.0411C13.8792 16.2715 13.8607 15.0054 14.6303 14.213C15.3999 13.4207 16.6661 13.4023 17.4585 14.1719C18.2508 14.9415 18.2692 16.2077 17.4996 17Z"
												stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
										<clipPath id="clip0_70_2009">
												<rect width="24" height="24" fill="white"
															transform="translate(17.2529 0.03125) rotate(44.1661)"/>
										</clipPath>
								</defs>
						</svg>
						<p class="text-base text-white md:text-xl font-mark-pro">{{ discountPercentageValue }}% {{ __("discount only valid for") }}: <span class="font-bold">{{ timer }}</span></p>
				</div>
		</header>

		<slot/>

		<footer class="p-6 bg-teal-1/20">
				<div class="max-w-[608px] mx-auto w-full text-center">
						<a href="#" class="font-itc font-bold text-lg/[56px] text-teal-1 inline-block mb-2">OTWO</a>
						<p class="mb-6 text-base font-mark-pro text-dark-1/80">
								{{ __("Disclaimer: results may vary from person to person. Our service is not intended to diagnose, treat, cure or prevent any disease and does not constitute medical advice.") }}</p>
						<p class="mb-6 text-base font-mark-pro text-dark-1/80">
								{{ __("If you need assistance, please contact us at:") }} <a href="mailto:support@otwo.life">support@otwo.life</a>
						</p>
						<p class="text-base font-mark-pro text-dark-1/80">2025 © {{ __("All Rights Reserved") }} OTWO</p>
				</div>
		</footer>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';
import PaymentModal from "@/Pages/Checkout/PaymentModal.vue";
</script>
<script>

export default {
		data() {
				return {
						discountCounter: 60 * 15,
						discountPercentageValue: 30,
				}
		},
		props: {
				display_counter: false,
				quiz: Object
		},
		methods: {
				startTimer() {
						setInterval(() => {
								this.discountCounter--;
						}, 1000);
				}
		},
		mounted() {
				// if (this.quiz.language === 'en') {
				// 		this.discountPercentageValue = 65;
				// }

				this.startTimer();
		},
		computed: {
				timer: {
						get() {
								let minutes = (Math.floor(this.discountCounter / 60)).toString().padStart(2, '0');

								let seconds = (this.discountCounter - minutes * 60).toString().padStart(2, '0');

								if (seconds === 0) {
										seconds = '00';
								}

								return `00:${minutes}:${seconds}`;
						},

				}
		}
}
</script>
