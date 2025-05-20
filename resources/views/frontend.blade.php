<!DOCTYPE html>
<html>
<title>Kumpulan Tugas Pweb</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
a:link {
        text-decoration: none;
      }
    .my-div {
  background-color: white; /* Initial background color */
    }
.my-div:hover {
  background-color: rgb(206, 206, 206); /* Background color on hover */
}
</style>
<body class="w3-light-grey w3-content" style="max-width:100%">


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin:150px ; text-decoration: none">

  <!-- Header -->
  <header id="portfolio">

    <div class="w3-container">
    <h1><b>Kumpulan Tugas Pemrograman Website</b></h1>
    </div>
  </header>

  <!-- First Photo Grid-->
  <div class="w3-row-padding" >
    <div class="w3-third w3-container w3-margin-bottom ">
    <a href="{{ url('/Tugas1') }}" target="_blank">
      <div class="w3-container my-div">
        <p><b>Tugas 1</b></p>
      </div>
    </a>
    </div>

    <div class="w3-third w3-container w3-margin-bottom">
    <a href="{{ url('/Tugas2') }}" target="_blank">
      <div class="w3-container my-div">
        <p><b>Tugas 2</b></p>
      </div>
    </a>
    </div>

    <div class="w3-third w3-container">
      <a href="{{ url('/Tugas3') }}" target="_blank">
      <div class="w3-container my-div">
        <p><b>Tugas 3</b></p>
      </div>
    </a>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div class="w3-row-padding">

    <div class="w3-third w3-container w3-margin-bottom">
      <a href="{{ url('/Tugas4') }}" target="_blank">
      <div class="w3-container my-div">
        <p><b>Tugas 4</b></p>
      </div>
      </a>
    </div>

    <div class="w3-third w3-container w3-margin-bottom">
      <a href="{{ url('/Tugas5') }}" target="_blank">
      <div class="w3-container my-div">
        <p><b>Tugas 5</b></p>
      </div>
      </a>
    </div>

    <div class="w3-third w3-container">
      <a href="{{ url('/Tugas6') }}" target="_blank">
      <div class="w3-container my-div">
        <p><b>Tugas 6</b></p>
      </div>
    </a>
    </div>
  </div>

  <!-- Third Photo Grid-->
  <div class="w3-row">
    <div class="w3-container w3-margin-bottom">
      <a href="{{ url('/ETS') }}" target="_blank">
      <div class="w3-container my-div">
        <p><b>Evaluasi Tengah Semester</b></p>
      </div>
      </a>
    </div>

  </div>

  {{-- <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>About Me</b></h4>

    <hr> --}}
  </div>
<!-- End page content -->
</div>


</body>
</html>
