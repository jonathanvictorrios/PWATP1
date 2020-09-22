$('#ejer1').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-smile-beam ',

        invalid: 'fa fa-angry',

        validating: 'fa fa-circle'

    },

    fields: {

        numero: {

            validators: {

                notEmpty: {

                    message: 'El numero es obligatorio!!!!!!!!!!'

                }

            }

        },

        

       

    }

});
