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

    useEffect(() => {
        async function convertToJson() {
            setHourlyData(JSON.parse(props.HourlyData));
            setDailyData(JSON.parse(props.DailyData));
        }
        convertToJson();
    }, [])

    if (HourlyData !== null && DailyData !== null) {
        return (
            <>
                <div className="text-white text-5xl px-5 flex-1 flex flex-col">
                    <div className="mb-2">Forecast:</div>
                    <div className="flex border-2 text-4xl border-white rounded-lg pb-4 pl-2 h-full flex-1 overflow-auto mb-4">
                        <ForecastSingleElement></ForecastSingleElement>
                    </div>
                </div>
            </>
        )
     }
}

export default Forecast;