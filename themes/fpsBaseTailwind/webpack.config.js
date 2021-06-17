const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const OptimizeCssAssetsPlugin = require( 'optimize-css-assets-webpack-plugin' );
const cssnano = require( 'cssnano' ); // https://cssnano.co/
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
const UglifyJsPlugin = require( 'uglifyjs-webpack-plugin' );
// JS Directory path.
const JS_DIR = path.resolve( __dirname, 'assets/src/js' );
const BUILD_DIR = path.resolve( __dirname, 'assets/dist' );

/**
 * Note: argv.mode will return 'development' or 'production'.
 */
const plugins = ( argv ) => [
	new CleanWebpackPlugin( {
		cleanStaleWebpackAssets: ( argv.mode === 'production' ) // Automatically remove all unused webpack assets on rebuild, when set to true in production. ( https://www.npmjs.com/package/clean-webpack-plugin#options-and-defaults-optional )
	} ),
	new MiniCssExtractPlugin( {
		filename: 'css/tailwind.css'
	} ),
];
const rules = [
	{
		test: /\.js$/,
		include: [ JS_DIR ],
		exclude: /node_modules/,
		use: {
              loader: 'babel-loader'
        }
	},
	{
		test: /\.css$/,
		use: [
			MiniCssExtractPlugin.loader,
            {
                loader: 'css-loader',
                options: {
                    importLoaders: 1
                }
            },
            {
                loader: 'postcss-loader'
            }
		]
	},
	{
		test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
		use: {
			loader: 'file-loader',
			options: {
				name: '[path][name].[ext]',
				publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../'
			}
		}
	},
    {
        test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/i,
        use: {
            loader: "url-loader",
            options: {
                limit: 10000,
                name: "[name].[ext]",
                outputPath: BUILD_DIR + "/fonts/",
                publicPath: BUILD_DIR + "/fonts/",
            }
        }
    }
];

module.exports = ( env, argv ) => ({
	entry: JS_DIR + '/index.js',
	output: {
        path:  BUILD_DIR + "/",
        filename: "main.js",
    },
    /**
	 * A full SourceMap is emitted as a separate file ( e.g.  main.js.map )
	 * It adds a reference comment to the bundle so development tools know where to find it.
	 * set this to false if you don't need it
	 */
	devtool: 'source-map',
	module: {
		rules: rules,
	},
	optimization: {
		minimizer: [
			new OptimizeCssAssetsPlugin( {
				cssProcessor: cssnano
			} ),
			new UglifyJsPlugin( {
				cache: false,
				parallel: true,
				sourceMap: false
			} )
		]
	},
	plugins: plugins( argv ),
	externals: {
		jquery: 'jQuery'
	}
});