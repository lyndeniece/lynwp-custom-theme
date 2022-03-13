<?php
/**
 * Template Name: Homepage Template
 * Description: Displays Front Page Template.
 *
 */
get_header(); ?>

<div class="main-home-page-container">
  
  <!-- Banner Start -->
  <section class="main-banner-container">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-12">

          <div class="content-container">
            <h1>Hi there! We are the new kids on the block and we build awesome websites and mobile apps.</h1>
            <button type="button" class="btn btn3d btn-orange">WORK WITH US!</button>
          </div>
          
        </div>
      </div>
    </div>
  </section><!-- Banner End -->



  <!-- Services Start -->
  <section id="services" class="main-services-container">
    <div class="container">

      <div class="intro-container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="heading-line">Services We Provide</h2>
            <p>We are working with both individuals and businesses from all over the globe to create awesome websites and applications.</p>
          </div>
        </div>
      </div>

      <div class="services-container">
        <div class="row">

          <!-- Branding -->
          <div class="col-sm-12 col-md-3">
            <div class="services branding">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flag-icon.png" alt="Branding" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="100">
              <h3>Branding</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
            </div>
          </div>

          <!-- Design -->
          <div class="col-sm-12 col-md-3">
            <div class="services design">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/crayon-icon.png" alt="Design" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="100" data-aos-delay="300">
              <h3>Design</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  </p>
            </div>
          </div>

          <!-- Development -->
          <div class="col-sm-12 col-md-3">
            <div class="services development">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gears-icon.png" alt="Development" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="100" data-aos-delay="500">
              <h3>Development</h3>
              <p>At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</p>
            </div>
          </div>

          <!-- Rocket Science -->
          <div class="col-sm-12 col-md-3">
            <div class="services rocket-science">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rocket-icon.png" alt="Rocket Science" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="100" data-aos-delay="700">
              <h3>Rocket Science</h3>
              <p>Et harum quidem rerum est et expedita distinctio. Nam libero tempore.</p>
            </div>
          </div>


        </div>
      </div>

    </div>
  </section><!-- Services End -->



  <!-- Team Start -->
  <section id="about" class="main-team-container">
    <div class="container">

      <div class="intro-container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="heading-line">Meet Our Beautiful Team</h2>
            <p>We are a small team of designers and developers, who help brands with big ideas.</p>
          </div>
        </div>
      </div>

      <div class="team-container">
        <div class="row">

          <!-- Team Member 1 -->
          <div class="col-sm-12 col-md-3">
            <div class="team-member">
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/anne-hathaway.jpg" alt="Anne Hathaway - CEO/Marketing Guru">
              </div>
              <div class="member-details">
                <h3 class="member-name">Anne Hathaway</h3>
                <h4 class="member-position">CEO / Marketing Guru</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                <div class="smm-icons">
                  <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-brands fa-facebook-f"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-brands fa-twitter"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-brands fa-linkedin-in"></i></a></li>
                    <li><a class="email" href="#"><i class="fa fa-solid fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 2 -->
          <div class="col-sm-12 col-md-3">
            <div class="team-member">
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kate-upton.jpg" alt="Kate Upton - Creative Director">
              </div>
              <div class="member-details">
                <h3 class="member-name">Kate Upton</h3>
                <h4 class="member-position">Creative Director</h4>
                <p>Duis aute irure dolor in in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non diam proident.</p>
                <div class="smm-icons">
                  <ul>
                    <li><a class="twitter" href="#"><i class="fa fa-brands fa-twitter"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-brands fa-linkedin-in"></i></a></li>
                    <li><a class="email" href="#"><i class="fa fa-solid fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 3 -->
          <div class="col-sm-12 col-md-3">
            <div class="team-member">
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/olivia-wilde.jpg" alt="Olivia Wade - Lead Designer">
              </div>
              <div class="member-details">
                <h3 class="member-name">Olivia Wilde</h3>
                <h4 class="member-position">Lead Designer</h4>
                <p>Nemo enim ipsam voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem nesciunt.</p>
                <div class="smm-icons">
                  <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-brands fa-facebook-f"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-brands fa-twitter"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-brands fa-linkedin-in"></i></a></li>
                    <li><a class="email" href="#"><i class="fa fa-solid fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 4 -->
          <div class="col-sm-12 col-md-3">
            <div class="team-member">
              <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ashley-greene.jpg" alt="Ashley Greene - SEO/Developer">
              </div>
              <div class="member-details">
                <h3 class="member-name">Ashley Greene</h3>
                <h4 class="member-position">SEO / Developer</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                <div class="smm-icons">
                  <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-brands fa-facebook-f"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-brands fa-twitter"></i></a></li>
                    <li><a class="email" href="#"><i class="fa fa-solid fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section><!-- Team End -->



  <!-- Skills Start -->
  <section class="main-skills-container">
    <div class="container">
      
      <div class="intro-container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="heading-line">We Got Skills!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>

      <div class="progress-bar-container">
        <div class="row">

          <div class="col-sm-12 col-md-3">
            <div class="progressbar" data-animate="false">
              <div class="first circle" data-percent="90">
                <div></div>
              </div>
                <h3>Web Design</h3>
            </div>
          </div>

          <div class="col-sm-12 col-md-3">
            <div class="progressbar" data-animate="false">
              <div class="second circle" data-percent="75">
                <div></div>
              </div>
                <h3>HTML / CSS</h3>
            </div>
          </div>

          <div class="col-sm-12 col-md-3">
            <div class="progressbar" data-animate="false">
              <div class="third circle" data-percent="70">
                <div></div>
              </div>
                <h3>Graphic Design</h3>
            </div>
          </div>

          <div class="col-sm-12 col-md-3">
            <div class="progressbar" data-animate="false">
              <div class="fourth circle" data-percent="85">
                <div></div>
              </div>
                <h3>UI / UX</h3>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section><!-- Skills End -->



  <!-- Portfolio Start -->
  <section id="work" class="main-portfolio-container">
    <div class="container">
      
      <div class="intro-container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="heading-line">Our Portfolio</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam</p>
          </div>
        </div>
      </div>

      <div class="portfolio-container">

        <!-- Filter Categories -->
        <div class="row">
          <div class="col-sm-12">
            <div id="filterContainer" class="filter-group">
              <button class="btn active" data-filter="*">All</button>
              <button class="btn" data-filter=".web">Web</button>
              <button class="btn" data-filter=".apps">Apps</button>
              <button class="btn" data-filter=".icons">Icons</button>
            </div>
          </div>
        </div>

        <!-- Portfolio Gallery -->
        <div class="row">
          <div class="col-sm-12 portfolio-gallery">

            <div class="portfolio web">
              <div class="portfolio-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Isometric-Perspective-Mock-Up.png" alt="Isometric Perspective Mock-Up">
                <h3>Isometric Perspective Mock-Up</h3>
              </div>
            </div>

            <div class="portfolio apps">
              <div class="portfolio-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/time-zone-app-ui.png" alt="Time Zone App UI">
                <h3>Time Zone App UI</h3>
              </div>
            </div>

            <div class="portfolio web">
              <div class="portfolio-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/viro-media-players-ui.png" alt="Viro Media Players UI">
                <h3>Viro Media Players UI</h3>
              </div>
            </div>

            <div class="portfolio icons">
              <div class="portfolio-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-magazine-ui-kit.png" alt="Blog / Magazine Flat UI Kit">
                <h3>Blog / Magazine Flat UI Kit</h3>
              </div>
            </div>
            <div class="portfolio icons">
              <div class="portfolio-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-magazine-ui-kit.png" alt="Blog / Magazine Flat UI Kit">
                <h3>Blog / Magazine Flat UI Kit</h3>
              </div>
            </div>
            <div class="portfolio icons">
              <div class="portfolio-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-magazine-ui-kit.png" alt="Blog / Magazine Flat UI Kit">
                <h3>Blog / Magazine Flat UI Kit</h3>
              </div>
            </div>
            <div class="portfolio icons">
              <div class="portfolio-content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-magazine-ui-kit.png" alt="Blog / Magazine Flat UI Kit">
                <h3>Blog / Magazine Flat UI Kit</h3>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section><!-- Portfolio End -->



  <!-- Contact Start -->
  <section id="contact" class="main-contact-container">
    <div class="container">
      
      <div class="intro-container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="heading-line">Get in Touch</h2>
            <p>1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: <a href="tel:(202) 456-1111">(202) 456-1111</a></p>
          </div>
        </div>
      </div>

      <div class="contact-form-container">
        <div class="row">
          <div class="col-sm-12">
            <form id="contact-form" name="contactForm" action="" method="post">

              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <input id="name" name="name" minlength="3" type="text" placeholder="Your Name*"  required>
                </div>
                <div class="col-sm-12 col-md-6">
                  <input id="email" type="email" name="email" placeholder="Your Email*"  required>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <textarea id="message" rows="4" cols="50" name="message" type="textarea" placeholder="Your Message*"  required></textarea>
                </div>
                <div class="col-sm-12">
                  <input class="submit btn btn3d btn-blue" type="submit" value="SEND MESSAGE">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>
  </section><!-- Contact End -->

</div>

<?php get_footer(); ?>