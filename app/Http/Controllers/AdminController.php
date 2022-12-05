<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\User;

use App\Models\News;
use App\Models\Newscategory;
use App\Models\Rate;


use Illuminate\Support\Facades\File;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function __construct()
    {
        @session_start();
    }


    // ----------------------------------- NEWS-----------------------------------

    public function getIndex(){
        $news =DB::table('news')
       ->join('news_cat','news.idcat','=','news_cat.id')
        ->selectRaw('news.*,news_cat.Name as CategoryName')
        ->orderBy('news.id','DESC')
        ->get();

        $data = [
            'news' => $news,
        ];

        return view('admin_cms.news',$data);
    }

    public function getAdd_news(){
        $NewsCategory = NewsCategory::get();
        return view('admin_cms.add_news',compact('NewsCategory'));
    }

    public function news_add(Request $request,News $News){
        if ($request->Title == '' || $request->Content == ''  ){
            return redirect('admin_ubiz@2022/add_news/')->with(['flash_level' => 'danger' , 'flash_message' => 'Vui lòng điền vào các trường có *' ]);
    }

    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $teaser_image = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/image');
        $image->move($destinationPath, $teaser_image);
    } else {
    dd('Request Has No File');
    }


    $News = new News;
    $News->idcat = $request->idcat;
    $News->title = $request->Title;
    $News->img = $request->file('img')->getClientOriginalName();
    $News->content = $request->Content;

    $Flag =$News->save();  
    
    if ($Flag == true) {
        return redirect('admin_ubiz@2022/news')->with(['flash_level' => 'success' , 'flash_message' => 'Thêm Tin tức thành công !' ]);
   }else{
    return redirect('admin_ubiz@2022/news')->with(['flash_level' => 'danger' , 'flash_message' => 'Lỗi thêm tin tức' ]);
   }

    }

    
    public function news_delete(Request $request , $id){

       
        $News = News::find($id);
        $News->delete();

        if ($News == true) {
            return redirect('admin_ubiz@2022/news')->with(['flash_level' => 'success' , 'flash_message' => 'Xóa  Tin tức thành công' ]);
       }else{
        return redirect('admin_ubiz@2022/news')->with(['flash_level' => 'danger' , 'flash_message' => 'Lỗi Xóa Tin tức' ]);
       }
    }


    public function getEdit_news($id){
        $news = News::find($id);
        $NewsCategory = Newscategory::get();
        return view('admin_cms.edit_news',compact('news','NewsCategory'));

        
    }


    public function news_edit(Request $request,$id){


        if ($request->Title == '' || $request->Content == ''  ){
            return redirect('admin_ubiz@2022/edit_news/'.$id)->with(['flash_level' => 'danger' , 'flash_message' => 'Vui lòng điều vào các trường có *' ]);
    }

    $News =  News::find($id);
    $News->idcat = $request->idcat;
    $News->title = $request->Title;
    $News->img = $request->Img;
    $News->content = $request->Content;

    $Flag =$News->save();  
    
    if ($Flag == true) {
        return redirect('admin_ubiz@2022/edit_news/'.$id)->with(['flash_level' => 'success' , 'flash_message' => 'Chỉnh sửa tức thành công !' ]);
   }else{
    return redirect('admin_ubiz@2022/edit_news/'.$id)->with(['flash_level' => 'danger' , 'flash_message' => 'Lỗi chỉnh sửa tin tức' ]);
   }

    }

    // --------------------------------------NEWS_CAT---------------------------------------------


    public function news_cat_list(){
        // $NewsCategory = Newscategory::where('Status','1')->get();
        $NewsCategory = Newscategory::get();
        return view('admin_cms.new_cat.list',compact('NewsCategory'));

    }
    public function contact(){
        // $NewsCategory = Newscategory::where('Status','1')->get();
        $contact = contact::get();
        return view('admin_cms.contact',compact('contact'));

    }
    public function news_cat_getedit($id){
        $NewsCategory = Newscategory::find($id);

        return view('admin_cms.new_cat.edit',compact('NewsCategory'));

        
    }
    public function news_cat_edit(Request $request,$id){


        if ($request->Name == ''  ){
            return redirect('admin_ubiz@2022/edit_news_cat/'.$id)->with(['flash_level' => 'danger' , 'flash_message' => 'Vui lòng điều vào các trường có *' ]);
    }

    $NewsCategory = Newscategory::find($id);
    $NewsCategory->Name = $request->Name;
    $NewsCategory->Status = $request->Status;

    $Flag =$NewsCategory->save();  
        
    if ($Flag == true) {
        return redirect('admin_ubiz@2022/edit_news_cat/'.$id)->with(['flash_level' => 'success' , 'flash_message' => 'Chỉnh sửa Danh mục tin tức thành công' ]);
   }else{
    return redirect('admin_ubiz@2022/edit_news_cat/'.$id)->with(['flash_level' => 'danger' , 'flash_message' => 'Lỗi Chỉnh sửa' ]);
   }
    }


    public function news_cat_getadd(){
       
        return view('admin_cms.new_cat.add');
    }

    public function news_cat_add(Request $request,Newscategory $NewsCategory){
        if ($request->Name == '' ){
            return redirect('admin_ubiz@2022/add_news_cat/')->with(['flash_level' => 'danger' , 'flash_message' => 'Vui lòng điều vào các trường có *' ]);
    }

    $NewsCategory = new Newscategory;
    $NewsCategory->Name = $request->Name;
    $NewsCategory->Status = $request->Status;

    $Flag =$NewsCategory->save();  
    
    if ($Flag == true) {
        return redirect('admin_ubiz@2022/list_news_cat')->with(['flash_level' => 'success' , 'flash_message' => 'Thêm Tin tức thành công !' ]);
   }else{
    return redirect('admin_ubiz@2022/list_news_cat')->with(['flash_level' => 'danger' , 'flash_message' => 'Lỗi thêm tin tức' ]);
   }

    }

    
    public function news__cat_delete(Request $request , $id){

       
        $Newscategory = Newscategory::find($id);
        $Newscategory->delete();

        if ($Newscategory == true) {
            return redirect('admin_ubiz@2022/list_news_cat')->with(['flash_level' => 'success' , 'flash_message' => 'Xóa  Tin tức thành công' ]);
       }else{
        return redirect('admin_ubiz@2022/list_news_cat')->with(['flash_level' => 'danger' , 'flash_message' => 'Lỗi Xóa Tin tức' ]);
       }
    }
    public function contact_delete(Request $request , $id){

       
        $contact = contact::find($id);
        $contact->delete();

        if ($contact == true) {
            return redirect('admin_ubiz@2022/contact')->with(['flash_level' => 'success' , 'flash_message' => 'Xóa liên hệ thành công' ]);
       }else{
        return redirect('admin_ubiz@2022/contact')->with(['flash_level' => 'danger' , 'flash_message' => 'Lỗi xóa liên hệ' ]);
       }
    }

    // --------------------------------------- CONTACT -----------------------------------------------

    public function contact_insert(Request $request,contact $contact){

    $contact = new contact;
    $contact->name = $request->name;
    $contact->phone = $request->phone;
    $contact->note = $request->note;

    $Flag =$contact->save();  
    
    if ($Flag == true) {
        return redirect()->back()->with(['success' => 'Để lại lời nhắn thành công !']);
   }else{
    return redirect()->back()->with(['error' => 'Để lại lời nhắn không thành công !']);
   }

    }


   


    //--------------------------------------------- WEBSITE----------------------------------------

    public function getHome(){
        $news_hot = News::select('title','img','content')->orderBy('id','desc')->paginate(3);

        $new_advises = News::where('idcat','=','6')->select('title','img','content')->orderBy('id','desc')->paginate(3);

        $new_services =  News::where('idcat','=','5')->select('title','img','content')->orderBy('id','desc')->paginate(4);

        $rate = Rate::find(1);

        return view('body.home',compact('news_hot','new_advises','new_services','rate'));
    }

    public function getNews(){
        $news = News::get(); 

        return view('body.news',compact('news'));

    }

    public function getAdvise(){
        $new_advises = News::where('idcat','=','6')->orderBy('id','desc')->first();

        $new_advises_child = News::where('idcat','=','6')->select('title','img','content')->orderBy('id','desc')->paginate(3);

        return view('body.advise',compact('new_advises','new_advises_child'));

    }

    // ---------------------------------RATE -----------------------------------


    public function getRateEdit(){
        $rate = Rate::find(1);

        return view('admin_cms.edit_rate',compact('rate'));

        
    }
    public function RateEdit(Request $request,$id){


        if ($request->purchase_rate == '' || $request->selling_rate == '' || $request->payment_rate == '' || $request->sweep_rate == '' ){
            return redirect('admin_ubiz@2022/edit_rate/'.$id)->with(['flash_level' => 'danger' , 'flash_message' => 'Vui lòng điều vào các trường có *' ]);
    }

    $Rate = Rate::find($id);
    $Rate->purchase_rate = $request->purchase_rate;
    $Rate->selling_rate = $request->selling_rate;
    $Rate->payment_rate = $request->payment_rate;
    $Rate->sweep_rate = $request->sweep_rate;

    $Flag =$Rate->save();  

    if ($Flag == true) {
        return redirect('admin_ubiz@2022/edit_rate/'.$id)->with(['flash_level' => 'success' , 'flash_message' => 'Chỉnh sửa tỉ lệ thành công' ]);
   }else{
    return redirect('admin_ubiz@2022/edit_rate/'.$id)->with(['flash_level' => 'danger' , 'flash_message' => 'Lỗi Chỉnh sửa' ]);
   }
    }

}