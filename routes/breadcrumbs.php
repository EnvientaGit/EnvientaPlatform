<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > Shop
Breadcrumbs::register('shop', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Shop', route('shop'));
});

// Home > Terms & Conditions
Breadcrumbs::register('terms', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Term & Conditions', route('terms'));
});

// Home > Privacy
Breadcrumbs::register('privacy', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Privacy policy', route('privacy'));
});

// Home > Cookies
Breadcrumbs::register('cookies', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Cookies', route('cookies'));
});

// Home > Profile
Breadcrumbs::register('profile', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('My profile', route('profile'));
});

// Home > Profile
Breadcrumbs::register('my_project', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('My projects', route('my_project'));
});
