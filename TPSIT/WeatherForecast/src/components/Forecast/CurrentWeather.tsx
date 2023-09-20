import { useEffect, useState } from "react";
import SingleElement from "./SingleElement";
import decodeWmo from "../../utils/wmo";

interface Props {
    temperature: number;
    wmo: string;
    apparentTemperature: number;
    wind: number;
    humidity: number;
    uv: number;
    visibility?: number;
    pressure?: number;
}

const CurrentWeather = (props: Props) => {
    const [wmo, setWmo] = useState("");

    useEffect(() => {
        setWmo(decodeWmo(props.wmo))
    }, [])

    const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];


    return (
        <>
            <div className="text-white text-5xl px-5 h-1/4">
                <div className="mb-2">Current Weather: {new Date().getDate()} - {daysOfWeek[new Date().getDay()]}</div>
                <div className="text-9xl flex border-2 border-white rounded-lg content-center pb-4 pl-2 justify-center flex-wrap">
                    {props.temperature}°
                    <div className="text-3xl flex items-end pr-5">
                        {wmo}
                    </div>
                    <SingleElement border={true} label="Feels Like:" value={props.apparentTemperature + "°"} />
                    <SingleElement border={true} label="Wind:" value={props.wind + "km/h"} />
                    <SingleElement border={true} label="Humidity:" value={props.humidity + "%"} />
                    <SingleElement border={true} label="UV:" value={props.uv + ""} />
                    <SingleElement border={true} label="Visibility:" value={props.visibility + "m"} />
                    <SingleElement border={true} label="Pressure:" value={props.pressure + "hPa"} />
                </div>
            </div>
        </>
    )
}

export default CurrentWeather