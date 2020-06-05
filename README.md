# Grav PhotoSwipe Plugin 

This is a quick and dirty implementation of Dmitry Semenov's [PhotoSwipe](http://photoswipe.com) gallery for the [Grav](http://github.com/getgrav/grav) CMS. Documentation is at a basic level, see source code for all details.

## Install 

1) Clone the repository to your `plugins` folder

```
cd /var/www/grav/user/plugins
git clone https://github.com/dersimn/grav-plugin-photoswipe photoswipe
```

2) Go inside the folder that you cloned and install dependencies

```
cd photoswipe
git submodule init
git submodule update
```

4) Activate the plugin by copying `photoswipe.yaml` containing the default settings to your config folder

```
cp photoswipe.yaml ../../config/plugins
```

If you're using the Grav Admin plugin, you can 

## Usage

Add `lightbox` http parameter to every image that you want to include in the lightbox gallery. Simply:

```markdown
![Caption text](some_picture.png?lightbox)
```

Maybe you want to resize the image to get a thumbnail-ish experience:

```markdown
![Caption text](some_picture.png?lightbox&resize=200,200)
```

The complete magic of this plugin happens in [this file](js/activate.js), see source code for further information.

### Global settings

Enable/disable for all pages by editing `/var/www/grav/user/config/plugins/photoswipe.yaml`. Alternatively use the Grav Admin plugin.

```
enabled: true
active: true
```

- `enabled`: Globally enable/disable the plugin. This setting can NOT be overridden by the page header.
- `active`: Default setting for all pages. This can be overridden by the page header.

### Override settings for each page

In the header of a page add

```
photoswipe:
    active: false
```

to enable/disable the plugin for a certain page.


## License

PhotoSwipe itself was licensed by Dmitry Semenov under MIT license with the exception that you should not create a public WordPress plugin based on it. I'm therefore releasing my plugin under MIT license as well.

Attribution is not required, but much appreciated.
