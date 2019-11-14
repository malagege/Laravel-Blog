@extends('layout.main')

@section('main')
<div class="container">

<div class="row">
    <div class="col">
<form>
  <h2>新增標籤</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">標籤</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <button type="button" class="btn btn-primary">新增標籤</button>
  </div>
</form>
<form>
<ul class="list-group">
  <li class="list-group-item list-group-item-action  d-flex  flex-wrap align-items-center">
<div class="flex-fill">
  <input class="form-control" type="text" value="Cras justo odio">
    </div>
    <div class="ml-auto">
      <button type="button" class="btn btn-primary">儲存</button>
    </div>
  </li>
  <li class="list-group-item list-group-item-action  d-flex  flex-wrap align-items-center">
  <div class="flex-fill">
  Dapibus ac facilisis in
  </div>
      <div class="ml-auto">
      <button type="button" class="btn btn-primary">修改</button>
    </div>
  </li>
  <li class="list-group-item list-group-item-action ">Morbi leo risus</li>
  <li class="list-group-item list-group-item-action ">Porta ac consectetur ac</li>
  <li class="list-group-item list-group-item-action ">Vestibulum at eros</li>
</ul>
</form>
    </div>
</div>

</div>
@endsection
