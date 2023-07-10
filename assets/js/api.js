/** @format */

'use strict';

const api_key = '8d00625906c97488b202db66eebf7dd3';
// const api_key = '84c411c71ab3f9acc6867fbf407c1ef5';
const imageBaseURL = 'https://image.tmdb.org/t/p/';

// fetch data

const fetchDataFromServer = function (url, callback, optionalParam) {
  fetch(url)
    .then((response) => response.json())
    .then((data) => callback(data, optionalParam));
};

export { imageBaseURL, api_key, fetchDataFromServer };
