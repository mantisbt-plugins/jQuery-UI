jQuery UI plugin for MantisBT
-----------------------------

This plugin is needed to support jQuery-UI in Mantis from version 2.2 and up.
For Mantis 1.3 up to 2.1, jQuery-UI was included by default so no plugin was required.
For mantis 1.2 versions, the old version of this plugin was required, which is kept as a separate branch.

Instructions for updating

- Download a new zip file
- Extract the min.js, min.css and all image files in the files directory
- Rename files to avoid having several dots in filename (incompatible with plugin_file)
- In the css file, replace all reference to _url("images/_ with _url("plugin_file.php?file=jQueryUI/_
