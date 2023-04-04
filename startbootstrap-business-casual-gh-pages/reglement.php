<?php require_once 'header.html'; ?>  
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
          <span class="site-heading-upper-lower  mb-3">Règlement Général sur la Protection des Données</span>
      </h1>
        <section id="contact" class="contact">
            <div class=" cta info-boxs">   
            <div class=" container container2">
                               
               <div class="cta-inner " >   
            
              <div class="row" data-aos="fade-up">
                
      
              <div class="row" data-aos="fade-up">
      
                
      
                <div class="col-lg-12">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom..." required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre Prénom..." required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Adresse mail (utilisée uniquement pour confirmer les infos à effacer et vous répondre) :" required>
                      </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="objet" id="objet" placeholder="Téléphone (utilisé uniquement pour confirmer les infos à effacer) :" required>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Votre message a bien été envoyé. Merci.</div>
                    </div>
                    <div class="text-center" style="color: rgba(230, 167, 86, 0.9)"><button type="submit">Envoyer</button></div>
                  </form>
                </div>
      
              </div></div>
      
            </div>
          </section><!-- End Contact Section -->
                <?php require_once 'footer.html'; ?>  
