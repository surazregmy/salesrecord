<script type="text/javascript">
$(document).ready(function () {

  //alert("Hello WOrld !!");
   $(".treeview-menu li ").click(function () {
        var id = $(this).attr("id");
        alert(id);

        
       //parent 
        var  parent = $('#' + id).parent().parent().parent().find(".active").attr("id");
        alert("This parent is "+ parent);
        $('#'+parent).siblings().find(".active").removeClass("active");

        $('#'+parent).addClass("active");
        localStorage.setItem("selectedparent", parent);
       
       //child

        $('#' + id).siblings().find(".active").removeClass("active");
            //                       ^ you forgot this
        $('#' + id).addClass("active");
        localStorage.setItem("selectedolditem", id);


        //Test
        
        var older = $('#' + id).parent().find(".active").attr("id");
    

 
       
        

    });

    var selectedolditem = localStorage.getItem('selectedolditem');
    var selectedparent = localStorage.getItem("selectedparent");
    

    if(selectedparent !=null){

        var par = $('#' + selectedparent).parent().find(".active").attr("id");
        alert("New parent is "+ par);
         $('#' + selectedparent).parent().find(".active").removeClass("active");
        //                                        ^ you forgot this
        $('#' + selectedparent).addClass("active");

    }
     

    // if (selectedolditem != null) {

    //     $('#' + selectedolditem).parent().find(".active").removeClass("active");
    //     //                                        ^ you forgot this
    //     $('#' + selectedolditem).addClass("active");
    // }
    // alert("ENd3");
   
    });

    window.onbeforeunload = function() {
      localStorage.removeItem(key);
      return '';
    };
</script>