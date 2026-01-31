<template>
		<QuizLayout v-if="loaded">
				<header class="sticky inset-x-0 top-0 z-50 bg-white shadow-1">
						<div class="container relative px-6 mx-auto lg:max-w-1440 lg:px-14">
								<nav class="flex items-center py-4 ">
										<span @click="goBack" class="inline-flex items-center space-x-1 text-base font-medium text-dark-1 cursor-pointer">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M4 12L20 12M4 12L10 6M4 12L10 18" stroke="#066D95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
												<span>{{ __("Back") }}</span>
										</span>
										<!-- logo -->
										<a :href="route('home')"
											 class="font-itc font-bold text-[28px] text-teal-1 inline-block absolute left-1/2 -translate-x-1/2">
												OTWO
										</a>

										<!--										<span class="text-base font-medium inline-block absolute right-0 -translate-x-1/2">-->
										<!--												<span class="text-teal-1">{{ quizStore.currQuestion + 1 }}</span> / {{ quizStore.totalQuestions }}-->
										<!--										</span>-->
								</nav>
						</div>
				</header>
				<div class="bg-light-1">
						<div class="top-loader" :style="{ width: quizCompletionPercentage + '%' }">
								<div class="bar"></div>
						</div>
				</div>

				<section class="bg-light-1 py-8 md:py-12 lg:py-[72px] min-h-screen">
						<single-select v-if="quizStore.questions[quizStore.currentQuestion].type === 'single_select'"
													 :question="quizStore.questions[quizStore.currentQuestion]"
													 @answer-selected="selectAnswer"></single-select>

						<multiple-select v-else-if="quizStore.questions[quizStore.currentQuestion].type === 'multi_select'"
														 :question="quizStore.questions[quizStore.currentQuestion]"
														 @answer-selected="selectAnswer"></multiple-select>

						<text-input-page v-else-if="quizStore.questions[quizStore.currentQuestion].type === 'text_input'"
														 :question="quizStore.questions[quizStore.currentQuestion]"
														 @answer-selected="selectAnswer"></text-input-page>

						<dynamic-loader v-else-if="quizStore.questions[quizStore.currentQuestion].type === 'dynamic_loader'"
														:question="quizStore.questions[quizStore.currentQuestion]"
														@answer-selected="selectAnswer"></dynamic-loader>

						<information-page v-else-if="quizStore.questions[quizStore.currentQuestion].type === 'information_page'"
															:question="quizStore.questions[quizStore.currentQuestion]"
															@answer-selected="selectAnswer"></information-page>

						<results-page v-else @complete-quiz="quizComplete"></results-page>
				</section>
		</QuizLayout>
</template>

<script setup>
import QuizLayout from "@/Layouts/QuizLayout.vue";
import SingleSelect from "@/Pages/QuizPages/SingleSelect.vue";
import MultipleSelect from "@/Pages/QuizPages/MultipleSelect.vue";
import DynamicLoader from "@/Pages/QuizPages/DynamicLoader.vue";
import InformationPage from "@/Pages/QuizPages/InformationPage.vue";
import ResultsPage from "@/Pages/QuizPages/ResultsPage.vue";
import TextInputPage from "@/Pages/QuizPages/TextInputPage.vue";


</script>

<script>
import {useQuizStore} from '@/store/QuizStore'
import {createPinia} from 'pinia';
import {useForm} from "@inertiajs/vue3";


//THIS IS A MUST IN ORDER FOR THE PINIA TO WORK WHEN RUNNING "npm run build"
const pinia = createPinia()
const quizStore = useQuizStore(pinia);

export default {
		props: {
				questions: Array,
				quizType: String,
		},
		data() {
				return {
						loaded: false,
				}
		},
		computed: {
				quizCompletionPercentage() {
						return ((quizStore.currQuestion + 1) / quizStore.totalQuestions) * 100;
				},
		},
		methods: {
				selectAnswer(event) {
						const question = event.question;
						const answer = event.answer;

						quizStore.currentQuestion++;

						if (question.dependant_questions) {
								this.addDependantQuestion(question, answer);
						}

						quizStore.addSelection({
								question: event.question,
								answer: event.answer
						})

						window.dataLayer = window.dataLayer || [];
						window.dataLayer.push({
								'event': 'nextQuizPage',
								page: event.question.id,
						});

						this.scrollToTop();
				},
				goBack() {
						if (quizStore.currentQuestion === 0) {
								window.location.href = route('home');
						}

						if (quizStore.selections[quizStore.selections.length - 1].question.dependant_questions) {
								this.removeDependantQuestion();
						}

						quizStore.removeLastSelection();
						quizStore.currentQuestion--;

						window.dataLayer = window.dataLayer || [];
						window.dataLayer.push({
								'event': 'previousQuizPage',
								page: quizStore.currentQuestion + 1,
						});

						this.scrollToTop();
				},
				scrollToTop() {
						window.scrollTo(0, 0);
				},
				addDependantQuestion(question, answer) {
						const dependantQuestion = question.dependant_questions.find((dependantQuestion) => {
								const selections = dependantQuestion.depends_on.selections;

								return selections.includes(answer[0]); //we only care about the 1st option
						})

						quizStore.addQuestionAtPosition(dependantQuestion, quizStore.currentQuestion);
				},
				removeDependantQuestion() {
						quizStore.removeQuestionAtPosition(quizStore.currentQuestion);
				},
				quizComplete(event) {
						const form = useForm({
								type: quizStore.type,
								selections: quizStore.selections,
								email: event.email
						})

						this.createFacebookEvent(event.email);

						// form.post(route('quiz.store')) //WHY DOES THIS NOT WORK???
						form.post('/quiz')
				},
				createFacebookEvent(email) {
						let fbpCookie = null;
						let fbcCookie = null;

						const name = '_fbp=';
						const name2 = '_fbc=';
						const cookies = document.cookie.split(';');

						for (let i = 0; i < cookies.length; i++) {
								let cookie = cookies[i].trim();
								if (cookie.indexOf(name) === 0) {
										fbpCookie = cookie.substring(name.length, cookie.length);
								} else if (cookie.indexOf(name2) === 0) {
										fbcCookie = cookie.substring(name2.length, cookie.length);
								}
						}

						console.log('fbp:' + fbpCookie)
						console.log('fbc:' + fbcCookie)

						axios.post(`/api/facebook-tracking`, {
								"fbp": fbpCookie,
								"fbc": fbcCookie,
								"event_type": "new_quizFinished",
								"email": email
						});
				}
		},
		mounted() {
				quizStore.questions = this.questions;
				quizStore.type = this.quizType;

				this.loaded = true;
		}
}
</script>

<style scoped>
.top-loader {
		height: 5px;
		@apply bg-teal-1;
}
</style>
