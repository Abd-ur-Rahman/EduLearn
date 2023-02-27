function selectCity() {
    var x = document.getElementById("City").value;

    $.ajax({
        url:"../php/showCities.php",
        method: "POST",
        data:{
            id : x
        },
        success:function(data) {
            $("#ans").html(data);
        }
    })
}