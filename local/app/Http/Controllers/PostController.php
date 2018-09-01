<?php

namespace App\Http\Controllers;

use App\CategoryItem;
use App\Post;
use App\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $type)
    {
        if ($type == 1) {
//            $posts = Post::where('post_type', '=', IS_POST)->orderBy('id', 'DESC')->get();
            $posts = CategoryItem::where('id', 15)->first()->posts()->get();
            return view('backend.admin.post-service.index', compact('posts'))->with('i', ($request->input('page', 1) - 1) * 5);
        } else {
            $posts = CategoryItem::where('id', 15)->first()->posts()->pluck('id')->toArray();
            $posts = Post::whereNotIn('id', $posts)->get();
            return view('backend.admin.post-project.index', compact('posts'))->with('i', ($request->input('page', 1) - 1) * 5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {

        if ($type == 2) {
            $dd_categorie_posts = CategoryItem::where('type', CATEGORY_POST)->where('id', '<>', 15)->orderBy('order')->get();
            foreach ($dd_categorie_posts as $key => $data) {
                if ($data->level == CATEGORY_POST_CAP_1) {
                    $data->name = ' ---- ' . $data->name;
                } else if ($data->level == CATEGORY_POST_CAP_2) {
                    $data->name = ' --------- ' . $data->name;
                } else if ($data->level == CATEGORY_POST_CAP_3) {
                    $data->name = ' ------------------ ' . $data->name;
                }
            }
            $newArray = [];
            self::showCategoryItemDropDown($dd_categorie_posts, 0, $newArray);
            $dd_categorie_posts = $newArray;
            return view('backend.admin.post-project.create', compact('roles', 'dd_categorie_posts'));
        } else {
            $dd_categorie_posts = CategoryItem::where('type', CATEGORY_POST)->whereNotIn('id', [15, 6])->orderBy('order')->get();
            return view('backend.admin.post-service.create', compact('roles', 'dd_categorie_posts'));
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type)
    {
        $post = new Post();
        $seo = new Seo();
        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        if ($type == 1) {
            $listCategory = array(15);
            $listProduct=$request->input('list_product');
        } else {
            $listCategory = $request->input('list_category');
        }
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $seoKeywords = $request->input('seo_keywords');
        $seoImage = $request->input('seo-image');
        $isActive = $request->input('post_is_active');
        $image = $request->input('image');
        if ($image) {
            $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
            $post->image = $image;
        }
        if ($seoImage) {
            $seoImage = substr($seoImage, strpos($seoImage, 'images'), strlen($seoImage) - 1);
            $seo->seo_image = $seoImage;
        }
        $categoryItemId = $request->input('parent');
        if (!IsNullOrEmptyString($isActive)) {
            $post->isActive = 1;
        } else {
            $post->isActive = 0;
        }
        if (!IsNullOrEmptyString($description)) {
            $post->description = $description;
        }
        $seo->seo_title = $seoTitle;
        $seo->seo_description = $seoDescription;
        $seo->seo_keywords = $seoKeywords;

        $seo->save();
        $post->title = $title;
        $post->path = chuyen_chuoi_thanh_path($title);
        $post->content = $content;
        $post->category_item_id = $categoryItemId;
        $post->post_type = IS_POST;
        $post->user_id = Auth::user()->id;
        $post->seo_id = $seo->id;
        $post->save();
        $post->categoryitems()->attach($listCategory);
        if($type==1){
            $post->project()->attach($listProduct);
        }
        if ($type == 1)
            return redirect()->route('post-service.index')->with('success', 'Tạo Mới Thành Công Bài Viết');
        else {
            return redirect()->route('post-project.index')->with('success', 'Tạo Mới Thành Công Bài Viết');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $type)
    {
        $post = Post::find($id);
        if ($type == 2) {
            $dd_categorie_posts = CategoryItem::where('type', CATEGORY_POST)->where('id', '<>', 15)->orderBy('order')->get();
            foreach ($dd_categorie_posts as $key => $data) {
                if ($data->level == CATEGORY_POST_CAP_1) {
                    $data->name = ' ---- ' . $data->name;
                } else if ($data->level == CATEGORY_POST_CAP_2) {
                    $data->name = ' --------- ' . $data->name;
                } else if ($data->level == CATEGORY_POST_CAP_3) {
                    $data->name = ' ------------------ ' . $data->name;
                }
            }
            $newArray = [];
            self::showCategoryItemDropDown($dd_categorie_posts, 0, $newArray);
            $dd_categorie_posts = $newArray;
            return view('backend.admin.post-project.edit', compact('post', 'dd_categorie_posts'));
        } else {
            $dd_categorie_posts = CategoryItem::where('type', CATEGORY_POST)->whereNotIn('id', [15, 6])->orderBy('order')->get();
//            foreach ($dd_categorie_posts as $key => $data) {
//                if ($data->level == CATEGORY_POST_CAP_1) {
//                    $data->name = ' ---- ' . $data->name;
//                } else if ($data->level == CATEGORY_POST_CAP_2) {
//                    $data->name = ' --------- ' . $data->name;
//                } else if ($data->level == CATEGORY_POST_CAP_3) {
//                    $data->name = ' ------------------ ' . $data->name;
//                }
//            }
//            $newArray = [];
//            self::showCategoryItemDropDown($dd_categorie_posts, 1, $newArray);
//            $dd_categorie_posts = $newArray;
            return view('backend.admin.post-service.edit', compact('post', 'dd_categorie_posts'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $type)
    {
        $post = Post::find($id);
        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        if ($type == 1) {
            $listCategory = array(15);
            $listProduct=$request->input('list_product');
        } else {
            $listCategory = $request->input('list_category');
        }
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $seoKeywords = $request->input('seo_keywords');
        $seoImage = $request->input('seo-image');
        $isActive = $request->input('post_is_active');
        $image = $request->input('image');
        if ($image) {
            $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
            $post->image = $image;
        } else {
            $post->image = NULL;
        }
        if ($seoImage) {
            $seoImage = substr($seoImage, strpos($seoImage, 'images'), strlen($seoImage) - 1);
            $post->seos->seo_image = $seoImage;
        }
        $categoryItemId = $request->input('parent');
        if (!IsNullOrEmptyString($isActive)) {
            $post->isActive = 1;
        } else {
            $post->isActive = 0;
        }
        if (!IsNullOrEmptyString($description)) {
            $post->description = $description;
        }
        $post->seos->seo_title = $seoTitle;
        $post->seos->seo_description = $seoDescription;
        $post->seos->seo_keywords = $seoKeywords;
        $post->seos->save();
        $post->title = $title;
        $post->path = chuyen_chuoi_thanh_path($title);

        $post->content = $content;
        $post->category_item_id = $categoryItemId;
        $post->post_type = IS_POST;
        $post->user_id = Auth::user()->id;
        $post->save();
        $post->categoryitems()->sync($listCategory);
        if($type==1){
            $post->project()->sync($listProduct);
        }
        if ($type == 1)
            return redirect()->route('post-service.index')->with('success', 'Cập Nhật Thành Công Bài Viết');
        else {
            return redirect()->route('post-project.index')->with('success', 'Cập Nhật Thành Công Bài Viết');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $type)
    {
        $post = Post::find($id);
        $post->seos->delete();
        $post->categoryitems()->detach();
        if($type==1){
            $post->project()->detach();
        }
        $post->delete();
        if ($type == 1)
            return redirect()->route('post-service.index')
                ->with('success', 'Đã Xóa Thành Công');
        else {
            return redirect()->route('post-project.index')
                ->with('success', 'Đã Xóa Thành Công');
        }
    }

    public function showCategoryItemDropDown($dd_categorie_posts, $parent_id = 0, &$newArray)
    {
        foreach ($dd_categorie_posts as $key => $data) {
            if ($data->parent_id == $parent_id) {
                array_push($newArray, $data);
                $dd_categorie_posts->forget($key);
                self::showCategoryItemDropDown($dd_categorie_posts, $data->id, $newArray);
            }
        }
    }
}
