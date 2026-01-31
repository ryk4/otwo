<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter4.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter4.introduction') }}</p>
        @if($quizEntry->checkIfValueExistsInAnswers(5, 0))
            <p>{{ __('book_static_chapters.chapter4.body.option1.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter4.body.option1.section2') }}</p>

            @if($quizEntry->getNumberOfSelectionForSingleQuestion(5) === 1)
                <p>{{ __('book_static_chapters.chapter4.body.option1.outro') }}</p>
            @endif
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 1))
            <p>{{ __('book_static_chapters.chapter4.body.option2.section1') }}</p>

            @if($quizEntry->getNumberOfSelectionForSingleQuestion(5) === 1)
                <p>{{ __('book_static_chapters.chapter4.body.option2.outro') }}</p>
            @endif
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 2))
            <p>{{ __('book_static_chapters.chapter4.body.option3.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter4.body.option3.section2') }}</p>

            @if($quizEntry->getNumberOfSelectionForSingleQuestion(5) === 1)
                <p>{{ __('book_static_chapters.chapter4.body.option3.outro') }}</p>
            @endif
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 3))
            <p>{{ __('book_static_chapters.chapter4.body.option4.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter4.body.option4.section2') }}</p>

            @if($quizEntry->getNumberOfSelectionForSingleQuestion(5) === 1)
                <p>{{ __('book_static_chapters.chapter4.body.option4.outro') }}</p>
            @endif
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 4))
            <p>{{ __('book_static_chapters.chapter4.body.option5.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter4.body.option5.section2') }}</p>

            @if($quizEntry->getNumberOfSelectionForSingleQuestion(5) === 1)
                <p>{{ __('book_static_chapters.chapter4.body.option5.outro') }}</p>
            @endif
        @endif

        @if($quizEntry->getNumberOfSelectionForSingleQuestion(5) > 1)
            <p>{{ __('book_static_chapters.chapter4.body.option6.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter4.body.option6.section2') }}</p>
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 'other'))
            @if($quizEntry->getNumberOfSelectionForSingleQuestion(5) === 1)
                <p>{{ __('book_static_chapters.chapter4.body.option1.section1') }}</p>
                <p>{{ __('book_static_chapters.chapter4.body.option1.section2') }}</p>

                <p>{{ __('book_static_chapters.chapter4.body.option2.section1') }}</p>

                <p>{{ __('book_static_chapters.chapter4.body.option3.section1') }}</p>
                <p>{{ __('book_static_chapters.chapter4.body.option3.section2') }}</p>

                <p>{{ __('book_static_chapters.chapter4.body.option4.section1') }}</p>
                <p>{{ __('book_static_chapters.chapter4.body.option4.section2') }}</p>

                <p>{{ __('book_static_chapters.chapter4.body.option5.section1') }}</p>
                <p>{{ __('book_static_chapters.chapter4.body.option5.section2') }}</p>

                <p>{{ __('book_static_chapters.chapter4.body.option6.section1') }}</p>
                <p>{{ __('book_static_chapters.chapter4.body.option6.section2') }}</p>
            @endif

            <p>{{ __('book_static_chapters.chapter4.body.option6.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter4.body.option6.section2') }}</p>
        @endif
    </div>
</div>
<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter5.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter5.body.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter5.body.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter5.body.section3') }}</p>
        <p>{{ __('book_static_chapters.chapter5.body.section4') }}</p>
        <p>{{ __('book_static_chapters.chapter5.body.section5') }}</p>

        @if($quizEntry->checkIfValueExistsInAnswers(5, 0))
            <p>{{ __('book_static_chapters.chapter5.body.option1.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter5.body.option1.section2') }}</p>
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 1))
            <p>{{ __('book_static_chapters.chapter5.body.option2.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter5.body.option2.section2') }}</p>
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 2))
            <p>{{ __('book_static_chapters.chapter5.body.option3.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter5.body.option3.section2') }}</p>
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 3))
            <p>{{ __('book_static_chapters.chapter5.body.option4.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter5.body.option4.section2') }}</p>
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 4))
            <p>{{ __('book_static_chapters.chapter5.body.option5.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter5.body.option5.section2') }}</p>
        @endif

        @if($quizEntry->checkIfValueExistsInAnswers(5, 5))
            <p>{{ __('book_static_chapters.chapter5.body.option6.section1') }}</p>
            <p>{{ __('book_static_chapters.chapter5.body.option6.section2') }}</p>
            <p>{{ __('book_static_chapters.chapter5.body.option6.section3') }}</p>
        @endif

        <p>{{ __('book_static_chapters.chapter5.outro.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter5.outro.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter5.outro.section3') }}</p>
    </div>
</div>
