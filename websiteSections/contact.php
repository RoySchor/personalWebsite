<!-- Contact Page -->
    <section id="contact" class="full-height px-lg-5">
        <div class="container">

            <div class="row justify-content-center text-center" data-aos="fade-up">
                <div class="col-lg-8 pb-4">
                    <h6 class="text-brand">CONTACT</h6>
                    <h1 class="mb-4">Have an idea? A job? Simply want to connect? Let's talk</h1>

                    <h6>Don't want to fill all that out? Just email me: royschor@gmail.com</h6>

                    <h3 class="my-3" style="color: red;">
                        Form is currently not functional, please email me.
                    </h3>
                </div>

                <div class="col-lg-8">
                    <form id = contactForm action="#" method="POST" class="row g-lg-3 gy-3">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="Enter your email/ way to reach out">
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="subject" placeholder="Enter subject" required>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="" rows="4" class="form-control" name="message" placeholder="Enter your message" required></textarea>
                        </div>
                        <div class="form-group col-12 d-grid">
                            <!-- <button type="submit" class="btn btn-brand">Contact Me</button> -->
                            <button type="button" class="btn btn-brand" onclick="submitForm()">Contact Me</button>
                        </div>
                    </form>
                    <div id="formMessage" style="color: green; margin-top: 20px;"></div>
                </div>
            </div>

        </div>
    </section>
</div>
<!-- //Contact Page -->