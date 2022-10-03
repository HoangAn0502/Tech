@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Thêm Sản Phẩm</h4>
            <p class="card-description">
              Nhập thông tin
            </p>
            <form method="POST" action="{{route('createPro')}}" enctype="multipart/form-data" class="forms-sample">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Tên Sản Phẩm</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Nhập tên sản phẩm">
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Danh Mục</label>
                      <select class="form-control show-cti" name="danhMuc_id" id="cate">
                        @foreach ($allCate as $cate)
                            <option data-id="{{$cate->id}}" value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
                      </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Hãng</label>
                    <select class="form-control show-cti" name="cate_id" id="cate">
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Giá</label>
                    <input type="number" name="price" class="form-control" id="exampleInputName1" placeholder="Nhập Giá Sản Phẩm">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Giảm Giá</label>
                    <input type="number" name="discount" class="form-control" id="exampleInputName1" placeholder="Nhập % Giảm giá">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Ngày Đăng</label>
                    <input type="date" name="date" class="form-control" id="exampleInputEmail3" placeholder="Nhập ngày đăng">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Số lượng</label>
                    <input type="number" name="quantity" class="form-control" id="exampleInputName1" placeholder="Nhập số lượng">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Hot</label>
                      <select class="form-control" name="hot" id="exampleSelectGender">
                        <option value="0" selected>Bình Thường</option>
                        <option value="1">Hot</option>
                      </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Trạng thái</label>
                      <select class="form-control" name="view" id="exampleSelectGender">
                        <option value="0" selected>Hiển thị</option>
                        <option value="1">Ẩn</option>
                      </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Hình Ảnh</label>
                <input type="file" name="file_upload" class="form-control">
              </div>
              
              
              <div class="form-group">
                <label for="exampleInputEmail3">Mô tả sản phẩm</label>
                <textarea class="form-control" name="detail" id="exampleTextarea1" cols="10" rows="25"></textarea>
              </div>            
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button type="button" class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#cate').click(function(){
      var id_cate=$(this).val();
      $.ajax({
        url: '{{route('loadCateItems')}}',
        method: 'POST',
        data:{
          _token: "{{ csrf_token() }}",
          id_cate:id_cate
        },
        success:function(data){
          $("select[name='cate_id'").html('');
                $.each(data, function(key, value){
                    $("select[name='cate_id']").append(
                        "<option value=" + value.id + ">" + value.name + "</option>"
                    );
                });
        }
      })
    });
  });
</script>
@endsection