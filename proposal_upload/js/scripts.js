$(".fileInput").on("change", ".file-upload-field", function(){ 
  $(this).parent(".file-upload-wrapper").attr("data-text",$(this).val().replace(/.*(\/|\\)/, '') );
});

$('.form-floating-label input, .form-floating-label textarea').focusin(function(){
  $(this).parent().addClass('has-value');
});

$('.form-floating-label input, .form-floating-label textarea').blur(function(){
  if(!$(this).val().length > 0) {
    $(this).parent().removeClass('has-value');
  }
})

//function that take only numbers
function isInputNumber(evt) {
  var ch = String.fromCharCode(evt.which);
  if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
  }
}


$(document).ready(function() {
  // Declare Variables
  var cond = null; //general condition
  var pcond = null; //phone condition

  //function : to validate the phone number
  function validatePhone() {
      var content = $("#number").val();
      if (content != "" && (content.length < 11 || content.length > 11 || content[0] != 0 || content[1] != 1)){
        pcond = 0;
        return false;}
      else return true;
  }

  //*****************************************************************************
  //function : A way to make sure there are no empty input fields and interacting with the user
  $(':input').on('input', function() {
      cond = 1;
      var $id = $(this).attr("id");
      var phFeed = $("#hnumber");  //feedback to the user under the phone no input field

      if ($id == "number" && validatePhone()) {
          $(this).css("borderColor", "green");
          $('#phoneLabel').css("color", "green");
          phFeed.text("");
          pcond = 1;
      }

      bttnAvailable();
      return false;
  });

    // if there is an empty input field after clicking on it and leaving it,then a msg "You Must Fill This Info" will appear below that input field 
    // also to warn the user if the phone no isnt correct
  $(":input").blur(function() {
      var content = $(this).val();
      var $id = $(this).attr("id");
      var phFeed = $("#hnumber");

      if (!content) {
          cond = 0
          $(this).css("borderColor", "red");
          $('.eachLabel').css("color", "#2c3e50");
          $(this).attr("placeholder", "You Must Fill This Info");
          if ($id == "number") phFeed.text("");
        }
        else{
          $('.eachLabel').css("color", "#2c3e50");
      }

      if ($id == "number" && !validatePhone()) {
          phFeed.text("This Phone Number is Not Valid !");
          phFeed.css("color", "red");
          $(this).css("borderColor", "red");
          $('#phoneLabel').css("color", "#2c3e50");
          pcond = 0;
          cond = 0
      }

      bttnAvailable();
      return false;
    });
  
  //===============================================================
  $('select').blur(bttnAvailable);
  //===============================================================

  //function IT is Time to submit that button,right? :/ 
  function bttnAvailable() {
    var finalCond = 0;   //to count the filled input fields
    var noAlert = null;  //to store the value of each warning "if it exists"
    var inputs = 0; //to count all input fileds

    //checking that all input fields are filled
    $(":input:not(button)").each(function () {
        if (!$(this).val()) finalCond = 0;
        else finalCond++;
        inputs++;
    });

    //checking that there are no warnings
    $("h6").each(function() {
        noAlert = $(this).val();
        if (noAlert != "") finalCond = 0;
    });

    //checking that all inputs are filled & phone no are available.. then making btn available  
    if (finalCond == inputs && cond == 1 && pcond == 1) {
        $(".johayna").attr("disabled", false);
        $(".johayna").css("cursor", "pointer");
    } 
    else {
        $(".johayna").attr("disabled", true);
        $(".johayna").css("cursor", "not-allowed");
    }
 }  
});

// ***************************************************
// progress bar 
