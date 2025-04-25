<?php

use App\Http\Controllers\FeedbackController;
use App\Models\Student;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $students = Student::all();
    return view('dashboard', compact('students'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');

Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}', [StudentController::class, 'update'])->name('student.update');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.form');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.submit');

require __DIR__ . '/auth.php';
