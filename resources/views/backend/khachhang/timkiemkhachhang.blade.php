@if($khachhang->count() >0) 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th style="width: 5%; text-align:center;">#</th>
                                <th style="width: 20%">Họ tên</th>
                                <th style="width: 25%">Email</th>
                                <th style="width: 25%">Địa chỉ</th>
                                <th style="width: 15%">Số điện thoại</th>
                                <th style="width: 5%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php
                                      $s = 1;
                                  ?>
                                  @foreach($khachhang as $kh)
                                    <tr class={{$kh->id}}>
                                        <td align="center">{{$s++}}</td>
                                        <td>{{$kh->customer_name}}</td>
                                        <td>{{$kh->email}}</td>
                                        <td>{{$kh->address}}</td>
                                        <td>{{$kh->tel_num}}</td>
                                        <td align="center">
                                          <button type="button" class="badge bg-success capnhat" data-id="{{$kh->id}}">Cập nhật</button>
                                        </td>
                                    </tr>
                                    <tr class={{$kh->id}} style="display:none; background-color:yellow;">
                                        <td><i class="far fa-edit"></i></td>
                                        <td>
                                          <input type="text" value="{{$kh->customer_name}}" maxlength="254" name="editname">
                                          <div class="editname erroredit" style="color:red;"></div>
                                        </td>
                                        <td>
                                          <input type="text" value="{{$kh->email}}" maxlength="254" name="editemail">
                                          <div class="editemail erroredit" style="color:red;"></div>
                                        </td>
                                        <td>
                                          <input type="text" value="{{$kh->address}}" maxlength="254" name="editaddress">
                                          <div class="editaddress erroredit" style="color:red;"></div>
                                        </td>
                                        <td>
                                          <input type="text" value="{{$kh->tel_num}}" maxlength="11" name="edittel">
                                          <div class="edittel erroredit" style="color:red;"></div>
                                        </td>
                                        <td align="center">
                                            <button type="button" class="badge bg-success sua" id="{{$kh->id}}"  title="Cập nhật khách hàng">Cập nhật</button>
                                            <button type="button" class="badge bg-success huy" id="{{$kh->id}}" title="Hủy cập nhật">Hủy</button>
                                        </td>
                                    </tr>
                                  <!-- </form> -->
                                  @endforeach
                            </tbody>
                        </table>
@else
    <?php
        echo "Không tìm thấy kết quả";
    ?>
@endif