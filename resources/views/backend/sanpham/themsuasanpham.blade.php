@extends('backend.index')
@section('noidung')

@if($sanpham)
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">suasanpham</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <form method="post" enctype="multipart/form-data" id="formsuasanpham">
    {{csrf_field()}}
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Sửa sản phẩm</h3>
              </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="editname">Tên sản phẩm</label>
                    <input type="hidden" name="hiddenid" value="{{$sanpham->product_id}}">
                    <input type="text" class="form-control" id="editname" name="editname" maxlength="254" placeholder="Enter name" value="{{$sanpham->product_name}}">
                    <div class="editname1 erroradd" style="color:red;"></div>
                  </div>
                  <div class="form-group">
                    <label for="editprice">Giá bán</label>
                    <input type="text" class="form-control" id="editprice" name="editprice" maxlength="254" placeholder="Enter price" value="{{$sanpham->product_price}}">
                    <div class="editprice1 erroradd" style="color:red;"></div>
                  </div>
                  <div class="form-group">
                    <label for="editdescription">Mô tả</label>
                    <textarea rows="5" class="form-control ckeditor" id="editdescription" name="editdescription">
                      {{$sanpham->description}}
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="editstatus">Trạng thái</label>
                    <select class="form-control" id="editstatus" name="editstatus">
                        <option value="1">Đang bán</option>
                        <option value="0">Ngừng bán</option>
                        <option value="2">Hết hàng</option>
                    </select>
                    <div class="editstatus1 erroradd" style="color:red;"></div>
                  </div>
                </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-body">
                <img src="../{{$sanpham->product_image}}" width="400px" height="300px" style="border-radius:10px;"/>
                  <div class="form-group">
                    <label for="editimage">Hình ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="editimage" name="editimage">
                      </div>
                      <div class="input-group-append">
                      <button type="button" class="btn btn-warning col cancel1">
                        <i class="fas fa-times-circle"></i>
                        <span>Cancel</span>
                      </button>
                      </div>
                      
                    </div>
                    <div class="editimage1 erroradd" style="color:red;"></div>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Cập nhật</button>
                  <a href="{{route('sanpham')}}" class="btn btn-success">Hủy </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </form>

  </div>
@elseif($sanpham===0)
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">themsanpham</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <form method="post" enctype="multipart/form-data" id="formthemsanpham">
    {{csrf_field()}}
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm</h3>
              </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="addname">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="addname" name="addname" maxlength="254" placeholder="Enter name" value="{{old('addname')}}">
                    <div class="addname1 erroradd" style="color:red;"></div>
                  </div>
                  <div class="form-group">
                    <label for="addprice">Giá bán</label>
                    <input type="text" class="form-control" id="addprice" name="addprice" maxlength="254" placeholder="Enter price" value="{{old('addprice')}}">
                    <div class="addprice1 erroradd" style="color:red;"></div>
                  </div>
                  <div class="form-group">
                    <label for="adddescription">Mô tả</label>
                    <textarea rows="5" class="form-control ckeditor" id="adddescription" name="adddescription" value="{{old('adddescription')}}">
                    </textarea>
                  </div>
                  <div class="adddes1 erroradd" style="color:red;"></div>
                  <div class="form-group">
                    <label for="addstatus">Trạng thái</label>
                    <select class="form-control" id="addstatus" name="addstatus">
                        <option value=""></option>
                        <option value="1">Đang bán</option>
                        <option value="0">Ngừng bán</option>
                        <option value="2">Hết hàng</option>
                    </select>
                    <div class="addstatus1 erroradd" style="color:red;"></div>
                  </div>
                </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group">
                    <label for="addimage">Hình ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="addimage" name="addimage">
                      </div>
                      <div class="input-group-append">
                      <button type="button" class="btn btn-warning col cancel">
                        <i class="fas fa-times-circle"></i>
                        <span>Cancel</span>
                      </button>
                      </div>
                      
                    </div>
                    <div class="addimage1 erroradd" style="color:red;"></div>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Thêm</button>
                  <a href="{{route('sanpham')}}" class="btn btn-success">Hủy</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </form>

  </div>
@endif
@endsection

@section('script')
<script>
$(document).ready(function(){
        
        $(document).on('click','.cancel',function(){
          $('#addimage').val(null);
        })
        $(document).on('click','.cancel1',function(){
          $('#editimage').val(null);
        })

        $('#formthemsanpham').submit(function(e){
            e.preventDefault();
            var formdata = new FormData(this); 
            formdata.append("description", CKEDITOR.instances['adddescription'].getData());
             $.ajax({ 
                type: 'POST',
                cache: false,
                url: "{{route('postthemsanpham')}}",
                data:formdata,
                /* dataType: 'json', */
                contentType:false,
                processData:false,
                success: function(data) {
                    window.location.href = "{{route('sanpham')}}";
                },
                error:function(error) 
                {
                    var data = error.responseJSON.errors;
                    if(data.addname){
                      $('.addname1').text(data.addname);
                    }else{
                      $('.addname1').text('');
                    }

                    if(data.addprice){
                      $('.addprice1').text(data.addprice);
                    }else{
                      $('.addprice1').text('');
                    }

                    if(data.addstatus){
                      $('.addstatus1').text(data.addstatus);
                    }else{
                      $('.addstatus1').text('');
                    }

                    if(data.description){
                      $('.adddes1').text(data.description);
                    }else{
                      $('.adddes1').text('');
                    }

                    if(data.addimage){
                      $('.addimage1').text(data.addimage);
                    }else{
                      $('.addimage1').text('');
                    }
                }
                
            }); 
        });

        $('#formsuasanpham').submit(function(e){
            e.preventDefault();
            var formdata = new FormData(this); 
            formdata.append("description", CKEDITOR.instances['editdescription'].getData());
             $.ajax({ 
                type: 'POST',
                cache: false,
                url: "{{route('postsuasanpham')}}",
                data:formdata,
                /* dataType: 'json', */
                contentType:false,
                processData:false,
                success: function(data) {
                    window.location.href = "{{route('sanpham')}}";
                },
                error:function(error) 
                {
                    var data = error.responseJSON.errors;
                    if(data.editname){
                      $('.editname1').text(data.editname);
                    }else{
                      $('.editname1').text('');
                    }

                    if(data.editprice){
                      $('.editprice1').text(data.editprice);
                    }else{
                      $('.editprice1').text('');
                    }

                    if(data.editstatus){
                      $('.editstatus1').text(data.editstatus);
                    }else{
                      $('.editstatus1').text('');
                    }

                    if(data.editdescription){
                      $('.editdes1').text(data.editdescription);
                    }else{
                      $('.editdes1').text('');
                    }

                    if(data.editimage){
                      $('.editimage1').text(data.editimage);
                    }else{
                      $('.editimage1').text('');
                    }
                }
                
            }); 
        });
});
</script>
@endsection