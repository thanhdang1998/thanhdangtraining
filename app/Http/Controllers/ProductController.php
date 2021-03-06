<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabproduct;
use Illuminate\Support\Str;
use Exception;

class ProductController extends Controller
{
    /**
    * Show display page product with account user
    *
    * @param 
    * @param 
    * @return view with $sanpham
    */ 
    public function showProduct()
    {
        $sanpham = tabproduct::latest()->paginate(5);
        return view('backend.sanpham.sanpham',compact('sanpham'));
    }

    /**
    * Find product
    *
    * @param varchar name
    * @param tinyint status
    * @param number min 
    * @param number max 
    * @param AjaxRequest $rq
    * @return view with $sanpham, $sanpham1
    */
    public function findProduct(Request $rq)
    {
        if($rq->name==NULL && $rq->status==NULL && $rq->min == NULL && $rq->max == NULL)
        {
            $sanpham = tabproduct::latest()->get();
        }
        elseif($rq->status==NULL && $rq->min == NULL && $rq->max == NULL)
        {
            $sanpham = tabproduct::where('product_name','like','%'.$rq->name.'%')->get();
        }
        elseif($rq->min == NULL && $rq->max == NULL)
        {
            $sanpham = tabproduct::where('product_name','like','%'.$rq->name.'%')->where('is_sales','=',$rq->status)->get();
        }
        elseif($rq->min == NULL)
        {
            $sanpham = tabproduct::where('product_name','like','%'.$rq->name.'%')->where('is_sales','=',$rq->status)->Where('product_price','<=',$rq->max)->get();
        }
        elseif($rq->max == NULL)
        {
            $sanpham = tabproduct::where('product_name','like','%'.$rq->name.'%')->where('is_sales','=',$rq->status)->Where('product_price','>=',$rq->min)->get();
        }
        else
        {
            $sanpham = tabproduct::where('product_name','like','%'.$rq->name.'%')->where('is_sales','=',$rq->status)->Where('product_price','>=',$rq->min)->Where('product_price','<=',$rq->max)->get();
        }
        return view('backend.sanpham.timkiemsanpham',compact('sanpham'));
    }

    /**
    * Show display page add product
    *
    * @param 
    * @param 
    * @return view with $sanpham
    */
    public function addProduct()
    {
        $sanpham = 0;
        return view('backend.sanpham.themsuasanpham',compact('sanpham'));
    }

    /**
    * Add product into database
    *
    * @param varchar addname
    * @param int addprice
    * @param tinyint addstatus
    * @param file addimage
    * @param formthemsanphamRequest $rq
    * @return RedirectRoute
    */
    public function postAddProduct(Request $rq)
    {
        $rq->validate(
            [
                'addname' => 'required|min:5|max:255|unique:products,product_name',
                'addprice' => 'required|numeric|min:1|regex:/^[0-9]{1,6}+(?:\.[0-9]{2})?$/',
                'addstatus' => 'required',
                'description' => 'max:1000',
                'addimage' => 'mimes:jpeg,png,jpg|max:2000' // max 10000kb
            ],

            [
                'addname.required' => 'T??n s???n ph???m kh??ng ???????c ????? tr???ng',
                'addname.unique' => 'S???n ph???m ???? c??, kh??ng ???????c tr??ng t??n',
                'addname.min' => 'T??n s???n ph???m t???i thi???u tr??n 5 k?? t???',
                'addname.max' => 'T??n s???n ph???m t???i ??a 255 k?? t???',
                'addprice.required' => 'Gi?? s???n ph???m kh??ng ???????c ????? tr???ng',
                'addprice.numeric' => 'Gi?? s???n ph???m ph???i l?? k?? t??? s???',
                'addprice.min' => 'Gi?? s???n ph???m ph???i l?? s??? l???n h??n 0',
                'addprice.regex' => 'Ph???i ??t h??n ho???c b???ng 8 ch??? s??? v?? k??m 2 s??? th???p ph??n',
                'addstatus.required' => 'Tr???ng th??i kh??ng ???????c ????? tr???ng',
                'description.max' => 'M?? t??? kh??ng qu?? 1000 k?? t???',
                'addimage.image' => 'File ph???i l?? 1 h??nh ???nh',
                'addimage.mimes' => 'H??nh ???nh ph???i ????ng d???nh d???ng',
                'addimage.max' => 'K??ch c??? h??nh ???nh kh??ng qu?? 2Mb',
            ],
        );

        $name1 = $rq->addname;
        $sanpham = new tabproduct;
        $sanpham->product_id = $name1[0].Str::random(9);
        $sanpham->product_name = $rq->addname;
        if($rq->hasFile('addimage')) 
 		{
		  $file = $rq->file('addimage');
		  $name = $file->getClientOriginalName();
		  $hinh = Str::random(4)."_".$name;
		  while(file_exists("images/".$hinh))
		  {
		      $hinh = Str::random(4)."_".$name;
		  }
		  $file->move("images",$hinh);
		  $sanpham->product_image = "images/".$hinh;
    	}
		else
		{
            $sanpham->product_image = "";
		}
        $sanpham->product_price = $rq->addprice;
        $sanpham->is_sales = $rq->addstatus;
        $sanpham->description = $rq->description;
        $sanpham->created_at = now('Asia/Ho_Chi_Minh');
        $sanpham->save();
    }

    /**
    * Show display page update product
    *
    * @param int id (Product ID)
    * @param 
    * @return view with $sanpham
    */
    public function editProduct($id)
    {
        $sanpham = tabproduct::where('product_id','=',$id)->first();
        if($sanpham==NULL)
        {
            return redirect()->back()->with('alert', 'S???n ph???m kh??ng t???n t???i!');
        }
        return view('backend.sanpham.themsuasanpham',compact('sanpham'));
    }

    /**
    * update product in database
    *
    * @param varchar editname
    * @param int editprice
    * @param tinyint editstatus
    * @param file editimage
    * @param formsuasanphamRequest $rq
    * @return RedirectRoute
    */
    public function postEditProduct(Request $rq)
    {
        $sanpham = tabproduct::where('product_id','=',$rq->hiddenid)->first();
        if($rq->editname === $sanpham->product_name)
        {
            $rq->validate(
                [
                    'editname' => 'required|min:5|max:255',
                    'editprice' => 'required|numeric|min:1|regex:/^[0-9]{1,6}+(?:\.[0-9]{2})?$/',
                    'editstatus' => 'required',
                    'description' => 'max:1000',
                    'editimage' => 'mimes:jpeg,png,jpg|max:20000' // max 10000kb
                ],
    
                [
                    'editname.required' => 'T??n s???n ph???m kh??ng ???????c ????? tr???ng',
                    'editname.unique' => 'S???n ph???m ???? c??, kh??ng ???????c tr??ng t??n',
                    'editname.max' => 'T??n s???n ph???m t???i ??a 255 k?? t???',
                    'editname.min' => 'T??n s???n ph???m t???i thi???u tr??n 5 k?? t???',
                    'editprice.required' => 'Gi?? s???n ph???m kh??ng ???????c ????? tr???ng',
                    'editprice.numeric' => 'Gi?? s???n ph???m ph???i l?? k?? t??? s???',
                    'editprice.min' => 'Gi?? s???n ph???m ph???i l?? s??? l???n h??n 0',
                    'addprice.regex' => 'Ph???i ??t h??n ho???c b???ng 8 ch??? s??? v?? k??m 2 s??? th???p ph??n',
                    'editstatus.required' => 'Tr???ng th??i kh??ng ???????c ????? tr???ng',
                    'description.max' => 'M?? t??? kh??ng qu?? 1000 k?? t???',
                    'editimage.image' => 'File ph???i l?? 1 h??nh ???nh',
                    'editimage.mimes' => 'H??nh ???nh ph???i ????ng d???nh d???ng',
                    'editimage.max' => 'K??ch c??? h??nh ???nh kh??ng qu?? 2Mb',
                ],
            );
        }
        else
        {
            $rq->validate(
                [
                    'editname' => 'required|min:5|max:255|unique:products,product_name',
                    'editprice' => 'required|numeric|min:1|regex:/^[0-9]{1,6}+(?:\.[0-9]{2})?$/',
                    'editstatus' => 'required',
                    'description' => 'max:1000',
                    'editimage' => 'mimes:jpeg,png,jpg|max:20000' // max 10000kb
                ],
    
                [
                    'editname.required' => 'T??n s???n ph???m kh??ng ???????c ????? tr???ng',
                    'editname.unique' => 'S???n ph???m ???? c??, kh??ng ???????c tr??ng t??n',
                    'editname.max' => 'T??n s???n ph???m t???i ??a 255 k?? t???',
                    'editname.min' => 'T??n s???n ph???m t???i thi???u tr??n 5 k?? t???',
                    'editprice.required' => 'Gi?? s???n ph???m kh??ng ???????c ????? tr???ng',
                    'editprice.numeric' => 'Gi?? s???n ph???m ph???i l?? k?? t??? s???',
                    'editprice.min' => 'Gi?? s???n ph???m ph???i l?? s??? l???n h??n 0',
                    'editprice.regex' => 'Ph???i ??t h??n ho???c b???ng 8 ch??? s??? v?? k??m 2 s??? th???p ph??n',
                    'editstatus.required' => 'Tr???ng th??i kh??ng ???????c ????? tr???ng',
                    'description.max' => 'M?? t??? kh??ng qu?? 1000 k?? t???',
                    'editimage.image' => 'File ph???i l?? 1 h??nh ???nh',
                    'editimage.mimes' => 'H??nh ???nh ph???i ????ng d???nh d???ng',
                    'editimage.max' => 'K??ch c??? h??nh ???nh kh??ng qu?? 2Mb',
                ],
            );
        }
        
        if($rq->hasFile('editimage')) 
 		{
		  
		  $file = $rq->file('editimage');
		  $name = $file->getClientOriginalName();
		  $hinh = Str::random(4)."_".$name;
		  while(file_exists("images/".$hinh))
		  {
		      $hinh = Str::random(4)."_".$name;
		  }
		  $file->move("images",$hinh);
		  unlink($sanpham->product_image);
		  $sanpham->product_image = "images/".$hinh;
    	}

        $name1 = $rq->editname;
        $sanpham->product_id = $name1[0].Str::random(9);
        $sanpham->product_name = $rq->editname;

        $sanpham->product_price = $rq->editprice;
        $sanpham->is_sales = $rq->editstatus;
        $sanpham->description = $rq->description;
        $sanpham->updated_at = now('Asia/Ho_Chi_Minh');
        $sanpham->save();
    }

    /**
    * Delete Product
    *
    * @param int id (User ID)
    * @param AjaxRequest $rq
    * @return RedirectRoute
    */
    public function deleteProduct(Request $rq)
    {
        try
        {
            if($rq->id == "")
            {
                throw new Exception('B???n ch??a nh???p gi?? tr???');
            }
            $sanpham = tabproduct::where('product_id','=',$rq->id)->first(); 
            if($sanpham != NULL)
            {
                $sanpham->delete();
            }
            else
            {
                throw new Exception('Kh??ng t??m th???y s???n ph???m');
            }
        } 
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => $exception], 500);
        }
    }

}
