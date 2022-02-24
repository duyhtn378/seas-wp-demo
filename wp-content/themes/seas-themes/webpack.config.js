const path = require("path");

module.exports = {
  entry: {
    App: "./assets/js/scripts.js",
  },
  output: {
    path: path.resolve(__dirname, "assets/js"),
    filename: "scripts-bundled.js",
  },
  mode: "development",
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },
    ],
  },
};
