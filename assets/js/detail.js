/** @format */

'use strict';

import { api_key, imageBaseURL, fetchDataFromServer } from './api.js';

import { sidebar } from './sidebar.js';
import { createMovieCard } from './movie-card.js';

const movieId = window.localStorage.getItem('movieId');

const pageContent = document.querySelector('[page-content');

sidebar();

const getGenres = function (genreList) {
  const newGenreList = [];
  for (const { name } of genreList) newGenreList.push(name);
  return newGenreList.join(', ');
};

fetchDataFromServer(
  //   `https://api.themoviedb.org/3/movie/${movieId}?api_key=${api_key}&append_to_response=casts,videos,images,releases`,
  `https://api.themoviedb.org/3/movie/${movieId}?api_key=8d00625906c97488b202db66eebf7dd3&append_to_response=casts,videos,images,releases`,
  function (movie) {
    const {
      backdrop_path,
      poster_path,
      title,
      release_date,
      runtime,
      vote_average,
      releases: {
        countries: [{ certification }],
      },
      genres,
      overview,
      casts: { cast, crew },
      videos: { results: videos },
    } = movie;
    document.title = `${title} - Movies`;

    const movieDetail = document.createElement('div');
    movieDetail.classList.add('movie-detail');
    movieDetail.innerHTML = html`
      <div class="backdrop-image" style="background-image: url("${imageBaseURL}${
      'w1280' || 'original'
    }${backdrop_path || poster_path})"></div>

      <figure class="poster-box movie-poster">
        <img
  src="${imageBaseURL}w1280${backdrop_path}"
            alt="${title} poster"
          class="img-cover"
        />
      </figure>

      <div class="detail-box">
        <div class="detail-content">
          <h1 class="heading">${title}</h1>
          <div class="meta-list">
            <div class="meta-item">
              <img
                src="./assets/images/star.png"
                alt="rating"
                width="20"
                height="20"
              />
              <span class="span">${vote_average.toFixed(1)}</span>
            </div>
            <div class="separator"></div>
            <div class="meta-item">${runtime}m</div>
            <div class="separator"></div>
            <div class="meta-item">${release_date.split('-')[0]}</div>
            <div class="meta-item card-badge">${certification}</div>
          </div>

          <p class="genre">${getGenres(genres)}</p>
          <p class="overview">
            ${overview}
          </p>
          <ul class="detail-list">
            <div class="list-item">
              <p class="list-name">Starring</p>
              <p>
               ${getCasts(cast)}
              </p>
            </div>
            <div class="list-item">
              <p class="list-name">Directed By</p>
              <p>Prem Shinde</p>
            </div>
          </ul>
        </div>

        <div class="title-wrapper">
          <h3 class="title-large">Trailers and Clips</h3>
        </div>
        <div class="slider-list">
          <div class="slider-inner">
            <div class="video-card"></div>
            <div class="video-card"></div>
            <div class="video-card"></div>
            <div class="video-card"></div>
            <div class="video-card"></div>
          </div>
        </div>
      </div>
    `;
  }
);
