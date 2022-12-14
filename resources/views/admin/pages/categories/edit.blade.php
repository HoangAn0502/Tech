@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm mới danh mục</h4>
                <p class="card-description">
                <!-- Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row -->
                </p>
                <form method="POST" action="{{route('editCate')}}" enctype="multipart/form-data" class="form-inline">
                  @csrf
                <input type="hidden" value="{{$cate->id}}" name="id">
                <input type="hidden" value="{{$cate->cate_id}}" name="cate_id">
                <label class="sr-only" for="inlineFormInputName2">Tên Danh Mục</label>
                <input type="text" name="name" class="form-control mb-2 mr-sm-2" value="{{$cate->name}}" id="inlineFormInputName2" placeholder="Tên Danh Mục">
                <label class="sr-only" for="inlineFormInputName2">Hình Ảnh</label>
                <input type="hidden" value="{{$cate->image}}" name="image1">
                <input type="file" name="file_upload" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Tên Danh Mục">
                <button type="submit" class="btn btn-primary mb-2">Thêm mới</button>
                </form>
            </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Danh Mục</h4>
                <div class="table-responsive pt-3">
                  <table id="recent-purchases-listing" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Tên Danh Mục
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
                      @foreach ($allCate as $cate)
                      <tr>
                        <td>
                          {{$cate->id}}
                        </td>
                        <td>
                          {{$cate->name}}
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="20"></div>
                          </div>
                        </td>
                        <td style="width: 15%">
                            <a href=""><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="{{route('deleteCate',$cate->id)}}" onclick="return confirm('Xóa mục này?')"><button type="button" class="btn btn-danger">Xóa</button></a>
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