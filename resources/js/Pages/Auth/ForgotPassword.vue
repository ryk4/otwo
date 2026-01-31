<script setup>
import GuestLayoutAuth from '@/Layouts/GuestLayoutAuth.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, useForm} from '@inertiajs/vue3';

defineProps({
		status: {
				type: String,
		},
});

const form = useForm({
		email: '',
});

const submit = () => {
		// form.post(route('password.email'));
		form.post('forgot-password');
};
</script>

<template>
		<GuestLayoutAuth>
				<div class="flex justify-center">

						<Head title="Forgot Password"/>

						<form @submit.prevent="submit" class="w-[400px] mt-10">
								<div v-if="status" class="mb-4 font-medium text-sm text-green-600">
										{{ status }}
								</div>

								<div class="mb-4 text-sm text-gray-600">
										Forgot your password? No problem. Just let us know your email address and we will email you a password reset
										link that will allow you to choose a new one.
								</div>

								<div>
										<InputLabel for="email" value="Email"/>

										<TextInput
												id="email"
												type="email"
												class="mt-1 block w-full"
												v-model="form.email"
												required
												autofocus
												autocomplete="username"
										/>

										<InputError class="mt-2" :message="form.errors.email"/>
								</div>

								<div class="flex items-center justify-end mt-4">
										<PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
												Email Password Reset Link
										</PrimaryButton>
								</div>
						</form>
				</div>
		</GuestLayoutAuth>
</template>
