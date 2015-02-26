<?php
/*
* Template Name: Privacy Policy
*/

$priv = get_page_by_title("Privacy Policy");
?>
		<div class="modal fade" id="privacy" tabindex="-1" role="dialog" aria-labelledby="privacyLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php echo $priv->post_title; ?></h4>
					</div>
					<div class="modal-body">
                                            <?php echo $priv->post_content; ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>