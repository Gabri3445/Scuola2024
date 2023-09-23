import { useEffect, useState } from "react";
import ForecastSingleElement from "./ForecastSingleElement";
import { HourlyData } from "../../weatherApi/api";
import Graph from "./Graph";

interface Props {
    date: Date;
    temperature: number[];
    precipitation: number;
    wmo: string
    hourlyData: string
}

const ForecastModal = ({ date, temperature, precipitation, wmo, hourlyData }: Props) => {

    const [HourlyData, setHourlyData] = useState<HourlyData>();

    useEffect(() => {
        async function convertToObject() {
            const hourly: HourlyData = await JSON.parse(hourlyData);
            hourly.time = hourly.time.slice(0, 24);
            hourly.temperature_2m = hourly.temperature_2m.slice(0, 24);
            hourly.relativehumidity_2m = hourly.relativehumidity_2m.slice(0, 24);
            hourly.apparent_temperature = hourly.apparent_temperature.slice(0, 24);
            hourly.precipitation_probability = hourly.precipitation_probability.slice(0, 24);
            hourly.weathercode = hourly.weathercode.slice(0, 24);
            hourly.surface_pressure = hourly.surface_pressure.slice(0, 24);
            hourly.visibility = hourly.visibility.slice(0, 24);
            hourly.windspeed_10m = hourly.windspeed_10m.slice(0, 24);
            hourly.uv_index = hourly.uv_index.slice(0, 24);
            hourly.is_day = hourly.is_day.slice(0, 24);
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