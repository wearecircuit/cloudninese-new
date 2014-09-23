var pulse = {
  init: function(){
    pulse.start();
  },
  motion: function(){
    $('#pulse').show().animate({width:'40px', height:'40px', top:0, left:0, opacity:0}, 800, function(){
      $(this).removeAttr('style').hide();
    });
  },
  start: function(){
  	pulseMotion = setInterval(pulse.motion, 2500);
  },
  stop: function(){
  	clearInterval(pulseMotion);
  }
};