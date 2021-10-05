<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class Category extends ApiModel
{
    protected $fillable=['id','name','parent_id'];

//    public function __construct($array)
//    {
//        $this->id=$array['$id'];
////        $this->name=$name;
////        $this->parent_id=$parent_id;
////        $this->children=$children;
////        $this->products=$products;
//    }

    public static function all($columns=array())
    {
        return self::map(self::get('category'));
    }

    public function find($id)
    {
        $response = self::get('category/'.$id);
        $category = self::map($response)->first();
        $category->children = self::map($response->children);
//        $category->products = self::map($response->products);
        return $category;
    }

    public function resolveRouteBinding($value, $field = null)
    {
        return self::find($value);
    }
}
