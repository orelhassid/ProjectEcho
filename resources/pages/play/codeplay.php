<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/theme_bright/play.css">
</head>
	<body>
	<div class="big-wrapper">
	<header class="code-header">

	</header>
		<article class="code-editor">
			<form class="code-editor-form" action="codeRender.php">
				<textarea spellcheck="true" wrap="hard" name="code_html"><?php
				echo "&lt;!DOCTYPE html&gt;";
				?></textarea>
				<button type="submit">RUN</button>
			</form>
		</article>

		<article class="code-render">
			<iframe class="code-render-frame" src="codeRender.php"></iframe>
		</article>

	</div>
		<nav class="code-nav">

		</nav>

	<div class="code-background"></div>

	</body>
</html>