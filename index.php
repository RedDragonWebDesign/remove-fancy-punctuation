<!DOCTYPE html>

<html lang="en-us">

<head>
	<meta charset="utf-8" />
	<title>Remove Fancy Punctuation</title>
	<link rel="stylesheet" href="style.css" />
	<script type="module" src="script.js"></script>
</head>

<body>
	<h1>
	Remove Fancy Punctuation
	</h1>
	
	<p>
	Need to copy/paste something from Microsoft Office? Is your text full of fancy punctuation marks and you just want it to be plain? This tool will fix that for you. This tool converts unicode, typographical, AutoFormat punctuation marks back to their simple ASCII 256 versions. This tool fixes ellipsis, em dasn, en dash, fractions, etc.
	</p>
	
	<p>
	<textarea id="text">“Here’s some example text from Microsoft Word—your favorite word processor. It has taken the liberty of converting several common punctuation marks to ‘fancy punctuation’…”

		'“': '"',
		'”': '"',
		'‘': '\'',
		'’': '\'',
		'’': '\'',
		'¼': '1/4',
		'½': '1/2',
		'¾': '3/4',
		'–': '-',
		'—': '--',
		'…': '...',</textarea>
	</p>
	
	<p>
	<button id="format">Remove Fancy Punctuation</button>
	</p>
	
	<p>
	Want to report a bug or request a feature? <a href="https://github.com/RedDragonWebDesign/remove-fancy-punctuation/issues">Create an issue</a> on our GitHub.
	</p>
</body>

</html>