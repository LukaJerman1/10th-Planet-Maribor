let video = document.getElementById("video")

if(video != null){
  //console.log(video)

  video.playbackRate = 0.75;

  const btn = document.querySelector(".switch-btn");
  const videoConst = document.querySelector(".video-container");

  var spila = true;

  btn.addEventListener("click", function () {
      if (spila == true) {
          videoConst.pause();
          spila = false;
      } else {
          videoConst.play();
          spila = true;
      }
  })

}


  function check() {
    if (document.getElementById('geslo').value == document.getElementById('geslo2').value) {
      document.getElementById('geslo2').style.borderColor = 'green';
      document.getElementById('sporocilo').innerHTML = 'Ujemanje !';
      document.getElementById('sporocilo').style.color = "green";
    } else {
      document.getElementById('geslo2').style.borderColor = 'red';
      document.getElementById('sporocilo').innerHTML = 'Gesli se ne ujemata !';
      document.getElementById('sporocilo').style.color = "red";
    }
  }

  if(document.getElementById('geslo') != null){

  $('#geslo2').blur(function() {

    
  var pass = $('input[name=geslo]').val();
  var repass = $('input[name=geslo2]').val();


    if(($('input[name=geslo]').val().length == 0) || ($('input[name=geslo2]').val().length == 0)){
        $('#geslo').addClass('has-error');

    }else if (pass != repass) {
        $('#geslo').addClass('has-error');
        $('#geslo2').addClass('has-error');

    }else {
        $('#geslo').removeClass().addClass('has-success');
        $('#geslo2').removeClass().addClass('has-success');
    
      }

      $('.has-error').css('background-color', 'crimson');
      $('.has-success').css('background-color', 'DarkSeaGreen');

  });

}


  
  function odkrijZakrijGeslo(){
    let x = document.getElementById("geslo");
    let y = document.getElementById("geslo2");
    
    if (x.type === "password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password";
    }
  }

/*
const elm = document.querySelector('ul');
elm.addEventListener('click', (el) => {
  const elActive = elm.querySelector('.active');
  if (elActive) {
    elActive.removeAttribute('class');
  }
  el.target.setAttribute('class', 'active');
});*/