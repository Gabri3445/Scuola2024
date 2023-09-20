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
    const [index, setIndex] = useState(-1)
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

      const handleClick = (index: number) => {
        setIndex(index)
      }
      

    if (DailyData != undefined && HourlyData != undefined) {
        return (
            <>
                <div className="text-white text-5xl px-5 overflow:flex flex-col h-3/4 hidden">
                    <div className="mb-2">Forecast:</div>
                    <div className="flex flex-col border-2 text-4xl h-full border-white rounded-lg pb-4 pl-2 flex-grow overflow-auto mb-4">
                        {DailyData.time.map((_, index) => (
                            <ForecastSingleElement key={index} onClick={() => handleClick(index)} date={new Date(DailyData.time[index])} precipitation={DailyData.precipitation_probability_max[index]} temperature={[DailyData.temperature_2m_min[index], DailyData.temperature_2m_max[index]]}></ForecastSingleElement>
                        ))}
                    </div>
                </div>
            </>
        )
     }
}

export default Forecast;