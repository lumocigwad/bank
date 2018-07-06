$(document).ready(function(){
    $("#tile").show();
       $("#deptile").hide();
     $("#withtile").hide();
     $("#showwith").hide();
     $("#showdep").hide();
      
       
       });
$("#selu").click(function(){
    $("#tile").show();
       $("#deptile").hide();
     $("#withtile").hide();
     $("#showwith").hide();
     $("#showdep").hide();
       
});
$("#adm").click(function(){
    $("#tile").hide();
       $("#deptile").show();
     $("#withtile").hide();
       $("#withtile").hide();
        $("#showwith").hide();
     $("#showdep").show();
});
$("#cus").click(function(){
    $("#tile").hide();
       $("#deptile").hide();
     $("#withtile").show();
      $("#showwith").show();
     $("#showdep").hide();
       
});
