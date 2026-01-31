<script setup>
import CustomDropdown from "@/Pages/CustomDropdown.vue";
import Cookie from "@/Pages/Partials/Cookie.vue";
</script>

<template>
		<header class="sticky inset-x-0 top-0 z-50 bg-white shadow-1 ">
				<div class="container relative px-6 mx-auto lg:max-w-1440 lg:px-14">
						<nav class="flex max-w-[608px]  justify-center py-4 mt-3">
								<!-- logo -->

								<a :href="route('home')"
									 class="font-itc font-bold text-[28px] text-teal-1 inline-block lg:absolute lg:left-1/2 lg:-translate-x-1/2">
										OTWO
								</a>

<!--								<a :href="route('login')"  class="text-md font-semibold text-teal-1 inline-block right-0 absolute mt-2 me-10 lg:-translate-x-1/2">-->
<!--										Login-->
<!--								</a>-->
						</nav>
				</div>
		</header>

		<slot/>

		<!-- Footer Section Start -->
		<footer class="p-6 bg-teal-1/20 mt-8 md:mt-12 lg:mt-[72px] sm:flex sm:flex-row-reverse justify-center items-center space-x-8">
				<div class="max-w-[608px] text-center">
						<p class="mb-6 font-mark-pro text-dark-1/80 grid sm:text-left text-center">
								<a :href="route('information-pages.index-privacy-policy')" class="hover:underline my-1">{{ __("Privacy policy") }}</a>
								<a :href="route('information-pages.index-cancellation-policy')" href="" class="hover:underline my-1">{{ __("Cancellation policy") }}</a>
								<a :href="route('information-pages.index-terms-and-conditions')" href="" class="hover:underline my-1">{{ __("Terms and conditions") }}</a>
						</p>
				</div>
				<div class="max-w-[608px] text-center">
						<a href="#" class="font-itc font-bold text-lg/[56px] text-teal-1 inline-block mb-2">OTWO</a>
						<p class="mb-6 text-base font-mark-pro text-dark-1/80">
								{{ __("Disclaimer: results may vary from person to person. Our service is not intended to diagnose, treat, cure or prevent any disease and does not constitute medical advice.") }}
						</p>
						<p class="text-base font-mark-pro text-dark-1/80">2025 © {{ __("All Rights Reserved") }} OTWO</p>
				</div>
		</footer>
		<!-- Footer Section End -->

<!--		<Cookie/>-->

</template>
