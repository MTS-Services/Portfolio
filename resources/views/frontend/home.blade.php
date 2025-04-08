@extends('frontend.layouts.master')
@section('title', 'Personal Portfolio')
@push('css')
    <style>
        #hero {
            background-image: url('{{ $site_settings->banner ? asset('storage/images/site_settings/' . $site_settings->banner) : asset('default_images/banner.jpg') }}');
        }
    </style>
@endpush
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>{{ $user->name }}</h1>
            <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Software Engineer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ $user->profile_image ? asset('storage/images/users/' . $user->cover_image) : asset('default_images/cover profile.jpeg') }}"
                            class="img-fluid" alt="{{ $user->name }}"
                            style="width: 100%; object-fit: cover; aspect-ratio: 1/1">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{ $user->profession }}</h3>
                        <p class="fst-italic">
                            {{ $user->short_bio }}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{ \Carbon\Carbon::parse($user->dob)->format('d-M-Y') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>{{ $user->website_url }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{ $user->phone }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{ $user->address }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ $user->age }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>{{ $user->degree }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong>
                                        <span>{{ $user->email }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>
                                            @if ($user->status)
                                                Available
                                            @else
                                                Not Available
                                            @endif
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            {{ $user->long_bio }}
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> consequuntur quae</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum
                        quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                        alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                @if ($skills)
                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up">
                            @foreach ($skills->slice(0, ceil($skills->count() / 2)) as $key => $skill)
                                <div class="progress">
                                    <span class="skill">{{ $skill->name }} <i
                                            class="val">{{ $skill->percentage }}</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar"
                                            aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            @foreach ($skills->slice(ceil($skills->count() / 2), ceil($skills->count() / 2)) as $key => $skill)
                                <div class="progress">
                                    <span class="skill">{{ $skill->name }} <i
                                            class="val">{{ $skill->percentage }}</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar"
                                            aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <p>No skills added yet</p>
                @endif


            </div>
        </section><!-- End Skills Section -->


        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Alex Smith</h4>
                            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and
                                    developing user-centered digital/print marketing material from initial concept to final,
                                    polished deliverable.</em></p>
                            <ul>
                                <li>Portland par 127,Orlando, FL</li>
                                <li>(123) 456-7891</li>
                                <li>alice.barkley@example.com</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h3 class="resume-title">Education</h3>
                            @if ($educations)
                                @foreach ($educations as $key => $education)
                                    <h4>{{ $education->title }}</h4>
                                    <h5>{{ \Carbon\Carbon::parse($education->start_date)->format('d-M-Y') }} -
                                        {{ \Carbon\Carbon::parse($education->end_date)->format('d-M-Y') }}</h5>

                                    <p><em>{{ $education->institute_name }}, {{ $education->institute_address }}</em></p>
                                    <p>{{ $education->description }}</p>
                                @endforeach
                            @else
                                <p>No education added yet</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        @if ($experiences)
                            @foreach ($experiences as $key => $experience)
                                <div class="resume-item">
                                    <h4>{{ $experience->designation }}</h4>
                                    <h5>{{ \Carbon\Carbon::parse($experience->start_date)->format('d-M-Y') }} -
                                        {{ \Carbon\Carbon::parse($experience->end_date)->format('d-M-Y') }}</h5>
                                    <p><em>{{ $experience->company_name }}, {{ $experience->address }}</em></p>
                                    <ul>
                                        <li>{{ $experience->description }}</li>
                                    </ul>
                                </div>
                            @endforeach
                        @else
                            <p>No experience added yet</p>
                        @endif

                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($portfolio_categories as $key => $portfolio_category)
                                <li data-filter=".filter-{{ $portfolio_category->name }}">{{ $portfolio_category->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                @if ($portfolios)
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                        @foreach ($portfolios as $key => $portfolio)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portfolio->category->name }}">
                                <div class="portfolio-wrap">
                                    <img src="{{ $portfolio->image ? asset('storage/images/portfolios/' . $portfolio->image) : asset('default_images/portfilio.jpg') }}"
                                        class="img-fluid" alt="{{ $portfolio->title }}"
                                        style="width: 100%; aspect-ratio: 3/2; object-fit: cover;">
                                    <div class="portfolio-links">
                                        <a href="{{ $portfolio->image ? asset('storage/images/portfolios/' . $portfolio->image) : asset('default_images/portfilio.jpg') }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No portfolio added yet</p>
                @endif


            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                @if ($services)
                    <div class="row">
                        @foreach ($services as $key => $service)
                            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                                <div class="icon"><img
                                        src="{{ $service->image ? asset('storage/images/services/' . $service->image) : asset('default_images/icon.png') }}"
                                        alt="{{ $service->title }}"
                                        style="width: 50%; object-fit: cover; aspect-ratio: 1/1">
                                </div>
                                <h4 class="title">{{ $service->title }}</h4>
                                <p class="description">{{ $service->description }}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No service added yet</p>
                @endif

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                @if ($testimonials)
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            @foreach ($testimonials as $key => $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-item" data-aos="fade-up">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{ $testimonial->description }}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="{{ $testimonial->image ? asset('storage/images/testimonials/' . $testimonial->image) : asset('default_images/profile.png') }}"
                                            class="testimonial-img" alt="{{ $testimonial->name }}" width="50"
                                            style="object-fit: cover;">
                                        <h3>{{ $testimonial->name }}</h3>
                                        <h4>{{ $testimonial->designation }}</h4>
                                    </div>
                                </div><!-- End testimonial item -->
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                @else
                    <p>No testimonial added yet</p>
                @endif

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>{{ $user->address }}</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ $user->email }}</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>{{ $user->phone }}</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

    </main>
@endsection
