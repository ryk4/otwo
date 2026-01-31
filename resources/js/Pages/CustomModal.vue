<template>
		<span @click="clickOpenModal">
				<slot name="button-open-modal"/>
		</span>

		<div v-if="showModal">
				<div class="fixed inset-0 z-[60] flex p-4 bg-dark-1/40 overflow-y-auto">

						<!-- Modal Body -->
						<div class="bg-white max-w-[1044px] w-full rounded-2xl shadow-2 p-6 max-h-[90%] md:max-h-[98%] overflow-y-auto m-auto" v-click-outside="handleClickOutside">
								<div class="flex items-center justify-between mb-4">
										<h4 class="text-2xl font-medium font-itc text-dark-1">
												<slot name="modal-title"/>
										</h4>
										<button>
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" @click="this.showModal = false;">
														<path d="M19 5L5 19M5.00001 5L19 19" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
										</button>
								</div>

								<slot name="modal-body"/>
						</div>
				</div>
		</div>
</template>
<script>
import clickOutside from './Directives/click-outside';

export default {
		name: "CustomModal",
		data() {
				return {
						showModal: false,
						uniqueButtonClass: null,
						loaded: false,
				}
		},
		directives: {
				'click-outside': clickOutside,
		},
		props: {
				buttonName: String,
				id: String
		},
		methods: {
				clickOpenModal() {
						this.showModal = true;
				},
				disableScroll() {
						if (this.showModal === true) {
								document.body.style.overflow = 'hidden';
						} else {
								document.body.style.overflow = 'auto';
						}
				},
				handleClickOutside(event) {
						const buttonEl = document.getElementById(this.id);

						//if the click is inside the button, do nothing
						if (event.target === buttonEl) {
								return;
						}

						this.showModal = false;
				},
		},
		mounted() {
				this.disableScroll();
		},
		watch: {
				// whenever question changes, this function will run
				showModal(newShowModal) {
						this.disableScroll();
				}
		},
}
</script>

<style scoped>
/* width */
::-webkit-scrollbar {
		width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
		/*box-shadow: inset 0 0 5px grey;*/
		border-radius: 10px;
		margin: 5px;
}

/* Handle */
::-webkit-scrollbar-thumb {
		background: grey;
		border-radius: 10px;
}

</style>
