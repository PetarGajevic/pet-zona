<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 0; padding-right: 0; display:none;">
  <a class="navbar-brand" href="/"><img src="/site-images/Pet-Zoona-logo-v2.svg" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 10px;">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active" id="petzoona-nav" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
       <p style="margin-top: 1rem;">petZOONA bloog</p>
      </li>
    <div class="collapse" id="collapseExample" style="background-color: #707070;">
      <div class="card card-body" style="background-color: rgb(112, 112, 112); color:white;">
        <ul id="nav-list">
          @foreach ($categories as $category)
                            
          <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
          @endforeach
   
        </ul>
      </div>
    </div>
      <li class="nav-item" id="about-nav">
       <a href="/about"> <p style="margin-top: 1rem;">Aboout us</p></a>
      </li>
      <li class="nav-item">
        <div class="contact-nav">
          <h2 style="color: #00ACEE">Kontakt Informacije</h2>
          <strong style="font-size: 18px;">Bark Park d.o.o</strong>
          <p style="margin-bottom: 1px;">Marka Miljanova br.5,</p>
          <p style="margin-bottom: 1px;">81000 Podgorica,</p>
          <p style="margin-bottom: 20px">Crna Gora</p>

          <p>Telefon: 069 123 456</p>
          <p>Email: <a href="mailto:bark.park.bark@gmail.com?subject=subject" style="color: #007bff;">bark.park.bark@gmail.com</a></p>
        </div>
      </li>
    </ul>
  </div>
</nav>