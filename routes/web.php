<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\KundkundSwamijiController;
use App\Http\Controllers\User\GyansagarjiController;
use App\Http\Controllers\User\ShantisagarjiController;
use App\Http\Controllers\User\ShivsagarjiController;
use App\Http\Controllers\User\VeersagarjiController;
use App\Http\Controllers\User\VidyasagarjiController;
use App\Http\Controllers\User\ViveksagarjiController;
use App\Http\Controllers\User\VijaySagarjiController;
use App\Http\Controllers\User\VinaySagarjiController;
use App\Http\Controllers\User\VipulMatiMatajiController;
use App\Http\Controllers\User\VishaalMatiMatajiController;
use App\Http\Controllers\User\VidhyutMatiMatajiController;
use App\Http\Controllers\User\ContactUsController;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\SuvicharImageController;
use App\Http\Controllers\Admin\SuvicharTextController;
use App\Http\Controllers\Admin\SanghastAaryikaController;
use App\Http\Controllers\Admin\SanghasthBrahmacharyBahaneController;
use App\Http\Controllers\Admin\PravachanVideoController;
use App\Http\Controllers\Admin\PravachanAudioController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ViharInfoController;
use App\Http\Controllers\Admin\SahityaController;
use App\Http\Controllers\User\GuruparamparaController;
use App\Http\Controllers\Admin\ChaturmasJanakareeController;
use App\Http\Controllers\Admin\VigyanMatiMatajiController;
use App\Http\Controllers\Admin\OshadhiManjooshaController;
use App\Http\Controllers\Admin\MetaDataController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\RanoliRatnakar;
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
Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
     $exitCode = Artisan::call('route:clear');
      $exitCode = Artisan::call('clear-compiled');
      echo $exitCode = Artisan::call('config:cache');
    // return what you want
});
Route::get('/migrate', function() {
    $exitCode = Artisan::call('migrate');
    
});
/* Route::get('/', function () {
    return view('user.home.home');
}); */


Route::resource('home', HomeController::class);
Route::any('/', [HomeController::class, 'index'])->name('home.index');
Route::any('sahitya-search', [HomeController::class, 'getAllSahitya'])->name('home.sahitya');
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact_us.index');
Route::post('contact_us/store', [ContactUsController::class, 'store'])->name('contact_us.store');


Route::any('aacharya-shri-108-kund-kund-swami-maharaj-ji', [KundkundSwamijiController::class, 'index'])->name('aacharya_shri_108_kund_kund_swami_maharaj_ji.index');
Route::any('aachary-shri-108-shanti-sagar-maharaj-ji', [ShantisagarjiController::class, 'index'])->name('aachary_shri_108_shanti_sagar_maharaj_ji.index');			
Route::any('aachary_shri_108_veer_sagar_maharaj_ji', [VeersagarjiController::class, 'index'])->name('aachary_shri_108_veer_sagar_maharaj_ji.index');	
Route::any('aachary_shri_108_shiv_sagar_maharaj_ji', [ShivsagarjiController::class, 'index'])->name('aachary_shri_108_shiv_sagar_maharaj_ji.index');		
Route::any('aachary-shri-108-gyaan-sagar-maharaj-ji', [GyansagarjiController::class, 'index'])->name('aachary_shri_108_gyaan_sagar_maharaj_ji.index');		
Route::any('aachary-shri-108-vidhya-sagar-maharaj-ji', [VidyasagarjiController::class, 'index'])->name('aachary_shri_108_vidya_sagar_maharaj_ji.index');		
Route::any('aachary-shri-108-vivek-sagar-maharaj-ji', [ViveksagarjiController::class, 'index'])->name('aachary_shri_108_vivek_sagar_maharaj_ji.index');		
Route::any('muni-shri-108-vijay-sagar-maharaj-ji', [VijaySagarjiController::class, 'index'])->name('muni_shri_108_vijay_sagar_maharaj_ji.index');		
Route::any('muni-shri-108-vinay-sagar-maharaj-ji', [VinaySagarjiController::class, 'index'])->name('muni_shri_108_vinay_sagar_maharaj_ji.index');		
Route::any('aaryika-shri-105-vipul-mati-mataji', [VipulMatiMatajiController::class, 'index'])->name('aaryika_maa_105_vipul_mati_mataji.index');		
Route::any('aaryika-shri-105-vishaal-mati-mataji', [VishaalMatiMatajiController::class, 'index'])->name('aaryika_maa_105_vishaal_mati_mataji.index');		
Route::any('aaryika-shri-105-vigyan-mati-mataji', [VigyanMatiMatajiController::class, 'getall'])->name('aaryika_maa_105_vigyan_mati_mataji.index');		
Route::any('aaryika-shri-105-vidhyut-mati-mataji', [VidhyutMatiMatajiController::class, 'index'])->name('aaryika_maa_105_vidhyut_mati_mataji.index');		
Route::any('sanghast-aaryika/{url_slug}', [SanghastAaryikaController::class, 'detail'])->name('sanghast_aaryika.detail');		
Route::any('brahmachary-bahane/{url_slug}', [SanghasthBrahmacharyBahaneController::class, 'detail'])->name('sanghasth_brahmachary_bahane.detail');		
Route::any('pravachan-video', [PravachanVideoController::class, 'getPravachan'])->name('pravachan_video.getall');		
Route::any('vidhaan', [PravachanVideoController::class, 'getVidhaan'])->name('vidhaan.getall');		
Route::any('other-video', [PravachanVideoController::class, 'getOther'])->name('other.getall');		
Route::any('pravachan-audio', [PravachanAudioController::class, 'getall'])->name('pravachan_audio.getall');	
	
Route::any('classes', [ClassesController::class, 'getClasses'])->name('classes.getall');	
Route::any('gallery', [GalleryController::class, 'getall'])->name('gallery.getall');
Route::any('oshadhi-manjoosha', [OshadhiManjooshaController::class, 'getall'])->name('oshadhi_manjoosha.getall');
Route::any('suvichar', [SuvicharImageController::class, 'getall'])->name('suvichar_image.getall');
Route::any('sanskar_manjusha', [SuvicharImageController::class, 'getall_sanskar_manjusha'])->name('sanskar_manjusha.getall');
Route::post('sahitya/action', [SahityaController::class, 'action'])->name('sahitya.action');
Route::any('sahitya/{url_slug}', [SahityaController::class, 'getBySlug'])->name('sahitya.getall');
Route::any('sahitya', [SahityaController::class, 'getAllSahitya'])->name('getall_sahitya');
Route::get('guru-parampara', [GuruparamparaController::class, 'index'])->name('guru-parampara.index');		
Route::any('chaturmas-janakaree', [ChaturmasJanakareeController::class, 'getall'])->name('chaturmas.getall');

Route::any('live', [HomeController::class, 'live'])->name('live');

Route::group(['prefix'=>'admin'], function() {
	
	Route::controller(LoginController::class)->group(function () {
		Route::group(['middleware' => ['guest']], function () {
			Route::get('/','index')->name('admin.login');
		});
		Route::post('dologin','dologin')->name('admin.dologin');
		Route::get('forgotpassword','forgotpasswordindex')->name('admin.forgotpasswordindex');
		Route::post('forgot-password', 'forgotpassword')->name('admin.forgotpassword');
		Route::get('resetpassword/{id}/{token}', 'verifyotp')->name('admin.resetpasswordindex');
		Route::get('resendotp/{id}/{token}', 'resendotp')->name('admin.resendotp');
		Route::post('doresetpassword', 'doresetpassword')->name('admin.doresetpassword');
	});
	Route::group(['middleware' => ['auth']], function () {
		Route::any('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');		
		Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
		Route::get('setting', [SettingController::class, 'index'])->name('admin.setting');
		Route::post('changepassword', [SettingController::class, 'changepassword'])->name('admin.changepassword');
		Route::post('updateprofile', [SettingController::class, 'updateprofile'])->name('admin.updateprofile');
		Route::post('action', [SettingController::class, 'action'])->name('admin.action');	
		Route::any('general-setting/site', [SiteSettingController::class, 'create'])->name('general_setting.site');
		Route::post('general-setting/store', [SiteSettingController::class, 'store'])->name('general_setting.store');
	
		Route::any('home-page/home', [HomePageController::class, 'create'])->name('home_page.home');
		Route::any('home-page/store', [HomePageController::class, 'store'])->name('home_page.store');
		
		
		Route::any('suvichar-image', [SuvicharImageController::class, 'index'])->name('suvichar_image.list');
		Route::get('suvichar-image/create', [SuvicharImageController::class, 'create'])->name('suvichar_image.create');
		Route::post('suvichar-image/store', [SuvicharImageController::class, 'store'])->name('suvichar_image.store');
		Route::get('suvichar-image/{id}/edit', [SuvicharImageController::class, 'edit'])->name('suvichar_image.edit');
		Route::post('suvichar-image/{id}/update', [SuvicharImageController::class, 'update'])->name('suvichar_image.update');
		Route::delete('suvichar-image/{id}/destroy', [SuvicharImageController::class, 'destroy'])->name('suvichar_image.destroy');
		
    	Route::any('gallery', [GalleryController::class, 'index'])->name('gallery.list');
		Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
		Route::post('gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
		Route::get('gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
		Route::post('gallery/{id}/update', [GalleryController::class, 'update'])->name('gallery.update');
		Route::delete('gallery/{id}/destroy', [GalleryController::class, 'destroy'])->name('gallery.destroy');
		
    	Route::any('meta-data', [MetaDataController::class, 'index'])->name('meta_data.list');
		Route::get('meta-data/create', [MetaDataController::class, 'create'])->name('meta_data.create');
		Route::post('meta-data/store', [MetaDataController::class, 'store'])->name('meta_data.store');
		Route::get('meta-data/{id}/edit', [MetaDataController::class, 'edit'])->name('meta_data.edit');
		Route::post('meta-data/{id}/update', [MetaDataController::class, 'update'])->name('meta_data.update');
		Route::delete('meta-data/{id}/destroy', [MetaDataController::class, 'destroy'])->name('meta_data.destroy');
		
    	Route::any('oshadhi-manjoosha', [OshadhiManjooshaController::class, 'index'])->name('oshadhi_manjoosha.list');
		Route::get('oshadhi-manjoosha/create', [OshadhiManjooshaController::class, 'create'])->name('oshadhi_manjoosha.create');
		Route::post('oshadhi-manjoosha/store', [OshadhiManjooshaController::class, 'store'])->name('oshadhi_manjoosha.store');
		Route::get('oshadhi-manjoosha/{id}/edit', [OshadhiManjooshaController::class, 'edit'])->name('oshadhi_manjoosha.edit');
		Route::post('oshadhi-manjoosha/{id}/update', [OshadhiManjooshaController::class, 'update'])->name('oshadhi_manjoosha.update');
		Route::delete('oshadhi-manjoosha/{id}/destroy', [OshadhiManjooshaController::class, 'destroy'])->name('oshadhi_manjoosha.destroy');
		
		Route::get('vigyan-mati-mataji/', [VigyanMatiMatajiController::class, 'create'])->name('vigyan_mati_mataji.create');
		Route::post('vigyan-mati-mataji/store', [VigyanMatiMatajiController::class, 'store'])->name('vigyan_mati_mataji.store');
		
		Route::any('sanghast-aaryika/list', [SanghastAaryikaController::class, 'index'])->name('sanghast_aaryika.list');
		Route::get('sanghast-aaryika/create', [SanghastAaryikaController::class, 'create'])->name('sanghast_aaryika.create');
		Route::post('sanghast-aaryika/store', [SanghastAaryikaController::class, 'store'])->name('sanghast_aaryika.store');
		Route::get('sanghast-aaryika/{id}/edit', [SanghastAaryikaController::class, 'edit'])->name('sanghast_aaryika.edit');
		Route::post('sanghast-aaryika/{id}/update', [SanghastAaryikaController::class, 'update'])->name('sanghast_aaryika.update');
		Route::delete('sanghast-aaryika/{id}/destroy', [SanghastAaryikaController::class, 'destroy'])->name('sanghast_aaryika.destroy');
		
		Route::any('sanghasth-brahmachary-bahane/list', [SanghasthBrahmacharyBahaneController::class, 'index'])->name('sanghasth_brahmachary_bahane.list');
		Route::get('sanghasth-brahmachary-bahane/create', [SanghasthBrahmacharyBahaneController::class, 'create'])->name('sanghasth_brahmachary_bahane.create');
		Route::post('sanghasth-brahmachary-bahane/store', [SanghasthBrahmacharyBahaneController::class, 'store'])->name('sanghasth_brahmachary_bahane.store');
		Route::get('sanghasth-brahmachary-bahane/{id}/edit', [SanghasthBrahmacharyBahaneController::class, 'edit'])->name('sanghasth_brahmachary_bahane.edit');
		Route::post('sanghasth-brahmachary-bahane/{id}/update', [SanghasthBrahmacharyBahaneController::class, 'update'])->name('sanghasth_brahmachary_bahane.update');
		Route::delete('sanghasth-brahmachary-bahane/{id}/destroy', [SanghasthBrahmacharyBahaneController::class, 'destroy'])->name('sanghasth_brahmachary_bahane.destroy');
		
		Route::any('pravachan-video/list', [PravachanVideoController::class, 'index'])->name('pravachan_video.list');
		Route::get('pravachan-video/create', [PravachanVideoController::class, 'create'])->name('pravachan_video.create');
		Route::post('pravachan-video/store', [PravachanVideoController::class, 'store'])->name('pravachan_video.store');
		Route::get('pravachan-video/{id}/edit', [PravachanVideoController::class, 'edit'])->name('pravachan_video.edit');
		Route::post('pravachan-video/{id}/update', [PravachanVideoController::class, 'update'])->name('pravachan_video.update');
		Route::delete('pravachan-video/{id}/destroy', [PravachanVideoController::class, 'destroy'])->name('pravachan_video.destroy');
		
		Route::any('classes/list', [ClassesController::class, 'index'])->name('classes.list');
		Route::get('classes/create', [ClassesController::class, 'create'])->name('classes.create');
		Route::post('classes/store', [ClassesController::class, 'store'])->name('classes.store');
		Route::get('classes/{id}/edit', [ClassesController::class, 'edit'])->name('classes.edit');
		Route::post('classes/{id}/update', [ClassesController::class, 'update'])->name('classes.update');
		Route::delete('classes/{id}/destroy', [ClassesController::class, 'destroy'])->name('classes.destroy');
		
		Route::any('pravachan-audio/list', [PravachanAudioController::class, 'index'])->name('pravachan_audio.list');
		Route::get('pravachan-audio/create', [PravachanAudioController::class, 'create'])->name('pravachan_audio.create');
		Route::post('pravachan-audio/store', [PravachanAudioController::class, 'store'])->name('pravachan_audio.store');
		Route::get('pravachan-audio/{id}/edit', [PravachanAudioController::class, 'edit'])->name('pravachan_audio.edit');
		Route::post('pravachan-audio/{id}/update', [PravachanAudioController::class, 'update'])->name('pravachan_audio.update');
		Route::delete('pravachan-audio/{id}/destroy', [PravachanAudioController::class, 'destroy'])->name('pravachan_audio.destroy');
		
		Route::any('vihar-info/list', [ViharInfoController::class, 'index'])->name('vihar_info.list');
		Route::get('vihar-info/create', [ViharInfoController::class, 'create'])->name('vihar_info.create');
		Route::post('vihar-info/store', [ViharInfoController::class, 'store'])->name('vihar_info.store');
		Route::get('vihar-info/{id}/edit', [ViharInfoController::class, 'edit'])->name('vihar_info.edit');
		Route::post('vihar-info/{id}/update', [ViharInfoController::class, 'update'])->name('vihar_info.update');
		Route::delete('vihar-info/{id}/destroy', [ViharInfoController::class, 'destroy'])->name('vihar_info.destroy');
		
		Route::any('sahitya/list', [SahityaController::class, 'index'])->name('sahitya.list');
		Route::get('sahitya/create', [SahityaController::class, 'create'])->name('sahitya.create');
		Route::post('sahitya/store', [SahityaController::class, 'store'])->name('sahitya.store');
		Route::get('sahitya/{id}/edit', [SahityaController::class, 'edit'])->name('sahitya.edit');
		Route::post('sahitya/{id}/update', [SahityaController::class, 'update'])->name('sahitya.update');
		Route::delete('sahitya/{id}/destroy', [SahityaController::class, 'destroy'])->name('sahitya.destroy');
		
		Route::any('chaturmas-janakaree', [ChaturmasJanakareeController::class, 'index'])->name('chaturmas.list');
		Route::post('chaturmas-janakaree/store', [ChaturmasJanakareeController::class, 'store'])->name('chaturmas.store');
		Route::get('chaturmas-janakaree/{id}/edit', [ChaturmasJanakareeController::class, 'edit'])->name('chaturmas.edit');
		Route::post('chaturmas-janakaree/update_save', [ChaturmasJanakareeController::class, 'update_save'])->name('chaturmas.update_save');
		Route::delete('chaturmas-janakaree/{id}/destroy', [ChaturmasJanakareeController::class, 'destroy'])->name('chaturmas.destroy');
		
		Route::any('event', [EventController::class, 'index'])->name('event.list');
		Route::post('event/store', [EventController::class, 'store'])->name('event.store');
		Route::get('event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
		Route::post('event/update_save', [EventController::class, 'update_save'])->name('event.update_save');
		Route::delete('event/{id}/destroy', [EventController::class, 'destroy'])->name('event.destroy');
		
		Route::resource('ranoli-ratnakar', RanoliRatnakar::class);
	});
	
});	