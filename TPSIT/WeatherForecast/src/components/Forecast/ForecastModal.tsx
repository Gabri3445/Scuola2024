import { useEffect, useState } from "react";
import ForecastSingleElement from "./ForecastSingleElement";
import { HourlyData } from "../../weatherApi/api";
import Graph from "./Graph";

interface Props {
    date: Date;
    temperature: number[];
    precipitation: number;
    wmo: string
    hourlyData: string,
    index: number
}

const ForecastModal = ({ date, temperature, precipitation, wmo, hourlyData, index }: Props) => {

    const [HourlyData, setHourlyData] = useState<HourlyData>();

    useEffect(() => {
        async function convertToObject() {
            const hourly: HourlyData = await JSON.parse(hourlyData);
            const startingHour = index * 24;
            const endingHour = startingHour + 24;
            hourly.time = hourly.time.slice(startingHour, endingHour);
            hourly.temperature_2m = hourly.temperature_2m.slice(startingHour, endingHour);
            hourly.relativehumidity_2m = hourly.relativehumidity_2m.slice(startingHour, endingHour);
            hourly.apparent_temperature = hourly.apparent_temperature.slice(startingHour, endingHour);
            hourly.precipitation_probability = hourly.precipitation_probability.slice(startingHour, endingHour);
            hourly.weathercode = hourly.weathercode.slice(startingHour, endingHour);
            hourly.surface_pressure = hourly.surface_pressure.slice(startingHour, endingHour);
            hourly.visibility = hourly.visibility.slice(startingHour, endingHour);
            hourly.windspeed_10m = hourly.windspeed_10m.slice(startingHour, endingHour);
            hourly.uv_index = hourly.uv_index.slice(startingHour, endingHour);
            hourly.is_day = hourly.is_day.slice(startingHour, endingHour);
            setHourlyData(hourly);
        }
        convertToObject();
    }, [])

    if (HourlyData !== undefined && HourlyData.time.length == 24) {
        return (
            
            <div className="w-3/4 h-3/4 text-white flex flex-col text-4xl bg-gray-900 border-2 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 border-white rounded-2xl ml-auto mr-auto">
                <div className="w-full">
                    <div className="w-3/4 mx-auto">
                        <ForecastSingleElement date={date} temperature={temperature} precipitation={precipitation} wmo={wmo}></ForecastSingleElement>
                    </div>
                </div>
                    <div className="bg-red flex-1 relative h-[20vh]">
                        <Graph hourlyData={HourlyData}></Graph>
                    </div>
            </div>

        );
    }

}

export default ForecastModal;