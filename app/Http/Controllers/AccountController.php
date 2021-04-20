<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabuser;
use Illuminate\Support\Str;
use Exception;
use Carbon\Carbon;

class AccountController extends Controller
{
    /**
    * Show display page account with account user
    *
    * @param 
    * @return view with $taikhoan
    */
    
    public function showAccount(Request $request)
    {      
        $taikhoan = tabuser::where('is_delete','=',0)->latest()->paginate(5); 
        if($request->ajax())
        {
            return view('backend.taikhoan.phantranguser', compact('taikhoan'));
        }
        return view('backend.taikhoan.taikhoan',compact('taikhoan'));
    }

    /* function fetch(Request $request)
    {
        if($request->ajax())
        {
            $taikhoan = tabuser::where('is_delete','=',0)->latest()->paginate(10);
            return view('backend.taikhoan.phantranguser', compact('taikhoan'));
        }
    } */

    /**
    * Find user
    *
    * @param varchar value1 (name)
    * @param varchar value2 (email)
    * @param varchar value3 (group_role)
    * @param tinyint value4 (status)
    * @param AjaxRequest $rq
    * @return view with $taikhoan, $taikhoan1
    */
    public function findAccount(Request $rq)
    {
        $taikhoan = tabuser::where('name','like','%'.$rq->name.'%')->where('email','like','%'.$rq->email.'%')->where('group_role','like','%'.$rq->group.'%')->where('is_active','=',$rq->status)->get();
        return view('backend.taikhoan.timkiemtaikhoan',compact('taikhoan'));
    }

    /**
    * Add user
    *
    * @param varchar name
    * @param varchar email
    * @param varchar pass
    * @param text confirmpass
    * @param tinyint status
    * @param AjaxformthemtaikhoanRequest $rq
    * @return 
    */
    public function addAccount(Request $rq)
    {
        $rq->validate(
            [
                'addNameAccount' => 'required|min:5|max:254',
                'addEmailAccount' => 'required|email|min:5|max:254|unique:users,email',
                'addPassAccount' => 'required|min:5|max:8|regex:/^.*(?=.{1,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/',
                'addConfirmpassAccount' => 'required|same:addPassAccount',
                'addGroupAccount' => 'required',
                'addStatusAccount' => 'required',
            ],
        );

        $taikhoan = new tabuser;
        $taikhoan->name = $rq->addNameAccount;
        $taikhoan->email = $rq->addEmailAccount;
        $taikhoan->password = bcrypt($rq->addPassAccount);
        $taikhoan->is_active = $rq->addStatusAccount;
        $taikhoan->is_delete = 0;
        $taikhoan->group_role = $rq->addGroupAccount;
        $taikhoan->remember_token = Str::random(60);
        $taikhoan->created_at = now('Asia/Ho_Chi_Minh');
        $taikhoan->save();
    }

    /**
    * shows users who need update
    *
    * @param int id (User ID)
    * @param AjaxRequest $rq
    * @return RedirectResponse with $taikhoan
    */
    public function editAccount(Request $rq)
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
            $taikhoan = tabuser::find($rq->id);
            if($taikhoan != NULL)
            {
                return response()->json($taikhoan);
            }
            else
            {
                throw new Exception('Không tìm thấy tài khoản');
            }
        } 
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => $exception], 500);
        }
    }

    /**
    * Update User
    *
    * @param array $rq
    * @return 0,1
    */ 
    public function postEditAccount(Request $rq)
    {
        $taikhoan = tabuser::find($rq->id);
        if($rq->editEmailAccount === $taikhoan->email)
        {
            if($rq->editPassAccount)
            {
                $rq->validate(
                    [
                        'editNameAccount' => 'required|min:5|max:255',
                        'editEmailAccount' => 'required|email',
                        'editPassAccount' => 'min:5|max:8|regex:/^.*(?=.{1,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/',
                        'editConfirmpassAccount' => 'same:pass',
                        'editGroupAccount' => 'required',
                        'editStatusAccount' => 'required',
                    ],
                );
            }
            else
            {
                $rq->validate(
                    [
                        'editNameAccount' => 'required|min:5|max:255',
                        'editEmailAccount' => 'required|email',
                        'editStatusAccount' => 'required',
                        'editGroupAccount' => 'required',
                    ],
                );
            } 
        }
        else
        {
            if($rq->editPassAccount)
            {
                $rq->validate(
                    [
                        'editNameAccount' => 'required|min:5|max:255',
                        'editEmailAccount' => 'required|email|unique:users,email,'.$rq->id,
                        'editPassAccount' => 'min:5|max:8|regex:/^.*(?=.{1,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/',
                        'editConfirmpassAccount' => 'same:pass',
                        'editGroupAccount' => 'required',
                        'editStatusAccount' => 'required',
                    ],
                );
            }
            else
            {
                $rq->validate(
                    [
                        'editNameAccount' => 'required|min:5|max:255',
                        'editEmailAccount' => 'required|email|unique:users,email,'.$rq->id,
                        'editStatusAccount' => 'required',
                        'editGroupAccount' => 'required',
                    ],
                );
            }
            
        }

        $taikhoan->name = $rq->editNameAccount;
        $taikhoan->email = $rq->editEmailAccount;
        $taikhoan->password = bcrypt($rq->editPassAccount);
        $taikhoan->is_active = $rq->editStatusAccount;
        $taikhoan->is_delete = 0;
        $taikhoan->group_role = $rq->editGroupAccount;
        $taikhoan->updated_at = now('Asia/Ho_Chi_Minh');
        $taikhoan->save();
    }

    /**
    * Delete User
    *
    * @param int id (User ID)
    * @param AjaxRequest $rq
    * @return RedirectRoute
    */
    public function deleteAccount(Request $rq)
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
            $taikhoan = tabuser::find($rq->id);
            if($taikhoan != NULL)
            {
                $taikhoan->is_delete = 1;
                $taikhoan->save(); 
            }
            else
            {
                throw new Exception('Không tìm thấy tài khoản');
            }
        } 
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => $exception], 500);
        }
    }

    /**
    * Block User
    *
    * @param int id (User ID)
    * @param AjaxRequest $rq
    * @return RedirectRoute
    */ 

    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blockAccount(Request $rq)
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
            $taikhoan = tabuser::find($rq->id);
            if($taikhoan != NULL)
            {
                if($taikhoan->is_active == 1)
                {
                    $taikhoan->is_active = 0;
                    $taikhoan->save();
                }
                else
                {
                    $taikhoan->is_active = 1;
                    $taikhoan->save();
                }
            }
            else
            {
                throw new Exception('Không tìm thấy tài khoản');
            }
        } 
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => $exception], 500);
        }
    }
}
