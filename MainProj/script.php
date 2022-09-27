<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
  function submitData(action){
    alert(action);
    
    var element =document.getElementById(action);
    element.parentNode.removeChild(element);
    $(document).ready(function(){
      var data = {
        action: action,
        id: $("#id").val(),
        name: $("#name").val(),
        email: $("#email").val(),
        gender: $("#gender").val(),
        
      };

      $.ajax({
        url: 'adminfunction.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>