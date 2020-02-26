<?php
namespace App\Http\Controllers;
use App\Admin;
use App\category;
use App\News;
use App\book;
use Session;
use DB;
use App\Http\Requests\addcat;
use App\Http\Requests\addbook;
use App\Http\Requests\updatecat;
use App\Http\Requests\newsvalidation;
use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    public function login()
    {
    	return view("adminpages/login");
    }
    public function postlogin(Request $req)
    {
        $email 	 =$req->em;
        $password =md5($req->pass);
         //echo $email,$password;
		
		 //dd($data);
		 
      $data = Admin::where(['email'=>$email,'password'=>$password])->get();
	   foreach ($data as  $value) {
	  	$user = $value['username'];
	  }
      
    
     if (count($data)>0) {
         
             Session::put('adminemail',$user);
			return redirect("/admin/dashboard");

       }else{
       	Session::flash('status','Invalid Login');
       	return redirect("/admin");
       }
    }
   public function dashboard()
   {
   return view("adminpages/dashboard");
   }
   public function category()
   {
    $category_data = category::paginate(2);
 
   	 return view("adminpages/category")->with('cat_data',$category_data);
   }
   public function addCategory()
   {
      return view('adminpages/addCategory');
   }
   public function postaddcategory(addcat $req)
   {
          $cn               =$req->cname;
          $file             = $req->file('image');
          $original_Name    = $file->getClientOriginalName();  
          $file_extention   =$file->getClientOriginalExtension();
          $randon_name      =rand().'.'.$file_extention;
          //$destinationpath = public_path('/attach/');
         date_default_timezone_set("Asia/Kolkata");
        $CurrentTime=time();
        $DateTime=date("M j ,Y",$CurrentTime);
          $distination_path  =public_path().'/attach';
      if ($file->move($distination_path,$randon_name)) {
        $addcat          = new  category();
        $addcat->cname  =$cn;
        $addcat->image  =$randon_name;
        $addcat->date  =$DateTime;
        if ($addcat->save()) {
           Session::flash('status',"Category Added Successfully");
           return redirect("/admin/category");
         } else{
           echo "Some thing went to wrong!";
           return redirect("admin/addCategory");
         }
      }

   }
  public function deletecategory($did,$dimg)
  {
       $delete_catByid = category::find($did);
     if ($delete_catByid->delete()) {
        $image = public_path().'/attach/'.$dimg;
        unlink($image);
        Session::flash('status','Category Delete Successfully!');
        return redirect('admin/category');
     }
      
  }
  public function editcategory($editId)
  { 
     $edit_catByid = category::find($editId);
    return view('adminpages/editcategory',['edit_cat'=> $edit_catByid]);
    
  }

  public function postupdatecategory(updatecat $request)
  {      
           $hide_catId          = $request->hid;
           $hide_cat_image      = $request->himg;
           $update_cname        =$request->cname;
            $file                =$request->file('image');
            if(empty($file)) {
              // udpate only data
               $update_cat  =category::find($hide_catId);
               $update_cat->cname =$update_cname;
               if ($update_cat->save()) {
                 Session::flash('status',"Category Update Successfully");
                  return redirect("/admin/category");
               }
            }else{
              // update data and image
              //$original_Name  = $file->getClientOriginalName();  
       $file_extention  =$file->getClientOriginalExtension();
       $randon_name    =rand().'.'.$file_extention;
      //$destinationpath = public_path('/attach/');
       $distination_path  =public_path().'/attach';
      if ($file->move($distination_path,$randon_name)) {
        $addcat   =category::find($hide_catId);
        $addcat->cname  =$update_cname;
        $addcat->image  =$randon_name;
        if ($addcat->save()) {
             unlink(public_path().'/attach/'.$hide_cat_image);
           Session::flash('status',"Category Added Successfully");
           return redirect("/admin/category");
         } else{
           echo "Some thing went to wrong!";
           return redirect("admin/addCategory");
         }
      }              

            }
          

          //$category_data = category::find();
          
  }
  
   public function addNews()
   {
        $newsCategory = category::get();
        $selectedID = $newsCategory[0]->id;  
        return view('adminpages/addnews')->with(array('updated_news'=>$newsCategory,'selectdId'=>$selectedID));
   }
   public function postaddnews(Request $req)
   {
        $rules  = [

            'category'    =>'required',
            'news_title'  =>'required|min:10|max:255|unique:news',
            'desciption'  =>'required|min:50',
            'image'       =>'required|mimes:jpg,jpeg|max:2048'

          ];
      $customMessage = [
             'required'              =>':attribute Can not be Blank',
             'news_title.required'  =>'Title Can Not be Blank',
             'desciption.required'  =>'Please Enter Desciption of News',
             'image.mimes'          =>'Only jpg or jpeg file support',
             'image.max'            =>'maximum size is 2048kb'

          ];
          $this->validate($req,$rules,$customMessage);
       $category  = $req->category;
       $title  =$req->news_title;
       $disc    =$req->desciption;
       $file    =$req->file('image');
       $original_Name  = $file->getClientOriginalName();  
       $randon_name = date('dmY').rand().$original_Name;
         date_default_timezone_set("Asia/Kolkata");
        $CurrentTime=time();
        $DateTime=date("M j ,Y",$CurrentTime);
       /*$file_extention  =$file->getClientOriginalExtension();
       $randon_name    =rand().'.'.$file_extention;*/
      //$destinationpath = public_path('/attach/');
       $distination_path  =public_path().'/newsfiles';
      if ($file->move($distination_path,$randon_name)) {
          $add_news_Obj  = new News;
          $add_news_Obj->news_title = $title;
          $add_news_Obj->category  = $category;
          $add_news_Obj->desciption = $disc;
          $add_news_Obj->image = $randon_name;
           $add_news_Obj->date = $DateTime;
           if ($add_news_Obj->save()) {
              Session::flash('status','News Added Successfully!');
             return redirect('admin/news');
          }else{
            echo "Some thing went goes to wrong!";
            return redirect('admin/addNews');
          }
      }
    }
     public function news()
   {
   
    $get_new_data = News::paginate(2);
    return view("adminpages/news")->with(array('news_data'=>$get_new_data));
   }
    public function deletenews($nId)
    {  
         $get_news_id  = News::findOrFail($nId);
         $get_news_id->id;
         $dimage = $get_news_id->image;
        if ($get_news_id->delete()) {
         $image = public_path().'/newsfiles/'.$dimage;
        unlink($image);
        Session::flash('status','News Item Delete Successfully!');
        return redirect('admin/news');
        }
      
    }
    public function editnews($eid,$cid)
    {
        $categort_Id= category::find($cid);
        $category_data = category::get();
        $get_All_News = News::find($eid);
        return view('adminpages/editnews')->with(array('getCategory'=>$category_data,'findcatId'=>$categort_Id,'news_data'=>$get_All_News));
  }


public function postupdatenews(Request $req)
{
            $hide_newsId       = $req->hid;
            $hide_news_image   = $req->himg;
            $hide_cat_Id      = $req->catid;
            $update_title      = $req->news_title;
            $update_title      = $req->news_title;
            $update_desc       = $req->desciption;
            $news_file         = $req->file('image');
           if (empty($news_file)) {
               // only data updated 
               $newsupdate  = News::find($hide_newsId);
               $newsupdate->news_title = $update_title;
               $newsupdate->desciption = $update_desc;
               if ($newsupdate->save()) {
                  
                  Session::flash('status',"News Data Update Successfully");
                  return redirect("/admin/news");
               }
           }else{
                 $file_extention  = $news_file->getClientOriginalExtension();
                 $randon_name    =rand().'.'.$file_extention;
                 $distination_path  =public_path().'/newsfiles';
                 if ($news_file->move($distination_path,$randon_name)) {
                    $updateNews   =News::find($hide_newsId);
                    $updateNews->news_title = $update_title;
                    $updateNews->desciption = $update_desc;
                    $updateNews->image   = $randon_name;
                    if ($updateNews->save()) {
                      unlink(public_path().'/newsfiles/'.$hide_news_image);
                      Session::flash('status','News updated Successfully!');
                      return redirect('admin/news');
                    }
                 }
              
           }

  
}

public function books()
{
  $get_All_books  = book::paginate(2);
  return view('adminpages/books')->with(['allBooks'=>$get_All_books]);
}

public function addbooks()
{
  
  return view('adminpages/addBooks');
}

public function postaddbook(addbook $req)
{
   $book_title          = $req->title;
   $book_price          = $req->price;
   $book_image          = $req->file('image');
   $original_Name       = $book_image->getClientOriginalName();  
   $file_extention       =$book_image->getClientOriginalExtension();
   $randon_image_name    =rand().'.'.$file_extention;
   $distination_path     =public_path().'/books';
   if ($book_image->move($distination_path,$randon_image_name)) {
       $addbook   = new book();
        $addbook->title =$book_title;
        $addbook->price =$book_price;
        $addbook->image =$randon_image_name;
        if ($addbook->save()) {
           Session::flash('status',"Book Added Successfully");
           return redirect("/admin/books");
         } else{
           echo "Some thing went to wrong!";
           return redirect("admin/addBooks");
         }
   }
}

public function editbook($bid)
{
   $edit_bookByid = book::find($bid);
  return view('adminpages/editbook')->with(['editbook'=>$edit_bookByid]);
}

public function deletebook($id,$img)
{
      $delete_bookByid = book::find($id);
      if($delete_bookByid->delete()) {
        $image = public_path().'/books/'.$img;
        unlink($image);
        Session::flash('status','Books Delete Successfully!');
        return redirect('admin/books');
             }

}
public function postupdatebook(Request $req)
{
      $hidden_book_Id         = $req->hidden_id;
      $hidden_book_image      = $req->hidden_img;
      $update_book_tite       =$req->title;
      $upadte_book_price      =$req->price;
      $update_image_file      =$req->file('image');
            if(empty($update_image_file)) {
              // udpate only data
            $update_book        =book::find($hidden_book_Id);
            $update_book->title =$update_book_tite;
            $update_book->price =$upadte_book_price;
               if ($update_book->save()) {
                 Session::flash('status',"Book Update Successfully");
                  return redirect("/admin/books");
               }
            }else{
              // update data and image
              //$original_Name  = $file->getClientOriginalName();  
       $file_extention      =$file->getClientOriginalExtension();
       $randon_file_name    =rand().'.'.$file_extention;
      //$destinationpath = public_path('/attach/');
       $distination_path  =public_path().'/books';
      if ($update_image_file->move($distination_path,$randon_file_name)) {
        $update_book   =book::find($hidden_book_Id);
        $update_book->title  =$update_book_tite;
        $update_book->price  =$upadte_book_price;
        $update_book->image  =$randon_file_name;
        if ($update_book->save()) {
             unlink(public_path().'/books/'.$hidden_book_image);
           Session::flash('status',"Books Added Successfully");
           return redirect("/admin/books");
         } else{
           echo "Some thing went to wrong!";
           return redirect("admin/addBooks");
         }
      }              

  }
//$category_data = category::find();
}

public function contact()
{
  $getAllcontact  =DB::table('contact_users')->paginate(2);
  return view('adminpages/contact')->with('contact',$getAllcontact);
}
public function deletecontact($id)
{
$getAllcontact  =DB::table('contact_users')->where('id', $id);
if ($getAllcontact->delete()) {
      Session::flash('status','Message Delete Successfully!');
        return redirect('admin/contact');
}
}
  
   public function logout()
   {
   			Session::flush();
			return redirect("/admin");
   }
}

?>













<style>
  .page-link{
    background-color:  red;
   color:gray!important;

  }
  body{
    color:#de1aa9!important;
  }
</style>