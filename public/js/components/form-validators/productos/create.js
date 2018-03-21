$( document ).ready( function () {
   var message =  
        { 
            nombre: {
                required: "El campo nombre es obligatorio.",
                minlength: "El campo nombre debe tener al menos 3 caracteres.'",
                maxlength: "El campo nombre no puede ser mayor a 40 caracteres."
            },
            descripcion: "El campo descripcion es obligatorio.",
            
        };            
  

    $( "#jquery-validate" ).validate( {
        rules: {
            nombre:{
                required: true,
                minlength: 3,
                maxlength: 40
            },
            descripcion: "required"
            
        },
        messages: message,        
        
        errorElement: "em",
        errorPlacement: function ( error, element ) {
                    // Add the `help-block` class to the error element
            error.addClass( "help-block" );

            if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.parent( "label" ) );
            } else {
                error.insertAfter( element );
            }
            var body = $("html, body");
            body.stop().animate({scrollTop:0}, 500, 'swing');
        },
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
            if(this.numberOfInvalids() == 0) {
                $("#error_container").addClass("hidden");
            }
        }
    });
});