jQuery(document).ready(function(){

	"use strict";

	if (jQuery.magnificPopup)
	{
		jQuery('a[ref=magnificPopup][class!=direct-link]').magnificPopup({
			type: 'image'
		});
	}

	// Carousel
	if (jQuery().carousello){
		jQuery(".w-clients.type_carousel").carousello({use3d: false, resizeDelay: 100});
	}

	jQuery('.contacts_form').each(function(){

		jQuery(this).find('.g-form').submit(function(){
			var form = jQuery(this),
				name, email, phone,
				nameField = form.find('input[name=name]'),
				emailField = form.find('input[name=email]'),
				phoneField = form.find('input[name=phone]'),
				message = form.find('textarea[name=message]').val(),
				errors = 0;

			if (nameField.length) {
				name = nameField.val();

				if (name === '' && nameField.data('required') === 1){
					jQuery.jGrowl(window.nameFieldError);
					errors++;
				}
			}

			if (emailField.length) {
				email = emailField.val();

				if (email === '' && emailField.data('required') === 1){
					jQuery.jGrowl(window.emailFieldError);
					errors++;
				}
			}

			if (phoneField.length) {
				phone = phoneField.val();

				if (phone === '' && phoneField.data('required') === 1){
					jQuery.jGrowl(window.phoneFieldError);
					errors++;
				}
			}

			if (message === ''){
				jQuery.jGrowl(window.messageFieldError);
				errors++;
			}

			if (errors === 0){
				jQuery.ajax({
					type: 'POST',
					url: window.ajaxURL,
					dataType: 'json',
					data: {
						action: 'sendContact',
						name: name,
						email: email,
						phone: phone,
						message: message
					},
					success: function(data){
						if (data.success){
							jQuery.jGrowl(window.messageFormSuccess);

							if (nameField.length) {
								nameField.val('');
							}
							if (emailField.length) {
								emailField.val('');
							}
							if (phoneField.length) {
								phoneField.val('');
							}
							form.find('textarea[name=message]').val('');

						}
					},
					error: function(){
					}
				});
			}

			return false;
		});

	});

	if (jQuery().waypoint){
		jQuery('.w-counter').waypoint(function() {
			var counter = jQuery(this).find('.w-counter-number'),
				count = parseInt(counter.text(), 10),
				prefix = '',
				suffix = '',
				number = 0;

			if (jQuery(this).data('count')) {
				count = parseInt(jQuery(this).data('count'), 10);
			}
			if (jQuery(this).data('prefix')) {
				prefix = jQuery(this).data('prefix');
			}
			if (jQuery(this).data('suffix')) {
				suffix = jQuery(this).data('suffix');
			}

			var	step = Math.ceil(count/25),
				handler = setInterval(function() {
					number += step;
					counter.text(prefix+number+suffix);
					if (number >= count) {
						counter.text(prefix+count+suffix);
						window.clearInterval(handler);
					}
				}, 40);


		}, {offset:'85%', triggerOnce: true});
	}

    function preloaderProgress() {
        preloaderLoadedImageCount++;
        var percent = Math.round(preloaderLoadedImageCount/preloaderTotalImageCount*100);
        jQuery('.l-preloader-counter').text(percent+"%");
        jQuery('.l-preloader-bar').stop().animate({
            "height": percent+"%"
        }, 200);
    }

    function preloaderFinished() {
        jQuery('.l-preloader-counter').text("100%");
        jQuery('.l-preloader-bar').stop().animate({
            "height": "100%"
        }, 200);
        window.setTimeout(function(){
            jQuery('.l-preloader' ).animate({height: 0}, 300, function () {
                jQuery('.l-preloader').remove();
            });
        }, 200);
    }

	if (jQuery('.l-preloader').length)
	{
        var images = jQuery('.l-section').first().find('.l-subsection-hh > img'),
            preloaderLoadedImageCount = 0,
            preloaderTotalImageCount = 0,
            preloaderContainer = jQuery('.l-preloader');

        jQuery('.l-subsection').each(function(){
            var el = jQuery(this)
                , image = el.css('background-image').match(/url\((['"])?(.*?)\1\)/);
            if(image)
                images = images.add(jQuery('<img>').attr('src', image.pop()));
        });

        if (preloaderContainer.hasClass('type_spinner')) {
            images.imagesLoaded().always(function(){
                window.setTimeout(function(){
                    jQuery('.l-preloader' ).animate({height: 0}, 300, function () {
                        jQuery('.l-preloader').remove();
                    });
                }, 200);
            });
        } else {
            preloaderTotalImageCount = images.length;
            jQuery("<div class='l-preloader-bar'></div>").appendTo(preloaderContainer);
            jQuery("<div class='l-preloader-counter'></div>").text("0%").appendTo(preloaderContainer);

            images.imagesLoaded().progress(preloaderProgress).always(preloaderFinished);
        }


	}

	jQuery(window).load(function(){
		jQuery('.no-touch .l-subsection.with_parallax').each(function(){
			jQuery(this).parallax('50%', '0.3');
		});
	});

    jQuery(".flexslider").each(function() {
        var sliderContainer = jQuery(this);

        if (sliderContainer.closest('.w-portfolio-item-details-h').length) {
            return;
        }



        sliderContainer.flexslider({
            directionalNav: true,
            controlNav: false,
            smoothHeight: true,
            start: function() {
                sliderContainer.removeClass("flex-loading");
            }
        });
    });
});
