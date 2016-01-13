function addProduit(produit){
	window.location.replace("panier.php?product_id="+produit.parent().parent().attr('id')+"&qte_voulu="+produit.parent().parent().find('select').val());
}