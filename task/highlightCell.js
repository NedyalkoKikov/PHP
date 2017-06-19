
    $( document ).ready(function() {
        $( ".tableDataFavColor" ).dblclick(function() {
           let favColor =  $(this).text();
            $(this).parent().css("background-color", favColor);
        });
    });

