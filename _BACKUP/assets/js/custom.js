/*

1. Add your custom JavaScript code below
2. Place the this code in your template:



*/



function closeModalwhenSuccess(object) {
  if(object.parent().hasClass('modal')) {
    object.parent().find('.mfp-close').trigger('click');;
  }
}


grecaptcha.ready(function () {
    grecaptcha.execute('6LfcAoEUAAAAALfOrGPbpzLfYnDMMHDG5xk-eK8S', { action: 'submit' }).then(function (token) {
        var recaptchaResponse = document.getElementById('g-recaptcha-response');
        recaptchaResponse.value = token;
    });
});
