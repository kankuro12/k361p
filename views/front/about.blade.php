@extends('front.app')
@section('title','propeace - About Us')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg1.JPG);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Aboutus</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### About Area Start ###### -->
<section class="about-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <div class="line"></div>
                        <p>Know About Us</p>
                        <h2>"Pro PEace Nepal"</h2>
                    </div>
                    {{-- <h6 class="mb-4" style="color:#757b84;">The Mechi Chamber of Commerce and Industry established with
                        the establishment of Mechinagar Municipality, has crossed many climatic developments. In this
                        period the union has gained lots of success. This organization was established by registering at
                        District Administration Office, Jhapa on 31th December 1997 and was given an opportunity to get
                        membership of the Federation of Nepalese Chamber of Commerce & Industries. Mechi Chamber of
                        Commerce and Industry, 3 years after the establishment of Jhapa CommerceAssocialtion,
                        Kakarvatta, and after about 5 years later branchDhulabari was adjusted to the union. </h6> --}}


                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-thumbnail mb-100">
                    <img src="/assets/front/img/ppn.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<hr>

<div class="container">

</div>


<!-- ##### About Area End ###### -->

@endsection