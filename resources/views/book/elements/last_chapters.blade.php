<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter6.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter6.introduction.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter6.introduction.section2') }}</p>

        <p>{{ __('book_static_chapters.chapter6.body.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter6.body.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter6.body.section3') }}</p>
        <p>{{ __('book_static_chapters.chapter6.body.section4') }}</p>

        <p>{{ __('book_static_chapters.chapter6.outro') }}</p>
    </div>
</div>
<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter7.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter7.introduction.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter7.introduction.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter7.introduction.section3') }}</p>

        @foreach(__('book_static_chapters.chapter7.body') as $step)
            <h5>{{ __($step['title']) }}</h5>
            @foreach($step as $key => $value)
                @if (str_contains($key, 'section'))
                    <p>{{ __($value) }}</p>
                @endif
            @endforeach
        @endforeach

        <p>{{ __('book_static_chapters.chapter7.outro.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter7.outro.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter7.outro.section3') }}</p>
    </div>
</div>
<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter8.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter8.introduction.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.introduction.section2') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method1.title') }}</h5>

        <h5>{{ __('book_static_chapters.chapter8.body.method1.section1.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method1.section1.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method1.section1.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method1.section1.section3') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method1.section2.title') }}</h5>
        <ol>
            @foreach(__('book_static_chapters.chapter8.body.method1.section2.content') as $item)
                <li><strong>{{ $item['title'] }}</strong> {{ $item['content'] }}</li>
            @endforeach
        </ol>

        <h5>{{ __('book_static_chapters.chapter8.body.method1.section3.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method1.section3.content') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method1.section4.title') }}</h5>
        <ol>
            <li>{{ __('book_static_chapters.chapter8.body.method1.section4.list1') }}</li>
            <li>{{ __('book_static_chapters.chapter8.body.method1.section4.list2') }}</li>
        </ol>

        <h5>{{ __('book_static_chapters.chapter8.body.method1.section5.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method1.section5.content') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method1.section6.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method1.section6.content') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method1.section7.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method1.section7.content') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method1.section8.title') }}</h5>
        <ol>
            <li>{{ __('book_static_chapters.chapter8.body.method1.section8.list1') }}</li>
            <li>{{ __('book_static_chapters.chapter8.body.method1.section8.list2') }}</li>
        </ol>

        <p>{{ __('book_static_chapters.chapter8.body.method1.outro.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method1.outro.section2') }}</p>


        <h5>{{ __('book_static_chapters.chapter8.body.method2.title') }}</h5>
        <h5>{{ __('book_static_chapters.chapter8.body.method2.section1.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method2.section1.content1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method2.section1.content2') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method2.section2.title') }}</h5>
        <ol>
            @foreach(__('book_static_chapters.chapter8.body.method2.section2.content.list') as $item)
                <li><strong>{{ $item['title'] }}</strong> {{ $item['content'] }}</li>
            @endforeach
        </ol>
        <p>{{ __('book_static_chapters.chapter8.body.method2.section2.content.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method2.section2.content.section2') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method2.section3.title') }}</h5>
        <ol>
            @foreach(__('book_static_chapters.chapter8.body.method2.section3.content.list') as $item)
                <li><strong>{{ $item['title'] }}</strong> {{ $item['content'] }}</li>
            @endforeach
        </ol>
        <p>{{ __('book_static_chapters.chapter8.body.method2.section3.content.section1') }}</p>

        <p>{{ __('book_static_chapters.chapter8.body.method2.outro.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method2.outro.section2') }}</p>


        <h5>{{ __('book_static_chapters.chapter8.body.method3.title') }}</h5>
        <h5>{{ __('book_static_chapters.chapter8.body.method3.section1.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section1.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section1.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section1.section3') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method3.section2.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section2.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section2.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section2.section3') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method3.section3.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section3.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section3.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section3.section3') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method3.section4.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section4.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section4.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section4.section3') }}</p>

        <h5>{{ __('book_static_chapters.chapter8.body.method3.section5.title') }}</h5>
        @foreach(__('book_static_chapters.chapter8.body.method3.section5.list') as $list1)
            <ol>
                <li>{{ __($list1['title']) }}</li>
                <ol>
                    <li><strong>{{ $list1['list1']['title'] }}</strong> {{ $list1['list1']['content'] }}</li>
                    <li><strong>{{ $list1['list2']['title'] }}</strong> {{ $list1['list2']['content'] }}</li>
                </ol>
            </ol>
        @endforeach

        <p>{{ __('book_static_chapters.chapter8.body.method3.section5.outro.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter8.body.method3.section5.outro.section2') }}</p>

        <p>{{ __('book_static_chapters.chapter8.body.method3.outro') }}</p>
    </div>
</div>
<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter9.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter9.introduction.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter9.introduction.section2') }}</p>

        @foreach(__('book_static_chapters.chapter9.body') as $step)
            <h5>{{ $step['title'] }}</h5>
            @foreach($step['sections'] as $section)
                <p>{{ __($section) }}</p>
            @endforeach
        @endforeach

        <p>{{ __('book_static_chapters.chapter9.outro') }}</p>
    </div>
</div>
<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter10.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter10.introduction.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter10.introduction.section2') }}</p>

        @foreach(__('book_static_chapters.chapter10.body') as $section)
            <p>{{ __($section) }}</p>
        @endforeach

        <p>{{ __('book_static_chapters.chapter10.outro') }}</p>
    </div>
</div>
<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter11.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter11.introduction.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter11.introduction.section2') }}</p>

        @foreach(__('book_static_chapters.chapter11.body') as $section)
            <p>{{ __($section) }}</p>
        @endforeach

        <p>{{ __('book_static_chapters.chapter11.outro.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter11.outro.section2') }}</p>
    </div>
</div>
<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter12.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter12.introduction.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter12.introduction.section2') }}</p>

        <h5>{{ __('book_static_chapters.chapter12.body.section1.title') }}</h5>
        <p>{{ __('book_static_chapters.chapter12.body.section1.content') }}</p>

        <p><strong>{{ __('book_static_chapters.chapter12.body.section2.title') }}</strong>
            {{ __('book_static_chapters.chapter12.body.section2.content',
                [
                    'saveDaily' => $quizEntry->getMoneySpentEstimates('daily'),
                    'saveInMonth' => $quizEntry->getMoneySpentEstimates('monthly'),
                    'saveInYear' => $quizEntry->getMoneySpentEstimates('annually'),
                    'saveInTenYears' => $quizEntry->getMoneySpentEstimates('tenYears'),
                ]
                ) }}</p>

        <p><strong>{{ __('book_static_chapters.chapter12.body.section3.title') }}</strong>{{ __('book_static_chapters.chapter12.body.section3.content1') }}</p>
        <p>{{ __('book_static_chapters.chapter12.body.section3.content2') }}</p>

        <h5>{{ __('book_static_chapters.chapter12.body.section4.title') }}</h5>
        @foreach(__('book_static_chapters.chapter12.body.section4.body') as $section)
            <p><strong>{{ $section['title'] }}</strong> {{ __($section['content']) }}</p>
        @endforeach
        <p>{{ __('book_static_chapters.chapter12.outro') }}</p>

    </div>
</div>
<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter13.title') }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter13.introduction') }}</p>

        @foreach(__('book_static_chapters.chapter13.body') as $section)
            <h5>{{ __($section['title']) }}</h5>
            <p>{{ __($section['content']) }}</p>
        @endforeach

        <p>{{ __('book_static_chapters.chapter13.outro') }}</p>
    </div>
</div>
<div class="section">
    <div class="section-header">
        <h4>{{ __('book_static_chapters.chapter14.title', ['value' => $quizEntry->type === \App\Enums\QuizType::vaping ? 'Vape' : 'Smoke']) }}</h4>
    </div>
    <div class="section-content">
        <p>{{ __('book_static_chapters.chapter14.body.section1') }}</p>
        <p>{{ __('book_static_chapters.chapter14.body.section2') }}</p>
        <p>{{ __('book_static_chapters.chapter14.body.section3') }}</p>
    </div>
</div>
