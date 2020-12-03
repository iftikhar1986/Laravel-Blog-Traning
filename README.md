Q1: What is composer and why we use it?
Answer : Composer is a dependency manager, dependency is a package third party modules or plugins which are used to run the applications.

---

Q2:what command should run after make a manuel change in composer.json ?
Answer : composer update

---

Q3:Can we Change the View Folder name to access our blade files?
Answer : Yes, it's possible to rename the views folder. For this, we need to change the folder name first. Then we will go to config folder. At the bottom of the folder, we will get the view.php file. There we will set our new folder. 'paths' => [
resource_path('new folder name instead of view'),
],

---

Q4 : What is the Use of api.php?
Answer : api.php allow us to build APIs, we can make GET/POST/DELETE/PUT/PATCH to interact with other API or databases.
