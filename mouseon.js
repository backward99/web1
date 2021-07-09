function mousego(){
  $('#gnbsub1').show();
};


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
