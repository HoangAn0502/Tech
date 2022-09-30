@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Sửa Sản Phẩm</h4>
            <p class="card-description">
              Nhập thông tin
            </p>
            <form method="POST" action="{{route('editPro')}}" enctype="multipart/form-data" class="forms-sample">
              @csrf
              <input type="hidden" name="id" value="{{$pro->id}}" id="">
              <input type="hidden" name="image1" value="{{$pro->image}}" id="">
              <div class="form-group">
                <label for="exampleInputName1">Tên Sản Phẩm</label>
                <input type="text" name="name" value="{{$pro->name}}" class="form-control" id="exampleInputName1" placeholder="Nhập tên sản phẩm">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Danh Mục</label>
                      <select class="form-control show-cti" name="categories" id="cate">
                        @foreach ($allCate as $cate)
                            @if ($cate->id==$pro->Categories->id)
                              <option data-id="{{$cate->id}}" selected value="{{$cate->id}}">{{$cate->name}}</option>
                            @else
                              <option data-id="{{$cate->id}}" value="{{$cate->id}}">{{$cate->name}}</option>
                            @endif
                            
                        @endforeach
                      </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Hãng</label>
                    <select class="form-control show-cti" name="cate_id">
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Giá</label>
                    <input type="number" value="{{$pro->price}}" name="price" class="form-control" id="exampleInputName1" placeholder="Nhập Giá Sản Phẩm">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Giảm Giá</label>
                    <input type="number" value="{{$pro->discount}}" name="discount" class="form-control" id="exampleInputName1" placeholder="Nhập % Giảm giá">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Ngày Đăng</label>
                    <input type="date" value="{{$pro->date}}" name="date" class="form-control" id="exampleInputEmail3" placeholder="Nhập ngày đăng">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Số lượng</label>
                    <input type="number" value="{{$pro->quantity}}" name="quantity" class="form-control" id="exampleInputName1" placeholder="Nhập số lượng">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Hot</label>
                      <select class="form-control" name="hot" id="exampleSelectGender">
                        @if ($pro->hot==0)
                          <option value="0" selected>Bình Thường</option>
                          <option value="1">Hot</option>
                        @else
                          <option value="0" >Bình Thường</option>
                          <option value="1" selected>Hot</option>
                        @endif
                        
                      </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Trạng thái</label>
                      <select class="form-control" name="status" id="exampleSelectGender">
                        @if ($pro->status==0)
                          <option value="0" selected>Hiển thị</option>
                          <option value="1">Ẩn</option>
                        @else
                          <option value="0" >Hiển thị</option>
                          <option value="1" selected>Ẩn</option>
                        @endif
                      </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="file_upload" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <img src="{{asset('images/products/'.$pro->image)}}" width="30%" alt="ko cos anh">
                </div>

              </div>
              
              
              
              <div class="form-group">
                <label for="exampleInputEmail3">Mô tả sản phẩm</label>
                <textarea class="form-control" name="detail" id="exampleTextarea1" cols="10" rows="25">{{$pro->detail}}</textarea>
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