//article
const express = require("express");
const axios = require("axios");
const cors = require("cors");
const app = express();
const fs = require("fs");

const datanook = fs.readFileSync("./datatest.json");

Array.prototype.randomSite = function () {
  return this[Math.floor(Math.random() * this.length)];
};

const PORT = process.env.PORT || 4000;
app.use(
  cors({
    origin: process.env.CORS_ORIGIN || "*",
  })
);
console.clear();
app.listen(PORT, () => console.log(`Serverr is listening on ${PORT}`));

app.get("/", async (req, res) => {
  try {
    const objX = JSON.parse(datanook);
    //console.log(objX)
    res?.status(200).json({
      NooK_Api: objX,
    });
  } catch (error) {
    console.log(error.message);
    res.status(500).send("Error");
  }
});

app.get("/filerows", async (req, res) => {
  const { fr_id } = req.query;
  try {
    const objX = JSON.parse(datanook);
    const fontPosts = objX.Datasets["Dataset"].filter(
      (nook) => nook["FileRows"] == fr_id
    );
    //console.log(fontPosts)
    res?.status(200).json({
      NooK_Api: fontPosts,
    });
  } catch (error) {
    console.log(error.message);
    res.status(500).send("Error");
  }
});
