function setNewThumbnail(thumbnailId, videoId, itemElement){
	$.post("includes/ajax/updateThumbnail.php",{ videoId: videoId, thumbnailId: thumbnailId})
	.done(function(){
		var item = $(itemElement);
		var itemClass = item.attr("class");

		$("." + itemClass).removeClass("selected"); //remove all selected

		item.addClass("selected"); //add new selected
		alert("Thumbnail updated !");
	})
}