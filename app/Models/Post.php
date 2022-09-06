<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class post 
{
   private static $blog_posts = [
    
    "This section is meant for users who are installing Voyager on an already existing Laravel installation or for users who want to perform a manual install. If this is not the case, you should go back to the installation documentation or skip this section.
    The first thing you should do is publish the assets that come with Voyager. You can do that by running the following commands"
   ];

   public static function all()
   {
    return self::$blog_posts; // property static gunakna self, dynmaic this
   }

   public static function find ($slug){
    $posts= static::all();
    return $posts->fistwhere('slug', $slug);
   }
}
