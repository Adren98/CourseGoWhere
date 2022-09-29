<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
  function submitData(action){
    alert(action);
    // if(action !=="insert" || action!=="edit"){
    //     var element =document.getElementById(action);
    //     element.parentNode.removeChild(element);
    // }

    $(document).ready(function(){
      var data = {
        action: action,

          coursecode: $("#coursecode").val(),
          year: $("#year").val(),
          courseName: $("#courseName").val(),
          course_cluster: $("#course_cluster").val(),
          cutoff: $("#cutoff").val(),
          url: $("#url").val(),
          school: $("#school").val(),


      };

      $.ajax({
        url: 'Controller/adminfunction.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response === "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>