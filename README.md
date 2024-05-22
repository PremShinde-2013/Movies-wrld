# Movies Wrld

Movies Wrld is a dynamic web application that allows users to browse and search for movies using data from The Movie Database (TMDB) API. With a user-friendly interface, it provides detailed information about movies, including ratings, descriptions, and more.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Technologies](#technologies)
- [APIs Used](#apis-used)
- [Contributing](#contributing)
- [License](#license)

## Features

- Browse popular and trending movies.
- Search for movies by title.
- View detailed information about each movie.
- Responsive design for optimal viewing on all devices.

## Installation

To get started with Movies Wrld, follow these steps:

1. **Clone the repository:**

   ```sh
   git clone https://github.com/yourusername/movies-wrld.git
   cd movies-wrld
   ```

2. **Install dependencies:**

   ```sh
   composer install
   ```

3. **Set up your environment variables:**

   Create a `.env` file in the root directory and add your TMDB API key:

   ```sh
   TMDB_API_KEY=your_tmdb_api_key
   ```

4. **Start the development server:**

   ```sh
   php -S localhost:8000
   ```

## Usage

Once the development server is running, you can access the application at `http://localhost:8000`.

- Browse the home page to see popular and trending movies.
- Use the search bar to find movies by title.
- Click on a movie to view detailed information.

## Technologies

Movies Wrld is built with the following technologies:

- [PHP](https://www.php.net/) - A popular general-purpose scripting language that is especially suited to web development.
- [TMDB API](https://www.themoviedb.org/documentation/api) - API for accessing a wide range of movie data.

## APIs Used

- **TMDB API:** Provides comprehensive information about movies, including ratings, descriptions, release dates, and more.

## Contributing

We welcome contributions to Movies Wrld! If you'd like to contribute, please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Commit your changes and push to your branch.
4. Open a pull request with a detailed description of your changes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
