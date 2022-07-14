const path = require("path");
const webpack = require("webpack");

module.exports = {
  mode: "development",
  context: path.resolve(__dirname, "assets/source/scripts"),
  entry: {
    main: ["./main.js"],
  },
  output: {
    path: path.resolve(__dirname, "assets/js"),
    filename: "[name].js",
  },
  externals: {
    jquery: "jQuery",
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
      "window.jQuery": "jquery",
    }),
  ],
  devtool: "source-map",
  watch: true,
};
