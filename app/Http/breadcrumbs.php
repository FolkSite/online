<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > Boards
Breadcrumbs::register('boards', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Boards', route('boards'));
});

// Home > Boards -> Types
Breadcrumbs::register('boards.types.index', function($breadcrumbs)
{
    $breadcrumbs->parent('boards');
    $breadcrumbs->push('Types', route('boards.types.index'));
});

// Home > Boards -> Create
Breadcrumbs::register('boards.types.create', function($breadcrumbs)
{
    $breadcrumbs->parent('boards.types.index');
    $breadcrumbs->push('Create', route('boards.types.create'));
});

// Home > Boards -> Edit
Breadcrumbs::register('boards.types.edit', function($breadcrumbs, $item)
{
    $breadcrumbs->parent('boards.types.index');
    $breadcrumbs->push('Edit', route('boards.types.edit', $item->id));
});
//Breadcrumbs::register('page', function($breadcrumbs, $id)
//{
//    $page = Page::findOrFail($id);
//    $breadcrumbs->parent('home');
//    $breadcrumbs->push($page->title, route('page', $page->id));
//});

// Home > Boards -> Agree
Breadcrumbs::register('boards.agree', function($breadcrumbs)
{
    $breadcrumbs->parent('boards');
    $breadcrumbs->push('Agree', route('boards.agree'));
});

//
//
//// Home > Blog
//Breadcrumbs::register('blog', function($breadcrumbs)
//{
//    $breadcrumbs->parent('home');
//    $breadcrumbs->push('Blog', route('blog'));
//});
//
//// Home > Blog > [Category]
//Breadcrumbs::register('category', function($breadcrumbs, $category)
//{
//    $breadcrumbs->parent('blog');
//    $breadcrumbs->push($category->title, route('category', $category->id));
//});
//
//// Home > Blog > [Category] > [Page]
//Breadcrumbs::register('page', function($breadcrumbs, $page)
//{
//    $breadcrumbs->parent('category', $page->category);
//    $breadcrumbs->push($page->title, route('page', $page->id));
//});