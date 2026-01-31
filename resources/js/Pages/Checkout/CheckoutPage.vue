<template>
		<SummaryLayout display_counter="true" :quiz="quiz">

				<!-- Prices Section Start -->
				<section id="prices-section" class="container mx-auto lg:max-w-[1168px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">
						<div class="max-w-3xl mx-auto mb-6 md:mb-8 lg:mb-12">
								<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc">
										{{ __("Take the final step to reclaim your health and well-being") }}
								</h1>
						</div>

						<div id="payment-section" class="grid gap-4 mb-4 lg:grid-cols-3 md:grid-cols-2">
								<div v-for="product in this.products" class="relative group" :class="{'active': product == selectedProduct}" @click="selectProduct(product)">
										<div class="p-4 border-2 rounded-lg border-dark-1/20  group-[.active]:!border-teal-1 cursor-pointer">
												<div v-if="product.id === 2" class="absolute inset-x-0 top-0 flex justify-center -translate-y-1/2">
														<div class="text-sm font-bold text-white bg-teal-1 px-4 py-0.5 rounded-lg">
																% {{ __("MOST POPULAR OPTION") }} %
														</div>
												</div>
												<div class="flex w-full gap-4">
														<div class="grow">
																<div class="flex items-center gap-x-3.5 mb-1.5">
																		<span class="w-5 h-5 rounded-full shrink-0 bg-dark-1/10 group-[.active]:hidden"></span>
																		<svg class="group-[.active]:block hidden w-5" viewBox="0 0 25 24" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect x="3.66699" y="3" width="18" height="18" rx="9" fill="#066D95"
																							stroke="#066D95" stroke-width="2"/>
																				<path d="M16.8334 9.5L11 15.3333L8.5 12.8333" stroke="white" stroke-width="1.5"
																							stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>

																		<p class="text-xl font-bold text-dark-1 font-mark-pro ">{{ __(product.name) }}</p>
																</div>
																<del class="mb-1 text-base font-medium text-red-1 font-itc">${{ product.price_including_vat }}</del>
																<p class="text-[40px]/[56px] font-bold text-dark-1 font-itc">${{ product.price_with_discount }}</p>
														</div>
														<div class="grow max-w-[100px]">
																<img src="/assets/images/Book.png" alt="" class="w-full">
														</div>
												</div>
												<p class="mt-1 text-sm text-center text-dark-1/80 font-mark-pro">{{ __("One-time payment").toUpperCase() }}</p>

												<svg v-if="product.type === 'e_book'" class="absolute top-0 right-0 z-10 translate-x-[30%] -translate-y-[30%]" width="91" height="90"
														 viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_92_1375)">
																<rect x="25.667" y="16" width="40" height="40" rx="20" fill="#CDE2EA"
																			shape-rendering="crispEdges"/>
																<path
																		d="M49.5241 36C49.5241 38.1303 47.7972 39.8572 45.667 39.8572C43.5367 39.8572 41.8098 38.1303 41.8098 36C41.8098 33.8698 43.5367 32.1429 45.667 32.1429C47.7972 32.1429 49.5241 33.8698 49.5241 36ZM49.5241 36L49.5241 37.2857C49.5241 38.7059 50.6754 39.8571 52.0956 39.8571C53.0078 39.8571 53.8092 39.3821 54.2656 38.6658C54.5198 38.2671 54.667 37.7936 54.667 37.2857V36C54.667 31.0294 50.6376 27 45.667 27C40.6964 27 36.667 31.0294 36.667 36C36.667 40.9706 40.6964 45 45.667 45C47.5792 45 49.3521 44.4037 50.8098 43.3868"
																		stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</g>
														<defs>
																<filter id="filter0_d_92_1375" x="0.666992" y="0" width="90" height="90"
																				filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																		<feFlood flood-opacity="0" result="BackgroundImageFix"/>
																		<feColorMatrix in="SourceAlpha" type="matrix"
																									 values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
																		<feOffset dy="9"/>
																		<feGaussianBlur stdDeviation="12.5"/>
																		<feComposite in2="hardAlpha" operator="out"/>
																		<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
																		<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_92_1375"/>
																		<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_92_1375"
																						 result="shape"/>
																</filter>
														</defs>
												</svg>
												<svg v-else-if="product.type === 'audiobook'" class="absolute top-0 right-0 z-10 translate-x-[30%] -translate-y-[30%]" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_70_2033)">
																<rect x="25.333" y="16" width="40" height="40" rx="20" fill="#CDE2EA"
																			shape-rendering="crispEdges"/>
																<g opacity="0.15">
																		<path
																				d="M36.333 38H39.333C40.4376 38 41.333 38.8954 41.333 40V43C41.333 44.1046 40.4376 45 39.333 45H36.333V38Z"
																				fill="#066D95"/>
																		<path
																				d="M54.333 45H51.333C50.2284 45 49.333 44.1046 49.333 43V40C49.333 38.8954 50.2284 38 51.333 38H54.333V45Z"
																				fill="#066D95"/>
																</g>
																<path
																		d="M36.333 38H39.333C40.4376 38 41.333 38.8954 41.333 40V43C41.333 44.1046 40.4376 45 39.333 45H36.333V38ZM36.333 38V36C36.333 31.0294 40.3624 27 45.333 27C50.3036 27 54.333 31.0294 54.333 36V38M54.333 38H51.333C50.2284 38 49.333 38.8954 49.333 40V43C49.333 44.1046 50.2284 45 51.333 45H54.333V38Z"
																		stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</g>
														<defs>
																<filter id="filter0_d_70_2033" x="0.333008" y="0" width="90" height="90"
																				filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																		<feFlood flood-opacity="0" result="BackgroundImageFix"/>
																		<feColorMatrix in="SourceAlpha" type="matrix"
																									 values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
																		<feOffset dy="9"/>
																		<feGaussianBlur stdDeviation="12.5"/>
																		<feComposite in2="hardAlpha" operator="out"/>
																		<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
																		<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_70_2033"/>
																		<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_70_2033"
																						 result="shape"/>
																</filter>
														</defs>
												</svg>
												<svg v-else-if="product.type === 'paperback'" class="absolute top-0 right-0 z-10 translate-x-[30%] -translate-y-[30%]" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_92_676)">
																<rect x="25" y="16" width="40" height="40" rx="20" fill="#CDE2EA"
																			shape-rendering="crispEdges"/>
																<path opacity="0.15" d="M38 45H52V33H48C46.8954 33 46 32.1046 46 31V27H38V45Z"
																			fill="#066D95"/>
																<path
																		d="M41 37H47M41 41H49M46 27H38V45H52V33M46 27H47L52 32V33M46 27V31C46 32 47 33 48 33H52"
																		stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</g>
														<defs>
																<filter id="filter0_d_92_676" x="0" y="0" width="90" height="90"
																				filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																		<feFlood flood-opacity="0" result="BackgroundImageFix"/>
																		<feColorMatrix in="SourceAlpha" type="matrix"
																									 values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
																		<feOffset dy="9"/>
																		<feGaussianBlur stdDeviation="12.5"/>
																		<feComposite in2="hardAlpha" operator="out"/>
																		<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
																		<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_92_676"/>
																		<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_92_676"
																						 result="shape"/>
																</filter>
														</defs>
												</svg>
										</div>
								</div>
						</div>

						<div class="max-w-[352px] mx-auto">
								<payment-modal button-name="Yes! I want this!" :quiz="quiz" :selected-product="selectedProduct"/>

								<p class="mb-4 text-xs font-mark-pro text-dark-1/80">
										{{ __("One-time payment") }} • {{ __("24/7 customer service") }} • {{ __("No hidden fees") }}
								</p>
								<img src="/assets/images/gurrented.png" alt="" class="w-full">
						</div>
				</section>
				<!-- Prices Section End -->

				<!-- Experience Section Start -->
				<section id="experience-section" class="bg-dark-1/[0.04]">
						<div class="container mx-auto lg:max-w-[1168px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">
								<div class="max-w-3xl mx-auto mb-6 md:mb-8 lg:mb-12">
										<h2 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc">
												{{ __("Experience the positive effects of your quitting guide") }}
										</h2>
								</div>

								<div class="flex flex-col gap-4 mb-6 lg:flex-row md:gap-8 xl:gap-16 md:mb-8 lg:mb-12">
										<div class="lg:w-6/12">
												<h3 class="text-[28px]/9 md:text-3xl lg:text-[32px]/[44px] font-itc font-medium text-dark-1 mb-4">
														{{ __("Dive into the details of your customized guide") }}
												</h3>
												<p class="mb-6 font-medium text-xl/9 font-mark-pro text-dark-1/80">
														{{ __("With OTWO, you receive a customized plan filled with powerful strategies to conquer smoking once and for all.") }}
												</p>
												<div class="space-y-6">
														<div class="flex gap-4">
																<img src="/assets/images/icon-9.png" alt="" class="w-[68px] h-[68px] shrink-0">
																<div>
																		<h5 class="font-bold text-xl/9 font-mark-pro text-dark-1/80">
																				{{ __("Craving management techniques") }}
																		</h5>
																</div>
														</div>
														<div class="flex gap-4">
																<img src="/assets/images/icon-10.png" alt="" class="w-[68px] h-[68px] shrink-0">
																<div>
																		<h5 class="font-bold text-xl/9 font-mark-pro text-dark-1/80">
																				{{ __("Expert withdrawal advice") }}
																		</h5>
																</div>
														</div>
														<div class="flex gap-4">
																<img src="/assets/images/icon-11.png" alt="" class="w-[68px] h-[68px] shrink-0">
																<div>
																		<h5 class="font-bold text-xl/9 font-mark-pro text-dark-1/80">{{ __("Post-program support") }}</h5>
																</div>
														</div>
														<div class="flex gap-4">
																<img src="/assets/images/icon-12.png" alt="" class="w-[68px] h-[68px] shrink-0">
																<div>
																		<h5 class="font-bold text-xl/9 font-mark-pro text-dark-1/80">{{ __("Stress management tools") }}</h5>
																</div>
														</div>
														<div class="flex gap-4">
																<img src="/assets/images/icon-13.png" alt="" class="w-[68px] h-[68px] shrink-0">
																<div>
																		<h5 class="font-bold text-xl/9 font-mark-pro text-dark-1/80">{{ __("Relapse prevention strategies") }}</h5>
																</div>
														</div>
												</div>
										</div>
										<div class="lg:w-6/12">
												<img src="/assets/images/Book.png" alt="" class="w-full">
										</div>
								</div>

								<div class="grid gap-4 mb-6 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 sm:mb-8 lg:mb-12">
										<div class="overflow-hidden bg-white rounded-2xl shadow-2">
												<img src="/assets/images/img-4.png" alt="" class="w-full aspect-[16/10.5]">
												<div class="p-4">
														<h5 class="mb-1 font-bold text-xl/9 text-dark-1 font-mark-pro">{{ __("Enhances Lung Function") }}</h5>
														<p class="text-base font-medium text-dark-1/80 font-mark-pro">{{ __("Improved lung capacity and better breathing within weeks of quitting") }}</p>
												</div>
										</div>
										<div class="overflow-hidden bg-white rounded-2xl shadow-2">
												<img src="/assets/images/img-5.png" alt="" class="w-full aspect-[16/10.5]">
												<div class="p-4">
														<h5 class="mb-1 font-bold text-xl/9 text-dark-1 font-mark-pro">{{ __("Saves Money") }}</h5>
														<p class="text-base font-medium text-dark-1/80 font-mark-pro">{{ __("Keep your wallet healthy by cutting out the cost of cigarettes") }}</p>
												</div>
										</div>
										<div class="overflow-hidden bg-white rounded-2xl shadow-2">
												<img src="/assets/images/img-6.png" alt="" class="w-full aspect-[16/10.5]">
												<div class="p-4">
														<h5 class="mb-1 font-bold text-xl/9 text-dark-1 font-mark-pro">{{ __("Increases Energy Levels") }}</h5>
														<p class="text-base font-medium text-dark-1/80 font-mark-pro">{{ __("Feel more energized as your body detoxifies from nicotine") }}</p>
												</div>
										</div>
										<div class="overflow-hidden bg-white rounded-2xl shadow-2">
												<img src="/assets/images/img-7.png" alt="" class="w-full aspect-[16/10.5]">
												<div class="p-4">
														<h5 class="mb-1 font-bold text-xl/9 text-dark-1 font-mark-pro">{{ __("Improves Sense of Taste and Smell") }}</h5>
														<p class="text-base font-medium text-dark-1/80 font-mark-pro">{{ __("Enjoy meals more with your heightened senses after quitting") }}</p>
												</div>
										</div>
								</div>
								<div class="max-w-[526px] mx-auto">
										<img src="/assets/images/logos-co.png" alt="" class="w-full mb-6 sm:mb-8 lg:mb-12">
										<a href="#" class="block w-full px-3 py-3 mb-2 text-base font-bold text-center text-white rounded-lg font-mark-pro bg-teal-1 cursor-pointer ">
												{{ __("Yes! I want this!") }}
										</a>
								</div>
						</div>
				</section>
				<!-- Experience Section End -->

				<!-- Approch Test Section Start -->
				<section class="w-full overflow-hidden">
						<div class="container mx-auto max-w-3xl px-4 py-8 md:py-12 lg:py-[72px]">
								<h2 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc mb-6 md:mb-8 lg:mb-12">
										{{ __("Our approach vs the rest") }}
								</h2>
								<div class="-mr-4 overflow-x-auto">
										<div class="bg-white rounded-2xl shadow-2 border border-black/[0.08] min-w-[736px]">
												<table class="w-full border-collapse table-auto ">
														<thead>
														<tr>
																<th class="border-b border-r border-black/[0.08]"></th>
																<th class="text-[28px]/[56px] font-itc font-bold text-teal-1 px-4 text-center py-2 border-b border-r border-black/[0.08]">
																		OTWO
																</th>
																<th class="text-[28px]/[56px] font-itc font-bold text-dark-1/60 px-4 text-center py-2 border-b border-black/[0.08]">
																		{{ __("Others") }}
																</th>
														</tr>
														</thead>
														<tbody>
														<tr>
																<td class="text-xl/9 text-dark-1/80 font-bold font-mark-pro px-4 py-3.5 border-b border-r border-black/[0.08]">
																		{{ __("Tailored Quitting Plan") }}
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="33" height="33" viewBox="0 0 33 33" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect x="0.5" y="0.612305" width="32" height="32" rx="16" fill="#009F91"/>
																				<path d="M21.8337 13.2789L14.5004 20.6122L11.167 17.2789" stroke="white"
																							stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="32" height="33" viewBox="0 0 32 33" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect y="0.612305" width="32" height="32" rx="16" fill="#FB3640"/>
																				<path d="M20.6663 11.9457L11.333 21.279M11.333 11.9457L20.6664 21.279"
																							stroke="white" stroke-width="1.5" stroke-linecap="round"
																							stroke-linejoin="round"/>
																		</svg>
																</td>
														</tr>

														<tr>
																<td class="text-xl/9 text-dark-1/80 font-bold font-mark-pro px-4 py-3.5 border-b border-r border-black/[0.08]">
																		{{ __("Detailed Nicotine Dependency Analysis") }}
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="33" height="33" viewBox="0 0 33 33" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect x="0.5" y="0.612305" width="32" height="32" rx="16" fill="#009F91"/>
																				<path d="M21.8337 13.2789L14.5004 20.6122L11.167 17.2789" stroke="white"
																							stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="32" height="33" viewBox="0 0 32 33" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect y="0.612305" width="32" height="32" rx="16" fill="#FB3640"/>
																				<path d="M20.6663 11.9457L11.333 21.279M11.333 11.9457L20.6664 21.279"
																							stroke="white" stroke-width="1.5" stroke-linecap="round"
																							stroke-linejoin="round"/>
																		</svg>
																</td>
														</tr>
														<tr>
																<td class="text-xl/9 text-dark-1/80 font-bold font-mark-pro px-4 py-3.5 border-b border-r border-black/[0.08]">
																		{{ __("Insight into Individual Smoking Triggers") }}
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect x="0.5" y="0.612305" width="32" height="32" rx="16" fill="#009F91"/>
																				<path d="M21.8337 13.2789L14.5004 20.6122L11.167 17.2789" stroke="white"
																							stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="32" height="33" viewBox="0 0 32 33" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect y="0.612305" width="32" height="32" rx="16" fill="#FB3640"/>
																				<path d="M20.6663 11.9457L11.333 21.279M11.333 11.9457L20.6664 21.279"
																							stroke="white" stroke-width="1.5" stroke-linecap="round"
																							stroke-linejoin="round"/>
																		</svg>
																</td>
														</tr>
														<tr>
																<td class="text-xl/9 text-dark-1/80 font-bold font-mark-pro px-4 py-3.5 border-b border-r border-black/[0.08]">
																		{{ __("Structured Smoke-Free Lifestyle Tips") }}
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="33" height="33" viewBox="0 0 33 33" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect x="0.5" y="0.612305" width="32" height="32" rx="16" fill="#009F91"/>
																				<path d="M21.8337 13.2789L14.5004 20.6122L11.167 17.2789" stroke="white"
																							stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="32" height="33" viewBox="0 0 32 33" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect y="0.612305" width="32" height="32" rx="16" fill="#FB3640"/>
																				<path d="M20.6663 11.9457L11.333 21.279M11.333 11.9457L20.6664 21.279"
																							stroke="white" stroke-width="1.5" stroke-linecap="round"
																							stroke-linejoin="round"/>
																		</svg>
																</td>
														</tr>
														<tr>
																<td class="text-xl/9 text-dark-1/80 font-bold font-mark-pro px-4 py-3.5 border-b border-r border-black/[0.08]">
																		{{ __("Personalized Craving Management Techniques") }}
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="33" height="33" viewBox="0 0 33 33" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect x="0.5" y="0.612305" width="32" height="32" rx="16" fill="#009F91"/>
																				<path d="M21.8337 13.2789L14.5004 20.6122L11.167 17.2789" stroke="white"
																							stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																</td>
																<td class="border-b border-r border-black/[0.08]">
																		<svg class="mx-auto" width="32" height="33" viewBox="0 0 32 33" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect y="0.612305" width="32" height="32" rx="16" fill="#FB3640"/>
																				<path d="M20.6663 11.9457L11.333 21.279M11.333 11.9457L20.6664 21.279"
																							stroke="white" stroke-width="1.5" stroke-linecap="round"
																							stroke-linejoin="round"/>
																		</svg>
																</td>
														</tr>
														</tbody>
												</table>
										</div>
								</div>
						</div>
				</section>
				<!-- Approch Test Section End -->

				<!-- How it works Section Start -->
				<section class="bg-dark-1/[0.04]">
						<div class="container mx-auto lg:max-w-[1168px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">
								<div class="max-w-3xl mx-auto mb-6 md:mb-8 lg:mb-12">
										<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc">
												{{ __("Embrace your smoke-free journey in 3 simple steps") }}
										</h1>
								</div>

								<div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
										<div class="bg-white border rounded-2xl border-teal-1 shadow-2">
												<div class="py-2 font-medium text-center text-white text-2xl/8 rounded-t-2xl bg-teal-1 font-itc">
														{{ __("STEP") }} 1
												</div>
												<div class="p-4">
														<img src="/assets/images/img-8.png" alt="" class="w-full h-full aspect-[5/3] mb-4">
														<h5 class="mb-1 font-bold text-xl/9 text-dark-1 font-mark-pro">{{ __("Identify Your Triggers") }}</h5>
														<p class="text-base font-mark-pro text-dark-1/80">{{ __("Dig deep into your smoking habits and identify the unique triggers that have kept you tied to tobacco") }}</p>
												</div>
										</div>

										<div class="bg-white border rounded-2xl border-teal-1 shadow-2">
												<div class="py-2 font-medium text-center text-white text-2xl/8 rounded-t-2xl bg-teal-1 font-itc">
														{{ __("STEP") }} 2
												</div>
												<div class="p-4">
														<img src="/assets/images/img-9.png" alt="" class="w-full h-full aspect-[5/3] mb-4">
														<h5 class="mb-1 font-bold text-xl/9 text-dark-1 font-mark-pro">
																{{ __("Apply Personalized Strategies") }}
														</h5>
														<p class="text-base font-mark-pro text-dark-1/80">
																{{ __("Implement actionable strategies designed specifically for your unique smoking habits and triggers") }}
														</p>
												</div>
										</div>

										<div class="bg-white border rounded-2xl border-teal-1 shadow-2">
												<div class="py-2 font-medium text-center text-white text-2xl/8 rounded-t-2xl bg-teal-1 font-itc">
														{{ __("STEP") }} 3
												</div>
												<div class="p-4">
														<img src="/assets/images/img-10.png" alt="" class="w-full h-full aspect-[5/3] mb-4">
														<h5 class="mb-1 font-bold text-xl/9 text-dark-1 font-mark-pro">{{ __("Celebrate a Smoke-Free Life") }}</h5>
														<p class="text-base font-mark-pro text-dark-1/80">{{ __("Implement tactics, mark victories, and enjoy the liberty and health of a smoke-free life") }}</p>
												</div>
										</div>
								</div>
						</div>
				</section>
				<!-- How it works Section End -->

				<!-- Prices Section Start -->
				<section class="container mx-auto lg:max-w-[1168px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">
						<div class="max-w-3xl mx-auto mb-6 md:mb-8 lg:mb-12">
								<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc">
										{{ __("Take the final step to reclaim your health and well-being") }}
								</h1>
						</div>

						<div id="payment-section" class="grid gap-4 mb-4 lg:grid-cols-3 md:grid-cols-2">
								<div v-for="product in this.products" class="relative group" :class="{'active': product == selectedProduct}" @click="selectProduct(product)">
										<div class="p-4 border-2 rounded-lg border-dark-1/20  group-[.active]:!border-teal-1 cursor-pointer">
												<div v-if="product.id === 2" class="absolute inset-x-0 top-0 flex justify-center -translate-y-1/2">
														<div class="text-sm font-bold text-white bg-teal-1 px-4 py-0.5 rounded-lg">
																% {{ __("MOST POPULAR OPTION") }} %
														</div>
												</div>
												<div class="flex w-full gap-4">
														<div class="grow">
																<div class="flex items-center gap-x-3.5 mb-1.5">
																		<span class="w-5 h-5 rounded-full shrink-0 bg-dark-1/10 group-[.active]:hidden"></span>
																		<svg class="group-[.active]:block hidden w-5" viewBox="0 0 25 24" fill="none"
																				 xmlns="http://www.w3.org/2000/svg">
																				<rect x="3.66699" y="3" width="18" height="18" rx="9" fill="#066D95"
																							stroke="#066D95" stroke-width="2"/>
																				<path d="M16.8334 9.5L11 15.3333L8.5 12.8333" stroke="white" stroke-width="1.5"
																							stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>

																		<p class="text-xl font-bold text-dark-1 font-mark-pro ">{{ __(product.name) }}</p>
																</div>
																<del class="mb-1 text-base font-medium text-red-1 font-itc">${{ product.price_including_vat }}</del>
																<p class="text-[40px]/[56px] font-bold text-dark-1 font-itc">${{ product.price_with_discount }}</p>
														</div>
														<div class="grow max-w-[100px]">
																<img src="/assets/images/Book.png" alt="" class="w-full">
														</div>
												</div>
												<p class="mt-1 text-sm text-center text-dark-1/80 font-mark-pro">{{ __("One-time payment").toUpperCase() }}</p>

												<svg v-if="product.type === 'e_book'" class="absolute top-0 right-0 z-10 translate-x-[30%] -translate-y-[30%]" width="91" height="90"
														 viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_92_1375)">
																<rect x="25.667" y="16" width="40" height="40" rx="20" fill="#CDE2EA"
																			shape-rendering="crispEdges"/>
																<path
																		d="M49.5241 36C49.5241 38.1303 47.7972 39.8572 45.667 39.8572C43.5367 39.8572 41.8098 38.1303 41.8098 36C41.8098 33.8698 43.5367 32.1429 45.667 32.1429C47.7972 32.1429 49.5241 33.8698 49.5241 36ZM49.5241 36L49.5241 37.2857C49.5241 38.7059 50.6754 39.8571 52.0956 39.8571C53.0078 39.8571 53.8092 39.3821 54.2656 38.6658C54.5198 38.2671 54.667 37.7936 54.667 37.2857V36C54.667 31.0294 50.6376 27 45.667 27C40.6964 27 36.667 31.0294 36.667 36C36.667 40.9706 40.6964 45 45.667 45C47.5792 45 49.3521 44.4037 50.8098 43.3868"
																		stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</g>
														<defs>
																<filter id="filter0_d_92_1375" x="0.666992" y="0" width="90" height="90"
																				filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																		<feFlood flood-opacity="0" result="BackgroundImageFix"/>
																		<feColorMatrix in="SourceAlpha" type="matrix"
																									 values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
																		<feOffset dy="9"/>
																		<feGaussianBlur stdDeviation="12.5"/>
																		<feComposite in2="hardAlpha" operator="out"/>
																		<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
																		<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_92_1375"/>
																		<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_92_1375"
																						 result="shape"/>
																</filter>
														</defs>
												</svg>
												<svg v-else-if="product.type === 'audiobook'" class="absolute top-0 right-0 z-10 translate-x-[30%] -translate-y-[30%]" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_70_2033)">
																<rect x="25.333" y="16" width="40" height="40" rx="20" fill="#CDE2EA"
																			shape-rendering="crispEdges"/>
																<g opacity="0.15">
																		<path
																				d="M36.333 38H39.333C40.4376 38 41.333 38.8954 41.333 40V43C41.333 44.1046 40.4376 45 39.333 45H36.333V38Z"
																				fill="#066D95"/>
																		<path
																				d="M54.333 45H51.333C50.2284 45 49.333 44.1046 49.333 43V40C49.333 38.8954 50.2284 38 51.333 38H54.333V45Z"
																				fill="#066D95"/>
																</g>
																<path
																		d="M36.333 38H39.333C40.4376 38 41.333 38.8954 41.333 40V43C41.333 44.1046 40.4376 45 39.333 45H36.333V38ZM36.333 38V36C36.333 31.0294 40.3624 27 45.333 27C50.3036 27 54.333 31.0294 54.333 36V38M54.333 38H51.333C50.2284 38 49.333 38.8954 49.333 40V43C49.333 44.1046 50.2284 45 51.333 45H54.333V38Z"
																		stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</g>
														<defs>
																<filter id="filter0_d_70_2033" x="0.333008" y="0" width="90" height="90"
																				filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																		<feFlood flood-opacity="0" result="BackgroundImageFix"/>
																		<feColorMatrix in="SourceAlpha" type="matrix"
																									 values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
																		<feOffset dy="9"/>
																		<feGaussianBlur stdDeviation="12.5"/>
																		<feComposite in2="hardAlpha" operator="out"/>
																		<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
																		<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_70_2033"/>
																		<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_70_2033"
																						 result="shape"/>
																</filter>
														</defs>
												</svg>
												<svg v-else-if="product.type === 'paperback'" class="absolute top-0 right-0 z-10 translate-x-[30%] -translate-y-[30%]" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_92_676)">
																<rect x="25" y="16" width="40" height="40" rx="20" fill="#CDE2EA"
																			shape-rendering="crispEdges"/>
																<path opacity="0.15" d="M38 45H52V33H48C46.8954 33 46 32.1046 46 31V27H38V45Z"
																			fill="#066D95"/>
																<path
																		d="M41 37H47M41 41H49M46 27H38V45H52V33M46 27H47L52 32V33M46 27V31C46 32 47 33 48 33H52"
																		stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</g>
														<defs>
																<filter id="filter0_d_92_676" x="0" y="0" width="90" height="90"
																				filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																		<feFlood flood-opacity="0" result="BackgroundImageFix"/>
																		<feColorMatrix in="SourceAlpha" type="matrix"
																									 values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
																		<feOffset dy="9"/>
																		<feGaussianBlur stdDeviation="12.5"/>
																		<feComposite in2="hardAlpha" operator="out"/>
																		<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
																		<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_92_676"/>
																		<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_92_676"
																						 result="shape"/>
																</filter>
														</defs>
												</svg>
										</div>
								</div>
						</div>

						<div class="max-w-[352px] mx-auto">
								<payment-modal button-name="Yes! I want this!" :quiz="quiz" :selected-product="selectedProduct"/>

								<p class="mb-4 text-xs font-mark-pro text-dark-1/80">
										{{ __("One-time payment") }} • {{ __("24/7 customer service") }} • {{ __("No hidden fees") }}
								</p>
								<img src="/assets/images/gurrented.png" alt="" class="w-full">
						</div>
				</section>
				<!-- Prices Section End -->

				<!-- Carousel Section Start -->
				<section class="overflow-x-hidden">
						<div class="container mx-auto lg:max-w-[1168px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">
								<div class="max-w-3xl mx-auto mb-6 md:mb-8 lg:mb-12">
										<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc">
												{{ __("Join the thousands already celebrating smoke-free lives with OTWO") }}
										</h1>
								</div>

								<div class="mb-6 sm:mb-8 lg:mb-12">
										<div class="relative flex items-center">
												<button class="absolute items-center justify-center hidden w-8 h-8 -translate-x-full bg-white rounded-full lg:flex -left-4 shadow-2">
														<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M4 12.9985L20 12.9985M4 12.9985L10 6.99854M4 12.9985L10 18.9985" stroke="#001A72"
																			stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
												</button>

												<!-- Carousel Items -->
												<div class="flex gap-8 p-8 -m-8 overflow-x-auto">
														<div class="w-full p-4 bg-white sm:w-1/2 lg:w-1/3 min-w-[352px] shadow-2 rounded-2xl">
																<div class="flex items-center gap-2 mb-5">
																		<img src="/assets/images/avater-1.png" alt="" class="object-cover rounded-full w-14 h-14">
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
																						<p class="text-sm font-bold text-dark-1 font-mark-pro">Beth A. Donnell, FL</p>

																						<div class="flex items-center space-x-2">
																								<img src="/assets/images/verify-icon.png" alt="" class="w-4 h-4">
																								<span class="text-sm text-teal-1 font-mark-pro">{{ __("Verified user") }}</span>
																						</div>
																				</div>
																		</div>
																</div>

																<p class="text-base font-mark-pro text-dark-1/80">
																		{{ __("Since I started following this program, I've gained so much energy. I never realized how much smoking was dragging me down. The individual tips and guidance ") }}
																		{{ __("really helped me. I'm 3 months smoke-free now, and I've never felt better") }}
																</p>
														</div>

														<div class="w-full p-4 bg-white sm:w-1/2 lg:w-1/3 min-w-[352px] shadow-2 rounded-2xl">
																<div class="flex items-center gap-2 mb-5">
																		<img src="/assets/images/avater-2.png" alt="" class="object-cover rounded-full w-14 h-14">
																		<div>
																				<div class="flex items-center gap-0.5 mb-1">
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
																						<p class="text-sm font-bold text-dark-1 font-mark-pro">Daniel Hammel, FL</p>

																						<div class="flex items-center space-x-2">
																								<img src="/assets/images/verify-icon.png" alt="" class="w-4 h-4">
																								<span class="text-sm text-teal-1 font-mark-pro">{{ __("Verified user") }}</span>
																						</div>
																				</div>
																		</div>
																</div>

																<p class="text-base font-mark-pro text-dark-1/80">
																		{{ __("OTWO helped me quit, and that's a fact. I've tried multiple times before, but this time it really worked. Now I have extra money and health to enjoy life with my kids") }}
																</p>
														</div>

														<div class="w-full p-4 bg-white sm:w-1/2 lg:w-1/3 min-w-[352px] shadow-2 rounded-2xl">
																<div class="flex items-center gap-2 mb-5">
																		<img src="/assets/images/avater-3.png" alt=""
																				 class="object-cover rounded-full w-14 h-14">
																		<div>
																				<div class="flex items-center gap-0.5 mb-1">
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
																						<p class="text-sm font-bold text-dark-1 font-mark-pro">Betty Polson, NC</p>

																						<div class="flex items-center space-x-2">
																								<img src="/assets/images/verify-icon.png" alt="" class="w-4 h-4">
																								<span class="text-sm text-teal-1 font-mark-pro">Verified user</span>
																						</div>
																				</div>
																		</div>
																</div>

																<p class="text-base font-mark-pro text-dark-1/80">
																		{{ __("I've got my life back, thanks to this program!") }}
																		{{ __("The personalization really makes the difference. I feel better, my family is proud, and I'm finally free from the hold of cigarettes") }}
																</p>
														</div>
												</div>

												<!-- Next -->
												<button
														class="absolute items-center justify-center hidden w-8 h-8 translate-x-full bg-white rounded-full lg:flex -right-4 shadow-2">
														<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M20 12.9985L4 12.9985M20 12.9985L14 18.9985M20 12.9985L14 6.99854" stroke="#001A72"
																			stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
												</button>
										</div>

										<!-- Dot -->
										<div class="flex items-center justify-center gap-1 mt-4">
												<div class="w-2.5 h-2.5 rounded-full bg-teal-1"></div>
												<div class="w-2.5 h-2.5 rounded-full bg-teal-1/20"></div>
										</div>

								</div>

								<div class="max-w-[544px] mx-auto">
										<a href="#" class="block w-full px-3 py-3 mb-2 text-base font-bold text-center text-white rounded-lg font-mark-pro bg-teal-1 cursor-pointer ">
												{{ __("Yes! I want this!") }}
										</a>

										<div class="flex items-start space-x-4 -space-y-1">
												<img src="/assets/images/truck-icon.png" alt="" class="w-12 shrink-0">
												<p class="text-base text-dark-1/80 font-mark-pro">
														{{ __("You'll receive your digital ebook or audiobook in your inbox within -3-5 business days. For those choosing the paperback version, expect it to arrive within 8-14 business days.") }}
												</p>
										</div>
								</div>

						</div>
				</section>
				<!-- Carousel Section End -->

				<!-- FAQ Section Start -->
				<section class="bg-dark-1/[0.04]">
						<div class="container mx-auto md:max-w-3xl px-4 py-8 md:py-12 lg:py-[72px]">
								<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc  mb-6 md:mb-8 lg:mb-12">
										{{ __("We're here to answer more of your questions!") }}
								</h1>

								<div class="space-y-2">
										<custom-accordion text1="What makes OTWO book different from others"
																			text2="OTWO is not just a regular guidebook. It's a personalized tool, designed specifically for you based on your smoking habits, lifestyle, and preferences. This customization ensures that you get the most relevant and effective strategies for quitting smoking."/>

										<custom-accordion text1="How long does it usually take to see results from following the guidebook?"
																			text2="While everyone's journey is different, many of our customers start to notice improvements in their health, mood, and energy levels within just a few weeks of following the guidebook."/>

										<custom-accordion text1="Is this guidebook suitable for heavy smokers?"
																			text2="Absolutely. OTWO is designed to help all smokers, regardless of how much you currently smoke. It includes techniques and strategies that are useful for everyone, from light smokers to those who have been smoking heavily for years."/>

										<custom-accordion text1="Can I use this guidebook alongside other quit smoking aids like nicotine patches or gums?"
																			text2="Yes, you can. The OTWO book complements other quit smoking aids and can enhance their effectiveness. However, we recommend discussing your quit smoking plan with your healthcare provider to ensure it's the best fit for your situation."/>

										<custom-accordion text1="Is my book really personalized?"
																			text2="Yes, each OTWO book is individually tailored to the user. After you complete a comprehensive questionnaire about your smoking habits and lifestyle, we use your responses to create a quit smoking plan that's unique to you."/>

										<custom-accordion text1="What happens after I order?"
																			text2="Once your order is placed, our team will start creating your personalized book right away. You will receive an email confirmation with all the details of your order. If you've chosen the eBook or audio book, it'll be delivered to your inbox within 3-5 business days. For paperback books, you can expect them at your doorstep in 8-14 business days."/>

										<custom-accordion text1="How will I be charged?"
																			text2="You will be charged as soon as you finalize your purchase. All transactions are processed through our secure online payment system, and we accept all major credit cards. You will receive a receipt of your purchase by email."/>
								</div>
						</div>
				</section>
				<!-- FAQ Section End -->
		</SummaryLayout>
</template>

<script>
import SummaryLayout from "@/Layouts/SummaryLayout.vue";
import PaymentModal from "@/Pages/Checkout/PaymentModal.vue";
import CustomAccordion from "@/Pages/CustomAccordion.vue";

export default {
		components: {CustomAccordion, PaymentModal, SummaryLayout},
		data() {
				return {
						selectedProduct: null,
				}
		},
		props: {
				quiz: Object,
				products: Array
		},
		methods: {
				selectProduct(product) {
						this.selectedProduct = product;
				}
		},
		mounted() {
				//by default the middle product is selected
				this.selectedProduct = this.products[1];
		}
}
</script>

<style scoped>

</style>
