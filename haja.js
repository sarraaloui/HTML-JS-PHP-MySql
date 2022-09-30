function selectTitre(){
    var x =document.getElementById("s_titre").value;
    
    $.ajax({
    url:"showtitre.php",
    method: "POST",
    data :{
        id : x 
    },
    success :function(data){
        $("#ans").html(data);
    }
    
    })
    }
    
    
    
    
    function set_background (newValue)
    {
        var field = document.roleForm.backgroundtext;
        field.value = newValue;
    }