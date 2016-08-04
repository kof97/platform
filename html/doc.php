<?php include './layout/header.php'; ?>

	<div class="container">
		<div class="doc-list">
			<a href="docs/App.md.html" target="docs">qweqwe</a>
			<a href="docs/App.md.html" target="docs"></a>
			<a href="docs/App.md.html" target="docs"></a>
			<a href="docs/App.md.html" target="docs"></a>
			<a href="docs/App.md.html" target="docs"></a>
		</div>
		<iframe name="docs" id="docs" src="docs/Spa.md.html" onload="console.log(docs.document.body.scrollHeight);"></iframe>

	</div>
	<script>
		
		var doc = document.getElementById('docs');
		doc.height = docs.document.body.scrollHeight;


	</script>
<?php include './layout/footer.php'; ?>
