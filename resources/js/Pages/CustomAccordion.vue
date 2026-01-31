<template>
		<div class="px-4 py-2 bg-white rounded-2xl shadow-1 select-none cursor-pointer">
				<!-- Title -->
				<div class="flex items-center justify-between" @click="isOpen = !isOpen">
						<h5 class="text-xl font-medium font-mark-pro text-dark-1/80">
								{{ __(text1) }}
						</h5>

						<button class="shrink-0">
								<svg width="24" height="25" viewBox="0 0 24 25" fill="none" :class="{'rotate-180' : isOpen}"
										 xmlns="http://www.w3.org/2000/svg">
										<path d="M7 10.2563L12 15.2563L17 10.2563" stroke="#001A72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
						</button>
				</div>

				<!-- Details -->
				<div v-show="isOpen" class="mt-2" @click="isOpen = !isOpen">
						<p class="text-base font-mark-pro text-dark-1/80">
								{{ __(text2) }}
						</p>
				</div>
		</div>
</template>

<script>
export default {
		name: "CustomAccordion",
		data() {
				return {
						isOpen: false,
				}
		},
		props: {
				text1: String,
				text2: String,
		}
}
</script>

<style scoped>

</style>
