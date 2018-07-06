$(document).ready(function(){
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    
    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;                        
            });
        } else{
            checkbox.each(function(){
                this.checked = false;                        
            });
        } 
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });
});

$("#adm").click(function(){
    $("#customer").hide();
    $("#adminlogin-form").show();
    $("#masterlogin-form").hide();
    $("#hd").show();
    $("#hdad").show();
     $("#hdcus").hide();
      $("#hdcsm").hide();
       $("#hdall").hide();
       
       
});
$("#cus").click(function(){
    $("#register-form").hide();
    $("#customer").show();
    $("#adminlogin-form").hide();
     $("#masterlogin-form").hide();
     $("#hd").show();
     $("#hdad").hide();
     $("#hdcus").show();
      $("#hdcsm").hide();
       $("#hdall").hide();
       
       
});
$("#cusm").click(function(){
    $("#register-form").hide();
    $("#customer").hide();
    $("#adminlogin-form").hide();
    $("#masterlogin-form").show();
    $("#hd").show();
     $("#hdad").hide();
     $("#hdcus").hide();
      $("#hdcsm").show();
       $("#hdall").hide();
       
});

$(document).ready(function(){
    $("#hd").hide();
       $("#hdad").hide();
     $("#hdcus").hide();
      $("#hdcsm").hide();
       $("#hdall").show();
       
       });
$("#selu").click(function(){
    $("#hd").hide();
    $("#hdad").hide();
     $("#hdcus").hide();
      $("#hdcsm").hide();
       $("#hdall").show();
       
});
$("#register-form-link").click(function(){
    $("#register-form").show();
    $("#customer").show();
    $("#adminlogin-form").hide();
    $("#masterlogin-form").hide();
    $("#hd").show();
     $("#hdad").hide();
     $("#hdcus").show();
      $("#hdcsm").hide();
       $("#hdall").hide();
       $("#login-form").hide();
       $("#register-form-link").hide();


});
