@extends('layouts.app')

@section('content')

<section id="hero" class="hero">

    <img src="{{asset('assets/img/portfolio/burgundy and White corporate Portfolio Cover.png')}}" alt="" data-aos="fade-in">



  </section><!-- End Hero Section -->

  <!-- Clients Section - Home Page -->
  <section id="clients" class="clients">

    <div class="container-fluid" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

      </div>

    </div>

  </section><!-- End Clients Section -->


  <section id="about" class="about">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

            <div class="col-xl-5 content">
                <h3>Discover Engaging Quizzes</h3>
                <h2>Experience Learning and Fun Together</h2>
                <p>Embark on a journey of knowledge and enjoyment with ProQuizzesNet. Explore a diverse range of quizzes designed to enhance learning, self-assessment, and recruitment processes. Join our community and dive into the world of interactive quizzes!</p>
                <a href="#" class="read-more"><span>Start Exploring</span><i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="col-xl-7">
                <div class="row gy-4 icon-boxes">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <i class="bi bi-person-plus"></i>
                            <h3>User Registration</h3>
                            <p>Create a personalized account to access quizzes, track your progress, and unlock achievements.</p>
                        </div>
                    </div> <!-- End Icon Box -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-journal-plus"></i>
                            <h3>Quiz Creation</h3>
                            <p>Create quizzes with various question types, set time limits, and categorize them for easy navigation.</p>
                        </div>
                    </div> <!-- End Icon Box -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-building"></i>
                            <h3>Company Accounts</h3>
                            <p>Companies can register, create recruitment quizzes, and access analytics for assessment purposes.</p>
                        </div>
                    </div> <!-- End Icon Box -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-play-circle"></i>
                            <h3>Quiz Participation</h3>
                            <p>Engage in quizzes created by others, receive instant feedback, and track your performance.</p>
                        </div>
                    </div> <!-- End Icon Box -->

                </div>
            </div>

        </div>
    </div>

</section>


  <!-- Stats Section - Home Page -->
  <section id="stats" class="stats">

    <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="654" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="67568" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="241" data-purecounter-duration="1" class="purecounter"></span>
            <p>Partisipant</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="8754" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events Reserved</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- End Stats Section -->

  <!-- Services Section - Home Page -->
  <section id="services" class="services">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Explore Our Features</h2>
      <p>Discover the diverse range of features we offer to enhance your quiz experience</p>
    </div><!-- End Section Title -->
  
    <div class="container">
  
      <div class="row gy-4">
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-pencil-square"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Quiz Creation</a></h4>
              <p class="description">Create engaging quizzes with various question types and set time limits to challenge participants.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-check-square"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Quiz Participation</a></h4>
              <p class="description">Participate in quizzes created by others, receive instant feedback, and track your progress.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-trophy"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Achievements</a></h4>
              <p class="description">Earn badges and achievements for completing quizzes, reaching milestones, and more.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-graph-up"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Analytics</a></h4>
              <p class="description">Track your performance, view quiz statistics, and monitor your progress over time with detailed analytics.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-award"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Leaderboards</a></h4>
              <p class="description">Compete with other users and climb the leaderboards by achieving high scores and completing quizzes.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-shield-check"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Security</a></h4>
              <p class="description">Ensure your data and privacy are protected with our secure encryption and authentication methods.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
      </div>
  
    </div>
  
  </section>

  


  <!-- Faq Section - Home Page -->
  <section id="faq" class="faq">

    <div class="container">
  
      <div class="row gy-4">
  
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="content px-xl-5">
            <h3><span>Get Answers to</span> <strong>Your Questions</strong></h3>
            <p>
              Have questions about using ProQuizzesNet? Check out our frequently asked questions to find the information you need.
            </p>
          </div>
        </div>
  
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
  
          <div class="faq-container">
            <div class="faq-item faq-active">
              <h3><span class="num">1.</span> <span>How do I create a quiz on ProQuizzesNet?</span></h3>
              <div class="faq-content">
                <p>Creating a quiz on ProQuizzesNet is simple! Log in to your account, navigate to the quiz creation section, and follow the step-by-step instructions to add questions, set time limits, and customize your quiz.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <h3><span class="num">2.</span> <span>Can I participate in quizzes created by others?</span></h3>
              <div class="faq-content">
                <p>Absolutely! ProQuizzesNet allows you to browse and participate in quizzes created by other users. Simply explore the available quizzes, select one that interests you, and start answering questions.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <h3><span class="num">3.</span> <span>How can I track my quiz performance?</span></h3>
              <div class="faq-content">
                <p>ProQuizzesNet provides detailed analytics on your quiz performance. You can view your scores, track progress over time, and compare your results with other users on the platform.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <h3><span class="num">4.</span> <span>Are there age restrictions for using ProQuizzesNet?</span></h3>
              <div class="faq-content">
                <p>No, there are no age restrictions for using ProQuizzesNet. Our platform is open to users of all ages who want to create, participate in, and manage quizzes for various purposes.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <h3><span class="num">5.</span> <span>How can I get assistance with using ProQuizzesNet?</span></h3>
              <div class="faq-content">
                <p>If you need help or have questions about using ProQuizzesNet, you can contact our customer support team. We're here to assist you with any queries or concerns you may have.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
          </div>
  
        </div>
      </div>
  
    </div>
  
  </section>

  <!-- End Faq Section -->



  <!-- Call-to-action Section - Home Page -->
  <section id="call-to-action" class="call-to-action">

    <img src="assets/img/cta-bg.jpg" alt="">
  
    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Get Involved</h3>
            <p>Join us for an engaging quiz experience! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <a class="cta-btn" href="#">Start Quizzing</a>
          </div>
        </div>
      </div>
    </div>
  
  </section>

  

  <section id="testimonials" class="testimonials">

    <div class="container">

      <div class="row align-items-center">

        <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
          <h3>Client Testimonials</h3>
          <p>
            Hear what our users have to say about their experience with ProQuizzesNet. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
          </p>
        </div>

        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

          <div class="swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo & Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <!-- Add more testimonials here -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </div>

    </div>

  </section>


  <!-- End Testimonials Section -->



  <!-- Contact Section - Home Page -->
  <section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact Us</h2>
      <p>Feel free to get in touch with us. We are here to help!</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
                <p>+1 6678 254445 41</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com</p>
                <p>contact@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <h3>Business Hours</h3>
                <p>Monday - Friday</p>
                <p>9:00AM - 05:00PM</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section>

  <!-- End Contact Section -->

@endsection