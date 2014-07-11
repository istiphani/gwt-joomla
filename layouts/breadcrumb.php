<!--auxiliary menu-->
<?php if ($this->countModules('auxiliary-menu')): ?>
	<div id="auxiliary">
		<div class="row">
			<div class="large-12 columns">
				<nav class="top-bar" data-topbar>
            		<section class="top-bar-section">
                		<ul class="left">
							<li class="divider"></li>
                   			<li><jdoc:include type="modules" name="auxiliary-menu" style="none" /></li>
							<li class="divider"></li>
                    	</ul>
              	  </section>
				</nav>
			</div>
		</div>
	</div>
<?php endif ?>

<!-- end auxiliary menu-->

<!-- breadcrumb -->
<?php if ($this->countModules('breadcrumbs')): ?>
	<div id="breadcrumbs">
		<div class="row">
			<div class="large-12 columns">
				<jdoc:include type="modules" name="breadcrumbs" style="none" />
			</div>
		</div>
	</div>
<?php endif ?>
<!-- end breadcrumb -->