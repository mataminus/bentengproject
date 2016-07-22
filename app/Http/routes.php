<?php


//Halaman Login
Route::get('/home', 'HomeController@index');

// Halaman Front End
Route::get('segera',function(){
  return view('soon');
});
Route::get('/', function () {
    return view('welcome');
});


      Route::group(['prefix'=>'organisasi'],function(){
        //Organisasi -> Overview
        Route::get('/','FrontendController@organisasi');
        //Organisasi -> Nilai Kemenkeu
        Route::get('nilai-kemenkeu','FrontendController@nilaikemenkeu');
        // Organisasi->Sejarah
        Route::get('sejarah','FrontendController@sejarah');
        // Organisasi->Visi Misi
        Route::get('visi-misi','FrontendController@visimisi');
        // Organisasi->Tugas Fungsi
        Route::get('tugas-fungsi','FrontendController@tugasfungsi');
        //Organisasi -> Struktur Organisasi
        Route::get('struktur-organisasi','FrontendController@strukturorganisasi');
        // Organisasi->SDM
        Route::get('sumber-daya-manusia','FrontendController@sumberdayamanusia');
        // Organisasi-> Alumni
        Route::get('alumni','FrontendController@alumni');
      });

      Route::group(['prefix'=>'layanan'],function(){
        //Layanan->Overview
        Route::get('/','FrontendController@layanan');
        //Layanan->Umum
        Route::get('umum','FrontendController@umum');
        //Layanan->PDMS
        Route::get('pdms','FrontendController@pdms');
        //Layanan->Bank
        Route::get('bank','FrontendController@bank');
        // Layanan->Vera KI
        Route::get('veraki','FrontendController@veraki');
        });

        //sarpras
      Route::get('/sarpras','FrontendController@sarpras');
        //Blog
      Route::get('/blog','FrontendController@blog');
      Route::get('/blog/{title}','FrontendController@singleBlog');
        // Kontak
      Route::get('/kontak','FrontendController@kontak');
      //Beranda
      Route::get('/','WelcomeController@blog');
      // Tutorial
      Route::get('/tutorial','FrontendController@tutorial');
      // Program Sakti
      Route::get('/program-sakti','FrontendController@sakti');
      // FAQ
      Route::get('/faq','FrontendController@faq');
      // Kamus KPPN
      Route::get('/kamus-kppn','FrontendController@kamuskppn');
      // Otentifikasi
    Route::auth();

// Halaman Dashboard
Route::group(['middleware'=>['web']],function(){
  // Otentifikasi
Route::auth();

        Route::group(['prefix'=>'dashboard'],function(){

            Route::get('/',['middleware'=>'auth',function(){
              return view('dashboard.dashboard');
            }]);
            Route::resource('alumni','AlumnaeController');
            Route::resource('blog','BlogController');
            Route::resource('kontak','ContactController');
            Route::resource('download-aplikasi','DownloadappController');
            Route::resource('download-buku','DownloadbookController');
            Route::resource('download-pengumuman','DownloadinfoController');
            Route::resource('download-peraturan','DownloadruleController');
            Route::resource('sarpras','FacilityController');
            Route::resource('galeri','GalleryController');
            Route::resource('sumber-daya-manusia','OfficerController');
            Route::resource('organisasi','OrganizationController');
            Route::resource('footer','FooterController');
            Route::resource('tutorial','TutorialController');
            Route::resource('layanan','OverviewController');
            Route::resource('layanan-pdms','OverviewpdmsController');
            Route::resource('layanan-bank','OverviewbankController');
            Route::resource('layanan-veraki','OverviewverakiController');
            Route::resource('layanan-umum','OverviewumumController');
            Route::resource('search','SearchController');
            Route::resource('sejarah','HistoryController');
            Route::resource('visi-misi','VisionmissionController');
            Route::resource('tugas-fungsi','TaskfunctionController');
            Route::resource('struktur-organisasi','StructureController');
            Route::resource('nilai-kemenkeu','KemenkeuvalueController');
            Route::resource('program-pdms','ProgrampdmsController');
            Route::resource('program-bank','ProgrambankController');
            Route::resource('program-veraki','ProgramverakiController');
            Route::resource('program-sakti','ProgramsaktiController');
            Route::resource('download-aplikasi','DownloadappController');
            Route::resource('download-peraturan','DownloadruleController');
            Route::resource('download-pengumuman','DownloadinfoController');
            Route::resource('download-buku-saku','DownloadbookController');
            Route::resource('kuis-kppn','QuizController');
            Route::resource('faq','FaqController');
            Route::resource('kamus-kppn','DictionaryController');
            Route::resource('logbook','LogbookController');
            Route::resource('gugus-kendali-mutu','GugusKendaliMutuController');
            Route::resource('nomor-penting','ImportantnumberController');
            Route::resource('catatan-penting','NoteController');
            Route::resource('update-info','NotificationController');


      });

});
