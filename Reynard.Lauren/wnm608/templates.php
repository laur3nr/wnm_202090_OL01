<?php 


productListTemplate($r, $o){
	return $r.<<<HTML 
	<div>
	<figure class= "figure product">
		<img src="img/$o->thumbnail">
		<figcaption>
			<div>$o->name</div>
			<div>&dollar;$o->price</div>
		</figcaption>
	</figure>
	</div>
	HTML;
}


 ?>