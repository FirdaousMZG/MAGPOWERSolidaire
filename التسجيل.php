
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="fr" dir="ltr">
   <head>
        <meta charset="utf-8">
        
        <!--====== Title ======-->
        <title>MAG POWER Solidaire- التسجيل</title>
        
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--====== MAG POWER Solidaire Icon ======-->
        <link rel="shortcut icon" href="Image/Icone.png" type="image/png">
        
        <!--====== Style CSS ======-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/ARABEstyle.CSS">
    
        <!--====== Style Js ======-->
        <script src="https://kit.fontawesome.com/b431b486e2.js" ></script>
        <scrip src="js/jquery-3.4.1.min.js"></scrip>
        <scrip src="menu.js"></scrip>
      
   </head>
   <body>
      
    <div class="selected-lang">
        <img src="Image/france-svgrepo-com.svg">
        <span class="lang-txt"><a href="S'inscrire.html" class="de">FR</a></span> 
    </div>
    <div class="selected-lang">
        <img src="Image/morocco-svgrepo-com.svg">
        <span class="lang-txt"></span><a href="التسجيل.html"class="de">AR</a>
    </div>
    
      <nav>
         <div class="logo">
            <img class="logo" src="image/logo.png" alt="MAG POWER Solidaire" width="150">
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a  href="الرئيسي.html">الرئيسي</a></li>
            <li><a href="البرنامح.html">البرنامج</a></li>
            <li><a  href="حزمة-التضامن.html">حزمة التضامن</a></li>
            <li><a href="فضاء المقاول.html">فضاء المقاول</a></li>
            <li><a class="active" href="التسجيل.html">التسجيل</a></li>
         </ul>
      </nav>
    


    <div class="wrapper">
        <div class="title">
            استمارة التسجيل         
        </div>
        <form id="formulaire" name="formulaire" method="post" action="recup_donnees.php">
        <div class="form">
           <div class="inputfield">
              <label>النسب</label>
              <input type="text" class="input" id="Nom">
           </div>  
            <div class="inputfield">
              <label>الاسم</label>
              <input type="text" class="input" id="prenom">
           </div>  
           <div class="inputfield">
            <label>رقم البطاقة الوطنية</label>
            <input type="text" class="input" id="CNI">
         </div> 
         <div class="inputfield">
            <label>تاريخ الازدياد</label>
            <input type="date" class="input" id="Date">
         </div> 
           <div class="inputfield">
              <label>الحالة العائلية</label>
              <div class="custom_select" id="Situation_Familiale">
                <select>
                  <option value="">اختيار </option>
                  <option value="">عازب(ة)</option>
                  <option value="">متزوج(ة)</option>
                  <option value="">مطلق(ة)</option>
                  <option value="">أرمل(ة)</option>

                </select>
              </div>
           </div>  
        
            <div class="inputfield">
              <label>Sexe</label>
              <div class="custom_select" id="sexe">
                <select>
                  <option value="">الجنس </option>
                  <option value="male"> رجل </option>
                  <option value="female">امرأة</option>
                </select>
              </div>
           </div> 
           <div class="inputfield">
            <label>رقم الهاتف</label>
            <input type="telephone"class="input" id="phone">
         </div> 
        <div class="inputfield">
            <label>البريد الاكتروني</label>
            <input type="email" class="input" id="email">
         </div> 
        <div class="inputfield">
            <label>العنوان </label>
            <textarea class="textarea" id="adress"></textarea>
         </div> 
        <div class="inputfield">
            <label>الجهة</label>
            <div class="custom_select" id="region">
                <select>
                    <option value="">اختيار </option>
                    <option value=""> جهة طنجة تطوان الحسيمة </option>
                    <option value="">جهة الشرق </option>
                    <option value=""> جهة فاس مكناس </option>
                    <option value="">جهة بني ملال خنيفرة </option>
                    <option value=""> جهة الرباط سلا القنيطرة </option>
                    <option value="">جهة الدار البيضاء سطات </option>
                    <option value=""> جهة مراكش آسفي </option>
                    <option value="">جهة درعة تافيلالت  </option>
                    <option value=""> جهة سوس ماسة</option>
                    <option value="">جهة كلميم واد نون </option>
                    <option value="">جهة العيون الساقية الحمراء   </option>
                    <option value="">جهة الداخلة وادي الذهب </option>
                  </select>
            </div>
         </div> 
         <div class="inputfield">
            <label>المقاطعة / المحافظة</label>
            <div class="custom_select" id="Province">
        
                <select>
                        <option value="">اختيار </option>
                        <option value="">مقاطعة طنجة - أصيلة</option>
                        <option value="">محافظة المضيق الفنيدق</option>
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
                        <option value="">عمالة الدار البيضاء - أنفا</option>
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
            <label>Commune</label>
            <div class="custom_select" id="Commune">
                <select>
                    <option value="">اختيار </option>
                    <option value=""> </option>
                    <option value=""></option>
                    <option value=""> </option>
                    <option value=""> </option>
                    <option value=""> </option>
                    <option value=""> </option>
                    <option value=""> </option>
                   
                    
                  </select>
                </div>
                
         </div> 
          <div class="inputfield">
              <label> الرمز البريدي</label>
              <input type="text" class="input" id="code">
           </div> 
           <div class="inputfield">
            <label>المستوى الدراسي</label>
            <div class="custom_select" id="scolaire">
                <select>
                    <option value="">اختيار </option>
                    <option value="">-الباكلوريا </option>
                    <option value="">الباكلوريا</option>
                    <option value="">+الباكلوريا</option>
        
                  </select>
                </div>
                
         </div> 
           
         <div class="inputfield">
            <label>هل أنت؟</label>
            <div class="custom_select" id="travail">
                <select>
                     <option value="">اختيار </option>    
                    <option value="">عاطل عن العمل</option>
                    <option value=""> تبحث عن عمل </option>
                  </select>
         
          <div class="inputfield terms">
              <label class="check">
                <input type="checkbox">
                <span class="checkmark" id="conditiont"></span>
              </label>
              <p>لقد قرأت وقبلت<a href="">   الشروط العامة.</a></p>
           </div> 
          <div class="inputfield">
            <input type="submit" value="التسجيل" class="btn">
          </div>
        </div>
    </div>	
         

</div> 
</form>
</div> 


<a href="#" class="back-to-top"><i class="fa-solid fa-angles-up"></i></a>
<!-- footer de la page -->
<footer class="footer">
  
  <div class="container">
  
      <div class="row">
          <div class="footer-col">
              
              <img class="logo" src="image/logo1.png" alt="MAG POWER Solidaire" width="200">   
          </div>
          <div class="footer-col">
              <h4>MAG POWER SARL</h4>
              Bd Abou Bakr El Kadiri,<br> Lotissement Amine N° 156, <br>Etage 3, Sidi Maarouf<br>
              Casablanca MAROC

          </div>
          <div class="footer-col">
              <h4>Contactez-nous !</h4>
              <em>Tél :</em> +212 522 321 321
              <br><em>Portable:</em> +212 679 313 814
              <br><em>Email : </em>contact@magpower.ma
              <br><em>Site Web : </em> <a class="web" href="http://www.magpower.ma/" target="_blank">http://www.magpower.ma/</a>
              
          

          </div>
          <div class="footer-col">
              <form><i class="fa-solid fa-envelope"></i>
                  <input type="email" placeholder="Inscrivez-vous" required>
                  <botton type="submit"><i class="fa-solid fa-arrow-right-to-bracket"></i></botton>
              </form>
              
              <h4>suivez-nous!</h4>
              <div class="social-links">
                  <a href="https://web.facebook.com/MAG-POWER-105169827937815/"target="_blank"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/magpower720/?igshid=10zpf3ca117hp"><i class="fab fa-instagram"></i></a>
                  <a href="https://ma.linkedin.com/in/mag-power-2285561b2?trk=public_post_share-update_actor-text"target="_blank"><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
      </div>
  </div>
  
  <p class="Copyright">© Copyright </p>
</div>
</footer>

  </footer>
  </body>



</html>

       </div>
       <div>
         
       </div>
    </div>
 </body>
</html>






   <?php
if(isset($_POST['btn']))
{
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$CNI = $_POST['CNI'];
$Date = $_POST['Date'];
$Situation_Familiale = $_POST['Situation_Familiale'];
$sexe = $_POST['sexe'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$region = $_POST['region'];
$Province = $_POST['Province'];
$Commune = $_POST['Commune'];
$code = $_POST['code'];
$Scolaire = $_POST['Scolaire'];
$travail = $_POST['travail'];


// Database connection
$conn = new mysqli('localhost','root','','test');
/* Cette xpression correspand les écritures Arabe*/
$lang = array(
    PDO::MYSQL_ATTR_INIT_COMMANDS => "SET NAMES UTF8",

);

    try {
        $db= new PDO($firstName, $lastName, $CNI, $Date, $Situation_Familiale, $sexe, $phone, $email, $adress, $region, $Province, $Commune, $code, $Scolaire, $travail, $lang)
        $db= setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "ثم"
    }
    catch(PDOException $e){
        ech "حدث خطأ" .$e->getline();
    }




/*if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {*/
    $stmt = $conn->prepare("insert into ambassadeurs_mag_power_solidaire(firstName, lastName,  CNI, Date, Situation_Familiale, 'sexe, phone, 'email, adress, region, Province, Commune, code, Scolaire, travail) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->bind_param("ssssssisssssiss", $firstName, $lastName, $CNI, $Date, $Situation_Familiale, $sexe, $phone, $email, $adress, $region, $Province, $Commune, $code, $Scolaire, $travail );
     $stmt->execute();
    echo "Inscription réussie...";
    
/*}*/}
?>