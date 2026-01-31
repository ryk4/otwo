<script setup>
import {Link} from '@inertiajs/vue3';
import Pagination from "@/Pages/Shared/Pagination.vue";
import quiz from "../Quiz.vue";

</script>

<template>
		<UserLayout>
				<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 my-4 sm:my-10">
						<div class="px-1 sm:px-6 lg:px-8">
								<div class="w-full">
										<div>
												<div class="px-4 sm:px-0 hidden sm:block">
														<h3 class="text-base font-semibold leading-7 text-gray-900">{{ __("Dashboard") }}</h3>
														<!--														<p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">{{ __("&#45;&#45;add information that would be important to the customer-&#45;&#45;") }}</p>-->
												</div>
												<div class="sm:mt-6">
														<dl class="grid grid-cols-1 sm:grid-cols-3">
																<div class="sm:border-t border-gray-100 px-4 py-3 sm:col-span-1 sm:px-0">
																		<dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Product") }}</dt>
																		<dd class="mt-1 text-sm leading-6 text-gray-700">{{ __(quizEntry.main_product) }}</dd>
																</div>
																<div class="border-t border-gray-100 px-4 py-3 sm:col-span-1 sm:px-0">
																		<dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Language") }}</dt>
																		<dd class="mt-1 text-sm leading-6 text-gray-700">{{ quizEntry.language_title }}</dd>
																</div>
																<div class="border-t border-gray-100 px-4 py-3 sm:col-span-1 sm:px-0">
																		<dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Status") }}</dt>
																		<dd class="mt-1 text-sm leading-6 text-gray-700 ">{{ quizEntry.status_title }}</dd>
																</div>
														</dl>
														<dl class="grid grid-cols-1 sm:grid-cols-3">
																<div class="border-t border-gray-100 px-4 py-3 sm:col-span-1 sm:px-0">
																		<dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Type") }}</dt>
																		<dd class="mt-1 text-sm leading-6 text-gray-700 ">{{ quizEntry.type_title }}</dd>
																</div>
																<div class="border-t border-gray-100 px-4 py-3 sm:col-span-1 sm:px-0">
																		<dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Email") }}</dt>
																		<dd class="mt-1 text-sm leading-6 text-gray-700 ">{{ quizEntry.email }}</dd>
																</div>

																<div class="border-t border-gray-100 px-4 py-3 sm:col-span-1 sm:px-0">
																		<dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Meditations") }}</dt>
																		<dd class="mt-1 text-sm leading-6 text-gray-700 ">
																				<span class="inline-flex items-center rounded-md px-1.5 py-0.5 text-xs font-medium"
																							:class="quizEntry.purchased_meditation_addon_product ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'">
																						{{ quizEntry.purchased_meditation_addon_product ? __('Purchased') : __('Not purchased') }}
																				</span>
																		</dd>
																</div>
														</dl>
														<dl class="grid grid-cols-1 mt-5">
																<div class="border-t border-gray-100 px-4 py-3 sm:col-span-2 sm:px-0">
																		<dt class="text-sm font-medium leading-6 text-gray-900">{{__("Attachments")}}</dt>
																		<dd class="mt-2 text-sm text-gray-900">
																				<ul v-if="quizEntry.can_download_book_now" role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200 mt-3">
																						<li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
																								<div class="flex w-0 flex-1 items-center">
																										<svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																												<path fill-rule="evenodd"
																															d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
																															clip-rule="evenodd"/>
																										</svg>
																										<div class="ml-4 flex min-w-0 flex-1 gap-2">
																												<span class="truncate font-medium">{{ __(quizEntry.main_product) }}</span>
																										</div>
																								</div>
																								<div class="ml-4 flex-shrink-0">
																										<a :href="'/quiz-entries/' + quizEntry.id + '/download'" class="font-bold text-[16px] text-indigo-600 hover:text-indigo-500">{{__("Download")}}</a>
																								</div>
																						</li>
																				</ul>
																				<ul v-if="quizEntry.purchased_meditation_addon_product" role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200 mt-3">
																						<li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
																								<div class="flex w-0 flex-1 items-center">
																										<svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																												<path fill-rule="evenodd"
																															d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
																															clip-rule="evenodd"/>
																										</svg>
																										<div class="ml-4 flex min-w-0 flex-1 gap-2">
																												<span class="truncate font-medium">Meditations</span>
																										</div>
																								</div>
																								<div class="ml-4 flex-shrink-0">
																										<a :href="quizEntry.meditations_link" class="font-bold text-[16px] text-indigo-600 hover:text-indigo-500">{{__("Download")}}</a>
																								</div>
																						</li>
																				</ul>
																				<ul v-else v-if="quizEntry.meditations_upsell_link" role="list" class="divide-y divide-gray-100 bg-green-200/60 rounded-md border border-green-200 mt-3">
																						<li class="flex items-center justify-between py-4 pl-4 pr-5 text-md leading-6">
																								<div class="flex w-0 flex-1 items-center">
																										<div class="ml-4 flex min-w-0 flex-1 gap-2">
																												{{ __("Get your meditations:") }}<a :href="quizEntry.meditations_upsell_link" class="font-bold underline">{{ __("Click here") }}</a>
																										</div>
																								</div>
																						</li>
																				</ul>
																		</dd>
																</div>
																<div v-if="!quizEntry.can_download_book_now">
																		<div class="text-center my-5 font-medium">
																				{{__("Custom plan is being generated right now. Wait a few minutes for it to be ready.")}}
																		</div>
																</div>

														</dl>
												</div>
										</div>
								</div>
						</div>
				</div>
		</UserLayout>
</template>

<script>
import UserLayout from "@/Layouts/UserLayout.vue";

export default {
		components: {UserLayout},
		props: {
				quizEntry: Object,
		},
		data() {
				return {}
		},
		mounted() {
		}
}
</script>

<style scoped>

</style>
