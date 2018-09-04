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

        foreach ($categoryPost as $key => $item) {
            $product = CategoryItem::where('id', $item->id)->first()->posts()->get();
            $item->product = $product;
        }
        $data['categoryPost'] = $categoryPost;
        $services = CategoryItem::where('id', 15)->where('isActive', ACTIVE)->first()->posts()->take(3)->get();
        foreach ($services as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
        }
        $data['services'] = $services;
        return $data;
    }

    public function getPageDuAn()
    {
        $data = [];
        $categoryPost = CategoryItem::where('parent_id', 6)->where('isActive', ACTIVE)->get();

        foreach ($categoryPost as $key => $item) {
            $product = CategoryItem::where('id', $item->id)->first()->posts()->get();
            $item->product = $product;
        }
        $data['categoryPost'] = $categoryPost;
        $services = CategoryItem::where('id', 15)->where('isActive', ACTIVE)->first()->posts()->take(3)->get();
        foreach ($services as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
        }
        $data['services'] = $services;
        return $data;
    }


    public function getDetailDichVu($path)
    {
        $data = [];
        $post = Post::where('path', $path)->first();
        $order_service=CategoryItem::where('id',15)->first()->posts->where('id','<>',$post->id);
        $data['post'] = $post;
        $data['order_service']=$order_service;
        return $data;

    }


}