import { useEffect, useState } from "react";

interface Props {
    temperature: number;
    wmo: string;
    apparentTemperature?: number;
    wind?: number;
    humidity?: number;
    uv?: number;
    visibility?: number;
    pressure?: number;
}

const CurrentWeather = (props: Props) => {
    const [wmo, setWmo] = useState("");

    useEffect(() => {
        setWmo(decodeWmo(props.wmo))
    }, [])


    const decodeWmo = (wmo: string): string => {
        switch (wmo) {
            case "0":
                return "Clear sky"
            case "1":
            case "2":
            case "3":
                return "Cloudy"
            case "45":
            case "48":
                return "Fog"
            case "51":
            case "53":
            case "55":
                return "Drizzle"
            case "56":
            case "57":
                return "Freezing Drizzle"
            case "61":
            case "63":
            case "65":
                return "Rain"
            case "66":
            case "67":
                return "Freezing Rain"
            case "71":
            case "73":
            case "75":
                return "Snow fall"
            case "77":
                return "Snow grains"
            case "80":
            case "81":
            case "82":
                return "Rain showers"
            case "85":
            case "86":
                return "Snow showers"
            case "95":
                return "Thunderstorm"
            case "96":
            case "99":
                return "Thunderstorm with heavy hail"
        }
        return "Nicolo"
    }


        return (
            <>
                <div className="text-white text-5xl px-5">
                    Current Weather:
                    <div className="text-9xl flex border-2 border-white rounded-lg content-center pb-4">
                        {props.temperature}°
                        <div className="text-3xl flex items-end">
                            {wmo}
                        </div>
                    </div>
                </div>
            </>
        )
    }

export default CurrentWeather