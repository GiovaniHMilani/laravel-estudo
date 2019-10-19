<?php

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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/seunome/{nome?}", function ($nome = null) {
    if (isset($nome)) {
        return "Olá, seja bem vindo $nome!!!";
    }
    return "Você não digitou nenhum nome";
});

Route::get("/rotacomregras/{nome}/{n}", function ($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "Olá! seja bem vindo, $nome <br />";
    }
})->where("nome", "[A-Za-z]+")->where("n", "[0-9]+");


Route::prefix("/aplication")->group(function () {

    Route::get("/", function () {
        return view("app");
    })->name('app');

    Route::get("/user", function () {
        return view("user");
    })->name('app.user');

    Route::get("/profile", function () {
        return view("profile");
    })->name('app.profile');
});

Route::get('/produtos', function () {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook </li>";
    echo "<l1>Impressora </li>";
    echo "<l1>Mouse </li>";
    echo "</ol>";
})->name("meusprodutos");
