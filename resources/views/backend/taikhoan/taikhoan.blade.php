@extends('backend.index')
@section('noidung')

<!-- Content Wrapper. Contains page content -->
{{csrf_field()}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tài khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item active">taikhoan</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Tên</label>
                                <input type="text" class="form-control findname" id="name" maxlength="254" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control findemail" maxlength="254" id="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="group">Nhóm</label>
                                <select class="form-control findgroup" id="group">
                                    <option value="">--Chọn nhóm--</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Reviewer">Reviewer</option>
                                    <option value="Editor">Editor</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select class="form-control findstatus" id="status">
                                    <option value="1">Đang hoạt động</option>
                                    <option value="0">Tạm khóa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-6" align="left">
                      <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#themtaikhoan"><i class="fas fa-user-plus"></i> Thêm mới</button>
                    </div>
                    <div class="col-md-6" align="right">
                      <button type="submit" class="btn btn-primary timkiem">Tìm kiếm</button>
                      <button type="submit" class="btn btn-danger xoatimkiem" data-toggle="tooltip" data-placement="top" title="Xóa tìm kiếm"><i class="fas fa-trash-alt"></i></button>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="themtaikhoan" tabindex="-1" role="dialog" aria-labelledby="them" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="them">Thêm tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form action="" method="post" id="formthemtaikhoan">
                    {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputname" class="col-sm-4 col-form-label">Tên</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputname" placeholder="Nhập họ tên" name="name" maxlength="254" value="{{old('name')}}">
                                <div class="erroraddname erroradd" style="color:red;"></div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputemail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                <input type="email" class="form-control" id="inputemail" placeholder="Nhập email" name="email" maxlength="254" value="{{old('email')}}">
                                <div class="erroraddemail erroradd" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputpassword" class="col-sm-4 col-form-label">Mật khẩu</label>
                                <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputpassword" autocomplete="off" placeholder="Nhập mật khẩu" name="pass">
                                <div class="erroraddpass erroradd" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputconfirmpassword" class="col-sm-4 col-form-label">Xác nhận mật khẩu</label>
                                <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputconfirmpassword" autocomplete="off" placeholder="Xác nhận mật khẩu" name="confirmpass">
                                <div class="erroraddconfirmpass erroradd" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputgroup" class="col-sm-4 col-form-label">Nhóm</label>
                                <div class="col-sm-8">
                                <select class="form-control nhom" id="inputgroup" name="group">
                                    <option value="">--Chọn nhóm--</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Reviewer">Reviewer</option>
                                    <option value="Editor">Editor</option>
                                </select>
                                <div class="erroraddgroup erroredit" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputstatus" class="col-sm-4 col-form-label">Trạng thái</label>
                                <div class="col-sm-8">
                                <input type="radio" id="true" name="status" class="status" value="1">
                                <label for="true">Hoạt động</label><br>
                                <input type="radio" id="false" name="status" class="status" value="0">
                                <label for="false">Không hoạt động</label><br>
                                <div class="erroraddstatus erroradd" style="color:red;"></div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-secondary huythem" data-dismiss="modal" value="Hủy">
                    <input type="submit" class="btn btn-primary" value="Lưu">
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal2 -->
    <div class="modal fade" id="suataikhoan" tabindex="-1" role="dialog" aria-labelledby="sua" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sua">Sửa tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="errorformsua" style="color:red;"></div>
                <form method="post" action="" id="formsuataikhoan">
                {{csrf_field()}}
                <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputname1" class="col-sm-4 col-form-label">Tên</label>
                                <div class="col-sm-8">
                                <input type="hidden" name="id1">
                                <input type="text" class="form-control name1" id="inputname1" maxlength="254" placeholder="Nhập họ tên" name="name1">
                                <div class="erroreditname erroredit" style="color:red;"></div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputemail1" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                <input type="email" class="form-control email1" id="inputemail1" maxlength="254" placeholder="Nhập email" name="email1">
                                <div class="erroreditemail erroredit" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputpassword1" class="col-sm-4 col-form-label">Mật khẩu mới</label>
                                <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputpassword1" autocomplete="off" placeholder="Nhập mật khẩu mới" name="pass1">
                                <div class="erroreditpass erroredit" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputconfirmpassword1" class="col-sm-4 col-form-label">Xác nhận mật khẩu mới</label>
                                <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputconfirmpassword1" autocomplete="off" placeholder="Xác nhận mật khẩu mới" name="confirmpass1">
                                <div class="erroreditconfirmpass erroredit" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputgroup1" class="col-sm-4 col-form-label">Nhóm</label>
                                <div class="col-sm-8">
                                <select class="form-control nhom1" id="inputgroup1" name="group1">
                                    <option value="">--Chọn nhóm--</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Reviewer">Reviewer</option>
                                    <option value="Editor">Editor</option>
                                </select>
                                <div class="erroreditgroup erroredit" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputstatus1" class="col-sm-4 col-form-label">Trạng thái</label>
                                <div class="col-sm-8">
                                  <input type="radio" id="true1" name="status1" class="status1" value="1">
                                  <label for="true1">Hoạt động</label><br>
                                  <input type="radio" id="false1" name="status1" class="status1" value="0">
                                  <label for="false1">Không hoạt động</label><br>
                                  <div class="erroreditstatus erroredit" style="color:red;"></div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-secondary huysua" data-dismiss="modal" value="Hủy">
                    <input type="submit" class="btn btn-primary" value="Lưu">
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Main content -->
    {{ $taikhoan->links('vendor.pagination.bootstrap-4')}}
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bảng tài khoản</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="hienthitimkiem">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th style="width: 5%; text-align: center;">#</th>
                            <th style="width: 25%; text-align:center;">Họ tên</th>
                            <th style="width: 25%; text-align:center;">Email</th>
                            <th style="width: 10%; text-align: center;">Nhóm</th>
                            <th style="width: 15%; text-align: center;">Trạng thái</th>
                            <th style="width: 20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    $s = $taikhoan->currentPage()*$taikhoan->perPage() - $taikhoan->perPage() + 1;
                                ?>
                                @foreach($taikhoan as $tk)
                                <tr>
                                    <td align="center">{{$s++}}</td>
                                    <td align="center">{{$tk->name}}</td>
                                    <td>{{$tk->email}}</td>
                                    <td align="center">{{$tk->group_role}}</td>
                                    <td align="center">
                                        @if($tk->is_active == 1)
                                            <span class="badge bg-success">Đang hoạt động</span>
                                        @else
                                            <span class="badge bg-danger">Tạm khóa</span>
                                        @endif
                                    </td>
                                    <td align="center">
                                        <button type="submit" class="btn btn-success sua" id="{{$tk->id}}" onclick="openModal();" data-toggle="tooltip" data-target="#suataikhoan" title="Chỉnh sửa tài khoản"><i class="fas fa-pen"></i></button>
                                        <button type="submit" class="btn btn-warning xoa" data-id="{{$tk->id}}" data-confirm="Bạn có muốn xóa thành viên {{$tk->name}} này ko?" data-toggle="tooltip" data-placement="top" title="Xóa tài khoản"><i class="fas fa-trash-alt"></i></button>
                                        @if($tk->is_active == 1)
                                          <button type="submit" class="btn btn-success khoa" data-id="{{$tk->id}}" data-confirm="Bạn có muốn khóa tài khoản {{$tk->name}} này không?" data-toggle="tooltip" data-placement="top" title="Khóa tài khoản"><i class="fas fa-user-times"></i></button>
                                        @else
                                          <button type="submit" class="btn btn-danger khoa" data-id="{{$tk->id}}" data-confirm="Bạn có muốn mở khóa tài khoản {{$tk->name}} này không?" data-toggle="tooltip" data-placement="top" title="Mở tài khoản"><i class="fas fa-user-plus"></i></button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                
              </div>
              
              <div class="card-footer clearfix">
                {{ $taikhoan->links('vendor.pagination.bootstrap-4')}}
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('script')
<script>

    function openModal() {
      $('#suataikhoan').modal('show');
    };

    $(document).ready(function(){

        $('[data-toggle="tooltip"]').tooltip();  
        $('.timkiem').click(function(){
            $.ajax({
            type:'POST',
            cache: false,
            url:"{{ route('timkiemtaikhoan') }}",
            data:{
              name:$('.findname').val(),
              email:$('.findemail').val(),
              group:$('.findgroup').val(),
              status:$('.findstatus').val(),
              _token:$('input[name="_token"]').val()
            },
            success:function(data)
            {
              $('.hienthitimkiem').html(data);
            }
          });
        });

        $('.xoatimkiem').click(function(){
            window.location.reload();
        });

        /* $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
      
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
      
            var myurl = $(this).attr('href');
            var page = $(this).attr('href').split('page=')[1];
      
            getData(page);
        }); */

        /* function fetch_data(page)
        {
          var _token = $("input[name=_token]").val();
            $.ajax({
                url: '{{route('paginationuser')}}',
                type: 'POST',
                cache: false,
                data: {
                  page:page,_token:_token,
                }, 
                success: function(data) {
                  $('.hienthitimkiem').html(data); 
                }, 
            })
        } */
        
          $('#formthemtaikhoan').submit(function(e) {
          e.preventDefault();
            $.ajax({
                url: '{{route('themtaikhoan')}}',
                type: 'POST',
                cache: false,
                data: {
                  addNameAccount:$('input[name="name"]').val(),
                  addEmailAccount:$('input[name="email"]').val(),
                  addPassAccount:$('input[name="pass"]').val(),
                  addConfirmpassAccount:$('input[name="confirmpass"]').val(),
                  addGroupAccount:$('.nhom').val(),
                  addStatusAccount:$('input[name="status"]:checked').val(),
                  _token:$('input[name="_token"]').val(),
                }, 
                success: function(data) {
                  window.location.reload();
                  alert('Thêm thành công'); 
                }, 
                error: function(error) {
                    console.log(error);
                    var data = error.responseJSON.errors;
                    if(data.addNameAccount){
                      $('.erroraddname').text(data.addNameAccount);
                      $('#inputname').css("border", "1px solid red");
                    }else{
                      $('.erroraddname').text('');
                      $('#inputname').css("border",'');
                    }

                    if(data.addEmailAccount){
                      $('.erroraddemail').text(data.addEmailAccount);
                      $('#inputemail').css("border", "1px solid red");
                    }else{
                      $('.erroraddemail').text('');
                      $('#inputemail').css("border",'');
                    }

                    if(data.addPassAccount){
                      $('.erroraddpass').text(data.addPassAccount);
                      $('#inputpassword').css("border", "1px solid red");
                    }else{
                      $('.erroraddpass').text('');
                      $('#inputpassword').css("border",'');
                    }
                    
                    if(data.addConfirmpassAccount){
                      $('.erroraddconfirmpass').text(data.addConfirmpassAccount);
                      $('#inputconfirmpassword').css("border", "1px solid red");
                    }else{
                      $('.erroraddconfirmpass').text('');
                      $('#inputconfirmpassword').css("border",'');
                    }

                    if(data.addGroupAccount){
                      $('.erroraddgroup').text(data.addGroupAccount);
                      $('#inputgroup').css("border", "1px solid red");
                    }else{
                      $('.erroraddgroup').text('');
                      $('#inputgroup').css("border",'');
                    }
                    
                    if(data.addStatusAccount){
                      $('.erroraddstatus').text(data.addStatusAccount);
                    }else{
                      $('.erroraddstatus').text('');
                    }
                }
            })
        })

        $("#themtaikhoan").on('hide.bs.modal', function () {
          $('.erroradd').text('');
          $(this).find('form').trigger('reset');
        });

        $("#suataikhoan").on('hide.bs.modal', function () {
          $('.erroredit').text('');
          $(this).find('form').trigger('reset');
        });
        
          $('#formsuataikhoan').submit(function(e) {
          e.preventDefault();            
            $.ajax({
                url: '{{route('postsuataikhoan')}}',
                type: 'POST',
                cache: false,
                data: {
                  id:$('input[name="id1"]').val(),
                  editNameAccount:$('input[name="name1"]').val(),
                  editEmailAccount:$('input[name="email1"]').val(),
                  editPassAccount:$('input[name="pass1"]').val(),
                  editConfirmpassAccount:$('input[name="confirmpass1"]').val(),
                  editGroupAccount:$('.nhom1').val(),
                  editStatusAccount:$('input[name="status1"]:checked').val(),
                  _token:$('input[name="_token"]').val(),
                }, 
                success: function(data) {
                  window.location.reload();
                  alert('Cập nhật thành công'); 
                }, 
                error: function(error) {
                    console.log(error);
                    var data = error.responseJSON.errors;
                    if(data.editNameAccount){
                      $('.erroreditname').text(data.editNameAccount);
                      $('#inputname1').css("border", "1px solid red");
                    }else{
                      $('.erroreditname').text('');
                      $('#inputname1').css("border", '');
                    }

                    if(data.editEmailAccount){
                      $('.erroreditemail').text(data.editEmailAccount);
                      $('#inputemail1').css("border", "1px solid red");
                    }else{
                      $('.erroreditemail').text('');
                      $('#inputemail').css("border", '');
                    }

                    if(data.editPassAccount){
                      $('.erroreditpass').text(data.editPassAccount);
                      $('#inputpassword1').css("border", "1px solid red");
                    }else{
                      $('.erroreditpass').text('');
                      $('#inputpassword1').css("border", '');
                    }
                    
                    if(data.editConfirmpassAccount){
                      $('.erroreditconfirmpass').text(data.editConfirmpassAccount);
                      $('#inputconfirmpassword1').css("border", "1px solid red");
                    }else{
                      $('.erroreditconfirmpass').text('');
                      $('#inputconfirmpassword1').css("border",'');
                    }

                    if(data.editGroupAccount){
                      $('.erroreditgroup').text(data.editGroupAccount);
                      $('#inputgroup1').css("border", "1px solid red");
                    }else{
                      $('.erroreditgroup').text('');
                      $('#inputgroup1').css("border", "1px solid red");
                    }
                    
                    if(data.editStatusAccount){
                      $('.erroreditstatus').text(data.editStatusAccount);
                    }else{
                      $('.erroreditstatus').text('');
                    }
                }
            })
        })

        $(document).on('click','.xoa',function(e){
          e.preventDefault();
            var choice = confirm($(this).attr('data-confirm'));
            if (choice) {
              $.ajax({
                  url: '{{route('xoataikhoan')}}',
                  type: 'POST',
                  cache: false,
                  data: {
                    id: $(this).attr('data-id'),
                    _token: $('input[name="_token"]').val()
                  }, 
                  success: function(Response) 
                  {
                    window.location.reload();
                  }, 
                  error: function(error)
                  {
                    console.log(error);
                    var data = error.responseJSON.message;
                    alert(data);
                  }
              })                
            }
        });

        $(document).on('click','.khoa',function(e){
          e.preventDefault();
            var choice = confirm($(this).attr('data-confirm'));
            if(choice)
            {
              $.ajax({
                  url: '{{route('khoataikhoan')}}',
                  type: 'POST',
                  cache: false,
                  data: {
                    id: $(this).attr('data-id'),
                    _token: $('input[name="_token"]').val()
                  }, 
                  success: function(Response) 
                  {
                    window.location.reload();
                  },
                  error:function(error)
                  {
                    console.log(error);
                    var data = error.responseJSON.message;
                    alert(data);
                  }
                })
            }
        });

        $(document).on('click','.sua',function(){
          var id = $(this).attr('id');
          
            var _token = "{{ csrf_token() }}";
            $.ajax({
              type:'POST',
              cache: false,
              url:"{{ route('suataikhoan') }}",
              data:{
                id:id,_token:_token
              },
              success:function(response){
                  $('input[name="name1"]').val(response.name);
                  $('input[name="email1"]').val(response.email);
                  $('input[name="id1"]').val(response.id);
                  $("#inputgroup1").val(response.group_role);
                  console.log(response);
                  if(response.is_active === 1)
                  {
                    $("#true1").prop("checked", true);
                  }
                  else
                  {
                    $("#false1").prop("checked", true);
                  }
              },
              error:function(error)
              {
                var data = error.responseJSON.message;
                alert(data);
                $('#suataikhoan').modal('hide');
              }
            });
        }); 
    });

    /* $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    }); */

    /* function getData(page)
    {
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data)
        {
            $(".hienthitimkiem").empty().html(data);
              location.hash = page;
            }).fail(function(jqXHR, ajaxOptions, thrownError){
                  alert('No response from server');
            });
        } */
     
</script>
@endsection