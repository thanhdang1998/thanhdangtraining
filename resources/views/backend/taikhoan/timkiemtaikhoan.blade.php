                @if($taikhoan->count() > 0)
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
                                    $s = 1;
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
                @else
                    <?php
                        echo "Không tìm thấy kết quả";
                    ?>
                @endif
                    