Using this extension, you can load multiple instances of installed modules within it. it can be used as replacement for standard html module (based on that actually) and used as a simple page builder.

for example you can
1- create any module you like to use, 
2- add an instance of exhtm to your home page,
3- in the editor, use this shortcode to injected into your html code when page loads :
[code][{"module_id" : xxx , "module_type" : "xxx"}][/code]

assume you want to add a module for displaying latest products of your store, simply create new instance of latest module and configure its setting, there is no need to add it to any layout. 
then create new instance of [b]exhtml[/b] and add it to any position of any layout that you like. if id of created latest module is 42, then use [{"module_id" : 42 , "module_type" : "latest"}] shortcode for loading latest module within exhtml instance.
easy and simple!

[img]https://image.opencart.com/original/587780c286873.jpg[/img]

you can create any custom html layout in exhtml module and load any module you like in it for building customized layout for your pages.

if you enjoy it, please let me know.

exhtml on github:
[url=https://github.com/nasserman/exhtml][/url]