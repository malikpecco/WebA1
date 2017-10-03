function aklh_show_for_domain(domain_id, type) {
	switch (type) {
		case 'posts':
		case 'links':
			var pars = {
				"ak_action": "show_" + type,
				"domain_id": domain_id
			};
	}
	var target = jQuery('#domain_' + domain_id);
	target.html('<span class="loading">Loading...</span>').show();
	jQuery.get("http://www.peihumanesociety.com/index.php", pars, function(data) {
		target.hide().html(data).slideDown();
	});
}
