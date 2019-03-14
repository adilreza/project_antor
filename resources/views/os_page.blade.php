<!DOCTYPE html>

 <html lang="en"> 
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Os HOme Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="{{URL::asset('css/project_antor.css')}}">
  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"  crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

      
    </head>
    <body  id="body_id">
        <div class="desktop" >
            <h2 class="text-center" style="text-shadow:1px 2px 3px black;color:#0fb9b1;">~ Welcome To our Web Based <i>OS</i> ~</h2>
            <hr>

            <div id="option_submenu">
                <div id="option_submenu_final">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{URL::asset('project_image/snake.png')}}" alt="Sanke" style="height:80px;width:90px">
                            </div>
                            <div class="col-md-3">
                                <img src="{{URL::asset('project_image/puzzle.png')}}" alt="puzzle" style="height:80px;width:90px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="snake_game">
                    
            </div>

            <div id="start_menu_on_of">
                <div id="start_bar">
                    <div id="start_content" >

                            
                            <h3 style="color:white;" id="play_game"><i class="fas fa-gamepad"></i> &nbsp&nbsp<span style="font-size:18px;">Play Game</span></h3>
                            <br>
                            <h3 style="color:white;"><i class="fas fa-cog"></i>&nbsp&nbsp <span style="font-size:18px;">Change Settings</span></h3>
                            <br>
                            <h3 style="color:white;"><i class="fas fa-paint-roller"></i> &nbsp&nbsp<span style="font-size:18px;">Draw Graphics</span></h3>
                            <br>
                            
                            <h3 style="color:white;"><i class="fab fa-app-store"></i> &nbsp&nbsp <span style="font-size:18px;">Needed Applications</span></h3>
                            <br>
                            <h3 style="color:white;"><i class="fab fa-sketch"></i>&nbsp&nbsp <span style="font-size:18px;">User Image Edit</span></h3>
                    </div>
                    
                </div>
                <div id="triangle_down">

                </div>
            </div>
            
            <div id="start_menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{URL::asset('/project_image/start_button.png')}}" id="s_button" style="height:50px;width:120px;" alt="Start menu">
                        </div>
                        <div class="col-md-10">
                            
                        </div>

                    </div>
                </div>
            </div>

        </div>


        @if(empty(session('user_desktop_image')))
            <script>
                $('#body_id').css('background-image',"url('all_project_file/user_background/bg.jpg')");
                $("#start_menu_on_of").hide()
                $("#option_submenu").hide()
                $("#snake_game").hide()
            </script>
        @endif


        <script>
        $(document).ready(function(){
            $("#s_button").click(function(){
                $("#start_menu_on_of").toggle('slow');
            });
        });

        $(document).ready(function(){
            $("#play_game").click(function(){
                $("#option_submenu").toggle('slow');
            });
        });
            
        </script>

        <script>
            
           
            // $('#body_id').css('background-image',"url('all_project_file/user_background/bg1.jpg')");
        
        </script>



    </body>
</html>