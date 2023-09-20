import { useState, useEffect } from "react";
import { DailyData, HourlyData } from "../../weatherApi/api";
import ForecastSingleElement from "./ForecastSingleElement";

interface Props {
    HourlyData : string;
    DailyData: string;
}

const Forecast = (props: Props) => {
    const [HourlyData, setHourlyData] = useState<HourlyData | null>();
    const [DailyData, setDailyData] = useState<DailyData | null>();
    const forecastLength = 7; //Change if needed

    useEffect(() => {
        async function convertToJson() {
            setHourlyData(await JSON.parse(props.HourlyData));
            setDailyData(await JSON.parse(props.DailyData));
        }
        convertToJson();
        
    }, [])
    useEffect(() => {
        if (DailyData && DailyData.time.length == forecastLength) {
            const dailyDataCopy = JSON.parse(JSON.stringify(DailyData))
            dailyDataCopy.time.shift();
            dailyDataCopy.temperature_2m_max.shift();
            dailyDataCopy.temperature_2m_min.shift();
            dailyDataCopy.precipitation_probability_max.shift();
            dailyDataCopy.weathercode.shift();
            setDailyData(dailyDataCopy);
            //TODO: do the same for hourly data but for 24 hours
        }
      }, [DailyData]);
      

    if (DailyData != undefined && HourlyData != undefined) {
        return (
            <>
                <div className="text-white text-5xl px-5 overflow:flex flex-col h-3/4 hidden">
                    <div className="mb-2">Forecast:</div>
                    <div className="flex flex-col border-2 text-4xl border-white rounded-lg pb-4 pl-2 flex-grow overflow-auto mb-4">
                        <ForecastSingleElement date={new Date(DailyData.time[0])} temperature={[DailyData.temperature_2m_min[1], DailyData.temperature_2m_max[1]]} precipitation={DailyData.precipitation_probability_max[0]}></ForecastSingleElement>
                    </div>
                </div>
            </>
        )
     }
}

export default Forecast;
/*
    interface DailyData {
    time: string[];
    weathercode: number[];
    temperature_2m_max: number[];
    temperature_2m_min: number[];
    precipitation_probability_max: number[];
  }*/