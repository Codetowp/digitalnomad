jQuery(document).ready(function() {
		jQuery('#child_upload_logo_button').click(function() {
			wp.media.editor.send.attachment = function(props, attachment) {
				jQuery('#child_logo_url').val(attachment.url);
			}
		wp.media.editor.open(this);
		return false;
		});
	});