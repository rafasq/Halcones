<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="{{action('Hex@Hex')}}" id="Brand">
      <img src="{{asset('img/Hex.png')}}" class="d-inline-block align-top" alt="" href="{{action('Hex@Hex')}}" >
    </a>
  </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" >HEXAWARE SOCIAL </a>
            </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{action('Hex@Hex')}}">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul>
      <li class="nav-item active">
          <p class="p"> Visitas:</p><style>p.p{text-align: center; float:left;}</style>
      <a href=$url title="contador de visitas"> <img src ="http://www.web-counter.net/count_20091204.php?c=e4RXVAYaQaq" style=" background-color:black;" alt="contador de vista">
      </a>  
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-success my-2 my-sm-0" href="{{action('Hex@Login')}}" >Login</a>
      <a class="btn btn-outline-success my-2 my-sm-0" href="{{action('Hex@Register')}}" >Register</a>
      </div>
    </div>
  </nav>