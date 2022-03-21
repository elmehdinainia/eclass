
var check = false;
function validation(){
  
    var name= document.getElementById('nameid').value;
    let Email = document.getElementById('emailid').value;
    let password = document.getElementById('passwordid').value;
    let confirm_passw = document.getElementById('Confirmpas').value;
    form = document.myForm;

    if (name == ""){
      alert('true chek');
     document.getElementById('nameid').innerHTML="  Please fill the UserName field";
     document.getElementById('nameid').style.color="red";
    //  preventDefault();
    check = true;
     return false;
    } else{

     document.getElementById('nameid').innerHTML="  Validé";
     document.getElementById('nameid').style.color="#0dca4c";



    }
    if ((name.length <=2) || (name.length >= 20) ){
     document.getElementById('nameid').innerHTML ="  user name should be between 2 to 20 characters ";
     document.getElementById('nameid').style.color="red";

     return false;
    }else{
     document.getElementById('nameid').innerHTML="  Validé";
     document.getElementById('nameid').style.color="#0dca4c";

    }
    if (Email == "") {
        document.getElementById('emailid').innerHTML = "  Enter Email ID"
        document.getElementById('emailid').style.color="red";
        return false;
      }else if (Email.indexOf('@') <= 0) {
        document.getElementById('emailid').innerHTML = "   @ Invalid Position"
          document.getElementById('emailid').style.color="red";
        return false;
      }else{
        document.getElementById('emailid').innerHTML="  Validé";
        document.getElementById('emailid').style.color="#0dca4c";
      }
   
   
       if (Password == "") {
        document.getElementById('passwordid').innerHTML="  Please fill the Password field";
        document.getElementById('passwordid').style.color="red";
        return false;
      }else if ((Password.length <=6)  ||  (Password.length >=20)) {
        document.getElementById('passwordid').innerHTML ="  user password should be between 6 to 20 characters "
        document.getElementById('passwordid').style.color="red";
        return false;
      }else{
        document.getElementById('passwordid').innerHTML="  Validé";
        document.getElementById('passwordid').style.color="#0dca4c";
      }
   
   
      if (confirm_passw == "") {
        document.getElementById('Confirmpasswordid').innerHTML ="  Enter ConfirmPassword"
        document.getElementById('Confirmpasswordid').style.color="red";
        return false;
      }else if (password!=confirm_passw) {
        document.getElementById('Confirmpasswordid').innerHTML ="  Password does'nt Match"
        document.getElementById('Confirmpasswordid').style.color="red";
        return false;
      }else{
        document.getElementById('Confirmpasswordid').innerHTML=" ** Validé";
        document.getElementById('Confirmpasswordid').style.color="#0dca4c";
      }
      }
      form.addEventListener( 'submit', (e)=>{
        
        validation();
        if(check === true){
            e.preventDefault();
            
        }
      })