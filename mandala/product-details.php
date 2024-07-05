<?php
include 'header.php';
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/product-1.webp" class="img-fluid" alt="Product Image">
                <div class="row mt-3">
                    <div class="col-3">
                        <img src="path_to_thumbnail1.jpg" class="img-thumbnail" alt="Thumbnail 1">
                    </div>
                    <!-- Add more thumbnail images here -->
                </div>
            </div>
            <div class="col-md-6">
                <h2>Product Name</h2>
                <p class="text-muted">Short product description</p>
                <h3 class="text-primary">₹750 <small class="text-muted"><del>₹900</del></small></h3>
                <p class="badge bg-success">17% OFF</p>
                <p>Shipping calculated at checkout</p>
                
                <h4>Choose Variant</h4>
                <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" name="variant" id="black" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="black">Black</label>
                    <!-- Add more color options -->
                </div>
                
                <div class="mt-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <div class="input-group" style="width: 150px;">
                        <button class="btn btn-outline-secondary" type="button">-</button>
                        <input type="text" class="form-control text-center" id="quantity" value="1">
                        <button class="btn btn-outline-secondary" type="button">+</button>
                    </div>
                </div>
                
                <button class="btn btn-primary btn-lg mt-3">ADD TO CART</button>
                
                <h4 class="mt-4">Description</h4>
                <ul>
                    <li>360 Degree Protection.</li>
                    <li>Durable and Protective.</li>
                    <!-- Add more description points -->
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>