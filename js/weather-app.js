let weather = {
  apiKey: "207821d74f9580114631db0bdcdaa0e7",
  fetchWeather: function (city) {
    fetch(
      "https://api.openweathermap.org/data/2.5/weather?q=" +
        city +
        "&units=metric&appid=" +
        this.apiKey
    )
      .then((response) => response.json())
      .then((data) => console.log(data));
  },
  displayWeather: function (data) {},
};
