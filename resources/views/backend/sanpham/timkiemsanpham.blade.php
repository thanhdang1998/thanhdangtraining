@if($sanpham->count() >0) 
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
                                    $s = 1;
                                ?>
                                @foreach($sanpham as $sp)
                                <tr>
                                    <td align="center">{{$s++}}</td>
                                    <td align="center">{!!$sp->product_name!!}</td>
                                    <td>{!!$sp->description!!}</td>
                                    <td align="center">$ {{$sp->product_price}}</td>
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
@else
    <?php
        echo "Không tìm thấy kết quả";
    ?>
@endif