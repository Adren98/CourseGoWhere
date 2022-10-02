<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
  function submitData(action){


    $(document).ready(function(){
      var data = {
        action: action,

          <?php

          require_once 'courses.php';
          $cols = getcolNames();

            foreach ($cols as $col){
                echo $col.": $('#".$col."').val(),";
            }

          ?>
          // coursecode: $("#coursecode").val(),
          // year: $("#year").val(),
          // courseName: $("#courseName").val(),
          // course_cluster: $("#course_cluster").val(),
          // cutoff: $("#cutoff").val(),
          // url: $("#url").val(),
          // school: $("#school").val(),


      };

      $.ajax({
        url: 'Controller/adminfunction.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response === "Deleted Successfully"){
            $("#"+action).css("display", "none");
              var element =document.getElementById(action);
              element.parentNode.removeChild(element);
          }
        }
      });
    });
  }
</script>