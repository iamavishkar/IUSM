function validate()
{
    var enroll=document.getElementById("enroll").innerHTML;
    var password=document.getElementById("password").innerHTML;
    if(enroll==NULL)
    {
        alert= "Enrollment Number cannot be empty";
    }
    else{
        return 0;
    }
    if(password==NULL){
        alert= "Password cannot be empty";
    }
    else{
        return 0;
    }
}