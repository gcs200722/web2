<!DOCTYPE html>
<html>

<head>
  <title>University</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="{{ url('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

  <div class="wrapper row0">
    <div id="topbar" class="clear">
      <!-- ################################################################################################ -->
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="./pages/login/index.html">Login</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="clear">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">University</a></h1>
        <p>University magazine</p>
      </div>
      <div class="fl_right">
        <form class="clear" method="post" action="#">
          <fieldset>
            <legend>Search:</legend>
            <input type="text" value="" placeholder="Search Here">
            <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </header>
  </div>

  <div class="wrapper row2">
    <div class="rounded">
      <nav id="mainav" class="clear">
        <!-- nav bar -->
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/portfolio.html">Portfolio</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-left-2.html">Sidebar Left 2</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/sidebar-right-2.html">Sidebar Right 2</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Another Link Text</a></li>
          <li><a href="#">This a very long link</a></li>
          <li><a href="#">This is the last</a></li>
        </ul>
        <!-- ################################################################################################ -->
      </nav>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="slider">
      <div id="slide-wrapper" class="rounded clear">
        <!-- ################################################################################################ -->
        <figure id="slide-1"><a class="view" href="#"><img src="images/demo/slider/1.png" alt=""></a>
          <figcaption>
            <h2>Nullamlacus dui ipsum</h2>
            <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et
              ac vest penatibus id lacus parturpis.</p>
            <p class="right"><a href="#">Continue Reading &raquo;</a></p>
          </figcaption>
        </figure>
        <figure id="slide-2"><a class="view" href="#"><img src="images/demo/slider/2.png" alt=""></a>
          <figcaption>
            <h2>Aliquatjusto quisque nam</h2>
            <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et
              ac vest penatibus id lacus parturpis.</p>
            <p class="right"><a href="#">Continue Reading &raquo;</a></p>
          </figcaption>
        </figure>
        <figure id="slide-3"><a class="view" href="#"><img src="images/demo/slider/3.png" alt=""></a>
          <figcaption>
            <h2>Aliquatjusto quisque nam</h2>
            <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et
              ac vest penatibus id lacus parturpis.</p>
            <p class="right"><a href="#">Continue Reading &raquo;</a></p>
          </figcaption>
        </figure>
        <figure id="slide-4"><a class="view" href="#"><img src="images/demo/slider/4.png" alt=""></a>
          <figcaption>
            <h2>Aliquatjusto quisque nam</h2>
            <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et
              ac vest penatibus id lacus parturpis.</p>
            <p class="right"><a href="#">Continue Reading &raquo;</a></p>
          </figcaption>
        </figure>
        <figure id="slide-5"><a class="view" href="#"><img src="images/demo/slider/5.png" alt=""></a>
          <figcaption>
            <h2>Dapiensociis temper donec</h2>
            <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et
              ac vest penatibus id lacus parturpis.</p>
            <p class="right"><a href="#">Continue Reading &raquo;</a></p>
          </figcaption>
        </figure>
        <!-- ################################################################################################ -->
        <ul id="slide-tabs">
          <li><a href="#slide-1">All About The University</a></li>
          <li><a href="#slide-2">Why You Should Study With Us</a></li>
          <li><a href="#slide-3">Education And Student Experience</a></li>
          <li><a href="#slide-4">Alumni And Its Donors</a></li>
          <li><a href="#slide-5">Latest University News &amp; Events</a></li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- JAVASCRIPTS -->
  <script src="{{url('layout/scripts/jquery.min.js')}}"></script>
  <script src="{{url('layout/scripts/jquery.fitvids.min.js')}}"></script>
  <script src="{{url('layout/scripts/jquery.mobilemenu.js')}}"></script>
  <script src="{{url('layout/scripts/tabslet/jquery.tabslet.min.js')}}"></script>
</body>

</html>
