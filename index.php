<?php

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet('templates/' . $this->template . '/css/foundation.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');

$doc->addScript('templates/' . $this->template . '/js/vendor/custom.modernizr.js', 'text/javascript');
JHtml::_('jquery.framework');


$option = JFactory::getApplication()->input->getVar('option');
$view = JFactory::getApplication()->input->getVar('view');
// Make sure it is a single article
if ($option == 'com_content' && $view == 'article'):
  $id = JFactory::getApplication()->input->getInt('id');
  $article = JTable::getInstance('content');
  $article->load($id);
  $author_id = $article->created_by;
  $user = JFactory::getUser($author_id);

  $article_title = $article->get('title');
  $article_created = $article->created;

  $article_alias = $article->get('alias');
  $article_introtext = $article->get('introtext');
  $article_fulltext = $article->get('fulltext');
  $author = $user->name;

  $db = &JFactory::getDBO();
  $id = JRequest::getString('id');
  $db->setQuery('SELECT #__categories.title FROM #__content, #__categories WHERE #__content.catid = #__categories.id AND #__content.id = '.$id);
  $category = $db->loadResult();
endif;

// Logo
$logoPosition = ($this->params->get('logoPosition') == 0 ? 'left' : 'center');

if ($this->params->get('logoFile'))
{
  $logo = '<a href="#" style="background-position:top '.$logoPosition.'; background-image:url('.$this->params->get('logoFile').');">Presidential Communications Development and Strategic Planning Office</a>';
}
else
{
  $logo = '<a href="#" style="background-position:top '.$logoPosition.';">Presidential Communications Development and Strategic Planning Office</a>';
}

if ($this->params->get('headerBackgroundImage'))
{
  $background = 'style="background-image:url('.$this->params->get('headerBackgroundImage').');"';
}
else
{
  $background = 'style="background-color:'.$this->params->get('headerBackgroundColor').';"';
}


?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div class="container-topbar">
      <div class="row">
          <div class="small-12 large-12 columns toplayer">
              <nav class="top-bar nomargin" style="">
                      <ul class="title-area">
                        <!-- Title Area -->
                        <li class="name">
                          <h1><a href="<?php '/'.$this->baseurl ?>">Top Bar</a></h1>
                        </li>
                        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                        <li class="toggle-topbar"><a href="#"></a></li>
                      </ul>
                      <section class="top-bar-section">
                          <ul class="left">
                            <li class="divider"></li>
                            <li class="home menu-topbar"><a href="<?php '/'.$this->baseurl ?>">Home</a></li>
                            <li class="divider"></li>
                            <?php if ($this->countModules('topbar-left-transparency')): ?>
                            <jdoc:include type="modules" name="topbar-left-transparency" style="none" />
                            <li class="divider"></li>
                            <?php endif ?>
                            <?php if ($this->countModules('topbar-left-custom1')): ?>
                            <jdoc:include type="modules" name="topbar-left-custom1" style="none" />
                            <li class="divider"></li>
                            <?php endif ?>
                            <?php if ($this->countModules('topbar-left-custom2')): ?>
                            <jdoc:include type="modules" name="topbar-left-custom2" style="none" />
                            <li class="divider"></li>
                            <?php endif ?>
                            <?php if ($this->countModules('topbar-left-custom3')): ?>
                            <jdoc:include type="modules" name="topbar-left-custom3" style="none" />
                            <li class="divider"></li>
                            <?php endif ?>
                          </ul>
                          <!-- Right Nav Section -->
                          <ul class="right">
                            <?php if ($this->countModules('topbar-right-custom1')): ?>
                            <li class="divider"></li>
                            <jdoc:include type="modules" name="topbar-right-custom1" style="none" />
                            <li class="divider"></li>
                            <?php endif ?>
                            <?php if ($this->countModules('topbar-right-custom2')): ?>
                            <jdoc:include type="modules" name="topbar-right-custom2" style="none" />
                            <li class="divider"></li>
                            <?php endif ?>
                            <?php if ($this->countModules('topbar-right-custom3')): ?>
                            <jdoc:include type="modules" name="topbar-right-custom3" style="none" />
                            <li class="divider"></li>
                            <?php endif ?>
                            <?php if ($this->countModules('search')): ?>
                            <li class="search"><jdoc:include type="modules" name="search" style="none" /></li>
                            <li class="divider"></li>
                            <?php endif ?>
                          </ul>
                        </section></nav>
          </div>
      </div>
  </div>

  <div class="container-masthead" <?php echo $background; ?>>
    <div class="row">
      <header class="large-12 columns">
        <h1 class="logo"><?php echo $logo; ?></h1>
      </header>
    </div>
  </div>

  <div class="container-banner" <?php echo 'style="background-color:'.$this->params->get('bannerBackgroundColor').'; "'; ?>>

      <?php if ($this->countModules('slider')): ?>
        <?php if ($this->params->get('bannerFullwidth')): ?>
          <jdoc:include type="modules" name="slider" style="html5" />
        <?php else: ?>
          <div class="row">
            <div class="large-12 columns flex-slider" style="margin: 30px 0;">
                <jdoc:include type="modules" name="slider" style="html5" />
            </div>
          </div>
        <?php endif ?>
      <?php else: ?>
      <div class="row">
      <div class="large-9 columns">
        <header>
          <?php if ($option == 'com_content' && $view == 'article'): ?>
            <?php if ($article_title): ?>
              <h1 class="entry-title"><?php echo $article_title;  ?></h1>
            <?php endif ?>
            <?php if ($category == 'blog' || $category == 'News & Info'): ?>
              <p>Published <?php echo $article_created; ?></p>
              <p>by <span class="author"><?php echo $author; ?></span></p>
            <?php endif ?>
          <?php endif ?>
        </header>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <div id="container-main" class="container-main" role="document">

    <div id="main" class="row">
<?php if ($this->params->get('sidebarPosition') == 3): ?>
       <aside id="sidebar" class="large-3 columns" role="complementary">
        <div class="sidebar-box">
          <?php if ($this->params->get('sealPosition') == 0): ?>
            <article>
              <a href="#"><img src="templates/uwcp/uploads/images/transparency-seal-1.png" alt=""></a>
            </article>
          <?php endif; ?>
          <div class="section-container auto" data-section>
            <section>
              <jdoc:include type="modules" name="left-sidebar-panel1" style="none" />
            </section>
            <section>
              <jdoc:include type="modules" name="left-sidebar-panel2" style="none" />
            </section>
          </div>
        </div>
      </aside>
      <div id="content" class="large-6 columns" role="main">
        <div class="post-box">
          <jdoc:include type="message" />
          <jdoc:include type="component" />
        </div>
      </div>
      <aside id="sidebar" class="large-3 columns" role="complementary">
        <div class="sidebar-box">
          <?php if ($this->params->get('sealPosition') == 1): ?>
            <article>
              <a href="#"><img src="templates/uwcp/uploads/images/transparency-seal-1.png" alt=""></a>
            </article>
          <?php endif; ?>
          <div class="section-container auto" data-section>
            <section>
              <jdoc:include type="modules" name="right-sidebar-panel1" style="none" />
            </section>
            <section>
              <jdoc:include type="modules" name="right-sidebar-panel2" style="none" />
            </section>
          </div>
        </div>
      </aside>
<?php elseif ($this->params->get('sidebarPosition') == 2): ?>
      <div id="content" class="large-12 columns" role="main">
        <div class="post-box">
          <jdoc:include type="message" />
          <jdoc:include type="component" />
        </div>
      </div>
<?php elseif ($this->params->get('sidebarPosition') == 1): ?>
      <div id="content" class="large-8 columns" role="main">
        <div class="post-box">
          <jdoc:include type="message" />
          <jdoc:include type="component" />
        </div>
      </div>

      <aside id="sidebar" class="large-4 columns" role="complementary">
        <div class="sidebar-box">
          <?php if ($this->params->get('sealPosition') == 0): ?>
            <article>
              <a href="#"><img src="templates/uwcp/uploads/images/transparency-seal-1.png" alt=""></a>
            </article>
          <?php endif; ?>
          <div class="section-container auto" data-section>
            <section>
              <jdoc:include type="modules" name="right-sidebar-panel1" style="none" />
            </section>
            <section>
              <jdoc:include type="modules" name="right-sidebar-panel2" style="none" />
            </section>
          </div>
        </div>
      </aside>
<?php else: ?>
       <aside id="sidebar" class="large-4 columns" role="complementary">
        <div class="sidebar-box">
          <?php if ($this->params->get('sealPosition') == 1): ?>
            <article>
              <a href="#"><img src="templates/uwcp/uploads/images/transparency-seal-1.png" alt=""></a>
            </article>
          <?php endif; ?>
          <div class="section-container auto" data-section>
            <section>
              <jdoc:include type="modules" name="left-sidebar-panel1" style="none" />
            </section>
            <section>
              <jdoc:include type="modules" name="left-sidebar-panel2" style="none" />
            </section>
          </div>
        </div>
      </aside>

      <div id="content" class="large-8 columns" role="main">
        <div class="post-box">
          <jdoc:include type="message" />
          <jdoc:include type="component" />
        </div>
      </div>
<?php endif ?>

    </div>
  </div>

  <div class="container-footer">
    <div id="supplementary" class="row">
      <div class="large-6 columns" role="complementary">
        <article>
          <jdoc:include type="modules" name="supplementary1" style="none" />
        </article>
      </div>

      <div class="large-3 columns" role="complementary">
        <article>
          <jdoc:include type="modules" name="supplementary2" style="well" />
        </article>
      </div>

      <div class="large-3 columns" role="complementary">
        <article>
          <jdoc:include type="modules" name="supplementary3" style="none" />
        </article>
      </div>
    </div>
  </div>

  <div class="container-footer-govph">
    <div class="row">

      <div class="large-4 columns widget-area push-8" role="complementary">
      <article id="image-3" class="widget widget_image"><div class="footer-section"><div class="jetpack-image-container"><img src="templates/gwt-j/images/govph-seal-mono-footer.png" alt="Seal of the Republic of the Philippines - Monochromatic" title="Seal of the Republic of the Philippines - Monochromatic" class="aligncenter" width="280" height="280"></div>
      </div></article><article id="text-10" class="widget widget_text"><div class="footer-section"> <div class="textwidget"><p style="text-align:center;">All content is public domain unless otherwise stated.</p></div>
      </div></article>
      </div>

    <div class="large-3 columns widget-area pull-4" role="complementary">
      <article id="nav_menu-3" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Republic of the Philippines</strong></h6><div class="menu-national-government-portal-container"><ul id="menu-national-government-portal" class="menu"><li id="menu-item-786" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-786"><a href="http://www.gov.ph">Official Gazette</a></li>
      <li id="menu-item-787" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-787"><a href="http://president.gov.ph">Office of the President</a></li>
      <li id="menu-item-3236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3236"><a href="http://www.gov.ph/directory/">Official Directory</a></li>
      <li id="menu-item-3235" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3235"><a href="http://www.gov.ph/calendar/">Official Calendar</a></li>
      </ul></div></div></article><article id="nav_menu-7" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Resources</strong></h6><div class="menu-links-resources-container"><ul id="menu-links-resources" class="menu"><li id="menu-item-3294" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3294"><a href="http://noah.dost.gov.ph/">Project NOAH</a></li>
      </ul></div></div></article>
    </div>

    <div class="large-3 columns widget-area pull-6" role="complementary">
      <article id="nav_menu-4" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Executive</strong></h6><div class="menu-links-executive-container"><ul id="menu-links-executive" class="menu"><li id="menu-item-3237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3237"><a href="http://www.president.gov.ph">Office of the President</a></li>
      <li id="menu-item-3238" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3238"><a href="http://www.ovp.gov.ph">Office of the Vice President</a></li>
      <li id="menu-item-3239" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3239"><a href="http://www.deped.gov.ph">Department of Education</a></li>
      <li id="menu-item-3241" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3241"><a href="http://www.dilg.gov.ph">Department of Interior and Local Government</a></li>
      <li id="menu-item-3240" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3240"><a href="http://www.dof.gov.ph">Department of Finance</a></li>
      <li id="menu-item-3242" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3242"><a href="http://www.doh.gov.ph">Department of Health</a></li>
      <li id="menu-item-3293" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3293"><a href="http://www.dost.gov.ph/">Department of Science and Technology</a></li>
      <li id="menu-item-3296" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3296"><a href="http://www.dti.gov.ph/">Department of Trade and Industry</a></li>
      </ul></div></div></article><article id="nav_menu-6" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Legislative</strong></h6><div class="menu-links-legislative-container"><ul id="menu-links-legislative" class="menu"><li id="menu-item-3248" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3248"><a href="http://www.senate.gov.ph/">Senate of the Philippines</a></li>
      <li id="menu-item-3249" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3249"><a href="http://www.congress.gov.ph/">House of Representatives</a></li>
      </ul></div></div></article><article id="nav_menu-5" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Judiciary</strong></h6><div class="menu-links-judiciary-container"><ul id="menu-links-judiciary" class="menu"><li id="menu-item-3243" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3243"><a href="http://sc.judiciary.gov.ph/">Supreme Court</a></li>
      <li id="menu-item-3244" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3244"><a href="http://ca.judiciary.gov.ph/">Court of Appeals</a></li>
      <li id="menu-item-3245" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3245"><a href="http://sb.judiciary.gov.ph/">Sandiganbayan</a></li>
      <li id="menu-item-3246" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3246"><a href="http://cta.judiciary.gov.ph/">Court of Tax Appeals</a></li>
      <li id="menu-item-3247" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3247"><a href="http://jbc.judiciary.gov.ph/">Judicial Bar and Council</a></li>
      </ul></div></div></article>
    </div>
    </div>
  </div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'templates/uwcp/js/vendor/zepto' : 'templates/uwcp/js/vendor/jquery') +
  '.js><\/script>')
  </script>


  <script src="<?php echo 'templates/' . $this->template . '/js/foundation.min.js'; ?>"></script>
  <script src="<?php echo 'templates/' . $this->template . '/js/custom.js'; ?>"></script>

  <!--
  <script src="templates/uwcp/js/foundation/foundation.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.alerts.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.clearing.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.cookie.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.dropdown.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.forms.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.joyride.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.magellan.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.orbit.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.placeholder.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.reveal.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.section.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.tooltips.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.topbar.js"></script>

  <script src="templates/uwcp/js/foundation/foundation.interchange.js"></script>
  -->
  <script>
    jQuery(document).foundation();
  </script>
</body>
</html>
