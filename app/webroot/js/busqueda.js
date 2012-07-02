var API_KEY= "AIzaSyAj8Kt71AflXd97wZWbnT2qu0GsZf-VH_8";
var BASE_URI= "https://www.googleapis.com/books/v1/";

var i = -1;

$(document).ready(function(){


	 $("#buttonCompletar").click(function(){
				var url=BASE_URI+'volumes?q='+$("#book_title").val()+'&key='+API_KEY;
				$.ajax({
					url: url,   
                    type:"GET",
					dataType: "jsonp",
					success: function( data ) {
						i++;
						
						$("#BookIdGoogle").val(data.items[i].id);
						$("#BookTitulo").val(data.items[i].volumeInfo.title);
						   $("#BookAutores").val(data.items[i].volumeInfo.authors[0]);
						   $("#BookResumen").text(data.items[i].volumeInfo.description);
						   $("#BookCategoria").val(data.items[i].volumeInfo.categories[0]);
						   $("#BookFechapub").val(data.items[i].volumeInfo.publishedDate);
						   $("#BookEditorial").val(data.items[i].volumeInfo.publisher);
						   $("#BookIsbn").val(data.items[i].volumeInfo.industryIdentifiers[0].identifier);
						   $("#BookPags").val(data.items[i].volumeInfo.pageCount);
						   $("#BookIdioma").val(data.items[i].volumeInfo.language);
						   $("#BookCalifGoogle").val(data.items[i].volumeInfo.averageRating);
						   $("#BookThumbnail").val(data.items[i].volumeInfo.imageLinks.smallThumbnail);
						   $("#BookImage").val(data.items[i].volumeInfo.imageLinks.thumbnail);
						   $("#BookLinkGoogle").val(data.items[i].volumeInfo.previewLink);
					}
				});
		});

});
