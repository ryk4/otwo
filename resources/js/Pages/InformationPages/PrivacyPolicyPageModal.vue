<script setup>
import CustomModal from "@/Pages/CustomModal.vue";
import PrivacyPolicyText from "@/Pages/InformationPages/Content/PrivacyPolicyText.vue";
</script>

<template>
		<CustomModal :id="'privacy-rules-' + id">
				<template v-slot:button-open-modal>
						<span :id="'privacy-rules-' + id">
								<slot name="text"/>
						</span>
				</template>
				<!--				<template v-slot:modal-title>-->
				<!--						Privacy rules-->
				<!--				</template>-->
				<template v-slot:modal-body>
						<PrivacyPolicyText/>
				</template>
		</CustomModal>
</template>

<script>
export default {
		name: "PrivacyPolicyPageModal",
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
