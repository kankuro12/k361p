<!-- Preloader -->
<!--<div class="preloader d-flex align-items-center justify-content-center">-->
<!--      <div class="lds-ellipsis">-->
<!--          <div></div>-->
<!--          <div></div>-->
<!--          <div></div>-->
<!--          <div></div>-->
<!--      </div>-->
<!--  </div>-->

<!-- ##### Header Area Start ##### -->
<header class="header-area">
  <!-- Top Header Area -->
  <div class="top-header-area">
    @if(!isset($_SESSION['user']))
    <button class="btn btn-sm" data-toggle="modal" data-target="#exampleModal"
      style="float:right; margin-top:1.5rem;margin-right:2rem; background:#003679; color:white;"><i
        class="fa fa-sign-in" aria-hidden="true"> </i> LogIn </button>
    @else
    <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal1"
      style="float:right; margin-top:1.5rem;margin-right:4rem;"><i class="fa fa-user-circle"
        aria-hidden="true"></i></button>
    @endif
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 d-flex justify-content-between">
          <!-- Logo Area -->
          <div class="logo">
            <a href="/"><img src="/assets/front/img/ppn.png" alt="" style="height:80px; padding:2px;"></a>
          </div>

          <!-- Top Contact Info -->
          <div class="top-contact-info d-flex align-items-center">
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Biratnagar-5, Morang Nepal"><img
                src="/assets/front/img/core-img/placeholder.png" alt=""> <span>Biratnagar-5, Morang Nepal

              </span></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="propeacejhapa@gmail.com"><img
                src="/assets/front/img/core-img/message.png" alt=""> <span>info@propeace.org.np</span></a>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar Area -->
  <div class="credit-main-menu" id="sticker">
    <div class="classy-nav-container breakpoint-off">
      <div class="container">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="creditNav">

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">

            <!-- Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Members</a>
                  <ul class="dropdown">
                    <li><a href="/propeace/boardmember/">Board Members</a></li>
                    <li><a href="/propeace/secretariat/">Secretariat</a></li>
                    <li><a href="/propeace/committee/">Committees</a></li>
                    <li><a href="/propeace/pastpresident/">Past Presidents</a></li>
                    <li><a href="/propeace/general/member/">General Member</a></li>
                  </ul>
                </li>
                <li><a href="https://library.propeace.org.np">Library</a></li>
                <li><a href="/propeace/notice/list/">Notices</a></li>
                <li><a href="/propeace/news/list/">News</a></li>
                <li><a href="/propeace/event/list/">Events</a></li>
                <li><a href="/propeace/about/">About Us</a></li>
                <li><a href="/propeace/contact/">Contact</a></li>
                <li><a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="/propeace/area/list/">Local Attraction</a></li>
                    <li><a href="/propeace/gallery/list/">Galleries</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- Nav End -->
          </div>

          <!-- Contact -->
          <div class="contact">
            <a href="tel:9852027897"><img src="/assets/front/img/core-img/call2.png" alt=""> +977 9852027897</a>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">User Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/propeace/login/" method="post">
          <div class="form-group">
            <label for="user">User Name</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" name="password">
          </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Sign In</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">User Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li><a href="/propeace/private/">My Account</a></li>
          <hr>
          <li><a href="/propeace/passchange/">Password Change</a></li>
          <hr>
          <li><a href="/propeace/logout/">LogOut</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>