<script setup>
import {Link} from '@inertiajs/vue3';
import Pagination from "@/Pages/Shared/Pagination.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";

</script>

<template>
		<AdminLayout>
				<div class="max-w-full px-4 sm:px-6 lg:px-8 my-10">
						<div class="px-4 sm:px-6 lg:px-8">
								<div class="sm:flex sm:items-center">
										<div class="sm:flex-auto">
												<h1 class="text-base font-semibold leading-6 text-gray-900">Quiz Entries</h1>
												<p class="mt-2 text-sm text-gray-700">These are all quiz entries that have been paid for.</p>
										</div>
										<div class="flex">
												<div class="">
														<InputLabel for="date_from" value="Date from"/>

														<input id="date_from" v-model="date_from" type="date" class="w-32 border-gray-300 focus:border-gray-800 focus:ring-gray-800 rounded-md text-sm shadow-sm p-1"/>
												</div>

												<div class="ms-5">
														<InputLabel for="date_from" value="Date to"/>

														<input id="date_from" v-model="date_to" type="date" class="w-32 border-gray-300 focus:border-gray-800 focus:ring-gray-800 rounded-md text-sm shadow-sm p-1"/>
												</div>

												<div>
														<primary-button @click="submitInvoiceGenerate" class="mt-4 ms-5">
																Export payments
														</primary-button>
												</div>
										</div>
								</div>
								<div class="mt-8 flow-root">
										<div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
												<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
														<table class="min-w-full divide-y divide-gray-300">
																<thead>
																<tr>
																		<th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">UUID</th>
																		<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
																		<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Quiz Type</th>
																		<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Product Type</th>
																		<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Language</th>
																		<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Locale</th>
																		<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
																		<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Meditations</th>
																		<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Created at</th>
																		<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Plan generated</th>
																		<th scope="col" class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">Actions</th>
																</tr>
																</thead>
																<tbody class="divide-y divide-gray-200">
																<template v-for="quizEntry in quizEntries.data" :key="quizEntry.id">
																		<tr v-if="quizEntry.status_title">
																				<td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ quizEntry.uuid }}</td>
																				<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ quizEntry.status_title }}</td>
																				<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ quizEntry.type_title }}</td>
																				<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ quizEntry.product_name ?? 'N/A' }}</td>
																				<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ quizEntry.locale_title }}</td>
																				<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ quizEntry.language_title }}</td>
																				<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ quizEntry.email }}</td>
																				<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ quizEntry.purchased_upsell1 ? 'Yes' : 'No' }}</td>
																				<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ quizEntry.created_at_readable }}</td>
																				<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
																						<span v-if="quizEntry.is_plan_generated" class="px-4 py-2 bg-green-600 text-white rounded-xl font-semibold">
																								Yes
																						</span>
																						<span v-else class="px-4 py-2 bg-red-600 text-white rounded-xl font-semibold">
																								No
																						</span>
																				</td>
																				<td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
																						<div>
																								<a v-if="quizEntry.is_plan_generated" :href="'/quiz-entries/' + quizEntry.id + '/download'" class="px-5 py-2 bg-gray-800 text-xs text-white/90 uppercase rounded-lg font-bold">
																										Download
																								</a>
																								<a :href="'/quiz-entries/' + quizEntry.id + '/generate'" class="ms-3 px-5 py-2 bg-orange-400 text-xs text-white uppercase rounded-lg font-bold">
																										Re-generate
																								</a>
																						</div>
																				</td>
																		</tr>
																</template>
																</tbody>
														</table>

														<Pagination :links="quizEntries.links"></Pagination>
												</div>
										</div>
								</div>
						</div>
				</div>
		</AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {useForm} from "@inertiajs/vue3";

export default {
		components: {AdminLayout},
		props: {
				quizEntries: Object,
		},
		data() {
				return {
						date_from: null,
						date_to: null,
				}
		},
		methods: {
				submitInvoiceGenerate() {
						const date_from = this.date_from ?? '';
						const date_to = this.date_to ?? '';

						window.location.href = '/quiz-entries/generate-invoices?date_from=' + date_from + '&date_to=' + date_to;
				}
		},
		mounted() {
		}
}
</script>

<style scoped>

</style>
