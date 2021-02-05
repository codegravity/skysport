function get_webcam(){
    return '
    <div class="webcam" >      
      <a title="Draklanda" href="http://webcam.areskutan.se/bana275.jpg"   class="lightbox"><img src="http://webcam.areskutan.se/bana275.jpg"  width="268" height="132" border="0" name="campic"  ></a>
    </div> 
    ';	
	}
  
	function get_webcam2(){
    return '
    <div class="webcam" style="margin:0 auto;">
      <a title="Draklanda" href="https://webcam2020.skysport.se/lakelodge.jpg"   class="lightbox">
        <img src="https://webcam2020.skysport.se/lskysport.jpg" alt="Image" width="268"  />
      </a>
   </div> 
   <div class="webcam" style="margin:10px auto;">
      <a title="Draklanda" href="https://webcam2020.skysport.se/draklanda_vindstrut.jpg"   class="lightbox">
        <img src="https://webcam2020.skysport.se/draklanda_vindstrut.jpg" alt="Image" width="268"  />
      </a>
   </div> 
    ';	
	}
  
	function get_webcamWinter(){
    return '
    <div class="webcam" style="margin:0 auto;">
      <a title="Draklanda" href="https://webcam2020.skysport.se/lakelodge.jpg"   class="lightbox">
        <img src="https://webcam2020.skysport.se/lakelodge.jpg" alt="Image" width="268"  />
      </a>
   </div>   
    ';	
	}
	add_shortcode('skysportwebcam', 'get_webcam');
	add_shortcode('skysportwebcam2', 'get_webcam2');
	add_shortcode('skysportwebcamWinter', 'get_webcamwinter');
