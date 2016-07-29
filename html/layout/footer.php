	<footer>
		<div class="container">
			<div class="footer-list">
				<span><strong>PRODUCTS</strong></span>
				<li><a href="">博客</a></li>
				<li><a href="">开发者路线图</a></li>
				<li><a href="">案例分析</a></li>
				<li><a href="">JavaScript 测试控制台</a></li>
			</div>
			<div class="footer-list">
				<span><strong>SDKS</strong></span>
				<li><a href="">博客</a></li>
				<li><a href="">开发者路线图</a></li>
				<li><a href="">案例分析</a></li>
				<li><a href="">JavaScript 测试控制台</a></li>
			</div>
			<div class="footer-list">
				<span><strong>TOOLS</strong></span>
				<li><a href="">博客</a></li>
				<li><a href="">开发者路线图</a></li>
				<li><a href="">案例分析</a></li>
				<li><a href="">JavaScript 测试控制台</a></li>
				<li><a href="">API 升级工具</a></li>
				<li><a href="">测试控制台</a></li>
			</div>
			<div class="footer-list">
				<span><strong>SUPPORT</strong></span>
				<li><a href="">博客</a></li>
				<li><a href="">开发者路线图</a></li>
				<li><a href="">案例分析</a></li>
				<li><a href="">JavaScript 测试控制台</a></li>
			</div>

			<div class="footer-bottom">
				<a href="">简介</a>
				<a href="">创建广告</a>
				<a href="">工作机会</a>
				<a href="">开放平台政策</a>
				<a href="">隐私权政策</a>
				<a href="">条款</a>

				<span class="mark pull-right">SPA © 2016 中文(简体)</span>
			</div>

		</div>
	</footer>
</body>
</html>

<script src="../dist/js/script.js"></script>

<script src="../dist/js/jquery.min.js"></script>
<script src="../dist/js/jquery.zclip.min.js"></script>
<script>
	
	// copy code
	$(".copy-sdk").zclip({
		path: "./dist/swf/ZeroClipboard.swf",
		copy: function() {
			var num = $(".sdk-tab").find("a[class='selected']").index();

			return $(".sdk-info").find("pre").eq(num).text();
		},
		beforeCopy: function() {

		},
		afterCopy: function() {
			$(".copy-tips").show().fadeOut(1000);
	    }
	});

</script>