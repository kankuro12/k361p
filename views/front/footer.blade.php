<!-- ##### Newsletter Area Start ###### -->
<section class="newsletter-area section-padding-100 bg-img jarallax"
    style="background-image: url(/assets/front/img/bg-img/6.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="nl-content text-center" id="hide">
                    <h2>Subscribe to us for your support</h2>
                    <form method="post" id="mailing">
                        <input type="email" name="email" id="nlemail" placeholder="Your e-mail">
                        <span onclick="addMail();">
                            <p style="margin-top:.3rem; font-size:17px;"><b>Subscribe</b></p>
                        </span>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ###### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">About Us</h5>
                    <!-- Nav -->
                    {{-- <p style="color:#ffffff;">Mechi Chamber of Commerce and Industry, established with the establishment of Mechinagar Municipality, has crossed many climatic developments. In this period the union has gained lots of success..... </br> <a href="/propeace/about/" style="color:white;">See More</a></p> --}}
                </div>
            </div>

            <!-- Single Footer Widget -->
            {{-- <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">Our Partners</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="http://mechinagarmun.gov.np/en">Mechinagar Municipality</a></li>
                            <li><a href="http://www.amda.org.np/">Amda Nepal</a></li>
                            <li><a href=" https://www.customs.gov.np/en/">Nepal Customs</a></li>
                            <li><a href="http://fncci.org/">Federation of Nepal Chamber of Commerce and Industry</a>
                            </li>
                            <li><a href="https://www.nrb.org.np/">Nepal Rastra Bank</a></li>
                            <li><a href="https://mof.gov.np/en/">Ministry of Finance</a></li>
                            <li><a href="http://www.moi.gov.np/">Government of Nepal</a></li>
                            <li><a href="http://mos.gov.np/en/">Government of Nepal Ministry of Industry, Commerce and
                                    Supplies</a></li>
                            <li><a href="http://www.tourism.gov.np/">Government of Nepal Ministry of Culture, Tourism
                                    and Civil Aviation</a></li>
                        </ul>
                    </nav>
                </div>
            </div> --}}



            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">Social Links</h5>
                    <nav>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Google+</a></li>


                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">Contact Us</h5>
                    <div id="google_translate_element"></div>
                    <p style="color:#ffffff;">Pro Peace Nepal</p>
                    <P style="color:#ffffff;">Biratnagar-5, Morang Nepal</P>
                    <p style="color:#ffffff;">Phone:- 9852027897</p>
                    <p style="color:#ffffff;">Website:- www.propeace.org.np</p>

                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                        <!-- Footer Logo -->
                        <a href="index.html" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | PROPEACENEPAL <i class="fa fa-heart-o"
                                    aria-hidden="true"></i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    function addMail(){
            var formData = new FormData(document.getElementById('mailing'))
            axios.post('/propeace/supporter/',formData)
            .then(function(response){
                data = response.data;
                document.getElementById('hide').innerHTML="<div style='color:white; font-size:25px;'><b> Thanks For Your Support !</b></div>";
            }).catch(function(error){
                console.log(error);
            })
        }
</script>