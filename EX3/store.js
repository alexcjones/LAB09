function  validate(){
    
    let user=document.getElementById("user");
    let pass=document.getElementById("pass");
    let q1=document.getElementById("quantity1");
    let q2=document.getElementById("quantity2");
    let q3=document.getElementById("quantity3");

    let checkrad = false;

    let radioObj = document.store.ship;

    for(let i=0; i<radioObj.length; i++) {
        if( radioObj[i].checked ) {
            checkrad=true;
        }
    }
    let checkq = false;
    if (q1.value>=0 && q2.value>=0 && q3.value>=0 && (q1.value+q2.value+q3.value >0 )){
        checkq=true;
    }
    let checkpass= false;
    if (pass.value!=""){
        checkpass=true;
    }
    let checkem = false;
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(user.value))
    {
     checkem = true
    }
    
   
    if ( checkq && checkpass && checkrad && checkem ){
        
        return true
    }
    else{
        alert("Invalid Input try again");
        
        return false;
    }
}