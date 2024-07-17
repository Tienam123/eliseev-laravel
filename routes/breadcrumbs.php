<?php

use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;

Breadcrumbs::register('home', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('login', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Login', route('login'));
});

Breadcrumbs::register('password_reset', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('login');
    $breadcrumbs->push('Reset Password', route('password.request'));
});
