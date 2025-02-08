<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Offers</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'Config/db_connection.php';?>
    
    <!-- Header -->
    <header>
        <button class="mobile-menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="logo">
            <h1>SpecialDeals</h1>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#offers">Offers</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Slider Section -->
    <section class="hero-slider">
        <div class="slider-container">
            <div class="slide fade">
                <div class="slide-overlay"></div>
                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8" alt="Special Deal 1">
                <div class="slide-content">
                    <h2>Amazing Deals</h2>
                    <p>Up to 70% off on premium products</p>
                </div>
            </div>
            <div class="slide fade">
                <div class="slide-overlay"></div>
                <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da" alt="Special Deal 2">
                <div class="slide-content">
                    <h2>Limited Time Offer</h2>
                    <p>Exclusive deals for our members</p>
                </div>
            </div>
            <div class="slide fade">
                <div class="slide-overlay"></div>
                <img src="https://images.unsplash.com/photo-1607082349566-187342175e2f" alt="Special Deal 3">
                <div class="slide-content">
                    <h2>Premium Selection</h2>
                    <p>Discover luxury at its finest</p>
                </div>
            </div>
            <div class="slide fade">
                <img src="path/to/image4.jpg" alt="Offer 4">
            </div>
            <div class="slide fade">
                <img src="path/to/image5.jpg" alt="Offer 5">
            </div>
            <button class="prev" onclick="changeSlide(-1)">❮</button>
            <button class="next" onclick="changeSlide(1)">❯</button>
        </div>
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="newsletter-content">
            <h2>Stay Updated</h2>
            <p>Subscribe to our newsletter for exclusive offers and updates</p>
            <form class="subscribe-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Offers Section with Multiple Cards -->
    <section class="offers">
        <h2>Special Offers</h2>
        <div class="cards-container">
            <!-- Card 1 -->
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Product 1">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="card-content">
                    <h3>Smart Watch</h3>
                    <p>Premium smartwatch with advanced features.</p>
                    <div class="price">
                        <span class="original-price">$299</span>
                        <span class="discount-price">$199</span>
                    </div>
                    <button class="get-offer">Get Offer</button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e" alt="Product 2">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="card-content">
                    <h3>Wireless Headphones</h3>
                    <p>Premium sound quality with noise cancellation.</p>
                    <div class="price">
                        <span class="original-price">$199</span>
                        <span class="discount-price">$149</span>
                    </div>
                    <button class="get-offer">Get Offer</button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f" alt="Product 3">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="card-content">
                    <h3>Camera Lens</h3>
                    <p>Professional photography lens for perfect shots.</p>
                    <div class="price">
                        <span class="original-price">$899</span>
                        <span class="discount-price">$699</span>
                    </div>
                    <button class="get-offer">Get Offer</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="feature-container">
            <div class="feature-image">
                <img src="https://images.unsplash.com/photo-1522199755839-a2bacb67c546" alt="Feature 1">
            </div>
            <div class="feature-content">
                <h2>Amazing Experience</h2>
                <p>Discover our unique offerings and exceptional service that sets us apart from the competition.</p>
            </div>
        </div>
        
        <div class="feature-container reverse">
            <div class="feature-content">
                <h2>Premium Quality</h2>
                <p>We ensure the highest quality standards in everything we offer to our valued customers.</p>
            </div>
            <div class="feature-image">
                <img src="path/to/feature2.jpg" alt="Feature 2">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>Discover amazing deals and special offers on premium products.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#offers">Offers</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: info@specialdeals.com</p>
                <p>Phone: +1 234 567 890</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 SpecialDeals. All rights reserved.</p>
        </div>
    </footer>

    <script src="public/js/script.js"></script>
</body>
</html>