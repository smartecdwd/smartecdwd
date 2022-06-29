'use strict';


var numberofItems = $("#loop .blog").length;

// alert(numberofItems);
var limitperpage = 6;
$("#loop .blog:gt(" + (limitperpage - 1) + ")").hide();
var totalPages = Math.round(numberofItems / limitperpage);

$("#evepage .pagination").append("<li class='page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>");

for(var i = 2; i <= totalPages; i++){
      $("#evepage .pagination").append("<li class='page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");

}

$("#evepage .pagination").append("<li id='next'><a class='page-link' href='javascript:void(0)' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>");

$("#evepage .pagination li.page-item").on("click", function () {

           if($(this).hasClass("active")) {

                 return false;

           } else {

                    var currentPage = $(this).index();
                      $("#evepage .pagination li").removeClass("active");
                      $(this).addClass("active");
                        $("#loop .blog").hide();

                        var grandTotal = limitperpage * currentPage;

                        for(var i = grandTotal - limitperpage; i < grandTotal; i++) {
                              $("#loop .blog:eq(" + i + ")").show();
                        }

           }
});

$("#next").on("click", function () {
          var currentPage = $("#evepage .pagination li.active").index();
          if(currentPage === totalPages){
                 return false;
          }  else {
                   currentPage++;
                   $("#evepage .pagination li").removeClass("active");
                   $("#loop .blog").hide();


                   var grandTotal = limitperpage * currentPage;

                   for(var i = grandTotal - limitperpage; i < grandTotal; i++) {
                         $("#loop .blog:eq(" + i + ")").show();
                   }
                   $("#evepage .pagination li.page-item:eq(" + (currentPage - 1) + ")").addClass("active");
          }

});


$("#Previous").on("click", function () {
          var currentPage = $("#evepage .pagination li.active").index();
          if(currentPage === 1){
                 return false;
          }  else {
                   currentPage--;
                   $("#evepage .pagination li").removeClass("active");
                   $("#loop .blog").hide();


                   var grandTotal = limitperpage * currentPage;

                   for(var i = grandTotal - limitperpage; i < grandTotal; i++) {
                         $("#loop .blog:eq(" + i + ")").show();
                   }
                   $("#evepage .pagination li.page-item:eq(" + (currentPage - 1) + ")").addClass("active");
          }

});


// pagination for Research Publication


var numberofPublication = $("#publication .respub").length;

// alert(numberofPublication);
var limitperpagepub = 8;
$("#publication .respub:gt(" + (limitperpagepub - 1) + ")").hide();
var totalPagespub = Math.round(numberofPublication / limitperpagepub);

$("#pubpage .pagination").append("<li class='page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>");

for(var i = 2; i <= totalPagespub; i++){
      $("#pubpage .pagination").append("<li class='page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");

}

$("#pubpage .pagination").append("<li id='next'><a class='page-link' href='javascript:void(0)' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>");

$("#pubpage .pagination li.page-item").on("click", function () {

           if($(this).hasClass("active")) {

                 return false;

           } else {

                    var currentPage = $(this).index();
                      $("#pubpage .pagination li").removeClass("active");
                      $(this).addClass("active");
                        $("#publication .respub").hide();

                        var grandTotal = limitperpagepub * currentPage;

                        for(var i = grandTotal - limitperpagepub; i < grandTotal; i++) {
                              $("#publication .respub:eq(" + i + ")").show();
                        }

           }
});

$("#next").on("click", function () {
          var currentPage = $("#pubpage .pagination li.active").index();
          if(currentPage === totalPagespub){
                 return false;
          }  else {
                   currentPage++;
                   $("#pubpage .pagination li").removeClass("active");
                   $("#publication .respub").hide();


                   var grandTotal = limitperpagepub * currentPage;

                   for(var i = grandTotal - limitperpagepub; i < grandTotal; i++) {
                         $("#publication .respub:eq(" + i + ")").show();
                   }
                   $("#pubpage .pagination li.page-item:eq(" + (currentPage - 1) + ")").addClass("active");
          }

});


$("#Previous").on("click", function () {
          var currentPage = $("#pubpage .pagination li.active").index();
          if(currentPage === 1){
                 return false;
          }  else {
                   currentPage--;
                   $("#pubpage .pagination li").removeClass("active");
                   $("#publication .respub").hide();


                   var grandTotal = limitperpagepub * currentPage;

                   for(var i = grandTotal - limitperpagepub; i < grandTotal; i++) {
                         $("#publication .respub:eq(" + i + ")").show();
                   }
                   $("#pubpage .pagination li.page-item:eq(" + (currentPage - 1) + ")").addClass("active");
          }

});
