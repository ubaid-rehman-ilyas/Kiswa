<header>  <?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
        <div class="container-fluid navcontainer">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="{{route('home')}}">
                            <!-- Kiswa -->
                             <img src="{{asset('front')}}/assets/logi_kiswa.png" alt="logo" class="logo_img">
                        </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarScroll">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Umrah
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                    </ul>
                                  </li>
                              <li class="nav-item">
                                <!-- class="nav-link active" aria-current="page" -->
                                <a class="nav-link" href="javascript:;">Ramdan</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Visa</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Family</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Support</a>
                              </li>
                            </ul>

                            <div class="d-flex button_and_threebars">
                                <button class="btn ctabutton" type="submit">+ 44 131 2345 678</button>
                                <!--<img src="{{asset('front')}}/assets/menubars.png" alt="mega menu" class="ms-4 mt-2 iconbars">-->
                            </div>

                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </header>