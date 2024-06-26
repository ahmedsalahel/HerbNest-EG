@extends('webLayout.app')

@section('page_content')

<!--Page Header Start-->
<section class="page-header"
    style="background-image: url({{ asset('allAssets/web/assets/images/backgrounds/upper-img.webp') }});">
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ route('main') }}">Home</a></li>
            <li><span>Our Products</span></li>
        </ul>
        <h2>Products</h2>
    </div>
    <div class="overlay"></div>
</section>

<!--Projects One Start-->
<section class="our_projects_one our_projects_page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                    <li data-filter=".inds"><span class="filter-text">type-1</span></li>
                    <li data-filter=".fac"><span class="filter-text">type-2</span></li>
                    <li data-filter=".elec"><span class="filter-text">type-3</span></li>
                    <li data-filter=".cons"><span class="filter-text last-pd-none">type-4</span></li>
                </ul>
            </div>
        </div>
        <div class="row filter-layout masonary-layout">
            @foreach ( $data as $product )
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds cons elec">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ $product->main_image }}" alt="">
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
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item elec cons">
                <!--Projects One Single-->
               
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item elec fac">
                <!--Projects One Single-->
               
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds cons">
                <!--Projects One Single-->
                
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item fac cons">
                <!--Projects One Single-->
                
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                <!--Projects One Single-->
                
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                <!--Projects One Single-->
               
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                <!--Projects One Single-->
                
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                <!--Projects One Single-->
                
            </div>
        </div>
    </div>
</section>

@endsection