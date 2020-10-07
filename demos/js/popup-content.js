$(function(){

			/*-------------------------------

				GENERAL EXAMPLES

			-------------------------------*/

			// Default usage
			$('.default_popup').popup();

			// Function for content
			$('.function_popup').popup({
				content		: function(){
					return '<p>'+$(this.ele).attr('title')+'</p>';
				}
			});

			// jQuery for content
			$('.jquery_popup').popup({
				content		: $('#inline')
			});

			// HTML for content
			$('.html_popup').popup({
				content		: '<h1>This is some HTML</h1>',
				type		: 'html'
			});

			// Custom YouTube content
			$('.youtube_popup').popup({
				types		: {
					youtube			: function(content, callback){

						content = '<iframe width="420" height="315" src="'+content+'" frameborder="0" allowfullscreen></iframe>';

						// Don't forget to call the callback!
						callback.call(this, content);

					}
				},
				width				: 420,
				height				: 315
			});

			// Animated popup
			$('.animated_popup').popup({
				show				: function($popup, $back){

					var plugin = this,
						center = plugin.getCenter();

					$popup
						.css({
							top     : - $popup.children().outerHeight(),
							left    : center.left,
							opacity	: 1
						})
						.animate({top : center.top}, 500, 'easeOutBack', function(){
							// Call the open callback
							plugin.o.afterOpen.call(plugin);
						});

				}
			});

			// Call ALL the callbacks
			$('.callback_popup').popup({
				beforeOpen          : function(type){
					console.log('beforeOpen -', type);
				},
				afterOpen           : function(){
					console.log('afterOpen');
				},
				beforeClose         : function(){
					console.log('beforeClose');
				},
				afterClose          : function(){
					console.log('afterClose');
				}
			});

			// Different preloader
			$('.preloader_popup').popup({
				preloaderContent	: '<img src="assets/images/preloader.gif" class="preloader">'
			});

			// Error popup
			$('.error_popup').popup({
				error		: function(content, type){

					// Just call open again, it'll replace the content
					this.open('<h1>ERROR!</h1><p>Content "'+content+'" of type "'+type+'" could not be loaded.</p>', 'html');
				}
			});

		});

		/*---------------------

			JQUERY EASING

		*/

		$.extend($.easing, {
			easeOutBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
			},
			easeInBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*(t/=d)*t*((s+1)*t - s) + b;
			}
		});

		/*-------------------------------

			GALLERY SPECIFIC CODE

		-------------------------------*/

		/*---------------------

			SETTINGS

		*/

		var gallerySettings = {
				markup		: '' +
					'<div class="popup">' +
						'<div class="popup_wrap">' +
							'<div class="popup_content"/>' +
						'</div>' +
						'<a href="#next">Next</a>' +
						'<a href="#prev">Previous</a>' +
					'</div>',
				// This is a custom variable
				gallery		: '.popup_gallery',
				replaced	: function($popup, $back){

					var plugin = this,
						$wrap = $('.popup_wrap', $popup);

					// Animate the popup to new size
					$wrap.animate({
						width 	: $wrap.children().children().outerWidth(true),
						height 	: $wrap.children().children().outerHeight(true)
					}, {
						duration	: 500,
						easing		: 'easeOutBack',
						step		: function(){

							// Need to center the poup on each step
							$popup
								.css({
									top		: plugin.getCenter().top,
									left	: plugin.getCenter().left
								});

						},
						complete	: function(){

							// Fade in!
							$wrap
								.children()
								.animate({opacity : 1}, plugin.o.speed, function(){
									plugin.center();
									plugin.o.afterOpen.call(plugin);
								});

						}
					});
				},
				show		: function($popup, $back){

					var plugin = this,
						$wrap = $('.popup_wrap', $popup);

					// Center the plugin
					plugin.center();

					// Default fade in
					$popup
						.animate({opacity : 1}, plugin.o.speed, function(){
							plugin.o.afterOpen.call(plugin);
						});

					// Set the inline styles as we animate later
					$wrap.css({
						width 	: $wrap.outerWidth(true),
						height 	: $wrap.outerHeight(true)
					});

				},
				afterClose		: function(){
					this.currentIndex = undefined;
				}

			};

		$(function(){

			/*---------------------

				POPUP

			*/

			$('.popup_gallery').popup(gallerySettings);

			/*---------------------

				NEXT & PREVIOUS LINKS

			*/

			$(document).on('click', '[href="#next"], [href="#prev"]', function(e){

				e.preventDefault();

				var $current = $('.popup_active'),
					popup = $current.data('popup'),
					$items = $(popup.o.gallery);

				// If this is the first time
				// and we don't have a currentIndex set
				if( popup.currentIndex === undefined ){

					popup.currentIndex = $items.index($current);

				}

				// Fade the current item out
				$('.'+popup.o.contentClass)
					.animate({opacity : 0}, 'fast', function(){

						// Get the next index
						var newIndex = $(e.target).attr('href') === '#next'
							? popup.currentIndex + 1
							: popup.currentIndex - 1;

						// Make sure the index is valid
						if( newIndex > $items.length -1 ){

							popup.currentIndex = 0;

						}else if( newIndex < 0 ){

							popup.currentIndex = $items.length - 1;

						}else{

							popup.currentIndex = newIndex;

						}

						// Get the new current link
						$current = $($items[popup.currentIndex]);

						// Load the content
						popup.open($current.attr('href'), undefined, $current[0]);

					});

			});

		});

		/*---------------------

			JQUERY EASING

		*/

		$.extend($.easing, {
			easeOutBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
			},
			easeInBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*(t/=d)*t*((s+1)*t - s) + b;
			}
		});
