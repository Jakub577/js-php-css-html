function SprawdzanieHasloCzyJestTakieSame() {
  let PierwszyInput = document.getElementById('haslo1').value;
  let login = document.getElementById('logi').value
  let DrugiInput =  document.getElementById('haslo2').value;
  if(PierwszyInput == DrugiInput && DrugiInput.length  >  4 && login != 0){
   let wynik = document.getElementById('yoo') ;
   wynik.innerHTML = 'Wszystko sie zgadza!';
    document.getElementById("formularz").setAttribute("action", "formularz.php"); 
    document.getElementById('zajer').innerHTML = 'Napewno?'

  }else{
   let nazwa1= document.getElementById('yoo');
   nazwa1.setAttribute('class','wybbb')
   nazwa1.innerHTML = 'Hasło musi zawierać:<br>-Co najmniej 4 znaki <br> -Hasła muszą być takie same<br>-Okno login musi byc wypełnione';
  
  }

}



  const tworzenieeee = document.createAttribute('p');
  tworzenieeee.innerText = 'nie wiem'
  document.getElementById('hohohoh').appendChild(tworzenieeee);




/*  let tworznieparagrafu = document.createElement('p')
    tworznieparagrafu.setAttribute('style','color:yellow')
    tworznieparagrafu.innerText ='Hasła Są takie same!
    
    */


    
 