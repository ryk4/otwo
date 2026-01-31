<template>
		<div v-if="!confirmed" class="cookie-confirmation bg-blue-200 sm:flex sm:items-center">
				<p class="text-sm sm:mx-10 mx-4 sm:w-3/4 mb-5 sm:mb-0">
						This website uses cookies for various purposes including analytics,
						personalized marketing, safety and optimal operation of the website. By
						continuing to use the Website, you agree to
						our use of cookies as described in our
						<a class="underline text-blue-700" :href="route('information-pages.index-privacy-policy')" target="_blank">Privacy Policy</a>.
				</p>

				<span @click="confirmCookies" class="py-3 px-6 text-base font-bold text-center text-white rounded-lg font-mark-pro cursor-pointer bg-teal-1">
						OK
				</span>
		</div>
</template>

<script>
export default {
		name: "Cookie",
		data() {
				return {
						confirmed: localStorage.getItem('cookieConfirmed') === 'true',
				};
		},
		methods: {
				confirmCookies() {
						// Set a flag in localStorage to track user confirmation
						localStorage.setItem('cookieConfirmed', 'true');
						this.confirmed = true;
				},
		},
};
</script>

<style scoped>
/* Add your custom styles for the cookie confirmation here */
.cookie-confirmation {
		position: fixed;
		bottom: 0;
		left: 0;
		width: 100%;
		padding: 15px;
		text-align: center;
}
</style>
