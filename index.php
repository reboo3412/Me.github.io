<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="x-icon" href="assets/logoMe5.png">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css?v=<?php echo time();?>"/>
    <title>Myself | R.Mendez</title>
  </head>
  <body>
    <nav>
      <div class="nav__logo"><img src="assets/logoMe2.png" alt="nav"></div>
      <ul class="nav__links">
        <li class="link"><a href="#">Home</a></li>
        <li class="link"><a href="#">Services</a></li>
        <li class="link"><a href="#">Projects</a></li>
        <li class="link"><a href="#">Reviews</a></li>
        <li class="link"><a href="#" class="contact">Contact Me</a></li>
      </ul>
    </nav>
    <header>
      <div class="section__container header__container">
        
        <div class="header__content">
          <div>
            <p class="sub__header">Me.</p>
            <h1>Welcome!<br />I'm Ralph Jay <span>Mendez</span></h1>
            <p class="section__subtitle">
            Developed ideas, designs, and sample layouts using knowledge and good concepts of design. Including graphic design, video editing, and web development.
            </p>
            <div class="action__btns">
              <button class="btn">Get in Touch</button>
              <div class="story">
                <div class="video__image">
                  <img src="assets/Me3.png" alt="story" />
                  <span><i class="ri-fire-fill"></i></span>
                </div>
                <span>MyPortfolio</span>
              </div>
            </div>
          </div>
        </div>
        <div class="header__image">  
          <img src="assets/Me1.png" alt="header" />
          <img src="assets/Me3.png" alt="header" />
          <img src="assets/back.png" alt="header" class="design"/>
        </div>
      </div>
    </header>

    <section class="trip">
      <div class="section__container trip__container">
        <h2 class="section__title">Best trip package</h2>
        <p class="section__subtitle">
          Explore your suitable and dream places around the world. Here you can
          find your right destination.
        </p>
        <div class="trip__grid">
          <div class="trip__card">
            <img src="assets/trip-1.jpg" alt="trip" />
            <div class="trip__details">
              <p>Wasserwerk Frelberg, Germany</p>
              <div class="rating"><i class="ri-star-fill"></i> 4.2</div>
              <div class="booking__price">
                <div class="price"><span>From</span> $300</div>
                <button class="book__now">Book Now</button>
              </div>
            </div>
          </div>
          <div class="trip__card">
            <img src="assets/trip-2.jpg" alt="trip" />
            <div class="trip__details">
              <p>Patagonia, Argentina and Chile</p>
              <div class="rating"><i class="ri-star-fill"></i> 4.5</div>
              <div class="booking__price">
                <div class="price"><span>From</span> $450</div>
                <button class="book__now">Book Now</button>
              </div>
            </div>
          </div>
          <div class="trip__card">
            <img src="assets/trip-3.jpg" alt="trip" />
            <div class="trip__details">
              <p>The Dolomites, Italy</p>
              <div class="rating"><i class="ri-star-fill"></i> 4.7</div>
              <div class="booking__price">
                <div class="price"><span>From</span> $400</div>
                <button class="book__now">Book Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="view__all">
          <button class="btn">View All</button>
        </div>
      </div>
    </section>

    <section class="gallary">
      <div class="section__container gallary__container">
        <div class="image__gallary">
          <div class="gallary__col">
            <img src="assets/gallery-1.jpg" alt="gallary" />
          </div>
          <div class="gallary__col">
            <img src="assets/gallery-2.jpg" alt="gallary" />
            <img src="assets/gallery-3.jpg" alt="gallary" />
          </div>
        </div>
        <div class="gallary__content">
          <div>
            <h2 class="section__title">
              Our trip gallary that will inspire you
            </h2>
            <p class="section__subtitle">
              Explore your suitable and dream places around the world. Here you
              can find your right destination.
            </p>
            <button class="btn">View All</button>
          </div>
        </div>
      </div>


           
    </section>

    <section class="subscribe">
      <div class="section__container subscribe__container">
        <div class="subscribe__content">
          <h2 class="section__title">Subscribe to get special prize</h2>
          <p class="section__subtitle">
            Explore your suitable and dream places around the world. Here you
            can find your right destination.
          </p>
        </div>
        <div class="subscribe__form">
          <form>
            <input type="email" placeholder="Your email here" />
            <button class="btn" type="submit">Send</button>
          </form>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>Pathway<span>.</span></h3>
          <p>
            Explore your suitable and dream places around the world. Here you
            can find your right destination.
          </p>
        </div>
        <div class="footer__col">
          <h4>Support</h4>
          <p>FAQs</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
          <p>Contact Us</p>
        </div>
        <div class="footer__col">
          <h4>Address</h4>
          <p>
            <span>Address:</span> 280 Wilson Street, Cima, California, 92323,
            United States
          </p>
          <p><span>Email:</span> info@pathway.com</p>
          <p><span>Phone:</span> +91 9876543210</p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2023 Web Design Mastery. All rights reserved.
      </div>
    </footer>
  </body>
</html>
