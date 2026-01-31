<template>
		<!-- Header Section Start -->
		<header class="sticky inset-x-0 top-0 z-50 bg-white shadow-1">
				<div class="container relative px-6 mx-auto lg:max-w-1440 lg:px-14">
						<nav class="flex items-center justify-center py-4 ">
								<!-- logo -->
								<a href="#" class="font-itc font-bold text-[28px] text-teal-1 inline-block">
										OTWO
								</a>
						</nav>
				</div>
		</header>
		<!-- Header Section End -->

		<!-- Content Section Start -->
		<section class="bg-dark-1/[0.04]">
				<div class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">
						<div class="grid gap-6 lg:grid-cols-2 md:gap-10 lg:gap-16">
								<div class="">
										<h1 class="text-[32px]/[44px] font-normal text-dark-1 font-itc mb-4 text-center sm:text-left">
												<span>{{ __("Manage Your Cravings with") }}</span>&nbsp;
												<span class="text-red-1">{{ __("Quit Smoking Meditation") }}</span>
										</h1>
										<div class="mb-0 font-medium text-[20px]/[36px] leading-8 text-dark-1/80 lg:mb-8 mark-pro text-center sm:text-left">
												<p>
														{{
																__("Our guided meditations are specifically crafted to help you conquer cravings and stay on track with your smoke-free lifestyle. Backed by science and designed for effectiveness, these meditations will empower you to overcome challenges and embrace your newfound freedom.")
														}}
												</p>
										</div>
										<div class="mb-0 font-normal text-[16px]/[24px] leading-6 text-dark-1/80 lg:mb-8 mark-pro hidden sm:block">
												<p>
														<span class="font-semibold text-teal-2">
																{{ __("89% of our customers noticed improvement") }}&nbsp;
														</span>
														<span class="font-semibold">
																{{ __("in cravings management with this meditation. Get your Quit Smoking meditations now for only") }}&nbsp;
														</span>
														<span class="line-through font-bold text-lg">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_including_vat }}</span>&nbsp;
														<span class="font-bold text-red-1 text-lg">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_with_discount_readable }}!</span>
												</p>
										</div>


										<div class="text-center hidden sm:block">
												<payment-modal-up-sell :button-name="__('I WANT MY MEDITATIONS FOR') + ' ' + (localeSetting?.currency_symbol ?? '$') + product.price_with_discount" :quiz="quiz" :selected-product="product"/>
												<div @click="selectNoPlan" class="w-full text-[16px]/[24px] mt-3 px-6 py-3 mx-auto text-center font-extrabold rounded-lg font-mark-pro bg-gray-500/80 text-white cursor-pointer border">
														<span class="uppercase">{{ __("Skip and download my plan") }}</span>
												</div>
										</div>

								</div>

								<div class="">
										<img src="/assets/images/img-meditation.png" alt="" class="w-full rounded-[30px] mb-4">

										<div class="text-center sm:hidden">
												<p class="mb-4">
														<span class="font-semibold text-teal-2">
																{{ __("89% of our customers noticed improvement") }}&nbsp;
														</span>
														<span class="font-semibold">
																{{ __("in cravings management with this meditation. Get your Quit Smoking meditations now for only") }}&nbsp;
														</span>
														<span class="line-through font-bold text-dark-1/30 text-lg">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_including_vat }}</span>&nbsp;
														<span class="font-bold text-red-1 text-lg">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_with_discount_readable }}!</span>
												</p>

												<payment-modal-up-sell :button-name="__('I WANT MY MEDITATIONS FOR') + ' ' + (localeSetting?.currency_symbol ?? '$') + product.price_with_discount" :quiz="quiz" :selected-product="product"/>

												<div @click="selectNoPlan" class="w-full text-[16px]/[24px] mt-3 px-6 py-3 mx-auto text-center font-extrabold rounded-lg font-mark-pro bg-gray-500/80 text-white cursor-pointer border">
														<span class="uppercase">{{ __("Skip and download my plan") }}</span>
												</div>
										</div>
								</div>
						</div>
				</div>
		</section>
		<!-- Content Section End -->

		<!-- Simple Technique Start -->
		<section class="bg-teal-2/10">
				<div class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 py-8 md:py-12 lg:py-[42px]">
						<div class="mb-8">
								<div class="text-center text-[32px]/[44px] font-normal font-itc text-teal-1 mb-5">
										{{ __("Simple Techniques & Guided Meditations") }}
								</div>
								<div class="text-center text-[20px]/[36px] font-normal font-mark-pro sm:mx-auto sm:max-w-4xl">
										{{ __("Our Quit Smoking Meditation package offers a simple yet powerful solution to conquer cravings and maintain smoke-free lifestyle") }}
								</div>
						</div>
						<div class="grid gap-6 lg:grid-cols-2 md:gap-10 lg:gap-16">
								<div class="font-mark-pro order-2 sm:order-1 sm:mt-0 mt-8 mb-12 sm:mb-5">
										<div class="flex mb-6">
												<div class="w-28">
														<img class="object-cover rounded-full w-16 h-16" src="/assets/images/img-doctor.png">
												</div>
												<div>
														<div class="text-[16px]/[24px] font-extrabold">{{ __("Dr. Richard G. Willey") }}</div>
														<div class="text-[12px]/[20px] font-normal text-dark-1/80 sm:w-3/4">{{ __("Clinical Psychologist with a focus on Cognitive Behavioral Therapy for Smoking Cessation") }}</div>
												</div>
										</div>

										<div class="mb-0 font-normal text-[16px]/[24px] leading-6 text-dark-1/80 lg:mb-8 mark-pro">
												<p>
														{{
																__("With our meditation session, you’ll embark on a transformative experience that combines mindfulness techniques, relaxation exercises, and affirmations to rewire your mindset and strengthen your resolve. These bite-sized sessions fit seamlessly into your daily routine, allowing you to effortlessly integrate them into your life and stay on track towards your smoke-free goals.")
														}}
												</p>
										</div>
								</div>

								<div class="font-mark-pro order-1 sm:order-2">
										<div class="flex mb-7">
												<div class="w-52">
														<img class="object-cover rounded-full w-16 h-16" src="/assets/images/upsell-img-1.png">
												</div>
												<div>
														<div class="text-[16px]/[24px] font-medium ml-2">{{ __("This 7min guided meditation carefully designed to address the specific challenges you may face on your journey to quiz smoking.") }}</div>
												</div>
										</div>

										<div class="flex mb-7">
												<div class="w-48">
														<img class="h-13 w-16" src="/assets/images/upsell-img-2.png">
												</div>
												<div>
														<div class="text-[16px]/[24px] font-medium">{{ __("Listen anywhere from any device - meditations are in audio format and easily accessible with smartphone or computer.") }}</div>
												</div>
										</div>

										<div class="flex">
												<div class="w-28">
														<img class="h-14 w-14" src="/assets/images/upsell-img-3.png">
												</div>
												<div>
														<div class="text-[16px]/[24px] font-medium ml-2">{{ __("Effective addition to our quit smoking program to maintain your smoke-free life.") }}</div>
												</div>
										</div>
								</div>
						</div>
						<div class="max-w-md mx-auto">
								<div class="text-center">
										<payment-modal-up-sell :button-name="__('I WANT MY MEDITATIONS FOR') + ' ' + (localeSetting?.currency_symbol ?? '$') + product.price_with_discount" :quiz="quiz" :selected-product="product"/>

										<div @click="selectNoPlan" class="w-full text-[16px]/[24px] mt-3 px-6 py-3 mx-auto text-center font-extrabold rounded-lg font-mark-pro bg-gray-500/80 text-white cursor-pointer border">
												<span class="uppercase">{{ __("Skip and download my plan") }}</span>
										</div>
								</div>
						</div>
				</div>
		</section>
		<!-- Simple Technique End -->


		<!-- Carousel Section Start -->
		<section class="overflow-x-hidden">
				<div class="container mx-auto lg:max-w-[1168px] px-4 lg:px-6 py-8 md:py-12 lg:py-[52px]">
						<div class="max-w-3xl mx-auto mb-4 md:mb-6 lg:mb-10">
								<h1 class="text-[32px]/[44px] sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-medium text-center font-itc text-teal-1">
										{{ __("What others say?") }}
								</h1>
						</div>

						<div class="">
								<div class="relative flex items-center">

										<!-- Carousel Items -->
										<div class="grid grid-cols-1 sm:grid-cols-3 gap-8 p-8 -m-8">

												<div v-for="testimonial in testimonials" class="w-full p-4 bg-white sm:w-1/2 lg:w-1/3 min-w-[352px] shadow-2 rounded-2xl">
														<div class="flex items-center gap-2 mb-5">
																<img :src="testimonial.photo" alt="" class="object-cover rounded-full w-14 h-14">
																<div>
																		<div class="flex items-center gap-0.5 mb-1">
																				<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path opacity="0.15"
																									d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																									fill="#F8D84D"/>
																						<path d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																									stroke="#F8D84D" stroke-width="1.5" stroke-linecap="round"
																									stroke-linejoin="round"/>
																				</svg>

																				<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
																						 xmlns="http://www.w3.org/2000/svg">
																						<path opacity="0.15" d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																									fill="#F8D84D"/>
																						<path d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																									stroke="#F8D84D" stroke-width="1.5" stroke-linecap="round"
																									stroke-linejoin="round"/>
																				</svg>

																				<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
																						 xmlns="http://www.w3.org/2000/svg">
																						<path opacity="0.15" d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																									fill="#F8D84D"/>
																						<path d="M12 17.2563L6 20.2563L7.5 14.2563L3 9.25635L9.5 8.75635L12 3.25635L14.5 8.75635L21 9.25635L16.5 14.2563L18 20.2563L12 17.2563Z"
																									stroke="#F8D84D" stroke-width="1.5" stroke-linecap="round"
																									stroke-linejoin="round"/>
																				</svg>

																				<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
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
																				<p class="text-sm font-bold text-dark-1 font-mark-pro">{{ __(testimonial.name) }}</p>

																				<div class="flex items-center space-x-2">
																						<img src="/assets/images/verify-icon.png" alt="" class="w-4 h-4">
																						<span class="text-sm text-teal-1 font-mark-pro">{{ __("Verified customer") }}</span>
																				</div>
																		</div>
																</div>
														</div>

														<p class="text-base font-mark-pro text-dark-1/80">
																{{ __(testimonial.comment) }}
														</p>
												</div>

										</div>

								</div>
						</div>
				</div>
		</section>
		<!-- Carousel Section End -->

		<!-- Footer Section Start -->
		<footer class="p-6 bg-teal-1/20 mt-8 md:mt-12 lg:mt-[72px]">
				<div class="max-w-[608px] mx-auto w-full text-center">
						<a href="#" class="font-itc font-bold text-lg/[56px] text-teal-1 inline-block mb-2">OTWO</a>
						<p class="mb-6 text-base font-mark-pro text-dark-1/80">
								{{ __("Disclaimer: results may vary from person to person.") }}
								{{ __("Our service is not intended to diagnose, treat, cure or prevent any disease and does not constitute medical advice.") }}</p>
						<p class="mb-6 text-base font-mark-pro text-dark-1/80">
								{{ __("If you need assistance, please contact us at:") }} <a href="mailto:support@otwo.life">support@otwo.life</a>
						</p>
						<p class="text-base font-mark-pro text-dark-1/80">2025 © {{ __("All Rights Reserved OTWO") }}</p>
				</div>
		</footer>
		<!-- Footer Section End -->
</template>

<script>
import PaymentModalUpSell from "@/Pages/Checkout/PaymentModalUpSell.vue";
import {usePage} from "@inertiajs/vue3";
import quiz from "@/Pages/Quiz.vue";

export default {
		name: "SuccessPage",
		components: {PaymentModalUpSell},
		data() {
				return {
						localeSetting: null,
						testimonials: [
								{
										name: 'Mark, 42yo',
										comment: "Quit Smoking Meditations has been a game- changer for me. In just a few minutes each day, I’ve found the strength to overcome cravings and stay committed to my goal of quitting smoking. I couldn’t be happier with the results.",
										photo: '/assets/images/testimonials/mark.png'
								},
								{
										name: 'Sarah, 47yo',
										comment: "Quit Smoking Meditations turned my struggle into success. With just 10 minutes a day, I’ve conquered cravings and embraced a smoke-free life. Highly recommend!",
										photo: '/assets/images/testimonials/sarah.png'
								},
								{
										name: 'John, 35yo',
										comment: "Quit Smoking Meditations has been a game- changer for me. In just a few sessions, I felt more empowered to overcome cravings and stay committed to my smoke-free journey.",
										photo: '/assets/images/testimonials/john.png'
								},
								{
										name: 'Emma, 39yo',
										comment: "Thanks to Quit Smoking Meditations, I’ve conquered my cravings and embraced a smoke-free life. These sessions are a lifeline for anyone on their journey to quit smoking",
										photo: '/assets/images/testimonials/emma.png'
								},
								{
										name: 'Laura, 34yo',
										comment: "Quit Smoking Meditations has truly transformed my approach to quitting. The guided sessions have helped me navigate cravings with ease, and I’m now living smoke-free with confidence. I can’t recommend it enough!",
										photo: '/assets/images/testimonials/laura.png'
								},
								{
										name: 'Betty, 41yo',
										comment: "I've got my life back, thanks to this program! The personalization really makes the difference. I feel better, my family is proud, and I'm finally free from the hold of cigarettes",
										photo: '/assets/images/testimonials/betty.png'
								},
						]
				}
		},
		props: {
				quiz: Object,
				product: Object
		},
		methods: {
				selectNoPlan() {
						window.location.href = route('quiz.payment.thankYou', {'quiz_id': this.quiz.uuid});
				},
				createFacebookEventNewCheckout(){
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
								"event_type" : "new_purchase",
								"email" : this.quiz.email
						});
				},
		},
		mounted() {
				this.createFacebookEventNewCheckout();
		},
		created() {
				this.localeSetting = usePage().props.locale_setting;

				window.dataLayer = window.dataLayer || [];
				window.dataLayer.push({
						'event': 'purchasedPlan',
				});
		},
}
</script>

<style scoped>

</style>
