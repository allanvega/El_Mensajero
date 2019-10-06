@extends('layout.home')

@section('content')
<header>
        <div class="container">
          <div class="brand">
            
            <h1  class="brand_name"><a href="./">NIÑO MENSAJERO</a></h1>
           <!-- <p class="brand_slogan">Company</p>-->
         </div><a href="callto:#" class="fa-phone"></a>
          <p></p>
        </div>
        
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="images/foto.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">Bienvenidos!</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/escribe.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">Escribe tu cartita</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/manos.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">Escribe tus aventuras!!</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container banner_wr">
            <ul class="banner">
              <li>
                <div class="fa-briefcase"></div>
                <h3>boletin1<br/></h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-briefcase"></div>
                <h3>boletin2<br/></h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-briefcase"></div>
                <h3>boletin3<br/></h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-briefcase"></div>
                <h3>boletin4<br/></h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
            </ul>
          </div>
        </section> 

        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="admin">Admin</a>
                </li>
                <li><a href="registrarse">Registrarse</a>
                  <!--<ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Conse ctetur adipisicing</a></li>
                    <li><a href="#">Elit sed do eiusmod
                        <ul>
                          <li><a href="#">Lorem ipsum</a></li>
                          <li><a href="#">Conse adipisicing</a></li>
                          <li><a href="#">Sit amet dolore</a></li>
                        </ul></a></li>
                    <li><a href="#">Incididunt ut labore</a></li>
                    <li><a href="#">Et dolore magna</a></li>
                    <li><a href="#">Ut enim ad minim</a></li>
                  </ul> -->
                </li>
                <li><a href="iniciar_sesion">Iniciar Sesion</a>
                </li>
                <li><a href="carta">Escribe tu Cartita</a>
               <!-- </li>
                <li><a href="index-4.html">Boletines</a>
                </li>-->
              </ul>
            </nav>
          </div>
        </div>
      </header>
        <!-- <section class="well ins1">
          <div class="container hr">
            <ul class="row product-list">
              <li class="grid_6">
                <div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-comments"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Incididunt ut labore et dolore</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-calendar-o"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Incididunt ut labore et dolore</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
              </li>
              <li class="grid_6">
                <div data-wow-delay="0.3s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-group"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Incididunt ut labore et dolore</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.4s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-thumbs-up"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Incididunt ut labore et dolore</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div> 
              </li>
            </ul>
          </div>
        </section>
        <section class="well1">
          <div class="container">
            <div class="row">
              <div class="grid_4">
                <h2>About</h2><img src="images/fotoss.jpg" alt="">
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><a href="#" class="btn">Read more</a>
              </div> -->
             <!-- <div class="grid_4">
                <h2>Services</h2>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <ul class="marked-list">
                  <li><a href="#">Lorem ipsum dolor sit amet </a></li>
                  <li><a href="#">Conse ctetur adipisicing</a></li>
                  <li><a href="#">Elit sed do eiusmod tempor</a></li>
                  <li><a href="#">Incididunt ut labore</a></li>
                  <li><a href="#">Et dolore magna aliqua</a></li>
                  <li><a href="#">Ut enim ad minim veniam</a></li>
                  <li><a href="#">Quis nostrud exercitation</a></li>
                  <li><a href="#">Incididunt ut labore</a></li>
                  <li><a href="#">Et dolore magna aliqua</a></li>
                </ul><a href="#" class="btn">Read more</a>
              </div> 
              <div class="grid_4">
                <div class="info-box">
                  <h2 class="fa-comment"></h2>
                  <hr>
                  <h3></h3>
                  <dl>
                    <dt></dt>
                    <dd></dd>
                  </dl>
                  <dl>
                    <dt></dt>
                    <dd></dd>
                  </dl>
                  <dl>
                    <dt></dt>
                    <dd></dd>
                  </dl>
                  <hr>
                  <h3></h3>
                  <dl>
                    <dt>4431919</dt>
                  </dl>
                </div>
                <div class="owl-carousel">
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/libro.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img03.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img04.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img05.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main> -->
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        <section class="well3">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>Av. dorbigni entre juan pablo II y Av. segunda<br/> s/n</address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="mailto:#">quickSoftwareSolutions.7@gmail.com</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">79360297</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">4431919</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="copyright">Niño Mensajero <span id="copyright-year"></span>.&nbsp;&nbsp;<a href="index-5.html"></a> <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=418&type=1" target="_blank"></a>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script src="{{asset('js/script.js')}}"></script>
@endsection