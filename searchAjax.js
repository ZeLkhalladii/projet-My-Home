$(document).ready(function(){
    // alert('text');
    let search = $("#search");
    search.on("keyup", function(event){
        // if (event.keyCode === 13) {
            // event.preventDefault();

            let searchBody = $("#search").val();

            if (searchBody.length > 0){
               
                $.ajax({
                    url: "search.php",
                    method: "POST",
                    data: {
                        "search": searchBody,
                    },
                    success: function(result){
                       
                        $(".today").html(result); 


                    }
                });
            }else{
                $.ajax({
                    url: "searchCard.php",
                    method: "POST",
                    success: function(result){
                       
                        $(".today").html(result); 


                    }
                });
            }
        // }
    });
    
});