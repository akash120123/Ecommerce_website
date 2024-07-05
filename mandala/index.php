<?php
include 'header.php'
?>
<!-- Hero section -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1>Welcome </h1>
                <p>Discover the latest trends and shop with ease.</p>
                <a href="#" class="btn btn-primary">Shop Now</a>
            </div>
        </div>
    </div>
</section>
<!-- Bootstrap Carousel -->

<section class="product-listing">
    <div class="container mt-5">
        <h2 class="text-center mb-5">Our Products</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            
                <!-- product1 -->
            <div class="col">  
            <a href="product-details.php">
            
                <div class="product-card card h-100">
                    <div class="img-container">
                    <img src="assets/product-1.webp" class="card-img-top" alt="Product Name 1">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Product Name 1</h5>
                        <p class="card-text">Brief description of the product.</p>
                        <p class="card-text text-primary">$29.99</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary mb-2">Add to Cart</a>
                            <button class="btn btn-outline-secondary mb-2">Wishlist</button>
                            <a href="#" class="btn btn-success">Buy Now</a>
                        </div>
                    </div>
                </div>
                

            </a> 
            </div>
            <!-- product 2 -->
            <div class="col">
             <a href="#">
            
                <div class="product-card card h-100">
                <div class="img-container">
                    <img src="assets/product-1.webp" class="card-img-top" alt="Product Name 1">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Product Name 2</h5>
                        <p class="card-text">Brief description of the product.</p>
                        <p class="card-text text-primary">$39.99</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary mb-2">Add to Cart</a>
                            <button class="btn btn-outline-secondary mb-2">Wishlist</button>
                            <a href="#" class="btn btn-success">Buy Now</a>
                        </div>
                    </div>
                </div>
            
            </a>
            </div>
            <!-- product3 -->
             
            <div class="col">
                <a href="#">
                <div class="product-card card h-100">
                <div class="img-container">
                    <img src="assets/product-1.webp" class="card-img-top" alt="Product Name 1">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Product Name 3</h5>
                        <p class="card-text">Brief description of the product.</p>
                        <p class="card-text text-primary">$49.99</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary mb-2">Add to Cart</a>
                            <button class="btn btn-outline-secondary mb-2">Wishlist</button>
                            <a href="#" class="btn btn-success">Buy Now</a>
                        </div>
                    </div>
                </div>
                </a>
            </div>
           
            <!-- Add more products as needed -->
        </div>
    </div>
</section>



<section class="promotion-section">
    <div class="container">
        <div id="promotionSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Promotion 1 -->
                <div class="carousel-item active">
                    <div class="promotion-card row">
                        <div class="col-12 col-md-4">
                            <div class="promotion-container">
                                <img src="assets/img/sale.webp" class="d-block w-100" alt="Promotion 1">
                                <h3>50% Off</h3>
                                <p>Get 50% off on selected items. Limited time offer!</p>
                                <a href="#" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                        <!-- Promotion 2 -->
                        <div class="col-12 col-md-4">
                            <div class="promotion-container">
                                <img src="assets/img/sale2.webp" class="d-block w-100" alt="Promotion 2">
                                <h3>New Arrivals</h3>
                                <p>Discover our latest arrivals for this season.</p>
                                <a href="#" class="btn btn-primary">Explore</a>
                            </div>
                        </div>
                        <!-- Promotion 3 -->
                        <div class="col-12 col-md-4">
                            <div class="promotion-container">
                                <img src="assets/img/sale3.jpg" class="d-block w-100" alt="Promotion 3">
                                <h3>Flash Sale</h3>
                                <p>Shop now and save big during our flash sale event.</p>
                                <a href="#" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Promotion 4 -->
                <div class="carousel-item">
                    <div class="promotion-card row">
                        <div class="col-12 col-md-4">
                            <div class="promotion-container">
                                <img src="assets/img/sale2.webp" class="d-block w-100" alt="Promotion 4">
                                <h3>Summer Clearance</h3>
                                <p>Enjoy huge discounts on summer essentials.</p>
                                <a href="#" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                        <!-- Promotion 5 -->
                        <div class="col-12 col-md-4">
                            <div class="promotion-container">
                                <img src="assets/img/sale.webp" class="d-block w-100" alt="Promotion 5">
                                <h3>Back to School</h3>
                                <p>Prepare for school with our latest collections.</p>
                                <a href="#" class="btn btn-primary">Explore</a>
                            </div>
                        </div>
                        <!-- Placeholder for 6th promotion -->
                        <div class="col-12 col-md-4">
                            <!-- Empty div for layout -->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#promotionSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#promotionSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


<section class="blog-section bg-light" id="blog-section">
    <div class="container">
        <h2 class="text-center mb-5">Latest Blog Posts</h2>
        <div class="row">
            <!-- Blog Post 1 -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm mb-4">
                    <img src="assets/img/blog1.jpg" class="card-img-top" alt="Blog Post 1">
                    <div class="card-body">
                        <h3 class="card-title">Blog Post Title 1</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Blog Post 2 -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm mb-4">
                    <img src="assets/img/blog2.jpg" class="card-img-top" alt="Blog Post 2">
                    <div class="card-body">
                        <h3 class="card-title">Blog Post Title 2</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
              <!-- Blog Post 3 -->
              <div class="col-md-6">
                <div class="card border-0 shadow-sm mb-4">
                    <img src="assets/img/blog2.jpg" class="card-img-top" alt="Blog Post 2">
                    <div class="card-body">
                        <h3 class="card-title">Blog Post Title 2</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- <section class="contact-section">
    <div class="container">
        <h2 class="mb-4">Contact Us</h2>
        <p>Have a question or need assistance? Contact our support team.</p>
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <form>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Write your message here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section> -->

<footer class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Build fully functional accessible web applications faster than ever</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Legals</h5>
                        <ul class="list-unstyled">
                            <li><a href="/legals/shipping-policy" class="text-white">Shipping Policy</a></li>
                            <li><a href="/legals/refund-policy" class="text-white">Refund Policy</a></li>
                            <li><a href="/legals/privacy-policy" class="text-white">Privacy Policy</a></li>
                            <li><a href="/legals/terms-of-service" class="text-white">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5>Socials</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/MandalaStore" class="text-white">Facebook</a></li>
                            <li><a href="https://youtube.com/MandalaStore" class="text-white">YouTube</a></li>
                            <li><a href="https://instagram.com/MandalaStore" class="text-white">Instagram</a></li>
                            <li><a href="https://wa.me/your-whatsapp-number" class="text-white">WhatsApp</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-center">&copy; 2023 MandalaStore. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/responive-nav.js"></script>


<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- to be maintain -->
<!-- <script src="assets/jquery/smooth-scroll.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
