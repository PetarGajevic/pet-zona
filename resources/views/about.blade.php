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
                <div class="navigation-left" id="navigation-left">
                    <div class="logo" style="background-color: white;">
                      <a href="/">
                        <img src="/site-images/pet zoona LOGO vector horizontalni i vertikalni copy.svg" height=60>
                      </a>
                    </div>
                    <div class="pet-blog-main">
                    <div class="pet-blog">
                        <p style="white-space: nowrap;">petZOONA blog</p>
                    </div>
                    <div class="pet-blog-right" >
                      <ul style="width: 120px;">
                        <li><img src="site-images/Drop_down_strelica.svg"><a href="blog">Psi</a></li>
                        <li><img src="site-images/Drop_down_strelica.svg"><a href="blog-cats">Macke</a></li>
                        <li><img src="site-images/Drop_down_strelica.svg"><a>Ostali kucni ljubmci</a></li>
                        <li><img src="site-images/Drop_down_strelica.svg"><a>U pricu sa</a></li>
                        <li><img src="site-images/Drop_down_strelica.svg"><a>Nesvrstani</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="about-us-main">
                    <div class="about-us">
                        <p style="white-space: nowrap;">About Us</p>
                    </div>
                    <div class="about-us-right" onclick="window.location='/about';">
                      <p style="font-size: 15px;">Sa mnogo sarma pet shop mali svima nudi sto im fali i oprema i vrh hrana najstrucnije odabrana</p>
                    </div>
                  </div>
                    <div class="social"> 
                        <div class="social-div">
                       {{--  <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-facebook-square"></i> --}}
                        <img src="site-images/iconfinder_icon-04_2515843.svg">
                        <img src="site-images/iconfinder_icon-social-youtube_211929.svg">
                        <img src="site-images/iconfinder_Colored_Facebook3_svg_5365678.svg">
                        
                        
                        </div>
                        <div class="social-div-right">
                          <ul style="width: 120px; margin-top: 24px;">
                            <li><img src="site-images/Drop_down_strelica.svg"><a>Instagram</a></li>
                            <li><img src="site-images/Drop_down_strelica.svg"><a>Youtube</a></li>
                            <li><img src="site-images/Drop_down_strelica.svg"><a>Facebook</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="right-side">


                        <div class="about-section"  id="about-section" >
                          <div class="about-main">
                            <div class="about-pet">
                              <div class="about-pet-title">
                                <img src="site-images/53803599_295789964434970_6448855152555196416_n.jpg">
                                
                              </div>
                              <div class="about-pet-text">
                                <p>Pet Zoona je, narodski rečeno, prodavnica hrane i opreme za kućne ljubimce. 
                                  Ali, Pet Zoona u očima sve više zadovoljnih klijenata predstavlja i pruža mnogo više. 
                                  Zaposleni u Pet Zooni su ,,potkovani” višegodišnjim iskustvom,
                                   a stečeno znanje nesebično dijele i upravo je to ono što nas čini vašim najboljim prijateljima.</p>

                                   <p class="m-t">U ponudi imamo sve što je potrebno za pravilan rast i razvoj vašeg ljubimca: 
                                     veliki izbor visokokvalitetne hrane i poslastica za pse i mačke, zaštitu od buva
                                      i krpelja, opremu i igračke. U Pet Zooni svako pronađe svoju idealnu granulu. Kako?! Lako! Organizujemo i 
                                     druženja sa degustacijom hrane na kojima svaka njuška, uz naš stručni savjet, odabere hranu po ukusu i mjeri.
                                     Jednom mjesečno, u prijatnom ambijentu Pet Zoone, organizujemo besplatne veterinarske konsultacije i preglede i 
                                     svi ste dobro došli! Kroz ovakva edukativna druženja, 
                                     uz stručne savjete gostujućeg veterinara, učimo svi,  što doprinosi podizanju svijesti o odgovornom vlasništvu.
                                    </p>

                                    <p>Kao mlad i kreativan kolektiv, otišli smo i nekoliko koraka dalje i pokrenuli proizvodnju domaćih poslastica 
                                      i ručno pravljenih igračaka za pse i mačke, koje smo sa ponosom predstavili na 3. i 4. 
                                      Sajmu Unije Mladih Preduzetnika Crne Gore. Naše zdrave poslastice obožavaju svi psi, a izbor je na vama 
                                      jer ih proizvodimo u varijante tri: krofnice, suvi keks i sočni mafini. Sve sastojke: ljekovito bilje, 
                                      zdrave žitarice, jaja, med, voće i povrće za pripremanje, nabavljamo od proizvođača sa prostora Crne Gore.</p>

                                      <p>
                                        <strong>„Igraj se pametno!“</strong>,  naziv je prve kolekcije naših unikatnih, ručno izrađenih igračaka za 
                                        pse i mačke, koje su napravljene od prirodnih materijala. Ekološke su i ne škode zdravlju vaših ljubimaca, 
                                        a čuvaju od zaborava umijeće heklanja. 
                                        Naša kolekcija igračaka domaće proizvodnje nastala je iz ljubavi prema ljubimcima i velikog poštovanja planete Zemlje.
                                      </p>

                                      <p>Da ne dužimo, jer kažu da tekstovi o jednoj kompaniji umiju da budu dugački i suvoparni,
                                         i svi nekako jedan na drugi liče - a mi nismo iz te priče.</p>

                                         <p>Zato nas zapratite na društvenim mrežama ili posjetite u 
                                           centru Podgorice, da zajedno kreiramo i pratimo rast <strong>Pet Zoone – vaše i naše mezimice!</strong></p>
                              </div>
                            </div>
                            <div class="about-test">
                            <div class="about-ceo">
                              <div class="about-ceo-left">
                                <div class="about-ceo-img">
                                  <img src="site-images/Ceca.jpg">
                                  <div class="next-to-img"></div>
                                </div>
                                <div class="about-ceo-name">
                                  <strong style="color:#F6921B;">Svetlana Vavić</strong>
                                  <p class="custom-p">CEO Pet Zoona</p>
                                </div>
                              </div>
                              <div class="about-ceo-right">
                                <p>Rođena u maju 1982. godine, po struci hemijski laborant,
                                   ali po životnoj svrsi najbolja prijateljica vaših kućnih ljubimaca.
                                    Vrata u svijet kućnih ljubimaca, njihove ishrane, ponašanja i pravilnog držanja otvorila je sa 18 godina,
                                     u prodavnici hrane i opreme za kućne ljubimce (pet shop)
                                     u Podgorici. Da, matematika ne laže, Svetlana 20 godina živi svoju svrhu – što je ključno za srećan i ispunjen život.
                                   </p>
                                   <p>
                                    Godine rada u pet shopu donijele su 
                                    joj mnogo znanja i razumijevanja životinjskog svijeta. Ljubav prema njima je velika još od djetinjstva.
                                   </p>
                                   <p>Upijala je znanje od kolega, čitala stručnu literaturu, pohađala veliki broj edukativnih radionica, kurseva i seminara u organizaciji predstavnika vodećih svjetskih brendova pet industrije, Kinološke Akademije iz Beograda i mnogih drugih. Najveće znanje je sticala i stiče kroz praksu, jer je kako kaže „Svaka životinja, lekcija za sebe“.
                                    Svetlana je sertifikovani Reiki terapeut, a jezik vibracije i energije razumiju sve životinje, a i vlasnici.
                                    Iz godine u godinu, usavršavajući se, znala je odgovor na sve više pitanja. Tako se rodila ideja o nastanku ovog blOOga. Sa željom da odgovori na sva vaša pitanja i nedoumice, pisaće svakog ponedjeljka o raznim edukativnim i zabavnim temama koje se tiču kućnih ljubimaca, njihove ishrane, ponašanja i pravilnog držanja.
                                    </p>
                                    <p><strong>Uživajte u svakoj riječi.</strong></p>
                              </div>
                            </div>

                            <div class="about-coo">
                              <div class="about-coo-left">
                                <div class="about-coo-img">
                                  <img src="site-images/Marijana.jpg">
                                </div>
                                <div class="about-coo-name" style="text-align: end;">
                                  <strong style="color: #00ACEE;">Marijana Tomić</strong>
                                  <p class="custom-p">COO Pet Zoona</p>
                                </div>
                              </div>
                              <div class="about-coo-right">
                                <p>Rođena u avgustu 1990. godine, po struci građevinac koji svoje stvaralačke nalete  realizuje kroz rad sa kućnim ljubimcima. 
                                  U svijet kućnih ljubimaca zavirila je 2017. godine i u njemu ostala, uviđajući iz dana u dan veličinu inspiracije i kreativnosti koju ovaj magični svijet nosi. Ideje su se množile, a ljubimci u Crnoj Gori dobili su poseban tretman i proizvode kreirane samo za njih.                                  
                                   </p>
                                   <p>
                                    Vođena idejom kreiranja prvog domaćeg brenda za kućne ljubimce, započela je proizvodnju ručno
                                     pravljenih poslastica i heklanih ekoloških igračaka - na veliko oduševljenje svih njuški, ali i vlasnika.
                                   </p>
                                   <p>Riješena da svijet kućnih ljubimaca predstavi drugačije od uobičajenog, 
                                     pohađala je brojne seminare i predavanja na temu marketinga i mendžmenta, 
                                     neurolingvističkog programiranja, a uz Svetlanu svaki dan uči o odgovornom vlasništvu i svim njegovim ljepotama. 
                                    </p>
                                    <p>Marijana je sertifikovani Reiki terapeut i vaši ljubimci to osjećaju svim čulima, 
                                      a o značaju protoka Životne energije i rada sa ljubimcima ćemo se upoznati kroz ovaj Blog.</p>
                                    <p><strong>Iz dana u dan spoznaje odgovore na sve više “Kako?” pitanja.</strong></p>
                                    <p>Tako je, udrženim snagama Svetlane koja zna zašto i Marijane koja zna kako, nastao ovaj Blog, ali i omiljeni kutak kućnih ljubimaca i njihovih vlasnika – <strong>PET ZOONA.</strong></p>
                              </div>
                            </div>
                          </div>
                            <div class="contact-main">
                              <div class="contact-left">
                                <h2 style="color: #00ACEE">Kontakt Informacije</h2>
                                <strong>Bark Park d.o.o</strong>
                                <p>Marka Miljanova br.5,</p>
                                <p>81000 Podgorica,</p>
                                <p style="margin-bottom: 20px">Crna Gora</p>

                                <p>Telefon:069 123 456</p>
                                <p>Email: bark.park.bark@gmail.com</p>
                              </div>
                              <div class="contact-right">
                                <div class="contact-form">
                                  <form action="{{ route('send.email') }}" method="post">
                                    @csrf
                    
                                  <input id="email" type="email" name="email" placeholder="Enter your email adress"/>
                                  <div class="send-message">
                                  <textarea id="message" name="message" placeholder="Enter your message"></textarea>
                                  <button type="submit" id="send"><p>Pošalji</p></button>
                                  </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>



                </div>
                </div>

       

                <script type="text/javascript">

                    
                      
                  
                   
                    
                    var slideIndex = 0;
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
                    }

                    function onClick(){
                      document.getElementById("about-section").style.display = "block";
                      document.getElementById("slideshow-container").style.display = "none";
                      document.getElementById("dog-section").style.display = "none";
                    //  document.getElementById("navigation-left").style.position = "fixed";
                
                    }

                    function onClickDog(){
                      document.getElementById("slideshow-container").style.display = "none";
                      document.getElementById("about-section").style.display = "none";
                      document.getElementById("dog-section").style.display = "flex";
                   //   document.getElementById("navigation-left").style.position = "fixed";
                      
                    }

                   
                
                    </script>
    </body>
</html>
