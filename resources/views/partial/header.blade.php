<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"">{{env('APP_NAME')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">首頁 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('archive')}}">歸檔</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="{{url('tag')}}">標籤</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          後台管理
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">文章</a>
          <a class="dropdown-item" href="#">歸檔</a>
          <a class="dropdown-item" href="#">標籤</a>
          <a class="dropdown-item" href="#">有關於我</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">登出</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>