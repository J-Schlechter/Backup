<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<<<<<<< Updated upstream
  </head>
  <body style="background-image: url('https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_1280.jpg');">


    <div id="app">
      <div>
      <app></app>
=======
    <title>Home</title>
</head>
<body>
    
    @auth
    <nav class="navbar " role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
          
            </a>      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="true" data-target="navbarBasicExample">
            
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="/">Home</a>
            <a class="navbar-item" href="#">Write a new post</a>
            </div>
          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">                    
                    <div class="buttons" >
                        <form action = "/logout" method = "POST">
                          @csrf
                            <button class="button is-light" onclick="/logout">
                            Log Out
                            </button>
                        </form>
                        
                </div>
                
              </div>
            </div>
          </div>
        </div>
>>>>>>> Stashed changes
      </div>
      <h1>Hellos</h1>
    </div>
    
    
    
    <script defer src="{{mix('js/app.js')}}">
    
  
    </script>
    
  </body>
  
</html>