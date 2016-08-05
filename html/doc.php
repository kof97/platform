<?php include './layout/header.php'; ?>

	<div class="container shadow">
		<div class="doc-list">
			<span><strong><a href="docs/introduce.md.html" target="docs">快速使用</a></strong></span>

			<hr>
			<span><strong>Spa\</strong></span>
			<a href="docs/Spa.md.html" target="docs">\Spa</a>
			<a href="docs/App.md.html" target="docs">\App</a>
			<a href="docs/Request.md.html" target="docs">\Request</a>
			<a href="docs/Client.md.html" target="docs">\Client</a>
			<a href="docs/Response.md.html" target="docs">\Response</a>
			<hr>
			<span><strong>Spa\Authentication\</strong></span>
			<a href="docs/AccessToken.md.html" target="docs">\AccessToken</a>
			<hr>
			<span><strong>Spa\Object\Interfaces\</strong></span>
			<a href="docs/Interfaces.md.html" target="docs">\{接口发送实体类}</a>
			<hr>
			<span><strong>Spa\Object\Enum\</strong></span>
			<a href="docs/Enum.md.html" target="docs">\{接口参数枚举类}</a>
		</div>
		<iframe name="docs" id="docs" src="docs/introduce.md.html"></iframe>

	</div>

	<script>
		var doc = document.getElementById('docs');
		var header = document.getElementsByTagName('header')[0];

		doc.style.height = document.body.scrollHeight - header.offsetHeight - 4 + 'px';
	</script>
