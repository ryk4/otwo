<script setup>
import CustomModal from "@/Pages/CustomModal.vue";
import TermsAndConditionsText from "@/Pages/InformationPages/Content/TermsAndConditionsText.vue";
</script>

<template>
		<CustomModal :id="'terms-and-conditions-' + id">
				<template v-slot:button-open-modal>
						<span :id="'terms-and-conditions-' + id">
								<slot name="text"/>
						</span>
				</template>
				<!--				<template v-slot:modal-title>-->
				<!--						Privacy rules-->
				<!--				</template>-->
				<template v-slot:modal-body>
						<TermsAndConditionsText/>
				</template>
		</CustomModal>
</template>

<script>
export default {
		name: "TermsAndConditionsPageModal",
		data() {
				return {
						id: 0,
				}
		},
		mounted() {
				this.id = Math.floor(Math.random() * 10000000) + 1;
		}
}
</script>

<style scoped>

</style>
