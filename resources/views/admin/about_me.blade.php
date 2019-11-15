@extends('layout.main')

@section('main')
<div class="container">

<div class="row">
<div class="col">
<form>
  <div class="form-group row">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">使用者名稱</span>
    </div>
    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </div>
  <div class="row">
  <img id="image" class="col-12" src="/man.png">
</div>
  <div class="form-group row">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">個人圖片</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="user_image" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="user_image">上傳圖片</label>
  </div>
  {{-- TinyMCE --}}
</div>
  </div>
</form>
    </div>
</div>

</div>
@endsection

@section('css')
@parent
<link  href="{{asset('node_modules/cropperjs/dist/cropper.css')}}" rel="stylesheet">
@endsection

@section('javascript')
@parent
<script src="{{asset('node_modules/cropperjs/dist/cropper.js')}}"></script>
<script>
const image = document.getElementById('image');
const cropper = new Cropper(image, {
  aspectRatio: 16 / 9,
  crop(event) {
    console.log(event.detail.x);
    console.log(event.detail.y);
    console.log(event.detail.width);
    console.log(event.detail.height);
    console.log(event.detail.rotate);
    console.log(event.detail.scaleX);
    console.log(event.detail.scaleY);
  },
});
</script>
@endsection
