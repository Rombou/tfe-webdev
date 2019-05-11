<?php
private function templateArrayInit(){
	$r = array();
	$r['lineHeight'] = 6; // hauteur de ligne
	$r['fontSize'] = 12; // taille de la police
	$r['fontFace'] = ''; // graisse de la police. Au choix 'B' (gras), 'I'(italiqu) ou 'U' (souligné)
	$r['color'] = array('r'=>51, 'g'=>51, 'b'=>51); // couleur du texte au format RGB (RVB en français)
	$r['backgroundColor'] = array('r'=>255, 'g'=>255, 'b'=>255);// couleur du fond au format RGB
	$r['align'] = 'L'; // alignement du texte
	$r['margin'] = array(0, 0, 0, 0); // margin. Idem au CSS : haut, droit, bas, gauche
	$r['padding'] = array(0, 0, 0, 0); // padding haut, droit, bas, gauche
	return $r;
}
?>