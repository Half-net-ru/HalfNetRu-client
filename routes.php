<?php
session_start();
require_once __DIR__.'/router.php';

get('/', 'includes/index.php');

// == POSTS ==
get('/posts', 'includes/posts.php');
get('/posts/$id', 'includes/post.php');

// == NEWS ==
get('/news', 'includes/news.php');
get('/news/$id', 'includes/new.php');

// == ОДНА СТРАНИЦА ==
get('/links', 'includes/links.php');

// 404
any('/404', 'includes/404.php');