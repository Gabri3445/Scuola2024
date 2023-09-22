import { useState, useEffect, ReactElement } from "react";
import SingleElement from "./SingleElement";
import { WiDaySunny, WiCloud, WiFog, WiRaindrops, WiRain, WiSnow, WiThunderstorm, WiNightSnowThunderstorm } from "react-icons/wi";


interface Props {
    date: Date;
    temperature: number[];
    precipitation: number;
    wmo: string
    onClick?: () => void
}

const ForecastSingleElement = ({ date, temperature, precipitation, wmo, onClick }: Props) => {
    const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const [icon, setIcon] = useState<ReactElement>()

    useEffect(() => {
        switch (wmo) {
            case "Clear sky":
                setIcon(<WiDaySunny />)
                return;
            case "Cloudy":
                setIcon(<WiCloud></WiCloud>)
                return;
            case "Fog":
                setIcon(<WiFog></WiFog>)
                return;
            case "Drizzle":
            case "Freezing Drizzle":
                setIcon(<WiRaindrops></WiRaindrops>)
                return;
            case "Rain":
            case "Freezing Rain":
            case "Rain showers":
                setIcon(<WiRain></WiRain>)
                return;
            case "Snow fall":
            case "Snow grains":
            case "Snow showers":
                setIcon(<WiSnow></WiSnow>)
                return;
            case "Thunderstorm":
                setIcon(<WiThunderstorm></WiThunderstorm>)
                return;
            case "Thunderstorm with heavy hail": 
                setIcon(<WiNightSnowThunderstorm></WiNightSnowThunderstorm>)
                return;
            default:
                setIcon(<WiCloud></WiCloud>)
                return;
        }
    }, [])



    return (

        <>
            <div onClick={onClick} className="border-2 h-44 border-white rounded-lg mt-4 pb-2 flex flex-row justify-center items-center w-full cursor-pointer">
                <div className="mr-5">{icon}</div>
                <div className="mr-5">
                    {date.getDate()} - {daysOfWeek[date.getDay()]}
                </div>
                <SingleElement label="Min:" value={temperature[0] + "°"}></SingleElement>
                <SingleElement label="Max:" value={temperature[1] + "°"}></SingleElement>
                <SingleElement label="Precipitation:" value={precipitation + "%"}></SingleElement>
            </div>
        </>
    )
}

export default ForecastSingleElement;