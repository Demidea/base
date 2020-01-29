function pagelink() {

var go = $(document.activeElement).attr("id");

$.post("views/text.php",
    {
      name: go
    },
    function(data){
        $("#container").html(data);
    });
}