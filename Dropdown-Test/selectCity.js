function selectCity() {
    var x = document.getElementById("city").value;

    $.ajax({
        url: "showCity.php",
        method: "POST",
        data:{
            id : x
        },
        success:function(data) {
            $("#show").html(data);
        }
    })
}