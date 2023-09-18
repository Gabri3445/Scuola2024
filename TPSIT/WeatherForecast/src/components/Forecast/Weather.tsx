import { useState, useEffect } from "react";
import { WeatherData, getForecastTemperature } from "../../weatherApi/api";
import CurrentWeather from "./CurrentWeather";

interface Props {
    latitude: number;
    longitude: number;
}

const Weather = ({latitude, longitude}: Props) => {

    const [forecast, setForecast] = useState<WeatherData>()
    const [hour, setHour] = useState(0);

    useEffect(() => {
        async function getForecast() {
                setForecast(await getForecastTemperature(latitude, longitude))
        }
        getForecast()
        const date = new Date();
        setHour(date.getHours())
    }, [])
    
    if(forecast) {
        return (
            <div className="flex flex-col text-white md:justify-center items-center h-full">
                <div className="h-5/6 w-5/6 bg-black/75 rounded-2xl">
                    <CurrentWeather temperature={forecast.current_weather.temperature} 
                    wmo={"" + forecast.current_weather.weathercode} 
                    apparentTemperature={forecast.hourly.apparent_temperature[hour]} 
                    wind={forecast.current_weather.windspeed}
                    humidity={forecast.hourly.relativehumidity_2m[hour]}
                    uv={forecast.hourly.uv_index[hour]}
                    visibility={forecast.hourly.visibility[hour]}
                    pressure={forecast.hourly.surface_pressure[hour]}
                    ></CurrentWeather>
                </div>
            </div>
        )
    }
}

export default Weather;