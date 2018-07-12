/*$(document).ready(function(){
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
*/
$("#adm").click(function(){
    $("#customer").hide('slow');
    $("#adminlogin-form").show('slow');
       $("#hd").show('slow');
    $("#hdad").show('slow');
     $("#hdcus").hide('slow');
       $("#hdall").hide('slow');
       
       
});
$("#cus").click(function(){
    $("#register-form").hide('slow');
    $("#customer").show('slow');
    $("#adminlogin-form").hide('slow');
      $("#hd").show('slow');
     $("#hdad").hide('slow');
     $("#hdcus").show('slow');
      $("#hdall").hide('slow');
       
       
});

$(document).ready(function(){
    $("#hd").hide();
       $("#hdad").hide();
     $("#hdcus").hide();
       $("#hdall").show();
       
       });
$("#selu").click(function(){
    $("#hd").hide();
    $("#hdad").hide();
     $("#hdcus").hide();
      $("#hdall").show();
       
});
$("#register-form-link").click(function(){
    $("#register-form").show();
    $("#customer").show();
    $("#adminlogin-form").hide();
      $("#hd").show();
     $("#hdad").hide();
     $("#hdcus").show();
      $("#hdall").hide();
       $("#login-form").hide();
       $("#register-form-link").hide();


});
