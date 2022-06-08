<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>S'inscrire</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
  <!DOCTYPE html>
  <!-- Created By CodingNepal -->
  <html lang="fr" dir="ltr">
     <head>
          <meta charset="utf-8">
          
          <!--====== Title ======-->
          <title>S'inscrire</title>
          
          <meta name="description" content="">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
      
          <!--====== MAG POWER Solidaire Icon ======-->
          <link rel="shortcut icon" href="Image/Icone.png" type="image/png">
          
          <!--====== Style CSS ======-->
          <link rel="stylesheet" href="css/style.css">
      
          <!--====== Style Js ======-->
          <script src="https://kit.fontawesome.com/b431b486e2.js" ></script>
          <scrip src="js/jquery-3.4.1.min.js"></scrip>
          <scrip src="js/app.js"></scrip>
          <scrip src="js/form.js"></scrip>
        
     </head>
     <body>
      <header class="header">
        <div class="selected-lang">
            <img src="Image/france-svgrepo-com.svg">
            <span class="lang-txt"><a href="S'inscrire.html" class="de">FR</a></span> 
        </div>
        <div class="selected-lang">
            <img src="Image/morocco-svgrepo-com.svg">
            <span class="lang-txt"></span><a href="التسجيل.html" classe="de">AR</a>
           
        </div>
        <div class="selected-lang">
        <i class="fa-solid fa-phone"></i>
        <span class="lang-txt"></span> <h5>+212 522 321 321</h5></div>
        </div>
        <div class="selected-lang">
        <i class="fa-light fa-envelope"></i>
        <span class="lang-txt"></span> <h5>contact@magpower.ma</h5></div>
        </div>
        </header>
      
        <nav>
           <div class="logo">
              <img class="logo" src="image/logo.png" alt="MAG POWER Solidaire" width="150">
           </div>
           <input type="checkbox" id="click">
           <label for="click" class="menu-btn">
           <i class="fas fa-bars"></i>
           </label>
           <ul>
              <li><a href="Accueil.html">Accueil</a></li>
              <li><a href="Programme.html">Programme</a></li>
              <li><a  href="Pack Solidaire.html">Pack Solidaire</a></li>
              <li><a href="Espace Entrepreneur.html">Espace Entrepreneur</a></li>
              <li><a class="active" href="S'inscrire.html">S'inscrire</a></li>
           </ul>
        </nav>
      
  
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="wrapper">
            <div class="title">
                Formulaire d’inscription 
            </div>
        <form id="msform" name="formulaire" method="post" action="S'incrire.php" action="customers.services.2200@gmail.com
        " onsubmit="MAG_POWER_SITE()" data-multi-step class="multi-step-form">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Etape 1</li>
                <li>Etape 2</li>
                <li>Etape 3 </li>
            </ul>
            <!-- fieldsets -->
         
            <fieldset>
                <h2 class="fs-title">Etape 1</h2>
                <h3 class="fs-subtitle">Informations Personnelles</h3>
                <div class="inputfield">
                    <label>Nom</label>
                    <input type="text" class="input" id="Nom" name="firstName" for="firstName" required>
                 </div>  
                  <div class="inputfield">
                    <label>Prénom</label>
                    <input type="text" class="input" id="prenom" name="lastName" required>
                 </div>  
                 <div class="inputfield">
                  <label>CNI</label>
                  <input type="text" class="input" id="CNI" name="CNI" required>
               </div> 
               <div class="inputfield">
                  <label>Date de naissance</label>
                  <input type="date" class="input" id="date" name="Date" required>
               </div> 
               <div class="inputfield">
                <label>Situation Familiale</label>
                <div class="custom_select" id="Situation_Familiale" name="Situation_Familiale">
                  <select>
                    <option value="">Sélectionner </option>
                    <option value="">Celibataire</option>
                    <option value="">Marie(e)</option>
                    <option value="">Divorce(e)</option>
                    <option value="">Veuf(e)</option>
  
                  </select>
                </div> </div>
                <input type="button" name="next" class="next action-button" value="suivant"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Etape 2 </h2>
                <h3 class="fs-subtitle">Contact </h3>
                <div class="inputfield">
                    <label>Genre</label>
                    <div class="custom_select" id="genre" name="genre">
                      <select>
                        <option value="">Sélectionner </option>
                        <option value="male"> Homme</option>
                        <option value="female">Femme</option>
                      </select>
                    </div>
                 </div> 
                 <div class="inputfield">
                  <label>Téléphone</label>
                  <input type="telephone"class="input" id="phone" name="phone" type="tel" required>
               </div> 
              <div class="inputfield">
                  <label>Email</label>
                  <input type="email" class="input" id="email" name="email" required>
               </div> 
               <div class="inputfield">
                <label>Adresse </label>
                <textarea class="textarea" id="adress" name="adress" required></textarea>
             </div> 
            <div class="inputfield">
                <label>Région</label>
                <div class="custom_select" id="region" name="region">
                    <select>
                        <option value="">Sélectionner </option>
                        <option value=""> Tanger-Tétouan-Al Hoceima </option>
                        <option value="">L'Oriental </option>
                        <option value=""> Fès-Meknès </option>
                        <option value="">Beni Mellal-Khénifra  </option>
                        <option value=""> Rabat-Salé-Kénitra  </option>
                        <option value="">Casablanca-Settat </option>
                        <option value=""> Marrakech-Safi </option>
                        <option value="">Drâa-Tafilalet  </option>
                        <option value=""> Souss-Massa  </option>
                        <option value="">Guelmim-Oued Noun  </option>
                        <option value="">Laâyoune-Sakia El Hamra   </option>
                        <option value="">Dakhla-Oued Ed Dahab </option>
                      </select>
                </div>
             </div> 
             <div class="inputfield">
                <label>Province / Préfecture</label>
                <div class="custom_select" id="Province" name="Province">
            
                    <select>
                            <option value="">Sélectionner </option>
                            <option value=""> Préfecture de Tanger-Assilah</option>
                            <option value="">Préfecture de M'diq-Fnideq</option>
                            <option value="">Province de Tétouan</option>
                            <option value="">Province de Fahs-Anjra</option>
                            <option value="">Province de Larache</option>
                            <option value="">Province d'Al Hoceïma</option>
                            <option value="">Province de Chefchaouen</option>
                            <option value="">Province d'Ouezzane</option>
                            <option value="">Préfecture d'Oujda-Angad</option>
                            <option value="">Province de Nador</option>
                            <option value="">Province de Driouch</option>
                            <option value="">Province de Jerada</option>
                            <option value="">Province de Berkane</option>
                            <option value="">Province de Taourirt</option>
                            <option value="">Province de Guercif</option>
                            <option value="">Province de Figuig</option>
                            <option value="">Préfecture de Fès</option>
                            <option value="">Préfecture de Meknès</option>
                            <option value="">Province d’El Hajeb</option>
                            <option value="">Province d’Ifrane</option>
                            <option value="">Province de Moulay Yaâcoub</option>
                            <option value="">Province de Séfrou</option>
                            <option value="">Province de Boulemane</option>
                            <option value="">Province de Taounate</option>
                            <option value="">Province de Taza</option>
                            <option value="">Préfecture de Rabat</option>
                            <option value="">Préfecture de Salé</option>
                            <option value="">Préfecture de Skhirate-Témara</option>
                            <option value="">Province de Kénitra</option>
                            <option value="">Province de Khémisset</option>
                            <option value="">Province de Sidi Kacem</option>
                            <option value="">Province de Sidi Slimane</option>
                            <option value="">Province de Béni-Mellal</option>
                            <option value="">Province d'Azilal</option>
                            <option value="">Province de Fquih Ben Salah</option>
                            <option value="">Province de Khénifra</option>
                            <option value="">Province de Khouribga</option>
                            <option value="">Préfecture de Casablanca</option>
                            <option value="">Préfecture de Mohammédia</option>
                            <option value="">Province d'El Jadida</option>
                            <option value="">Province de Nouaceur</option>
                            <option value="">Province de Médiouna</option>
                            <option value="">Province de Benslimane</option>
                            <option value="">Province de Berrechid</option>
                            <option value="">Province de Settat</option>
                            <option value="">Province de Sidi Bennour</option>
                            <option value="">Préfecture de Marrakech</option>
                            <option value="">Province de Chichaoua</option>
                            <option value="">Province d'Al Haouz</option>
                            <option value="">Province d'El Kelaâ des Sraghna</option>
                            <option value="">Province d'Essaouira</option>
                            <option value="">Province de Rehamna</option>
                            <option value="">Province de Safi</option>
                            <option value="">Province de Youssoufia</option>
                            <option value="">Province d'Errachidia</option>
                            <option value="">Province de Ouarzazate</option>
                            <option value="">Province de Midelt</option>
                            <option value="">Province de Tinghir</option>
                            <option value="">Province de Zagora</option>
                            <option value="">Préfecture d'Agadir Ida-Outanane</option>
                            <option value="">Préfecture d'Inezgane-Aït Melloul</option>
                            <option value="">Province de Chtouka-Aït Baha</option>
                            <option value="">Province de Taroudant</option>
                            <option value="">Province de Tiznit</option>
                            <option value="">Province de Tata</option>
                            <option value="">Province de Guelmim</option>
                            <option value="">Province d'Assa-Zag</option>
                            <option value="">Province de Tan-Tan</option>
                            <option value="">Province de Sidi Ifni</option>
                            <option value="">Province de Laâyoune</option>
                            <option value="">Province de Boujdour</option>
                            <option value="">Province de Tarfaya</option>
                            <option value="">Province d'Es-Semara</option>
                            <option value="">Province d'Oued Ed Dahab</option>
                            <option value="">Province d'Aousserd</option>
                          </select>
                </div>
             </div> 
             <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
             <input type="button" name="next" class="next action-button" value="suivant"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Etape 3</h2>
                <h3 class="fs-subtitle">Adresse</h3>
                <div class="inputfield">
                    <label>Commune</label>
                    <div class="custom_select" id="Commune" name="Commune">
                        <select>
                            <option value="">Sélectionner </option>
                            <option value="">Sélectionner </option>
                            <option value=""> Préfecture de Tanger-Assilah</option>
                            <option value="">Préfecture de M'diq-Fnideq</option>
                            <option value="">Province de Tétouan</option>
                            <option value="">Province de Fahs-Anjra</option>
                            <option value="">Province de Larache</option>
                            <option value="">Province d'Al Hoceïma</option>
                            <option value="">Province de Chefchaouen</option>
                            <option value="">Province d'Ouezzane</option>
                            <option value="">Préfecture d'Oujda-Angad</option>
                            <option value="">Province de Nador</option>
                            <option value="">Province de Driouch</option>
                            <option value="">Province de Jerada</option>
                            <option value="">Province de Berkane</option>
                            <option value="">Province de Taourirt</option>
                            <option value="">Province de Guercif</option>
                            <option value="">Province de Figuig</option>
                            <option value="">Préfecture de Fès</option>
                            <option value="">Préfecture de Meknès</option>
                            <option value="">Province d’El Hajeb</option>
                            <option value="">Province d’Ifrane</option>
                            <option value="">Province de Moulay Yaâcoub</option>
                            <option value="">Province de Séfrou</option>
                            <option value="">Province de Boulemane</option>
                            <option value="">Province de Taounate</option>
                            <option value="">Province de Taza</option>
                            <option value="">Préfecture de Rabat</option>
                            <option value="">Préfecture de Salé</option>
                            <option value="">Préfecture de Skhirate-Témara</option>
                            <option value="">Province de Kénitra</option>
                            <option value="">Province de Khémisset</option>
                            <option value="">Province de Sidi Kacem</option>
                            <option value="">Province de Sidi Slimane</option>
                            <option value="">Province de Béni-Mellal</option>
                            <option value="">Province d'Azilal</option>
                            <option value="">Province de Fquih Ben Salah</option>
                            <option value="">Province de Khénifra</option>
                            <option value="">Province de Khouribga</option>
                            <option value="">Préfecture de Casablanca</option>
                            <option value="">Préfecture de Mohammédia</option>
                            <option value="">Province d'El Jadida</option>
                            <option value="">Province de Nouaceur</option>
                            <option value="">Province de Médiouna</option>
                            <option value="">Province de Benslimane</option>
                            <option value="">Province de Berrechid</option>
                            <option value="">Province de Settat</option>
                            <option value="">Province de Sidi Bennour</option>
                            <option value="">Préfecture de Marrakech</option>
                            <option value="">Province de Chichaoua</option>
                            <option value="">Province d'Al Haouz</option>
                            <option value="">Province d'El Kelaâ des Sraghna</option>
                            <option value="">Province d'Essaouira</option>
                            <option value="">Province de Rehamna</option>
                            <option value="">Province de Safi</option>
                            <option value="">Province de Youssoufia</option>
                            <option value="">Province d'Errachidia</option>
                            <option value="">Province de Ouarzazate</option>
                            <option value="">Province de Midelt</option>
                            <option value="">Province de Tinghir</option>
                            <option value="">Province de Zagora</option>
                            <option value="">Préfecture d'Agadir Ida-Outanane</option>
                            <option value="">Préfecture d'Inezgane-Aït Melloul</option>
                            <option value="">Province de Chtouka-Aït Baha</option>
                            <option value="">Province de Taroudant</option>
                            <option value="">Province de Tiznit</option>
                            <option value="">Province de Tata</option>
                            <option value="">Province de Guelmim</option>
                            <option value="">Province d'Assa-Zag</option>
                            <option value="">Province de Tan-Tan</option>
                            <option value="">Province de Sidi Ifni</option>
                            <option value="">Province de Laâyoune</option>
                            <option value="">Province de Boujdour</option>
                            <option value="">Province de Tarfaya</option>
                            <option value="">Province d'Es-Semara</option>
                            <option value="">Province d'Oued Ed Dahab</option>
                            <option value="">Province d'Aousserd</option>
                           
                            
                          </select>
                        </div>
                        
                 </div> 
                  <div class="inputfield">
                      <label> Code Postal</label>
                      <input type="text" class="input" id="code" name="code" required>
                   </div> 
                   <div class="inputfield">
                    <label>Niveau Scolaire</label>
                    <div class="custom_select" id="scolaire" name="Scolaire">
                        <select>
                            <option value="">Sélectionner </option>
                            <option value="">-Bac </option>
                            <option value="">Bac</option>
                            <option value="">+Bac</option>
                
                          </select>
                        </div>
                        
                 </div> 
                   
                 <div class="inputfield">
                    <label>Etes-vous?</label>
                    <div class="custom_select" id="travail" name="travail" >
                        <select>
                            <option value="">Sélectionner </option>
                            <option value="">en chômage</option>
                            <option value=""> à la recherche d’emploi</option>
                          </select>
                        </div> </div>
                  <div class="inputfield terms">
                      <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark" id="conditiont"></span>
                      </label>
                      <p>j'ai lu et j'accepte les<a href=""> conditions générales.</a></p>
                   </div> 
                  
                    <div class="captcha-area">
                      <div class="captcha-img">
                        <img src="image/captcha-bg.png" alt="Captch Background">
                        <span class="captcha"></span>
                      </div>
                      <button class="reload-btn"><i class="fas fa-redo-alt"></i></button>
                    </div>
                    <div class="input-area">
                      <input type="text" placeholder="Enter captcha" maxlength="6" spellcheck="false" required>
                      <button class="check-btn">Verifier</button>
                    </div>
                    <div class="status-text"></div>
                 
                 
        
                <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
                <input type="submit" name="Enregistrer" class="submit action-button" value="Enregistrer"/>
            </fieldset> </div>
        </form>
        
      
    </div>
</div> </div>
<script src="js/Captcha.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="js/script.js"></script>

<a href="#" class="back-to-top"><i class="fa-solid fa-angles-up"></i></a>
<!-- footer de la page -->
<footer class="footer">
  
             
      
  
  <p class="Copyright">© Tous droits réservés MAG POWER 2020 </p>
</div>

</footer>

    </footer>
     <div class="Lang-bas">
    <div class="selected-lang1">
       
        <span class="lang-txt"><a href="S'inscrire.html" class="de">Français</a></span> 
    </div>
   
    <div class="selected-lang1">
      
        <span class="lang-txt"></span><a href="التسجيل.html" classe="de">العربية</a>
    </div>
    </div>
</footer>


 
</body>
</html>
