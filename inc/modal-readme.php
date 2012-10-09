<div class="modal fade" id="modal-readme">
	<div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<p><b>BotstraPHP Manual</b></p>
	</div>
	<div class="modal-body">
	</div>
	<div class="modal-footer">
		<a href="#modal-readme" class="btn" data-dismiss="modal">Close</a>
	</div>
</div>
<script src="js/libs/showdown.js"></script>
<script>
	jQuery.get('README.md', function(md) {
		var converter = new Showdown.converter();
		var mdhtml = converter.makeHtml(md);
		$("#modal-readme .modal-body").append(mdhtml);
	});
</script>