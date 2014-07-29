## HEAD

### Major Enhancements

  * 28/07/2014: The CSS style of the website has been changed to bootswatch. The master branch was replaced by the version2.0 branch (following this http://stackoverflow.com/questions/2862590/how-to-replace-master-branch-in-git-entirely-from-another-branch).
  * 29/07/2014: Generation of post using the script provided by jbranchaud (https://github.com/jbranchaud/mybin/blob/master/jekyll-post).
		- To create a new post execute the python script as follows: $ python _bin/jekyll-post "Post title" -D _post/blog

### Minor Enahncements
  * The Markdown interpreter was changed from Maruku to Kramdown (#1)

### Bug Fixes

### Site Enhancements
  * 28/07/2014: Change the CSS style. Commands used:  
		$ rake theme:switch name="bootswatch"
		$ rake theme:install name="bootswatch"

### Compatibility updates

