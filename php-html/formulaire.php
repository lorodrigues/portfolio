<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="stylea.css">
<form id="contactform" action="affiche.php" method="GET">
 <form id="regform">
                                <h1 id="register">Formulaire</h1>
                                <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i class="fa fa-shopping-bag"></i></span> <span class="step"><i class="fa fa-car"></i></span> <span class="step"><i class="fa fa-spotify"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> </div>
                                <div class="tab">
                                    <label for>Entrez Votre Nom :  </label for>
                                    <p> <input placeholder="Nom..." oninput="this.className = ''" name="name"></p>
                                </div>
								<div class="tab">
                                    <label for>Entrez Votre Prénom :  </label for>
                                    <p> <input placeholder="Prénom..." oninput="this.className = ''" name="firstname"></p>
                                </div>
                                <div class="tab">
                                    <label for>Entrez Votre adresse mail : </label for>
                                    <p> <input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                                </div>
                                <div class="tab">
                                    <label for>Entrez votre établissement : </label for>
                                    <p><input placeholder="Etablissement..." oninput="this.className = ''" name="etab"></p>
                                </div>
                                <div class="tab">
                                    <label for>Entrez votre ville : </label for>
                                    <p><input placeholder="ville..." oninput="this.className = ''" name="ville"></p>
                                </div>
								<div class="tab">
								 <label for>Entrez votre date de naissance : </label for>
                                <input type="date" id="start" name="date"
								 	value="1999-01-01"
									min="1999-01-01" max="Date()">
									
                                </div>
								<div class="tab">
								 <label for>Entrez votre département : </label for>
								 <SELECT name='departement' >
									</option><option value="75">Paris
									</option><option value="77">Seine et Marne
									</option><option value="78">Yvelines
									</option><option value="91">Essonne
									</option><option value="92">Hauts-de-Seine
									</option><option value="93">Seine-Saint-Denis
									</option><option value="94">Val-de-Marne
									</option><option value="95">Val-D'oise
									</option>                                                              
									</select>
									</SELECT>
                                <div class="tab">
                                    <label for>Votre type d'emploi : </label for>
                                    <input type= "radio" name="emploi"> <label for="scales">Enseignement</label>
                                    <input type= "radio" name="emploi"> <label for="scales"> Education</label>
                                    <input type= "radio" name="emploi"><label for="scales"> Administration</label>
                                </div>
                                <div class="tab">                         
                                   <label for>Vos loisirs favoris : </label for>
                                   <input type= "checkbox" name="loisirs"> <label for="scales">Son-video</label>
                                   <input type= "checkbox" name="loisirs"> <label for="scales">Télévision</label>
								   <input type= "checkbox" name="loisirs"> <label for="scales">Cinéma</label>
								   <input type= "checkbox" name="loisirs"> <label for="scales">Programmation</label>
								   <input type= "checkbox" name="loisirs"> <label for="scales">Sport</label>
								   <input type= "checkbox" name="loisirs"> <label for="scales">Internet</label>
                               
                                   <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
                                
                            </form>
                        </form>
