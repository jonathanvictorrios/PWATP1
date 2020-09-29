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

                },
                
            }

        },

        

       

    }

});
$('#ejer2').bootstrapValidator({

    message: 'Este valor no es validooooo',

    feedbackIcons: {

        valid: 'fa fa-check-circle ',

        invalid: 'fa fa-angry',

        validating: 'fa fa-circle'

    },

    fields: {

        hsLunes: {

            validators: {

                notEmpty: {

                    message: 'Este campo es obligatorio!!!'

                },
                between: {
                    min: 0,
                    max: 8,
                    message: 'Ingrese una cantidad de horas entre 0 y 8'
                }



            }

        },
        hsMartes: {

            validators: {

                notEmpty: {

                    message: 'Este campo es obligatorio!!!'

                },
                between: {
                    min: 0,
                    max: 8,
                    message: 'Ingrese una cantidad de horas entre 0 y 8'
                }



            }

        },
        hsMiercoles: {

            validators: {

                notEmpty: {

                    message: 'Este campo es obligatorio!!!'

                },
                between: {
                    min: 0,
                    max: 8,
                    message: 'Ingrese una cantidad de horas entre 0 y 8'
                }



            }

        },
        hsJueves: {

            validators: {

                notEmpty: {

                    message: 'Este campo es obligatorio!!!'

                },
                between: {
                    min: 0,
                    max: 8,
                    message: 'Ingrese una cantidad de horas entre 0 y 8'
                }



            }

        },
        hsViernes: {

            validators: {

                notEmpty: {

                    message: 'Este campo es obligatorio!!!'

                },
                between: {
                    min: 0,
                    max: 8,
                    message: 'Ingrese una cantidad de horas entre 0 y 8'
                }



            }

        },

        

       

    }

});
$('#ejer3').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check-circle ',

        invalid: 'fa fa-angry',

        validating: 'fa fa-circle'

    },

    fields: {
        nombre: {

            validators: {

                notEmpty: {

                    message: 'El nombre es obligatorio'

                }

            }
        },
        apellido: {
            validators: {
                notEmpty: {

                    message: 'El apellido es obligatorio'

                }

            }
        },
        direccion: {
            validators: {
                notEmpty: {

                    message: 'La direccion es obligatoria'

                }

            }
        },
        edad: {

            validators: {

                notEmpty: {

                    message: 'El numero es obligatorio!!!!!!!!!!'

                },
                between: {
                    min: 1,
                    max:200,
                    message: 'Ingrese un numero mayor a cero',
                }

                
            }

        },

        

       

    }

});
$('#ejer5').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check-circle ',

        invalid: 'fa fa-angry',

        validating: 'fa fa-circle'

    },

    fields: {
        nombre: {

            validators: {

                notEmpty: {

                    message: 'El nombre es obligatorio'

                }

            }
        },
        apellido: {
            validators: {
                notEmpty: {

                    message: 'El apellido es obligatorio'

                }

            }
        },
        direccion: {
            validators: {
                notEmpty: {

                    message: 'La direccion es obligatoria'

                }

            }
        },
        edad: {

            validators: {

                notEmpty: {

                    message: 'El numero es obligatorio!!!!!!!!!!'

                },
                between: {
                    min: 1,
                    max:200,
                    message: 'Ingrese un numero mayor a cero',
                }

                
            }

        },

        

       

    }

});
$('#ejer6').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check-circle ',

        invalid: 'fa fa-angry',

        validating: 'fa fa-circle'

    },

    fields: {
        nombre: {

            validators: {

                notEmpty: {

                    message: 'El nombre es obligatorio'

                }

            }
        },
        apellido: {
            validators: {
                notEmpty: {

                    message: 'El apellido es obligatorio'

                }

            }
        },
        

        

       

    }

});
$('#ejer7').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check-circle ',

        invalid: 'fa fa-angry',

        validating: 'fa fa-circle'

    },

    fields: {
        numero1: {

            validators: {

                notEmpty: {

                    message: 'El numero es obligatorio'

                },
                integer: {
                    message: 'Ingrese un valor entero!!!'
                }

            }
        },
        numero2: {
            validators: {
                notEmpty: {

                    message: 'El numero es obligatorio'

                },
                integer: {
                    message: 'Ingrese un valor entero!!!'
                }

            }
        },
        

        

       

    }

});

$('#ejer8').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check-circle ',

        invalid: 'fa fa-angry',

        validating: 'fa fa-circle'

    },

    fields: {
        
        edad: {

            validators: {

                notEmpty: {

                    message: 'La edad es obligatoria'

                },
                between: {
                    min: 1,
                    max:200,
                    message: 'Ingrese un numero mayor a cero',
                }

                
            }

        },

        

       

    }

});