

//Using Jquery to color the sign up form validation.
$(function() {
            function validateform() {
                var valid = true;
                $("input").css("border-top","0.1em solid #D7EE61");
                $("input").css("border-bottom","0.1em solid #D7EE61");
                $("span i").css("color","#D7EE61");

                $("input").each(function() {
                    if($(this).val() == "" ||  $(this).val().replace(/\s/g, '').length == 0) {
                        $(this).css("border-top","0.1em solid #9B8FFB");
                        $(this).css("border-bottom","0.1em solid #9B8FFB");
                        $("span i").css("color","#9B8FFB");
                        valid = false;
                    }
                });
                return valid;
                }
            
                $("submit").click(function() {
                $('form').submit(validateform);
                    $('form').submit();


                });
            
        });


