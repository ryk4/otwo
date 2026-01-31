<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import PrivacyPolicyText from "@/Pages/InformationPages/Content/PrivacyPolicyText.vue";
</script>


<template>
		<GuestLayout>
				<section class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 mt-8 md:mt-12 lg:mt-[72px]">
						<PrivacyPolicyText/>
				</section>
		</GuestLayout>
</template>

<script>
export default {
		name: "PrivacyPolicyPage"
}
</script>

<style scoped>
ol {
		@apply list-decimal ml-10;
}

ul {
		@apply list-disc ml-10;
}

p {
		@apply mt-2;
}

a {
		@apply underline text-blue-700;
}

h1 {
		@apply font-bold text-xl;
}

li {
		@apply my-3;
}

table {
		@apply border-2 border-slate-500 mt-3;
}

td {
		@apply p-2 border-2 border-slate-500 mt-3;
}
</style>
