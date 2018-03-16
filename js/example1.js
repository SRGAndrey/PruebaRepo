function validateFields() {

    var name = document.getElementById('txtName');
    var age = document.getElementById('txtAge');
    var wage = document.getElementById('txtWage');
     document.getElementById('msgErrorName').style.visibility = "hidden";
    document.getElementById('msgErrorAge').style.visibility = "hidden";
    document.getElementById('msgErrorWage').style.visibility = "hidden";
    
    if (name.value.length < 2) {
        document.getElementById('msgErrorName').style.visibility = "visible";
        return false;
    } else if(age.value.length < 2){
        document.getElementById('msgErrorAge').style.visibility = "visible";
        return false;
    }else if(wage.value.length < 2){
        document.getElementById('msgErrorWage').style.visibility = "visible";
        return false;
    }
    return true;

}