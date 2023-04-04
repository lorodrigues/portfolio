<?php  require_once 'header.html'; ?>
    <div class="container">
        <section class="page-section" id="">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-heading">Vos coordonées</h1>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form action="">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <select name="" id="" class="form-select">
                                        <option value="">...</option>
                                        <option value="">Mr</option>
                                        <option value="">Mme</option>
                                        <option value="">Mlle</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-9">
                                    <input type="text" class="form-control" placeholder="Prénom..">
                                </div>
                            </div>
                            <br>
                                <div class="form-group ">
                                    <input type="text" class="form-control" placeholder="Nom..">
                                </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Adresse..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ville..">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Code postal..">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email..">
                            </div>
                        </div>
                    </div>    
                </form>
        </section>
        <hr>
        <section class="page-section row text-center" id="services">
                <div class="col-md-6 ">
                    <h2 class="section-heading ">Le montant</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                        <form action="">
                            <button type="button" class="btn bouton btn-lg btn-outline-success">10 € </button>
                            <button type="button" class="btn bouton btn-lg btn-outline-success">20 € </button>
                            <button type="button" class="btn bouton btn-lg btn-outline-success">50 € </button>
                            <button type="button" class="btn bouton btn-lg btn-outline-success">100 €</button>
                        </form>
    <br> 
    <br> 
                    <div>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Montant Libre..">
                            </div>
                        </form>
                    </div> 
                        
                </div>
                       
    
                <div class="col-md-6 " style="border-left: 1px solid;">

                            <h2 class="section-heading ">Le réglement</h2>
                            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                        
                        <div class="row text-center">
                            <div class="col-md-6">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-success"></i>
                                    <i class="fas fa-brands fa-stack-1x fa-paypal" style='color: white'></i> 
                                </span><br>
                                <button type="button" class="btn btn-xl buton2 btn-outline-success my-3">Paypal</button>
                               
                            </div>
                            <div class="col-md-6">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-success"></i>
                                    <i class="fa-solid fa-stack-1x fa-credit-card" style='color: white'></i> 
                                </span>
                                <button type="button" class="btn btn-xl buton2 btn-outline-success my-3">Carte Bancaire</button>
                            </div>
                            <br>
                        <div class="">
                            <button type="button" class="btn btn-lg btn-success"> Validez</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </div>
<?php  require_once 'footer.html'; ?>