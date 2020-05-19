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