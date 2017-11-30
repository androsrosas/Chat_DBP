$(document).ready(function()
  {
    $(document).bind('keypress', function(e) {
      if(e.keyCode==13){
       $('#my_form').submit();
       $('#comment').val("");
     }
   });
  });
  
  function post()
  {
    var comment = document.getElementById("comment").value;
    var name = document.getElementById("username").value;
    if(comment && name)
    {
      $.ajax
      ({
        type: 'post',
        url: 'commentajax.php',
        data: 
        {
         user_comm:comment,
         user_name:name
       },
       success: function (response) 
       {
        document.getElementById("comment").value="";
      }
    });
    }

    return false;
  }
  
  
  function autoRefresh_div()
  {
      $("#result").load("load.php").show();// a function which will load data from other file after x seconds
    }

    setInterval('autoRefresh_div()', 2000);
