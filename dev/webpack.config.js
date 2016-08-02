var conf = require('./local.config.js')
var webpack = require("webpack")
var autoprefixer = require('autoprefixer')
var rupture = require('rupture')
var typographic = require('typographic')
var lost = require('lost')

webpackConfig = {
	entry: './main.js',

	output: {
		path: conf.assetsPath,
		publicPath: conf.assetsUrl,
		filename: "[name].js"
	},

	module: {
		loaders: [
			{test: /\.styl$/, loader: 'style!css!postcss!stylus'},
			{test: /\.(jpe?g|png|gif)$/i, loader: 'url?limit=50000&name=[name].[ext]?[hash]'},
			{test: /\.(svg|eot|ttf|woff|woff2)($|\?)/i, loader: 'url?limit=80000&name=[name].[ext]?[hash]'}
		],

		preLoaders: [
			{test: /\.js$/, exclude: /node_modules/, loader: 'jshint-loader'}
		]
	},

	postcss: function() {
		return [autoprefixer, lost]
	},

	stylus: {
		use: [rupture(), typographic()]
	},

	plugins: [],

	jshint: {
		asi: true
	}
}

if(conf.env === 'staging' || conf.env === 'production') {
	if(conf.env === 'production') {
		webpackConfig.plugins.push(
			new webpack.DefinePlugin({
				'process.env': {NODE_ENV: '"production"'}
			})
		)
	}

	webpackConfig.plugins.push(
		new webpack.optimize.UglifyJsPlugin({
			compress: {warnings: false}
		})
	)

	webpackConfig.output.chunkFilename = '[id][hash].js'
}

module.exports = webpackConfig
