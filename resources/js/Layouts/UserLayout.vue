<template>
		<nav class="bg-white shadow">
				<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-4">
						<div class="flex h-16 justify-between">
								<div class="flex">
										<a :href="route('home')" class="font-itc font-bold text-[28px] text-teal-1 inline-block absolute left-1/2 -translate-x-1/2">
												OTWO
										</a>
								</div>
						</div>
				</div>

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
