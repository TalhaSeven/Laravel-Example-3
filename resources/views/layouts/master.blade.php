<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>



@include('layouts.navbar')





@yield('content2')



  <div class="footer-basic">
    <footer>
      <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
            class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a
          href="#"><i class="icon ion-social-facebook"></i></a></div>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Home</a></li>
        <li class="list-inline-item"><a href="#">Services</a></li>
        <li class="list-inline-item"><a href="#">About</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
      </ul>
      <p class="copyright">Company Name © 2018</p>
    </footer>
  </div>

  @include('layouts.js')

</body>

</html>