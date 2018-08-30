<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Post;
use App\Product;

class FrontendRepository implements FrontendRepositoryInterface
{

    public function getFrontEndInfo()
    {
        $data = [];
        $configContact = Config::where('name', 'config-contact')->first();
        $data['configContact'] = $configContact;
        $categoryMain = CategoryItem::where('type', CATEGORY_PRODUCT)->where('level', MENU_GOC)->get();
        $data['categoryMain'] = $categoryMain;
        return $data;
    }

    public function getFrontend()
    {
        $data = [];
        $categoryPost = CategoryItem::where('parent_id', 6)->where('isActive', ACTIVE)->get();

        foreach ($categoryPost as $key=>$item){
            $product=CategoryItem::where('id',$item->id)->first()->posts()->get();
            $item->product=$product;
        }
        $data['categoryPost'] = $categoryPost;
        return $data;
    }


}