<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests\addcontact;
use Anam\Phpcart\Cart;
class FrontPanel extends Controller
{
    public function index()
    { 
    	
    		$getAll_categories  = DB::table('categories')->get();
    		$getAll_news  		= DB::table('news')
    								->orderBy('created_at','DESC')
    								->paginate(2);
   
    return view('front')->with(['get_category'=>$getAll_categories,'getnews'=>$getAll_news]);
    }

    public function category($cid,$cn)
    {
    	$getAll_categories  = DB::table('categories')->get();
    	$getnews  =Db::table('news')->where('category',$cid)->get();
    	return view('category')->with(['get_category'=>$getAll_categories,'newsdata'=>$getnews,'catname'=>$cn]);
    	
    }
    public function detailsPage($nid)
    {
    	  $getAll_categories  = DB::table('categories')->get();
          $getAll_news = DB::table('news')->where('id',$nid)->first();
    	   return view('details-news')->with(['get_category'=>$getAll_categories,'getAll_news'=>$getAll_news]);
    }

 public function search(Request $req)
    {
    	  $search   = $req->search;
          $getAll_categories  = DB::table('categories')->get();
          $search_news  =DB::table('news')->where('category','like',"%$search%")->orwhere('news_title','like',"%$search%")->get();
          return view('search',['get_category'=>$getAll_categories,'search_news'=>$search_news]);

    }


    public function Contactus()
    {
        
        return view('contact');
    }
    public function addcontactMessage(addcontact $request)
    {
        $data = array();
        date_default_timezone_set("Asia/Kolkata");
        $CurrentTime=time();
        //$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
        $DateTime=date("M j ,Y",$CurrentTime);
        $data['username']       = $request->get('username');
        $data['useremail']      = $request->get('useremail');
        $data['userphone']      = $request->get('userphone');
        $data['Message']        = $request->get('Message');
        $data['date']           =$DateTime;
        $query_insert           = DB::table('contact_users');
       if ($query_insert->insert($data)) {
            Session::flash('status',"Message Send Successfully!");
            return redirect("contact");
       }
}

public function comment($nid)
{     
    $getAll_commnet  =DB::table('comment_table')->skip(0)->take(4)->get();
     $getAll_categories  = DB::table('categories')->get();
          $getAll_news = DB::table('news')->where('id',$nid)->first();
           return view('commentsection')->with(['get_category'=>$getAll_categories,'getAll_news'=>$getAll_news,'commentAll'=>$getAll_commnet]);
   
}
public function commentsubmitted(Request $request)
{
        $getAll_categories  = DB::table('categories')->get();
        $getAll_news = DB::table('news')->first();
         $getAll_commnet  =DB::table('comment_table')->get();
        $data = array();
        date_default_timezone_set("Asia/Kolkata");
        $CurrentTime=time();
        $author = "gulam";
        $DateTime=date("M j ,Y",$CurrentTime);
        $data['comment']        = $request->get('comment');
        $data['author']         = $author;
        $data['date']           =$DateTime;
        $query_insert           = DB::table('comment_Table');
       if ($query_insert->insert($data)) {
       return redirect("commentsection")->with(['get_category'=>$getAll_categories,'getAll_news'=>$getAll_news,'commentAll'=>$getAll_commnet]);
          
       }
           
}

public function commentsection()
{
    $getAll_commnet  =DB::table('comment_table')->skip(0)->take(4)->get();
   
    $getAll_categories  = DB::table('categories')->get();
    $getAll_news = DB::table('news')->first();
     return view("commentsection")->with(['get_category'=>$getAll_categories,'getAll_news'=>$getAll_news,'commentAll'=>$getAll_commnet]);
}



    public function Aboutus()
    {
      
        return view('about');
    }
    public function MyLifestyle()
    {
       return view('lifestyle'); 
    }
    public function featuresNews()
    {
       return view('features');
    }
    public function fashionblog()
    {
       return view('fashion');
    }
     public function photographyblog()
    {
       return view('photography');
    }

    function books()
    {
        $getAll_categories  = DB::table('categories')->get();
        $getAll_books = DB::table('books')->get();
        return view("books",['get_category'=>$getAll_categories,'bookdata'=>$getAll_books]);
    }

    public function addcart()
    {
       extract($_GET);
        $get_cart_data  =[
            'id' => $bid,
            'name' => $bname,
            'price' => $bprice,
            'image' => $bimg,
            'quantity' => $bquan
        ];
  
        $get_Cart_Object = new Cart();
        if($get_Cart_Object->add($get_cart_data))
        {
            echo "Cart Added Successfully";
        }
    }

    function getcartdetails()
    {
        $get_Cartdetails_Object = new Cart();
        
        $total = $get_Cartdetails_Object->count();
        $total_price = $get_Cartdetails_Object->getTotal();
        
        echo "$total ITEMS | PRICE Rs $total_price /-";
    }
    function cartdetails()
    {  
        $getAll_categories  = DB::table('categories')->get();
        $cart_Object = new Cart();
        $items = $cart_Object->getItems();
        $total = $cart_Object->getTotal();
        //print_r($items);
        return view("cartdetails")->with("myitems",$items)->with('get_category',$getAll_categories)->with("grandtotal",$total);
    }

    function Decrease_Item_In_Cart($item_id,$quantity){
        $cart_Object            = new Cart();
        $Decrease_new_quantity  = $quantity - 1;
        if($Decrease_new_quantity>0)
        {
        $cart_Object->updateQty($item_id,$Decrease_new_quantity);
        }
        return redirect("/cartdetails");

    }
    function Increase_Item_In_Cart($item_id,$quantity){
        $cart_Object = new Cart();
        $Increase_new_quantity = $quantity + 1;
        $cart_Object->updateQty($item_id,$Increase_new_quantity);
        return redirect("/cartdetails");

    }
    function Delete_Cart_Item($delete_id){
        $cart_Object = new Cart();
        $cart_Object->remove($delete_id);
        return redirect("/cartdetails");
    }
   
}

