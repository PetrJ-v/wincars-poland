<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<!-- Meta Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1268784784409264');
		fbq('track', 'PageView');
		fbq('track', 'Contact');
		fbq('track', 'Lead');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1268784784409264&ev=PageView&noscript=1" /></noscript>
	<!-- End Meta Pixel Code -->
</head>
