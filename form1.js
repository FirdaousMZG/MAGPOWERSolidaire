const formulaire= document.getElementById('formulaire')
const Nom= document.getElementById('Nom')
const prenom= document.getElementById('prenom')
const CNI= document.getElementById('CNI')
const date= document.getElementById('Date')
const Situation_Familiale= document.getElementById('Situation_Familiale')
const sexe= document.getElementById('sexe')
const phone= document.getElementById('phone')
const email= document.getElementById('email')
const adress= document.getElementById('adress')
const region= document.getElementById('region')
const Province= document.getElementById('Province')
const Commune= document.getElementById('Commune')
const code= document.getElementById('code')
const travail= document.getElementById('travail')

formulaire.addeventListener('submit',(e)=>{ e.preventDefault();
    checkInputs();
    });
    function checkInputs (){
        // get the values from the inputs
    const formulaireValue = formulaire.value.trim();
    const NomValue = Nom.value.trim();
    const prenomValue = prenom.value.trim();
    const CNIValue = CNI.value.trim();
    const dateeValue = date.value.trim();
    const Situation_FamilialeValue = Situation_Familiale.value.trim();
    const sexeValue = sexe.value.trim();
    const phoneValue = phone.value.trim();
    const emailValue = email.value.trim();
    const adressValue = adress.value.trim();
    const regionValue = region.value.trim();
    const ProvinceValue = Province.value.trim();
    const CommuneValue = Commune.value.trim();
    const codeValue = code.value.trim();
    const travailValue = travail.value.trim();
    }

    if(userformulaireValue =''){
        // show error
        //and error class
        setErrorFor(formulaire, 'formulaire cannot be blank');
        } else{
        //add sucess class
        setSuccessFor(x);
        }
    
        function setError(input, message){
        const formControl = input.parentElement; //.form-control
        const small= formControl.querySelector('small');
        //add error message inside small
        small.innerText = message;
        
        // add error class 
        formControl.className= 'form-control error';
        }
    //-----------------------------------------------------------
    function validateEmail(email) {
        var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        return re.test(email);
      }
      function validate() {
        var $result = $("#result");
        var email = $("#email").val();
        $result.text("");
      
        if (validateEmail(email)) {
          $result.text(email + " est  valide");
          $result.css("color", "blue");
        } else {
          $result.text(email + "  n'est  valide");
          $result.css("color", "red");
        }
        return false;
      }
      $("#validate").on("click", validate);

      function form()                                    
{ 
    var name = document.forms["RegForm"]["Nom"];  
    var name = document.forms["RegForm"]["prenom"]; 
    var name = document.forms["RegForm"]["CNI"]; 
    var name = document.forms["RegForm"]["Date"];              
    var name = document.forms["RegForm"]["Situation_Familiale"]; 
    var name = document.forms["RegForm"]["genre"]; 
    var name = document.forms["RegForm"]["phone"]; 
    var email = document.forms["RegForm"]["Email"];
    var address = document.forms["RegForm"]["adress"];    
    var phone = document.forms["RegForm"]["region"];  
    var what =  document.forms["RegForm"]["Province"];  
    var password = document.forms["RegForm"]["Commune"];  
    var password = document.forms["RegForm"]["code"];  
    var comment = document.forms["RegForm"]["travail"];  





    if (name.value == "")                                  
    { 
        alert("Mettez votre nom."); 
        name.focus(); 
        return false; 
    }  
    if (name.value == "")                                  
    { 
        alert("Mettez votre prenom."); 
        name.focus(); 
        return false; 
    }   
    if (name.value == "")                                  
    { 
        alert("Mettez votre CNI."); 
        name.focus(); 
        return false; 
    }  
    if (name.value == "")                                  
    { 
        alert("Mettez votre Date."); 
        name.focus(); 
        return false; 
    }   
    if (name.value == "")                                  
    { 
        alert("Mettez votre Situation_Familiale."); 
        name.focus(); 
        return false; 
    }  
    if (name.value == "")                                  
    { 
        alert("Mettez votre genre"); 
        name.focus(); 
        return false; 
    } 
    if (name.value == "")                                  
    { 
        alert("Mettez votre phone"); 
        name.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (address.value == "")                               
    { 
        alert("Mettez votre adresse."); 
        address.focus(); 
        return false; 
    }    
    if (phone.value == "")                           
    { 
        alert("Mettez votre region"); 
        phone.focus(); 
        return false; 
    }    
    if (password.value == "")                        
    { 
        alert("Saisissez Province"); 
        password.focus(); 
        return false; 
    }    
    if (what.selectedIndex < 1)                  
    { 
        alert("Mettez votre Commune."); 
        what.focus(); 
        return false; 
    } 
    if (comment.value == "")                  
    { 
        alert("Écrivez votre code"); 
        comment.focus(); 
        return false; 
    } 
    if (comment.value == "")                  
    { 
        alert("Écrivez votre travail"); 
        comment.focus(); 
        return false; 
    } 
    return true; 
}
//PLUSIEUR PAGE DU FORM//
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
}) 