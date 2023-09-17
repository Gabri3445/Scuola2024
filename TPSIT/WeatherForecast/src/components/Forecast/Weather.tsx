import { useState, useEffect } from "react";
import { WeatherData, getForecastTemperature } from "../../weatherApi/api";
import CurrentWeather from "./CurrentWeather";

interface Props {
    latitude: number;
    longitude: number;
}

const Weather = ({latitude, longitude}: Props) => {

    const [forecast, setForecast] = useState<WeatherData>()

    useEffect(() => {
        async function getForecast() {
            setForecast(await getForecastTemperature(latitude, longitude))
        }
        getForecast()
    }, [])


    return (
        <div className="flex flex-col text-white justify-center items-center h-full">
            <div className="h-5/6 w-5/6 bg-black/75 rounded-2xl">
                <CurrentWeather temperature={24} wmo={"0"}></CurrentWeather>
            </div>
        </div>
    )
}

export default Weather;