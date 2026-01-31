<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <style>
        @if($quizEntry->language->isInverseTextRightToLeft())
@font-face {
            font-family: 'Noto Kufi Arabic';
            src: url('{{ public_path('fonts/NotoKufiArabic-VariableFont_wght.ttf') }}') format('truetype') ;
        }

        h1, h2, h3, h4, h5, ul,ol,li {
            font-family: "Noto Kufi Arabic", sans-serif;
            font-weight: normal;
        }

        strong, b {
            font-family: "Noto Kufi Arabic", sans-serif;
            font-weight: normal;
        }

        body {
            font-size: 16px;
            font-family: 'Noto Kufi Arabic', sans-serif;
            text-align: right;
        }

        @else
            body {
            font-size: 16px;

            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji, DejaVu Sans";
            text-align: justify;
        }
        @endif

        header {
            text-align: center;
        }

        .section {
            /*margin-top: 0px;*/
            /*margin-bottom: 50px;*/
        }

        li {
            margin-bottom: 7px;
        }

        .section-header {
            margin-bottom: 30px;
        }

        .section-content p {
            margin-bottom: 20px;
        }

        .section-content h3,h4 {
            margin-top: 40px;
        }

        .section-content li {
            margin-top: 15px;
        }

        .page-break {
            page-break-after: always;
        }

        @page {
            margin-top: 50px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<main>
    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.thank_you_letter.title') }}</h2>
        </div>
        <div class="section-content">
            <p>{{ __('Dear :name', ['name' => $quizEntry->getUserName()]) }},</p>

            <p>{{ __("smoking-plan.thank_you_letter.section1") }}</p>
            <p>{{ __("smoking-plan.thank_you_letter.section2") }}</p>
            <p>{{ __("smoking-plan.thank_you_letter.section3") }}</p>
            <p>{{ __("smoking-plan.thank_you_letter.section4") }}</p>
            <p>{{ __("smoking-plan.thank_you_letter.section5") }}</p>
            <p>
                {{ __("smoking-plan.thank_you_letter.section6") }}<br>
                {{ __("smoking-plan.thank_you_letter.section7") }}
            </p>
        </div>
    </div>
    <div class="page-break"></div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.disclaimer.title') }}</h2>
        </div>
        <div class="section-content">
            <p>{{ __("smoking-plan.disclaimer.section1") }}</p>
        </div>
    </div>
    <div class="page-break"></div>


    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.introduction_quiting_smoking_in_30_days.title') }}</h2>
        </div>
        <div class="section-content">
            <p>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section1") }}</p>
            <p>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section2") }}</p>

            <h4>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section3.title") }}</h4>
            <p>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section3.section1") }}</p>
            <p>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section3.section2") }}</p>
            <hr/>

            <h4>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section4.title") }}</h4>
            <p>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section4.section1") }}</p>
            <p>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section4.section2") }}</p>
            <p>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section4.section3") }}</p>
            <hr/>
            <p>{{ __("smoking-plan.introduction_quiting_smoking_in_30_days.section4.section4") }}</p>
        </div>

        <div class="section-content">
            <h4>{{ __("smoking-plan.your_motivation_to_quitting.section1.title") }}</h4>
            @if($quizEntry->isValueSelectedInAnswer(4, 'other'))
                <p>
                    {{ __("smoking-plan.your_motivation_to_quitting.section1.section6") }}
                </p>
                <p>
                    {{ __("smoking-plan.your_motivation_to_quitting.section1.section7") }}
                </p>
            @else
                <p>
                    {{ __("smoking-plan.your_motivation_to_quitting.section1.section1") }}
                    {{$quizEntry->getSelectedValuesInAnswer(4)}} .
                </p>
            @endif

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(4, 0) || $quizEntry->isValueSelectedInAnswer(4, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section1.section2") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(4, 1) || $quizEntry->isValueSelectedInAnswer(4, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section1.section3", ['data'=> $quizEntry->getSelectedValuesInAnswer(17)]) }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(4, 2) || $quizEntry->isValueSelectedInAnswer(4, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section1.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(4, 2) || $quizEntry->isValueSelectedInAnswer(4, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section1.section5") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.your_motivation_to_quitting.section2.title") }}</h4>
            @if($quizEntry->isValueSelectedInAnswer(5, 'other'))
                <p>{{ __("smoking-plan.your_motivation_to_quitting.section2.section8") }}</p>
                <p>{{ __("smoking-plan.your_motivation_to_quitting.section2.section9") }}</p>
            @else
                <p>
                    {{ __("smoking-plan.your_motivation_to_quitting.section2.section1", ['data' =>  $quizEntry->getSelectedValuesInAnswer(5)]) }} .
                    <br>
                    {{ __("smoking-plan.your_motivation_to_quitting.section2.section2") }}
                </p>
            @endif

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(5, 0) || $quizEntry->isValueSelectedInAnswer(5, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section2.section3") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(5, 1) || $quizEntry->isValueSelectedInAnswer(5, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section2.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(5, 2) || $quizEntry->isValueSelectedInAnswer(5, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section2.section5") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(5, 3) || $quizEntry->isValueSelectedInAnswer(5, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section2.section6") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(5, 5) || $quizEntry->isValueSelectedInAnswer(5, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section2.section7") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.your_motivation_to_quitting.section3.title") }}</h4>
            <p>{{ __("smoking-plan.your_motivation_to_quitting.section3.section1") }}</p>
            <p>{{ __("smoking-plan.your_motivation_to_quitting.section3.section2") }}</p>

            <ul>
                @if($quizEntry->type === \App\Enums\QuizType::tobacco)
                    <li>{{ __("smoking-plan.your_motivation_to_quitting.section3.section3") }}</li>
                @else
                    <li>{{ __("smoking-plan.your_motivation_to_quitting.section3.section4") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.your_motivation_to_quitting.section4.title") }}</h4>
            <p>{{ __("smoking-plan.your_motivation_to_quitting.section4.section1") }}</p>
            <p>{{ __("smoking-plan.your_motivation_to_quitting.section4.section2") }}</p>
            @if($quizEntry->isValueSelectedInAnswer(8, 'other'))
                <p>{{ __("smoking-plan.your_motivation_to_quitting.section4.section13") }}</p>
                <p>{{ __("smoking-plan.your_motivation_to_quitting.section4.section14") }}</p>
                <p>{{ __("smoking-plan.your_motivation_to_quitting.section4.section15") }}</p>
            @else
                <p>
                    {{ __("smoking-plan.your_motivation_to_quitting.section4.section3") }}
                    {{ $quizEntry->getSelectedValuesInAnswer(8) }}
                    {{ __("smoking-plan.your_motivation_to_quitting.section4.section4") }}
                </p>
            @endif
            <ul>
                @if($quizEntry->isValueSelectedInAnswer(8, 0) || $quizEntry->isValueSelectedInAnswer(8, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section4.section5") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 1) || $quizEntry->isValueSelectedInAnswer(8, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section4.section8") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 2) || $quizEntry->isValueSelectedInAnswer(8, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section4.section9") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 3) || $quizEntry->isValueSelectedInAnswer(8, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section4.section10") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 4) || $quizEntry->isValueSelectedInAnswer(8, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section4.section11") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 5) || $quizEntry->isValueSelectedInAnswer(8, 'other'))
                    <li> {{ __("smoking-plan.your_motivation_to_quitting.section4.section12") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.your_motivation_to_quitting.section5.title") }}</h4>
            <p>{{ __("smoking-plan.your_motivation_to_quitting.section5.section1") }}</p>
            <h4>{{ __("smoking-plan.your_motivation_to_quitting.section5.title2") }}</h4>
            <ul>
                <li> {{ __("smoking-plan.your_motivation_to_quitting.section5.section2") }}</li>
                <li> {{ __("smoking-plan.your_motivation_to_quitting.section5.section3") }}</li>
                <li> {{ __("smoking-plan.your_motivation_to_quitting.section5.section4") }}</li>
                <li> {{ __("smoking-plan.your_motivation_to_quitting.section5.section5") }}</li>
            </ul>

        </div>
    </div>
</main>
</body>
</html>
