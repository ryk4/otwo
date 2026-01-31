<header>
    <div>
        <h1>
            {{ __('Dear :name', ['name' => $quizEntry->getUserName()]) }},
            <br><br>
            {{ __('We believe in you!') }}
        </h1>

        <h3>
            {{ __('Believe in your ability to quit, for within you lies the strength to overcome any addiction.') }}
        </h3>
        <h3>
            {{ __("Remember that quitting :type is not a loss; it's a gain of a healthier, smoke-free life.", ['type'=> $quizEntry->getQuizTypeReadable()]) }}
        </h3>
        <h3>
            {{ __('Perhaps you are somewhat apprehensive about reading this book. Perhaps, like the majority of smokers, the mere thought of quitting fills you with panic and although you have every intention of stopping one day.') }}
            {{ __("All you need to do is just to make it through today without :type. Don't think about tomorrow. Just focus on today and repeat.", ['type'=> $quizEntry->getQuizTypeReadable()]) }}
        </h3>
    </div>
</header>
