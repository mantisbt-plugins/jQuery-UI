jQuery UI plugin for MantisBT
-----------------------------

Provides access to the jQuery UI library in a single dependency (mantisbt-1.2.x only).


Instructions for updating

- Download a new zip file
- Extract the min.js, min.css and all image files in the files directory
- Rename files to avoid having several dots in filename (incompatible with plugin_file)
- In the css file, replace all reference to _url("images/_ with _url("plugin_file.php?file=jQueryUI/_
