<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\ServiceCategoryController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ServiceController;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\Home\TestimonialController;
use App\Http\Controllers\Home\TeamController;
use App\Http\Controllers\Home\ContactController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(DemoController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');


    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('cotact.page');
});

Route::get('/dashboard', function () {
    return view('admin.index');

})->middleware(['auth', 'verified'])->name('dashboard');

// -----------Admin routes----------------------
Route::middleware(['auth'])->group(function ()
{
    Route::controller(AdminController::class)->group(function()
    {
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','profile')->name('admin.profile');
    Route::get('/edit/profile','editProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/change/password', 'changePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });
});

 //--------------------------------------- Porfolio All Route---------------------------
 Route::controller(PortfolioController::class)->group(function ()
 {
    Route::get('/all/portfolio', 'AllPortfolio')->name('all.portfolio');
    Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio');
    Route::post('/store/portfolio', 'StorePortfolio')->name('store.protfolio');
    Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
    Route::post('/update/portfolio', 'UpdatePortfolio')->name('update.protfolio');
    Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');
    Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');
    Route::get('/portfolio', 'HomePortfolio')->name('home.portfolio');
});
// -----------About page routes----------------------
Route::controller(AboutController::class)->group(function ()
 {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/about', 'HomeAbout')->name('home.about');
    Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');
    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
});

// -----------Testimonial page routes----------------------
Route::controller(TestimonialController::class)->group(function ()
 {
    Route::get('/all/testimonial', 'AllTestimonial')->name('all.testimonial');
    Route::get('/add/testimonial', 'AddTestimonial')->name('add.testimonial');
    Route::post('/store/testimonial', 'StoreTestimonial')->name('store.testimonial');
    Route::get('/edit/testimonial/{id}', 'EditTestimonial')->name('edit.testimonial');
    Route::post('/update/testimonial', 'UpdateTestimonial')->name('update.testimonial');
    Route::get('/delete/testimonial/{id}', 'DeleteTestimonial')->name('delete.testimonial');

});


// -----------Team page routes----------------------
Route::controller(TeamController::class)->group(function ()
 {
    Route::get('/all/team', 'AllTeam')->name('all.team');
    Route::get('/add/team', 'AddTeam')->name('add.team');
    Route::post('/store/team', 'StoreTeam')->name('store.team');
    Route::get('/edit/team/{id}', 'EditTeam')->name('edit.team');
    Route::post('/update/team', 'UpdateTeam')->name('update.team');
    Route::get('/delete/team/{id}', 'DeleteTeam')->name('delete.team');

});
// -----------HomeSlide routes----------------------
Route::controller(HomeSliderController::class)->group(function ()
{
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
});


// Footer All Route
Route::controller(FooterController::class)->group(function ()
{
  Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
  Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
});

// Blog Category All Routes
Route::controller(BlogCategoryController::class)->group(function ()
{
    Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
    Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');
    Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
    Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
    Route::post('/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');
    Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
});


 // Blog All Route
 Route::controller(BlogController::class)->group(function ()
 {
    Route::get('/all/blog', 'AllBlog')->name('all.blog');
    Route::get('/add/blog', 'AddBlog')->name('add.blog');
    Route::post('/store/blog', 'StoreBlog')->name('store.blog');
    Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
    Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
    Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');
    Route::get('/blog/details/{id}', 'BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}', 'CategoryBlog')->name('category.blog');
    Route::get('/blog', 'HomeBlog')->name('home.blog');
});


// service Category All Routes
Route::controller(ServiceCategoryController::class)->group(function ()
{
    Route::get('/all/service/category', 'AllServiceCategory')->name('all.service.category');
    Route::get('/add/service/category', 'AddServiceCategory')->name('add.service.category');
    Route::post('/store/service/category', 'StoreServiceCategory')->name('store.service.category');
    Route::get('/edit/service/category/{id}', 'EditServiceCategory')->name('edit.service.category');
    Route::post('/update/service/category/{id}', 'UpdateServiceCategory')->name('update.service.category');
    Route::get('/delete/service/category/{id}', 'DeleteServiceCategory')->name('delete.service.category');
});


 // service All Route
 Route::controller(ServiceController::class)->group(function ()
 {
    Route::get('/all/service', 'AllService')->name('all.service');
    Route::get('/add/service', 'AddService')->name('add.service');
    Route::post('/store/service', 'StoreService')->name('store.service');
    Route::get('/edit/service/{id}', 'EditService')->name('edit.service');
    Route::post('/update/service', 'UpdateService')->name('update.service');
    Route::get('/delete/service/{id}', 'DeleteService')->name('delete.service');
    Route::get('/service/details/{id}', 'ServiceDetails')->name('service.details');
    Route::get('/category/service/{id}', 'CategoryService')->name('category.service');
    Route::get('/service', 'HomeService')->name('home.service');
});



// Contact All Route
Route::controller(ContactController::class)->group(function ()
 {

  Route::get('/contact/setup', 'ContactSetup')->name('contact.setup');
  Route::post('/update/contact', 'UpdateContact')->name('update.contact');
  Route::get('/contact', 'HomeContact')->name('home.contact');

});








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
