<template>
		<nav class="bg-white shadow">
				<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
						<div class="flex h-16 justify-between">
								<div class="flex">
										<a :href="route('home')"
											 class="font-itc font-bold text-[28px] text-teal-1 inline-block absolute left-1/2 -translate-x-1/2">
												OTWO
										</a>
										<div class="hidden sm:ml-6 sm:flex sm:space-x-8">
												<!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
												<a href="#" class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900">Quiz entries</a>
												<!--												<a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Team</a>-->
										</div>
								</div>
								<div class="sm:ml-6 sm:flex sm:items-center">
										<div @click="logout" class="cursor-pointer relative ml-3 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
												Sign out
										</div>
								</div>
						</div>
				</div>

				<!-- Mobile menu, show/hide based on menu state. -->
		</nav>

		<slot/>
</template>
<script>
import {useForm} from "@inertiajs/vue3";

export default {
		data() {
				return {}
		},
		methods: {
				logout() {
						const form = useForm({});

						// form.post(route('logout'))
						form.post('/logout')
				}
		}
}
</script>
