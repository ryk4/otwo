<template>
		<!-- Header Section Start -->
		<header class="sticky inset-x-0 top-0 z-50 bg-white shadow-1">
				<div class="container relative px-6 mx-auto lg:max-w-1440 lg:px-14">
						<nav class="flex items-center justify-center py-4 ">
								<!-- logo -->
								<a href="#" class="font-itc font-bold text-[28px] text-teal-1 inline-block ">
										OTWO
								</a>
						</nav>
				</div>
		</header>
		<!-- Header Section End -->

		<!-- Content Section Start -->
		<section class="">
				<div class="container mx-auto md:max-w-3xl px-4 md:px-6 py-8 md:py-12 lg:pt-[54px] lg:pb-[18px]">
						<div class="flex items-center gap-4 mb-6 md:gap-6 lg:mb-4">
								<img src="/assets/images/check-icon.png" alt="" class="w-[100px]">
								<div class="">
										<h2 class="text-2xl sm:text-[32px]/[44px] font-medium text-teal-1 font-itc mb-2 lg:mb-4">
												{{ __("Thank you!") }}
										</h2>
										<h2 class="text-2xl sm:text-[32px]/[44px] font-extrabold text-dark-1 font-itc mb-2 lg:mb-4">
												{{ __("Your order was successful") }}
										</h2>
								</div>
						</div>

						<div class="p-4 mb-8 border md:p-6 border-dark-1/20 rounded-2xl">
								<h5 class="mb-4 text-xl font-bold font-mark-pro text-dark-1">{{ __("Main product") }}</h5>
								<div class="flex items-center justify-between mb-2">
										<p class="text-base font-medium font-mark-pro text-dark-1">{{ __(product.name) }}</p>
										<p class="text-base font-bold font-mark-pro text-dark-1">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_including_vat }}</p>
								</div>
								<!--								<div v-if="additionalProduct" class="flex items-center justify-between mb-2">-->
								<!--										<p class="text-base font-medium font-mark-pro text-red-1">{{ __(additionalProduct.name) }}</p>-->
								<!--										<p class="text-base font-bold font-mark-pro text-dark-1">${{ additionalProduct.price_with_discount_readable }}</p>-->
								<!--								</div>-->
								<div class="flex items-center justify-between mb-4">
										<p class="text-base font-medium font-mark-pro text-dark-1">{{ __("Discount") }}</p>
										<p class="text-base font-bold font-mark-pro text-red-1">-{{ localeSetting?.currency_symbol ?? '$' }}{{ product.discount_amount }}</p>
								</div>
								<div class="w-full h-px mb-4 bg-dark-1/20"></div>
								<div class="flex items-center justify-between">
										<p class="text-xl font-bold font-mark-pro text-dark-1">{{ __("Total") }}</p>
										<p class="text-xl font-bold font-mark-pro text-dark-1">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_with_discount_readable }}</p>
								</div>
						</div>

						<div v-if="additionalProduct" class="p-4 mb-4 border md:p-6 border-dark-1/20 rounded-2xl">
								<h5 class="mb-4 text-xl font-bold font-mark-pro text-dark-1">{{ __("Additional products") }}</h5>
								<div class="flex items-center justify-between mb-2">
										<p class="text-base font-medium font-mark-pro text-red-1 uppercase">{{ __(additionalProduct.name) }}</p>
										<p class="text-base font-bold font-mark-pro text-dark-1">${{ additionalProduct.price_with_discount_readable }}</p>
								</div>
						</div>

						<a :href="route('user.dashboard', quizEntry)" class="inline-block px-6 py-3 mb-4 w-full text-center font-extrabold text-white rounded-lg font-mark-pro bg-red-1 uppercase">
								<span>{{ __("Download my plan") }}</span>
						</a>

						<div class="p-4 border md:p-6 border-dark-1/20 rounded-2xl">
								<h4 class="mb-4 text-xl font-medium md:text-2xl text-dark-1 font-itc">{{ __("Thank you for joining us!") }} 🎉</h4>
								<p class="text-base font-mark-pro text-dark-1 mb-6">
										{{ __("Your personalized Quit Smoking plan is ready for download. Click the button below to access it instantly.") }}
								</p>
								<p class="text-base font-mark-pro text-dark-1 mt-2 mb-6">
										{{ __("We’ve also sent a copy of your plan to your email inbox for your convenience. If you don’t see it, please check your spam or promotions folder. If you have any issues, feel free to reach out to us at") }}
										<strong>support@otwo.life</strong> - {{ __("we're here to help!") }}
								</p>
								<p class="text-base font-mark-pro text-dark-1 mt-2 mb-2">
										{{ __("Wishing you success on your journey to a smoke-free life!") }}
								</p>
						</div>

						<a :href="route('user.dashboard',quizEntry)" class="inline-block px-6 py-3 my-5 w-full text-center font-extrabold text-white rounded-lg font-mark-pro bg-red-1 uppercase">
								<span>{{ __("Download my plan") }}</span>
						</a>
				</div>
		</section>
		<!-- Content Section End -->

		<!-- Footer Section Start -->
		<footer class="p-6 bg-teal-1/20 mt-4 md:mt-8 lg:mt-[72px]">
				<div class="max-w-[608px] mx-auto w-full text-center">
						<a href="#" class="font-itc font-bold text-lg/[56px] text-teal-1 inline-block mb-2">OTWO</a>
						<p class="mb-6 text-base font-mark-pro text-dark-1/80">
								{{ __("Disclaimer: results may vary from person to person.") }}
								{{ __("Our service is not intended to diagnose, treat, cure or prevent any disease and does not constitute medical advice.") }}</p>
						<p class="text-base font-mark-pro text-dark-1/80">2025 © {{ __("All Rights Reserved OTWO") }}</p>
				</div>
		</footer>
		<!-- Footer Section End -->
</template>

<script>
import {usePage} from "@inertiajs/vue3";

export default {
		name: "ThankYouPage",
		data() {
				return {
						localeSetting: null,
				}
		},
		props: {
				product: Object,
				additionalProduct: Object,
				quizEntry: Object,
				hasMeditations: Boolean,
				mainProductPurchased: Boolean
		},
		methods: {
				createFacebookEventNewCheckout() {
						let fbpCookie = null;
						let fbcCookie = null;

						const name = '_fbp=';
						const name2 = '_fbc=';
						const cookies = document.cookie.split(';');

						for (let i = 0; i < cookies.length; i++) {
								let cookie = cookies[i].trim();
								if (cookie.indexOf(name) === 0) {
										fbpCookie = cookie.substring(name.length, cookie.length);
								} else if (cookie.indexOf(name2) === 0) {
										fbcCookie = cookie.substring(name2.length, cookie.length);
								}
						}

						console.log('fbp:' + fbpCookie)
						console.log('fbc:' + fbcCookie)

						axios.post(`/api/facebook-tracking`, {
								"fbp": fbpCookie,
								"fbc": fbcCookie,
								"event_type": "new_purchase",
								"email" : this.quizEntry.email
						});
				},
		},
		created() {
				this.localeSetting = usePage().props.locale_setting;

				if (this.mainProductPurchased) {
						this.createFacebookEventNewCheckout()
				}

				if (this.hasMeditations) {
						if (this.additionalProduct) {
								window.dataLayer = window.dataLayer || [];
								window.dataLayer.push({
										'event': 'purchasedMeditations',
								});
						}
				} else {
						window.dataLayer = window.dataLayer || [];
						window.dataLayer.push({
								'event': 'purchasedPlan',
						});
				}
		},
}
</script>

<style scoped>

</style>
