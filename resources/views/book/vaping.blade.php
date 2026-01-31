<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    {{--    <title>Simple Transactional Email</title>--}}
    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji, DejaVu Sans";
        }

        header {
            margin-top: 0px;
            margin-bottom: 1000px;
            text-align: center;
        }

        .section {
            margin-top: 0px;
            margin-bottom: 50px;
            text-align: justify;
        }

        li {
            margin-bottom: 7px;
        }
    </style>
</head>
<body>
@include('book.elements.header')
<main>
    <div class="section">
        <div class="section-header">
            <h4>{{ __('vaping-book.chapter0.title') }}</h4>
        </div>
        <div class="section-content">
            <p>{{ __('vaping-book.chapter0.section1') }}</p>
            <p>{{ __('vaping-book.chapter0.section2') }}</p>
            <p>{{ __('vaping-book.chapter0.section3') }}</p>
            <p>{{ __('vaping-book.chapter0.section4') }}</p>
            <p>{{ __('vaping-book.chapter0.section5') }}</p>
            <p>{{ __('vaping-book.chapter0.section6') }}</p>
            <p>{{ __('vaping-book.chapter0.section7') }}</p>
            <p>{{ __('vaping-book.chapter0.section8') }}</p>
            <p>{{ __('vaping-book.chapter0.section9') }}</p>
            <p>{{ __('vaping-book.chapter0.section10') }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-header">
            <h4>{{ __('vaping-book.chapter1.title') }}</h4>
        </div>
        <div class="section-content">
            <p>{{ __('vaping-book.chapter1.introduction') }}</p>
            @if($quizEntry->checkIfValueExistsInAnswers(1, 0) || $quizEntry->checkIfValueExistsInAnswers(1 ,1))
                @foreach(__('vaping-book.chapter1.body.option1') as $paragraph)
                    <p>{{ __($paragraph) }}</p>
                @endforeach
            @else
                @foreach(__('vaping-book.chapter1.body.option2') as $paragraph)
                    <p>{{ __($paragraph) }}</p>
                @endforeach
            @endif
            <p>{{ __('vaping-book.chapter1.outro') }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-header">
            <h4>{{ __('vaping-book.chapter2.title') }}</h4>
        </div>
        <div class="section-content">
            <p>{{ __('vaping-book.chapter2.introduction') }}</p>
            <p>{{ __('vaping-book.chapter2.body_for_all') }}</p>
            @if($quizEntry->checkIfValueExistsInAnswers(4 , 'other'))
                <p>{{ __('vaping-book.chapter2.body.option1') }}</p>
                <p>{{ __('vaping-book.chapter2.body.option2') }}</p>
                <p>{{ __('vaping-book.chapter2.body.option3') }}</p>
                <p>{{ __('vaping-book.chapter2.body.option4') }}</p>
                <p>{{ __('vaping-book.chapter2.body.option5') }}</p>
            @else
                @if($quizEntry->checkIfValueExistsInAnswers(4 , 0))
                    <p>{{ __('vaping-book.chapter2.body.option1') }}</p>
                @endif

                @if($quizEntry->checkIfValueExistsInAnswers(4 , 1))
                    <p>{{ __('vaping-book.chapter2.body.option2') }}</p>
                @endif

                @if($quizEntry->checkIfValueExistsInAnswers(4 , 2))
                    <p>{{ __('vaping-book.chapter2.body.option3') }}</p>
                @endif

                @if($quizEntry->checkIfValueExistsInAnswers(4 , 3))
                    <p>{{ __('vaping-book.chapter2.body.option4') }}</p>
                @endif

                @if($quizEntry->checkIfValueExistsInAnswers(4 , 4))
                    <p>{{ __('vaping-book.chapter2.body.option5') }}</p>
                @endif
            @endif

            <p>{{ __('vaping-book.chapter2.before_outro') }}</p>
            <p>{{ __('vaping-book.chapter2.outro') }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-header">
            <h4>{{ __('vaping-book.chapter3.title') }}</h4>
        </div>
        <div class="section-content">
            @if($quizEntry->checkIfValueExistsInAnswers(14, 0))
                @if($quizEntry->checkIfValueExistsInAnswers(16, 0) || $quizEntry->checkIfValueExistsInAnswers(16, 1) || $quizEntry->checkIfValueExistsInAnswers(16, 2))
                    @foreach(__('vaping-book.chapter3.body.male.option1') as $paragraph)
                        <p>{{ __($paragraph) }}</p>
                    @endforeach
                @else
                    @foreach(__('vaping-book.chapter3.body.male.option2') as $paragraph)
                        <p>{{ __($paragraph) }}</p>
                    @endforeach
                @endif
            @else
                @if($quizEntry->checkIfValueExistsInAnswers(16, 0) || $quizEntry->checkIfValueExistsInAnswers(16, 1) || $quizEntry->checkIfValueExistsInAnswers(16, 2))
                    @foreach(__('vaping-book.chapter3.body.male.option1') as $paragraph)
                        <p>{{ __($paragraph) }}</p>
                    @endforeach
                @else
                    @foreach(__('vaping-book.chapter3.body.male.option2') as $paragraph)
                        <p>{{ __($paragraph) }}</p>
                    @endforeach
                @endif
            @endif
        </div>
    </div>

    @include('book.elements.dynamic_chapters')
    @include('book.elements.last_chapters')
    @include('book.elements.outro')
</main>
</body>
</html>
