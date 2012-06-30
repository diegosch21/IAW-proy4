var API_KEY= "AIzaSyAj8Kt71AflXd97wZWbnT2qu0GsZf-VH_8";
var BASE_URI= "https://www.googleapis.com/books/v1/";

$(document).ready(function(){


	 $("#buttonCompletar").click(function(){
				var url=BASE_URI+'volumes?q='+$("#movieSearch").val()+'&key='+API_KEY;
				$.ajax({
					url: url,   
                    type:"GET",
					dataType: "jsonp",
					success: function( data ) {
						   $("#BookTitulo").text(data.items[0].volumeInfo.title);
						   $("#BookAutores").text(data.items[0].volumeInfo.authors[0]);
						   $("#BookResumen").text(data.items[0].volumeInfo.description);
						   $("#BookFechapub").text(data.items[0].volumeInfo.publishedDate);
						   $("#BookEditorial").text(data.items[0].volumeInfo.publisher);
						   $("#BookIsbn").text(data.items[0].volumeInfo.industryIdentifiers[0].identifier);
						   $("#BookPags").val(data.items[0].volumeInfo.pageCount);
						   $("#BookIdioma").text(data.items[0].volumeInfo.language);
						   $("#BookCalifGoogle").text(data.items[0].volumeInfo.averageRating);
						   $("#BookTumbnail").text(data.items[0].volumeInfo.imageLinks.smallThumbnail);
						   $("#BookImage").text(data.items[0].volumeInfo.imageLinks.thumbnail);
						   $("#BookLinkGoogle").text(data.items[0].volumeInfo.previewLink);
					}
				});
		});

});
