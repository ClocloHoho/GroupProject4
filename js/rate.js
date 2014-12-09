function rate(rating, restaurantID){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "/tools/rate.php?rating="+rating+"&restaurantID="+restaurantID, true);

    xhr.send(null);
}