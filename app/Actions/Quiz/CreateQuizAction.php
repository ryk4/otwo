<?php

namespace App\Actions\Quiz;

use App\Actions\Email\EmailSubscription\AssignSubscriberToGroupAction;
use App\Actions\Email\EmailSubscription\CreateSubscriberAction;
use App\Actions\LocaleSetting\GetLocaleSettingAction;
use App\Enums\LanguageType;
use App\Enums\QuizStatusType;
use App\Enums\QuizType;
use App\Models\QuizEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateQuizAction
{
    public function __construct(
        protected CreateSubscriberAction $createSubsriberAction,
        protected AssignSubscriberToGroupAction $assignSubscriberToGroupAction,
    ) {}

    public function handle(Request $request): QuizEntry
    {
        $quizEntry = QuizEntry::create([
            'uuid' => Str::uuid(),
            'type' => QuizType::from($request->type),
            'status' => QuizStatusType::SUBSCRIBED,
            'email' => $request->email,
            'ip_address' => $request->ip(),
            'selections' => $request->selections,
            'language' => app(GetLocaleSettingAction::class)->handle()?->language ?? LanguageType::ENGLISH,
        ]);

        $this->createSubsriberAction->handle(email: $request->email, quizEntry: $quizEntry);
        $this->assignSubscriberToGroupAction->handle(groupId: config('services.mailerlite.groups.subscribed'), email: $request->email);

        return $quizEntry;
    }
}
