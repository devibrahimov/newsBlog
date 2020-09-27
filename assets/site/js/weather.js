 
let appId = '28343f4dbc3e93665ab42794b739a0b8';

let units ='imperial';
let searchMethod = 'q';


function seachWeather(searchTerm){
fetch(`https://api.openweathermap.org/data/2.5/weather?${searchMethod}=${searchTerm}&APPID=${appId}&units=${units}`).then(result =>{
    return result.json();
}).then(result => {
    init(result);
})
}//end seachMethod



function init(resultFromServer){
    //console.log(resultFromServer);
    switch (resultFromServer.weather[0].main) {

            case 'Thunderstorm':
            document.getElementById('weatherContainer').style.backgroundImage = "url('./assets/site/images/weather/Thunderstorm.jpg')";
            break;
            case 'Drizzle':
            document.getElementById('weatherContainer').style.backgroundImage = "url('./assets/site/images/weather/Drizzle.jpg')";
            break;
            case 'Rain':
            document.getElementById('weatherContainer').style.backgroundImage = "url('./assets/site/images/weather/Rain.jpg')";
            break;
            case 'Snow':
            document.getElementById('weatherContainer').style.backgroundImage = "url('./assets/site/images/weather/Snow.jpg')";
            break;
            case 'Atmosphere':
            document.getElementById('weatherContainer').style.backgroundImage = "url('./assets/site/images/weather/Atmosphere.jpg')";
            break;
            case 'Clear':
            document.getElementById("weatherContainer").style.backgroundImage  = "url('./assets/site/images/weather/Clear.jpg')";
            break;
            case 'Clouds':
            document.getElementById('weatherContainer').style.backgroundImage = "url('./assets/site/images/weather/Clouds.jpg')";
            break;
        default:
        document.getElementById('weatherContainer').style.backgroundImage = "url('./assets/site/images/weather/weathermap.jpeg')";
            break;
    }
    let weatherDescriptionHeader = document.getElementById('weatherDescriptionHeader');
    let temperatureElement = document.getElementById('temperature');
    let weatherIcon =  document.getElementById('documenticonimg');
    let cityHeader =  document.getElementById('cityHeader');
    let windspeed =  document.getElementById('windspeed'); 

    weatherIcon.src = 'http://openweathermap.org/img/w/'+resultFromServer.weather[0].icon+'.png';
    let resultDescription = resultFromServer.weather[0].description ;
    //english olan aciqlamar azerbaycancaya cevrilecek
    switch (resultDescription) {
        case 'overcast clouds': resultDescription = 'Buludlu'; break;
        case 'clear sky': resultDescription = 'Açıq Səma'; break;
        case 'few clouds': resultDescription = 'Az Buludlu'; break;
        case 'overcast clouds': resultDescription = 'Dağılmış Buludlar'; break;

        default:
            break;
    }
    weatherDescriptionHeader.innerText = resultDescription;
    let temperature = Math.floor( (resultFromServer.main.temp-32 )/1.8);
    temperatureElement.innerHTML = temperature +'&#176';

    windspeed.innerHTML ='Küləyin sürəti '+ Math.floor(resultFromServer.wind.speed) + 'm/s';
    cityHeader.innerHTML = resultFromServer.name ; 


    

}//end init function 

let aa = 'Baku';
seachWeather(aa);