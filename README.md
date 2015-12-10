# Grav PhotoSwipe Plugin 

This is a quick and dirty implementation of Dmitry Semenov's [PhotoSwipe](http://photoswipe.com) gallery for the [Grav](http://github.com/getgrav/grav) CMS.

## Install 

1) Clone the repository to your `plugins` folder

	git clone https://github.com/dersimn/grav-plugin-photoswipe photoswipe

2) Go inside the folder that you cloned and install dependencies

	cd photoswipe
	git submodule init
	git submodule update

4) Activate the plugin by copying `photoswipe.yaml` containing the default settings to your config folder

	cp photoswipe.yaml ../../config/plugins

## License

PhotoSwipe itself was licensed by Dmitry Semenov under MIT license with the exception that you should not create a public WordPress plugin based on it. I'm therefore releasing my plugin under MIT license as well.

Attribution is not required, but much appreciated.
