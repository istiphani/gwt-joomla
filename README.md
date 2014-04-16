gwt-joomla
==========

for joomla 3.x

* Minor changes

      * Changed color of breadcrumb
      * Added borders to sidebar
      * Fixed search box css, in modules/mod_search.php
      * breadcrumbs, auxiliary menu displays none for screens lower than 767px
      * added favicon.ico and robots.txt
      * added print,pdf,email icons and css for article details
      * added css for contacts
      * 2014/04/16 added two center modules (see notes below)

* Major changes

      * Removed transparency seal option in template theme options. Transparency seal should be created as a module. Image is available at /templates/gwt-jmla/223/images/transparency-seal.png
      * Slider input in template, images, captions, and link to
      * For slider, input images in theme options and create a blank CUSTOM HTML Module to place in the SLIDER module position.

Notes:
For GWT users who do not want to automatically show their latest articles in the home page, delete the following lines in the template folder's index.php - 

<jdoc:include type="message" style="xhtml" />
<jdoc:include type="component" style="xhtml" />


==========
Template Contributors:
Eric Colmenares - Department of Science and Technology Region 11, http://region11.dost.gov.ph
