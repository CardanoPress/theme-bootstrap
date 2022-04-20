module.exports = ( context ) => {
	const options = context.options;
	const plugins = {};

	if ( ! options.minified ) {
		plugins.autoprefixer = {
			remove: false,
		};
	} else {
		plugins.cssnano = {
			preset: [ 'default', {
				discardComments: {
					removeAllButFirst: true,
				},
			} ],
		};
	}

	return { plugins };
};
