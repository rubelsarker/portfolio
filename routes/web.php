<?php

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

//frontend route
Route::group(['namespace'=>'Frontend'], function(){
   //pages route
    Route::get('/', 'PageController@index');
    Route::get('/about', 'PageController@about')->name('user.about');
    Route::get('/portfolio', 'PageController@portfolio')->name('user.portfolio');
    Route::get('/blog', 'PageController@blog')->name('user.blog');
    Route::get('/contact', 'PageController@contact')->name('user.contact');
    //project details
    Route::get('projectdetails/{id}','PageController@projectdetails');
    //cv download
    Route::get(md5('cv/download'),'ExtraController@cvDownload')->name('cv.download');
    //subscriber
    Route::post('user/subscribe','ExtraController@subscribe')->name('user.subscribe');
    //contact
    Route::post('contact-form','ExtraController@contactForm')->name('contact.message');
});

//admin route
Route::group(['namespace'=>'Admin','prefix' => 'admin/','as' =>'admin.'], function(){
    //dashboard route
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    //slider
    Route::resource('slider', 'SliderController')->except(['destroy']);
    Route::get('destroy/slider/{id}','SliderController@destroy')->name('slider.destroy');
    Route::get('inactive/slider/{id}','SliderController@inactiveSlider')->name('inactive.slider');
    Route::get('active/slider/{id}','SliderController@activeSlider')->name('active.slider');
    //category
    Route::resource('category', 'CategoryController')->except(['destroy']);
    Route::get('destroy/category/{id}','CategoryController@destroy')->name('category.destroy');
    Route::get('inactive/category/{id}','CategoryController@inactiveCategory')->name('inactive.category');
    Route::get('active/category/{id}','CategoryController@activeCategory')->name('active.category');

    //project
    Route::resource('portfolio', 'ProjectController')->except(['destroy']);
    Route::get('destroy/portfolio/{id}','ProjectController@destroy')->name('portfolio.destroy');
    Route::get('inactive/portfolio/{id}','ProjectController@inactiveProject')->name('inactive.portfolio');
    Route::get('active/portfolio/{id}','ProjectController@activeProject')->name('active.portfolio');

    //about
    Route::get('about','AboutSectionController@getAbout')->name('about');
    Route::post('about/update','AboutSectionController@updateAbout')->name('about.update');

    //skill
    Route::resource('skill', 'SkillController')->except(['destroy']);
    Route::get('destroy/skill/{id}','SkillController@destroy')->name('skill.destroy');
    Route::get('inactive/skill/{id}','SkillController@inactiveSkill')->name('inactive.skill');
    Route::get('active/skill/{id}','SkillController@activeSkill')->name('active.skill');

    //contact and logo
    Route::get('contact','ContactController@getContact')->name('contact');
    Route::post('contact/update','ContactController@updateContact')->name('contact.update');

    //subscriber
    Route::get('subscriber','SubscriberController@index')->name('subscriber.index');
    Route::get('destroy/subscriber/{id}','SubscriberController@destroy')->name('subscriber.destroy');

});

