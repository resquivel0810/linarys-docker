function validateEmail(email) {
    emailRegex= /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (emailRegex.test(email)){
     return true;
    } else {
     return false;
    }
  }
  function validateDigit(number)
  {
      numberRegex=/^([0-9])*$/;
      if(numberRegex.test(number))
      {
        return true;
      }
      else
      {
        return false;
      }
  }