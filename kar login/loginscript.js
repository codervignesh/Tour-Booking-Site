function validation(){
  var name = document.getElementById('name').value;
  var password = document.getElementById('password').value;

  if(name==' '|| password=='')
  {
    alert("All Fiels must be filled");
    return false;
  }
  else if(name.length<6 || name.length>15){
    alert('Username must contain 6-15 characters');
    return false;
  }
  else if(password.length<8 || password.length>15){
    alert("Password must contain 8-15 characters");
    return false;
  }
  else{
    alert("success");
    return true;
  }
}