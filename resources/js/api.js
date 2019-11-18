'use strict';
require("dotenv").config();
const yelp = require('yelp-fusion');

// Place holder for Yelp Fusion's API Key. Grab them
// from https://www.yelp.com/developers/v3/manage_app
console.log(process.env);
const apiKey = 'JgIp1G5zbCLMts3rW2reGM_kkyMZgVjUP79EIg_7ZXOtnjr_9yuRuOqyejys0SqO_Bffo6dzU1vBQfA5DUHxqGKwexuY7rWUSAhPYyDmxmnVMypLhWog9Tmygg7TXXYx';

const searchRequest = {
  term: 'Four Barrel Coffee',
  location: 'san francisco, ca'
};

const client = yelp.client(apiKey);

client.search(searchRequest).then(response => {
  const firstResult = response.jsonBody.businesses[0];
  const prettyJson = JSON.stringify(firstResult, null, 4);
  // console.log(prettyJson);
}).catch(e => {
  // console.log(e);
});