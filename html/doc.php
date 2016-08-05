<?php include './layout/header.php'; ?>

	<div class="container shadow">
		<div class="doc-list">
			<span><strong>Spa\</strong></span>
			<a href="docs/Spa.md.html" target="docs">\Spa</a>
			<a href="docs/App.md.html" target="docs">\App</a>
			<a href="docs/Request.md.html" target="docs">\Request</a>
			<a href="docs/Client.md.html" target="docs">\Client</a>
			<a href="docs/Response.md.html" target="docs">\Response</a>

			<span><strong>Spa\Authentication\</strong></span>
			<a href="docs/AccessToken.md.html" target="docs">\AccessToken</a>

			<span><strong>Spa\Object\Interfaces\</strong></span>
			<a href="docs/interfaces.md.html" target="docs">\{接口发送实体类}</a>
		</div>
		<iframe name="docs" id="docs" src="docs/Spa.md.html"></iframe>

	</div>

	<script>
		var doc = document.getElementById('docs');
		var header = document.getElementsByTagName('header')[0];

		doc.style.height = document.body.scrollHeight - header.offsetHeight - 4 + 'px';
	</script>
