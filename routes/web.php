<?php

use App\Http\Controllers\Admin\QuizEntryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationPagesController;
use App\Http\Controllers\Quiz\PaymentController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\UpSellController;
use App\Http\Middleware\CheckForActiveQuiz;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn() => redirect('home'));
Route::get('/home', [HomeController::class, 'index'])->name('home');
//TODO locale link example https://otwo.life/pl/home
Route::get('/home/{locale}', [HomeController::class, 'selectLocale'])->name('home.select-locale');
Route::get('/quiz/finalize', [QuizController::class, 'finalize'])->name('quiz.finalize');
Route::get('/quiz/{quizType}', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz', [QuizController::class, 'store'])->name('quiz.store');

Route::get('/summary/quiz/{quiz:uuid}', [SummaryController::class, 'show'])->name('summary.quiz.show');

Route::middleware(CheckForActiveQuiz::class)->group(function () {
    Route::get('/summary', [SummaryController::class, 'index'])->name('summary.index');
    Route::get('/summary-get', [SummaryController::class, 'index'])->name('summary-get.index'); //TODO needed for vue to not lose GTM
    Route::post('/summary-get', [SummaryController::class, 'index'])->name('summary-post.index'); //TODO needed for vue to not lose GTM
    Route::post('/quiz/{quiz}/payment', [PaymentController::class, 'store'])->name('quiz.payment.store');
    Route::post('/quiz/{quiz}/payment2', [PaymentController::class, 'store2'])->name('quiz.payment.store');
});

Route::get('/meditations/{quizEntry:uuid}', [UpSellController::class, 'meditationsUpsell'])->name('meditations.index');
Route::get('/priority/{quizEntry:uuid}', [UpSellController::class, 'priorityUpsell'])->name('priority.index');

Route::get('/payment/success', [PaymentController::class, 'success'])->name('quiz.payment.success');
Route::get('/payment/thank-you', [PaymentController::class, 'thankYou'])->name('quiz.payment.thankYou');

Route::get('privacy-policy', [InformationPagesController::class, 'indexPrivacyPolicy'])->name('information-pages.index-privacy-policy');
Route::get('cancellation-policy', [InformationPagesController::class, 'indexCancellationPolicy'])->name('information-pages.index-cancellation-policy');
Route::get('terms-and-conditions', [InformationPagesController::class, 'indexTermsAndConditions'])->name('information-pages.index-terms-and-conditions');

//USER ROUTES
Route::get('/user/dashboard/{quizEntry:uuid}', [\App\Http\Controllers\UserController::class, 'index'])->name('user.dashboard');

Route::get('/quiz-entries/{quizEntry}/generate', [QuizEntryController::class, 'generate'])->name('quiz-entries.generate');
Route::get('/quiz-entries/{quizEntry}/download', [QuizEntryController::class, 'download'])->name('quiz-entries.download');

Route::middleware('auth')->group(function () {
    Route::get('/quiz-entries/generate-invoices', [QuizEntryController::class, 'generateInvoices'])->name('quiz-entries.generate-invoices');

    Route::get('dashboard', function () {
        return redirect()->route('admin.quiz-entries.index');
    });
});

//ADMIN ROUTES
Route::prefix('admin/')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', fn() => redirect()->route('admin.quiz-entries.index'));
    Route::resource('quiz-entries', QuizEntryController::class)->only(['index']);
});

require __DIR__ . '/auth.php';
