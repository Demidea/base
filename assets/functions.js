function pagelink() {

var go = $(document.activeElement).attr("id");

if (go == 'close') {
  window.location.assign("views/session.php");
}

$.post("views/text.php",
    {
      name: go
    },
    function(data){
        $("#container").html(data);
    });
}