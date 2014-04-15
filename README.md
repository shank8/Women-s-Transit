Women-s-Transit
===============

PHP 5.0 MVC Web Application for Women's Transit


## Getting Started

I have altered the config.php, routes.php, and database.php so that it reflects what we want.  Make sure you have a
MySQL database running on localhost with a username="root", password="" and a schema called womenstransit. If you
do not have this, then you will need to change the respective files in Application/Config in order to get it working
on your own machine.


### Layout Functionality
I have also added the layout library to the project. Therefore, we now have a layout, application/views/layout_main.php, that uses a template to serve partial views.  Please see application/controllers/home.php to see how the controller serves up a layout view and sends data. I am sending a simple string across within an array. This is how data is sent to the view, and the view accesses the data by simply using a variable of the same name. This is seen in /views/home/test.php