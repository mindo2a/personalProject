function addGalleryItems () {
	var newItems = '<div class="gallery-item">\
                    <a href="">\
                    <figure class="image">\
                    <img src="http://placeimg.com/640/480/arch" alt="architecture" style="display: block;">\
                    </figure>\
                    <div class="desc">Add comment here</div>\
                    </a>\
                    </div>';
        $('.gallery').append(newItems);
    }   
     
    var isEnd = true,
        i = 0;

    while (i < 12) {
    	addGalleryItems();
    	i++;
    }             

