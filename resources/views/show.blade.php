<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/welcome.css" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <script
  src="https://code.jquery.com/jquery-3.5.1.slim.js"
  integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
  crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

            <div class="div-main">
                <div class="navigation-left" id="navigation-left" style="position: sticky;
                bottom: 0;
                top: 0;
                z-index:1;">
                    <div class="logo">
                      <a href="/">
                        <img src="/site-images/pet zoona LOGO vector horizontalni i vertikalni copy.svg" height=60>
                      </a>
                    </div>
                    <div class="pet-blog-main">
                    <div class="pet-blog">
                        <p style="white-space: nowrap;">petZOONA blog</p>
                    </div>
                    <div class="pet-blog-right" style="z-index: 1; display:block;">
                      <ul style="width: 120px;">
                        <li><img src="../site-images/Drop_down_strelica.svg"><a href="/blog">Psi</a></li>
                        <li><img src="../site-images/Drop_down_strelica.svg"><a>Macke</a></li>
                        <li><img src="../site-images/Drop_down_strelica.svg"><a>Ostali kucni ljubmci</a></li>
                        <li><img src="../site-images/Drop_down_strelica.svg"><a>U pricu sa</a></li>
                        <li><img src="../site-images/Drop_down_strelica.svg"><a>Nesvrstani</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="about-us-main">
                   
                    <div class="about-us" onclick="window.location='/about';">
                        <p style="white-space: nowrap;">About Us</p>
                    </div>
                    <div class="about-us-right">
                     
                      <p style="font-size: 15px;">Sa mnogo sarma pet shop mali svima nudi sto im fali i oprema i vrh hrana najstrucnije odabrana</p>
                     
                    </div>
                  
                  </div>
                    <div class="social"> 
                        <div class="social-div">
                        {{-- <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-facebook-square"></i> --}}
                        <img src="../site-images/iconfinder_icon-04_2515843.svg">
                        <img src="../site-images/iconfinder_icon-social-youtube_211929.svg">
                        <img src="../site-images/iconfinder_Colored_Facebook3_svg_5365678.svg">
                        </div>
                        <div class="social-div-right">
                          <ul style="width: 120px; margin-top: 24px;">
                            <li><img src="../site-images/Drop_down_strelica.svg"><a>Instagram</a></li>
                            <li><img src="../site-images/Drop_down_strelica.svg"><a>Youtube</a></li>
                            <li><img src="../site-images/Drop_down_strelica.svg"><a>Facebook</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                   

                        <div class="about-section"  id="about-section" style="background-color: transparent">
                          <div class="fl-di">
                          <div class="dog-left" style="margin-left: 0px;">

                          </div>
                          <div class="about-main posts-main">
                          
                            <div class="dog-categories">
                                <ul>
                                  <li>Rast i razvoj</li>
                                  <li>Ishrana</li>
                                  <li>Odraslo</li>
                                </ul>
                              </div>

                            <h1 style="font: normal normal bold 24px/22px Fira Sans;">{{$post->title}}</h1>
                            <p style="font: normal normal normal 14px/22px Fira Sans; color:#F6921B;
                            margin-bottom: 70px;">21. decembar 2020</p>

                           {{--  <p>Zdravo svima, Moje ime je Svetlana i sa vama dijelim iskustvo i stečeno znanje, tokom 18 godina rada sa psima i ostalim
                                 kućnim ljubimcima. Ne postoje pisana pravila koja dovode štene u vaš dom. Odlučićete da udomite štene iz azila, nećete
                                  odoljeti nekim očima šteneta sa ulice, dobićete ga na poklon ili ćete ga kupiti iz registrovane odgajivačnice.
                                   A za sve štence je potrebno mnogo ljubavi (koja će vam se vratiti bar duplo) i nekoliko smjernica kako pravilno
                                    odgojiti štene. Pa da počnemo! </p>
                                    <p>Štenci istražuju svoje okruženje njuškanjem, lizanjem, žvakanjem i griženjem i
                                     mnogo je bitno da prilagodite prostor novom članu Vaše porodice. Sve opasne materijale, biljke, kablove, utičnice
                                      i sve što je dostupno i može naškoditi štenetu, sklonite ili učinite nedostupnim za njih. Može se desiti da ostanete
                                       bez nekog omiljenog para cipela ili da Vam nogari stolica imaju jedinstveni „ručni rad“ zuba koji rastu,
                                        ali vjerujte mi, trudite se da uživate u ovom jedinstvenom trenutku i periodu odrastanja. Već sa navršenom 
                                        godinom su odrasli psi. Brzo nauče šta se smije a šta ne smije dirati i zato, bez stresa! Samo mnogo ljubavi 
                                        I strpljenja. 
                                    </p>
                                    <p>
                                        Bilo da se spremate za dolazak šteneta ili se desilo neočekivano, biće Vam potrebno nekoliko 
                                        osnovnih stvari kako bi Vaš dom bio spreman za novog člana. Hrana, posude za hranu i vodu, ležaljka za spavanje
                                         i odmor, ogrlica i povodac, adekvatna četka i šampon za higijenu dlake i OBAVEZNO igračka (bezbjedna za štene)
                                          koja će, sigurna sam, štenetu biti jedino bitna. Ovo je osnovni „paket“ a postoji još nekoliko stvari koje
                                           zavise od Vas i prostora koji ste namijenili Vašem ljubimcu, kao što su ograde ili kavez, kućica za pse i
                                            slično. </p>
                                            <p>Štenetu će biti potrebno vrijeme da se navikne na nove ljude i na okuženje, da se osjeća voljeno, 
                                            poželjno i sigurno. Zato, obezbijedite mu kutak gdje će moći da se osjeća sigurno, da nije na prometnom
                                             mjestu u stanu/kući. Može se desiti u prvim danima da Vas štene probudi u toku noći ili da Vas drži budnima
                                              ali da ponovimo, uživajte, jer brzo prođe odrastanje i brzo uče. Štenetu treba obezbijediti dovoljno hrane
                                               koja sadrži sve potrebne sastojke. Danas na tržištu postoji granulirana hrana, a na Vama je samo da 
                                               odaberete onu koja odgovra potrebama Vašeg psa, uzrastu, veličini i navikama. To je ujedno najjednostavniji
                                                način da obezbijedite adekvatan unos i izbalansiran odnos proteina, masnoće, minerala, vitamina i svega
                                                 što je potrebno da pravilan rast i razvoj šteneta.
                                            </p>
                                            <p> U zavisnosti od uzrasta psa, tri do pet obroka je
                                                  potrebno obezbijediti u ustaljenom vremenskom interval. Nakon pola godine, prelazite na dva obroka.
                                                   A kada pas odraste i razvije se u potpunosti, biće mu potreban jedan obrok dnevno. Količina dnevnog 
                                                   unosa hrane, takođe, zavisi od veličine i uzrasta psa. Ukoliko se ipak odlučite da pripremate hranu
                                                    za psa, vodite računa da napravite balansirane obroke koji sadrže sve što potrebno. Budite slobodni
                                                     da zatražite savjet od nas, da zajedno dođemo do idealnog obroka za Vašeg novog člana porodice.
                                                      A sada prelazimo na najčešće pitanje: Kako naučiti štene da obavlja nuždu na određenom mjestu? 
                                                      Ako mene pitate – LAKO.
                                            </p>
                                            <p> Štene daje znak, samo primijetite koji, cvili, vrti se u krug, ide ka
                                                       vratima… Odmah ga povedite napolje ili na prostirku i mjesto koje ste odredili za to. Poslije 
                                                       hranjenja, poslije dužeg spavanja, obavezno ga povedite da obavi nuždu. I ono najbitnije, ukoliko
                                                        obavi tamo gdje treba, nagradite ga polasticom, maženjem, pohvalom. Lično, nisam pristalica metoda
                                                        ,,nabijanja” njuškice i kažnjavanja. Jer, ukoliko to ne radite kada i kako treba, štene će biti
                                                         zbunjeno i u strahu. Ukoliko ga zateknete u momentu dok obavlja nuždu, iznesite ga na prostor
                                                          predviđen za to i pohvalite ga kada završi ,,posao”. Samo budite uporni i istrajni, bar koliko i 
                                                          štene, prvih nekoliko dana, i savladaćete, za ljude, najbitniju lekciju. 
                                            </p>
                                            <p>Učenje i stvaranje 
                                                          navika možete početi od prvog dana. Strpljenja i dovoljno ponavljanja i budite bez brige, 
                                                          savladaćete svaku novu lekciju. Ponavljanje je majka znanja, a to važi i za pse. Tako da,
                                                           što više puta ponovite neku radnju to će prije biti savladana i prihvaćena. Psi vole rutinu.
                                                            Zato, budite slobodni da im je i omogućite. Nakon kompletne vakcinacije, kada štene bude
                                                             spremno da izlazi napolje, šetnje iskoristite i da učite sve ono što bi voljeli da Vaš pas 
                                                             zna. Što ranije počnete sa treningom i socijalizacjom, veća je vjerovatnoća da Vaš pas bude
                                                              stabilan i dobrog ponašanja.</p>
                                                              <p> Mozak šteneta od treće pa od četrnaeste nedjelje, razvija 
                                                              socijalne sposobnosti. Zato je rana socijalizacija mnogo bitna. Upoznajte štene sa ljudima,
                                                              drugim psima, više i manje bučnim mjestima, objektima i svim onim situacijama i stvarima sa
                                                              kojima će se i kasnije susretati. Upoznajte štene sa sječenjem noktiju, sa češljanjem, sa 
                                                              šišanjem i svim onim situacijama i stvarima koje u kasnijem periodu mogu biti stresne za
                                                               Vašeg psa.
                                                              </p>
                                                              <p> Ukoliko čitate ovaj tekst, pretpostavljam da je štene ušlo u Vaš život i
                                                                da će Vam ove smjernice za zdravi rast i razvoj šteneta pomoći. Igrajte se sa psom,
                                                                 kroz igru se najlakše i uči, 
                                poslasticu i lijepu riječ, bičete sjajan tandem. Do narednog pisanja, budite dobri i uživajte u svakom zajedničkom trenutku!</p>
 --}}

 <p>{{$post->body}}</p>
                                                                <strong>Ukoliko vam se dopada naš blog, podijelite isti sa svojim prijateljima. Hvala!</strong>
               
                                                                <div class="share-blog">
                                                                  <img src="../site-images/iconfinder_logo-share_350996.svg">
                                                                  <a href="https://www.facebook.com/sharer/sharer.php?u=https://petzoona.me/posts/1&display=popup"><img src="../site-images/iconfinder_facebook_389172.svg"></a>
                                                                  <a href="https://twitter.com/share?url=https://petzoona.me/posts/1&text=title" rel="me" title="Twitter" target="_blank"><img src="../site-images/iconfinder_twitter_2400858.svg"></a>
                                                                </div>
                                                              </div>
               
                          </div>
                <div class="more-blogs" style="    width: 75%;
                margin-left: 200px;">
                    <h1>Još naših blogova pogledajte u nastavku</h1>

                    <div class="dog-blog-main">
                        <div class="dog-blog">
                          <a href="/posts/{{$post->id}}">
                          <h3>Štene</h3>
                          <div class="dog-date">
                            <p style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                            <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                            <img src="../site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                          </div>
                        </a>
                        </div>
                        <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">
                        <div class="dog-blog">
                          <h3>Štene</h3>
                          <div class="dog-date">
                            <p style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                            <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                            <img src="../site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                          </div>
                        </div>
                        <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">
                        <div class="dog-blog">
                          <h3>Štene</h3>
                          <div class="dog-date">
                            <p style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                            <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                            <img src="../site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                          </div>
                        </div>
                        <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">
                        <div class="dog-blog">
                          <h3>Štene</h3>
                          <div class="dog-date">
                            <p style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                            <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                            <img src="../site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                          </div>
                        </div>
                        <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">
                        <div class="dog-blog">
                          <h3>Štene</h3>
                          <div class="dog-date">
                            <p style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                            <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                            <img src="../site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                          </div>
                        </div>
                        <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">
                      </div>
                </div>
                </div>

       

                <script type="text/javascript">

                    
                      
                  
                   
                    
    /*                 var slideIndex = 0;
                    showSlides();
                    
                    function showSlides() {
                      var i;
                      var slides = document.getElementsByClassName("mySlides");
                      var dots = document.getElementsByClassName("dot");
                      for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                      }
                      slideIndex++;
                      if (slideIndex > slides.length) {slideIndex = 1}    
                      for (i = 0; i < dots.length; i++) {
                      //  dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                     // dots[slideIndex-1].className += " active";
                      setTimeout(showSlides, 5000); // Change image every 2 seconds
                    } */

                    function onClick(){
                      alert("ok");
                      document.getElementById("about-section").style.display = "block";
                    //  document.getElementById("slideshow-container").style.display = "none";
                      document.getElementById("dog-section").style.display = "none";
                     // document.getElementById("navigation-left").style.position = "fixed";
                
                    }

                    function onClickDog(){
                  //    document.getElementById("slideshow-container").style.display = "none";
                      document.getElementById("about-section").style.display = "none";
                      document.getElementById("dog-section").style.display = "flex";
                   //   document.getElementById("navigation-left").style.position = "fixed";
                      
                    }

                   
                
                    </script>
    </body>
</html>
