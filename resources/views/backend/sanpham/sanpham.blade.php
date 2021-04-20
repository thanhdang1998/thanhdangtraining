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
            <h1>Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">sanpham</li>
            </ol>
          </div>
        </div>
      </div>
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
                                <label for="name">Tên sản phẩm</label>
                                <input type="text" class="form-control nametk" id="name" maxlength="255" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select name="status" id="status" class="form-control statustk">
                                    <option value="1">Đang bán</option>
                                    <option value="0">Ngừng bán</option>
                                    <option value="2">Hết hàng</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="min">Giá bán từ</label>
                                <input type="number" class="form-control mintk" id="min" min="0" placeholder="50000">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="max">Giá bán đến</label>
                                <input type="number" class="form-control maxtk" id="max" min="0" placeholder="500000">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-6" align="left">
                      <button type="submit" class="btn btn-success them"><i class="fas fa-plus"></i> Thêm mới</button>
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    {{ $sanpham->links('vendor.pagination.bootstrap-4') }}
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bảng sản phẩm</h3>
              </div>
              <div class="card-body">
                <div class="hienthitimkiem">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                              <th style="width: 5%; text-align:center;">#</th>
                              <th style="width: 15%; text-align:center;">Tên sản phẩm</th>
                              <th style="width: 43%; text-align:center;">Mô tả</th>
                              <th style="width: 15%; text-align:center;">Giá</th>
                              <th style="width: 10%; text-align:center;">Trạng thái</th>
                              <th style="width: 12%"></th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    $s = $sanpham->currentPage()*$sanpham->perPage() - $sanpham->perPage() + 1;
                                ?>
                                @foreach($sanpham as $sp)
                                <tr>
                                    <td align="center">{{$s++}}</td>
                                    <td align="center">{!!$sp->product_name!!}</td>
                                    <td>{!!$sp->description!!}</td>
                                    <td align="center">${{$sp->product_price}}</td>
                                    <td align="center">
                                        @if($sp->is_sales === 1)
                                            Đang bán
                                        @else
                                            Ngưng bán
                                        @endif
                                    </td>
                                    <td align="center">
                                        <a href="{{route('suasanpham',$sp->product_id)}}" data-toggle="tooltip" data-placement="top" title="Sửa sản phẩm"><button type="button" class="btn btn-success"><i class="fas fa-pen"></i></button></a>
                                        <a href="#" class="xoa" data-id="{{$sp->product_id}}" data-confirm="Bạn có muốn xóa sản phẩm {{$sp->product_name}} này ko?" data-toggle="tooltip" data-placement="top" title="Xóa sản phẩm"><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                
              </div>
              
              <div class="card-footer clearfix">
                {{ $sanpham->links('vendor.pagination.bootstrap-4') }}
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

    var msg = '{{Session::get('alert')}}';
    if(msg){
      alert(msg);
    }

    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
        $('.timkiem').click(function(){
            var name = $('.nametk').val();
            var status = $('.statustk').val();
            var min = $('.mintk').val();
            var max = $('.maxtk').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({ 
                type: 'POST',
                cache: false,
                url: "{{ route('timkiemsanpham') }}",
                data:{
                    name:name,status:status,min:min,max:max,_token:_token
                },
                success: function(data) {
                    $('.hienthitimkiem').html(data);
                },
            });
        });

        $('.xoatimkiem').click(function(){
            window.location.reload();
        });

        $('.them').click(function(){
            window.location.href="{{route('themsanpham')}}";
        });

        $(document).on('click','.xoa',function(e){
          e.preventDefault();
            var choice = confirm($(this).attr('data-confirm'));
            if (choice) {
              var id = $(this).attr('data-id');
              var _token = $('input[name="_token"]').val();
              $.ajax({
                  url: '{{route('xoasanpham')}}',
                  type: 'POST',
                  cache: false,
                  data: {
                    id:id,
                    _token:_token
                  }, 
                  success: function(Response) 
                  {
                    window.location.href = "{{route('sanpham')}}";
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

    });
</script>
@endsection