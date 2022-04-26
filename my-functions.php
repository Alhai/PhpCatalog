<?php


require "catalog.php";

/* Fonction pour afficher le prix en euros*/
function formatprice($centimes)
{
  return ($centimes / 100) . ' €';
}

/* Fonction qui calcule le prix sans la tva */
function priceExcludingVAT($price, $vat)
{
  return ceil((100 * $price) / (100 + $vat));
}

/* Fonction qui calcule le % de réduction*/
function discount($price, $discount)
{
  $Discount = $price * ($discount / 100);
  $Discount = (floor($discount) / 100);
  return $discount;
}

/* Fonction qui affiche le prix remisé*/
function displayDiscountPrice($price, $discount)
{
  $discount = discount($price, $discount);
  $price = $price / 100;
  $reduction = $price - $discount;
  return $reduction;
}
/* Fonction qui affiche l'url */
function afficheImg($products)
{
  echo '<img class="card-img-top" src="' . $products["Image"] . '" alt="Card image cap">';
}

/* Fonction qui affiche le prix par rapport à la quantité */
function priceForQuantity($price, $quantity)
{
  $price = $price * $quantity;
}


/* Fonction qui affiche le catalogue */
function showsProduct($products)
{
  foreach ($products as $key => $product) {
    echo '<div class="card" style="width: 18rem;">';
    afficheDescription($product);
    afficheInfos($product);
    echo '</div>';
  }
}
/* Fonction qui affiche la description du produit*/
function afficheDescription($products)
{
  echo ' <div class="card-body">';
  afficheImg($products);
  echo '<h5 class="card-title">' . $products["Name"] . '</h5>';
  echo '<p class="card-text">' . $products["Description"] . '</p>';
  echo '<p class="card-text">' . '<b>' . "Discount" . " : " . $products["Discount"] . " %" . '</b>' . '</p>';
  echo '</div>';
}
/* Fonction qui affiche les prix */
function afficheInfos($products)
{
  echo '<ul class="list-group list-group-flush">';
  echo '<li class="list-group-item">' . '<del>' . formatprice($products["Price"]) . '</del>' . '<b>' . " TTC" . '</b>' . " => " . formatprice(priceExcludingVAT($products["Price"], $products["Vat"])) . '<b>' . " HT" . '</b>' . '</li>';
  echo '<li class="list-group-item">' . '<b>' . "Après réduction " . '</b>' . displayDiscountPrice($products["Price"], $products["Discount"]) . " €" .  '</li>';
  echo '</ul>';
};

function showForm($products)
{
  foreach ($products as $key => $product) {
    echo '<tr> ';
    echo '<th scope="row">' . $product["id"] . '</th>';
    echo '<td>' . $product["Name"] . '</td>';
    echo '<td>'. '<div class="form-group mb-0">' .'<input type="number"' . ' class="form-control cart-qty"' . 'name="'. $product["Name"] .'id="qtyCasq0"'. 'min="0"'. 'value="0">' . '</div>' . '</td>';
    echo '<td>' . ' <div id="price0">' . displayDiscountPrice($product["Price"], $product["Discount"]) . " €" . '</div>' . '</td>';
    echo '</tr> ';
  }
}
