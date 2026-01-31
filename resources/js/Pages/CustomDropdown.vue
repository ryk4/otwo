<template>
		<div v-click-outside="handleClickOutside">
				<div @click="showDropdown = !showDropdown" class="cursor-pointer">
						<slot name="button"/>
				</div>
				<!--
						Dropdown menu, show/hide based on menu state.

						Entering: "transition ease-out duration-100"
							From: "transform opacity-0 scale-95"
							To: "transform opacity-100 scale-100"
						Leaving: "transition ease-in duration-75"
							From: "transform opacity-100 scale-100"
							To: "transform opacity-0 scale-95"
					-->
				<div v-if="showDropdown">
						<slot name="dropdown-area"/>
				</div>
		</div>
</template>

<script>

import clickOutside from './Directives/click-outside'; // Update the path as needed

export default {
		data() {
				return {
						showDropdown: false,
				}
		},
		directives: {
				'click-outside': clickOutside,
		},
		methods: {
				handleClickOutside(event) {
						if (this.showDropdown && !this.$el.contains(event.target)) {
								this.showDropdown = false;
						}
				},
		}
}
</script>

<style scoped>

</style>
