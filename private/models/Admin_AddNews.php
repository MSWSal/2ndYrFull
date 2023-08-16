<?php

/**
 * User model
 */

class Admin_AddNews extends Model
{
    protected $table = "news";

    protected $allowedColumns = ['news_id', 'news_img', 'description', 'link', 'admin_id'];
   
}
