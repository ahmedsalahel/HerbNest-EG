@extends('webLayout.app')

@section('page_content')


<!--Page Header Start-->
<section class="page-header"
    style="background-image: url({{ asset('allAssets/web/assets/images/backgrounds/upper-img.webp') }});">
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ route('main') }}">Home</a></li>
            <li><span>Contact</span></li>
        </ul>
        <h2>Contact</h2>
    </div>
    <div class="overlay"></div>
</section>
<!--Contact One Start-->
<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact_one_left">
                    <div class="block-title text-left">
                        <h4>Contact With Us</h4>
                        <h2>Love to Hear from Our Customers</h2>
                    </div>
                    <div class="contact_one_left-text">
                        <p>Please do not hesitate to contact us at any time we have a team working around the
                            clock, please send an email or WhatsApp messages.</p>
                    </div>
                    <div class="contact_one_left__social">

                        <a href="#" class="fb-clr"><i class="fab fa-facebook-square"></i></a>

                        <a href="#" class="ins-clr"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-one__form__wrap">
                    <form action="{{ route('contacts_us') }}" method="POST" class="contact-one__form contact-form-validated">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="name" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group contact__btn">
                                    <button type="submit" class="thm-btn contact-one__btn">Send a
                                        message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Google Map-->
<section class="google_map two">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
        class="google-map__contact" allowfullscreen></iframe>

</section>


@endsection