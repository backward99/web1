function mousego(){
  $('#gnbsub1').show();
};

// function pain(){
//   fetch('css').then(function(response){
//     response.text().then(function(text){
//       alert(text);
//     })
//   })
// }

function mouseway(){
    $('#gnbsub1').hide();
}

function modesetting(self){
  if(self.value ==='darkmode'){
    document.querySelector('body').style.backgroundColor='black';
    document.querySelector('body').style.color='white';
    self.value = 'whitemode';
  } else {
    $('body').css('backgroundColor', 'white');
    $('body').css('color', 'black');
    self.value = 'darkmode';
  }

}

function submit2(frm){
  frm.action='process.php'; 
  frm.submit(); 
  return true; 
}

function submit3(frm){
  frm.action='complete.php'; 
  frm.submit(); 
  return true; 
}
// let addToDoButton = document.getElementById('plus');
// let toDoContainer = document.getElementById('ListField');
// let toDoContainer2 = document.getElementById('CompletList');
// let inputText = document.getElementById('inputText');
// let addCompletButton = document.getElementById('btComplet');
// let addDeleteButton = document.getElementById('delete');
// let addBackButton = document.getElementById('back');
// let lastSelect = 'none';


// addToDoButton.addEventListener('click', function(){
//   var paragraph = document.createElement('div');
//   paragraph.classList.add("cursor");
//   toDoContainer.appendChild(paragraph);
//   var paragraph2 = document.createElement('li');
//   paragraph2.id = inputText.value;
//   paragraph2.addEventListener('click', clickDiv(inputText.value)); 
//   paragraph2.innerText = inputText.value;
//   paragraph.appendChild(paragraph2);
  
  
  
// })

// function clickDiv(str){
//   lastSelect = str;
//   alert(lastSelect);
// }

// addCompletButton.addEventListener('click', function(){
//   let paragraph = document.getElementById(lastSelect);
//   paragraph.remove();
//   var paragraph2 = document.createElement('div');
//   paragraph2.classList.add("cursor");
//   toDoContainer2.appendChild(paragraph2);
//   var paragraph3 = document.createElement('li');
//   paragraph3.id = inputText.value;
//   paragraph3.addEventListener('click', clickDiv(inputText.value)); 
//   paragraph3.innerText = inputText.value;
//   paragraph2.appendChild(paragraph3);
// })


