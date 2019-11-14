@extends('layout.main')

@section('main')
<div class="container">

<div class="row">
    <div class="col">
<form>
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">標題</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="username" value="">
    </div>
  </div>
  {{-- TinyMCE --}}
</div>
  </div>
</form>
    </div>
</div>

</div>
@endsection
