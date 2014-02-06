    <div class="container-topbar">
        <div class="row">
            <div class="small-12 large-12 columns toplayer">
                <nav class="top-bar nomargin" style="">
                    <ul class="title-area">
                        <!-- Title Area -->
                        <li class="name">
                            <h1><a href="http://www.gov.ph" style=""><img src="templates/gwt-jmla-223/images/seal-govph-old.png" alt="Republic of the Philippines"></a></h1>
                        </li>
                        <li class="toggle-topbar"><a href="#"></a></li>
                    </ul>
                    
                <section class="top-bar-section">
                    <!-- Left Nav Section -->
                    <ul class="left">
                        <li class="divider"></li>
                        <?php if ($this->countModules('home')): ?>
                        <jdoc:include type="modules" name="home" style="none" />
                        <li class="divider"></li>
                        <?php endif ?>
                        
                        <?php if ($this->countModules('topbar-left-1')): ?>
                        <jdoc:include type="modules" name="topbar-left-1" style="none" />
                        <li class="divider"></li>
                        <?php endif ?>
                        
                        <?php if ($this->countModules('topbar-left-2')): ?>
                        <jdoc:include type="modules" name="topbar-left-2" style="none" />
                        <li class="divider"></li>
                        <?php endif ?>
                        
                        <?php if ($this->countModules('topbar-left-3')): ?>
                        <jdoc:include type="modules" name="topbar-left-3" style="none" />
                        <li class="divider"></li>
                        <?php endif ?>
                        
                        <?php if ($this->countModules('topbar-left-4')): ?>
                        <jdoc:include type="modules" name="topbar-left-4" style="none" />
                        <li class="divider"></li>
                        <?php endif ?>
                    </ul>
                    
                    <!-- Right Nav Section -->
                    <ul class="right">
                        <?php if ($this->countModules('topbar-right-1')): ?>
                        <li class="divider"></li>
                        <jdoc:include type="modules" name="topbar-right-1" style="none" />
                        <li class="divider"></li>
                        <?php endif ?>
                        
                        <?php if ($this->countModules('topbar-right-2')): ?>
                        <jdoc:include type="modules" name="topbar-right-2" style="none" />
                        <li class="divider"></li>
                        <?php endif ?>
                        
                        <?php if ($this->countModules('search')): ?>
                        <li class="search"><jdoc:include type="modules" name="search" style="none" /></li>
                        <li class="divider"></li>
                        <?php endif ?>
                    </ul>
                    
                </section>
                </nav>
            </div>
        </div>
    </div>