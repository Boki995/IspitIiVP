<?php
    return [
        App\Core\Route::get('|^user/register/?$|',                  'Main',                   'getRegister'),
        App\Core\Route::post('|^user/register/?$|',                 'Main',                   'postRegister'),
        App\Core\Route::get('|^user/login/?$|',                     'Main',                   'getLogin'),
        App\Core\Route::post('|^user/login/?$|',                    'Main',                   'postLogin'),

        App\Core\Route::get('|^term/([0-9]+)/?$|',              'Term',               'show'),
        App\Core\Route::get('|^term/([0-9]+)/delete/?$|',       'Term',               'delete'),

        App\Core\Route::get('|^reservation/([0-9]+)/?$|',               'Reservation',                'show'),

        # API rute:
        App\Core\Route::get('|^api/reservation/([0-9]+)/?$|',           'ApiReservation',             'show'),
        App\Core\Route::get('|^api/bookmarks/?$|',                  'ApiBookmark',            'getBookmarks'),
        App\Core\Route::get('|^api/bookmarks/add/([0-9]+)/?$|',     'ApiBookmark',            'addBookmark'),
        App\Core\Route::get('|^api/bookmarks/clear/?$|',            'ApiBookmark',            'clear'),

        # User role routes:
        App\Core\Route::get('|^user/profile/?$|',                   'UserDashboard',          'index'),

        App\Core\Route::get('|^user/terms/?$|',                'UserTermManagement', 'terms'),
        App\Core\Route::get('|^user/terms/edit/([0-9]+)/?$|',  'UserTermManagement', 'getEdit'),
        App\Core\Route::post('|^user/terms/edit/([0-9]+)/?$|', 'UserTermManagement', 'postEdit'),
        App\Core\Route::get('|^user/terms/add/?$|',            'UserTermManagement', 'getAdd'),
        App\Core\Route::post('|^user/terms/add/?$|',           'UserTermManagement', 'postAdd'),

        App\Core\Route::any('|^.*$|',                               'Main',                   'home')
    ];