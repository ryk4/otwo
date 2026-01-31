<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import {Link} from '@inertiajs/vue3';
</script>

<template>
		<GuestLayout>
				<section class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 mt-8 md:mt-12 lg:mt-[72px]">
						<div class="grid gap-8 mb-12 lg:grid-cols-2 md:gap-16">

								<div class="order-1">
										<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-itc text-dark-1 mb-4 font-bold text-center sm:text-left">
												<div class="text-red-1 sm:leading-12">{{ __("Discover The Secrets") }}</div>
												<div class="sm:leading-12">{{ __("Of Effortless Smoking Cessation") }}</div>
										</h1>
										<p class="font-medium text-xl text-base/9 font-mark-pro text-dark-1 lg:mb-8 text-center sm:text-left">
												{{ __("Share your smoking habits and we will tell you fast and easy-to-follow way to quit smoking. Complete the quiz and get rid of tobacco once and for all.") }}
										</p>
										<p class="text-xl font-extrabold mb-2 sm:mt-5 mt-7 leading-9 text-cyan-700 text-center sm:text-left">{{ __("What’s your preferred smoking method?") }}</p>
										<ul class="space-y-4">
												<li>
														<Link href="/quiz/tobacco"
																	class="flex items-center justify-between p-4 text-base font-medium rounded-lg bg-teal-2/10 font-mark-pro text-dark-1">
																<span>{{ __("Classic Tobacco (Cigarettes, Cigars, Roll-ups)") }}</span>

																<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
																		 xmlns="http://www.w3.org/2000/svg">
																		<path d="M20 12L4 12M20 12L14 18M20 12L14 6" stroke="#066D95" stroke-width="1.5"
																					stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
														</Link>
												</li>
												<li>
														<Link href="/quiz/vaping"
																	class="flex items-center justify-between p-4 text-base font-medium rounded-lg bg-teal-2/10 font-mark-pro text-dark-1">
																<span>{{ __("Vaping Devices (E-Cigs, Vapes)") }}</span>

																<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
																		 xmlns="http://www.w3.org/2000/svg">
																		<path d="M20 12L4 12M20 12L14 18M20 12L14 6" stroke="#066D95" stroke-width="1.5"
																					stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
														</Link>
												</li>
												<li>
														<Link href="/quiz/other"
																	class="flex items-center justify-between p-4 text-base font-medium rounded-lg bg-teal-2/10 font-mark-pro text-dark-1">
																<span>{{ __("Other Alternatives (Heat-not-Burn, etc.)") }}</span>

																<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
																		 xmlns="http://www.w3.org/2000/svg">
																		<path d="M20 12L4 12M20 12L14 18M20 12L14 6" stroke="#066D95" stroke-width="1.5"
																					stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
														</Link>
												</li>
										</ul>
								</div>

								<div class="order-2">
										<img src="/assets/images/book-6.png" alt="" class="w-full">
								</div>
						</div>

						<div class="">
								<div class="text-center text-zinc-800 text-2xl font-medium font-itc">{{ __("Scientific References And Clinical Studies:") }}</div>
								<div class="flex sm:justify-between sm:mt-8 mb-0 sm:mb-0 grid sm:grid-cols-3 grid-cols-1 space-y-4">
										<div class="flex justify-center">
												<img class="w-52 h-16 mt-3" src="/assets/images/harvard-logo.png"/>
										</div>
										<div class="flex justify-center">
												<img class="w-52 h-16" src="/assets/images/cnn-logo.png"/>
										</div>
										<div class="flex justify-center">
												<img class="w-52 h-10" src="/assets/images/col-uni-logo.png"/>
										</div>
								</div>
						</div>
				</section>
		</GuestLayout>
</template>

<script>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import {Link} from '@inertiajs/vue3';

export default {
		components: {
				GuestLayout,
		},
		computed: {
				locale() {
						return this.$page.props.locale;
				},
				language() {
						return this.$page.props.language;
				},
		},
		mounted() {
		}
};
</script>
