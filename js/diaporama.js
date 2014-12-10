var imgIndex=0;
var image=document.getElementById("admin_photo");
var images = [];

images[0] = image.src;

function printNextImage(){
    if(imgIndex>=images.length-1){
        imgIndex=0;
    }else{
        imgIndex++;
    }
    image.src=images[imgIndex];
}

function loadInstagram(tag){
    var access_token = "16384709.6ac06b4.49b97800d7fd4ac799a2c889f50f2587",
    access_parameters = {
        access_token: access_token
    };

    $.getJSON("https://api.instagram.com/v1/tags/"+tag+"/media/recent?count=5&callback=?", access_parameters, onDataLoaded);

}

function onDataLoaded(instagram_data) {
    if (instagram_data.meta.code == 200) {
        var photos = instagram_data.data;
        //console.log(photos);
        if (photos.length > 0) {
            document.getElementById('nextImageText').style.display = 'inline';
            for (var key in photos) {
                var photo = photos[key];
                images.push(photo.images.standard_resolution.url);
            }
        }
    }
}