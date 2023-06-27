<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;

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

Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin.logout');

Route::get('/admin', function () {
    return redirect()->route('login');
})->name('admin.login');

Route::group(['middleware' => 'auth'], function(){

Route::get('/admin/addtestimonial', [HomeController::class, 'index'])->name('admin.home');
Route::post('/admin/testimonials',[HomeController::class, 'testimonials'])->name('admin.testimonials');
Route::get('/admin/gettimonialdata', [HomeController::class, 'gettestimonialdata'])->name('admin.gettestimonialdata');
Route::get('/admin/showtestimonials', [HomeController::class, 'showtestimonials'])->name('admin.showtestimonials');
Route::get('/admin/edittestimonial/{id}', [HomeController::class,'edittestimonial'])->name('admin.edittestimonial');
Route::post('/admin/updatetestimonial', [HomeController::class,'updatetestimonial'])->name('admin.updatetestimonial');
Route::get('/admin/deletetestimonial/{id}',[HomeController::class,'deletetestimonial'])->name('admin.deletetestimonial');



Route::get('/admin/getportfoliodata', [HomeController::class, 'getportfoliodata'])->name('admin.getportfoliodata');
Route::get('/admin/portfolio',[HomeController::class, 'portfolio'])->name('admin.portfolio');
Route::post('/admin/saveportfolio',[HomeController::class, 'saveportfolio'])->name('admin.saveportfolio');
Route::get('/admin/showportfolio', [HomeController::class, 'showportfolio'])->name('admin.showportfolio');
Route::get('/admin/editportfolio/{id}', [HomeController::class,'editportfolio'])->name('admin.editportfolio');
Route::post('/admin/updateportfolio', [HomeController::class,'updateportfolio'])->name('admin.updateportfolio');
Route::get('/admin/deleteportfolio/{id}',[HomeController::class,'deleteportfolio'])->name('admin.deleteportfolio');


Route::get('/admin/getclientdata', [HomeController::class, 'getclientdata'])->name('admin.getclientdata');
Route::get('/admin/client',[HomeController::class, 'clientproject'])->name('admin.clientproject');
Route::post('/admin/saveclient',[HomeController::class, 'saveclientproject'])->name('admin.saveclientproject');
Route::get('/admin/showoclient',[HomeController::class, 'showoclient'])->name('admin.showclient');
Route::get('/admin/deleteclient/{id}',[HomeController::class,'deleteclient'])->name('admin.deleteclient');
Route::get('/admin/editclient/{id}', [HomeController::class,'editclient'])->name('admin.editclient');
Route::post('/admin/updateclient', [HomeController::class,'updateclient'])->name('admin.updateclient');


Route::get('/admin/getofficedata', [HomeController::class, 'getofficedata'])->name('admin.getofficedata');
Route::post('/admin/saveofficevideo',[HomeController::class, 'saveofficevideo'])->name('admin.saveofficevideo');
Route::get('/admin/officevideo',[HomeController::class, 'officevideo'])->name('admin.officevideo');
Route::get('/admin/showofficevideo',[HomeController::class, 'showofficevideo'])->name('admin.showofficevideo');
Route::get('/admin/editoffice/{id}', [HomeController::class,'editoffice'])->name('admin.editoffice');
Route::post('/admin/updateoffice', [HomeController::class,'updateoffice'])->name('admin.updateoffice');
Route::get('/admin/deleteoffice/{id}',[HomeController::class,'deleteoffice'])->name('admin.deleteoffice');


Route::get('/admin/getcareerdata', [HomeController::class, 'getcareerdata'])->name('admin.getcareerdata');
Route::get('/admin/career',[HomeController::class,'career'])->name('admin.career');
Route::post('/admin/savecareer',[HomeController::class,'savecareer'])->name('admin.savecareer');
Route::get('/admin/careerform',[HomeController::class,'careerform'])->name('admin.careerform');
Route::get('/admin/showcareer', [HomeController::class,'showcareer'])->name('admin.showcareer');
Route::get('/admin/deletecareer/{id}', [HomeController::class,'deletecareer'])->name('admin.deletecareer');
Route::get('/admin/deletecareerapplication/{id}', [HomeController::class,'deletecareerapplication'])->name('admin.deletecareerapplication');
Route::get('/admin/editcareer/{id}', [HomeController::class,'editcareer'])->name('admin.editcareer');
Route::post('/admin/updatecareer', [HomeController::class,'updatecareer'])->name('admin.updatecareer');
Route::get('/admin/disablecareer/{id}', [HomeController::class,'disablecareer'])->name('admin.disablecareer');
Route::post('/admin/disablecareer', [HomeController::class,'disablecareer1'])->name('admin.disablecareer1');



Route::get('/admin/contactusdetail',[HomeController::class,'contactusdetail'])->name('admin.contactusdetail');
Route::get('admin/{id}/download', [HomeController::class,'download'])->name('career.download');


Route::get('/customeversion',[HomeController::class,'customeversion'])->name('version');
Route::post('/admin/saveversion',[HomeController::class,'saveversion'])->name('admin.saveversion');


Route::get('/admin/getclienttimonialdata', [HomeController::class, 'getclienttestimonialdata'])->name('admin.getclienttestimonialdata');
Route::get('/admin/clienttestimonial',[HomeController::class, 'clienttestimonial'])->name('admin.clienttestimonial');
Route::post('/admin/saveclienttestimonial',[HomeController::class, 'saveclienttestimonial'])->name('admin.saveclienttestimonial');
Route::get('/admin/showclienttestimonial', [HomeController::class,'showclienttestimonial'])->name('admin.showclienttestimonial');
Route::get('/admin/deleteclienttestimonial/{id}', [HomeController::class,'deleteclienttestimonial'])->name('admin.deleteclienttestimonial');
Route::get('/admin/editclienttestimonial/{id}', [HomeController::class,'editclienttestimonial'])->name('admin.editclienttestimonial');
Route::post('/admin/updateclienttestimonial', [HomeController::class,'updateclienttestimonial'])->name('admin.updateclienttestimonial');

Route::get('/admin/change-password', [HomeController::class,'changepassword'])->name('changepassword');
Route::post('/change-password',  [HomeController::class,'storechangepassword'])->name('change.password');


Route::post('/testimonial/reorder',[HomeController::class,'reorder'])->name('testimonial.reorder');
Route::post('/portfolio/reorder',[HomeController::class,'portfolioreorder'])->name('portfolio.reorder');
Route::post('/clienttestimonial/reorder',[HomeController::class,'clienttestimonialreorder'])->name('clienttestimonial.reorder');
Route::post('/career/reorder',[HomeController::class,'careerreorder'])->name('career.reorder');
Route::post('/officevideo/reorder',[HomeController::class,'officevideoreorder'])->name('officevideo.reorder');
Route::post('/client/reorder',[HomeController::class,'clientreorder'])->name('client.reorder');

Route::get('/admin/blogs',[HomeController::class,'allblogs'])->name('admin.blogs');
Route::get('/admin/blog',[HomeController::class,'addblog'])->name('admin.blog');
Route::post('/admin/saveblog',[HomeController::class,'saveblog'])->name('admin.saveblog');
Route::post('ckeditor/upload', [HomeController::class,'upload'])->name('ckeditor.upload');
Route::get('/admin/showblog', [HomeController::class, 'showblog'])->name('admin.showblog');

Route::get('/admin/editblog/{id}', [HomeController::class,'editblog'])->name('admin.editblog');
Route::post('/admin/updateblog', [HomeController::class,'updateblog'])->name('admin.updateblog');
Route::get('/admin/deleteblog/{id}',[HomeController::class,'deleteblog'])->name('admin.deleteblog');

Route::get('/admin/blogcategory',[HomeController::class,'addblogcategory'])->name('admin.blogcategory');
Route::post('/admin/saveblogcategory',[HomeController::class,'saveblogcategory'])->name('admin.saveblogcategory');
Route::get('/admin/showblogcategory', [AdminBlogController::class, 'showblogcategory'])->name('admin.showblogcategory');
Route::get('/admin/editblogcategory/{id}', [AdminBlogController::class,'editblogcategory'])->name('admin.editblogcategory');
Route::post('/admin/updateblogcategory', [AdminBlogController::class,'updateblogcategory'])->name('admin.updateblogcategory');
Route::get('/admin/deleteblogcategory/{id}',[AdminBlogController::class,'deleteblogcategory'])->name('admin.deleteblogcategory');

Route::get('/admin/bloguser',[HomeController::class,'addbloguser'])->name('admin.bloguser');
Route::post('/admin/savebloguser',[HomeController::class,'savebloguser'])->name('admin.savebloguser');
Route::get('/admin/showbloguser', [AdminBlogController::class, 'showbloguser'])->name('admin.showbloguser');
Route::get('/admin/editbloguser/{id}', [AdminBlogController::class,'editbloguser'])->name('admin.editbloguser');
Route::post('/admin/updatebloguser', [AdminBlogController::class,'updatebloguser'])->name('admin.updatebloguser');
Route::get('/admin/deletebloguser/{id}',[AdminBlogController::class,'deletebloguser'])->name('admin.deletebloguser');

Route::get('/admin/showcomment', [AdminBlogController::class, 'showblogcomment'])->name('admin.showcomment');
Route::get('/admin/deleteblogcomment/{id}',[AdminBlogController::class,'deleteblogcomment'])->name('admin.deleteblogcomment');


// Route::post('ckeditor-images', [HomeController::class,'ckeditorImages'])->name('ckeditor_images');

Route::get('/clear-cache1', function() {

    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return back();

})->name('clear');

});




Route::get('/sitemap.xml',[HomeController::class,'sitemap'])->name('sitemap');

Route::get('/',[HomeController::class,'homepage'])->name('homepage');
// Route::get('/', function () {
//     return redirect()->route('homepage');
// });


// Route::get('/home-testimonial',[HomeController::class,'hometestimonial'])->name('hometestimonial');

Route::get('/clients',[HomeController::class,'clientmore'])->name('clientmore');

Route::get('/about-us',[AboutusController::class,'aboutuspage'])->name('aboutuspage');
Route::get('/portfolio',[PortfolioController::class,'portfoliopage'])->name('portfoliopage');
Route::get('/returnportfolio',[PortfolioController::class,'returnportfoliopage'])->name('returnportfoliopage');

Route::get('/career',[CareerController::class,'careerpage'])->name('careerpage');
Route::get('/careermore/{id}',[CareerController::class,'careermore'])->name('careerpagebyid');


Route::get('/contact-us',[ContactusController::class,'contactuspage'])->name('contactuspage');
Route::post('/savecontactus',[ContactusController::class, 'savecontactus'])->name('savecontactus');
Route::post('/saveapplycareer',[CareerController::class, 'saveapplycareer'])->name('saveapplycareer');

Route::post('addComment',[CommentController::class,'addComment'])->name('addComment');


Route::get('/services',[HomeController::class,'servicepage'])->name('servicepage');
Route::get('/testimonial',[TestimonialController::class,'testimonialpage'])->name('testimonialpage');
Route::get('/hire-us',[HomeController::class,'hireuspage'])->name('hireuspage');
Route::get('/internship',[HomeController::class,'internshippage'])->name('internshippage');

Route::get('/blogdata',[BlogController::class,'blogpage'])->name('bloagpage');
// Route::get('/blog/{id}',[BlogController::class,'blogdetailpage'])->name('bloagdetailpage');
Route::get('/blog',[BlogController::class,'blogdata'])->name('blogdata');

Route::get('/blog/{slug}',[BlogController::class,'blogdetailpage'])->name('bloagdetailpage');


Route::get('/blog1/{slug}',[BlogController::class,'contentpage'])->name('bloagdetailpage1');
Route::get('/blog2/{slug}',[BlogController::class,'portfoliopage'])->name('portfolioblog');
Route::get('/blog2/{slug}',[BlogController::class,'contactpage'])->name('contactblog');

Route::post('/clapblog',[BlogController::class,'blogclap'])->name('blogclap');

Route::post('/clapblogshow',[BlogController::class,'blogclapshow'])->name('blogclapshow');


Route::post('/blogsearch',[BlogController::class,'blogsearch'])->name('blogsearch');

Route::get('/blog-detailid/{id}', [BlogController::class, 'blog'])->name('blogdetail');

Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return back();
});

Auth::routes();

