@extends('webLayout.app')

@section('page_content')


<!--Page Header Start-->
<section class="page-header"
    style="background-image: url({{ asset('allAssets/web/assets/images/backgrounds/upper-img.webp') }});">
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ route('main') }}">Home</a></li>
            <li><a href="{{ route('product') }}">Products</a></li>
        </ul>
        <h2>Product Details</h2>
    </div>
    <div class="overlay"></div>
</section>
<!--Projects Details Image Start-->
<section class="project_details_image">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="project_details_main_img">
                    <img src="{{ asset('assets/images/project/product-bg.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--Projects Details Content Start-->
<section class="projects_details_content">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="projects_details_content_left">
                    <div class="bridge_construction">
                        <h4> {{ $product->translate(LaravelLocalization::getCurrentLocale())->name }} </h4>
                        <p> {{ $product->translate(LaravelLocalization::getCurrentLocale())->description }}</p>
                    </div>
                </div>

                <div class="projects_details_content_bottom">
                    <div class="projects_details_content_bottom_image">
                        <img src="{{  $product->main_image }}" alt="" width="665" height="439">
                    </div>
                    <div class="projects_details_content_bottom_list mt-2">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check"></i>Lorem Ipsum generators on the Internet</li>
                            <li><i class="fa fa-check"></i>It uses a dictionary of over 200 Latin words</li>
                            <li><i class="fa fa-check"></i>The majority have alteration in some form</li>
                            <li><i class="fa fa-check"></i>There are many variations of passages</li>
                            <li><i class="fa fa-check"></i>There are many variations of passages</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="projects_details_content_sidebar clearfix">
                    <div class="projects_details_all_list clearfix">
                        <dl class="list-unstyled projects_details_all_list-one">
                            <dt>Certification</dt>
                            <dd>-FSSAI Certified</dd>
                            <dd>-HALAL</dd>
                            <dt>Packaging</dt>
                            <dd>- 1 Kg And 25 Kg Packing</dd>
                            <dt>Color</dt>
                            <dd>- White And Brown Depends On Client Requirement</dd>
                            <dt>Business Type</dt>
                            <dd>- Manufacturer, Exporter, Supplier</dd>
                        </dl>
                        <!-- <ul >
                                    <li>Certification:</li>
                                    <li>Packaging Type:</li>
                                    <li>Color:</li>
                                    <li>Business Type:</li>
                                </ul>
                                <ul >
                                    <li>FSSAI Certified,HALAL</li>
                                    <li>1 Kg And 25 Kg Packing</li>
                                    <li>White And Brown Depends On Client Requirement</li>
                                    <li>Manufacturer, Exporter, Supplier</li>
                                </ul> -->
                    </div>
                    <div class="projects_details_content_sidebar_quote">
                        <h4>Don't hesitate, get in touch now</h4>
                        <form>
                            <div class="input_box">
                                <input type="text" name="name" placeholder="Your name">
                            </div>
                            <div class="input_box">
                                <input type="email" name="name" placeholder="Email address">
                            </div>
                            <div class="input_box">
                                <textarea name="message" placeholder="Write Message"></textarea>
                            </div>
                            <div class="projects_details_content_sidebar_quote_btn">
                                <button type="submit" class="thm-btn">Send a message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Projects Three Start-->
<section class="projects_three">
    <div class="container">
        <div class="block-title text-center">
            <h4>Suggested Products</h4>
            <h2>Explore Our Products</h2>
        </div>
        <div class="row">
            @foreach ( $newProduct as $product )
            <div class="col-xl-4">
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src=" {{ $product->main_image  }} " alt="">
                        <div class="our_projects_one_icon">
                            <a href="{{ route('product-details', ['Product' => $product]) }}"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>{{ $product->translate(LaravelLocalization::getCurrentLocale())->name }}</h4>
                        </div>
                    </div>
                </div>
                    
            </div>
            @endforeach
            <div class="col-xl-4">
               
            </div>
            <div class="col-xl-4">
              
            </div>
        </div>
    </div>
</section>

@endsection