<?php

Breadcrumbs::for('main', function ($trail) {
    $trail->push('Главная', route('main'));
});
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('main');
    $trail->push('Контакты', route('contact'));
});
