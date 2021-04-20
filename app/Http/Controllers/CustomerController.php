<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use App\Imports\CustomerImport;
use App\Models\tabcustomer;
use Exception;

class CustomerController extends Controller
{
    /**
    * Show display page customer
    *
    * @param 
    * @param 
    * @return view with $khachhang
    */
    public function showCustomer()
    { 
        $khachhang = tabcustomer::latest()->paginate(5);
        return view ('backend.khachhang.khachhang',compact('khachhang'));
    }

    /**
    * Find customer
    *
    * @param varchar name
    * @param varchar email
    * @param tinyint status
    * @param varchar address
    * @param AjaxRequest $rq
    * @return view with $khachhang, $khachhang1
    */
    public function findCustomer(Request $rq)
    {
        $khachhang = tabcustomer::where('customer_name','like','%'.$rq->name.'%')->where('email','like','%'.$rq->email.'%')->where('is_active','=',$rq->status)->where('address','like','%'.$rq->address.'%')->get();
        return view ('backend.khachhang.timkiemkhachhang',compact('khachhang'));
    }
 
    /**
    * Add customer
    *
    * @param varchar addname
    * @param varchar addemail
    * @param varchar addtel
    * @param varchar addaddress
    * @param tinyint addstatus
    * @param AjaxformthemkhachhangRequest $rq
    * @return 
    */ 
    public function addCustomer(Request $rq)
    {
        $validatedData = $rq->validate(
            [
                'addname'    => 'required|min:5|max:255',
                'addemail'   => 'required|email|max:254|unique:customers,email',
                'addtel'     => 'required|min:10|max:11',
                'addaddress' => 'required|max:254|',
                'addstatus'  => 'required',
            ],

            [
                'addname.required'    => 'Tên   không được  để   trống',
                'addname.min'         => 'Tên   tối   thiểu trên 5    kí tự',
                'addname.max'         => 'Tên   tối   đa    255  kí   tự',
                'addemail.required'   => 'Email không được  để   trống',
                'addemail.email'      => 'Email phải  đúng  định dạng',
                'addemail.unique'     => 'Email đã    được  đăng ký',
                'addemail.max'        => 'Email tối   đa    255  kí   tự',
                'addtel.required'     => 'Điện  thoại không được để   trống',
                'addtel.min'          => 'Điện  thoại trên  10   số',
                'addtel.max'          => 'Điện  thoại không quá  11   số',
                'addtel.regex'        => 'Điện  thoại không đúng định dạng',
                'addaddress.required' => 'Địa   chỉ   không được để   trống',
                'addaddress.max'      => 'Địa   chỉ   tối   đa   255  kí tự',
                'addstatus.required'  => 'Trạng thái  không được để   trống',
            ],
        );

        $khachhang = new tabcustomer;
        $khachhang->customer_name = $rq->addname;
        $khachhang->email = $rq->addemail;
        $khachhang->tel_num = $rq->addtel;
        $khachhang->address = $rq->addaddress;
        $khachhang->is_active = $rq->addstatus;
        $khachhang->created_at = now('Asia/Ho_Chi_Minh');
        $khachhang->save();
    }

    /**
    * Update customer
    *
    * @param int id (Customer ID)
    * @param varchar name
    * @param varchar email
    * @param varchar pass
    * @param text confirmpass
    * @param varchar group
    * @param tinyint status
    * @param AjaxRequest $rq
    * @return 
    */ 
    public function postEditCustomer(Request $rq)
    {
        try
        {
            if($rq->id == "")
            {
                throw new Exception('Bạn chưa nhập giá trị');
            }
            elseif(is_numeric($rq->id) == False)
            {
                throw new Exception('Giá trị phải là kiểu số');
            }
            elseif($rq->id < 1)
            {
                throw new Exception('Giá trị vừa nhập nhỏ hơn giá trị cho phép');
            }
            $khachhang = tabcustomer::find($rq->id);
            if($khachhang == NULL)
            {
                throw new Exception('Không tìm thấy khách hàng');
            }
        }
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => $exception], 500);
        }
            if($rq->email === $khachhang->email)
                {
                    $validatedData = $rq->validate(
                        [
                            'name'    => 'required|min:5|max:255|regex:/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/',
                            'email'   => 'required|email|max:255',
                            'tel'     => 'required|min:10|max:11|regex:/^.*(?=.{1,11})(?=.*[0-9]).*$/',
                            'address' => 'required|max:255',
                        ],
            
                        [
                            'name.required'    => 'Tên   không được  để   trống',
                            'name.regex'        => 'Tên không có kí tự đặc biệt',
                            'name.max'         => 'Tên   tối   đa    255  kí   tự',
                            'name.min'         => 'Tên   tối   thiểu trên 5    kí tự',
                            'email.required'   => 'Email không được  để   trống',
                            'email.email'      => 'Email phải  đúng  định dạng',
                            'email.max'      => 'Email   tối   đa    255  kí   tự',
                            'tel.required'     => 'Điện  thoại không được để   trống',
                            'tel.min'          => 'Điện  thoại trên  10   kí   tự',
                            'tel.max'          => 'Điện  thoại không quá  11   kí tự',
                            'tel.regex'        => 'Điện  thoại phải là số',
                            'address.required' => 'Địa   chỉ   không được để   trống',
                            'address.max' => 'Địa   chỉ   tối   đa    255  kí   tự',
                        ],
                    );
                }
                else
                {
                    $validatedData = $rq->validate(
                        [
                            'name'    => 'required|min:5|max:255|regex:/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/',
                            'email'   => 'required|email|max:255|unique:customers,email',
                            'tel'     => 'required|min:10|max:11|regex:/^.*(?=.{1,11})(?=.*[0-9]).*$/',
                            'address' => 'required|max:255',
                        ],
            
                        [
                            'name.required'    => 'Tên   không được  để   trống',
                            'name.max'         => 'Tên   tối   đa    255  kí   tự',
                            'name.regex'        => 'Tên không có kí tự đặc biệt',
                            'name.min'         => 'Tên   tối   thiểu trên 5    kí tự',
                            'email.required'   => 'Email không được  để   trống',
                            'email.email'      => 'Email phải  đúng  định dạng',
                            'email.max'      => 'Email   tối   đa    255  kí   tự',
                            'email.unique'     => 'Email đã    được  đăng ký',
                            'tel.required'     => 'Điện  thoại không được để   trống',
                            'tel.min'          => 'Điện  thoại trên  10   số',
                            'tel.max'          => 'Điện  thoại không quá  11   số',
                            'tel.regex'        => 'Điện  thoại phải là số',
                            'address.required' => 'Địa   chỉ   không được để   trống',
                            'address.max' => 'Địa   chỉ   tối   đa    255  kí   tự',
                        ],
                    );
                }

                $khachhang->customer_name = $rq->name;
                $khachhang->email = $rq->email;
                $khachhang->tel_num = $rq->tel;
                $khachhang->address = $rq->address;
                $khachhang->is_active = 1;
                $khachhang->updated_at = now('Asia/Ho_Chi_Minh');
                $khachhang->save();
    }

    /**
    *  Export excel customer file
    *
    * @param typefile $type
    * @param 
    * @return filedownload
    */ 
    public function ExportExcel($type) 
    {
            return \Excel::download(new CustomerExport, 'Customer.'.$type);
    }

    /**
    *  Import excel customer file
    *
    * @param file file
    * @param AjaxRequest $rq
    * @return
    */ 
    public function ImportExcel(Request $rq) 
    {
        $rq->validate(
            [
                'import_file' => 'required|mimes:xlsx,xls',
            ],
            [
                'import_file.required' => 'Không tìm thấy file',
                'import_file.mimes' => 'Phải đúng định dạng',
            ]
        ); 

        $import = \Excel::import(new CustomerImport,$rq->import_file); 
    }
}
