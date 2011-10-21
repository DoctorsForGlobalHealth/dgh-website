DGH Website
===========

This is the codebase that runs the Doctors for Global Health website (http://www.dghonline.org/).  The website is built on the Drupal content management system.

Install
-------

This requires a LAMP stack, like any Drupal site.  XAMPP is a quick way to spin one up on your local dev machine.  From there you'll need a sql dump of the current site, and a zip of the production files directory.  You can get both of these off the production server (ask Rahul).

Adding Modules
--------------

Add and remove modules using Drush (http://drupal.org/project/drush).  For instance, to add the stupid_awesome module, you would do this in the html directory:
> drush dl stupid_awesome
