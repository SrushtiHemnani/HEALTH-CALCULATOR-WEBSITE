<?php include 'Components/header.php'; ?>

<!-- Home Content -->
<section class="py-5" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="Assets/img.png" class="img-fluid rounded" alt="Healthcare Image">
            </div>
            <div class="col-md-6">
                <p class="lead">
                    Established in 2011, Kratin is a healthcare-focused company enabling transformative changes with a
                    wide spectrum of solutions across the care continuum for the care consumer and care team.
                </p>
                <p>
                    Our team is committed to leveraging cutting-edge technology to improve healthcare outcomes. We focus
                    on personalized patient care and seamless healthcare management to ensure the highest quality of
                    service.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Us -->
<section class="bg-light py-5" id="about">
    <div class="container text-center">
        <h2>About Us</h2>
        <p>
            Welcome to Kratin! We are dedicated to providing the best services for our customers. Our team is
            passionate, experienced, and committed to excellence.
        </p>
        <p>
            Our mission is to deliver quality and ensure customer satisfaction through our innovative solutions and
            exceptional service.
        </p>
    </div>
</section>

<!-- Premium Calculator -->
<section id="calculator" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Premium Calculator</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form id="calculator-form" class="bg-white p-4 rounded shadow">
                    <!-- First row: Weight and Age -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="weight" class="form-label">Weight (kg):</label>
                            <input id="weight" name="weight" type="number" class="form-control" step="0.01" min="0" max="65" required>
                            <div class="invalid-feedback">Weight must be a number with up to two decimal places and not exceed 65 kg.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="age" class="form-label">Age:</label>
                            <input id="age" name="age" type="number" class="form-control" min="1" max="100" step="1" required>
                            <div class="invalid-feedback">Age must be an integer between 1 and 100 years.</div>
                        </div>
                    </div>
                    <!-- Second row: Smoke and Alcohol -->
                    <div class="row mb-3">
                        <!-- Smoke Field -->
                        <div class="col-md-6">
                            <label class="form-label">Smoke:</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input type="radio" id="smoke-yes" name="smoke" value="yes" class="form-check-input" required>
                                    <label for="smoke-yes" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="smoke-no" name="smoke" value="no" class="form-check-input" required>
                                    <label for="smoke-no" class="form-check-label">No</label>
                                </div>
                            </div>
                            <div class="invalid-feedback"> &nbsp;&nbsp;Please select your smoking status.</div>
                        </div>
                        <!-- Alcohol Field -->
                        <div class="col-md-6">
                            <label class="form-label">Alcohol:</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input type="radio" id="alcohol-yes" name="alcohol" value="yes" class="form-check-input" required>
                                    <label for="alcohol-yes" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="alcohol-no" name="alcohol" value="no" class="form-check-input" required>
                                    <label for="alcohol-no" class="form-check-label">No</label>
                                </div>
                            </div>
                            <div class="invalid-feedback"> &nbsp;&nbsp; Please select your alcohol status.</div>
                        </div>
                    </div>

                    <!-- Center the button -->
                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-success btn-sm">Calculate Premium</button>
                    </div>
                    <!-- Result section -->
                    <div id="calculator-result" class="text-center" style="display: none;">
                        <h3 id="total-amount" class="text-success" style="font-size: 1.5rem;">Total Premium:</h3>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us -->
<section class="py-5" id="contact">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4>Contact Information</h4>
                <p><strong>Address:</strong> Kratin LLC, 131, Recklesstown Way, Chesterfield, New Jersey - 08515 USA.</p>
                <p><strong>Phone:</strong> (+1) 817 898 1386</p>
                <p><strong>Email:</strong> info@kratinmobile.com</p>
            </div>
            <div class="col-md-6">
                <h4>Get in Touch</h4>
                <form id="form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input id="name" name="name" type="text" class="form-control" required>
                        <div class="invalid-feedback">Please enter your name (at least 3 characters).</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input id="email" name="email" type="email" class="form-control" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input id="phone" name="phone" type="tel" class="form-control" required>
                        <div class="invalid-feedback">Please enter a valid Indian phone number (10 digits starting with 7, 8, or 9).</div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label><span id="char-count" class="text-muted">(Characters left: 500)</span>
                        <textarea id="message" name="message" class="form-control" required rows="4"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label for="premium-amount" class="form-label">Premium Amount:</label>
                        <input id="premium-amount" name="premium-amount" type="number" class="form-control" step="0.01" min="0" required readonly>
                        <div class="invalid-feedback">Please enter a valid premium amount.</div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                <p id="form-message" class="mt-3"></p>
            </div>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="bg-light py-5" id="info">
    <div class="container text-center">
        <h2>More Information</h2>
        <p>
            Discover more about our services and how we can assist you in achieving better healthcare solutions.
        </p>
    </div>
</section>

<!-- Scroll-to-Top Button -->
<button id="scroll-top" class="btn btn-success rounded-circle" aria-label="Scroll to Top">
    <i class="fas fa-arrow-up"></i>
</button>


<!-- Footer -->
<?php include 'Components/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- jQuery Validation Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
<!-- Custom JS -->
<script src="Script/js.js"></script>
</body>
</html>
