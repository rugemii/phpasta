# PHPASTA

This project is made intended for review and learning purposes only of the the PHP  
Programming Language. Happy programming!

I forgot to document my learning journey here, so here we go.

##### Escaping the output 

It means data from your side is not harmful, user input? transform it to 
an unharmful data.

##### Cross-Site Scripting (XSS)

Let's say run an authorized code on your application from the client-side, that's 
why you don't want to trust user input or filter the user input. Don't trust
the user, they want to break your application. There are 3 types:

- stored : on the server on the client
- reflected : returned code from user input , cool
- dom-based : the dom (browser document) data used by code 

htmlentities($string, ENT_QUOTES) 
htmlspecialchars() 

These two function will replace sensitive chars to html named associated entities  

##### Cross-Site Request Forgery  

Execute unwanted action on the application while currently authenticated, maybe 
access files of other users, transfer funds all sort of unauthorized actions. Maybe 
all stealing of information takes place on the background through an invisible thing 
"pixels" possibly. 

Can be mitigated by generated CSRF token that comes along with the session or optionally 
with the form session itself. One on the side and on the other side, if it's a match, 
then the request is allowed. The attacker doesn't know the csrf token so the request 
will fail at token validation. Err, invalid request (don't tell it's the csrf). So the 
only way to bypass that is to access the client's machine get the tokens and send a request 
to the server. 

##### Building an application

Every application has a singe point of entry and maybe a bunch of exits, lol. But in our case
an index should be handling all the http request and response, will include all the scripts that 
will help achieve its tasks, the servers document root will be handling it \web

How bout the business logic, for sure we have one for this. The src folder will containing the 
business logic of the application and also the presentation file. The scripts will be grouped 
according to their operation type like component, template and handlers. 
The components will be the glue to handlers and templates. What does a router do? 
a router make way or knows the way to a certain point across an area, while 
template will show you a definite view of an area in that location.

The client request a data and sure the server should respond, the handler maybe very busy and exhausted 
all the time. One's mind should empty all his thoughts about API on this one, view the bigger picture on 
what are the things that should be handled like the Login for authentication, Logout for the session and 
Profile privacy probably. 

Remember the days when sms was booming, templates were not used in my personal experience but i assume that 
was used by busy human to reduce the time to compose something for a reply. In development, templates are 
sort of used like that way. Get the data and feed it to template then show it to the guys who wants that 
information presented in a good way.

So the first part was introduction on how the view or the templates will be used, the index as the entry point. 
The instances of templates under the components. Like what we have discussed before, the templates is being fed by 
data but it must know how it will present the data so the name of the template file must be fed on it then render.

Remember Mr. Handler? Abstracted and added a handle functionality to it. Classes are created because of abstraction,
so verb, noun and concepts can be classes and this goes the same with Handler, we can a hander for the Login,
the question that should be asked is "what should we handle?" then we'll arrive the right class and implement the 
handle method and output the right template for that. Awesome, "i can handle it", the handler said.

It's not magic that when the user type a url on the browser, we already know where to find the right script to be called 
or who should handle that and output something on the display, thus we have a thing that will handle that, 
the so called router, give the path to him and he knows the way, whose going to handle (template inside it) that.

What's confusing is where all the data goes, what is visible on the code, what can be called and you have no clue what's
the state of those data and are they going to be displayed or appear on the page.

##### Data Persistence

So this chapter involves file input/output handling, data storage and databases. File 
system and persistent storage come hand in hand but when the former is not present 
it is very critical due to its availability. File manipulation, the read and write 
is relative to the working script and not to the current working directory, where
the server is started, so we have magic constants. So this magic constants change their 
value depending on where they are called or used. A resource in PHP is a pointer to an 
external resource how clear is that to me or to a data stream.

Like a normal user action on a file, php provides open, read functions. Also a function 
for measureing the memory usage of the operation. Well i've heard wrappers before especially
on sass and it's implementation to other programming languages specifically on c. In my 
own terms, it's a layer to run the main code. I forgot to note which is better when reading 
a file, file_get_contents put the data on to memory first so it's not suited for large 
files and fread does the job better.

In terms of writing to a file, fwrite() function is more preferred because it keeps the 
resource pointer open for writing often applicable for repeated writes in case of loggers.
file_put_contents function on the otherhand, is good for one time operation. So we're on
the deletion of files, and this is unlink function.

##### Databases

So we're now on Databases and PDO or PHP Database Objects extension will be use for the 
following exercises. I need to make sure i have mySQL running and pdo_mysql driver
installed, also look at the configuration. I manually installed (sounds normal) the MySQL 
server from a zip file so i have to go through the documentation to atleast know some 
details on it. On a larger perspective, a typical web application solves business problems.
Together with the previous lessons, data were processes first through request and being 
handled by the right handler. What's in my mind is, the type of request (post, get, put, 
etc). Where do object creation takes place? is in the handler (controller) receives or 
being included in the handler or in the view (template). Anyway, this will be cleared 
throughout the book.

So we tackle the feature of PDO and PDO Statement which feature templated queries to 
prevent sql injection attacks - an input that is malicious which can be executed on 
the server to destroy data or information, frequently result from not escaping user 
input and trusting all the user's effort on the system. It's worth mentioning to know 
also the config and options that can be passed to each of the servers in a web application.
Now done with the basic operation on tables and row and simple queries, tackling on 
patterns right now. On the list is singleton pattern.

##### The Singleton Pattern

So this pattern was used for instantiating a connection object to the database to make sure 
that only one connection is being used throughout an application, isn't that bad? what if many 
processes or calls was being run on the application, is there a waiting mechanism, wait for this 
process to be done then execute the next one. But i have read database servers call something 
that is a pool, where concurrent connections are being done on a single point, not really. Anyway,
proceeding with the lesson.

##### Contact Management Application

An actvity was introduced after 4 Chapters of study, i don't have the time to code but i have the 
time to plan the activity and execute it after: So here it goes.

- Identify the features and requirements first and the following are those:
	
	- users can create an account
	- login to manage a private list of contacts
	- make use of database to store information and operation on it (CRUD)
		- user login data 
		- user private contact data
	- create pages for the following
		- homepage
		- login
		- sign up
		- contact list
			- add
			- edit

- things to consider in this project

	- the entities
		- users
		- contact

	- the authentication
		- user should be able to access if he/she is part of the system
	- the session management
		- the user should be able to access authorized page
		- redirection to the right page
	- form validation
		- filter
			- email
			- password
			- contact number
		- htmlentities

- all of the operations will happen in the backend
	
	- error info 
	- all data will be fed into the template

- suggested workflow
	
	- i can start with the frontend first
	- start by domain first like generalizing the functionalities or grouping it.
		- user management
			- logging in
			- logging out
		- session management
			- when to create a session
			- when to destroy a session
		- contact management
			- creation
			- read
			- update
			- delete
	- validations will be always on the way
	- page authorization
		- when can a user access a certain page
			- when a session is created
			- a successful authentication means a session creation
			- can a user visit the logout page when not logged in? no
			- a user can access the profile page when logged in
			- 