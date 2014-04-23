Women-s-Transit
===============

PHP 5.0 MVC Web Application for Women's Transit



# TODO
* Build actions to handle requests for Logging in, Registering, Confirming Email, and API for the Status Page to auto-update
* Write CRUD operation functions in our controller for basic DB entries

# Current Work
## Matt

### User Views
* /home/index - Complete
* /home/register - Complete
* /home/status - Complete
* /home/ride - Complete
* /home/favorites -- This will display all the fav locations of the current user and allow them to select 1 to use
* /home/other -- This will just display a form to enter an address, with the option to save it as a Favorite
* /home/confirm - Complete
* /home/profile -- This page will display all information about the user and allow editing of information

### Admin Views
* /admin/index - Complete
* /admin/status - Half-Complete: still needs ability to edit and delete current rides
* /admin/manage - This will be a table of all users with the ability to edit them
* /admin/add - This will be used to add a ride manually

## Daniel


## Brenden



## Getting Started

I have altered the config.php, routes.php, and database.php so that it reflects what we want.  Make sure you have a 
MySQL database running on localhost with a username="root", password="" and a schema called womenstransit. If you
 do not have this, then you will need to change the respective files in Application/Config in order to get it working
on your own machine.


### Layout Functionality
I have also added the layout library to the project. Therefore, we now have a layout, application/views/layout_main.php, that uses a template to serve partial views.  Please see application/controllers/home.php to see how the controller serves up a layout view and sends data. I am sending a simple string across within an array. This is how data is sent to the view, and the view accesses the data by simply using a variable of the same name. This is seen in /views/home/test.php

