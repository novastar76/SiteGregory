<script src="./assets/js/jquery.js"></script>
<script src="./assets/js/jquery-ui.js"></script>

<script type="text/javascript">
$(document).ready(function(){

var $carrousel = $('#carrousel'),
    $img = $('#carrousel img'),
    indexImg = $img.length - 1,
    i = 0,
    $currentImg = $img.eq(i);

$img.css('display', 'none');
$currentImg.css('display', 'block');

$carrousel.append('<div class="controls"> <span class="prev">Precedent</span> <span class="next">Suivant</span> </div>');

$('.next').click(function(){

    i++;

    if( i <= indexImg ){
        $img.css('display', 'none');
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
    }
    else{
        i = indexImg;
    }

});

$('.prev').click(function(){

    i--;

    if( i >= 0 ){
        $img.css('display', 'none');
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
    }
    else{
        i = 0;
    }

});

function slideImg(){
    setTimeout(function(){

        if(i < indexImg){
	    i++;
	}
	else{
	    i = 0;
	}

	$img.css('display', 'none');

	$currentImg = $img.eq(i);
	$currentImg.css('display', 'block');

	slideImg();

}, 7000);
}

slideImg();

});


</script>


<div id="carrousel">
  <ul>
  <li><img src="img/oui1.jpg" /></li>
  <li><img src="img/oui2.png" /></li>
  <li><img src="img/oui3.jpg" /></li>
  <li><img src="img/oui4.jpg" /></li>
  <li><img src="img/oui5.jpg" /></li>
  <li><img src="img/oui6.png" /></li>
  <li><img src="img/oui7.jpg" /></li>
  <li><img src="img/oui8.jpg" /></li>
  <li><img src="img/oui9.jpg" /></li>
  <li><img src="img/oui10.jpg" /></li>
  <li><img src="img/oui11.jpg" /></li>
  <li><img src="img/oui12.jpg" /></li>
  <li><img src="img/oui13.jfif" /></li>
  <li><img src="img/oui14.jfif" /></li>
  <li><img src="img/oui15.jfif" /></li>
  <li><img src="img/oui1.jpg" /></li>
  <li><img src="img/oui2.png" /></li>
  <li><img src="img/oui3.jpg" /></li>
  </ul>
</div>
