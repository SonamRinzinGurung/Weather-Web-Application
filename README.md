# Weather-Web-Application
This application forecasts the weather of a certain city by using the OpenWeatherMap API.
The weather data is extracted using the API call, the data from the API is stored in the MySQL database. The browser gets the data and stores it in the local storage. The data displayed on the browser is retrieved from the local storage as long as the data is fresh enough. When the data is old, new weather data is retrieved from the API.
