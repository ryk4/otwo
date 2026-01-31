<script setup></script>

<template>
		<SummaryLayout :quiz="quiz">
				<div>
						<section class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 mt-4 md:mt-6 lg:mt-[36px]">
								<div class="grid gap-4 lg:grid-cols-2 md:gap-8">

										<div class="w-full max-w-[544px] mx-auto flex flex-col h-full sm:p-6 mb-8 lg:mb-12 rounded-lg">
												<h5 class="mb-4 font-medium text-left text-[30px] font-itc text-dark-1 sm:mx-3">
														<span>{{ __("Based On Your Smoking Habits, You Can Quit Smoking In Just") }}</span> <span class="font-semibold text-teal-2">{{ __("5 Days") }}</span>.
												</h5>
												<div class="font-mark-pro text-[18px] leading-8 font-normal sm:mx-3">
														{{ __("We've Evaluated Your Answers And Prepared A Summary Out of") }} <span class="text-teal-2 font-semibold">2000+</span> {{ __("Responses Similar To Yours") }}
												</div>

										</div>

										<div class="max-w-[544px] mx-auto bg-white shadow-2 flex flex-col h-full rounded-2xl p-4 md:p-6">
												<h5 class="mb-4 font-extrabold text-center text-[20px] font-mark-pro text-dark-1/80">
														{{ __("Your Projected Nicotine Withdrawal Timeline") }}
												</h5>

												<div class="sm:w-full mb-3">
														<svg viewBox="0 0 496 165" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path
																		d="M487.54 157.46L494.617 160H9.05899V8.00131V8L13.1393 8.04377L17.2196 8.09211L21.3 8.1455L25.3802 8.20447L29.4606 8.26958L33.5409 8.34147L37.6213 8.42085L41.7016 8.50848L45.7819 8.60521L49.8622 8.71196L53.9425 8.82977L58.0229 8.95976L62.1032 9.10316L66.1835 9.26132L70.2639 9.43574L74.3441 9.62803L78.4245 9.83997L82.5048 10.0735L86.5851 10.3308L90.6654 10.6141L94.7458 10.9259L98.8261 11.2691L102.906 11.6465L106.987 12.0613L111.067 12.5172L115.147 13.0177L119.228 13.5669L123.308 14.1692L127.388 14.829L131.469 15.5514L135.549 16.3414L139.629 17.2046L143.71 18.1466L147.79 19.1733L151.87 20.291L155.951 21.5057L160.031 22.824L164.111 24.252L168.192 25.7962L172.272 27.4625L176.352 29.2567L180.432 31.1841L184.513 33.2494L188.593 35.4563L192.673 37.8079L196.754 40.306L200.834 42.9509L204.914 45.7416L208.995 48.6755L213.075 51.7481L217.155 54.953L221.236 58.2819L225.316 61.7246L229.396 65.269L233.477 68.9012L237.557 72.6057L241.637 76.3658L245.718 80.1635L249.798 83.9802L253.878 87.7969L257.959 91.5946L262.039 95.3546L266.119 99.0592L270.2 102.691L274.28 106.236L278.36 109.678L282.441 113.007L286.521 116.212L290.601 119.285L294.681 122.219L298.762 125.009L302.842 127.654L306.922 130.152L311.003 132.504L315.083 134.711L319.163 136.776L323.244 138.704L327.324 140.498L331.404 142.164L335.485 143.708L339.565 145.136L343.645 146.455L347.726 147.669L351.806 148.787L355.272 148.562L359.352 149.504L363.432 150.367L367.513 151.157L371.593 151.879L375.673 152.539L379.754 153.142L383.834 153.691L387.914 154.191L391.891 153.814H393.692L397.773 154.191L401.853 154.534L405.933 154.846L410.013 155.13L414.094 155.387L418.174 155.62L422.254 155.832L426.335 156.025L430.415 156.199L434.495 156.357L438.576 156.501L442.656 156.631L446.736 156.748L450.817 156.855L454.897 156.952L458.977 157.04L463.058 157.119L467.138 157.191L471.218 157.256L475.299 157.315L479.379 157.368L483.459 157.417L487.54 157.46Z"
																		fill="url(#paint0_linear_2195_10684)"/>
																<path
																		d="M488.328 157.472L484.322 157.432L480.315 157.389L476.309 157.342L472.303 157.289L468.296 157.231L464.29 157.167L460.284 157.096L456.277 157.017L452.271 156.931L448.265 156.836L444.258 156.73L440.252 156.614L436.246 156.486L432.239 156.345L428.233 156.189L424.226 156.017L420.22 155.827L416.214 155.618L412.207 155.388L408.201 155.134L404.195 154.854L400.188 154.547L396.182 154.208L392.176 153.836L388.169 153.427L384.163 152.978L380.157 152.484L376.15 151.942L372.144 151.348L368.137 150.698L364.131 149.985L360.125 149.206L356.118 148.355L352.112 147.426L348.106 146.413L344.099 145.311L340.093 144.113L336.087 142.813L332.08 141.404L328.074 139.882L324.068 138.238L320.061 136.469L316.055 134.568L312.049 132.531L308.042 130.355L304.036 128.035L300.029 125.572L296.023 122.963L292.017 120.211L288.01 117.318L284.004 114.287L279.998 111.127L275.991 107.844L271.985 104.448L267.979 100.953L263.972 97.3706L259.966 93.7171L255.96 90.0089L251.953 86.2635L247.947 82.4994L243.94 78.7353L239.934 74.99L235.928 71.2817L231.921 67.6283L227.915 64.0461L223.909 60.5506L219.902 57.1553L215.896 53.8723L211.89 50.7116L207.883 47.6814L203.877 44.7879L199.871 42.0356L195.864 39.4271L191.858 36.9635L187.852 34.6443L183.845 32.4678L179.839 30.431L175.832 28.5302L171.826 26.7607L167.82 25.1174L163.813 23.5945L159.807 22.1861L155.801 20.886L151.794 19.688L147.788 18.5858L143.782 17.5732L139.775 16.6442L135.769 15.7929L131.763 15.0137L127.756 14.3013L123.75 13.6506L119.744 13.0566L115.737 12.5149L111.731 12.0213L107.724 11.5718L103.718 11.1626L99.7118 10.7904L95.7054 10.452L91.699 10.1445L87.6927 9.86508L83.6863 9.61136L79.68 9.38104L75.6736 9.17201L71.6672 8.98237L67.6609 8.81036L63.6545 8.65438L59.6482 8.51295L55.6418 8.38476L51.6355 8.26857L47.6291 8.16329L43.6228 8.06789L39.6164 7.98147L35.61 7.90319L31.6037 7.83229L27.5973 7.76807L23.591 7.70992L19.5846 7.65727L15.5783 7.60959L11.5719 7.56642L7.56556 7.52734"
																		stroke="#5BBB93" stroke-width="3"/>
																<rect x="0.671875" width="16" height="16" rx="8" fill="#7DE0C4"/>
																<path d="M13.6719 8C13.6719 10.7614 11.4333 13 8.67188 13C5.91045 13 3.67188 10.7614 3.67188 8C3.67188 5.23858 5.91045 3 8.67188 3C11.4333 3 13.6719 5.23858 13.6719 8Z" fill="#5BBA92"/>
																<rect x="479.336" y="149" width="16" height="16" rx="8" fill="#7DE0C4"/>
																<path d="M492.336 157C492.336 159.761 490.097 162 487.336 162C484.575 162 482.336 159.761 482.336 157C482.336 154.239 484.575 152 487.336 152C490.097 152 492.336 154.239 492.336 157Z" fill="#5BBA92"/>
																<defs>
																		<linearGradient id="paint0_linear_2195_10684" x1="311.965" y1="160" x2="9.46486" y2="13" gradientUnits="userSpaceOnUse">
																				<stop stop-color="#BAFFB7"/>
																				<stop offset="0.196545" stop-color="#C1FFC1"/>
																				<stop offset="0.439562" stop-color="#FFF2BE"/>
																				<stop offset="0.643026" stop-color="#FFD0E3"/>
																				<stop offset="0.820635" stop-color="#FFB9C2"/>
																		</linearGradient>
																</defs>
														</svg>
														<div class="flex justify-between text-[12px] text-gray-500">
																<div v-for="graphDate in graphDates">{{ graphDate }}</div>
														</div>
												</div>

												<div class="bg-blue-200/40 rounded-lg p-4">
														<p class="text-base text-dark-1/80 font-mark-pro">
																{{ __("If You will follow our step-by-step quit smoking plan You’ll get rid of tobacco addiction in 5 days") }}
														</p>
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
														<p class="text-base text-dark-1/80 font-mark-pro">
																{{ __("While your HSI score might seem daunting, don't lose hope. We'll guide you through effective strategies to reduce your nicotine dependency") }}
														</p>
												</div>
										</div>

										<div class="max-w-[544px] mx-auto bg-white shadow-2 flex flex-col h-full rounded-2xl p-4 md:p-6">
												<h5 class="mb-4 font-extrabold text-center text-xl font-mark-pro text-dark-1 leading-9">
														{{ __("Increase your lung capacity by :percentage% in just the first month of quitting", {percentage: lungCapacityPercentage}) }}
												</h5>

												<div class="hidden sm:flex items-center font-semibold mb-7">
														<div class="bg-red-200 text-gray-700 py-3 px-2 rounded-lg w-full text-center mx-3">{{ __("Now") }}</div>
														<img :src="'/assets/images/summary/lungs.png'" alt="" class="w-[180px] mx-auto sm:mb-12">
														<div class="bg-teal-2/20 text-teal-2 py-3 px-2 rounded-lg w-full text-center mx-3">{{ __("After Quitting") }}</div>
												</div>
												<div class="sm:hidden  items-center font-semibold mb-7">
														<img :src="'/assets/images/summary/lungs.png'" alt="" class="w-[180px] mx-auto sm:mb-12">
														<div class="flex justify-between mt-2">
																<div class="bg-red-200 text-gray-700 py-3 px-12 rounded-lg text-center">{{ __("Now") }}</div>
																<div class="bg-teal-2/20 text-teal-2 py-3 px-3 rounded-lg text-center">{{ __("After Quitting") }}</div>
														</div>
												</div>

												<div class="bg-dark-1/[0.04] rounded-lg p-4">
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
										<div class="p-6 bg-white shadow-2">
												<img src="/assets/images/coin-1.png" alt="" class="h-[72px] mb-4">
												<h1 class="text-[40px]/[56px] font-itc text-teal-1 mb-1">{{ __(averageSpendingCost.inOneMonth) }}</h1>
												<p class="text-xl font-medium text-dark-1/80 font-mark-pro">{{ __("in one month") }}</p>
										</div>
										<div class="p-6 bg-white shadow-2">
												<img src="/assets/images/coin-2.png" alt="" class="h-[72px] mb-4">
												<h1 class="text-[40px]/[56px] font-itc text-teal-1 mb-1">{{ __(averageSpendingCost.inOneYear) }}</h1>
												<p class="text-xl font-medium text-dark-1/80 font-mark-pro">{{ __("in one year") }}</p>
										</div>
										<div class="p-6 bg-white shadow-2">
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
												<div class="flex flex-col items-center lg:max-w-[214px] w-full">
														<div class="flex items-center justify-center rounded-2xl bg-teal-2/10 mb-4 w-[100px] h-[100px] shrink-0">
																<img src="/assets/images/blood-drop-female.png" alt="" class="w-[72px]">
														</div>
														<h6 class="mb-1 text-base font-bold text-center text-dark-1">{{ __("After 20 minutes") }}</h6>
														<p class="text-base text-center text-dark-1/80">
																{{ __("Your blood pressure and heart rate return to normal") }}
														</p>
												</div>
												<div class="items-center hidden lg:flex">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M9 20L17 12L9 4" stroke="#009F91" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
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
																<path d="M9 20L17 12L9 4" stroke="#009F91" stroke-width="5" stroke-linecap="round"
																			stroke-linejoin="round"/>
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
																<path d="M9 20L17 12L9 4" stroke="#009F91" stroke-width="5" stroke-linecap="round"
																			stroke-linejoin="round"/>
														</svg>
												</div>
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

						<!-- 100% guaranteed section START -->

						<section class="mt-5 md:mt-12 lg:mt-[52px] bg-dark-1/[0.04]">
								<div class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 py-8 md:py-12 lg:py-[72px] sm:flex">
										<div class="max-w-xl mx-auto text-left mr-5">
												<h2 class="text-[32px]/[44px] text-center sm:text-left  font-extrabold text-dark-1 font-itc mb-4">
														{{ __("Quit :value -", {value: __(quizType.text2)}) }} <span class="text-red-1">{{ __("Guaranteed") }}</span>
														{{ __("or Your Money Back!") }}
												</h2>
												<div class="font-light text-[18px] text-gray-700 font-mark-pro">
														{{
																__("We believe in our program so strongly that we’re putting our money where our mouth is. After rigorous research and development, we’ve crafted a scientifically proven, fail-safe method to help you quit smoking for good. If you follow our plan and don’t kick the habit, we’ll refund 100% of your money.")
														}}
												</div>
												<div class="mt-4 font-bold text-red-1">
														{{ __("Your success is our priority, and we’re confident this is the last quit-smoking program you’ll ever need.") }}
												</div>
												<a href="#prices-section" class="mt-5 hidden sm:block w-full px-3 py-3 mb-2 text-base font-extrabold text-center text-white rounded-lg font-mark-pro bg-teal-1 cursor-pointer uppercase">
														{{ __("Get started today - Risk-free") }}
												</a>
										</div>
										<div class="flex justify-center sm:block mt-5 sm:mt-0">
												<img src="/assets/images/summary/100-percent-satisfaction.png" alt="" class="max-w-[300px]">
										</div>
										<a href="#prices-section" class="mt-5 block sm:hidden w-full px-3 py-3 mb-2 text-base font-extrabold text-center text-white rounded-lg font-mark-pro bg-teal-1 cursor-pointer uppercase">
												{{ __("Get started today - Risk-free") }}
										</a>
								</div>
						</section>


						<!-- 100% guaranteed section END -->

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
														<div class="text-2xl font-extrabold text-dark-1 uppercase leading-5 font-mark-pr mt-2">{{ __(product.name) }}</div>
														<div class="text-teal-2 bg-teal-2/20 mt-2 px-3 py-2 rounded-xl">
																<span class="font-extrabold uppercase">+ {{ __("Free bonus") }}:</span> <span class="font-medium">{{ __("7-Day Lung Health Boosting Exercises") }}</span>
														</div>
														<div class="font-itc mt-3 flex">
																<div class="text-[40px]/[56px] font-bold text-dark-1 ">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_with_discount_readable }}</div>
																<del class="text-lg font-medium text-red-1 ms-2">{{ localeSetting?.currency_symbol ?? '$' }}{{ product.price_including_vat }}</del>
														</div>
														<div class="flex text-md font-mark-pro font-medium text-gray-800 mt-2">
																<img src="/assets/svg/summary/price-checkbox.svg"/>
																<div class="ms-2">
																		{{ __("Actionable Daily Steps") }}
																</div>
														</div>
														<div class="flex text-md font-mark-pro font-medium text-gray-800 mt-1">
																<img src="/assets/svg/summary/price-checkbox.svg"/>
																<div class="ms-2">
																		{{ __("Practical Craving Solutions") }}
																</div>
														</div>
														<div class="flex text-md font-mark-pro font-medium text-gray-800 mt-1">
																<img src="/assets/svg/summary/price-checkbox.svg"/>
																<div class="ms-2">
																		{{ __("Positive Habit Replacements") }}
																</div>
														</div>
														<div class="flex text-md font-mark-pro font-medium text-gray-800 mt-1">
																<img src="/assets/svg/summary/price-checkbox.svg"/>
																<div class="ms-2">
																		{{ __("Long-Term Relapse Prevention") }}
																</div>
														</div>
														<div class="flex text-md font-mark-pro font-medium text-gray-800 mt-1">
																<img src="/assets/svg/summary/price-checkbox.svg"/>
																<div class="ms-2">
																		{{ __("100% Money Back Guarantee") }}
																</div>
														</div>
														<div class="mt-4 flex">
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
