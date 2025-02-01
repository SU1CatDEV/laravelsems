<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/', 
    function () {
        return view(
            'home',
            ['contacts' => [
                [
                    'name' => 'Иван Иванов',
                    'age' => 20,
                    'address' => '12й дом Московская улица',
                    'post_code' => '1001',
                    'email' => 'ivan@example.com',
                    'phone' => '+7 123 456 789'
                ],
                [
                    'name' => 'Петр Петров',
                    'age' => 30,
                    'address' => '5й дом Пушкинская улица',
                    'post_code' => '1302',
                    'phone' => '+7 456 123 789'
                ],
                [
                    'name' => 'Джон Джонсон',
                    'age' => 15,
                    'address' => '9й дом Главная улица',
                    'post_code' => '1025',
                    'email' => 'jhon@example.com',
                    'phone' => '+7 789 123 456'
                ],
                [
                    'name' => 'Сидор Сидоров',
                    'age' => 25,
                    'address' => '10й дом Ленинградская улица',
                    'post_code' => '2010',
                    'email' => 'sidor@example.com',
                    'phone' => '+7 789 456 123'
                ]
            ]]
        );
    }
)->name('home');

Route::get(
    '/contacts', 
    function () {
        view(
            'contacts',
            ['contacts' => [
                [
                    'name' => 'Иван Иванов',
                    'age' => 20,
                    'address' => '12й дом Московская улица',
                    'post_code' => '1001',
                    'email' => 'ivan@example.com',
                    'phone' => '+7 123 456 789'
                ],
                [
                    'name' => 'Петр Петров',
                    'age' => 30,
                    'address' => '5й дом Пушкинская улица',
                    'post_code' => '1302',
                    'phone' => '+7 456 123 789'
                ],
                [
                    'name' => 'Джон Джонсон',
                    'age' => 15,
                    'address' => '9й дом Главная улица',
                    'post_code' => '1025',
                    'email' => 'jhon@example.com',
                    'phone' => '+7 789 123 456'
                ],
                [
                    'name' => 'Сидор Сидоров',
                    'age' => 25,
                    'address' => '10й дом Ленинградская улица',
                    'post_code' => '2010',
                    'email' => 'sidor@example.com',
                    'phone' => '+7 789 456 123'
                ]
            ]]
        );
    }
)->name('contacts');