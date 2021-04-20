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
            <h1>Khách hàng</h1>
          </div>
          <div class="col-sm-6"> 
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">khachhang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Họ và Tên</label>
                                <input type="text" class="form-control name" id="name" maxlength="254" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control email" id="email" maxlength="254" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select class="form-control status" id="status">
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Không hoạt động</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" class="form-control address" maxlength="254" id="address" placeholder="Enter address">
                            </div>
                        </div>
                    </div>
                </div>
                
                  <div class="card-footer"> 
                    <div class="row">
                      <div class="col-md-2" align="left">
                        <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#themkhachhang"><i class="fas fa-user-plus"></i> Thêm mới</button>                     
                      </div>
                      
                      <div class="col-md-2" align="left">
                        <form action="" method="post" enctype="multipart/form-data" id="importexcel">
                            {{ csrf_field() }}
                            <input type="file" id="files" name="import_file" style="display:none;"/>
                            <a href="#" class="btn btn-info uploadfile" data-toggle="tooltip" data-placement="top" title="Tải file lên"><i class="fas fa-upload"></i></a>
                            <button type="submit" class="btn btn-info">Import Xlsx</button>
                        </form>
                        <div class="erroraddfileimport" style="color:red;"></div>
                      </div>

                      <div class="col-md-2" align="left">
                        <button type="submit" class="btn btn-info export"><i class="fas fa-download"></i> Export Xlsx</button>
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
    <div class="modal fade" id="themkhachhang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form action="" method="post" id="formthemkhachhang">
                    {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputname" class="col-sm-4 col-form-label">Tên</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="inputname" placeholder="Nhập họ tên" name="addname" value="{{old('addname')}}">
                                  <div class="addname erroradd" style="color:red;"></div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputemail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="inputemail" placeholder="Nhập email" name="addemail" value="{{old('addemail')}}">
                                  <div class="addemail erroradd" style="color:red;"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputtel" class="col-sm-4 col-form-label">Điện thoại</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="inputtel" placeholder="Nhập điện thoại" name="addtel" value="{{old('addtel')}}">
                                  <div class="addtel erroradd" style="color:red;"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputaddress" class="col-sm-4 col-form-label">Địa chỉ</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="inputaddress" placeholder="Nhập địa chỉ" name="addaddress" value="{{old('addaddress')}}">
                                  <div class="addaddress erroradd" style="color:red;"></div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputstatus" class="col-sm-4 col-form-label">Trạng thái</label>
                                <div class="col-sm-8">
                                  <input type="radio" id="true" name="status" class="inputstatus" value="1">
                                  <label for="true">True</label><br>
                                  <input type="radio" id="false" name="status" class="inputstatus" value="0">
                                  <label for="false">False</label><br>
                                  <div class="addstatus erroradd" style="color:red;"></div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-secondary huythem" data-dismiss="modal" value="Hủy">
                    <input type="submit" class="btn btn-primary" value="Lưu">
                </div>
                </form>
            </div>
        </div>
    </div>
    {{ $khachhang->links('vendor.pagination.bootstrap-4') }}
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bảng khách hàng</h3>
              </div>
              <div class="card-body">
                <div class="hienthitimkiem">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th style="width: 5%; text-align:center;">#</th>
                                <th style="width: 20%; text-align:center;">Họ tên</th>
                                <th style="width: 25%; text-align:center;">Email</th>
                                <th style="width: 25%; text-align:center;">Địa chỉ</th>
                                <th style="width: 15%; text-align:center;">Số điện thoại</th>
                                <th style="width: 5%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php
                                      $s = $khachhang->currentPage()*$khachhang->perPage() - $khachhang->perPage() + 1;
                                  ?>
                                  @foreach($khachhang as $kh)
                                    <tr class={{$kh->id}}>
                                        <td align="center">{{$s++}}</td>
                                        <td align="center">{{$kh->customer_name}}</td>
                                        <td align="center">{{$kh->email}}</td>
                                        <td align="center">{{$kh->address}}</td>
                                        <td align="center">{{$kh->tel_num}}</td>
                                        <td align="center">
                                            <!-- <a class="badge bg-success capnhat" id={{$kh->id}}><i class="fas fa-pen" title="Chỉnh sửa khách hàng"></i></a> -->
                                            <button type="button" class="badge bg-success capnhat" data-id="{{$kh->id}}">Cập nhật</button>

                                        </td>
                                    </tr>
                                    <tr class="{{$kh->id}}" style="display:none; background-color:yellow;">
                                        <td><i class="far fa-edit"></i></td>
                                        <td>
                                          <input type="text" value="{{$kh->customer_name}}" name="editname">
                                          <div class="editname erroredit" style="color:red;"></div>
                                        </td>
                                        <td>
                                          <input type="text" value="{{$kh->email}}" name="editemail">
                                          <div class="editemail erroredit" style="color:red;"></div>
                                        </td>
                                        <td>
                                          <input type="text" value="{{$kh->address}}" name="editaddress">
                                          <div class="editaddress erroredit" style="color:red;"></div>
                                        </td>
                                        <td>
                                          <input type="text" value="{{$kh->tel_num}}" name="edittel">
                                          <div class="edittel erroredit" style="color:red;"></div>
                                        </td>
                                        <td align="center">
                                            <button type="button" class="badge bg-success sua" id="{{$kh->id}}" data-toggle="tooltip" data-placement="top" title="Cập nhật khách hàng">Cập nhật</button>
                                            <button type="button" class="badge bg-success huy" id="{{$kh->id}}" data-toggle="tooltip" data-placement="top" title="Hủy cập nhật">Hủy</button>
                                        </td>
                                    </tr>
                                  @endforeach
                            </tbody>
                        </table>
                </div>
                
              </div>
              <div class="card-footer clearfix">
                {{ $khachhang->links('vendor.pagination.bootstrap-4') }}
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

    $(document).ready(function(){ 
      $('[data-toggle="tooltip"]').tooltip();

        $('.uploadfile').click(function() {
          $('#files').click();
        });
        $('.timkiem').click(function(){
            var name = $('.name').val();
            var email = $('.email').val();
            var status = $('.status').val();
            var address = $('.address').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: 'POST',
                cache: false,
                url: "{{ route('timkiemkhachhang') }}",
                data:{
                    name:name,email:email,status:status,address:address,_token:_token
                },
                success: function(data) {
                    $('.hienthitimkiem').html(data);
                },
            });
        });

        $('.xoatimkiem').click(function(){
            window.location.reload();
        });

        $(document).on('click','.capnhat',function(){
          var id = $(this).attr('data-id');
          $('.'+id).toggle();
        });

        $(document).on('click','.huy',function(){
          var id = $(this).attr('id');
          $('.'+id).toggle();
          $('.erroredit').text('');
          var name = $('input[name="editname"]').attr('value');
          $('input[name="editname"]').val(name);
          var email =$('input[name="editemail"]').attr('value');
          $('input[name="editemail"]').val(email);
          var address =$('input[name="editaddress"]').attr('value');
          $('input[name="editaddress"]').val(address);
          var tel =$('input[name="edittel"]').attr('value');
          $('input[name="edittel"]').val(tel);
          
        });

        $('#importexcel').submit(function(e) {
          e.preventDefault();
          var formdata = new FormData(this); 
            $.ajax({
                type: 'POST',
                cache: false,
                url: "{{ route('importexcel') }}",
                data: formdata,
                contentType:false,
                processData:false,
                success: function(data)
                {
                  window.location.reload();
                  alert('Thêm thành công'); 
                }, 
                error: function(error)
                {
                    var data = error.responseJSON.errors;
                    $('.erroraddfileimport').text(data.import_file);
                }
            })
        }) 

        $('.export').click(function() {
          window.location.href = "{{ route('exportexcel', 'xlsx') }}";
        }); 

        $('#formthemkhachhang').submit(function(e) {
          e.preventDefault();
            $.ajax({
                url: '{{route('themkhachhang')}}',
                type: 'POST',
                cache: false,
                data: {
                  addname: $('input[name="addname"]').val(),
                  addemail: $('input[name="addemail"]').val(),
                  addtel: $('input[name="addtel"]').val(),
                  addaddress: $('input[name="addaddress"]').val(),
                  addstatus: $('input[name="status"]:checked').val(),
                  _token: $('input[name="_token"]').val(),
                }, success: function(data) {
                  window.location.reload();
                  alert('Thêm thành công'); 
                }, error: function(error) {
                    var data = error.responseJSON.errors;

                    if(data.addname){
                      $('.addname').text(data.addname);
                    }else{
                      $('.addname').text('');
                    }

                    if(data.addemail){
                      $('.addemail').text(data.addemail);
                    }else{
                      $('.addemail').text('');
                    }

                    if(data.addtel){
                      $('.addtel').text(data.addtel);
                    }else{
                      $('.addtel').text('');
                    }
                    
                    if(data.addaddress){
                      $('.addaddress').text(data.addaddress);
                    }else{
                      $('.addaddress').text('');
                    }
                    
                    if(data.addstatus){
                      $('.addstatus').text(data.addstatus);
                    }else{
                      $('.addstatus').text('');
                    }
                   
                }
            })
        });

        $("#themkhachhang").on('hide.bs.modal', function () {
          $('.erroradd').text('');
          $(this).find('form').trigger('reset');
        });

        $(document).on('click','.sua',function(){
            $.ajax({
                type: 'POST',
                cache: false,
                url: "{{ route('postsuakhachhang') }}",
                data:{
                    id:$(this).attr('id'),
                    name:$('input[name="editname"]').val(),
                    email:$('input[name="editemail"]').val(),
                    address:$('input[name="editaddress"]').val(),
                    tel:$('input[name="edittel"]').val(),
                    _token:$('input[name="_token"]').val()
                },
                success: function(data) {
                  window.location.reload();
                  alert('Cập nhật thành công'); 
                }, 
                error: function(error) {
                    var data = error.responseJSON.errors;
                    var data1 = error.responseJSON.message;
                    if(!data)
                    {
                      alert(data1); 
                    }
                    
                    if(data.name){
                      $('.editname').text(data.name);
                    }else{
                      $('.editname').text('');
                    }

                    if(data.email){
                      $('.editemail').text(data.email);
                    }else{
                      $('.editemail').text('');
                    }

                    if(data.tel){
                      $('.edittel').text(data.tel);
                    }else{
                      $('.edittel').text('');
                    }

                    if(data.address){
                      $('.editaddress').text(data.address);
                    }else{
                      $('.editaddress').text('');
                    }
                }
            });
        });

    });
</script>
@endsection
