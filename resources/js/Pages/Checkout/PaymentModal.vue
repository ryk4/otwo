<script setup>
import PrivacyPolicyPageModal from "@/Pages/InformationPages/PrivacyPolicyPageModal.vue";
import TermsAndConditionsPageModal from "@/Pages/InformationPages/TermsAndConditionsPageModal.vue";
</script>

<template>
		<div class="flex items-center gap-2 mb-0">
				<div class="flex items-center justify-center w-6 h-6">
						<input type="checkbox" name="" id="agree" v-model="form.privacyPolicyCheckbox"
									 class="w-3.5 h-3.5 form-checkbox rounded-sm border-2 border-teal-1 focus:ring-0">
				</div>
				<label class="text-sm font-mark-pro text-dark-1/80">{{ __("I agree to the") }}
						<span class="font-bold underline cursor-pointer">
								<TermsAndConditionsPageModal>
										<template v-slot:text>{{ __('T&C') }}</template>
								</TermsAndConditionsPageModal>
						</span>
						{{ __("and") }}
						<span class="font-bold underline cursor-pointer">
								<PrivacyPolicyPageModal>
										<template v-slot:text>{{ __('Privacy policy') }}</template>
								</PrivacyPolicyPageModal>
						</span>
				</label>
		</div>
		<div class="text-sm font-medium text-red-500 font-mark-pro mb-3 mt-1 px-1">
				{{ validationErrors.privacyPolicyCheckbox ? __("You must agree to the privacy policy") : '' }}
		</div>
		<div>
				<div @click="clickOpenModal" :id="uniqueButtonClass" class="block w-full px-3 py-3 mb-2 text-base font-extrabold text-center text-white rounded-lg font-mark-pro bg-teal-1 cursor-pointer uppercase">
						{{ __(buttonName) }}
				</div>

				<div v-if="showModal">
						<div class="fixed inset-0 z-[60] flex p-4 bg-dark-1/40 overflow-y-auto">

								<!-- Modal Body -->
								<div class="bg-white max-w-[544px] w-full rounded-2xl shadow-2 p-6 max-h-[90%] md:max-h-[98%] overflow-y-auto m-auto" v-click-outside="handleClickOutside">
										<div v-if="selectedProduct.is_active">

												<div class="flex items-center justify-between mb-4">
														<h4 class="text-2xl font-medium font-itc text-dark-1">{{ __("Submit a secure payment") }}</h4>
														<button>
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" @click="showModal = false;">
																		<path d="M19 5L5 19M5.00001 5L19 19" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
														</button>
												</div>

												<!-- Step -->
												<div class="flex items-center mb-12">
														<div class="relative flex items-center text-teal-600">
																<div class="relative z-10 w-2 h-2 transition duration-500 ease-in-out rounded-full bg-teal-2"></div>
																<div class="absolute top-0 mt-4 text-xs text-center text-dark-1 font-mark-pro">
																		{{ __("Product") }}
																</div>
														</div>
														<div class="flex-auto transition duration-500 ease-in-out border-t-[6px] scale-x-[1.01] border-teal-2/40">
														</div>
														<div class="relative flex items-center justify-center text-white">
																<div class="relative z-10 w-2 h-2 transition duration-500 ease-in-out rounded-full bg-teal-2">
																</div>
																<div class="absolute top-0 mt-4 text-xs font-bold text-left text-dark-1 font-mark-pro">
																		{{ __("Payment") }}
																</div>
														</div>

														<div class="flex-auto transition duration-500 ease-in-out border-t-[6px] scale-x-[1.01] border-dark-1/[0.04]">
														</div>
														<div class="relative flex items-center justify-end text-gray-500">
																<div class="relative z-10 w-2 h-2 transition duration-500 ease-in-out rounded-full bg-dark-1/40">
																</div>
																<div class="absolute top-0 mt-4 text-xs text-center text-gray-500 font-mark-pro ">
																		{{ __("Receipt") }}
																</div>
														</div>
												</div>

												<h5 class="mb-4 text-xl font-bold font-mark-pro text-dark-1"></h5>
												<div class="flex items-center justify-between mb-2">
														<p class="text-base font-medium font-mark-pro text-dark-1">{{ __(selectedProduct.name) }}</p>
														<p class="text-base font-bold font-mark-pro text-dark-1">{{ localeSetting?.currency_symbol ?? '$' }}{{ __(selectedProduct.price_including_vat) }}</p>
												</div>
												<div class="flex items-center justify-between mb-4">
														<p class="text-base font-medium font-mark-pro text-dark-1">{{ __("Discount") }}</p>
														<p class="text-base font-bold font-mark-pro text-red-1">-{{ localeSetting?.currency_symbol ?? '$' }}{{ __(selectedProduct.discount_amount) }}</p>
												</div>
												<div class="w-full h-px mb-4 bg-dark-1/20"></div>
												<div class="flex items-center justify-between">
														<p class="text-xl font-bold font-mark-pro text-dark-1">{{ __("Total") }}</p>
														<p class="text-xl font-bold font-mark-pro text-dark-1">{{ localeSetting?.currency_symbol ?? '$' }}{{ __(selectedProduct.price_with_discount_readable) }}</p>
												</div>

												<div v-if="isoCode">
														<div id="paypal-container" class="my-4"></div>
												</div>

<!--												<form @submit.prevent="submit">-->
<!--														<button type="submit" class="block w-full px-3 py-3 mb-6 text-base font-bold text-center text-white rounded-lg font-mark-pro bg-teal-1">-->
<!--																{{ __("Proceed with Credit/Debit Card") }}-->
<!--														</button>-->
<!--												</form>-->

												<img src="/assets/images/gurrented.png" alt="" class="max-w-[352px] mx-auto">
										</div>
										<div v-else>
												<div class="flex items-center justify-between mb-4">
														<h4 class="text-2xl font-medium font-itc text-dark-1">{{ __("Product not available") }}</h4>
														<button>
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" @click="showModal = false;">
																		<path d="M19 5L5 19M5.00001 5L19 19" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
														</button>
												</div>

												<div>{{ __('Sorry, the item is presently unavailable; kindly select the PDF Book as an alternative.') }}</div>
										</div>
								</div>
						</div>
				</div>
		</div>
</template>

<script>

import clickOutside from '../Directives/click-outside';
import {router, usePage} from '@inertiajs/vue3'
import {loadScript} from "@paypal/paypal-js";

export default {
		'name': 'PaymentModal',
		props: {
				quiz: Object,
				buttonName: String,
				selectedProduct: Object,
		},
		data() {
				return {
						isoCode: null,
						localeSetting: null,
						showModal: false,
						uniqueButtonClass: null,
						loaded: false,
						form: {
								privacyPolicyCheckbox: false,
						},
						validationErrors: {
								privacyPolicyCheckbox: false
						}
				}
		},
		directives: {
				'click-outside': clickOutside,
		},
		methods: {
				clickOpenModal() {
						if (this.form.privacyPolicyCheckbox === false) {
								this.validationErrors.privacyPolicyCheckbox = true;
								return;
						}

						window.dataLayer = window.dataLayer || [];
						window.dataLayer.push({
								'event': 'selectProduct',
								'product': this.selectedProduct.name,
						});

						this.validationErrors.privacyPolicyCheckbox = false;

						this.showModal = true;

						this.createFacebookEventNewCheckout()

						this.loadPaypal();
				},
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
								"event_type": "new_checkout",
								"email": this.quiz.email
						});
				},
				handleClickOutside(event) {
						const buttonEl = document.getElementById(this.uniqueButtonClass);

						//if the click is inside the button, do nothing
						if (event.target === buttonEl) {
								return;
						}

						this.showModal = false;
				},
				disableScroll() {
						if (this.showModal === true) {
								document.body.style.overflow = 'hidden';
						} else {
								document.body.style.overflow = 'auto';
						}
				},
				submit() {
						router.post('/quiz/' + this.quiz.id + '/payment', {
								paymentType: 'stripe',
								bookType: this.selectedProduct.type,
								category_type: this.selectedProduct.category_type
						})
				},
				async loadPaypal() {
						loadScript({
								"client-id": usePage().props.paypal.client_id,
								"components": "buttons",
								"disable-funding": "credit,card",
								"vault": "true",
								"currency": this.isoCode
						}).then(paypal => {
								const uuid = this.quiz.uuid;
								const product_id = this.selectedProduct.id;

								paypal.Buttons(
										{
												style: {
														color: 'gold',
														shape: 'pill',
														label: 'paypal'
												},
												async createOrder(data, actions) {
														return await axios.post("/api/paypal/orders", {
																"quiz": uuid,
																"product_id": product_id,
																"quantity": 1,
																"selected_locale": usePage().props.locale_setting?.code
														}).then((response) => {
																return response.data.data.order_id;
														})
												},
												onApprove: (data, actions) => {
														return axios.post(`/api/paypal/orders/${data.orderID}/capture`, {
																"quiz": uuid,
																"product_id": product_id
														}).then((res) => {
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
																});


																window.location.href = `/payment/success?payment_id=${res.data.data.payment_uuid}`;
														})
												}

										})
										.render("#paypal-container").catch((error) => {
										console.error("failed to load the PayPal JS SDK script", error);
								});
						});
				}
		},
		mounted() {
				this.disableScroll();
				this.uniqueButtonClass = Math.floor(Math.random() * Date.now()).toString(36);
		},
		created() {
				this.isoCode = usePage().props.locale_setting?.iso_code;

				this.localeSetting = usePage().props.locale_setting;
		},
		watch: {
				// whenever question changes, this function will run
				showModal(newShowModal) {
						this.disableScroll();
				}
		},
}
</script>

<style scoped>

</style>

