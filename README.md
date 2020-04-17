# project
project opens with http://127.0.0.1:8000 (i.e login page)

case1:
here, u can click the public filelist and get accesses to-
/files (ie index.blade)
dispalys the table of files with public access by all users
without login auhtnetication
u also direct to home from here if u are loggedin

case2:
if u are a new user goto register page by clicking register link
after registration

login through login page i.e http://127.0.0.1:8000
after loging in u are redirect to /home (ie home.blade)
here, u upload ur files with acess specification.
file are stored in storage(server)
A files table is created with name,type,size,uploader,access,updated_at; 

/home contions two links which links to index.blade and filelist.blade;
case1:
so, /files (ie index.blade)
dispalys the table of files with public access by all users
u also direct to home from here if u are loggedin
case2:
next, /file (ie filelist.bladr)
displays the table of files uploaded by a user(both public and private)

u have logout button in all the views in nav bar at right side corner under username(if u are logged)
click logout 
directed to http://127.0.0.1:8000 (ie starting page or actual index page of this application)

thakyou for using fvcs

things to be added soon-
//version control to the files (uploaded by same user if same filename)
// ip address of user, hashvalue of file and download link to be added to files table
//deletion button for deleting the files(optional)
