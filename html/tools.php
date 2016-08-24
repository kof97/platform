<?php include './layout/header.php'; ?>
	<div class="row"></div>

	<div class="container">
		<nav class="navbar navbar-default">
			<span class="tools-name"><strong>API 自测工具</strong></span>
		</nav>

		<div class="row"></div>

		<div class="row">
			<div class="input-group">
				<span class="input-group-addon">访问口令：</span>
				<input type="text" class="form-control" name="token" placeholder="Token">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button" id="token">Get Token</button>
				</span>
				<div class="get-token shadow">
					
				</div>
			</div>

			<div class="input-group api-options">

				<div class="options">
					<span>环境 (Environment)：</span>
					<input type="radio" name="environment" id="sandbox" value="http://sandbox.api.e.qq.com" checked> 
					<label for="sandbox">沙箱(Sandbox)</label>
					<input type="radio" name="environment" id="formal" value="http://api.e.qq.com"> 
					<label for="formal">正式(Online)</label>
				</div>
				
				<div class="options">
					<span>接口版本 (Version)：</span> 
					<select class="btn btn-default" name="version">
						<option selected="selected" value="v3">V3</option>

					</select>
				</div>

				<div class="options">
					<span>API模块 (API Category)：</span> 
					<select class="btn btn-default" name="module">
						<option selected="selected" value="0">--请选择API模块--</option>
		
					</select>
				</div>

				<div class="options">
					<span>API名称 (API Name)：</span> 
					<select class="btn btn-default" name="api">
						<option selected="selected" value="0">--请选择API--</option>

					</select>
				</div>

			</div>

		</div>

		<div class="row">
			<div class="input-group">
				<div class="analyze-warning shadow">
					<strong></strong>：
					<span></span>
				</div>

				<span class="input-group-addon" id="method">{method}</span>
				<span class="input-group-addon">URL</span>
				<input type="text" class="form-control" name="url" placeholder="Url">
				<span class="input-group-btn">
					<button class="btn btn-info" type="button" id="show-url">Show</button>
					<button class="btn btn-success" type="button" id="analyze-url">Analyze</button>
					<button class="btn btn-primary" type="button" id="submit-url">Submit</button>
				</span>
			</div>
			<div style="display:none" id="analyze-post">
				<div class="row"></div>
				<div class="input-group">
					<span class="input-group-addon">POST 参数</span>
					<input type="text" class="form-control" placeholder="支持 json 格式或 URL 格式参数">
					<span class="input-group-btn">
						<button class="btn btn-success" type="button">Analyze POST</button>
					</span>
				</div>
			</div>
		</div>

		<div class="row"></div>

		<div class="row data-tab-options shadow">
			<li class="disabled">GET</li>
			<li class="disabled">POST</li>
			<li class="selected">headers</li>

			<a href="javascript:void(0)" class="pull-right shadow show-sdk">获取 SDK</a>

		</div>

		<div class="sdk shadow">
			<div class="sdk-tab shadow">
				<a href="javascript:void(0)">PHP</a>
				<a href="javascript:void(0)">CURL</a>

				<a href="javascript:void(0)" class="copy-sdk shadow pull-right">复制代码</a>
			</div>

			<div class="sdk-info">
				<pre></pre>

				<pre></pre>
			</div>

			<div class="copy-tips shadow">
				<div class="copy-tips-wrap">☺ 复制成功</div>
			</div>
		</div>

		<div>
			<div class="row shadow" id="get-data">
				<span><a href="javascript:void(0)">Add a Get Field</a></span> / 
				<span><a href="javascript:void(0)">View</a></span>
				<span class="get-warning"></span>

				<div class="get-list">

				</div>
			</div>

			<div class="row shadow" id="post-data">
				<span><a href="javascript:void(0)">Add a Post Field</a></span> / 
				<span><a href="javascript:void(0)">View</a></span>
				<span class="post-warning"></span>

				<div class="post-list">

				</div>
			</div>

			<div class="row shadow" id="header-data">
				<span><a href="javascript:void(0)">Add a Header</a></span> / 
				<span><a href="javascript:void(0)">View</a></span>
				<span class="header-warning"></span>

				<div class="header-list">
					<div class="header-option">
						<input type="text" value="Authorization" placeholder="Key" readonly="true">
						<input type="text" value="Bearer " placeholder="Value">
						<span>*</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row"></div>

		<div class="row message">
			<div class="info pull-left">
				<li><strong>参数列表</strong><span><strong>required</strong></span></li>
				<div id="request-list">
					
				</div>
				<div class="note shadow">

				</div>
			</div>

			<div class="response pull-right">
				<p id="debug-data"></p>
				<pre id="response-data">

				</pre>

			</div>
		</div>

	</div>

<?php include './layout/footer.php'; ?>
