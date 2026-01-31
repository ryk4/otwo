<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
</script>


<template>
		<GuestLayout>
				<section class="container mx-auto lg:max-w-[1120px] px-4 lg:px-6 mt-8 md:mt-12 lg:mt-[72px]">
						<div class="main-content text-sm font-medium">
								<h1>Cancellation policy</h1>

								<p><strong>
										Because our services are provided in digital form only, we must inform you that we do not accept returns or provide refunds for cancellations of your purchase or subscription services if you decide to cancel after
										receiving your personalized quit smoking plan and other services.
								</strong></p>
								<p>
										<span size="2">
												<strong>
														If you have purchased a personalized quit smoking plan and other services and have not received them, we will refund you if you inform us within 14 days. We will also issue a refund if the service was faulty, and the digital content was inaccessible.
												</strong>
										</span>
								</p>
								<p>
										<strong>
												We will issue a full 100% refund if you have purchased our personalized quit smoking plan and other services, followed all the steps daily, and did not quit smoking after 14 days. Special conditions apply for a full
												refund. You will need to provide proof that you followed the personalized quit smoking plan daily, and it did not work. Evidence must be submitted to us within 14 days from the date of purchase by filling out the
												<a href="https://forms.gle/yWPx3BdstkA5MPJc8">FORM</a>. It is important to provide all the required evidence and information in the form. Failure to provide all the required evidence and information will result in no refund being issued. If you
												cannot access this form via the provided link, please contact support@otwo.life, and we will share it with you via email. Please note, we reserve the right to make the final decision on issuing a full refund based on
												the evidence provided, especially if it indicates that the plan was not fully adhered to.
										</strong>
								</p>
								<p>
										<strong>
												When placing your order on the check out page of this website you will be asked to accept our Terms & Conditions, our Privacy Policy and this Cancelation Policy. Your acceptance of our policy will mean that you have
												were
												informed and agreed to purchase OTWO Life services without the right to return them, as allowed by the provisions of the Directive 2011/83/EU of the European Parliament and of the Council of 25. 
										</strong>
								</p>
								<p><span size="2">If you have any questions about our products and refund policies you can contact our customer support by email
										<a href="mailto:support@otwo.life">support@otwo.life</a>.&nbsp;</span></p>
								<p>You can find more detailed information about OTWO Life policies on Terms & Conditions page on the Website.</p>
						</div>

				</section>
		</GuestLayout>
</template>

<script>
export default {
		name: "CancellationPolicyPage"
}
</script>

<style scoped>
ol {
		@apply list-decimal ml-10;
}

ul {
		@apply list-disc ml-10;
}

p {
		@apply mt-2;
}

a {
		@apply underline text-blue-700;
}

h1 {
		@apply font-bold text-xl;
}

li {
		@apply my-3;
}

table {
		@apply border-2 border-slate-500 mt-3;
}

td {
		@apply p-2 border-2 border-slate-500 mt-3;
}
</style>
