<style>
.site_switcher_outer {
	margin-left: 1120px;
	position: fixed;
	top: 50%;
	transform: translateY(-50%);
	z-index: 1;	
}

.site_switcher_inner {
	background-color: #<?php echo $button_switcher_color; ?>;
	border-radius: 25px 0 0 25px;
	float: right;
	font-size: 1.3em;	
	overflow: hidden;
	width: 70px;
	white-space: nowrap;
}

.site_switcher_inner a{
	color: #333333 !important;
	text-decoration: none !important;
}

#site_switcher_cursor {
	font-family: "Open Sans", Verdana, Arial;
	font-size: 2em;		
	font-weight: 900;
	vertical-align: middle;
}

#site_switcher_text {
	vertical-align: middle;	
}
</style>