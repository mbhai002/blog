$(document).ready(function(){
    $("#recherche").keyup(function(){
        var recherche = $(this).val();
        var data = 'motclef=' + recherche;
        if(recherche.length>2){

            $.ajax({
                type : "GET",
                url : "resultSearch.php",
                data : data,
                success: function(server_response){

                    $("#resultat").html(server_response).show();
                }
            });

        }

    });
});