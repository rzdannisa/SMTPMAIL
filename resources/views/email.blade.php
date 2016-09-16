  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">rzd</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Send your email</a></li>
      </ul>
    </div>
    <title>SEND EMAIL</title>
  </nav>

    <body>
      <div class="container">
      <head>
      <center>
      <h1>Send Email</h1>
      </center>
      </head>

    <div class="row">
    <form action="{{url('sendemail')}}" method="post" class="col s12">
    {!! csrf_field() !!}
      <div class="row">
        <div class="row">
        <div class="input-field col s12">
          <input placeholder="Penerima" id="first_name" name="email" type="text" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Subject" id="first_name" name="subject" type="text" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Pesan" id="first_name" name="pesan" type="text" class="validate">
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Send
  </button>
    </form>
  </div>
      </div>
    </body>