#Inhabitent - WP Projects

In this project we use the following language, databases, webservices and softwares: 

* PHP 
* APACHE
* MYSQL
* MAMP
* CSS
* SASS
* JAVASCRIPT
* JQUERY
* GIT
* GULP
* And Google (this one was the most used it. =) )


What I Have learn with this project

# Set up WP 

When we think about creating a WP site its important to understand the LAMP tool, 
which is the integration of LINUX,APACHE,MYsql and PHP, those tools powered up WP, and its 
neccesary to install them in order to make WP works. 

Each tool has to be installed in a pc in order to use them. However, there are tools like MAMP,
that let us install the fourth of them to powered up our website. 

We have to create a database on Mysql which is a relational dataBase (it means
that the data its gonna be saved on rows and columns) this database has his own user name 
and password. 

once we have created the dataBase we have to install WP. And thats it Wordpress will run using
your computer as a server. 


* Wordpress hierarchy
its the way that this CMS organize the template that will use to create the content, 
in other words, depending on what type of content it's being shown WP will use a 
differente template.

* Theme 

Word press can be accessed by two kind of user, a User that only wants to use it liker a CMS 
and create his own webpage. In that case this user can select any of the free thousands that WP 
has (free and paid). 

The other kind of user is one who can create a theme and share it with others. 

A template will let anyone to create a webpage using the same visual markup. 
In conclusion a theme can be made or can be pickef between thousands of themes already created for someone else. 
These templates only are going to add a markup view of the webpage and they shouldnt add 
any functionability to the web page. 

* Plugins

Plugins were created in order to add funcionability to the web pages and is in this section where developers
should add functionailities. Additional, plugins can be created on installed from third parts. 

In this project we install several plugins in order to help us to create our web page.

 * contact fomr 7
 * Custom Field Suite
 * Debug Bar
 * Gutenberg
 * Query Monitor
 * Show Current Template 
 * Theme Check
 * WP migrate

we create others:

* business hours
* contact info 


* Post

 the posts will let you create the mainly tipe of content of your web, It's important to understand
 that WP was created to manage this kind of data. Through the loop of WP its possible to show the 
 whole content of the information saved on this DB. 

* Custom Post Type CPT

Its a post type that was created just for this particular project it could be reused in other projects, basically 
we have to create a new data like this: 

 '''
 function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),

'''
 and after that we have to create and Action in WP to register this CPT. 

 Once we have done that we have to create the content en each CPT and we can also call this content 
 using the loop of WP.

* loop

The loop is the most important tool of WP it let us create content using our DATABASES, each loop can 
be used to go through every data base to show the whole or just part of the content of that data Base. 



* Contain a static “Find Us” page with an embeded Google Map

* embeded direclty from the google maps api. 

 * and functioning contact form, styled appropriately (page.php)

 using the plugin contact form 7


* PHP

Its a logical language program with let us interact with the dataBase, through several or thousand functions we c
can create a dinamic website fed it by the the loop...



 