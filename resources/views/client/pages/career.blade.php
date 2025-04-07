@extends('client.layout.client-layout')
@section('title')
    Career
@endsection
@section('content')
    <!-- ==================== Start career ==================== -->
    <section class="contact section-padding" id="career">
        <div class="text-center">
            <h1>Career</h1>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="full-width">
                        <div class="sec-head mb-50">
                            <h3 class="text-u ls1">JOIN <span class="fw-200">OUR TEAM</span></h3>
                        </div>
                        <form id="career-form" class="form2" method="post" action="contact.php"
                            enctype="multipart/form-data">
                            <div class="messages"></div>
                            <div class="controls row">
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
                                        <input id="career_phone" type="tel" name="phone" placeholder="Enter Mobile Number"
                                            maxlength="10" required title="Please enter a valid 10-digit mobile number">
                                        <p class="career-phone error"></p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <input id="form_file" type="file" name="resume" accept=".pdf">
                                        <p class="resume error"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-30">
                                        <input id="form_email" type="email" name="email" placeholder="Email">
                                        <p class="email error"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group options mb-30 dropdown-wrapper">
                                        <select id="form_specialization" name="specialization" class="form-control">
                                            <option value="" disabled selected>Select Your Specialization</option>
                                            <option value="website design">Website Design</option>
                                            <option value="digital marketing">Digital Marketing</option>
                                            <option value="graphics design & animation">Graphic Design
                                            </option>
                                            <option value="logo and branding">Logo and Branding</option>
                                            <option value="ui & ux design">UI & UX Design</option>
                                            <option value="mobile app development">Mobile App Development</option>
                                            <option value="photography">Photography</option>
                                            <option value="video shooting & editing">Video Shooting</option>
                                            <option value="video editing and shooting">Video Editing & Animation</option>
                                        </select>
                                        <span class="arrow"></span>
                                        <p class="specialization error"></p>
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
    <!-- ========================= End career============================ -->
@endsection
@section('script')
    <script>
        // New validation for Career Form
        const careerPhoneNumberField = document.getElementById('career_phone');
        handlePhoneNumberValidation(careerPhoneNumberField, '.career-phone.error');

        // Validation handler function
        function handlePhoneNumberValidation(phoneNumberField, errorSelector) {
            phoneNumberField.addEventListener('input', function () {
                // Allow only numeric input
                this.value = this.value.replace(/\D/g, ''); // Remove any non-digit character
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
        $(document).ready(function () {
            $("#career-form").submit(function (e) {
                e.preventDefault();
                $("#career-form button").attr('disabled', 'disabled');
                let form = new FormData(this);

                $.ajax({
                    type: "post",
                    url: "{{ route('admin.storeCareer') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data.status === "success") {
                            history.pushState(null, null, "/careers/careers=thankyou");
                            Swal.fire({
                                title: "Success",
                                text: data.message,
                                icon: "success"
                            }).then(() => {
                                // Reset form fields
                                $("#career-form")[0].reset();
                                location.replace("/careers");
                            });
                        } else {
                            Swal.fire({
                                title: "Error",
                                text: data.message,
                                icon: "error"
                            });
                        }
                        $("#career-form button").removeAttr("disabled");
                    },
                    error: function (error) {
                        $("#career-form button").removeAttr("disabled");
                        const errors = error.responseJSON.errors;
                        form_error(".first_name.error", errors?.first_name || "");
                        form_error(".last_name.error", errors?.last_name || "");
                        form_error(".phone.error", errors?.phone || "");
                        form_error(".email.error", errors?.email || "");
                        form_error(".resume.error", errors?.resume || "");
                        form_error(".specialization.error", errors?.specialization || "");
                        form_error(".message.error", errors?.message || "");

                        $('input[name="first_name"]').toggleClass('error', !!errors
                            ?.first_name);
                        $('input[name="last_name"]').toggleClass('error', !!errors?.last_name);
                        $('input[name="phone"]').toggleClass('error', !!errors?.phone);
                        $('input[name="email"]').toggleClass('error', !!errors?.email);
                        $('input[name="resume"]').toggleClass('error', !!errors?.resume);
                        $('select[name="specialization"]').toggleClass('error', !!errors
                            ?.specialization);
                        $('textarea[name="message"]').toggleClass('error', !!errors?.message);
                    }
                });
            });
        });

    </script>
@endsection
