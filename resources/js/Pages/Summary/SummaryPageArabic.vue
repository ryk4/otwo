<script setup></script>

<template>
		<SummaryLayout :quiz="quiz">
				<div>
						<section class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 mt-4 md:mt-6 lg:mt-[36px]">
								<div class="grid gap-4 lg:grid-cols-2 md:gap-8">
										<div class="max-w-[544px] mx-auto bg-white shadow-2 flex flex-col h-full rounded-2xl p-4 md:p-6">
												<h5 class="mb-4 font-extrabold text-center text-[20px] font-mark-pro text-dark-1/80">
														{{ __("Your Projected Nicotine Withdrawal Timeline") }}
												</h5>

												<div class="sm:w-full mb-3">
														<svg width="100%" viewBox="0 0 497 167" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M10.0932 157.46L3.01562 160H488.574V8.00131V8L484.493 8.04377L480.413 8.09211L476.333 8.1455L472.253 8.20447L468.172 8.26958L464.092 8.34147L460.012 8.42085L455.931 8.50848L451.851 8.60521L447.771 8.71196L443.69 8.82977L439.61 8.95976L435.53 9.10316L431.449 9.26132L427.369 9.43574L423.289 9.62803L419.208 9.83997L415.128 10.0735L411.048 10.3308L406.967 10.6141L402.887 10.9259L398.807 11.2691L394.726 11.6465L390.646 12.0613L386.566 12.5172L382.485 13.0177L378.405 13.5669L374.325 14.1692L370.244 14.829L366.164 15.5514L362.084 16.3414L358.003 17.2046L353.923 18.1466L349.843 19.1733L345.763 20.291L341.682 21.5057L337.602 22.824L333.522 24.252L329.441 25.7962L325.361 27.4625L321.281 29.2567L317.2 31.1841L313.12 33.2494L309.04 35.4563L304.959 37.8079L300.879 40.306L296.799 42.9509L292.718 45.7416L288.638 48.6755L284.558 51.7481L280.477 54.953L276.397 58.2819L272.317 61.7246L268.236 65.269L264.156 68.9012L260.076 72.6057L255.995 76.3658L251.915 80.1635L247.835 83.9802L243.755 87.7969L239.674 91.5946L235.594 95.3546L231.514 99.0592L227.433 102.691L223.353 106.236L219.273 109.678L215.192 113.007L211.112 116.212L207.032 119.285L202.951 122.219L198.871 125.009L194.791 127.654L190.71 130.152L186.63 132.504L182.55 134.711L178.469 136.776L174.389 138.704L170.309 140.498L166.228 142.164L162.148 143.708L158.068 145.136L153.987 146.455L149.907 147.669L145.827 148.787L142.361 148.562L138.281 149.504L134.2 150.367L130.12 151.157L126.04 151.879L121.96 152.539L117.879 153.142L113.799 153.691L109.719 154.191L105.741 153.814H103.941L99.8603 154.191L95.78 154.534L91.6996 154.846L87.6193 155.13L83.539 155.387L79.4587 155.62L75.3783 155.832L71.298 156.025L67.2177 156.199L63.1374 156.357L59.0571 156.501L54.9768 156.631L50.8964 156.748L46.8161 156.855L42.7358 156.952L38.6555 157.04L34.5751 157.119L30.4948 157.191L26.4145 157.256L22.3342 157.315L18.2539 157.368L14.1735 157.417L10.0932 157.46Z" fill="url(#paint0_linear_2346_26280)"/>
																<path d="M4.01562 159L8.04063 158.961L12.0656 158.917L16.0906 158.869L20.1156 158.816L24.1406 158.758L28.1656 158.693L32.1906 158.622L36.2156 158.543L40.2406 158.456L44.2656 158.36L48.2906 158.254L52.3156 158.137L56.3406 158.007L60.3656 157.865L64.3906 157.708L68.4156 157.535L72.4406 157.344L76.4656 157.133L80.4906 156.901L84.5156 156.646L88.5406 156.364L92.5656 156.055L96.5906 155.714L100.616 155.339L104.641 154.927L108.666 154.474L112.691 153.977L116.716 153.432L120.741 152.834L124.766 152.178L128.791 151.461L132.816 150.676L136.841 149.819L140.866 148.883L144.891 147.864L148.916 146.754L152.941 145.547L156.966 144.238L160.991 142.82L165.016 141.286L169.041 139.631L173.066 137.849L177.091 135.935L181.116 133.884L185.141 131.692L189.166 129.357L193.191 126.876L197.216 124.249L201.241 121.477L205.266 118.563L209.291 115.512L213.316 112.329L217.341 109.023L221.366 105.603L225.391 102.083L229.416 98.4759L233.441 94.7967L237.466 91.0623L241.491 87.2906L245.516 83.5L249.541 79.7094L253.566 75.9377L257.591 72.2033L261.616 68.5241L265.641 64.9167L269.666 61.3966L273.691 57.9774L277.716 54.6713L281.741 51.4883L285.766 48.4368L289.791 45.5229L293.816 42.7512L297.841 40.1244L301.866 37.6435L305.891 35.3079L309.916 33.1161L313.941 31.0649L317.966 29.1507L321.991 27.3688L326.016 25.7139L330.041 24.1803L334.066 22.762L338.091 21.4527L342.116 20.2463L346.141 19.1363L350.166 18.1166L354.191 17.181L358.216 16.3237L362.241 15.5391L366.266 14.8217L370.291 14.1663L374.316 13.5682L378.341 13.0227L382.366 12.5256L386.391 12.0729L390.416 11.6609L394.441 11.2861L398.466 10.9453L402.491 10.6356L406.516 10.3542L410.541 10.0987L414.566 9.86674L418.591 9.65625L422.616 9.46527L426.641 9.29205L430.666 9.13497L434.691 8.99255L438.716 8.86345L442.741 8.74645L446.766 8.64042L450.791 8.54436L454.816 8.45733L458.841 8.37849L462.866 8.30709L466.891 8.24242L470.916 8.18386L474.941 8.13084L478.966 8.08282L482.991 8.03935L487.016 8" stroke="#5BBB93" stroke-width="3"/>
																<rect x="480.727" width="16" height="16" rx="8" fill="#7DE0C4"/>
																<path d="M483.727 8C483.727 10.7614 485.965 13 488.727 13C491.488 13 493.727 10.7614 493.727 8C493.727 5.23858 491.488 3 488.727 3C485.965 3 483.727 5.23858 483.727 8Z" fill="#5BBA92"/>
																<rect y="151" width="16" height="16" rx="8" fill="#7DE0C4"/>
																<path d="M13 159C13 161.761 10.7614 164 8 164C5.23858 164 3 161.761 3 159C3 156.239 5.23858 154 8 154C10.7614 154 13 156.239 13 159Z" fill="#5BBA92"/>
																<defs>
																		<linearGradient id="paint0_linear_2346_26280" x1="185.668" y1="160" x2="488.168" y2="13" gradientUnits="userSpaceOnUse">
																				<stop stop-color="#BAFFB7"/>
																				<stop offset="0.196545" stop-color="#C1FFC1"/>
																				<stop offset="0.439562" stop-color="#FFF2BE"/>
																				<stop offset="0.643026" stop-color="#FFD0E3"/>
																				<stop offset="0.820635" stop-color="#FFB9C2"/>
																		</linearGradient>
																</defs>
														</svg>


														<div class="flex flex-row-reverse justify-between text-[12px] text-gray-500">
																<div v-for="graphDate in graphDates">{{ graphDate }}</div>
														</div>
												</div>

												<div class="bg-blue-200/40 rounded-lg p-4">
														<p class="text-base text-dark-1/80 font-mark-pro text-right">
																{{ __("If You will follow our step-by-step quit smoking plan You’ll get rid of tobacco addiction in 5 days") }}
														</p>
												</div>
										</div>
										<div class="w-full max-w-[544px] mx-auto flex flex-col h-full sm:p-6 mb-8 lg:mb-12 rounded-lg">
												<h5 class="mb-4 font-medium text-right text-[30px] font-itc text-dark-1 sm:mx-3">
														<span>{{ __("Based On Your Smoking Habits, You Can Quit Smoking In Just") }}</span> <span class="font-semibold text-teal-2">{{ __("5 Days") }}</span>.
												</h5>
												<div class="font-mark-pro text-right text-[18px] leading-8 font-normal sm:mx-3">
														{{ __("We've Evaluated Your Answers And Prepared A Summary Out of") }} <span class="text-teal-2 font-semibold">2000+</span> {{ __("Responses Similar To Yours") }}
												</div>

										</div>
								</div>
						</section>
						<!-- Heros Section Start -->
						<section class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 mt-4 md:mt-6 lg:mt-[36px]">
								<div class="grid gap-4 lg:grid-cols-2 md:gap-8">
										<div class="bg-white w-full max-w-[544px] mx-auto shadow-2 flex flex-col h-full p-6 mb-8 lg:mb-12 rounded-2xl">
												<h5 class="mb-4 font-extrabold text-center text-xl/9 font-mark-pro text-dark-1/80">
														{{ __("Your nicotine dependence test (HSI) score") }}
												</h5>
												<h6 class="mb-1 text-base font-bold text-center font-mark-pro">{{ __("Score") }}: <span class="text-red-1">{{ nicotineDependenceScore }}/6
														({{ __(nicotineDependenceLevel) }})</span>
												</h6>
												<p class="mb-4 text-sm text-center text-dark-1/80 font-mark-pro">{{ __("The lower the better") }}</p>
												<img :src="'/assets/images/summary/nicotine-dependence-'+ nicotineDependenceScore +'.png'" alt="" class="max-w-[326px] w-full mx-auto mb-4">

												<div class="bg-dark-1/[0.04] rounded-lg p-4 mt-auto">
														<p class="text-base text-right text-dark-1/80 font-mark-pro">
																{{ __("While your HSI score might seem daunting, don't lose hope. We'll guide you through effective strategies to reduce your nicotine dependency") }}
														</p>
												</div>
										</div>

										<div class="max-w-[544px] mx-auto bg-white shadow-2 flex flex-col h-full rounded-2xl p-4 md:p-6">
												<h5 class="mb-4 font-extrabold text-center text-xl font-mark-pro text-dark-1 leading-9">
														{{ __("Increase your lung capacity by :percentage% in just the first month of quitting", {percentage: lungCapacityPercentage}) }}
												</h5>

												<div class="hidden sm:flex items-center font-semibold mb-7">
														<div class="bg-teal-2/20 text-teal-2 py-3 px-2 rounded-lg w-full text-center mx-3">{{ __("After Quitting") }}</div>
														<img :src="'/assets/images/summary/lungs-arabic.png'" alt="" class="w-[180px] mx-auto sm:mb-12">
														<div class="bg-red-200 text-gray-700 py-3 px-2 rounded-lg w-full text-center mx-3">{{ __("Now") }}</div>
												</div>
												<div class="sm:hidden  items-center font-semibold mb-7">
														<img :src="'/assets/images/summary/lungs-arabic.png'" alt="" class="w-[180px] mx-auto sm:mb-12">
														<div class="flex justify-between mt-2">
																<div class="bg-teal-2/20 text-teal-2 py-3 px-3 rounded-lg text-center">{{ __("After Quitting") }}</div>
																<div class="bg-red-200 text-gray-700 py-3 px-12 rounded-lg text-center">{{ __("Now") }}</div>
														</div>
												</div>

												<div class="bg-dark-1/[0.04] text-right rounded-lg p-4">
														<p class="text-base text-dark-1/80 font-mark-pro">{{ __("Quitting will help to increase your lung capacity by") }}
																<span class="font-bold text-red-1">{{ lungCapacityPercentage }}%,</span> {{ __("aiding in better sleep quality and enhanced concentration during your work or studies") }}
														</p>
												</div>
										</div>
								</div>
						</section>
						<!-- Heros Section End -->

						<!-- Price Section Start -->
						<section class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 mt-6 md:mt-8 lg:mt-[30px]">
								<div class="max-w-3xl mx-auto">
										<h2 class="text-2xl md:text-[28px]/9 lg:text-[32px]/[44px] font-medium text-dark-1 text-center font-itc mb-4 lg:mb-8">
												{{ __("Based On Your Smoking Habit You Can Save") }}
										</h2>
								</div>


								<div class="grid w-full gap-4 mb-8 lg:grid-cols-3 md:grid-cols-2 xl:gap-8">
										<div class="p-6 bg-white shadow-2 flex flex-col items-end">
												<img src="/assets/images/coin-1.png" alt="" class="h-[72px] mb-4">
												<h1 class="text-[40px]/[56px] font-itc text-teal-1 mb-1">{{ __(averageSpendingCost.inOneMonth) }}</h1>
												<p class="text-xl font-medium text-dark-1/80 font-mark-pro">{{ __("in one month") }}</p>
										</div>
										<div class="p-6 bg-white shadow-2 flex flex-col items-end">
												<img src="/assets/images/coin-2.png" alt="" class="h-[72px] mb-4">
												<h1 class="text-[40px]/[56px] font-itc text-teal-1 mb-1">{{ __(averageSpendingCost.inOneYear) }}</h1>
												<p class="text-xl font-medium text-dark-1/80 font-mark-pro">{{ __("in one year") }}</p>
										</div>
										<div class="p-6 bg-white shadow-2 flex flex-col items-end">
												<img src="/assets/images/coin-3.png" alt="" class="h-[72px] mb-4">
												<h1 class="text-[40px]/[56px] font-itc text-teal-1 mb-1">{{ __(averageSpendingCost.inFiveYears) }}</h1>
												<p class="text-xl font-medium text-dark-1/80 font-mark-pro">{{ __("in five years") }}</p>
										</div>
								</div>
						</section>
						<!-- Price Section End -->

						<!-- Features Section Start -->
						<section class="mt-5 md:mt-12 lg:mt-[52px] bg-dark-1/[0.04]">
								<div class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">
										<div class="max-w-3xl mx-auto">
												<h2 class="text-2xl md:text-[28px]/9 lg:text-[32px]/[44px] font-medium text-dark-1 text-center font-itc mb-4">
														{{ __("Start Your Recovery Immediately After Your Last :value", {value: __(quizType.text0)}) }}
												</h2>
										</div>

										<div class="flex flex-col items-center lg:flex-row lg:items-stretch lg:justify-between gap-y-4 gap-x-8">
												<div v-if="checkIfAnswerEqualsTo(14,0)" class="flex flex-col items-center lg:max-w-[214px] w-full">
														<div class="flex items-center justify-center rounded-2xl bg-teal-2/10 mb-4 w-[100px] h-[100px] shrink-0">
																<img src="/assets/images/blood-drop-male.png" alt="" class="w-[72px]">
														</div>
														<h6 class="mb-1 text-base font-bold text-center text-dark-1">{{ __("After 1 month") }}</h6>
														<p class="text-base text-center text-dark-1/80">
																{{ __("Blood flow and erectile function improve") }}
														</p>
												</div>
												<div v-else class="flex flex-col items-center lg:max-w-[214px] w-full">
														<div class="flex items-center justify-center rounded-2xl bg-teal-2/10 mb-4 w-[100px] h-[100px] shrink-0">
																<img src="/assets/images/female-blood-drop.png" alt="" class="w-[72px]">
														</div>
														<h6 class="mb-1 text-base font-bold text-center text-dark-1">{{ __("After 1 month") }}</h6>
														<p class="text-base text-center text-dark-1/80">{{ __("Your skin starts to glow, circulation improves") }}</p>
												</div>
												<div class="items-center hidden lg:flex">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M15 20L7 12L15 4" stroke="#009F91" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
												</div>
												<div class="flex flex-col items-center lg:max-w-[214px] w-full">
														<div
																class="flex items-center justify-center rounded-2xl bg-teal-2/10 mb-4 w-[100px] h-[100px] shrink-0">
																<img src="/assets/images/icon-3.png" alt="" class="w-[72px]">
														</div>
														<h6 class="mb-1 text-base font-bold text-center text-dark-1">{{ __("After 72 hours") }}</h6>
														<p class="text-base text-center text-dark-1/80">
																{{ __("Your breathing becomes easier") }}
														</p>
												</div>
												<div class="items-center hidden lg:flex">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M15 20L7 12L15 4" stroke="#009F91" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
												</div>
												<div class="flex flex-col items-center lg:max-w-[214px] w-full">
														<div class="flex items-center justify-center rounded-2xl bg-teal-2/10 mb-4 w-[100px] h-[100px] shrink-0">
																<img src="/assets/images/icon-2.png" alt="" class="w-[72px]">
														</div>
														<h6 class="mb-1 text-base font-bold text-center text-dark-1">{{ __("After 48 hours") }}</h6>
														<p class="text-base text-center text-dark-1/80">
																{{ __("Your sense of smell and taste improve") }}
														</p>
												</div>
												<div class="items-center hidden lg:flex">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M15 20L7 12L15 4" stroke="#009F91" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
												</div>
												<div class="flex flex-col items-center lg:max-w-[214px] w-full">
														<div class="flex items-center justify-center rounded-2xl bg-teal-2/10 mb-4 w-[100px] h-[100px] shrink-0">
																<img src="/assets/images/blood-drop-female.png" alt="" class="w-[72px]">
														</div>
														<h6 class="mb-1 text-base font-bold text-center text-dark-1">{{ __("After 20 minutes") }}</h6>
														<p class="text-base text-center text-dark-1/80">
																{{ __("Your blood pressure and heart rate return to normal") }}
														</p>
												</div>

										</div>
								</div>
						</section>
						<!-- Features Section End -->

						<!-- Feature Section Start -->
						<section class="bg-white">
								<div class="container mx-auto lg:max-w-[1168px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">

										<div class="max-w-3xl mx-auto mb-4 md:mb-6 lg:mb-10">
												<div class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc">
														<div class="text-red-1">{{ __("It's Not a One Size Fits All Solution!") }}</div>
														<div class="text-[20px] font-normal">{{ __("It's a Personalized Evidence-Based Guide To a :value-Free Life", {value: __(quizType.text0)}) }}</div>
												</div>
										</div>
										<div class="flex justify-center gap-4 mb-4 md:gap-8 xl:gap-16 md:mb-6 lg:mb-10">
												<div class=" text-center font-mark-pro">
														<p class="mb-2 text-xl text-dark-1/80">
																<span class="text-teal-1 font-extrabold">{{ __("What’s Inside Your Custom Plan:") }}</span>
														</p>
														<div class="mb-4 mt-6 grid grid-cols-1 sm:grid-cols-3 space-y-3 sm:space-y-0 sm:space-x-4 text-gray-700">
																<div class="text-center bg-teal-2/15 rounded-lg p-4">
																		<div class="mb-2 flex justify-center">
																				<img src="/assets/svg/summary/custom-plan1.svg"/>
																		</div>
																		<div class="text-xl font-extrabold my-3">
																				{{ __("30-Day Daily Action Plan") }}
																		</div>
																		<div class="">
																				{{ __("Each day is mapped out with a simple, actionable step designed specifically for your smoking habits. These steps work together to help you break free from nicotine dependency.") }}
																		</div>
																</div>

																<div class="text-center bg-teal-2/15 rounded-lg p-4">
																		<div class="mb-2 flex justify-center">
																				<img src="/assets/svg/summary/custom-plan2.svg"/>
																		</div>
																		<div class="text-xl font-extrabold my-3">
																				{{ __("Master Nicotine Dependency (Physical & Psychological)") }}
																		</div>
																		<div class="">
																				{{
																						__("Understand your addiction like never before! Our personalized insights reveal what drives your cravings and provide you with practical tools to eliminate both the physical and emotional ties to smoking.")
																				}}
																		</div>
																</div>

																<div class="text-center bg-teal-2/15 rounded-lg p-4">
																		<div class="mb-2 flex justify-center">
																				<img src="/assets/svg/summary/custom-plan3.svg"/>
																		</div>
																		<div class="text-xl font-extrabold my-3">
																				{{ __("Personalized Quit Smoking Strategies") }}
																		</div>
																		<div class="">
																				{{ __("This easy-to-follow plan ensures you’ll take the fastest and most sustainable route to a life free from cigarettes.") }}
																		</div>
																</div>
														</div>
														<div class="mb-4 mt-6 grid grid-cols-1 sm:grid-cols-3 space-y-3 sm:space-y-0 sm:space-x-4 text-gray-700">
																<div class="text-center bg-teal-2/15 rounded-lg p-4">
																		<div class="mb-2 flex justify-center">
																				<img src="/assets/svg/summary/custom-plan4.svg"/>
																		</div>
																		<div class="text-xl font-extrabold my-3">
																				{{ __("Crush Cravings for Good") }}
																		</div>
																		<div class="">
																				{{ __("Learn proven, practical techniques to resist those pesky tobacco cravings. With strategies tailored to your triggers, you’ll feel confident saying NO when temptation strikes.") }}
																		</div>
																</div>

																<div class="text-center bg-teal-2/15 rounded-lg p-4">
																		<div class="mb-2 flex justify-center">
																				<img src="/assets/svg/summary/custom-plan5.svg"/>
																		</div>
																		<div class="text-xl font-extrabold my-3">
																				{{ __("Healthy Alternatives") }}
																		</div>
																		<div class="">
																				{{ __("Replace harmful habits with healthier ones! Our plan includes customized activities and exercises designed to fill the void left by smoking, keeping you energized and motivated.") }}
																		</div>
																</div>

																<div class="text-center bg-teal-2/15 rounded-lg p-4">
																		<div class="mb-2 flex justify-center">
																				<img src="/assets/svg/summary/custom-plan6.svg"/>
																		</div>
																		<div class="text-xl font-extrabold my-3">
																				{{ __("How to Maintain a Smoke-Free Life:") }}
																		</div>
																		<div class="">
																				{{ __("This isn’t just about quitting—it’s about staying quit. You’ll receive powerful, long-term strategies to prevent relapse and maintain your new smoke-free identity with ease.") }}
																		</div>
																</div>
														</div>
												</div>

										</div>

										<div class="max-w-[352px] mx-auto">
												<a href="#prices-section" class="block w-full px-3 py-3 mb-2 text-base font-bold text-center text-white rounded-lg font-mark-pro bg-teal-1">
														{{ __("Yes! I want this!") }}
												</a>
										</div>

										<div class="mt-6 sm:mt-12">
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
								</div>
						</section>
						<!-- Feature Section End -->

						<!-- OUR promise section START -->

						<section class="mt-8 md:mt-12 lg:mt-[72px] bg-dark-1/[0.04]">
								<div class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">
										<div class="grid gap-6 lg:grid-cols-2 md:gap-10 lg:gap-16">
												<div class="">
														<img src="/assets/images/img-23.png" alt="" class="w-full rounded-[30px] mb-4">

														<div class="text-center sm:text-right bg-gray-200 p-4 rounded-xl">
																<h6 class="mb-1 text-base font-extrabold font-mark-pro text-dark-1/80">{{ __("Dr. Richard G. Willey") }}</h6>
																<p class="text-base text-dark-1/80 font-mark-pro">
																		{{ __("Clinical Psychologist with a focus on Cognitive Behavioral Therapy for Smoking Cessation") }}
																</p>
														</div>
														<div class="text-center mt-5 block sm:hidden">
																<a href="#prices-section" class="block w-full px-6 py-3 mx-auto text-base font-extrabold text-center text-white rounded-lg font-mark-pro bg-teal-1">
																		<span>{{ __("GET YOUR PLAN") }}</span>
																</a>
														</div>
												</div>

												<div class="">
														<h1 class="text-[40px]/[56px] font-bold text-dark-1 font-itc mb-2 text-center sm:text-right">{{ __("Our promise") }}</h1>
														<div class="mb-0 font-light text-[17px] leading-7 text-dark-1/80 lg:mb-0 mark-pro text-right">
																<p class="mb-4 font-bold">{{ __("I understand the profound journey you're embarking on.") }}</p>
																<p class="mb-4"> {{ __("Quitting :value is no small feat, and I want to applaud your courage and determination.", {value: __(quizType.text2)}) }}</p>
																<p class="mb-4">{{ __("This is not your average self-help program. With OTWO, you gain an understanding partner in your journey towards a :value life.", {value: __(quizType.text3)}) }}</p>
																<p class="mb-4">{{ __("The plan provides personalized strategies, rooted in science and proven effective.") }} {{ __("It's not about one-size-fits-all solutions, but methods that resonate with you.") }}</p>
																<p class="mb-4">
																		{{ __("The first step might be challenging, but I promise you, it's worth it.") }}
																		<span class="font-bold">{{ __("Your journey to a healthier life starts now.") }}</span>
																</p>
														</div>
														<div class="text-center mt-6 font-mark-pro">
																<a href="#prices-section" class="hidden sm:block w-full px-6 py-4 mx-auto text-base font-extrabold text-center text-white rounded-lg font-mark-pro bg-teal-1">
																		<span>{{ __("GET YOUR QUIT PLAN") }}</span>
																</a>
														</div>
												</div>

										</div>
								</div>
						</section>

						<!-- OUR promise section END -->

						<!-- Carousel Section Start -->
						<section class="overflow-x-hidden">
								<div class="container mx-auto lg:max-w-[1168px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px]">
										<div class="max-w-3xl mx-auto mb-6 md:mb-8 lg:mb-12">
												<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc">
														{{ __("Join The Thousands Already Celebrating :value-Free Lives With OTWO", {value: __(quizType.text0)}) }}
												</h1>
										</div>

										<div class="mb-3sm:mb-4 lg:mb-6">
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

										<div class="max-w-[544px] mx-auto pt-6">
												<a href="#prices-section" class="block w-full px-3 py-3 mb-2 text-base font-bold text-center text-white rounded-lg font-mark-pro bg-teal-1 cursor-pointer uppercase">
														{{ __("Start your :value-free life now!", {value: __(quizType.text0)}) }}
												</a>
										</div>

								</div>
						</section>
						<!-- Carousel Section End -->

						<!-- Price section 2 Start -->
						<section id="prices-section" class="container mx-auto lg:max-w-[1168px] px-4 lg:px-6 py-4 md:py-6 lg:py-[36x]">
								<div class="max-w-3xl mx-auto mb-6 md:mb-8 lg:mb-12">
										<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc">
												{{ __("Take The Final Step To Reclaim Your Health And Well-Being") }}
										</h1>
								</div>

								<div id="payment-section" class="gap-4 mb-4 sm:flex sm:justify-center">
										<div v-for="product in products" class="relative group sm:w-[420px] mb-3 sm:mb-0" :class="{'active': product == selectedProduct}" @click="selectProduct(product)">
												<div class="p-4 border-2 rounded-lg border-dark-1/20 group-[.active]:!border-red-1 cursor-pointer">
														<div class="absolute inset-x-0 top-0 flex justify-center -translate-y-1/2">
																<div class="text-sm font-extrabold text-white bg-red-1 px-4 py-0.5 rounded-lg">
																		{{ product.discount_percentage }}% {{ __("OFF FOR A LIMITED TIME") }}
																</div>
														</div>
														<div class="flex w-full mt-2">
																<div class="grow max-w-[200px] min-w-[150px]">
																		<img src="/assets/images/book-5.png" alt="" class="w-full">
																</div>
																<div class="text-teal-1">
																		<div class="font-extrabold text-center uppercase">{{ __("Accessible on all devices") }}</div>
																		<div class="grid grid-cols-2 mt-3 font-semibold uppercase text-center">
																				<div class="">
																						<div class="flex justify-center">
																								<img src="/assets/svg/summary/device1.svg"/>
																						</div>
																						<div class="mt-1">{{ __("PC") }}</div>
																				</div>
																				<div>
																						<div class="flex justify-center">
																								<img src="/assets/svg/summary/device2.svg"/>
																						</div>
																						<div class="mt-1">{{ __("Mobile") }}</div>
																				</div>
																				<div class="mt-2">
																						<div class="flex justify-center">
																								<img src="/assets/svg/summary/device3.svg"/>
																						</div>
																						<div class="mt-1">{{ __("Laptop") }}</div>
																				</div>
																				<div class="mt-2">
																						<div class="flex justify-center">
																								<img src="/assets/svg/summary/device4.svg"/>
																						</div>
																						<div class="mt-1">{{ __("Tablet") }}</div>
																				</div>
																		</div>
																</div>
														</div>
														<div class="text-2xl font-extrabold text-dark-1 uppercase leading-5 font-mark-pr mt-2 text-right">{{ __(product.name) }}</div>
														<div class="text-teal-2 bg-teal-2/20 mt-2 px-3 py-2 rounded-xl text-right">
																<span class="font-extrabold uppercase">+ {{ __("Free bonus") }}:</span> <span class="font-medium">{{ __("7-Day Lung Health Boosting Exercises") }}</span>
														</div>
														<div class="font-itc mt-3 flex flex-row-reverse">
																<div class="text-[40px]/[56px] font-bold text-dark-1 ">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_with_discount_readable }}</div>
																<del class="text-lg font-medium text-red-1 ms-2">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_including_vat }}</del>
														</div>
														<div class="flex justify-end text-md font-mark-pro font-medium text-gray-800 mt-2">
																<img src="/assets/svg/summary/price-checkbox.svg"/>
																<div class="ms-2">
																		{{ __("Actionable Daily Steps") }}
																</div>
														</div>
														<div class="flex justify-end text-md font-mark-pro font-medium text-gray-800 mt-1">
																<img src="/assets/svg/summary/price-checkbox.svg"/>
																<div class="ms-2">
																		{{ __("Practical Craving Solutions") }}
																</div>
														</div>
														<div class="flex justify-end text-md font-mark-pro font-medium text-gray-800 mt-1">
																<img src="/assets/svg/summary/price-checkbox.svg"/>
																<div class="ms-2">
																		{{ __("Positive Habit Replacements") }}
																</div>
														</div>
														<div class="flex justify-end text-md font-mark-pro font-medium text-gray-800 mt-1">
																<img src="/assets/svg/summary/price-checkbox.svg"/>
																<div class="ms-2">
																		{{ __("100% Money Back Guarantee") }}
																</div>
														</div>
														<div class="mt-4 flex flex-row-reverse text-right">
																<img src="/assets/images/summary/img.png" class="w-[70px] h-[70px]"/>
																<div class="ms-3 text-dark-1/80 sm:me-5">
																		<div class="font-extrabold">{{ __("Awarded as #1 product") }}</div>
																		<div class="font-medium">{{ __("in Dependency Solutions category by Agelesspulse") }}</div>
																</div>
														</div>

														<p class="mt-4 text-md text-center text-dark-1 font-mark-pro font-medium uppercase">{{ __("One-time payment") }}</p>

												</div>
										</div>
								</div>

								<div class="max-w-[352px] mx-auto mb-5">
										<payment-modal button-name="I AM READY TO QUIT!" :quiz="quiz" :selected-product="selectedProduct"/>

										<p class="mb-4 text-xs font-mark-pro text-dark-1/80">
												{{ __("One-time payment") }} • {{ __("24/7 customer service") }} • {{ __("No hidden fees") }}
										</p>
										<img src="/assets/images/gurrented.png" alt="" class="w-full">
								</div>
						</section>
						<!-- Price section 2 End -->

						<!-- FAQ Section Start -->
						<section class="bg-dark-1/[0.04]">
								<div class="container mx-auto md:max-w-3xl px-4 py-8 md:py-12 lg:py-[32px]">
										<h1 class="text-[28px]/9 sm:text-3xl md:text-4xl lg:text-[40px]/[56px] font-bold text-dark-1 text-center font-itc  mb-6 md:mb-8 lg:mb-12">
												{{ __("We're here to answer more of your questions!") }}
										</h1>

										<div class="space-y-2">
												<custom-accordion text1="What makes OTWO plan different from others?"
																					text2="OTWO is not just a regular program. It's a personalized tool, designed specifically for you based on your smoking habits, lifestyle, and preferences. This customization ensures that you get the most relevant and effective strategies for quitting smoking."/>

												<custom-accordion text1="How long does it usually take to see results from following the plan?"
																					text2="While everyone's journey is different, many of our customers start to notice improvements in their health, mood, and energy levels within just a few weeks of following the program."/>

												<custom-accordion text1="Is this plan suitable for heavy smokers?"
																					text2="Absolutely. OTWO is designed to help all smokers, regardless of how much you currently smoke. It includes techniques and strategies that are useful for everyone, from light smokers to those who have been smoking heavily for years."/>

												<custom-accordion text1="Can I use this plan alongside other quit smoking aids like nicotine patches or gums?"
																					text2="Yes, you can. The OTWO program complements other quit smoking aids and can enhance their effectiveness. However, we recommend discussing your quit smoking plan with your healthcare provider to ensure it's the best fit for your situation."/>

												<custom-accordion text1="Is my plan really personalized?"
																					text2="Yes, each OTWO plan is individually tailored to the user. After you complete a comprehensive questionnaire about your smoking habits and lifestyle, we use your responses to create a quit smoking plan that's unique to you."/>

												<custom-accordion text1="What happens after I order?"
																					text2="Once your order is placed, You will receive an email confirmation with all the details of your order. You will be redirected to designated user area where you will be able to download your plan."/>

												<custom-accordion text1="How will I be charged?"
																					text2="You will be charged as soon as you finalize your purchase. All transactions are processed through our secure online payment system, and we accept all major credit cards. You will receive a receipt of your purchase by email."/>
										</div>

										<div class="text-center mt-8">
												<a href="#prices-section" class="max-w-[352px] w-full text-center mx-auto text-base font-bold text-white font-mark-pro bg-teal-1 rounded-lg py-3 px-6 block uppercase">
														<span>{{ __("GET YOUR PLAN") }}</span>!
												</a>
										</div>
								</div>

						</section>
						<!-- FAQ Section End -->


				</div>
		</SummaryLayout>
</template>
<script>
import SummaryLayout from "@/Layouts/SummaryLayout.vue";
import CustomAccordion from "@/Pages/CustomAccordion.vue";
import PaymentModal from "@/Pages/Checkout/PaymentModal.vue";
import {usePage} from "@inertiajs/vue3";

export default {
		components: {CustomAccordion, PaymentModal, SummaryLayout},
		props: {
				quiz: Object,
				products: Array,
				bookCoverUrl: String,
				graphDates: Array
		},
		data() {
				return {
						localeSetting: null,
						nicotineDependenceScore: 0,
						nicotineDependenceLevel: null,
						averageSpendingCost: {
								inOneMonth: null,
								inOneYear: null,
								inFiveYears: null
						},
						lungCapacityPercentage: null,
						quizType: {
								type: null,
								text1: null,
								text2: null,
								text3: null,
						},
						selectedProduct: null,
						testimonials: [
								{
										name: 'Ethan, 34yo',
										comment: "I picked up smoking in high school, and it stuck with me for years. This plan helped me quit cigarettes in just 2 months.",
										photo: '/assets/images/testimonials/ethan.png'
								},
								{
										name: 'Liam, 28yo',
										comment: "Since I started following this program, I've gained so much energy. I never realized how much smoking was dragging me down. The individual tips and guidance really helped me. I'm 3 months smoke-free now, and I've never felt better.",
										photo: '/assets/images/testimonials/liam.png'
								},
								{
										name: 'Brenda, 38yo',
										comment: "I am truly amazed by the progress I've made using this guide. I'm more active now, and my doctor is thrilled with my improved health. Best choice I've made.",
										photo: '/assets/images/testimonials/brenda.png'
								},
								{
										name: 'Robert, 37yo',
										comment: "OTWO helped me quit, and that's a fact. I've tried multiple times before, but this time it really worked. Now I have extra money and health to enjoy life with my kids.",
										photo: '/assets/images/testimonials/robert.png'
								},
								{
										name: 'Dave, 42yo',
										comment: "I'm really happy I stuck with this plan. 3 months smoke-free now. It's so easy to follow and really works long-term!",
										photo: '/assets/images/testimonials/dave.png'
								},
								{
										name: 'Betty, 41yo',
										comment: "I've got my life back, thanks to this program! The personalization really makes the difference. I feel better, my family is proud, and I'm finally free from the hold of cigarettes.",
										photo: '/assets/images/testimonials/betty.png'
								}
						]
				}
		},
		//TODO if possible move reusable methods to service JS file or something
		methods: {
				checkIfAnswerEqualsTo(answerId, value) {
						return this.quiz.selections[answerId - 1].answer.includes(value);
				},
				calculateNicotineDependenceScore() {
						switch (this.quiz.selections[1].answer[0]) {
								case 0:
								case 1:
										this.nicotineDependenceScore += 1;
										break;
								case 2:
										this.nicotineDependenceScore += 2;
										break;
								case 3:
										this.nicotineDependenceScore += 3;
										break;
						}

						switch (this.quiz.selections[2].answer[0]) {
								case 0:
										this.nicotineDependenceScore += 3;
										break;
								case 1:
										this.nicotineDependenceScore += 2;
										break;
								case 2:
										this.nicotineDependenceScore += 1;
										break;
								case 3:
										this.nicotineDependenceScore += 0;
										break;
						}

						if (this.nicotineDependenceScore >= 0 && this.nicotineDependenceScore <= 2) {
								this.nicotineDependenceLevel = 'Low';
						} else if (this.nicotineDependenceScore >= 2 && this.nicotineDependenceScore <= 4) {
								this.nicotineDependenceLevel = 'Medium';
						} else {
								this.nicotineDependenceLevel = 'High';
						}
				},
				calculateAverageSpendingCost() {
						switch (this.quiz.selections[16].answer[0]) {
								case 0:
										this.averageSpendingCost.inOneMonth = '$20-$50';
										this.averageSpendingCost.inOneYear = '$600';
										this.averageSpendingCost.inFiveYears = '$3000';
										break;
								case 1:
										this.averageSpendingCost.inOneMonth = '$50-$150';
										this.averageSpendingCost.inOneYear = '$1800';
										this.averageSpendingCost.inFiveYears = '$9000';
										break;
								case 2:
										this.averageSpendingCost.inOneMonth = '$150-$300';
										this.averageSpendingCost.inOneYear = '$3000';
										this.averageSpendingCost.inFiveYears = '$15000';
										break;
								case 3:
										this.averageSpendingCost.inOneMonth = '$300-$350';
										this.averageSpendingCost.inOneYear = '$3600';
										this.averageSpendingCost.inFiveYears = '$18000';
										break;
								case 4:
										this.averageSpendingCost.inOneMonth = '$50-$150';
										this.averageSpendingCost.inOneYear = '$1800';
										this.averageSpendingCost.inFiveYears = '$9000';
										break;
						}
				},
				calculateLungCapacityPercentage() {
						switch (this.quiz.selections[0].answer[0]) {
								case 0:
										this.lungCapacityPercentage = 20;
										break;
								case 1:
										this.lungCapacityPercentage = 40;
										break;
								case 2:
										this.lungCapacityPercentage = 60;
										break;
								case 3:
										this.lungCapacityPercentage = 80;
										break;
						}
				},
				determineQuizTypeText() {
						switch (this.quiz.type) {
								case 'vaping':
										this.quizType.text0 = 'vape';
										this.quizType.text1 = 'vape';
										this.quizType.text2 = 'vaping';
										this.quizType.text3 = 'vape-free';
										break;
								default:
										this.quizType.text0 = 'smoke';
										this.quizType.text1 = 'smoke';
										this.quizType.text2 = 'smoking';
										this.quizType.text3 = 'smoke-free';
										break;
						}
				},
				selectProduct(product) {
						this.selectedProduct = product;
				},
				getNextMonth() {
						const currentDate = new Date();
						const nextMonthDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate() + 5);
						const options = {month: 'long', day: 'numeric'};

						return nextMonthDate.toLocaleString('en-US', options);
				}
		},
		mounted() {
				this.determineQuizTypeText();
				this.calculateNicotineDependenceScore();
				this.calculateAverageSpendingCost();
				this.calculateLungCapacityPercentage();

				setTimeout(() => this.selectedProduct = this.products[0], 300);
		},
		created() {
				this.localeSetting = usePage().props.locale_setting;

				setTimeout(() => this.selectedProduct = this.products[0], 300);
		}
}
</script>

<style scoped>

</style>
