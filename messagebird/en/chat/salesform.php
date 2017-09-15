
<section class="page-section sales-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="sales-form-container">

                    <div>

                                                    <h3 class="sales-form-heading">Want to learn more about <span style="font-weight: 900;">Voice</span>?<br> Reach out to our sales team.</h3>
                        
                                                    
                        
                        <div id="#form-messages"></div>

                        <form class="form-group contact-form" id="contact-form" method="post" action="#contact-form">
                            <input type="hidden" name="_csrf" value="4iK4OwFFA42zIWHXSVpvW17GQU969VqrJoBp1NtfIkJv6E5mye5AZITeWcC7jcWVYNelGHv5kSDQX5qzZbK7hQ==">                            <input type="hidden" name="ContactForm[subject]" value="Sales Inquiry">

                            <div class="text-left ">
                                <label for="ContactForm[email]" style="
                                    opacity: .5;
                                    color: #24374e;
                                ">Your email</label>
                                <input id="form_email" type="email" value="" name="ContactForm[email]" class="form-control form-group" placeholder="Enter your email address" required="">
                            </div>
                            <div class="text-left ">
                                <label for="ContactForm[body]" style="
                                    opacity: .5;
                                    color: #24374e;
                                ">Your message</label>
                                <textarea id="form_message" name="ContactForm[body]" class="form-control form-group" rows="6" minlength="15" placeholder="Enter your message" required=""></textarea>
                                                                    <button type="submit" class="btn btn-cta hover" style="margin: 0 auto;margin-top: 30px;display: block;" onclick="analytics.track('web:salesFormSubmitted');">Contact sales</button>
                                                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<script>
(function() {
    var form = $('#contact-form');
    var formMessages = $('#form-messages');

    $(form).submit(function(event) {
        event.preventDefault();
        var formData = $(form).serialize();

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })

        .done(function(response) {
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');

            $(formMessages).text(response);

            $('#form_email').val('');
            $('#form_message').val('');
        })

        .fail(function(data) {
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error');

            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });

    });

});

</script>