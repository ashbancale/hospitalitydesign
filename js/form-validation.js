$().ready(function() {
    $("#whitepaper-form").validate({
    rules: {
            first_name: {notEqual: "First Name"},
            last_name: {notEqual: "Last Name"},  
            title: "required",
            company: "required",
            street_address: {notEqual: "Street Address"},
            city: {notEqual: "City"},
            state: {notEqual: "State/Province"},
            postal_code: {notEqual: "Postal Code"},  
            country: "required",
            email: {
                required: true,
                email: true,
            },        
            phone: {
                required: true,
                phone: true
            },
    },
errorPlacement: function(error, element) {
            
            error.insertAfter(element);
            if (element.attr("name") == "last_name") error.insertAfter("#last_name");
            if (element.attr("name") == "first_name") error.insertAfter("#last_name");
            if (element.attr("name") == "title") error.insertAfter("#title");
            if (element.attr("name") == "company") error.insertAfter("#company");
            if (element.attr("name") == "email") error.insertAfter("#email");
            if (element.attr("name") == "phone") error.insertAfter("#phone");
            if (element.attr("name") == "state") error.insertAfter("#postal_code");
            if (element.attr("name") == "postal_code") error.insertAfter("#postal_code");
            if (element.attr("name") == "street_address") error.insertAfter("#street_address");
            if (element.attr("name") == "city") error.insertAfter("#city");
            if (element.attr("name") == "country") error.insertAfter("#country");

        },
           
     messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name",
            title: "Please enter your title",
            company: "Please enter your company",
            street_address: "Please enter your address",
            city: "Please enter your city",
            state: "Please enter your state",
            postal_code: "Please enter your postal code", 
            country: "Please enter your country",
            email: "Please enter a valid email",   
            phone: "Please enter a valid phone number"
        }
    });


    /* Text area maxlength */
    var onEditCallback = function(remaining){
        $(this).siblings('.charsRemaining').text("Characters remaining: " + remaining);
        if(remaining > 0){
            $(this).css('background-color', 'white');
        }
    }
    var onLimitCallback = function(){
        $(this).css('background-color', 'red');
    }
    $('textarea[maxlength]').limitMaxlength({
        onEdit: onEditCallback,
        onLimit: onLimitCallback
    });


});

jQuery.fn.limitMaxlength = function(options){
    var settings = jQuery.extend({
        attribute: "maxlength",
        onLimit: function(){},
        onEdit: function(){}
    }, options);
    // Event handler to limit the textarea
    var onEdit = function(){
        var textarea = jQuery(this);
        var maxlength = parseInt(textarea.attr(settings.attribute));
        if(textarea.val().length > maxlength){
            textarea.val(textarea.val().substr(0, maxlength));
            // Call the onlimit handler within the scope of the textarea
            jQuery.proxy(settings.onLimit, this)();
        }
        // Call the onEdit handler within the scope of the textarea
        jQuery.proxy(settings.onEdit, this)(maxlength - textarea.val().length);
    }
    this.each(onEdit);
    return this.keyup(onEdit)
                .keydown(onEdit)
                .focus(onEdit)
                .live('input paste', onEdit);
}
    function getFilename(formName){
            var fullPath = document.getElementById("attachment").value;
            if (fullPath) {         
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));         
                var filename = fullPath.substring(startIndex);         if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {                 filename = filename.substring(1);         
                }         
                document.forms[formName]["imageFilename"].value = filename;
                //alert(document.forms[formName]["imageFilename"].value); 
            }     
    }