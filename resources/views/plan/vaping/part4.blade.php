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
            /*margin-bottom: 50px;*/
        }

        .section-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-content p {
            margin-bottom: 20px;
        }

        .page-break {
            page-break-after: always;
        }

        @page {
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .link1 {
            color: #2563eb;
            font-weight: bold;
            /*text-decoration: none;*/
        }

        .testimonial {
        }

        .testimonial-img {
            width: 80px;
            height: 90px;
            float: left;
            margin-right: 10px;
            margin-top: 5px;
        }

        .testimonial strong {
            display: block;
            margin-bottom: 5px;
        }

        .section-content > ol > li {
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<main>

    <div class="section">
        <div class="section-header">
            <h2>{{ __('vaping-plan.your_secret_weapon_against_cravings.title') }}</h2>
        </div>
        <div class="section-content">
            <p>{{ __("vaping-plan.your_secret_weapon_against_cravings.section1.section2") }}</p>
            <p><strong>{{ __("vaping-plan.your_secret_weapon_against_cravings.section1.section3") }}</strong></p>
            <p>{{ __("vaping-plan.your_secret_weapon_against_cravings.section1.section4") }}</p>
            <div>
                <strong> {{ __("vaping-plan.your_secret_weapon_against_cravings.section1.section5") }}</strong> <span class="link1">
                    {{ $quizEntry->meditationsUpsellUrl() }}
                </span>
            </div>
            <br/>
            <hr/>

            <p><strong>{{ __("vaping-plan.your_secret_weapon_against_cravings.section2.section1") }}</strong></p>

            <div class="testimonial">
                <img class="testimonial-img" src="{{ public_path('assets/plan/testimonials/mark.png') }}" alt="Mark">
                <strong>{{ __("vaping-plan.your_secret_weapon_against_cravings.section2.section2") }}</strong>
                {{ __("vaping-plan.your_secret_weapon_against_cravings.section2.section3") }}
            </div>
            <div class="testimonial">
                <img class="testimonial-img" src="{{ public_path('assets/plan/testimonials/sarah.png') }}" alt="Mark">
                <strong>{{ __("vaping-plan.your_secret_weapon_against_cravings.section2.section4") }}</strong>
                {{ __("vaping-plan.your_secret_weapon_against_cravings.section2.section5") }}
            </div>
            <br>
            <div class="testimonial">
                <img class="testimonial-img" src="{{ public_path('assets/plan/testimonials/amanda.png') }}" alt="Mark">
                <strong>{{ __("vaping-plan.your_secret_weapon_against_cravings.section2.section6") }}</strong>
                {{ __("vaping-plan.your_secret_weapon_against_cravings.section2.section7") }}
            </div>

        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>
                {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.title') }}
                <br/>
                {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.title2') }}
            </h2>
        </div>
        <div class="section-content">
            <ol>
                <li>
                    <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section1.title') }}</strong>
                    <br/>
                    <br/>
                    <ul>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section1') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section1.section1') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section2') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section1.section2') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section3') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section1.section3') }}
                        </li>
                    </ul>
                </li>
                <br/>
                <li>
                    <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section2.title') }}</strong>
                    <br/>
                    <br/>
                    <ul>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section1') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section2.section1') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section2') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section2.section2') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section3') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section2.section3') }}
                        </li>
                    </ul>
                </li>
                <br/>
                <li>
                    <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section3.title') }}</strong>
                    <br/>
                    <br/>
                    <ul>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section1') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section3.section1') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section2') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section3.section2') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section3') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section3.section3') }}
                        </li>
                    </ul>
                </li>
                <br/>
                <div class="page-break"></div>
                <li>
                    <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section4.title') }}</strong>
                    <br/>
                    <br/>
                    <ul>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section1') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section4.section1') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section2') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section4.section2') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section3') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section4.section3') }}
                        </li>
                    </ul>
                </li>
                <br/>
                <li>
                    <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section5.title') }}</strong>
                    <br/>
                    <br/>
                    <ul>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section1') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section5.section1') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section2') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section5.section2') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section3') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section5.section3') }}
                        </li>
                    </ul>
                </li>
                <br/>
                <li>
                    <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section6.title') }}</strong>
                    <br/>
                    <br/>
                    <ul>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section1') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section6.section1') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section2') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section6.section2') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section3') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section6.section3') }}
                        </li>
                    </ul>
                </li>
                <br/>
                <li>
                    <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section7.title') }}</strong>
                    <br/>
                    <br/>
                    <ul>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section1') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section7.section1') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section2') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section7.section2') }}
                        </li>
                        <li>
                            <strong>{{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.reusable_section.section3') }}</strong>
                            {{ __('vaping-plan.bonus_seven_day_lung_health_boosting_routine.section7.section3') }}
                        </li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>

</main>
</body>
</html>
