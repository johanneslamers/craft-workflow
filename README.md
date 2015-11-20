# Craft CMS Local install and Gulp workflow

## features

- Installs latest version of Craft CMS
- Installs Zurb Foundation 6 for sites
- Installs Multi-environment config
- Sass compilation and prefixing
- Built-in BrowserSync server
- For production builds:
  - CSS compression
  - JavaScript compression
  - Image compression

- - -

Requires [Nodejs](http://nodejs.org/) and [Gulp](http://gulpjs.com/)


### Manual Setup



To manually set up the Craft, first download it with Git:

```bash
git clone https://github.com/johanneslamers/craft-workflow projectname
```

Then open the folder in your command line, and install the needed dependencies:

```bash
cd projectname
bash install.sh
```

```bash
npm install
bower install
```

Finally, run `**npm start**` to run Gulp. Your finished site will be created in a folder called `public`, viewable at this URL:

```
http://localhost:8000
```

To create compressed, production-ready assets, run
**`npm run build`**


Tasks
-

_note: Don't touch the templates folder in ```/craft``` it will be overwritten on build. Work on the ones in ```app/templates```_

* ```gulp watch``` to start the watch task, at the moment you will have to use a browser extention for live reload.

* ```gulp``` to build for production, all the magic happens and template files will be moved to ```craft/templates```, resources (images/js/css) will be concatinated, minified and wrapped in silk before they end up in ```/public```.

* ```gulp bower``` Injects bower dependencies into ```_layout.html```. This task will run on ```gulp watch``` as well.
_Remember to ```--save``` when installing components_.
