//article
const express = require("express");
const axios = require("axios");
const cors = require("cors");
const app = express();
const fs = require('fs');

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
  const { page } = req.query;
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
