@extends('client.layout.client-layout')

@section('title')
    Contact
@endsection
@section('content')
    <header class="page-header" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        <div class="container"
            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
            <div class="text-center">
                <h1>Contact Us</h1>
                <div class="mt-15 ">
                    <a id="contact-us-link" class="main-color" href="" style="font-weight: 700;">Contact us</a>
                    <span class="padding-rl-20">|</span>
                    <a id="get-quote-link" class="getquote" href="" style="font-weight: 700;">Get A Quote</a>
                </div>
            </div>
        </div>
    </header>
    <!-- ==================== Start Contact ==================== -->
    <section class="contact p-20" id="contact-us">
        <div class="container">
            <div class="row contact-section">
                <div class="col-lg-4 valign">
                    <div class="sec-head info-box full-width ">
                        <div class="morinfo mt-10 pb-30 bord-thin-bottom">
                            <h6 class="mb-15">Contact us</h6>

                            <a href="tel:8329158915">
                                <p>Sales & Inquiry: <b>8329158915</b> </p>
                            </a>
                            <a href="tel:9403097079">
                                <p>Technical Support: <b>9403097079</b> </p>
                            </a>

                            <a href="tel:9404641941">
                                <p>Customer Service: <b>9404641941</b> </p>
                            </a>
                            <a href="tel:8411854268">
                                <p> Customer Support: <b>8411854268</b></p>
                            </a>
                        </div>
                        <div class="morinfo mt-50 pb-30 bord-thin-bottom">
                            <h6 class="mb-15">Address</h6>
                            <p>Office No : A4 , Rahalkar Chambers, Opp. Big Bazar , Collage Road Nashik ,
                                Mahrashtra 422005</p>
                        </div>
                        <div class="morinfo mt-30 pb-30 bord-thin-bottom">
                            <h6 class="mb-15">Email</h6>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 5px;">
                                    <a href="mailto:contact@thinkdigitalindia.in"
                                        style="text-decoration: none; color: inherit;">
                                        contact@thinkdigitalindia.in
                                    </a>
                                </li>
                                <li style="margin-bottom: 5px;">
                                    <a href="mailto:sales@thinkdigitalindia.in"
                                        style="text-decoration: none; color: inherit;">
                                        sales@thinkdigitalindia.in
                                    </a>
                                </li>
                                <li style="margin-bottom: 5px;">
                                    <a href="mailto:hr@thinkdigitalindia.in" style="text-decoration: none; color: inherit;">
                                        hr@thinkdigitalindia.in
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:admin@thinkdigitalindia.in"
                                        style="text-decoration: none; color: inherit;">
                                        admin@thinkdigitalindia.in
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-icon-circle mt-50">
                            <a href="https://www.facebook.com/thinkdigitalindia.in" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/company/thinkdigitalindia-in/" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/@ThinkDigitalIndiaa" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/thinkdigitalindia.in/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://x.com/thinkdigitalnsk" target="_blank">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ==================== Contact Form ==================== -->
                <div class="col-lg-7 offset-lg-1 valign">
                    <div class="full-width">
                        <div class="sec-head mb-40">
                            <h3 class="text-u ls1 text-center">Send a <span class="fw-200">message</span></h3>
                        </div>
                        <form id="contact-form" class="form2" method="post" action="contact.php"
                            enctype="multipart/form-data">
                            <div class="messages"></div>
                            <div class="controls row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_name" type="text" name="name" placeholder="Name" required="required"
                                            class="name_error">
                                        <p class="name error"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required" class="email_error">
                                        <p class="email error"></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-30">
                                        <input id="form_number" type="text" name="number" placeholder="Enter Mobile number"
                                            class="number_error" maxlength="10" required
                                            title="Please enter a mobile number">
                                        <p class="number error"></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-30">
                                        <input id="form_subject" type="text" name="subject" placeholder="Subject"
                                            class="subject_error">
                                        <p class="subject error"></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                            required="required" class="message_error"></textarea>
                                        <p class="message error"></p>
                                        <p class="success"></p>
                                    </div>
                                    <div class="mt-30">
                                        <button type="submit" class="butn butn-full butn-bord radius-30">
                                            <span class="text">Let's Talk</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Contact ==================== -->
    <!-- ==================== Start Get quote ==================== -->
    <section class="contact" id="get-a-quote" style="display: none;">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="full-width">
                        <div class="sec-head mb-50">
                            {{-- <h6 class="sub-title main-color mb-15">GET A QUOTE</h6> --}}
                            {{-- <h3 class="text-u ls1">Tell Us <span class="fw-200">About Your Project</span></h3> --}}
                        </div>
                        <form id="quote-form" class="form2" method="post" action="contact.php">
                            <div class="messages"></div>
                            <div class="controls row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_weblink" type="text" name="website_url"
                                            placeholder="Enter Your Website url">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_company" type="text" name="company_name" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <input id="form_firstname" type="text" name="first_name" placeholder="First Name">
                                        <p class="first_name error"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <input id="form_lastname" type="text" name="last_name" placeholder="Last Name">
                                        <p class="last_name error"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <input id="form_email" type="email" name="email" placeholder="Email">
                                        <p class="email error"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <input id="form_phone" type="text" name="phone_number"
                                            placeholder="Enter Your Phone Number">
                                        <p class="phone_number error"></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message"
                                            rows="4"></textarea>
                                        <p class="message error"></p>
                                    </div>
                                    <div class="mt-30">
                                        <button type="submit" class="butn butn-full butn-bord radius-30">
                                            <span class="text">Get Quote</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Get quote==================== -->
    <!-- ==================== Start google-map ==================== -->
    <div class="google-map mt-30">
        <iframe id="gmap_canvas"
            src="https://maps.google.com/maps?q=think%20digital%20Collage%20Road%2C%20Opp.%20Big%20Bazar%20Nashik%20%2C%20Mahrashtra%20422005&t=m&z=16&output=embed&iwloc=near"></iframe>
    </div>
    <!-- ==================== End google-map ==================== -->
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Contact Form Phone Number Validation
            const contactNumberField = document.getElementById('form_number');
            handlePhoneNumberValidation(contactNumberField, '.number.error');

            // Quote Form Phone Number Validation
            const quotePhoneNumberField = document.getElementById('form_phone');
            handlePhoneNumberValidation(quotePhoneNumberField, '.phone_number.error');

            function handlePhoneNumberValidation(phoneNumberField, errorSelector) {
                phoneNumberField.addEventListener('input', function () {
                    // Allow only numeric input
                    this.value = this.value.replace(/\D/g, '');
                });

                phoneNumberField.addEventListener('blur', function () {
                    const errorField = document.querySelector(errorSelector);
                    if (this.value.length !== 10) {
                        errorField.textContent = 'Please enter a valid 10-digit mobile number.';
                        this.classList.add('error');
                    } else {
                        errorField.textContent = '';
                        this.classList.remove('error');
                    }
                });
            }
        });

        document.getElementById('contact-us-link').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('contact-us').style.display = 'block';
            document.getElementById('get-a-quote').style.display = 'none';
            document.querySelector('.page-header h1').innerText = 'Contact Us';
            setActiveLink(this);
        });

        document.getElementById('get-quote-link').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('contact-us').style.display = 'none';
            document.getElementById('get-a-quote').style.display = 'block';
            document.querySelector('.page-header h1').innerText = 'Get A Quote';
            setActiveLink(this);
        });

        document.addEventListener('DOMContentLoaded', function () {
            const selectElement = document.getElementById('form_specialization');
            const arrowElement = document.querySelector('.dropdown-wrapper .arrow');

            selectElement.addEventListener('click', function () {
                if (selectElement.classList.contains('open')) {
                    selectElement.classList.remove('open');
                    arrowElement.classList.remove('up');
                    arrowElement.classList.add('down');
                } else {
                    selectElement.classList.add('open');
                    arrowElement.classList.remove('down');
                    arrowElement.classList.add('up');
                }
            });

            // Close the dropdown when clicking outside
            document.addEventListener('click', function (event) {
                if (!selectElement.contains(event.target)) {
                    selectElement.classList.remove('open');
                    arrowElement.classList.remove('up');
                    arrowElement.classList.add('down');
                }
            });
        });

        function setActiveLink(activeLink) {
            // Remove main-color class from all links
            document.getElementById('contact-us-link').classList.remove('main-color');
            document.getElementById('get-quote-link').classList.remove('main-color');

            // Add main-color class to the clicked link
            activeLink.classList.add('main-color');
        }


        $(document).ready(function () {
            $("#contact-form").submit(function (e) {
                e.preventDefault();
                // Disable the submit button
                $("#contact-form button").attr("disabled", true);

                // Collect form data
                let form = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.inquiryStore') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    beforeSend: function () {
                        $("#contact-form button").html(
                            '<i class="fa-solid fa-spinner"></i> Sending...'
                        );
                    },
                    success: function (data) {
                        if (data.status === "success") {
                            history.pushState(null, null, "/contact-us/contact=thankyou");
                            Swal.fire({
                                title: "Success",
                                text: data.message,
                                icon: "success"
                            }).then(() => {
                                // Reset form fields
                                $("#contact-form")[0].reset();
                                location.replace("/contact-us");
                            });
                        } else {
                            Swal.fire({
                                title: "Error",
                                text: data.message,
                                icon: "error"
                            });
                        }
                        $("#contact-form button").removeAttr("disabled")
                            .text("Send");
                    },
                    error: function (xhr) {
                        $("#contact-form button").removeAttr("disabled")
                            .text("Send");
                        const errors = xhr.responseJSON.errors;

                        // Clear previous errors
                        $(".error").text("");

                        // Display errors
                        form_error(".name.error", errors?.name || "");
                        form_error(".email.error", errors?.email || "");
                        form_error(".number.error", errors?.number ||
                            "");
                        form_error(".subject.error", errors?.subject ||
                            "");
                        form_error(".message.error", errors?.message ||
                            "");

                        // Add error classes to invalid fields
                        $('input[name="name"]').toggleClass('error', !!
                            errors?.name);
                        $('input[name="email"]').toggleClass('error', !!
                            errors?.email);
                        $('input[name="number"]').toggleClass('error', !
                            !errors?.number);
                        $('input[name="subject"]').toggleClass('error',
                            !!errors?.subject);
                        $('textarea[name="message"]').toggleClass(
                            'error', !!errors?.message);
                    }
                });
            });



            $("#quote-form").submit(function (e) {
                e.preventDefault();
                $("#quote-form button").attr('disabled', 'disabled');
                let form = new FormData(this)
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.storeQuote') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data.status === "success") {
                            history.pushState(null, null, "/contact-us/getquote=thankyou");
                            Swal.fire({
                                title: "Success",
                                text: data.message,
                                icon: "success"
                            }).then(() => {
                                // Reset the form after clicking OK
                                $("#quote-form").trigger('reset');
                                location.replace("/contact-us"); // Redirect after confirmation
                            });
                            $("#quote-form button").removeAttr(
                                "disabled");
                            $(".error").html("");
                            $('input.error').removeClass('error');
                            $('textarea.error').removeClass('error');
                        }
                    },
                    error: function (error) {
                        $("#quote-form button").removeAttr("disabled");
                        form_error(
                            ".first_name.error",
                            error.responseJSON.errors?.first_name ||
                            ""
                        );
                        form_error(
                            ".first_name.error",
                            error.responseJSON.errors?.first_name ||
                            ""
                        );
                        form_error(
                            ".last_name.error",
                            error.responseJSON.errors?.last_name ||
                            ""
                        );
                        form_error(
                            ".email.error",
                            error.responseJSON.errors?.email || ""
                        );
                        form_error(
                            ".phone_number.error",
                            error.responseJSON.errors
                                ?.phone_number || ""
                        );
                        form_error(
                            ".message.error",
                            error.responseJSON.errors?.message || ""
                        );
                        if (error.responseJSON.errors?.first_name) {
                            $(`input[name="first_name"]`).addClass(
                                'error');
                        } else {
                            $(`input[name="first_name"]`).removeClass(
                                'error');
                        }
                        if (error.responseJSON.errors?.last_name) {
                            $(`input[name="last_name"]`).addClass(
                                'error');
                        } else {
                            $(`input[name="last_name"]`).removeClass(
                                'error');
                        }
                        if (error.responseJSON.errors?.email) {
                            $(`input[name="email"]`).addClass('error');
                        } else {
                            $(`input[name="email"]`).removeClass(
                                'error');
                        }
                        if (error.responseJSON.errors?.phone_number) {
                            $(`input[name="phone_number"]`).addClass(
                                'error');
                        } else {
                            $(`input[name="phone_number"]`).removeClass(
                                'error');
                        }
                        if (error.responseJSON.errors?.message) {
                            $(`textarea[name="message"]`).addClass(
                                'error');
                        } else {
                            $(`textarea[name="message"]`).removeClass(
                                'error');
                        }


                    }
                });
            });
        });
    </script>
@endsection
