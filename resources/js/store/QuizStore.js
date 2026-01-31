import {defineStore} from "pinia";

export const useQuizStore = defineStore('quiz', {
    state: () => {
        return {
            type: null,
            selections: [],
            questions: [],
            currentQuestion: 0,
            totalQuestions: 18
        }
    },
    getters: {
        allSelections: (state) => state.selections,
        currQuestion() {
            return this.selections.filter((question) => {
                return ['single_select', 'multi_select', 'information_page'].includes(question.question.type);
            }).length;
        }
    },
    actions: {
        addSelection(selection) {
            this.selections.push(selection);
        },
        removeLastSelection() {
            this.selections.pop();
        },
        addQuestionAtPosition(selection, position) {
            this.questions.splice(position, 0, selection);
        },
        removeQuestionAtPosition(position) {
            this.questions.splice(position, 1);
        },
    }
})
