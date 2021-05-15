<?php
require 'header.php';
 ?>
 <link rel="stylesheet" href="../assests/css/magnific-popup.css">
    <style>/* padding-bottom and top for image */
.mfp-no-margins img.mfp-img {
  padding: 0;
}
/* position of shadow behind the image */
.mfp-no-margins .mfp-figure:after {
  top: 0;
  bottom: 0;
}
/* padding for main container */
.mfp-no-margins .mfp-container {
  padding: 0;
}
</style>
 <div class="container">
  <div class="jumbotron">
    <div class="page-header text-center">
  <h2>Our History</h2>
  <p>FOUNDED IN THE YEAR 1902,HOGWARTS HIGH SCHOOL IS THE OLDEST AND BEST IN THE LAND</P>
</div>
  <a class="image-popup-no-margins" href="http://ypsigleanings.aadl.org/files/photos/Union%20School%20Photo%206.jpg" title="When our school was founded">
  	<style>
    .img-responsive {
    max-width: 75%;
    margin-left: auto;
    margin-right: auto ;

    }
    .para1  {
      padding-top: 20px;
    }
    .para2  {
      padding-top: 50px;
    }
    .para3 {
      padding-top: 50px;
    }
    .para4 {
      padding-top: 50px;
    }
    .para5 {


    padding-top: 50px;
  }

    </style><img align="center" class="img-responsive" src="http://ypsigleanings.aadl.org/files/photos/Union%20School%20Photo%206.jpg"  >
  </a>
<div class="para1">
  <p>Hogwarts High school was initially started in 1902 around the present Nairobi Railways club as a
     European school to serve the families of the I.B.E.A
      Company and later the white settler community.
       Out of the foresight and wisdom of the late Lord Delamere
        in proposing the building a senior Boys school (now Nairobi Primary),
         and the support of the then governor, Sir Edward Grigg, the railway reserve
          grounds near Kabete home for the school.
</p>
</div>
<div class="para2">
  <p>In 1928, Sir Herbart Baker was commissioned to plan a school similar
     to Winchester school, attended by both Lord Delamere and the
      then Governor-Kenya colony, in Winchester, an old town in
      Southern England dating from about 516AD, after the Romans
      left England. It was a major administrative and silver minting
       center, and hence, a Saxon Capital of England form 1066AD.
     </p>
   </div>
   <div class="para3">
     <p>
       The school named after this town was originally
        founded to educate boy choristers. It was later
         re-founded in 1541 after King Henry VIII had destroyed
         the monasteries. Today the school is one
         of the leading independent schools in England.
          Captain Nicholson (recently retired form the loyal
           navy college, Dartmouth) designed the uniform and
            prepared school rules and regulations to match the
             discipline of the navy tradition. In the meantime Mrs.
              Nicholson planned the gardens.
            </p>
          </div>
          <div class="para4">
            <p>
              On the 24th september 1929 the foundation
              stone was laid by his Excellency Lt. Col.
               Sir Edward Grigg K.C.M K.C.V.O, D.S.O, M.C,
                Governor of Kenya colony, for a school with a
                 capacity of 80 boys. Interestingly under the
                 stone were preserved a copy of the day
            </p>
          </div>
          <div class=" para5 text-center">
            <h3>See the pictures</h3>
          </div>
          <div class="popup-gallery text-center">
	<a href="https://upload.wikimedia.org/wikipedia/commons/6/61/Old_Kokomo_High_School.jpg" title="The Cleaner">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/Old_Kokomo_High_School.jpg" width="75" height="75"></a>
	<a href="http://www.jshonk.com/wp-content/uploads/2012/11/nelsonville-school.png" title="Winter Dance">
    <img src="http://www.jshonk.com/wp-content/uploads/2012/11/nelsonville-school.png" width="75" height="75"></a>
	<a href="https://upload.wikimedia.org/wikipedia/commons/8/8f/Sarasota_FL_old_high_school_pano01.jpg" title="The Uninvited Guest">
    <img src="https://upload.wikimedia.org/wikipedia/commons/8/8f/Sarasota_FL_old_high_school_pano01.jpg" width="75" height="75"></a>
	<a href="https://upload.wikimedia.org/wikipedia/commons/c/c5/Lenox_High_School,_Lenox_MA.jpg" title="Oh no, not again!">
    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c5/Lenox_High_School,_Lenox_MA.jpg" width="75" height="75"></a>
	<a href="http://files.usmre.com/5101/blog/misc/srhighschool.jpg" title="Swan Lake">
    <img src="http://files.usmre.com/5101/blog/misc/srhighschool.jpg" width="75" height="75"></a>
	<a href="http://m5.i.pbase.com/o4/24/22224/1/53253495.ErasmusFlatbush1963scanaltbettereditedfromTheWayredone.jpg" title="The Shake">
    <img src="http://m5.i.pbase.com/o4/24/22224/1/53253495.ErasmusFlatbush1963scanaltbettereditedfromTheWayredone.jpg" width="75" height="75"></a>
	<a href="https://s-media-cache-ak0.pinimg.com/564x/34/a0/13/34a0130514515e0620d31a9a7dfc83a9.jpg" title="Who's that, mommy?">
    <img src="https://s-media-cache-ak0.pinimg.com/564x/34/a0/13/34a0130514515e0620d31a9a7dfc83a9.jpg" width="75" height="75"></a>
</div>

</div>
<style type="text/css">
    footer {
        background-color: ;
    }
</style>

</div>
    
   <?php
    require 'footer.php';
     ?>

<script src="../assests/js/jquery.magnific-popup.min.js"></script>
<script>
$(document).ready(function() {
$('.image-popup-no-margins').magnificPopup({
  type: 'image',
  closeOnContentClick: true,
  closeBtnInside: false,
  fixedContentPos: true,
  mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
  image: {
    verticalFit: true
  },
  zoom: {
    enabled: true,
    duration: 300 // don't foget to change the duration also in CSS
  }
});
});
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});
</script>
</body>
</html>
