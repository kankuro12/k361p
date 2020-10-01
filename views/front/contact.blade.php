@extends('front.app')
@section('title','MCCI - Contact')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax"
    style="background-image: url(/assets/front/img/bg-img/6.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Single Contact Area -->
            <div class="col-12 col-lg-4">
                <div class="single-contact-area mb-100">
                    <!-- Logo -->

                    <a href="#" class="d-block mb-50"><img src="/assets/front/img/ppn.png" alt=""
                            style="height:150px;width:150px;"></a>
                    <p></p>
                </div>
            </div>

            <!-- Single Contact Area -->
            <div class="col-12 col-lg-4">
                <div class="single-contact-area mb-100">
                    <div class="contact-advisor">
                        <h5>Contact an advisor</h5>
                        <!-- Single Advisor -->
                        {{-- <div class="single-advisor d-flex align-items-center">
                            <div class="advisor-img">
                                <img src="/assets/front/img/101.jpg" alt="">
                            </div>
                            <div class="advisor-info">
                                <h6>Gopal Basnet</h6>
                                <span>Executive Director</span>
                                <p>+977-9842634242</p>
                            </div>
                        </div>
                        <!-- Single Advisor -->
                        <div class="single-advisor d-flex align-items-center">
                            <div class="advisor-img">
                                <img src="/assets/front/img/100.jpg" alt="">
                            </div>
                            <div class="advisor-info">
                                <h6>Hari Maya Baral</h6>
                                <span>Office Assistant</span>
                                <p>+977-23560035</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <!-- Single Contact Area -->
            <div class="col-12 col-lg-4">
                <div class="single-contact-area mb-100">
                    <div class="contact--area contact-page">
                        <!-- Contact Content -->
                        <div class="contact-content">
                            <h5>Get in touch</h5>

                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="/assets/front/img/core-img/location.png" alt="">
                                </div>
                                <div class="text">
                                    <p>Biratnagar - 5 <br> , Morang</p>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="/assets/front/img/core-img/call.png" alt="">
                                </div>
                                <div class="text">
                                    <p>+977-9852027897</p>
                                    <span>Sun-Fri , 10.am - 04.pm</span>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="/assets/front/img/core-img/message2.png" alt="">
                                </div>
                                <div class="text">
                                    <p>info@propeace.org.np</p>
                                    <span>we reply in 24 hrs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### Google Maps ##### -->
    <div class="map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d500871.9375859932!2d87.45891447261523!3d26.924500565415386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMECHI+CHAMBER+OF+COMMERCE+AND+INDUSTRY!5e0!3m2!1sen!2snp!4v1557989715197!5m2!1sen!2snp"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- Contact Area -->
        <div class="contact---area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <!-- Contact Area -->
                        <div class="contact-form-area contact-page">
                            <h4 class="mb-50">Send a message</h4>

                            <form action="/mcci/messages/" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sub" id="subject"
                                                placeholder="Your Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="detail" class="form-control" id="message" cols="30"
                                                rows="10" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn credit-btn mt-30" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

@endsection