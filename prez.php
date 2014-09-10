<?php
/*
Plugin Name: PRE-Z
Description: View your php arrays in an slide-out off canvas menu. Created specifally for WordPress theme development and Advanced Custom Fields.
Version: 0.1
License: GPL
Author: Joseph Fusco
Author URI: http://github.com/JoeFusco
*/

function prez($args = 'nope'){
	$argType = gettype($args);
	if($argType == 'string'){
		$prez = get_fields(); 
	}
	elseif ($argType == 'array'){
		$prez = $args;	
	}
	elseif ($argType == 'integer'){
		$prez = get_fields($args);
	}
	echo '<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.2/highlight.min.js"></script>';
	echo '<script type="text/javascript">hljs.initHighlightingOnLoad();</script>';
	echo '<style>.hljs{display:block;overflow-x:auto;padding:.5em;background:#f0f0f0;-webkit-text-size-adjust:none}.apache .hljs-cbracket,.apache .hljs-tag,.asciidoc .hljs-header,.bash .hljs-variable,.coffeescript .hljs-attribute,.django .hljs-variable,.erlang_repl .hljs-function_or_atom,.haml .hljs-symbol,.hljs-addition,.hljs-constant,.hljs-flow,.hljs-parent,.hljs-pragma,.hljs-preprocessor,.hljs-rules .hljs-value,.hljs-stream,.hljs-string,.hljs-tag .hljs-value,.hljs-template_tag,.hljs-title,.markdown .hljs-header,.ruby .hljs-symbol,.ruby .hljs-symbol .hljs-string,.smalltalk .hljs-class,.tex .hljs-command,.tex .hljs-special{color:#800}.asciidoc .hljs-blockquote,.diff .hljs-header,.hljs-annotation,.hljs-chunk,.hljs-comment,.hljs-template_comment,.markdown .hljs-blockquote,.smartquote{color:#888}.asciidoc .hljs-bullet,.asciidoc .hljs-link_url,.go .hljs-constant,.hljs-change,.hljs-date,.hljs-hexcolor,.hljs-literal,.hljs-number,.hljs-regexp,.lasso .hljs-variable,.makefile .hljs-variable,.markdown .hljs-bullet,.markdown .hljs-link_url,.smalltalk .hljs-char,.smalltalk .hljs-symbol{color:#080}.apache .hljs-sqbracket,.asciidoc .hljs-attribute,.asciidoc .hljs-link_label,.clojure .hljs-attribute,.coffeescript .hljs-property,.erlang_repl .hljs-reserved,.haml .hljs-bullet,.hljs-array,.hljs-attr_selector,.hljs-decorator,.hljs-deletion,.hljs-doctype,.hljs-envvar,.hljs-filter .hljs-argument,.hljs-important,.hljs-javadoc,.hljs-label,.hljs-localvars,.hljs-phony,.hljs-pi,.hljs-prompt,.hljs-pseudo,.hljs-shebang,.lasso .hljs-attribute,.markdown .hljs-link_label,.nginx .hljs-built_in,.ruby .hljs-string,.tex .hljs-formula,.vhdl .hljs-attribute{color:#88f}.apache .hljs-tag,.asciidoc .hljs-strong,.bash .hljs-variable,.css .hljs-tag,.hljs-built_in,.hljs-dartdoc,.hljs-id,.hljs-javadoctag,.hljs-keyword,.hljs-phpdoc,.hljs-request,.hljs-status,.hljs-title,.hljs-type,.hljs-typename,.hljs-winutils,.hljs-yardoctag,.markdown .hljs-strong,.smalltalk .hljs-class,.tex .hljs-command{font-weight:400}.asciidoc .hljs-emphasis,.markdown .hljs-emphasis{font-style:italic}.nginx .hljs-built_in{font-weight:400}.coffeescript .javascript,.javascript .xml,.lasso .markup,.tex .hljs-formula,.xml .css,.xml .hljs-cdata,.xml .javascript,.xml .vbscript{opacity:.5}.hljs,.hljs-change,.hljs-flow,.hljs-keyword,.hljs-literal,.hljs-strong,.hljs-tag,.hljs-tag .hljs-title,.hljs-winutils,.nginx .hljs-title,.tex .hljs-special{color:#fff}.hljs .hljs-constant,.hljs-code{color:#66d9ef}.hljs-class .hljs-title,.hljs-code,.hljs-header{color:#fff}.hljs-attribute,.hljs-link_label,.hljs-regexp,.hljs-symbol,.hljs-symbol .hljs-string,.hljs-value{color:#bf79db}.apache .hljs-cbracket,.apache .hljs-tag,.django .hljs-filter .hljs-argument,.django .hljs-template_tag,.django .hljs-variable,.hljs-addition,.hljs-attr_selector,.hljs-built_in,.hljs-bullet,.hljs-emphasis,.hljs-envvar,.hljs-javadoc,.hljs-link_url,.hljs-pragma,.hljs-preprocessor,.hljs-prompt,.hljs-pseudo,.hljs-stream,.hljs-string,.hljs-subst,.hljs-tag .hljs-value,.hljs-title,.hljs-type,.ruby .hljs-class .hljs-parent,.smalltalk .hljs-array,.smalltalk .hljs-class,.smalltalk .hljs-localvars,.tex .hljs-command{color:#1E824C}.apache .hljs-sqbracket,.hljs-annotation,.hljs-blockquote,.hljs-comment,.hljs-decorator,.hljs-deletion,.hljs-doctype,.hljs-horizontal_rule,.hljs-pi,.hljs-shebang,.hljs-template_comment,.smartquote,.tex .hljs-formula{color:#75715e}.apache .hljs-tag,.bash .hljs-variable,.css .hljs-id,.diff .hljs-header,.hljs-chunk,.hljs-dartdoc,.hljs-header,.hljs-keyword,.hljs-literal,.hljs-phpdoc,.hljs-request,.hljs-status,.hljs-title,.hljs-type,.hljs-winutils,.rsl .hljs-built_in,.smalltalk .hljs-class,.tex .hljs-special,.vbscript .hljs-built_in{font-weight:700}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .css,.xml .hljs-cdata,.xml .javascript,.xml .vbscript{opacity:.5}body{height:100%}.hljs{color:#C8F7C5}#pre-z{width:100%;position:fixed;top:0;height:100%;overflow-y:scroll;left:-100%;z-index:999999;-webkit-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}input.pre-z-check{display:none}label.pre-z-lbl{color:#FFF;background-color:rgba(46,204,113,.95);padding:10px 30px;position:fixed;top:10px;left:0;z-index:999999;text-align:center;cursor:pointer;-webkit-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}label.pre-z-lbl-x{color:#FFF;background-color:rgba(46,204,113,.95);padding:10px 30px;position:fixed;top:10px;left:0;z-index:9999999;-webkit-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;cursor:pointer;opacity:0;border:3px solid #fff;border-left:0}#pre-z pre{margin:0;font-size:12px;font-family:"Lucida Sans Unicode","Lucida Grande",sans-serif;background-color:rgba(46,204,113,.95);color:#FFF;border:none;border-radius:0;padding-top:5px;height:100%}#pre-z code{background-color:transparent;height:100%}input.pre-z-check:checked~#pre-z{left:0}input.pre-z-check:checked~label.pre-z-lbl{opacity:0}input.pre-z-check:checked~label.pre-z-lbl-x{opacity:1}#pre-z p{padding:50px;text-align:center;word-break:break-all;word-wrap:break-word;line-height:1.4;font-size:14px}#pre-z p span{font-size:150%}#pre-z h1{font-size:50px;text-align:center}</style>
	<input id="pre-z-check" type="checkbox" class="pre-z-check">
	<label class="pre-z-lbl" for="pre-z-check">PRE-Z</label>
	<label class="pre-z-lbl-x" for="pre-z-check">CLOSE</label>
	<div id="pre-z">
	<pre><code class="css"><h1>PRE-Z</h1>';
	if($prez) { 
		print_r($prez);
	} else {
		echo '<p>SOMETHING WENT WRONG</p>';
	} 
	echo '</code></pre></div>';
}
?>
