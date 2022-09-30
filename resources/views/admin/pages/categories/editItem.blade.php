@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Chỉnh sửa danh mục con của {{$cateItems[0]->Categories->name}}</h4>
                <form method="POST" action="{{route('editCateItem')}}" enctype="multipart/form-data" class="form-inline">
                  @csrf
                <input type="hidden" value="{{$cateItems[0]->Categories->id}}" name="cate_id">
                <input type="hidden" value="{{$cateItem->id}}" name="id">
                <label class="sr-only" for="inlineFormInputName2">Tên Danh Mục</label>
                <input type="text" name="name" value="{{$cateItem->name}}" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Tên Danh Mục">
                <label class="sr-only" for="inlineFormInputName2">Hình Ảnh</label>
                <input type="hidden" name="image1" value="{{$cateItem->image}}" id="">
                <input type="file" name="file_upload" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Tên Danh Mục">
                <button type="submit" class="btn btn-primary mb-2">Cập nhật</button>
                </form>
            </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{$cateItems[0]->Categories->name}}</h4>
                <div class="table-responsive pt-3">
                  <table id="recent-purchases-listing" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Tên Danh Mục Con
                        </th>
                        <th>
                          Số lượng Sản Phẩm
                        </th>
                        <th>
                          Hành động
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($cateItems as $ct)
                      <tr>
                        <td>
                          {{$ct->id}}
                        </td>
                        <td>
                          {{$ct->name}}
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="20"></div>
                          </div>
                        </td>
                        <td style="width: 15%">
                            <a href="{{route('loadEditCate',$ct->id)}}"><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="{{route('deleteCateItem',$ct->id)}}" onclick="return confirm('Xóa mục này?')"><button type="button" class="btn btn-danger">Xóa</button></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection