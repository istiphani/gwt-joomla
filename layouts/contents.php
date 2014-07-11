<!-- contents -->
<div id="main"><a name="maincontents"></a>
	<div class="row">
		
		<?php if ($this->params->get('sidebarPosition') == 3): ?>
			
			<?php include JPATH_THEMES . '/' . $this->template .'/layouts/content-modules.php'; ?>
			
			<div class="large-3 medium-3 columns">
				<jdoc:include type="modules" name="left-sidebar" style="xhtml" />
			</div>
			
			<div id="content" class="large-6 medium-6 columns">
				<div class="post-box">
		            <jdoc:include type="message" style="xhtml" />
		            <jdoc:include type="component" style="xhtml" />
				</div>
			</div>
			
			<div class="large-3 medium-3 columns">
				<ul class="breadcrumbs time">
					<p class="pst">PHILIPPINE STANDARD TIME</p>
					<iframe src="http://oras.pagasa.dost.gov.ph/time_display/time/" frameborder="0" height="20" width="175" allowTransparency="true" scrolling="no"></iframe>
				</ul>
				<jdoc:include type="modules" name="right-sidebar" style="xhtml" />
			</div>
			
			<?php include JPATH_THEMES . '/' . $this->template .'/layouts/content-modules-bott.php'; ?>
		
		<?php elseif ($this->params->get('sidebarPosition') == 2): ?>
			
			<?php include JPATH_THEMES . '/' . $this->template .'/layouts/content-modules.php'; ?>
			
			<div id="content" class="large-12 columns">
				<div class="post-box">
		            <jdoc:include type="message" style="xhtml" />
		            <jdoc:include type="component" style="xhtml" />
				</div>
			</div>
			
			<?php include JPATH_THEMES . '/' . $this->template .'/layouts/content-modules-bott.php'; ?>
			
		<?php elseif ($this->params->get('sidebarPosition') == 1): ?>
			
			<?php include JPATH_THEMES . '/' . $this->template .'/layouts/content-modules.php'; ?>
			
			<div>
			
			<div id="content" class="large-8 medium-8 columns">
				<div class="post-box">
		            <jdoc:include type="message" style="xhtml" />
		            <jdoc:include type="component" style="xhtml" />
				</div>
			</div>
			
			<div class="large-4 medium-4 columns">
				<ul class="breadcrumbs time">
					<p class="pst">PHILIPPINE STANDARD TIME</p>
					<iframe src="http://oras.pagasa.dost.gov.ph/time_display/time/" frameborder="0" height="20" width="175" allowTransparency="true" scrolling="no"></iframe>
				</ul>
				<jdoc:include type="modules" name="right-sidebar" style="xhtml" />
			</div>
			
			</div>
			
			<?php include JPATH_THEMES . '/' . $this->template .'/layouts/content-modules-bott.php'; ?>
			
		<?php else: ?>
			
			<?php include JPATH_THEMES . '/' . $this->template .'/layouts/content-modules.php'; ?>
			
			<div class="large-4 medium-4 columns">
				<ul class="breadcrumbs time">
					<p class="pst">PHILIPPINE STANDARD TIME</p>
					<iframe src="http://oras.pagasa.dost.gov.ph/time_display/time/" frameborder="0" height="20" width="175" allowTransparency="true" scrolling="no"></iframe>
				</ul>
				<jdoc:include type="modules" name="left-sidebar" style="xhtml" />
			</div>
			
			<div id="content" class="large-8 medium-8 columns">
				<div class="post-box">
		            <jdoc:include type="message" style="xhtml" />
		            <jdoc:include type="component" style="xhtml" />
				</div>
			</div>
			
			<?php include JPATH_THEMES . '/' . $this->template .'/layouts/content-modules-bott.php'; ?>
		
		<?php endif?>
		
	</div>
</div>
		
		

		
		
		
		
<!-- end contents -->
