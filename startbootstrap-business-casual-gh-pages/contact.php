<?php require_once 'header.html'; ?>  
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
          <span class="site-heading-upper-lower  mb-3">Contact</span>
      </h1>
        <section id="contact" class="contact">
            <div class=" cta info-boxs">   
            <div class=" container container2">
                               
               <div class="cta-inner " >   
            
              <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                  <div class="info-box mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                    <h3>Notre Adresse</h3>
                    <p style="font-size: 16px;"> 1 Avenue du Lycée,
                    77130 Montereau-Fault-Yonne</p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                    </svg>
                    <h3>Notre Email</h3>
                    <p style="font-size: 16px;">contact@example.com</p>
                    <br>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                    <h3>Appelez nous</h3>
                    <p style="font-size: 16px;">Téléphone: 09 86 55 22 26<p> <br>
                  </div>
                </div>
      
              </div>
      
              <div class="row" data-aos="fade-up">
      
                <div class="col-lg-6 ">
                  <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2649.2365673084873!2d2.9563692158790733!3d48.39439994121702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ef42d166da3f61%3A0x1273a175862d64d6!2sBs%20Auto%20Ecole!5e0!3m2!1sfr!2sfr!4v1675688098467!5m2!1sfr!2sfr" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
      
                <div class="col-lg-6">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom..." required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre Numéro..." required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Votre Email..." required>
                      </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet..." required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message..." required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Votre message a bien été envoyé. Merci.</div>
                    </div>
                    <div class="text-center"><button type="submit">Envoyer</button></div>
                  </form>
                </div>
      
              </div></div>
      
            </div>
          </section><!-- End Contact Section -->
                <?php require_once 'footer.html'; ?>  
