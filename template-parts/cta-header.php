<header class="fixed" id="cta-header">
	<div class="app-wrapper">
		<div class="ms-CommandBar">
			<div class="ms-CommandBar-sideCommands">
				<div class="ms-CommandButton">
					<button class="ms-CommandButton-button" title="Ask a question" id="open-contact-button">
						<span class="ms-CommandButton-icon ms-fontColor-themePrimary"><i class="ms-Icon ms-Icon--ContactInfo"></i></span> 
						<span class="ms-CommandButton-label ms-u-hiddenSm">Ask a question</span> 
					</button>
				</div>
				<div class="ms-CommandButton">
					<a class="ms-CommandButton-button" title="request a demo" href="/request-a-demo?product=business-essentials">
						<span class="ms-CommandButton-icon ms-fontColor-themePrimary"><i class="ms-Icon ms-Icon--Touch"></i></span> 
						<span class="ms-CommandButton-label ms-u-hiddenSm">Request a demo</span> 
						<span class="ms-CommandButton-label ms-u-hiddenMdUp">Demo</span>
					</a>
				</div>
			</div>
			<div class="ms-CommandBar-mainArea">
				<div class="ms-CommandButton ms-CommandButton--noLabel">
					<img src='<?php bloginfo('template_directory'); ?>/assets/GitBit-logo-50x50.png' alt='GitBit' height='34' width='34' class='logo  ms-u-hiddenSm'/>
				</div>
				<div class="ms-CommandButton">
					<a class="ms-CommandButton-button" href="tel:+15555555555" title="call (555) 555-5555">
						<span class="ms-CommandButton-icon ms-fontColor-themePrimary"><i class="ms-Icon ms-Icon--Phone"></i></span> 
						<span class="ms-CommandButton-label">(555) 555-5555</span> 
					</a>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="docs-DialogExample-lgHeader">
	<div class="ms-Dialog ms-Dialog--lgHeader contact-dialog">
		<div class="ms-Dialog-title">Ask a question</div>
		<div class="ms-Dialog-content">
			<div class="fiber-ninja-form">
				<?php echo do_shortcode("[ninja_form id=5]"); ?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var previous = window.scrollY;
	var header = document.getElementById("cta-header");

	if (previous < 520) {
		header.style.display = 'none';
	}

	window.addEventListener('scroll', function(e) {
		if (previous < 520 && window.scrollY >= 520) {
			header.style.display = 'block'
		} else if (previous >= 520 && window.scrollY < 520) {
			header.style.display = 'none';
		}

		previous = window.scrollY;
	});
</script>

<script type="text/javascript">
	window.onload = function() {
		var dialog = document.querySelector(".ms-Dialog");
		var dialogComponent = new fabric['Dialog'](dialog);

		document.getElementById("open-contact-button").onclick = function() {
		  dialogComponent.open();
		};
	}
</script>