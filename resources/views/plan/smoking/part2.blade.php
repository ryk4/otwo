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

        .section-content h3, h4 {
            margin-top: 40px;
        }

        .section-content li {
            margin-top: 15px;
        }

        .page-break {
            page-break-after: always;
        }

        .link1 {
            color: #2563eb;
            font-weight: bold;
            /*text-decoration: none;*/
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
        <div class="section-content">
            <h4>{{ __("smoking-plan.your_motivation_to_quitting.section6.title") }}</h4>
            <p>{{ __("smoking-plan.your_motivation_to_quitting.section6.section1") }}</p>
            <ul>
                <li><strong>{{ __("smoking-plan.your_motivation_to_quitting.section6.section2") }}</strong></li>
                <li><strong>{{ __("smoking-plan.your_motivation_to_quitting.section6.section3") }}</strong></li>
                <li><strong>{{ __("smoking-plan.your_motivation_to_quitting.section6.section4") }}</strong></li>
            </ul>
            <p>{{ __("smoking-plan.your_motivation_to_quitting.section6.section5") }}</p>

            <h4>{{ __("smoking-plan.your_motivation_to_quitting.section7.title") }}</h4>
            <p>{{ __("smoking-plan.your_motivation_to_quitting.section7.section1") }}</p>

            <h4>{{ __("smoking-plan.your_motivation_to_quitting.section8.title") }}</h4>
            <p>{{ __("smoking-plan.your_motivation_to_quitting.section8.section1") }}</p>
        </div>
    </div>

    <div class="page-break"></div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_one_understanding_motivation_and_smoking_habits.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section1.title") }}</h4>
            <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section1.section1") }}</p>

            <h4>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section2.title") }}</h4>
            <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section2.section1", ['data' =>$quizEntry->getSelectedValuesInAnswer(1)]) }}</p>

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(1, 3))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section2.section2") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(1, 2))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section2.section3") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(1, 1))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section2.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(1, 0))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section2.section5") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section3.title") }}</h4>
            <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section3.section1", ['data' => $quizEntry->getSelectedValuesInAnswer(2)]) }}</p>

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(2, 3))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section3.section2") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(2, 2))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section3.section3") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(2, 1))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section3.section4") }}</li>
                @endif @if($quizEntry->isValueSelectedInAnswer(2, 0))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section3.section5") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section4.title") }}</h4>
            <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section4.section1", ['data' => strtolower($quizEntry->getSelectedValuesInAnswer(3))]) }}</p>
            <ul>
                @if($quizEntry->isValueSelectedInAnswer(3, 0))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section4.section2") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(3, 1))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section4.section3") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(3, 2))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section4.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(3, 3))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section4.section5") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.title") }}</h4>
            @if($quizEntry->isValueSelectedInAnswer(6, 'other'))
                <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.section8") }}</p>
                <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.section9") }}</p>
            @else
                <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.section1", ['data' => $quizEntry->getSelectedValuesInAnswer(6)]) }}</p>
            @endif

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(6, 0) || $quizEntry->isValueSelectedInAnswer(6, 'other'))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.section2") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(6, 1) || $quizEntry->isValueSelectedInAnswer(6, 'other'))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.section3") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(6, 3) || $quizEntry->isValueSelectedInAnswer(6, 'other'))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.section5") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(6, 2) || $quizEntry->isValueSelectedInAnswer(6, 'other'))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(6, 4) || $quizEntry->isValueSelectedInAnswer(6, 'other'))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.section6") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(6, 5) || $quizEntry->isValueSelectedInAnswer(6, 'other'))
                    <li> {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section5.section7") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section6.title") }}</h4>
            <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section6.section1") }}</p>
            <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section6.section2") }}</p>
            <ul>
                <li>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section6.section3") }}</li>
                <li>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section6.section4") }}</li>
                <li>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section6.section5") }}</li>
            </ul>

            @if($quizEntry->isValueSelectedInAnswer(4, 'other'))
                <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section6.section7") }}</p>
                <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section6.section8") }}</p>
            @else
                <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section6.section6", ['data' => $quizEntry->getSelectedValuesInAnswer(4)]) }}</p>
            @endif

            <div class="page-break"></div>

            <h4>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section7.title") }}</h4>
            <ol>
                <li>
                    <strong>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section7.section1") }}</strong>
                    <br/>
                    {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section7.section2") }}
                </li>
                <li>
                    <strong>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section7.section3") }}</strong>
                    <br/>
                    {{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section7.section4") }}
                </li>
            </ol>

            <h4>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section8.title") }}</h4>
            <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section8.section1") }}</p>
            <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section8.section2") }}</p>

            <h4>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section9.title") }}</h4>
            <p>{{ __("smoking-plan.day_one_understanding_motivation_and_smoking_habits.section9.section1") }}</p>

            <div class="page-break"></div>

            <h2>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.title") }}</h2>

            <h4>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section1.title") }}</h4>

            @if($quizEntry->isValueSelectedInAnswer(8, 'other'))
                <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section1.section2") }}</p>
                <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section1.section3") }}</p>
                <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section1.section4") }}</p>
            @else
                <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section1.section1", ['data' =>  $quizEntry->getSelectedValuesInAnswer(8)]) }}</p>
            @endif

            <h4>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section2.title") }}</h4>
            <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section2.section1") }}</p>
            <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section2.section2") }}</p>

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(8, 0))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section2.section3") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 1))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section2.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 3))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section2.section6") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 2))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section2.section5") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 4))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section2.section7") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(8, 5))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section2.section8") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.title") }}</h4>
            @if($quizEntry->isValueSelectedInAnswer(9, 'other'))
                <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.section2") }}</p>
                <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.section3") }}</p>
            @else
                <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.section1", ['data' => $quizEntry->getSelectedValuesInAnswer(9)]) }}</p>
            @endif

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(9, 0))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(9, 1))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.section5") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(9, 2))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.section6") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(9, 3))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.section7") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(9, 4))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.section8") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(9, 5))
                    <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section3.section9") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.title") }}</h4>
            <ol>
                <li>
                    <strong>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.section1") }}</strong>
                    <br>
                    <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.section2") }}</p>
                </li>
                <li>
                    <strong>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.section3") }}</strong>
                    <br>
                    <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.section4") }}</p>
                    <ul>
                        <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.section5") }}</li>
                        <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.section6") }}</li>
                        <li>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.section7") }}</li>
                    </ul>
                </li>
                <li>
                    <strong>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.section8") }}</strong>
                    <br>
                    <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section4.section9") }}</p>
                </li>
            </ol>

            <h4>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section5.title") }}</h4>
            <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section5.section1") }}</p>
            <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section5.section2") }}</p>
            <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section5.section3") }}</p>

            <h4>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section6.title") }}</h4>
            <p>{{ __("smoking-plan.day_two_identifying_and_copying_with_triggers.section6.section1") }}</p>

            <div class="page-break"></div>
        </div>
    </div>
    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_three_understanding_nicotine_withdrawal.title') }}</h2>
        </div>
        <div class="section-content">
            <p>{{ __('smoking-plan.day_three_understanding_nicotine_withdrawal.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_three_understanding_nicotine_withdrawal.section1.section2') }}</p>
            <p>{{ __('smoking-plan.day_three_understanding_nicotine_withdrawal.section1.section3') }}</p>
            <p>{{ __('smoking-plan.day_three_understanding_nicotine_withdrawal.section1.section4') }}</p>


            <h4>{{ __('smoking-plan.day_three_understanding_nicotine_withdrawal.section2.title') }}</h4>

            @if($quizEntry->isValueSelectedInAnswer(11, 0) || $quizEntry->isValueSelectedInAnswer(11, 1) || $quizEntry->isValueSelectedInAnswer(11, 2) || $quizEntry->isValueSelectedInAnswer(11, 3))
                <p>{{ __('smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section1', ['data' => $quizEntry->getSelectedValuesInAnswer(11)]) }}</p>
            @endif

            @if($quizEntry->isValueSelectedInAnswer(11, 'other'))
                <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section2") }}</p>
                <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section3") }}</p>
            @endif

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(11, 0))
                    <li>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(11, 1))
                    <li>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section5") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(11, 2))
                    <li>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section6") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(11, 3))
                    <li>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section7") }}</li>
                @endif
            </ul>

            @if($quizEntry->isValueSelectedInAnswer(11, 4))
                <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section8") }}</p>
                <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section9") }}</p>
                <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section2.section10") }}</p>
            @endif

            <h4>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section3.title") }}</h4>
            <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section3.section1") }}</p>
            <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section3.section2") }}</p>

            <h4>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.title") }}</h4>
            <ol>
                <li>
                    <strong>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section1") }}</strong>
                    <br>
                    <p>
                        {{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section2") }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section3") }}</strong>
                        <br>
                        {{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section4") }}
                    </p>
                    <ul>
                        <li>
                            <p>
                                <strong>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section5") }}</strong>
                                <br>
                                {{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section6") }}
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section7") }}</strong>
                                <br>
                                {{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section8") }}
                            </p>
                        </li>
                    </ul>
                    <p>
                        {{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section9") }}
                    </p>
                </li>
                @if(!$quizEntry->isValueSelectedInAnswer(11, 4) && !$quizEntry->isValueSelectedInAnswer(11, 'other'))
                    <li>
                        <p>
                            <strong>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section10") }}</strong>
                        </p>
                        <p>
                            {{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section11",['data' =>$quizEntry->getSelectedValuesInAnswer(11)]) }}
                        </p>
                    </li>
                @endif
            </ol>

            @if($quizEntry->isValueSelectedInAnswer(11, 'other'))
                <p>
                    {{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section12") }}
                </p>
            @endif

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(11, 0))
                    <li>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section13") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(11, 1))
                    <li>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section14") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(11, 2))
                    <li>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section15") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(11, 3))
                    <li>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section4.section16") }}</li>
                @endif
            </ul>

            <h4>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section5.title") }}</h4>
            <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section5.section1") }}</p>

            @if(!$quizEntry->isValueSelectedInAnswer(11, 4) && !$quizEntry->isValueSelectedInAnswer(11, 'other'))
                <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section5.section2", ['data' => $quizEntry->getSelectedValuesInAnswer(11)]) }}</p>
            @endif

            @if($quizEntry->isValueSelectedInAnswer(11, 'other'))
                <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section5.section3") }}</p>
            @endif

            @if($quizEntry->isValueSelectedInAnswer(11, 4))
                <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section5.section4") }}</p>
            @endif

            <h4>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section5.section5") }}</h4>
            <p>{{ __("smoking-plan.day_three_understanding_nicotine_withdrawal.section5.section6") }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_four_building_a_support_system.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __("smoking-plan.day_four_building_a_support_system.section1.title") }}</h4>
            <p>{{ __("smoking-plan.day_four_building_a_support_system.section1.section1") }}</p>
            <ul>
                @if($quizEntry->isValueSelectedInAnswer(5, 0))
                    <li>{{ __("smoking-plan.day_four_building_a_support_system.section1.section2") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(5, 1))
                    <li>{{ __("smoking-plan.day_four_building_a_support_system.section1.section3") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(5, 2))
                    <li>{{ __("smoking-plan.day_four_building_a_support_system.section1.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(5, 3))
                    <li>{{ __("smoking-plan.day_four_building_a_support_system.section1.section5") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(5, 4))
                    <li>{{ __("smoking-plan.day_four_building_a_support_system.section1.section6") }}</li>
                @endif
            </ul>
            <p>{{ __("smoking-plan.day_four_building_a_support_system.section1.section7") }}</p>

            <h4>{{ __("smoking-plan.day_four_building_a_support_system.section2.title") }}</h4>
            <p>{{ __("smoking-plan.day_four_building_a_support_system.section2.section1") }}</p>
            <ul>
                <li>
                    <p>
                        <strong>{{ __("smoking-plan.day_four_building_a_support_system.section2.section2") }}</strong>
                        <br>
                        {{ __("smoking-plan.day_four_building_a_support_system.section2.section3") }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __("smoking-plan.day_four_building_a_support_system.section2.section4") }}</strong>
                        <br>
                        {{ __("smoking-plan.day_four_building_a_support_system.section2.section5") }}
                    </p>
                </li>
            </ul>
            <p>
                {{ __("smoking-plan.day_four_building_a_support_system.section2.section6") }}
            </p>

            <h4>{{ __("smoking-plan.day_four_building_a_support_system.section3.title") }}</h4>

            @if($quizEntry->isValueSelectedInAnswer(5, 'other'))
                <p>{{__("smoking-plan.day_four_building_a_support_system.section3.section1",['data' => $quizEntry->getSelectedValuesInAnswer(5)]) }}</p>
            @else
                <p>{{__("smoking-plan.day_four_building_a_support_system.section3.section2")}}</p>
                <p>{{__("smoking-plan.day_four_building_a_support_system.section3.section3")}}</p>
            @endif
            <p>{{__("smoking-plan.day_four_building_a_support_system.section3.section4",['data' => $quizEntry->getSelectedValuesInAnswer(2)]) }}</p>

            <h4>{{ __("smoking-plan.day_four_building_a_support_system.section4.title") }}</h4>
            <p>{{ __("smoking-plan.day_four_building_a_support_system.section4.section1") }}</p>
            <p>{{ __("smoking-plan.day_four_building_a_support_system.section4.section2") }}</p>
            <ul>
                <li>
                    <p>
                        <strong>{{ __("smoking-plan.day_four_building_a_support_system.section4.section3") }}</strong>
                        <br>
                        {{ __("smoking-plan.day_four_building_a_support_system.section4.section4") }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __("smoking-plan.day_four_building_a_support_system.section4.section5") }}</strong>
                        <br>
                        {{ __("smoking-plan.day_four_building_a_support_system.section4.section6") }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __("smoking-plan.day_four_building_a_support_system.section4.section7") }}</strong>
                        <br>
                        {{ __("smoking-plan.day_four_building_a_support_system.section4.section8") }}
                    </p>
                </li>
            </ul>
            <p>{{ __("smoking-plan.day_four_building_a_support_system.section4.section9") }}</p>

            <h4>{{ __("smoking-plan.day_four_building_a_support_system.section5.title") }}</h4>
            <ul>
                <li>
                    <p>
                        <strong>{{ __("smoking-plan.day_four_building_a_support_system.section5.section1") }}</strong>
                        <br>
                        {{ __("smoking-plan.day_four_building_a_support_system.section5.section2") }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __("smoking-plan.day_four_building_a_support_system.section5.section3") }}</strong>
                        <br>
                        {{ __("smoking-plan.day_four_building_a_support_system.section5.section4") }}
                    </p>
                </li>
            </ul>

            <h4>{{ __("smoking-plan.day_four_building_a_support_system.section6.title") }}</h4>
            <p>{{ __("smoking-plan.day_four_building_a_support_system.section6.section1") }}</p>

            <h4>{{ __("smoking-plan.day_four_building_a_support_system.section7.title") }}</h4>
            <p>{{ __("smoking-plan.day_four_building_a_support_system.section7.section1") }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.title') }}</h2>
        </div>
        <div class="section-content">

            <h4>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section1.title') }}</h4>
            <p>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section1.section1') }}</p>

            @if($quizEntry->isValueSelectedInAnswer(6, 'other'))
                <p>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section1.section2') }}</p>
                <h4>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section2.title') }}</h4>
                <p>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section2.section1') }}</p>
                <p>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section2.section2') }}</p>
            @endif
            <ul>
                @if($quizEntry->isValueSelectedInAnswer(6, 2))
                    <li>{{ __("smoking-plan.day_five_replacing_smoking_with_healthy_habits.section2.section3") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(6, 3))
                    <li>{{ __("smoking-plan.day_five_replacing_smoking_with_healthy_habits.section2.section4") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(6, 1))
                    <li>{{ __("smoking-plan.day_five_replacing_smoking_with_healthy_habits.section2.section5") }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(5, 3))
                    <li>{{ __("smoking-plan.day_five_replacing_smoking_with_healthy_habits.section2.section6") }}</li>
                @endif
            </ul>
            <p>{{ __("smoking-plan.day_five_replacing_smoking_with_healthy_habits.section2.section7") }}</p>
            <p>{{ __("smoking-plan.day_five_replacing_smoking_with_healthy_habits.section2.section8") }}</p>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section3.title') }}</h4>
            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section3.section1') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section3.section2') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section3.section3') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section3.section4') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section3.section5') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section3.section6') }}
                    </p>
                </li>
            </ul>
            <p>
                {{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section3.section7') }}
            </p>

            <h4>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section4.title') }}</h4>
            <p>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section4.section1') }}</p>
            <p>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section4.section2') }}</p>
            <p>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section4.section3') }}</p>

            <h4>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section5.title') }}</h4>
            <p>{{ __('smoking-plan.day_five_replacing_smoking_with_healthy_habits.section5.section1') }}</p>

            <div class="page-break"></div>
        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_six_managing_stress_without_smoking.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section1.title') }}</h4>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section1.section2') }}</p>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section1.section3') }}</p>

            <h4>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section2.title') }}</h4>
            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section2.section1') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section2.section2') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section2.section3') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section2.section4') }}
                    </p>
                </li>
            </ul>

            <h4>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section3.title') }}</h4>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section3.section1') }}</p>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section3.section2') }}</p>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section3.section3') }}</p>

            <h4>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.title') }}</h4>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section1') }}</p>
            <ol>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section2') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section3') }}
                    </p>
                    <ul>
                        <li>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section4') }}</li>
                        <li>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section5') }}</li>
                        <li>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section6') }}</li>
                        <li>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section7') }}</li>
                    </ul>
                    <p>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section8') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section9') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section10') }}
                    </p>
                    <ul>
                        <li>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section11') }}</li>
                        <li>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section12') }}</li>
                        <li>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section13') }}</li>
                        <li>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section14') }}</li>
                    </ul>
                    <p>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section15') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong> {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section16') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section17') }}
                    </p>
                    <ul>
                        <li> {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section18') }}</li>
                        <li> {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section19') }}</li>
                        <li> {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section20') }}</li>
                    </ul>
                    <p> {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section21') }}</p>
                </li>
                <li>
                    <p>
                        <strong> {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section22') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section4.section23') }}
                    </p>
                </li>
            </ol>

            {{--            <div class="page-break"></div>--}}

            <h4>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section5.title') }}</h4>
            <ol>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section5.section1') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section5.section2') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section5.section3') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_six_managing_stress_without_smoking.section5.section4') }}
                    </p>
                </li>
            </ol>

            <h4>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section6.title') }}</h4>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section6.section1') }}</p>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section6.section2') }}</p>

            <h4>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section7.title') }}</h4>
            <p>{{ __('smoking-plan.day_six_managing_stress_without_smoking.section7.section1') }}</p>

            <div class="page-break"></div>
        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section1.title') }}</h4>

            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section1.section2') }}</p>

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(2, 3))
                    <li>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section1.section4') }}</li>
                @else
                    <li>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section1.section3') }}</li>
                @endif
            </ul>

            <h4>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.title') }}</h4>
            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section1') }}</p>
            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section2') }}</p>
            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section3') }}</p>

            <ul>
                @if($quizEntry->isValueSelectedInAnswer(17, 0))
                    <li>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section4') }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(17, 1))
                    <li>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section5') }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(17, 2))
                    <li>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section6') }}</li>
                @endif
                @if($quizEntry->isValueSelectedInAnswer(17, 3))
                    <li>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section7') }}</li>
                @endif
            </ul>

            @if($quizEntry->isValueSelectedInAnswer(17, 4))
                <h4>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section8') }}</h4>
                <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section9') }}</p>

                <h4>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section10') }}</h4>
                <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section11') }}</p>

                <h4>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section12') }}</h4>
                <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section13') }}</p>
                <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section2.section14') }}</p>
            @endif

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.title') }}</h4>
            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section1') }}</p>

            <ol>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section2') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section3') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section4') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section5') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section6') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section7') }}
                    </p>
                </li>
            </ol>

            <h4>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section8') }}</h4>
            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section9') }}</p>

            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section10') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section11') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section12') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section13') }}
                    </p>
                </li>
            </ul>

            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section3.section14') }}</p>

            <h4>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section4.title') }}</h4>
            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section4.section1') }}</p>
            <p>{{ __('smoking-plan.day_seven_celebrate_one_week_of_progress.section4.section2') }}</p>

            <div class="page-break"></div>
        </div>
    </div>


    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section1.title') }}</h4>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section1.section2') }}</p>

            <h4>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section2.title') }}</h4>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section2.section1') }}</p>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section2.section2') }}</p>
            <ul>
                <li>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section2.section3') }}</li>
                <li>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section2.section4') }}</li>
                <li>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section2.section5') }}</li>
            </ul>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section2.section6') }}</p>

            <h4>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section3.title') }}</h4>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section3.section1') }}</p>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section3.section2') }}</p>

            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section3.section3') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section3.section4') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section3.section5') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section3.section6') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section3.section7') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section3.section8') }}
                    </p>
                </li>
            </ul>

            <h4>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section4.title') }}</h4>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section4.section1') }}</p>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section4.section2') }}</p>
            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section4.section3') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section4.section4') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section4.section5') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section4.section6') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section4.section7') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section4.section8') }}
                    </p>
                </li>
            </ul>

            <h4>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section5.title') }}</h4>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section5.section1') }}</p>

            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section5.section2') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section5.section3') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section5.section4') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section5.section5') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section5.section6') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section5.section7') }}
                    </p>
                </li>
            </ul>

            <h4>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section6.title') }}</h4>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section6.section1') }}</p>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.title') }}</h4>
            <ol>
                <li>
                    <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section1') }}</strong>
                    <br>
                    {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section2') }}

                    <ol>
                        <li>
                            <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section3') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section4') }}
                        </li>
                        <li>
                            <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section5') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section6') }}
                        </li>
                        <li>
                            <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section7') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section8') }}
                        </li>
                    </ol>
                    {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section9') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section10') }}</strong>
                    <br>
                    {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section11') }}

                    <ol>
                        <li>
                            <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section12') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section13') }}
                        </li>
                        <li>
                            <strong>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section14') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section15') }}
                        </li>
                    </ol>
                </li>
            </ol>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section7.section16') }}</p>

            <h4>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section8.title') }}</h4>
            <p>{{ __('smoking-plan.day_eight_preventing_relapse_stay_vigilant.section8.section1') }}</p>

            <div class="page-break"></div>

        </div>
    </div>


    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.title') }}</h4>
            <p>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section2') }}</p>

            <h4>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section3') }}</h4>
            <p>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section4') }}</p>

            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section5') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section6') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section7') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section8') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section9') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section10') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section11') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section1.section12') }}
                    </p>
                </li>
            </ul>

            <h4>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section2.title') }}</h4>
            <p>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section2.section1') }}</p>
            <p>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section2.section2') }}</p>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.title') }}</h4>

            <ol>
                <li>
                    <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section1') }}</strong>
                    <br>
                    {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section2') }}

                    <ul>
                        <li>
                            <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section3') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section4') }}
                        </li>
                        <li>
                            <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section5') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section6') }}
                        </li>
                        <li>
                            <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section7') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section8') }}
                        </li>
                    </ul>
                    <p>
                        {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section9') }}
                    </p>
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section10') }}</strong>
                    <br>
                    {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section11') }}
                    <ul>
                        <li>
                            <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section12') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section13') }}
                        </li>
                        <li>
                            <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section14') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section15') }}
                        </li>
                        <li>
                            <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section16') }}</strong>
                            <br>
                            {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section17') }}
                        </li>
                    </ul>
                </li>
            </ol>
            <p>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section3.section18') }}</p>

            <h4>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section4.title') }}</h4>
            <p>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section4.section1') }}</p>

            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section4.section2') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section4.section3') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section4.section4') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section4.section5') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section4.section6') }}</strong>
                        <br>
                        {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section4.section7') }}
                    </p>
                </li>
            </ul>
            <p>
                {{ __('smoking-plan.day_nine_embracing_long_term_health_benefits.section4.section8') }}
            </p>

            <div class="page-break"></div>
        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_ten_shifting_your_identity.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.day_ten_shifting_your_identity.section1.title') }}</h4>
            <p>{{ __('smoking-plan.day_ten_shifting_your_identity.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_ten_shifting_your_identity.section1.section2') }}</p>

            <h4>{{ __('smoking-plan.day_ten_shifting_your_identity.section1.section3') }}</h4>
            <p>{{ __('smoking-plan.day_ten_shifting_your_identity.section1.section4') }}</p>

            <ul>
                <li>
                    <p><strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section1.section5') }}</strong>
                        {{ __('smoking-plan.day_ten_shifting_your_identity.section1.section6') }}</p>
                </li>
                <li>
                    <p><strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section1.section5') }}</strong>
                        {{ __('smoking-plan.day_ten_shifting_your_identity.section1.section7') }}</p>
                </li>
                <li>
                    <p><strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section1.section5') }}</strong>
                        {{ __('smoking-plan.day_ten_shifting_your_identity.section1.section8') }}</p>
                </li>
            </ul>

            <p>{{ __('smoking-plan.day_ten_shifting_your_identity.section1.section9') }}</p>

            <h4>{{ __('smoking-plan.day_ten_shifting_your_identity.section2.title') }}</h4>
            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section2.section1') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_ten_shifting_your_identity.section2.section2') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section2.section3') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_ten_shifting_your_identity.section2.section4') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section2.section5') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_ten_shifting_your_identity.section2.section6') }}
                    </p>
                </li>
            </ul>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.day_ten_shifting_your_identity.section3.title') }}</h4>
            <ol>
                <li>
                    <strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section3.section1') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_ten_shifting_your_identity.section3.section2') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section3.section3') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_ten_shifting_your_identity.section3.section4') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section3.section5') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_ten_shifting_your_identity.section3.section6') }}
                </li>
            </ol>

            <h4>{{ __('smoking-plan.day_ten_shifting_your_identity.section4.title') }}</h4>
            <p>{{ __('smoking-plan.day_ten_shifting_your_identity.section4.section1') }}</p>

            <ul>
                <li>
                    <strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section4.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_ten_shifting_your_identity.section4.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section4.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_ten_shifting_your_identity.section4.section5') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_ten_shifting_your_identity.section4.section6') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_ten_shifting_your_identity.section4.section7') }}
                </li>
            </ul>

            <div class="page-break"></div>

        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section1.title') }}</h4>
            <p>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section1.section2') }}</p>

            <h4>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section2.title') }}</h4>
            <p>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section2.section1') }}</p>

            <ul>
                <li>
                    <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section2.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section2.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section2.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section2.section5') }}
                </li>
            </ul>

            <h4>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.title') }}</h4>
            <ol>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section1') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section2') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section3') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section4') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section5') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section6') }}
                    </p>
                    <ul>
                        <li>
                            {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section7') }}
                        </li>
                        <li>
                            {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section8') }}
                        </li>
                        <li>
                            {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section9') }}
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section10') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section11') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section12') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section3.section13') }}
                    </p>
                </li>
            </ol>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section4.title') }}</h4>
            <ol>
                <li>
                    <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section4.section1') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section4.section2') }}

                    <ul>
                        <li>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section4.section3') }}</li>
                        <li>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section4.section4') }}</li>
                    </ul>
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section4.section5') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section4.section6') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section4.section7') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section4.section8') }}
                </li>
            </ol>

            <h4>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section5.title') }}</h4>
            <p>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section5.section1') }}</p>
            <ul>
                <li>
                    <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section5.section2') }}</strong>
                    {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section5.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section5.section4') }}</strong>
                    {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section5.section5') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section5.section6') }}</strong>
                    {{ __('smoking-plan.day_eleven_managing_cravings_in_the_long_term.section5.section7') }}
                </li>
            </ul>

            <div class="page-break"></div>
        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section1.title') }}</h4>
            <p>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section1.section2') }}</p>

            <h4>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section2.title') }}</h4>
            <p>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section2.section1') }}</p>
            <p>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section2.section2') }}</p>

            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section2.section3') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section2.section4') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section2.section5') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section2.section6') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section2.section7') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section2.section8') }}
                    </p>
                </li>
            </ul>

            <h4>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section3.title') }}</h4>
            <p>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section3.section1') }}</p>

            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section3.section2') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section3.section3') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section3.section4') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section3.section5') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section3.section6') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section3.section7') }}
                    </p>
                </li>
            </ul>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.title') }}</h4>
            <ol>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section1') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section2') }}
                    </p>
                    <ul>
                        <li>
                            <p>
                                <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section3') }}</strong>
                                <br/>
                                {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section4') }}
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section5') }}</strong>
                                <br/>
                                {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section6') }}
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section7') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section8') }}
                    </p>
                    <ul>
                        <li>
                            <p>
                                <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section9') }}</strong>
                                <br/>
                                {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section10') }}
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section11') }}</strong>
                                <br/>
                                {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section12') }}
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section13') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section14') }}
                    </p>
                    <ul>
                        <li>
                            <p>
                                <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section15') }}</strong>
                                <br/>
                                {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section16') }}
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section17') }}</strong>
                                <br/>
                                {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section4.section18') }}
                            </p>
                        </li>
                    </ul>
                </li>
            </ol>

            <h4>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section5.title') }}</h4>
            <p>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section5.section1') }}</p>

            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section5.section2') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section5.section3') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section5.section4') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section5.section5') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section5.section6') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_twelve_reflecting_on_emotional_growth.section5.section7') }}
                    </p>
                </li>
            </ul>

            <div class="page-break"></div>
        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_thirteen_celebrating_milestones.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section1.title') }}</h4>
            <p>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section1.section2') }}</p>

            <h4>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.title') }}</h4>
            <p>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section1') }}</p>

            <ul>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section5') }}
                </li>
            </ul>

            <p>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section6') }}</p>
            <ul>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section7') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section8') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section9') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section10') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section11') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section2.section12') }}
                </li>
            </ul>

            <h4>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section3.title') }}</h4>
            <p>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section3.section1') }}</p>
            <ul>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section3.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section3.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section3.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section3.section5') }}
                </li>
            </ul>
            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section4.title') }}</h4>
            <ol>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section4.section1') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section4.section2') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section4.section3') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section4.section4') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section4.section5') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section4.section6') }}
                </li>
            </ol>

            <h4>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section5.title') }}</h4>
            <p>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section5.section1') }}</p>
            <ul>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section5.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section5.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section5.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section5.section5') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_thirteen_celebrating_milestones.section5.section6') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_thirteen_celebrating_milestones.section5.section7') }}
                </li>
            </ul>
            <div class="page-break"></div>


        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section1.title') }}</h4>
            <p>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section1.section1') }}</p>
            <p>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section1.section2') }}</p>

            <h4>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.title') }}</h4>
            <p>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section1') }}</p>
            <p>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section2') }}</p>
            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section3') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section4') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section5') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section6') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section7') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section8') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section9') }}</strong>
                        <br/>
                        {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section2.section10') }}
                    </p>
                </li>
            </ul>

            <h4>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.title') }}</h4>
            <p>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.section1') }}</p>

            <ol>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.section5') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.section6') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.section7') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.section8') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section3.section9') }}
                </li>
            </ol>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section4.title') }}</h4>
            <ol>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section4.section1') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section4.section2') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section4.section3') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section4.section4') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section4.section5') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section4.section6') }}
                </li>
            </ol>

            <h4>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section5.title') }}</h4>
            <ol>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section5.section1') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section5.section2') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section5.section3') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section5.section4') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.day_fourteen_preparing_for_the_future.section5.section5') }}</strong>
                    <br/>
                    {{ __('smoking-plan.day_fourteen_preparing_for_the_future.section5.section6') }}
                </li>
            </ol>

            <div class="page-break"></div>

        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.week_three_strengthening_your_resolve.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.week_three_strengthening_your_resolve.section1.title') }}</h4>
            <p>{{ __('smoking-plan.week_three_strengthening_your_resolve.section1.section1') }}</p>
            <p>{{ __('smoking-plan.week_three_strengthening_your_resolve.section1.section2') }}</p>

            <h4>{{ __('smoking-plan.week_three_strengthening_your_resolve.section2.title') }}</h4>
            <ul>
                <li>
                    <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section2.section1') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section2.section2') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section2.section3') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section2.section4') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section2.section5') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section2.section6') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section2.section7') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section2.section8') }}
                </li>
            </ul>

            <h3>{{ __('smoking-plan.week_three_strengthening_your_resolve.section3.title') }}</h3>
            <h4>{{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section1') }}</h4>

            <p>{{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section2') }}</p>
            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section3') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section4') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section5') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section6') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section7') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section8') }}
                    </p>
                </li>
            </ul>

            <h4>{{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section9') }}</h4>
            <p>{{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section10') }}</p>
            <ul>
                <li>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section11') }}
                </li>
                <li>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section12') }}
                </li>
                <li>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section13') }}
                </li>
            </ul>
            <p>{{ __('smoking-plan.week_three_strengthening_your_resolve.section3.section14') }}</p>

            <h4>{{ __('smoking-plan.week_three_strengthening_your_resolve.section4.title') }}</h4>
            <p>{{ __('smoking-plan.week_three_strengthening_your_resolve.section4.section1') }}</p>
            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section4.section2') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_three_strengthening_your_resolve.section4.section3') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section4.section4') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_three_strengthening_your_resolve.section4.section5') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section4.section6') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_three_strengthening_your_resolve.section4.section7') }}
                    </p>
                </li>
            </ul>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.week_three_strengthening_your_resolve.section5.title') }}</h4>
            <ol>
                <li>
                    <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section1') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section2') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section3') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section4') }}
                    <ul>
                        <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section5') }}</li>
                        <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section6') }}</li>
                        <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section7') }}</li>
                        <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section8') }}</li>
                    </ul>
                </li>
                <li>
                    <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section9') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section10') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section11') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_three_strengthening_your_resolve.section5.section12') }}
                </li>
            </ol>

            <h4>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.title') }}</h4>
            <ol>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section1') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section2') }}
                    </p>
                    <ul>
                        <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section3') }}</li>
                        <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section4') }}</li>
                        <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section5') }}</li>
                    </ul>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section6') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section7') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section8') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section9') }}
                    </p>
                </li>
            </ol>

            <h4>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section10') }}</h4>
            <p>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section11') }}</p>

            <h4>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section12') }}</h4>
            <ul>
                <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section13') }}</li>
                <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section14') }}</li>
                <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section15') }}</li>
                <li>{{ __('smoking-plan.week_three_strengthening_your_resolve.section6.section16') }}</li>
            </ul>

            <div class="page-break"></div>

        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.week_four_finishing_strong.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.week_four_finishing_strong.section1.title') }}</h4>
            <p>{{ __('smoking-plan.week_four_finishing_strong.section1.section1') }}</p>
            <p>{{ __('smoking-plan.week_four_finishing_strong.section1.section2') }}</p>

            <p><strong>{{ __('smoking-plan.week_four_finishing_strong.section1.section3') }}</strong></p>
            <ol>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section1.section4') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section1.section5') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section1.section6') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section1.section7') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section1.section8') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section1.section9') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section1.section10') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section1.section11') }}
                    </p>
                </li>
            </ol>

            <h3>{{ __('smoking-plan.week_four_finishing_strong.section2.title') }}</h3>
            <h4>{{ __('smoking-plan.week_four_finishing_strong.section2.section1') }}</h4>
            <p>{{ __('smoking-plan.week_four_finishing_strong.section2.section2') }}</p>
            <p>{{ __('smoking-plan.week_four_finishing_strong.section2.section3') }}</p>
            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section2.section4') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section2.section5') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section2.section6') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section2.section7') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section2.section8') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section2.section9') }}
                    </p>
                </li>
            </ul>
            <p>{{ __('smoking-plan.week_four_finishing_strong.section2.section10') }}</p>

            <h4>{{ __('smoking-plan.week_four_finishing_strong.section3.title') }}</h4>
            <p>{{ __('smoking-plan.week_four_finishing_strong.section3.section1') }}</p>
            <p>{{ __('smoking-plan.week_four_finishing_strong.section3.section2') }}</p>
            <ul>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section3.section3') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section3.section4') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section3.section5') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section3.section6') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section3.section7') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section3.section8') }}
                    </p>
                </li>
            </ul>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.week_four_finishing_strong.section4.title') }}</h4>
            <ol>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section4.section1') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section4.section2') }}
                    </p>
                    <ul>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section3') }}</li>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section4') }}</li>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section5') }}</li>
                    </ul>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section4.section6') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section4.section7') }}
                    </p>
                    <ul>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section8') }}</li>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section9') }}</li>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section10') }}</li>
                    </ul>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section4.section11') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section4.section12') }}
                    </p>
                    <ul>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section13') }}</li>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section14') }}</li>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section15') }}</li>
                    </ul>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section4.section16') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section4.section17') }}
                    </p>
                    <ul>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section18') }}</li>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section19') }}</li>
                        <li>{{ __('smoking-plan.week_four_finishing_strong.section4.section20') }}</li>
                    </ul>
                </li>
            </ol>

            <h4>{{ __('smoking-plan.week_four_finishing_strong.section5.title') }}</h4>
            <ol>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section5.section1') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section5.section2') }}
                    </p>
                    <ul>
                        <li>
                            {{ __('smoking-plan.week_four_finishing_strong.section5.section3') }}
                            <ul>
                                <li>{{ __('smoking-plan.week_four_finishing_strong.section5.section4') }}</li>
                            </ul>
                        </li>
                        <li>
                            {{ __('smoking-plan.week_four_finishing_strong.section5.section5') }}
                            <ul>
                                <li>{{ __('smoking-plan.week_four_finishing_strong.section5.section6') }}</li>
                            </ul>
                        </li>
                        <li>
                            {{ __('smoking-plan.week_four_finishing_strong.section5.section7') }}
                            <ul>
                                <li>{{ __('smoking-plan.week_four_finishing_strong.section5.section8') }}</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section5.section9') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section5.section10') }}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>{{ __('smoking-plan.week_four_finishing_strong.section5.section11') }}</strong>
                        <br/>
                        {{ __('smoking-plan.week_four_finishing_strong.section5.section12') }}
                    </p>
                    <ul>
                        <li>
                            {{ __('smoking-plan.week_four_finishing_strong.section5.section13') }}
                            <ul>
                                <li>{{ __('smoking-plan.week_four_finishing_strong.section5.section14') }}</li>
                            </ul>
                        </li>
                        <li>
                            {{ __('smoking-plan.week_four_finishing_strong.section5.section15') }}
                            <ul>
                                <li>{{ __('smoking-plan.week_four_finishing_strong.section5.section16') }}</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ol>

            <h4>{{ __('smoking-plan.week_four_finishing_strong.section6.title') }}</h4>
            <p>{{ __('smoking-plan.week_four_finishing_strong.section6.section1') }}</p>

            <ul>
                <li>
                    <strong>{{ __('smoking-plan.week_four_finishing_strong.section6.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_four_finishing_strong.section6.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.week_four_finishing_strong.section6.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.week_four_finishing_strong.section6.section5') }}
                </li>
            </ul>

            <div class="page-break"></div>

        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.final_chapter_celebrate_your_success.title') }}</h2>
        </div>
        <div class="section-content">
            <h4>{{ __('smoking-plan.final_chapter_celebrate_your_success.section1.title') }}</h4>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section1.section1') }}</p>
            <ul>
                @if($quizEntry->isValueSelectedInAnswer(19, 0))
                    <li>{{ __('smoking-plan.final_chapter_celebrate_your_success.section1.section2') }}</li>
                @else
                    <li>{{ __('smoking-plan.final_chapter_celebrate_your_success.section1.section3') }}</li>
                @endif
            </ul>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section1.section4') }}</p>

            <h4>{{ __('smoking-plan.final_chapter_celebrate_your_success.section2.title') }}</h4>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section2.section1') }}</p>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section2.section2') }}</p>
            <ul>
                <li>
                    <strong>{{ __('smoking-plan.final_chapter_celebrate_your_success.section2.section3') }}</strong>
                    <br/>
                    {{ __('smoking-plan.final_chapter_celebrate_your_success.section2.section4') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.final_chapter_celebrate_your_success.section2.section5') }}</strong>
                    <br/>
                    {{ __('smoking-plan.final_chapter_celebrate_your_success.section2.section6') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.final_chapter_celebrate_your_success.section2.section7') }}</strong>
                    <br/>
                    {{ __('smoking-plan.final_chapter_celebrate_your_success.section2.section8') }}
                </li>
            </ul>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section2.section9') }}</p>

            <h4>{{ __('smoking-plan.final_chapter_celebrate_your_success.section3.title') }}</h4>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section3.section1') }}</p>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section3.section2') }}</p>

            <h4>{{ __('smoking-plan.final_chapter_celebrate_your_success.section4.title') }}</h4>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section4.section1') }}</p>
            <ul>
                <li>
                    <strong>{{ __('smoking-plan.final_chapter_celebrate_your_success.section4.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.final_chapter_celebrate_your_success.section4.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.final_chapter_celebrate_your_success.section4.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.final_chapter_celebrate_your_success.section4.section5') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.final_chapter_celebrate_your_success.section4.section6') }}</strong>
                    <br/>
                    {{ __('smoking-plan.final_chapter_celebrate_your_success.section4.section7') }}
                </li>
            </ul>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section4.section8') }}</p>

            <h4>{{ __('smoking-plan.final_chapter_celebrate_your_success.section5.title') }}</h4>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section5.section1') }}</p>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section5.section2') }}</p>
            <ul>
                <li>{{ __('smoking-plan.final_chapter_celebrate_your_success.section5.section3') }}</li>
                <li>{{ __('smoking-plan.final_chapter_celebrate_your_success.section5.section4') }}</li>
                <li>{{ __('smoking-plan.final_chapter_celebrate_your_success.section5.section5') }}</li>
                <li>{{ __('smoking-plan.final_chapter_celebrate_your_success.section5.section6') }}</li>
            </ul>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section5.section7') }}</p>

            <h4>{{ __('smoking-plan.final_chapter_celebrate_your_success.section6.title') }}</h4>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section6.section1') }}</p>
            <p>{{ __('smoking-plan.final_chapter_celebrate_your_success.section6.section2') }}</p>
            <p><strong>{{ __('smoking-plan.final_chapter_celebrate_your_success.section6.section3') }}</strong></p>

            <div class="page-break"></div>

        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('smoking-plan.apendinx_tools_and_resources.title') }}</h2>
        </div>
        <div class="section-content">
            <p>{{ __('smoking-plan.apendinx_tools_and_resources.section1.section1') }}</p>

            <h4>{{ __('smoking-plan.apendinx_tools_and_resources.section2.title') }}</h4>
            <p>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section1') }}</p>
            <ul>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section31')}}
                    <span class="link1">{{ $quizEntry->meditationsUpsellUrl() }}</span>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section32')}}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section5') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section6') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section7') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section8') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section9') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section10') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section11') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section12') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section13') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section14') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section15') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section16') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section17') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section2.section18') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section2.section19') }}
                </li>
            </ul>

            <div class="page-break"></div>

            <h4>{{ __('smoking-plan.apendinx_tools_and_resources.section3.title') }}</h4>
            <p>{{ __('smoking-plan.apendinx_tools_and_resources.section3.section1') }}</p>
            <ul>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section3.section2') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section3.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section3.section4') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section3.section5') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section3.section6') }}</strong>
                    <br/>
                    {{ __('smoking-plan.apendinx_tools_and_resources.section3.section7') }}
                </li>
            </ul>

{{--            <div class="page-break"></div>--}}

{{--            <h4>{{ __('smoking-plan.apendinx_tools_and_resources.section4.title') }}</h4>--}}
{{--            <p>{{ __('smoking-plan.apendinx_tools_and_resources.section4.section1') }}</p>--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section4.section2') }}</strong>--}}
{{--                    <br/>--}}
{{--                    {{ __('smoking-plan.apendinx_tools_and_resources.section4.section3') }}--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section4.section4') }}</strong>--}}
{{--                    <br/>--}}
{{--                    {{ __('smoking-plan.apendinx_tools_and_resources.section4.section5') }}--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section4.section6') }}</strong>--}}
{{--                    <br/>--}}
{{--                    {{ __('smoking-plan.apendinx_tools_and_resources.section4.section7') }}--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section4.section8') }}</strong>--}}
{{--                    <br/>--}}
{{--                    {{ __('smoking-plan.apendinx_tools_and_resources.section4.section9') }}--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section4.section10') }}</strong>--}}
{{--                    <br/>--}}
{{--                    {{ __('smoking-plan.apendinx_tools_and_resources.section4.section11') }}--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section4.section12') }}</strong>--}}
{{--                    <br/>--}}
{{--                    {{ __('smoking-plan.apendinx_tools_and_resources.section4.section13') }}--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section4.section14') }}</strong>--}}
{{--                    <br/>--}}
{{--                    {{ __('smoking-plan.apendinx_tools_and_resources.section4.section15') }}--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <strong>{{ __('smoking-plan.apendinx_tools_and_resources.section4.section16') }}</strong>--}}
{{--                    <br/>--}}
{{--                    {{ __('smoking-plan.apendinx_tools_and_resources.section4.section17') }}--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--            <h4>{{ __('smoking-plan.apendinx_tools_and_resources.section5.title') }}</h4>--}}
{{--            <p>{{ __('smoking-plan.apendinx_tools_and_resources.section5.section1') }}</p>--}}

        </div>
    </div>

</main>
</body>
</html>
