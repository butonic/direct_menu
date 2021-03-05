@media only screen and (min-width: <?php p($_['width']); ?>px) {

	#navigation {
		padding: 0;
		top: 0;
		left: 50%;
		box-shadow: none;
		overflow: visible !important;
		margin-left: -<?php p($_['navigation_width']/2); ?>px;
		max-width: none;
		background-color: transparent;
		display: block !important;
	}

	#navigation #apps {
		overflow: visible;
	}

	#navigation div ul {
		display:flex;
	}

	#navigation div ul li {
		height: 44px;
	}

	#navigation div ul li a {
		margin: 0;
		padding: 12px;
		padding-left: 6px;
		padding-right: 6px;
		width: 50px;
		height: 44px;
		position: static;
		text-align: center;
		color: #1d2d44 !important;
	}

	#navigation img.app-icon {
		width: 20px;
		height: 20px;
	}

	#navigation .app-loading .app-icon,
	#navigation .app-loading svg {
		display: none;
	}

	#navigation .app-loading .icon-loading-dark {
		background-size: 20px;
		position: relative;
		top: 0;
		left: 0;
		width: 20px;
		height: 20px;
		display: inline-block !important;
	}

	#navigation #apps .app-loading .icon-loading-dark::after {
		width: 18px;
		height: 18px;
		margin: -10px 0 0 -10px;
	}

	#navigation div li span {
		display: none;
		position: absolute;
		overflow: visible;
		left: 0;
		top: 45px;
		background-color: #FFF;
		border: 1px solid #000;
		color: #000;
	}

	#navigation div li:hover a {
		position: relative
	}

	#navigation div li:hover span {
		display: block
	}

	#navigation div li:hover span {
		width: auto;
		padding: 8px 12px;
		background-color: #fff;
		border-radius: 3px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
		margin-top: 0;
		border: none;
		color: #333;
		left: 50%;
		transform: translateX(-50%);
		-webkit-filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
		-moz-filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
		-ms-filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
		-o-filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
		filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
	}

	#navigation div li:hover span {
		display: block;
	}

	#navigation div li:hover span:after,
	#navigation div li:hover span:before {
		content: " ";
		bottom: 100%;
		left: 50%;
		border: solid transparent;
		height: 0;
		width: 0;
		position: absolute;
		pointer-events: none;
		margin-left: -9px;
	}

	#navigation div li:hover span:after {
		border-bottom-color: white;
		border-width: 8px;
		margin-left: -8px;
	}

	#navigation div li:hover span:before {
		border-bottom-color: white;
		border-width: 9px;
	}

	a.menutoggle .icon-caret, a.menutoggle .burger {
		display: none !important;
	}
	a.menutoggle .header-appname {
		cursor: default;
	}
	#header #owncloud {
		display: none;
	}

	#navigation svg {
		width: 20px;
		height: 20px;
	}

	#navigation svg image {
		width: 100%;
		height: 100%;
	}

	#navigation a svg,
	#navigation a span {
		opacity: .5;
	}

	#navigation a:hover svg,
	#navigation a:hover span,
	#navigation a.active svg,
	#navigation a.active span {
		opacity: 1;
	}
}
