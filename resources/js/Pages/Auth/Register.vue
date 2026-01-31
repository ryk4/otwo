<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';
import GuestLayoutAuth from "@/Layouts/GuestLayoutAuth.vue";

const props = defineProps({
		email: String,
		name: String,
});

const form = useForm({
		name: props.name ?? '',
		email: props.email ?? '',
		password: '',
		password_confirmation: '',
});

const submit = () => {
		// form.post(route('register'), {
		form.post('/register', {
				onFinish: () => form.reset('password', 'password_confirmation'),
		});
};
</script>

<template>
		<GuestLayoutAuth>
				<div class="flex justify-center">

						<Head title="Register"/>
						<form @submit.prevent="submit" class="min-w-[400px] mt-10">
								<div>
										<InputLabel for="name" value="Name"/>

										<TextInput
												id="name"
												type="text"
												class="mt-1 block w-full"
												v-model="form.name"
												required
												autofocus
												autocomplete="name"
										/>

										<InputError class="mt-2" :message="form.errors.name"/>
								</div>

								<div class="mt-4">
										<InputLabel for="email" value="Email"/>

										<TextInput
												id="email"
												type="email"
												class="mt-1 block w-full"
												v-model="form.email"
												required
												autocomplete="username"
										/>
										<div class="text-sm text-orange-600 mt-1">
												<strong>Note:</strong> Email MUST match with the one used when filling out quiz form.
										</div>

										<InputError class="mt-2" :message="form.errors.email"/>
								</div>

								<div class="mt-4">
										<InputLabel for="password" value="Password"/>

										<TextInput
												id="password"
												type="password"
												class="mt-1 block w-full"
												v-model="form.password"
												required
												autocomplete="new-password"
										/>

										<InputError class="mt-2" :message="form.errors.password"/>
								</div>

								<div class="mt-4">
										<InputLabel for="password_confirmation" value="Confirm Password"/>

										<TextInput
												id="password_confirmation"
												type="password"
												class="mt-1 block w-full"
												v-model="form.password_confirmation"
												required
												autocomplete="new-password"
										/>

										<InputError class="mt-2" :message="form.errors.password_confirmation"/>
								</div>

								<div class="flex items-center justify-end mt-4">
										<Link
												:href="route('login')"
												class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
										>
												Already registered?
										</Link>

										<PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
												Register
										</PrimaryButton>
								</div>
						</form>
				</div>
		</GuestLayoutAuth>
</template>
