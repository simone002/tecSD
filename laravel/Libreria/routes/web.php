<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

/*
|-- Creazione della tabella degli autori
CREATE TABLE authors (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    birth_date DATE,
    country VARCHAR(50)
);

-- Creazione della tabella dei libri
CREATE TABLE books (
    id INT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    publication_year INT,
    author_id INT,
    FOREIGN KEY (author_id) REFERENCES authors(id) ON DELETE CASCADE ON UPDATE CASCADE
);
|
*/
Route::view('/','home');
Route::resource('/authors', AuthorController::class);


Route::resource('/books', BookController::class);

