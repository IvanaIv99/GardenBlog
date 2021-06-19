<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\FrontendController::class,'index'])->name("home");

Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index'])->name("contact");
Route::get('/author',[\App\Http\Controllers\FrontendController::class,'author'])->name("author");
Route::post('/contact/send',[\App\Http\Controllers\ContactController::class,'sendMail'])->name("contact.send");


Route::get('/posts/fetch', [\App\Http\Controllers\PostController::class, 'getPosts'])->name('posts.getPosts');
Route::get('posts/search', [\App\Http\Controllers\PostController::class, 'search'])->name('posts.search');
Route::get('posts/sort', [\App\Http\Controllers\PostController::class, 'sort'])->name('posts.sort');



Route::get('/post/{id}',[\App\Http\Controllers\PostController::class,'show'])->name("single");

Route::get('/login',[\App\Http\Controllers\FrontendController::class,'showLoginForm'])->name("loginForm");
Route::get('/register',[\App\Http\Controllers\FrontendController::class,'showRegisterForm'])->name("registerForm");

/*
      Rute za registraciju, logovanje i odjavu
*/

Route::POST("/do-login",[\App\Http\Controllers\Auth\LoginController::class,'login'])->name("login");
Route::post("/do-register",[\App\Http\Controllers\Auth\RegisterController::class,'register'])->name("register");



Route::middleware(['loggedIn'])->group(function () {

    Route::get("/logout",[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name("logout");

    /*
           Rute za admina
    */
    Route::group(['middleware' => 'admin'], function(){

        Route::group(['prefix'=>'/admin' ], function(){

            Route::get("/dashboard",[\App\Http\Controllers\Admin\BackendController::class,"index"])->name("dashboard");

            Route::get("/posts",[\App\Http\Controllers\Admin\PostController::class,"index"])->name("posts");

            Route::get("/posts/create",[\App\Http\Controllers\Admin\PostController::class,'create'])->name("posts.create.admin");

            Route::post("/posts",[\App\Http\Controllers\Admin\PostController::class,"store"])->name("posts.store");

            Route::get("/posts/{id}",[\App\Http\Controllers\Admin\PostController::class,"userPosts"])->name("posts.user");

            //Route::get("/posts/{id}",[\App\Http\Controllers\Admin\PostController::class,"show"])->name("post.show");
            Route::get("/posts/{id}/edit",[\App\Http\Controllers\Admin\PostController::class,"edit"])->name("post.edit");
            Route::put("/posts/{id}",[\App\Http\Controllers\Admin\PostController::class,"update"])->name("post.update");
            Route::delete("/posts/{id}",[\App\Http\Controllers\Admin\PostController::class,"destroy"])->name("post.destroy");

            Route::get('/posts/search',[\App\Http\Controllers\Admin\PostController::class,'search']);
            Route::get('/posts/sort',[\App\Http\Controllers\Admin\PostController::class,'sort']);


            Route::delete("/users/{id}",[\App\Http\Controllers\Admin\UserController::class,'destroy'])->name("users.destroy");

            Route::get("/users",[\App\Http\Controllers\Admin\UserController::class,'index'])->name("users");

            Route::get("/users/{id}",[\App\Http\Controllers\Admin\UserController::class,'show'])->name("users.show");


            Route::get("/comments",[\App\Http\Controllers\Admin\CommentsController::class,'index'])->name("all.comments");
            Route::delete("/comments/{id}",[\App\Http\Controllers\Admin\CommentsController::class,'destroy'])->name("comments.destroy");

            Route::get("/comments/user/{id}",[\App\Http\Controllers\Admin\CommentsController::class,'userComments'])->name("users.comments");


            Route::get("/navigation",[\App\Http\Controllers\Admin\NavigationController::class,'index'])->name("all.nav");
            Route::delete("/navigation/{id}",[\App\Http\Controllers\Admin\NavigationController::class,'destroy'])->name("nav.destroy");
            Route::get("/navigation/create",[\App\Http\Controllers\Admin\NavigationController::class,'create'])->name("nav.create");
            Route::post("/navigation",[\App\Http\Controllers\Admin\NavigationController::class,'store'])->name("nav.store");
            Route::get("/navigation/{id}/edit",[\App\Http\Controllers\Admin\NavigationController::class,'edit'])->name("nav.edit");
            Route::put("/navigation/{id}",[\App\Http\Controllers\Admin\NavigationController::class,'update'])->name("nav.update");





            Route::get("/socials/{id}/edit",[\App\Http\Controllers\Admin\SocialsController::class,'edit'])->name("socials.edit");
            Route::put("/socials/{id}",[\App\Http\Controllers\Admin\SocialsController::class,'update'])->name("socials.update");

            Route::delete("/socials/{id}",[\App\Http\Controllers\Admin\SocialsController::class,'destroy'])->name("soc.destroy");

            Route::get("/socials/create",[\App\Http\Controllers\Admin\SocialsController::class,'create'])->name("soc.create");

            Route::post("/socials",[\App\Http\Controllers\Admin\SocialsController::class,'store'])->name("soc.store");
            Route::get("/socials",[\App\Http\Controllers\Admin\SocialsController::class,'index'])->name("all.socials");


        });

    });




     /*
       Rute za user-a
    */



    Route::group(['prefix'=>'/user' ], function(){

        Route::get("/myprofile/{id}", [\App\Http\Controllers\UserController::class, "show"])->name("myprofile");
        Route::get("/myposts", [\App\Http\Controllers\UserController::class, "userPosts"])->name("user-posts");
        Route::get("/{id}/edit-profile", [\App\Http\Controllers\UserController::class,'edit'])->name("edit-profile");

        Route::get("/change-password/{id}", [\App\Http\Controllers\UserController::class,'changePassword'])->name("change-password");




        Route::delete("/{id}", [\App\Http\Controllers\UserController::class,'destroy'])->name("user.delete");




        Route::patch("profile/{id}", [\App\Http\Controllers\UserController::class,'update'])->name("user.update");
        Route::patch("/{id}", [\App\Http\Controllers\UserController::class,'updatePassword'])->name("user.password.update");

        /*
          Rute za post
        */
        Route::get("/add-post", [\App\Http\Controllers\PostController::class,'create'])->name("add-post");
        Route::post("/post", [\App\Http\Controllers\PostController::class,'store'])->name("post.store");
        Route::get("/{id}/edit-post", [\App\Http\Controllers\PostController::class,'edit'])->name("edit-post");
        Route::put("/posts/{id}", [\App\Http\Controllers\PostController::class,'update'])->name("post.update");
        Route::delete("/posts/{id}", [\App\Http\Controllers\PostController::class,'destroy'])->name("post.delete");

        /*
            Rute za komentare
         */

        Route::post("/comment/{postId}", [\App\Http\Controllers\CommentsController::class,'store'])->name("comment.store");
        Route::delete("/comment/{id}", [\App\Http\Controllers\CommentsController::class,'destroy'])->name("comment.delete");
        Route::put("/comment/{id}", [\App\Http\Controllers\CommentsController::class,'update'])->name("comment.update");


    });

});



