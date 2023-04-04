<?php require_once 'header.html'; ?>
<section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-heading ">Connexion</h1>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input--><h3 class="text-center">Se connecter</h3>
                                <input class="form-control" id="name" type="text" placeholder="Votre adresse mail.. " data-sb-validations="required, email" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A Email is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" type="password" placeholder="Mot de passe" type="text" id="name" name="password" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An password is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Password is not valid.</div>
                            </div>
                            <div class="text-center"><button class="btn btn-success btn-xl text-uppercase disabled" id="submitButton" type="submit">Se connecter</button></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input--><h3 class="text-center">S'inscrire</h3>
                                <input class="form-control" id="name" type="text" placeholder="Votre Prénom.. " data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Votre Nom.. " data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group ">
                                <!-- Phone number input-->
                                <input type="date" id="start" class="form-control" name="sortie"
                                    value="aaaa-mm-dd" min="1999-01-01" max="Date()" placeholder="Votre Date de naissance.." data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Votre Adresse.. " data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A adresse is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Votre Numéro de Téléphone.." data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Votre Email.. " data-sb-validations="required, email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" type="password" placeholder="Mot de passe" type="text" id="name" name="password" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An password is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Password is not valid.</div>
                            </div>
                            <div class="text-center"><button class="btn btn-success btn-xl text-uppercase disabled" id="submitButton" type="submit">S'inscrire</button></div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                </form>
            </div>
        </section>

<?php  require_once 'footer.html'; ?>  