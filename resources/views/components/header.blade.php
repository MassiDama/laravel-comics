<header>
    <div class="container">
        <div class="logo">
          <img src=" {{asset('img/dc-logo.png')}} " alt="logo dc">
        </div>
        <nav>
          <ul>
            @foreach ($links as $link)
            <li><a href="#">{{ $link["text"] }}</a></li>
            @endforeach
          </ul>
        </nav>
    </div>
</header>

<section class="jumbotron">

</section>
