// Copyright https://www.RedDragonWebDesign.com/
// Permission required to use or copy code. All rights reserved.

"use strict";

function removeFancyPunctuation(text) {
	let fancyPunctuation = {
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
		'…': '...',
	};
	
	for ( let rule in fancyPunctuation ) {
		text = globalReplace(text, rule, fancyPunctuation[rule]);
	}
	
	return text;
}

function globalReplace(original, searchTxt, replaceTxt) {
	const regex = new RegExp(searchTxt, 'g');
	return original.replace(regex, replaceTxt) ;
}

window.addEventListener('DOMContentLoaded', (e) => {
	let text = document.getElementById('text');
	let format = document.getElementById('format');
	
	format.addEventListener('click', function(e) {
		text.value = removeFancyPunctuation(text.value);
	});
});