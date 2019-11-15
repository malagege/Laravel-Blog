@extends('layout.main')

@section('main')
<div class="container">

<div class="row">
    <div class="col">
<form>
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label text-right">標題</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="username" value="">
    </div>
  </div>
  {{-- TinyMCE --}}
<textarea class="description" name="description"></textarea>
</div>
  </div>
</form>
    </div>
</div>

</div>
@endsection

@section('javascript')
@parent
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300
    });
</script>
@endsection