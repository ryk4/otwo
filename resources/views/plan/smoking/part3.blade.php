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

        /*.section {*/
        /*    margin-top: 0px;*/
        /*    margin-bottom: 50px;*/
        /*    text-align: justify;*/
        /*}*/

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
            <h2>{{ __('smoking-plan.craving_log_table_template.title') }}</h2>
        </div>
        <div class="section-content">
            <p>{{ __('smoking-plan.craving_log_table_template.section1.section1') }}</p>
            <ol>
                <li>
                    <strong>{{ __('smoking-plan.craving_log_table_template.section1.section2') }}</strong>
                    {{ __('smoking-plan.craving_log_table_template.section1.section3') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.craving_log_table_template.section1.section4') }}</strong>
                    {{ __('smoking-plan.craving_log_table_template.section1.section5') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.craving_log_table_template.section1.section6') }}</strong>
                    {{ __('smoking-plan.craving_log_table_template.section1.section7') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.craving_log_table_template.section1.section8') }}</strong>
                    {{ __('smoking-plan.craving_log_table_template.section1.section9') }}
                </li>
                <li>
                    <strong>{{ __('smoking-plan.craving_log_table_template.section1.section10') }}</strong>
                    {{ __('smoking-plan.craving_log_table_template.section1.section11') }}
                </li>
            </ol>
            <p>{{ __('smoking-plan.craving_log_table_template.section1.section12') }}</p>
        </div>
    </div>


</main>
</body>
</html>
