<?php

use App\Http\Controllers\BookScoutController;
use App\Http\Controllers\KDPNicheController;
use App\Http\Controllers\KeywordController;
use App\Http\Controllers\ManageSubscriptionController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductCompetitorsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\SalesTrackerController;
use App\Http\Controllers\TradeMarkController;
use App\Models\Template;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Notification;
use App\Http\Controllers\TutorialsController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    $notifications = Notification::orderBy('id', 'desc')->take(2)->get();
    $api_url = 'https://bookgrip.com/api/video.php';
    $json_data = file_get_contents($api_url);

    $results = json_decode($json_data);
    // dd($results);
    return view('dashboard', compact('notifications', 'results'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/payment-success', [ConvertPaidController::class, 'index'])->name('payment-success');
// Route::post('/payment-success', [ConvertPaidController::class, 'store'])->name('payment-success');


Route::get('/resources', [ResourcesController::class, 'index'])->name('resources');
Route::get('/resources/images', [ResourcesController::class, 'images'])->name('recources.image');
Route::get('/resources/docs', [ResourcesController::class, 'docs'])->name('resources.docs');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/book-scout', [BookScoutController::class, 'index'])->name('book-scout');
    Route::post('/book-scout', [BookScoutController::class, 'create'])->name('book-scout-post');

    Route::get('/product-competitors', [ProductCompetitorsController::class,'index'])->name('product-competitors');
    Route::post('/product-competitors', [ProductCompetitorsController::class, 'create'])->name('product-competitors-post');

    Route::get('/keyword-research', [KeywordController::class, 'index'])->name('keyword');
    Route::post('/keyword-research', [KeywordController::class, 'create'])->name('keyword-post');

    Route::get('/notification', [NotificationController::class, 'index'])->name('notification');

    Route::get('/tutorials', [TutorialsController::class, 'index'])->name('tutorials');

    Route::get('/manage-subscription', [ManageSubscriptionController::class, 'index'])->name('manage-subscription');

    Route::get('/select-plan', function(){
        if(auth()->user()->is_paid == 1){
            return redirect(route('dashboard'));
        }
        return view('pages.select-plan');
    })->name('select-plan');

    Route::get('/sales-tracker', [SalesTrackerController::class, 'index'])->name('sales-tracker');
    Route::post('/sales-tracker', [SalesTrackerController::class,'check'])->name('sales-tracker.post');
    
    
    Route::get('/book-scout-data', function(){
        return view('pages.book-scout-data');
    })->name('book-scout-data');

    Route::get("/kdp-categories", function(){
        return view("pages.kdp-categories");
    })->name("kdp-categories");

    Route::get('/product-competitors-data', function(){
        return view('pages.product-competitors-data');
    })->name('product-competitors-data');

    Route::get('/amazon-niche-finder', function(){
        return view('pages.amazon-niche-finder');
    })->name('amazon-niche-finder');

    Route::get('/pricing', function(){
        return view('pages.pricing');
    })->name('pricing');
    
    Route::get('/studio', function(){
        return view('pages.studio');
    })->name('studio');

    Route::get('/custom-books', function(){
        return view('pages.custom-book');
    })->name('custom-books');

    Route::get('/cover-creator', function(){
        return view('pages.cover-templates');
    })->name('cover-templates');

    Route::get('/cover-creator/{id}', function($id){
        $template = Template::find($id);
        return view('pages.cover-creator',['url'=>$template->template_url]);
    })->name('cover-creator');


    Route::get('/create-pdf/{id}', [PdfController::class, 'index'])->name('create-pdf');
    Route::post('', [PdfController::class,'create'])->name('create.pdf.post');

    Route::get('/update-credits', function(){
        DB::table('users')->update(['book_scout_credit' => 25]);
        return "Credit updated!";
    });

    Route::get('/puzzle', function(){
        return view('pdf.puzzle'); 
    });
    
    //Trade Mark checker
    Route::get("/trade-mark", [TradeMarkController::class, "index"])->name("trade-mark");
    Route::post("/trade-mark-post", [TradeMarkController::class, "post"])->name("trade-mark-post");
    Route::get("/trade-mark-credit-update", function(){
        DB::table('users')->update(['trade_mark_credits' => 20]);
        return "Credit updated!";
    })->name("trade-mark-credit-update");

    //Editor 
    Route::get("/editor", function(){
        return view("netlify.editor");
    })->name("editor");

    //Description formater
    Route::get('/description-formatter', function(){
        return view("pages.description-formatter");
    })->name("description-formatter");

    Route::post('/description-formatter', function(Request $request){
        $data = $request->editor1;
        $title = $request->title;
        return view("pages.description-formatter", compact("data", "title"));
    })->name("description-formatter.post");

    Route::get('/favourite-keywords', [KeywordController::class, 'show_favourite'])->name('favourite-keywords');

    Route::post('/keyword-data', [KeywordController::class, 'favourite'])->name('favourite');

    Route::post('/delete-favourite', [KeywordController::class,'delete_favourite'])->name('delete-favourite');

    //KDP niche finder
    Route::get('/kdp-niche-finder', [KDPNicheController::class,'index'])->name('kdp-niche-finder');
    Route::post('/kdp-niche-finder', [KDPNicheController::class,'create'])->name('kdp-niche-finder.post');
    Route::get('/favourite-niches', [KDPNicheController::class,'show_favourite'])->name('favourite-niches');
    Route::post('/favourite-niches', [KDPNicheController::class, 'add_favourite'])->name('favourite-niches.post');
    Route::post('/delete-favourite-niche', [KDPNicheController::class, 'delete_favourite'])->name('delete-favourite-niche.post');


    //Test Routes 
    Route::get('/create-pdf-new', function(){
        $pdf = Pdf::loadView("pdf.math");
        return $pdf->stream();
    });

    Route::post('/create-pdf-new', function(Request $request){
        
        
        $pdf = Pdf::loadView("sudoku.sudoku");
        return $pdf->stream();
        // return view('pdf.test', $data);
    })->name('create-pdf-new.post');

    

    // Route::get('/pdf', function() {
    //     $id = DB::table('users')->where('email', auth()->user()->email)->first();  
    //     dd($id->id);
    //     // return view('testpdf');
    // });


    Route::get('/payment/monthly', function (Request $request) {
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return $request->user()->checkout('247482')
            ->withName($name)
            ->withEmail($email)
            ->withDescription('Use same email which is used to create BookGrip account!')
            ->redirectTo(url('/upgrade'));
    })->name('monthly');

    Route::get('/payment/yearly', function (Request $request) {
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return $request->user()->checkout('247483')
            ->withName($name)
            ->withEmail($email)
            ->withDescription('Use same email which is used to create BookGrip account!')
            ->redirectTo(url('/upgrade'));
    })->name('yearly');

    Route::get('/upgrade', function(){
        $email = Auth::user()->email;
        $id = DB::table('users')->where('email', $email)->first();
        $update_plan = User::find($id->id);
        $update_plan->is_paid = 1;
        if($update_plan->update()){
            return redirect(url('/dashboard'));
        }
        
    })->name('upgrade');

    Route::get('/cancel', function(){
        $email = Auth::user()->email;
        $id = DB::table('users')->where('email', $email)->first();
        $update_plan = User::find($id->id);
        $update_plan->is_paid = 0;
        if($update_plan->update()){
            return redirect("https://bookgrip.com/api/subs_cancel.php?email=$email");
        }
    })->name('cancel');

    

    
});

require __DIR__.'/auth.php';
