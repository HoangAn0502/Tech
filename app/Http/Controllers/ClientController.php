<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\CateItems;
use App\Models\Products;
use App\Models\Comments;
use App\Models\User;
use DB;

use Illuminate\Support\Facades\Auth;


class ClientController extends Controller
{
    public function __construct()
    {
        $allCate=Categories::all();
        view()->share('allCate', $allCate);
    }
    public function index()
    {
        $homeTopPr = Products::where('hot','=','1')->limit(3)->get();
        $homeNewPr = Products::orderBy('id','desc')->get();
        $homeSalePr = Products::orderBy('discount','desc')->limit(6)->get();
        return view('client.pages.index',['homeTopPr'=>$homeTopPr,'homeNewPr'=>$homeNewPr,'homeSalePr'=>$homeSalePr]);
    }
    //view contact

    public function contac()
    {
        return view('client.pages.contact');
    }

    public function getProByCate($id)
    {
        $listPro=Categories::find($id)->Products;
        $cti_bar=Categories::find($id)->Cate_items;
        return view('client.pages.category',['listPro'=>$listPro,'cti_bar'=>$cti_bar]);
    }
    public function getProByCateItem($id)
    {
        $listPro=CateItems::find($id)->Products;
        $cti_bar=Categories::find($id)->Cate_items;
        return view('client.pages.category',['listPro'=>$listPro,'cti_bar'=>$cti_bar]);
    }

    public function getProById($id)
    {
        $pro=Products::find($id);
        $images=Products::find($id)->Images;

        $coutall = DB::table('comments')->where('pro_id','=',$pro->id)->count();
        $cout5 = DB::table('comments')->where('pro_id','=',$pro->id)->where('status', '=', 5)->count();
        $cout4 = DB::table('comments')->where('pro_id','=',$pro->id)->where('status', '=', 4)->count();
        $cout3 = DB::table('comments')->where('pro_id','=',$pro->id)->where('status', '=', 3)->count();
        $cout2 = DB::table('comments')->where('pro_id','=',$pro->id)->where('status', '=', 2)->count();
        $cout1 = DB::table('comments')->where('pro_id','=',$pro->id)->where('status', '=', 1)->count();
        $tong = ((($cout5*5)+($cout4*4)+($cout3*3)+($cout2*2)+($cout1*1))/$coutall);
        $Round =  round($tong, 1);


        $comm = DB::table('comments')->join('users' , 'users.id', '=', 'comments.user_id')->select('comments.*', 'users.name')->where('pro_id','=',$pro->id)->get();

        return view('client.pages.product',['pro'=>$pro,'images'=>$images, 'comm'=>$comm, 'coutall'=> $coutall,'cout5'=> $cout5,'cout4'=> $cout4,'cout3'=> $cout3,'cout2'=> $cout2,'cout1'=> $cout1, 'Round'=>$Round]);
    }



    // T??m ki???m
    public function search(){
        $listPro=CateItems::all();
        $cti_bar=Categories::all();
        $keywords = $_GET['keywords'];
        $listSearch=Products::where('name','LIKE', '%'.$keywords.'%')
        ->orWhere('detail','LIKE', '%'.$keywords.'%')->get();
        if(count($listSearch)==0){
            $listSearch = Products::all();
            $MesSearch = 'Kh??ng t??m th???y k???t qu??? c???a t??? kh??a: '.$keywords.'. Hi???n th??? danh s??ch s???n ph???m:';
            return view('client.pages.search')->with(compact('listPro','cti_bar','keywords','listSearch', 'MesSearch'));
        }else{
            $MesSearch = 'K???t qu??? c???a t??? kh??a: '.$keywords.'.';
            return view('client.pages.search')->with(compact('listPro','cti_bar','keywords','listSearch', 'MesSearch'));
        }
    }


    public function store($id, Request $request)
    {
        $pro_id = $id;
        $comment = new Comments();
        $product = Products::find($id);
        $comment->pro_id = $pro_id;
        // $comment->user_id = Auth::user()->id;
        $comment->user_id = 1;

        $comment->content = $request->content;

        if($request->rating_status > 0){
            $comment->status = $request->rating_status;
        }
        else{
            $comment->status = 5;
        }

        $comment->save();

        return redirect()->back();
    }

}
