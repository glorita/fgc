<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FGC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #272727;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
             /* Style the video: 100% width and height to cover the entire window */
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 80%;
    min-height: 80%;
}

/* Add some content at the bottom of the video/page */
.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
}

#myBtn:hover {
    background: #ddd;
    color: black;
} 
        </style>
    </head>
    <body>
  
        

         
            
             <!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="{{URL::asset('/image/videofgc.MP4')}}" type="video/mp4">
</video>

<!-- Optional: some overlay text to describe the video  de prueba-->
<div class="content">
  <h1>Instructores Freedive Gravedad Cero</h1>
  
  <!-- Use a button to pause/play the video with JavaScript 
 <button id="myBtn" onclick="myFunction()">Pause</button>-->
  
      @if (Route::has('login'))
                <div class="bottom-center links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Ingresar</a>
                        <?php //<a href="{{ url('/register') }}">Register</a> ?>
                    @endif
                </div>
            @endif
</div> 
    </body>
    
    <script>
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
}
</script>
</html>
