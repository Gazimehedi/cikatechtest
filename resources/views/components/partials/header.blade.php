<nav class="navbar fixed-top navbar-light bg-light" style="padding:20px 0;box-shadow: 0px 1px 20px 0px rgb(0 0 0 / 12%);">
    <div class="container">
      <a href="{{url('/')}}" class="navbar-brand">
          <img style="max-height:30px;max-width:100%;" src="{{asset('assets/img/cikatech1.png')}}" alt="logo">
      </a>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('simplecrud')}}">Simple Crud</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('formdeposit')}}">Form Deposit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('deposit')}}">Deposit</a>
        </li>
      </ul>
    </div>
  </nav>
