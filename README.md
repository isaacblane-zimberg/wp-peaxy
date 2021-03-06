# Peaxy Wordpress Theme

You'll first need to install node.js on your machine: https://nodejs.org/dist/v8.10.0/node-v8.10.0.pkg

This theme's styles are written in SCSS and is compiled using Gulp. To make changes, you will need to clone the repositiory or download the zip file.

Once you have it on your local machine, open the terminal and navigate to the theme directory with:

`cd path/to/directory`

Then you'll install the dependencies with:

`npm install`

Now you can run the command `gulp`. This will watch the SCSS files for changes and recompile the `style.css` file each time you save. Use `ctrl-c` to exit the running process.

You can now upload your changed files to the staging site using FTP.

Now you'll want to push all your changes back up to Github, using these commands:

`git add -A` - this "stages" all your changes

`git commit -m "Type a short description of what you changed"` - commits your changes as a new version

`git push` - Pushes your changes back up to Github
