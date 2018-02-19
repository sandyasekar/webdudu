
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->

    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Lobster+Two" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- Compiled and minified JavaScript -->

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo" style="font-family: 'Cabin Sketch', cursive; margin-left: 2%;">WebDudu</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Kirim Pesan</a></li>
        </ul>
      </div>
    </nav>
      <div class="container">
          <div class="section">
              <div class="row center">
                    <h1 style="font-family: 'Lobster Two', cursive; color: white;" class="heading">Kirim Pesan, yuk!</h1>
                   <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Kirim Pesan</a>
              </div>
              <div class="row">
              @foreach($pesans as $pesan)                   
                     <div class="col s12 m12">
                         <div class="card-panel red lighten-5">
                            <span class="blue-text text-darken-2">Dari: {{$pesan->dari}}<br>Untuk: {{$pesan->untuk}}<br>Pesan: {{$pesan->pesan}}
                            </span>
                          </div>
                    </div>
              @endforeach
              </div>
          </div>
      </div>
        <div id="modal1" class="modal">
           <div class="modal-content">
            <div class="row">
                <form class="col s12" method="post" action="kirim-pesan">
                   {{ csrf_field() }}
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate" name="dari">
                      <label for="icon_prefix">Dari</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate" name="untuk">
                      <label for="icon_prefix">Untuk</label>
                    </div>
                    <div class="input-field col s12">
                      <textarea id="textarea1" class="materialize-textarea" name="pesan"></textarea>
                      <label for="textarea1">Pesan</label>
                    </div>
                  </div>  
            <div class="row center">
                 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                </button>
            </div>
                </form>
              </div>
           </div>        
      </div>
        
      <!--Import jQuery before materialize.js-->
    </body>
      <script>
        $(document).ready(function(){
          // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
          $('.modal').modal();
        });
      </script>
  </html>
        