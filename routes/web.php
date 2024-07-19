<?php

use App\Http\Controllers\AdminController\AboutPageControlller;
use Illuminate\Support\Facades\Route;
// website controller 
use App\Http\Controllers\WebsiteController\HomeController;
use App\Http\Controllers\WebsiteController\AboutusController;
use App\Http\Controllers\WebsiteController\DoorsController;
use App\Http\Controllers\WebsiteController\VideosController;
use App\Http\Controllers\WebsiteController\BlogController;
use App\Http\Controllers\WebsiteController\ContactController;

// admin controller 
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\LoginController;
use App\Http\Controllers\AdminController\HomePageController;
use App\Http\Controllers\AdminController\BlogSectionController;
use App\Http\Controllers\AdminController\ChangePasswordControlller;
use App\Http\Controllers\AdminController\VideoPageController;
use App\Http\Controllers\AdminControlller\DoorCategoryController;
use App\Http\Controllers\FooterDetailsController;
use App\Http\Controllers\MessageController;
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


   // website Route Start 
 Route::get('/',[HomeController::class,'index']); 
 Route::get('/about-us',[AboutusController::class,'aboutus'])->name('about-us');
 Route::get('/all-doors-details',[DoorsController::class,'doors'])->name('all-doors-details');
 Route::get('/doors-view/{slug}',[DoorsController::class,'singledoors']);
 Route::get('/door-category/{slug1}',[DoorsController::class,'doorCategory']);
//  Route::get('/double-doors',[DoorsController::class,'doubledoors'])->name('double-doors');
//  Route::get('/double-reabte-doors-with-mesh',[DoorsController::class,'doublerebate'])->name('double-reabte-doors-with-mesh');
//  Route::get('/special-doors',[DoorsController::class,'specialdoors'])->name('special-doors');
//  Route::get('/window',[DoorsController::class,'window'])->name('window');
  Route::get('/videos',[VideosController::class,'videos'])->name('videos');
 Route::get('/blog',[BlogController::class,'blog'])->name('blog');
 Route::get('/blog-details/{slug}',[BlogController::class,'blogDetails'])->name('blog-details');
 Route::get('/contact',[ContactController::class,'contact'])->name('contact');
 Route::post('/contactPost',[ContactController::class,'contactPost'])->name('contactPost');

 // end website Route 


 // start admin route 
    Route::group(['prefix' => 'admin'],function(){
        Route::get('/login',[LoginController::class,'login'])->name('admin.login');
        Route::post('/loginpost',[LoginController::class,'loginPost']);
        Route::get('/logout',[LoginController::class,'logout']);

        Route::group(['middleware'=> 'is_admin'],function(){
          // admin panel
        Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
        Route::get('/logout',[LoginController::class,'logout']); 

        // home banner 
        Route::get('/hbannerdetails',[HomePageController::class,'hbannerdetails'])->name('home.hbannerdetails');
        Route::get('/addhbanner',[HomePageController::class,'addhbanner'])->name('home.addhbanner');
        Route::post('/addhbannerpost',[HomePageController::class,'addhbannerPost'])->name('home.addhbannerPost');
        Route::get('/delete/{id}',[HomePageController::class,'bannerdelete'])->name('home.delete');
        Route::get('update/{id}',[HomePageController::class,'bannerupdate'])->name('home.bannerupdate');
        Route::post('updatepost/{id}',[HomePageController::class,'bannerupdatepost'])->name('home.bannerupdatepost');

        // home about
        Route::get('/home-about',[HomePageController::class,'aboutdetails'])->name('home.about-details');
        Route::get('/about-update/{id}',[HomePageController::class,'aboutupdate'])->name('home.about-details-post');
        Route::post('/about-updatepost/{id}',[HomePageController::class,'aboutupdatepost'])->name('home.about-details-update');

        
        // //WINDOWS & DOORS SERVICES
        // Route::get('home-sevices-details',[HomePageController::class,'homeServices'])->name('home.services');
        // Route::get('add-home-services',[HomePageController::class,'addHomeServices']);
        // Route::post('add-home-services',[HomePageController::class,'addHomeServicesPost'])->name('home.add-home-servicesPost');
        // Route::get('home-services-delete/{id}',[HomePageController::class,'homeServicesDelete'])->name('home.serviceDelete');
        // Route::get('/home-service-update/{id}',[HomePageController::class,'homeServiceUpdate'])->name('home.serviceupdate'); 
        // Route::post('/home-service-updatepost/{id}',[HomePageController::class,'ServiceUpdatePost'])->name('home.serviceupdatePost'); 
     
         //Our Features
         Route::get('our-features-details',[HomePageController::class,'ourFeaturesdetails'])->name('home.ourfeatures');
         Route::get('add-features',[HomePageController::class,'ourFeaturesadd'])->name('home.addfeatures');
         Route::post('add-featurespost',[HomePageController::class,'ourFeaturesPost'])->name('home.addfeaturespost');
         Route::get('update-features/{id}',[HomePageController::class,'featuresUpdate']);
         Route::post('update-featurespost/{id}',[HomePageController::class,'featuresUpdatePost'])->name('home.featurePost');
         Route::get('our-feature-delete/{id}',[HomePageController::class,'featuresDelete'])->name('home.featureDelete');
       
         // home page Testimonials 
         Route::get('testimonials-details',[HomePageController::class,'testimonialDetails'])->name('testimonials-details');
         Route::get('testimonials-add',[HomePageController::class,'testimonialAdd'])->name('testimonials-Add');
         Route::post('testimonials-post',[HomePageController::class,'testimonialPost'])->name('testimonials-post');
         Route::get('testimonials-update/{id}',[HomePageController::class,'testimonialUpdate'])->name('testimonials-update');
         Route::post('testimonials-updatepost/{id}',[HomePageController::class,'testimonialUpdatePost'])->name('testimonials-updatePost');
         Route::post('testimonials-delete/{id}',[HomePageController::class,'testimonialDelete'])->name('testimonials-testimonialDelete');

         // blog section 
         Route::get('/blog-details',[BlogSectionController::class,'blogDetails'])->name('admin.blogdeatils');
         Route::get('/add-blog',[BlogSectionController::class,'addBlog'])->name('admin.addblog');
         Route::post('/add-blogpost',[BlogSectionController::class,'addBlogPost']);
         Route::get('/update-blog/{id}',[BlogSectionController::class,'updateBlog'])->name('admin.blogupdate');
         Route::post('/update-blog-post/{id}',[BlogSectionController::class,'updateBlogPost'])->name('admin.blogupdatePost');
         Route::get('/blog-delete/{id}',[BlogSectionController::class,'blogDelete'])->name('admin.blog-delete');
      
          // Door Category 
          Route::get('/door-category',[DoorCategoryController::class,'doorCategory'])->name('door-category');
          Route::get('/add-category',[DoorCategoryController::class,'addCategory'])->name('add-category');
          Route::post('/add-categoryPost',[DoorCategoryController::class,'addCategoryPost'])->name('add-categoryPost');
          Route::get('/update-category/{id}',[DoorCategoryController::class,'updateCategory'])->name('update-category');
          Route::post('/update-categoryPost/{id}',[DoorCategoryController::class,'updateCategoryPost'])->name('update-categoryPost');
          

          // door category details 
          Route::get('/category-details',[DoorCategoryController::class,'categorydetails'])->name('category-details');
          Route::get('/category-adddetails',[DoorCategoryController::class,'categoryadd'])->name('category-add');
          Route::post('/category-addpost',[DoorCategoryController::class,'categoryaddPost'])->name('category-addPost');
          Route::get('/category-update/{id}',[DoorCategoryController::class,'categorupdate'])->name('category-update');
          Route::post('/category-updatePost/{id}',[DoorCategoryController::class,'categoryUpdatePost'])->name('category-updatePost');
          
          // door size 
         Route::get('/door-size',[DoorCategoryController::class,'DoorSizeDetails'])->name('door-size');
         Route::get('/door-sizeadd',[DoorCategoryController::class,'DoorSizeAdd'])->name('door-sizeAdd');
         Route::post('/door-sizeaddPost',[DoorCategoryController::class,'DoorSizeAddPost'])->name('door-sizeAddPost');
       
          // About Page
          Route::get('/about-pagedetails',[AboutPageControlller::class,'aboutdetailsAbout'])->name('about-pagedetails');
          Route::get('/about-pageupdate/{id}',[AboutPageControlller::class,'aboutUpdate'])->name('about-pageupdate');
          Route::post('/about-pagepost/{id}',[AboutPageControlller::class,'aboutPost'])->name('about-pagepost');
          Route::get('/about-projectdetails',[AboutPageControlller::class,'aboutProject'])->name('about-Project');
          Route::get('/about-projectupdate/{id}',[AboutPageControlller::class,'aboutProjectUpdate'])->name('about-projectupdate');
          Route::post('/about-projectupdatePost/{id}',[AboutPageControlller::class,'aboutProjectUpdatePost'])->name('about-projectupdatePost');
       
            // video controller 
          Route::get('/video-details',[VideoPageController::class,'videoDetails'])->name('video-details');  
          Route::get('/add-video',[VideoPageController::class,'addVideo'])->name('add-video');  
          Route::post('/add-videoPost',[VideoPageController::class,'addVideoPost'])->name('add-videoPost');  
          Route::get('/update-video/{id}',[VideoPageController::class,'updateVideo'])->name('update-video');  
          Route::post('/update-videoPost/{id}',[VideoPageController::class,'updateVideoPost'])->name('video-videoPost');  
         
         // footer details update
          Route::get('footer-details',[FooterDetailsController::class,'footerDetails'])->name('footer-details');
          Route::get('footer-update/{id}',[FooterDetailsController::class,'footerUpdate'])->name('footer-update');
          Route::post('footer-updatePost/{id}',[FooterDetailsController::class,'footerUpdatePost'])->name('footer-updatePost');
      
          // change password
          Route::get('/change-password',[ChangePasswordControlller::class,'changePassword'])->name("change-password");
          Route::post('/change-passwordPost',[ChangePasswordControlller::class,'changePasswordPost'])->name("change-passwordPost");
           
          // enquiry message show 
         Route::get('contact-detail',[ContactController::class,'contactDetails'])->name('contact-detail');
         Route::get('contact-show',[ContactController::class,'contactShow'])->name('employee.search');
         Route::get('contact-delete/{id}',[ContactController::class,'contactDelete'])->name('contact-delete');
      
         
        });
    });
    