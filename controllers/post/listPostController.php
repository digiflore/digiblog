<?php
require_once './models/postManager.php';

$posts = GetPosts();

$template = './views/pages/post/list_posts.php';
