<?php

function admin()
{
    require_once('./app/views/admin/dashboard.php');
}


function admin_users()
{
    require_once('./app/views/admin/admin_users.php');
}


function admin_articles()
{
    require_once('./app/views/admin/admin_articles.php');
}


function admin_commentaires()
{
    require_once('./app/views/admin/admin_commentaires.php');
}
