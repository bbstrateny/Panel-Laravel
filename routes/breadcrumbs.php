<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// 1. Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
});
//PRODUCTOS
// 2. Home > Productos
Breadcrumbs::for('productos', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Productos', route('productos'));
});

// 3. Home > Productos > Nuevo
Breadcrumbs::for('producto.nuevo', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Nuevo Producto', route('producto.nuevo'));
});

// 4. Home > Productos > Editar
Breadcrumbs::for('producto.editar', function (BreadcrumbTrail $trail, $producto) {
    $trail->parent('productos');
    $trail->push('Editar: ' . $producto->descripcion, route('producto.editar', $producto->id));
});
//////////FIN PRODUCTOS////////////

///ALMACENES///////
// 2. Home > Almacenes
Breadcrumbs::for('almacenes', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Almacenes', route('almacenes'));
});

// 3. Home > Almacenes > Nuevo
Breadcrumbs::for('almacen.nuevo', function (BreadcrumbTrail $trail) {
    $trail->parent('almacenes');
    $trail->push('Nuevo Almacen', route('almacen.nuevo'));
});

// 4. Home > Productos > Editar
Breadcrumbs::for('almacen.editar', function (BreadcrumbTrail $trail, $almacen) {
    $trail->parent('almacenes');
    $trail->push('Editar: ' . $almacen->codigo, route('producto.editar', $almacen->id));
});