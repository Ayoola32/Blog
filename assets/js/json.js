
var element = document.getElementsByTagName("code");
for (let i = 0; i < element.length; i++) {
    element[i].classList.add("prettyprint");
}

window.onscroll = function() {			
    if(!document.getElementById('fonts')) {
        var link = document.createElement('link');
        link.id = 'fonts';
        link.rel = 'stylesheet';
        link.href = 'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap';
        document.head.appendChild(link);
    }
}

$('#contact-form').submit(function(ev) {
    // Prevent the form from actually submitting
    ev.preventDefault();

    // Send it to the server
    $.post({
        url: '/contact-form/send',
        dataType: 'json',
        data: $(this).serialize(),
        success: function(response) {
            if (response.success) {
                //$('#thanks').fadeIn();
                alert('Message sent.');
            } else {
                // response.error will be an object containing any validation errors that occurred, indexed by field name
                // e.g. response.error.fromName => ['From Name is required']
                alert('An error occurred. Please try again.');
            }
        }
    });
});
